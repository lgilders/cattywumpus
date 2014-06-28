$(document).ready(function() {

	var carousel = $('#carousel ul');

	var resetList = function(){
		// This code runs after the animation completes
		$(this).find("li:last").after($(this).find("li:first"));
		// Now we've taken out the left-most list item, reset the margin
		$(this).css({marginLeft:0});
	};

	var animationFunc = function() {
		carousel.animate({
			marginLeft: -300
		}, 1000, resetList);
	};

	carousel.each(function() {
		setInterval(animationFunc, 5000);
	});
});