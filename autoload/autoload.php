<?php 
    spl_autoload_register(function ($CompteBancaire) {
        include 'class/' . $CompteBancaire . '.php';
    });
?>