var words = ['apple', 'garage', 'house', 'computer', 'programming'];


function getRandom() {
	return words[Math.floor(Math.random() * words.length)];
}

var randomWord = getRandom(words).split('');
// console.log(randomWord);

for(var i = 0; i < randomWord.length; i++) {
	$('.hiddenWord').each(function(index){
		console.log(index)
		$(this).append('<span>' + randomWord[i] + '</span>');
	});
};



$('button').on('click', function() {
	
	for(var i = 0; i < randomWord.length; i++) {
		if(randomWord[i] == $(this).html()) {
			$(this).html()
		}
	}
	$(this).attr('disabled', 'disabled');
	return $(this).html() ;
 });
// for(var i = 0; i < randomWord.length; i++) {
// 	if( randomWord[i] == )
// }






