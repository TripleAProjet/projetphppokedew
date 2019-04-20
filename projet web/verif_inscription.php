<?php
include('includes/config.php');

if ($_FILES['image']['error']) {
  header("location: inscription.php?error=upload");
}
else {
  $extensions_valides = array( 'jpg' , 'jpeg' , 'png' );
  $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
    if ( in_array($extension_upload,$extensions_valides) ) {
      $maxsize = 2097152;
      if ($_FILES['image']['size'] < $maxsize) {
  if (!empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['pseudo'])) {
    $email = htmlspecialchars($_POST['email']);
    $pswd = htmlspecialchars($_POST['mdp']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $connexion = $bdd->prepare('SELECT * FROM user WHERE email = ?');
    $connexion->execute(array($email));
    $number_user = $connexion->rowCount();
    if ($number_user < 1) {
      mkdir('images/'.$email,0777, true);
      $uploads_dir = "images/".$email."/".$email.".".$extension_upload;
      $tmp_name = $_FILES['image']['tmp_name'];
      move_uploaded_file($tmp_name, "$uploads_dir");
      $inscription = $bdd->prepare('INSERT INTO user (pseudo,email,password,image) VALUES (?,?,?,?)');
      $inscription->execute(array($pseudo, $email, $pswd, $uploads_dir));
      header("location: index.php?inscription=ok");
      }
      else header("location: inscription.php?error=already");
    }
  else header("location: inscription.php?error=missing");
}
else header("location: inscription.php?error=size");
}
else header("location: inscription.php?error=type");
}
?>
