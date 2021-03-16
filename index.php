<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reserve Bank</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
	<!--Start of home section-->
	<div id="home">
  <!--Navigation-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand"href="index.php">RESERVE BANK</a>
		<button class="navbar-toggler"type="button"data-toggle="collapse"data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
		</button>
   <div class="collapse navbar-collapse"id="navbarResponsive">
		 <ul class="navbar-nav ml-auto">
     <li class="nav-item">
			 <a class="nav-link"href="index.php">Home</a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link"href="https://www.thesparksfoundationsingapore.org/">About Us</a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link"href="#Contact">Contact</a>
		 </li>
		 </ul>
	 </div>
	</nav>
	<!--Start Image Slider-->
	<div id="carouselExampleIndicators"class="carousel slide"data-ride="carousel"data-interval="7000">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0"class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"</li>
		</ol>
		<div class="carousel-inner"role="listbox">
			<div class="carousel-item active"style="background-image: url('img/bank1.jpg');">
				<div class="carousel-caption text-center">
					<h5 style="color:white;">Welcome to Reserve Bank of India</h5>
				  <br>
					<br>
				<!--	<a class="btn btn-outline-light btn-lg" href="#contact">Get Started</a>-->
				</div>
		</div>
			<div class="carousel-item"style="background-image: url('img/computers-2.png');"></div>
				<div class="carousel-item"style="background-image: url('img/computers-3.png');"></div>
				<a class="carousel-control-prev"href="#carouselExampleIndicators" role="button"data-slide="prev">
        <span class="carousel-control-prev-icon"aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next"href="#carouselExampleIndicators" role="button"data-slide="next">
        <span class="carousel-control-next-icon"aria-hidden="true"></span>
				</a>
	</div>
</div>
<section class="services" class="offset">
                <h2 id="services1"></h2>
                <!--heading  -->
                <div class="s-heading">
                        <h1 >OU<font color="#d75d47">R SERVI</font>CES</h1 >
                        <p>We provide the best in class services for our customers.</p>
                </div>
                <!--Service box container-->
                <div class="s-box-container">
                        <!--box-1--------->
                        <div class="s-box">
                                <!--top bar -->
                                <div class="bar"></div>
                                <!----img----->
                                <img src ="target.png" alt="1">
                                <!--service name----->
                                <h1>View users</h1>
                                <!--details-->
                                <p>A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.Our customer family</p>
                                <!--btn-->
                                <a href="view_user.php" class="s-btn" >View</a>
                        </div>
                         <!--box-2--------->
                         <div class="s-box">
                                <!--top bar -->
                                <div class="bar"></div>
                                <!----img----->
                                <img src ="lending.png" alt="2">
                                <!--service name----->
                                <h1>Transfer Money</h1>
                                <!--details-->
                                <p>Money Transfer made easier.Simple Smarter and Fast.NOw connect with your dear ones easily</p>
                                <!--btn-->
                                <a href="moneytransfer.php" class="s-btn" >View</a>
                        </div>
                         <!--box-3--------->
                         <div class="s-box">
                                <!--top bar -->
                                <div class="bar"></div>
                                <!----img----->
                                <img src ="transaction.png" alt="3">
                                <!--service name----->
                                <h1>Transactions</h1>
                                <!--details-->
                                <p>A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.Our customer family</p>
                                <!--btn-->
                                  <a href="transactionhistory.php" class="s-btn" >View</a>
                        </div>
                </div>
							</section>

<div id="Contact" class="offset">
	<footer>
		<div class="row justify-content-center">
			<div class="col-md-5 text-center">
				<p style="text-align:center">RESERVE BANK</p>
				<p>We provide 24/7 service</p>
				<strong>Contact Info</strong>
				<p>(888) 888-8888
					<br>
					reserve@gmail.com</p>
					<a href=""target="_blank"><i class="fab fa-facebook-square"></i></a>
					<a href=""target="_blank"><i class="fab fa-twitter-square"></i></a>
					<a href=""target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
			<hr class="socket">
			&copy; Reserve Bank.
		</div>
	</footer>
</div>
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
