<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Recharge Reports</title>

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
                                            <h4>All Recharge Report</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Report</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">All Recharge Report</a>
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
                                    
                                    
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>All Recharge Report</h5>
                                                 
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
                                                                <th>Type </th>
                                                                <th>Trans. ID</th>
                                                                <th>Trans. Date</th>
                                                                <th>Mobile</th>
                                                                <th>Status</th>
                                                                <th>Amount</th>
                                                                <th>Operator ID</th>
                                                                <th>API</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                               include "../includes/config.php";
                                                            if(isset($_POST['filter_date'])){
                                                                $date1 = $_POST['date1'];
                                                                $date2 = $_POST['date2'];
                                                                $ms = $_POST['ms'];
                                                                $ds = $_POST['ds'];
                                                                $rt = $_POST['rt'];
                                                                $mobile = $_POST['mobile'];
                                                                if($ms == "" && $ds == "" && $rt == "" && $mobile==""){
                                                                    $q = $con->query("SELECT * FROM recharge_history where (DATE BETWEEN '$date1' AND '$date2')  order by ID DESC");
                                                                }else if($ms != "" || $ds != "" || $rt != ""){
                                                                    if($ms == "" && $ds==""){
                                                                        $person = "retailer";
                                                                        $person_id = $rt;
                                                                    }elseif($ms == "" && $rt==""){
                                                                         $person = "DISTRIBUTER";
                                                                        $person_id = $ds;
                                                                    }elseif($ds == "" && $rt==""){
                                                                         $person = "MASTERDISTRIBUTER";
                                                                        $person_id = $ms;
                                                                    }
                                                                    $q = $con->query("SELECT * FROM recharge_history where PERSON='$person' and PERSON_ID='$person_id' and (DATE BETWEEN '$date1' AND '$date2')  order by ID DESC");
                                                                }
                                                                else{
                                                                    $q = $con->query("SELECT * FROM recharge_history where NUMBER='$mobile'  order by ID DESC");
                                                                }
                                                            $i =1 ;
                                                            while($row = $q->fetch_assoc()){
                                                                $total_amount += $row['AMOUNT'];
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
                                                                    elseif($user_type == "DISTRIBUTER"){
                                                                    $person = $con->query("select * from distributer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                    elseif($user_type == "RETAILER" || $user_type == "retailer"){
                                                                    $person = $con->query("select * from retailer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['FNAME'].'</td>';
                                                                    } 
                                                                    elseif($user_type == "ADMIN"){
                                                                    $person = $con->query("select * from admin where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }else if($user_type == "API_USER"){
                                                                    $person = $con->query("select * from Api_users where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                       
                                                                        
                                                                        
                                                                    ?>
                                                                <td><?php echo $row['PERSON'] ?></td>
                                                                <td><?php echo $row['TRANS_ID'] ?></td>
                                                                <td><?php echo $row['DATE'] ?></td>
                                                                <td><?php echo $row['NUMBER'] ?></td>
                                                                <td><?php echo $row['STATUS'] ?></td>
                                                                <td><?php echo $row['AMOUNT'] ?></td>
                                                                <td><?php echo $row['OPERATOR_ID'] ?></td>
                                                                <td><?php echo $row['API_NAME'] ?></td>
                                                                 <td><a href="edit-r-report.php?id=<?php echo $row['ID']?>"
                                                                    class="m-r-15 text-muted"
                                                                    data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Edit"><i
                                                                        class="icofont icofont-ui-edit"></i></a></td>
                                                            </tr>
                                                         <?php } 
                                                                
                                                            }else{
                                                            $date1 = date("Y-m-d");

                                                            $q = $con->query("SELECT * FROM recharge_history where DATE ='$date1' order by ID DESC");
                                                            $i =1 ;
                                                            while($row = $q->fetch_assoc()){
                                                                $total_amount += $row['AMOUNT'];
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
                                                                    elseif($user_type == "DISTRIBUTER"){
                                                                    $person = $con->query("select * from distributer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                    elseif($user_type == "RETAILER" || $user_type == "retailer"){
                                                                    $person = $con->query("select * from retailer where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['FNAME'].'</td>';
                                                                    }
                                                                    elseif($user_type == "ADMIN"){
                                                                    $person = $con->query("select * from admin where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                    else if($user_type == "API_USER"){
                                                                    $person = $con->query("select * from Api_users where ID='$user_id'")->fetch_assoc();
                                                                      echo '<td>'.$person['NAME'].'</td>';
                                                                    }
                                                                        
                                                                    ?>
                                                                <td><?php echo $row['PERSON'] ?></td>
                                                                <td><?php echo $row['TRANS_ID'] ?></td>
                                                                <td><?php echo $row['DATE'] ?></td>
                                                                <td><?php echo $row['NUMBER'] ?></td>
                                                                <td><?php echo $row['STATUS'] ?></td>
                                                                <td><?php echo $row['AMOUNT'] ?></td>
                                                                <td><?php echo $row['OPERATOR_ID'] ?></td>
                                                                <td><?php echo $row['API_NAME'] ?></td>
                                                                 <td><a href="edit-r-report.php?id=<?php echo $row['ID']?>"
                                                                    class="m-r-15 text-muted"
                                                                    data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Edit"><i
                                                                        class="icofont icofont-ui-edit"></i></a></td>
                                                            </tr>
                                                         <?php } } ?>
                                                                
                                                            
                                                            
                                                
                                                        </tbody>
                                                        <tfoot>
                                                           <th></th>
                                                           <th>Total Amount:</th>
                                                           <th></th>
                                                           <th></th>
                                                           <th></th>
                                                           <th></th>
                                                           <th></th>
                                                           <th><?php echo ($total_amount == "" ) ? 0 : $total_amount ?></th>
                                                          <th></th>
                                                           <th></th>
                                                           <th></th>

                                                        </tfoot>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="md-modal md-effect-13 addcontact" id="modal-13">
                                            <form method="post">
                                            <div class="md-content">
                                                <h3 class="f-26">Filter Date</h3>
                                                <div>
                                                    <h6>Master Distributer</h6>
                                                    <div class="input-group">
                                                        <select name="ms" class="form-control">
                                                            <option value="">Select Master Distributer</option>
                                                            <?php
                                                            $user = $con->query("select * from masterdistributer order by ID desc");
                                                            while($row = $user->fetch_assoc()){
                                                                echo "<option value='".$row['ID']."'>".$row['NAME']."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <h6>Distributer</h6>
                                                    <div class="input-group">
                                                        <select name="ds" class="form-control">
                                                            <option value="">Select Distributer</option>
                                                             <?php
                                                            $user = $con->query("select * from distributer order by ID desc");
                                                            while($row = $user->fetch_assoc()){
                                                                echo "<option value='".$row['ID']."'>".$row['NAME']."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div> 
                                                    <h6>Retailer</h6>
                                                    <div class="input-group">
                                                        <select name="rt" class="form-control">
                                                            <option value="">Select Retailer</option>
                                                             <?php
                                                            $user = $con->query("select * from retailer order by ID desc");
                                                            while($row = $user->fetch_assoc()){
                                                                echo "<option value='".$row['ID']."'>".$row['FNAME']."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                  
                                                    <h6>From Date</h6>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input name="date1" type="date" class="form-control">
                                                    </div> 
                                                    <h6>To Date</h6>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input name="date2" type="date" class="form-control">
                                                    </div>
                                                      <hr><p>OR</p>
                                                      <h6>Enter Mobile</h6>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input name="mobile" type="number" class="form-control">
                                                    </div>
                                                    
                                                    
                                                    <div class="text-center">
                                                        <button type="submit" name="filter_date"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Filter</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="md-overlay"></div>

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