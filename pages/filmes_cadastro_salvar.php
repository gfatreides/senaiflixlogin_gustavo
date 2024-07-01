
<?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include_once('conexao.php');
    
    $titulo           = $_POST['titulo'];
    $descricao        = $_POST['descricao'];
    $ano_lancamento   = $_POST['ano_lancamento'];
    $genero           = $_POST['genero'];
    $classificacao    = $_POST['classificacao'];
    $data_cadastro    = $_POST['data_cadastro'];
    $data_atualizacao = $_POST['data_atualizacao'];
    $cartaz = $_FILES['cartaz'];
    //var_dump($cartaz); exit();
     $status = 0; 



     // Diretório de destino para salvar o arquivo
    $diretorio_destino = "../foto/";

    // Gera um nome único para o arquivo
    $nome_arquivo = uniqid() . '_' . basename($cartaz["name"]);

   
    // Caminho completo do arquivo no servidor
    $caminho_arquivo = $diretorio_destino . $nome_arquivo;

    // Verifica a extensão do arquivo
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

    $extensoes_permitidas = array("jpg", "jpeg", "png","gif");

    if (!in_array($extensao, $extensoes_permitidas)) {
        echo "Somente arquivos JPG, JPEG e PNG são permitidos.";
        exit;
    }

    // Move o arquivo para o diretório de destino
    if (move_uploaded_file($cartaz["tmp_name"], $caminho_arquivo)) {
        echo "O arquivo foi enviado com sucesso.";
    } else {
        echo "Erro ao enviar o arquivo.";
    }





    $sql = "INSERT INTO filmes (titulo, foto, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao, status) 
    VALUES ('$titulo','$nome_arquivo', '$descricao', '$ano_lancamento', '$genero', '$classificacao', '$data_cadastro', '$data_atualizacao', '$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "<h1>Cadastro realizado com sucesso!</h1>";
        echo "<h1>Volte à guia 'Listar' e tecle F5 para atualizar!</h1>";
        
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }}
?>