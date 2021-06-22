<?php 
include('dbcon.php');

 ?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">   
	
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link href="css/searchs.css" rel="stylesheet" />
	<link href="css/fonts.googleapis.css" rel="stylesheet" />
	<link href="fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet" />


      </head>
      <style>
/*navbar css*/
	body {
		background-image:url(images/img26.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;


        }
        /*nav bar css begin*/
				.navbar{
			text-transform:uppercase;
			font-weight:700;
			font-size:1rem;
			letter-spacing:.1rem;
			background:rgba(0,0,0,0.6)!important;
			}
			.navbar-text{
			font-size:1rem;
			}
	/*nav bar css end*/



/* sloding image css begin */
			.carousel {
			margin-top: 75px;

			}
			.carousel-indicators {
			position: absolute;
			top: 2em;
			}
			.carousel-caption {
			z-index: 10;
			bottom: 3rem;
			}

			.carousel-item {
			height: 20rem;
			background-color: #777;
			}
			.carousel-item > img {
			position: absolute;
			top: 0;
			left: 0;
			min-width: 100%;
			height: 20rem;
			}


			.alerts-container {
			position: fixed;
			top: 1em;
			right: 2em;
			z-index: 9999;
			}
			.alert {
			position: relative;
			min-width: 15em;
			text-align: center;
			display: none;
			text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
			-webkit-box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
			-moz-box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
			box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
			}

			@media (max-width: 590px) {  
			.carousel-item > img {
			top: 0;
			left: 0;
			min-width: absolute;
			height: 20rem;
			}

			}
			@media (max-width: 500px) {  
			.carousel-item > img {
			top: 0;
			left: 0;
			width: 100%;
			height: 18.5rem;
			}
			.carousel-item {
			height: 18.5rem;
			}
			}
	/* sloding image css end */
		/* search css begins */

.s132 {
margin-top: 10vh;
margin-left: 10vh;
margin-right: 10vh;
      margin-bottom: 200px;

}
		/* search css end */



</style>
  <body>
    
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="d-flex w-50 order-0">
        <a class="navbar-brand mr-1" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="campany.profile.php">Home</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="profile.php">profile</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a class="nav-link" href="#">Sign up/in</a></span>
</nav>

<div id="myCarousel" class="carousel slide" data-pause="false"><!--data-ride="carousel"-->
    
			<div class="carousel-inner">
			<!-- data-interval="6000" milliseconds NOT seconds! -->
			<div class="carousel-item active" data-interval="10000"> 
			<img class="first-slide" src="images/img21.jpg">

			</div>
			<div class="carousel-item" data-interval="7000">
			<img class="second-slide" src="images/img11.jpg">

			</div>
			<div class="carousel-item" data-interval="7000">
			<img class="third-slide" src= "images/img36.jpg">

			</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
			</div>
			<div class="alerts-container">

			<div class="row">
			<div id="timed-alert" class="alert alert-info animated tada" role="alert">
			<span id="time"></span>
			</div>
			</div>
  
</div>
    <div class="s132">
      <form action="searchs.php" method="POST">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices">
                <option placeholder="">Category</option>
                <option>Bank</option>
                <option>Hotel</option>
                <option>Hospital</option>
                <option>Minister</option>
                <option>Subject</option>
                <option>Subject</option>
              </select>
            </div>
          </div>
          <div class="input-field second-wrap">
            <input id="search" name="val" type="text" placeholder="Enter Keywords" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit"  name="search">Search</button>
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
<?php 
include('welcome.php');
 ?>
<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/navbar.js"></script>
<script type="text/javascript" src="js/sliding.js"></script>
  </body>
  </html>