<?php
class pessoa {
    public $nome;
    public $idade;
    public $sexo;
    public $cor;
    public $altura;
    public $peso;

    public function __construct($nome, $idade, $sexo, $cor, $altura, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cor = $cor;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function acordar() {
        
    }

    public function caminhar() {
      
    }

    public function correr() {
        
    }

    public function comer() {
        
    }

    public function dormir() {
       
    }

  
}

$pessoa1 = new pessoa('Paulo', 25, 'Masculino', 'Branco', 1.75, 70.5);
$pessoa2 = new pessoa ('Fernanda', 20, 'feminino', 'Branco', 1.65, 50.0);