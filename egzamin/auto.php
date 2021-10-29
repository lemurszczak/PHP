<!DOCTYPE html>
<head>
<title>KOMIS SAMOCHODOWY</title>
<meta charset="utf-8">
<link rel="stylesheet" href="auto.css">

</head>

<?php

$host = "localhost";
$name = "root";
$pass = "";
$baza = "Komis";

$con = mysqli_connect($host,$name,$pass,$baza);
mysqli_select_db($con,$baza);

$run = "SELECT id,marka,model From samochody";
$k = mysqli_query($con,$run) or die(mysqli_error());


$run1 = "SELECT id,klient From zamowienia";
$k1 = mysqli_query($con,$run1) or die(mysqli_error());








?>


<body>
<div id=baner>
<hi>SAMOCHODY</hi>
</div>



<div id=lewy>
<h2>Wykaz samochodów</h2>

<?php

while($row=mysqli_fetch_row($k))
{
echo"<ul>";
echo"<li>".$row[0]." ".$row[1]." ".$row[2]."</li>";
echo"</ul>";


}

?>

<h2>Zamówienia</h2>

<?php

while($row=mysqli_fetch_row($k1))
{
echo"<ul>";
echo"<li>".$row[0]." ".$row[1]." ".$row[2]."</li>";
echo"</ul>";


}

?>


</div>

<div id=prawy>
<h2>Pełne dane: Fiat</h2>

</div>

<div id=stopka>
<table>
 <tr>
   <td><a target="txt"href='kewrendy.txt'>Kwerendy</a></td>  
   
   <td>Autor:Artru Ciapka </td> 
    
   <td></td>  
 </tr>
</table>

</div>

</body>