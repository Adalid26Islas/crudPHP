<?php
    include "modelo/db.php";
    $id=$_GET["id"];
    $sql=$conexion->query("select * from personas where ID=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c24af98172.js" crossorigin="anonymous"></script>
    <title>Editar Persona</title>
</head>
<body> 
    <form class="col-4 p-2 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary p-2 mt-3">Actualización de persona</h3> 
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/update_person.php";
        while ($datos= $sql->fetch_object()) { ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la pesona</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
            <input type="text" class="form-control" name="dni" value="<?= $datos->dni?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nacimiento?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" name="correo" value="<?= $datos->email?>">
        </div>
        <?php }
        ?>
        <button type="submit" class="btn btn-success" name="btnmodificar" value="ok">Actualizar Persona</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>