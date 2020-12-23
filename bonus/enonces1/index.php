<?php
echo "Exercice 1.1<br>
Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?<br>
Variables A, B en Entier<br>
Début<br>
A ← 1<br>
B ← A + 3<br>
A ← 3<br>
Fin<br>";
$A = 1;
$B = $A +3;
$A = 3;
echo "A = ".$A."<br>B = ".$B."<br>";

//A = 3
//B = 4 

echo "<hr>";

echo "Exercice 1.2<br>
Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?<br>
Variables A, B, C en Entier<br>
Début<br>
A ← 5<br>
B ← 3<br>
C ← A + B<br>
A ← 2<br>
C ← B – A<br>
Fin<br>";
$A = 5;
$B = 3;
$C = $A + $B;
$A = 2;
$C = $B-$A;
echo "A = ".$A."<br>B = ".$B."<br>C = ".$C."<br>";
// A = 2
// B = 3
// C = 1
echo "<hr>";


echo "Exercice 1.3<br>
Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?<br>
Variables A, B en Entier<br>
Début<br>
A ← 5<br>
B ← A + 4<br>
A ← A + 1<br>
B ← A – 4<br>
Fin<br>";

$A = 5;
$B = $A + 4;
$A = $A + 1;
$B = $A - 4;
echo "A = ".$A."<br>B = ".$B."<br>";
// A = 6
// B = 2

echo "<hr>";

echo "Exercice 1.4<br>
Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?<br>
Variables A, B, C en Entier<br>
Début<br>
 A ← 3<br>
B ← 10<br>
C ← A + B<br>
B ← A + B<br>
A ← C<br>
Fin<br>";
$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;
echo "A = ".$A."<br>B = ".$B."<br>C = ".$C."<br>";
// A = 13
// B = 13
// C = 13
echo "<hr>";
echo "Exercice 1.5<br>
Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?<br>
Variables A, B en Entier<br>
Début<br>
A ← 5<br>
B ← 2<br>
A ← B<br>
B ← A<br>
Fin<br>";

$A = 5;
$B = 2;
$A = $B;
$B = $A;
echo "A = ".$A."<br>B = ".$B."<br>";
// A = 2
// B = 2
echo "<hr>";

echo "Exercice 1.6<br>
Plus difficile, mais c’est un classique absolu, qu’il faut absolument maîtriser :<br>
écrire un algorithme permettant d’échanger les valeurs de deux variables A et B, et ce quel que soit leur contenu préalable.<br>
A ← 5<br>
B ← 6<br>
C ← A<br>
A ← B<br>
B ← A<br>
Fin<br>";
$A = 5;
$B = 6;
$C = $A;
$A = $B;
$B = $C;
echo "A = ".$A."<br>B = ".$B."<br>";
// A = 6
// B = 5
echo "<hr>";

echo "Exercice 1.7
Une variante du précédent : on dispose de trois variables A, B et C. <br>
Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C <br>
(toujours quels que soient les contenus préalables de ces variables). <br>
A ← 5<br>
B ← 6<br>
C ← 4 <br>
D ← A<br>
A ← C<br>
C ← B<br>
B ← D<br>
Fin<br>";
$A = 5;
$B = 6;
$C = 4;
$D = $A;
$A = $C;
$C = $B;
$B = $D;
echo "A = ".$A."<br>B = ".$B."<br>C = ".$C."<br>";
echo "<hr>";

echo 'Exercice 1.8<br>
Que produit l’algorithme suivant ?<br>
Variables A, B, C en Caractères<br>
Début<br>
A ← "423"<br>
B ← "12"<br>
C ← A + B<br>
Fin<br>';
echo "C = 42312";
echo "<hr>";
echo 'Exercice 1.9<br>
Que produit l’algorithme suivant ?<br>
Variables A, B, C en Caractères<br>
Début<br>
A ← "423"<br>
B ← "12"<br>
C ← A & B<br>
Fin<br>';
echo "C = 42312";
echo "<hr>";

?>