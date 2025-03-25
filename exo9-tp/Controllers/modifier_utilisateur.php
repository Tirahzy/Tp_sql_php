<?php
session_start();
require '../Model/pdo.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username']);

        if (!empty($username)) {
            try {
                $stmt = $dbPDO->prepare("UPDATE users SET username = :username WHERE id = :id");
                $stmt->execute(['username' => $username, 'id' => $id]);
                header('Location: ../Views/admin.php');
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        } else {
            echo "Le champ ne peut pas être vide.";
        }
    }

    $stmt = $dbPDO->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    header('Location: ../Views/admin.php');
}
