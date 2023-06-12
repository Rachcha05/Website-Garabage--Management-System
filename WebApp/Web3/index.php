<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- Preloader Start  -->
  <div class="preloader">
     <div class="loader">
     </div>
  </div>
  <!-- Preloader End  -->
 
 <!-- Header Start -->
 <header class="header">
 	<div class="container">
 		<div class="row justify-content-between align-items-center">
 			<div class="brand-name">
                 <?php if (isset($user)): ?>
                    <a href="#">Hello <?= htmlspecialchars($user["name"]) ?></a>
                <?php else: ?>
                    <a href="#">MIT 2023</a>
                <?php endif; ?>
 			</div>
      <div class="nav-toggle">
        <span></span>
      </div>
 			<nav class="nav">
 				<ul>
 					<li><a href="#home">Home</a></li>
 					<li><a href="#about">About</a></li>
 					<li><a href="#services">Services</a></li>
 					<li><a href="#works">Works</a></li>
 					<li><a href="#contact">Contact</a></li>
                     <?php if (isset($user)): ?>
                        <li><a href="logout.php">Log out</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Log in</a></li>
                        <li><a href="signup.html">sign up</a></li>
                    <?php endif; ?>
 				</ul>
 			</nav>
 		</div>
 	</div>
 </header>
 <!-- Header End -->

 <!-- Home Section Start -->
 <section class="home-section" id="home">
 	<!-- shape -->
 	<div class="shape-01">
 	</div>
 	<div class="container">
 		<div class="row align-items-center">
 			<div class="home-content">
 				<h4>We are WasteLance</h4>
 				<h1>Waste Collectors</h1>
 			</div>
 		</div>
 	</div>
 	<!-- scroll down -->
 	<a href="#about" class="scroll-down">
 		<img src="img/icons/arrow-down.svg" alt="scroll Down">
 	</a>
 </section>
 <!-- Home Section End -->

 <!-- About Section Start -->
 <section class="about-section" id="about">
 	<div class="container">
 		<div class="row">
 			<div class="about-img">
 				<div class="img-box">
 					<div class="shape-02">
 					</div>
 					<img src="img\truck.jpg" alt="about me">
 				</div>
 			</div>
 			<div class="about-content">
 			   <div class="row">
                 <div class="section-title">
               	   <h1>About Us</h1>
                 </div>
               </div>
			   <div id="demo">
  <p>Discover our garbage collection services and keep your environment clean with our reliable and efficient team of collectors</p>
  <button type="button" onclick="loadDoc()"> For More details</button>
</div>

               <div class="stats">
               	  <div class="row">
               	  	 <div class="stat-box">
               	  	 	<h2>15</h2>
               	  	 	<h5>Awards Won</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>50</h2>
               	  	 	<h5>Projects Done</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>45</h2>
               	  	 	<h5>Happy Clients</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>5000</h2>
               	  	 	<h5>All collection</h5>
               	  	 </div>
               	  </div>
               </div>
               <!-- contact btn -->
               <a href="#" class="btn btn-01">Contact us</a>

 			</div>
 		</div>
 	</div>
 </section>
 <!-- About Section End -->

 <!-- Service Section Start -->
 <section class="service-section" id="services">
 	<div class="container">
 		<div class="row">
 			<div class="section-title">
 				<h1>What we collect?</h1>
 			</div>
 		</div>
 		<div class="row">
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img\organic.jpg" alt="service">
 					<div class="overlay">
 						<h4>Organic Waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img\glass.jpg" alt="service">
 					<div class="overlay">
 						<h4>Glass Waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img\e-waste.jpg" alt="service">
 					<div class="overlay">
 						<h4>e-waste </h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img\paper.jpg" alt="service">
 					<div class="overlay">
 						<h4>Paper waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img\plastic.jpg" alt="service">
 					<div class="overlay">
 						<h4>Plastic Waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img\metal.jpg" alt="service">
 					<div class="overlay">
 						<h4>Metal waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 		</div>
 	</div>
 </section>
 <!-- Service Section End -->

 <!-- Work Section Start -->
 <section class="work-section" id="works">
 	<div class="container">
 		<div class="row">
 			<div class="section-title">
 				<h1>Our Works</h1>
 			</div>
 		</div>
 		<div class="row">
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img\Sweep1.jpg" data-large="img/works/large/1.jpg" alt="work">
 					<div class="overlay">
 						<h4>Sweep Road</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img\road clean.jpg" data-large="img/works/large/2.jpg" alt="work">
 					<div class="overlay">
 						<h4>Clean Road</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img\water.jpg" data-large="img/works/large/3.jpg" alt="work">
 					<div class="overlay">
 						<h4>Clean water</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img\dispose.jpg" data-large="img/works/large/4.jpg" alt="work">
 					<div class="overlay">
 						<h4>Dispose waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img\export.jpg" data-large="img/works/large/5.jpg" alt="work">
 					<div class="overlay">
 						<h4>Export Waste</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img\re (1).jpg" data-large="img/works/large/6.jpg" alt="work">
 					<div class="overlay">
 						<h4>Recycle</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 		</div>
 	</div>
 </section>
 <!-- Work Section End --> 


