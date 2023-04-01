<?php
class contaBancaria {
    private $saldo;

    public function __construct($valor){
        $this->saldo = $valor;

    }
    public function getsaldo() {
        return $this->saldo;
    }
    public function sacar($valor) {
        if ($this->getsaldo() >= $valor) {
            $this->setsaldo($this->getsaldo() - $valor);
        }
    }

    public function depositar($valor) {
        
    }

}
$conta = new contaBancaria(1000); 


 ?>
