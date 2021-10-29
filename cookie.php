<!DOCTYPE html>
<head>
<title>KOMIS SAMOCHODOWY</title>
<meta charset="utf-8">

</head>

<body>

<?php

$name ="user";
$value="lemur";

setcookie($name, $value, time() + (86400 * 30), "/");

?>

<?php
if(!isset($_COOKIE[$name])) {
  echo "Cookie named '" . $name . "' is not set!";
} else {
  echo "Cookie '" . $name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$name];
}
?>  




</body>




