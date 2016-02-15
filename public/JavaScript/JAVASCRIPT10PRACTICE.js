<script>

// Number 1
function max(a, b) {
	if(a > b)
		return a
	if(b > a)
		return b
	if(a == b)
		console.log("Same value")
		return a
}

// Number 2 
function maxOfThree(a, b, c) {
	if(a > b && a > c)
		return a
	if(b > a && b > c)
		return b
	if(c > a && c > b)
		return c
}

// Number 3
function isCharAVowel(letter) {
	letter.toLowerCase();
	if(letter == "a" || letter== "e" || letter == "i" || letter == "o" || letter == "u") {
		return true;
	}
	else {
		return false;
	}
}

// Number 4
// Double ever consonant and place "o" in between translate("this is fun") should return ("tothohisos isos fofunon")

//First, push current index into the new array container
//Then, if check if its a vowel, it not, add an 'o' and the current index
//The if check needs to be modified for whitespace so you dont get a false value.
function translate(word) {
	var count = 0;
	var wordToArray = word.toLowerCase().split('');
	var newWordArray = [];
	for(var i = 0; i < wordToArray.length; i++) {
		 count++;
	}
}

// Array.prototype.insert = function(index, item) {
// 	this.splice(index, 0, item);
// }

// Number 8
function findLongestWord(array, a, b) {
	for (var i = 0; i < array.length; i++) {
		a = array[i];
		b = array[i + 1];
	}
}

// Number 9
function filterLongWords(array, number) {
	if (array.length < 1) {
		console.log("Enter an array with more than one word");
		return false;
	}
	if(array.length > number) {
		return array;
	}
}

//Number 10
function charFreq(str, letter) {
	var count = 0;
	str.toLowerCase();
	letter.toLowerCase();
	for(var i = 0; i < str.length; i++) {
		if (str[i] == letter)
			count++
	}
	return count;
}

</script>