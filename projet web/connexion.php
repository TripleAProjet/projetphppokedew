<?php include('includes/connexion_check.php');
if ($connexion == 0) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
include('includes/header.php');

if (isset($_GET['error']) && $_GET['error'] == 'missing')
echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Merci de remplir tous les champs !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div></center>';
if (isset($_GET['error']) && $_GET['error'] == 'nouser')
echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Aucun utilisateur ne correspond à ces identifiants !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div></center>';
?>

<main id="main">

<a style="font-size: 20px;" href="inscription.php">Tu peux t'inscrire ici !</a>

  <form method="post" id="connexion-form" action="verif_connexion.php">
  <div id="connexion-email" class="form-group">
    <label for="exampleInputEmail1">Adresse mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre mail">
  </div>
  <div id="connexion-mdp" class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mdp">
  </div>
  <center>
  <button id="buttonmain" type="submit" name="connexion" class="btn btn-primary">Envoyer</button>
  <center>
</form>

</main>

<?php include('includes/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php } else header("location: index.php"); ?>
