<?php include 'header.php';?>


<div class="wrapper index">
<?php
echo "\n<!-- queryJOIN:_\n";
 
  //$results = $wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC",ARRAY_A);
 /*$results = $wpdb->get_results("SELECT wp_uv.users_vip_nombre AS nombre,wp_uv.users_vip_apellido AS apellido,wp_uv.users_vip_email AS email,mcc.name AS pais,wp_uv.users_vip_rango_edad AS rango_edad,wp_uv.users_vip_category_id AS perfil,wp_uv.users_vip_category AS perfil_antiguo ,wp_uv.users_vip_afiliacion AS afiliacion, uve.nombre_estatus AS estatus,wp_uv.users_vip_lang AS lang FROM wp_users_vip AS wp_uv LEFT JOIN users_vip_category AS uvc ON wp_uv.users_vip_category_id=uvc.id LEFT JOIN maf_cat_countries AS mcc ON wp_uv.users_vip_pais=mcc.id LEFT JOIN users_vip_estatus AS uve ON wp_uv.users_vip_estatus=uve.id WHERE wp_uv.users_vip_estatus='3' ",ARRAY_A);
  

//print_r($results);
  $csv_format=utf8_decode('"Nombre","Apellido","Email","País","Rango Edad","Perfil","Perfil Anterior","Afiliación","Estatus","Lenguaje"'."\n");
  $edad_set   = array('1' =>'18-24' , '2' =>'25-34' ,'3' =>'35-44' ,'4' =>'45+' );
  $perfil_set = array('1' =>'Coleccionista' , '2' =>'Curador' ,'3' =>'Personal de Museo o Institucional' ,'4' =>'Asesor','5' =>'Galerista','6' =>'Artista','7' =>'Otro' );

foreach ($results as $key => $row) {
//print_r($row[nombre]);
	
	$nombre 		 = $row['nombre'];
	$apellido 		 = $row['apellido'];
	$email 	 	 	 = $row['email'];
	$pais 			 = $row['pais'];
	$edad 			 = $row['rango_edad'];
	$perfil 		 = $row['perfil'];
	$perfil_antiguo  = $row['perfil_antiguo'];
	$afiliacion 	 = $row['afiliacion'];
	$estatus 		 = $row['estatus'];
	$lenguaje 		 = $row['lang'];

	//print_r('"'.implode('","',$row).'",'."\n");
	//echo "\n\n\n";

	$csv_format .='"'.$nombre.'",'.'"'.$apellido.'",'.'"'.$email.'",'.'"'.$pais.'",'.'"'.$edad_set[$edad].'",'.'"'.$perfil_set[$perfil].'",'.'"'.$perfil_antiguo.'",'.'"'.$afiliacion.'",'.'"'.$estatus.'",'.'"'.$lenguaje.'",';
	$csv_format.="\n";

    //$csv_output .= utf8_decode('"'.implode('","',$row).'",'."\n");
}
echo "\n";
print_r($edad_set);
echo "\n";
print_r($csv_format);

echo "\n-->\n";*/
?>
<div class="content ">
	<section class=" homeH he_uno" data-stellar-background-ratio="3">
		<div class="section_int home">
			<div class="table">
				<div class="table_cell">
					<!-- <div class="titulo">
						<?php //include 'pages/svg/logo.php'; ?>	
					</div> -->
					<?php echo apply_filters('the_content', get_post(65)->post_content); //Page name: Principal ?>
				</div>
			</div>
		</div>
		<div class="fondo_g fondo_05">
				<?php include 'pages/svg/hexadecimal.php'; ?>	
		</div>
		<div class="fondo_g fondo_01">
			<?php include 'pages/svg/esq_der.php'; ?>	
		</div>
		<div class="fondo_g fondo_02">
			<?php include 'pages/svg/esq_izq.php'; ?>	
		</div>
		<div class="fondo_g fondo_03">
			<?php include 'pages/svg/greca_der.php'; ?>	
		</div>
		<div class="fondo_g fondo_04">
			<?php include 'pages/svg/greca_izq.php'; ?>	
		</div>
	</section>



