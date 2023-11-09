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
<title>News | CineMagic Productions</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link href="css/news.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
 		<img src="images/logo2.png" alt="logo">
		<div class="header-right">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>&nbsp;&nbsp;
				<li><a href="products.php">Products</a></li>
				<li><a class="active"  href="news.php">News</a></li>
				<li><a href="contact.php">Contacts</a></li>
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
		<h1>Latest News</h1>
		<hr>
		<img class="banner" src="images/banner2.jpg" alt="banner about">
		    <h2>1. Exciting New Film Release!</h2>
            <p>Introducing our latest blockbuster, "Infinite Adventures"! This action-packed adventure is sure to keep you on the edge of your seat. Get ready for an adrenaline-pumping experience like never before.</p>
            <p class="date">Posted on September 15, 2023</p>
            <h2>2. Award-Winning Director Joins CineMagic Productions</h2>
            <p>We're honored to welcome acclaimed director Jane Doe to the CineMagic family. With a string of successful films under her belt, we're excited to see what magic she'll bring to our upcoming projects.</p>
            <p class="date">Posted on September 22, 2023</p>
            <h2>3. Exploring New Horizons: CineMagic Expands to International Markets</h2>
            <p>CineMagic Productions is excited to announce our expansion into international markets. We're committed to bringing our unique brand of storytelling to audiences worldwide.</p>
            <p class="date">Posted on September 8, 2023</p>
            <h2>4. Behind the Scenes: Creating Movie Magic</h2>
            <p>Go behind the scenes and discover the creative process that brought our latest film to life. From scriptwriting to special effects, get an exclusive look at the magic that happens off-screen.</p>
            <p class="date">Posted on August 28, 2023</p>
	</div>
	
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
