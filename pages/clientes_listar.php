<?php
    include('conexao.php');

    $sql = "SELECT * FROM clientes";
    $resultado = $conn->query($sql);
?>

<table class="table table-striped-columns">
    <h1>LISTA DE CLIENTES</h1>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Endereco</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CEP</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Data Cadastro</th>
        <th>Data Atualização</th><br>
        <th>Status</th><br>
        <th>Editar</th><br>
        <th>Remover</th><br>
    </tr>
   
    <?php
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>
                <td>".$linha['id_cliente']."</td>
                <td>".$linha['nome']."</td>
                <td>".$linha['cpf']."</td>
                <td>".$linha['endereco']."</td>
                <td>".$linha['bairro']."</td>
                <td>".$linha['cidade']."</td>
                <td>".$linha['estado']."</td>
                <td>".$linha['cep']."</td>
                <td>".$linha['email']."</td>
                <td>".$linha['telefone']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
                <td>".$linha['status']."</td>
                <td>
                    <a href='pages/clientes_edita.php?id=".$linha['id_cliente']."'>Editar</a>
                </td>
                <td>
                    <a href='pages/clientes_remover.php?id=".$linha['id_cliente']."'>Remover</a>
                </td>
            </tr>";
        }
    ?>
</table>
<a class="nav-link" href="index.php?pagina=clientes_cadastro">Cadastrar Clientes</a>
    