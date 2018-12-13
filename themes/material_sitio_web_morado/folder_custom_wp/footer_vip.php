

<footer>
	<script type="text/javascript"> themeurl = 'https://material-fair.com/wp-content/themes/material'; </script>
		<div class="footer_int">
			<div class="texto">
				<div>
					<p></p>
					<h2>Oficinas</h2>
					<p>Melchor Ocampo 154-A<br>
					Col. San Rafael, Del. Cuauhtémoc<br>
					Ciudad de México, CP 06470<br>
					México</p>
					<p>				</p>
				</div>
				
				<div>				
					<p></p>
					<h2>Contacto</h2>
					<p><a href="mailto:info@material-fair.com">info@material-fair.com</a><br>
					+52-55-5256-5533</p>
					<p>				</p>
				</div>
			</div>

			<div class="content_img_footer">
				<div class="center_img_footer">
					&nbsp;
					<img class="alignnone wp-image-2267" src="https://material-fair.com/wp-content/uploads/2018/01/CDMX-BEIGE-ESP-01-1.png" alt="" width="230" height="80"></div>
				</div> 	
				<div class="content_redes">
					<!-- <img src="img/logo_dos.png"> -->
					<div class="redes">

				<?php
				if ( get_post_type() === 'vip' ||get_queried_object()->post_name=='vip-login') { ?>
						
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_3']; ?>" target="_blank">
						<div class="red ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/big-red_verde.png">
						</div>
					</a>
					    
				<? }else{ ?>
						
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_3']; ?>" target="_blank">
						<div class="red ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/red_a.png">
						</div>
					</a>
					    
				<?php } ?>
						<a href="https://www.facebook.com/materialfair" target="_blank">
							<div class="red ">FB</div>
						</a>
						<a href="https://twitter.com/MaterialFair" target="_blank">
							<div class="red">TW</div>
						</a>
						<a href="https://www.instagram.com/materialfair/" target="_blank">
							<div class="red">IG</div>
						</a>
					</div>
					<div class="clear"></div>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="//material-fair.us7.list-manage.com/subscribe/post?u=83453f8fa83282ca9ee2d363e&amp;id=64a0a5c317" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
						    <div id="mc_embed_signup_scroll">
								<h2>Suscríbete a nuestro newsletter</h2>
								<div class="mc-field-group">
									<label for="mce-EMAIL">Email<span class="asterisk">*</span>
									</label>
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								</div>
								<div class="indicates-required"><span class="asterisk">*</span>
								Requeridos</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_83453f8fa83282ca9ee2d363e_64a0a5c317" tabindex="-1" value=""></div>
							    <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
					</div>

<!--End mc_embed_signup-->
			</div>
			<div class="clear"></div>
			<div class="copy">
				
					
					<p></p>
<p>© 2018 FERIA DE ARTE MATERIAL MÉXICO SA DE CV</p>
<p>			</p></div>
			<a href="http://dupla.mx/" target="_blank"><div class="dupla">dupla</div></a>
		</div>
	</footer>