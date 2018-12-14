<?php include 'header.php';?>
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
<div class="wrapper archive_programa">
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
				<li><?php echo __('[:es]Programa[:en]Program[:]'); ?></li>
			</ul>
		</div>
		<section>
		

			<div class="section_int">

				<?php

					$contenido=explode('<!--more-->', __(get_post(168)->post_content));

					$contenido_texto=$contenido[0];
					$contenido_img=$contenido[1];

					echo "\n<!-- imgs_ ";

					print_r($contenido_img);

					echo "-->\n";

				?>
				
					<div class="columna">
						<div class="texto">
							
							<h2><?php echo __('[:es]PROGRAMA PÚBLICO[:en]PUBLIC PROGRAM[:]'); ?></h2>
							<?php 
								echo apply_filters('the_content', $contenido_texto);
							?>
						</div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo get_the_post_thumbnail_url(get_post(168)->ID,'full'); ?>">
								<span class="img_pie_foto expositores">
									<?php echo __(get_the_post_thumbnail_caption(get_post(168)->ID)); ?>
								</span>
						</div>
					</div>
					<?php if ($contenido_img==''){}else{ ?>
					<div class="columna">
						<div class="texto">
							<?php 
								echo apply_filters( 'the_content',$contenido_img );
							?>
						</div>
					</div>
					<?php } ?>
					 
					<div class="clear"></div>

				
			</div>
			<div class="section_int sec_calendario">
<?php 
$year_up=get_terms( array('taxonomy' => 'programas','order' => 'DESC','parent'=>0,'hide_empty'=>false))[0];

echo "\n <!-- year up: \n";
print_r($year_up);
echo "\n --> \n";

//$set_dias=get_terms( array('taxonomy' => 'programas','order' => 'DESC','orderby' => 'term_order','parent'=>$year_up->term_id));
$set_dias=get_terms( array('taxonomy' => 'programas','order' => 'ASC','orderby' => 'term_order','parent'=>$year_up->term_id,'hide_empty'=>false));
echo "\n <!-- set_dias: \n";
print_r($set_dias);
echo "\n --> \n";
wp_update_term(128, 'programas', array(
  'term_id' => 15,
  'term_taxonomy_id' => 15

));
foreach ($set_dias as $dias => $dia) {
		$set_programas=array(
		'post_type' =>'programa',
		'post_per_page' => -1,
		'order'=>'ASC',
		'nopaging' => true,
		'tax_query'=>array( 
            array(
                    'taxonomy' => 'programas',
                    'field'=>'slug',
                    'terms' => $dia->slug
                  )
           ),
	      );
	$set_programas=get_posts($set_programas);
/*$set_programas=get_posts(array('post_type' =>'programa','posts_per_page' =>-1,'nopaging' => true,
	'tax_query'=>array( array('taxonomy' => 'programas','field'=>'slug','terms' => $dia->slug))) );*/
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
<div title="Add to Calendar" class="addeventatc">
	<?php echo __('[:es]Añadir al calendario[:en]Add to Calendar[:]'); ?>
    
    <span class="start">
    	<?php 
    		$horas=explode('-', get_post_meta($programa->ID,'programa-hora',true));
    		$hora_start=$horas[0];
    		$hora_end=$horas[1];
    		$fecha= __($dia->description);
    		echo $fecha." ".$hora_start;
    	?>

    	<?php
/*			 if (!get_post_meta($programa->ID,'calendario-inicio',true)) {
			 	echo '';
			 }else{
			 echo get_post_meta($programa->ID,'calendario-inicio',true);
			 }*/
		 ?>
    </span>
    <span class="end">
    	<?php
/*			 if (!get_post_meta($programa->ID,'calendario-termino',true)) {
			 }else{
			 echo get_post_meta($programa->ID,'calendario-termino',true);
			 }*/
    		echo $fecha." ".$hora_end;
		 ?>
	</span>
    <span class="timezone">America/Mexico_City</span>
    <span class="title"><?php echo $programa->post_title; ?></span>
    <span class="description"><?php echo get_post_meta($programa->ID,'programa-subtitulo',true); ?></span>
    <!-- <span class="location">Location of the event</span> -->
</div>
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
$years_olds=get_terms(array('taxonomy'=> 'programas','order'=> 'DESC','exclude'=> $year_up->term_id,'parent'=>0,'hide_empty'=> false));
foreach ($years_olds as $years => $year) {
echo '<a href="'.get_term_link($year->term_id,'programas').'" class="bt_a"><span class="btn">'.$year->name.'</span></a>';
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