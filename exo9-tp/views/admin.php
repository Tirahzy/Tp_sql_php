<?php
session_start();

// Redirection si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require '../Model/pdo.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css">
</head>
<body class="p-8 bg-gray-100">

<h1 class="text-3xl font-bold mb-4">Tableau de bord Admin</h1>

<!-- Formulaire d'ajout -->
<div class="bg-white p-6 rounded-lg shadow-md mb-6">
    <h2 class="text-xl font-semibold mb-4">Ajouter un utilisateur</h2>
    <form action="../Controllers/ajouter_utilisateur.php" method="POST" class="space-y-4">
        <div>
            <label for="username" class="block text-sm font-medium">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" required class="w-full p-2 border border-gray-300 rounded-lg">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium">Mot de passe</label>
            <input type="password" name="password" id="password" required class="w-full p-2 border border-gray-300 rounded-lg">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Ajouter</button>
    </form>
</div>

<!-- Liste des utilisateurs -->
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Liste des utilisateurs</h2>
    <table class="w-full table-auto border-collapse border border-gray-200">
        <thead>
        <tr class="bg-gray-100">
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Nom d'utilisateur</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = $dbPDO->query('SELECT * FROM users');
        while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td class='border border-gray-300 px-4 py-2'>{$user['id']}</td>
                    <td class='border border-gray-300 px-4 py-2'>{$user['username']}</td>
                    <td class='border border-gray-300 px-4 py-2'>
                        <a href='../Controllers/modifier_utilisateur.php?id={$user['id']}' class='text-blue-500 mr-2'>Modifier</a>
                        <a href='../Controllers/supprimer_utilisateur.php?id={$user['id']}' class='text-red-500'>Supprimer</a>
                    </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
</body>
</html>
