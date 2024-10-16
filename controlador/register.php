
<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        
        $nombre = $_POST["nombre"];
        $apellidos= $_POST["apellidos"];
        $dni= $_POST["dni"];
        $fecha= $_POST["fecha"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("INSERT INTO personas (nombre, apellidos, dni, fecha_nacimiento, email) 
        VALUES ('$nombre', '$apellidos', '$dni', '$fecha', '$correo')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar a la persona</div>';
        }
    } else {
        echo"Alguno de los campos esta vacio";
    }
}

?>