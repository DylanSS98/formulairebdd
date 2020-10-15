<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <meta charset="utf-8" />
        <title>Test php</title>
    </head>

    <body>
        <form action="cour.php" method="POST">
            <div>
                <label for="">Email :</label>
                    <input type="email" name="mail">
            </div>

            <div>
                <label for="">Mot de passe :</label>
                    <input type="password" name="motdepasse">
            </div>
            
            <button type="submit">Envoyer</button>
        </form>
    </body>
</html>