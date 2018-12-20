<?php include 'folder_custom_wp/session.php'; ?>
<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style_vip.css">
<!-- page_acreditacion_prensa -->
<div class="wrapper wrapper_vip single-vip-bienvenido">
<div class="content content_int">

		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
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


		<section>
			<div class="section_int section_int_bienvenidos_vip">
				<div class="banner">
					<?php 
						$img_es=get_template_directory_uri().'/img/bannertop.png';
						$img_en=get_template_directory_uri().'/img/bannertop.png';
					?>
					<img src="<?php echo __('[:es]'.$img_es.'[:en]'.$img_en.'[:]'); ?>">
				</div>
				<div class="columna">
					<div class="texto">
			<?php
				$post_bienvenido=get_posts(array('post_type' =>'vip' ,'name'=>'bienvenido','post_status'=>"publish" ))[0];
				//print_r($post_bienvenido->post_content );
				//$post_bienvenido=get_permalink($post_bienvenido->ID);
				echo apply_filters( 'the_content',$post_bienvenido->post_content);
			?>
					</div>
				</div>
				<div class="columna columna_dos">
					<div class="texto">
						<img src="<?php echo get_the_post_thumbnail_url($post_bienvenido->ID,'full'); ?>">
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int section_int_bienvenidos_vip">
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

				//mv_active

			?>
				<div class="botones_vip">
					<a href="<?php echo $programa_link; ?>" class="boton_cuadrado">
						<div class="bc_imagen" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2018/12/monumento.png);"></div>
						<p><?php echo __('[:es]Programa VIP 2019[:en]VIP Program 2019[:]'); ?></p>
					</a>
					<a href="<?php echo $hotel_oficial_link; ?>" class="boton_cuadrado">
						<div class="bc_imagen" style="background-image: url(<?php echo get_template_directory_uri(); ?>/upload/vip/travel.jpg);"></div>
						<p><?php echo __('[:es]Viaje y Alojamiento[:en]Travel and Accommodation[:]'); ?></p>
					</a>
					<a href="<?php echo $recomendaciones_link; ?>" class="boton_cuadrado">
						<div class="bc_imagen" style="background-image: url(<?php echo get_template_directory_uri(); ?>/upload/vip/recomendaciones.jpg);"></div>
						<p><?php echo __('[:es]Recomendaciones[:en]Recommendations[:]'); ?></p>
					</a>
					<a href="<?php echo $aliados_link; ?>" class="boton_cuadrado">
						<div class="bc_imagen" style="background-image: url(<?php echo get_template_directory_uri(); ?>/upload/vip/travel.jpg);"></div>
						<p><?php echo __('[:es]Aliados VIP[:en]VIP allies[:]'); ?></p>
					</a>
				</div>
			</div>
		</section>

		<?php include 'folder_custom_wp/footer_vip.php'; ?>


</div></div>
 
</body>
</html>