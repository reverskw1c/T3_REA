<?php
// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    // Stop het script
    die();
}