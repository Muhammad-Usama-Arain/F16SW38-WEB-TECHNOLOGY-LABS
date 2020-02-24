<?php

print("Method Overloading: using same method with different parameters.". "\n");

class processItClass {

	function __call($processIt, $noOfArgumentsArray){
			if (count($noOfArgumentsArray) == 2) {
				print('addition of is: ');
				print($noOfArgumentsArray[0] + $noOfArgumentsArray[1] . "\n");
			}
			if (count($noOfArgumentsArray) == 3) {
				print('subtration is: ');
				print($noOfArgumentsArray[0] - $noOfArgumentsArray[1] - $noOfArgumentsArray[2] . "\n");
			}
			if (count($noOfArgumentsArray) == 4) {
				print('multiplication is: ');
				print($noOfArgumentsArray[0] * $noOfArgumentsArray[1] * $noOfArgumentsArray[2] * $noOfArgumentsArray[3] . "\n");
			}
			if (count($noOfArgumentsArray) == 5) {
				print('division is: ');
				print($noOfArgumentsArray[0] / $noOfArgumentsArray[1] / $noOfArgumentsArray[2] / $noOfArgumentsArray[3] / $noOfArgumentsArray[4]);
			}
	}


}

$classObj = new processItClass;
$classObj->processIt(1, 2);
$classObj->processIt(1, 2, 3);
$classObj->processIt(1, 2, 3, 4);
$classObj->processIt(1, 2, 3, 4, 5);

?>