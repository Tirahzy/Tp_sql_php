<?php
session_start();
require '../Model/pdo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);

    if (!empty($username) && !empty($password)) {
        try {
            $stmt = $dbPDO->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->execute(['username' => $username, 'password' => $password]);
            header('Location: ../Views/admin.php');
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    header('Location: ../Views/admin.php');
}
