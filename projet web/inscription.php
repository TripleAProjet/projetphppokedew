<?php include('includes/connexion_check.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php include('includes/header.php');
if (isset($_GET['error']) && $_GET['error'] == 'missing')
echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Merci de remplir tous les champs !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div></center>';
if (isset($_GET['error']) && $_GET['error'] == 'already')
echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Ces identifiants sont deja utilisés par un autre utilisateur !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div></center>';
if (isset($_GET['error']) && $_GET['error'] == 'type')
echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Fichier non valide !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div></center>';
if (isset($_GET['error']) && $_GET['error'] == 'size')
echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Fichier trop volumineux !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div></center>';
?>

    <main id="main">

      <form method="post" action="verif_inscription.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse mail</label>
          <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre mail">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pseudo</label>
          <input type="text" name="pseudo" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre pseudo">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="mdp" class="form-control" placeholder="Entrez votre mdp">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Image de profil (type jpg ou png inférieur à 2 Mo)</label>
          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" id="buttonmain" class="btn btn-primary">S'inscrire</button>
      </form>

    </main>

<?php include('includes/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
