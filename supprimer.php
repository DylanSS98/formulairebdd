<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->prepare('DELETE FROM connexion WHERE id=:motdepasse LIMIT 1');

$query->bindValue(':motdepasse', $_GET['mdpUtilisateur'], PDO::PARAM_INT);

$executeIsOk = $query->execute();

if ($executeIsOk){
    echo "L'utilisateur à bien été supprimé";
}
else {
    echo "Echec de la suppression";
}
header ("Refresh: 3;URL=http://localhost/test_php/bdd.php");
exit();
