<?php

$maths = $_POST['maths'];
$science = $_POST['science'];
$english = $_POST['english'];
$gujrati = $_POST['gujrati'];
$hindi = $_POST['hindi'];

echo "<table border = '1'>";

    echo "<tr>";
        echo "<td>Maths</td>";
        echo "<td>Science</td>";
        echo "<td>English</td>";
        echo "<td>Gujrati</td>";
        echo "<td>Hindi</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>$maths</td>";
        echo "<td>$science</td>";
        echo "<td>$english</td>";
        echo "<td>$gujrati</td>";
        echo "<td>$hindi</td>";
    echo "</tr>";

echo "</table>";

$sum = ($maths + $science + $english + $gujrati + $hindi);
echo "Total Marks of the student is $sum";

$percentage = (($sum/500)*100);
echo "<br>Your Percentage is $percentage";

if ($percentage > 85) {
    echo "<br>First Class";
}elseif($percentage > 65){
    echo "<br>Second Class";
}elseif($percentage > 35){
    echo "<br>Pass";
}else{
    echo "<br>Fail";
}