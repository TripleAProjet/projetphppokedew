<?php
    
    try
    {
        
        
        $bdd = new PDO('mysql:host=localhost;dbname=PHP_Projet;charset=utf8', 'root', 'root');

       
        
    }
    
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    ?>

