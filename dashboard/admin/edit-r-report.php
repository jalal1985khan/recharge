<?php

session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");

if(isset($_POST['submitservice'])){
    $op_id = $_POST['op_id'];
    $st = $_POST['status'];
    $id = $_POST['id'];
    $recharge = $con->query("select * from recharge_history where ID='$id'")->fetch_assoc();
    $rech_stauts = $recharge['STATUS'];
    $user_type = $recharge['PERSON'];
    $rech_person_id = $recharge['PERSON_ID'];
    $amount = $recharge['AMOUNT'];
    $op_name = $recharge['OP'];
    
    if($st=="Failed"){
        if($rech_stauts != 'Failed' || $rech_stauts !='Failure'){
              if($user_type == "MASTERDISTRIBUTER"){
             $q = $con->query("SELECT * FROM masterdistributer where ID='$rech_person_id'")->fetch_assoc();
             $ms_ctof = $q['CUTTOFFAMOUNT'];
             $ms_comm = $q['COMM_PACK'];
             $ms_rcbal = $q['RCBAL'];
               $q2 = $con->query("SELECT * FROM operator_comm where PACKAGE_ID='$ms_comm' and OP_NAME='$op_name'")->fetch_assoc();
                $prcent = $q2['PERCENTAGE'];
                $am = ($amount/100)*$prcent;
                $am2 = $amount-$am;
                $am3 = $ms_rcbal + $am2;
        if($con->query("UPDATE masterdistributer set RCBAL='$am3' where ID='$rech_person_id'")){
                $q = $con->query("update `recharge_history` set STATUS='$st', OPERATOR_ID='$op_id' , TRANS_TYPE='Credit' , REMAIN_BAL='$am3' , DEDUCT_BAL='$am2' where ID='$id'");
                if($q){
                    
                    echo "<script> alert('Updated')
                        location.replace('index.php');
                        </script> "; 
                    }
           }
    }
            else if($user_type == "DISTRIBUTER"){
              $q = $con->query("SELECT * FROM distributer where ID='$rech_person_id'")->fetch_assoc();
                 $ms_ctof = $q['CUTTOFFAMOUNT'];
                 $ms_comm = $q['COMM_PACK'];
                 $ms_rcbal = $q['RCBAL'];
                 $q2 = $con->query("SELECT * FROM operator_comm where PACKAGE_ID='$ms_comm' and OP_NAME='$op_name'")->fetch_assoc();
                    $prcent = $q2['PERCENTAGE'];
                    $am = ($amount/100)*$prcent;
                    $am2 = $amount-$am;
                    $am3 = $ms_rcbal + $am2;
                    if($con->query("UPDATE distributer set RCBAL='$am3' where ID='$rech_person_id'")){
                        $q = $con->query("update `recharge_history` set STATUS='$st', OPERATOR_ID='$op_id' , TRANS_TYPE='Credit' , REMAIN_BAL='$am3' , DEDUCT_BAL='$am2' where ID='$id'");
                        if($q){
                            echo "<script> alert('Updated')
                                location.replace('index.php');
                                </script> "; 
                            }
                   }
            }
            else if($user_type == "retailer"){
            $q = $con->query("SELECT * FROM retailer where ID='$rech_person_id'")->fetch_assoc();
             $ms_ctof = $q['CUTTOFFAMOUNT'];
             $ms_comm = $q['COMM_PACK'];
             $ms_rcbal = $q['RCBAL'];
              $q2 = $con->query("SELECT * FROM operator_comm where PACKAGE_ID='$ms_comm' and OP_NAME='$op_name'")->fetch_assoc();
                $prcent = $q2['PERCENTAGE'];
                $am = ($amount/100)*$prcent;
                $am2 = $amount-$am;
                $am3 = $ms_rcbal + $am2;
                if($con->query("UPDATE retailer set RCBAL='$am3' where ID='$rech_person_id'")){
                        $q = $con->query("update `recharge_history` set STATUS='$st', OPERATOR_ID='$op_id' , TRANS_TYPE='Credit' , REMAIN_BAL='$am3' , DEDUCT_BAL='$am2' where ID='$id'");
                        if($q){
                            
                            echo "<script> alert('Updated')
                                location.replace('index.php');
                                </script> "; 
                            }
                   }
            }
            else if($user_type == "API_USER"){
                    $api_user = $con->query("select * from Api_users where ID='$rech_person_id'")->fetch_assoc();
                      $api_user_bal = $api_user['RCBAL'];
                            $api_user_comm = $api_user['COMM_PACK'];
                             $q2 = $con->query("SELECT * FROM operator_comm where PACKAGE_ID='$api_user_comm' and OP_NAME='$op_name'")->fetch_assoc();
                            $prcent = $q2['PERCENTAGE'];
                            $am = ($amount/100)*$prcent;
                            $am2 = $amount-$am;
                            $remain_am = $api_user_bal + $am2;
                           if($con->query("update Api_users set RCBAL='$remain_am' where ID='$rech_person_id'")){
                                $q = $con->query("update `recharge_history` set STATUS='$st', OPERATOR_ID='$op_id' , TRANS_TYPE='Credit' , REMAIN_BAL='$am3' , DEDUCT_BAL='$am2' where ID='$id'");
                                if($q){
                                    
                                    echo "<script> alert('Updated')
                                        location.replace('index.php');
                                        </script> "; 
                                    }
                           }
                }
        
        }
        else{
           echo "<script> alert('Already Refunded') </script> "; 
        }
    }
        else if($st=="Success"){
            if($rech_stauts == 'Failed' || $rech_stauts =='Failure'){
                echo "<script> alert('Already Refunded') </script> "; 
            }else{
                   $q = $con->query("update `recharge_history` set STATUS='$st', OPERATOR_ID='$op_id' where ID='$id'");
                if($q){
                    echo "<script> alert('Updated')
                        location.replace('index.php');
                        </script> "; 
                    }
            }
        }
        
            
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>

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
                                            <h4>Services</h4>
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
                                                <li class="breadcrumb-item"><a href="#!">Service Manager</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Services Action</h5>
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                
                                                <?php
                                                      if(isset($_GET['id']))
                                                      {
                                                          $id = $_GET['id'];
                                                          $query = "SELECT * FROM `recharge_history` WHERE ID= '$id'";
                                                          $run = mysqli_query($con , $query);
                                                          
                                                          $row = mysqli_fetch_array($run);
                                                        //   print_r($row)
;                                                          
                                                          
                                                      }
                                                ?>
                                                <form  method="post" action="" >
                                                    <div class="container">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="">Operator ID</label>
                                                            <input type="text" class="form-control" name="op_id" value="<?php echo $row['OPERATOR_ID'] ?>">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row justify-content-center">
                                                        <div class="col-sm-4">
                                                            <div class="">
                                                                <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
                                                                <label>
                                                                    <input type="radio" <?php echo ($row['STATUS']=="Success" OR $row['STATUS']==" Sucess ") ? "checked" : ""?> name="status" value="Success">
                                                                    <i class="helper"></i>Success
                                                                </label>
                                                                <label>
                                                                    <input type="radio" <?php echo ($row['STATUS']=="Failed" OR $row['STATUS']=="Failure") ? "checked" : ""?> type="radio" name="status" value="Failed">
                                                                    <i class="helper"></i>Failed
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="form-group row text-center">
                                                        <div class="col-sm-10">
                                                            <button type="submit" name="submitservice" class="btn btn-primary m-b-0">Submit </button>
                                                            <button type="submit" class="btn btn-primary m-b-0">Cancel </button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
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