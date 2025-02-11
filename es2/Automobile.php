<?php

class Automobile extends Veicolo{
  protected $type;
    
  public function __construct($brand,$year,$type){
    $this->brand = $brand;
    $this->year = $year;
    $this->type = $type;
  } 
  
  #[\Override]
  public function jsonSerialize(): array {
    return [ 'Brand' => $this->brand,
    'Year' => $this->year,
    'type' => $this->type
  ];
}
  public function get_type() {
    return $this->type;
  }
    
  public function set_brand($brand) {
    $this->brand = $brand;
  }
    
  public function set_year($year) {
    $this->year = $year;
  }
    
  public function set_age($type) {
    $this->type = $type;
  }
    
  public function stampaVeicolo() {
    echo $this->brand . $this->year . $this->type . "<br>";
  }
    
    
}
?>