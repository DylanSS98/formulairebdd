<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->prepare ('UPDATE connexion set email=:email, motdepasse=:motdepasse WHERE id=:num LIMIT 1');

$query->bindValue(':num', $_POST['mdpUtilisateur']);

$query->bindValue(':email', $_POST['mail']);

$query->bindValue(':motdepasse', $_POST['motdepasse']);

$executeIsOk = $query->execute();

if ($executeIsOk){
    echo '<div class="alert alert-success" role="alert">
            <link rel="stylesheet" href="style_index.css">
    Le contact à été mis a jour !
    </div>';
}
else{
     echo '<div class="alert alert-danger" role="alert">
<link rel="stylesheet" href="style_index.css">
     Echec de la mise a jour
     </div>';
}
header ("Refresh: 3;URL=http://localhost/test_php/bdd.php");
exit();
?>


