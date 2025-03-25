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
    <?php foreach ($etudiants as $etudiant): ?>
        <li><?= $etudiant['prenom'] . ' ' . $etudiant['nom'] ?></li>
    <?php endforeach; ?>
</ul>

<h1>Liste des classes</h1>
<ul>
    <?php foreach ($classes as $classe): ?>
        <li><?= $classe['libelle'] ?></li>
    <?php endforeach; ?>
</ul>

<h1>Liste des professeurs</h1>
<ul>
    <?php foreach ($profs as $prof): ?>
        <li><?= $prof['prenom'] . ' ' . $prof['nom'] ?></li>
    <?php endforeach; ?>
</ul>

<h2>Ajouter une nouvelle matière</h2>
<form action="./views/nouvelle_matiere.php" method="post">
    <label for="libelle">Libellé de la matière :</label>
    <input type="text" id="libelle" name="libelle" required>
    <button type="submit">Valider</button>
</form>

<h2>Ajouter un nouvel étudiant</h2>
<form action="./views/nouvel_etudiant.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <button type="submit">Valider</button>
</form>

</body>
</html>
