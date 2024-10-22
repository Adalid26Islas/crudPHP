<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c24af98172.js" crossorigin="anonymous"></script>
    <title>CRUD</title>
</head>
<body>
    <script>
        function eliminar (){
            var respuesta = confirm("Estas seguro de que deseas eliminar a esta persona");
            return respuesta;
        }
    </script>
    <?php
        include "modelo/db.php";
        include "controlador/delete_person.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-2" method="POST">
            <h3 class="text-center alert alert-secondary p-2 mt-3">Registro de personas</h3> 
                <?php
                include("modelo/db.php");
                include("controlador/register.php");
                ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la pesona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-success" name="btnregistrar" value="ok">Registrar Persona</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead">
                    <tr>
                        <th scope="col" class="bg-info">ID</th>
                        <th scope="col" class="bg-info">Nombre</th>
                        <th scope="col" class="bg-info">Apellidos</th>
                        <th scope="col" class="bg-info">DNI</th>
                        <th scope="col" class="bg-info">Fecha de nacimiento</th>
                        <th scope="col" class="bg-info">Email</th>
                        <th scope="col" class="bg-info"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/db.php";
                        $sql=$conexion->query(" select * from personas");
                        while($datos=$sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->ID ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellidos ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fecha_nacimiento ?></td>
                                <td><?= $datos->email ?></td>
                                <td>
                                    <a href="update.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?ID=<?= $datos->ID ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>