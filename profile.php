<?php 
include('dbcon.php');
include('session.php');




$res=mysqli_query($db, "SELECT * from type WHERE id='$session_id' AND type='$session_type'")or die('Error In Session');
$typerow=mysqli_fetch_array($res);
$user_type1="Hospital";
$user_type2="Hotel";


 ?>
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
                <a class="nav-link" href="campany.profile.php">Home</a>
            </li>
          
          
             <li class="nav-item active">
                <a class="nav-link" href="profile.php">profile</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
            
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a class="nav-link" href="register.php">Sign up/in</a></span>
</nav>

<section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->




<div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                    	<?php



                        if($session_type==$user_type1)
{
    $resss=mysqli_query($db, "SELECT * from hospital WHERE id='$session_id'")or die('Error In Session');

                while($rowss = mysqli_fetch_array($resss)) {//Open the while array loop

                //Define the image variable:
                $image=$rowss['img_dir'];

                $pic=$rowss['img_dir'];


                  $newWidth = 400; // Desired WIDTH
                  $newHeight = 350; // Desired HEIGHT


                echo "<img src='{$rowss['img_dir']}'>";
                echo '</a>';

                }
  } 
else if($session_type==$user_type2)
  {
  $resss=mysqli_query($db, "SELECT * from hotel WHERE id='$session_id'")or die('Error In Session');

                while($rowss = mysqli_fetch_array($resss)) {//Open the while array loop

                //Define the image variable:
                $image=$rowss['img_dir'];

                $pic=$rowss['img_dir'];


                  $newWidth = 400; // Desired WIDTH
                  $newHeight = 350; // Desired HEIGHT


                echo "<img src='{$rowss['img_dir']}'>";
                echo '</a>';
                
                }
        }
  


?>
<br>
<div class="section-heading mb-5">
                        <h1>MANAGE ACCOUNT</h1>
                    </div>
  <div class="about-us-contents mb-80">
                          <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="btn uza-btn mt-30"  href="manages.php">MANAGE About / Address / Account / Picture</a>
                                </li>
                               
                                
                            </ul>
                        </div>
                        

 </div>                        <!-- Video Area -->
    


                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                      <?php 
                        if($session_type==$user_type1)
{
    $ressss=mysqli_query($db, "SELECT * from hospital WHERE id='$session_id'")or die('Error In Session');
    $rowss=mysqli_fetch_array($ressss);
echo"<br>";




}
else if($typerow['type']=='Hotel')
{
    $ressss=mysqli_query($db, "SELECT * from hotel WHERE id='$session_id'")or die('Error In Session');
    $rowss=mysqli_fetch_array($ressss);

echo"<br>";

}
else
echo "no user type much";
echo"<br>";
?>
                        <h1><?php echo $rowss['name'];?></h1>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"> ADDRESS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">CONTACT</a>
                                </li>
                                 
                                
                            </ul>
                          
                         
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                              <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                       <p><h3>About The Campany</h3><h6><?php echo $rowss['about'];?></h6></p>

                                      

                                    </div>
                                </div>

                               <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p><h3>Location</h3><h6> <?php echo $rowss['location'];?></h6></p>
                                        <p><h3>Address</h3><h6><?php echo $rowss['address'];?></h6></p>
                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                       <p><h3>Phone Number</h3><h6><?php echo $rowss['phone'];?></h6></p>
                                        <p><h3>Fan Number</h3><h6><?php echo $rowss['fax'];?></h6></p>
                                        <p><h3>Email Address</h3><h6><?php echo $rowss['email'];?></h6></p>
                                        <p><h3>Website</h3><h6><?php echo $rowss['website'];?></h6></p>
                                    </div>
                                </div>

                               
 </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>

        <!-- About Background Pattern -->
       
    </section>
<?php 
include('welcome.php');
 ?>
<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/navbar.js"></script>
<script type="text/javascript" src="js/sliding.js"></script>

</body>
</html>