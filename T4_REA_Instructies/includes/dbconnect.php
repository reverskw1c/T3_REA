<?php
// Open de database connectie en ODBC driver
try
{
    //Zorgt voor de verbinding database
    //$pdo = new PDO("odbc:odbc2sqlserver");
    $pdo = new PDO("odbc:odbc_ijdb");
}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    // Stop het script
    die();
}