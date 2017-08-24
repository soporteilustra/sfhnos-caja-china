<?php
function sendEmail($variables, $values)
{

  $vars = explode(',',$variables);
  $vals = explode(',',$values);

  //$email_to = "ventas@tci.net.pe, soporte@ilustraconsultores.com, branco@ilustraconsultores.com";
  $email_to = "soporte@ilustraconsultores.com";
  $email_subject = "Contacto de SFHNOS | Caja china";

  $email_message = "<h2>SFHNOS |  Contacto desde landing caja china</h2>";
  $email_message .= "<h3>Detalles de la consulta: </h3>\n\n";
  $email_message .= "<div style='width: 60%;'>";

  for ($i=0; $i < count($vars); $i++) {
    $email_message.= "<h3 style='font-family: arial; font-weight: 300; background: #009688; color: #fff; padding: .5em 1em; margin: 0em;'>".$vars[$i]."</h3>";
    $email_message.= "<h3 style='font-family: arial; font-weight: 300; color: #424343; margin: 0em; padding: .5em 1em;'>".strtoupper($vals[$i])."</h3>";
  }

  $email_message .= "</div>";

  // Ahora se envía el e-mail usando la función mail() de PHP
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  //dirección del remitente
  $headers .= "From: Landing Cajas Chinas | SFHnos < soporte@ilustraconsultores.com >\r\n";
  //Enviamos el mensaje a tu_dirección_email
  $bool = mail($email_to,$email_subject,$email_message,$headers);

  return $bool;
}

?>
