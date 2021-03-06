<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->prepare('DELETE FROM connexion WHERE id=:motdepasse LIMIT 1');

$query->bindValue(':motdepasse', $_GET['mdpUtilisateur'], PDO::PARAM_INT);

$executeIsOk = $query->execute();

if ($executeIsOk){
    echo '<div class="alert alert-success" role="alert">
            <link rel="stylesheet" href="style_index.css">
    Utilisateur supprimé !
    </div>';
}
else {
    echo '<div class="alert alert-danger" role="alert">
<link rel="stylesheet" href="style_index.css">
    Echec de la suppression !
    </div>';
}
header ("Refresh: 3;URL=http://localhost/test_php/bdd.php");
exit();
