<?php
/*
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

        <aside>
            <h2>
                Thema 3
            </h2>
            <nav>
                <ul>
                    <li>
                        <a href="/T3_REA_Oefeningen/index.php">Home</a>
                    </li>
                    <li>Hoofdstuk 2
                        <ul>
                            <li>
                                <a href="/T3_REA_Oefeningen/hoofdstuk2/T3_REA_Oefening_2_1.php">Oefening 2.1</a>
                            </li>
                            <li>
                                <a href="/T3_REA_Oefeningen/hoofdstuk2/T3_REA_Oefening_2_2.php">Oefening 2.2</a>
                            </li>
                        </ul>
                    </li>
                    <li>Hoofdstuk 3
                        <ul>
                            <li>
                                <a href="/T3_REA_Oefeningen/hoofdstuk3/T3_REA_Oefening_3_1.php">Oefening 3.1</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>

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

