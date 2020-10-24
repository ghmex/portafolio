<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="google-site-verification" content="tzYJXqnN2YjwuqzJaB8S2BmV9YOLQY6WfF5d50Ct9o4" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
	<header>
		<?php
		include_once 'navbar.php';
		?>
	</header>
	<div class="container-fluid text-center">
		<div class="row justify-content-center" id="home-content">
			<div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 col-12">
				<p>Hola! mi nombre es <strong><u>Maximiliano</u></strong>, soy desarrollador full stack.&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fas fa-search"></i></p>
				<a href="portfolio.php">MIRÁ MI TRABAJO!</a>
			</div>
		</div>
	</div>
	<?php
		include_once 'footer.php';
	?>
	<script>
		$(function() {
			//alert("esta funcionando jquery");
			//$("body").css("background-color", "#1abc9c");
		});
	</script>
</body>

</html>