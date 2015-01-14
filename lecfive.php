<!---LECTURE 5 -->

<?php

//example 1

	class Animal {
		public $firstName;
		public $lastName;
		public $scientificName;
		public $gender;
		public $weight;

		function __construct($firstName, $lastName, $scientificName, $gender, $weight){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->scientificName = $scientificName;
			$this->gender = $gender;
			$this->weight = $weight;
		}

		function getName(){
			return "This is my " . $this->firstName . " and last " . $this->lastName . " and this is my scientific-name " . $this->scientificName . ".";
		}
	}

	class Cat extends Animal{
		function __construct($firstName, $lastName, $scientificName, $gender, $weight, $meow){
			parent::__construct($firstName, $lastName, $scientificName, $gender, $weight);
		$this->meow = $meow;
		}
		function greet(){
			return $this->meow;
		}
	}

	class Dog extends Animal{
		function __construct($firstName, $lastName, $scientificName, $gender, $weight, $bark){
			parent::__construct($firstName, $lastName, $scientificName, $gender, $weight);
		$this->bark = $bark;
		}
		function hello(){
			return $this->bark;
		}
	}

	$cat = new Cat("Mellow", "Yellow", "Cat", "male", 15, true);
	print "Animal 1 is a " . $cat->getName();


	//example 2

	class Baseball {
		public $team;
		public $city;
		public $coach;
		public $name;

		function __construct($team, $city, $coach){
			$this->team = $team;
			$this->city = $city;
			$this->coach = $coach;
		}

		function getIt(){
			return "The " . $this->team . " from " . $this->city . " have the coach " . $this->coach . ".";
		}
	}

	class Puig extends Baseball{
		function __construct($team, $city, $coach, $name){
			parent::__construct($team, $city, $coach);
		$this->name = $name;
		}
		function yasiel(){
			return $this->name;
		}
	}

	class Gonz extends Baseball{
		function __construct($team, $city, $coach, $name, $position){
			parent::__construct($team, $city, $coach);
		$this->position = $position;
		}
		function adrian(){
			return $this->position;
		}
	}

	$puig1 = new Puig("Dodgers", "LA", "Don Mattingly", "puig");
	echo "<br>";
	print "Yo " . $puig1->getIt();


	//example 3

	class Football {
		public $team;
		public $city;
		public $coach;
		public $name;

		function __construct($team, $city, $coach){
			$this->team = $team;
			$this->city = $city;
			$this->coach = $coach;
		}

		function getTeam(){
			return "The " . $this->team . " from " . $this->city . " have the coach " . $this->coach . ".";
		}
	}

	class Sherman extends Football{
		function __construct($team, $city, $coach, $name){
			parent::__construct($team, $city, $coach);
		$this->name = $name;
		}
		function richard(){
			return $this->name;
		}
	}

	class Chancellor extends Football{
		function __construct($team, $city, $coach, $name, $position){
			parent::__construct($team, $city, $coach);
		$this->position = $position;
		}
		function kam(){
			return $this->position;
		}
	}

	$sherman1 = new Sherman("Seahawks", "Seattle", "Pete Carrol", "Sherman");
	echo "<br>";
	print "Yo " . $sherman1->getTeam();
?>