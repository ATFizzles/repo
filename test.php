<?php
	class Dodgers{
		public $player;
		public $coach;
		public $rank;

		function __construct($player, $coach, $rank){
			$this->player = $player;
			$this->coach = $coach;
			$this->rank = $rank;
		}

		function win(){
			return $this->player . " got the game winning hit. The Dodgers are now in " . $this->rank;
		}

		function strikeout(){
			return $this->player . " struck out. " . $this->coach . " is sad.";
		}

	}

	$dodgers1 = new Dodgers("Yasiel Puig", "Don Mattingly", "first place");
	echo $dodgers1->win();
	echo "<br>";
	echo $dodgers1->strikeout();

?>