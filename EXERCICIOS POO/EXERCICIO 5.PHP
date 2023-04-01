<?php
class Carro {
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $cv;
    private $ligado;
    private $velocidadeAtual;

    public function __construct($marca, $modelo, $ano, $cor, $cv) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->cv = $cv;
        $this->ligado = false;
        $this->velocidadeAtual = 0;
    }

    public function ligar() {
        $this->ligado = true;
    }

    public function desligar() {
        $this->ligado = false;
        $this->velocidadeAtual = 0;
    }

    public function acelerar($velocidade) {
        if ($this->ligado) {
            $this->velocidadeAtual += $velocidade;
        }
    }

    public function freiar() {
        $this->velocidadeAtual = 0;
    }
}

$carro1 = new Carro("Honda", "Civic Si", 2007, "vermelho", 193);
$carro1->ligar();
$carro1->acelerar(50);
$carro1->freiar();
$carro1->desligar();
