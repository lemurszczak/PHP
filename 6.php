<html>

<head> 


<form action=""method="POST">
początek<input name = "poczatek" type="text">
koniec <input name = "koniec" type="text">
losowanie  <input name = "los" type="text">
<input type="submit" name="Hilfe">
</form>
<br>
<?php
if(isset($_POST['Hilfe']))
{
$pocz=$_POST["poczatek"] ;
$kon=$_POST["koniec"] ;
$los=$_POST["los"] ;

$losowanie=rand($pocz,$kon);
for($i=0; $i<$los; $i++)
{

    $losowanie=rand($pocz,$kon);
    echo $losowanie;
    echo("<br>"); 
}
} 
?>

</head>
<body bgcolor=orange></body>
</html>





