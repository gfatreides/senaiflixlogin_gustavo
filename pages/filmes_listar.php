<?php
    include('conexao.php');

    $sql = "SELECT * FROM filmes";
    $resultado = $conn->query($sql);
?>

<table class="table table-striped-columns">
    <h1>LISTA DE FILMES</h1>
    <tr>
        <th>#</th>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Ano lancçamento</th>
        <th>Gênero</th>
        <th>Classificação</th>
        <th>Data cadastro</th>
        <th>Data atualização</th>
        <th>Status</th>
        <th>Editar</th><br>
        <th>Remover</th><br>
    </tr>
   
    <?php
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>
                <td><img src='foto/".$linha['foto']."' widht='100px' height='100px'></td>
                <td>".$linha['id_filmes']."</td>
                <td>".$linha['titulo']."</td>
                <td>".$linha['descricao']."</td>
                <td>".$linha['ano_lancamento']."</td>
                <td>".$linha['genero']."</td>
                <td>".$linha['classificacao']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
                <td>".$linha['status']."</td>
                <td><a href='pages/filmes_edita.php?id=".$linha['id_filmes']."'>Editar</a></td>
                <td><a href='pages/filmes_remover.php?id=".$linha['id_filmes']."'>Remover</a></td>
            </tr>";
        }
    ?>
</table>
<a class="nav-link" href="index.php?pagina=filmes_cadastro">Cadastrar Filmes</a>
    