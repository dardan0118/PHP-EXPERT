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
            'functie' => 'koning'
        ],
        [
            'voornaam' => 'Donald',
            'achternaam' => 'Trump',
            'functie' => 'president'
        ],
        [
            'voornaam' => 'homer',
            'achternaam' => 'simpson',
            'functie' => 'fabriekarbeider'
        ],
        [
            'voornaam' => 'johan',
            'achternaam' => 'cruyyf',
            'functie' => 'voetbalicoon'
        ],
        [
            'voornaam' => 'badr',
            'achternaam' => 'hari',
            'functie' => 'kickbokser'
        ]
    ];

    foreach ($medewerkers as $medewerker) {
        echo $medewerker['voornaam'] . " ";
        echo $medewerker['achternaam'] . " " . "is een ";
        echo $medewerker['functie'] . " ";
        echo "<br>";
    }
    ?>

</body>

</html>