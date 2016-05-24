<?php
	$greeting = "Hello World!";
	echo $greeting;
	echo "<hr/>";
	$x = 10;
	echo $x;
	echo "<hr/>";
	$days = ["m", "t", "w", "th", "f"];


	print_r($days);
	echo "<hr style ='border: solid 1px red;'/>";
	echo $days[1];

	function addTen( $x ){
		echo "***";
		echo gettype($x);
		echo "***";
		return $x + 10;
	}

	echo addTen(2);



?>