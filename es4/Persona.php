<?php
class Persona {
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function presentati() {
        echo "Ciao sono Persona";
      }
        
}

?>