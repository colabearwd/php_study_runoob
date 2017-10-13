<?php
header("Content-type: text/html; charset=utf-8");
?>
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-12
 * Time: 10:05
 */

<?php
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
if($q) {
    if($q =='RUNOOB') {
        echo '菜鸟教程<br>http://www.runoob.com';
    } else if($q =='GOOGLE') {
        echo 'Google 搜索<br>http://www.google.com';
    } else if($q =='TAOBAO') {
        echo '淘宝<br>http://www.taobao.com';
    }
} else {
    ?><form action="" method="get">
        <input type="radio" name="q" value="RUNOOB" />Runoob
        <input type="radio" name="q" value="GOOGLE" />Google
        <input type="radio" name="q" value="TAOBAO" />Taobao
        <input type="submit" value="提交">
    </form>
    <?php
}
?>
