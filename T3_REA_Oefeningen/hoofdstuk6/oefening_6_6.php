<form id="gameFrm" method="get" action="">
    <!-- Aanmaken steen button -->
    <label for="steen">Steen</label>
    <input id="steen" type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">

    <!-- Aanmaken schaar button -->
    <label for="schaar">Schaar</label>
    <input id="schaar" type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">

    <!-- Aanmaken papier button -->
    <label for="papier">Papier</label>
    <input id="papier" type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
</form>

<?php
if (isset($_GET['keuze']))
{
    //Keuze opslaan in variabele
    $keuze = $_GET['keuze'];

    //Keuze laten zien.
    echo "Jij koos: $keuze <br>";

    //Opties voor de computer
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2); //random een keuze maken
    $computerkeuze = $opties[$computerkeuzegetal]; //naam van de keuze oproepen uit de arrau $opties.

    echo "De computer koos: $computerkeuze <br>";

    session_start(); //sessie starten

    //controleren of er al een sessie bestaat met de naam user1
    if(isset($_SESSION['user1']) == false)
    {
        //als de sessie nog NIET bestaat user1 en user2 op 0 zetten.
        $_SESSION['user1'] = 0;
        $_SESSION['user2'] = 0;
    }

    //als de gemaakte keuze gelijk is aan de random keuze van de computer is het gelijk spel.
    if($keuze == $opties[$computerkeuzegetal])
    {
        echo 'Gelijk spel!<br>';
    }
    //Wanneer jij als speler wint
    elseif($keuze == "schaar" && $computerkeuze == "papier" || $keuze == "steen" && $computerkeuze == "schaar" || $keuze == "papier" && $computerkeuze == "steen")
    {
        echo 'Jij wint <br>';

        //Score van user 1 verhogen met 1.
        $_SESSION['user1'] +=1;
    }
    else //Als het niet gelijk is of user 1 wint, dan wint dus user2(computer)
    {
        echo 'De computer scoort<br>';
        $_SESSION['user2'] +=1;
    }

    echo "De score is " . $_SESSION['user1'] . " tegen " . $_SESSION['user2'] . "<br>" . "<br>";

    if($_SESSION['user1'] == '5')
    {
        echo "Jij wint!";
        session_destroy(); //Sessie verwijderen, zodat je weer opnieuw kunt beginnen.
    }
    elseif($_SESSION['user2'] == '5')
    {
        echo "De computer wint!";
        session_destroy(); //Sessie verwijderen, zodat je weer opnieuw kunt beginnen.
    }
}
?>