<div class="azul_h">


	<section class="he_dos"  data-stellar-background-ratio="3">
		<div class="image img_01" data-stellar-ratio="-0.1">
			<?php include 'pages/svg/s07.php'; ?>
		</div>
		<div class="image img_02" data-stellar-ratio="-0.2">
			<?php include 'pages/svg/s06.php'; ?>
		</div>
		<div class="image img_03" data-stellar-ratio="-0.3">
			<?php include 'pages/svg/s05.php'; ?>
		</div>
		<div class="image img_04" data-stellar-ratio="-0.5">
			<?php include 'pages/svg/s04.php'; ?>
		</div>
		<div class="image img_06" data-stellar-ratio="-0.4">
			<?php include 'pages/svg/s02.php'; ?>
		</div>
		<div class="section_int">
			<div class="texto">
				<h2><?php echo get_the_title(73); ?></h2>
				<?php echo apply_filters('the_content', get_post(73)->post_content); ?>
			</div>
		</div>
	</section>

	<section class="he_tres" data-stellar-background-ratio="1">
		<div class="image img_02" data-stellar-ratio="-0.2"><?php include 'pages/svg/s02.php'; ?></div>
		<div class="image img_06" data-stellar-ratio="-0.4"><?php include 'pages/svg/s06.php'; ?></div>
		<div class="image img_10" data-stellar-ratio="-0.6"><?php include 'pages/svg/s03.php'; ?></div>
		<div class="section_int">
			<div class="texto horarios">
				<?php $informacion_para_visitantes=get_post(76); ?>
				<h2><?php echo get_the_title($informacion_para_visitantes); ?></h2>
				<?php
				$horarios=explode('<p><!--more--></p>', apply_filters('the_content', $informacion_para_visitantes->post_content )); ?>
			 	<?php echo $horarios[0]; ?>

				<div class="horarios">
					<div class="columna_cuatro"><?php echo $horarios[1]; ?></div>
					<div class="columna_cuatro"><?php echo $horarios[2]; ?></div>
					<div class="columna_cuatro"><?php echo $horarios[3]; ?></div>
					<div class="columna_cuatro"><?php echo $horarios[4]; ?></div>
				</div>	
				<div class="clear"></div>
			</div>
			<div class="columna">
				<div class="texto"><?php echo $horarios[5]; ?></div>
			</div>
			<div class="columna">
				<div class="texto"><?php echo $horarios[6]; ?></div>
			</div>
			<div class="clear"></div>
			<div class="texto">
				<div class="btn_menu_mas">
					<a href="<?php echo home_url(); ?>/informacion-para-visitantes/informacion/">
						<div class="btn_menu_mas_int"><?php echo __('[:es]MÁS INFO[:en]MORE INFO[:]'); ?></div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section  class="he_cuatro" data-stellar-background-ratio="2">
		<div class="image img_02" data-stellar-ratio="-0.2">
			<?php include 'pages/svg/s06.php'; ?>
		</div>
		<div class="image img_03" data-stellar-ratio="-0.3">
			<?php include 'pages/svg/s05.php'; ?>
		</div>
		<div class="image img_01" data-stellar-ratio="-0.1">
			<?php include 'pages/svg/s07.php'; ?>
		</div>
		<div class="section_int">
				<div class="texto">
					
				 
					<?php
					$expositores=explode('<p><!--more--></p>', apply_filters('the_content', get_post(88)->post_content ));?>
					<h2><?php echo get_the_title(88); ?></h2>
					<img src="<?php echo get_the_post_thumbnail_url(get_post(88)->ID,'full' );?>">
					<?php //echo $expositores[1]; ?>
					<span class="img_pie_foto expositores">
					<?php echo __(get_the_post_thumbnail_caption(get_post(88)->ID)); ?>
					</span>
						<?php echo $expositores[0]; ?>
					<div class="btn_menu_mas">
						<a href="<?php echo home_url( '/expositores-prev/' ); ?>">
							<div class="btn_menu_mas_int"><?php echo apply_filters( 'translate_text','[:es]MÁS INFO[:en]MORE INFO[:]'); ?></div>
						</a>
					</div>
				</div>
			
				
		</div>
	</section>

	<section class="programa he_cinco" data-stellar-background-ratio="1">
		<div class="image img_04" data-stellar-ratio="-0.5">
			<?php include 'pages/svg/s04.php'; ?>
		</div>
		<div class="image img_05" data-stellar-ratio="-0.8">
			<?php include 'pages/svg/s03.php'; ?>
		</div>
		<div class="section_int">
			<div class="columna">
				<div class="texto">
				<?php
				$programa_publico=explode('<!--more-->', apply_filters('the_content', get_post(107)->post_content )); ?>
					<h2>
						<?php echo get_the_title(107); ?>
					</h2>
					<?php //echo $programa_publico[0];
							echo apply_filters( 'the_content', get_post(107)->post_content);
					?>
				</div>
			</div>
			<div class="columna columna_image">
				<div class="texto_img">
					<img src="<?php echo get_the_post_thumbnail_url(get_post(107)->ID,'full' );?>">
					<?php //echo $programa_publico[1];
					?>
				 <span class="img_pie_foto programa_publico">
				 	<?php echo __(get_the_post_thumbnail_caption(get_post(107)->ID)); ?>
				 </span>
				</div>
			</div>
			<div class="clear"></div>
			<div class="texto">
				<div class="btn_menu_mas">
					<a href="<?php echo home_url( '/programa' ); ?>">
						<div class="btn_menu_mas_int"><?php echo __('[:es]MÁS INFO[:en]MORE INFO[:]'); ?></div>
					</a>
				<?php //echo $programa_publico[2]; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="he_seis" data-stellar-background-ratio="2">
		<div class="image img_06" data-stellar-ratio="-0.4">
			<?php include 'pages/svg/s02.php'; ?>
		</div>
		<div class="image img_01" data-stellar-ratio="-0.1">
			<?php include 'pages/svg/s07.php'; ?>
		</div>
		<div class="image img_06" data-stellar-ratio="-0.4">
			<?php include 'pages/svg/s02.php'; ?>
		</div>
		<div class="section_int">
			<div class="columna">
				<div class="texto">
				<?php
				$programa_publico=explode('<!--more-->', apply_filters('the_content', get_post(1657)->post_content )); ?>
					<h2>
						<?php echo get_the_title(1657); ?>
					</h2>
					<?php //echo $programa_publico[0];
							echo apply_filters( 'the_content', get_post(1657)->post_content);

					?>
				</div>
			</div>
			<div class="columna columna_image">
				<div class="texto_img">
					<img src="<?php echo get_the_post_thumbnail_url(get_post(1657)->ID,'full' );?>">
					<?php //echo $programa_publico[1];

							

					?>
				 <span class="img_pie_foto prensa">
				 	<?php echo __(get_the_post_thumbnail_caption(get_post(1657)->ID)); ?>
				 </span>
				</div>
			</div>
			<div class="clear"></div>
			<div class="texto">
				<div class="btn_menu_mas">
					<a href="<?php echo home_url( '/prensa' ); ?>">
						<div class="btn_menu_mas_int"><?php echo __('[:es]MÁS INFO[:en]MORE INFO[:]'); ?></div>
					</a>
				<?php //echo $programa_publico[2]; ?>
				</div>
			</div>
		</div>
	</section>

	<section data-stellar-background-ratio="2">
		<div class="section_int">
			<div class="texto sponsors">
				<h2><?php echo get_the_title(2); ?></h2>
				<div class="sponsors_partners">
					<h2><img src="<?php echo get_the_post_thumbnail_url(get_post(2)->ID,'full' );?> "></h2>
					<?php 
					foreach (explode(',', get_post_gallery(get_post(2)->ID,false)['ids']) as $gal) {

					echo '<h3>
					<a href="'.wp_prepare_attachment_for_js($gal)['caption'].'" target="_blank" >
					<img src="'.wp_prepare_attachment_for_js($gal)['url'].'">
					</a>
					</h3>';

					} ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</section>

	
