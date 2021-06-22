<?php

    require('PHPMailer/PHPMailerAutoload.php'); 
    require('crediantial.php'); 
  $db = mysqli_connect('localhost', 'root', '', 'azrar');
$username = "";
  $email = "";
  $taken="benart";
  if (isset($_POST['register'])) {
    
$name = $_POST['name'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];      
$website=$_POST['website'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

$repassword = $_POST['repassword'];
$campany=$_POST['campany'];
$location=$_POST['gall'];
$about=$_POST['about'];
$token = md5(rand('10000', '99999'));



    $sql_u = "SELECT * FROM hospital WHERE username='$username'";
    $res_u = mysqli_query($db, $sql_u);
    if (mysqli_num_rows($res_u) > 0)   
    {
      $name_error = "Sorry... username already taken"; 
    }
    else if($username==$taken){
            $name_error = "Sorry... username already taken";  

    }
   
       else if ($password !== $repassword) {
        $email_error =  "Password & Retype password not match";
    }
  
     
    else{

if ($campany=="Hospital" )

      {

           $query = "INSERT INTO hospital (name, email, fax,website,location,address,phone,username, password,token,status,type,about) 
                VALUES ('$name', '$email', '$fax', '$website', '$location', '$address', '$phone', '$username', '$password','".$token."','Inactive','".$campany."','$about' )";
           $results = mysqli_query($db, $query);
           
           $lastId = mysqli_insert_id($db);

$nameval=$_POST['username'];

$res=mysqli_query($db, "SELECT * from hospital WHERE username='$nameval'")or die('Error In Session');
$ro=mysqli_fetch_array($res);
$typeid=$ro['id'];
$typetype=$ro['type'];


        $selects = "INSERT INTO type(id,type)VALUES('".$typeid."','".$typetype."')";
        $resulte = mysqli_query($db,$selects);

      
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/azrar/verify.php?id='.$lastId.'&token='.$token;                                // Set email format to HTML
        
        $output = '<div>Thanks for registering with localhost. Please click here to activatea your account <br>'.$url.'</div>';

        if ($resulte == true) {

            $mail = new PHPMailer();
            $mail->isSMTP();  
            //$mail->SMTPDebug = 2;                                   // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = "enrique.se43@gmail.com";                 // SMTP username
            $mail->Password = "578304mom";                          // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;  
            $mail->setFrom(EMAIL, 'info');
            $mail->addAddress($email, $username);     // Add a recipient
            
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
            
            $mail->isHTML(true);

            $mail->Subject = 'Register confirmation';
            $mail->Body    = $output;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $msg = '<div class="alert alert-success">Congratulation, Your registration has been successful. please chake your email to verify your account.</div>';
            }
        }
    

   
}
elseif ($campany=="Hotel" )

      {
           $query = "INSERT INTO hotel (name, email, fax,website,location,address,phone,username, password,token,status,type,about) 
                VALUES ('$name', '$email', '$fax', '$website', '$location', '$address', '$phone', '$username', '".md5($password)."','".$token."','Inactive','".$campany."','$about')";
           $results = mysqli_query($db, $query);
           
           $lastId = mysqli_insert_id($db);

$nameval=$_POST['username'];

$res=mysqli_query($db, "SELECT * from hotel WHERE username='$nameval'")or die('Error In Session');
$ro=mysqli_fetch_array($res);
$typeid=$ro['id'];
$typetype=$ro['type'];


        $selects = "INSERT INTO type(id,type)VALUES('".$typeid."','".$typetype."')";
        $resulte = mysqli_query($db,$selects);

      
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/azrar/verifyhotel.php?id='.$lastId.'&token='.$token;                                // Set email format to HTML
        
        $output = '<div>Thanks for registering with localhost. Please click here to activatea your account <br>'.$url.'</div>';

        if ($resulte == true) {

            $mail = new PHPMailer();
            $mail->isSMTP();  
            //$mail->SMTPDebug = 2;                                   // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = "enrique.se43@gmail.com";                 // SMTP username
            $mail->Password = "578304mom";                          // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;  
            $mail->setFrom(EMAIL, 'info');
            $mail->addAddress($email, $username);     // Add a recipient
            
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
            
            $mail->isHTML(true);

            $mail->Subject = 'Register confirmation';
            $mail->Body    = $output;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $msg = '<div class="alert alert-success">Congratulation, Your registration has been successful. please chake your email to verify your account.</div>';
            }
        }
    

   
}

else echo "string";

    }
  }
      include('navbar.php')

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AZRAR.COM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">


</head>
<style>
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
    /*nav bar 
    /*register form css begin*/
            .card{
                margin-top: 50px;
            color: white;
            background:rgba(0,0,0,0.6)!important;

            }
            /* Carousel base class */
            .carousel {
            }
            .carousel-indicators {
            position: absolute;
            top: 2em;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
            z-index: 10;
            bottom: 3rem;
            }

            /* Declare heights because of positioning of img element */
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
    /*register form css end*/

</style>
<body data-spy="scroll" data-target="#navbarReponsive">
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
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
          
           
             <li class="nav-item ">
                <a class="nav-link" href="login.php">Custom</a>
            </li>
         
        </ul>
    </div>
    <span class="navbar-text active small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a class="nav-link" href="register.php">Sign up/in</a></span>
</nav>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                          <center>
                            <?php if (isset($msg)) { echo $msg; } ?>
                          </center>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="" method="post"action="register.php"">
                                <div class="form-group">
                                    <label for="inputName">Campany Type</label>
                                           <select id="inputName" name="campany" class="form-control" selectpicker">
                                                          <option value="">Select Campany Type</option>
                                                          <option >Bank</option>
                                                          <option>Hotel</option>
                                                          <option>Hospital</option>

                                                          <option >Minister</option>
                                             </select>
</div>
                                <div class="form-group">
                                    <label for="inputName">Campany Name</label>
                                    <input type="text" class="form-control" name="name" id="inputName" placeholder="full name">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control"   name="email"  id="inputEmail3" placeholder="email@gmail.com" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Web site</label>
                                    <input type="text" class="form-control" name="website" id="inputName" placeholder="Campany WebSite">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Fax</label>
                                    <input type="text" class="form-control" name="fax" id="inputName" placeholder="Fax Number">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="inputName" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Location</label>
                                           <select id="inputName" name="gall" class="form-control" selectpicker">
                                                <option value="">Select location</option>
                                                <option>Piyaasa</option>
                                                <option>Mexico</option>
                                                <option >Bambis</option>
                                                <option >Merkato</option>
                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Address</label>
                                    <input type="text" class="form-control" name="address" id="inputName" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">User Name</label>
                                    <input type="text" class="form-control" name="username" id="inputName" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" title="At least 6 characters with letters and numbers" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Verify Password</label>
                                    <input type="password" class="form-control" name="repassword" id="inputVerify3" placeholder="Password (again)" required="">
                                </div>
                                  <div class="form-group">
                                    <label for="inputName">About The Campany</label>
                                    <input type="text" class="form-control" name="about" id="inputName" placeholder="About The Campany">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="register" class="btn btn-success btn-lg float-right">Register</button>
                                </div>
                            </form>
                             <div class="reminder">
    <p>Not a member? <a href="register.php">Sign up now</a></p>
  </div>
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
<?php 
include('footer.php');
 ?>

<script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
<script type="text/javascript" src="js/sliding.js"></script>

</body>
</html>
