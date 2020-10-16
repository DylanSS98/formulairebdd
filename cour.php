<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$mail = $_POST["mail"];
$motdepasse = $_POST["motdepasse"];

$sql = "INSERT INTO connexion (email, motdepasse) VALUES ('$mail', '$motdepasse')";

$pdo->exec($sql);

if ($sql){
    echo "Le contact à été ajouté dans la bdd !";
}
else{
    echo "Echec de l'insertion";
}


 




