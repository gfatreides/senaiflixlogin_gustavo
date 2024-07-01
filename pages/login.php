<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="pages/autenticar.php" method="post">
        <label for="usuario">Email:</label>
        <input type="text" id="email" name="email" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Não tem uma conta? <a href="pages/usuario_cadastro.php">Cadastre-se</a></p>
</body>
</html>