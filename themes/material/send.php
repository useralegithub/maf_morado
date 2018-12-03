<?php
 require_once "Mail.php";
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
//Es necesario recuperar todos los datos que enviaste a traves del formulario.

$medio = trim(strip_tags($_POST['medio']));
$editor = trim(strip_tags($_POST['editor'])); 
$secccion = trim(strip_tags($_POST['secccion'])); 
$nombre = trim(strip_tags($_POST['nombre'])); 
$email = trim(strip_tags($_POST['email'])); 
$telefono = trim(strip_tags($_POST['telefono'])); 
$celular = trim(strip_tags($_POST['celular'])); 
$direccion1 = trim(strip_tags($_POST['direccion1'])); 
$direccion2 = trim(strip_tags($_POST['direccion2'])); 
$estado = trim(strip_tags($_POST['estado'])); 
$cp = trim(strip_tags($_POST['cp'])); 
$pais = trim(strip_tags($_POST['pais'])); 
$pagina = trim(strip_tags($_POST['pagina'])); 
$otras_notas = trim(strip_tags($_POST['otras_notas'])); 
$ciudad = trim(strip_tags($_POST['ciudad'])); 


$spam = $_POST['question'];

// print_r($_POST); && $medio != ''

if($spam == ''  ) {

//Enviar email
$from = 'Contacto <developer@dupla.mx>'; //Correo desde donde viene el mensaje.
 
 $to = "developer@dupla.mx,levi@dupla.mx,claudia@dupla.mx";
$subject = 'CORREO'; //El asunto del correo
// Mensaje que se envía a tu correo
$message = '
<html>
<body>
<p><strong>Medio: </strong>'.$medio.'</p>
<p><strong>editor: </strong>'.$editor.'</p>
<p><strong>Medio: </strong>'.$secccion.'</p>
<p><strong>nombre: </strong>'.$nombre.'</p>
<p><strong>email: </strong>'.$email.'</p>
<p><strong>telefono: </strong>'.$telefono.'</p>
<p><strong>celular: </strong>'.$celular.'</p>
<p><strong>direccion1: </strong>'.$direccion1.'</p>
<p><strong>direccion2: </strong>'.$direccion2.'</p>
<p><strong>ciudad: </strong>'.$ciudad.'</p>
<p><strong>estado: </strong>'.$estado.'</p>
<p><strong>cp: </strong>'.$cp.'</p>
<p><strong>pais: </strong>'.$pais.'</p>
<p><strong>pagina: </strong>'.$pagina.'</p>
<p><strong>otras_notas: </strong>'.$otras_notas.'</p>

</body>
</html>
';
$headers = "From:" . $from . "\r\n";
$headers .="Reply-To: " .$from . "\r\n";
$headers .='X-Mailer: PHP/' . phpversion() . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  if(mail($to,$subject,$message,$headers)) { 
       echo '<h3 style="color: #0000a5;text-align: center;" >Mensaje enviado con éxito, nos pondremos en contacto a la brevedad.</h3>'; 
  } else { 
       echo '<h3 style="color: #bf2222;text-align: center;" >Hubo un problema con el envío de tu correo.</h3>'; 
  }  

}


?>


