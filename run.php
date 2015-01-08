<?php
	
	//LECTURE 3

	//if(is_double(3.2)){
		//echo "It is a number with a decimal";
	//}
	//else{
		//echo "It is not a number with a decimal";
	//}

	//var_dump(is_double("XYZ"));
	//var_dump(is_double(8008));
	//var_dump(is_double(123));
	//var_dump(is_double(false));

	if(is_bool(true)){
		echo "it is a bool <br>";
	}
	else{
		echo "it isn't a bool <br>";
	}

	var_dump(is_bool(32));
	var_dump(is_bool("yay"));
	var_dump(is_bool(true));
	var_dump(is_bool(123));


	if(is_array(32)){
		echo "it is an array <br>";
	}
	else{
		echo "<br> it isn't an array <br>";
	}

	var_dump(is_array(32));
	var_dump(is_array("yay"));
	var_dump(is_array(true));
	var_dump(is_array(123));

	//this determines whether the value is an array, bool, string, etc.
?>