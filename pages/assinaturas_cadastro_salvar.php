a
<?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include_once('conexao.php');
    
    $plano              = $_POST['plano'];
    $data_inicio        = $_POST['data_inicio'];
    $data_fim           = $_POST['data_fim'];
    $data_cadastro      = $_POST['data_cadastro'];
    $data_atualizacao   = $_POST['data_atualizacao'];
    $status     = 0; 

    $sql = "INSERT INTO assinaturas(plano, data_inicio, data_fim, data_cadastro, data_atualizacao,status)  VALUES ('$plano', '$data_inicio', '$data_fim', '$data_cadastro', '$data_atualizacao', '$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "<h1>Cadastro realizado com sucesso!</h1>";
        echo "<h1>Volte à guia 'Listar' e tecle F5 para atualizar!</h1>";
        
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }
}
?>