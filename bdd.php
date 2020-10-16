<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$query = $pdo->prepare('SELECT * FROM connexion');

$executeIsOk = $query->execute();


$utilisateurs = $query->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style_list.css">
    <meta charset="utf-8" />
    <title>Titre</title>
</head>

<body>
<div class="liste">
    <h1>Liste des utilisateurs :</h1>

        <ul>
    <?php foreach ($utilisateurs as $utilisateur): ?>
        <h3>Email :</h3>

            <li>
                <?= $utilisateur['email'] ?>
            </li>

        <h3>Mot de passe :</h3>
            <li>
                <?= $utilisateur['motdepasse']?>

            </li>
        </br>
        <a href="supprimer.php?mdpUtilisateur=<?= $utilisateur['id'] ?>">Supprimer</a>
        <a href="modification.php?mdpUtilisateur=<?= $utilisateur['id'] ?>">Modifier</a>
    <hr>
    <?php endforeach; ?>
        </ul>
</div>
</body>
</html>
