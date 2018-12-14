<?php include 'header.php';?>
<div class="wrapper page-expositores-previo">
	<div class="content content_int">
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
		<div class="image img_05" data-stellar-ratio="-0.8">
			<?php include 'pages/svg/s03.php'; ?>
		</div>
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li>Expositores</li>
			</ul>
		</div>
		<section>
			<div class="section_int">
				
					<div class="texto">
						<?php echo apply_filters( 'the_content',$post->post_content ); ?>
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
						<span class="img_pie_foto ">
							<?php echo __(get_the_post_thumbnail_caption(get_post(231)->ID)); ?>
						</span>
					</div>
				</div>
				<div class="clear"></div>
				
			</div>

			<div class="section_int">
				
					<div class="texto">
						<h2>Galerías 2018</h2>
						<!-- <img src="upload/images/ex02.jpg"> -->
						<p>Próximamente.</p>
					</div>
				
			</div>

			<div class="section_int">
				
					<div class="texto">
						<h2>Proyectos 2018</h2>
						<!-- <img src="upload/images/info03.jpg"> -->
						<p>Próximamente.</p>
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