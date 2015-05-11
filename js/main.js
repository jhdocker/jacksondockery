// Gumby is ready to go
Gumby.ready(function() {
	Gumby.log('Gumby is ready to go...', Gumby.dump());

	// placeholder polyfil
	if(Gumby.isOldie || Gumby.$dom.find('html').hasClass('ie9')) {
		$('input, textarea').placeholder();
	}

	// skip link and toggle on one element
	// when the skip link completes, trigger the switch
	$('#skip-switch').on('gumby.onComplete', function() {
		$(this).trigger('gumby.trigger');
	});

// Oldie document loaded
}).oldie(function() {
	Gumby.warn("This is an oldie browser...");

// Touch devices loaded
}).touch(function() {
	Gumby.log("This is a touch enabled device...");
});


$(document).ready(function() {
    $('.viewport').mouseenter(function(e) {
        $(this).children('a').children('img').animate({ height: '399', left: '0', top: '0', width: '450'}, 100);
        $(this).children('a').children('span').fadeIn(200);
    }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '332', left: '-20', top: '-20', width: '500'}, 100);
        $(this).children('a').children('span').fadeOut(200);
    });
});

//close modal on outside click
$('.modal').on(Gumby.click, function(e){
	var container = $('.content');
	if ((!container.is(e.target)//if the target isn't in the container
		&& container.has(e.target).length ===0)) //nor a descendant
	{
		$('.modal .close').trigger('gumby.trigger');
	}
});

//(function($) {//scroling menu
//    $(document).ready(function(){
//        $(window).scroll(function(){
//            if ($(this).scrollTop() > 200) {
//                $('#main-menu').fadeIn(500);
//            } else {
//                $('#main-menu').fadeOut(500);
//            }
//        });
//    });
//})(jQuery);