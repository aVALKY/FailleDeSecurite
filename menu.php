<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAILLES</title>
</head>
<body> 
</body>
</html>


<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>

<nav>
    <ul>
        <?php
            //si je suis connecté
        if (isset($_SESSION['email'])) { ?>
        
        <li ><a href="deconexion.php">Se déconnecter</a></li>
        <li ><a href="inscription.php">s'inscrire</a></li>
        <li ><a href="connexion.php">se connecter</a></li>
        
        

     <?php }  
        else {
            // je ne suis pas connecté
            ?>
        <li ><a href="connexion.php">Se connecter</a></li>
        <li ><a href="inscription.php">s'inscrire</a></li>
      <?php  } ?>

    </ul>
</nav>
<div>
    <h1 id="titre">Bienvenu sur mon site de failles de sécurité</h1>
    <p class="txt">A toi utilisateur, je t'invite a t'inscrire et te connecter sur mon site pour découvrir les differentes failles de sécurité que j'ai volontairement laisser pour toi. <br/> Ton objectif est simple. Trouve les differentes Failles en navigant dans le labyrinthe et retrouve moi a la fin.</p>
    <h2 id="sign">VALKY</h2>
</div>

