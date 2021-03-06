<?php include 'header.php';?>


<div class="wrapper index">

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