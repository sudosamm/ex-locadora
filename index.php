<?php
    include_once './php/conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>

    <div class="container">

        <h1>LOGIN</h1>

        <form method="POST" class="formulario">

            <label for="userEmail" class="loginLabel">Email</label>
            <input type="text" name="userEmail" class="loginInput"/>
            <label for="userPassword" class="loginLabel">Senha</label>
            <input type="password" name="userPassword" class="loginInput"/>
            <input type="submit" value="Entrar" name="loginButton" class="loginButton" />

        </form>
        <?php
            if(isset($_POST['loginButton'])){
                include_once './php/login.php';
            }
        ?>
        <p class="registerText">Ainda não possui uma conta? <a href="./pages/register.php" class="registerRef">Clique aqui para se cadastrar</a></p>

    </div>
    
</body>
</html>