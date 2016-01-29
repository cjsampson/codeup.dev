$(function(){
	$(".wrapper > div").on('mouseover', function(){
		$(this).slideDown('slow', function(){
			$(this).toggleClass('highlight');
		});
	});
});