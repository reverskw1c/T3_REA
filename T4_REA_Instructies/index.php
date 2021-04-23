<?php
require_once "includes/dbconnect.php";
// Uitvoeren van een SQl query
?>

<?php
/**
 * User: R. Evers
 * Date: Date
 * File: oefening 3.1
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Oefeningen overzicht thema 3 realiseren.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../T3_REA_Oefeningen/styles/style.css" rel="stylesheet">
    <script src="scripts/script.js" defer></script>
</head>
<body  class="greenbg">
<?php
include "../T3_REA_Oefeningen/includes/header.php";
include "../T3_REA_Oefeningen/includes/nav.php";
?>
<main id="wrapper">
<?php
//Exception handler
try
{
    // Query schrijven
    $sql = "SELECT * FROM tblRiddles";

    // Query uitvoeren
    $result = $pdo->query($sql);

}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();
    // Stop het script
    die();
}

// Door de results heen loopen via een while
echo "<table>";
    echo "<tr>";
        echo "<th>ID:</th>";
        echo "<th>Raadsel</th>";
        echo "<th>Oplossing:</th>";
        echo "<th>Bedenker:</th>";
        echo "<th>Datum:</th>";
        echo "</tr>";

    $counter = 0;
    //Gegevens uit de database ophalen.
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr>";
        echo "<td>" . $row["Id"] . "</td>";
        echo "<td>" . $row["RiddleText"] . "</td>";
        echo "<td><button id='link$counter' onclick='showAnswer(\"answer$counter\", this)'>Klik voor het antwoord</button><span id='answer". $counter ."'>" . $row["RiddleAnswer"] . "</span></td>";
        echo "<td>" . $row["Creator"] . "</td>";
        echo "<td>" . $row["CreateDate"] . "</td>";
        echo "</tr>";
        $counter++;
    }
echo "</table>";
?>
</main>
<?php
include "../T3_REA_Oefeningen/includes/footer.php";
?>
</body>
</html>