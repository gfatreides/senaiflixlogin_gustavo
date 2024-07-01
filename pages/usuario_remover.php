<?php
    include('conexao.php');

    $id_usuarios= $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id_usuarios='$id_usuarios'" ;

    $resultado = $conn->query($sql);
    
    echo "<h1>Cadastro removido com sucesso!</h1>"; 
    echo "<h2>Retorne à guia 'Listar' e tecle F5 para atualizar o cadastro!</h2>"
    //header('location:clientes_listar.php')
?>