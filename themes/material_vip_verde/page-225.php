<?php include 'header.php';?>
<div class="wrapper prensa_gral">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Expositores[:en]Exhibitors[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int">

				<?php
					$contenido_expositores_prev=explode('<!--more-->',$post->post_content);

					$contenido=$contenido_expositores_prev[0];
					$contenido_galerias=$contenido_expositores_prev[1];
					$contenido_proyectos=$contenido_expositores_prev[2];
				?>
				
					<div class="texto">
						<?php echo apply_filters( 'the_content',$contenido ); ?>
						<?php //echo __($contenido) ; ?>
						<?php //echo qtrans_use($lang, $contenido,false) ?>
						<p>
							<span class="btn_a">
								<a href="https://material-fair.com/2019" target="_blank">
									<?php echo __('[:es]APLICA AHORA[:en]APPLY NOW[:]'); ?>
								</a>
							</span>
						</p>
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
			<div class="section_int">
<?php 
	$id_term_expositores=43;
	$set_term_olds=get_terms('expositores',array(
													'parent'	=> $id_term_expositores,
													'order'		=> 'DESC',
													'exclude'   => array(get_queried_object()->term_id)
													)
								);
?>

	<div class="texto">
		<h2>
				<?php echo __('[:es]OTRAS EDICIONES[:en]OTHER EDITIONS[:]'); ?>
		</h2>
		<p>
			<?php foreach ($set_term_olds as $term_olds => $term_old) {
				$link_old=explode('expositores',get_term_link($term_old->term_id,'expositores'));
			?>
			<a href="<?php echo $link_old[0].'expositores'.$link_old[2]; ?>"  class="bt_a">
				<span class="btn"><?php echo $term_old->name; ?></span>
			</a>
			<?php
				}

			?>
		</p>
	</div>
				
</div>

<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 