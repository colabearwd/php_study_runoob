<?php
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-11
 * Time: 14:43
 */

$x =20;
$y =30;
function addition()
{
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";
echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

