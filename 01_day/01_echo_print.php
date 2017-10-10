<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-10
 * Time: 18:46
 */
echo "<h2>this is php</h2>";
echo "Hello world!";
echo "php is great!";
?>
<br>




<?php
$txt1 = "学习 php";
$txt2 = "runoob.com";
$car = array("volvo","bmw","toyota");
echo $txt1;
echo "<br>";

echo "在 $txt2 中学习php";
echo "<br>";
echo "我的汽车的品牌是{$car[0]}";
?>
<br>


<?php
print "<h2>php is prefect</h2>";
print "hello world!";
print "我要学习php";
?>

    <br>
<?php
$x = "hello world";
echo $x;
$x = 'hello world';
echo $x;
?>
<br>

<?php
$x = 789;
var_dump($x);
echo "<br>";
$x =-678;
var_dump($x);
echo "<br>";
$x = 0x8c;
var_dump($x);
echo "<br>";
$x = 045;
var_dump($x);
echo "<br>";
?>
<br>

<?php
$x = 10.456;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br>";
?>
<br>
<?php
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
?>
<br>
<?php
class Car{
    var $color;
    function  Car($color="green"){
        $this->color = $color;
    }
    function  what_color(){
        return $this->color;
    }
}
?>
<?php
$x ="hello world";
$x =null;
var_dump($x);
?>























