<?php
$aProductos=array("TV Samsung", "Cafetera Oster", "Notebook HP");
$contador=0;
echo "<table>";
while($contador<3){
    echo "<tr><td>" .$aProductos[$contador]. "</td></tr>";
    $contador++;
}
echo "</table>";