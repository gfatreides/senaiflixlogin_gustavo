<body>
    <header>
        <h1>Cadastrar usuários</h1>
    </header>

<div id="conteudo">
    <form method="post" action="pages/usuario_cadastro_salvar.php" class="row">  
        <!--NOME-->
        <div class="col-md-12">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <br>
        <!--USUÁRIO-->
        <div class="col-md-12">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" class="form-control" name="usuario" id="usuario">
        </div>
        <br>
        <!--SENHA-->
        <div class="col-12">
        <label for="senha" class="form-label">Senha</label>
        <input type="text" class="form-control" name="senha" id="senha">
        </div>
        <br>
        <!--EMAIL-->
        <div class="col-12">
        <label for="estado" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
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
        <label for="data_atualizacao" class="form-label">Data atualização</label>
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

    <a class="nav-link" href="index.php?pagina=clientes_listar">Listar Usuários Cadastrados</a>    
</div>
    