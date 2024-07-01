<?php
    include('conexao.php');

    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);
?>

<table class="table table-striped-columns">
    <h1>LISTA DE USUÁRIOS</h1>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Email</th>
        <th>Data Cadastro</th>
        <th>Data Atualização</th><br>
        <th>Status</th><br>
        <th>Editar</th><br>
        <th>Remover</th><br>
    </tr>
   
    <?php
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>
                <td>".$linha['id_usuario']."</td>
                <td>".$linha['nome']."</td>
                <td>".$linha['usuario']."</td>
                <td>".$linha['senha']."</td>
                <td>".$linha['email']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
                <td>".$linha['status']."</td>
                <td>
                    <a href='pages/usuario_edita.php?id=".$linha['id_usuarios']."'>Editar</a>
                </td>
                <td>
                    <a href='pages/usuario_remover.php?id=".$linha['id_usuarios']."'>Remover</a>
                </td>
            </tr>";
        }
    ?>
</table>
<a class="nav-link" href="index.php?pagina=usuario_cadastro">Cadastrar Usuários</a>
    