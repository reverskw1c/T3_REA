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

        <aside>
            <h2>
                Thema 3
            </h2>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo $path . "index.php"; ?>">Home</a>
                    </li>
                    <li>Hoofdstuk 2
                        <ul>
                            <li>
                                <a href="<?php echo $path;?>hoofdstuk2/T3_REA_Oefening_2_1.php">Oefening 2.1</a>
                            </li>
                            <li>
                                <a href="<?php echo $path;?>hoofdstuk2/T3_REA_Oefening_2_2.php">Oefening 2.2</a>
                            </li>
                        </ul>
                    </li>
                    <li>Hoofdstuk 3
                        <ul>
                            <li>
                                <a href="<?php echo $path;?>hoofdstuk3/T3_REA_Oefening_3_1.php">Oefening 3.1</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>

        <main id="wrapper">
            <h2>
                Uitwerking oefening 2.2
            </h2>
            <?php
                echo '<img src="../images/avondklok.jpg">';
                echo "<h2>Politie deelde in week tijd ruim tienduizend boetes uit voor negeren avondklok</h2>";
                echo "<strong>Agenten hebben in een week tijd 10.810 boetes moeten uitschrijven voor personen die de avondklok negeerden, zo meldt de politie maandag.</strong>";
                echo '<p>In totaal werden vorige week bijna dertienduizend coronaboetes uitgeschreven, omdat enkele duizenden personen zich bijvoorbeeld niet hielden aan de geldende mondkapjesplicht. Tevens ontvingen 610 mensen een waarschuwing.</p><p>Sinds de invoering van de avondklok op zaterdag 23 januari heeft de politie in het hele land 15.997 boetes uitgeschreven voor het niet naleven van de maatregel. De afgelopen drie dagen verliepen aanzienlijk rustiger dan de eerste dagen dat de beperking van kracht was, aldus de politie.</p><p>Vorige week werd op veel plekken in het land nog hevig gereld tegen de invoering van de avondklok. Inmiddels lijkt de rust enigszins te zijn wedergekeerd. Vorig weekend werd alleen voor ongeregeldheden in Amsterdam en Apeldoorn gevreesd, maar daar bleef het relatief rustig. In de laatstgenoemde stad werden enkele personen aangehouden.
Korpschef Henk van Essen zei voordat de avondklok van kracht werd al dat "de tijd van waarschuwen voorbij was". Dat is volgens Van Essen ook terug te zien in het aantal bekeuringen. Nederlanders die na 21.00 uur zonder zwaarwegende reden toch buiten zijn, riskeren een boete van 95 euro.</p>';

            ?>

        </main>
    </body>
</html>

