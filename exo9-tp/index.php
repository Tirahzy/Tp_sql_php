<?php require 'Model/pdo.php'; ?>

<?php
// Récupération des étudiants
$query = $dbPDO->query('SELECT nom, prenom FROM etudiants');
$etudiants = $query->fetchAll(PDO::FETCH_ASSOC);

// Récupération des classes
$queryClasses = $dbPDO->query('SELECT libelle FROM classes');
$classes = $queryClasses->fetchAll(PDO::FETCH_ASSOC);

// Récupération des professeurs
$queryprof = $dbPDO->query('SELECT nom, prenom FROM professeurs');
$profs = $queryprof->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants et des classes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8">

<h1 class="text-2xl font-bold mb-4">Liste des étudiants</h1>
<table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
    <tr class="bg-gray-100">
        <th class="border border-gray-300 px-4 py-2">Prénom</th>
        <th class="border border-gray-300 px-4 py-2">Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($etudiants as $etudiant) { ?>
        <tr>
            <td class="border border-gray-300 px-4 py-2"><?= $etudiant['prenom'] ?></td>
            <td class="border border-gray-300 px-4 py-2"><?= $etudiant['nom'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<h1 class="text-2xl font-bold mt-6 mb-4">Liste des classes</h1>
<table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
    <tr class="bg-gray-100">
        <th class="border border-gray-300 px-4 py-2">Libellé</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($classes as $classe) { ?>
        <tr>
            <td class="border border-gray-300 px-4 py-2"><?= $classe['libelle'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<h1 class="text-2xl font-bold mt-6 mb-4">Liste des professeurs</h1>
<table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
    <tr class="bg-gray-100">
        <th class="border border-gray-300 px-4 py-2">Prénom</th>
        <th class="border border-gray-300 px-4 py-2">Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($profs as $prof) { ?>
        <tr>
            <td class="border border-gray-300 px-4 py-2"><?= $prof['prenom'] ?></td>
            <td class="border border-gray-300 px-4 py-2"><?= $prof['nom'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
