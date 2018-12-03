<!DOCTYPE html>
<html lang="es">
<head>
<title>Material Art Fair</title>
<meta name="lang" content="es" />
<meta charset="utf-8" />
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta name="format-detection" content="address=no,email=no,telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">


<!--<meta name="keywords" content="xxxxx, xxxxxx, xxxxxx" />-->

<meta name="DC.title" lang="es" content="Material Art Fair" />
<meta name="DC.description" lang="es" content="Material Art Fair 2018" />
<meta name="DC.subject" lang="es" content="Material Art Fair 2018" />
<meta name="DC.creator" content="Material Art Fair" />
<meta name="DC.publisher" content="Material Art Fair" />
<meta name="DC.language" scheme="RFC1766" content="es" />
<!--<meta property="article:modified_time" content="xxxxxx" />
<meta property="article:publisher" content="http://www.xxxxxx.xxx/xxxxxx" />

<meta property="og:title" content="xxxxxx"/>
<meta property="og:description" content="xxxxxx xxxxxxx xxxxxxx xxx xxxx xxxxxxx xxxxxx."/>
<meta property="og:image" content="http://xxxxxx.jpg"/>
<meta property="og:updated_time" content="xxxxxx" />
<meta property="og:url" content="http://www.xxxxxx.xxx/xxxxxx" />
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="xxxxxx"/>

<meta property="twitter:card" content="summary" />
<meta property="twitter:site" content="@xxxxxxxx" />-->

<!-- debe ser la la url fija para evitar que la pagina se duplique -->
<link rel="canonical" href="http://xxxx.xx" />


<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/stellar.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/code.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css?v=<?php echo time();?>">
<style type="text/css">

	.aligncenter,
div.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}

.alignright {
    float:right;
    margin: 5px 0 20px 20px;
}

.alignleft{
    float: left;
    margin: 5px 20px 20px 0;
}
.center_img_footer{
	width: 20%;
    margin: auto;
}
</style>
<?php

?>
<script type="text/javascript">
$(document).ready(function(){

var menu=false;

 get_language='<?php echo qtranxf_getLanguage(); ?>';

if (get_language=='es'){
	$('.menu_span').addClass('es');
	$('.menu_span').text("Menú");
}else{
	$('.menu_span').addClass('en');
	$('.menu_span').text("Menu");
}

$('.btn_menu').click(function(){
			$('body').addClass('act');

			if (get_language=='es'){
				$('.menu_span').addClass('es');
				$(".menu_span").html('cerrar');
			}else{
				$('.menu_span').addClass('en');
				$(".menu_span").html('close');
			}

			
			if(!menu){
				$('body').addClass('act');

			if (get_language=='es'){
				$('.menu_span').addClass('es');
				$(".menu_span").html('cerrar');
			}else{
				$('.menu_span').addClass('en');
				$(".menu_span").html('close');
			}

				menu=true;
			} else {
				$('body').removeClass('act');

				if (get_language=='es'){
					$('.menu_span').addClass('es');
					$('.menu_span').text("Menú");
				}else{
					$('.menu_span').addClass('en');
					$('.menu_span').text("Menu");
				}

				menu=false;
			}
		});

		$('.menu ul li').click(function(){
			$('body').removeClass('act');

if (get_language=='es'){
	$('.menu_span').addClass('es');
	$(".menu_span").html('Menú');
}else{
	$('.menu_span').addClass('en');
	$(".menu_span").html('Menu');
}
			
			menu=false;
		});


});
</script>
<?php
/*if (qtrans_getLanguage()=='en') { 
// put your code here if the current language code is 'en' (English) 
} elseif (qtrans_getLanguage()=='id') { 
// put your code here if the current language code is 'id' (Indonesian) 

}*/

echo "\n <!-- language menu: \n";

/*print_r(get_bloginfo('language'));
echo "\n";

print_r(qtranxf_getLanguage());*/


echo "\n --> \n";

?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3831733-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-3831733-3');
	</script>
</head>

<body>
<div class="line line_l"></div>
<div class="line line_r"></div>
<div class="line line_t"></div>
<div class="line line_b"></div>

<header>
	<div class="header_int">
		<div class="btn_menu">
			<div class="lineas">
				<div class="linea linea_uno"></div>
				<div class="linea linea_dos"></div>
				<div class="linea linea_tres"></div>
			</div>
			<div class="btn_menu_int">
				<span class="menu_span"><?php //echo __('[:es]Menú[:en]Menu[:]'); ?></span>
			</div>
		</div>

		<a href="https://material-fair.com/2019" target="_blank">
			<div class="btn_app  <?php if( is_home() ): echo 'btn_app btn_app_home'; endif;?>"><?php echo __('[:es]APLICA AHORA[:en]APPLY NOW[:]'); ?></div>
		</a>
				<?php 
foreach (wp_get_nav_menu_items('Botón Home') as $b) {
	//echo '<a href="'.$b->url.'" target="_blank" ><div class="btn_app ">'.$b->title.'.</div></a>';
}
?>
	</div>
</header> 
<div class="menu">
	<div class="menu_int">
				<div class="titulo_logo">
					<a href="<?php echo home_url(); ?>">
						<?php echo strip_tags(apply_filters('the_content', get_post(220)->post_content),'<img>');?>
						<?php //include 'pages/svg/logo.php'; ?>
					</a>
				</div>
				<ul>
				<?php $menu_principal=wp_get_nav_menu_items('menu-principal');foreach ($menu_principal as $m){echo'<li><a href="'.$m->url.'"><div class="c_sub">'.$m->title.'</div></a></li>';}?>
				</ul>
				<div class="menu_english">
					<ul>
						<li class=""><?php qtranxf_generateLanguageSelectCode('text'); ?></li>
					</ul>
				</div>

				
	</div>
</div>