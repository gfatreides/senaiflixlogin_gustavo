<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SENAIFLIX | GFA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=clientes_listar">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=clientes_cadastro">Cadastrar Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=filmes_listar">Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=filmes_cadastro">Cadastrar Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=assinaturas_listar">Assinaturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=assinaturas_cadastro">Cadastrar Assinaturas</a>
                </li>

                <?php
                if($_SESSION['permissao']==1){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=usuario_listar">Usuários</a>
                </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=usuario_cadastro">Cadastrar Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_sair.php">Sair</a>
                </li>
              
                
            </ul>
        </div>
    </nav>
</header>
