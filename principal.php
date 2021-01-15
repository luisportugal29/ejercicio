<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Gama Solutions Test</title>
</head>
<body>
    <section id="barra">
        <div class="d-grid gap-2">
            <button class="btn btn-secondary" type="button"><a href="Principal.php">Registro</a></button>
            <button class="btn btn-secondary" type="button"><a href="Consultas.php">Empleados</a></button>
          </div>
    </section>
    <section id="registro">
        <form action="altaEmpleado.php" method="POST" class="formulario">
            <fieldset class="mb-3">
                <legend>Registro Empleados</legend>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" placeholder="Ingrese Nombre" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha De Nacimiento</label>
                    <input type="date" class="form-control" name="fechaNacimiento">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dirección</label>
                    <input type="text" placeholder="Ingrese Dirección" class="form-control" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" placeholder="Ingrese Numero" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Guardar" class="form-control">
                </div>

            </fieldset>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>