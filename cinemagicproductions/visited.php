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
  <style>
        /* Style for the button */
        .clearCookies {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Style for the button on hover */
        .clearCookies:hover {
            background-color: #2580b3;
        }


    </style>
  </head>
  <body>

    <div class="header">
      <img src="images/logo2.png" alt="logo">
     <div class="header-right">
       <ul>
       <li><a href="index.php">Home</a></li>&nbsp;&nbsp;
	   <li><a href="about.php">About</a></li>
	   <li><a class="active" href="products.php">Products</a></li>
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
       </ul>
     </div>
   </div>

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   

   <a class="button-link" href='/cinemagicproductions/visited.php' style="color:white;  background-color: #3498db;  border-radius: 5px;  padding: 10px 20px">Last Visited Products</a>
    <a class="button-link" href='/cinemagicproductions/mostvisited.php' style="color:white;  background-color: #3498db;  border-radius: 5px;  padding: 10px 20px;">Most Visited Products</a>
    <br><br><br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="clearCookies" class="clearCookies">Clear All</button>
    </form>
   <h3>Recently searched movies : </h3>
   

   <?php
        if (isset($_POST['clearCookies'])) {
            setcookie('visitedProducts', '', time() - 3600, '/'); // Expire the cookie
            header('Location: ' . $_SERVER['PHP_SELF']); // Reload the page
            exit();
        }

$visitedProducts = isset($_COOKIE['visitedProducts']) ? explode('`', $_COOKIE['visitedProducts']) : [];

echo '<div style="display:inline-flex" >';
// Loop through the mocked product data and generate product cards
foreach ($visitedProducts as $productt) {
    $product= explode('~',$productt);

    if(isset($product[0]) && isset($product[1]) && isset($product[2]) && isset($product[3]) ){
        echo '<div style="display: inline-block; width: 190px; padding-right: 100px;">';
        echo '<a style="color:white" href="/cinemagicproductions/product.php?name='. $product[0] .'&img='. $product[3] .'&des='. $product[1] .'&imdb='. $product[2] .'">';
        echo '<div class="product-card" >';
        echo '<img src="' . urldecode($product[3]) . '" alt="Product Image" width="230" height="345">';
        echo '<h2 class="product-title">' . $product[0] . '</h2>';
        echo  '<a class ="button-link" style="color:white;  background-color: #3498db;  border-radius: 5px;  padding: 10px 20px;" href="'. $product[2]. '">IMDB</a>';
        // echo '<p class="product-price">$' . $product[2] . '</p>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }

}
echo '</div>';
?>
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