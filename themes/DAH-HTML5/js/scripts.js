// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});

$(document).ready(function(){

$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1500)
    .next()
    .fadeIn(1500)
    .end()
    .appendTo('#slideshow');
},  9000);
});


$(document).ready(function(){
    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
      
        var target = this.hash,
        $target = $(target);
      
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-40
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

$(function(){
	var stickyRibbonTop = $('.pageheadline').offset().top;
	 
	$(window).scroll(function(){
		if( $(window).scrollTop() > stickyRibbonTop ) {
			$('.pageheadline').css({position: 'fixed', top: '0px', left: '0px'});
			$('.offset').css({height: '110px'});
			$('.pheadline-inside').addClass( "coolshadow" );
		} else {
			$('.pageheadline').css({position: 'static'});
			$('.offset').css({height: '0px'});
			$('.pheadline-inside').removeClass( "coolshadow" );
		}
	});
});