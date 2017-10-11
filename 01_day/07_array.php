<?php
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-10
 * Time: 21:30
 */

$car = array("volvo","bmw","toyota");
echo "I like ".$car[0].",".$car[1]." and ".$car[2].".";

echo "<br><br><br>";
echo count($cars);
echo "<br><br><br>";
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "<br><br><br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>


<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>


<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>


