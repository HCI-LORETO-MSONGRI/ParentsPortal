</!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LCM Parents' Portal</title>

	

	
	<link rel="stylesheet" href="style.css">
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

<div class="sidebar">
	<center>
		<img src="lcmlogo.jpg" class="profile_image" alt="">
		<h4>Welcome Parent</h4>
	</center>
	<a href="home"><i class="fas fa-home"><span>Home</span></i></a>
	<a href="report"><i class="fas fa-trophy"><span>Progress Report</span></i></a>
	<a href="feeStructure"><i class="fas fa-file-pdf"><span>Fee Structure</span></i></a>
	<a href="feeStatement"><i class="fas fa-money-bill-alt"><span>Fee Statement</span></i></a>
	
</div>

<div class="container">
	@yield('content')
	
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	

	
   
</body>
</html>