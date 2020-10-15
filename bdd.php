<?php

$pdo = new PDO('mysql:host=mysql;dbname=user;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$query = $pdo->query('SELEC * FROM connexion');
 $articles = $query->fetch();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Titre</title>
</head>

<body>
    <p><?= $articles['email']</p> </br>
    <p><?= $articles['motdepasse']</p>
</body>
</html>
