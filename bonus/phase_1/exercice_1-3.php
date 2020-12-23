<?php
echo "Solution A : un placement d'une durée de 5 ans au taux d'intérêt annuel de 4%. ".placement("100000", "5", "0.04");
echo "<br>Solution B : un placement d'une durée de 4 ans au taux d'intérêt annuel de 5%. ".placement("100000", "4", "0.05");
function placement($co, $n, $i){

 return $cn = $co * ($n*$i)+$co;

}
?>