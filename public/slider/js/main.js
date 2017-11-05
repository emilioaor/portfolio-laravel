var sliderControl = 1;
var timeToInvisible = 400;
var timeToVisible = 800;

function initSlider() {
	window.setInterval(changeImage, 5000);
}

function changeImage() {
	if (sliderControl == 1) {

		$("#slider-item1").animate({ opacity : "0" }, timeToInvisible);
		$("#slider-item2").animate({ opacity : "1" }, timeToVisible);

	} if (sliderControl == 2) {

		$("#slider-item2").animate({ opacity : "0" }, timeToInvisible);
		$("#slider-item3").animate({ opacity : "1" }, timeToVisible);

	} if (sliderControl == 3) {
		
		$("#slider-item3").animate({ opacity : "0" }, timeToInvisible);
		$("#slider-item4").animate({ opacity : "1" }, timeToVisible);

	} if (sliderControl == 4) {
		
		$("#slider-item4").animate({ opacity : "0" }, timeToInvisible);
		$("#slider-item1").animate({ opacity : "1" }, timeToVisible);
		sliderControl = 0;

	}

	sliderControl++;
}