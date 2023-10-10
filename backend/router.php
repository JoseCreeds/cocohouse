<?php
function route($url) {
    $routes = array(
        'chemin-cache/page1' => 'chemin-reel/page1.php',
         // Map URL cachée à l'emplacement réel
        // Ajoutez d'autres règles de routage ici
        'cocohouse/realisation' => '../adminDasbord.php',
        'cocohouse/index' => '../index.php',
        'cocohouse/apropos' => '../apropos.php',
        'cocohouse/login' => '../connexion.php'



    );

    if (isset($routes[$url])) {
        return $routes[$url];
    } else {
        header("HTTP/1.0 404 Not Found");
        die('Page non trouvée');
    }
}
?>