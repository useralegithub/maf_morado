<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_vip.css?v=<?php echo time();?>">
<!-- page_acreditacion_prensa -->
<div class="wrapper single-vip-password-recovery wrapper_vip">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Recuperación de contraseña[:en]Password recovery[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int ">
				<div class="texto texto_resgistro">
					<h2><?php echo __('[:es]Recuperación de contraseña[:en]Password recovery[:]'); ?></h2>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int ">

				<div class="formularios">

			<?php
				$messageClass = '';
				$success = FALSE;
				$lang=qtranxf_getLanguage();

				global $wpdb;
				$mensaje_response=__('[:es]Escribe tu email.[:en]Enter your email.[:]');
				include 'folder_custom_wp/user_estatus.php';

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

				function is_valid_email($str){
				  $result = (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
					  if ($result){
					    list($user, $domain) = split('@', $str);
					    $result = checkdnsrr($domain, 'MX');
					  }
					  return $result;
				}

				if(!empty($_POST)){
					if (!empty($_POST['recover_email'])){

						$recover_email=$_POST['recover_email'];
						$user_vip=$wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_email = '$recover_email' ORDER BY id DESC ")[0];
						$user_id=$user_vip->id;
						$user_estatus=$user_vip->users_vip_estatus;
						$user_email=$user_vip->users_vip_email;
						$nombre=$user_vip->users_vip_nombre	;
						$code=$user_vip->users_vip_pass_recovery;
						$user_pass=$user_vip->users_vip_pass;
						$spam=$_POST['spam'];

						if ($user_pass==''||empty($user_pass)||!$user_pass) {
							
							$messageClass = ' class="mensaje_error_vip"';
							$mensaje_response=__('[:es]Tu cuenta aún no ha sido verificada.[:en]Your account has not yet been verified..[:]');
						}else{

						if (!empty($user_vip)&&$user_estatus==$estatus_aprobado) {
							
							if ($code==''||$code=='NULL') {

								$recovery = $user_id.''.randomRecovery(20);

				    			$wpdb->update('wp_users_vip', array('users_vip_pass_recovery' => $recovery ), array('id'=>$user_id) );
								$code = $recovery;

							}

			                if($spam == '' && $user_email != '' ){
				 				date_default_timezone_set('America/Mexico_City');
			                    $email=$user_email;
			                    $to = $email;
								$link=get_posts(array('post_type' =>'vip' ,'name'=>'password-recovery','post_status'=>"publish" ))[0];
								//$link=get_permalink($link->ID).'?'.$code;
								$link_recover=get_permalink($link->ID).'?c='.$code;
			                    $them_url=get_template_directory_uri();
			                    $home_url=home_url();
								//

								$subject = __('[:es]Feria de Arte Material Vol. VI | Recupera tu contraseña para VIP[:en]Material Art Fair Vol. VI | Recover you password for VIP[:]');
								$atibuto_img =__('[:es]Feria de Arte Material Vol. VI[:en]Material Art Fair Vol. VI[:]');
								$attr_facebook=__('[:es]Material en Facebook[:en]Material at Facebook[:]');
								$attr_twitter=__('[:es]Material en Twitter[:en]Material at Twitter[:]');
								$attr_instagram=__('[:es]Material en Instagram[:en]Material at Instagram[:]');

				                $from_es = 'From: Feria de Arte Material VIP <vip@material-fair.com>' . "\r\n";
				                $from_en = 'From: Material Art Fair VIP <vip@material-fair.com>' . "\r\n";
				                $from_gral=($lang=='es')?$from_es:$from_en;

			                    $es='

			                    <p>Saludos '.$nombre.',</p>
								
								<p>
								Gracias por tu interés en el Programa VIP 2019 de la Feria de Arte Material. Para recuperar tu acceso al Portal VIP, te pedimos por favor que utilices el siguiente vínculo:
								</p>

								<p><a href="'.$link_recover.'">RECUPERAR CONTRASEÑA</a></p>

								<p style="margin-top: 30px;">Saludos cordiales,</p>
								
			                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>Directora de Relaciones VIP</b></p>
			                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>Coordinador del Programa VIP</b></p>

								';

			                    $en='

			                    <p>Dear '.$nombre.',</p>
								
								<p>
								Thanks for your interest in Material Art Fair’s 2019 VIP Program. To recover your access to the VIP portal, we kindly ask you to use the following link:
								</p>

								<p><a href="'.$link_recover.'">RECOVER MY PASSWORD</a></p>

								<p style="margin-top: 30px;">Kind regards,</p>
								
			                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>VIP Relations Director</b></p>
			                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>VIP Program Coordinator</b></p>

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

								
								//$mailheader .= __('[:es]From: Feria de Arte Material VIP <vip@material-fair.com>[:en]From: Material Art Fair VIP <vip@material-fair.com>[:]')."\r\n";

								$mailheader .= $from_gral;
								$mailheader .= 'MIME-Version: 1.0' . "\r\n";
								$mailheader .= "Reply-To: vip@material-fair.com\r\n"; 
								$mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
								$mailheader .= "Content-type: text/html; charset=UTF-8\r\n";  
								
								
			                    wp_mail($to, $subject, $contenido, $mailheader);

			                }


							$success = TRUE;
							$mensaje_response=__('[:es]Se enviado un mensaje con las instrucciones para recuperar tu contraseña al email proporcionado.[:en]A message has been sent to the email you provided with the instructions to recover you password.[:]');
							
						}else{
							$messageClass = ' class="mensaje_error_vip"';
							$mensaje_response=__('[:es]El email no fue encontrado.[:en]The email was not found.[:]');

						}





						}// CLose key else for validate account is valid // if ($user_pass==''||empty($user_pass)||!$user_pass) {


						

					}else{ //close key if empty
							$messageClass = ' class="mensaje_error_vip"';
							$mensaje_response=__('[:es]Escribe un email válido.[:en]Type a valid email.[:]');

					}
				}
					
			?>


				<p<?= $messageClass; ?>>
					<?php echo $mensaje_response; ?>
				</p>
				<?php if(! $success){ ?>
					<form action="" method="post" name="form_establece_password" >

						<div class="colum_dos">
							<label>
								<?php

								//echo __('[:es]Contraseña[:en]Password[:]');

								
								?>
							</label>
							<input type="email" name="recover_email" id="recover_email" value="<?php //echo $password_one; ?>">
						</div>

						<input type="hidden" name="spam">
						
						<input type="submit" name="" value="<?php echo __('[:es]Recuperar mi contraseña[:en]Recover my password[:]'); ?>" id="submitBot">
					</form>
				<?php }else{ ?>
					<p><a class="boton_volver" href="<?= home_url('vip/login'); ?>"><?= __('[:es]Volver[:en]Back'); ?></a></p>
				<?php } ?>
			</div>
		</div>
	</section>




<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 