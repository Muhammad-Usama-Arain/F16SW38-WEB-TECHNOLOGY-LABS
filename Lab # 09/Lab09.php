<?php

//Task #01
	$name = "Matt";
	$alphabet_book = array($name[0] => "Mathew's", $name[1] => "Atorney frame", $name[2] => "The", $name[3] => "Thugs.");
	
	for ($i=0; $i < 4; $i++) { 	
		print($alphabet_book[$name[$i]]);
		print(' ');
//its printing 'thugs' two times instead of printing 'the' because when $alphabet_book[t] is iterated it accesses only the last t index. e.g "t => The" and "t => Thugs".
	}
print('</br>');
//Task #02
	for ($i=1; $i < 8; $i++) { 
		for ($j=1; $j < 8; $j++) {
			print(' ');
			print($i * $j);
		}
		print('</br>');
	}
	print('</br>');
	print('</br>');
//Task #03
	$arr = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
	
	foreach ($arr as $key => $value) {
		print("The Capital of " . $key . " is " . $value);
		print('</br>');
	}
	print('</br>');
	print('</br>');
	asort($arr);
	foreach ($arr as $key => $value) {
		print("The Capital of " . $key . " is " . $value);
		print('</br>');
	}	
	print('</br>');
	print('</br>');
//Task #04
	$color = array ( 
		"color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
		"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
		"holes" => array ( "First", 5 => "Second", "Third")
	);
	print($color["holes"][0]);
	print('</br>');
	print($color["color"]["c"]);
	print('</br>');
	print($color["numbers"][1]);
	print('</br>');
	print('</br>');
//Task #05
	$persons = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");
	
	//sorting in asc by value.
	asort($persons);
	foreach ($persons as $key => $value) {
		print($value);
		print('</br>');
	}
	print('</br>');
	print('</br>');
	//sorting in asc by key.
	ksort($persons);
	foreach ($persons as $key => $value) {
		print($key);
		print('</br>');
	}
	print('</br>');
	print('</br>');
	//sorting in desc by value.
	arsort($persons);
	foreach ($persons as $key => $value) {
		print($value);
		print('</br>');
	}
	print('</br>');
	print('</br>');
	//sorting in desc by key.
	krsort($persons);
	foreach ($persons as $key => $value) {
		print($key);
		print('</br>');
	}
	print('</br>');
	print('</br>');
//Task #06
	//it will store a single random value at index '0'.
	$randoms[] = rand(1,200) ;
	if ($randoms[0] == 58) {
		print('Found you 58');
	}
	else{
		print($randoms[0]);
		print('. No 58 here, sorry!');
	}	
?>