
$(window).on("load", function() {
	$("#loading").css('display', 'none');

	if (screen.width > 767) initSlider();
});

$(window).on("scroll", function() {
	animateNavBar();
});

function goTo(id) {
	var posicion = $(id).offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
}

function animateNavBar() {
	if ($(window).scrollTop() > 200) {
		$("#navbar").css('display', 'block');
	} else {
		$("#navbar").css('display', 'none');
	}
}

var collapsed = false;
function handleCollapse() 
{
	if (collapsed) {
		$('#items-collapse').removeClass('in');
	} else {
		$('#items-collapse').addClass('in');
	}

	collapsed = ! collapsed;
}