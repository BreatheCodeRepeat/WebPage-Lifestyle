<!DOCTYPE HTML>
<html>


<head>


<meta charset="UTF-8">

<meta name="description" content="sport si alimentatie" />

<meta name="keywords" content="sport,alimentatie"/>

<title> Stil de viață sănătos </title>

<link rel="stylesheet" href="../../CSS/cindex.css" >

<link rel="stylesheet" href="../../CSS/ctext.css" >

</head>


<body>



 <?php
	 
    if(isset($_COOKIE['utilizator']))
	
	echo "<a href=\"../../ManagerCont.php\" id=\"ls\">Utilizator,".$_COOKIE['utilizator']."</a>";
	
?>



  <br>
  <br>
  <br>
  <br>



<a href="../../index.php">

<img src="../../Logo.gif" id="logo" > 

</a>



<div id="meniuri">
  
  
  	<a href="../../index.php" class="mbuton">Home</a>
    
    <a href="../../Nutritie.php" class="mbuton"> Nutriție </a>
    
    <a href="../../Utilitati.php" class="mbuton">Utilități</a>
    
    <a href="../../Forum.php" class="mbuton">Forum</a>
    
     <?php
	 
    if(!isset($_COOKIE['utilizator']))
	
	echo "<a href=\"../../SignUp.php\" class=\"mbuton\" style=\"padding:4px 0px 0px 0px; height:46px;\">Login/
    Sign up</a>";
	
	else echo "<a href=\"../../ManagerCont.php\" class=\"mbuton\" style=\"padding:4px 0px 0px 0px; height:46px;\">Manager Cont</a>";
	
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
	   $dc=fopen("numeu.txt","rb");
		$row1=fgets($dc,120);   
		$row2=fgets($dc,120);
		
		echo	"<p id=\"ForumT\" style=\"border-bottom:1px solid #535353\">".$row1."</p> ";
		echo "<p style=\"margin-left:10%;font-style:italic;\">Scris de ".$row2."</p>";
		fclose($dc);
	   
	   ?>
        
        
    	
        
        <br>
        
     	<p style="margin-left:5%;font:40px "Times New Roman", Arial, Helvetica, Geneva, sans-serif;	">
        	<?php
				 $dc=fopen("textarea.txt","rb");
				 fpassthru($dc);
				 fclose($dc);
			?>
        </p>
        
        <br>
        <br>
        
        <?php
			$dc=fopen("numeu.txt","rb");
			 $row1=fgets($dc,120);   
			 $row2=fgets($dc,120);
			 $row3=fgets($dc,120);
			
			fclose($dc);
		
			$row1=preg_replace('/\s+/', '', $row1);
			$row2=preg_replace('/\s+/', '', $row2);
			$row3=preg_replace('/\s+/', '', $row3);
		
			settype($row3,"integer");
			
			$servername="sql313.byethost9.com";
$username="b9_16186346";
$password='mafiot1928';
$database="b9_16186346_user";
 
			$conn = new mysqli($servername, $username, $password, $database);

			$sql="SELECT poza1,poza2,poza3,poza4,poza5,poza6 FROM postari WHERE subiect LIKE '$row1' AND utilizator LIKE '$row2' AND id2 = '$row3' ";
			
			$resultat=$conn->query($sql);
			
			$cvv=$resultat->fetch_assoc();
			
			if($row3!=0){
			
			if(basename($cvv['poza1']) != $row1.$row3)
			 	echo "<a href=\"".basename($cvv['poza1'])."\" ><img src=\"".basename($cvv['poza1'])."\" id=\"imgg\"></a>"; 
				
			if(basename($cvv['poza2']) != $row1.$row3)
				echo "<a href=\"".basename($cvv['poza2'])."\" ><img src='".basename($cvv['poza2'])."' id=\"imgg\"></a>"; 
					
			if(basename($cvv['poza3']) != $row1.$row3)
				echo "<a href=\"".basename($cvv['poza3'])."\" ><img src='".basename($cvv['poza3'])."' id=\"imgg\"></a>"; 
				
			if(basename($cvv['poza4']) != $row1.$row3)
				echo "<a href=\"".basename($cvv['poza4'])."\" ><img src='".basename($cvv['poza4'])."' id=\"imgg\"></a>";
				
			if(basename($cvv['poza5']) != $row1.$row3)
				echo "<a href=\"".basename($cvv['poza5'])."\" ><img src='".basename($cvv['poza5'])."' id=\"imgg\"></a>"; 
				
			if(basename($cvv['poza6']) != $row1.$row3)
				echo "<a href=\"".basename($cvv['poza6'])."\" ><img src='".basename($cvv['poza6'])."' id=\"imgg\" ></a>"; 
			
			}
			
			else{
				
				if(basename($cvv['poza1']) != $row1)
			 	echo "<a href=\"".basename($cvv['poza1'])."\" ><img src=\"".basename($cvv['poza1'])."\" id=\"imgg\"></a>"; 
				
			if(basename($cvv['poza2']) != $row1)
				echo "<a href=\"".basename($cvv['poza2'])."\" ><img src='".basename($cvv['poza2'])."' id=\"imgg\"></a>"; 
					
			if(basename($cvv['poza3']) != $row1)
				echo "<a href=\"".basename($cvv['poza3'])."\" ><img src='".basename($cvv['poza3'])."' id=\"imgg\"></a>"; 
				
			if(basename($cvv['poza4']) != $row1)
				echo "<a href=\"".basename($cvv['poza4'])."\" ><img src='".basename($cvv['poza4'])."' id=\"imgg\"></a>";
				
			if(basename($cvv['poza5']) != $row1)
				echo "<a href=\"".basename($cvv['poza5'])."\" ><img src='".basename($cvv['poza5'])."' id=\"imgg\"></a>"; 
				
			if(basename($cvv['poza6']) != $row1)
				echo "<a href=\"".basename($cvv['poza6'])."\" ><img src='".basename($cvv['poza6'])."' id=\"imgg\"></a>"; 
			
			}
			
			$conn->close();
		?>
        
       	<br>
    
	    <br>
</div>

</body>


</html>