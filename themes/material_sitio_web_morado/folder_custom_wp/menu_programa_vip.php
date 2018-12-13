
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

				//mv_active

			?>
				<a href="<?php echo $bienvenido_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Bienvenido[:en]Welcome[:]'); ?>
				</a>
				
				<a href="<?php echo $programa_link; ?>" class="mv_boton">
					<?php echo __('[:es]Programa VIP 2018[:en]VIP Program 2018[:]'); ?>
				</a>
				<nav>
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
				<a href="<?php echo $hotel_oficial_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Viaje y Alojamiento[:en]Aliances[:]'); ?>
					
				</a>

				<a href="<?php echo $recomendaciones_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Recomendaciones[:en]Recommendations[:]'); ?>
				</a>

				<a href="<?php echo $aliados_link; ?>" class="mv_boton ">
					<?php echo __('[:es]Aliados[:en]Aliances[:]'); ?>
				</a>

			