<?php
class Fruit
{
 public $name;
 public $color;
 function __construct($name, $color)
 {
 $this->name = $name;
 $this->color = $color;
 echo "A new {$this->color} {$this->name} has been created.<br>";
 }
 function __destruct()
 {
 echo "The {$this->color} {$this->name} is now destroyed.<br>";
 }
}
$mango = new Fruit("Mango", "Yellow");
$apple = new Fruit("Apple", "Red");
?>
