<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Auto
    {
        public $merk;
        public $kleur;
        public $type;
        public $uitvoering;
        public $brandstof;
    }
    $nieuweAuto  = new Auto();
    $nogEenAndereAuto = new Auto();
    var_dump($nogEenAndereAuto);
    var_dump($nieuweAuto);
    ?>

</body>

</html>