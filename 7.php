<?php

$link = mysql_connect("localhost","4K")
or die("Could not connect");

mysql_select_db("bazaosob");
or die("could not select databases");

$query = "SELECT'FROM uczen";
$result = mysql_query($query)
or die ("Quary failed");

while($row = mysql_fetch_array($result)){

   echo"<TR><TD>".$row["imie"].
   "</TD><TD>".$row["nazwisko"].
   "</TD></TR>\n".
}
mysql_free_result($result);
mysql_close($link);


