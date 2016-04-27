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
	
    <p id="Titlu4">  CALCULATOR - INDICE MASA CORPORALA (IMC) </p>
    
    <p style="margin-left:10%">
    
    VALORI IMC
    <br><br>
18,49 sau mai putin - Subponderal
 <br><br>
intre 18,50 si 24,99 - Greutate normala <br><br>
intre 25,00 si 29,99 - Supraponderal <br><br>
intre 30,00 si 34,99 - Obezitate (gradul I) <br><br>
intre 35,00 si 39,99 - Obezitate (gradul II) <br><br>
40,00 sau mai mult - Obezitate morbida <br><br>

	</p>

     <br><br>
     
     <img src="CALCULATOR_INDICE_MA_71315.jpg" style="margin-left:10%">
    
    <br>
    <br>
    <br>
    
    <form action="PHP/IMC.php" method="post" autocomplete="on" class="login"> 
    
    <p>
    Greutate(in kilograme):
    </p>
    
     <br>
    
   <input type="text" value="ex:50" maxlength="30" name="greutate" required>
   
      <br>
    <br>
   
    <p >
    Inaltime (in centimetri) :
    </p>
    
     <br>
    
   <input type="text" value="ex:170" maxlength="30" name="inaltime" required>
    <br>
    <br>
    <br>
    <br>
    
    <input type="submit" value="Calculeaza IMC" class="sbuton" >
    
    
    </form>
    <br>
    <br>
    <br>
</div>

</body>


</html>