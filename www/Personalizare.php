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

 	<div id="setarigenerale">
    	<p class="Titlu3">Manager Cont</p>
        
        <br>
        <br>
        
        <a href="ManagerCont.php" id="meniu2" >Setari generale</a>
        
        <br>
        
         <a href="Personalizare.php" id="meniu2" >Personalizare Cont</a>
         
        <br>
        
         <a href="PHP/deconectare.php" id="meniu2" >Deconectare</a>

    </div>
    
    <div id="opt">
    
  <form method="post" action="PHP/schimbaredate2.php" enctype="multipart/form-data" class="signup">
    
   		<p>Schimba poza de profil :</p>
    
    	<input type="file"  name="poza" >
        
        <br>
        <br>
        
       <input type="submit" value="Modifica" class="sbuton" >
              
  </form>
  
  <br>
  
  <p class="signup">Poza de profil actuala : </p>
  
  <?php
  
  echo "<img src=\"Conturi/".$_COOKIE['utilizator']."/poza.jpg\" id=\"poza\" >"
  
  ?>
  
    </div>
  
</div>

</body>


</html>