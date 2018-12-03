<?php include 'header.php';?>
<div class="wrapper archive_prensa">
	<div class="content content_int">
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
				<li><?php echo __('[:es]Prensa[:en]Press[:]'); ?></li>
<?php 
$feature_array=array(
			'orderby'   => 'id',
			'taxonomy'  => 'prensas',
			'order'     => 'DESC',
			'parent'    => 0,
			'hide_empty'=> false,
			'exclude'   => array(115,120,122)
			);

$terms_years_prensas=get_terms($feature_array);
$term_prensa_latest=$terms_years_prensas[0];

?>
			</ul>
		</div>
		<section>
			<div class="section_int">
				<div class="clear"></div>
				<div class="columna">
					<div class="texto">
						<h2>
							<?php echo __(get_post(61)->post_title); ?>
						</h2>
						<?php echo apply_filters('the_content', get_post(61)->post_content); ?>

					</div>
				</div>
				<div class="columna">
					<div class="texto">
						<img src="<?php echo get_the_post_thumbnail_url(get_post(61)->ID,'full'); ?>">
						<span class="img_pie_foto ">
							<?php echo __(get_the_post_thumbnail_caption(get_post(61)->ID)); ?>
						</span>
					</div>
				</div>
				<div class="clear"></div>
				
			</div>

			<!-- blog -->

			<div class="section_int section_int_blog">
<?php

$set_posts_destacados_prensas = array(
	'post_type' => 'prensa',
	'posts_per_page' => 2,
	'order' =>'DESC',
	'orderby'   => 'date', 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'prensas',
			'terms'    => 'destacado-seccion',
			'field'    => 'slug',
		),
		array(
			'taxonomy' => 'prensas',
			'terms'    => $term_prensa_latest->name,
			'field'    => 'name',
		)
	)
);

 foreach (get_posts($set_posts_destacados_prensas) as $prensas=>$prensa) {
	$exclude_posts[]=$prensa->ID;
?>

				<div class="post post_g">
					<a href="<?php echo $prensa->post_content ; ?>" target="_blank">
					<div class="post_img" style="background-image: url(<?php echo get_the_post_thumbnail_url($prensa->ID,'full'); ?>);"></div>
					<div class="post_info">
						<p><span class="fuente">
							<?php
							if (empty(get_the_terms($prensa->ID,'tag'))) {
							}else{foreach ( get_the_terms($prensa->ID,'tag') as $tags => $tag) {
						 	echo '<span>'.$tag->name.'</span>';
						 }}
		 ?></span></p>
						<h2><?php echo $prensa->post_title; ?></h2>
						<p><?php echo __('[:es]por[:en]by[:]'); ?>  <span><?php echo !get_post_meta($prensa->ID,'prensa-autor',true)?'':''.get_post_meta($prensa->ID,'prensa-autor',true); ?><span> | <span><?php echo !get_post_meta($prensa->ID,'prensa-fecha',true)?'':''.get_post_meta($prensa->ID,'prensa-fecha',true); ?><span></p>
					</div>
					</a>
				</div>
<?php } ?>
<div class="clear"></div>
<?php
$set_posts_destacados_prensas_thumb = array(
	'post_type' => 'prensa',
	'posts_per_page' => -1,
	'order' =>'DESC',
	'orderby'   => 'date',
	'post__not_in' => $exclude_posts,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'prensas',
			'terms'    => $term_prensa_latest->name,
			'field'    => 'slug',
		)
	)
); 
foreach (get_posts($set_posts_destacados_prensas_thumb) as $prensas=>$prensa) {
?>

				<div class="post">
					<a href="<?php echo $prensa->post_content ; ?>" target="_blank">
					<div class="post_img" style="background-image: url(<?php echo get_the_post_thumbnail_url($prensa->ID,'full'); ?>);"></div>
					<div class="post_info">
						<p>
							<span class="fuente">
							<?php
								if (empty(get_the_terms($prensa->ID,'tag'))) {
								}else{
									foreach ( get_the_terms($prensa->ID,'tag') as $tags => $tag) {
							 		echo '<span>'.$tag->name.'</span>';
							 		}
							 }
		 					?>
		 	
		 </span>
						</p>
						<h2><?php echo $prensa->post_title; ?></h2>
						<p><?php echo __('[:es]por[:en]by[:]'); ?> <span><?php echo !get_post_meta($prensa->ID,'prensa-autor',true)?'':''.get_post_meta($prensa->ID,'prensa-autor',true); ?><span> | <span><?php echo !get_post_meta($prensa->ID,'prensa-fecha',true)?'':''.get_post_meta($prensa->ID,'prensa-fecha',true); ?><span></p>
					</div>
					</a>
				</div>
<?php } ?>


				<div class="clear"></div>
			</div>

			<!-- fin de blog -->


			<div class="section_int">
				
					<div class="texto">
						<h2>
							<?php echo __('[:es]OTRAS EDICIONES[:en]OTHER EDITIONS[:]'); ?>
						</h2>
						<p>

<?php 
array_push($feature_array['exclude'], $term_prensa_latest->term_id);
$terms_years_prensas=get_terms($feature_array);

foreach ($terms_years_prensas as $terms_years => $term_year) {
echo '<a href="'.get_term_link($term_year->term_id,$term_year->taxonomy).'" class="bt_a">
		<span class="btn">'.$term_year->name.'</span>
	 </a>';
}
?>


						</p>
					</div>
				
			</div>

			

			

		</section>

<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 