$(document).ready(function(){
$(".wrapper").stellar();
console.log("debug");

	$(".texto iframe").each(function(){
		var padre = $(".texto iframe").parent();
		$(this).load(function(){
			$(padre).addClass('p_iframe');
		});
	});
	
/*	var menu=false;

	
$('.btn_menu').click(function(){
			$('body').addClass('act');
			$(".menu_span").html('cerrar');
			if(!menu){
				$('body').addClass('act');
				$(".menu_span").html('cerrar');
				menu=true;
			} else {
				$('body').removeClass('act');
				$(".menu_span").html('Menú');
				menu=false;
			}
		});


		$('.menu ul li').click(function(){
			$('body').removeClass('act');
			$(".menu_span").html('Menú');
			menu=false;
		});*/

		

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
	var shUno = $('.he_uno').height();
	var shDos = $('.he_dos').height();
	var shTres = $('.he_tres').height();
	var shCuatro = $('.he_cuatro').height();
	var shCinco = $('.he_cinco').height();
	var shAll = (shUno + shDos + shTres + shCuatro + shCinco) - $('.texto_img').height();
	var shInt = $('.content.content_int').height();
	var sIntH = shInt - $('.texto_img').height();
	var pos;
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


		
	});


	$('.btn_dia').each(function(e){
		$(this).click(function(){
			$('.btn_dia_content').eq(e).slideToggle();
			$('.btn_dia').eq(e).toggleClass('act');


			$('.btn_dia_rojo').eq(e).toggleClass('act_rojo');

		})
	});

	$('.btn_dia_rojo').each(function(e){
		$(this).click(function(){
			
			$('.btn_dia_content').eq(e).slideToggle();
			$('.btn_dia_rojo').eq(e).toggleClass('act_rojo');

		})
	});

// slider
	var imgGal = $(".slide");
	imgGal.hide();
	imgGal.eq(0).show();
	$(".puntito").eq(0).addClass("act");
	var iInt = 1;
	$(".puntito").click(function() {
		fadeAuto($(this).index(),imgGal);
		$(".puntito").removeClass("act");
		$(this).addClass("act");
	});
	$(".s_fecha_d").click(function() {
		fade(true,imgGal);
	});
	$(".s_fecha_i").click(function() {
		fade(false,imgGal);
	});
	function fade(next, img) {
		if (img.length > 1 ) { 
			if (next) {cond1 = iInt; cond2 = img.length; } else {cond1 = 1; cond2 = iInt; };
			if (cond1 < cond2) {
				img.fadeOut(600);
				if (next) {iInt++; } else { iInt-- }
				img.eq(iInt - 1).css('position','absolute');
				img.eq(iInt - 1).fadeIn(600, function() {
				img.parent().animate({height : img.eq(iInt - 1).height()},600);
			});
			} else {
				img.fadeOut(600);
				if (next) {iInt = 1 } else { iInt =  img.length };
				img.eq(iInt - 1).css('position','absolute');
				img.eq(iInt - 1).fadeIn(600, function() {
				img.parent().animate({height : img.eq(iInt - 1).height()},600);
			});
			}
		}
		iIntAct = iInt - 1;
		$(".puntito").removeClass("act");
		$(".puntito").eq(iIntAct).addClass("act");
	}
	
	iIntAct = 0;
	function fadeAuto(iInti,img) {
		if(iIntAct != iInti) {
			img.fadeOut(600);
			img.eq(iInti).css('position','absolute');
			img.eq(iInti).fadeIn(600, function() {
				img.parent().animate({height : img.eq(iInti).height()},600);
			});
			iIntAct = iInti;
			iInt = iInti+1;
		}
	}



});