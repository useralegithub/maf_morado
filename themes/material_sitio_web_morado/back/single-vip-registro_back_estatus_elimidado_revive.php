<?php include 'header.php';?>
<!-- page_acreditacion_prensa -->
<div class="wrapper single-vip-registro">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Registro[:en]Register[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int contacto">
				<div class="texto">
					<p><?php echo __('[:es]Registro VIP[:en]Register VIP[:]'); ?></p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int section_int_blog">
<?php

global $wpdb;
$wpdb_response='';
$class_form   ='';
$estatus_registrado = 1;
$estatus_aprobado   = 3;
$estatus_rechazado  = 4;
$estatus_eliminado  = 7;

function randomRecovery($length = 6) {
	$str = "";
	//$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$characters = array_merge(range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

function is_valid_email($str)
{
  $result = (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
  
  if ($result)
  {
    list($user, $domain) = split('@', $str);
    
    $result = checkdnsrr($domain, 'MX');
  }
  
  return $result;
}

echo "\n<!--latest register:_\n";
//SELECT * FROM wp_users_vip ORDER BY id DESC

echo "\n-->\n";

if ($_POST['email']) {

$nombre     = strip_tags(trim( $_POST['nombre']    ));
$apellido   = strip_tags(trim( $_POST['apellido']  ));
$email 	    = filter_var(strip_tags(trim( $_POST['email'])), FILTER_SANITIZE_EMAIL  );
$pais_residencia  = strip_tags(trim( $_POST['pais_residencia'] ));
$rango_edad = strip_tags(trim( $_POST['rango_edad']));
$categoria  = strip_tags(trim( $_POST['categoria']));
$afiliacion = strip_tags(trim( $_POST['afiliacion']));
$spam 		= $_POST['spam'];

if ($spam=='') { // if validate spam
	

$wpdb_email = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_email = '$email' ORDER BY id DESC ");
$wpdb_vip_user=$wpdb_email[0];



	if($email==$wpdb_vip_user->users_vip_email){

		if ($wpdb_vip_user->users_vip_estatus==$estatus_aprobado) {

			$wpdb_response = 'No necesitas volver a registrarte '.$wpdb_vip_user->users_vip_nombre.', puedes acceder a VIP en el siguiente link con tu correo: '.$wpdb_vip_user->users_vip_email.' o recuperar tu contraseña.';
		}

		if ($wpdb_vip_user->users_vip_estatus==$estatus_registrado) {
			
		$wpdb_response = 'Ya existe una petición con el correo '.$wpdb_vip_user->users_vip_email.' y nombre: '.$wpdb_vip_user->users_vip_nombre.' '.$wpdb_vip_user->users_vip_apellido.'  por favor espera a que se apruebe tu petición.';
		}

		if ($wpdb_vip_user->users_vip_estatus==$estatus_eliminado) {

			$recovery = $wpdb_vip_user->id.''.randomRecovery(20);

		    $wpdb->update('wp_users_vip', array(
												'users_vip_nombre'         => $nombre,
												'users_vip_apellido'       => $apellido,
												'users_vip_category'       => $categoria,
												'users_vip_rango_edad'     => $rango_edad,
												'users_vip_afiliacion'     => $afiliacion,
												'users_vip_pais'     	   => $pais_residencia,
												'users_vip_email'          => $email,
												'users_vip_pass'     	   => '',
												'users_vip_estatus'=>$estatus_registrado,
												'users_vip_pass_recovery'  => $recovery,
												'users_vip_lang'  	   	   => $lang
		                                        
		                                    ), array('id'=>$wpdb_vip_user->id)
		                );

		$wpdb_response = 'Muchas gracias '.$nombre .' '.$apellido.'  Se ha mandado una petición para acceder a VIP.';
			 	$class_form='visibility_form';
			 	if($spam == '' && $email != '' && filter_var($email, FILTER_VALIDATE_EMAIL)&&is_valid_email($email)){

					$to = $email;
 
					$subject = 'Solicitud Pendiente'; //El asunto del correo
					$message = '
					<html>
					<body>
					
					<p>
					Gracias por registrarte. Tan pronto como su estado VIP haya sido aprobado, te lo notificaremos por correo electrónico. Por favor agrega vip@material-fair.com como contacto para asegurarte de recibir nuestra comunicación.
					</p>

					<p>
					Tu tarjeta VIP estará disponible para recoger en el VIP Desk, ubicado en el lobby del Frontón México. La tarjeta te otorgará a ti y a un invitado acceso a Feria de Arte Material para el VIP Preview el jueves 7 de febrero de 12 pm a 3 pm y durante todos los horarios al público. También te otorgará acceso a las actividades del Programa VIP, aunque algunos pueden requerir RSVP adicionales para garantizar admisión.
					</p>

					</body>
					</html>
					';
					//$message=base64_encode($message);
					$contenido=utf8_decode($message);
					$mailheader .= "From: Material<noreply@material-fair.com>\r\n"; 
					$mailheader .= "Reply-To: " .$email."\r\n"; 
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

					$headers = "From:" . $email . "\r\n";
					$headers .="Reply-To: " .$email . "\r\n";
					$headers .='X-Mailer: PHP/' . phpversion() . "\r\n";
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					mail($to, $subject, $contenido, $mailheader);

			 	}//close if for send email
		}//close key if estatus " if ($wpdb_vip_user->users_vip_estatus==$estatus_eliminado) { "

		if ($wpdb_vip_user->users_vip_estatus==$estatus_rechazado) {
			
			$wpdb_response = 'Tu cuenta ha sido rechazada, por favor contacta a los administradores para tener más información.';
		}

	}else{


	//if ($campo_pass1!=$campo_pass2) {
			
			//$wpdb_response = 'La contraseñas no son iguales.';
	//}else{


			//if ($nombre!=''||$apellido!=''||$categoria!=''||$email!=''||$contrasena!='') {
			if ($nombre!=''&&$apellido!=''&&$email!=''&&filter_var($email, FILTER_VALIDATE_EMAIL)&&is_valid_email($email)&&$pais_residencia!=''&&$rango_edad!='') {


				$latest_regiter=$wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC ")[0];
				$latest_plus_one = $latest_regiter->id+1;
				$latest_plus_one;

				$recovery = $latest_plus_one.''.randomRecovery(20);

				$lang=qtranxf_getLanguage();

				//$hash = wp_hash_password( $contrasena );
				$hash = '';




			 	$register_user = array(
										'users_vip_nombre'         => $nombre,
										'users_vip_apellido'       => $apellido,
										'users_vip_category'       => $categoria,
										'users_vip_rango_edad'     => $rango_edad,
										'users_vip_afiliacion'     => $afiliacion,
										'users_vip_pais'     	   => $pais_residencia,
										'users_vip_email'          => $email,
										'users_vip_pass'     	   => $hash,
										'users_vip_estatus'  	   => '1',
										'users_vip_pass_recovery'  => $recovery,
										'users_vip_lang'  	   	   => $lang
										);

			 	$format_regiter = array('%s','%s','%s','%s','%s','%s');

			 	$wpdb->insert('wp_users_vip',$register_user, $format_regiter );

			 	$wpdb_response = 'Muchas gracias '.$nombre .' '.$apellido.'  Se ha mandado una petición para acceder a VIP.';
			 	$class_form='visibility_form';
			 	if($spam == '' && $email != ''&& filter_var($email, FILTER_VALIDATE_EMAIL)&&is_valid_email($email) ){

					$from = $email;
					$to = $email;
 
					$subject = 'Solicitud Pendiente'; //El asunto del correo
					$message = '
					<html>
					<body>
					
					<p>
					Gracias por registrarte. Tan pronto como su estado VIP haya sido aprobado, te lo notificaremos por correo electrónico. Por favor agrega vip@material-fair.com como contacto para asegurarte de recibir nuestra comunicación.
					</p>

					<p>
					Tu tarjeta VIP estará disponible para recoger en el VIP Desk, ubicado en el lobby del Frontón México. La tarjeta te otorgará a ti y a un invitado acceso a Feria de Arte Material para el VIP Preview el jueves 7 de febrero de 12 pm a 3 pm y durante todos los horarios al público. También te otorgará acceso a las actividades del Programa VIP, aunque algunos pueden requerir RSVP adicionales para garantizar admisión.
					</p>

					</body>
					</html>
					';
					//$message=base64_encode($message);
					$contenido=utf8_decode($message);
					$mailheader .= "From: Material<noreply@material-fair.com>\r\n"; 
					$mailheader .= "Reply-To: " .$email."\r\n"; 
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

					$headers = "From:" . $email . "\r\n";
					$headers .="Reply-To: " .$email . "\r\n";
					$headers .='X-Mailer: PHP/' . phpversion() . "\r\n";
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					mail($to, $subject, $contenido, $mailheader);

			 	}//close if for send email
			
			}

	     //}//CLose key for validate pass iqual

		}

	} // close if validate spam

} // close if $_POST

?>

				<div class="formularios">

				<p>
					<?php echo $wpdb_response; ?>
				</p>

				<p>

					<?php
							if (empty($nombre) || empty($apellido) || empty($email) ) {
								echo __('[:es]Campos indicados con "*" son obligatorios[:en]Fields indicated with "*" are required[:]');
							}
							

					?>
					
				</p>

					<form action="" method="post" name="form_registro" class="<?php echo $class_form; ?>" >
					<?php

						$nombre     = '';
						$apellido   = '';
						$email 	    = '';
						$categoria  = '';
						$contrasena = '';
						$pais_residencia = '';
						$rango_edad = '';
						$afiliacion = '';

						if ($_POST) {

							$nombre     = strip_tags(trim( $_POST['nombre']    ));
							$apellido   = strip_tags(trim( $_POST['apellido']  ));
							$email 	    = strip_tags(trim( $_POST['email']     ));
							$categoria  = strip_tags(trim( $_POST['categoria'] ));
							$contrasena = strip_tags(trim( $_POST['contrasena']));
							$pais_residencia = strip_tags(trim( $_POST['pais_residencia']));
							$rango_edad = strip_tags(trim( $_POST['rango_edad']));
							$afiliacion = substr(strip_tags(trim( $_POST['afiliacion'])),64);

						}

					?>

				<div class="colum_dos">
					<label>
						<?php

							if (count($_POST)==0) {
								echo __('[:es]Nombre*[:en]Name*[:]');
							}else{

							if (empty($nombre)){
									echo __('[:es]Nombre<span class="campo_vacio">*</span>[:en]Name<span class="campo_vacio">*</span>[:]');
							}else{
									echo __('[:es]Nombre*[:en]Name*[:]');
								}
								
							}
						
						?>
					</label>
					<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
				</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]Apellido*[:en]Last name*[:]');
									}else{

									if (empty($apellido)){
											echo __('[:es]Apellido<span class="campo_vacio">*</span>[:en]Last name<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]Apellido*[:en]Last name*[:]');

										}
										
									}
								
								?>
									
							</label>
							<input type="text" name="apellido" value="<?php echo $apellido; ?>" >
						</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]E-mail*[:en]E-mail*[:]');
									}else{

									if (empty($email)||!filter_var($email, FILTER_VALIDATE_EMAIL)||!is_valid_email($email)){
											echo __('[:es]E-mail<span class="campo_vacio">*</span>[:en]E-mail<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]E-mail*[:en]E-mail*[:]');

										}
										
									}
								
								?>
							</label>
							<input type="email" name="email" value="<?php echo $email; ?>">
						</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]País de Residencia*[:en]Country of Residence*[:]');
									}else{

									if (empty($pais_residencia)){
											echo __('[:es]País de Residencia<span class="campo_vacio">*</span>[:en]Country of Residence<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]País de Residencia*[:en]Country of Residence*[:]');

										}
										
									}
								
								?>
							</label>

							<select name="pais_residencia" >
							  <?php

									global $wpdb;
									$wpdb_paises=$wpdb->get_results( "SELECT * FROM maf_cat_countries ORDER BY id ASC ");

									foreach ($wpdb_paises as $key_pais => $pais) {
										$selected = ($pais_residencia==$pais->id)?'selected':'';
										echo '<option value="'.$pais->id.'"  '.$selected.'>'.$pais->name.'</option>';
									}

							  ?>
							</select>

						</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]Rango de edad*[:en]Age Range*[:]');
									}else{

									if (empty($rango_edad)){
											echo __('[:es]Rango de edad<span class="campo_vacio">*</span>[:en]Age Range<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]Rango de edad*[:en]Age Range*[:]');

										}
										
									}
								
								?>
							</label>

							<select name="rango_edad" >
							<?php
								$rango_edad_args = array("18-24","25-34","35-44","45+");

								foreach ($rango_edad_args as $key_edad => $edad) {
									//$selected = ($pais_residencia==$pais->id)?'selected':'';
									$selected = ($rango_edad==$edad)?'selected':'';
									echo '<option value="'.$edad.'" '.$selected.'>'.$edad.'</option>';
									//print_r($edad);
								}
							?>
								  
								 
							</select>
						</div>

						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Perfil[:en]Profile[:]'); ?>
							</label>

							<select name="categoria" >
							  <?php

									global $wpdb;
									$wpdb_cat=$wpdb->get_results( "SELECT * FROM users_vip_category ORDER BY id ASC ");

									foreach ($wpdb_cat as $key_cat => $cat) {
										$selected = ($categoria==$cat->id)?'selected':'';
										echo '<option value="'.$cat->id.'"  '.$selected.'>'.__($cat->nombre_cateogria).'</option>';
									}

							  ?>
							</select>
						</div>

						

						<div class="colum_dos">
							<label>
								<?php

								echo __('[:es]Afiliación Organizacional[:en]Organizational Affiliations[:]');

									/*if (count($_POST)==0) {
										echo __('[:es]Afiliación Organizacional*[:en]Organizational Affiliations*[:]');
									}else{

									if (empty($email)){
											echo __('[:es]Afiliación Organizacional<span class="campo_vacio">*</span>[:en]Organizational Affiliations<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]Afiliación Organizacional*[:en]Organizational Affiliations*[:]');

										}
										
									}*/
								
								?>
							</label>
							<input type="text" name="afiliacion" maxlength="64" value="<?php echo $afiliacion; ?>">
						</div>
						
						<input type="hidden" name="spam">
						
						<input type="submit" name="" value="<?php echo __('[:es]Registro[:en]Register[:]'); ?>" id="submitBot">
					</form>

				</div>
			</div>
		</section>




<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom_style.css?v=<?php echo time();?>">
<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 