<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/rojo.css?v=<?php echo time();?>">
<style type="text/css">
/*	.rojo_registro_vip{
    width: auto!important;
    display: block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    cursor: pointer;
    background-color: #c01f25!important;
    color: #fffcd7!important;
    padding: 5px!important;
}*/

.rojo_registros_vip{
    background-color: #c01f25!important;
    background-color: #c01f25;
    width: auto!important;
    font-size: 14px;
    font-family: 'AkkuratPro';
    font-weight: bold;
    padding: 0px 10px;
    line-height: 25px;
}
.colum_dos_botones{
    display: -webkit-inline-box;
    width: calc(30% - 0px);
    margin: 0px 20px 20px 0px;
    vertical-align: top;
}
form input[type="submit"]{
    margin-right: 10px;
}
.recupera_pass_vip_rojo{
background-color: #c01f25;
    width: auto;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    cursor: pointer;
    color: #fffcd7;
    padding: 5px;	
}
</style>
<?php



if (!$_POST){
$uv_email='';
$mensaje_email=__('[:es]Ingresa tú email para recuperar tu contraseña: [:en]Enter your email to retrieve your password[:]');
}
else{
$uv_email=$_POST['uv_mail'];

		global $wpdb;
		$wp_users_vip_query = $wpdb->get_results("
			SELECT users_vip_email, users_vip_pass
			FROM wp_users_vip
			WHERE users_vip_email='".$uv_email."'
			");



		echo "\n<!-- array_bd: \n\n";

		if (empty($wp_users_vip_query)||count($wp_users_vip_query)==0) {
			echo 'NO EMAIL';
			$mensaje_email=__('[:es]Lo sentimos no se encontro tú email:  '.$_POST['uv_mail'].'[:en]We are sorry, you did not find your email:   '.$_POST['uv_mail'].'[:]');
		}else{
			echo "usuario email: ".$wp_users_vip_query[0]->users_vip_email;
		echo "  pass: ".$wp_users_vip_query[0]->users_vip_pass;
		$mensaje_email=__('[:es]Por favor revisa la bandeja de entrada para el correo:   '.$wp_users_vip_query[0]->users_vip_email.' [:en]Please check the inbox for the mail:   '.$wp_users_vip_query[0]->users_vip_email.'[:]');


		$para      = $wp_users_vip_query[0]->users_vip_email;
		$titulo    = 'Material Art Fair VIP';

		$mensaje = '
					<html>
					<head>
					  <title>MAterial Art Fair VIP</title>
					</head>
					<body>
					  <p>¡Info Password:!</p>
					  <table>
					    <tr>
					      <th>Email</th><th>Password</th>
					    </tr>
					    <tr>

					      <td style="text-align: center;vertical-align: inherit;">
					      	'.$wp_users_vip_query[0]->users_vip_email.'
					      </td>

					      <td style="text-align: center;vertical-align: inherit;">
					      	'.$wp_users_vip_query[0]->users_vip_pass.'
					      </td>

					    </tr>
					  </table>
					</body>
					</html>
					';



		$encoding = "utf-8";
		$cabeceras = "MIME-Version: 1.0 \r\n";
		$cabeceras .= "Content-type: text/html; charset=".$encoding." \r\n";
		$cabeceras .= 'From: developer@dupla.mx' . "\r\n" .
		$cabeceras .= 'Reply-To: developer@dupla.mx' . "\r\n" .
		$cabeceras .= 'X-Mailer: PHP/' . phpversion();
		$cabeceras .= "Date: ".date("r (T)")." \r\n";

		mail($para, $titulo, $mensaje, $cabeceras);

		}

		echo "\n\n";
		echo "\n\n";
		//print_r(count($wp_users_vip_query));
		echo "\n\n";


		echo "\n\n";
		print_r($_POST);
		echo "\n-->\n";

}



?>
<div class="wrapper vip_login">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/rojoimg/logo_barra.png"></a></li>
				<li><?php echo __('[:es]VIP[:en]VIP[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="image img_08" data-stellar-ratio="-0.8"><img src="<?php echo get_template_directory_uri(); ?>/rojoimg/fondo/03.png"></div>
		

			<div class="section_int">
				
					<div class="columna">
						<div class="texto">
				<?php echo apply_filters('the_content', $post->post_content); ?></div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo get_template_directory_uri(); ?>/rojoimg/fondo/03.png">
						</div>
					</div>
					<div class="clear"></div>

				
			</div>

			<div class="section_int section_int_blog">
				<div class="formularios">
					<form
						<?php
							//echo 'action=" '.get_post_permalink( 2565 ).'"';
						?>
					method="POST"
					class="vip_rogram_login">
						<div class="colum_dos">
							<label>
								<?php echo $mensaje_email; ?>
							</label>

							<input type="text" name='uv_mail'>
							
							
							<input type="submit" value="<?php echo __('[:es]Enviar[:en]Log Send[:]'); ?>">
							
							<a href="<?php echo get_post_permalink( 909 ); ?>" class="recupera_pass_vip_rojo"><?php echo __('[:es]Acceder a VIP[:en]Access VIP[:]'); ?></a>

						
						</div>
						

						<div class="colum_dos">
				
						</div>
						
					</form>


				</div>
			</div>
		</section>


<footer>
	<script type="text/javascript"> themeurl = '<?php echo get_template_directory_uri();?>'; </script>
		<div class="footer_int">
			<div class="texto">
				<?php
				$footer=explode('<!--more-->', apply_filters('the_content', get_post(119)->post_content )); ?>

				<div>
					
					<?php echo $footer[0]; ?>
				</div>
				
				<div>
					
					<?php echo $footer[1]; ?>
				</div>

				
			</div>
			<div class="content_img_footer">
				<div class="center_img_footer"><?php echo strip_tags( $footer[3],'<img>')?></div>
			</div> 	
			<div class="content_redes">
				<!-- <img src="img/logo_dos.png"> -->
				<div class="redes">

					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_3']; ?>" target="_blank">
						<div class="red ">
							<img src="<?php echo get_template_directory_uri(); ?>/rojoimg/copy_of_artsy_square_widget_logo_rojo_vip.png">
						</div>
					</a>

					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_0']; ?>" target="_blank">
						<div class="red ">FB</div>
					</a>
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_1']; ?>" target="_blank">
						<div class="red">TW</div>
					</a>
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_2']; ?>" target="_blank">
						<div class="red">IG</div>
					</a>
				</div>

				<div class="clear"></div>

				<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//material-fair.us7.list-manage.com/subscribe/post?u=83453f8fa83282ca9ee2d363e&amp;id=64a0a5c317" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2><?php echo __('[:es]Suscríbete a nuestro newsletter[:en]Subscribe to our newsletter[:]'); ?></h2>

<div class="mc-field-group">
	<label for="mce-EMAIL">Email<span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="indicates-required"><span class="asterisk">*</span>
	<?php echo __('[:es]Requeridos[:en]Required[:]'); ?></div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_83453f8fa83282ca9ee2d363e_64a0a5c317" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="<?php echo __('[:es]Suscribirse[:en]
subscribe[:]'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
			</div>
			<div class="clear"></div>
			<div class="copy">
				
					
					<?php echo $footer[2]; ?>
			</div>
			<a href="http://dupla.mx/" target="_blank"><div class="dupla">dupla</div></a>
		</div>
	</footer>

</div>

</div>
 
</body>
</html> 