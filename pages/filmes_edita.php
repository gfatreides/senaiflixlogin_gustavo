<?php
    include('conexao.php');
    
    //Salvando o ID para busca
    $id_filmes = $_GET['id'];

    //Selecionando os clientes para atualização
    $sql = "SELECT * FROM filmes WHERE id_filmes='$id_filmes'";
    $resultado = $conn->query($sql); 

    //Abortar execução caso não ache nenhuma linha no id do usuário
    if($resultado->num_rows<=0){
        echo "Usuário não encontrado";
        exit();
    }
    $linha=$resultado->fetch_assoc();
?>

    <h1>Atualizar registros</h1>

        <form method="post"  action="filmes_edita_salvar.php?id=<?php echo $linha['id_filmes']?>" class="row g-3">
            <!--TTITULO-->
            <div class="col-md-12">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="nome" name="titulo" value="<?php echo $linha['titulo']?>">
            </div>
            <br>
            <!--DESCRIÇÃO-->
            <div class="col-md-12">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="descricao" class="form-control" name="descricao" id="descricao" value="<?php echo $linha['descricao']?>">
            </div>
            <br>
            <!--ANO LANÇAMENTO-->
            <div class="col-12">
                <label for="ano_lancamento" class="form-label">Ano lançamento</label>
                <input type="text" class="form-control" name="ano_lancamento" id="ano_lancamento" value="<?php echo $linha['ano_lancamento']?>">
            </div>
            <br>
            <!--GENERO-->
            <div class="col-12">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $linha['genero']?>" >
            </div>
            <br>
            <!--CLASSIFICAÇÃO-->
            <div class="col-12">
                <label for="classificacao" class="form-label">Classificação</label>
                <input type="text" class="form-control" id="classificacao" name="classificacao" value="<?php echo $linha['classificacao']?>" >
            </div>
            <br>
            <!--DATA CADASTRO-->
            <div class="col-12">
                <label for="data_cadastro" class="form-label">Data cadastro</label>
                <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="<?php echo $linha['data_cadastro']?>" >
            </div>
            <br>
            <!--DATA ATUALIZAÇÃO-->
            <div class="col-12">
                <label for="data_atualizacao" class="form-label">Data atualização</label>
                <input type="text" class="form-control" id="data_atualizacao" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>" >
            </div>
            <br>
            <!--STATUS-->
            <div class="col-12">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $linha['status']?>" >
            </div>
            <br>
        
            <br>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            <!--REMOVER-->
            <div class="col-12">
                <input type="reset" name="remover" id="remover" value="remover">
            </div>
        </form>

<a href="filmes_listar.php">Listar usuários</a>
    