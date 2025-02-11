<?php
class Alunno {
  protected $name;
  protected $surname;
  protected $age;

  public function __construct($name,$surname,$age){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
  } 

  public function get_name() {
    return $this->name;
  }
  public function get_surname() {
    return $this->surname;
  }
  public function get_age() {
    return $this->age;
  }

  public function set_name($name) {
    $this->name = $name;
  }

  public function set_surname($surname) {
    $this->surname = $surname;
  }

  public function set_age($age) {
    $this->age = $age;
  }


  public function stampaAlunno() {
    echo $this->name . $this->surname . $this->age ."<br>";
  }


}
?>