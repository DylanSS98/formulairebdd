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
    <meta charset="utf-8" />
    <title>Titre</title>
</head>

<body>
<h1>Liste des utilisateurs</h1>

<ul>
    <?php foreach ($utilisateurs as $utilisateur): ?>

        <li>
            <?= $utilisateur['email'] ?>  <?= $utilisateur['motdepasse']?>
        </li>

    <?php endforeach; ?>

</ul>
</body>
</html>
