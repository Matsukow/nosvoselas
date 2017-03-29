jQuery(function($){
	$('.nav-menu ul li a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
});
 
var animate = {
	'time': 500,
	'randMin': 1000,
	'randMax': 1200
};

