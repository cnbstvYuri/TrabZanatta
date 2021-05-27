<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<header>

            
<label class = "logo">Proteus e-commerce</label>
<nav class = "menu">
    <ul>
         <li><a href=index.php>Inicio</a></li>
         <li><a href=shop.php>shop</a></li>
         <li><a href=login.php>entrar</a></li>
         <li><a href=formtrab.php>Cadastrar-se</a></li>
    </ul>
</nav>

</header>

    <div class="center">
        <h1>Login</h1>
        <form method="POST">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Usuário</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Senha</label>
            </div>
            <div class="pass">Esqueceu a senha ?<a href="#">Redefinir</a></div>
            <button type="submit" name="login" class="login" value="acessar">Login</button>
            <!--<input class ="enviar" style="margin: 15px;" type="submit" value="Login"> -->
        </form>
    </div>
    
</body>
</html>