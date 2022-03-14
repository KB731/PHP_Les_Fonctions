<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $chaine = "bonjour tout le monde";
    $chaine = strtoupper($chaine);
    echo $chaine . "<br />";

    $chaine = "BONJOUR TOUT LE MONDE";
    $chaine = strtolower($chaine);
    echo $chaine . "<br />";

    $chaine = "Bonjour tout le monde";
    $longueur = strlen($chaine);
    echo $longueur . "<br />";

    $chaine = "Bonjour tout le monde";
    $chaine = str_replace("tout", "tous", $chaine);
    echo $chaine . "<br />";

    ?>
</body>
</html>