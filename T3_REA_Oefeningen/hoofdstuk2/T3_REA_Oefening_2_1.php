<?php
/**
 * User: R. Evers
 * Date: Date
 * File: index.php
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
        <link href="../styles/style.css" rel="stylesheet">

    </head>
    <body>
        <header>
            <h1>
                <?php
                    echo 'Uitwerking van PHP-oefeningen';
                ?>
            </h1>
        </header>

        <?php
        include("../includes/nav.php");
        ?>

        <main id="wrapper">
            <h2>
                Uitwerking oefening 2.1
            </h2>
            <p>
                <?php
                    echo 'dit is een tekst' . 'met daar achter ook ' . 'en nog een'; 
                ?>
            </p>
        </main>
    </body>
</html>

