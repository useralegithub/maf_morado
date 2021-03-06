<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style_vip.css">
<!-- page_acreditacion_prensa -->
<div class="wrapper wrapper_vip single-vip-aliados">
<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Aliados VIP[:en]VIP Aliances[:]'); ?></li>
			</ul>
		</div>

		<!-- boton -->
		<div class="btn_responsive_vip">
			<div class="linea_v linea_v_uno"></div>
			<div class="linea_v linea_v_dos"></div>
			<div class="linea_v linea_v_tres"></div>
		</div>
		<!-- menú -->
		<div class="menu_vip">
			<nav>
			<?php

				$bienvenido=get_posts(array('post_type' =>'vip' ,'name'=>'bienvenido','post_status'=>"publish" ))[0];
				$bienvenido_link=get_permalink($bienvenido->ID);

				$programa=get_posts(array('post_type' =>'vip' ,'name'=>'programa','post_status'=>"publish" ))[0];
				$programa_link=get_permalink($programa->ID);

				$hotel_oficial=get_posts(array('post_type' =>'vip' ,'name'=>'viaje-y-alojamiento','post_status'=>"publish" ))[0];
				$hotel_oficial_link=get_permalink($hotel_oficial->ID);

				$aliados=get_posts(array('post_type' =>'vip' ,'name'=>'aliados','post_status'=>"publish" ))[0];
				$aliados_link=get_permalink($aliados->ID);

				$recomendaciones=get_posts(array('post_type' =>'vip' ,'name'=>'recomendaciones','post_status'=>"publish" ))[0];
				$recomendaciones_link=get_permalink($recomendaciones->ID);

			?>
				<a href="<?php echo $bienvenido_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Bienvenido[:en]Welcome[:]'); ?>
				</a>
				
				<a href="<?php echo $programa_link; ?>" class="mv_boton">
					<?php echo __('[:es]Programa VIP 2018[:en]VIP Program 2018[:]'); ?>
				</a>

				<a href="<?php echo $hotel_oficial_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Viaje y Alojamiento[:en]Travel and Hotels[:]'); ?>
					
				</a>

				<a href="<?php echo $recomendaciones_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Recomendaciones[:en]Recommendations[:]'); ?>
				</a>

				<a href="<?php echo $aliados_link; ?>" class="mv_boton mv_active ">
					<?php echo __('[:es]Aliados[:en]Aliances[:]'); ?>
				</a>

			</nav>
		
		</div>




		<section>
			<div class="section_int">
			<?php

			$term_aliados_vip = get_term_by( 'slug','aliados-vip','vip_programs');

			$posts_aliados_args=array(
				'post_type' 	=>'vip',
				'posts_per_page' => -1,
				'post_status'	=>'publish',
				'order'=>'DESC',
				'orderby'=>'date',
				'nopaging' 		=> true,
				'tax_query'		=>array( 
									array(
											'taxonomy' => 'vip_programs',
											'field'=>'term_id',
											'terms' => $term_aliados_vip->term_id
										  )
								   )
			      );
			$posts_aliados=get_posts($posts_aliados_args);
			?>
			<?php foreach ($posts_aliados as $key_aliados => $aliados) { ?>

				<div class="fila">
					<div class="titulo_fila">
						<h2><?php echo $aliados->post_title; ?></h2>
					</div>
				<?php if (get_the_post_thumbnail_url($aliados->ID,'full')==''){}else{ ?> 
					<div class="columna_imagen">
				<?php						

					$img_link='<a href="'.wp_prepare_attachment_for_js(get_post_thumbnail_id( $aliados->ID))['caption'].'" target="_blank">
						<img src="'.get_the_post_thumbnail_url($aliados->ID,"full").'">
					</a>';

					$img='<img src="'.get_the_post_thumbnail_url($aliados->ID,"full").'">';

					if (wp_prepare_attachment_for_js(get_post_thumbnail_id( $aliados->ID))['caption']=='') {
						echo $img;
					}else{
						echo $img_link;
					}
				?>
					</div>
				<?php } ?>
					<div class="columna_info">
						<div class="texto">
							<?php echo apply_filters('the_content', $aliados->post_content); ?>
						</div>
					</div>
					<div class="clear"></div>
				</div>

			<?php } ?>

			</div>
		</section>



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
						<a href="?p=expositores" target="_blank">
							<div class="red ">
								<img src="img/red_verde.png">
							</div>
						</a>
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


</div></div>
 
</body>
</html> 