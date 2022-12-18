<?php
session_start();

if(!isset($_SESSION["status"]) || $_SESSION["status"]=="0"){
header("location:login.php");
}
include("../includes/config.php");
if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}




if(isset($_GET['rech_delete'])){
    $rows = $con->query("SELECT * FROM `recharge_history` WHERE DATE < DATE_SUB(NOW() , INTERVAL 30 DAY)")->num_rows;
    if($rows != 0){
        $con->query("DELETE FROM `recharge_history` WHERE DATE < DATE_SUB(NOW() , INTERVAL 30 DAY)");
       echo "<script>alert('Recharge History Deleted Enteries ".$rows." ')</script>";
    }else{
        echo "<script>alert('Already Deleted')
		location.replace('index.php');
		</script>";
    }
}
if(isset($_GET['Api_delete'])){
    $rows = $con->query("SELECT * FROM `ApiHit` WHERE DATE < DATE_SUB(NOW() , INTERVAL 7 DAY)")->num_rows;
    if($rows != 0){
        $con->query("DELETE FROM  `ApiHit` WHERE DATE < DATE_SUB(NOW() , INTERVAL 7 DAY)");
        echo "<script>alert('ApiHIts Deleted Enteries ".$rows." ')</script>";
    }else{
        echo "<script>alert('Already Deleted')
		location.replace('index.php');
		</script>";
    }
}
if(isset($_GET['comm_delete'])){
    $rows = $con->query("SELECT * FROM `comm_rpt` WHERE DATE < DATE_SUB(NOW() , INTERVAL 30 DAY)")->num_rows;
    if($rows != 0){
        $con->query("DELETE FROM  `comm_rpt` WHERE DATE < DATE_SUB(NOW() , INTERVAL 30 DAY)");
       echo "<script>alert('Comm Deleted Enteries ".$rows." ')</script>";
    }else{
        echo "<script>alert('Already Deleted')
		location.replace('index.php');
		</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <title>Recharge365</title>

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
                        include "sidebarlist.php"
                    ?>
                    <!-- sidebarlist -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Dashboard</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Pages</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                         <?php
                                     include("../includes/config.php");
                                     $date=date("Y-m-d");
                                    $success_q = $con->query("SELECT * FROM recharge_history where DATE='$date' and (STATUS='Success' OR STATUS=' Sucess ')");
                                    $success = $success_q->num_rows;
                                    while($row1 = $success_q->fetch_assoc()){
                                        $success_amount += $row1['AMOUNT'];
                                    }
                                    $pending_q = $con->query("SELECT * FROM recharge_history where DATE='$date' and (STATUS='Pending' OR STATUS='pending')");
                                    $pending = $pending_q->num_rows;
                                     while($row2 = $pending_q->fetch_assoc()){
                                        $pending_amount += $row2['AMOUNT'];
                                    }
                                    $fail_q = $con->query("SELECT * FROM recharge_history where DATE='$date' and STATUS<>'Success' and STATUS<>' Sucess ' and STATUS<>'pending' and STATUS<>'Pending'");
                                    $failed = $fail_q->num_rows;
                                     while($row3 = $fail_q->fetch_assoc()){
                                        $failed_amount += $row3['AMOUNT'];
                                    }
                                    ?>
                                    <div class="page-body">
                                        <div class="row">
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card client-blocks dark-primary-border">
                                                <div class="card-block">
                                                    <h5>Success</h5>
                                                    <ul>
                                                        <!--<li>-->
                                                        <!--    <i class="icofont icofont-document-folder"></i>-->
                                                        <!--</li>-->
                                                        <li class="text-right">
                                                         <p class="text-dark m-0 p-0">Number</p> 
                                                            <?php echo $success ?>
                                                        </li>
                                                        <li class="text-right">
                                                         <p class="text-dark m-0 p-0">Amount</p> 
                                                            <?php echo $success_amount ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6 col-xl-4">
                                            <div class="card client-blocks warning-border">
                                                <div class="card-block">
                                                    <h5>Pending</h5>
                                                    <ul>
                                                        <!--<li>-->
                                                        <!--    <i class="icofont icofont-ui-user-group text-warning"></i>-->
                                                        <!--</li>-->
                                                        <li class="text-right text-warning">
                                                             <p class="text-dark m-0 p-0">Number</p> 
                                                            <?php echo $pending ?>
                                                        </li> 
                                                        <li class="text-right text-warning">
                                                          <p class="text-dark  m-0 p-0">Amount</p> 
                                                          <?php echo $pending_amount ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card client-blocks danger-border">
                                                <div class="card-block">
                                                    <h5>Failure</h5>
                                                    <ul>
                                                        <!--<li>-->
                                                        <!--    <i class="icofont icofont-files text-danger"></i>-->
                                                        <!--</li>-->
                                                        <li class="text-right text-danger">
                                                         <p class="text-dark m-0 p-0" >Number</p>
                                                            <?php echo $failed ?>
                                                        </li>
                                                        <li class="text-right text-danger">
                                                         <p class="text-dark m-0 p-0">Amount</p>
                                                            <?php echo $failed_amount ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                            <!--<div class="col-md-12 col-xl-4">-->

                                            <!--    <div class="card table-card">-->
                                            <!--        <div class="">-->
                                            <!--            <div class="row-table">-->
                                            <!--                <div class="col-sm-6 card-block-big br">-->
                                            <!--                    <div class="row">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <i-->
                                            <!--                                class="icofont icofont-eye-alt text-success"></i>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>10k</h5>-->
                                            <!--                            <span>Visitors</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-sm-6 card-block-big">-->
                                            <!--                    <div class="row">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <i-->
                                            <!--                                class="icofont icofont-ui-music text-danger"></i>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>100%</h5>-->
                                            <!--                            <span>Volume</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--        <div class="">-->
                                            <!--            <div class="row-table">-->
                                            <!--                <div class="col-sm-6 card-block-big br">-->
                                            <!--                    <div class="row">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <i class="icofont icofont-files text-info"></i>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>2000 +</h5>-->
                                            <!--                            <span>Files</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-sm-6 card-block-big">-->
                                            <!--                    <div class="row">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <i-->
                                            <!--                                class="icofont icofont-envelope-open text-warning"></i>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>120</h5>-->
                                            <!--                            <span>Mails</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->

                                            <!--</div>-->
                                            <!--<div class="col-md-12 col-xl-4">-->

                                            <!--    <div class="card table-card">-->
                                            <!--        <div class="">-->
                                            <!--            <div class="row-table">-->
                                            <!--                <div class="col-sm-6 card-block-big br">-->
                                            <!--                    <div class="row">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <div id="barchart"-->
                                            <!--                                style="height:40px;width:40px;"></div>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>1000</h5>-->
                                            <!--                            <span>SMS BAL</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-sm-6 card-block-big">-->
                                            <!--                    <div class="row ">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <i-->
                                            <!--                                class="icofont icofont-network text-primary"></i>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>600</h5>-->
                                            <!--                            <span>RC BAL</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--        <div class="">-->
                                            <!--            <div class="row-table">-->
                                            <!--                <div class="col-sm-6 card-block-big br">-->
                                            <!--                    <div class="row ">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <div id="barchart2"-->
                                            <!--                                style="height:40px;width:40px;"></div>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>350</h5>-->
                                            <!--                            <span>DMR BAl</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-sm-6 card-block-big">-->
                                            <!--                    <div class="row ">-->
                                            <!--                        <div class="col-sm-4">-->
                                            <!--                            <i-->
                                            <!--                                class="icofont icofont-network-tower text-primary"></i>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-sm-8 text-center">-->
                                            <!--                            <h5>100%</h5>-->
                                            <!--                            <span>Connections</span>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->

                                            <!--</div>-->
                                            <!--<div class="col-md-12 col-xl-4">-->

                                            <!--    <div class="card table-card widget-primary-card">-->
                                            <!--        <div class="">-->
                                            <!--            <div class="row-table">-->
                                            <!--                <div class="col-sm-3 card-block-big">-->
                                            <!--                    <i class="icofont icofont-star"></i>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-sm-9">-->
                                            <!--                    <h4>4000 +</h4>-->
                                            <!--                    <h6>VISITORS COUNTER</h6>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->


                                            <!--    <div class="card table-card widget-success-card">-->
                                            <!--        <div class="">-->
                                            <!--            <div class="row-table">-->
                                            <!--                <div class="col-sm-3 card-block-big">-->
                                            <!--                    <i class="icofont icofont-trophy-alt"></i>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-sm-9">-->
                                            <!--                    <h4>17</h4>-->
                                            <!--                    <h6>TOTAL USERS</h6>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->

                                            <!--</div>-->
                                            
                                            <!--<div class="col-lg-6">-->
                                            <!--    <div class="card">-->
                                            <!--        <div class="card-block">-->
                                            <!--            <div id="chartdiv"></div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6">-->
                                            <!--    <div class="card">-->
                                            <!--        <div class="card-block">-->
                                            <!--            <div class="cd-horizontal-timeline">-->
                                            <!--                <div class="timeline">-->
                                            <!--                    <div class="events-wrapper">-->
                                            <!--                        <div class="events">-->
                                            <!--                            <ol>-->
                                            <!--                                <li><a href="#0" data-date="16/01/2014"-->
                                            <!--                                        class="selected">16 Jan</a></li>-->
                                            <!--                                <li><a href="#0" data-date="28/02/2014">28-->
                                            <!--                                        Feb</a></li>-->
                                            <!--                                <li><a href="#0" data-date="20/04/2014">20-->
                                            <!--                                        Mar</a></li>-->
                                            <!--                                <li><a href="#0" data-date="20/05/2014">20-->
                                            <!--                                        May</a></li>-->
                                            <!--                                <li><a href="#0" data-date="09/07/2014">09-->
                                            <!--                                        Jul</a></li>-->
                                            <!--                                <li><a href="#0" data-date="30/08/2014">30-->
                                            <!--                                        Aug</a></li>-->
                                            <!--                                <li><a href="#0" data-date="15/09/2014">15-->
                                            <!--                                        Sep</a></li>-->
                                            <!--                                <li><a href="#0" data-date="01/11/2014">01-->
                                            <!--                                        Nov</a></li>-->
                                            <!--                                <li><a href="#0" data-date="10/12/2014">10-->
                                            <!--                                        Dec</a></li>-->
                                            <!--                                <li><a href="#0" data-date="19/01/2015">29-->
                                            <!--                                        Jan</a></li>-->
                                            <!--                                <li><a href="#0" data-date="03/03/2015">3-->
                                            <!--                                        Mar</a></li>-->
                                            <!--                            </ol>-->
                                            <!--                            <span class="filling-line"-->
                                            <!--                                aria-hidden="true"></span>-->
                                            <!--                        </div>-->

                                            <!--                    </div>-->

                                            <!--                    <ul class="cd-timeline-navigation">-->
                                            <!--                        <li><a href="#0" class="prev inactive">Prev</a></li>-->
                                            <!--                        <li><a href="#0" class="next">Next</a></li>-->
                                            <!--                    </ul>-->

                                            <!--                </div>-->

                                            <!--                <div class="events-content">-->
                                            <!--                    <ol>-->
                                            <!--                        <li class="selected" data-date="16/01/2014">-->
                                            <!--                            <h2>Horizontal Timeline</h2>-->
                                            <!--                            <em>January 16th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="28/02/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>February 28th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="20/04/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>March 20th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="20/05/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>May 20th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="09/07/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>July 9th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="30/08/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>August 30th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="15/09/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>September 15th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="01/11/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>November 1st, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="10/12/2014">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>December 10th, 2014</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="19/01/2015">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>January 19th, 2015</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                        <li data-date="03/03/2015">-->
                                            <!--                            <h2>Event title here</h2>-->
                                            <!--                            <em>March 3rd, 2015</em>-->
                                            <!--                            <p class="m-b-0">-->
                                            <!--                                Lorem ipsum dolor sit amet, consectetur-->
                                            <!--                                adipisicing elit. Illum praesentium officia,-->
                                            <!--                                fugit recusandae ipsa, quia velit nulla-->
                                            <!--                                adipisci? Consequuntur aspernatur at, eaque-->
                                            <!--                                hic repellendus sit dicta consequatur quae,-->
                                            <!--                                ut harum ipsam molestias maxime non nisi-->
                                            <!--                                reiciendis eligendi! Doloremque quia-->
                                            <!--                                pariatur harum ea amet quibusdam quisquam,-->
                                            <!--                                quae, temporibus dolores porro-->
                                            <!--                                doloribus.Illum praesentium officia, fugit-->
                                            <!--                                recusandae ipsa, quia-->
                                            <!--                                velit nulla adipisci? Consequuntur-->
                                            <!--                                aspernatur at,-->
                                            <!--                            </p>-->
                                            <!--                            <div class="m-t-20 d-timeline-btn">-->
                                            <!--                                <button class="btn btn-danger">Read-->
                                            <!--                                    More</button>-->
                                            <!--                                <button class="btn btn-primary f-right"><i-->
                                            <!--                                        class="icofont icofont-plus m-r-0"></i></button>-->
                                            <!--                            </div>-->
                                            <!--                        </li>-->
                                            <!--                    </ol>-->
                                            <!--                </div>-->

                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                <!--          <div class="col-lg-12">-->
                                <!--                <div class="card">-->
                                <!--                    <div class="card-header">-->
                                <!--                        <button class="btn btn-primary btn-sm">Week</button>-->
                                <!--                        <button class="btn btn-primary btn-sm">Month</button>-->
                                <!--                        <button class="btn btn-primary btn-sm">Year</button>-->
                                <!--                    </div>-->
                                <!--                    <div class="card-block">-->
                                <!--                        <div id="morris-extra-area"></div>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="col-lg-8">-->
                                <!--                <div class="row">-->
                                <!--                    <div class="col-lg-12">-->
                                <!--                        <div class="card table-1-card">-->
                                <!--                            <div class="card-block">-->
                                <!--                                <div class="table-responsive">-->
                                <!--                                    <table class="table">-->
                                <!--                                        <thead>-->
                                <!--                                            <tr class="text-capitalize">-->
                                <!--                                                <th>Type</th>-->
                                <!--                                                <th>Lead Name</th>-->
                                <!--                                                <th>Views</th>-->
                                <!--                                                <th>Favourites</th>-->
                                <!--                                                <th>Last Visit</th>-->
                                <!--                                                <th>Last Action</th>-->
                                <!--                                                <th>Last Date</th>-->
                                <!--                                            </tr>-->
                                <!--                                        </thead>-->
                                <!--                                        <tbody>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a href="#!">Buyer</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>Denish Ann</td>-->
                                <!--                                                <td>153</td>-->
                                <!--                                                <td>100</td>-->
                                <!--                                                <td>20</td>-->
                                <!--                                                <td>9.23 A.M.</td>-->
                                <!--                                                <td>9/27/2015</td>-->
                                <!--                                            </tr>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a class="text-danger"-->
                                <!--                                                        href="#!">Lanload</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>John Doe</td>-->
                                <!--                                                <td>121</td>-->
                                <!--                                                <td>100</td>-->
                                <!--                                                <td>20</td>-->
                                <!--                                                <td>6.23 A.M.</td>-->
                                <!--                                                <td>8/27/2015</td>-->
                                <!--                                            </tr>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a href="#!">Buyer</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>Henry Joe</td>-->
                                <!--                                                <td>154</td>-->
                                <!--                                                <td>140</td>-->
                                <!--                                                <td>30</td>-->
                                <!--                                                <td>7.54 P.M.</td>-->
                                <!--                                                <td>4/30/2015</td>-->
                                <!--                                            </tr>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a class="text-danger"-->
                                <!--                                                        href="#!">Lanload</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>Sara Soudein</td>-->
                                <!--                                                <td>153</td>-->
                                <!--                                                <td>100</td>-->
                                <!--                                                <td>20</td>-->
                                <!--                                                <td>9.23 A.M.</td>-->
                                <!--                                                <td>5/20/2016</td>-->
                                <!--                                            </tr>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a href="#!">Buyer</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>Denish Ann</td>-->
                                <!--                                                <td>153</td>-->
                                <!--                                                <td>100</td>-->
                                <!--                                                <td>20</td>-->
                                <!--                                                <td>9.23 A.M.</td>-->
                                <!--                                                <td>3/26/2015</td>-->
                                <!--                                            </tr>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a class="text-info"-->
                                <!--                                                        href="#!">Lanload</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>Stefen Joe</td>-->
                                <!--                                                <td>153</td>-->
                                <!--                                                <td>100</td>-->
                                <!--                                                <td>20</td>-->
                                <!--                                                <td>11.45 A.M.</td>-->
                                <!--                                                <td>5/20/2017</td>-->
                                <!--                                            </tr>-->
                                <!--                                            <tr>-->
                                <!--                                                <td><a href="#!">Buyer</a>-->
                                <!--                                                </td>-->
                                <!--                                                <td>Mark Backlus</td>-->
                                <!--                                                <td>153</td>-->
                                <!--                                                <td>100</td>-->
                                <!--                                                <td>20</td>-->
                                <!--                                                <td>12.40 A.M.</td>-->
                                <!--                                                <td>3/27/2017</td>-->
                                <!--                                            </tr>-->
                                <!--                                        </tbody>-->
                                <!--                                    </table>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                        </div>-->
                                <!--                    </div>-->


                                <!--                    <div class="col-lg-12">-->
                                <!--                        <div class="card table-card group-widget">-->
                                <!--                            <div class="">-->
                                <!--                                <div class="row-table">-->
                                <!--                                    <div class="col-sm-4 bg-primary card-block-big">-->
                                <!--                                        <i class="icofont icofont-music"></i>-->
                                <!--                                        <p>1,586</p>-->
                                <!--                                    </div>-->
                                <!--                                    <div-->
                                <!--                                        class="col-sm-4 bg-dark-primary card-block-big">-->
                                <!--                                        <i class="icofont icofont-video-clapper"></i>-->
                                <!--                                        <p>1,743</p>-->
                                <!--                                    </div>-->
                                <!--                                    <div-->
                                <!--                                        class="col-sm-4 bg-darkest-primary card-block-big">-->
                                <!--                                        <i class="icofont icofont-email"></i>-->
                                <!--                                        <p>1,096</p>-->
                                <!--                                    </div>-->
                                                                
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                        </div>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="col-lg-4">-->
                                <!--                <div class="row">-->
                                <!--                    <div class="col-lg-12">-->
                                <!--                        <div class="card card-border-primary">-->
                                <!--                            <div class="card-header">-->
                                <!--                                <h5>Admin </h5>-->

                                <!--                                <div class="dropdown-secondary dropdown f-right">-->
                                <!--                                    <button-->
                                <!--                                        class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light"-->
                                <!--                                        type="button" id="dropdown6"-->
                                <!--                                        data-toggle="dropdown" aria-haspopup="true"-->
                                <!--                                        aria-expanded="false">Overdue</button>-->
                                <!--                                    <div class="dropdown-menu"-->
                                <!--                                        aria-labelledby="dropdown6"-->
                                <!--                                        data-dropdown-in="fadeIn"-->
                                <!--                                        data-dropdown-out="fadeOut">-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-danger"></span>Pending</a>-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-warning"></span>Paid</a>-->
                                <!--                                        <div class="dropdown-divider"></div>-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect active"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-success"></span>On-->
                                <!--                                            Hold</a>-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-info"></span>Canceled</a>-->
                                <!--                                    </div>-->

                                <!--                                    <span class="f-left m-r-5 text-inverse">Status :-->
                                <!--                                    </span>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="card-block">-->
                                <!--                                <div class="row">-->
                                <!--                                    <div class="col-sm-6">-->
                                <!--                                        <ul class="list list-unstyled">-->
                                <!--                                            <li>Invoice #: &nbsp;0028</li>-->
                                <!--                                            <li>Issued on: <span-->
                                <!--                                                    class="text-semibold">2015/01/25</span>-->
                                <!--                                            </li>-->
                                <!--                                        </ul>-->
                                <!--                                    </div>-->
                                <!--                                    <div class="col-sm-6">-->
                                <!--                                        <ul class="list list-unstyled text-right">-->
                                <!--                                            <li>$8,750</li>-->
                                <!--                                            <li>Method: <span-->
                                <!--                                                    class="text-semibold">Paypal</span>-->
                                <!--                                            </li>-->
                                <!--                                        </ul>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="card-footer">-->
                                <!--                                <div class="task-list-table">-->
                                <!--                                    <p class="task-due"><strong> Due : </strong><strong-->
                                <!--                                            class="label label-success">23-->
                                <!--                                            hours</strong></p>-->
                                <!--                                </div>-->
                                <!--                                <div class="task-board m-0">-->
                                <!--                                    <a href="#"-->
                                <!--                                        class="btn btn-info btn-mini b-none"><i-->
                                <!--                                            class="icofont icofont-eye-alt m-0"></i></a>-->

                                <!--                                    <div class="dropdown-secondary dropdown">-->
                                <!--                                        <button-->
                                <!--                                            class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted"-->
                                <!--                                            type="button" id="dropdown3"-->
                                <!--                                            data-toggle="dropdown" aria-haspopup="true"-->
                                <!--                                            aria-expanded="false"><i-->
                                <!--                                                class="icofont icofont-navigation-menu"></i></button>-->
                                <!--                                        <div class="dropdown-menu"-->
                                <!--                                            aria-labelledby="dropdown3"-->
                                <!--                                            data-dropdown-in="fadeIn"-->
                                <!--                                            data-dropdown-out="fadeOut">-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-ui-alarm"></i>-->
                                <!--                                                Print Invoice</a>-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-attachment"></i>-->
                                <!--                                                Download invoice</a>-->
                                <!--                                            <div class="dropdown-divider"></div>-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-spinner-alt-5"></i>-->
                                <!--                                                Edit Invoice</a>-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-ui-edit"></i>-->
                                <!--                                                Remove Invoice</a>-->
                                <!--                                        </div>-->

                                <!--                                    </div>-->

                                <!--                                </div>-->

                                <!--                            </div>-->

                                <!--                        </div>-->
                                <!--                    </div>-->
                                <!--                    <div class="col-lg-12">-->

                                <!--                        <div class="card card-border-primary">-->
                                <!--                            <div class="card-header">-->
                                <!--                                <h5>Admin </h5>-->

                                <!--                                <div class="dropdown-secondary dropdown f-right">-->
                                <!--                                    <button-->
                                <!--                                        class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light"-->
                                <!--                                        type="button" id="dropdown12"-->
                                <!--                                        data-toggle="dropdown" aria-haspopup="true"-->
                                <!--                                        aria-expanded="false">Overdue</button>-->
                                <!--                                    <div class="dropdown-menu"-->
                                <!--                                        aria-labelledby="dropdown12"-->
                                <!--                                        data-dropdown-in="fadeIn"-->
                                <!--                                        data-dropdown-out="fadeOut">-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-danger"></span>Pending</a>-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-warning"></span>Paid</a>-->
                                <!--                                        <div class="dropdown-divider"></div>-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect active"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-success"></span>On-->
                                <!--                                            Hold</a>-->
                                <!--                                        <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                            href="#!"><span-->
                                <!--                                                class="point-marker bg-info"></span>Canceled</a>-->
                                <!--                                    </div>-->

                                <!--                                    <span class="f-left m-r-5 text-inverse">Status :-->
                                <!--                                    </span>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="card-block">-->
                                <!--                                <div class="row">-->
                                <!--                                    <div class="col-sm-6">-->
                                <!--                                        <ul class="list list-unstyled">-->
                                <!--                                            <li>Invoice #: &nbsp;0028</li>-->
                                <!--                                            <li>Issued on: <span-->
                                <!--                                                    class="text-semibold">2015/01/25</span>-->
                                <!--                                            </li>-->
                                <!--                                        </ul>-->
                                <!--                                    </div>-->
                                <!--                                    <div class="col-sm-6">-->
                                <!--                                        <ul class="list list-unstyled text-right">-->
                                <!--                                            <li>$8,750</li>-->
                                <!--                                            <li>Method: <span-->
                                <!--                                                    class="text-semibold">Paypal</span>-->
                                <!--                                            </li>-->
                                <!--                                        </ul>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="card-footer">-->
                                <!--                                <div class="task-list-table">-->
                                <!--                                    <p class="task-due"><strong> Due : </strong><strong-->
                                <!--                                            class="label label-warning">23-->
                                <!--                                            hours</strong></p>-->
                                <!--                                </div>-->
                                <!--                                <div class="task-board m-0">-->
                                <!--                                    <a href="#"-->
                                <!--                                        class="btn btn-info btn-mini b-none"><i-->
                                <!--                                            class="icofont icofont-eye-alt m-0"></i></a>-->

                                <!--                                    <div class="dropdown-secondary dropdown">-->
                                <!--                                        <button-->
                                <!--                                            class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted"-->
                                <!--                                            type="button" id="dropdown8"-->
                                <!--                                            data-toggle="dropdown" aria-haspopup="true"-->
                                <!--                                            aria-expanded="false"><i-->
                                <!--                                                class="icofont icofont-navigation-menu"></i></button>-->
                                <!--                                        <div class="dropdown-menu"-->
                                <!--                                            aria-labelledby="dropdown8"-->
                                <!--                                            data-dropdown-in="fadeIn"-->
                                <!--                                            data-dropdown-out="fadeOut">-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-ui-alarm"></i>-->
                                <!--                                                Print Invoice</a>-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-attachment"></i>-->
                                <!--                                                Download invoice</a>-->
                                <!--                                            <div class="dropdown-divider"></div>-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-spinner-alt-5"></i>-->
                                <!--                                                Edit Invoice</a>-->
                                <!--                                            <a class="dropdown-item waves-light waves-effect"-->
                                <!--                                                href="#!"><i-->
                                <!--                                                    class="icofont icofont-ui-edit"></i>-->
                                <!--                                                Remove Invoice</a>-->
                                <!--                                        </div>-->

                                <!--                                    </div>-->

                                <!--                                </div>-->

                                <!--                            </div>-->

                                <!--                        </div>-->

                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="col-md-6 col-xl-3">-->
                                <!--                <div class="card social-widget-card">-->
                                <!--                    <div class="card-block-big bg-facebook">-->
                                <!--                        <h3>1165 +</h3>-->
                                <!--                        <span class="m-t-10">Facebook Users</span>-->
                                <!--                        <i class="icofont icofont-social-facebook"></i>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="col-md-6 col-xl-3">-->
                                <!--                <div class="card social-widget-card">-->
                                <!--                    <div class="card-block-big bg-twitter">-->
                                <!--                        <h3>780 +</h3>-->
                                <!--                        <span class="m-t-10">Twitter Users</span>-->
                                <!--                        <i class="icofont icofont-social-twitter"></i>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="col-md-6 col-xl-3">-->
                                <!--                <div class="card social-widget-card">-->
                                <!--                    <div class="card-block-big bg-linkein">-->
                                <!--                        <h3>998 +</h3>-->
                                <!--                        <span class="m-t-10">Linked In Users</span>-->
                                <!--                        <i class="icofont icofont-brand-linkedin"></i>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="col-md-6 col-xl-3">-->
                                <!--                <div class="card social-widget-card">-->
                                <!--                    <div class="card-block-big bg-google-plus">-->
                                <!--                        <h3>650 +</h3>-->
                                <!--                        <span class="m-t-10">Google Plus Users</span>-->
                                <!--                        <i class="icofont icofont-social-google-plus"></i>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div id="styleSelector">-->
                                <!--</div>-->
                            </div>
                                                                    <div class="card">
                                            <div class="card-header">
                                                <h5>Recharge Report</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <button type="button"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Add Filter
                                                </button>
                                            </div>
                                            <div class="card-block">
                                               <div class="dt-responsive table-responsive">
                                                    <table id="new-cons"
                                                        class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Name </th>
                                                                <th>Type</th>
                                                                <th>Trans. ID</th>
                                                                <th>Trans. Date</th>
																<th>Trans. Time</th>
                                                                <th>Mobile</th>
                                                                <th>Status</th>
                                                                <th>Operator</th>
                                                                <th>Amount</th>
                                                                <th>Remain Bal.</th>
                                                                <th>Operator ID</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $date = date("Y-m-d");
                                                            $q = $con->query("SELECT * FROM recharge_history where DATE='$date' order by ID DESC");
                                                            $i =1 ;
                                                            while($row = $q->fetch_assoc()){
                                                                if($row['STATUS'] == "FAILURE" || $row['STATUS'] == "Failure" || $row['STATUS'] == "failure"){
                                                                    $color = "#dc3545";
                                                                }else{
                                                                    $color = "";
                                                                }
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $i++ ?></td>
                                                                    <?php
                                                                    $user_id = $row['PERSON_ID'];
                                                                    $user_type = $row['PERSON'];
                                                                    if($user_type == "MASTERDISTRIBUTER"){
                                                                    $person = $con->query("select * from masterdistributer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                    else if($user_type == "DISTRIBUTER"){
                                                                    $person = $con->query("select * from distributer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                    else if($user_type == "retailer"){
                                                                    $person = $con->query("select * from retailer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['FNAME'].'</td>';
                                                                    }
                                                                    else if($user_type == "ADMIN"){
                                                                    $person = $con->query("select * from admin where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                    else if($user_type == "API_USER" || $user_type == "Api_users"){
                                                                    $person = $con->query("select * from Api_users where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                        
                                                                        
                                                                    ?>
                                                                
                                                                <td><?php echo $row['PERSON'] ?></td>
                                                                <td><?php echo $row['TRANS_ID'] ?></td>
                                                                <td><?php echo $row['DATE'] ?></td>
																<td><?php echo $row['TIME'] ?></td>
                                                                <td><?php echo $row['NUMBER'] ?></td>
                                                                <td style="background-color:<?php echo $color ?> !important"> <?php echo $row['STATUS'] ?></td>
                                                                <td><?php echo $row['OP'] ?></td>
                                                                <td><?php echo $row['AMOUNT'] ?></td>
                                                                <td><?php echo $row['REMAIN_BAL'] ?></td>
                                                                <td><?php echo $row['OPERATOR_ID'] ?></td>
                                                                <td><a href="edit-r-report.php?id=<?php echo $row['ID']?>"
                                                                    class="m-r-15 text-muted"
                                                                    data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Edit"><i
                                                                        class="icofont icofont-ui-edit"></i></a></td>
                                                            </tr>
                                                         <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                            
                                                        </tfoot>
                                                        
                                                    </table>
                                                </div>
                                            </div>
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
</html>