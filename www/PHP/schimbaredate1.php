<?php

$utilizator=$_POST['user'];
$parola=$_POST['parola'];
$email=$_POST['email'];
$oras=$_POST['oras'];


$servername="localhost";
$username="root";
$password='';
$database="usersdata";
 
$conn = new mysqli($servername, $username, $password, $database);

$sql="SELECT utilizator FROM user WHERE utilizator = '".$utilizator."'";

$resultat=$conn->query($sql);


if($resultat->num_rows == 0){


$sql="UPDATE user
SET utilizator='".$utilizator."',parola='".$parola."',email='".$email."' ,oras='".$oras."' WHERE utilizator = '".$_COOKIE['utilizator']."' AND parola = '".$_COOKIE['parola']."'; ";

$conn->query($sql);

$conn->close();

rename("../Conturi/".$_COOKIE['utilizator'],"../Conturi/".$utilizator);

setcookie("utilizator",$utilizator,mktime(0, 0, 1, 1, 1, 2030),'/');
setcookie("parola",$parola,mktime(0, 0, 1, 1, 1, 2030),'/');

}


header("Location:../ManagerCont.php");

?>