<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style_vip.css">
<!-- page_acreditacion_prensa -->
<div class="wrapper wrapper_vip single-recomendaciones">
<div class="content content_int">

		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Recomendaciones[:en]Recommendations[:]'); ?></li>
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
					<?php echo __('[:es]Viaje y Alojamiento[:en]Aliances[:]'); ?>
					
				</a>

				<a href="<?php echo $recomendaciones_link; ?>" class="mv_boton mv_active">
					<?php echo __('[:es]Recomendaciones[:en]Recommendations[:]'); ?>
				</a>

				<a href="<?php echo $aliados_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Aliados[:en]Aliances[:]'); ?>
				</a>

			</nav>
		</div>

		<!-- submenu -->
		<div class="submenu_vip">
		<?php
			$term_museos = get_term_by( 'slug', 'museos', 'vip_programs' );
			$term_galeria_espacio = get_term_by( 'slug', 'galerias-y-espacios', 'vip_programs' );
			$term_restaurantes_bares = get_term_by( 'slug', 'restaurantes-y-bares', 'vip_programs' );
		?>
			<nav>
				<a href="#museo" class="mv_boton">
					<?php echo $term_museos->name; ?>
				</a>
				<a href="#galeriasyespacios" class="mv_boton">
					<?php echo $term_galeria_espacio->name; ?>
				</a>
				<a href="#restaurantesybares" class="mv_boton">
					<?php echo $term_restaurantes_bares->name; ?>
				</a>
			</nav>
		</div>


		<section>
			<div class="section_int">
			
			<?php

				$set_posts_museos=array(
					'post_type' 	 =>'vip',
					'posts_per_page' => -1,
					'post_status'	 =>'publish',
					'nopaging' 		 => true,
					'orderby'		 =>'title',
					'order'			 =>'ASC',
					'tax_query'		 =>array( 
											array(
													'taxonomy' => 'vip_programs',
													'field'=>'term_id',
													'terms' => $term_museos->term_id
												  )
									   )
				      );
				$posts_museos=get_posts($set_posts_museos);

			?>
				<div class="ancla" id="museo"></div>

				<div class="titulo_programa">
					<!-- <h2>MUSEO</h2> -->
					<h2><?php echo $term_museos->name; ?></h2>
				</div>
				<div class="mosaico_cuatro_dia">

				<?php foreach ($posts_museos as $key_museo => $museos) { ?>
					
					<div class="recomendacion recomendacion_post">
						<div
							class="hora_imagen" 
							style="background-image: url(<?php echo get_the_post_thumbnail_url($museos->ID,'full'); ?>);">
							<p class="vermas"><span><?php echo __('[:es]Ver más info[:en]See more info[:]'); ?></span></p>
						</div>
						<h2><?php echo __($museos->post_title); ?></h2>
						<p><?php echo get_post_meta( $museos->ID,'vip-museos-genero', 1); ?></p>
						<p><?php echo get_post_meta( $museos->ID,'vip-museos-zona', 1); ?></p>
					
					</div>
				<?php } ?>


					
				</div>
			</div>


			<div class="section_int">
			
			<?php
				
				$set_posts_galeria_espacio=array(
					'post_type' 	 =>'vip',
					'posts_per_page' => -1,
					'post_status'	 =>'publish',
					'nopaging' 		 => true,
					'orderby'		 =>'title',
					'order'			 =>'ASC',
					'tax_query'		 =>array( 
											array(
													'taxonomy' => 'vip_programs',
													'field'=>'term_id',
													'terms' => $term_galeria_espacio->term_id
												  )
									   )
				      );
				$posts_galeria_espacio=get_posts($set_posts_galeria_espacio);

			?>
			
				<div class="ancla" id="galeriasyespacios"></div>
				<div class="titulo_programa">
					<h2><?php echo $term_galeria_espacio->name; ?></h2>
				</div>
			
				<div class="mosaico_cuatro_dia">
				<?php foreach ($posts_galeria_espacio as $key => $galeria_espacio) { ?>
					
					<div class="recomendacion galeria_espacio_post" >
						<div class="hora_imagen" style="background-image: url(<?php echo get_the_post_thumbnail_url($galeria_espacio->ID,'full'); ?>);">
							<p class="vermas"><span><?php echo __('[:es]Ver más info[:en]See more info[:]'); ?></span></p>
						</div>
						<h2><?php echo __($galeria_espacio->post_title); ?></h2>
						<p><?php echo get_post_meta( $galeria_espacio->ID,'vip-museos-genero', 1); ?></p>
						<p><?php echo get_post_meta( $galeria_espacio->ID,'vip-museos-zona', 1); ?></p>
					</div>
				<?php } ?>
				</div>
			
			</div>

			<div class="section_int">

			<?php
				
				$set_posts_restaurantes_bares=array(
					'post_type' 	 =>'vip',
					'posts_per_page' => -1,
					'post_status'	 =>'publish',
					'nopaging' 		 => true,
					'orderby'		 =>'title',
					'order'			 =>'ASC',
					'tax_query'		 =>array( 
											array(
													'taxonomy' => 'vip_programs',
													'field'=>'term_id',
													'terms' => $term_restaurantes_bares->term_id
												  )
									   )
				      );
				$posts_restaurantes_bares=get_posts($set_posts_restaurantes_bares);

			?>
				<div class="ancla" id="restaurantesybares"></div>
				<div class="titulo_programa">

					<h2><?php echo $term_restaurantes_bares->name; ?></h2>
				</div>

			
				<div class="mosaico_cuatro_dia">
				<?php foreach ($posts_restaurantes_bares as $key => $restaurante_bar) { ?>
					<div class="recomendacion restaurante_bar_post">
						<div class="hora_imagen" style="background-image: url(<?php echo get_the_post_thumbnail_url($restaurante_bar->ID,'full'); ?>);">
							<p class="vermas"><span><?php echo __('[:es]Ver más info[:en]See more info[:]'); ?></span></p>
						</div>
						<h2><?php echo __($restaurante_bar->post_title); ?></h2>
						<p><?php echo get_post_meta( $restaurante_bar->ID,'vip-museos-genero', 1); ?></p>
						<p><?php echo get_post_meta( $restaurante_bar->ID,'vip-museos-zona', 1); ?></p>
					</div>
				<?php } ?>	
				</div>

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
<p><?php echo __('[:es]© 2018 FERIA DE ARTE MATERIAL MÉXICO SA DE CV[:en]© 2018 MEXICO MATERIAL ART FAIR SA DE CV[:]'); ?></p>
</div>
			<a href="http://dupla.mx/" target="_blank"><div class="dupla">dupla</div></a>
		</div>
	</footer>


