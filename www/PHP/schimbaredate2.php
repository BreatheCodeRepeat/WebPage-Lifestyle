<?php

$poza=$_FILES['poza']['name'];
$cale="../Conturi/".$_COOKIE['utilizator']."/".basename($_FILES['poza']['name']);

move_uploaded_file($_FILES['poza']['tmp_name'], $cale);

rename($cale,"../Conturi/".$_COOKIE['utilizator']."/"."poza.jpg");



header("Location:../Personalizare.php");

?>