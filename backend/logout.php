<?php

session_start();

session_destroy(); // Détruit toutes les sessions en cours

header("Location: ../index.php?url='cocohouse/accueil' => 'cocohouse/welcome.C#'"); //Redirection sur la page d'acceuil 

exit();

?>