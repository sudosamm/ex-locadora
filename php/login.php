<?php
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    if($userEmail === '' || $userPassword === ''){
        echo "Um dos campos necessários não foi preenchido corretamente. Por favor, tente novamente.";
    }
    else{
        $sql = "SELECT userEmail, userPassword FROM usuarios WHERE userEmail='$userEmail';";
        $consulta = $conexao -> query($sql);
    }
?>