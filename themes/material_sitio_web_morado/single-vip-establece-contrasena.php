<?php include 'header.php';?>
<!-- page_acreditacion_prensa -->
<div class="wrapper single-vip-establece-contrasena">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Establece la contraseña[:en]Set the password[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int contacto">
				<div class="texto">
					<p><?php echo __('[:es]Establece la contraseña[:en]Set the password[:]'); ?></p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int section_int_blog">
<?php



?>

				<div class="formularios">

					<?php
						//print_r($_POST);echo "\n\n";
						$code=$_GET[c];

						$page_login = get_page_by_path( 'vip-login' );

						$page_login_link = get_permalink( $page_login->ID);

						$establece_true = __('[:es]Bien hecho has establecido tu contraseña. Puedes acceder desde aquí <a href="'.$page_login_link.'">VIP</a>[:en]Well done you have established your password. You can access from here <a href="'.$page_login_link.'">VIP</a>');



						if (!empty($_POST)){

							if ($_POST['spam']==''&&$_POST['password_one']==$_POST['password_two']){

								$hash = wp_hash_password( $_POST['password_one'] );

								global $wpdb;

							    $wpdb->update('wp_users_vip', array(
							                                        'users_vip_pass'=>$hash
							                                    ), array('users_vip_pass_recovery'=>$code)
											                );
								$wp_users_vip_email = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_pass_recovery = '$code'");

								$vip_email=$wp_users_vip_email[0]->users_vip_email;
								$vip_nombre=$wp_users_vip_email[0]->users_vip_nombre;

		                if($spam == '' && $vip_email != '' ){
		                    $email=$vip_email;
		                    $to = $email;


		 
		                    $subject = 'Bienvenido a VIP'; //El asunto del correo
		                    $message = '
		                    <html>
		                    <body>
		                    
		                    <p>
		                        Hola '.$vip_nombre.' ahora puedes acceder a la sección <a href="'.$page_login_link.'">VIP</a>
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

		                }

							}

						}else{} //close key if empty

					?>

				<p>

					<?php
							//if (empty($nombre) || empty($apellido) || empty($email) ) {
								//echo __('[:es]Campos indicados con "*" son obligatorios[:en]Fields indicated with "*" are required[:]');
							//}
							

					?>


					
				</p>

				<?php
				global $wpdb;
				$wp_users_vip_pass = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_pass_recovery = '$code'");

				$pass_user=$wp_users_vip_pass[0]->users_vip_pass;

				//print_r();

				?>
				<?php

					if ($pass_user=='') {

				?>

				<p>
					<?php echo __('[:es]Escribe tu contraseña igual en los dos campos.[:en]Enter your password in the same two fields.[:]'); ?>

				</p>

					<form action="" method="post" name="form_establece_password" >

						<div class="colum_dos">
							<label>
								<?php

								echo __('[:es]Contraseña[:en]Password[:]');

								
								?>
							</label>
							<input type="password" name="password_one" id="password_one" value="<?php echo $password_one; ?>">
						</div>

						<div class="colum_dos">
							<label>
								<?php

								echo __('[:es]Escribe de nuevo la contraseña[:en]Write the password again[:]');

								
								?>
							</label>
							<input type="password" name="password_two" id="password_two" value="<?php echo $password_two; ?>">
							<span id='message'></span>
						</div>

						<label id="ver_password"><?php echo __('[:es]ver contraseña[:en]show password[:]'); ?></label>
						
						
						<input type="hidden" name="spam">
						
						<input type="submit" name="" value="<?php echo __('[:es]Establecer[:en]Establish[:]'); ?>" id="submitBot">
					</form>
				<?php }else{ ?>
				<?php echo $establece_true; ?>
				<?php  } ?>

				</div>
			</div>
		</section>

		<script type="text/javascript">

			$("#ver_password").click(function () {
			    var password_one = document.getElementById("password_one");
			    var password_two = document.getElementById("password_two");
			    if (password_one.type === "password"||password_two.type === "password"){
			        password_one.type = "text";
			        password_two.type = "text";
			    }else{
			        password_one.type = "password";
			        password_two.type = "password";
			    }
			});

			// Validar que sea numero, mayúscula y minúscula.

			$('#password_one, #password_two').on('keyup', function () {
			  if ($('#password_one').val() == $('#password_two').val()) {
			    	//$('#message').html('<?php echo __('[:es]Contraseña Correcta[:en]Correct password[:]'); ?>').css('color', 'green');
			  } else{
			    	//$('#message').html('<?php echo __('[:es]No coinciden[:en]Not Matching[:]'); ?>').css('color', 'red');
				}
			});

		</script>



<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom_style.css?v=<?php echo time();?>">
<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 