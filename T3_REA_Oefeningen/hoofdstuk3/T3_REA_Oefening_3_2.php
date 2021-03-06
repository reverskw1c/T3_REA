<?php
/**
 * User: R. Evers
 * Date: Date
 * File: oefening 3.1
 */
?>

<?php
$class = "class='green'";
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
    <link href="../styles/style.css" rel="stylesheet">

</head>
<body <?php echo $class; ?>>
<?php
    include "../includes/header.php";
    include "../includes/nav.php";
?>
        <main id="wrapper">
            <h2>
                Uitwerking oefening 3.2
            </h2>
            <p>
                In deze oefening gaan we een template creeëren waar de header, nav en footer worden ingesloten met php.
            </p>
        </main>
<?php
include "../includes/footer.php";
?>
</body>
</html>