</div>
<script type="text/javascript">
	$(document).ready(function(){
		// menu principal
		var menu=false;
		$('.btn_menu').click(function(){
			$('body').addClass('act');
			$(".menu_span").html('cerrar');
			if(!menu){
				$('body').addClass('act');
				$(".menu_span").html('cerrar');
				menu=true;
			} else {
				$('body').removeClass('act');
				$(".menu_span").html('Menú');
				menu=false;
			}
		});
		$('.menu ul li').click(function(){
			$('body').removeClass('act');
			$(".menu_span").html('Menú');
			menu=false;
		});




	var imgGal_img_body = $(".museos");
	imgGal_img_body.hide();
	
	iIntAct_body = -1;
	function fadeAuto_body(iInti_body,img) {
		if(iIntAct_body != iInti_body) {
			img.hide();
			img.eq(iInti_body).show();
			iIntAct_body = iInti_body;
			iInt = iInti_body+1;
			
		}
	}


	$(".recomendacion_post").each(function( index ) {
  		$(this).click(function(){
		    var this_img     = $(this).index();
		    fadeAuto_body( this_img ,imgGal_img_body);

		});
	});

	var iInt_img_body = 1;
	function fade_img_body(next, img) {
		if (img.length > 1 ) { 
			if (next) {cond1 = iInt_img_body; cond2 = img.length; } else {cond1 = 1; cond2 = iInt_img_body; };
			if (cond1 < cond2) {
				img.hide();
				if (next) {iInt_img_body++; } else { iInt_img_body-- }
				img.eq(iInt_img_body - 1).show();
			} else {
				img.hide();
				if (next) {iInt_img_body = 1 } else { iInt_img_body =  img.length };
				img.eq(iInt_img_body-1).show();
				
			}
		}
		iInt_img_bodyAct = iInt_img_body - 1;
		
		
	}

		$(".m_f_d").click(function() {
			fade_img_body(true,imgGal_img_body);
		});

		$(".m_f_i").click(function(){
			fade_img_body(false,imgGal_img_body);
		});

		/*---------*/

	var imgGal_img_body_gal_esp = $(".galeria_espacio");
	imgGal_img_body_gal_esp.hide();
	
	iIntAct_body_gal_esp = -1;
	function fadeAuto_body_gal_esp(iInti_body_gal_esp,img_gal_esp) {
		if(iIntAct_body_gal_esp != iInti_body_gal_esp) {
			img_gal_esp.hide();
			img_gal_esp.eq(iInti_body_gal_esp).show();
			iIntAct_body_gal_esp = iInti_body_gal_esp;
			iInt_gal_esp = iInti_body_gal_esp+1;
			
		}
	}


	$(".galeria_espacio_post").each(function( index ) {
  		$(this).click(function(){
		    var this_img_gal_esp     = $(this).index();
		    fadeAuto_body_gal_esp( this_img_gal_esp , imgGal_img_body_gal_esp);

		});
	});

	var iInt_img_body_gal_esp = 1;
	function fade_img_body_gal_esp(next_gal_esp, img_gal_esp) {
		if (img_gal_esp.length > 1 ) { 
			if (next_gal_esp) {cond1_gal_esp = iInt_img_body_gal_esp; cond2_gal_esp = img_gal_esp.length; } else {cond1_gal_esp = 1; cond2_gal_esp = iInt_img_body_gal_esp; };
			if (cond1_gal_esp < cond2_gal_esp) {
				img_gal_esp.hide();
				if (next_gal_esp) {iInt_img_body_gal_esp++; } else { iInt_img_body_gal_esp-- }
				img_gal_esp.eq(iInt_img_body_gal_esp - 1).show();
			} else {
				img_gal_esp.hide();
				if (next_gal_esp) {iInt_img_body_gal_esp = 1 } else { iInt_img_body_gal_esp =  img_gal_esp.length };
				img_gal_esp.eq(iInt_img_body_gal_esp-1).show();
				
			}
		}
		iInt_img_bodyAct_gal_esp = iInt_img_body_gal_esp - 1;
	}

		$(".g_f_d").click(function() {
			fade_img_body_gal_esp(true,imgGal_img_body_gal_esp);
		});

		$(".g_f_i").click(function(){
			fade_img_body_gal_esp(false,imgGal_img_body_gal_esp);
		});

		/*---------*/

	var imgGal_img_body_restaurante_bar = $(".restaurante_bar");
	imgGal_img_body_restaurante_bar.hide();
	
	iIntAct_body_restaurante_bar = -1;
	function fadeAuto_body_restaurante_bar(iInti_body_restaurante_bar,img_restaurante_bar) {
		if(iIntAct_body_restaurante_bar != iInti_body_restaurante_bar) {
			img_restaurante_bar.hide();
			img_restaurante_bar.eq(iInti_body_restaurante_bar).show();
			iIntAct_body_restaurante_bar = iInti_body_restaurante_bar;
			iInt_restaurante_bar = iInti_body_restaurante_bar+1;
			
		}
	}


	$(".restaurante_bar_post").each(function( index ) {
  		$(this).click(function(){
		    var this_img_restaurante_bar     = $(this).index();
		    fadeAuto_body_restaurante_bar( this_img_restaurante_bar ,imgGal_img_body_restaurante_bar);

		});
	});

	var iInt_img_body_restaurante_bar = 1;
	function fade_img_body_restaurante_bar(next_restaurante_bar, img_restaurante_bar) {
		if (img_restaurante_bar.length > 1 ) { 
			if (next_restaurante_bar) {cond1_restaurante_bar = iInt_img_body_restaurante_bar; cond2_restaurante_bar = img_restaurante_bar.length; } else {cond1_restaurante_bar = 1; cond2_restaurante_bar = iInt_img_body_restaurante_bar; };
			if (cond1_restaurante_bar < cond2_restaurante_bar) {
				img_restaurante_bar.hide();
				if (next_restaurante_bar) {iInt_img_body_restaurante_bar++; } else { iInt_img_body_restaurante_bar-- }
				img_restaurante_bar.eq(iInt_img_body_restaurante_bar - 1).show();
			} else {
				img_restaurante_bar.hide();
				if (next_restaurante_bar) {iInt_img_body_restaurante_bar = 1 } else { iInt_img_body_restaurante_bar =  img_restaurante_bar.length };
				img_restaurante_bar.eq(iInt_img_body_restaurante_bar-1).show();
				
			}
		}
		iInt_img_bodyAct_restaurante_bar = iInt_img_body_restaurante_bar - 1;
		
		
	}

		$(".r_f_d").click(function() {
			fade_img_body_restaurante_bar(true,imgGal_img_body_restaurante_bar);
		});

		$(".r_f_i").click(function(){
			fade_img_body_restaurante_bar(false,imgGal_img_body_restaurante_bar);
		});
	
		$('.wrapper.wrapper_vip .recomendacion_post').click(function(){
			$('.over_museos').css({'display':'flex','display':'-webkit-flex'});
			$('header').addClass('act_over');
		});
		$('.od_cerrar').click(function(){
			$('.over_museos').fadeOut();
			$('header').removeClass('act_over');
			//imgGal_img_body.hide();

		});
		$('.od_icon_cerrar').click(function(){
			$('.over_museos').fadeOut();
			$('header').removeClass('act_over');
			//imgGal_img_body.hide();

		});

		$('.wrapper.wrapper_vip .galeria_espacio_post').click(function(){
			$('.over_galeria_espacios').css({'display':'flex','display':'-webkit-flex'});
			$('header').addClass('act_over');
		});
		$('.od_cerrar').click(function(){
			$('.over_galeria_espacios').fadeOut();
			$('header').removeClass('act_over');
			//imgGal_img_body_gal_esp.hide();

		});
		$('.od_icon_cerrar').click(function(){
			$('.over_galeria_espacios').fadeOut();
			$('header').removeClass('act_over');
			//imgGal_img_body_gal_esp.hide();
		});
	
		$('.wrapper.wrapper_vip .restaurante_bar_post').click(function(){
			$('.over_restaurantes_bares').css({'display':'flex','display':'-webkit-flex'});
			$('header').addClass('act_over');
		});
		$('.od_cerrar').click(function(){
			$('.over_restaurantes_bares').fadeOut();
			$('header').removeClass('act_over');
			//imgGal_img_body_restaurante_bar.hide();
		});
		$('.od_icon_cerrar').click(function(){
			$('.over_restaurantes_bares').fadeOut();
			$('header').removeClass('act_over');
			//imgGal_img_body_restaurante_bar.hide();
		});


	});
