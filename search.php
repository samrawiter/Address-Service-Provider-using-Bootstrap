<?php
include('dbcon.php');

$op=$_POST['choices'];
$result="";
$Key=$_POST['val'];
$user_type1="Hospital";
$user_type2="Hotel";

// Check if image file is a actual image or fake image
if(isset($_POST["search"])) {

  if ($op=="Hospital" ) 
    {
                  if (  $Key=="pawlos" || $Key=="Pawlos" || $Key=="Pawelos" || $Key=="pawelos"|| $Key=="Pawls" || $Key=="pawls" || $Key=="Pawlose" || $Key=="pawlose"|| $Key=="PAWLOS" || $Key=="PAWLOSE" ) 
                      {
                        $conn = mysqli_connect("localhost", "root", "", "azrar");


                    $sql ="SELECT * FROM hospital WHERE name='Pawlos' AND type='Hospital'";

                    $record=mysqli_query($conn,$sql);
                    $row = $record->fetch_assoc();
             
                    $name = $row["name"];
                    $location = $row["location"];
                    $address = $row["address"];
                    $id = $row["id"];
                    $phone = $row["phone"];
                    $fax = $row["fax"];
                    $email = $row["email"];
                    $website = $row["website"];                 
                 
                $record->free();
                      }

                      
                       elseif ($Key=="minilic" || $Key=="Minilic"  ) 
                      {
                           $conn = mysqli_connect("localhost", "root", "", "azrar");


                    $sql ="SELECT * FROM hospital WHERE name='minilic'";

                    $record=mysqli_query($conn,$sql);

                    $row = $record->fetch_assoc();
             
                   $name = $row["name"];
                    $location = $row["location"];
                    $address = $row["address"];
                    $id = $row["id"];
                    $phone = $row["phone"];
                    $fax = $row["fax"];
                    $email = $row["email"];
                    $website = $row["website"];                 
                                  
                $record->free();
                      }
                      else
                        echo "no hospital";
       }
    elseif ($op=="Hotel") 
    {
          if (  $Key=="elile" || $Key=="Elile" || $Key=="ilile" || $Key=="Ilile" || $Key=="ELELE") 
                      {
                        $conn = mysqli_connect("localhost", "root", "", "azrar");


                    $sql ="SELECT * FROM hotel WHERE name='Elile International Hotel' AND type='Hotel'";

                    $record=mysqli_query($conn,$sql);
                    $row = $record->fetch_assoc();
             
                    $name = $row["name"];
                    $location = $row["location"];
                    $address = $row["address"];
                    $id = $row["id"];
                    $phone = $row["phone"];
                    $fax = $row["fax"];
                    $email = $row["email"];
                    $website = $row["website"];                 
                 
                $record->free();
                      }

               elseif ($Key=="hotel" || $Key=="Hotel"  ) 
                      {
                           $conn = mysqli_connect("localhost", "root", "", "azrar");


                    $sql ="SELECT * FROM hotel WHERE name='hotel'";

                    $record=mysqli_query($conn,$sql);

                    $row = $record->fetch_assoc();
             
                   $name = $row["name"];
                    $location = $row["location"];
                    $address = $row["address"];
                    $id = $row["id"];
                    $phone = $row["phone"];
                    $fax = $row["fax"];
                    $email = $row["email"];
                    $website = $row["website"];                 
                                  
                $record->free();
                      }
                      else
                        echo "no hospital";         

  } 
 elseif ($op=="MODERN") {
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `MODERN` (`img_dir`)  VALUES ('$target_file')";
        mysqli_query($conn,$sql);
        header('location:admin.php');
        echo $target_file;
    }}
     elseif ($op=="PORTRATE") {
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `PORTRATE` (`img_dir`)  VALUES ('$target_file')";
        mysqli_query($conn,$sql);
        header('location:admin.php');
        echo $target_file;
    }}
    else {
            echo '<script language="javascript">';
echo 'alert("Sorry, there was an error uploading your file.")';
echo '</script>';
    }
 
}
 else 
    
echo "no data found";
  



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
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Custom</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a class="nav-link" href="#">Sign up/in</a></span>
</nav>

 <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">

<div class="col-12 col-lg-5">
                    <div class="section-heading mb-5">
                        <h1><?php echo $row["name"];?></h1>
                    </div>
<?php



                        if($op==$user_type1)
{

                echo "<img src='{$row['img_dir']}'>";
                echo '</a>';
  } 
else if($op==$user_type2)
  {
  
                echo "<img src='{$row['img_dir']}'>";
                echo '</a>';
                }
        echo"<br>";
echo"<br>";

  


?>
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
                                       <p><h3>About The Campany</h3><h6><?php echo $row['about'];?></h6></p>

                                      


                                    </div>
                                </div>

                               <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p><h3>Location</h3><h6> <?php echo $row['location'];?></h6></p>
                                        <p><h3>Address</h3><h6><?php echo $row['address'];?></h6></p>
                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                     <div class="tab-content-text">
                                       <p><h3>Phone Number</h3><h6><?php echo $row['phone'];?></h6></p>
                                        <p><h3>Fan Number</h3><h6><?php echo $row['fax'];?></h6></p>
                                        <p><h3>Email Address</h3><h6><?php echo $row['email'];?></h6></p>
                                        <p><h3>Website</h3><h6><?php echo $row['website'];?></h6></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p> <a href="#" class="btn uza-btn mt-30">Manage Address</a></p>
                                        <p> <a href="#" class="btn uza-btn mt-30">Manage Contact</a></p>
                                        <p> <a href="#" class="btn uza-btn mt-30">Manage Account</a></p>
                                        <p> <a href="#" class="btn uza-btn mt-30">Manage Discription</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <div class="section-heading mb-5">
</div></div>
 <div class="col-6 col-lg-3">
   <div class="section-heading mb-5">
                       <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                        <h3>Related Results</h3></ul>
                    </div>
                   
                       
                       <div class="about-tab-content">
                          <div class="tab-content" id="mona_modelTabContent">
                                 <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                   <div class="tab-content-text">
                                   <h2> <p>
                         <div class="section-heading mb-5">
                       
                        <h5>Hilton Hotel</h5>
                         <p> <a href="#" class="btn uza-btn mt-30">www.hiltonhotel.com</a></p>

                    </div>

                               <div class="section-heading mb-5">
                        <h5>Dashn Bank</h5>
                                                                <p> <a href="#" class="btn uza-btn mt-30">www.dashenbank.com</a></p>

                    </div>    

                               <div class="section-heading mb-5">
                        <h5>Hayle Resort</h5>
                                                                <p> <a href="#" class="btn uza-btn mt-30">www.hayleresort.com</a></p>

                    </div>   

                               <div class="section-heading mb-5">
                        <h5>National Bank</h5>
                                                                <p> <a href="#" class="btn uza-btn mt-30">www.nationalbank.com</a></p>

                    </div>       
                                        </p></h2>
                                   </div>
                                 </div>
                          </div>

                      </div>

</div>
  

</div></div>
</section>
<?php 
include('footer.php');
 ?>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/navbar.js"></script>
<script type="text/javascript" src="js/sliding.js"></script>

</body>
</html>