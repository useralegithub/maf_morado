<?php include 'header.php';?>
<div class="wrapper">
	<div class="content content_int">
		<div class="menu_navegacion">
			<ul>
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
				<li><?php echo $post->post_title; ?></li>
			</ul>
		</div>
		<section>
			<div class="section_int">
				
					<div class="texto">
						<h2><?php echo $post->post_title; ?></h2>
						<?php echo apply_filters('the_content',preg_replace('/\[gallery ids=[^\]]+\]/', '',  $post->post_content ) ); ?>
					</div>
				
			</div>
			<div class="section_int sponsors_ext">
				<div class="sponsors_partners">

					<!-- <h2><img src="<?php the_post_thumbnail_url( 'full' );?>"></h2> -->
					<?php 
foreach (explode(',', get_post_gallery($post->ID,false)['ids']) as $gal) {

	echo '<h3>
			<a href="'.wp_prepare_attachment_for_js($gal)['caption'].'" target="_blank" >
				<img src="'.wp_prepare_attachment_for_js($gal)['url'].'">
			</a>
		</h3>';

} ?>

					<div class="clear"></div>
				</div>
			</div>
			
		</section>

<?php include 'footer.php';?>

</div>

</div>
<?php

echo "\n<!-- BD users vip: \n";

    $csv_output = '';
global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC LIMIT  0,50",ARRAY_A);
echo "count: \n";
$users_vip_count=count($results);
print_r($users_vip_count);
//echo count($results, COUNT_RECURSIVE);
echo "\n\n";
//$csv_output = '"'.implode('","',array_keys($results[0])).'",'."\n";

$csv_output=' " # ","id","Nombre","Apellido","Categoría","E-mail",Pass'."\n";

foreach ($results as $row){
	$k=$users_vip_count-$i++;
	$csv_output.='"'.$k.'",';
    $csv_output .= '"'.implode('","',$row).'",'."\n";
  }

print_r(array_keys($results[0]));
echo "\n\n";
print_r(  $csv_output);
echo "\n\n";
print_r($nombre_columnas);


echo "\n-->\n";
?>
</body>
</html> 