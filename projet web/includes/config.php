<?php

    try
    {


        $bdd = new PDO('mysql:host=localhost;dbname=php_projet;charset=utf8;port=3308', 'root', 'root');


    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    ?>
