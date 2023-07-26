<?php
class Magic {
    public $card = 'As';
  
    public function __construct() {
      echo "The object of Magic class is constructed.";
    }
  
    public function __destruct() {
      echo "The object of Magic class is destructed.";
    }
  
    public function __get($property) {
      echo "Getting the value of property: {$property}.";
    }
  
    public function __set($property, $value) {
      echo "Setting the value of property: {$property} to {$value}.";
    }
  
    public function __isset($property) {
      echo "Checking if property: {$property} is set.";
    }
  
    public function __toString() {
      return "The value of card property is: {$this->card}.";
    }
  }
?>