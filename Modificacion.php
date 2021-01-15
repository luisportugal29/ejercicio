<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<section id="barra">
        <div class="d-grid gap-2">
            <button class="btn btn-secondary" type="button">Registro</button>
            <button class="btn btn-secondary" type="button">Empleados</button>
            <button class="btn btn-secondary" type="button">Actualizacion</button>
          </div>
    </section>
   <section id="formactualizar">
       <?php
            include_once("conexion.php");
            $id = $_POST['iden'];
            $sql = "select nombre,direccion,telefono,fechaNacimiento from empleados where id={$id}";
            $resultado = $conn->query($sql);
            $nombre ="";
            $direccion ="";
            $telefono = "";
            $fecha ="";

            while($empleado = $resultado->fetch_assoc()){
                $nombre = $empleado['nombre'];
                $direccion = $empleado['direccion'];
                $telefono = $empleado['telefono'];
                $fechaNacimiento =$empleado['fechaNacimiento'];
            }
            $conn->close();
       ?>
       <form action="ActualizarEmpleado.php" method="POST">
           <fieldset>
               <input type="hidden" name="identi" value="<?php echo $id; ?>">
               <div class="mb-3">
                   <label for="" class="form-label">Nombre</label>
                   <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
               </div>
               <div class="mb-3">
                   <label for="" class="form-label">Dirección</label>
                   <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>">
               </div>
               <div class="mb-3">
                   <label for="" class="form-label">Telefono</label>
                   <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>">
               </div>
               <div class="mb-3">
                   <label for="" class="form-label">Fecha</label>
                   <input type="date" class="form-control" class="form-control" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>">
               </div>
               <div class="mb-3">
                   <input type="submit" class="form-control" value="Guardar">
               </div>

           </fieldset>
       </form>
       
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>