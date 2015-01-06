<?php

	//code template used to generate objects
	class dodgers{
		//class body
		//class body
	}

	class mariners{
		//class body
		//class body
	}

	class seahawks{
		//class body
		//class body
	}

	//generates instance of class
	$dodgers1 = new dodgers();
	$dodgers2 = new dodgers();

	$mariners1 = new dodgers();
	$mariners2 = new dodgers();

	$seahawks1 = new dodgers();
	$seahawks2 = new dodgers();

	//properties that store data that may vary from object to object
	class dodgers {
		public $puig = “default name”;
		public $gordon = “name”;
		public $uribe = “male”;
		public $crawford = name;
	}

	class mariners {
		public $cruz = “default name”;
		public $seager = “name”;
		public $jones = “male”;
		public $cano = name;
	}

	class seahawks {
		public $sherman = “default name”;
		public $chancellor = “name”;
		public $lynch = “male”;
		public $wilson = name;
	}

	//access property variables
	print $dodgers1->puig;
	print $mariners1->seager;
	print $seahawks1->sherman;

	//methods have objects perform tasks
	public function myMethod( $argument, $another) {
		// stuff
	}
	public function myMeth( $another, $argument) {
		// stuff
	}
	public function myMe( $argument, $another) {
		// stuff
	}


	class dodgers {
		public $puig = “default name”;
		public $gordon = “name”;
		public $uribe = “male”;
		public $crawford = name;

		function getName() {
		return “{$this->puig}” . “{$this->uribe}”;
		}
	}

	$dodgers1 = new Dog();
	$dodgers1->puig = “yo”;
	$dodgers1->uribe = “man”;

	print “The player’s name is {$dodgers1->getName()}.”;
	
	//The player's name is yo man.
?>
