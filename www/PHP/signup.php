<?php

$utilizator=$_POST['user'];
$parola=$_POST['parola'];
$sex=$_POST['sex'];
$datan=$_POST['datanastere'];
$prenume=$_POST['prenume'];
$nume=$_POST['nume'];
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

	
$sql="INSERT INTO user (utilizator, parola, sex,datan,prenume,nume,email,oras) VALUES('".$utilizator."','".$parola."','".$sex."','".$datan."','".$prenume."','".$nume."','".$email."','".$oras."');";

$conn->query($sql);


$cd = mkdir("../Conturi/".$utilizator,0777);



header("Location:../Mesaje/signupreusit.php");



}
else header("Location:../Mesaje/signupnereusit.php");

$conn->close();



?>