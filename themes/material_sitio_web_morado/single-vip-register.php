<?php include 'header.php';?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_vip.css?v=<?php echo time();?>">
<!-- page_acreditacion_prensa -->
<div class="wrapper single-vip-register wrapper_vip">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Registro VIP[:en]VIP Register[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int ">
				<div class="texto texto_resgistro">
					<h2><?php echo __('[:es]Registro VIP[:en]VIP Register[:]'); ?></h2>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int ">
<?php

global $wpdb;
$wpdb_response='';
$wpdb_response_succes='';
$class_form   ='';
$estatus_registrado = 1;
$estatus_aprobado   = 3;
$estatus_rechazado  = 4;
$estatus_eliminado  = 7;
$them_url=get_template_directory_uri();
$home_url=home_url();
$page_login = get_page_by_path( 'vip-login' );
$page_login_link = get_permalink( $page_login->ID);
$enter_recupera_pass=get_posts(array('post_type' =>'vip' ,'name'=>'password-recovery','post_status'=>"publish" ))[0];
$enter_recupera_pass=get_permalink($enter_recupera_pass->ID);

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

			$es_txt = 'El email '.$wpdb_vip_user->users_vip_email.' ya se encuentra registrado. <a href="'.$page_login_link.'">Ingresa al portal VIP</a> o si no recuerdas tu contraseña, puedes <a href="'.$enter_recupera_pass.'">recuperarla</a>.';

			$en_txt = 'The email '. $wpdb_vip_user->users_vip_email.' is already registered. <a href="'.$page_login_link.'">login to the VIP portal</a> or if you forgot your password, you can <a href="'.$enter_recupera_pass.'"> recover it</a>.';

			$wpdb_response = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');
		}

		if ($wpdb_vip_user->users_vip_estatus==$estatus_registrado) {

			$es_txt = 'El email '.$wpdb_vip_user->users_vip_email.' ya se encuentra registrado y tu cuenta se encuentra en en proceso de validación. Podrás ingresar una vez que hayamos aprobado tu solicitud.';

			$en_txt = 'The email '.$wpdb_vip_user->users_vip_email.' is already registered and you account is subject to a validation process. You can login once we approved your request.';

			$wpdb_response = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');

		}

		if ($wpdb_vip_user->users_vip_estatus==$estatus_eliminado) {

				$latest_regiter=$wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC ")[0];
				$latest_plus_one = $latest_regiter->id+1;

				$recovery = $latest_plus_one.''.randomRecovery(20);

				$lang=qtranxf_getLanguage();

				//$hash = wp_hash_password( $contrasena );
				$hash = '';

			 	$register_user = array(
										'users_vip_nombre'         => $nombre,
										'users_vip_apellido'       => $apellido,
										'users_vip_category_id'    => $categoria,
										'users_vip_rango_edad'     => $rango_edad,
										'users_vip_afiliacion'     => $afiliacion,
										'users_vip_pais'     	   => $pais_residencia,
										'users_vip_email'          => $email,
										'users_vip_pass'     	   => $hash,
										'users_vip_estatus'  	   => $estatus_registrado,
										'users_vip_pass_recovery'  => $recovery,
										'users_vip_lang'  	   	   => $lang
										);
			 	//print_r($register_user);

			 	$format_regiter = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');

			 	$wpdb->insert('wp_users_vip',$register_user, $format_regiter );

				$es_txt = 'Muchas gracias por tu interés, <b>'.$nombre .' '.$apellido.'</b>. Se ha enviado una petición para acceder al portal VIP.';

				$en_txt = 'Thank you for your interest, <b>'.$nombre .' '.$apellido.'</b>. A request to access to the VIP portal has been sent.';

				//$wpdb_response = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');
				$wpdb_response_succes = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');

			 	$class_form='visibility_form';
			 	$success = TRUE;

			 	if($spam == '' && $email != '' && filter_var($email, FILTER_VALIDATE_EMAIL)&&is_valid_email($email)){
			 		date_default_timezone_set('America/Mexico_City');

					$to = $email;
 
					$subject = __('[:es]Material Art Fair Vol. VI | Thanks for registering in VIP[:en]Feria de Arte Material Vol. VI | Gracias por registrarte en VIP[:]'); 
					$atibuto_img =__('[:es]Feria de Arte Material Vol. VI[:en]Material Art Fair Vol. VI[:]');
					$attr_facebook=__('[:es]Material en Facebook[:en]Material at Facebook[:]');
					$attr_twitter=__('[:es]Material en Twitter[:en]Material at Twitter[:]');
					$attr_instagram=__('[:es]Material en Instagram[:en]Material at Instagram[:]');

                    $es='
					
					<p>
					Gracias '.$nombre.' por tu interés en el Programa VIP 2019 de la Feria de Arte Material. Recibimos tu solicitud de registro y la responderemos lo antes posible. Mientras tanto, te invitamos a que conozcas más acerca de nuestros expositores del 2019 en material-fair.com.
					</p>

					<p style="margin-top: 30px;">Saludos cordiales,</p>
					<p style="text-align: left;"><b>Equipo de Relaciones VIP</b>.</p>

					';

                    $en='
                    <p style="margin-bottom: 30px;">Dear '.$nombre.',</p>
					
					<p>
					Thanks for your interest in Material Art Fair’s 2019 VIP Program. We received your request for VIP status and we will answer as soon as possible. In the meantime, you can find more information about our 2019 exhibitors on our website at material-fair.com.
					</p>

					<p style="margin-top: 30px;">Kind regards,</p>
					<p style="text-align: left;"><b>VIP Relations Team</b>.</p>

					';

					$table_mensaje = '<table style="font-family: Arial, Helvetica, sans-serif; font-size: 125%; background-color: #D9FFBD; width: 800px;">';
					$table_mensaje .='<tbody>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3">';
					$table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$atibuto_img.'" title="'.$atibuto_img.'" src="'.$them_url.'/img/email_header.jpg"></a>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3" style="padding: 10px;">';
					$table_mensaje .=__('[:es]'.$es.'[:en]'.$en.'[:]');
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3">';
					$table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$atibuto_img.'" title="'.$atibuto_img.'" src="'.$them_url.'/img/email_footer.jpg"></a>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td style="width: 33%; padding: 10px;">';
					$table_mensaje .='<p style="text-align: left">Melchor Ocampo 154-A<br>Col. San Rafael, Del. Cuauhtémoc<br></br>CDMX, 06470</p>';
					$table_mensaje .='</td>';
					$table_mensaje .='<td style="width: 33%; padding: 10px;">';
					$table_mensaje .='<p style="text-align: center">+52 55 5256-5533<br><a href="mailto:info@material-fair.com">info@material-fair.com</a></p>';
					$table_mensaje .='</td>';
					$table_mensaje .='<td style="width: 33%; padding: 10px;">';
					$table_mensaje .='<ul style="list-style: none; margin: 0; padding: 0; text-align: right">';
					$table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://www.facebook.com/materialfair"><img style="max-width: 40px" alt="Facebook"  title="'.$attr_facebook.'" src="'.$them_url.'/img/facebook-64.png"></a></li>';
					$table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://twitter.com/materialfair"><img style="max-width: 40px" alt="Twitter" title="'.$attr_twitter.'" src="'.$them_url.'/img/twitter-64.png"></a></li>';
					$table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://instagram.com/materialfair"><img style="max-width: 40px" alt="Instagram" title="'.$attr_instagram.'" src="'.$them_url.'/img/instagram-64.png"></a></li>';
					$table_mensaje .='</ul>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';
					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3" style="text-align: center; font-size: 85%;">';
					$table_mensaje .='<p>&copy; '.date('Y').' Feria de Arte Material México S.A. de C.V.</p>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';
        
					$table_mensaje .='</tbody>';
					$table_mensaje .='</table>';

					$contenido=$table_mensaje;
					$mailheader .= __('[:es]From: Feria de Arte Material VIP <vip@material-fair.com>[:en]From: Material Art Fair VIP <vip@material-fair.com>[:]')."\r\n";
					$mailheader .= 'MIME-Version: 1.0' . "\r\n";
					$mailheader .= "Reply-To: vip@material-fair.com\r\n"; 
					$mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
					$mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

					mail($to, $subject, $contenido, $mailheader);

			 	}//close if for send email
		}//close key if estatus " if ($wpdb_vip_user->users_vip_estatus==$estatus_eliminado) { "

		if ($wpdb_vip_user->users_vip_estatus==$estatus_rechazado) {
			
			//$wpdb_response = __('[:es]Tu cuenta ha sido rechazada, por favor contacta a los administradores para tener más información.[:en]Your account has been rejected, please contact the administrators to have more information.[:]');
			$es_txt = 'El email '.$wpdb_vip_user->users_vip_email.' ya se encuentra registrado y tu cuenta se encuentra en en proceso de validación. Podrás ingresar una vez que hayamos aprobado tu solicitud.';

			$en_txt = 'The email '.$wpdb_vip_user->users_vip_email.' is already registered and you account is subject to a validation process. You can login once we approved your request.';

			$wpdb_response = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');
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
										'users_vip_category_id'    => $categoria,
										'users_vip_rango_edad'     => $rango_edad,
										'users_vip_afiliacion'     => $afiliacion,
										'users_vip_pais'     	   => $pais_residencia,
										'users_vip_email'          => $email,
										'users_vip_pass'     	   => $hash,
										'users_vip_estatus'  	   => $estatus_registrado,
										'users_vip_pass_recovery'  => $recovery,
										'users_vip_lang'  	   	   => $lang
										);

			 	$format_regiter = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');

			 	$wpdb->insert('wp_users_vip',$register_user, $format_regiter );

				$es_txt = 'Muchas gracias por tu interés, <b>'.$nombre .' '.$apellido.'</b>. Se ha enviado una petición para acceder al portal VIP.';

				$en_txt = 'Thank you for your interest, <b>'.$nombre .' '.$apellido.'</b>. A request to access to the VIP portal has been sent.';

				//$wpdb_response = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');

				$wpdb_response_succes = __('[:es]'.$es_txt.'[:en]'.$en_txt.'[:]');
				
			 	$class_form='visibility_form';
			 	$success = TRUE;

			 	if($spam == '' && $email != ''&& filter_var($email, FILTER_VALIDATE_EMAIL)&&is_valid_email($email) ){
			 		date_default_timezone_set('America/Mexico_City');

					$to = $email;
 
					$subject = __('[:es]Feria de Arte Material Vol. VI | Gracias por registrarte en VIP[:en]Material Art Fair Vol. VI | Thanks for registering in VIP[:]'); 
					$atibuto_img =__('[:es]Feria de Arte Material Vol. VI[:en]Material Art Fair Vol. VI[:]');
					$attr_facebook=__('[:es]Material en Facebook[:en]Material at Facebook[:]');
					$attr_twitter=__('[:es]Material en Twitter[:en]Material at Twitter[:]');
					$attr_instagram=__('[:es]Material en Instagram[:en]Material at Instagram[:]');

                    $es='
					
					<p>
					Gracias '.$nombre.' por tu interés en el Programa VIP 2019 de la Feria de Arte Material. Recibimos tu solicitud de registro y la responderemos lo antes posible. Mientras tanto, te invitamos a que conozcas más acerca de nuestros expositores del 2019 en material-fair.com.
					</p>

					<p style="margin-top: 30px;">Saludos cordiales,</p>
					<p style="text-align: left;"><b>Equipo de Relaciones VIP</b>.</p>

					';

                    $en='
                    <p style="margin-bottom: 30px;">Dear '.$nombre.',</p>
					
					<p>
					Thanks for your interest in Material Art Fair’s 2019 VIP Program. We received your request for VIP status and we will answer as soon as possible. In the meantime, you can find more information about our 2019 exhibitors on our website at material-fair.com.
					</p>

					<p style="margin-top: 30px;">Kind regards,</p>
					<p style="text-align: left;"><b>VIP Relations Team</b>.</p>

					';

					$table_mensaje = '<table style="font-family: Arial, Helvetica, sans-serif; font-size: 125%; background-color: #D9FFBD; width: 800px;">';
					$table_mensaje .='<tbody>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3">';
					$table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$atibuto_img.'" title="'.$atibuto_img.'" src="'.$them_url.'/img/email_header.jpg"></a>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3" style="padding: 10px;">';
					$table_mensaje .=__('[:es]'.$es.'[:en]'.$en.'[:]');
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3">';
					$table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$atibuto_img.'" title="'.$atibuto_img.'" src="'.$them_url.'/img/email_footer.jpg"></a>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';

					$table_mensaje .='<tr>';
					$table_mensaje .='<td style="width: 33%; padding: 10px;">';
					$table_mensaje .='<p style="text-align: left">Melchor Ocampo 154-A<br>Col. San Rafael, Del. Cuauhtémoc<br></br>CDMX, 06470</p>';
					$table_mensaje .='</td>';
					$table_mensaje .='<td style="width: 33%; padding: 10px;">';
					$table_mensaje .='<p style="text-align: center">+52 55 5256-5533<br><a href="mailto:info@material-fair.com">info@material-fair.com</a></p>';
					$table_mensaje .='</td>';
					$table_mensaje .='<td style="width: 33%; padding: 10px;">';
					$table_mensaje .='<ul style="list-style: none; margin: 0; padding: 0; text-align: right">';
					$table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://www.facebook.com/materialfair"><img style="max-width: 40px" alt="Facebook"  title="'.$attr_facebook.'" src="'.$them_url.'/img/facebook-64.png"></a></li>';
					$table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://twitter.com/materialfair"><img style="max-width: 40px" alt="Twitter" title="'.$attr_twitter.'" src="'.$them_url.'/img/twitter-64.png"></a></li>';
					$table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://instagram.com/materialfair"><img style="max-width: 40px" alt="Instagram" title="'.$attr_instagram.'" src="'.$them_url.'/img/instagram-64.png"></a></li>';
					$table_mensaje .='</ul>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';
					$table_mensaje .='<tr>';
					$table_mensaje .='<td colspan="3" style="text-align: center; font-size: 85%;">';
					$table_mensaje .='<p>&copy; '.date('Y').' Feria de Arte Material México S.A. de C.V.</p>';
					$table_mensaje .='</td>';
					$table_mensaje .='</tr>';
        
					$table_mensaje .='</tbody>';
					$table_mensaje .='</table>';

					$contenido=$table_mensaje;
					$mailheader .= __('[:es]From: Feria de Arte Material VIP <vip@material-fair.com>[:en]From: Material Art Fair VIP <vip@material-fair.com>[:]')."\r\n";
					$mailheader .= 'MIME-Version: 1.0' . "\r\n";
					$mailheader .= "Reply-To: vip@material-fair.com\r\n"; 
					$mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
					$mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

					mail($to, $subject, $contenido, $mailheader);

			 	}//close if for send email
			
			}

	     //}//CLose key for validate pass iqual

		}

	} // close if validate spam

} // close if $_POST

