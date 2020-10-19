<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style_index.css">
    <meta charset="utf-8" />
    <title>Test php</title>
</head>

<body>
<h1 class="display-4">Formulaire d'inscription</h1>
<form action="cour.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="motdepasse">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</body>
</html>



