<?php
    

    if($_POST){ /* si es postback */ // postback es cuando la variable post recive valores.
        $nombre=$_POST["txtNombre"];
        $clave=$_POST["txtClave"];
        //Si nombre es distinto de vacio Y clave es distinto de vacio entonces:
        if($nombre !="" && $clave !=""){
            //redirecccionar a acceso-confirmado.php
            header("Location: acceso_confirmado.php");
            //sino :
        }else{
            $mensaje ="Valido para usuarios registrado.";
        }
        
    
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Formulario Login</title>
</head>
<body>
    <main class="container">
        <div class="row">    
            <div class="col-12 text-center py-3">
            <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if(isset($mensaje)){ ?> <!-- "isset" es una funcion que corrobora si la variable declara es distinta de vacio-->
                    <div class="alert alert-danger" role="alert">
                    <?php echo $mensaje;?>
                    </div>
                    <?php } ?>
                <form  method="POST" action="">
                    <div>
                    <label for="txtNombre">Nombre</label>
                    <input type="text" name="txtNombre" id="txtNombre"  class="form-control">
                    </div>
                    <div>
                        <label for="txtClave">Clave</label>
                        <input type="passwd" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="py-2">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>