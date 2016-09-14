<?php

	$firstName = "Karoliina";
	$lastName = "Kullamaa";
	
	// echo trükib välja muutuja väärtuse
	//echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName; 
?>

<br>

<?php

	$age = 21;
	
	if ($age < 18) {
		
		//kui vastus on tõene
		echo "alaealine";
		
	} else {
		
		//kui vastus on väär
		echo "täisealine";
	}		

?>

<br>

<?php

	for ($i = 1; $i <= $age; $i = $i + 1) {  //($i = 0; $i < $age... siis alustab 0st)
		echo $i."palju ";      //$i. näitab localhostis numbreid enne "palju"
	}
	echo "õnne";
?>

<br>

<?php

	echo date("l, d.m.Y, H:i:s");

?>












