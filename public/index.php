<?php
$page = isset($_GET['p']) ? $_GET['p'] : '';
// les pages + titre des pages
$pages = [
    ''           => ['titre' => 'Athènes – Accueil',     'vue' => '../view/accueil.php'],
    'geographie' => ['titre' => 'Athènes – Géographie',  'vue' => '../view/geographie.php'],
    'histoire'   => ['titre' => 'Athènes – Histoire',    'vue' => '../view/histoire.php'],
    'culture'    => ['titre' => 'Athènes – Culture',     'vue' => '../view/culture.php'],
    'galerie'    => ['titre' => 'Athènes – Galerie',     'vue' => '../view/galerie.php'],
    'contact'    => ['titre' => 'Athènes – Contact',     'vue' => '../view/contact.php'],
    'liens'      => ['titre' => 'Athènes – Liens',       'vue' => '../view/liens.php'],
];
// on recherche si la page existe parmis les pages
if (array_key_exists($page, $pages)) {
    $titre      = $pages[$page]['titre'];
    $fichierVue = $pages[$page]['vue'];
} else {
    // si je ne trouve pas la page sa retourne 404 error
    $titre      = 'Erreur 404 – Page introuvable';
    $fichierVue = '../view/erreur404.php';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titre); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lightbox/css/lightbox.css">
</head>
<body>

    <?php
    require_once '../view/inc/entete.php';
    ?>

    <div class="conteneur">

        <?php
        require '../view/inc/menu.php';
        ?>

        <main class="contenu-principal">
            <?php
            require $fichierVue;
            ?>
        </main>

    </div>

<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<script src="js/menu.js"></script>
</body>
</html>