<?php
    include('conexao.php');
    
    //Salvando o ID para busca
    $id_usuarios = $_GET['id'];

    //Selecionando os clientes para atualização
    $sql = "SELECT * FROM usuarios WHERE id_usuarios='$id_usuarios'";
    $resultado = $conn->query($sql); 

    //Abortar execução caso não ache nenhuma linha no id do usuário
    if($resultado->num_rows<=0){
        echo "Usuário não encontrado";
        exit();
    }
    $linha=$resultado->fetch_assoc();
?>
    <h1>Atualizar usuários</h1>

    <form method="post"  action="usuario_edita_salvar.php?id=<?php echo $linha['id_usuarios']?>" class="row g-3">
        <!--NOME-->
        <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome']?>">
        </div>
        <br>
        <!--USUÁRIO-->
        <div class="col-md-12">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="usuario" class="form-control" name="usuario" id="usuario" value="<?php echo $linha['usuario']?>">
        </div>
        <br>
        <!--SENHA-->
        <div class="col-12">
            <label for="senha" class="form-label">Senha</label>
            <input type="text" class="form-control" name="senha" id="senha" value="<?php echo $linha['senha']?>">
        </div>
        <br>
        <!--EMAIL-->
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $linha['email']?>" >
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
            <label for="data_atualizacao" class="form-label">Data atualizacao</label>
            <input type="text" class="form-control" id="data-atualizacao" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>" >
        </div>
        <br>
        <!--STATUS-->
        <div class="col-12">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $linha['status']?>" >
        </div>
        <br>
         <!--EDITAR-->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        <br>
        <!--REMOVER-->
        <div class="col-12">
            <input type="reset" name="remover" id="remover" value="remover">
        </div>

</form>

<a href="usuario_listar.php">Listar usuários</a>
    