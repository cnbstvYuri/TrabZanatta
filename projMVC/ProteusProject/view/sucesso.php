<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro de Usuário Efetuado com sucesso!</title>
	<link rel="stylesheet" type="text/css" href="../include/erroousucesso.css" media="screen" />
  </head>
  <body>
    <h1>Resultado</h1>
	<p class="success">
    <?php
      if (isset($_GET['nome']) && isset($_GET['email'])) {
        echo '<br>Usuário:'.$_GET['nome'] .
             '<br>E-mail:'.$_GET['email'];
      }
    ?>
	</p>
  </body>
</html>

