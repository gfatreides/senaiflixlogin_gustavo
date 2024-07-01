<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de filmes</title>
</head>

<body>
    <header>
        <h1>Cadastrar filmes</h1>
    </header>

<div id="conteudo">
    <form method="post" action="pages/filmes_cadastro_salvar.php" class="row" enctype="multipart/form-data">  
        <!--TITULO-->
        <div class="col-md-12">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <br>
        <!--CARTAZ FILME-->
        <div class="form-group col-md-6">
            <label for="cartaz">Cartaz</label><br>
            <input id="cartaz" name="cartaz" type="file">
        </div>
        <!--DESCRIÇÃO-->
        <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
        </div>
        <br>
        <!--ANO LANÇAMENTO-->
        <div class="col-12">
        <label for="ano_lancamento" class="form-label">Ano Lançamento</label>
        <input type="text" class="form-control" name="ano_lancamento" id="ano_lancamento">
        </div>
        <br>
        <!--GENERO-->
        <div class="col-12">
        <label for="genero" class="form-label">Genero</label>
        <input type="text" class="form-control" id="genero" name="genero">
        </div>
        <br>
        <!--CLASSIFICAÇÃO-->
        <div class="col-12">
        <label for="classificacao" class="form-label">Classificacao</label>
        <input type="text" class="form-control" id="classificacao" name="classificacao">
        </div>
        <br>
        <!--DATA CADASTRO-->
        <div class="col-12">
        <label for="data_cadastro" class="form-label">Data Cadastro</label>
        <input type="text" class="form-control" id="data_cadastro" name="data_cadastro">
        </div>
        <br>
        <!--DATA ATUALIZAÇÃO-->
        <div class="col-12">
        <label for="data_atualizacao" class="form-label">Data Atualização</label>
        <input type="text" class="form-control" id="data_atualizacao" name="data_atualizacao">
        </div>
        <br>
        <!--STATUS-->
        <div class="col-12">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status">
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
        <br>
        <br>
        
        <button type="reset"  class="btn btn-primary">Limpar</a></button>
        </div>
    </form>
    <br>

    <a class="nav-link" href="index.php?pagina=filmes_listar">Listar Filmes Cadastrados</a>    
</div>
    