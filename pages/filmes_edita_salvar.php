<?php
    include('conexao.php');

    //Função para testar existência do ID, tentando a função GET
    if(!isset($_GET['id'])){
        echo"Usuário não informado";
        exit();
    }

    //Salvando o ID para busca
    $id_filmes = $_GET['id'];

    //Salvando os novos dados
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $titulo             = $_POST['titulo'];
        $descricao          = $_POST['descricao'];
        $ano_lancamento     = $_POST['ano_lancamento'];
        $genero             = $_POST['genero'];
        $classificacao      = $_POST['classificacao'];
        $data_cadastro      = $_POST['data_cadastro'];
        $data_atualizacao   = $_POST['data_atualizacao'];
        $status             = 0;

        $sql = "UPDATE filmes SET titulo = '$titulo', 
        descricao           = '$descricao',  
        ano_lancamento      = '$ano_lancamento', 
        genero              = '$genero', 
        classificacao       = '$classificacao', 
        data_cadastro       = '$data_cadastro', 
        data_atualizacao    = '$data_atualizacao'
        WHERE id_filmes ='$id_filmes'";
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }
    }
    
?>