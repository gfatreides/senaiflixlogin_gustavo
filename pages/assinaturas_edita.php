<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location: ../login.php');
    exit();
}

    include('conexao.php');
    
    //Salvando o ID para busca
    $id_assinaturas = $_GET['id'];

    //Selecionando os clientes para atualização
    $sql = "SELECT * FROM assinaturas WHERE id_assinaturas = '$id_assinaturas'";
    $resultado = $conn->query($sql); 

    //Abortar execução caso não ache nenhuma linha no id do usuário
    if($resultado->num_rows<=0){
        echo "Usuário não encontrado";
        exit();
    }
    $linha=$resultado->fetch_assoc();
?>
    <h1>Atualizar assinaturas</h1>

    <form method="post"  action="assinaturas_edita_salvar.php?id=<?php echo $linha['id_assinaturas']?>" class="row g-3">
        <!--PLANO-->
        <div class="col-md-12">
                <label for="plano" class="form-label">Plano</label>
                <input type="text" class="form-control" id="plano" name="plano" value="<?php echo $linha['plano']?>">
        </div>
        <br>
        <!--DATA INICIO-->
        <div class="col-md-12">
            <label for="data_inicio" class="form-label">Data inicio</label>
            <input type="data_inicio" class="form-control" name="data_inicio" id="data_inicio" value="<?php echo $linha['data_inicio']?>">
        </div>
        <br>
        <!--DATA FIM-->
        <div class="col-12">
            <label for="data_fim" class="form-label">Data fim</label>
            <input type="text" class="form-control" name="data_fim" id="data_fim" value="<?php echo $linha['data_fim']?>">
        </div>
        <br>
         <!--DATA CADASTRO-->
         <div class="col-md-12">
            <label for="data_cadastro" class="form-label">Data cadastro</label>
            <input type="data_cadastro" class="form-control" name="data_cadastro" id="data_cadastro" value="<?php echo $linha['data_cadastro']?>">
        </div>
        <br>
         <!--DATA INICIO-->
         <div class="col-md-12">
            <label for="data_inicio" class="form-label">Data inicio</label>
            <input type="data_inicio" class="form-control" name="data_inicio" id="data_inicio" value="<?php echo $linha['data_inicio']?>">
        </div>
        <br>
        <!--DATA ATUALIZAÇÃO-->
        <div class="col-12">
            <label for="data_atualizacao" class="form-label">Data atualizacão</label>
            <input type="text" class="form-control" id="data_atualizacao" name="data_atualizacao" value="<?php echo $linha['data_atualizacao']?>" >
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

<a href="assinaturas_listar.php">Listar usuários</a>
    