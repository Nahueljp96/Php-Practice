<?php
$aEmpleados=array();
$aEmpleados[]=array("dni"=>33300123,"nombre"=>"David García","bruto"=>85000.30);
$aEmpleados[]=array("dni"=>40874456,"nombre"=>"Ana Del Valle","bruto"=>90000);                
$aEmpleados[]=array("dni"=>67567565,"nombre"=>"Andrés Perez","bruto"=>100000);                
$aEmpleados[]=array("dni"=>75744545,"nombre"=>"Victoria Luz","bruto"=>70000);
           
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">"
    <title>Lista de Empleados</title>

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1 class="text-center">Lista de Empleados</h1>
            </div>
            <table class="table table-hover border ">
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Sueldo</th>
                </tr>
                <?php
                function calcularNeto($bruto){
                    return $bruto-$bruto *0.17;
                }     ?>
                <?php
                foreach($aEmpleados as $empleado){?>
                <tr>
                    <td><?php echo $empleado["dni"]?></td>
                    <td><?php echo mb_strtoupper( $empleado["nombre"])?></td> <!--MB_str bla bla imprime los caracteres en mayusucula-->
                    <td><?php echo number_format( calcularNeto($empleado["bruto"]), 2, ",", ".");?></td> <!-- Number format da formato a los numeros ingresados-->
                </tr>
                <?php } ?>
                

            </table>

        </div>
    </main>
    
</body>
</html>