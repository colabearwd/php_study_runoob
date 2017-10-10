<?php
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-10
 * Time: 20:40
 */

$t =date("H");
if ($t < "20")
{
    echo "have a good day!";
}
else
{
    echo "have a good night";
}
if ($t < "10")
{
    echo "have a good morning!";
}
else if ($t < "20")
{
    echo "have a good day!";
}
else
{
    echo "have a good night";
}

