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
				<li>Expositores</li>
			</ul>
		</div>
		<section>
			<div class="section_int">
<?php 
echo "\n <!-- term expositores ddd\n";
$term_expositores=get_term( 43, 'expositores');
print_r($term_expositores);
echo "\n --> \n";
?>
				<div class="clear"></div>
					<div class="columna">
						<div class="texto">
							 
							<h2><?php echo $term_expositores->name; ?></h2>
							<?php echo apply_filters( 'the_content',$term_expositores->description ); ?>

						</div>
					</div>
				<div class="columna">
					<div class="texto">
						<img src="<?php echo z_taxonomy_image_url($term_expositores->term_id, 'full'); ?>">
					</div>
				</div>
				<div class="clear"></div>
				
			</div>
			<div class="section_int" >

<?php
$set_expositores = array(
	'post_type' => 'exhibitors',
	'order' =>'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'expositores',
			'field'    => 'slug',
			'terms'    => array('comite-de-seleccion')
		)
	)
);
echo "\n <!-- p comites: \n";
//print_r(get_posts($set_expositores));
echo "\n --> \n";
foreach (get_posts($set_expositores) as $expositores=>$expositor) { ?>
<!-- <div class="colum_dos">
	<div class="expo">
		<h2><?php echo  $expositor->post_title; ?></h2>
		<p><?php echo $expositor->post_content; ?></p>
	</div>
</div> -->
<?php }?>
				<!-- <div class="columna">
					<div class="texto">
						 
						<h2>Comité de Selección<?php //echo $term_expositores->name; ?></h2>
				
					</div>
				</div> -->

				<!-- <div class="clear"></div> -->

<?php 
//foreach (get_posts(array('post_type' =>'exhibitors')) as $expositores=>$expositor) { ?>
<!-- <div class="colum_dos">
	<div class="expo">
		<h2><?php echo apply_filters('translate_text', $expositor->post_title); ?></h2>
		<p><?php echo apply_filters('translate_text', $expositor->post_content); ?></p>
	</div>
</div> -->
<?php //}?></div>


				

<?php $set_letters=get_terms( array('taxonomy' => 'tags_expositores','orderby' => 'name'));

//echo "\n <!-- Array of only letter expositores: \n";

foreach ($set_letters as $letters => $letter) {

$all_posts_tags_expositores = array(
	'post_type' => 'exhibitors',
	'order' =>'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'term_id',
			'terms'    => array($letter->term_id),
		)
	),
);

	foreach (get_posts( $all_posts_tags_expositores ) as $posxs => $posx) {
		$term_expositores=wp_get_post_terms( $posx->ID, 'expositores',array('parent' => 0, 'slug' => 'expositores') );
	}
	empty($term_expositores)?'':$letters_expositores[]=$letter->slug;
}
//echo "\n end--> \n";

?>

			<div class="section_int">
				<div class="columna">
					<div class="texto">
						 
						<h2>Expositores 2017<?php //echo $term_expositores->name; ?></h2>

					</div>
				</div>
				<div class="clear"></div>
<?php foreach ($letters_expositores as $letters => $letter) {?>

				<div class="colum_cuatro">

					<div class="letra">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/upload/letras/<?php echo $letter; ?>.png"> -->
						<?php echo $letter; ?>
					</div>
<?php

$set_expositores = array(
	'post_type' => 'exhibitors',
	'order' =>'ASC',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'slug',
			'terms'    => array($letter),
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'term_id',
			'terms'    => array( 43 ), // ID of term->expositores
		),
	),
);


	foreach (get_posts( $set_expositores ) as $expositores => $expositor) {?>
					<div class="expo">
						<a href="<?php echo get_post_meta($expositor->ID,'expositores-link',true); ?>" target="_blank">
							<h2><?php echo $expositor->post_title; ?></h2>
						</a>
						<p><?php echo $expositor->post_content; ?></p>
					</div>
				<?php } ?>
					
				</div>
<?php } ?>

			</div>

<?php 

echo "\n <!-- Array of only letter proyectos: \n";

foreach ($set_letters as $letters => $letter) {
$all_posts_tags_expositores = array(
	'post_type' => 'exhibitors',
	'order' =>'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'term_id',
			'terms'    => array($letter->term_id),
		)
	),
);

	foreach (get_posts( $all_posts_tags_expositores ) as $posxs => $posx) {
		$term_proyectos=wp_get_post_terms( $posx->ID, 'expositores',array('parent' => 0, 'slug' => 'proyectos'));

	}
	empty($term_proyectos)?'':$letters_proyectos[]=$letter->slug;

}

echo "\n end--> \n";

?>

			<div class="section_int">
				<div class="columna">
					<div class="texto">
						 
						<h2>Proyectos 2017<?php //echo $term_expositores->name; ?></h2>

					</div>
				</div>
				<div class="clear"></div>
<?php foreach ($letters_proyectos as $letters => $letter) {?>

				<div class="colum_cuatro">

					<div class="letra">
						<?php echo $letter; ?>
					</div>
<?php

$set_expositores = array(
	'post_type' => 'exhibitors',
	'order' =>'ASC',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'slug',
			'terms'    => array($letter),
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'term_id',
			'terms'    => array( 52 ), // ID of term->proyecto
		),
	),
);


	foreach (get_posts( $set_expositores ) as $expositores => $expositor) {?>
					<div class="expo">
						<a href="<?php echo get_post_meta($expositor->ID,'expositores-link',true); ?>" target="_blank">
							<h2><?php echo $expositor->post_title; ?></h2>
						</a>
						<p><?php echo $expositor->post_content; ?></p>
					</div>
				<?php } ?>
					
				</div>
<?php } ?>

			</div>
			<div class="section_int">
				
					<div class="texto">
						<h2>Ediciones Anteriores</h2>
						<p>
							<a href="?p=expositores" target="_blank" class="bt_a"><span class="btn">2016</span></a>
							<a href="?p=expositores" target="_blank" class="bt_a"><span class="btn">2015</span></a>
							<a href="?p=expositores" target="_blank" class="bt_a"><span class="btn">2014</span></a>
						</p>
					</div>
				
			</div>

		
			
			
		</section>

<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 