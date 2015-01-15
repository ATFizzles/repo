<?php

	//LECTURE 1

	//Example 1
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




	//Example 2
	$dodgers1 = new dodgers();
	$dodgers2 = new dodgers();

	$mariners1 = new dodgers();
	$mariners2 = new dodgers();

	$seahawks1 = new dodgers();
	$seahawks2 = new dodgers();




	//Example 3
	class dodgers {
		public $puig = "Yasiel";
		public $gordon = "Dee";
		public $uribe = "Juan";
		public $crawford = "Carl";
	}

	class mariners {
		public $cruz = "Nelson";
		public $seager = "Kyle";
		public $jones = "James";
		public $cano = "Robinson";
	}

	class seahawks {
		public $sherman = "Richard";
		public $chancellor = "Kam";
		public $lynch = "Marshawn";
		public $wilson = "Russell";
	}




	//Example 4
	print $dodgers1->puig;
	print $mariners1->seager;
	print $seahawks1->sherman;




	//Example 5
	function myMethod( $argument, $another) {
		// stuff
	}
	function myMeth( $another, $argument) {
		// stuff
	}
	function myMe( $argument, $another) {
		// stuff
	}




	//Example 6
	class dodgers {
		public $puig = "Yasiel";
		public $gordon = "Dee";
		public $uribe = "Juan";
		public $crawford = "Carl";

		function getName() {
		return "{$this->puig}" . "{$this->uribe}";
		}
	}

	$dodgers1 = new dodgers();
	$dodgers1->puig = "yo";
	$dodgers1->uribe = "man";

	print "The player's name is {$dodgers1->getName()}.";
	
	//The player's name is yo man.



	class mariners {
		public $cruz = "Nelson";
		public $seager = "Kyle";
		public $jones = "James";
		public $cano = "Robinson";

		function getName() {
		return "{$this->jones}" . "{$this->cano}";
		}
	}

	$mariners1 = new mariners();
	$mariners1->jones = "yes";
	$mariners1->cano = "please";

	print "The player’s name is {$mariners1->getName()}.";
	
	//The player's name is yes please.



	class seahawks {
		public $sherman = "Richard";
		public $chancellor = "Kam";
		public $lynch = "Marshawn";
		public $wilson = "Russell";

		function getName() {
		return "{$this->chancellor}" . "{$this->sherman}";
		}
	}

	$seahawks1 = new seahawks();
	$seahawks1->chancellor = "whats";
	$seahawks1->sherman = "up";

	print "The player’s name is {$dodgers1->getName()}.";
	
	//The player's name is whats up.

	//--------------------------------------------------------------------------------
?>
