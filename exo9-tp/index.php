<?php require 'Model/pdo.php'; ?>
<?php

$query = $dbPDO->query('SELECT nom, prenom FROM etudiants');
$etudiants = $query->fetchAll(PDO::FETCH_ASSOC);


$queryClasses = $dbPDO->query('SELECT libelle FROM classes');
$classes = $queryClasses->fetchAll(PDO::FETCH_ASSOC);

$queryprof = $dbPDO->query('SELECT nom, prenom FROM professeurs');
$profs = $queryprof->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants et des classes</title>
</head>
<body>
<h1>Liste des étudiants</h1>
<ul>
    <?php
    foreach ($etudiants as $etudiant) {
        echo '<li>' . htmlspecialchars($etudiant['prenom']) . ' ' . htmlspecialchars($etudiant['nom']) . '</li>';
    }
    ?>
</ul>

<h1>Liste des classes</h1>
<ul>
    <?php
    foreach ($classes as $classe) {
        echo '<li>' . htmlspecialchars($classe['libelle']) . '</li>';
    }
    ?>
</ul>
    <h1>Liste des professeurs</h1>
<ul>
    <?php
    foreach ($profs as $prof) {
        echo '<li>' . htmlspecialchars($prof['prenom']) . ' ' . htmlspecialchars($prof['nom']) . '</li>';
    }
    ?>
</ul>
</body>
</html>
