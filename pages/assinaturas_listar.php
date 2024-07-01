<?php
    include('conexao.php');

    $sql = "SELECT * FROM assinaturas";
    $resultado = $conn->query($sql);
?>

<table class="table table-striped-columns">
    <h1>LISTA DE ASSINATURAS</h1>
    <tr>
        <th>ID</th>
        <th>Plano</th>
        <th>Data Início</th>
        <th>Data Fim</th>
        <th>Data Cadastro</th>
        <th>Data Atualização</th>
        <th>Status</th><br>
        <th>Editar</th><br>
        <th>Remover</th><br>
    </tr>
   
    <?php
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>
                <td>".$linha['id_assinatura']."</td>
                <td>".$linha['plano']."</td>
                <td>".$linha['data_inicio']."</td>
                <td>".$linha['data_fim']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
             
                <td>".$linha['status']."</td>
                <td>
                    <a href='pages/assinaturas_edita.php?id=".$linha['id_assinaturas']."'>Editar</a>
                </td>
                <td>
                    <a href='pages/assinaturas_remover.php?id=".$linha['id_assinaturas']."'>Remover</a>
                </td>
            </tr>";
        }
    ?>
</table>
<a class="nav-link" href="index.php?pagina=assinaturas_cadastro">Cadastrar Assinaturas</a>
    