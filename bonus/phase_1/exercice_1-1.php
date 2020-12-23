<?php
echo calculatrice ("1","2","+");
echo '<br>';
echo calculatrice ("2","1","-");
echo '<br>';
echo calculatrice ("2","2","*");
echo '<br>';
echo calculatrice ("4","2","/");
echo '<br>';
echo calculatrice ("2","0","/");
echo '<br>';
function calculatrice ($nombre1,$nombre2,$operateur)
{
    if(!empty($nombre1)&&is_numeric($nombre1)&&!empty($nombre2)&&is_numeric($nombre2)&&!empty($operateur)&&preg_match("`^[\+\-\/\-\*]`",$operateur))
    {
                switch($operateur)
                {
                    case '+';
                    return $nombre1 + $nombre2;
                    break;
                    case '-';
                    return $nombre1 - $nombre2;
                    break;
                    case '*';
                    return $nombre1 * $nombre2;
                    break;

                    case '/';
                    return $nombre1 / $nombre2;
                    break;
                    default:
                    return "une erreur c'est produite vous n'avez pas rentré des valeurs correcte";
                }

    }
}