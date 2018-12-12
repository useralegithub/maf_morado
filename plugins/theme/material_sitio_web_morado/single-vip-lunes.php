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
				
				<a href="<?php echo $programa_link; ?>" class="mv_boton mv_active">
					<?php echo __('[:es]Programa VIP 2018[:en]VIP Program 2018[:]'); ?>
				</a>

				<a href="<?php echo $hotel_oficial_link; ?>" class="mv_boton">
					<?php echo __('[:es]Viaje y Alojamiento[:en]Aliances[:]'); ?>
					
				</a>

				<a href="<?php echo $recomendaciones_link; ?>" class="mv_boton ">
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
$dia_term=get_term_by( 'slug','lunes-2018','vip_programs');
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
<p>© 2018 FERIA DE ARTE MATERIAL MÉXICO SA DE CV</p>
<p>			</p></div>
			<a href="http://dupla.mx/" target="_blank"><div class="dupla">dupla</div></a>
		</div>
	</footer>


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