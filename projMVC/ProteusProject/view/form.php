<DOCTYPE HTML>
    <head>
        <title>CADASTRE-SE</title>
        <link rel="stylesheet" type="text/css" href="../include/menu.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../include/formulario.css" media="screen" />
        <meta charset="UTF-8">

    </head>
    
    <body>

        <header>
            
            <label class = "logo">Proteus e-commerce</label>
            <nav class = "menu">
                <ul>
                    <li><a href=inicio.php>Inicio</a></li> 
                    <li><a href=shop.php>shop</a></li>
                    <li><a href=login.php>entrar</a></li>
                    <li><a href=form.php>Cadastrar-se</a></li>
            </nav>

            </header>
            <section>
            <form name = "FormUser" action="../controller/formController.php" method="post">
            <label>NOME:</label>
            <input type ="text" name = "nome" id = "nome" placeholder = "digite seu nome..." style ="min-height:30px;"><br>
            <label>E-MAIL:</label>
            <input type ="text" name = "email" id = "email" placeholder = "digite seu e-mail..." style ="min-height:30px";><br>
            <label>SENHA:</label>
            <input type ="password" name = "senha" id = "senha" placeholder = "digite sua senha..." style ="min-height:30px;"><br>
            <label>CIDADE:</label>
            <input type ="text" name = "cidade" id = "cidade" placeholder = "digite sua cidade..." style ="min-height:30px;"><br>
            <label>ESTADO:</label>
            <input type ="text" name = "estado" id = "estado" placeholder = "digite seu estado..." style ="min-height:30px;"><br>
            <label>CEP:</label>
            <input type ="text" name = "cep" id = "cep" placeholder = "digite seu cep..."><br>
            <label>ENDEREÇO:</label>
            <input type ="text" name = "endereco" id = "endereco" placeholder = "digite seu endereco..." style ="min-height:30px;"><br><br>

            <input type="submit"  value ="cadastre-se">
        </form>
    </section>
    </body>

</html>