<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->prepare('SELECT * FROM connexion WHERE id=:motdepasse');

$query->bindValue(':motdepasse', $_GET['mdpUtilisateur'], PDO::PARAM_INT);

$executeIsOk = $query->execute();

$utilisateur = $query->fetch();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style_index.css">
    <meta charset="utf-8" />
    <title>Formulaire de modification</title>
</head>

<body>

    <form action="modification.php" method="POST">
        <input type="hidden" name="mdpUtilisateur" value="<?=  $utilisateur['id']?>">
        <div>
            <label for="">Email :</label>
            <input type="email" name="mail" value="<?= $utilisateur['email']; ?>">
        </div>

        <div>
            <label for="">Mot de passe :</label>
            <input type="password" name="motdepasse" value="<?= $utilisateur['motdepasse']; ?>">
        </div>

        <button type="submit">Enregistrer</button>
    </form>

</body>
</html>