<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="root">
		<input type="text" id="input" v-model="message">
		<p>The value of the input is {{message}}</p>
	</div>
	<script src="https://unpkg.com/vue"></script>
	<script type="text/javascript">
		new Vue({
			el : '#root',
			data : {
				message : 'Hello World!'
			}

		});
	</script>
</body>


</html>