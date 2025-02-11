<?php
class Cane extends Animale {

    public function __construct($nome, $eta, $tipo) {
        $this->nome = $nome;
        $this->eta = $eta;
        $this->tipo = $tipo;
    }

    #[\Override]
    public function verso() {
        echo "bau";
      }
        
}

?>