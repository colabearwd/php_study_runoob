<?php
header("Content-type: text/html; charset=utf-8");
?>
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-12
 * Time: 10:06
 */


<?php
$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
        'RUNOOB' => '菜鸟教程: http://www.runoob.com',
        'GOOGLE' => 'Google 搜索: http://www.google.com',
        'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    }

} else {
    ?><form action="" method="post">
        <input type="checkbox" name="q[]" value="RUNOOB"> Runoob<br>
        <input type="checkbox" name="q[]" value="GOOGLE"> Google<br>
        <input type="checkbox" name="q[]" value="TAOBAO"> Taobao<br>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>