<!-- Contact Section Start -->
<section class="contact-section" id="contact">
	<div class="container">
		<div class="row">
			<div class="contact-img">
				<div class="img-box">
					<div class="section-title">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
        	<div class="contact-form">
        		<form class="form">
        			<div class="row">
        				<div class="left input-group">
        					<label>Name</label>
        					<input type="text" placeholder="Your Name Here" class="input-control">
        				</div>
        				<div class="right input-group">
        					<label>Email or Phone</label>
        					<input type="text" placeholder="Your Email or Phone Here" class="input-control">
        				</div>
        			</div>
        			<div class="row">
        				<div class="input-group">
        					<label>Message</label>
        					<textarea class="input-control" placeholder="Your Message Here"></textarea>
        				</div>
        			</div>
        			<div class="form-btn">
        				<button type="button" class="btn btn-01">Send Message</button>
        			</div>
        		</form>
        	</div>
        </div>
        <div class="row">
        	<div class="contact-info">
        		<div class="row">
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Address</h5>
        				<p>268,Dalugama,kelaniya</p>
        			</div>
        			<!-- info item end -->
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Phone</h5>
        				<p>0767676895</p>
        			</div>
        			<!-- info item end -->
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Email</h5>
        				<p>racshan@gmail.com</p>
        			</div>
        			<!-- info item end -->
        		</div>
        	</div>
        </div>

        <div class="row">
        	<div class="social-links">
        		<a href="#" title="facebook"><img src="img/icons/facebook.svg" alt="facebook"></a>
        		<a href="#" title="twitter"><img src="img/icons/twitter.svg" alt="twitter"></a>
        		<a href="#" title="linkedin"><img src="img/icons/linkedin.svg" alt="linkedin"></a>
        		<a href="#" title="instagram"><img src="img/icons/instagram.svg" alt="instagram"></a>
        	</div>
        </div>

	</div>
</section>
<!-- Contact Section End -->

<!-- copyright text -->
<p class="copyright">&copy; 2020 The WasteLance</p>


 <!-- lightbox start -->
<div class="lightbox">
  <div class="img-box">
    <div class="lightbox-close">&times;</div>
    <img src="img/works/large/2.jpg" class="lightbox-img" alt="img">
    <div class="lightbox-caption">
      <div class="lightbox-category">
        
      </div>
      <div class="lightbox-counter">
        
      </div>
    </div>
    <div class="lightbox-controls">
      <div class="prev">
        <img src="img/icons/prev.svg" alt="prev">
            </div>
            <div class="next">
              <img src="img/icons/next.svg" alt="next">
            </div>
    </div>
  </div>
</div>
<!-- lightbox end -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>

	<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax1_info.txt");
  xhttp.send();
}
</script>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    