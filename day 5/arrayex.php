<?php

//count
$arr = array('php','c','c++','java','Android');
echo count($arr);
echo "<br><hr><br>";
//array_count_value
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
echo "<br><hr><br>";
//array_sum
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);
echo "<br><hr><br>";
//array_product
$myarray = array(1,2,3,4,5);
echo array_product($myarray);
echo "<br><hr><br>";
//array_reverse
$arr = array("C","php","c","android","php","java");
$revarr = array_reverse($arr);
print_r($revarr);
echo "<br><hr><br>";
//in_array
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;
echo "<br><hr><br>";
//array_rand
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Array Index 
echo $arr[$indexofarray];
echo "<br><hr><br>";
//call random keys and value
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) 
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
echo "<br><hr><br>";
//for unique value
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
echo "<br><hr><br>";
//merge two array
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);
echo "<br><hr><br>";
//serching
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index
echo "<br><hr><br>";
//range
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
}
echo "<br><hr><br>";
//sort
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
echo "<br><hr><br>";
//sort in descending order
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
echo "<br><hr><br>";
//sort in ascending order
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
echo "<br><hr><br>";
//key sort
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br><hr><br>";
//key/reverse sort
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br><hr><br>";
//suffle array
$myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
echo "<br><hr><br>";
//keys exist or not
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);
echo "<br><hr><br>";
//change key case in upper or lower
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
echo "<br><hr><br>";
//combine two array and make associative array
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
echo "<br><hr><br>";
// print last value
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
echo "<br><hr><br>";
//create array from the object and variable
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
echo "<br><hr><br>";
//filp keys and values
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
echo "<br><hr><br>";
//for check diif of 2 array
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
echo "<br><hr><br>";

//comapare two arrat and make new array of same value
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
echo "<br><hr><br>";
//array_value
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
echo "<br><hr><br>";
//add element
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
echo "<br><hr><br>";
//pop
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
echo "<br><hr><br>";

//string split in to array
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
echo "<br><hr><br>";

//make string from the array
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;
echo "<br><hr><br>";
?>