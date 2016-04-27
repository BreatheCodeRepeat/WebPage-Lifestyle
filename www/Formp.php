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
	
    <form method="post"  enctype="multipart/form-data" action="PHP/introducerepost.php" >
    	<p id="ForumT" style="border-bottom:1px solid #535353">Subiect: 
        <input type="text" name="subiect" maxlength="40" value="ex:Subiect" required>
        </p>
        
    	<p id="ForumT" style="padding :0px">Continut:</p>
     	
        <textarea cols="100" rows="30" name="text" style="margin-left:5%;background:#E1FFFF;" >ex:Continut</textarea>
       	<br>
        <p style="margin-left:5%">Poza 1</p>
       	<input type="file" name="poza1"  style="margin-left:5%">
        <br>
        <p style="margin-left:5%">Poza 2</p>
        <input type="file" name="poza2" style="margin-left:5%">
        <br>
        <p style="margin-left:5%">Poza 3</p>
        <input type="file" name="poza3" style="margin-left:5%">
        <br>
        <p style="margin-left:5%">Poza 4</p>
        <input type="file" name="poza4" style="margin-left:5%">
        <br>
        <p style="margin-left:5%">Poza 5</p>
        <input type="file" name="poza5" style="margin-left:5%">
        <br>
        <p style="margin-left:5%">Poza 6</p>
        <input type="file" name="poza6" style="margin-left:5%" >
        <br>
         <br>
        <input type="submit" style="margin-left:5%" value="Trimite">
    </form>
	    <br>
</div>

</body>


</html>