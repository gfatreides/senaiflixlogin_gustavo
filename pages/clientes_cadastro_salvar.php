
<?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include_once('conexao.php');
    
    $nome       =$_POST['nome'];
    $cpf        =$_POST['cpf'];
    $endereco   =$_POST['endereco'];
    $bairro     =$_POST['bairro'];
    $cidade     =$_POST['cidade'];
    $estado     =$_POST['estado'];
    $cep        =$_POST['cep'];
    $email      =$_POST['email'];
    $telefone   =$_POST['telefone'];
    $data_cadastro      =date("Y-m-d H:i:s");
    $data_atualizacao   =date("Y-m-d H:i:s");
    $status             =0; 

    $sql = "INSERT INTO clientes(`nome`, `cpf`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `email`, `telefone`, `data_cadastro`, `data_atualizacao`, `status`) 
    VALUES ('$nome', '$cpf', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$email', '$telefone', '$data_cadastro', '$data_atualizacao', '$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "<h1>Cadastro realizado com sucesso!</h1>";
        echo "<h1>Volte à guia 'Listar' e tecle F5 para atualizar!</h1>";
        
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }}
?>