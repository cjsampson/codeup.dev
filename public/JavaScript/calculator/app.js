(function (){

	// Input Window Buttons
	var leftWindow = document.getElementById('leftWindow');
	var centerWindow = document.getElementById('centerWindow');
	var rightWindow = document.getElementById('rightWindow');

	// Numerical Buttons
	var numButtons = document.getElementsByClassName('numberButton');

	// Clear and Equal Buttons
	var clearButton = document.getElementById("C");
	var equalsButton = document.querySelector("[data-button='=']");
	
	// Operational Buttons
	var operators = document.getElementsByClassName("operator");

	// Window Initial State
	leftWindow.value = '';
	centerWindow.value = '';
	rightWindow.value = '';

	// Attach Event Listener to Numbers
	function onNumberButtonClick(){
		if((leftWindow.value > 0) && (centerWindow.value != '')) {
			rightWindow.value += this.innerHTML;
		} else {
			leftWindow.value += this.innerHTML;
		}
	}

	// Attach Event Listener to Operators
	function onOperatorClick(){
		centerWindow.value = this.innerHTML;
	}

	// Left Window Value Function
	function attachListener(){
		for(var i = 0; i < numButtons.length; i++) {
			numButtons[i].addEventListener('click', onNumberButtonClick);
		}
	}

	// Middle Input Window for operation
	function operatorEventListener(){
		for(var i = 0; i < operators.length; i++) {
			operators[i].addEventListener('click', onOperatorClick);				
		}
	}

	function equalsButtonListener() {
		equalsButton.addEventListener('click', evaluate);
	}

	// Clear Current Window
	function clearAll(){
		clearButton.addEventListener('click', function(){
			if(leftWindow.value != '' && centerWindow.value != '' && rightWindow.value != '') {
				rightWindow.value = '';
			} 
			if (leftWindow.value != '' && centerWindow.value != '') {
				centerWindow.value = '';
			}
			if (rightWindow.value != '') {
				rightWindow.value = '';
			}
		});
	}

	// Evaluate the Three Windows
	function evaluate() {
		if((leftWindow.value > 0) && (centerWindow.value !== '') && (rightWindow.value > 0)) {
			if(centerWindow.value === '+'){
				rightWindow.value = parseInt(leftWindow.value) + parseInt(rightWindow.value);
			} 
		    if (centerWindow.value === '-'){
				rightWindow.value = leftWindow.value - rightWindow.value; 
			}
			if(centerWindow.value === 'x'){
				rightWindow.value = leftWindow.value * rightWindow.value; 
			}
			if(centerWindow.value === '/'){
				rightWindow.value = leftWindow.value / rightWindow.value; 
			}
		leftWindow.value = '';
		centerWindow.value = '';
		}
	}


	// Function Calls
	attachListener();
	clearAll();
	operatorEventListener();
	equalsButtonListener();

})();











