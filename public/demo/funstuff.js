$.fn.lifeclock = function() {
	this.css("background", "green");
	this.timerDisplay = this.find(".timerDisplay");
	this.timerDisplay.css("color", "white");

	this.timerValue = 0;
	this.lcTimerInteral = null;
	this.birthDate = "";

	this.setTimer = function(seconds) {
		this.timerValue = seconds;
		this.timerDisplay.html(seconds);

		return this;
	}
	this.getTimerDisplay = function(totalSec) {
		var timerDisplayStr = "";

		var years = parseInt(totalSec / 60 / 60 / 24 / 365);
		var days = parseInt( totalSec / 60 / 60 / 24) % 365;

		var hours = parseInt( totalSec / 3600) % 24;
		var minutes = parstInt( totalSec / 60) % 60;
		var seconds = totalSec = totalSec % 60;

		if (hours < 10) {
			hours = "0" + hours;
		}
		if (minutes < 10) {
			minutes = "0" + minutes; 
		}
	}
}