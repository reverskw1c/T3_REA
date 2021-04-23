<?php
$expires = time() + 3600 * 24 * 14;
setcookie("userCount",0,$expires, "/");


$visitAmount = $_COOKIE["userCount"];
echo "U heeft de website $visitAmount keer de website bekeken";
if(isset($_COOKIE["userCount"]))
{
    $newAmount = $_COOKIE["userCount"] + 1;
    setcookie("userCount",$newAmount,$expires, "/");
} else {
    setcookie("userCount",0,$expires, "/");
}
