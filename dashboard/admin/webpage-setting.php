<?php

session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}
include("../includes/config.php");

if(isset($_POST['home_update'])){
    $text = $_POST['text'];
    $con->query("UPDATE `web_page` SET HOME_PAGE='$text' where ID='1'");
    echo "<script>alert('Updated')</script>";
}

if(isset($_POST['service_update'])){
    $text = $_POST['text'];
    $con->query("UPDATE `web_page` SET SERVICE_PAGE='$text' where ID='1'");
    echo "<script>alert('Updated')</script>";
}

if(isset($_POST['recharge_update'])){
    $text = $_POST['text'];
    $con->query("UPDATE `web_page` SET RECHARGE_PAGE='$text' where ID='1'");
    echo "<script>alert('Updated')</script>";
}

if(isset($_POST['travel_update'])){
    $text = $_POST['text'];
    $con->query("UPDATE `web_page` SET TRAVEL_PAGE='$text' where ID='1'");
    echo "<script>alert('Updated')</script>";
}


if(isset($_POST['contact_update'])){
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $whatsapp = $_POST['whatsapp'];
    $con->query("UPDATE `web_page` SET `CONTACT_NO`='$mobile',`WHATSAPP`='$whatsapp',`EMAIL`='$email',`LOCATION`='$location' where ID='1'");
    echo "<script>alert('Updated')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>web page setting</title>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">


<!--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">-->

<!--<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">-->

<!--<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">-->

<!--<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">-->

<!--<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">-->

<!--<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">-->

<!--<link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css" />-->

<!--<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />-->
<!--<link rel="stylesheet" type="text/css" href="../bower_components/multiselect/css/multi-select.css" />-->

<!--<link rel="stylesheet" type="text/css" href="assets/css/style.css">-->

<!--<link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />-->
<!--<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">-->
<!--<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">-->
<!--<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">-->
<!--<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css" />

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
<link rel="stylesheet" type="text/css" href="../bower_components/multiselect/css/multi-select.css" />

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

</head>

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
                                            <h4>web page setting</h4>
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
                                                <li class="breadcrumb-item"><a href="#!">web page setting</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                      <div class="card">
                                    <div class="card-header">
                                        <h5>Filter List</h5>
                                        <div class="card-header-right">
                                            <i class="icofont icofont-rounded-down"></i>
                                            <i class="icofont icofont-refresh"></i>
                                            <i class="icofont icofont-close-circled"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <form method="post">
                                            
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label>Select Web Page</label>
                                                    <div class="input-group">
                                                        <select id="" name="type" class="form-control">
                                                            <option <?php echo (isset($_POST['type']) == "home") ? "selected" : "" ?> value="home">Home Page</option>
                                                            <option <?php echo (isset($_POST['type']) == "services") ? "selected" : "" ?> value="services">Service Page</option>
                                                            <option <?php echo (isset($_POST['type']) == "recharge") ? "selected" : "" ?> value="recharge">Recharge Page</option>
                                                            <option <?php echo (isset($_POST['type']) == "travel") ? "selected" : "" ?> value="travel">Travel Page</option>
                                                            <option <?php echo (isset($_POST['type']) == "contact") ? "selected" : "" ?> value="contact">Contact Page</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                           

                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="filter"
                                                        class="btn btn-primary m-b-0">Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                        <?php
                                    if(isset($_POST['filter'])){
                                        $page = $_POST['type'];
                                        if($page == "contact"){
                                        ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Contact Page</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                            </div>
                                           <div class="card-block">
                                                <form method="post">
                                                    <div class="form-group row">
                                                        <?php
                                                        $row = $con->query("select * from `web_page` where ID='1'")->fetch_assoc();
                                                        ?>
                                                        <div class="col-sm-3">
                                                            <label>Mobile Number</label>
                                                              <input class="form-control" value="<?php echo $row['CONTACT_NO'] ?>"  required name="mobile" >
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Email</label>
                                                              <input class="form-control" value="<?php echo $row['EMAIL'] ?>" required name="email" >
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Location</label>
                                                              <input class="form-control" value="<?php echo $row['LOCATION'] ?>" required name="location" >
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Whatsapp</label>
                                                              <input class="form-control" value="<?php echo $row['WHATSAPP'] ?>" required name="whatsapp" >
                                                        </div>
                                                    </div>
                                                    <div class="row text-center">
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="contact_update"
                                                                class="btn btn-primary m-b-0">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>
                                        <?php }
                                        elseif($page == "services"){ ?>
                                        
                                    <!--/active home page-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Services Page</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                            </div>
                                           <div class="card-block">
                                                <form method="post">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label>Services Information</label>
                                                            <?php
                                                            $row2 = $con->query("select * from `web_page` where ID='1'")->fetch_assoc();
                                                            ?>
                                                            <div class="input-group col-sm-12">
                                                                <textarea class="form-group col-sm-12" rows="10" required name="text"><?php echo $row2['SERVICE_PAGE'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
        
                                                    <div class="row text-center">
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="service_update"
                                                                class="btn btn-primary m-b-0">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>
                                        <?php }
                                        elseif($page == "recharge"){ ?>
                                           
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Recharge Page</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                            </div>
                                           <div class="card-block">
                                                <form method="post">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label>Recharge Information</label>
                                                            <?php
                                                            $row2 = $con->query("select * from `web_page` where ID='1'")->fetch_assoc();
                                                            ?>
                                                            <div class="input-group col-sm-12">
                                                                <textarea class="form-group col-sm-12" rows="10" required name="text"><?php echo $row2['RECHARGE_PAGE'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
        
                                                    <div class="row text-center">
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="recharge_update"
                                                                class="btn btn-primary m-b-0">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>
                                        <?php }
                                        elseif($page == "travel"){ ?>
                                        
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Travel Page</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                            </div>
                                           <div class="card-block">
                                                <form method="post">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label>Travel Information</label>
                                                            <?php
                                                            $row2 = $con->query("select * from `web_page` where ID='1'")->fetch_assoc();
                                                            ?>
                                                            <div class="input-group col-sm-12">
                                                                <textarea class="form-group col-sm-12" rows="10" required name="text"><?php echo $row2['TRAVEL_PAGE'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
        
                                                    <div class="row text-center">
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="travel_update"
                                                                class="btn btn-primary m-b-0">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>
                                        <?php }  }?>
                                        
                                        
                                        
                                        
                                        
                                         <?php
                                    if(!isset($_POST['filter']) && !isset($_POST['type'])){
                                        ?>
  
                                    <!--/active home page-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Home Page</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                            </div>
                                           <div class="card-block">
                                                <form method="post">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label>Home Information</label>
                                                            <?php
                                                            $row2 = $con->query("select * from `web_page` where ID='1'")->fetch_assoc();
                                                            ?>
                                                            <div class="input-group col-sm-12">
                                                                <textarea class="form-group col-sm-12" rows="10" required name="text"><?php echo $row2['HOME_PAGE'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
        
                                                    <div class="row text-center">
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="home_update"
                                                                class="btn btn-primary m-b-0">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>
                                            <?php } ?>
                                  
                               
                             
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
                                        
              

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/classie.js"></script>

<script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="../bower_components/select2/dist/js/select2.full.min.js"></script>

<script type="text/javascript" src="../bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js">
    </script>
<script type="text/javascript" src="../bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/pages/advance-elements/select2-custom.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>
</html>

