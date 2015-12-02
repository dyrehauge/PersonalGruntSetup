jQuery(document).ready(function($) {



	$('#wpcf7-f135-o1').find('br').remove();

	// Code here will be linted with JSHint.
	/* jshint ignore:start */

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
	/* jshint ignore:end */

	$('.fillouts p:empty').remove();

	$('.fillouts .notab').keydown(function (e) {
		if (e.which === 9) {
			return false;
		}
	});

	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$('#'+tab_id).addClass('current');
	});

	var searchbutton = $('.searchit');

	searchbutton.on('click', function(){
		$('.searcharea').toggleClass('bringsearch');
	});

	$('.closeme').on('click', function(){
		searchbutton.click();
	});


	$('.login').on('click', function(){
		$('.loginmodal').show();
		$('.overlay').show();
		setTimeout(function(){ 
			$('.loginmodal').addClass('moveup');
			$('.overlay').addClass('fadeIn');
		}, 100);
	});

	$('.closemodal').on('click', function(){
		$('.loginmodal').removeClass('moveup');
		$('.overlay').removeClass('fadeIn');
		setTimeout(function(){ 
			$('.loginmodal').hide();
			$('.overlay').hide();
		}, 500);
	});


	$('.overlay').on('click', function(){
		$('.closemodal').click();
	});

	$('.tilmeld').on('click', function(){
		$('.tilmeldModal').show();
		$('.overlay').show();
		setTimeout(function(){ 
			$('.tilmeldModal').addClass('moveup');
			$('.overlay').addClass('fadeIn');
		}, 100);
	});

	$('.closetilmeld').on('click', function(){
		$('.tilmeldModal').removeClass('moveup');
		$('.overlay').removeClass('fadeIn');
		setTimeout(function(){ 
			$('.tilmeldModal').hide();
			$('.overlay').hide();
		}, 500);
	});


	$('.overlay').on('click', function(){
		$('.closetilmeld').click();
	});


// Responsive Menu 

var pullMenu = $('.pull_menu'); // The Pull menu item which trigger the whole menu
var header = $('nav'); // The header where all elements are inside.
var line1 = $('.line-1'); //Navigation Rectangle 1
var line2 = $('.line-2'); // Navigation Rectangle 2
var line3 = $('.line-3'); // Navigation Rectangle 3 

pullMenu.click(function() {
	header.toggleClass('pull_menu_in_out');
	line1.toggleClass('line-1-animate');
	line2.toggleClass('line-2-remove');
	line3.toggleClass('line-3-animate');
});

var antal = $('.fillouts').length;
var modalWidth = $('.fullwidth').width();
var sliderbredde = antal * modalWidth;
var animatedbox = $('.theanimatedbox').css({
	'width' : sliderbredde
});

var animating = false;

$('.moveright').on('click', function(){
	
	
	if(animating === false){
		animating = true;
		animatedbox.animate({
			right: '+=' + modalWidth
		}, 400, function() {
			animating = false;
		});
	}

});

$('.moveleft').on('click', function(){
	if(animating === false){
		animating = true;
		animatedbox.animate({
			right: '-=' + modalWidth
		}, 400, function() {
			animating = false;
		});
	}
});

$('input.keepalive').keypress(function(e){
	var k=e.keyCode || e.which;
	if(k===13){
		e.preventDefault();
		$('.moveright').click();
		$(this).blur();
	}
});


if($('.grid-1-2.red').length > 0){
	$('.whiteblock').addClass('red');
}

if($('.grid-1-2.blue').length > 0){
	$('.whiteblock').addClass('blue');
}

if($('.grid-1-2.yellow').length > 0){
	$('.whiteblock').addClass('yellow');
}

if($('.grid-1-2.black').length > 0){
	$('.whiteblock').addClass('black');
}



// Code here will be linted with JSHint.
/* jshint ignore:start */
//admin
$('.all_options:not(:eq(0))').slideUp();
$('.input_title').click(function(){
	if($(this).next('.all_options').css('display')==='none') {
		$(this)
		.removeClass('inactive').addClass('active')
		.children('img')
		.removeClass('inactive').addClass('active');
	} else {
		$(this)
		.removeClass('active').addClass('inactive')
		.children('img')
		.removeClass('active').addClass('inactive');
	}
	$(this).next('.all_options').slideToggle('slow');
});

     // admin upload file/image
     $('.upload-btn').on('click', function(e) {
     	var gettheid = $(this).parent().find('.getfileidhidden');
     	var idvalue = gettheid.val();
     	e.preventDefault();
     	var image = wp.media({
     		title: 'Upload Image',
     		multiple: false
     	}).open()
     	.on('select', function(e){
     		var uploaded_image = image.state().get('selection').first();
     		var image_url = uploaded_image.toJSON().url;
     		$("#"+idvalue).val(image_url);
     	});
     });

     /* jshint ignore:end */

     if($('#wordspush').length > 0){
     	$('#wordspush .word').appendTo('#words');

     	$('#words .word').first().addClass('active');
     	setInterval(function()
     	{
     		var next = $('#words .word.active').fadeOut().removeClass('active').next('.word');
     		if (!next.length) {
     			next = next.prevObject.siblings(':first');
     		}
     		next.fadeIn().addClass('active');
     	}, 3000);
     }

     /*===================================
=            Minimalform            =
===================================*/

