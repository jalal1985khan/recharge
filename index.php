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

        echo "success";
        //header("location:index.php");
	}else{
	    echo "<script>alert('Login Failed')</script>";
	}
}

?> 
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Recharge12340</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Navbar Link</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>





    <div class="section no-pad-bot" id="index-banner">
        <div class="container s6">
            <div class="row">
                <div class="col s4"></div>
                <div class="col s4">

                    <form class="col s12" action="index.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" type="text" name="mobile" class="validate">
                                <label for="username">Username</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>

                    </form>
                </div>
                <div class="col s4"></div>

            </div>



        </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>