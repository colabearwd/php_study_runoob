<?php
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-11
 * Time: 13:36
 */

$cars = array("volvo","bmw","toyota");
sort($cars);
print_r($cars);
echo "<br>";

$number = array(4,6,2,22,11);
sort($number);
print_r($number);
echo  "<br>";

rsort($cars);
print_r($cars);
echo "<br>";

rsort($number);
print_r($number);
echo "<br>";
echo "<br>";
$age = array("peter"=>"35","ben"=>"37","joe"=>"43");
asort($age);
print_r($age);
echo "<br>";
ksort($age);
print_r($age);
echo "<br>";
echo "<br>";
arsort($age);
print_r($age);
echo "<br>";
krsort($age);
print_r($age);


