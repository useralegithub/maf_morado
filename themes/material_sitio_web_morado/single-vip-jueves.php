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
$dia_term=get_term_by( 'slug','jueves-2018','vip_programs');
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


</div>
<script type="text/javascript">
	$(document).ready(function(){
	




	var imgGal_img_body = $(".entrada_over");
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


	$(".entrada").each(function( index ) {
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



	});
</script>
<div class="over_dia">
		<div class="od_cerrar"></div>
		<div class="od_icon_cerrar"></div>
		<div class="od_flecha_der m_f_d"></div>
		<div class="od_flecha_izq m_f_i"></div>

<?php foreach ($posts as $key => $entrada) { ?>
		<div class="over_dia_int entrada_over">
			<div class="od_titulo">
				<h2><?php echo __($entrada->post_title); ?></h2>
				<p><?php echo !get_post_meta($entrada->ID,'programa-hora',true)?'':''.get_post_meta($entrada->ID,'programa-hora',true); ?></p>
			</div>
			


			<div class="od_text">
				<?php echo apply_filters( 'the_content', $entrada->post_content ); ?>
				<div class="addeventatc">
					<?php echo __('[:es]Añadir al calendario[:en]Add to calendar[:]'); ?>
					<span class="addeventatc_icon atc_node"></span>
				</div>
				<form>
					<div class="check act">
						<div class="check_int"></div>
					</div>
					<label>RSVP</label>
				</form>
			</div>
			<div class="od_imagen">
				<div class="od_imagen_int" style="background-image:url(<?php echo get_the_post_thumbnail_url($entrada->ID,'full'); ?>)"></div>
			</div>

		</div>
<?php } ?>

	</div>
</div>
 
</body>
</html> 