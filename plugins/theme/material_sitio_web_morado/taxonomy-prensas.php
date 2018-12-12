<?php include 'header.php';?>
<div class="wrapper taxonomy_prensas">
	<div class="content content_int">
		<div class="image img_01" data-stellar-ratio="-0.1">
			<?php include 'pages/svg/s07.php'; ?>
		</div>
		<div class="image img_02" data-stellar-ratio="-0.2">
			<?php include 'pages/svg/s06.php'; ?>
		</div>
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><a href="<?php echo get_post_type_archive_link('prensa' ); ?>"><?php echo __('[:es]Prensa[:en]Press[:]'); ?></a></li>
				<li><?php echo $term; ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int section_int_blog">
<?php

/*

echo "\n<!-- posts: \n";

echo $term;
echo "\n";

print_r(get_posts(array('posts_per_page ' =>2,'nopaging' => true,'post_type' =>'prensa','tax_query'=>array(array('taxonomy' => 'prensas','field'=>'slug','terms' => $term))) ));
echo "\n-->\n";

*/


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
			'terms'    => $term,
			'field'    => 'name',
		)
	)
);

echo "\n<!-- posts destacados prensas: \n";

echo $term;

echo "\n";

print_r(count(get_posts($set_posts_destacados_prensas)));

echo "\n-->\n";

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
			'terms'    => $term,
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
								<?php //echo !get_post_meta($prensa->ID,'prensa-subtitulo',true)?'':''.get_post_meta($prensa->ID,'prensa-subtitulo',true); ?>
									
								<?php
									if (empty(get_the_terms($prensa->ID,'tag'))) {}else{
										foreach ( get_the_terms($prensa->ID,'tag') as $tags => $tag){
							 				echo '<span>'.$tag->name.'</span>';
							 			}
							 		}
			 					?>
							</span>
						</p>
						<h2><?php echo $prensa->post_title; ?></h2>
						<p><?php echo __('[:es]por[:en]by[:]'); ?> <span><?php echo !get_post_meta($prensa->ID,'prensa-autor',true)?'':''.get_post_meta($prensa->ID,'prensa-autor',true); ?><span> | </span><?php echo !get_post_meta($prensa->ID,'prensa-fecha',true)?'':''.get_post_meta($prensa->ID,'prensa-fecha',true); ?></span></p>
					</div>
					</a>
				</div>
<?php } ?>
		
				<div class="clear"></div>
			</div>
<?php
$set_posts_gallery = array(
	'post_type' => 'prensa',
	'order' =>'ASC',
	'post_per_page' => 1,
	//'nopaging' => true,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'prensas',
			'terms'    => $term.'-fotos',
			'field'    => 'slug'
		)

	),
);
?>
<?php  if (empty(get_posts( $set_posts_gallery )[0])) {}else{ ?>		
			<div class="contenido_galeria">
				<div class="slider">

<?php foreach (explode(',', get_post_gallery(get_posts( $set_posts_gallery )[0]->ID,false)['ids']) as $gal) {?>
					<div class="slide">
						<div class="slide_image" >
							<div class="slide_image_contenido">
								<span class="helper"></span>
								<img src="<?php echo wp_prepare_attachment_for_js($gal)['url']; ?>">
							</div>
						</div>
						<div class="slide_info">
							<h2><?php echo wp_prepare_attachment_for_js($gal)['title']; ?></h2>
							<?php echo wp_prepare_attachment_for_js($gal)['caption']; ?>
						</div>
					</div>
<?php } ?>
					<div class="s_fecha_i"></div>
					<div class="s_fecha_d"></div>
				</div>
			</div>
<?php }?>
<div class="section_int">
					<div class="texto">
						<h2>
							<?php echo __('[:es]OTRAS EDICIONES[:en]OTHER EDITIONS[:]'); ?>
						</h2>
						<p>

<?php 
$feature_array=array(
			'orderby'   => 'id',
			'taxonomy'  => 'prensas',
			'order'     => 'DESC',
			'parent'    => 0,
			'hide_empty'=> false,
			'exclude'   => array(115,120,122,get_queried_object()->term_id)
			);
$terms_years_prensas=get_terms($feature_array);
echo "\n <!-- \n";
echo "array terms_years_prensas";
echo "\n";
print_r($terms_years_prensas);
print_r($term);
echo "\n --> \n";




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

	
		<!-- </section> -->


<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html>