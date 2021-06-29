<?php
  include '../model/FormUser.php';
  include '../include/FormValidate.php';
  
  if ( (!empty($_POST['nome'])) && (!empty($_POST['email'])) &&
  (!empty($_POST['senha'])) && (!empty($_POST['cep'])) && (!empty($_POST['cidade']))
  (!empty($_POST['estado'])) && (!empty($_POST['endereco'])) )
  {
    $erros = array();

    if (!FormValidate::testarNome($_POST['nome'])) {
      $erros[] = 'Nome inválido';
    }
    if (!FormValidate::testarEmail($_POST['email'])) {
      $erros[] = 'E-mail inválido';
    }
    
    if (count($erros) == 0) {
      $FormUser = new FormUser();

      $FormUser->nome = $_POST['nome'];
      $FormUser->email = $_POST['email'];
      $FormUser->senha = $_POST['senha'];
      $FormUser->cep = $_POST['cep'];
      $FormUser->cidade = $_POST['cidade'];
      $FormUser->estado = $_POST['estado'];
      $FormUser->endereco = $_POST['endereco'];

      // echo "Usuário $user->nome $user->sobrenome criado com sucesso!";
      header("location:../View/sucesso.php?".
           "user=$FormUser->nome&"."mail=$FormUser->email");
    }
    else {
	  // "serialize" transformar um objeto em uma forma binária ou em formato de texto para transmiti-lo
	  // via rede ou armazenar seu conteúdo sem perda de dados.
      $err = serialize($erros);
      header("location:../View/erro.php?erros=$err");
    }
  }
  else {
    $erros = array();
    $erros[] = 'Informe todos os campos!!!';
    $err = serialize($erros);
      
    header("location:../View/erro.php?erros=$err");
  }
?>
