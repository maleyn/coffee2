<?php 

function bdd(){
try {
    $bdd = new PDO("mysql:dbname=coffee;host=mysql-69235-0.cloudclusters.net", "admin", "okgVEEPm");
}catch(PDOException $e){
    echo "connexion impossible " . $e->getMessage();
}
return $bdd;
}
