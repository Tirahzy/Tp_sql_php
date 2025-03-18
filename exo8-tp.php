<?php
// Activer l'affichage des erreurs pour le debug
ob_start()  ;

// Inclusion des différentes parties
require_once 'header.php';
$content = ob_clean();
require_once 'main.php';
require_once 'footer.php';
require '../inc/template.php';
?>
