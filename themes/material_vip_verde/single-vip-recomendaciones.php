<?php include 'folder_custom_wp/session.php'; ?>
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
			<?php include 'folder_custom_wp/logout.php'; ?>
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
				<?php include 'folder_custom_wp/menu_programa_vip.php'; ?>
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

		<?php include 'folder_custom_wp/footer_vip.php'; ?>


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

	iInt_img_bodyAct = -1;
	function fadeAuto_body(iInti_body,img) {
		if(iInt_img_bodyAct != iInti_body) {
			img.hide();
			img.eq(iInti_body).show();
			iInt_img_bodyAct = iInti_body;
			iInt_img_body = iInti_body+1;
			
		}
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
	
	iInt_img_bodyAct_gal_esp = -1;
	function fadeAuto_body_gal_esp(iInti_body_gal_esp,img_gal_esp) {
		if(iInt_img_bodyAct_gal_esp != iInti_body_gal_esp) {
			img_gal_esp.hide();
			img_gal_esp.eq(iInti_body_gal_esp).show();
			iInt_img_bodyAct_gal_esp = iInti_body_gal_esp;
			iInt_img_body_gal_esp = iInti_body_gal_esp+1;
			
		}
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

	iInt_img_bodyAct_restaurante_bar = -1;
	function fadeAuto_body_restaurante_bar(iInti_body_restaurante_bar,img_restaurante_bar) {
		if(iInt_img_bodyAct_restaurante_bar != iInti_body_restaurante_bar) {
			img_restaurante_bar.hide();
			img_restaurante_bar.eq(iInti_body_restaurante_bar).show();
			iInt_img_bodyAct_restaurante_bar = iInti_body_restaurante_bar;
			iInt_img_body_restaurante_bar = iInti_body_restaurante_bar+1;
			
		}
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