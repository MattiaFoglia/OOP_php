<?php
class Studente extends Persona {
    public $matricola;

    public function __construct($nome, $cognome, $matricola) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->matricola = $matricola;
    }

    public function presentati() {
        echo "Ciao sono Studente";
      }
        
}

?>