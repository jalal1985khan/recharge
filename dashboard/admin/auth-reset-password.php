<?php
session_start();
error_reporting(0);
$error = FALSE;
include("../includes/config.php");
include("../includes/function.php");

$res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
$row = $res->fetch_assoc();
    
$weburl = $row['WEBURL'];

if(isset($_POST['reset'])){
    $number= $_POST['mobile'];
    if($con === false){
   	 die("ERROR: Could not connect. " . mysqli_connect_error());
     }
    $password=mt_rand(99999 , 1000000);
    $query = "select * FROM admin WHERE MOBILE = '$number'";
    $pass_hash = md5($password);
    // echo $query;
    $result = mysqli_query($con, $query);
    $row=mysqli_num_rows($result);
    // echo $row;
    if($row!=0){
         $query2 = "select `EMAIL` FROM admin WHERE MOBILE = '$number'";
        
        	$email_data = mysqli_query($con, $query2);
        	$email = $email_data->fetch_assoc();
        
		$sql = "UPDATE admin SET PASSWORD='".$pass_hash."' WHERE MOBILE='".$number."'";
    		$result = mysqli_query($con, $sql);
		$message = "Dear%20user%20%20Your%20Are%20Requesting%20for%20New%20Password.%20Your%20New%20Password%20is%20$password.%20By%20$weburl";
		$message2 = "Dear user, Your Are Requesting for New password.Your new password is $password. By $weburl";
		sendMessage($number,$message);
		sendMail($email["EMAIL"],$message2);
		header("location:index.php");
}
 else{
	echo "<script>alert('User not found')</script>";
}	


	
}


    $res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
    $row = $res->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
        content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="login-card card-block auth-body">
                        <form class="md-float-material" action="" method="post">
                            <div class="text-center">
                                <img src="../../images/<?php echo $row['LOGO']; ?>" class="img-fluid" width="200" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left">You forgot your Password? </h3>
                                        <h3 class="text-left">Don't worry.</h3>
                                    </div>
                                </div>
                                <p class="text-inverse b-b-default text-right">Back to <a href="login.php">Login.</a></p>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter Registered Mobile Number">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" name="reset"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Reset
                                            and send me a new Password">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                        <p class="text-inverse text-left"><b>Your Autentification Team</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

    <script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="assets/js/script.js"></script>

    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>