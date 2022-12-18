<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}
include("../includes/config.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $txt = $_POST['text'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    
    $dest = "../../images/carousel/".$img_name;
    if($con->query("update home_slider set TEXT='$txt' where ID='$id'")){
        echo "<script>alert('Updated')</script>";
        if($img_name != ""){
            $con->query("update home_slider set IMAGE='$img_name' where ID='$id'");
            move_uploaded_file($img['tmp_name'] , $dest);
            // echo $dest;
        }
    }
    
}

if(isset($_GET["empty1"])){
    $con->query("update home_slider set IMAGE='' where ID='1'");
            echo "<script>alert('Updated')</script>";
}

if(isset($_GET["empty2"])){
    $con->query("update home_slider set IMAGE='' where ID='2'");
            echo "<script>alert('Updated')</script>";

}

if(isset($_GET["empty3"])){
    $con->query("update home_slider set IMAGE='' where ID='3'");
            echo "<script>alert('Updated')</script>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>slider</title>

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

    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/bars-1to10.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/bars-horizontal.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/bars-movie.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/bars-pill.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/bars-reversed.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/bars-square.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-bar-rating/dist/themes/css-stars.css">

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
                                            <h4>Slider</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">CRM</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">slider</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Slider</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="product-edit">
                                                                    <ul class="nav nav-tabs nav-justified md-tabs "
                                                                        role="tablist">
                                                                       
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-toggle="tab"
                                                                                href="#messages7" role="tab">
                                                                                <div class="f-26">
                                                                                    <i
                                                                                        class="icofont icofont-ui-image"></i>
                                                                                </div>
                                                                                Pictures
                                                                            </a>
                                                                            <div class="slide"></div>
                                                                        </li>
                                                                        
                                                                    </ul>

                                                                   
                                                                        <div class="tab-pane" id="messages7"
                                                                            role="tabpanel">
                                                                            <?php
                                                                            $row = $con->query("select * from home_slider where ID=1")->fetch_assoc();
                                                                            ?>
                                                                            <div class="md-float-material card-block">
                                                                                <div class="row p-t-10 p-b-10">
                                                                                    <div
                                                                                        class="col-lg-3 col-md-6 col-sm-12">
                                                                                        <a href="#">
                                                                                            <img src="../../images/carousel/<?php echo $row['IMAGE']?>"
                                                                                                class="img-fluid width-100"
                                                                                                alt="img-edit">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-9 col-md-6 col-sm-12">
                                                                                        <div class="row">
                                                                                            <form  method="post" enctype="multipart/form-data">
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-addon"><i
                                                                                                            class="icofont icofont-all-caps"></i></span>
                                                                                                    <input type="text" name="text"
                                                                                                        class="form-control" value="<?php echo $row['TEXT']?>"
                                                                                                        placeholder="Label Name">
                                                                                                </div>
                                                                                                <input type="hidden" name="id" value="<?php echo $row['ID']?>">
                                                                                                    <label><?php echo $row['IMAGE']?></label>
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-addon"><i
                                                                                                            class="icofont icofont-all-caps"></i></span>
                                                                                                    <input type="file" name="img"
                                                                                                        class="form-control"
                                                                                                        placeholder="Label Name">
                                                                                                </div>
                                                                                                
                                                                                                <div
                                                                                                    class="col-xs-6 edit-right text-right">
                                                                                                    
                                                                                                    <button
                                                                                                        type="submit" name="update"
                                                                                                        class="btn btn-primary waves-effect waves-light">
                                                                                                        <i
                                                                                                            class="ti-cloud-up f-16 m-l-5"></i>Update
                                                                                                    </button>
                                                                                                    <a href="carousel.php?empty1" class="btn btn-danger waves-effect waves-light">Remove
                                                                                                        <i
                                                                                                            class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="row p-t-10 p-b-10">
                                                                                    <div
                                                                                     <?php
                                                                            $row2 = $con->query("select * from home_slider where ID=2")->fetch_assoc();
                                                                            
                                                                            ?>
                                                                                        class="col-lg-3 col-md-6 col-sm-12">
                                                                                        <a href="#">
                                                                                            <img src="../../images/carousel/<?php echo $row2['IMAGE']?>"
                                                                                                class="img-fluid width-100"
                                                                                                alt="img-edit">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-9 col-md-6 col-sm-12">
                                                                                        <div class="row">
                                                                                            <form  method="post" enctype="multipart/form-data">
                                                                                                
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-addon"><i
                                                                                                            class="icofont icofont-all-caps"></i></span>
                                                                                                    <input type="text" name="text"
                                                                                                        class="form-control" value="<?php echo $row2['TEXT']?>"
                                                                                                        placeholder="Label Name">
                                                                                                </div>
                                                                                                <input type="hidden" name="id" value="<?php echo $row2['ID']?>">
                                                                                                    <label><?php echo $row2['IMAGE']?></label>
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-addon"><i
                                                                                                            class="icofont icofont-all-caps"></i></span>
                                                                                                    <input type="file" name="img"
                                                                                                        class="form-control"
                                                                                                        placeholder="Label Name">
                                                                                                </div>
                                                                                                
                                                                                                <div
                                                                                                    class="col-xs-6 edit-right text-right">
                                                                                                    
                                                                                                    <button
                                                                                                        type="submit" name="update"
                                                                                                        class="btn btn-primary waves-effect waves-light">
                                                                                                        <i
                                                                                                            class="ti-cloud-up f-16 m-l-5"></i>Update
                                                                                                    </button>
                                                                                                    <a href="carousel.php?empty2" class="btn btn-danger waves-effect waves-light">Remove
                                                                                                        <i
                                                                                                            class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="row p-t-10">
                                                                                    <div
                                                                                         <?php
                                                                            $row3 = $con->query("select * from home_slider where ID=3")->fetch_assoc();
                                                                            
                                                                            ?>
                                                                                        class="col-lg-3 col-md-6 col-sm-12">
                                                                                        <a href="#">
                                                                                            <img src="../../images/carousel/<?php echo $row3['IMAGE']?>"
                                                                                                class="img-fluid width-100"
                                                                                                alt="img-edit">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-9 col-md-6 col-sm-12">
                                                                                        <div class="row">
                                                                                            <form  method="post" enctype="multipart/form-data">
                                                                                                
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-addon"><i
                                                                                                            class="icofont icofont-all-caps"></i></span>
                                                                                                    <input type="text" name="text"
                                                                                                        class="form-control" value="<?php echo $row3['TEXT']?>"
                                                                                                        placeholder="Label Name">
                                                                                                </div>
                                                                                                <input type="hidden" name="id" value="<?php echo $row3['ID']?>">
                                                                                                        <label><?php echo $row3['IMAGE']?></label>
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-addon"><i
                                                                                                            class="icofont icofont-all-caps"></i></span>
                                                                                                    <input type="file" name="img"
                                                                                                        class="form-control"
                                                                                                        placeholder="Label Name">
                                                                                                </div>
                                                                                                
                                                                                                <div
                                                                                                    class="col-xs-6 edit-right text-right">
                                                                                                    
                                                                                                    <button
                                                                                                        type="submit" name="update"
                                                                                                        class="btn btn-primary waves-effect waves-light">
                                                                                                        <i
                                                                                                            class="ti-cloud-up f-16 m-l-5"></i>Update
                                                                                                    </button>
                                                                                                    <a href="carousel.php?empty3"class="btn btn-danger waves-effect waves-light">Remove
                                                                                                        <i
                                                                                                            class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
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

                                </div>
                            </div>

                            <div id="styleSelector">
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

    <script type="text/javascript" src="../bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="assets/pages/rating/rating.js"></script>

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