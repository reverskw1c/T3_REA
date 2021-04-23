<?php
//var_dump($_POST); //$_POST
print_r($_POST);


$firstname = $_POST["firstname"];

if(!empty($firstname))
{
    echo "<h1>$firstname</h1>";
}




if(isset($_POST["voorwaarden"]))
{
    echo $_POST["voorwaarden"];
}


