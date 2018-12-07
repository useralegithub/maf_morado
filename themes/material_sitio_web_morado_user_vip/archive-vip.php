<?php
global $wpdb;

if (!$_POST){
$uv_email='';
$uv_pass='';
}
else{
$uv_email=$_POST['uv_mail'];
$uv_pass=$_POST['uv_pass'];

$wp_users_vip_query_master = $wpdb->get_results("
	SELECT *
	FROM wp_users_vip
	WHERE id='1'

	");


	if ($uv_pass==$wp_users_vip_query_master['0']->users_vip_pass) {
		$uv_email=$wp_users_vip_query_master['0']->users_vip_email;
		$uv_pass=$wp_users_vip_query_master['0']->users_vip_pass;
	}

}


$wp_users_vip_query = $wpdb->get_results("
	SELECT users_vip_email, users_vip_pass
	FROM wp_users_vip
	WHERE users_vip_email='".$uv_email."' AND users_vip_pass='".$uv_pass."'
	");

if (empty($wp_users_vip_query)&&count($wp_users_vip_query)==0) {
		$acceso=0;
}else{
	if (count($wp_users_vip_query)==1) {
		$acceso=1;

	}else{
		$acceso=0;
	}
}
?>
<?php if($acceso==0){
	if(! empty($uv_email) && ! empty($uv_pass) ) {
		error_log(chr(13) . chr(10) . date('r') . ' - VIP Access denied. Email: [' . $_POST['uv_mail'] . '], Password: [' . $_POST['uv_pass'] . '].', 3, get_template_directory() . '/vip_access_denied_log');
	}

	header('Location:'.home_url().'/vip-login/');
}else{?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Material Art Fair</title>
<meta name="lang" content="es"/>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="address=no,email=no,telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<meta name="DC.title" lang="es" content="Material Art Fair"/>
<meta name="DC.description" lang="es" content="Material Art Fair 2018"/>
<meta name="DC.subject" lang="es" content="Material Art Fair 2018"/>
<meta name="DC.creator" content="Material Art Fair"/>
<meta name="DC.publisher" content="Material Art Fair"/>
<meta name="DC.language" scheme="RFC1766" content="es"/>
<link rel="canonical" href="http://xxxx.xx"/>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/stellar.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/code.js"></script>
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom_style.css?v=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css?v=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/rojo.css?v=<?php echo time();?>">
</head>

<body>

<div class="line line_l"></div>
<div class="line line_r"></div>
<div class="line line_t"></div>
<div class="line line_b"></div>

<header>
	<div class="header_int">
		<div class="btn_menu">
			<div class="btn_l"></div>
			<div class="btn_r"></div>
		<div class="lineas">
			<div class="linea linea_uno"></div>
			<div class="linea linea_dos"></div>
			<div class="linea linea_tres"></div>
		</div><span class="menu_span">Menú</span>
		</div>

				<?php 
foreach (wp_get_nav_menu_items('Botón Home') as $b) {
	echo '<a href="'.$b->url.'" target="_blank" ><div class="btn_app ">'.$b->title.'</div></a>';
}
?>
	</div>
</header> 
<div class="menu">
<!-- 	<div class="menu_int">
				<div class="titulo_logo">
					<a href="<?php echo home_url();?>">
						<?php echo strip_tags(apply_filters('the_content', get_post(220)->post_content),'<img>');?>
					</a>
				</div>
				<ul>
				<?php $menu_principal=wp_get_nav_menu_items('menu-principal');foreach ($menu_principal as $m){echo'<li><a href="'.$m->url.'"><div class="c_sub">'.$m->title.'</div></a></li>';}?>
				</ul>
				<div class="menu_english">
					<ul>
						<li class=""><?php qtranxf_generateLanguageSelectCode('text'); ?></li>
					</ul>
					<a href="<?php echo home_url();?>/vip-login/"><div class="boton_vip">Vip</div></a>
				</div>
				
	</div> -->
	<div class="menu_int">
				<div class="titulo_logo">
					<a href="<?php echo home_url(); ?>">
						<?php echo strip_tags(apply_filters('the_content', get_post(220)->post_content),'<img>');?>
					</a>
				</div>
				<ul>
				<?php $menu_principal=wp_get_nav_menu_items('menu-principal');foreach ($menu_principal as $m){echo'<li><a href="'.$m->url.'"><div class="c_sub">'.$m->title.'</div></a></li>';}?>
				</ul>
				<div class="menu_english">
					<ul>
						<li class=""><?php qtranxf_generateLanguageSelectCode('text'); ?></li>
					</ul>
				</div>
				<div class="menu_botones">
					<div class="columna_n_botones">
						<p>Login:</p>
					</div>
					<div class="columna_n_botones">
						<a href="<?php echo home_url(); ?>/vip-login/">
							<div class="boton_login">
								<?php echo __('[:es]VIP[:en]VIP[:]'); ?>
							</div>
						</a>
						<a href="<?php echo __('[:es]https://material-fair.com/prensa/login[:en]https://material-fair.com/press/login[:]'); ?>">
							<div class="boton_login">
								<?php echo __('[:es]PRENSA[:en]PRESS[:]'); ?>
							</div>
						</a>
						<a href="<?php echo site_url(); ?>/exhibitor_portal?lang=<?= qtranxf_getLanguage(); ?>">
							<div class="boton_login">
								<?php echo __('[:es]EXPOSITORES[:en]EXHIBITOR[:]'); ?>
							</div>
						</a>
					</div>
					
				</div>
				
	</div>
</div>



<div class="wrapper archive_programa">
	<div class="content content_int" style="color: #c01f25;">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/rojoimg/logo_barra.png"></a></li>
				<li><?php echo __('[:es]VIP Programa[:en]VIP Program	[:]'); ?></li>
			</ul>
		</div>
		<section>
			

			<div class="section_int">
				
					<div class="columna">
						<div class="texto">
							<?php 
								echo apply_filters('the_content', get_post(277)->post_content);
							?>
						</div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo get_the_post_thumbnail_url(get_post(277)->ID,'full'); ?>">
							<span class="img_pie_foto expositores">
								<?php echo __(get_the_post_thumbnail_caption(get_post(277)->ID)); ?>
							</span>
						</div>
					</div>
					<div class="clear"></div>

				
			</div>
			<div class="section_int sec_calendario">
				<div class="texto">
<?php $term_vip_id=29; ?>	
					<h2><?php echo get_term( $term_vip_id,'vip_programs')->name; ?></h2>
				</div>
<?php 
$year_up=get_terms( 
						array(
								'taxonomy' => 'programas',
								'order' => 'DESC',
								'parent'=>0
							  )
					)[0];


$set_dias=get_terms(
					array(
							'taxonomy' => 'vip_programs',
							'order' => 'ASC',
							'orderby' => 'slug',
							'parent'=>$term_vip_id,
							'hide_emty'=>false
						)
				    );

foreach ($set_dias as $dias => $dia) {
	$set_programas=array(
		'post_type' =>'vip',
		'post_per_page' => -1,
		'order'=>'ASC',
		'nopaging' => true,
		'tax_query'=>array( 
            array(
                    'taxonomy' => 'vip_programs',
                    'field'=>'slug',
                    'terms' => $dia->slug
                  )
           ),
	      );
$set_programas=get_posts($set_programas);

usort($set_programas, function($a, $b){
    $hourA = get_post_meta($a->ID, 'programa-hora', TRUE);
    $hourB = get_post_meta($b->ID, 'programa-hora', TRUE);

    $hourAArray = explode('-', $hourA);
    $hourBArray = explode('-', $hourB);

    return strtotime(trim($hourAArray[0])) > strtotime(trim($hourBArray[0]));
});



?>
				
				<div class="btn_calendario">
					<div class=" btn_dia_rojo">
						<p><?php echo $dia->name; ?></p>
						<div class="calendario_nombre_dia">
							<?php echo category_description($dia->term_id); ?>
						</div>
					</div>
					<div class="btn_dia_content">
						<?php foreach ($set_programas as $programas => $programa) { ?>
	
						
						<div class="hora">
							<div class="fila">
								<div class="columna">
									<h2>

									<?php echo !get_post_meta($programa->ID,'programa-hora',true)?'':''.get_post_meta($programa->ID,'programa-hora',true); ?>
									</h2>
									<div title="Add to Calendar" class="addeventatc">
	<?php echo __('[:es]Añadir al calendario[:en]Add to Calendar[:]'); ?>
    
    <span class="start">
		<?php
		    		date_default_timezone_set('America/Mexico_City');
		    		$horas=explode('-', get_post_meta($programa->ID,'programa-hora',true));
		    		//$hora_start=($horas[0]=='')?'12:00 PM':''.$horas[0];
		    		//$hora_end=($horas[1]=='')?'12:00 PM':''.$horas[1];

		    		$hora_start=$horas[0];
		    		$hora_end=$horas[1];

		    		$fecha= __($dia->description);
		    		
		    		//$date_full=$fecha." 2018 ";
		    		//echo $fecha." 2018 ".$hora_start;
		    		//echo "//:".date ( "F", $fecha[0] );
		    		//echo "   string: ".$fecha[0];


		$mes_ingles=explode('[:en]', $dia->description)[1];
		//echo $mes_ingles;

		$no_set = array("[", ":", "]");
		$date_mes_eng = str_replace($no_set,"", $mes_ingles)." ".date("Y");

		//$date = 'July 25 2010';
		$date_start_format_eng= date('d-m-Y', strtotime($date_mes_eng));
echo $date_start_format_eng." ".$hora_start;
		?>
  
    </span>
    <span class="end">
    	<?php
		$date_end_format_eng= date('d-m-Y', strtotime($date_mes_eng));
		echo $date_end_format_eng." ".$hora_end;
		 ?>
	</span>
    <span class="timezone">America/Mexico_City</span>
    <span class="title"><?php echo $programa->post_title; ?></span>
    <span class="description"><?php echo get_post_meta($programa->ID,'programa-subtitulo',true); ?></span>
    <!-- <span class="location">Location of the event</span> -->
</div>

								</div>
								<div class="columna">
									<div class="texto ">
										<p><?php
										echo !get_post_meta($programa->ID,'programa-ubicacion',true)?'':str_replace(array("<p>","</p>"),"",apply_filters('the_content','[:es]Ubicación:[:en]Location:[:] ')).''.get_post_meta($programa->ID,'programa-ubicacion',true); ?></p>

										<?php
											$programa_link=!get_post_meta($programa->ID,'programa-link',true)?'<a href=""></a>':''.get_post_meta($programa->ID,'programa-link',true);
										$programa_link = new SimpleXMLElement($programa_link);
										?>

										<p>
											<a href="<?php echo $programa_link['href']; ?>" target="<?php echo $programa_link['target']; ?>">
												<strong><?php echo $programa_link; ?></strong>
											</a>
										</p>
									</div> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="fila">
								<div class="columna">
									<h2><?php echo $programa->post_title; ?></h2>
									<p><?php echo !get_post_meta($programa->ID,'programa-subtitulo',true)?'':''.get_post_meta($programa->ID,'programa-subtitulo',true); ?>	</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="fila">
								<div class="columna ">
									<?php if (get_the_post_thumbnail_url($programa->ID,'full')==''){}else{ ?> 
									<div class="texto">
										
											<img src="<?php echo get_the_post_thumbnail_url($programa->ID,'full'); ?>">
									<span class="img_pie_foto expositores">
										<?php echo __(get_the_post_thumbnail_caption(get_post($programa->ID))); ?>
									</span>

									</div>
									<?php } ?>
								</div>
								<div class="columna">
									<div class="texto">
										<?php echo apply_filters('the_content', $programa->post_content); ?>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<?php } ?>
						

					</div>
				</div>
				<?php } ?>
			</div>
<div class="section_int sec_calendario">
<?php
echo "\n<!-- posts_:\n";
//echo "va";
foreach ($set_programas as $key => $value) {
	echo "\n".$value->post_title;
}

//print_r($set_programas);
echo "\n-->\n";
?>
<?php $term_vip_acomodations_id=30; ?>
				<div class="texto">	
					<h2><?php echo get_term( $term_vip_acomodations_id,'vip_programs')->name; ?></h2>
				</div>
<?php

	$set_programas=array(
		'post_type' =>'vip',
		'post_per_page' => -1,
		'nopaging' => true,
		'tax_query'=>array( 
							array(
									'taxonomy' => 'vip_programs',
									'field'=>'term_id',
									'terms' => $term_vip_acomodations_id
								  )
						   )
	      );
	$set_programas=get_posts($set_programas);

?>
						<?php foreach ($set_programas as $programas => $programa) { ?>
				<div class="hora">
							
							<div class="fila">
								<div class="columna">
									<h2><?php echo $programa->post_title; ?></h2>
									<!-- <p>IMMATERIAL en MATERIALART FAIR</p> -->
								</div>
								<div class="clear"></div>
							</div>
							<div class="fila">
								<div class="columna ">
									<?php if (get_the_post_thumbnail_url($programa->ID,'full')==''){}else{ ?> 
									<div class="texto">
										<?php

										$img_link='<a href="'.wp_prepare_attachment_for_js(get_post_thumbnail_id( $programa->ID))['caption'].'" target="_blank">
											<img src="'.get_the_post_thumbnail_url($programa->ID,"full").'">
										</a>';

										$img='<img src="'.get_the_post_thumbnail_url($programa->ID,"full").'">';

										if (wp_prepare_attachment_for_js(get_post_thumbnail_id( $programa->ID))['caption']=='') {
											echo $img; ?>
											<span class="img_pie_foto expositores">
												<?php echo __(get_the_post_thumbnail_caption(get_post($programa->ID)->ID)); ?>
											</span>
										<?php }else{
											echo $img_link;
										}

										?>
<!-- 										<a href="<?php echo wp_prepare_attachment_for_js(get_post_thumbnail_id( $programa->ID))['caption']; ?>" target="_blank">
											<img src="<?php echo get_the_post_thumbnail_url($programa->ID,'full'); ?>">
										</a> -->
									</div>
									<?php } ?>
								</div>
								<div class="columna">
									<div class="texto">
										<?php echo apply_filters('the_content', $programa->post_content); ?></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<?php } ?>
				

			</div>
			<!-- <div class="section_int">
				
					<div class="texto">
				<h2>
					<?php echo __('[:es]OTRAS EDICIONES[:en]PREVIOUS EDITIONS[:]'); ?>
				</h2>
			<p>
			<?php 
			$years_olds=get_terms(array('taxonomy'=> 'programas','order'=> 'DESC','exclude'=> $year_up->term_id,'parent'=>0));
			foreach ($years_olds as $years => $year) {
			echo '<a href="'.get_category_link($year->term_id).'" target="_blank" class="bt_a"><span class="btn">'.$year->name.'</span></a>';
			}
			
			?>
			</p>
					</div>
				
			</div> -->
		
			
			
		</section>
<div class="section_int" id="vip-recommendations">
<?php
$term_recomendaciones_id=32;
$set_recomendaciones=get_terms(
					array(
							'taxonomy' => 'vip_programs',
							'order' => 'ASC',
							'orderby' => 'term_id',
							'parent'=>$term_recomendaciones_id,
							'hide_emty'=>false
						)
				    );
//print_r($set_recomendaciones);

?>
	<div class="texto">	
		<h2><?php echo __(get_term( 32, 'vip_programs' )->name  ); ?></h2>
	</div>

<div class="container">
<?php foreach ($set_recomendaciones as $recomendaciones => $recomendacion) { //print_r($recomendacion); ?>
    <div class="row">
      <div class="col col-s col-s-12 col-m col-m-12 col-l col-l-12 ">
			<div class="texto">	
				<h3 class="rec"><?php echo __($recomendacion->name); ?></h3>
			</div>

        <ul>

<?php

$set_posts_recomendaciones=array(
	'post_type' =>'vip',
	'posts_per_page' => -1,
	'nopaging' => true,
	'orderby'=>'title',
	'order'=>'ASC',
	'tax_query'=>array( 
						array(
								'taxonomy' => 'vip_programs',
								'field'=>'term_id',
								'terms' => $recomendacion->term_id
							  )
					   )
      );
$set_posts_recomendaciones=get_posts($set_posts_recomendaciones);


foreach ($set_posts_recomendaciones as $posts_recomendaciones => $post_recomendacion) { ?>
			<li>
				<h4><?php echo __($post_recomendacion->post_title); ?></h4>
				<?php echo apply_filters('the_content', $post_recomendacion->post_content); ?>
			</li>
		<?php } ?>

		</ul>
      </div>
    </div>
<?php } ?>
    
    
    </div>
	
</div>

		<div class="section_int">

				
		</div>

		<div class="section_int">
			<div class="texto sponsors">
				<h2><?php echo get_the_title(2); ?></h2>

				<div class="sponsors_partners">
				
					<div class="clear"></div>
				</div>

				<div class="sponsors_partners">
					<?php $id_patrocinadores_y_socios_vip=1956; ?>
					<!-- <h2><img src="<?php echo get_the_post_thumbnail_url(get_post( $id_patrocinadores_y_socios_vip)->ID,'full' );?> "></h2> -->
					<?php 
foreach (explode(',', get_post_gallery(get_post( $id_patrocinadores_y_socios_vip)->ID,false)['ids']) as $gal) {

	echo '<h3>
			<a href="'.wp_prepare_attachment_for_js($gal)['caption'].'" target="_blank" >
				<img src="'.wp_prepare_attachment_for_js($gal)['url'].'"/>
			</a>
		</h3>';

} ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<?php
$id_cotact_vip=1091;
$post_cotact_vip=get_post( $id_cotact_vip );
?>
		<div class="section_int">
			<div class="texto sponsors">
				<!-- <h2><?php echo get_the_title(2); ?></h2> -->
			
			<div class="texto contacto">	
				<h2><?php echo __($post_cotact_vip->post_title); ?></h2>
				<div class="texto_contacto_int">
					<?php echo apply_filters( 'the_content',$post_cotact_vip->post_content); ?>
				</div>
			</div>

			
				
			</div>
		</div>
<style type="text/css">

@media screen and (min-width: 1150px){
	.container {
	    width: 1150px;
	}
}

@media screen and (min-width: 952px){
	.container {
    width: 952px;
	}
}

@media screen and (min-width: 712px){
	.container {
    width: 712px;
	}
}

.container {
    margin: 0 auto;
    width: 96%;
}


@media screen and (min-width: 1150px){
	.row {
    padding-top: 16px;
	}
}

@media screen and (min-width: 952px){
	.row {
    padding-top: 14px;
	}
}

@media screen and (min-width: 568px){

	.row {
	    padding-top: 13px;
	}
}
.row {
    display: flex;
    -webkit-flex: 0 1 auto;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-top: 12px;
    box-sizing: border-box;
    display: -webkit-flex;
    display: -ms-flexbox;
}

@media screen and (min-width: 1150px){
	.col {
	    margin-bottom: 16px;
	}
}

@media screen and (min-width: 952px){
	.col-l-12 {
    -ms-flex-basis: 100%;
    -webkit-flex-basis: 100%;
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
	}
}

@media screen and (min-width: 952px){
	.col-l {
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding-right: 14px;
    padding-left: 14px;
	}
}
@media screen and (min-width: 952px){
	.col, .pagination-section .col {
	    margin-bottom: 14px;
	}
}
@media screen and (min-width: 568px){
	.col-m-12 {
	    -ms-flex-basis: 100%;
	    -webkit-flex-basis: 100%;
	    -ms-flex-preferred-size: 100%;
	    flex-basis: 100%;
	    max-width: 100%;
	}
}
@media screen and (min-width: 568px){
	.col-m {
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding-right: 13px;
    padding-left: 13px;
	}
}

@media screen and (min-width: 568px){

	.col {
	    margin-bottom: 13px;
	}
}
.col-s-12 {
    -ms-flex-basis: 100%;
    -webkit-flex-basis: 100%;
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
}
.col-s-12, img {
    max-width: 100%;
}
.col-s {
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding-right: 12px;
    padding-left: 12px;
}
.col {
    -webkit-flex-grow: 1;
    -ms-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-basis: 0;
    -webkit-flex-basis: 0;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    max-width: 100%;
    margin-bottom: 12px;
}
.col, .flex-col, .flex-row, .row {
    box-sizing: border-box;
}

#vip-recommendations ul {
    -webkit-columns: 1;
    -moz-columns: 1;
    columns: 1;
}

@media screen and (min-width: 712px){
	#vip-recommendations ul {
	    -webkit-columns: 2;
	    -moz-columns: 2;
	    columns: 2;
	}
}
@media screen and (min-width: 952px){

	#vip-recommendations ul {
	    -webkit-columns: 3;
	    -moz-columns: 3;
	    columns: 3;
	}
}


