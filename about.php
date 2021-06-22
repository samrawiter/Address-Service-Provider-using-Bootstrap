
<!DOCTYPE html>
<html>
<head>
	<title>AZRAR.COM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">

      <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

	  <link rel="stylesheet" href="css/profile.menus.css">





</head>
<style >
    /*about us*/

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Exo 2', sans-serif;
}

.wrapper{
  margin-top: 60px;
  text-align: center;
}

.wrapper h1{
  font-family: 'Yatra One', cursive;
  font-size: 48px;
  color: #fff;
  margin-bottom: 25px;
}

.our_team{
  width: auto;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.our_team .team_member{
  width: 250px;
  margin: 5px;
  background: #fff;
  padding: 20px 10px;
}

.our_team .team_member .member_img{
  background: #e9e5fa;  
  max-width: 190px;
  width: 100%;
  height: 190px;
  margin: 0 auto;
  border-radius: 50%;
  padding: 5px;
  position: relative;
  cursor: pointer;
}

.our_team .team_member .member_img img{
  width: 100%;
  height: 100%;
}

.our_team .team_member h3{
  text-transform: uppercase;
  font-size: 18px;
  line-height: 18px;
  letter-spacing: 2px;
  margin: 15px 0 0px;
    color: black;

}

.our_team .team_member span{
  font-size: 10px;
}

.our_team .team_member p{
  margin-top: 20px;
  font-size: 14px;
  line-height: 20px;
  color: black;
}

.our_team .team_member .member_img .social_media{
  position: absolute;
  top: 5px;
  left: 5px;
  background: rgba(0,0,0,0.65);
  width: 95%;
  height: 95%;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: scale(0);
   transition: all 0.5s ease;
}

.our_team .team_member .member_img .social_media .item{
  margin: 0 10px;
}

.our_team .team_member .member_img .social_media .fab{
  color: #8c7ae6;
  font-size: 20px;
}

.our_team .team_member .member_img:hover .social_media{
  transform: scale(1);
}

	/*end about us*/
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


.uza-btn {

  font-size: 14px;
	}

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
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>
          
           
             <li class="nav-item">
                <a class="nav-link" href="login.php">Custom</a>
            </li>
            
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a class="nav-link" href="register.php">Sign up/in</a></span>
</nav>
<div class="wrapper">
    <h1>Our Team</h1>
    <div class="our_team">
        <div class="team_member">
          <div class="member_img">
             <img src="images/img21.jpg">
          </div>
          <h3>Neway neway</h3>
          <span>CEO</span>
          <p>hsdfghsa hsfdgs hfhsgdf hgdyfgs jhgdfhs jygdus sdyigfisu kgifsu ugdyufgsiuydf ysgdfuys ygfsui igdfiys ysgdfyis idgfisygfd uiagoaf yagfdyavf uga gfysfd sydgfysd hgysgfs dhdyfsd usb dfsud ub sds  fsuydgfyusgdfs sdgfuys fusgdfbsdyfgs udgfs.</p>
        </div>
        <div class="team_member">
           <div class="member_img">
             <img src="images/img21.jpg">
           
          </div>
          <h3>samrawit ergete</h3>
          <span>Accountant</span>
          <p>hsdfghsa hsfdgs hfhsgdf hgdyfgs jhgdfhs jygdus sdyigfisu kgifsu ugdyufgsiuydf ysgdfuys ygfsui igdfiys ysgdfyis idgfisygfd uiagoaf yagfdyavf uga gfysfd sydgfysd hgysgfs dhdyfsd usb dfsud ub sds  fsuydgfyusgdfs sdgfuys fusgdfbsdyfgs udgfs..</p>
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="images/img21.jpg">
           
          </div>
          <h3>Mekone lake</h3>
          <span>Product Management</span>
          <p>hsdfghsa hsfdgs hfhsgdf hgdyfgs jhgdfhs jygdus sdyigfisu kgifsu ugdyufgsiuydf ysgdfuys ygfsui igdfiys ysgdfyis idgfisygfd uiagoaf yagfdyavf uga gfysfd sydgfysd hgysgfs dhdyfsd usb dfsud ub sds  fsuydgfyusgdfs sdgfuys fusgdfbsdyfgs udgfs..</p>
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="images/img21.jpg">
            
          </div>
          <h3>hana teshome</h3>
          <span>product analyst</span>
          <p>hsdfghsa hsfdgs hfhsgdf hgdyfgs jhgdfhs jygdus sdyigfisu kgifsu ugdyufgsiuydf ysgdfuys ygfsui igdfiys ysgdfyis idgfisygfd uiagoaf yagfdyavf uga gfysfd sydgfysd hgysgfs dhdyfsd usb dfsud ub sds  fsuydgfyusgdfs sdgfuys fusgdfbsdyfgs udgfs.</p>
      </div>  
    </div>
</div>
<?php 
include('footer.php');
 ?>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
<script type="text/javascript" src="js/sliding.js"></script>

</body>
</html>