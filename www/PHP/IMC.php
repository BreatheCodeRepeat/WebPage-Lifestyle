<?php

$greutate=$_POST['greutate'];
$inaltime=$_POST['inaltime'];
$IMC=($greutate*100*100)/($inaltime*$inaltime);

setcookie('IMC',$IMC,mktime(0, 0, 1, 1, 1, 2300),'/');


header("Location:../RIMC.php");
?>