#vip-recommendations ul li {
    -webkit-column-break-inside: avoid;
    page-break-inside: avoid;
    break-inside: avoid;
    list-style: none;
}



	.active {
    color: #fffed7;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke-width: 1.5px;
    -webkit-text-stroke-color: #fffed7;
	}
	.aligncenter,
div.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}

.alignright {
    float:right;
    margin: 5px 0 20px 20px;
}

.alignleft{
    float: left;
    margin: 5px 20px 20px 0;
}
.center_img_footer{
	width: 20%;
    margin: auto;
}
</style>

<footer>
	<script type="text/javascript"> themeurl = '<?php echo get_template_directory_uri();?>'; </script>
		<div class="footer_int">
			<div class="texto">
				<?php
				$footer=explode('<!--more-->', apply_filters('the_content', get_post(119)->post_content )); ?>

				<div>
					
					<?php echo $footer[0]; ?>
				</div>
				
				<div>
					
					<?php echo $footer[1]; ?>
				</div>

				
			</div>
			<div class="content_img_footer">
				<div class="center_img_footer"><?php echo strip_tags( $footer[3],'<img>')?></div>
			</div> 	
			<div class="content_redes">
				<!-- <img src="img/logo_dos.png"> -->
				<div class="redes">

					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_3']; ?>" target="_blank">
						<div class="red ">
							<img src="<?php echo get_template_directory_uri(); ?>/rojoimg/copy_of_artsy_square_widget_logo_rojo_vip.png">
						</div>
					</a>

					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_0']; ?>" target="_blank">
						<div class="red ">FB</div>
					</a>
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_1']; ?>" target="_blank">
						<div class="red">TW</div>
					</a>
					<a href="<?php echo get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_2']; ?>" target="_blank">
						<div class="red">IG</div>
					</a>
				</div>

				<div class="clear"></div>

				<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//material-fair.us7.list-manage.com/subscribe/post?u=83453f8fa83282ca9ee2d363e&amp;id=64a0a5c317" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2><?php echo __('[:es]Suscríbete a nuestro newsletter[:en]Subscribe to our newsletter[:]'); ?></h2>

