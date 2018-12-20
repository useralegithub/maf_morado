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

	$url=home_url().'/vip/'.get_queried_object()->post_name.'/';
	$url_program=home_url().'/vip/programa/';
	$lunes=home_url().'/vip/programa/lunes/';

	$menu_seccion_vip = get_terms(
	 					array(
						    'taxonomy' 	 => 'nav_menu',
						    'hide_empty' => false,
						    'slug'       => 'menu-seccion-vip',

						)

	 				);
	$items_menu_vip = wp_get_nav_menu_items($menu_seccion_vip[0]->term_id);

	//echo "\n<!-- menu_seccion_vip:__\n";
	//	print_r($items_menu_vip);
	//echo "\n-->\n";

	$vip_program = get_term_by( 'slug', 'vip-program-2018', 'vip_programs' );
		
	$terms_dias = get_terms( array(
				    'taxonomy'   => 'vip_programs',
				    'hide_empty' => false,
		            'orderby'   => 'none',
		            'parent'     => $vip_program->term_id

				)  );
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

/*$lunes     = $url_program.'lunes/'==$item_vip->url.'lunes/';
$martes    = $url_program.'martes/'==$item_vip->url.'martes/';
$miercoles = $url_program.'miercoles/'==$item_vip->url.'miercoles/';
$jueves    = $url_program.'jueves/'==$item_vip->url.'jueves/';
$viernes   = $url_program.'viernes/'==$item_vip->url.'viernes/';
$sabado    = $url_program.'sabado/'==$item_vip->url.'sabado/';
$domingo   = $url_program.'domingo/'==$item_vip->url.'domingo/';*/

$dias_act = array($url_program.'lunes/', $url_program.'martes/',$url_program.'miercoles/',$url_program.'jueves/',$url_program.'viernes/',$url_program.'sabado/',$url_program.'domingo/');

?>


<?php
	foreach ( $items_menu_vip as $item_key => $item_vip) {

$lunes     = $actual_link ==$item_vip->url.'lunes/';
$martes    = $actual_link ==$item_vip->url.'martes/';
$miercoles = $actual_link ==$item_vip->url.'miercoles/';
$jueves    = $actual_link ==$item_vip->url.'jueves/';
$viernes   = $actual_link ==$item_vip->url.'viernes/';
$sabado    = $actual_link ==$item_vip->url.'sabado/';
$domingo   = $actual_link ==$item_vip->url.'domingo/';
?>

		<a href="<?php echo $item_vip->url; ?>" class="mv_boton <?php echo($url==$item_vip->url||$lunes||$martes||$miercoles||$jueves||$viernes||$sabado||$domingo)?'mv_active':''; ?>">
			<?php echo __($item_vip->title); ?>
		</a>
		<?php if ($url_program==$item_vip->url&&$url==$item_vip->url||$lunes||$martes||$miercoles||$jueves||$viernes||$sabado||$domingo) {?>
		 	<nav class="submenu ">
				<?php

				$vip_program = get_term_by( 'slug', 'vip-program-2018', 'vip_programs' );
					
				$terms_dias = get_terms( array(
							    'taxonomy'   => 'vip_programs',
							    'hide_empty' => false,
					            'orderby'   => 'none',
					            'parent'     => $vip_program->term_id

							)  );


				?>
				<?php foreach ($terms_dias as $key => $dia) { ?>
				<?php $short_dia = mb_substr($dia->name,0,2,'UTF-8'); ?>
				<?php $dia_slug = explode('-',$dia->slug)[0]; ?>
				<?php $description_dia = $dia->description; ?>
<?php //echo $dias_act[$key]; ?>
					<a href="<?php echo home_url('/vip/programa/').''.$dia_slug; ?>" class="mv_boton <?php  echo ($actual_link == $dias_act[$key] )?'mv_active':''; ?>">
						<?php echo __($short_dia); ?>. <?php echo __($description_dia); ?>
					</a>
				<?php } ?>
			</nav>
		 <?php } ?>


<?php } ?>