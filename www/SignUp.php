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

 	<p class="Titlu">Login</p>
    
  <form method="post" action="PHP/login.php" autocomplete="on" class="login">
    
   	<p>Utilizator:</p>
    
    	<input type="text" value="ex:Alex" maxlength="30" name="utilizator" required>
        
        <p>Parola:</p>
        
        <input type="password" value="fasdfa" maxlength="30" name="parola" required>
        
        <br>
        
        <p>Rămâneţi logat?
        
    	<input type="checkbox" name="mentinelogat" >
        
        </p>
        
        <input type="submit" value="Log in" class="sbuton" >
        
  </form>
    

    	<p class="Titlu">Sign Up</p>
    
  <form method="post" action="PHP/signup.php" autocomplete="on" class="signup">
    
   		<p>Utilizator :</p>
    
    	<input type="text" value="ex:Alex" maxlength="30" name="user" required>
        
        <p>Parola :</p>
        
        <input type="password" value="fasdfa" maxlength="30" name="parola" required>
        
        <br>
        <br>
        
		<p>Sex :</p>
        
        <select name="sex">
        
    <option value="M">Masculin</option>
    
    <option value="F">Feminin</option>
    
		</select>
        
        <br>
        <br>
        
        <p> Data nașterii : </p>
        
        <input type="text" value="ex:08/08/1996" maxlength="12" name="datanastere" required >
        
        <br>
        <br>
        
        <p>Nume : </p>
        
        <input type="text" value="ex:Georgel" maxlenght="4" name="nume" required >
        
        <br>
        <br>
        
        <p>Prenume : </p>
        
        <input type="text" value="ex:Andrei" maxlenght="4" name="prenume" required>
        
        <br>
        <br>
        
        <p>E-mail : </p>
        
        <input type="text" value="ex:stildeviatasanatos@hotmail.com" name="email" >
        
        <br>
        <br>
        
        <p>Oraș : </p>
        
        <input type="text" value="ex:București" name="oras" >
        
        <br>
        <br>
        
       <input type="submit" value="Sing up" class="sbuton" >
              
  </form>
    	 <br>
</div>
    
    
</body>


</html>