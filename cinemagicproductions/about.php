<?php

session_start();

// Check if$_SESSION["username"] the user is logged in (you can modify this logic based on your authentication system)
if (isset($_SESSION['username'])) {
    // User is logged in
    $welcomeMessage = $_SESSION['username'];
    $loginButton = '<a href="logout.php">Logout</a>';
} else {
    // User is not logged in
    $welcomeMessage = "";
    $loginButton = '<a href="login.html">Login</a>';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>About | CineMagic Productions</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link href="css/aboutpg.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
 		<img src="images/logo2.png" alt="logo">
		<div class="header-right">
			<ul>
				<li><a  href="index.php">Home</a></li>
				<li><a class="active" href="about.php">About</a></li>&nbsp;&nbsp;
				<li><a href="products.php">Products</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contacts</a></li>
				<li><a href="companyusers.php">Company Users</a></li>
				<?php
    if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
        // Display the "Users" link only if the user is logged in as admin
        echo '<li><a href="users.php">Users</a></li>';
    }
    ?>
         <?php echo $loginButton ?>
  
			</ul>
		</div>
	</div>
		<br>
	<div class="title">
		<h1>About Us</h1>
		<hr>
		<img class="banner" src="images/banner2.jpg" alt="banner about">
		<p>We, CineMagic Productions are a leading movie distribution organization in the market, We distribute a variety of movies from various productions to our worldwide users for affordable prices.</p>
	</div>
		<div class="imaged"><p class="paraone">Our Story</p><img src="images/ourstory.jpg" alt="our story"> <p class="paratwo">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
</p></div>
	
		<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>CineMagic<span>Productions</span></h3>
 
		<p class="footer-links">
		<a href="index.html">Home</a>
	·
		<a href="about.html">About</a>
	·
		<a href="contact.php">Contact</a>
		</p>
 
		<p class="footer-company-name">CineMagic Productions &copy; 2023</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>1 Washington Sq</span> San Jose, CA, USA</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+1 1111234567</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:contact@cinemagicproductions.com">contact@cinemagicproductions.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About the company</span>
	CineMagic Productions is a website to know about trending movies, tv-series  &amp; also you can stream the content you love from anywhere at anytime.
		</p>
 
		<div class="footer-icons">
 
		<a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
		<a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
		<a href="https://github.com"><i class="fa fa-github"></i></a>
 
		</div>
 
		</div>
 
		</footer>
</body>
</html>
