<?php

session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}
require("../includes/function.php");


  if(isset($_POST['submit'])){
      
    $smsapi = $_POST['smsapi'];
     $apiurl = $_POST['apiurl'];
     $sendername = $_POST['sendername'];
     $apikey = $_POST['apikey'];
     $status = $_POST['status'];
     
    $id = $_GET['id'];

    if($con->query("UPDATE `smsApi` SET `APINAME`='$smsapi',`APIURL`='$apiurl',`SENDERNAME`='$sendername', `APIKEY`='$apikey',`STATUS`='$status' WHERE `ID` = $id")){
        echo "<script> alert('SMS Api Updated') 
        location.replace('sms-api.php');
        </script>";
    }
    else{
        echo "<script> alert('Fail to Updated') 
        location.replace('sms-api.php');
        </script>";
    }
    
}


// $id = $_GET['id'];
// if(isset($_POST['smsapisubmit']))
//   {
//      $smsapi = $_POST['smsapi'];
//      $apiurl = $_POST['apiurl'];
//      $sendername = $_POST['sendername'];
//      $apikey = $_POST['apikey'];
//      $status = $_POST['status'];
     
//      $query = "UPDATE `smsApi` SET `APINAME`='$smsapi',`APIURL`='$apiurl',`SENDERNAME`='$sendername', `APIKEY`='$apikey',`STATUS`='$status' WHERE `ID` = $id";
 
    
//      $query_run = mysqli_query($con,$query);

//      if($query_run)
//      {
//       echo '<script>alert("Data Updated")</script>';
//      }
//      else
//      {
//       echo '<script>alert("Data Not Updated")</script>';
//      }

//   }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> SMS Api </title>

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

    <link rel="stylesheet" type="text/css"
        href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <link href="../bower_components/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="../bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css"
        rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/css/component.css">

    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
    <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
               <!-- Top Header -->
               <?php
            include "topheader.php";
            ?>
            <!-- END Top Header -->

            <!--  LiveChat -->
            <?php
            include "Livechat.php";
            ?>
            <!-- END LiveChat -->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- sidebarlist -->
                    <?php
                        include "sidebarlist.php";
                    ?>
                    <!-- sidebarlist -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4> SMS Api </h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">CRM Managment</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!"> SMS Api </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="page-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Edit API</h5>
                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>
                                                <i class="icofont icofont-refresh"></i>
                                                <i class="icofont icofont-close-circled"></i>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <?php 
                                            $id = $_GET['id'];
                                                $row = $con->query("SELECT * FROM smsApi where ID='$id'")->fetch_assoc();

                                            ?>
                                            <form method="post" action="" >
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">API Name</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['APINAME'] ?>" name="smsapi"
                                                            id="name" placeholder="API Name">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label for="">SMS API URL</label>
                                                        <input type="text" class="form-control" name="apiurl"
                                                            id="name" value="<?php echo $row['APIURL'] ?>" placeholder="EX -  http://sms.bulksmsind.in/sendSMS?username=usernsame">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Sender Name</label>
                                                        <input type="text" value="<?php echo $row['SENDERNAME'] ?>"  class="form-control" name="sendername"
                                                            id="name" placeholder="EX - DEMO">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API Key</label>
                                                        <input type="text" class="form-control" name="apikey"
                                                            id="name" value="<?php echo $row['APIKEY'] ?>" placeholder="EX - acd15488-5bb6-422f-4f04-03db78bd7c6f">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Status</label>
                                                        <div class="input-group">
                                                            <select name="status"  class="form-control">
                                                                <option >---- Select Status ----</option>
                                                                <option <?php echo ($row['STATUS'] == "activate") ? "selected" : "" ;?> value="activate">Activate</option>
                                                                <option <?php echo ($row['STATUS'] == "deactivate") ? "selected" : ""; ?> value="deactivate">Deactivate</option>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-group row text-center">
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="submit" class="btn btn-primary m-b-0">Update
                                                        </button>
                                                        <button type="submit"
                                                            class="btn btn-primary m-b-0">Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                      
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    
    
    
    ?>

    <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

    <script type="text/javascript" src="../bower_components/classie/classie.js"></script>

    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="../bower_components/jquery.filer/js/jquery.filer.min.js"></script>
    <script src="assets/pages/filer/custom-filer.js" type="text/javascript"></script>
    <script src="assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>

    <script src="assets/js/classie.js"></script>
    <script src="assets/js/modalEffects.js"></script>

    <script type="text/javascript" src="assets/pages/product-list/product-list.js"></script>

    <script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

</html>