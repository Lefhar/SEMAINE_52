<?php
echo "Exercice 2.1<br>
Quel résultat produit le programme suivant ?<br>
Variables val, double numériques<br>
Début<br>
Val ← 231<br>
Double ← Val * 2<br>
Ecrire Val<br>
Ecrire Double<br>
Fin<br>
Resultat 462<br>";
$val = 231;
$double = $val*2;
echo $double."<br>
<hr>";
echo "Exercice 2.2<br>
Ecrire un programme qui demande un nombre à l’utilisateur, puis qui calcule et  affiche le carré de ce nombre.<br>";
$nombre =6;
$carre = $nombre * $nombre;
echo "le nombre c'est ".$nombre." et sont carré c'est ".$carre."<br>
<hr>";

echo "Exercice 2.3
Ecrire un programme qui demande son prénom à l'utilisateur, et qui lui réponde par un charmant « Bonjour » suivi du prénom. On aura ainsi le dialogue suivant :<br>
machine : Quel est votre prénom ?<br>
utilisateur : Marie-Cunégonde<br>
machine : Bonjour, Marie Cunégonde ! ».<br>
<form method=\"POST\" action=\"\">
<label for=\"nom\" >Entrer votre nom et prénom</label><br>
<input type=\"text\" name=\"nom\" >
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['nom'])){

    echo "bonjour, ".$_POST['nom']."<br>";
}
echo "<hr>";
echo "Exercice 2.4<br>
Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.<br>
<form method=\"POST\" action=\"\">
<label for=\"prix\" >Entrer le prix</label><br>
<input type=\"text\"   name=\"prix\"><br>
<label for=\"article\" >Entrer le nombre d'article</label><br>
<input type=\"text\"  name=\"article\"><br>
<label for=\"tva\" >Entrer le taux de TVA</label><br>
<input type=\"text\"  name=\"tva\"><br>
<button type=\"submit\">Envoyer</button><br>
</form><br>";
if(!empty($_POST['prix'])&&!empty($_POST['article'])&&!empty($_POST['tva'])&&is_numeric($_POST['prix'])&&is_numeric($_POST['article'])&&is_numeric($_POST['tva'])){
$prix = (int)$_POST['prix'];
$article = (int)$_POST['article'];
$tva = (int)$_POST['tva'];
$totalht = $prix * $article;
$valeurtva = $totalht/100 * $tva;
$totalttc = $valeurtva + $totalht ;

    echo "Le total est de ".$totalht."€ HT + TVA ".$tva."% montant TTC ".$totalttc."€ pour ".$article." Article(s) <br>";
}
echo "<hr>";