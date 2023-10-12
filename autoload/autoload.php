<?php 
    spl_autoload_register(function ($Banque) {
        include 'class/' . $Banque . '.php';
    });

    spl_autoload_register(function ($Personne) {
        include 'class/' .  $Personne . '.php';
    });
?>