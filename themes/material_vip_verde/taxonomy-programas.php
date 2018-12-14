<?php include 'header.php';?>
<div class="wrapper taxonomy_programas_gral">
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
				<li><a href="?p="><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><a href="<?php echo get_post_type_archive_link('programa' ); ?>">
					<?php echo __('[:es]Programa[:en]Program[:]'); ?></a></li>
				<li><?php echo $term; ?></li>
			</ul>
		</div>
		<section>
			<?php 
				$term_programa=get_queried_object();
			?>
			

			<div class="section_int">
				
					<div class="columna">
						<div class="texto"><?php echo term_description( $term_programa->term_id, $taxonomy); ?></div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo z_taxonomy_image_url($term_programa->term_id, 'full'); ?>">
						</div>
					</div>
					<div class="clear"></div>

				
			</div>
			<div class="section_int sec_calendario">
<?php
$set_dias=get_terms( array('taxonomy' => $taxonomy,'orderby' => 'term_id','parent'=>$term_programa->term_id,'orderby' => 'term_order'));

foreach ($set_dias as $dias => $dia) {
	$set_programas=array(
		'post_type' =>'programa',
		'post_per_page' => -1,
		'order'=>'ASC',
		'nopaging' => true,
		'tax_query'=>array( 
            array(
                    'taxonomy' => $taxonomy,
                    'field'=>'slug',
                    'terms' => $dia->slug
                  )
           ),
	      );
	$set_programas=get_posts($set_programas);
/*$set_programas=	array(
	'post_type' =>'programa',
	'post_per_page' => -1,
	'order' =>'ASC',
	'nopaging' => true,
	'tax_query'=>array(
			array(
				'taxonomy' => $taxonomy,
				'field'=>'slug',
				'terms' => $dia->slug
			)
		),
	'meta_query' => array(
		array(
			'key' => 'programa-hora',
			//'value' => '12:00 PM - 9:00 PM',
			)
		)
);*/


?>
				<div class="btn_calendario">
					<div class="btn_dia">
						<p><?php echo $dia->name; ?></p>
						<div class="calendario_nombre_dia"> <?php //echo category_description($dia->term_id); ?>
							<?php echo __($dia->description); ?>
						</div>
					</div>
					<div class="btn_dia_content">
						<?php foreach ($set_programas as $programas => $programa) { ?>
						<div class="hora">
							<div class="fila">
								<div class="columna">
									<h2>
									<?php echo !get_post_meta($programa->ID,'programa-hora',true)?'':''.get_post_meta($programa->ID,'programa-hora',true); ?></h2>

								</div>
								<div class="columna">
									<div class="texto ">
										<p><?php
										echo !get_post_meta($programa->ID,'programa-ubicacion',true)?'':str_replace(array("<p>","</p>"),"",apply_filters('the_content','[:es]Ubicación:[:en]Location:[:] ')).''.get_post_meta($programa->ID,'programa-ubicacion',true); ?></p>

										<?php
											$programa_link=!get_post_meta($programa->ID,'programa-link',true)?'<a href=""></a>':''.get_post_meta($programa->ID,'programa-link',true);
										$programa_link = new SimpleXMLElement($programa_link);
										?>

										<p>
											<a href="<?php echo $programa_link['href']; ?>" target="<?php echo $programa_link['target']; ?>">
												<strong><?php echo $programa_link; ?></strong>
											</a>
										</p>
									</div> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="fila">
								<div class="columna">
									<h2><?php echo $programa->post_title; ?></h2>
									<p><?php echo !get_post_meta($programa->ID,'programa-subtitulo',true)?'':''.get_post_meta($programa->ID,'programa-subtitulo',true); ?>	</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="fila">
								<div class="columna ">
									<?php if (get_the_post_thumbnail_url($programa->ID,'full')==''){}else{ ?> 
									<div class="texto">
										<img src="<?php echo get_the_post_thumbnail_url($programa->ID,'full'); ?>">
						<span class="img_pie_foto ">
							<?php echo __(get_the_post_thumbnail_caption($programa->ID)); ?>
						</span>
									</div>
									<?php } ?>
								</div>
								<div class="columna">
									<div class="texto">
										<?php echo apply_filters('the_content', $programa->post_content); ?>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<?php } ?>

					</div>
				</div>
				<?php } ?>
			</div>

			<div class="section_int">
				
					<div class="texto">
						<h2>
							<?php echo __('[:es]OTRAS EDICIONES[:en]OTHER EDITIONS[:]'); ?>
						</h2>
<p>
<?php 
$set_years_olds=get_terms(array('taxonomy'=> $taxonomy,'order'=> 'DESC','exclude'=> $term_programa->term_id,'parent'=>0,'hide_empty'=> false,'orderby' => 'term_order'));
foreach ($set_years_olds as $years_olds => $year_old) {
echo '<a href="'.get_term_link($year_old->term_id,'programas').'" class="bt_a"><span class="btn">'.$year_old->name.'</span></a>';
}



?>
</p>
					</div>
				
			</div>
		
		</section>

<?php include 'footer.php';?>
<style type="text/css">
	.addeventatc{
    border-color: #0808a7!important;
    font-family: 'AkkuratPro'!important;
    color: #0808a7!important;
    background-color: transparent!important;
    border: 2px solid!important;
    font-weight: bold!important;
}
.addeventatc .addeventatc_icon {
    background-image: url(<?php echo get_template_directory_uri(); ?>/img/icon-calendar-t1.svg) !important;
}
</style>

</div>

</div>
 
</body>
</html> 