</div>

<script type="text/javascript">
	$(document).ready(function(){
/*		var menu=false;
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
		});*/

		$(window).load(function(){
			if($(window).width() >= 1041){
				var wH = $(window).height();
				$(".btn_app").css("display","none");
				var pos;
				$(".wrapper").scroll(function(){
					pos = $(this).scrollTop();
					if(pos > wH){
						$(".btn_app").css("display","block");

					}else{
						$(".btn_app").css("display","none");

					}
				});
			}
			if($(window).width() <= 1041){
				var wH = $(window).height();
				$(".btn_app").css("display","none");
				var pos;
				$(window).scroll(function(){
					pos = $(this).scrollTop();
					if(pos > wH){
						$(".btn_app").css("display","block");

					}else{
						$(".btn_app").css("display","none");

					}
				});
			}
		});

		$(window).resize(function(){
			if($(window).width() >= 1041){
				var wH = $(window).height();
				$(".btn_app").css("display","none");
				var pos;
				$(".wrapper").scroll(function(){
					pos = $(this).scrollTop();
					if(pos > wH){
						$(".btn_app").css("display","block");

					}else{
						$(".btn_app").css("display","none");

					}
				});
			}
			if($(window).width() <= 1041){
				var wH = $(window).height();
				$(".btn_app").css("display","none");
				var pos;
				$(window).scroll(function(){
					pos = $(this).scrollTop();
					if(pos > wH){
						$(".btn_app").css("display","block");

					}else{
						$(".btn_app").css("display","none");

					}
				});
			}
		});


	});
</script>

<?php include 'footer.php';?>
<?php
echo "\n <!-- the get option: \n";
print_r(get_option( 'wp_redes_sociales_settings', $valor_por_defecto )['wp_redes_sociales_text_field_0']);
echo "\n --> \n";
?>
</div>

</div>
 
</body>
</html> 