<?php require 'Model/pdo.php'; ?>
<?php
$query = $dbPDO->query('SELECT nom, prenom FROM etudiants');
$etudiants = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
</head>
<body>
<h1>Liste des étudiants</h1>
<ul>
<?php
foreach ($etudiants as $etudiant) {
    echo '<li>' . $etudiant['prenom'] . ' ' . $etudiant['nom'] . '</li>';
}
?>
</ul>
</body>
</html>