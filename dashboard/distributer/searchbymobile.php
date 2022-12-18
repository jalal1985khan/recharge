<?php
session_start();
if(!isset($_SESSION["distributer_status"]) || $_SESSION["distributer_status"]==="0"){
header("location:../../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>search by Mobile</title>

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
                                            <h4>Search By Mobile</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!"> Report</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Search By Mobile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                       
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Search By Mobile</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <button type="button"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Filter
                                                </button>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                    <table id="custm-tool-ele"
                                                        class="table table-striped table-bordered nowrap">
                                                    
                                                        <thead>
                                                            <tr>
                                                                <th>Trans. ID</th>
                                                                <th>Trans. Date</th>
                                                                <th>Retailer</th>
                                                                <th>Mobile/ Cust. ID</th>
                                                                <th>Operator Name</th>
                                                                <th>Type</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                                <td>Tiger</td>
                                                                <td>Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            
                                                        </tfoot>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="md-modal md-effect-13 addcontact" id="modal-13">
                                            <div class="md-content">
                                                <h3 class="f-26">Filter number</h3>
                                                <div>
                                                    <h6>Mobile number</h6>
                                                   <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-phone"></i></span>
                                                        <input type="number" class="form-control pname">
                                                    </div>

                                                  <div class="text-center">
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Filter</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>

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

<!-- Mirrored from flatable.phoenixcoded.net/default/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:19:36 GMT -->

</html>