<?php
include_once 'connection.php';
include 'sendmail.php';
//include 'sendfile.php';

//get parameters
$variables='';
$values='';
foreach ($_POST as $key => $value) {
     $variables.="$key,";
     $values.="'$value',";
}
$variables = substr($variables,0,-1);
$values= substr($values,0,-1);

//table data
$table = 'registros';
//insertar registros
$insertar = "INSERT INTO $table ($variables) VALUES ($values)";
mysqli_query($conexion,$insertar);
//enviar infographic
//sendFile($_POST);
//enviar correo
$bool = sendEmail($variables, $values);
if ($bool) {
  # code...
  $message = 'success';
} else {
  $message = 'warning';
}

mysqli_close($conexion);

echo $message;
?>
