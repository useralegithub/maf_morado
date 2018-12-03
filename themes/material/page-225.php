<?php include 'header.php';?>
<div class="wrapper prensa_gral">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li>Expositores</li>
			</ul>
		</div>
		<section>

				<?php
					$contenido_expositores_prev=explode('<!--more-->',$post->post_content);

					$contenido=$contenido_expositores_prev[0];
					$contenido_galerias=$contenido_expositores_prev[1];
					$contenido_proyectos=$contenido_expositores_prev[2];

				?>
			<div class="section_int">
				
					<div class="texto">
						<?php echo apply_filters( 'the_content',$contenido ); ?>
						<p><span class="btn_a"><a href="https://material-fair.com/application" target="_blank">APLICA AHORA</a></span></p>

						
					</div>
				
			</div>

			<div class="section_int">
				<div class="texto">
					<h2><?php echo strip_tags(apply_filters( 'the_content',get_post(231)->post_title)); ?></h2>
				</div>
				<div class="clear"></div>
				<div class="columna">
					<div class="texto">
				 		<?php echo apply_filters( 'the_content',get_post(231)->post_content); ?>
					</div>
				</div>
				<div class="columna">
					<div class="texto">
						<img src="<?php echo get_the_post_thumbnail_url(get_post(231)->ID,'full'); ?>">
					</div>
				</div>
				<div class="clear"></div>
				
			</div>

			<div class="section_int">
				
					<div class="texto">
						<?php echo apply_filters( 'the_content',$contenido_galerias ); ?>
					</div>
				
			</div>

			<div class="section_int">
				
					<div class="texto">
						<?php echo apply_filters( 'the_content',$contenido_proyectos ); ?>
					</div>
				
			</div>

			<!-- <div class="section_int">
				
					<div class="texto">
						<h2>Otras Ediciones</h2>
						<ul class="otras_ediciones">
							<li class="btn_a"><a href="" target="_blank">2017</a></li>
							<li class="btn_a"><a href="" target="_blank">2016</a></li>
							<li class="btn_a"><a href="" target="_blank">2015</a></li>
							<li class="btn_a"><a href="" target="_blank">2014</a></li>
						</ul>
					</div>
				
			</div> -->
		
			
			
		</section>

<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 