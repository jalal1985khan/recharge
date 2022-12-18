<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All User</title>

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
                        include "sidebarlist.php"
                    ?>
                    <!-- sidebarlist -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>All User</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!"> User Managment</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">All User</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                
                                    
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>All User</h5>
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <!-- <button type="button"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> For Filter
                                                </button> -->
                                            </div>
                                              <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="new-cons"
                                                        class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                               <th>S.NO</th>
                                                               <th>Type</th>
                                                               
                                                                <th>Image</th>
                                                                <th>Name</th>
                                                                <th>Mobile Number</th>
                                                                <th>RC BAL</th>
                                                                <th>DMR BAL</th>
                                                                <th>SMS BAL</th>
                                                                <th>Cutt off</th>
                                                                <th>Reg. Date</th>
                                                               
                                                                <th>API Access</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                         <?php
                                $res = $con->query("SELECT * FROM retailer order by ID asc");
                                if($res->num_rows > 0){
                                    while($row = $res->fetch_assoc()){
                                        $rt_am += $row['RCBAL'];
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['ID'] ?> </td>
                                                    <td>Retailer</td>
                                                    <td><img src="../retailer/img/<?php echo $row['IMAGE'] ?>" width="70px"> </td>
                                                    <td><?php echo $row['FNAME'] . $row['LNAME'] ?></td>
                                                    <td><?php echo $row['MOBILE'] ?> </td>
                                                    <td><?php echo $row['RCBAL'] ?> </td>
                                                    <td><?php echo $row['DMRBAL'] ?> </td>
                                                    <td><?php echo $row['SMSBAL'] ?> </td>
                                                    <td><?php echo $row['CUTTOFFAMOUNT'] ?> </td>
                                                    <td><?php echo $row['REGDATE'] ?> </td>
                                                    <td><?php $row['APIACCESS'] ?> </td>
                                                   
                
                                                </tr>
                                                <?php
                                                  }
                                                }
                                                    
                                                ?>
                                                            <?php
                                $res = $con->query("SELECT * FROM distributer order by ID asc");
                                if($res->num_rows > 0){
                                    while($row = $res->fetch_assoc()){
                                                $ds_am += $row['RCBAL'];
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['ID'] ?> </td>
                                                    <td>Distributer</td>
                                                    <td><img src="../distributer/img/<?php echo $row['IMAGE'] ?>" width="70px"> </td>
                                                    <td><?php echo $row['NAME'] ?></td>
                                                    <td><?php echo $row['MOBILE'] ?> </td>
                                                    <td><?php echo $row['RCBAL'] ?> </td>
                                                    <td><?php echo $row['DMRBAL'] ?> </td>
                                                    <td><?php echo $row['SMSBAL'] ?> </td>
                                                    <td><?php echo $row['CUTTOFFAMOUNT'] ?> </td>
                                                    <td><?php echo $row['REGDATE'] ?> </td>
                                                    <td><?php $row['APIACCESS'] ?> </td>
                                                   
                
                                                </tr>
                                                <?php
                                                  }
                                                }
                                                    
                                                ?>
                                                  <?php
                                $res = $con->query("SELECT * FROM masterdistributer order by ID asc");
                                if($res->num_rows > 0){
                                    while($row = $res->fetch_assoc()){
                                        $ms_am += $row['RCBAL'];
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['ID'] ?> </td>
                                                    <td>Masterdistributer</td>
                                                    <td><img src="../masterdistributer/img/<?php echo $row['IMAGE'] ?>" width="70px"> </td>
                                                    <td><?php echo $row['NAME']?></td>
                                                    <td><?php echo $row['MOBILE'] ?> </td>
                                                    <td><?php echo $row['RCBAL'] ?> </td>
                                                    <td><?php echo $row['DMRBAL'] ?> </td>
                                                    <td><?php echo $row['SMSBAL'] ?> </td>
                                                    <td><?php echo $row['CUTTOFFAMOUNT'] ?> </td>
                                                    <td><?php echo $row['REGDATE'] ?> </td>
                                                    <td><?php $row['APIACCESS'] ?> </td>
                                                   
                
                                                </tr>
                                                <?php
                                                  }
                                                }
                                                    
                                                ?>
                                                        <!--</tbody>-->
                                                        <!--<tfoot>-->
                                                        <!--   <th>Total Amount</th>-->
                                                        <!--   <th></th>-->
                                                        <!--   <th></th>-->
                                                        <!--   <th></th>-->
                                                        <!--   <th></th>-->
                                                           <!--<th>-->
                                                               <?php // echo $rt_am+$ds_am+$ms_id ?> 
                                                               <!--</th>-->
                                                        <!--</tfoot>-->
                                                        
                                                    <!--</table>-->
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



    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

    <script type="text/javascript" src="../bower_components/classie/classie.js"></script>

    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/pages/data-table/js/jszip.min.js"></script>
    <script src="assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="../bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script src="assets/pages/data-table/extensions/responsive/js/responsive-custom.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:19:36 GMT -->

</html>