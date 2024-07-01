<?php
    include('conexao.php');
    
    //Salvando o ID para busca
    $id_cliente = $_GET['id'];

    //Selecionando os clientes para atualização
    $sql = "SELECT * FROM clientes WHERE id_cliente='$id_cliente'";
    $resultado = $conn->query($sql); 

    //Abortar execução caso não ache nenhuma linha no id do usuário
    if($resultado->num_rows<=0){
        echo "Usuário não encontrado";
        exit();
    }
    $linha=$resultado->fetch_assoc();
?>
    <h1>Atualizar registros</h1>

    <form method="post"  action="clientes_edita_salvar.php?id=<?php echo $linha['id_cliente']?>" class="row g-3">
        <!--NOME-->
        <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome']?>">
        </div>
        <br>
        <!--CPF-->
        <div class="col-md-12">
            <label for="cpf" class="form-label">CPF</label>
            <input type="cpf" class="form-control" name="cpf" id="cpf" value="<?php echo $linha['cpf']?>">
        </div>
        <br>
        <!--ENDEREÇO-->
        <div class="col-12">
            <label for="endereco" class="form-label">Endereco</label>
            <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $linha['endereco']?>">
        </div>
        <br>
        <!--BAIRRO-->
        <div class="col-12">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $linha['bairro']?>" >
        </div>
        <br>
        <!--CIDADE-->
        <div class="col-12">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $linha['cidade']?>" >
        </div>
        <br>
         <!--ESTADO-->
         <div class="col-12">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $linha['estado']?>" >
        </div>
        <br>
        <!--CEP-->
        <div class="col-12">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $linha['cep']?>" >
        </div>
        <br>
        <!--EMAIL-->
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $linha['email']?>" >
        </div>
        <br>
        <!--TELEFONE-->
        <div class="col-12">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $linha['telefone']?>" >
        </div>
        <br>
        <!--DATA CADASTRO-->
        <div class="col-12">
            <label for="data_cadastro" class="form-label">Data Cadastro</label>
            <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="<?php echo $linha['data_cadastro']?>" >
        </div>
        <br>
        <!--DATA ATUALIZAÇÃO-->
        <div class="col-12">
            <label for="data" class="form-label">Data Atualização</label>
            <input type="text" class="form-control" id="data_atualizacao" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>" >
        </div>
        <br>
        <!--STATUS-->
        <div class="col-12">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $linha['status']?>" >
        </div>
        <br>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        <!--REMOVER-->
        <div class="col-12">
            <input type="reset" name="remover" id="remover" value="remover">
        </div>

</form>

<a href="clientes_listar.php">Listar usuários</a>
    