<?php

include 'database.php';

$sql = "SELECT * FROM `locations`";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">

        <thead>

            <th>name</th>
            <th>address</th>
            <th>city</th>



        </thead>

        <tbody>
            <?php foreach ($database_gegevens as $database_gegevens) : ?>
                <tr>
                    <th><?php echo $database_gegevens['name'] ?></th>
                    <th><?php echo $database_gegevens['address'] ?></th>
                    <th><?php echo $database_gegevens['city'] ?></th>
                </tr>
            <?php endforeach ?>


        </tbody>
    </table>
</body>

</html>