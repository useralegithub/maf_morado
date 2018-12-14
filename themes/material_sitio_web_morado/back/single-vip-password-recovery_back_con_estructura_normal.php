<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_vip.css?v=<?php echo time();?>">
<!-- page_acreditacion_prensa -->
<div class="wrapper single-vip-password-recovery wrapper_vip">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Recuperar contraseña[:en]Recover password[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int ">
				<div class="texto texto_resgistro">
					<h2><?php echo __('[:es]Recuperar contraseña[:en]Recover password[:]'); ?></h2>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int ">

				<div class="formularios">

			<?php

				global $wpdb;
				$mensaje_response=__('[:es]Escribe tu electrónico.[:en]Enter your email.[:]');
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


				if (!empty($_POST)){

					$recover_email=$_POST['recover_email'];
					$user_vip=$wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_email = '$recover_email' ORDER BY id DESC ")[0];
					$user_id=$user_vip->id;
					$user_estatus=$user_vip->users_vip_estatus;
					$user_email=$user_vip->users_vip_email;
					$nombre=$user_vip->users_vip_nombre	;
					$code=$user_vip->users_vip_pass_recovery;
					$spam=$_POST['spam'];

					if (!empty($user_vip)&&$user_estatus==$estatus_aprobado) {
						
					if ($code==''||$code=='NULL') {

						$recovery = $user_id.''.randomRecovery(20);

		    			$wpdb->update('wp_users_vip', array('users_vip_pass_recovery' => $recovery ), array('id'=>$user_id) );
						$code = $wpdb->get_results("SELECT 'users_vip_pass_recovery' FROM wp_users_vip WHERE users_vip_email = '$recover_email' ORDER BY id DESC ")[0];

					}

		                if($spam == '' && $user_email != '' ){
			 				date_default_timezone_set('America/Mexico_City');
		                    $email=$user_email;
		                    $to = $email;
							$link=get_posts(array('post_type' =>'vip' ,'name'=>'password-setup','post_status'=>"publish" ))[0];
							//$link=get_permalink($link->ID).'?'.$code;
							$link_recover=get_permalink($link->ID).'?c='.$code;
		                    $them_url=get_template_directory_uri();
		                    $home_url=home_url();
							//
 
							$subject = __('[:es]Recupera Contraseña[:en]Recovery Password[:]');
							$atibuto_img =__('[:es]Feria de Arte Material Vol. VI[:en]Material Art Fair Vol. VI[:]');
							$attr_facebook=__('[:es]Material en Facebook[:en]Material at Facebook[:]');
							$attr_twitter=__('[:es]Material en Twitter[:en]Material at Twitter[:]');
							$attr_instagram=__('[:es]Material en Instagram[:en]Material at Instagram[:]');

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
							
		                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>Directora de Relaciones VIP</b></p>
		                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>Coordinador del Programa VIP</b></p>

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
							$mailheader .= "Reply-To: " .$email."\r\n"; 
							$mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
							$mailheader .= "Content-type: text/html; charset=UTF-8\r\n";  

		                    mail($to, $subject, $contenido, $mailheader);

		                }





					$mensaje_response=__('[:es]Gracias hemos enviado un correo a '.$recover_email.' para establecer tu contraseña.[:en]Thank you we have sent an email to '.$recover_email.' to set your password.[:]');
						
					}else{

						$mensaje_response=__('[:es]No hemos encontrado tu correo.[:en]Not foun your email[:]');

					}



					

				}else{ //close key if empty
						
						//$mensaje_response=__('[:es]No hemos encontrado tu correo.[:en]Not foun your email[:]');

				}
					
			?>


				<p>
					<?php echo $mensaje_response; ?>
				</p>

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
						
						<input type="submit" name="" value="<?php echo __('[:es]Enviar[:en]Send[:]'); ?>" id="submitBot">
					</form>
				
				

				</div>
			</div>
		</section>




<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 