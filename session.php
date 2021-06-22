<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
if($username=="benart"){
	header("location: admin.php");
    exit();
}

    header("location:profile.php");
    exit();
}
$session_id=$_SESSION['user_id'];
$session_type=$_SESSION['user_type'];

?>