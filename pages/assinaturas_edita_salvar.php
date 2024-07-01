<?php
    include('conexao.php');

    //Função para testar existência do ID, tentando a função GET
    if(!isset($_GET['id'])){
        echo"Usuário não informado";
        exit();
    }

    //Salvando o ID para busca
    $id_assinaturas = $_GET['id'];

    //Salvando os novos dados
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $plano               = $_POST['plano'];
        $data_inicio         = $_POST['data_inicio'];
        $data_fim            = $_POST['data_fim'];
        $data_cadastro       = $_POST['data_cadastro'];
        $data_atualizacao    = $_POST['data_atualizacao'];

        $sql = "UPDATE assinaturas SET plano= '$plano', 
        data_inicio         = '$data_inicio',  
        data_fim            = '$data_fim', 
        data_cadastro       = '$data_cadastro', 
        data_atualizacao    = '$data_atualizacao' 
        WHERE id_assinaturas  = '$id_assinaturas'";
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }
    }
?>