?>

				<div class="formularios">

					<?php if(! empty($wpdb_response)){ ?>
						<p class="mensaje_error_vip mesaje_estatus">
							<?php echo $wpdb_response; ?>
						</p>
					<?php }

					if(! empty($wpdb_response_succes)){ ?>
						<p class="mensaje_succes mesaje_estatus">
							<?php echo $wpdb_response_succes; ?>
						</p>
					<?php }
					

					if(! $success){
						if ( empty($nombre) || empty($apellido) || empty($email)|| $email=='' || filter_var($email, FILTER_VALIDATE_EMAIL)||is_valid_email($email) ) { ?>
							<p><?= __('[:es]Campos indicados con "*" son obligatorios[:en]Fields marked with "*" are required[:]'); ?></p>
						<?php } ?>

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

					<?php

						if (count($_POST)==0) {?>

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]Nombre*[:en]Name*[:]');
									
									?>
								</label>
								<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
							</div>

					<?php }else{

						if (empty($nombre)){ ?>

							<div class="colum_dos campo_vacio">
								<label>
									<?php

									echo __('[:es]Nombre*[:en]Name*[:]');
									
									?>
								</label>
								<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
							</div>

					<?php }else{ ?>

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]Nombre*[:en]Name*[:]');
									
									?>
								</label>
								<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
							</div>
					
					<?php		}
							
						}
					
					?>

					<?php

						if (count($_POST)==0) { ?>

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]Apellido*[:en]Last name*[:]');
									
									?>
								</label>
								<input type="text" name="apellido" value="<?php echo $apellido; ?>" >
							</div>

					<?php }else{


						if (empty($apellido)){ ?>

							<div class="colum_dos campo_vacio">
								<label>
									<?php

									echo __('[:es]Apellido*[:en]Last name*[:]');
									
									?>
								</label>
								<input type="text" name="apellido" value="<?php echo $apellido; ?>" >
							</div>

					<?php }else{ ?>

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]Apellido*[:en]Last name*[:]');
									
									?>
								</label>
								<input type="text" name="apellido" value="<?php echo $apellido; ?>" >
							</div>
					
					<?php		}
							
						}
					
					?>

					<?php

						if (count($_POST)==0) { ?>

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]E-mail*[:en]E-mail*[:]');
									
									?>
								</label>
								<input type="email" name="email" value="<?php echo $email; ?>">
							</div>

					<?php }else{

						if (empty($email)|| $email=='' || filter_var($email, FILTER_VALIDATE_EMAIL)||is_valid_email($email) ){ ?>

							<div class="colum_dos campo_vacio">
								<label>
									<?php

									echo __('[:es]E-mail*[:en]E-mail*[:]');
									
									?>
								</label>
								<input type="email" name="email" value="<?php echo $email; ?>">
							</div>

					<?php }else{ ?>

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]E-mail*[:en]E-mail*[:]');
									
									?>
								</label>
								<input type="email" name="email" value="<?php echo $email; ?>">
							</div>
					
					<?php		}
							
						}
					
					?>



					<?php

						if (count($_POST)==0) { ?>

							<div class="colum_dos">
								<label>
									<?php

										echo __('[:es]País*[:en]Country*[:]');
									
									?>
								</label>
								<div class="selector">
									<select name="pais_residencia" >
									  <?php

											global $wpdb;
											$wpdb_paises=$wpdb->get_results( "SELECT * FROM maf_cat_countries ORDER BY id ASC ");
	                						echo '<option disabled selected>'.__('[:es]Selecciona un País[:en]Select a Country[:]').'</option>';

											foreach ($wpdb_paises as $key_pais => $pais) {
												$selected = ($pais_residencia==$pais->id)?'selected':'';
												echo '<option value="'.$pais->id.'"  '.$selected.'>'.$pais->name.'</option>';
											}

									  ?>
									</select>
								</div>
							</div>

					<?php }else{

						if (empty($pais_residencia)){ ?>

							<div class="colum_dos campo_vacio">
								<label>
									<?php

										echo __('[:es]País*[:en]Country*[:]');
									
									?>
								</label>
								<div class="selector">
									<select name="pais_residencia" >
									  <?php

											global $wpdb;
											$wpdb_paises=$wpdb->get_results( "SELECT * FROM maf_cat_countries ORDER BY id ASC ");
	                						echo '<option disabled selected>'.__('[:es]Selecciona un País[:en]Select a Country[:]').'</option>';

											foreach ($wpdb_paises as $key_pais => $pais) {
												$selected = ($pais_residencia==$pais->id)?'selected':'';
												echo '<option value="'.$pais->id.'"  '.$selected.'>'.$pais->name.'</option>';
											}

									  ?>
									</select>
								</div>
							</div>

					<?php }else{ ?>

							<div class="colum_dos">
								<label>
									<?php

										echo __('[:es]País*[:en]Country*[:]');
									
									?>
								</label>
								<div class="selector">
									<select name="pais_residencia" >
									  <?php

											global $wpdb;
											$wpdb_paises=$wpdb->get_results( "SELECT * FROM maf_cat_countries ORDER BY id ASC ");
	                						echo '<option disabled selected>'.__('[:es]Selecciona un País[:en]Select a Country[:]').'</option>';

											foreach ($wpdb_paises as $key_pais => $pais) {
												$selected = ($pais_residencia==$pais->id)?'selected':'';
												echo '<option value="'.$pais->id.'"  '.$selected.'>'.$pais->name.'</option>';
											}

									  ?>
									</select>
								</div>
							</div>
					
					<?php		}
							
						}
					
					?>

					<?php

						if (count($_POST)==0) { ?>

						<div class="colum_dos">
								<label>
									<?php

										echo __('[:es]Rango de edad*[:en]Age range*[:]');
									
									?>
								</label>
								<div class="selector">
									<select name="rango_edad" >
									<?php

										$rango_edad_args = array("18-24","25-34","35-44","45+");
	                					echo '<option disabled selected>'.__('[:es]Selecciona un rango[:en]Select a range[:]').'</option>';

										foreach ($rango_edad_args as $key_edad => $edad) {
											//$selected = ($pais_residencia==$pais->id)?'selected':'';
	                    					$key_edad=$key_edad+1;
											$selected = ($rango_edad==$key_edad)?'selected':'';
											echo '<option value="'.$key_edad.'" '.$selected.'>'.$edad.'</option>';
											//print_r($edad);
										}
									?>
										  
										 
									</select>
								</div>
							</div>

					<?php }else{

						if (empty($rango_edad)){ ?>

						<div class="colum_dos campo_vacio">
								<label>
									<?php

										echo __('[:es]Rango de edad*[:en]Age range*[:]');
									
									?>
								</label>
								<div class="selector">
									<select name="rango_edad" >
									<?php

										$rango_edad_args = array("18-24","25-34","35-44","45+");
	                					echo '<option disabled selected>'.__('[:es]Selecciona un rango[:en]Select a range[:]').'</option>';

										foreach ($rango_edad_args as $key_edad => $edad) {
											//$selected = ($pais_residencia==$pais->id)?'selected':'';
	                    					$key_edad=$key_edad+1;
											$selected = ($rango_edad==$key_edad)?'selected':'';
											echo '<option value="'.$key_edad.'">'.$edad.'</option>';
											//print_r($edad);
										}
									?>
										  
										 
									</select>
								</div>
							</div>

					<?php }else{ ?>

						<div class="colum_dos">
								<label>
									<?php

										echo __('[:es]Rango de edad*[:en]Age range*[:]');
									
									?>
								</label>
								<div class="selector">
									<select name="rango_edad" >
									<?php

										$rango_edad_args = array("18-24","25-34","35-44","45+");
	                					echo '<option disabled selected>'.__('[:es]Selecciona un rango[:en]Select a range[:]').'</option>';

										foreach ($rango_edad_args as $key_edad => $edad) {
											//$selected = ($pais_residencia==$pais->id)?'selected':'';
	                    					$key_edad=$key_edad+1;
											$selected = ($rango_edad==$key_edad)?'selected':'';
											echo '<option value="'.$key_edad.'" '.$selected.'>'.$edad.'</option>';
											//print_r($edad);
										}
									?>
										  
										 
									</select>
								</div>
							</div>
					
					<?php		}
							
						}
					
					?>

							
							

							<div class="colum_dos">
								<label>
										<?php echo __('[:es]Perfil[:en]Profile[:]'); ?>
								</label>
								<div class="selector">
									<select name="categoria" >
									  <?php

											global $wpdb;
											$wpdb_cat=$wpdb->get_results( "SELECT * FROM users_vip_category ORDER BY id ASC ");
	                						echo '<option disabled selected>'.__('[:es]Selecciona un perfil[:en]Select a profile[:]').'</option>';

											foreach ($wpdb_cat as $key_cat => $cat) {
												$selected = ($categoria==$cat->id)?'selected':'';
												echo '<option value="'.$cat->id.'"  '.$selected.'>'.__($cat->nombre_cateogria).'</option>';
											}

									  ?>
									</select>
								</div>
							</div>

							

							<div class="colum_dos">
								<label>
									<?php

									echo __('[:es]Afiliación Organizacional[:en]Organizational Affiliation[:]');

										/*if (count($_POST)==0) {
											echo __('[:es]Afiliación Organizacional*[:en]Organizational Affiliation*[:]');
										}else{

										if (empty($email)){
												echo __('[:es]Afiliación Organizacional<span class="campo_vacio">*</span>[:en]Organizational Affiliation<span class="campo_vacio">*</span>[:]');
										}else{
												echo __('[:es]Afiliación Organizacional*[:en]Organizational Affiliations*[:]');

											}
											
										}*/
									
									?>
								</label>
								<input type="text" name="afiliacion" maxlength="64" value="<?php echo $afiliacion; ?>">
							</div>
							
							<input type="hidden" name="spam">
							
							<input type="submit" name="" value="<?php echo __('[:es]Registrar[:en]Register[:]'); ?>" id="submitBot">
						</form>
					<?php }else{ ?>
						<p><a class="boton_volver" href="<?= home_url('/vip/login'); ?>"><?= __('[:es]Volver[:en]Back'); ?></a></p>
					<?php } ?>
				</div>
			</div>
		</section>





<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 