</script>

<div class="over_recomendacion over_museos">
		<div class="od_cerrar"></div>
		<div class="od_icon_cerrar"></div>
		<div class="od_flecha_der m_f_d"></div>
		<div class="od_flecha_izq m_f_i"></div>
<?php foreach ($posts_museos as $key_museo => $museos)  { ?>

		<div class="over_dia_int museos">

			<div class="od_titulo">
				<h2 class="title_recomendacion"><?php echo __($museos->post_title); ?></h2>
			</div>

			<div class="od_text content_recomendacion">
				<?php echo apply_filters( 'the_content',$museos->post_content); ?>
			</div>

			<div class="od_imagen">
				<div class="od_imagen_int img_recomendacion" style="background-image:url(<?php echo get_the_post_thumbnail_url($museos->ID,'full'); ?>)"></div>
			</div>
			
		</div>

<?php } ?>

	</div>

<div class="over_recomendacion over_galeria_espacios">
		<div class="od_cerrar"></div>
		<div class="od_icon_cerrar"></div>
		<div class="od_flecha_der g_f_d"></div>
		<div class="od_flecha_izq g_f_i"></div>
<?php foreach ($posts_galeria_espacio as $key => $galeria_espacio) { ?>

		<div class="over_dia_int galeria_espacio">

			<div class="od_titulo">
				<h2 class="title_recomendacion"><?php echo __($galeria_espacio->post_title); ?></h2>
			</div>

			<div class="od_text content_recomendacion">
				<?php echo apply_filters( 'the_content',$galeria_espacio->post_content); ?>
			</div>

			<div class="od_imagen">
				<div class="od_imagen_int img_recomendacion" style="background-image:url(<?php echo get_the_post_thumbnail_url($galeria_espacio->ID,'full'); ?>)"></div>
			</div>
			
		</div>

<?php } ?>

	</div>

<div class="over_recomendacion over_restaurantes_bares">
		<div class="od_cerrar"></div>
		<div class="od_icon_cerrar"></div>
		<div class="od_flecha_der r_f_d"></div>
		<div class="od_flecha_izq r_f_i"></div>

<?php foreach ($posts_restaurantes_bares as $key => $restaurante_bar) { ?>

		<div class="over_dia_int restaurante_bar">

			<div class="od_titulo">
				<h2 class="title_recomendacion"><?php echo __($restaurante_bar->post_title); ?></h2>
			</div>

			<div class="od_text content_recomendacion">
				<?php echo apply_filters( 'the_content',$restaurante_bar->post_content); ?>
			</div>

			<div class="od_imagen">
				<div class="od_imagen_int img_recomendacion" style="background-image:url(<?php echo get_the_post_thumbnail_url($restaurante_bar->ID,'full'); ?>)"></div>
			</div>
			
		</div>

<?php } ?>

	</div>

</div>
 
</body>
</html> 