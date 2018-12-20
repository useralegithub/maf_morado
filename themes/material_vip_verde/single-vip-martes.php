<?php include 'folder_custom_wp/session.php'; ?>
<?php include 'header.php';  ?>
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

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

		//print_r($terms_dias);
		foreach ($terms_dias as $key => $value) {
			//echo "v: ".$value->name;
		}


		function normaliza ($cadena){
			    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
			ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
			    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
			bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
			    $cadena = utf8_decode($cadena);
			    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
			    $cadena = strtolower($cadena);
			    return utf8_encode($cadena);
			}
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		?>
			<nav>
			<?php foreach ($terms_dias as $key => $dia) { ?>
			<?php $short_dia = mb_substr($dia->name,0,2,'UTF-8'); ?>
			<?php $dia_slug = explode('-',$dia->slug)[0]; ?>
			<?php $description_dia = $dia->description; ?>
			
			<?php ?>
			
				<a href="<?php echo home_url('/vip/programa/').''.$dia_slug; ?>" class="mv_boton <?php echo($actual_link==home_url('/vip/programa/').''.$dia_slug.'/')?'mv_active':''; ?>">
					<?php echo __($short_dia); ?>. <?php echo __($description_dia); ?>
				</a>
			<?php } ?>
			</nav>
		</div>
<?php
$dia_term=get_term_by( 'slug','martes-2018','vip_programs');
$term_custom_fields = get_option( "taxonomy_term_$dia_term->term_id" );
$dia_desc_es = $term_custom_fields['description_day_es'];
$dia_desc_en = $term_custom_fields['description_day_en'];
//print_r($dia_desc_en);
?>
<?php include 'folder_custom_wp/single-vip-dias.php'; ?>