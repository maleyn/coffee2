<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
   
</head> 

<?php

require('vendor/autoload.php');
if($_SERVER['HTTP_HOST'] != "coffee-kercode-ren.herokuapp.com") {
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}

function dbaccess() {
  $dbConnection = "mysql:dbname=". $_ENV['DB_NAME'] ."; host=". $_ENV['DB_HOST'] .":". $_ENV['DB_PORT'] ."; charset=utf8";
  $user = $_ENV['DB_USERNAME'];
  $pwd = $_ENV['DB_PASSWORD'];
  
  $db = new PDO ($dbConnection, $user, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  return $db;
}
  
$db = dbaccess();

$req = $db->query('SELECT name FROM waiter')->fetchAll();
$req2 = $db->query('SELECT name FROM edible')->fetchAll();

?>

<body>

    <h1>Liste des Serveurs</h1>
    <?php 
    foreach ($req as $dbreq) {
        echo $dbreq['name'] . "<br>";
      }
      ?>
    <h1>Liste des Cafés</h1>
    <?php 
        foreach ($req2 as $dbreq) {
        echo $dbreq['name'] . "<br>";
      }
      ?>
    
</body>
</html>