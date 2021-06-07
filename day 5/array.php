<?php

//numerical array

//method 1
    $a[0]=1;
    $a[2]="abc";
    $a[3]=1.9;
    $a[4]="czfa";

//    method 2
    $a[]=1;
    $a[]="abc";
    $a[]=1.9;
    $a[ ]="czfa";


//    method 3

    $a = array(1,3.90,"abc");

    echo "$a[2]";


$z = array(
  1=>2,
  "manav"=>"patel",
  "php"=>"laravel"
);

echo "$z[manav]";