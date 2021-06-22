
<?php 
     session_start(); 
    require('PHPMailer/PHPMailerAutoload.php'); 
    require('crediantial.php');



    $conn = mysqli_connect("localhost","root","","azrar");


if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['gall'];


if($type=="Hospital")
{


    $select = "SELECT * FROM hospital WHERE username = '$username' AND password = '$password' AND status = 'Active'";
    $result = mysqli_query($conn,$select);
    $count = mysqli_num_rows($result);
    $data = mysqli_fetch_array($result);

     if ($count > 0) 
        {     
          $_SESSION['user_id']=$data['id'];
          $_SESSION['user_type']=$data['type'];

          header('location:profile.php');
          
        }
      else
        {
echo '<script language="javascript">';
echo 'alert("invalid Username/Password")';
echo '</script>';        } 
}

else if($type=="Hotel")
{


    $select = "SELECT * FROM hotel WHERE username = '$username' AND password = '$password' AND status = 'Active'";
    $result = mysqli_query($conn,$select);
    $count = mysqli_num_rows($result);
    $data = mysqli_fetch_array($result);

     if ($count > 0) 
        {     
          $_SESSION['user_id']=$data['id'];
          $_SESSION['user_type']=$data['type'];

          header('location:profile.php');
          
        }
      else
        {
       echo '<script language="javascript">';
echo 'alert("invalid Username/Password")';
echo '</script>'; 
        }
}
else
 echo "string";
}
else
echo "string";
?>

<?php 
include('navbar.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>AZRAR.COM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">

    </head>
<style>
    /*login and register form css begin*/
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
    /*login and register form css end*/

</style>
<script>
      AOS.init();
</script>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="post" class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" name="username" placeholder="User Name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Password</label>
                                    <input type="password" class="form-control" id="inputEmail3" name="password" placeholder="*************" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">User Type</label>
                                    
                                       <select name="gall" class="form-control" id="inputPassword3" >
                                          <option>select type</option>
                                           <option>Hospital</option>

                                          <option>Hotel</option>

                                          <option>Bank</option>                                      

                                     </select>
                                </div>
                              
                                <div class="form-group">
                                    <button type="submit" name="login" class="btn btn-success btn-lg float-right">Log in</button>
                                </div>
                            </form>

 <div class="reminder">
    <p>Not a member? <a href="register.php">Sign up now</a></p>
  </div>
  </div>
</div>
</div>
                        </div>
                    </div>
                </div>
            </div>


            <?php 
include('footer.php');
 ?>
</body>
</html>