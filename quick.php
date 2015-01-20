<?php
	class Animal{
		public $firstName;
		public $lastName;
		public $scientificName;
		public $gender;

		function __construct($firstName, $lastName, $scientificName, $gender){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->scientificName = $scientificName;
			$this->gender = $gender;
		}

		function getName(){
			return $this->firstName . " " . $this->lastName . " is a " . $this->scientificName . ".";
		}
	}

	class Cat extends Animal{
		function __construct($firstName, $lastName, $scientificName, $gender, $meow){
			parent::__construct($firstName, $lastName, $scientificName, $gender);
			$this->meow = $meow;
		}
	}
?>