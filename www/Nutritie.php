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
	
    <p id="Titlu4">Nutritie</p>
    
    <br>
    <br>
    
    <p style="margin-left:10%; margin-right:10%;">
   Energia furnizata organismului ar trebui sa provina 60-70% din glucidele din cereale, fructe, legume si zarzavaturi, 20-30% din lipide si 10-12% din proteine.<br><br>

O alimentatie sanatoasă implica reducerea consumului de alimente bogate in colesterol (carne – in special carnea rosie, slanina, untul, margarina cu consistenta crescuta, smantana, galbenusul de ou). S-a demonstrat ca un aport crescut de grasimi creste riscul bolilor de inima, al vezicii biliare, al unor tipuri de cancere si al obezitatii.<br><br>

Cel mai potrivit pentru organism este un consum moderat (sub 30% din totalul caloriilor zilnice) de grasimi mai sanatoase: uleiuri vegetale (nehidrogenate) – floarea-soarelui, masline.<br><br>

Este important sa ne hranim cu alimente cu continut redus de zaharuri si dulciuri rafinate, iar alimentatia zilnica sa fie bogata în cereale, fructe si legume.<br><br>

Proteinele au rolul lor in metabolismul zilnic, dar nu trebuie sa depaseasca o treime din totalul caloriilor zilnice consumate. Un aport prea mare de proteine suprasolicita functionarea rinichilor si induc o pierdere accentuata de calciu in organism. Surse de proteine pot fi: leguminoasele uscate (fasolea, lintea, mazarea, bonul, nautul), nucile, painea integrala, cerealele consumate ca fulgi, laptele, ouale.<br><br>
Sursa:Stroescu.go.ro
Sfaturi medicale Aveti mai jos o serie de sfaturi medicale simple, dar foarte utile, care va pot asigura o sanatate de nota 10 !
 

<br>
<br>
<br>
1. Serviti masa de dimineata regulat.<br>
<br>
2. Faceti miscare zilnic.<br>
<br>
3. Beti 2,5 litri de apa in fiecare zi.<br>
<br>
4. Iluminati cât mai bine locuinta si cautati sa respirati aer curat.<br>
<br>
5. Evitati excesurile de ORICE fel.<br>
<br>
6. Aerisiti bine locuinta.<br>
<br>
7. Dormiti între 9-10 ore zilnic.<br>
<br>
8. Cultivati optimismul si increderea in Dumnezeu.<br>
<br>
Sursa:Blogul dr.Calin Marginean.<br>
<br><br>
<br>

Ce sa mananci ca sa fii sanatos ? <br>
<br>
<b>A) MANANCA MAI PUTIN DIN URMATOARELE CATEGORII:</b><br>
<br>
1.GRASIMILE SI ULEIURILE<br>
<br>
Evita carnea grasa, uleiurile pentru salata si pentru gatit,sosurile grase.Evita alimentele prajite.Alimentele pot fi preparate cu putina apa in vase speciale astfel incat sa nu selipeasca continutul.Foloseste cat mai putin margarina.<br>
<br>
2. ZAHARURILE<br>
<br>
Consuma cat mai putin zahar,miere,siropuri,placinte,prajituri,bomboane,produse de patiserie,dulciuri de casa,bauturi dulci,dar si budincile si inghetata,deoarece sunt bogate in zahar.<br>
<br>
3.ALIMENTELE BOGATE IN COLESTEROL<br>
<br>
Limiteaza cu strictete consumul de carne,galbenus de ou,organe,mezeluri.Daca nu poti renunta la produsele lactate,limiteaza-te la lapte degresat si branzeturi sarace in grasime.Foloseste cat mai putincarnea de pasare si pestele.<br>
<br>
4.SAREA<br>
<br>
Nu adauga sare alimentelor in timp ce le pregatesti sau consumi.Evita consumul de produse cu continut ridicat de sare,cum ar fi:muraturi,alunele sarate,uscatelele,sticksurile,floricelele de porumb sarate,snacksurile.<br>
<br>
5.ALCOOLUL<br>
<br>
Nu consuma bauturile ce contin alcool(sub orice forma),nici pe cele care contin cofeina : cola,cafea,ceai negru.
<br>
<br>

<b>B) MANANCA MAI MULT DIN URMATOARELE CATEGORII:</b><br>
<br>
1.CEREALE INTEGRALE<br>
<br>
Consumati  din abundenta cereale integrale:grau,porumb,orez brun,orz,ovaz,mei,secara,precum si produsele obtinute din cereale integrale : paine,paste,turte.<br>
<br>
1.FRUCTE<br>
<br>
Ar fi bine sa nu treaca nici o zi fara sa manancati cateva fructe proaspete, in starea lor naturala. Evitati fructele conservate in sirop si sucurile sarace in fibre.<br>
<br>
2.LEGUME<br>
<br>
Gustati savoarea oricarei varietati de fasole,mazare,linte,naut.<br>
<br>
3.ZARZAVATURI <br>
<br>
Consumati zarzavaturi intr-o varietate cat mai mare. Pregatiti salate proaspete, cu continut scazut in sare si calorii.<br>
<br>
4.APA<br>
<br>
Faceti un obicei din a bea 6-8 pahare de apa zilnic. Din cand in cand pregatiti o limonada sau un ceai din plante medicinale.
NU UITATI: micul dejun sa fie cat mai consistent. Micul dejun ideal este alcatuit din mai multe varietati de cereale preparate termic, daca se poate sa fie servite calde, impreuna cu fructe proaspete si paine integrala. Micul dejun sa fie Marele dejun.
Este recunoscut faptul ca adoptarea unui mod mai simplu de alimentatie imbunatateste starea de sanatate. Oricat de greu ar fi de imaginat, exista o dieta care previne aparitia bolilor cronice degenerative si ajuta la inversarea evolutiei lor. Dieta aceasta este alcatuita dintr-o varietate de alimente ce sunt consumate in starea lor naturala, preparate cat mai simplu, cu putin ulei, zahar, sare, grasimi, Alimentele rafinate sunt excluse.


	</p>
    
    <br>
    <br>
    
</div>

</body>


</html>