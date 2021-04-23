<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="instructie_forms_result.php" method="POST">
        <p>
            <label>Voornaam
                <input type="text" name="firstname">
            </label>
        </p>
       <p>
           <label for="lastname">Achternaam</label>
           <input type="text" name="lastname" id="lastname" placeholder="Achternaam">
       </p>
        <p>
            <label for="men">Man</label>
            <input type="radio" name="gender" value="man" id="men">
            <label for="vrouw">Vrouw</label>
            <input type="radio" name="gender" value="vrouw" id="vrouw">
        </p>
        <p>
            <label for="voorwaarden">Ik ga akkoord met de voorwaarden.</label>
            <input type="checkbox" name="voorwaarden" value="akkoord met voorwaarden" id="voorwaarden">
        </p>
        <!--<button type="submit">Verzenden</button>-->
        <p>
            <input type="submit" value="Stuur formulier">
        </p>
    </form>
</body>
</html>


