<!DOCTYPE html>
<html lang="en">
    <?php
        include_once('./php/conexao.php');
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02</title>
        <link rel="stylesheet" href="./src/style.css">
    </head>
    <body>
        <div class="container">
            <p class="title">LOGIN</p>
            <img class="banner" src="https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-steam-wave-international-film-festival-banner-poster-image_195212.jpg">
            <form class="loginForm" method="POST">
                <label for="email" class="loginLbl">Email</label>
                <input type="text" class="loginInput" name="email">
                <label for="password" class="loginLbl">Senha</label>
                <input type="text" class="passInput" name="password">
                <input type="submit" name="loginBtn" value="Entrar" class="loginBtn"/>
            </form>
            <p class="registerBtn">Não possui uma conta?<a href="./logUp.php"> Clique aqui!</a></p>
        </div>
        <?php
            if(isset($_GET['loginBtn'])){
                /*$nome = $_GET['nome'];
                $senha = $_GET['senha'];
                if($nome === '' || $senha === ''){
                    echo "Um dos valores inseridos está vazio ou ambos.";
                }else{
                    $sql = "INSERT INTO usuarios (name, passwd) VALUES ('$nome', '$senha');";

                    if($conexao->query($sql) === TRUE){
                        echo "Deu certo, meu nobre<br>";
                    }
                }*/
            }

            //Login de usuário
            /*if(isset($_GET['login'])){
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
            }*/

            //Seleção de usuários
            /*$sql = "SELECT name, passwd FROM usuarios ORDER BY name;";
            $resultado = $conexao->query($sql);

            //Exibição de usuários
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                // echo "Usuário: ".$row['name']." | Senha: ".$row['passwd']."<br>";
                }
            }*/

        ?>
    </body>
</html>