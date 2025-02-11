<?php
class Animale {

    public $nome;
    public $eta;
    public $tipo;

    public function __construct($nome, $eta, $tipo) {
        $this->nome = $nome;
        $this->eta = $eta;
        $this->tipo = $tipo;
    }

    public function verso() {
        echo "roar";
      }
        
}

?>
