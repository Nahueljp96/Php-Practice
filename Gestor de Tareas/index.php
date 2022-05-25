<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Gestor de Tareas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Gestor de Tareas</h1>
            </div>
            <div class="row">   
                <div class="col-6">
                    <form action="" method="post">
                        <div class="py-1">
                            <label for="">Titulo</label>
                            <input type="text" name="txttitulo" id="txtTitulo" class="form-control">
                        </div>
                        <div class="py-1">
                            <label for="">Prioridad</label>
                            <select name="" id="" class="form-control">
                                <option value=""disiabled selected>Seleccionar</option>
                                <option value="">Alta</option>
                                <option value="">Media</option>
                                <option value="">Baja</option>
                            </select>
                        </div>
                            
                        <div class="py-1">
                            <label for="">Usuario</label>
                            <select name="lstUsuario" id="lstUsuario" class="form-control">
                                <option value=""disiable selected>Seleccionar</option>
                                <option value="Ana">Ana</option>
                                <option value="Bernabe">Bernabe</option>
                                <option value="Daniela">Daniela</option>
                            </select>
                        </div>
                        <div class="py-1">
                            <label for="lsEstado">Estado</label>
                            <select name="lsEstado" id="lsEstado" class="form-control">
                                <option value=""disiable selected>Seleccionar</option>
                                <option value="Sin asignar">Sin asignar</option>
                                <option value="Asignado">Asignado</option>
                                <option value="En proceso">En proceso</option>
                                <option value="Terminado">Terminado</option>
                            </select>
                        </div>
                        <div class="py-1">
                            <label for="">Descripción</label>
                            <textarea name="txtDescripcion" id="txtDescripcion" class="form-control" style="resize:none"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>

        <div class="row">
            <div class="col-6 pt-3">
                <table class="table table-hover border">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha de inserción</th>
                        <th>Asunto</th>
                        <th>Prioridad</th>
                        <th>Usuarios</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </main>
    
</body>
</html>