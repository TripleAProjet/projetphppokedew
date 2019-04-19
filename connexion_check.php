<?php 
session_start()

  if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $requete = $bdd->prepare('SELECT * FROM user WHERE email = ?');
    $requete->execute(array($email));
    $infouser = $requete->fetch();
  }

?>