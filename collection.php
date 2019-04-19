<?php
    
    include('config.php');

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

<body>

    <?php include('header.php'); ?> 
    <main>
     <div class="row">
        <?php

        $sql = 'SELECT * FROM pokemon WHERE id_user=1 ORDER BY nom ASC;';
    
    $table = $bdd->query($sql);

    if ($table->rowCount()> 0) {
        
        $stmt = $bdd->prepare('SELECT * FROM pokemon WHERE id_user=1 ORDER BY nom ASC;');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        
        $pokemon = $stmt->fetchAll();

        foreach($pokemon as $row) {
            $nom=$row['nom'];
            $pv=$row['pv'];
            $attaque=$row['attaque'];
            $defense=$row['defense'];
            $vitesse=$row['vitesse'];
            $image=$row['image'];


            

        
    ?>
   
     <article id="pokemonBox"> 

        <h2><?php echo $nom?></h2>
        <p>PV:<?php echo $pv?></p>
        <p>Attaque:<?php echo $attaque?></p>
        <p>Défense:<?php echo $defense?></p>
        <p>Vitesse:<?php echo $vitesse?></p>
        <img id="photoPokemon"src="<?php echo $image?>">




     </article>

     <?php }} ?>
 </div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>