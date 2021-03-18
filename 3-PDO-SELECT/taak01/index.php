<?php

include 'database.php';

$sql = "SELECT * FROM `users`";
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

            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>password</th>
            <th>role</th>


        </thead>

        <tbody>
            <?php foreach ($database_gegevens as $database_gegevens) : ?>
                <tr>
                    <th><?php echo $database_gegevens['firstname'] ?></th>
                    <th><?php echo $database_gegevens['lastname'] ?></th>
                    <th><?php echo $database_gegevens['email'] ?></th>
                    <th><?php echo $database_gegevens['password'] ?></th>
                    <th><?php echo $database_gegevens['role'] ?></th>
                </tr>
            <?php endforeach ?>


        </tbody>
    </table>
</body>

</html>