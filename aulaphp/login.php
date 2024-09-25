<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login</h2> 
    <form action="php/verifica_login.php"   method="GET">
        
    
        <input type="text" id="login" name="login" placeholder="Login(e-mail)" required><br><br>
        <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>

        <input type="submit" values="Enviar">

    </form>
</body>
</html>