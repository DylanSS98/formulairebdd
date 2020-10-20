<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style_index.css">
    <meta charset="utf-8" />
    <title>Test php</title>
</head>

<body>

<form method="POST" action="cour.php" id="login-form" class="login-form" autocomplete="off" role="main">
    <h1 class="a11y-hidden">Formulaire d'inscription</h1>
    <div>
        <label class="label-email">
            <input type="email" class="text" name="mail" placeholder="Email" tabindex="1" required />
            <span class="required">Email</span>
        </label>
    </div>
    <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
    <label class="label-show-password" for="show-password">
        <span>Show Password</span>
    </label>
    <div>
        <label class="label-password">
            <input type="text" class="text" name="motdepasse" placeholder="Password" tabindex="2" required />
            <span class="required">Mot de passe</span>
        </label>
    </div>
    <input type="submit" value="Log In" />
    <div class="email">
        <a href="#">Mot de passe oublié?</a>
    </div>
    <figure aria-hidden="true">
        <div class="person-body"></div>
        <div class="neck skin"></div>
        <div class="head skin">
            <div class="eyes"></div>
            <div class="mouth"></div>
        </div>
        <div class="hair"></div>
        <div class="ears"></div>
        <div class="shirt-1"></div>
        <div class="shirt-2"></div>
    </figure>
</form>
</body>
</html>



