<?php //header("Location: ".home_url( )); ?>
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
		<div class="image img_09" data-stellar-ratio="-0.9"><img src="<?php echo get_template_directory_uri(); ?>/rojoimg/fondo/04.png"></div>

			<div class="section_int">
				
					<div class="columna">
						<div class="texto">
				<?php echo apply_filters('the_content', $post->post_content); ?></div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">
						</div>
					</div>
					<div class="clear"></div>

				
			</div>

			<div class="section_int section_int_blog">
				<div class="formularios">
					<form
						<?php
							echo 'action=" '.home_url().'/vip/ "';
						?>
					method="POST"
					class="vip_rogram_login">
						<div class="colum_dos">
							<label><?php echo __('[:es]Email[:en]Email[:]'); ?></label>
							<input type="text" name='uv_mail'>
							<label><?php echo __('[:es]Contraseña[:en]Password[:]'); ?></label>
							<input type="password" name='uv_pass'>
							<input type="submit" value="<?php echo __('[:es]Log In[:en]Log In[:]'); ?>">
                            <a href="https://material-fair.com/exhibitor_portal/admin/password_lost?lang=<?= qtranxf_getLanguage(); ?>"><?php echo __('[:es]Recuperar Contraseña[:en]Password Recovery[:]'); ?></a>
    					</div>
						

						<div class="colum_dos">
				
				<a href="<?php echo __('[:es]'.home_url().'/vip/registro[:en]'.home_url().'/vip/register[:]'); ?>">

					<input type="button" class="rojo_registro_vip" value="<?php echo __('[:es]REGISTRAR[:en]REGISTER[:]'); ?>">

<!-- 					<div class="rojo_registro_vip">
						<?php echo __('[:es]REGISTRO VIP[:en]VIP REGISTRATION[:]'); ?>
							
					</div> -->
				</a>
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