<?php
interface formageometrica {
    public function calculoArea();
    public function calcularPerimetro();
}
class Retangulo implements formageometrica{
    private $base; 
    private $altura;
}
class circulo implements formageometrica{
    private $raio;
    private $diamentro;
}
?>