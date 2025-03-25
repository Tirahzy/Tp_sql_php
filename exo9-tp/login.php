<?php
session_start();
require 'Model/pdo.php';

// Création d'un utilisateur de base si la table est vide
$stmt = $dbPDO->query("SELECT COUNT(*) as count FROM users");
$count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];

if ($count == 0) {
    $passwordHash = password_hash('root', PASSWORD_DEFAULT);
    $insert = $dbPDO->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $insert->execute(['username' => 'root', 'password' => $passwordHash]);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $stmt = $dbPDO->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: Views/admin.php');
            exit();
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        $error = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4">Connexion</h2>

    <?php if (isset($error)): ?>
        <div class="bg-red-100 text-red-500 p-3 rounded mb-4">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="space-y-4">
        <div>
            <label for="username" class="block text-sm font-medium">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" required
                   class="w-full p-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium">Mot de passe</label>
            <input type="password" name="password" id="password" required
                   class="w-full p-2 border border-gray-300 rounded-lg">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg w-full">Se connecter</button>
    </form>
</div>

</body>
</html>
