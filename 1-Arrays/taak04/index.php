<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

foreach ($speelgoed as $speelgoeden) {
    echo "speelgoed" . " ";
    echo $speelgoeden['naam'] . " " . "uit de catogorie ";
    echo $speelgoeden['soort'] . " " . "kost" . " ";
    echo $speelgoeden['prijs'] . " ";
    echo "<br>";
}

echo "<br>";

foreach ($games as $game) {
    echo "speelgoed" . " ";
    echo $game['naam'] . " " . "uit de catogorie ";
    echo $game['uitgever'] . " " . "kost" . " ";
    echo $game['prijs'] . " ";
    echo "<br>";
}
