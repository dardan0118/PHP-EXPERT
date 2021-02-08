<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $medewerkers = [
        [
            'voornaam' => 'Willem',
            'achternaam' => 'van Oranje',
            'functie'  => 'koning'
        ],
        [
            'voornaam' => 'Donald',
            'achternaam' => 'Trump',
            'functie'  => 'president'
        ]
    ];
    echo $medewerkers[0]["voornaam"], "\n";
    echo $medewerkers[0]["achternaam"], "\n";
    echo "is een " . $medewerkers[0]["functie"], "\n";
    echo "</br>";
    echo $medewerkers[1]["voornaam"], "\n";
    echo $medewerkers[1]["achternaam"], "\n";
    echo "is een " . $medewerkers[1]["functie"], "\n";

    ?>

</body>

</html>