<?php
echo "Exercice 4.2<br>
Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !<br>
Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard. Par exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :<br>
\"Dans une minute, il sera 21 heure(s) 33\".<br>
NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier.<br>
<form method=\"POST\" action=\"\">
<label for=\"hour\" >Entrer l'heure</label><br>
<input type=\"number\" name=\"hour\" ><br>
<label for=\"minute\" >Entrer la minute</label><br>
<input type=\"number\" name=\"minute\" >
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['hour'])&&!empty($_POST['minute']))
{
    echo "dans une minute il sera ".$_POST['hour']."h".($_POST['minute'] +1)."minute";
}
    echo "<hr>";

echo "Exercice 4.4<br>
    Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les vingt suivantes et 0,08 E au-delà.<br>
     Ecrivez un algorithme qui demande à l’utilisateur le nombre de photocopies effectuées et qui affiche la facture correspondante.<br>
    <form method=\"POST\" action=\"\">
    <label for=\"nbrcop\" >Entrer le nombre de copie</label><br>
    <input type=\"number\" name=\"nbrcop\" ><br>
    <button type=\"submit\">Envoyer</button>
    </form><br>";
    if(!empty($_POST['nbrcop'])&&is_numeric($_POST['nbrcop']))
    {

       if($_POST['nbrcop']>0&&$_POST['nbrcop']<=10)
       {
            $resufinal = $_POST['nbrcop']*0.10;
        }
        else if($_POST['nbrcop']>10&&$_POST['nbrcop']<=30)
        {
            $result1 = $_POST['nbrcop']-10;
            $result10 = 10 *0.10;
            $result30 = $result1 *0.09;
            $resufinal = $result10+$result30;
        }
        else if($_POST['nbrcop']>30)
        {
            $result1 = parseFloat($_POST['nbrcop'])-10;
            $result10 = 10 *0.10;
            $result301 = parseFloat($_POST['nbrcop'])-20;
           $result30 = $result301 *0.09;
            $resulsup1 = $_POST['nbrcop']-30;
           $resulsup = $resulsup1 *0.08;
          $resufinal = $result10+$result30+$resulsup;
        
        }
        else
        {
            echo "nous avons un souci entré correctement le nombre de copie";
        }
        echo "sa vous coûtera ".$resufinal." euro"; 
    }
    echo "<hr>";
?>