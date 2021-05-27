<?php

$a = $_GET['name'];
$b = $_GET['mail'];
$c = $_GET['pass'];
$d = $_GET['mobile'];


echo " hello $a";
echo "<br> you mail id --> $b";

echo "<table>";

echo "<tr>";
if ($c == "abc123")
{
    echo " <td bgcolor='gray'> $c </td>";
}
else
{
         echo " <td bgcolor='cyan'> $c </td>";
}


echo "<br> your mobile number --> $d";


?>