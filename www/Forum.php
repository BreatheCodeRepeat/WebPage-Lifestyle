<!DOCTYPE HTML>
<html>


<head>


<meta charset="UTF-8">

<meta name="description" content="sport si alimentatie" />

<meta name="keywords" content="sport,alimentatie"/>

<title> Stil de viață sănătos </title>

<link rel="stylesheet" href="CSS/cindex.css" >

<link rel="stylesheet" href="CSS/ctext.css" >

</head>


<body>



 <?php
	 
    if(isset($_COOKIE['utilizator']))
	
	echo "<a href=\"ManagerCont.php\" id=\"ls\">Utilizator,".$_COOKIE['utilizator']."</a>";
	
?>



  <br>
  <br>
  <br>
  <br>



<a href="index.php">

<img src="Logo.gif" id="logo" > 

</a>



<div id="meniuri">
  
  
  	<a href="index.php" class="mbuton">Home</a>
    
    <a href="Nutritie.php" class="mbuton"> Nutriție </a>
    
    <a href="Utilitati.php" class="mbuton">Utilități</a>
    
    <a href="Forum.php" class="mbuton">Forum</a>
    
     <?php
	 
    if(!isset($_COOKIE['utilizator']))
	
	echo "<a href=\"SignUp.php\" class=\"mbuton\" style=\"padding:4px 0px 0px 0px; height:46px;\">Login/
    Sign up</a>";
	
	else echo "<a href=\"ManagerCont.php\" class=\"mbuton\" style=\"padding:4px 0px 0px 0px; height:46px;\">Manager Cont</a>";
	
	?>
 
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="continut">
	
	<?php
	
	if(!isset($_COOKIE['utilizator']))
		echo "<p id=\"ForumT\" style=\"border-bottom:1px solid #535353\">Guest</p>
		<p style=\"font:10px;margin-left:5%\">(Logarea este necesara pentru a putea posta)</p>
		";
	
	else{ echo "<div style=\"border-bottom:1px solid #535353;padding:0px 0px 3% 0px;\">
	
	<p id=\"ForumT\">".$_COOKIE['utilizator']."
	
	<img src=\"Conturi/".$_COOKIE['utilizator']."/poza.jpg\" id=\"pozaf\" >"." 
	
	</p>
	
	<a href=\"Formp.php\" id=\"Butonp\">Creati o postare</a>
	
	</div>
	";
	
	}
	
	?> 
	<p id="ForumT2" >Postari:</p>
    <br>
    <br>
    
   
    
    <?php
		
$servername="localhost";
$username="root";
$password='';
$database="usersdata";
 
		$conn = new mysqli($servername, $username, $password, $database);
		
		$sql="SELECT utilizator,subiect,id2 FROM postari";
		
		$rez=$conn->query($sql);
		
		while($row=$rez->fetch_assoc()){
			
			if($row['id2'])
			
			echo "<a id=\"ForumT3\" href=\"Postari/".$row['subiect'].$row['id2']."/Formr.php\"> 
			
			<img src=\"Conturi/".$row['utilizator']."/poza.jpg\" id=\"pozau\" >
			
			".$row['subiect']." ~ Scris de ".$row['utilizator']."</a> <br><br>";
			
			else	
			echo "<a id=\"ForumT3\" href=\"Postari/".$row['subiect']."/Formr.php\"> 
			
			<img src=\"Conturi/".$row['utilizator']."/poza.jpg\" id=\"pozau\" >
			
			".$row['subiect']." ~ Scris de ".$row['utilizator']."</a> <br><br>";
			
		}
		$conn->close();
			
	?>
	
    
        
</div>

</body>


</html>