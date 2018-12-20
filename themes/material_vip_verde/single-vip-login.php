<?php
session_start();

if ($_SESSION['acceso']=='true') {
	header('Location: '.home_url('/vip/bienvenido/'));
}

	include 'folder_custom_wp/user_estatus.php';
	include 'folder_custom_wp/hashed.php';
	global $wp_hasher;
	$enter_bienvedidos=get_posts(array('post_type' =>'vip' ,'name'=>'bienvenido','post_status'=>"publish" ))[0];
	$enter_bienvedidos=get_permalink($enter_bienvedidos->ID);

	//$post_vip_bienvenido=get_posts(array('post_type' =>'page' ,'name'=>'vip-login','post_status'=>"publish" ))[0];
	//$link_vip_bienvenido=get_permalink($post_vip_bienvenido->ID);

	$post=get_posts(array('post_type' =>'page' ,'name'=>'vip-login','post_status'=>"publish" ))[0];

	$uv_email='';
	$uv_pass = '';
	
	if (!empty($_POST)){
		$uv_email=$_POST['uv_mail'];
		$uv_pass= $_POST['uv_pass'];

		//$user_master = $wpdb->get_results("SELECT *	FROM wp_users_vip WHERE id='1'")[0];
		//$name_master = $user_master->users_vip_nombre;
		//$pass_master = $user_master->users_vip_nombre;
		$user_vip = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_email='$uv_email' AND users_vip_estatus='$estatus_aprobado'")[0];
		$user_vip_pass_hashed=$user_vip->users_vip_pass;
		$wp_hasher = new PasswordHash(8, TRUE);

		if($wp_hasher->CheckPassword($uv_pass, $user_vip_pass_hashed)){
	   	 	header('Location: '.$enter_bienvedidos);
	   	 	session_start();
	   	 	$_SESSION['acceso']  = 'true';
	   	 	$_SESSION['user_vip']  = $user_vip;
		}else{
			$wrong_acces = __('[:es]Email o contraseña incorrectos.[:en]Invalid email or password.[:]');
		}
	}
	include 'header.php'; 
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_vip.css?v=<?php echo time();?>">

<div class="wrapper vip_login page-vip-login wrapper_vip">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo __('[:es]VIP[:en]VIP[:]'); ?></li>
			</ul>
		</div>
		<section>
		

			<div class="section_int">
				
					<div class="columna">
						<div class="texto">
				<?php echo apply_filters('the_content', $post->post_content); ?></div>
					</div>
					<div class="columna">
						<div class="texto">
							<img src="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">
						</div>
					</div>
					<div class="clear"></div>

				
			</div>

			<div class="section_int ">
				<div class="formularios">
					<?php if(isset($wrong_acces)){ ?>
						<p class="mensaje_error_vip"><?php echo $wrong_acces; ?></p>
					<?php } ?>
					<form
					action="<?php //echo $enter_bienvedidos; ?>"
					method="post"
					class="vip_rogram_login">

						<div class="colum_dos">
							<label><?php echo __('[:es]Email[:en]Email[:]'); ?></label>
							<input type="text" name='uv_mail' value="<?php echo $uv_email; ?>">
							<label><?php echo __('[:es]Contraseña[:en]Password[:]'); ?></label>
							<input type="password" name='uv_pass'>
							<input type="submit" value="<?php echo __('[:es]Iniciar sesión[:en]Log In[:]'); ?>">
			<?php
				$enter_recupera_pass=get_posts(array('post_type' =>'vip' ,'name'=>'recovery','post_status'=>"publish" ))[0];
				$enter_recupera_pass=get_permalink($enter_recupera_pass->ID);
			?>
                     <a href="<?php echo $enter_recupera_pass; ?>">
                     	<?php echo __('[:es]Olvidé mi contraseña[:en]I forgot my passwod[:]'); ?>
                   	</a>
    					</div>
						

						<div class="colum_dos">
			<?php
				$enter_registro=get_posts(array('post_type' =>'vip' ,'name'=>'register','post_status'=>"publish" ))[0];
				$enter_registro=get_permalink($enter_registro->ID);
			?>
				
				<a href="<?php echo $enter_registro; ?>">

					<input type="button" class="rojo_registro_vip" value="<?php echo __('[:es]Regístrate[:en]Register[:]'); ?>">

					<!--
						<div class="rojo_registro_vip">
							<?php echo __('[:es]REGISTRO VIP[:en]VIP REGISTER[:]'); ?>
						</div>
				    -->
				</a>
						</div>
						

						
					</form>


				</div>
			</div>
		</section>

		<?php include 'folder_custom_wp/footer_vip.php'; ?>

</div>

</div>
 
</body>
</html> 