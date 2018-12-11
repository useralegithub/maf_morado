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
					$code=$user_vip->users_vip_pass_recovery;
					$spam=$_POST['spam'];

					if (!empty($user_vip)&&$user_estatus==$estatus_aprobado) {
						
					if ($code==''||$code=='NULL') {

						$recovery = $user_id.''.randomRecovery(20);

		    			$wpdb->update('wp_users_vip', array('users_vip_pass_recovery' => $recovery ), array('id'=>$user_id) );
						$code = $wpdb->get_results("SELECT 'users_vip_pass_recovery' FROM wp_users_vip WHERE users_vip_email = '$recover_email' ORDER BY id DESC ")[0];

					}

		                if($spam == '' && $user_email != '' ){
		                    $email=$user_email;
		                    $to = $email;
							$link=get_posts(array('post_type' =>'vip' ,'name'=>'password-setup','post_status'=>"publish" ))[0];
							//$link=get_permalink($link->ID).'?'.$code;
							$link=get_permalink($link->ID).'?c='.$code;

		                    $es='
		                    <html>
		                    <body>
		                    
		                    <p>
		                        Pulsa en el siguiente enlace para establecer tu contraseña: <a href="'.$link.'">Establece Contraseña</a>
		                    </p>
		                    

		                    </body>
		                    </html>
		                    ';

		                    $en='
		                    <html>
		                    <body>
		                    
		                    <p>Click on the following link to set your password: <a href="'.$link.'">Recovery Password</a>
		                    </p>
		                    

		                    </body>
		                    </html>
		                    ';

		 
		                    $subject = __('[:es]Recupera Contraseña[:en]Recovery Password[:]'); //El asunto del correo
		                    $message =__('[:es]'.$es.'[:en]'.$en.'[:]');
		                    //$message=base64_encode($message);
		                    $contenido=utf8_decode($message);
		                    $mailheader .= "From: Material<noreply@material-fair.com>\r\n"; 
		                    $mailheader .= "Reply-To: " .$email."\r\n"; 
		                    $mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

		                    mail($to, $subject, $contenido, $mailheader);

		                }





					$mensaje_response=__('[:es]Gracias hemos enviado un correo a '.$recover_email.' para establecer tu contraseña. code='.$code.'[:en]Thank you we have sent an email to '.$recover_email.' to set your password.[:]');
						
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