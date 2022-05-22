<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
    <?php
    $aProductos=array("Tv Samsung","Cafetera Oster","Notebook HP");
    $contador=0;
    echo "<table>";
    while($contador<3){
        echo "<tr><td>" .$aProductos[$contador] . "</td></tr>";
        $contador++;
    }
    echo "<table>";


    ?>
     
    
</body>
</html>