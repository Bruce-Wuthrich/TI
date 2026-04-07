<?php


require_once './config.php';


if(!isset($_GET['p'])){

    include ROOT_PATH. "/view/inc/menu.php";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
     <nav>
            <div class="navbarre">
                <div id="logo">
                    <img src="/public/img/banniere.jpg">
                </div>
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="nav-toggle-label" aria-label="Menu">
                    <span class="hamburgerline"></span>
                    <span class="hamburgerline"></span>
                    <span class="hamburgerline"></span>
                </label>
                <ul id="liens">
                <li><a href="acceuil.php">Accueil</a></li>
                <li><a href="geographie.php">Geographie</a></li>
                <li><a href="histoire.php">Histoire</a></li>
                <li><a href="culture.php">Culture</a></li>
                <li><a href="galerie.php">galerie</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="liens.php">Liens</a></li>
                </ul>
            </div>
    </nav>
    
</body>
</html>