<?php



$utilizator=$_POST['utilizator'];
$parola=$_POST['parola'];


$servername="localhost";
$username="root";
$password='';
$database="usersdata";
 
$conn = new mysqli($servername, $username, $password, $database);

$sql="SELECT utilizator,parola FROM user WHERE utilizator = '".$utilizator."' AND parola = '".$parola."'";

$rezultat=$conn->query($sql);

if($rezultat->num_rows){
	
	
	if(isset($_POST['mentinelogat'] )){

	setcookie("utilizator",$utilizator,mktime(0, 0, 1, 1, 1, 2030),'/');
	setcookie("parola",$parola,mktime(0, 0, 1, 1, 1, 2030),'/');

	
}

	else {
		
	setcookie("utilizator",$utilizator,mktime(0, 0, 1, 1, 1, 3030),'/');
	setcookie("parola",$parola,mktime(0, 0, 1, 1, 1, 3030),'/');

}


header("Location:../index.php");

}


else header("Location:../Mesaje/loginfailed.php");

$conn->close();

?>