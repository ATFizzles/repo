<?php

//1st Example

class Animal{
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $bark;
	public $meow;

	function __construct($firstName, $lastName, $scientificName, $gender, $weight, $bark, $meow){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->scientificName = $scientificName;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->bark = $bark;
		$this->meow = $meow;
	}

	function getName(){
		return $this->firstName . " " . $this->lastName;
	}
}

class Cat extends Animal{
	function greet(){
		return $this->meow;
	}
}

class Dog extends Animal{
	function hello(){
		return $this->bark;
	}
}

$cat = new Cat("Mellow", "Yellow", "Cat", "male", 15, "bark", "meow");
print "Animal 1 is a " . $cat->getName();


//2nd Example

class Highschool{
	public $name;
	public $city;
	public $type;
	public $principal;
	public $mascot;

	function __construct($name, $city, $type, $principal, $mascot){
		$this->name = $name;
		$this->city = $city;
		$this->type = $type;
		$this->principal = $principal;
		$this->mascot = $mascot;
	}

	function getName(){
		return $this->type . " in " . $this->city;
	}
}

class SierraMadre extends Highschool{
	function greet(){
		return $this->type;
	}
}

class PHS extends Highschool{
	function hello(){
		return $this->type;
	}
}

$PHS1 = new PHS("PHS", "Pasadena", "high", "MR. B", "bulldog");
echo "<br>";
print "PHS 1 is a " . $PHS1->getName();


//3rd Example

class Baseball{
	public $team;
	public $city;
	public $rank;
	public $coach;
	public $owner;

	function __construct($team, $city, $rank, $coach, $owner){
		$this->team = $team;
		$this->city = $city;
		$this->rank = $rank;
		$this->coach = $coach;
		$this->owner = $owner;
	}

	function getName(){
		return $this->team . " are in " . $this->city;
	}
}

class Win extends Baseball{
	function yay(){
		return "They arent in " . $this->rank;
	}
}

class Lose extends Baseball{
	function no(){
		return "They are in " . $this->rank;
	}
}

$win1 = new Win("Dodgers", "LA", "1st", "Don Mattingly", "Magic Johnson");
echo "<br>";
print "The " . $win1->getName();

?>