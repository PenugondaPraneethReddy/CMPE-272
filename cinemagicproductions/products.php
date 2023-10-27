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
       <li><a class="active" href="index.php">Home</a></li>&nbsp;&nbsp;
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
       </ul>
     </div>
   </div>

  <div class="align">
  <div class="single-item">

    <div>
	  <img src="images/4.jpg" alt="dark knight">
      <div class="mytitle"><a href="movie4.html">The Dark Knight  <i>(2008)</i></a></div>
	<div class="btn-trailer"><a href="https://www.youtube.com/watch?v=EXeTwQWrcwY">watch trailer</a></div>
    </div>

  </div></div>

	  <div class="movie-list">
		  
		  <h3>Our Products</h3>
	  	<div class="movie-img-container">
    		<img src="images/latest1.jpg" alt="l movie 1"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt4823776/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/latest2.jpg" alt="l movie 2"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt9419976/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/latest3.jpg" alt="l movie 3"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt5715066/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/latest4.jpg" alt="l movie 4"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt11457736/">View On IMDB</a>
		</div>
		  
	 
	  
	  
		  
		  
	  	<div class="movie-img-container">
    		<img src="images/trend1.jpg" alt="t movie 1"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt9204164/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/trend2.jpg" alt="t movie 2"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt11362734/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/trend3.jpg" alt="t movie 3"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt10298432/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/trend4.jpg" alt="t movie 4"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt9866072/">View On IMDB</a>
		</div>
		 
		  
	  
	  
	  
		  
	
	  	<div class="movie-img-container">
    		<img src="images/up1.jpg" alt="u movie 1"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt5433138/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/up2.jpg" alt="u movie 2"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt7126948/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/up3.jpg" alt="u movie 3"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt3480822/">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/up4.jpg" alt="u movie 4"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt1877830/">View On IMDB</a>
		</div>
		 
		  
	  </div>
  <footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>CineMagic<span>Productions</span></h3>
 
		<p class="footer-links">
		<a href="index.html">Home</a>
		<a href="about.html">About</a>
		<a href="products.html">Products</a>
		<a href="news.html">News</a>
		<a href="contact.php">Contacts</a>
		</p>
 
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
    $('.single-item').slick({
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      fade: true,
  });
  </script>
  </body>
  </html>