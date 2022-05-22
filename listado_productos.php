
<?php
ini_set('display_erros',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
                   "marca" => "Hitachi",
                   "modelo" => "554KS20",
                   "stock" => 60,
                   "precio" => 58000,
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
                   "marca" => "Samsung",
                   "modelo" => "Galaxy A30",
                   "stock" => 0,
                   "precio" => 22000,
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
                   "marca" => "Surrey",
                   "modelo" => "553AIQ1201E",
                   "stock" => 5,
                   "precio" => 45000,
);



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Listado de Productos</h1>
            </div>
        </div>
        <table class="table table-hover border">
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
            <tr>
                <td><?php echo $aProductos[0] ["nombre"]; ?></td>
                <td><?php echo $aProductos[0] ["marca"]; ?></td>
                <td><?php echo $aProductos[0] ["modelo"]; ?></td> <!--"echo $aProductos[0]["stock"]==0? Pregunta si es 0 primero, luego va el "ternario" "":"" que es un if y un else combinado y pregunta si es mayhor a 10 hay stock, sino "poco stock"-->
                <td><?php echo $aProductos[0]["stock"]==0? "No hay stock":($aProductos[0]["stock"]>10? "Hay Stock":"Poco Stock"); ?></td>
                <td><?php echo $aProductos[0] ["precio"]; ?></td>
                <td><button class="btn btnhover">Comprar</button></td>
            </tr>
            <tr>
                <td><?php echo $aProductos[1] ["nombre"]; ?></td>
                <td><?php echo $aProductos[1] ["marca"]; ?></td>
                <td><?php echo $aProductos[1] ["modelo"]; ?></td>
                <td><?php echo $aProductos[1]["stock"]==0? "No hay Stock":($aProductos[0]["stock"]>10? "hay stock":"Poco Stock"); ?></td>
                <td><?php echo $aProductos[1] ["precio"]; ?></td>
                <td><button class="btn btnhover">Comprar</button></td>
            </tr>
            <tr>
                <td><?php echo $aProductos[2] ["nombre"]; ?></td>
                <td><?php echo $aProductos[2] ["marca"]; ?></td>
                <td><?php echo $aProductos[02]["modelo"]; ?></td>
                <td><?php echo $aProductos[2] ["stock"]==0?"No hay Stock":($aProductos[1]["stock"]<10? "hay stock":"Poco Stock");?></td>
                <td><?php echo $aProductos[2] ["precio"]; ?></td>
                <td><button class="btn bt-blank">Comprar</button></td>
            </tr>
           

        </table>
            

        </div>
    </main>
    
</body>
</html>