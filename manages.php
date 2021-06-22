<?php 
include('dbcon.php');
include('session.php');
$path = "uploads/";


$user_type1="Hospital";
$user_type2="Hotel";

if($session_type==$user_type1)
{
    $reulte=mysqli_query($db, "SELECT * from hospital WHERE id='$session_id'")or die('Error In Session');
    $row=mysqli_fetch_array($reulte);

}
else if($session_type==$user_type2)
{
    $reulte=mysqli_query($db, "SELECT * from hotel WHERE id='$session_id'")or die('Error In Session');
    $row=mysqli_fetch_array($reulte);

echo"<br>";
}
else
echo "no user type much";
echo"<br>";


    ini_set("error_reporting", 1);
    function compress($source, $destination, $quality) {

        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg') 
            $image = imagecreatefromjpeg($source);

        elseif ($info['mime'] == 'image/gif') 
            $image = imagecreatefromgif($source);

        elseif ($info['mime'] == 'image/png') 
            $image = imagecreatefrompng($source);

        imagejpeg($image, $destination, $quality);

        return $destination;
    }
    
    if (isset($_POST['submit'])) {
        if ($_FILES["file"]["error"] > 0) 
        {
            $error = $_FILES["file"]["error"];
        }
        else if (($_FILES["file"]["type"] == "image/gif") ||
            ($_FILES["file"]["type"] == "image/jpeg") ||
            ($_FILES["file"]["type"] == "image/png") ||
            ($_FILES["file"]["type"] == "image/pjpeg")) 
        {
                include_once 'includes/getExtension.php';
                $source_img = $_FILES["file"]["tmp_name"];

                $ext = "jpg";

$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
              

            $destination_url = $path.$actual_image_name;

            
            $fianl_file = compress($source_img, $destination_url, 50);                  


        if($session_type==$user_type1)
        {
            mysqli_query($db,"UPDATE hospital SET img_dir='$destination_url' WHERE id='$session_id'");
                   $result = mysqli_query($db, $query);

                    echo "<h2>";echo  "Image Uploaded successfully";echo "</h2>";

        }
        else if($session_type==$user_type2)
        {
           mysqli_query($db,"UPDATE hotel SET img_dir='$destination_url' WHERE id='$session_id'");
                   $result = mysqli_query($db, $query);

                    echo "<h2>";echo  "Image Uploaded successfully";echo "</h2>";

          }


         else echo "Image Uploaded failed";       

        }
        else {
            $error = "Uploaded image should be jpg or gif or png";
        }
    }

  elseif(isset($_POST['updaterabout']))
  {
 
    $name = $_POST['name'];
   
    $about = $_POST['about'];
    echo $rowss['type'];
        if($session_type==$user_type1)
{
    $query = "UPDATE hospital SET name='$name',about='$about' WHERE id='$session_id'";

           $results = mysqli_query($db, $query);


           
            echo "<h2>";echo  "Update successfully Done!!!";echo "</h2>";
  }  
        else if($session_type==$user_type2)
  {
   $query = "UPDATE hotel SET name='$name',about='$about' WHERE id='$session_id'";

           $results = mysqli_query($db, $query);
           
            echo "<h2>";echo  "Update successfully Done!!!";echo "</h2>";
        }
}



  elseif(isset($_POST['updateaddress'])){
 
    $website = $_POST['website'];
    $email = $_POST['email'];
    $fax=$_POST['fax'];
    $phone = $_POST['phone'];
    $op=$_POST['gall'];
    $address = $_POST['address'];
        if($session_type==$user_type1)
{
    $query = "UPDATE hospital SET website='$website',email='$email',fax='$fax',phone='$phone',location='$op',address='$address' WHERE id='$session_id'";

           $results = mysqli_query($db, $query);
            echo "<h2>";echo  "Update successfully Done!!!";echo "</h2>";

  }  
        else if($session_type==$user_type2)
  {
   $query = "UPDATE hotel SET website='$website',email='$email',fax='$fax',phone='$phone',location='$op',address='$address' WHERE id='$session_id'";

           $results = mysqli_query($db, $query);
            echo "<h2>";echo  "Update successfully Done!!!";echo "</h2>";
        }



    

  }
  elseif(isset($_POST['updateaccount'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

        if($session_type==$user_type1)
    {

     $query = "UPDATE hospital SET username='$username',password='$password' WHERE id='$session_id'";

           $results = mysqli_query($db, $query);
            echo "<h2>";echo  "Update successfully Done!!!";echo "</h2>";

  }  
        else if($session_type==$user_type2)
  {
 $query = "UPDATE hotel SET username='$username',password='$password' WHERE id='$session_id'";

           $results = mysqli_query($db, $query);
            echo "<h2>";echo  "Update successfully Done!!!";echo "</h2>";
        }


          

  }
  
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

  font-size: 13px;}
	

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
           
           
             <li class="nav-item">
                <a class="nav-link" href="profile.php">profile</a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="manages.php">Manage</a>
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
<style >
    h2{
        position: relative;
  z-index: 1;
  min-width: 100px;
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  font-weight: 600;
  display: inline-block;
  padding: 0 30px;
  text-align: center;
  text-transform: capitalize;
        color: green;
       margin-top: 10vh;

  border: none;
  border-radius: 50px;
  background-color:rgba(255, 255, 255, 255);
  -webkit-transition-duration: 500ms;
  -o-transition-duration: 500ms;
  transition-duration: 500ms;
  -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
  box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
</style>
                      
  <div class="about-us-contents mb-80">
                          <div class="about-tab-area">
                                                        <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">

                                <li class="nav-item ">
                                    <a class="btn uza-btn mt-30 " id="tab9" data-toggle="tab" href="#tab-9" role="tab" aria-controls="tab-9" aria-selected="false">Upload</a>
                                </li>
                     <div class="section-heading mb-6">
                        <h1>MANAGE ACCOUNT</h1>
                    </div>
                                    <li class="nav-item ">
                                    <a class="btn uza-btn mt-30 active" id="tab5" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn uza-btn mt-30" id="tab7" data-toggle="tab" href="#tab-7" role="tab" aria-controls="tab-7" aria-selected="false">Address</a>
                               </li>
                                 <li class="nav-item">
                                    <a class="btn uza-btn mt-30" id="tab8" data-toggle="tab" href="#tab-8" role="tab" aria-controls="tab-8" aria-selected="false">Account</a>
                               </li>
                                
                            </ul>
                        </div>
                        





 </div>                        <!-- Video Area -->
    


                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-5">
                    <div class="section-heading mb-5">
                        <h1>MANAGES</h1>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                       
                                
                            </ul>
                          
                         
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                              <div class="tab-pane fade show active" id="tab-5" role="tabpanel" aria-labelledby="tab5">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                      <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card border-secondary">
                       <div class="card-header">
                            <h2 class="mb-0 my-2">About</h2>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="" method="post" action="manages.php">
                                <div class="form-group">
                                    <label for="inputName">Campany Name</label>
                            <input type="text" class="form-control" name="name" id="inputName" placeholder="<?php echo $row['name']; ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">About Campany</label>
                                    <input type="text" class="form-control"   name="about"  id="inputEmail3" placeholder="<?php  echo $row['about'];  ?>" required="">
                                </div>
                             
                                <div class="form-group">
                                    <button type="submit" name="updaterabout" class="btn btn-success btn-lg float-right">update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>

                                    </div>
                                </div>

                               <div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="tab7">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                      <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mx-auto">
                                        <div class="card border-secondary">
                        <div class="card-header">
                            <h2 class="mb-0 my-2">Address</h2>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="" method="post" action="manages.php"">
                               
                                
                               
                                <div class="form-group">
                                    <label for="inputName">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="inputName" placeholder="<?php echo $row['phone'];  ?>" required="">
                                </div>
                                 <div class="form-group">
                                    <label for="inputName">Fax</label>
                                    <input type="text" class="form-control" name="fax" id="inputName" placeholder="<?php echo $row['fax'];  ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control"   name="email"  id="inputEmail3" placeholder="<?php echo $row['email'];  ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Web site</label>
                                    <input type="text" class="form-control" name="website" id="inputName" placeholder="<?php echo $row['website'];  ?>"required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Location</label>
                                           <select id="inputName" name="gall" class="form-control" selectpicker required="">
                                                <option value="">Select location</option>
                                                <option>hospital</option>
                                                <option>hotel</option>
                                                <option >bank</option>
                                                <option >PORTRATE</option>
                                            </select>



                                </div>
                                <div class="form-group">
                                    <label for="inputName">Address</label>
                                    <input type="text" class="form-control" name="address" id="inputName" placeholder="<?php echo $row['address'];  ?>"required="">
                                </div>
                             
                                <div class="form-group">
                                    <button type="submit" name="updateaddress" class="btn btn-success btn-lg float-right">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-8" role="tabpanel" aria-labelledby="tab8">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mx-auto">

                    <div class="card border-secondary">
                    <div class="card-header">
                            <h2 class="mb-0 my-2">Account</h2>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="" method="post" action="manages.php"">
                            
                                <div class="form-group">
                                    <label for="inputName">User Name</label>
                                    <input type="text" class="form-control" name="username" id="inputName" placeholder="<?php echo $row['username'];  ?>"required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="<?php echo $row['password'];  ?>"required="" title="At least 6 characters with letters and numbers" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Verify Password</label>
                                    <input type="password" class="form-control" name="repassword" id="inputVerify3" placeholder="<?php echo $row['password'];  ?>"required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="updateaccount" class="btn btn-success btn-lg float-right">update</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-9" role="tabpanel" aria-labelledby="tab9">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card border-secondary">
                      <div class="card-header">
                            <h2 class="mb-0 my-2">Upload</h2>
                        </div>
                        <div class="card-body">

<fieldset class="well">
  <legend>Upload Image:</legend>
<form action="manages.php" name="img_compress" id="img_compress" method="post" enctype="multipart/form-data" class="form" role="form" autocomplete="off">
<ul>
  <li>
    <label for="inputName">Upload:</label>
    <input type="file" name="file" class="form-control" id="inputName" />
  </li>
  <li>
    <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg float-right"/>
  </li>
</ul>
</form>
</fieldset></div></div></div></div></div></div></div>
<center>
<?php if($_POST){ if ($error) { ?>
<h3><?php echo $error; ?></h3>
<?php }} ?>
</center>                                     
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