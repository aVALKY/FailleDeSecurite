<html>
    <head>
        <title>Page Inscription</title>
        <style>
            h1 { color :red}
        </style>
    </head>
    <body>
    <?php include "menu.php"; ?>
    <h1>Inscription</h1>
    <form action="" method="POST">
        <label class="renseignement" for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label class="renseignement" for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
        <br>
        <label class="renseignement" for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label class="renseignement" for="motdepasse">Mot de passe </label>
        <input type="password" name="motdepasse" id="motdepasse" required>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
    </body>
</html>



<?php
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['motdepasse'])) {

        // Connexion à la BDD
        $dsn = 'mysql:dbname=projet;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $dbh = new PDO($dsn, $user, $password);

        $sql = "INSERT INTO `utilisateur`( `nom`, `prenom`, `email`,  `mdp`) 
                VALUES ( :nom , :prenom , :email, :mdp )";
        $requete = $dbh->prepare($sql);
        // Hashage du mot de passe
        $mdpHash = password_hash( $_POST['motdepasse'] , PASSWORD_DEFAULT);
        $requete->execute(array( "nom" => $_POST['nom'] , "prenom" => $_POST['prenom'] ,
            "email" => $_POST['email'] , "mdp" => $mdpHash
            ));
    }

?>
