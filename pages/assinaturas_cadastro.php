<body>
    <header>
        <h1>Cadastrar assinaturas</h1>
    </header>

<div id="conteudo">
    <form method="post" action="pages/assinaturas_cadastro_salvar.php" class="row">  
        <!--PLANO-->
        <div class="col-md-12">
        <label for="plano" class="form-label">Plano</label>
        <input type="text" class="form-control" id="plano" name="plano">
        </div>
        <br>
        <!--DATA INICIO-->
        <div class="col-md-12">
        <label for="data_inicio" class="form-label">Data Início</label>
        <input type="text" class="form-control" name="data_inicio" id="data_inicio">
        </div>
        <br>
        <!--DATA FIM-->
        <div class="col-12">
        <label for="data_fim" class="form-label">Data Fim</label>
        <input type="text" class="form-control" name="data_fim" id="fim">
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
        <input type="text" class="form-control" id="data-atualizacao" name="data_atualizacao">
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

    <a class="nav-link" href="index.php?pagina=assinaturas_listar">Listar Usuários Cadastrados</a>    
</div>
    