<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Afficher les erreurs et les avertissements
error_reporting(E_ALL);
ob_start();
?>

<h1>Exercices - Les fonctions</h1>
<h2>Exercice 1 :</h2>
<p>Reprendre le code du l&#39;exercice 3 sur les parties des boucles.&nbsp;</p>

<ol>
    <li>Faire en sorte de cr&eacute;er une fonction <strong>afficherTable</strong>() qui permet d&#39;afficher la table de multiplication jusqu&#39;&agrave; 3 comme dans <strong>l&#39;&eacute;nnonc&eacute; initial</strong>. Par contre, am&eacute;liorer l&#39;affichage en se basant sur ce mod&egrave;le :&nbsp;<a href="https://www.memozor.com/images/multiplication/tables_a_imprimer/toutes_les_tables/zoom/toutes_les_tables_de_multiplication_noir_et_blanc.jpg">https://www.memozor.com/images/multiplication/tables_a_imprimer/toutes_les_tables/zoom/toutes_les_tables_de_multiplication_noir_et_blanc.jpg</a></li>
    <li>Cr&eacute;er un <strong>param&egrave;tre </strong>(<strong>n</strong>) pour que la table de multiplication affiche jusqu&#39;&agrave; la table (n) inclus. Le n va remplacer la limite de 3 &eacute;crit en dur.</li>
    <li>Ajouter 2 param&egrave;tres (<strong>min)&nbsp;</strong>qui est &eacute;gale par d&eacute;faut &agrave; 1 et un autre (<strong>max)&nbsp;</strong>qui est &eacute;gale par d&eacute;faut &agrave; 9. En soit la table va commencer par 1 x (min) .... 1 x (max) jusqu&#39;&agrave; n x (max)</li>
    <li>Maintenant <strong>tenter </strong>diff&eacute;rentes min, max et n selon les param&egrave;tres que vous souhaitez</li>
</ol>
<?php
function AfficherTable(int $n, int $min = 1, int $max = 9)
{

    for ($j = 0; $j <=$n ; $j++) {
        echo "Table de multiplication de ".$j."<br>";
        for ($i = $min; $i <=$max ; $i++) {
            echo $j.' x '.$i." = ".$n*$i."<br>";
    }
  }
}
AfficherTable(3);

?>


<h2>Exercice 2 :</h2>
<ol>
    <li>Cr&eacute;er une nouvelle fonction qui s&#39;appelle <strong>estPair </strong>et qui prend en param&egrave;tre un nombre (<strong>n</strong>). Cette fonction permet de contr&ocirc;ler si le nombre n est <strong>pair ou pas&nbsp;</strong>, elle doit <strong>retourner vrai </strong>ou <strong>faux </strong>!&nbsp;<br />
        Puis gr&acirc;ce &agrave; l&#39;appel de la fonction, affichez soit la phrase (n) est pair ou (n) est impair<br />
        Pour s&#39;aider, vous pouvez utiliser les modulos <a href="https://www.php.net/manual/fr/language.operators.arithmetic.php">https://www.php.net/manual/fr/language.operators.arithmetic.php</a>&nbsp;ou la fonctions fmod&nbsp;<a href="https://www.php.net/manual/fr/function.fmod.php">https://www.php.net/manual/fr/function.fmod.php</a>&nbsp;</li>
    <li>Maintenant ajouter le <strong>typage</strong> sur les param&egrave;tres et sur le retour de la fonction</li>
</ol>
<?php
function estPair(int $n):bool
{
    if ($n%2==0) {
        return true;
    } else {
        return false;
    }
}
$n=15;
$resultat=estPair($n);
if ($resultat) {
    echo $n." est pair";
} else {
    echo $n." est impair";
}
?>

<?php $content = ob_get_clean(); ?>

 <?php require('../inc/template.php'); ?>