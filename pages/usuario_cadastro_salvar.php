
<?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include_once('conexao.php');
    
    $nome       =$_POST['nome'];
    $usuario    =$_POST['usuario'];
    $senha      =$_POST['senha'];
    $email       =$_POST['email'];
    $data_cadastro     =$_POST['data_cadastro'];
    $data_atualizacao  =$_POST['data_atualizacao'];
    $status            =0; 

    $sql = "INSERT INTO usuarios (nome, usuario, senha, email, data_cadastro, data_atualizacao, status) 
    VALUES ('$nome', '$usuario', '$senha', '$email', '$data_cadastro', '$data_atualizacao', '$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "<h1>Cadastro realizado com sucesso!</h1>";
        echo "<h2>Volte à guia 'Usuários' e tecle F5 para atualizar!</h2>";
        
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }}
?>