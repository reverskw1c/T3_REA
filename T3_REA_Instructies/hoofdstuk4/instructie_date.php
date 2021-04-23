<?php

    //echo $_SERVER['REQUEST_URI'];
    //Het veranderen van de timzone
    date_default_timezone_set("Europe/Amsterdam");

    echo strtotime("tomorrow"); //1-1-1970

    echo date("d - m - Y", strtotime("2 days"));


//PasCal casing
    function ShowMessage($name)
    {
      return "Hallo" . $name;

    }
    echo ShowMessage("Remco");
    echo ShowMessage("Piet");

    $carbrand = "Tesla";
    $color = "red";

    if($carbrand == "Ford" || $color == "red")
    {
        echo "Ik heb een rode Ford";
    }
    elseif ($carbrand == "Ford" && $color == "Black")
    {
        echo "Ik heb een zwarte Ford";
    }

/*
    switch($carbrand)
    {
        case "Ford":
            echo "Je moet naar de Ford dealer";
            break;
        case "Tesla":
            echo "Je moet naar de Tesla dealer";
            break;
        default:
            echo "Het merk is neit bekend";
    }
*/
?>