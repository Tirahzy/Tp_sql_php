<?php
session_start();
require '../Model/pdo.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    try {
        $stmt = $dbPDO->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        header('Location: ../Views/admin.php');
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    header('Location: ../Views/admin.php');
}
