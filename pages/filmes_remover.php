<?php
    include('conexao.php');

    $id_filmes= $_GET['id'];

    $sql = "DELETE FROM filmes WHERE id_filmes='$id_filmes'" ;

    $resultado = $conn->query($sql);
    
    echo "<h1>Cadastro removido com sucesso!</h1>"; 
    echo "<h2>Retorne à guia 'Listar' e tecle F5 para atualizar o cadastro!</h2>"
    //header('location:clientes_listar.php')
?>