<?php require '../Model/pdo.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['libelle'])) {
        $libelle = htmlspecialchars($_POST['libelle']);
        try {
            $stmt = $dbPDO->prepare("INSERT INTO matieres (libelle) VALUES (:libelle)");
            $stmt->bindParam(':libelle', $libelle);
            $stmt->execute();
            echo "Matière ajoutée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir le champ du libellé.";
    }
}
?>

<a href="../index.php">Retour</a>
