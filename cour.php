<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

var_dump($_POST["mail"]);
var_dump($_POST["motdepasse"]);

$mail = $_POST["mail"];
$motdepasse = $_POST["motdepasse"];

$sql = "INSERT INTO connexion (email, motdepasse) VALUES ('$mail', '$motdepasse')";

$pdo->exec($sql);


 




