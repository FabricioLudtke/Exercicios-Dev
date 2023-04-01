<?php
class Pessoa {
  public $nome;
  public $idade;

  function __construct($nome, $idade) {
    $this->nome = $nome;
    $this->idade = $idade;
  }
}

class Funcionario extends Pessoa {
  public $salario;

  function __construct($nome, $idade, $salario) {
    parent::__construct($nome, $idade);
    $this->salario = $salario;
  }
}
