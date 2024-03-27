<?php

session_start();
?>

<html>
    <head>
        <title>Page Connexion</title>
        <style>
            h1 { color :red}
        </style>
    </head>
    <body>
<?php include "menu.php"; ?>
<h1>Connexion</h1>

        <form action="" method="POST">
            <label class="renseignement" for="email">Email</label>
            <input type="email" name="email" id ="email">
            <br>
            <br>
            <label class="renseignement" for="motdepasse">Mot de passe </label>
            <input type="password" name="motdepasse" id="motdepasse">
            <input type="submit" value="Se connecter">
        </form>
    </body>
</html>

<?php
if(isset($_POST["email"] , $_POST["motdepasse"])){

    // Récupérer l'utiliseur en bdd grace à son email
    // Connexion à la BDD
    $dsn = 'mysql:dbname=projet;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);

    $sql = "SELECT * FROM `utilisateur` WHERE `email` LIKE :email ";
    $requete = $dbh->prepare($sql);

    $requete->execute(array("email" => $_POST["email"] ) );
    // on récupère le premier résultat
    $resultat = $requete->fetch();

    if ($resultat != false){
        // on verifie le mot de passe
        $mdpHash = $resultat['mdp'];
        if (password_verify( $_POST['motdepasse'], $mdpHash)) {
            echo 'Le mot de passe est valide ! [GOOD]';
            header('Location: pageSecret.html');
            // on peut connecter notre utilisateur
        } else {
            echo ' Le mot de passe est invalide !.';
            
        }

    } else {
      echo 'Votre adresse Email est inconnue'; 
    }

}
?>
<?php
