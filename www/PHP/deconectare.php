<?php

	setcookie("utilizator","",mktime(0, 0, 1, 1, 1, 2009),'/');
	setcookie("parola","",mktime(0, 0, 1, 1, 1, 2009),'/');


	header("Location:../SignUp.php");

?>