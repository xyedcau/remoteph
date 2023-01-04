<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		.asd{
			display: block;
			margin: 50px auto;
		}
	</style>
</head>
<body>
	<div style="width: 100%; text-align: center">
		<form action="{{url('/adder')}}" method="post">
			<button class="asd">Click Me!</button>
		</form>
		<span style="font-weight: bold;">click {{isset($adder) ? $adder->click: 0}} times today</span>
	</div>

	<script>
		
	</script>
</body>
</html>