<body>
    <header>
        <h1>Cadastrar clientes</h1>
    </header>

<div id="conteudo">
    <form method="post" action="pages/clientes_cadastro_salvar.php" class="row">  
        <!--NOME-->
        <div class="col-md-12">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <br>
        <!--CPF-->
        <div class="col-md-12">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf">
        </div>
        <br>
        <!--ENDEREÇO-->
        <div class="col-12">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco">
        </div>
        <br>
        <!--BAIRRO-->
        <div class="col-12">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <br>
        <!--CIDADE-->
        <div class="col-12">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
        <br>
        <!--ESTADO-->
        <div class="col-12">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado">
        </div>
        <br>
        <!--CEP-->
        <div class="col-12">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep">
        </div>
        <br>
        <!--EMAIL-->
        <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
        </div>
        <br>
        <!--TELEFONE-->
        <div class="col-12">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone">
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

    <a class="nav-link" href="index.php?pagina=clientes_listar">Listar Usuários Cadastrados</a>    
</div>
    