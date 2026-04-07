<?php
if(!isset($_GET['p'])){


 include ROOT_PATH."./view/inc/menu.php";

}elseif(in_array($_GET['p'],ARRAY_VALID_PAGES)){

    include ROOT_PATH."./view/inc/".$_GET['p'].".php";
    
}else{
    include ROOT_PATH."./view/inc/erreur404.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error404</title>
</head>
<body>
    <H1>Error404</H1>
    <img src="/public/img/404.jpg" alt="">
    <p>Voici le <a href="acceuil.php">lien pour retourner a l'acceuil</a></p>
    
</body>
</html>