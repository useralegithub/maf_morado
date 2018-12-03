<?php include 'header.php';?>
<!-- page_acreditacion_prensa -->
<div class="wrapper page_acreditacion_prensa">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li>Acreditación Prensa</li>
			</ul>
		</div>
		<section>
			<div class="section_int contacto">
				<div class="texto">
					<p>Cada acreditación es válida para 1 sola persona. Todas las
					acreditaciones son sujetas a un proceso de selección.</p>
					<p>La fecha límite para enviar el formulario es el 27 de enero del
					2017.</p>
					<p>Para más información y servicios de prensa favor de contactar
					a <a href="mailto:press@material-fair.com">press@material-fair.com</a>.</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int section_int_blog">
				<div class="formularios">
					<p>
						<?php echo __('[:es]Campos indicados con "*" son obligatorios[:en]Campos indicados con "*" son obligatorios[:]'); ?>
							
					</p>
					<form id="contact_form">
						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Medio*[:en]Medio*[:]'); ?>
							</label>
							<input type="text" name="medio" required>
						</div>
						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Sección o Temática*[:en]Sección o Temática*[:]'); ?>
							</label>
							<input type="text" name="secccion" required>
						</div>
						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Editor o Supervisor*[:en]Editor o Supervisor*[:]'); ?>
							</label>
							<input type="text" name="editor" required>
						</div>
						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Nombre y Apellido*[:en]Nombre y Apellido*[:]'); ?>
							</label>
							<input type="text" name="nombre" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Email*[:en]Email*[:]'); ?>
							</label>
							<input type="text" name="email" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Teléfono De Oficina*[:en]Teléfono De Oficina*[:]'); ?>
							</label>
							<input type="text" name="telefono" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Celular[:en]Celular[:]'); ?>
							</label>
							<input type="text" name="celular">
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Dirección (Línea 1)*[:en]Dirección (Línea 1)*[:]'); ?>
								</label>
							<input type="text" name="direccion1" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Dirección (Línea 2)*[:en]Dirección (Línea 2)*[:]'); ?>
								</label>
							<input type="text" name="direccion2" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Ciudad*[:en]Ciudad*[:]'); ?>
								</label>
							<input type="text" name="ciudad" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Estado*[:en]Estado*[:]'); ?>
								</label>
							<input type="text" name="estado" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Código postal*[:en]Código postal*[:]'); ?>
								</label>
							<input type="text" name="cp" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]País*[:en]País*[:]'); ?>
								</label>
							<input type="text" name="pais" required>
						</div>
						<div class="colum_tres">
							<label>
									<?php echo __('[:es]Página web*[:en]Página web*[:]'); ?>
								</label>
							<input type="text" name="pagina">
						</div>
						<div class="clear"></div>
						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Otras notas[:en]Otras notas[:]'); ?>
								</label>
							<textarea name="otras_notas"></textarea>
						</div>
						<input type="submit" name="" value="Enviar" id="submitBot">
						<input type="hidden" name="question">
					</form>
				</div>
			</div>
		</section>
<script type="text/javascript">
	$(document).ready(function(){

		  $('#contact_form').on('submit', function (e) {

          //alert(themeurl);
          $('#submitBot').hide();
          $('#submitBot').before('Enviando...');
          $.ajax({
            type: 'post',
            url: themeurl+'/send.php',
            data: $(this).serialize(),
            success: function (data) {
              // alert('form was submitted');
              $('#contact_form').html('<div class="mensaje_correo">'+data+'</div>');

            
            }
          });
          e.preventDefault();
        });

	});
</script>
<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 