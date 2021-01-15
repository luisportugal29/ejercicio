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
            <button class="btn btn-secondary" type="button"><a href="principal.php">Registro</a></button>
            <button class="btn btn-secondary" type="button"><a href="Consultas.php">Empleados</a></button>
          </div>
    </section>
    <section id="tabla">
    <h3>Lista de Empleados</h3>
    <?php
        try{
            require_once('conexion.php');
            $sql = "select id,nombre,telefono,direccion,fechaNacimiento from  empleados";
            $resultado = $conn->query($sql);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    ?>
    <div>
            <table class="table">
                <thead>
                    <tr>
                         <th scope="row">ID</th>
                        <th scope="row">Nombre</th>
                        <th scope="row">Direccion</th>
                        <th scope="row">Fecha Nacimiento</th>
                        <th scope="row">Telefono</th>
                        <th scope="row">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($nombre = $resultado->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $nombre['id']; ?></td>
                        <td><?php echo $nombre['nombre']; ?></th>
                        <td><?php echo $nombre['direccion']; ?></td>
                        <td><?php echo $nombre['fechaNacimiento'];?></td>
                        <td><?php echo $nombre['telefono']; ?></td>
                        <form action="Modificacion.php" method="POST">
                            <input type="hidden" name="iden" value="<?php echo $nombre['id'] ?>">
                             <td><button type="submit" class="btn btn-secondary btn-sm editbtn"> Modificar</button></td>
                        </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
   
        
    </div>
    <?php
        $conn->close();
    ?>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

