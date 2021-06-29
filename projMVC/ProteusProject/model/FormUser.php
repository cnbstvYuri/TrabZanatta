<?php

class FormUser {
  private $nome;
  private $email;
  private $senha;
  private $cep;
  private $cidade;
  private $estado;
  private $endereco;

  // Método para atribuir/buscar valores das variáveis
  public function __construct() {}

  public function __set($propriedade, $valor) {
    $this->$propriedade = $valor;
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }
}

?>