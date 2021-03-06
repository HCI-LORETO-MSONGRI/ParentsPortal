</!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title', 'LCM Parents Portal')</title>
	
	<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" >
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<input type="checkbox" id="check">

	<header>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>
		</label>
	<div class="left_area">
		<h2>Welcome to LCM <span>Parents' Portal</span></h2>
	</div>

	<div class="right_area">
		<a href="logout" class="logout_btn">Logout</a>
	</div>
</header>



<div class="sidebar py-3">
	@include('nav')
	
</div>

<div class="slide">
	@yield('content')
	
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	

	
   
</body>
</html>