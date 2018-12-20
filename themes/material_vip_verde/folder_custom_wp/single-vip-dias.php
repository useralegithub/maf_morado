<section>
			<div class="section_int">
				<div class="titulo_programa">
					<h2><?php echo $dia_term->name; ?></h2>
					<p><?php echo __('[:es]'.$dia_desc_es.'[:en]'.$dia_desc_en.'[:]'); ?></p>
				</div>

				<div class="mosaico_cuatro_dia">
				<?php

					$set_posts=array(
						'post_type' 	 =>'vip',
						'posts_per_page' => -1,
						'post_status'	 =>'publish',
						'nopaging' 		 => true,
						'orderby'		 =>'title',
						'order'			 =>'ASC',
						'tax_query'		 =>array( 
												array(
														'taxonomy' => 'vip_programs',
														'field'=>'term_id',
														'terms' => $dia_term->term_id
													  )
										   )
					      );
					//$posts=get_posts($set_posts);

					$posts=get_posts($set_posts);

					usort($posts, function($a, $b){
					    $hourA = get_post_meta($a->ID, 'programa-hora', TRUE);
					    $hourB = get_post_meta($b->ID, 'programa-hora', TRUE);

					    $hourAArray = explode('-', $hourA);
					    $hourBArray = explode('-', $hourB);

					    return strtotime(trim($hourAArray[0])) > strtotime(trim($hourBArray[0]));
					});

				?>
				<?php foreach ($posts as $key => $entrada) { ?>

					<div class="hora entrada">
						<div class="hora_imagen" style="background-image: url(<?php echo get_the_post_thumbnail_url($entrada->ID,'full'); ?>);">
							<p class="vermas"><span><?php echo __('[:es]Ver más info[:en]See more info[:]'); ?></span></p>
						</div>
						<h2><?php echo __($entrada->post_title); ?></h2>
						<p><?php
								echo !get_post_meta($entrada->ID,'programa-ubicacion',true)?'':str_replace(array("<p>","</p>"),"",apply_filters('the_content','[:es][:en][:] ')).''.get_post_meta($entrada->ID,'programa-ubicacion',true); ?></p>
						<p class="fecha">
									<?php echo !get_post_meta($entrada->ID,'programa-hora',true)?'':''.get_post_meta($entrada->ID,'programa-hora',true); ?></p>
						
					</div>
				<?php } ?>
				</div>
			</div>
		</section>

		<?php include 'footer_vip.php'; ?>


</div>

<script type="text/javascript">
	$(document).ready(function(){
	
	var imgGal_img_body = $(".entrada_over");
	imgGal_img_body.hide();

	$(".entrada").each(function( index ) {
  		$(this).click(function(){
		    var this_img     = $(this).index();
		    fadeAuto_body(this_img,imgGal_img_body);

		});
	});

	var iInt_img_body = 1;
	function fade_img_body(next, img) {
		if (img.length > 1 ) { 
			if (next) {cond1 = iInt_img_body; cond2 = img.length; } else {cond1 = 1; cond2 = iInt_img_body; };
			if (cond1 < cond2) {
				img.hide();
				if (next) {iInt_img_body++; } else { iInt_img_body-- }
				img.eq(iInt_img_body - 1).show();
			} else {
				img.hide();
				if (next) {iInt_img_body = 1 } else { iInt_img_body =  img.length };
				img.eq(iInt_img_body-1).show();
				
			}
		}
		iInt_img_bodyAct = iInt_img_body - 1;
		
		
	}
	
	iInt_img_bodyAct = -1;
	function fadeAuto_body(iInti_body,img) {
		if(iInt_img_bodyAct != iInti_body) {
			img.hide();
			img.eq(iInti_body).show();
			iInt_img_bodyAct = iInti_body;
			iInt_img_body = iInti_body+1;
			
		}
	}

		$(".m_f_d").click(function() {
			fade_img_body(true,imgGal_img_body);
		});

		$(".m_f_i").click(function(){
			fade_img_body(false,imgGal_img_body);
		});



	});
</script>

<div class="over_dia">
		<div class="od_cerrar"></div>
		<div class="od_icon_cerrar"></div>
		<div class="od_flecha_der m_f_d"></div>
		<div class="od_flecha_izq m_f_i"></div>

