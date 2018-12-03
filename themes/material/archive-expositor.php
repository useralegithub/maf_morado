<?php
$id_term_expositores=43;
$current_year=get_terms('expositores',array('parent'=>$id_term_expositores,'order'=>'DESC'))[0];
header("Location:".home_url()."/expositores/".$current_year->name."/");
//header("Location:".home_url()."/");
?>
<?php include 'header.php';?>
<div class="wrapper archive_expositor">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Expositores[:en]expositor[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int">
<?php 
/*echo "\n <!-- term expositores ddd\n";

echo "\n --> \n";
*/

$id_term_expositores=43;

$current_year=get_terms('expositores',array('parent'=>$id_term_expositores,'order'=>'DESC'))[1];
$page_current_year_description=get_page_by_path('descripcion-expositores/expositores-'.$current_year->name,OBJECT, 'page');
?>
				<div class="clear"></div>
					<div class="columna">
						<div class="texto">
							 
							<h2><?php echo __($page_current_year_description->post_title); ?></h2>
							<?php echo apply_filters( 'the_content',$page_current_year_description->post_content ); ?>

						</div>
					</div>
				<div class="columna">
					<div class="texto">
						<img src="<?php echo get_the_post_thumbnail_url( $page_current_year_description->ID, 'full' ); ?>">
					</div>
				</div>
				<div class="clear"></div>
				
			</div>
			<div class="section_int">
<?php
$set_jueces=get_terms( array('taxonomy' => 'jueces','orderby' => 'name'));

foreach ($set_jueces as $jueces => $juez) {
	$slug_juez=explode('-',$juez->slug)[3];
	($slug_juez==$current_year->name)?$term_juez_current=$juez:'';
}
echo (!$term_juez_current)?'':'<div class="texto"><h2>'.$term_juez_current->name.'</h2></div>';
?>
<?php
$set_posts_jueces = array(
	'post_type' => 'juez',
	'order' =>'ASC',
	'post_per_page' => -1,
	'nopaging' => true,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'jueces',
			'field'    => 'slug',
			'terms'    => array($term_juez_current->slug)
		)

	),
);
?>
<?php
foreach (get_posts( $set_posts_jueces ) as $posts_jueces => $post_juez) {
?>	
				<div class="colum_dos">
					<div class="expo">
						<h2><?php echo $post_juez->post_title; ?></h2>
						<?php echo apply_filters( 'the_content', $post_juez->post_content ); ?>
					</div>
				</div>
<?php } ?>
				
				
			</div>
			<div class="section_int" >

<?php

$set_expositores = array(
	'post_type' => 'expositor',
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
//foreach (get_posts(array('post_type' =>'expositor')) as $expositores=>$expositor) { ?>
<!-- <div class="colum_dos">
	<div class="expo">
		<h2><?php echo apply_filters('translate_text', $expositor->post_title); ?></h2>
		<p><?php echo apply_filters('translate_text', $expositor->post_content); ?></p>
	</div>
</div> -->
<?php //}?></div>


				

<?php
$set_letters=get_terms( array('taxonomy' => 'tags_expositores','orderby' => 'name'));

$id_term_expositores=43;

$current_year=get_terms('expositores',array('parent'=>$id_term_expositores,'order'=>'DESC'))[1];

echo "\n <!-- Array of only letter expositores: \n";

foreach ($set_letters as $letters => $letter) {
$all_posts_tags_expositores = array(
	'post_type' => 'expositor',
	'post_per_page' => -1,
	'nopaging' => true,
	'order' =>'DESC',
	'orderby'   => 'name', 
	'tax_query' => array(
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'term_id',
			'terms'    => array($letter->term_id),
		)
	),
);


	foreach (get_posts( $all_posts_tags_expositores ) as $posxs => $posx) {
	//$term_expositores=wp_get_post_terms( $posx->ID, 'expositores',array('parent' => 0, 'slug' => 'expositores') );
	
//echo "\nLETTER: ".$letter->name." \n$i ID  of post: ".$posx->ID."\n  Nombre Post: ".$posx->post_title."\n";

		$term_expositores=wp_get_post_terms($posx->ID,'expositores',array(
																		'parent'=>$id_term_expositores,
																		'slug'=>$current_year->slug
																	)
										);
			empty($term_expositores)?'':$letters_expositores[]=$letter->name;

	}

}
$letters_expositores=array_unique($letters_expositores);
//print_r(get_terms('expositores',array('parent'=>$id_term_expositores,'order'=>'DESC'))[1]);
//print_r($letters_expositores);
echo "\n end expositores--> \n";

