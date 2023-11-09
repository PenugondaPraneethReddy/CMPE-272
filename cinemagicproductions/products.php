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
	   <li><a class="active" href="products.php">Products</a></li>
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
   
   <h3>Our Products</h3>

  <?php
$json_data = '{
  "movies": [
    {
      "title": "The SpongeBob Movie",
      "image_src": "images/latest1.jpg",
      "imdb_link": "https://www.imdb.com/title/tt4823776/",
	  "desc":"After SpongeBobs beloved pet snail Gary is snail-napped, he and Patrick embark on an epic adventure to The Lost City of Atlantic City to bring Gary home."
    },
    {
      "title": "Triggered",
      "image_src": "images/latest2.jpg",
      "imdb_link": "https://www.imdb.com/title/tt9419976/",
	  "desc":"Nine high school friends have a five-year reunion camping in a forest. They all have secrets. An unknown person straps a time bomb to each of them. Killing another gives one their time. Last one lives."
    },
    {
      "title": "Mortal",
      "image_src": "images/latest3.jpg",
      "imdb_link": "https://www.imdb.com/title/tt5715066/",
	  "desc":"Fantasy adventure origin story about a young man discovering he has god-like powers based on ancient Norse mythology."
    },
    {
      "title": "My Dads Christmas Date",
      "image_src": "images/latest4.jpg",
      "imdb_link": "https://www.imdb.com/title/tt11457736/",
	  "desc":"A 16-year-old tries to play matchmaker for her widowed father during Christmastime."
    },
    {
      "title": "Bigfoot Family",
      "image_src": "images/trend1.jpg",
      "imdb_link": "https://www.imdb.com/title/tt9204164/",
	  "desc":"Follow up to Son of Bigfoot: Father uses his new fame to fight against an Alaska oil company but when he disappears the son, the mother, a raccoon and a bear head North to rescue him."
    },
    {
      "title": "What Goes Around",
      "image_src": "images/trend2.jpg",
      "imdb_link": "https://www.imdb.com/title/tt11362734/",
	  "desc":"A timid college student discovers that her crush could be a notorious serial killer."
    },
    {
      "title": "Romance Retreat",
      "image_src": "images/trend3.jpg",
      "imdb_link": "https://www.imdb.com/title/tt10298432/",
	  "desc":"After a breakup, ambitious journalist Dana escapes the coverage of a massive scandal, only to find the tech guru at the center of the scandal at her retreat. As she falls for him, she has to choose between her career or her heart."
    },
    {
      "title": "Holidate",
      "image_src": "images/trend4.jpg",
      "imdb_link": "https://www.imdb.com/title/tt9866072/",
	  "desc":"Fed up with being single on holidays, two strangers agree to be each others platonic plus-ones all year long, only to catch real feelings along the way."
    },
    {
      "title": "F9: The Fast Saga",
      "image_src": "images/up1.jpg",
      "imdb_link": "https://www.imdb.com/title/tt5433138/",
	  "desc":"Dom and the crew must take on an international terrorist who turns out to be Dom and Mias estranged brother."
    },
    {
      "title": "Wonder Woman 1984",
      "image_src": "images/up2.jpg",
      "imdb_link": "https://www.imdb.com/title/tt7126948/",
	  "desc":"Diana must contend with a work colleague, and with a businessman whose desire for extreme wealth sends the world down a path of destruction, after an ancient artifact that grants wishes goes missing."
    },
    {
      "title": "Black Widow",
      "image_src": "images/up3.jpg",
      "imdb_link": "https://www.imdb.com/title/tt3480822/",
	  "desc":"Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises."
    },
    {
      "title": "The Batman",
      "image_src": "images/up4.jpg",
      "imdb_link": "https://www.imdb.com/title/tt1877830/",
	  "desc":"When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the citys hidden corruption and question his familys involvement."
    }
  ]
}';

$movies = json_decode($json_data, true)['movies'];

foreach ($movies as $movie) {
	echo '<a style="color:white" href="/cinemagicproductions/product.php?name='. $movie['title'] .'&img='. $movie['image_src'] .'&des='. $movie['desc'] .'&imdb='. $movie['imdb_link'] .'">';
    echo '<div class="movie-img-container">';
    echo '<img src="' . $movie['image_src'] . '" alt="' . $movie['title'] . '"/>';
    echo '</div>';
	echo '</a>';
}
?>

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