var listitems = $('.minimalform li');
var length = listitems.length;
var process = 100 / length;

// Validation
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function isPhone(phone) {
	var regex = /^(((0{2})|(\+))([0-9][0-9]?))?(\s)?([1-9])([0-9]\s?){7}$/;
	return regex.test(phone);
}

// validation end

$('.number-total').append(length);
var numbersfill = 0;

$('.minimalform li').each(function(){
	numbersfill++;
	$('.number-current').append('<div>' + numbersfill + '</div>');
});

$('.minimalform li label').each(function(){
	$('.labelshold').append($(this));
});

var numberCurrent = 1;

if(numberCurrent <= 1){
	$('.minimalform .back').hide();
}




$('.minimalform .next').on('click', function(event){
	event.preventDefault();

	if($.trim($('li.current input').val()).length <= 0){
		$('.error-message').addClass('easeinreg');
	} else {
		$('.error-message').removeClass('easeinreg');
		if(numberCurrent < length){
			$('.back').show();

			$('.minimalform .newwrap .number span.number-current div').animate({
				top:'-=16'
			}, 300);

			$('li.current').removeClass('current').next('li').addClass('current');
			$('li.current').find('input').focus();

			$('.minimalform .newwrap .process').css({
				width: (process * numberCurrent) + '%'
			});

			$('.labelshold label').animate({
				top:'-=37'
			}, 300);

			numberCurrent++;

			$('li.current').find('input').focus();


		} else {

			var q1 = $('#q1').val();
			var q2 = $('#q2').val();

			if(!(isEmail(q2) || isPhone(q2))) {
				$('.error-message').html('Du har ikke indtastet et korrekt telefonnummer eller email');
				$('.error-message').addClass('easeinreg');
			} else {
				$('.minimalform form .process').css({
					width: (process * numberCurrent) + '%'
				});

				$('.questions, .controls, .labelshold').addClass('easeoutreg');

				setTimeout(function(){
					$('.questions, .controls, .labelshold').hide();
				}, 400);

				$( this ).closest('form').submit();

				$('.final-message .name').append(q1);
				$('.final-message .kontakt').append(q2);
				$('.final-message').addClass('con');
			}
		}
	}

});

$('.minimalform .back').on('click', function(event){
	event.preventDefault();

	$('.next').show();
	numberCurrent--;


	$('li.current').removeClass('current').prev('li').addClass('current');

	$('.labelshold label').animate({
		top:'+=37'
	}, 300);

	$('li.current').find('input').focus();

	$('.minimalform .newwrap .process').css({
		width: (process * numberCurrent) + '%'
	});


	if($('li').first().hasClass('current')){
		$('.back').hide();
		$('.minimalform .newwrap .process').css({
			width: (process * numberCurrent) + '%'
		});
	}


	$('.minimalform .newwrap .number span.number-current div').animate({
		top:'+=16'
	}, 300);

	if(numberCurrent <= 1){
		$('.back').hide();
		$('.minimalform .newwrap .process').css({
			width: (process * numberCurrent) + '%'
		});
	}

});

$('.minimalform input').keypress(function(e){
	var k = e.keyCode || e.which;
	if(k === 13){
		e.preventDefault();
		$('.minimalform .next').click();
	}
	if(k === 17){
		e.preventDefault();
		$('.minimalform .back').click();
	}
});


/*=====  End of Minimalform  ======*/


$('.imgwrap img').mousemove(function(e) {
	var amountMovedX = (e.pageX * -1 / 20) + 40;
	var amountMovedY = (e.pageY * -1 / 20) + 80;
	console.log($(this).closest('individ').find('.particles img'));

	$(this).parent().parent().find('.particles img').css({
		'-webkit-transform': 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0)',
		'-moz-transform': 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0)',
		'-ms-transform': 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0)',
		'-o-transform': 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0)',
		'transform': 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0)'

	});

	$(this).parent().parent().find('.particles img.second').css({
		'-webkit-transform': 'translate3d(' - (amountMovedX - 50) + 'px,' + amountMovedY + 'px, 0)',
		'-moz-transform': 'translate3d(' - (amountMovedX - 50) + 'px,' + amountMovedY + 'px, 0)',
		'-ms-transform': 'translate3d(' - (amountMovedX - 50) + 'px,' + amountMovedY + 'px, 0)',
		'-o-transform': 'translate3d(' - (amountMovedX - 50) + 'px,' + amountMovedY + 'px, 0)',
		'transform': 'translate3d(' - (amountMovedX - 50) + 'px,' + amountMovedY + 'px, 0)'

	});

	$(this).parent().parent().find('.particles img.third').css({
		'-webkit-transform': 'translate3d(' - (amountMovedX + 100) + 'px,' + amountMovedY + 'px, 0)',
		'-moz-transform': 'translate3d(' - (amountMovedX + 100) + 'px,' + amountMovedY + 'px, 0)',
		'-ms-transform': 'translate3d(' - (amountMovedX + 100) + 'px,' + amountMovedY + 'px, 0)',
		'-o-transform': 'translate3d(' - (amountMovedX + 100) + 'px,' + amountMovedY + 'px, 0)',
		'transform': 'translate3d(' - (amountMovedX + 100) + 'px,' + amountMovedY + 'px, 0)'

	});

	
});

});