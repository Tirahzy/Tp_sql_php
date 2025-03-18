 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ob_start();
    ?>

 <h1>Exercices - Les variables</h1>
 <h2>Exercice 1 :</h2>
 <p>
     Créer les variables suivantes : $prenom , $date, $heure <br />
     Les remplir avec des valeurs pour que ce soit dynamique <br />
     Puis remplacer le code de l'exercice précédent avec ces variables
 </p>

 <strong>Résultat :</strong>

 <?php
 date_default_timezone_set('Europe/Paris');
 $nom="Noah";
 $date=date('d/m/Y');
 $heure=date('H:i');
 date_default_timezone_set('Europe/Paris');
 echo "Bonjour ".$nom.", nous sommes le ".$date ;
 echo "<br>";
 echo "Il est actuellement ".$heure;

    ?>



 <h2>Exercice 2 :</h2>
 <p>
     Reprendre l'exercice précédent <br>
     Mais cette fois-ci on va créer une variable pour l'heure et les minutes au lieu de juste $heure<br>
     Puis afficher la phrase avec qu'un seul echo grâce à la concaténation<br>
     Puis également avec la méthode de la syntaxe alternative
 </p>

 <strong>Résultat :</strong>

 <?php
 date_default_timezone_set('Europe/Paris');
 $nom="Noah";
 $date=date('d/m/Y');
 $hour=date('H');
 $minutes=date('i');
 echo "Bonjour ".$nom.", nous sommes le ".$date."<br>Il est actuellement ".$hour.":".$minutes;



    ?>

 <h2> Méthode 1 :<br>
     <?php
     date_default_timezone_set('Europe/Paris');
     $nom="Noah";
     $date=date('d/m/Y');
     $hour=date('H');
     $minutes=date('i');
     echo "Bonjour ".$nom.", nous sommes le ".$date."<br>Il est actuellement ".$hour.":".$minutes;

        ?>
 </h2>




 <h2>Méthode 2 :<br>
Bonjour, <?=$nom?>, nous sommes le <?=$date?> <br> Il est actuellement <?=$hour.":".$minutes?>
 </h2>

 <h2>Méthode 3 :<br>

        ?>

 </h2>





 <?php $content = ob_get_clean(); ?>

 <?php require('../inc/template.php'); ?>