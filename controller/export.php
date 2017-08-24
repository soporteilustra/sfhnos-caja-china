<?php
//Base de datos
$conexion = new mysqli('localhost','loquemas_root','ilustra25','loquemas_campana');

//fecha de la exportación
$fecha = date("d-m-Y");
$consulta= "SELECT * FROM registros";
$resultado= $conexion->query($consulta);

//Inicio de la instancia para la exportación en Excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Registros_SFHnos_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border=1> ";
echo "<tr> ";
echo  "<th colspan='11'>REPORTE DE REGISTROS - SFHNOS.COM | Caja china</th> ";
echo "</tr> ";
echo "<tr> ";
echo  "<th>N&deg;</th> ";
echo  "<th>Nombre</th> ";
echo 	"<th>Correo Electrónico</th> ";
echo 	"<th>Teléfono</th> ";
echo  "<th>Tipo de Caja China</th> ";
echo 	"<th>Fecha de registro</th> ";
echo "</tr> ";

while($row = mysqli_fetch_array($resultado)){

	$id = $row['id'];
	$nombre = $row['nombre'];
	$correo = $row['correo'];
	$telefono = $row['telefono'];
	$caja = $row['caja_china'];
	$fecha = $row['fecha'];

	echo "<tr> ";
	echo 	"<td>".$id."</td> ";
	echo 	"<td>".$nombre."</td> ";
	echo 	"<td>".$correo."</td> ";
	echo 	"<td>".$telefono."</td> ";
  echo 	"<td>".$caja."</td> ";
	echo 	"<td>".$fecha."</td> ";
	echo "</tr> ";

}
echo "</table> ";

?>
