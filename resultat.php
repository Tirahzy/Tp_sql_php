<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Afficher les erreurs et les avertissements
error_reporting(E_ALL);
ob_start();
?>

<?php
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    echo "Bonjour " . $_GET['prenom'] . " " . $_GET['nom'];
}
?>
<br>
<?php
echo "<h3> Exo 1 </h3> <br>";
strip_tags($_POST['prenom'], $_POST['nom']);
echo "Bonjour ".$_POST['prenom']." ".$_POST['nom'];
?>


<?php
echo "<h3> Exo 2 </h3> <br>";
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['sexe'])) {
strip_tags($_POST['prenom'], $_POST['nom']);
strip_tags($_POST['age'], $_POST['sexe']);
$age = intval($_POST['age']);
$sexe = $_POST['sexe'];
if ($sexe == "homme" && $age < 18) {
    echo "Bonjour jeune homme";
} elseif ($sexe == "homme" && $age >= 18 && $age <= 60) {
    echo "Bonjour monsieur";
} elseif ($sexe == "femme" && $age < 18) {
    echo "Bonjour jeune fille";
} elseif ($sexe == "femme" && ($age >= 40)) {
    echo "Bonjour madame";
} else {
    echo "Bonjour";
}
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('../inc/template.php'); ?>
