<?php
echo "   <h1> Menu  </h1>  <br> <h2> 1.Tea </h2> <br> <h2> 2.Coffee </h2> <br> <h2> 3.Coco </h2>";
$a = "tea";
switch ($a) {
    case 'tea':
        echo "<br><h2> Your order is tea and it's price is 20rs. Thankyou </h2>";
        break;
    case 'coffee':
        echo "<br><h2> Your order is coffee and it's price is 40rs. Thankyou </h2>";
        break;
    case 'coco':
        echo "<br><h2> Your order is coco and it's price is 60rs. Thankyou </h2>";
        break;

    default:
        echo "<br><h2> Please select from the given Menu  </h2>";
        break;
}