var dance = {
	  		moves : ["mashed potato", 'monster mash', 'detroit pimp', 'heel click'],
	  		dancers : ['michael jackson', 'ryan orsinger', 'james brown'],
	  		tempo : "150 bpm",

	  		performance: function() {
	  			return this.getRandomDancer() + " does the " + this.getRandomMove() + " at " + this.tempo + "!";
	  		},

	  		getRandomDancer: function() {
	  			var random_dancer_index = Math.floor(Math.random() * this.dancers.length);
	  			return this.dancers[random_dancer_index];
	  		},

	  		getRandomMove : function() {
	  			var random_move_index = Math.floor(Math.random() * this.moves.length);
	  			return this.moves[random_move_index];
	  		},

	  		setTempo: function() {
	  			var new_tempo = prompt('How many beats per minute(bpm)?');
	  			console.log(new_tempo);

	  			if (new_tempo != null) {
	  				new_tempo = new_tempo.trim();
	  			}

	  			while (new_tempo == null || new_tempo == "" || isNaN(new_tempo)) {
	  				new_tempo = prompt("Please enter a valid bpm value.");

	  				if (new_tempo != null) {
		  				new_tempo = new_tempo.trim();
		  			}
		  			console.log(new_tempo);
	  			}

	  			this.tempo = new_tempo + " bpm";
	  			alert("New tempo set to " + this.tempo);
	  		}
	  	}

	  	console.log( dance.performance() );

	  	dance.setTempo();

	  	console.log( dance.performance() );