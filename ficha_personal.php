<?php
$nombre= "Nahuel Ponce";
$edad= 25;
$fecha= date("15/11/1996");
$peliculas=array ( "La Terminal ", "Titanic ", "Esparta ");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">"


</head>
<body>
    <main class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Ficha Personal</h1>
                </div>
            </div>
            <table class="table table-hover border"> <!-- Etiqueta Table para tablas, "table, table-hover y border" para estilos boostrap-->
                <tr>      <!-- TR es la FILA-->
                    <th>Fecha:</th> <!-- TH la columna -->
                    <th><?php echo $fecha; ?></th>
                </tr>
                <tr>
                    <th>Nombre y Apellido:</th>
                    <th><?php echo $nombre; ?></th>
                </tr>
                <tr>
                    <th>Pelicula Favoritas:</th>
                    <th><?php echo $peliculas[0];
                              echo $peliculas[1]; 
                              echo $peliculas [2];?>
                    </th> <!-- Preguntar si esta forma es buena práctica!--> 
                              
                              
                </tr>
            </table>
    </main>
    
</body>
</html>