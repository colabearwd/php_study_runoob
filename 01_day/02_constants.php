<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-10
 * Time: 20:01
 */
define("GREETING","欢迎访问 runoob.com");
echo GREETING;
echo "<br>";
echo greeting;
?>
<br>
<?php
define("GREETING","欢迎访问 Runoob.com",true);
echo greeting;
?>
<br>
<?php
define("GREETING","欢迎访问 Runoob.com");

function myTest(){
    echo GREETING;
}
myTest();
?>
<br>


