<?php 
    $host = 'localhost';
    $db = 'senai_ta_aulaphp';
    $user = 'mariaeduarda';
    $pass = '123456';
    $port = 3307; 
    require_once 'connection.php';
       
    $database = new Database($host, $db, $user, $pass, $port);
    $database->connect();
    $pdo = $database->getConnection();

//Inicio do codigo de verificação
//--------------------------------------------------------------------
//select * from senai_ta_aulaphp.usuario where nome = "Maria Duda" and senha = "123456"

//http://localhost:8080/aulaphp/login.php

    $login = htmlspecialchars($_GET['login']);
    $senha = htmlspecialchars($_GET['senha']);

if ($pdo) {
        try {
            $stmt = $pdo->prepare("select * from senai_ta_aulaphp.usuario where nome = '$login' and senha = '$senha'");
            
            $stmt->execute();
            
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if ($resultados) {
                echo("Logado!");
                }
        else {
                echo("Não logado!");
            }
        } catch (PDOException $e) {
            
            echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>";
        }
    }
?>

