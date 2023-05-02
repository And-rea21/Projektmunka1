<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kovács Andrea">
    <meta name="keyword" content="regisztráció, űrlap, stb.">
    <meta name="description" content="példa regisztrációra">
    <title>Űrlap belépésre</title> 
    <link href="link/bootstrap-5.3.0-alpha1-dist/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            &nbsp;
            </div>
            <div class="col">
                <h1>Regisztráció</h1>
            </div>
            <div class="col">
            &nbsp;
            </div>
        </div>
        <form name="Regisztráció" action="reg_muv.php" method="POST">
        <div class="row">
            <div class="col">
            &nbsp;
            </div>
            <div class="col">
                <label>Név:</label><br>
                <label>E-mail cím: </label><br>
                <label>Felhasználó név:</label><br>
                <label>Jelszó:</label><br>
                <label>Jelszó megerősítése:</label><br>

            </div>
            <div class="col">
                <input type="text" name="name">
                <input type="email" name="email">
                <input type="text" name="username">
                <input type="password" name="password">
                <input type="password" name="password2">
            </div>
            <div class="col">
            &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col">
            &nbsp;
            </div>
            <div class="col">
                <input type="submit" name="Regisztráció" value="Regisztráció"><input type="reset" name="adatok törlése" value="Adatok törlése">
            </div>
            <div class="col">
            &nbsp;
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col">
            &nbsp;
            </div>
            <div class="col">
                <a href="index.php">Vissza a főoldalra</a>
            </div>
            <div class="col">
            &nbsp;
            </div>
        </div>
    </div>
    <script src="link/bootstrap-5.3.0-alpha1-dist/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>