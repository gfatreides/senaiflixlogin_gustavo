<?php
    include('conexao.php');

    //Função para testar existência do ID, tentando a função GET
    if(!isset($_GET['id'])){
        echo"Usuário não informado";
        exit();
    }

    //Salvando o ID para busca
    $id_usuarios = $_GET['id'];

    //Salvando os novos dados
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $nome               = $_POST['nome'];
        $usuario            = $_POST['usuario'];
        $senha              = $_POST['senha'];
        $email              = $_POST['email'];
        $data_cadastro      = $_POST['data_cadastro'];
        $data_atualizacao   = $_POST['data_atualizacao'];
        $status             = 0; 

        $sql = "UPDATE usuarios SET nome='$nome', 
        usuario = '$usuario',  
        senha   = '$senha', 
        email   = '$email', 
        data_cadastro     = '$data_cadastro', 
        data_atualizacao  = '$data_atualizacao'
        WHERE id_usuarios = '$id_usuarios'";

        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }
    }
    
?>