<?php foreach ($posts as $key => $entrada) { ?>
		<div class="over_dia_int entrada_over">
			<div class="od_titulo">
				<h2><?php echo __($entrada->post_title); ?></h2>
				<p><?php echo !get_post_meta($entrada->ID,'programa-hora',true)?'':''.get_post_meta($entrada->ID,'programa-hora',true); ?></p>
			</div>
			
			<div class="od_text">
				<?php echo apply_filters( 'the_content', $entrada->post_content ); ?>
				<div title="Add to Calendar" class="addeventatc">
					<?php echo __('[:es]Añadir al calendario[:en]Add to Calendar[:]'); ?>

					<?php
			    		$horas=explode('-', get_post_meta($entrada->ID,'programa-hora',true));
			    		$hora_start=$horas[0];
			    		$hora_end=$horas[1];
			    		$fecha= __($dia->description);
			    		$the_lang=qtranxf_getLanguage();
			    		$mes_en=explode(' ',$dia_desc_en)[0];
			    		$numero_dia = apply_filters('translate_term',$dia_term->description, 'en', 'vip_programs');
			    		$next_year=date('Y', strtotime('+1 year'));
					?>
				    <span class="timezone">America/Mexico_City</span>
				    <span class="start">
				    	<?php 
				    		//echo 'FEBRUARY '.$numero_dia.', '.$next_year.' '.$hora_start;
				    		//echo $mes_en.' '.$numero_dia.', 2018 '.$hora_start;
				    		echo $next_year.'-02-'.$numero_dia.' '.$hora_start;
				    	?>
				    </span>
				    <span class="end">
				    	<?php
				    		//echo 'FEBRUARY '.$numero_dia.', '.$next_year.' '.$hora_end;
				    		//echo $mes_en.' '.$numero_dia.', 2018 '.$hora_end;
				    		echo $next_year.'-02-'.$numero_dia.' '.$hora_end;
						 ?>
					</span>
				    
				    <span class="title"><?php echo $entrada->post_title; ?></span>
				    <!-- <span class="location">Location of the event</span> -->
				</div>
				<?php $check_rsvp=get_post_meta( $entrada->ID,'meta-checkbox-rsvp',1); ?>
				<?php
					if ($check_rsvp=='yes'){
				?>
					<form>
						<div 
							class="check_rsvp check act"
							id="check_rsvp"
							data-title_rsvp='<?php echo $entrada->post_title; ?>'
							data-rsvp_activo='no'>
							<div class="check_int"></div>
						</div>
						<label>RSVP</label><label id="demora_rsvp"></label>
					</form>
			    <?php } ?>
			</div>
			
			
			<div class="od_imagen">
				<div class="od_imagen_int" style="background-image:url(<?php echo get_the_post_thumbnail_url($entrada->ID,'full'); ?>)"></div>
			</div>

		</div>
<?php } ?>

	</div>


<?php
session_start();
print_r($_SESSION);
$users_vip_id=$_SESSION['user_vip']->id;
$users_vip_nombre=$_SESSION['user_vip']->users_vip_nombre;
$users_vip_apellido=$_SESSION['user_vip']->users_vip_apellido;
$users_vip_email=$_SESSION['user_vip']->users_vip_email;

?>
<script type="text/javascript">
$(function() {

    var usuario_id       = '<?php echo $users_vip_id; ?>';
    var usuario_nombre   = '<?php echo $users_vip_nombre; ?>';
    var usuario_apellido = '<?php echo $users_vip_apellido; ?>';
    var usuario_email    = '<?php echo $users_vip_email; ?>';
    var rsvp_title 	     = $(this).data("title_rsvp");
    var rsvp_activo      = $(this).data("activo");
    var themeurl         = '<?php echo get_template_directory_uri(); ?>';

	$('#check_rsvp').click(function(){

		$("#demora_rsvp").addClass("demora_rsvp");

		$.ajax({
	    	type : 'POST',
	    	url : themeurl+'/folder_custom_wp/rsvp.php',
	        data : {
        		"usuario_id":usuario_id,
        		"usuario_nombre":usuario_nombre,
        		"usuario_apellido":usuario_apellido,
        		"usuario_email":usuario_email,
        		"rsvp_title":rsvp_title,
        		"rsvp_activo":rsvp_activo
        	},
	    	success:function ( response ) { 
	        	//content_insert.html(response);
	        	//$('#loading').html(empty);
	        	$("#demora_rsvp").removeClass("demora_rsvp")
	        	$('#check_rsvp').addClass("check_habilitado");
	    	} ,
	    	error: function(errorThrown){
	    		console.log(errorThrown);  
			}
		});

	});


    /*$.ajax({
        type : 'POST',
        url : themeurl+'/loadmore.php',
        // data : {"page":page,"cat":cat}, 
        data : {"page":page,"maxnum":maxnum,"cont":cont,"abreviatura":abreviatura,"category":category}, 
        success:function ( response ) { 
             //console.log(response);
             //alert(response);

             $('.load_more_home').append(response);
             $("#loadmor").removeClass("blink");
            //alert('Página: '+page+' Maximo: '+maxnum+' y themeurl: '+ themeurl);
             $('#loadmor').attr("data-page", parseInt(page) + 12);
             $('#loadmor').attr("data-cont", parseInt(cont) + 1);
             // initBlogPosts();
             if(cont==(maxnum-1)){ //if(page==(maxnum -1)){ Oculta el load more. if(page==(maxnum-1)){ 
                $(".link").hide();
                //alert("sas");
             } 
        } ,
        error: function(errorThrown){
        	console.log(errorThrown);  
    	}

    });*/ 


});//END function main NO DELTE.
</script>

</div>
 
</body>
</html> 