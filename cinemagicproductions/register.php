<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login | CineMagic Productions</title>
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
				<li><a  href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>&nbsp;&nbsp;
				<li><a href="products.html">Products</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contacts</a></li>
                <li><a class="active" href="register.php">register</a></li>
			</ul>
		</div>
	</div>
		<br>
	<div class="title" style="position:relative;padding-top:70px">
		<h1>Register</h1>
        <form action="authenticateRegister.php" method="post" class="align" style="position:relative;left:42%;color:white;padding-bottom: 110px;">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <br>
            <p>Do you have an account? <a style="color: grey" href="login.html">login here</a></p>

            <input type="submit" value="Register" class="btn btn-primary">
        </form>
	</div>
	<br>
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
