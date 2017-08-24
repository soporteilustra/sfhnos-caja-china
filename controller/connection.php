<?php
$conexion = new mysqli("localhost", "loquemas_root", "ilustra25", "loquemas_campana");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

?>
