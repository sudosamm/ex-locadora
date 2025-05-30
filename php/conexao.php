<?php
    //Inicia a sessão
    session_start();

    //Armazenamento de dados do banco
    $serverName = "localhost"; 
    $userAccess = "root";
    $password = "";
    $databaseName = "local_flix";

    //Conexao com o banco de dados
    $conexao = new mysqli($serverName, $userAccess, $password, $databaseName);
    
    //Verifica se uma sessão já foi criada em nome de um "usuário". Caso haja uma sessão existente, o usuário será levado para a página principal.
    if(isset($_SESSION["usuario"])){
        header("Location: ./pages/home.php");
    }
?>