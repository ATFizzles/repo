<?php
	
	//LECTURE 3

	if(is_null(3.2)){
		echo "It is a null ";
	}
	else{
		echo "It is not a null ";
	}

	var_dump(is_null("XYZ"));
	var_dump(is_null(true));
	var_dump(is_null(0));
	var_dump(is_null(false));


	if(is_bool(true)){
		echo "<br> it is a bool ";
	}
	else{
		echo "<br> it isn't a bool ";
	}

	var_dump(is_bool(32));
	var_dump(is_bool("yay"));
	var_dump(is_bool(true));
	var_dump(is_bool(123));


	if(is_array(32)){
		echo "<br> it is an array ";
	}
	else{
		echo "<br> it isn't an array ";
	}

	var_dump(is_array(32));
	var_dump(is_array("yay"));
	var_dump(is_array(true));
	var_dump(is_array(123));

	//this determines whether the value is an array, bool, string, etc.
?>