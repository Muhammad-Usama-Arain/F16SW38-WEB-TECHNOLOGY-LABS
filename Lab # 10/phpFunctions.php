<?php


function factorial($number){

	$factorial = 1;

	if ($number == 0) {
	print("factorial of " .$number . " is " .$factorial);
	}
	if ($number < 0) {
	print("factorial of negative number does not exist.");
	}
	if ($number > 0) {
	for($i = $number; $i >=1; $i--){
		$factorial = $factorial * $i;
	}
	print("factorial of " .$number . " is " .$factorial);
	}

}

$number = 7;
factorial($number);

?>