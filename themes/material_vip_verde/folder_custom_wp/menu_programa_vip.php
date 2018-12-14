
			<?php

				$bienvenido=get_posts(array('post_type' =>'vip' ,'name'=>'bienvenido','post_status'=>"publish" ))[0];
				$bienvenido_link=get_permalink($bienvenido->ID);

				$programa=get_posts(array('post_type' =>'vip' ,'name'=>'programa','post_status'=>"publish" ))[0];
				$programa_link=get_permalink($programa->ID);

				$hotel_oficial=get_posts(array('post_type' =>'vip' ,'name'=>'viaje-y-alojamiento','post_status'=>"publish" ))[0];
				$hotel_oficial_link=get_permalink($hotel_oficial->ID);

				$aliados=get_posts(array('post_type' =>'vip' ,'name'=>'aliados','post_status'=>"publish" ))[0];
				$aliados_link=get_permalink($aliados->ID);

				$recomendaciones=get_posts(array('post_type' =>'vip' ,'name'=>'recomendaciones','post_status'=>"publish" ))[0];
				$recomendaciones_link=get_permalink($recomendaciones->ID);

				$url=home_url().'/vip/'.get_queried_object()->post_name.'/';


			?>
				<a href="<?php echo $bienvenido_link; ?>" class="mv_boton  <?php echo($url==$bienvenido_link)?'mv_active':''; ?>">
					<?php echo __('[:es]Bienvenido[:en]Welcome[:]'); ?>
				</a>
				
				<a href="<?php echo $programa_link; ?>" class="mv_boton  <?php echo($url==$programa_link)?'mv_active':''; ?>">
					<?php echo __('[:es]Programa VIP 2018[:en]VIP Program 2018[:]'); ?>
				</a>

				<?php


					$vip_program = get_term_by( 'slug', 'vip-program-2018', 'vip_programs' );
						
					$terms_dias = get_terms( array(
								    'taxonomy'   => 'vip_programs',
								    'hide_empty' => false,
						            'orderby'   => 'none',
						            'parent'     => $vip_program->term_id

								)  );

					$urls_dias = array();
					foreach ($terms_dias as $key => $dia) { 
						$dia_slug = explode('-',$dia->slug)[0]; 
						$urls_dias[]= $url_dia=home_url('/vip/programa/').''.$dia_slug.'/';
				 	}

				 	$dia0=$urls_dias[0];
				 	$dia1=$urls_dias[1];
				 	$dia2=$urls_dias[2];
				 	$dia3=$urls_dias[3];
				 	$dia4=$urls_dias[4];
				 	$dia5=$urls_dias[5];
				 	$dia6=$urls_dias[6];

				 	echo "\n <!-- dias:_ \n";
				 	print($dia0);
				 	echo "\n-->\n";

				 ?>
				<?php if ($url==$programa_link||$dia0==$programa_link||$dia1==$programa_link||$dia2==$programa_link||$dia3==$programa_link||$dia4==$programa_link||$dia5==$programa_link||$dia6==$programa_link) { ?>
				 	<nav class="submenu">
						<?php

						$vip_program = get_term_by( 'slug', 'vip-program-2018', 'vip_programs' );
							
						$terms_dias = get_terms( array(
									    'taxonomy'   => 'vip_programs',
									    'hide_empty' => false,
							            'orderby'   => 'none',
							            'parent'     => $vip_program->term_id

									)  );


						?>
						<?php foreach ($terms_dias as $key => $dia) { ?>
						<?php $short_dia = mb_substr($dia->name,0,2,'UTF-8'); ?>
						<?php $dia_slug = explode('-',$dia->slug)[0]; ?>
						<?php $description_dia = $dia->description; ?>

						<?php ?>
							<a href="<?php echo home_url('/vip/programa/').''.$dia_slug; ?>" class="mv_boton"><?php echo __($short_dia); ?>. <?php echo __($description_dia); ?></a>
						<?php } ?>
					</nav>
				 <?php } ?>
				
				
				<a href="<?php echo $hotel_oficial_link; ?>" class="mv_boton  <?php echo($url==$hotel_oficial_link)?'mv_active':''; ?>">
					<?php echo __('[:es]Viaje y Alojamiento[:en]Travel and Hotels[:]'); ?>
					
				</a>

				<a href="<?php echo $recomendaciones_link; ?>" class="mv_boton  <?php echo($url==$recomendaciones_link)?'mv_active':''; ?>">
					<?php echo __('[:es]Recomendaciones[:en]Recommendations[:]'); ?>
				</a>

				<a href="<?php echo $aliados_link; ?>" class="mv_boton  <?php echo($url==$aliados_link)?'mv_active':''; ?>">
					<?php echo __('[:es]Aliados[:en]Aliances[:]'); ?>
				</a>
				<?php
				?>

			