<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
	$this->name = $name;
	$this->color = $color;
  }
  public function intro() {
	echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function intro() {
    parent::intro();
    echo '<br>';
	echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();

echo '<hr>';

$fruit = new Fruit("banana", "yellow");
$fruit->intro();

echo '<hr>';


// interface Animal {
//   public function makeSound($text);
// }

// class Cat implements Animal {
//   public function makeSound($pouet) {
// 	 echo "Meow".$pouet."Meow";
//   }
// }

// $animal = new Cat();
// $animal->makeSound('45');

echo '<hr>';

// Interface definition
interface Animal2 {
  public function makeSound();
}
function animalSound(Animal2 $nanimal){
    $nanimal->makeSound();
}

// Class definitions
class Cat implements Animal2 {
  public function makeSound() {
	 echo " Meow ";
  }
}
class Dog implements Animal2 {
  public function makeSound() {
	echo " Bark ";
  }
}
class Mouse implements Animal2 {
  public function makeSound() {
	echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  animalSound($animal);
}






?>


