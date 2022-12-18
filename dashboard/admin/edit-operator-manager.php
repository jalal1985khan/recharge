<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");
 
   if(isset($_POST['submitoperatormanager']))
   {
     $service = $_POST['selectservice'];
     $serviceapi = $_POST['serviceapi'];
     $productname = $_POST['productname'];
     $productcode = $_POST['productcode'];
     $apiservicename = $_POST['apiservicename'];
     $status = $_POST['status'];
     $id = $_POST['id'];

     
     $query = "UPDATE `operatorManager` SET `SERVICE`='$service',
     `SERVICEAPI`='$serviceapi',`PRODUCTNAME`='$productname',
     `PRODUCTCODE`='$productcode',`APISERVICENAME`='$apiservicename',`STATUS`='$status' WHERE ID='$id'";
     		
    $query_run = mysqli_query($con,$query);
     if($query_run)
     {
       echo '<script>alert("Operator Manager is Updated")
       location.replace("operator-manager.php");
       </script>';
     }
 
     else
     {
       echo '<script>alert("Failed to Update Operator Manaager")</script>';
     }

  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Manager</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
                                            <h4>Operator Manager</h4>
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
                                                <li class="breadcrumb-item"><a href="#!">Operator Manager</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                    <div class="card">
                                     
                                        <div class="card-block">
                                            
                                                <form  method="post" action="" >
                                                <div class="form-group row">
                                                    <?php  
                                                   
                                                          $id = $_GET['id'];
                                                          $query = "SELECT * FROM `operatorManager` WHERE ID= '$id'";
                                                          $run = mysqli_query($con , $query);
                                                          
                                                          $operator = mysqli_fetch_array($run);
                                                      
                                                    ?>
                                                    <div class="col-sm-4">
                                                        <label for="">Select Service </label>
                                                        <div class="input-group">
                                                            <select name="selectservice" class="form-control">
                                                                <option selected value="<?php echo $operator['SERVICE']?>"><?php echo $operator['SERVICE']?></option>
                                                                 <?php
                                                                $query = "SELECT * FROM serviceManager order by ID asc";
                                                                $run = mysqli_query($con , $query);
                                              
                                                                while($row = mysqli_fetch_array($run)){
                                                        
                                                                echo "<option value='".$row['SERVICENAME']."'>".$row['SERVICENAME']."</option>>";
                                                                 }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Select Service API</label>
                                                        <div class="input-group">
                                                            <select name="serviceapi" class="form-control">
                                                                <option selected value="<?php echo $operator['SERVICEAPI']?>"><?php echo $operator['SERVICEAPI'] ?></option>
                                                                <?php
                                                                $query = "SELECT * FROM rechargeApi order by ID asc";
                                                                $run = mysqli_query($con , $query);
                                              
                                                                while($row = mysqli_fetch_array($run)){
                                                        
                                                                echo "<option value='".$row['NAME']."'>".$row['NAME']."</option>>";
                                                                 }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Product Name</label>
                                                        <input type="text" class="form-control" name="productname" value="<?php echo $operator['PRODUCTNAME'] ?>">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Product Code</label>
                                                        <input type="text" class="form-control" name="productcode" value="<?php echo $operator['PRODUCTCODE'] ?>" placeholder="Product Code from api doc">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API Service Name</label>
                                                            <select name="apiservicename" class="form-control">
                                                          <option value="" disabled>---- Select Service Name ----</option>
                                                               <option <?php echo ($operator['APISERVICENAME'] == "OPERATOR") ? "selected" : "" ?> value="OPERATOR">OPERATOR</option>>
                                                            <option <?php echo ($operator['APISERVICENAME'] == "CIRCLE") ? "selected" : "" ?> value="CIRCLE">CIRCLE</option>>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Select Status</label>
                                                        <div class="input-group">
                                                            <select name="status" class="form-control">
                                                                <option  value="">---- Select Status ----</option>
                                                                <option <?php echo ($operator['STATUS'] == "activate") ? "selected" : "" ?> value="activate">Activate</option>
                                                                <option <?php echo ($operator['STATUS'] == "deactivate") ? "selected" : "" ?> value="deactivate">Deactivate</option>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                        <input type="hidden" name="id" value="<?php echo $operator['ID'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row text-center">
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="submitoperatormanager" class="btn btn-primary m-b-0">Submit
                                                        </button>
                                                        <button type="submit" class="btn btn-primary m-b-0">Cancel </button>
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