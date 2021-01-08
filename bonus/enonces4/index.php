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
echo "Exercice 4.5
    Les habitants de Zorglub paient l’impôt selon les règles suivantes :
    les hommes de plus de 20 ans paient l’impôt
    les femmes paient l’impôt si elles ont entre 18 et 35 ans
    les autres ne paient pas d’impôt
    Le programme demandera donc l’âge et le sexe du Zorglubien, et se prononcera donc ensuite sur le fait que l’habitant est imposable.
    <form method=\"POST\" action=\"\">
    <label for=\"age\" >Entrer votre âge</label><br>
    <input type=\"number\" name=\"age\" ><br>
    Vous êtres ?
    <label for=\"h\" >un homme </label>
    <input type=\"radio\" name=\"sex\" id=\"h\"value=\"Homme\">
    <label for=\"f\" >une femme </label>
    <input type=\"radio\" name=\"sex\" id=\"f\"value=\"femme\"><br>
    <button type=\"submit\">Envoyer</button>
    </form><br>";

if(!empty($_POST['sex'])&&!empty($_POST['age']))
    {
    //si c'est un homme est que sont âge est supérieur à 20 ans alors il paye
    if($_POST['sex'] =="Homme"&& $_POST['age']  > 20){
    echo "vous payez des impôts";
    }else if($_POST['sex'] =="femme"&& $_POST['age'] >= 18 && $_POST['age'] <=35){// si sont âge est compris entre 18 et 35 et c'est une femme paye pas
        echo "vous payez des impôts";
    }else{//tout les autres ne paye pas d'impôt
        echo "vous payez pas d'impôts";
    }
}
    echo "<hr>";
?>