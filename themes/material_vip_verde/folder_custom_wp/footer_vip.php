

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

				<?php
				if ( get_post_type() === 'vip' ||get_queried_object()->post_name=='vip-login'||get_queried_object()->post_name=='login') { ?>
						
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_3']; ?>" target="_blank">
						<div class="red ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/big-red_verde.png">
						</div>
					</a>
					    
				<?php }else{ ?>
						
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_3']; ?>" target="_blank">
						<div class="red ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/red_a.png">
						</div>
					</a>
					    
				<?php } ?>

			 	

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