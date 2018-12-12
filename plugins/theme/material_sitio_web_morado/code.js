$(document).ready(function(){
$(".wrapper").stellar();

		
	
	// menu
	// $('.btn_menu').click(function(){
	// 	$('.menu').addClass('act');
	// });

	// $('.btn_menu_cerrar').click(function(){
	// 	$('.menu').removeClass('act');
	// });

	$('.c_sub').each(function(e){
		$(this).click(function(){
			$('.sub_n01').eq(e).addClass('act');
		});
	});

	$('.r_sub').each(function(e){
		$(this).click(function(){
			$('.sub_n01').eq(e).removeClass('act');
		});
	});


	var ph = $('section.homeH').height();
	var wH = $(window).height();
	var shUno = $('.he_uno').height();
	var shDos = $('.he_dos').height();
	var shTres = $('.he_tres').height();
	var shCuatro = $('.he_cuatro').height();
	var shCinco = $('.he_cinco').height();
	var shAll = (shUno + shDos + shTres + shCuatro + shCinco) - $('.texto_img').height();
	var shInt = $('.content.content_int').height();
	var sIntH = shInt - $('.texto_img').height();
	var pos;
	console.log(sIntH);
	$(window).scroll(function(){
		pos = $(this).scrollTop();

		

		$("section").each(function(e) {
			if($(this).position().top < pos) {
				$("section").removeClass('act');
				$("section").eq(e).addClass('act');
			}
		});

		if (pos > shAll + 35){
			$('section.programa').addClass('actDos');
		}else{
			$('section.programa').removeClass('actDos');
		}

		if (pos > sIntH - 50){
			$('.content.content_int').addClass('actDos');
		}else{
			$('.content.content_int').removeClass('actDos');
		}

		if(pos > wH){
			$("body").addClass('actBtn');

		}else{
			$("body").removeClass('actBtn');

		}
		
	});
	var posdos;
	$(".wrapper").scroll(function(){
		posdos = $(this).scrollTop();
		if(posdos > wH){
			$("body").addClass('actBtn');

		}else{
			$("body").removeClass('actBtn');

		}
	});

	


	// code vip
	$('.wrapper.wrapper_vip .hora').click(function(){
		$('.over_dia').css({'display':'flex','display':'-webkit-flex'});
		$('header').addClass('act_over');
	});
	$('.od_cerrar').click(function(){
		$('.over_dia').fadeOut();
		$('header').removeClass('act_over');
	});
	$('.od_icon_cerrar').click(function(){
		$('.over_dia').fadeOut();
		$('header').removeClass('act_over');
	});





	var pos;
	$(window).scroll(function(){
		pos = $(this).scrollTop();
		if (43 < pos){
			$('.btn_responsive_vip').addClass('act');
			$('.menu_vip').addClass('act_scroll');
		}else{
			$('.btn_responsive_vip').removeClass('act');
			$('.menu_vip').removeClass('act_scroll');
		}

	});

	// menu responsive vip
	var menuVip=false;
	$('.btn_responsive_vip').click(function(){
		$('.menu_vip').addClass('activo');
		if(!menuVip){
			$('.menu_vip').addClass('activo');
			menuVip=true;
		} else {
			$('.menu_vip').removeClass('activo');
			menuVip=false;
		}
	});

	$('.mv_boton').click(function(){
		$('.menu_vip').removeClass('activo');
		menuVip=false;
	});

	





});