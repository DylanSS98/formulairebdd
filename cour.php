<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$mail = $_POST["mail"];
$motdepasse = $_POST["motdepasse"];

$sql = "INSERT INTO connexion (email, motdepasse) VALUES ('$mail', '$motdepasse')";

$pdo->exec($sql);

if ($sql){
    echo '<div class="alert alert-success" role="alert">
            <link rel="stylesheet" href="style_index.css">
  Enregistrer avec succès !
</div>';
}
else{
    echo '<div class="alert alert-danger" role="alert">
<link rel="stylesheet" href="style_index.css">
        Erreur !
</div>';
}
header ("Refresh: 3;URL=http://localhost/test_php/");
exit();


 




