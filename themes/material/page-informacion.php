<?php include 'header.php';?>
<div class="wrapper page_informacion">
	<?php   
		$informacion_para_visitantes=get_post(76);
		$informacion=explode('<!--more-->', $post->post_content);
		$horarios=explode('<!--more-->',apply_filters( 'the_content',$informacion_para_visitantes->post_content));
		$page_como_llegar_content=explode('<!--more-->',apply_filters('translate_text',get_post(137)->post_content));
	?>
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Información para visitantes[:en]Information for visitors[:]'); ?></li><?php //echo $post->post_title; ?>
			</ul></div>
		<section>
			<div class="section_int">
				<div class="columna">
					<div class="texto">
						<h2><?php echo get_the_title($informacion_para_visitantes);//apply_filters('the_content', $informacion_para_visitantes->post_title); ?></h2>
							<?php echo apply_filters('the_content', $informacion[0]); ?>
					</div>
				</div>
				<div class="columna columna_image">
					<div class="texto_img">
						<?php echo $informacion[1]; ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		
			<div class="section_int">
				<div class="texto horarios">
					<?php echo $horarios[0]; //->title horarios ?>
					<div class="horarios">
						<div class="columna_cuatro"><?php echo $horarios[1]; ?></div>
						<div class="columna_cuatro"><?php echo $horarios[2]; ?></div>
						<div class="columna_cuatro"><?php echo $horarios[3]; ?></div>
						<div class="columna_cuatro"><?php echo $horarios[4]; ?></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<div class="section_int">
				<div class="columna">
					<div class="texto"><?php echo $horarios[5]; ?></div>
				</div>
				<div class="columna">
					<div class="texto"><?php echo $horarios[6]; ?></div>
				</div>
				<div class="clear"></div>
			</div>
			
	
			

			<div class="section_int">
				<div class="texto">
				<h2><?php echo apply_filters('translate_text', get_post(137)->post_title); //->title Cómo llegar ?></h2>
				</div>
				<div class="clear"></div>
				<div class="columna">
					<div class="texto"><?php echo $page_como_llegar_content[0]; ?></div>
				</div>
				<div class="columna">
					<div class="texto"><?php echo $page_como_llegar_content[1]; ?></div>
				</div>
				<div class="clear"></div>
				<div class="texto">

				<?php echo apply_filters('the_content',$page_como_llegar_content[2]); ?>
			</div>
			
		</section>

<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html>