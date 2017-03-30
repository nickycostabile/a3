<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title', 'Assignment 3: Laravel | N. Costabile')
	</title>

	<link href="{{ URL::asset('css/stylesheet.css') }}" type="text/css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	@stack('head')

</head>
<body>

	<section>
		@yield('content')
	</section>

	@stack('body')
	
</body>
</html>