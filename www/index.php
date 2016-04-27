<!DOCTYPE HTML>
<html>


<head>


<meta charset="UTF-8">

<meta name="description" content="sport si alimentatie" />

<meta name="keywords" content="sport,alimentatie"/>

<title> Stil de viață sănătos </title>

<link rel="stylesheet" href="CSS/cindex.css" >

<link rel="stylesheet" href="CSS/ctext.css" >

<script src="Javascript/cod.js" type="text/javascript" ></script>

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
	
    <p id="Titlu4"> Stil de viață sănătos </p>
    
    <br>
    <br>
    
    <p style="margin-left:10%; margin-right:10%;">
    Obiceiurile sanatoase privite in ansamblul lor vor aduce rezultate: sanatate mai buna si longevitate!<br>
1. Micul dejun sa fie cel mai important<br>
2. Fructele si legumele NU se consuma impreuna. Timpul necesar pentru digestie(orientativ,fiindca depinde de fiecare individ): apa si sucurile=timp scurt; fructele, shake-urile si supele=1 ora; vegetalele si salatele=2 ore; fasolea si cerealele integrale=2,5-3,5 ore; carnea=mai mult de 3 ore. SFAT: intrebati medicul dvs. despre timpul de digerare a hranei pentru a combina corect alimentele.<br>
3.Sa NU mancam nimic intre mese.<br>
4.Mancati in mod regulat. Nu sariti peste mese.<br>
 5.Mancarea sa fie mestecata foarte bine (ca o pasta)<br>
 6.Apa sa fie bauta inainte de masa sau mult dupa masa,NU in timpul mesei.<br> 
7.Hrana sa fie variata si gustoasa.<br>
8.Ultima masa sa fie cu 3-4 ore inainte de culcare pentru a inlesni digestia<br>
9.Dupa fiecare masa sa facem miscare usoara aproximativ 20-30 minute<br>
10.Sa ne sculam de la masa putin flamanzi. Hrana consumata sa nu depaseasca  nevoile organismului. <br>

<br>
<br>
<br>

<b>1. Alege alimente întregi şi naturale şi încearcă să elimini din alimentaţie mâncarea semipreparată.</b>
<br>
Mâncare semipreparată este orice găseşti într-o cutie, pungă, recipient sau pachet, deşi există şi câteva excepţii de la regulă (cum ar fi o pungă de fasole proaspătă). Majoritatea alimentelor pe care le consumi ar trebuie să fie crude.

<br>
<br>

 <form method="post" action="" name="test1">
 
 <input type="text" name="test2" value="Test" onClick="document.test1.test2.focus">
 <input type="submit" >
 
 </form>  

<br>

<b>2. Alege produse nerafinate în dauna celor rafinate.</b>
<br>
Deşi nu este posibil tot timpul, consumaţi cât mai multe cereale integrale cum ar fi orezul brun, mei, amarant (ştir) şi quinoa. Leguminoasele (fasole, mazăre, linte etc.) sunt de asemenea importante. Îndulcitori "curaţi" sunt mierea, siropul de arţar, sucul de trestie de zahăr.

<br>
<br>
<br>

<b>3. Include nişte proteine, carbohidraţi şi grăsimi la fiecare masă.</b>
<br>
Majoritatea dintre noi consumăm suficienţi carbohidraţi şi grăsimi, însă ne lipsesc proteinele, mai ales în prima parte a zilei, la micul dejun şi la prânz. Proteinele sunt importante pentru muşchi şi te pot ajuta să-ţi scazi pofta de mâncare. Dacă consumi proteine în timpul zilei, rămâi sătul mai mult timp.

<br>
<br>
<br>

<b>4. Fii atent la grăsimi, sare şi zahăr.</b>
<br>
Este mai uşor decât crezi, mai ales dacă ai reuşit să renunţi la mâncarea semipreparată, care este responsabilă pentru majoritatea caloriilor în exces şi a nivelului mare de grăsimi, zahăr şi sare. Alimentatele "curate" sunt sărate de obicei în aceste ingrediente.

<br>
<br>
<br>

<b>5. Ia cinci - şase mese mici pe zi.</b>
<br>
Adică trei mese principale şi două sau trei gustări. Astfel nu vei mai sări peste mese sau nu vei mânca prea mult. De asemenea, se menţine glicemia la parametri buni, pentru a nu rămâne fără energie.

<br>
<br>
<br>

<b>6. Evită băuturile care conţin calorii.</b>
<br>
Băuturile cum ar fi cafea şi sucurile, în medie, adaugă încă 400 - 500 de calorii pe zi. Alege apa, ceaiul neîndulcit, laptele degresat sau sucul natural de fructe diluat în apă minerală.

<br>
<br>
<br>

<b>7. Mişcă-te.</b>
<br>
Exerciţiile zilnice trebuie făcute din foarte multe motive. Nu te ajută numai să scapi de depunerile de grăsime şi să-ţi întăreşti muşchii, ci şi să arzi mai multă energie şi să îţi menţii inima, plămânii şi oasele puternice.

	</p>
    
    <br>
    <br>
    
 <p>Formular de test</p>
 
 
    
</div>



</body>


</html>