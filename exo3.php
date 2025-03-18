 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ob_start();
?>

    <h1>Exercices - Les conditions</h1>
    <h2>Exercice 1 :</h2>
    <p>             
        1 - Reprendre le code de l'exercice 2 du chapitre 2<br>
        On va y ajouter une condition, qui affichera en dessous "C'est le matin" ou "C'est l'après-midi"<br>
        La condition ici se fera selon la variable qui contient le nombre d'heures<br><br>

        2 - On peut même aller plus loin, en créant une variable $politesse, qui va prendre comme valeur "Bonjour" ou "Bonsoir" <br>
        Il faudra faire à nouveau une condition selon le nombre d'heures et si l'heure est supérieure à 19h alors la variable $politesse prendra comme valeur "Bonsoir" <br/>
        Cette variable $politesse sera à mettre dans la phrase

    </p>

    <strong>Résultat :</strong>

    <?php

    ?>

     <h3> 1)</h3> 

     <?php
     date_default_timezone_set('Europe/Paris');
     $nom="Noah";
     $date=date('d/m/Y');
     $hour=date('H');
     $minutes=date('i');
     echo "Bonjour ".$nom.", nous sommes le ".$date."<br>Il est actuellement ".$hour.":".$minutes;
     if ($hour>=12) {
         echo "C'est le matin";
     }else{
         echo "<br>C'est l'aprèm";
     }
    ?>


    <h3> 2)</h3>
   <?php
   date_default_timezone_set('Europe/Paris');
   $nom="Noah";
   $date=date('d/m/Y');
   $hour=date('H');
   $minutes=date('i');
   $politesse="";
   if ($hour>=12) {
       echo "<br>C'est l'après-midi<br>";
       if ($hour>=19) {
           $politesse="Bonsoir ";
       }
       else{
           $politesse="Bonjour";
       }
   }else{
       echo "C'est le matin<br>";
       $politesse="Bonjour ";
   }
   echo $politesse.$nom.", nous sommes le ".$date."<br>Il est actuellement ".$hour.":".$minutes;
    ?>




    <h2>Exercice 2 :</h2>
    <p>        
        Reprendre l'exercice précédent <br>
        On va créer une variable $isHiver qui prendra par défaut comme valeur <code>true</code><br/>
        Faire une nouvelle condition qui écrira une phrase disant : <br>
        Cet été il ne sera pas <code>10h55</code> mais <code>11h55</code><br>
        ( Bien évidemment l'heure devra être dynamique ;) ) 

    </p>

    <strong>Résultat :</strong>

    <?php

    date_default_timezone_set('Europe/Paris');
    $isHiver=true;
    $nom="Noah";
    $date=date('d/m/Y');
    $hour=date('H');
    $minutes=date('i');
    $politesse="";
    if ($hour>=12) {
        echo "<br>C'est l'après-midi<br>";
        if ($hour>=19) {
            $politesse="Bonsoir ";
        }
        else{
            $politesse="Bonjour";
        }
    }else{
        echo "C'est le matin<br>";
        $politesse="Bonjour ";
    }
    echo $politesse.$nom.", nous sommes le ".$date."<br>Il est actuellement ".$hour.":".$minutes;
    if ($isHiver){
        $hourete=$hour+1;
        echo " En été il sera : ".$hourete.":".$minutes;
    }
    else{
        $hourhiver=$hour-1;
        echo " En hiver il sera : ".$hourhiver.":".$minutes;
    }
    ?>

    <h2>Exercice 3 :</h2>
    <p>        
     Le but sera d'afficher un message différent selon l'âge de la personne, le sexe de la personne et son état matrimonial <br>
     Si c'est un homme et qu'il a moins de 18 ans --> "Bonjour jeune homme"<br>
     Si c'est un homme et qu'il a entre 18 et 60 ans --> "Bonjour monsieur"<br><br>


     Si c'est une femme et qu'elle a moins de 18 ans --> "Bonjour jeune fille"<br>
     Si c'est une femme et qu'elle a plus de 40 ans OU qu'elle soit mariée --> "Bonjour madame"<br><br>

     Il faudra pour cela, créer des variables $age, $sexe, $isMariee

    </p>

    <strong>Résultat :</strong>

    <?php
    $sexe="homme";
    $age=18;
    $isMariee=true;

    if (($sexe=="femme" && $age>=40)||($sexe=="femme"&& $isMariee)){
        echo "Bonjour Madame";
    }
     else if ($sexe=="homme" && $age>=18 && $age<=60){
        echo "Bonjour Monsieur";
    }
    else if ($age<18){
        echo "Bonjour jeune ".$sexe;
    }


    ?>



<?php $content = ob_get_clean(); ?>

<?php require('../inc/template.php'); ?>