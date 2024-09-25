<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <?php 
        $host = 'localhost';
        $db = 'senai_ta_aulaphp';
        $user = 'mariaeduarda';
        $pass = '123456';
        $port = 3307; // Porta MySQL correta
        // Inclui o arquivo da classe Database que criamos para conectar dentro da pasta php
        require_once 'connection.php';
        // Cria uma instância da classe Database
        $database = new Database($host, $db, $user, $pass, $port);
        // Chama o método connect para estabelecer a conexão
        $database->connect();
        // Obtém a instância PDO para realizar consultas
        $pdo = $database->getConnection();
    ?>
</head>
<body>
<?php
    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha']) && isset($_GET['telefone']) && isset($_GET['data_de_nascimento'])) {
        $nome = htmlspecialchars($_GET['nome']);
        $email = htmlspecialchars($_GET['email']);
        $senha = htmlspecialchars($_GET['senha']);
        $telefone = htmlspecialchars($_GET['telefone']);
        $data_de_nascimento = htmlspecialchars($_GET['data_de_nascimento']);

        echo "<h2>Informações Recebidas:</h2>";
        echo "<p><strong>Nome:</strong>" . $nome . "</p>";
        echo "<p><strong>E-mail:</strong>" . $email . "</p>";
        echo "<p><strong>Senha:</strong>" . $senha . "</p>";
        echo "<p><strong>Telefone:</strong>" . $telefone . "</p>";
        echo "<p><strong>Data de Nascimento:</strong>" . $data_de_nascimento . "</p>";

        $stmt = $pdo->prepare("INSERT INTO senai_ta_aulaphp.cadastro (nome, email, senha, telefone, data_nascimento) values ('$nome', '$email', '$senha', '$telefone', '$data_de_nascimento');");
        $stm->execute();
    } else{
        echo "Nenhum dado foi enviado.";
    }
?>
</body>
</html>
