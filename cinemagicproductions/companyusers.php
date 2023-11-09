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
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <title>CineMagic Productions - Where Cinematic Magic Comes to Life</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="header">
      <img src="images/logo2.png" alt="logo">
     <div class="header-right">
       <ul>
       <li><a href="index.php">Home</a></li>&nbsp;&nbsp;
	   <li><a href="about.php">About</a></li>
	   <li><a href="products.php">Products</a></li>
	   <li><a href="news.php">News</a></li>
       <li><a href="contact.php">Contacts</a></li>
       <li><a class="active" href="companyusers.php">Company Users</a></li>
        <?php
    if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
        // Display the "Users" link only if the user is logged in as admin
        echo '<li><a href="users.php">Users</a></li>';
    }
    ?>
         <?php echo $loginButton ?>
  
            </ul>
       </ul>
     </div>
   </div>

   <br>
   <br>
   <br>
   <br><br><br><br>
   <h3>list of users from the company : </h3>
   <div class="containerr-news">
        <!-- <img class="image" src="home_im.jpeg" alt="Image"> -->
        <div class="center-container" style="font-size :28px; color:white;">
   <?php
function curlRequest($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
$urlA = 'https://praneethreddypenugonda.000webhostapp.com/curl/userdata.php';
$dataA = curlRequest($urlA);
$urlB = 'https://abhinandu.000webhostapp.com/curl/userdata.php'; 
$dataB = curlRequest($urlB);
$urlC = 'https://maheedhar.000webhostapp.com/curl/userdata.php'; 
$dataC = curlRequest($urlC);

echo '<p>Data From company A</p>';
print_r($dataA);
echo '<p>Data From company B</p>';
print_r($dataB);
echo '<p>Data From company C</p>';
print_r($dataC);

?>
        </div>
   </div>
<br>
<br>
<br>
  <footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>CineMagic<span>Productions</span></h3>
 
		<!-- <p class="footer-links">
		<a href="index.html">Home</a>
		<a href="about.html">About</a>
		<a href="products.html">Products</a>
		<a href="news.html">News</a>
		<a href="contact.php">Contacts</a>
		</p> -->
 
		<p class="footer-company-name">CineMagicProductions &copy; 2023</p>
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
    
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>

  <script type="text/javascript">
  
  </script>
  </body>
  </html>