$(function() {

	$(".navbar-toggle-sidebar").click(function () {
		$('body').toggleClass("slide-sidebar");
	});

	$('.dropdown-menu').on('click', function(e) {
	    if($(this).hasClass('dropdown-menu-form')) {
	        e.stopPropagation();
	    }
	});
});