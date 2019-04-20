<?php
include('includes/connexion_check.php');
include("includes/config.php");
if ($connexion == 1) {

$email = $_SESSION['email'];
$getinfos = $bdd->prepare('SELECT * FROM user WHERE email = ?');
$getinfos->execute(array($email));
$userinfos = $getinfos->fetch();
$image = $userinfos['image'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profil</title>
  </head>
  <body>
<?php include("includes/header.php"); ?>

<main>
  <h3 style="text-align: center;"><?php echo $_SESSION['pseudo']?></h3>
  <img id="profilimg" src="<?php echo $image; ?>" alt="">
</main>

<?php include("includes/footer.php"); ?>
  </body>
</html>
<?php } else header("location: index.php"); ?>
