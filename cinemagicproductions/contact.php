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
<title>Contact | CineMagic Productions</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link href="css/contactpg.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<script src="js/contactform.js" type="text/javascript"></script>
</head>

<body>
	<div class="header">
 		<img src="images/logo2.png" alt="logo">
		<div class="header-right">
			<ul>
			<li><a class="active" href="index.php">Home</a></li>
	   <li><a href="about.php">About</a></li>
	   <li><a href="products.php">Products</a></li>
	   <li><a href="news.php">News</a></li>
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
		<h1>Contacts</h1>
		<hr>
		<img class="banner" src="images/banner1.jpg" alt="banner contact">
	</div>
	<div class="containerr"
        style="background-image: url('back.jpg');  background-repeat: no-repeat;background-size: cover;">
        <div class="center-container" style="color:white">
            <h1>Our Company Contacts:</h1>
            <?php
            //Retrieve contact information from text doc
            $contacts = file("contacts.txt", FILE_IGNORE_NEW_LINES);
            if ($contacts === false) {
                echo "Error reading file.";
            } else {
                echo "<ul>";
                foreach ($contacts as $contact) {
                    list($name, $email, $role) = explode(", ", $contact);
                    echo "<li><strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Role:</strong> $role </li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
	</div>
	
	<div class="scontainer">
		<div class="sname"><p>Find Us On:</p></div>
		<div class="social-container">
        <a href="https://instagram.com"><i class="fb fa fa-instagram">&nbsp;Instagram</i></a>
        <a href="https://twitter.com"><i class="fb fa fa-twitter">&nbsp;Twitter</i></a>
        <a href="https://facebook.com"><i class="fb fa fa-facebook">&nbsp;Facebook</i></a>
		<a href="https://pinterest.com"><i class="fb fa fa-pinterest">&nbsp;Pinterest</i></a>
		<a href="https://linkedin.com"><i class="fb fa fa-linkedin">&nbsp;Linkedin</i></a>
		<a href="https://tumblr.com"><i class="fb fa fa-tumblr">&nbsp;Tumblr</i></a>
</div>
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
 
		<p class="footer-company-name">cinemagicproductions &copy; 2023</p>
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
