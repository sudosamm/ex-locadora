<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once "./php/conexao.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/logUp.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
            <p class="title">CADASTRO</p>
            <img class="banner" src="https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-steam-wave-international-film-festival-banner-poster-image_195212.jpg">
            <form class="logupForm" method="POST">
                <div class="userInfo">
                    <div class="leftInfo">
                        <label for="email" class="logupLbl">Email</label>
                        <input type="text" class="logupInput" name="email">
                        <label for="userName" class="logupLbl">Nome de usuário</label>
                        <input type="text" class="logupInput" name="userName">
                        <label for="password" class="logupLbl">Senha</label>
                        <input type="text" class="passInput" name="password">
                        <label for="confirmPassword" class="logupLbl">Confirmar senha</label>
                        <input type="text" class="passConfirmInput" name="confirmPassword">
                    </div>
    
                    <div class="rightInfo">
                        <label for="cpf" class="logupLbl">CPF</label>
                        <input type="text" class="logupInput" name="cpf">
                        <label for="cellphone" class="logupLbl">Número de Telefone</label>
                        <input type="text" class="logupInput" name="cellphone">
                        <label for="birthdate" class="logupLbl">Data de Nascimento</label>
                        <input type="text" class="logupInput" name="birthdate">
                        <a class="blankSpace"></a>
                        <input type="submit" name="logupBtn" value="Cadastrar" class="logupBtn"/>
                    </div>
                </div>
            </form>
            <p class="registerBtn">Já possui uma conta?<a href="./index.php">Clique aqui!</a></p>
        </div>
        <?php
            if (isset($_POST['logupBtn'])) {
                include_once "./php/register.php";
            }
/*
            //Login de usuário
            if(isset($_GET['login'])){
                $nome = $_GET['nome'];
                $senha = $_GET['senha'];

                $sql = "SELECT name, passwd FROM usuarios WHERE name='$nome';";
                $resultado = $conexao->query($sql);
                if($row = $resultado->fetch_assoc()){
                    if(($row['name'] == $nome) && ($row['passwd'] == $senha)){
                        echo "Usuário existe<br>";
                    }else{
                        echo "Usuário não existe<br>";
                    }
                }
            }

            //Seleção de usuários
            $sql = "SELECT name, passwd FROM usuarios ORDER BY name;";
            $resultado = $conexao->query($sql);

            //Exibição de usuários
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                // echo "Usuário: ".$row['name']." | Senha: ".$row['passwd']."<br>";
                }
            }
*/
        ?>
</body>
</html>