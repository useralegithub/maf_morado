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
				<?php include 'folder_custom_wp/menu_programa_vip.php'; ?>
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

		<?php include 'folder_custom_wp/footer_vip.php'; ?>


</div></div>
 
</body>
</html> 