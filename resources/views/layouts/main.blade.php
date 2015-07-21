<html>

	<head>
		<title>Our Todo Application</title>
		<link rel="stylesheet" href="/css/style.css">
			<style>
				body {
	font-family: Helvetica, Arial, sans-serif;
	font-size: 15px;
	padding: 20px 0;
	background: #elelel;
}

.container {
	width: 60%;
	max-width: 300px;
	margin: 0 auto;
	background: #ffffff;
	border: 1px solid #cccccc;
	padding: 20px;
	border-radius: 4px;
	box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
			</style>
	</head>

	<body>
		<div class="container">
			@yield('content')
		</div>

	</body>
</html>