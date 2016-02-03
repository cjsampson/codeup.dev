$(function(){
	$(".wrapper > div, nav").on('mouseover', function(){
		$(this).slideDown('slow', function(){
			$(this).toggleClass('highlight');
		});
	});
});


function isEven(n) {
  if (n == 0)
    return true;
  else if (n == 1)
    return false;
  else if (n < 0)
    return isEven(-n);
  else
    return isEven(n - 2);
}