<!DOCTYPE html>
<html>
<head>
	<title>Basic App</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
@include('inc.navbar')

 <div class="container">
	<div class="row">
		<div class="col-md-8">
			@yield('content')
		</div>
		<div class="col-md-4">
			@include('inc.sidebar')
			<p>this is some text</p>

		</div>
	</div>
</div>

</body>
</html>