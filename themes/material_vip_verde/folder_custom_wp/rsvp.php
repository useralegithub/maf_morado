<?php require('../../../../wp-load.php'); ?>
<?php

global $wpdb;
$usuario_id       = $_REQUEST['usuario_id'];
$usuario_nombre   = $_REQUEST['usuario_nombre'];
$usuario_apellido = $_REQUEST['usuario_apellido'];
$usuario_email    = $_REQUEST['usuario_email'];
$rsvp_title       = $_REQUEST['rsvp_title'];
$rsvp_activo      = $_REQUEST['rsvp_activo'];
$post_id          = $_REQUEST['post_id'];

$wp_users_vip = $wpdb->get_results("SELECT * FROM wp_eventos_vip WHERE post_id = '$post_id' AND id_usuario_vip = '$usuario_id' ");
//print_r($wp_users_vip);

if (empty($wp_users_vip[0])) {
	$wpdb->insert('wp_eventos_vip', array(
		'post_id' => $post_id,
		'id_usuario_vip' => $usuario_id
	));
	echo 'si';
}else{
	$wpdb->delete( 'wp_eventos_vip', array( 'id' => $wp_users_vip[0]->id ), array( '%d' ) );
	//print_r($wp_users_vip);
	echo "no";
}

?>
