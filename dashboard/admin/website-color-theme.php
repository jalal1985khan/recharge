<?php


session_start();
include("../includes/config.php");

if(isset($_POST['submit'])){
    $color1 = $_POST['color1'];
    $color2 = $_POST['color2'];
    $color3 = $_POST['color3'];
    $color4 = $_POST['color4'];

    if($con->query("UPDATE `web-theme` SET `COLOR1`='$color1',`COLOR2`='$color2',`COLOR3`='$color3',`COLOR4`='$color4' WHERE ID=1")){
        echo "<script>alert('Updated') </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Color Theme</title>

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

    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

    <link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" type="text/css" href="../bower_components/datedropper/datedropper.min.css" />

    <link rel="stylesheet" type="text/css" href="../bower_components/spectrum/spectrum.css" />

    <link rel="stylesheet" type="text/css" href="../bower_components/jquery-minicolors/jquery.minicolors.css" />

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
                                            <h4>Form Picker</h4>
                                            <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing
                                                elit</span>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Form Picker</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <!--<div class="page-body">-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-sm-12">-->
                                    <!--            <div class="card">-->
                                    <!--                <div class="card-header">-->
                                    <!--                    <h5>Color Picker</h5>-->
                                    <!--                    <span>Add class of <code>.form-control</code> with-->
                                    <!--                        <code>&lt;input&gt;</code> tag</span>-->
                                    <!--                    <div class="card-header-right">-->
                                    <!--                        <i class="icofont icofont-rounded-down"></i>-->
                                    <!--                        <i class="icofont icofont-refresh"></i>-->
                                    <!--                        <i class="icofont icofont-close-circled"></i>-->
                                    <!--                    </div>-->
                                    <!--                </div>-->
                                    <!--                <div class="card-block">-->
                                    <!--                    <div class="row">-->
                                    <!--                        <div class="col-sm-4">-->
                                    <!--                            <h4 class="sub-title">Flat Mode</h4>-->
                                    <!--                            <div class="form-group">-->
                                    <!--                                <input type="text" id="flat" />-->
                                    <!--                            </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="col-sm-4">-->
                                    <!--                            <h4 class="sub-title">Flat Mode With Clear</h4>-->
                                    <!--                            <div class="form-group">-->
                                    <!--                                <input type='text' id="flatClearable" />-->
                                    <!--                            </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="col-sm-4">-->
                                    <!--                            <h4 class="sub-title"> No Icon (Input Field Only)</h4>-->
                                    <!--                            <div class="form-group">-->
                                    <!--                                <input type='color' name='color' />-->
                                    <!--                                <input type='color' name='color2' value='#3355cc' />-->
                                    <!--                                <hr />-->
                                    <!--                                <input type="color" />-->
                                    <!--                            </div>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                                    <!--                </div>-->
                                    <!--            </div>-->


                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Mini Color</h5>
                                                        <span>Add class of <code>.form-control</code> with
                                                            <code>&lt;input&gt;</code> tag</span>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h4 class="sub-title">Control-Types</h4>
                                                                <form method="post">
                                                                    <?php
                                                                       $color = $con->query("SELECT * FROM `web-theme` WHERE ID=1");
                                                                        $row = $color->fetch_assoc();
                                                                    ?>
                                                                <div class="card-block inner-card-block">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <h4 class="sub-title">Primary Gradient <?php echo $row['COLOR1'] ?></h4>
                                                                            <input name="color1" type="text" id="hue-demo"
                                                                                class="form-control demo" value="<?php echo $row['COLOR1'] ?>">
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <h4 class="sub-title">Secondary Gradient <?php echo $row['COLOR2'] ?></h4>
                                                                            <input name="color2" type="text" id="saturation-demo"
                                                                                class="form-control demo" value="<?php echo $row['COLOR2'] ?>">
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <h4 class="sub-title">Tertery Gradient <?php echo $row['COLOR3'] ?></h4>
                                                                            <input name="color3" type="text" id="brightness-demo"
                                                                                class="form-control demo" value="<?php echo $row['COLOR3'] ?>">
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <h4 class="sub-title">Quatnery Gradient <?php echo $row['COLOR4'] ?></h4>
                                                                            <input name="color4" type="text" id="wheel-demo"
                                                                                class="form-control demo" value="<?php echo $row['COLOR4'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="card-block">-->
                                                    <!--    <div class="row">-->
                                                    <!--        <div class="col-sm-12">-->
                                                    <!--            <h4 class="sub-title">Input Modes</h4>-->
                                                    <!--            <div class="card-block inner-card-block">-->
                                                    <!--                <div class="row">-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <div class="row">-->
                                                    <!--                            <div class="col-sm-12 m-b-30">-->
                                                    <!--                                <h4 class="sub-title">Text field-->
                                                    <!--                                </h4>-->
                                                    <!--                                <input type="text" id="text-field"-->
                                                    <!--                                    class="form-control demo"-->
                                                    <!--                                    value="#70c24a">-->
                                                    <!--                            </div>-->
                                                    <!--                            <div class="col-sm-12">-->
                                                    <!--                                <h4 class="sub-title">Hidden Input-->
                                                    <!--                                </h4>-->
                                                    <!--                                <input type="hidden"-->
                                                    <!--                                    id="hidden-input" class="demo"-->
                                                    <!--                                    value="#db913d">-->
                                                    <!--                            </div>-->
                                                    <!--                        </div>-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Brightness</h4>-->
                                                    <!--                        <input type="text" id="inline"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-inline="true" value="#4fc8db">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                    <!--    <div class="row">-->
                                                    <!--        <div class="col-sm-12">-->
                                                    <!--            <h4 class="sub-title">Positions</h4>-->
                                                    <!--            <div class="card-block inner-card-block">-->
                                                    <!--                <div class="row">-->
                                                    <!--                    <div class="col-sm-3">-->
                                                    <!--                        <h4 class="sub-title">bottom left (default)-->
                                                    <!--                        </h4>-->
                                                    <!--                        <input type="text" id="position-bottom-left"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-position="bottom left"-->
                                                    <!--                            value="#0088cc">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-3">-->
                                                    <!--                        <h4 class="sub-title">top left</h4>-->
                                                    <!--                        <input type="text" id="position-top-left"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-position="top left"-->
                                                    <!--                            value="#0088cc">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-3">-->
                                                    <!--                        <h4 class="sub-title">bottom right</h4>-->
                                                    <!--                        <input type="text"-->
                                                    <!--                            id="position-bottom-right"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-position="bottom right"-->
                                                    <!--                            value="#0088cc">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-3">-->
                                                    <!--                        <h4 class="sub-title">top right</h4>-->
                                                    <!--                        <input type="text" id="position-top-right"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-position="top right"-->
                                                    <!--                            value="#0088cc">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                    <!--    <div class="row">-->
                                                    <!--        <div class="col-sm-12">-->
                                                    <!--            <h4 class="sub-title">RGB(A)</h4>-->
                                                    <!--            <div class="card-block inner-card-block">-->
                                                    <!--                <div class="row">-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">RGB</h4>-->
                                                    <!--                        <input type="text" id="rgb"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-format="rgb"-->
                                                    <!--                            value="rgb(33, 147, 58)">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">RGBA</h4>-->
                                                    <!--                        <input type="text" id="rgba"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-format="rgb" data-opacity=".5"-->
                                                    <!--                            value="rgba(52, 64, 158, 0.5)">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                    <!--    <div class="row">-->
                                                    <!--        <div class="col-sm-12">-->
                                                    <!--            <h4 class="sub-title">More</h4>-->
                                                    <!--            <div class="card-block inner-card-block">-->
                                                    <!--                <div class="row m-b-30">-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Opacity</h4>-->
                                                    <!--                        <input type="text" id="opacity"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-opacity=".5" value="#766fa8">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Keywords</h4>-->
                                                    <!--                        <input type="text" id="keywords"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-keywords="transparent, initial, inherit"-->
                                                    <!--                            value="transparent">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--                <div class="row m-b-30">-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Default Value</h4>-->
                                                    <!--                        <input type="text" id="default-value"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-defaultValue="#ff6600">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Letter Case</h4>-->
                                                    <!--                        <input type="text" id="letter-case"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-letterCase="uppercase"-->
                                                    <!--                            value="#abcdef">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--                <div class="row m-b-30">-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Swatches</h4>-->
                                                    <!--                        <input type="text" id="swatches"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|#0ff"-->
                                                    <!--                            value="#abcdef">-->
                                                    <!--                    </div>-->
                                                    <!--                    <div class="col-sm-6">-->
                                                    <!--                        <h4 class="sub-title">Swatches and opacity-->
                                                    <!--                        </h4>-->
                                                    <!--                        <input type="text" id="swatches-2"-->
                                                    <!--                            class="form-control demo"-->
                                                    <!--                            data-format="rgb" data-opacity="1"-->
                                                    <!--                            data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)"-->
                                                    <!--                            value="rgba(14, 206, 235, .5)">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
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

    <script type="text/javascript" src="assets/pages/advance-elements/moment-with-locales.min.js"></script>
    <script type="text/javascript"
        src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript" src="../bower_components/datedropper/datedropper.min.js"></script>

    <script type="text/javascript" src="../bower_components/spectrum/spectrum.js"></script>
    <script type="text/javascript" src="../bower_components/jscolor/jscolor.js"></script>

    <script type="text/javascript" src="../bower_components/jquery-minicolors/jquery.minicolors.min.js"></script>

    <script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/pages/advance-elements/custom-picker.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
</body>


</html>