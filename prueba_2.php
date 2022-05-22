<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-left">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="">
                    <div>
                        <label for="txtUsuario">Usuario</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" required class="form-control">
                    </div>
                    <div class="py-3 m-y-3">
                        <label for="txtPasswd">Passwd</label>
                        <input type="password" name="txtPasswd" id="txtPasswd" required class="form-control">
                    </div>
                    <div class="">
                        <button type="submit" class="form-control btn btn-primary py-3">Enviar</button>

                    </div>

                </form>


            </div>
            
        </div>

    </main>
    
</body>
</html>