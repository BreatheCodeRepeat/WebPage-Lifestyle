<?php

$subiect=$_POST['subiect'];
$marime=0;
$id=0;
$id2=0;

$dc=opendir("../Postari");

while($ok=readdir($dc)){
	$id++;
	if($ok == $subiect || $ok == $subiect.$id2)	$id2++;
}
$id=$id-2;

closedir($dc);
	
if($id2 == 0)

$cd = mkdir("../Postari/".$subiect,0777);

else $cd = mkdir("../Postari/".$subiect.$id2,0777);

$servername="localhost";
$username="root";
$password='';
$database="usersdata";
 
$conn = new mysqli($servername, $username, $password, $database);

$sql="INSERT INTO postari (id2,id,subiect,utilizator) VALUES('".$id2."','".$id."','".$subiect."','".$_COOKIE['utilizator']."');";

$conn->query($sql);


if($id2 == 0){

$fh=fopen("../Postari/".$subiect."/textarea.txt","ab");

if(isset($_POST['text'])){
	$text=$_POST['text'];
	fwrite($fh,$text." \n");	
}
fclose($fh);

}

else{
	$fh=fopen("../Postari/".$subiect.$id2."/textarea.txt","ab");

	if(isset($_POST['text'])){
	$text=$_POST['text'];
	fwrite($fh,$text." \n");	
}
fclose($fh);
	
}

if($id2 == 0){

$fh=fopen("../Postari/".$subiect."/numeu.txt","ab");

	
	fwrite($fh,$subiect." \r\n".$_COOKIE['utilizator']." \r\n".$id2);	
	
	fclose($fh);
}




else{
	$fh=fopen("../Postari/".$subiect.$id2."/numeu.txt","ab");

	fwrite($fh,$subiect." \r\n".$_COOKIE['utilizator']." \r\n".$id2);	
	
	fclose($fh);
}

	


if(isset($_FILES['poza1']))
	{
		
	

		
		if($id2 == 0)
		
		$cale="../Postari/".$subiect."/".basename($_FILES['poza1']['name']);


		else $cale="../Postari/".$subiect.$id2."/".basename($_FILES['poza1']['name']);


		move_uploaded_file($_FILES['poza1']['tmp_name'], $cale);
		
		$sql="UPDATE postari SET poza1= '".$cale."' WHERE subiect='".$subiect."' AND id='".$id."';";
		$conn->query($sql);

	}

if(isset($_FILES['poza2']))
	{
		
		

		if($id2 == 0)		

		$cale="../Postari/".$subiect."/".basename($_FILES['poza2']['name']);

		else $cale="../Postari/".$subiect.$id2."/".basename($_FILES['poza2']['name']);


		move_uploaded_file($_FILES['poza2']['tmp_name'], $cale);

		$sql="UPDATE postari SET poza2= '".$cale."' WHERE subiect='".$subiect."' AND id='".$id."';";
		$conn->query($sql);
	}
	
if(isset($_FILES['poza3']))
	{
		
		

		if($id2 == 0)		

		$cale="../Postari/".$subiect."/".basename($_FILES['poza3']['name']);

		else $cale="../Postari/".$subiect.$id2."/".basename($_FILES['poza3']['name']);
		

		move_uploaded_file($_FILES['poza3']['tmp_name'], $cale);
		
		$sql="UPDATE postari SET poza3= '".$cale."'  WHERE subiect='".$subiect."' AND id='".$id."';";
		$conn->query($sql);

	}

if(isset($_FILES['poza4']))
	{
			
		
		if($id2 == 0)		

		$cale="../Postari/".$subiect."/".basename($_FILES['poza4']['name']);

		else $cale="../Postari/".$subiect.$id2."/".basename($_FILES['poza4']['name']);


		move_uploaded_file($_FILES['poza4']['tmp_name'], $cale);
		
		$sql="UPDATE postari SET poza4= '".$cale."' WHERE subiect='".$subiect."' AND id='".$id."';";
		$conn->query($sql);

	}
	
if(isset($_FILES['poza5']))
	{
		
		
		if($id2 == 0)		

		$cale="../Postari/".$subiect."/".basename($_FILES['poza5']['name']);

		else $cale="../Postari/".$subiect.$id2."/".basename($_FILES['poza5']['name']);
		

		move_uploaded_file($_FILES['poza5']['tmp_name'], $cale);
		
		$sql="UPDATE postari SET poza5= '".$cale."'  WHERE subiect='".$subiect."' AND id='".$id."';";
		$conn->query($sql);

	}
	
if(isset($_FILES['poza6']))
	{
			
		
		if($id2 == 0)		

		$cale="../Postari/".$subiect."/".basename($_FILES['poza6']['name']);

		else $cale="../Postari/".$subiect.$id2."/".basename($_FILES['poza6']['name']);

		move_uploaded_file($_FILES['poza6']['tmp_name'], $cale);
		
		$sql="UPDATE postari SET poza6= '".$cale."' WHERE subiect='".$subiect."' AND id='".$id."';";
		$conn->query($sql);

	}
	
$conn->close();

if($id2 == 0)

copy("../Postari/Formr.php","../Postari/".$subiect."/Formr.php");

else

copy("../Postari/Formr.php","../Postari/".$subiect.$id2."/Formr.php");



header("Location:../Forum.php");

?>