?>

			<div class="section_int">
				<div class="columna">
					<div class="texto">
						 
						<h2>Expositores <?php echo $current_year->name; ?><?php //echo $term_expositores->name; ?></h2>

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
	'post_type' => 'expositor',
	'order' =>'ASC',
	'post_per_page' => -1,
	'nopaging' => true,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'name',
			'terms'    => array($letter),
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'term_id',
			'terms'    => array( 43 ), // ID of term->expositores
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'term_id',
			'terms'    => array($current_year->term_id), // ID of term-> latest position in array
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
$id_term_proyectos=52;
foreach ($set_letters as $letters => $letter) {
$all_posts_tags_expositores = array(
	'post_type' => 'expositor',
	'post_per_page' => -1,
	'nopaging' => true,
	'order' =>'DESC',
	'tax_query' => array(
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'term_id',
			'terms'    => array($letter->term_id),
		)
	),
);

	foreach (get_posts( $all_posts_tags_expositores ) as $posxs => $posx) {
	//$term_proyectos=wp_get_post_terms( $posx->ID, 'expositores',array('parent' => 0, 'slug' => 'proyectos'));
	$term_proyectos=wp_get_post_terms($posx->ID,'expositores',array(
																	'parent'=>$id_term_proyectos,
																	'name'=>$current_year->name
																)
										);
	//print_r($term_proyectos);
	empty($term_proyectos)?'':$letters_proyectos[]=$letter->name;

	}

}
$letters_proyectos=array_unique($letters_proyectos);
/*print_r($letters_proyectos);
echo "\n";*/
echo "\n end proyectos--> \n";

?>

			<div class="section_int">
				<div class="columna">
					<div class="texto">
						 
						<h2>Proyectos <?php echo $current_year->name; ?><?php //echo $term_expositores->name; ?></h2>

					</div>
				</div>
				<div class="clear"></div>
<?php
foreach ($letters_proyectos as $letters => $letter) {?>

				<div class="colum_cuatro">

					<div class="letra">
						<?php echo $letter; ?>
					</div>
<?php

$set_proyectos = array(
	'post_type' => 'expositor',
	'order' =>'ASC',
	'post_per_page' => -1,
	'nopaging' => true,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'name',
			'terms'    => array($letter),
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'term_id',
			'terms'    => array( 52 ), // ID of term->proyecto
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'name',
			'terms'    => $current_year->name, // ID of term-> latest position in array
		),
	),
);


	foreach (get_posts( $set_proyectos ) as $proyectos => $proyecto) {?>
					<div class="expo">
						<a href="<?php echo get_post_meta($proyecto->ID,'expositores-link',true); ?>">
							<h2><?php echo $proyecto->post_title; ?></h2>
						</a>
						<p><?php echo $proyecto->post_content; ?></p>
					</div>
				<?php } ?>
					
				</div>
<?php } ?>

			</div>
			<!-- ---- -->



<?php 

echo "\n <!-- Array of only letter Presentaciones Especiales: \n";
$id_term_proyectos=52;
foreach ($set_letters as $letters => $letter) {
$all_posts_tags_expositores = array(
	'post_type' => 'expositor',
	'post_per_page' => -1,
	'nopaging' => true,
	'order' =>'DESC',
	'tax_query' => array(
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'term_id',
			'terms'    => array($letter->term_id),
		)
	),
);

	foreach (get_posts( $all_posts_tags_expositores ) as $posxs => $posx) {
	//$term_proyectos=wp_get_post_terms( $posx->ID, 'expositores',array('parent' => 0, 'slug' => 'proyectos'));
	$term_proyectos=wp_get_post_terms($posx->ID,'expositores',array(
																	'parent'=>$id_term_proyectos,
																	'name'=>$current_year->name
																)
										);
	//print_r($term_proyectos);
	empty($term_proyectos)?'':$letters_proyectos[]=$letter->name;

	}

}
$letters_proyectos=array_unique($letters_proyectos);
/*print_r($letters_proyectos);
echo "\n";*/
echo "\n<!-- letters_proyectos: \n";
print_r($letters_proyectos);
echo "\n-->\n";
echo "\n end proyectos--> \n";

?>

			<div class="section_int">
				<div class="columna">
					<div class="texto">
						 
						<h2>Presentaciones Especiales <?php //echo $current_year->name; ?><?php //echo $term_expositores->name; ?></h2>

					</div>
				</div>
				<div class="clear"></div>
<?php
foreach ($letters_proyectos as $letters => $letter) {?>

				<div class="colum_cuatro">

					<div class="letra">
						<?php echo $letter; ?>
					</div>
<?php

$set_proyectos = array(
	'post_type' => 'expositor',
	'order' =>'ASC',
	'post_per_page' => -1,
	'nopaging' => true,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'tags_expositores',
			'field'    => 'name',
			'terms'    => array($letter),
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'term_id',
			'terms'    => array( 52 ), // ID of term->proyecto
		),
		array(
			'taxonomy' => 'expositores',
			'field'    => 'name',
			'terms'    => $current_year->name, // ID of term-> latest position in array
		),
	),
);


	foreach (get_posts( $set_proyectos ) as $proyectos => $proyecto) {?>
					<div class="expo">
						<a href="<?php echo get_post_meta($proyecto->ID,'expositores-link',true); ?>">
							<h2><?php echo $proyecto->post_title; ?></h2>
						</a>
						<p><?php echo $proyecto->post_content; ?></p>
					</div>
				<?php } ?>
					
				</div>
<?php } ?>

			</div>
			
	<div class="section_int">
<?php
$set_term_olds=get_terms('expositores',
	array(
		'parent'	=> $id_term_expositores,
		'order'		=> 'DESC',
		'exclude'   => $current_year->term_id
		)
);
?>

		<div class="texto">
			<h2>
					<?php echo __('[:es]OTRAS EDICIONES[:en]PREVIOUS EDITIONS[:]'); ?>
			</h2>
			<p>
				<?php foreach ($set_term_olds as $term_olds => $term_old) {
					$link_old=explode('expositores',get_category_link($term_old->term_id));
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

</section>

<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html>