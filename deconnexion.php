<?php

session_start();
$_SESSION = array();
session_destroy();

header('Location: connexion.php');
session_start();
$_SESSION['info'] = "Vous vous êtes bien déconnecter";

?>
