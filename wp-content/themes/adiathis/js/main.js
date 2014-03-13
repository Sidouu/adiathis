// MAIN MENU
$(function() {
	$('#nav li a').on('click', function () {
		$('#nav li a').removeClass('active');
		$(this).addClass('active');
	});
});
$(function() {
    $("#nav li a").each(function() {   
	    if (this.href == window.location.href) {
	        $(this).addClass("active");
	    }
	});
});