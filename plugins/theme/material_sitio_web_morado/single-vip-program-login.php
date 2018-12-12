<?php include 'header.php';?>
<div class="wrapper prensa_gral">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li>Programa</li>
			</ul>
		</div>
		<section>
			

			<div class="section_int">
				
					<div class="columna">
						<div class="texto">
							<p>El programa VIP de Material tiene como meta proveer una experiencia inolvidable de la escena floreciente de arte contemporáneo en la Ciudad de México y también establecer enlaces importantes entre los invitados VIP de la feria y sus expositores.</p>
							<p>Si te encuentras con algún problema entrando a nuestro programa VIP en línea o requieres más ayuda, no dudes en comunicarte con nosotros al correo: <a href="">vip@material-fair.com</a>.</p>
						</div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo get_template_directory_uri(); ?>/upload/home/02.jpg">
						</div>
					</div>
					<div class="clear"></div>

				
			</div>

			<div class="section_int section_int_blog">
				<div class="formularios">
					<form
						<?php
							echo 'action=" '.home_url().'/vip_program/ "';
						?>
					method="POST"
					class="vip_rogram_login">
						<div class="colum_dos">
							<label>Contraseña</label>
							<input type="password" name='cs'>
						</div>
						
						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>
		</section>
<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 