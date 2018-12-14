<?php include 'folder_custom_wp/session.php'; ?>
<?php include 'header.php';  ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style_vip.css">
<!-- page_acreditacion_prensa -->
<div class="wrapper wrapper_vip single-vip-programa">
<div class="content content_int">

		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Programa VIP 2018[:en]VIP Program 2018[:]'); ?></li>
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

		$vip_program = get_term_by( 'slug', 'vip-program-2018', 'vip_programs' );
			
		$terms_dias = get_terms( array(
					    'taxonomy'   => 'vip_programs',
					    'hide_empty' => false,
			            'orderby'   => 'none',
			            'parent'     => $vip_program->term_id

					)  );


		?>
			<nav>
			<?php foreach ($terms_dias as $key => $dia) { ?>
			<?php $short_dia = mb_substr($dia->name,0,2,'UTF-8'); ?>
			<?php $dia_slug = explode('-',$dia->slug)[0]; ?>
			<?php $description_dia = $dia->description; ?>

			<?php ?>
				<a href="<?php echo home_url('/vip/programa/').''.$dia_slug; ?>" class="mv_boton"><?php echo __($short_dia); ?>. <?php echo __($description_dia); ?></a>
			<?php } ?>
			</nav>
		</div>


<?php
$dia_term=get_term_by( 'slug','domingo-2018','vip_programs');
$term_custom_fields = get_option( "taxonomy_term_$dia_term->term_id" );
$dia_desc_es = $term_custom_fields['description_day_es'];
$dia_desc_en = $term_custom_fields['description_day_en'];
//print_r($dia_desc_en);
?>

		<section>
			<div class="section_int">
				<div class="titulo_programa">
					<h2><?php echo $dia_term->name; ?></h2>
					<p><?php echo __('[:es]'.$dia_desc_es.'[:en]'.$dia_desc_en.'[:]'); ?></p>
				</div>

				<div class="mosaico_cuatro_dia">
				<?php

					$set_posts=array(
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
														'terms' => $dia_term->term_id
													  )
										   )
					      );
					//$posts=get_posts($set_posts);

					$posts=get_posts($set_posts);

					usort($posts, function($a, $b){
					    $hourA = get_post_meta($a->ID, 'programa-hora', TRUE);
					    $hourB = get_post_meta($b->ID, 'programa-hora', TRUE);

					    $hourAArray = explode('-', $hourA);
					    $hourBArray = explode('-', $hourB);

					    return strtotime(trim($hourAArray[0])) > strtotime(trim($hourBArray[0]));
					});

				?>
				<?php foreach ($posts as $key => $entrada) { ?>

					<div class="hora entrada">
						<div class="hora_imagen" style="background-image: url(<?php echo get_the_post_thumbnail_url($entrada->ID,'full'); ?>);">
							<p class="vermas"><span><?php echo __('[:es]Ver más info[:en]See more info[:]'); ?></span></p>
						</div>
						<h2><?php echo __($entrada->post_title); ?></h2>
						<p><?php
								echo !get_post_meta($entrada->ID,'programa-ubicacion',true)?'':str_replace(array("<p>","</p>"),"",apply_filters('the_content','[:es]Ubicación:[:en]Location:[:] ')).''.get_post_meta($entrada->ID,'programa-ubicacion',true); ?></p>
						<p class="fecha">
									<?php echo !get_post_meta($entrada->ID,'programa-hora',true)?'':''.get_post_meta($entrada->ID,'programa-hora',true); ?></p>
						
					</div>
				<?php } ?>
				</div>
			</div>
		</section>

		<?php include 'folder_custom_wp/footer_vip.php'; ?>


</div></div>
 
</body>
</html> 