<?php
$provincies = [
    [
        'provincie' => 'Groningen',
        'hoofdstad' => 'Groningen',
        'bevolking' => '583990',
        'inwoners_gemeente'  => 'groningen'
    ],
    [
        'provincie' => 'overijssel',
        'hoofdstad' => 'zwolle',
        'bevolking' => '1156431',
        'inwoners_gemeente'  => 'enshede'
    ],
    [
        'provincie' => 'noord-holland',
        'hoofdstad' => 'haarlem',
        'bevolking' => '2853359',
        'inwoners_gemeente'  => 'amsterdam'
    ],
    [
        'provincie' => 'zuid-holland',
        'hoofdstad' => 'den haag',
        'bevolking' => '3673893',
        'inwoners_gemeente'  => 'rotterdam'
    ]
];

foreach ($provincies as $provincie) {
    echo '<h2>' . $provincie['provincie'] . '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad'] . '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking'] . '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente'] . '</li>';
    echo '</ul>';
}
