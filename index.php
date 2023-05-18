
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>My Shopping Website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">
		<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

		<!-- Stylesheets -->
		<!-- Dropdown Menu -->
		<link rel="stylesheet" href="css/superfish.css">
        <link rel="stylesheet" href="style.css">
		
		<!-- CS Select -->
		<link rel="stylesheet" href="css/cs-select.css">
		<link rel="stylesheet" href="css/cs-skin-border.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="redesign/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

		<!-- Themify Icons -->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- Flat Icon -->
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- Icomoon -->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">
		
		<!-- Style -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<div id="fh5co-header">
				<header id="fh5co-header-section">
					<div class="container">
						<div class="nav-header">
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
							<h1 id="fh5co-logo"><a href="index.html">Ajarbu Shop</a></h1>
							<nav id="fh5co-menu-wrap" role="navigation">
								<ul class="sf-menu" id="fh5co-primary-menu">
									<li><a class="active" href="index.html">Home</a></li>
									<li><a href="Main.html" class="fh5co-sub-ddown">Shop</a></li>
									<li><a href="exampleModalCenter1" data-toggle="modal" data-target="#exampleModalCenter1">Order</a></li>
									<li><a href="search_modal" data-toggle="modal" data-target="#search_modal">Check Cart</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>	
			</div>
			<!-- end:fh5co-header -->

  
			<!-- Modal -->
			<div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-labelledby="search_modalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="search_modalTitle">Check Reservation</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">

							<!--create two entry forms-->
							<form action="search_modal" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">Email Address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Last Name</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</form>
							<input class="btn btn-primary" type="button" onclick="location.href='reservation.html';" value="Search Reservation" />
						</div>
					</div>
				</div>
			</div>
			<!--Modal end -->

			<!--create a modal for registration-->
			<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Registration</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
						<form>

							<div class="form-row">
								<div class="form-group col-md-4">
								    <label for="inputFName">Given Name</label>
								    <input type="text" class="form-control" id="inputFName" name="inputFName">
								</div>
								
								<div class="form-group col-md-4">
								    <label for="inputFamName">Family Name</label>
								    <input type="text" class="form-control" id="inputFamName" name="inputFamName">
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail">Email Address</label>
								<input type="text" class="form-control" id="inputEmail">
							</div>
							
							<div class="form-group">
								<label for="inputNumberItem">Number of Item</label>
								<input type="number" class="form-control" id="inputNumberItem" name="inputNumberItem" placeholder="1" min="1" max="50">
							</div>
														
							<div class="form-group">
							<label for="inputProduct">Product</label>
							<select id="input" class="form-control" name="product">
								<option selected value="">Choose...</option>
								<option value="Hat - Beanie">Hat - Beanie</option>
								<option value="Hat - Bucket">Hat - Bucket</option>
								<option value="Hat - Top">Hat - Top</option>
                                <option value="Hoodie - Black">Hoodie - Black</option>
								<option value="Hoodie - White">Hoodie - White</option>
								<option value="Hoodie - Brown">Hoodie - Brown</option>
                                <option value="Women Black Shirt">Women Black Shirt</option>
								<option value="Women White Shirt">Women White Shirt</option>
								<option value="Women Brown Shirt">Women Brown Shirt</option>
                                <option value="Men Black Shirt">Men Black Shirt</option>
								<option value="Men White Shirt">Men White Shirt</option>
								<option value="Men Brown Shirt">Men Brown Shirt</option>
                                <option value="Luxe Hotel - Manila">Women Sport Shoes</option>
								<option value="Deluxe Hotel - Cebu">Women Sandals</option>
								<option value="King Hotel - Cagayan de Oro">Men Sport Shoes</option>
                                <option value="Luxe Hotel - Manila">Men Tic Tac Shoes</option>
							</select>
							</div>

							<div class="form-group">
								<label for="inputSize">Size</label>
								<select id="inputRoom" class="form-control" name="size">
									<option selected value="">Choose...</option>
									<option value="Small">Small</option>
									<option value="Medium">Medium</option>
									<option value="Large">Large</option>
									<option value="Extra Large">Extra Large</option>
								</select>
							</div>

							<button type="submit" class="btn">Confirm</button>
							</form>
					</div>	
				</div>	
				</div>
			</div>	


			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
					<li style="background-image: url(images/slider1.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<p><span>VOUGE</span></p>
										<h2>Style Within Reach</h2>
										<p>
											<a href="Main.html" class="btn">Order Now &#8594</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/slider2.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<p><span>CLASSIC</span></p>
										<h2>Redefine Your Fashion</h2>
										<p>
											<a href="Main.html" class="btn">Order Now &#8594</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/slider3.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<p><span>ELEGANCE</span></p>
										<h2>Choose Your Style</h2>
										<p>
											<a href="Main.html" class="btn">Order Now &#8594</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					
					</ul>
				</div>
			</aside>

			<footer>
					<p>&copy; 2023 My Shopping Website</p>
			</footer>

		</div>
		<!-- END fh5co-page -->

		</div>
		<!-- END fh5co-wrapper -->
		
		<!-- Javascripts -->
		<script src="js/jquery-2.1.4.min.js"></script>
		<!-- Dropdown Menu -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Counters -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Owl Slider -->
		<!-- // <script src="js/owl.carousel.min.js"></script> -->
		<!-- Date Picker -->
		<script src="js/bootstrap-datepicker.min.js"></script>
		<!-- CS Select -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>

		<script src="js/custom.js"></script>
        <script src="script.js"></script>
	</body>
</html>