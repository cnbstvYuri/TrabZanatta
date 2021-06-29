<!DOCTYPE html>
<html>
  <head>
    <title>Erros no cadastramento!</title>
	<link rel="stylesheet" type="text/css" href="../include/erroousucesso.css" media="screen" />
  </head>
  <body>
    <h1>ERROS!!!</h1>
	<p class="error">
    <?php
      if (isset($_GET['erros'])) {
        $erros = array();
        $erros = unserialize($_GET['erros']);

        foreach ($erros as $e) {
          echo '<br />' . $e;
        }
      }
    ?>
	</p>
  </body>
</html>

