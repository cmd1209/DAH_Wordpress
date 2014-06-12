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
var slideshow = 

$('#slideshow > div:gt(0)').hide();

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

        var stickymenu = $('.stickymenu');
        var target = this.hash,
        $target = $(target);
      
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-30
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

$(function(){

var stickyRibbonTop = $('.pageheadline').offset().top;
var stickymenu = $('.stickymenu');

if ($(window).width() > 1024) {
   	
$(window).scroll(function(){
		if($(window).scrollTop() > stickyRibbonTop ) {
			stickymenu.slideDown(200);
		} else {
			stickymenu.css({display: 'none'});
		}
});
}
else {
  		stickymenu.css({display: 'none'});
}
});

$(function() {
 
  var sections = $('.subarticle');
  var navigation_links = $('.nav-link');
  
  sections.waypoint({
    handler: function(event, direction) {
      var active_section;
	active_section = $(this);
if (direction === "up") active_section = active_section.prev();
 
var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
navigation_links.removeClass("selected");
active_link.addClass("selected");
    },
    offset: '0px'
  });
});

$(document).ready(function($){
$('a.close').attr("href", "#");
$('.short').append( "<a href='#' class='mehr'>mehr lesen</a>" );
// $('.long').append( "<p><a href='#' class='mehr'>zurück</a></p>" );
});

$(document).on("click", ".mehr", function(e) {
	var event = $(this).closest('.event');
	event.children('.long').slideToggle("long");
	$(this).text(function(i, text){
          return text === "ausblenden" ? "mehr lesen" : "ausblenden";
      })
	// event.children('.short').slideToggle("fast");
      return false;
});


$(document).on("click", ".slidetrigger", function(e) {
	$('.hub').slideToggle();
      return false;
});

$(document).ready(function($){
    $('iframe[src*="youtube.com"]').each(function() {
        $(this).wrap("<div class='videowrapper'/>");
    });
});