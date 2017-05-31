<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Google Font Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

    <!-- Personalized Stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
	
	<div class="col-xs-12 navbar">
		<div class="col-xs-1">
			<a href="/">Home</a>
		</div>		

		<div class="col-xs-1">
			<a href="/">Test</a>
		</div>
	</div>

	@yield('content')


	<!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/788edc112b.js"></script>

    <!-- Personalized Scripts -->
    <script src="/js/main.js"></script>
</body>
</html>