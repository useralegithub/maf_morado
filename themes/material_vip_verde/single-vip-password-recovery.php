<?php
	//condition for $code
	$code=$_GET[c];
	$user_vip=$wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_pass_recovery = '$code' ORDER BY id DESC ")[0];
	$user_id=$user_vip->id;
	//echo "code: ".$code."\n";
	//echo "user_id: ".$user_id."\n";
				

	if ($code==''&&$user_id==''||$user_id==''||$code=='') {
		header('Location: '.home_url( '/'));
	}

	include 'header.php';
?>
<!-- page_acreditacion_prensa -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_vip.css?v=<?php echo time();?>">
<div class="wrapper single-vip-password-setup wrapper_vip">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Restablece tu contraseña[:en]Reset your password[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int ">
				<div class="texto texto_resgistro">
					<h2><?php echo __('[:es]Restablece tu contraseña[:en]Reset your password[:]'); ?></h2>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int ">

				<div class="formularios">

			<?php

				$mensaje_info=__('[:es]Escribe tu contraseña. Debe de contener al menos un número, una  letra minúscula, una letra mayúscula y tener al menos 8 caracteres.[:en]Enter your password. It must contain at least a number, a lowercase letter, an uppercase letter and have at least 8 characters.[:]');
				$mensaje_invalido='';

				//$page_login = get_page_by_path( 'vip-login' );

				//$page_login_link = get_permalink( $page_login->ID);

				$page_login=get_posts(array('post_type' =>'vip' ,'name'=>'login','post_status'=>"publish" ))[0];
				$page_login_link=get_permalink($page_login->ID);

				$establece_true = __('[:es]Tu contraseña ha sido guardada. Puedes acceder a VIP desde <a href="'.$page_login_link.'">aquí</a>[:en]Your password has been set. You can access VIP from <a href="'.$page_login_link.'">here</a>');
				$spam=$_POST['spam'];



				if (!empty($_POST)){


					if ($_POST['spam']==''&&$_POST['password_one']==$_POST['password_two']){



						if (strlen($_POST['password_one']) > 7&&preg_match('#^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#',$_POST['password_one'])){

								$hash = wp_hash_password( $_POST['password_one'] );

								global $wpdb;

							    $wpdb->update('wp_users_vip', array(
							                                        'users_vip_pass'=>$hash,
							                                        'users_vip_pass_recovery'=>'NULL'

							                                    ), array('id'=>$user_vip->id)
											                );
								//$wp_users_vip_email = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_pass_recovery = '$code'");

								$vip_email=$user_vip->users_vip_email;
								$vip_nombre=$user_vip->users_vip_nombre;

		                if($spam == '' && $vip_email != '' ){
		                    $email=$vip_email;
		                    $to = $email;


		 
		                    $subject = __('[:es]Bienvenido a VIP[:en]Welcome to VIP[:]'); //El asunto del correo
		                    $es='
		                    <html>
		                    <body>
		                    
		                    <p>
		                        Hola '.$vip_nombre.' ahora puedes acceder a la sección <a href="'.$page_login_link.'">VIP</a>
		                    </p>
		                    

		                    </body>
		                    </html>
		                    ';

		                    $en='
		                    <html>
		                    <body>
		                    
		                    <p>
		                        Hi '.$vip_nombre.', you can now access <a href="'.$page_login_link.'">VIP</a>
		                    </p>
		                    

		                    </body>
		                    </html>
		                    ';
		                    //$message=base64_encode($message);
		                    $message =__('[:es]'.$es.'[:en]'.$en.'[:]');
		                    //$contenido=utf8_decode($message);
		                    $contenido=$message;
		                    
		                    $mailheader .= "Reply-To: vip@material-fair.com\r\n"; 
		                    $mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
		                    $mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 
		                    //wp_mail($to, $subject, $contenido, $mailheader);

		                } //close key sen email

						}else{//close key if password more strlen>=8 and cointaint letters and numbers
							
							$mensaje_invalido = __('[:es]Tu contraseña debe tener al menos 8 caracteres, un número, una letra mayúscula y una letra minúscula.[:en]Your password must have at least 8 characters, one number, one uppercase letter and one lower case letter.[:]');
						}

					}else{//close key if spam=0 and same password
							
							$mensaje_invalido = __('[:es]Tu contraseña debe de ser igual en los dos campos.[:en]Your password must be the same in both fields.[:]');

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
				//global $wpdb;
				$users_vip_recovery = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_pass_recovery = '$code'");

				//$pass_user=$user_vip->users_vip_pass;
				//echo "string string";
				//print_r($pass_user);

				?>
				<?php

					//if ($pass_user=='') {
					if (!empty($users_vip_recovery)) {

				?>

				<p>
					<?php //echo __('[:es]Escribe tu contraseña igual en los dos campos.[:en]Enter your password in the same two fields.[:]'); ?>

				</p>

				
					<?php echo ($mensaje_invalido=='')?'<p>'.$mensaje_info.'</p>':'<p class="mensaje_error_vip">'.$mensaje_invalido.'</p>'; ?>
				

				

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

								echo __('[:es]Escribe de nuevo tu contraseña[:en]Type your password again[:]');

								
								?>
							</label>
							<input type="password" name="password_two" id="password_two" value="<?php echo $password_two; ?>">
							<span id='message'></span>
						</div>

						<!-- <label id="ver_password"><?php echo __('[:es]ver contraseña[:en]show password[:]'); ?></label> -->
						
						
						<input type="hidden" name="spam">
						
						<input type="submit" name="" value="<?php echo __('[:es]Restablecer mi contraseña[:en]Reset my password[:]'); ?>" id="submitBot">
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




<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 