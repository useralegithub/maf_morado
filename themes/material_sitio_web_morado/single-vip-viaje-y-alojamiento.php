<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style_vip.css">
<!-- page_acreditacion_prensa -->
<div class="wrapper wrapper_vip single-vip-viaje-y-alojamiento">
<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Viaje y Alojamiento[:en]Travel and Hotels[:]'); ?></li>
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
				<?php include 'folder_custom_wp/menu_programa_vip.php'; ?>
			</nav>
		</div>


		<section>
			<div class="section_int">
			<?php
			 $term_hotel_oficial_vip = get_term_by( 'slug','viaje-y-alojamiento','vip_programs');

			$posts_hotel_oficial_args=array(
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
											'terms' => $term_hotel_oficial_vip->term_id
										  )
								   )
			      );
			$posts_hotel_oficial=get_posts($posts_hotel_oficial_args);
			?>
			<?php foreach ($posts_hotel_oficial as $key_hotel_oficial => $hotel_oficial) { ?>

				<div class="fila">
					<div class="titulo_fila">
						<h2><?php echo $hotel_oficial->post_title; ?></h2>
					</div>
				<?php if (get_the_post_thumbnail_url($hotel_oficial->ID,'full')==''){}else{ ?> 
					<div class="columna_imagen">
				<?php						

					$img_link='<a href="'.wp_prepare_attachment_for_js(get_post_thumbnail_id( $hotel_oficial->ID))['caption'].'" target="_blank">
						<img src="'.get_the_post_thumbnail_url($hotel_oficial->ID,"full").'">
					</a>';

					$img='<img src="'.get_the_post_thumbnail_url($hotel_oficial->ID,"full").'">';

					if (wp_prepare_attachment_for_js(get_post_thumbnail_id( $hotel_oficial->ID))['caption']=='') {
						echo $img;
					}else{
						echo $img_link;
					}
				?>
					</div>
				<?php } ?>
					<div class="columna_info">
						<div class="texto">
							<?php echo apply_filters('the_content', $hotel_oficial->post_content); ?>
						</div>
					</div>
					<div class="clear"></div>
				</div>

			<?php } ?>

			</div>
		</section>

		<?php include 'folder_custom_wp/footer_vip.php'; ?>


</div></div>
 
</body>
</html> 