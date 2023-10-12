<?php
require 'autoload\autoload.php';
$compte1 = new CompteBancaire("Alice", 2000);
$compte2 = new CompteBancaire();

$compte1->depot(500);
$compte2->depot(500);

$compte1->affiche();
$compte2->affiche();

?>

