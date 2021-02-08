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
        ],
        [
            'voornaam' => 'homer',
            'achternaam' => 'simpson',
            'functie'  => 'fabriekarbeider'
        ],
        [
            'voornaam' => 'johan',
            'achternaam' => 'cruyyf',
            'functie'  => 'voetbalicoon'
        ],
        [
            'voornaam' => 'badr',
            'achternaam' => 'hari',
            'functie'  => 'kickbokser'
        ]
    ];
    echo $medewerkers[0]["voornaam"], "\n";
    echo $medewerkers[0]["achternaam"], "\n";
    echo "is een " . $medewerkers[0]["functie"], "\n";

    echo "</br>";

    echo $medewerkers[1]["voornaam"], "\n";
    echo $medewerkers[1]["achternaam"], "\n";
    echo "is een " . $medewerkers[1]["functie"], "\n";

    echo "</br>";

    echo $medewerkers[2]["voornaam"], "\n";
    echo $medewerkers[2]["achternaam"], "\n";
    echo "is een " . $medewerkers[2]["functie"], "\n";

    echo "</br>";

    echo $medewerkers[3]["voornaam"], "\n";
    echo $medewerkers[3]["achternaam"], "\n";
    echo "is een " . $medewerkers[3]["functie"], "\n";

    echo "</br>";

    echo $medewerkers[4]["voornaam"], "\n";
    echo $medewerkers[4]["achternaam"], "\n";
    echo "is een " . $medewerkers[4]["functie"], "\n";


    ?>

</body>

</html>