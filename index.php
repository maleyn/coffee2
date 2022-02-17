<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
   
</head>

<?php require_once "functions/bdd.php" ?>
<?php require_once "functions/query.php" ?>
<?php $bdd = bdd(); ?>
<?php $waiters = waiters() ?>

<body>
    <?php
    // PDO -> php data object
    echo 'Liste des serveurs :';
    echo "<br><br>";

    foreach($waiters as $waiter) {
        
        echo $waiter['id'];
        echo " -> ";
        echo $waiter['name'];
        echo "<br>";

    }
    ?>
</body>
</html>