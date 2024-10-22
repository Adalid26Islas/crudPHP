<?php
if(!empty($_POST["btnmodificar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellidos= $_POST["apellidos"];
        $dni= $_POST["dni"];
        $fecha= $_POST["fecha"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("update personas set 
            nombre='$nombre',
            apellidos='$apellidos',
            dni=$dni,
            fecha_nacimiento='$fecha',
            email='$correo' where ID=$id");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al actualizar a la persona</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

?>