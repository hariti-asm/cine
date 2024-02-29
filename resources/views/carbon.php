<?php
use Carbon\Carbon;

$now=carbon::now();
$timeZn= $now->dst;
// dd($now);
echo "this is tst3" . $timeZn ."<br>"; 
echo $now . "<br>";

$today=carbon::today();
echo $today . "<br>";
$tomorrow=carbon::tomorrow();
echo $tomorrow . "<br>";
$yesterday=carbon::yesterday();
echo $yesterday . "<br>";



$var=$tomorrow->diffForHumans();
echo $var;


?>