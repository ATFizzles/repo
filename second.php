<?php
	//LECTURE 2

	//Example 1

	class Cat {
		public $firstName;
		public $lastName;
		public $breed;

		function __construct($firstName, $lastName, $breed) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

		function getName() {
			return "{$this->firstName}" . "{$this->lastName}";
		}
	}

	class Turtle {
		public $firstName;
		public $lastName;
		public $type;

		function __construct($firstName, $lastName, $type) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->type = $type;
		}

		function getName() {
			return "{$this->firstName}" . "{$this->lastName}";
		}
	}

	class Teacher {
		public $firstName;
		public $lastName;
		public $class;

		function __construct($firstName, $lastName, $class) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->class = $class;
		}

		function getName() {
			return "{$this->firstName}" . "{$this->lastName}";
		}
	}


	//Example 2

	$cat1 = new Cat("AT", "Fizzle", "Tammy");
	print "Cat 1: {$cat1->getName()}" . "<br>";

	$turtle1 = new Turtle("at", "fizzle", "old");
	print "Turtle 1: {$turtle1->getName()}" . "<br>";

	$teacher1 = new Teacher("Dan", "Iwao", "APP");
	print "Teacher 1: {$teacher1->getName()}";
?>