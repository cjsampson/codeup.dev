<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	
	<div id="app">
		<form>
			<span class="error" v-show="!message">
				You must enter a message
			</span>

			<textarea v-model="message"></textarea>

			<button type="submit" v-show="message">
				Send Message
			</button>
		</form>

		<pre> {{ $data | json }}</pre>
	</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
<script>
	new Vue({
		el: '#app',

		data: {
			message: ''
		}
	});
</script>
</body>
</html>