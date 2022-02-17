<?php 

function waiters() {

global $bdd;
$waiters = $bdd->query('SELECT id,name FROM waiter');
return $waiters;

};

?>