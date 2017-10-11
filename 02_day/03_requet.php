<form method="post"
      action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-11
 * Time: 15:58
 */

$name = $_REQUEST['fname'];
echo $name;
?>

