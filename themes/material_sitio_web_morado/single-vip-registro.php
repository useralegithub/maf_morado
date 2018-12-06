<?php include 'header.php';?>
<!-- page_acreditacion_prensa -->
<div class="wrapper page_acreditacion_prensa">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]Registro[:en]Register[:]'); ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int contacto">
				<div class="texto">
					<p><?php echo __('[:es]Registro VIP[:en]Register VIP[:]'); ?></p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="section_int section_int_blog">
<?php

global $wpdb;
$wpdb_response='';
if ($_POST['email']) {

$nombre     = strip_tags(trim( $_POST['nombre']    ));
$apellido   = strip_tags(trim( $_POST['apellido']  ));
$email 	    = strip_tags(trim( $_POST['email']     ));
$categoria  = strip_tags(trim( $_POST['categoria'] ));
$contrasena = strip_tags(trim( $_POST['contrasena']));
$spam 		= $_POST['spam'];

if ($spam=='') { // if validate spam
	

$wpdb_email = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_email = '$email' ORDER BY id DESC ");
$wpdb_vip_user=$wpdb_email[0];



	if($email==$wpdb_vip_user->users_vip_email){

		if ($wpdb_vip_user->users_vip_estatus==3) {

			$wpdb_response = 'No necesitas volver a registrarte '.$wpdb_vip_user->users_vip_nombre.', puedes acceder a VIP en el siguiente link con tu correo: '.$wpdb_vip_user->users_vip_email.' o recuperar tu contraseña.';
		}

		if ($wpdb_vip_user->users_vip_estatus==1) {
			
		$wpdb_response = 'Ya existe una petición con el correo '.$wpdb_vip_user->users_vip_email.' y nombre: '.$wpdb_vip_user->users_vip_nombre.' '.$wpdb_vip_user->users_vip_apellido.'  por favor espera a que se apruebe tu petición.';
		}

		if ($wpdb_vip_user->users_vip_estatus==4) {
			
			$wpdb_response = 'Tu cuenta ha sido rechazada, por favor contacta a los administradores para tener más información.';
		}

	}else{


	//if ($campo_pass1!=$campo_pass2) {
			
			//$wpdb_response = 'La contraseñas no son iguales.';
	//}else{


			if ($nombre!=''||$apellido!=''||$categoria!=''||$email!=''||$contrasena!='') {


				function randomRecovery($length = 6) {
					$str = "";
					//$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
					$characters = array_merge(range('a','z'), range('0','9'));
					$max = count($characters) - 1;
					for ($i = 0; $i < $length; $i++) {
						$rand = mt_rand(0, $max);
						$str .= $characters[$rand];
					}
					return $str;
				}

				$recovery = randomRecovery(20);

				$lang=qtranxf_getLanguage();

				$hash = wp_hash_password( $contrasena );



			 	$register_user = array(
										'users_vip_nombre'         => $nombre,
										'users_vip_apellido'       => $apellido,
										'users_vip_category'       => $categoria,
										'users_vip_email'          => $email,
										'users_vip_pass'     	   => $hash,
										'users_vip_estatus'  	   => '1',
										'users_vip_pass_recovery'  => $recovery,
										'users_vip_lang'  	   	   => $lang
										);

			 	$format_regiter = array('%s','%s','%s','%s','%s','%s');

			 	$wpdb->insert('wp_users_vip',$register_user, $format_regiter );

			 	$wpdb_response = 'Muchas gracias '.$nombre .' '.$apellido.'  Se ha mandado una petición para acceder a VIP.';
			
			}

	     //}//CLose key for validate pass iqual

		}

	} // close if validate spam

} // close if $_POST

