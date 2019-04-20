<?php
include('includes/connexion_check.php');
include('includes/config.php');

  if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    $email = htmlspecialchars($_POST['email']);
    $pswd = htmlspecialchars($_POST['mdp']);
    $connexion = $bdd->prepare('SELECT * FROM user WHERE email = ? && password = ?');
    $connexion->execute(array($email, $pswd));
    $number_user = $connexion->rowCount();
    if ($number_user == 1) {
      $userinfo = $connexion->fetch();
      $_SESSION['email'] = $userinfo['email'];
      $_SESSION['pseudo'] = $userinfo['pseudo'];
      $_SESSION['image'] = $userinfo['image'];
      header("location: index.php?error=no");
    }
    else {
      header("location: connexion.php?error=nouser");
    }
  }
  else {
    header("location: connexion.php?error=missing");
  }


?>
