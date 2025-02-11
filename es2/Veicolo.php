<?php
class Veicolo implements JsonSerializable{
  protected $brand;
  protected $year;

  public function __construct($brand,$year){
    $this->brand = $brand;
    $this->year = $year;
  } 
  public function jsonSerialize(): array {
    return [ 'Brand' => $this->brand,
    'Year' => $this->year
  ];
  }
  public function get_brand() {
    return $this->brand;
  }
  public function get_year() {
    return $this->year;
  }


  public function set_brand($brand) {
    $this->brand = $brand;
  }

  public function set_year($year) {
    $this->year = $year;
  }


}
?>