?>

				<div class="formularios">

				<p>
					<?php echo $wpdb_response; ?>
				</p>

				<p>

					<?php
							if (empty($nombre) || empty($apellido) || empty($email) ) {
								echo __('[:es]Campos indicados con "*" son obligatorios[:en]Fields indicated with "*" are required[:]');
							}
							

					?>
					
				</p>

					<form action="" method="post" name="form_registro" >
					<?php

						$nombre     = '';
						$apellido   = '';
						$email 	    = '';
						$categoria  = '';
						$contrasena = '';
						$pais_residencia = '';

						if ($_POST) {

							$nombre     = strip_tags(trim( $_POST['nombre']    ));
							$apellido   = strip_tags(trim( $_POST['apellido']  ));
							$email 	    = strip_tags(trim( $_POST['email']     ));
							$categoria  = strip_tags(trim( $_POST['categoria'] ));
							$contrasena = strip_tags(trim( $_POST['contrasena']));
							$pais_residencia = strip_tags(trim( $_POST['pais_residencia']));

						}

					?>

				<div class="colum_dos">
					<label>
						<?php

							if (count($_POST)==0) {
								echo __('[:es]Nombre*[:en]Name*[:]');
							}else{

							if (empty($nombre)){
									echo __('[:es]Nombre<span class="campo_vacio">*</span>[:en]Name<span class="campo_vacio">*</span>[:]');
							}else{
									echo __('[:es]Nombre*[:en]Name*[:]');
								}
								
							}
						
						?>
					</label>
					<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
				</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]Apellido*[:en]Last name*[:]');
									}else{

									if (empty($apellido)){
											echo __('[:es]Apellido<span class="campo_vacio">*</span>[:en]Last name<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]Apellido*[:en]Last name*[:]');

										}
										
									}
								
								?>
									
							</label>
							<input type="text" name="apellido" value="<?php echo $apellido; ?>" >
						</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]E-mail*[:en]E-mail*[:]');
									}else{

									if (empty($email)){
											echo __('[:es]E-mail<span class="campo_vacio">*</span>[:en]E-mail<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]E-mail*[:en]E-mail*[:]');

										}
										
									}
								
								?>
							</label>
							<input type="text" name="email" value="<?php echo $email; ?>">
						</div>

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]País de Residencia*[:en]Country of Residence*[:]');
									}else{

									if (empty($email)){
											echo __('[:es]País de Residencia<span class="campo_vacio">*</span>[:en]Country of Residence<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]País de Residencia*[:en]Country of Residence*[:]');

										}
										
									}
								
								?>
							</label>

							<select name="pais_residencia" >
							  <?php

									global $wpdb;
									$wpdb_paises=$wpdb->get_results( "SELECT * FROM maf_cat_countries ORDER BY id ASC ");

									foreach ($wpdb_paises as $key_pais => $pais) {
										$selected = ($pais_residencia==$pais->id)?'selected':'';
										echo '<option value="'.$pais->id.'"  '.$selected.'>'.$pais->name.'</option>';
									}

							  ?>
							</select>

						</div>

						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Rango de edad[:en]Age Range:]'); ?>
							</label>

							<select name="rango_edad" >
								  <option value="18-24">18-24</option>
								  <option value="25-34">25-34</option>
								  <option value="35-44">35-44</option>
								  <option value="45+">45+</option>
							</select>
						</div>

						<div class="colum_dos">
							<label>
									<?php echo __('[:es]Perfil[:en]Profile[:]'); ?>
							</label>

							<select name="categoria" >
							  <?php

									global $wpdb;
									$wpdb_cat=$wpdb->get_results( "SELECT * FROM users_vip_category ORDER BY id ASC ");

									foreach ($wpdb_cat as $key_cat => $cat) {
										$selected = ($categoria==$cat->id)?'selected':'';
										echo '<option value="'.$cat->id.'"  '.$selected.'>'.__($cat->nombre_cateogria).'</option>';
									}

							  ?>
							</select>
						</div>

						

						<div class="colum_dos">
							<label>
								<?php

									if (count($_POST)==0) {
										echo __('[:es]Afiliación Organizacional*[:en]Organizational Affiliations*[:]');
									}else{

									if (empty($email)){
											echo __('[:es]Afiliación Organizacional<span class="campo_vacio">*</span>[:en]Organizational Affiliations<span class="campo_vacio">*</span>[:]');
									}else{
											echo __('[:es]Afiliación Organizacional*[:en]Organizational Affiliations*[:]');

										}
										
									}
								
								?>
							</label>
							<input type="text" name="email" value="<?php echo $email; ?>">
						</div>
						
						<input type="hidden" name="spam">
						
						<input type="submit" name="" value="<?php echo __('[:es]Registro[:en]Register[:]'); ?>" id="submitBot">
					</form>

				</div>
			</div>
		</section>




<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom_style.css?v=<?php echo time();?>">
<?php include 'footer.php';?>

</div>

</div>
 
</body>
</html> 