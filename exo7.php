 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ob_start();
?>

    <h1>Exercices - Les passages de données</h1>
    <h2>Exercice 1 :</h2>
    <p>             
        1) Créer un fichier <code>resultats.php</code> dans le dossier exo (au même niveau que les fichiers exo1.php, exo2.php,...). <br>
        2) Méthode GET : Ici dans le fichier exo7.php, ajouter un lien comme dans le cours du chapitre 6 avec comme paramètre dans l'URL votre nom et votre prenom<br>
        Puis faire afficher le résultat dans la page <code>resultats.php</code><br>
        3) Méthode POST : Puis toujours ici, créer un formulaire pour saisir le nom et prénom comme dans le cours<br>
        Puis faire afficher le résultat dans la page <code>resultats.php</code><br>
        Tester avec plusieurs valeurs :)
    </p>

    <strong>Résultat :</strong>
    <br>

       <?php
       echo "<a href='resultat.php?nom=Normand&prenom=Noah'> Ici le resultat !</a>";
      ?>
 <br>
 <form action="resultat.php" method="post" target="_blank">
     <label for="nom">Nom:</label>
     <input type="text" id="nom" name="nom"><br>
     <label for="prenom">Prénom:</label>
     <input type="text" id="prenom" name="prenom"><br>
     <input type="submit" value="Envoyer" >
 </form>
    

     
    <h2>Exercice 2 :</h2>
    <p>        
       Continuer l'exercice 1 - 3), où grâce à la méthode post, on va à présent récupérer l'âge de la personne et le sexe de la personne pour reprendre les conditions des exercices du chapitre 3 !<br><br>
       Créer tout d'abord les champs de saisi pour l'âge, attention quand on récupérera sa valeur car si on saisi 16, on va en réalité récupérer "16" et non 16. Pour transformer cela en entier, il faut utiliser la fonction <a href="http://php.net/manual/fr/function.intval.php">intval</a><br>
       Puis créer des radio boutons pour le sexe, attention la valeur retournée sera celle inscrite dans la <code>value</code> de l'<code>input</code> <br><br>
       Continuer le formulaire de l'exercice 1 et récupérer les résultats dans le fichier <code>
      resultats.php</code>. Tester votre code par rapport aux conditions de l'<strong>exercice 3 du chapitre 3</strong> !
    </p>
 <br>
 <form action="resultat.php" method="post" target="_blank">
     <label for="nom">Nom:</label>
     <input type="text" id="nom" name="nom"><br>
     <label for="prenom">Prénom:</label>
     <input type="text" id="prenom" name="prenom"><br>
     <label for="age">Âge:</label>
     <input type="text" id="age" name="age"><br>
     <label for="sexe">Sexe:</label><br>
     <input type="radio" id="homme" name="sexe" value="homme">
     <label for="homme">Homme</label><br>
     <input type="radio" id="femme" name="sexe" value="femme">
     <label for="femme">Femme</label><br>
     <input type="submit" value="Envoyer">
 </form>

<?php $content = ob_get_clean(); ?>

<?php require('../inc/template.php'); ?>