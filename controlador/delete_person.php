<?php

if(!empty($_GET["ID"])){
    $id = $_GET["ID"];
    $sql=$conexion->query("delete from personas where ID=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success text-center">Persona eliminada correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al aliminar a la persona</div>';
    }
}

?>