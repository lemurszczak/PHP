<html>

<head> 


<form action=""method="POST">
oceny<input name = "poczatek" type="text">
oceny<input name = "koniec" type="text"> 
liczba uczniów <input name = "los" type="text">
<input type="submit" name="a">
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
<body bgcolor=white></body>
</html>