<div class="mc-field-group">
	<label for="mce-EMAIL">Email<span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="indicates-required"><span class="asterisk">*</span>
	<?php echo __('[:es]Requeridos[:en]Required[:]'); ?></div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_83453f8fa83282ca9ee2d363e_64a0a5c317" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="<?php echo __('[:es]Suscribirse[:en]
subscribe[:]'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
			</div>
			<div class="clear"></div>
			<div class="copy">
				
					
					<?php echo $footer[2]; ?>
			</div>
			<a href="http://dupla.mx/" target="_blank"><div class="dupla">dupla</div></a>
		</div>
	</footer>


<script type="text/javascript">
$(document).ready(function(){

var menu=false;

 get_language='<?php echo qtranxf_getLanguage(); ?>';

if (get_language=='es'){
	$('.menu_span').addClass('es');
	$('.menu_span').text("Menú");
}else{
	$('.menu_span').addClass('en');
	$('.menu_span').text("Menu");
}

$('.btn_menu').click(function(){
			$('body').addClass('act');

			if (get_language=='es'){
				$('.menu_span').addClass('es');
				$(".menu_span").html('cerrar');
			}else{
				$('.menu_span').addClass('en');
				$(".menu_span").html('close');
			}

			
			if(!menu){
				$('body').addClass('act');

			if (get_language=='es'){
				$('.menu_span').addClass('es');
				$(".menu_span").html('cerrar');
			}else{
				$('.menu_span').addClass('en');
				$(".menu_span").html('close');
			}

				menu=true;
			} else {
				$('body').removeClass('act');

				if (get_language=='es'){
					$('.menu_span').addClass('es');
					$('.menu_span').text("Menú");
				}else{
					$('.menu_span').addClass('en');
					$('.menu_span').text("Menu");
				}

				menu=false;
			}
		});

		$('.menu ul li').click(function(){
			$('body').removeClass('act');

if (get_language=='es'){
	$('.menu_span').addClass('es');
	$(".menu_span").html('Menú');
}else{
	$('.menu_span').addClass('en');
	$(".menu_span").html('Menu');
}
			
			menu=false;
		});


});
</script>
<style type="text/css">
	.active {
    color: #fffed7;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke-width: 1.5px;
    -webkit-text-stroke-color: #fffed7;
	}
	.aligncenter,
div.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}

.alignright {
    float:right;
    margin: 5px 0 20px 20px;
}

.alignleft{
    float: left;
    margin: 5px 20px 20px 0;
}
.center_img_footer{
	width: 20%;
    margin: auto;
}
.addeventatc{
border-color: #c53033!important;
font-family: 'AkkuratPro'!important;
color: #c53033!important;
background-color: transparent!important;
border: 2px solid!important;
font-weight: bold!important;
}
.addeventatc .addeventatc_icon {
    background-image: url(<?php echo get_template_directory_uri(); ?>/img/icon-calendar-t1-rojo.svg) !important;
}
</style>
</div>

</div>

</body>
</html>
<?php } ?>