<?php 

session_start();
	
error_reporting(0);
include("../includes/config.php");
// $_SESSION["status"]=1;
if(isset($_POST['login'])){

    $mobile= $_POST['mobile'];
    $password = md5($_POST['password']);
    
    
    if($con === false){
  	 die("ERROR: Could not connect. " . mysqli_connect_error());
     }
     //  $query = "UPDATE `admin` SET `MOBILE`='$mobile', `PASSWORD`='$password' WHERE `ID`='1'";
    $query = "select * FROM admin WHERE MOBILE = '".$mobile. "' AND PASSWORD = '".$password. "'";
    
    $result = mysqli_query($con, $query);
    $row=mysqli_num_rows($result);
    if($row!=0){
		$admin = mysqli_fetch_array($result);
		$admin_id = $admin['ID'];
		$_SESSION["status"] = $admin_id;
        header("location:index.php");
	}else{
	    echo "<script>alert('Login Failed')</script>";
	}
}


    $res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
    $row = $res->fetch_assoc();
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    

    <title>Admin | Login</title>


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
                                        <h3 class="text-center txt-primary">Admin Login</h3>
                                    </div>
                                </div>
                                <hr />
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="pass" name="password" placeholder="Secret Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input onclick="toggle_pass()" type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Show Password</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="auth-reset-password.php" class="text-right f-w-600 text-inverse"> Forgot
                                            Your Password?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" name="login"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Log In">
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
<script>
    
    function toggle_pass(){
          var x = document.getElementById("pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  }
    
</script>


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