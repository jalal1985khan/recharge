<?php

session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}
$date = date("Y-m-d");
include "../includes/config.php";
// for masterdistributer 
if(isset($_POST['masterdistributer'])){
    $ms_id = $_POST['ms_id'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $remark = $_POST['remark'];
    $admin_id = $_SESSION["status"];
    if($type == "add"){
        $user = $con->query("select * from masterdistributer where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc + $amount;
        if($con->query("UPDATE masterdistributer SET RCBAL='$total_amount' WHERE ID='$ms_id'")){
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc - $amount;
            if($ad_am > 0){
                if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'")){
                    $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('MASTERDISTRIBUTER' , 'ADD' , '$amount' , '$date' , '$ms_id')");
                    echo "<script> alert('Amount Has Been Added.') </script>";
                }else{
                    echo "<script> alert('You have Not Sufficient Amount.') </script>";
                }
            }
        }
    }

     if($type == "deduct"){
         $user = $con->query("select * from masterdistributer where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc - $amount;
        if($total_amount > 0 ){
            $con->query("UPDATE masterdistributer SET RCBAL='$total_amount' WHERE ID='$ms_id'");
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc + $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'")){
            $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('MASTERDISTRIBUTER' , 'DEDUCT' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }
        }else{
                echo "<script> alert('User Has Not Sufficient Amount.') </script>";
        }
    }
}

// for api_user 
if(isset($_POST['api_user'])){
    $ms_id = $_POST['ap_id'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $remark = $_POST['remark'];
    $admin_id = $_SESSION["status"];
    if($type == "add"){
        $user = $con->query("select * from Api_users where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc + $amount;
        if($con->query("UPDATE Api_users SET RCBAL='$total_amount' WHERE ID='$ms_id'")){
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc - $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'") && $ad_am > 0){
                $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('API_USER' , 'ADD' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }else{
                echo "<script> alert('You have Not Sufficient Amount.') </script>";
            }
        }
    }

     if($type == "deduct"){
         $user = $con->query("select * from Api_users where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc - $amount;
        if($total_amount > 0 && $user_rc > $amount){
            $con->query("UPDATE Api_users SET RCBAL='$total_amount' WHERE ID='$ms_id'");
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc + $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'")){
            $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('API_USER' , 'DEDUCT' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }
        }else{
                echo "<script> alert('User Has Not Sufficient Amount.') </script>";
        }
    }
}

// for distribuetr
if(isset($_POST['distributer'])){
    $ms_id = $_POST['ds_id'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $remark = $_POST['remark'];
    $admin_id = $_SESSION["status"];
    if($type == "add"){
        $user = $con->query("select * from distributer where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc + $amount;
        if($con->query("UPDATE distributer SET RCBAL='$total_amount' WHERE ID='$ms_id'")){
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc - $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'") && $ad_am > 0){
               $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('DISTRIBUTER' , 'ADD' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }else{
                echo "<script> alert('You have Not Sufficient Amount.') </script>";
            }
        }
    }

     if($type == "deduct"){
         $user = $con->query("select * from distributer where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc - $amount;
        if($total_amount > 0 && $user_rc > $amount){
            $con->query("UPDATE distributer SET RCBAL='$total_amount' WHERE ID='$ms_id'");
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc + $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'")){
            $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('DISTRIBUTER' , 'DEDUCT' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }
        }else{
                echo "<script> alert('User Has Not Sufficient Amount.') </script>";
        }
    }
}


// for retailer
if(isset($_POST['retailer'])){
    $ms_id = $_POST['rt_id'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $remark = $_POST['remark'];
    $admin_id = $_SESSION["status"];
    if($type == "add"){
        $user = $con->query("select * from retailer where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc + $amount;
        if($con->query("UPDATE retailer SET RCBAL='$total_amount' WHERE ID='$ms_id'")){
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc - $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'") && $ad_am > 0){
            $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('RETAILER' , 'ADD' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }else{
                echo "<script> alert('You have Not Sufficient Amount.') </script>";
            }
        }
    }

     if($type == "deduct"){
         $user = $con->query("select * from retailer where ID='$ms_id'")->fetch_assoc();
        $user_rc = $user['RCBAL'];
        $total_amount = $user_rc - $amount;
        if($total_amount > 0 && $user_rc > $amount){
            $con->query("UPDATE retailer SET RCBAL='$total_amount' WHERE ID='$ms_id'");
            $admin = $con->query("select * from admin where ID='$admin_id'")->fetch_assoc();
            $admin_rc = $admin['RCBAL'];
            $ad_am = $admin_rc + $amount;
            if($con->query("UPDATE admin SET RCBAL='$ad_am' WHERE ID='$admin_id'")){
                $con->query("INSERT INTO `fund_transfer`(`USER`, `TYPE`, `AMOUNT` , `DATE` , `USER_ID`) VALUES('RETAILER' , 'DEDUCT' , '$amount' , '$date' , '$ms_id')");
                echo "<script> alert('Amount Has Been Added.') </script>";
            }
        }else{
                echo "<script> alert('User Has Not Sufficient Amount.') </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add / Deduct Fund</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" type="text/css" href="../bower_components/datedropper/datedropper.min.css" />

    <link rel="stylesheet" type="text/css"
        href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

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

             <!-- Top Header -->
           <?php
                include "livechat.php";
            ?>
            <!-- END Top Header -->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- sidebarlist -->
                    <?php
                        include "sidebarlist.php"
                    ?>
                    <!-- sidebarlist -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body user-profile">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Recharge Fund</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Wallet</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Recharge Fund </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--<div class="page-body">-->
                                    <!--    <div class="row">-->
                                    <!--    <div class="col-md-6 col-xl-4">-->
                                    <!--        <div class="card client-blocks dark-primary-border">-->
                                    <!--            <div class="card-block">-->
                                    <!--                <h5>success</h5>-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <i class="icofont icofont-document-folder"></i>-->
                                    <!--                    </li>-->
                                    <!--                    <li class="text-right">-->
                                    <!--                        133-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--     <div class="col-md-6 col-xl-4">-->
                                    <!--        <div class="card client-blocks warning-border">-->
                                    <!--            <div class="card-block">-->
                                    <!--                <h5>Pending</h5>-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <i class="icofont icofont-ui-user-group text-warning"></i>-->
                                    <!--                    </li>-->
                                    <!--                    <li class="text-right text-warning">-->
                                    <!--                        23-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-6 col-xl-4">-->
                                    <!--        <div class="card client-blocks danger-border">-->
                                    <!--            <div class="card-block">-->
                                    <!--                <h5>Failure</h5>-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <i class="icofont icofont-files text-danger"></i>-->
                                    <!--                    </li>-->
                                    <!--                    <li class="text-right text-danger">-->
                                    <!--                        240-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->


                                    <div class="page-body">

                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="tab-header">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist"
                                                        id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#personal" role="tab">Master Distributer</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                                href="#api_user" role="tab">Api User</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#binfo"
                                                                role="tab">Distributer</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#review"
                                                                role="tab">Retailer</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#whitelabel"
                                                                role="tab">White Level</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>


                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="personal" role="tabpanel">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Master Distributer</h5>
                                                                
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <form method="post">
                                                                                            <div class="form-group row mt-3">
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" name="ms_id" class="form-control stock">
                                                                                                        <option value="">---- Select Master Distributer ----</option>
                                                                                                       <?php
                                                                                                       $q = $con->query("select * from masterdistributer order by ID desc");
                                                                                                       while($row = $q->fetch_assoc()){
                                                                                                       echo '<option value="'.$row['ID'].'">'.$row['NAME'].'</option>';
                                                                                                       }
                                                                                                       ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" name="type" class="form-control stock">
                                                                                                        <option value="">---- Transaction Type ----</option>
                                                                                                        <option value="add">Add Fund</option>
                                                                                                        <option value="deduct">Deduct Fund</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                            <div class="form-group row mt-3">
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                       name="amount" placeholder="Amount">
                                                                                                </div>
                                                                                                 <div class="form-group col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                       name="remark" placeholder="Remark">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text-center">
                                                                                            <Button type="submit" name="masterdistributer" class="btn btn-primary waves-effect waves-light m-r-20">SUBMIT</Button>
                                                                                            <!--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>-->
                                                                                        </div>
                                                                                        </form> 
                                                                                    </div>

                                                                                    <div class="col-lg-12 col-xl-6">
                                                            
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                     

                                                    </div>


                                                    <div class="tab-pane" id="binfo" role="tabpanel">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Distributer</h5>
                                                                
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <form method="post">
                                                                                            <div class="form-group row mt-3">
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" name="ds_id" class="form-control stock">
                                                                                                        <option value="">---- Select Distributer ----</option>
                                                                                                         <?php
                                                                                                       $q = $con->query("select * from distributer order by ID desc");
                                                                                                       while($row = $q->fetch_assoc()){
                                                                                                       echo '<option value="'.$row['ID'].'">'.$row['NAME'].'</option>';
                                                                                                       }
                                                                                                       ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" name="type" class="form-control stock">
                                                                                                        <option value="">---- Transaction Type ----</option>
                                                                                                        <option value="add">Add Fund</option>
                                                                                                        <option value="deduct">Deduct Fund</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                            <div class="form-group row mt-3">
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                       name="amount" placeholder="Amount">
                                                                                                </div>
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                       name="remark" placeholder="Remark">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text-center">
                                                                                            <Button type="submit" name="distributer" class="btn btn-primary waves-effect waves-light m-r-20">SUBMIT</Button>
                                                                                            <!--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>-->
                                                                                        </div>
                                                                                        </form> 
                                                                                    </div>

                                                                                    <div class="col-lg-12 col-xl-6">
                                                            
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                     </div>
                                                     
                                                     
                                                     <div class="tab-pane" id="api_user" role="tabpanel">
                                                        
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">API USER</h5>
                                                                        
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="view-info">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="general-info">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12">
                                                                                                <form method="post">
                                                                                                    <div class="form-group row mt-3">
                                                                                                        <div class="input-group col-sm-6">
                                                                                                            <select id="hello-single" name="ap_id" class="form-control stock">
                                                                                                                <option value="">---- Select Api User ----</option>
                                                                                                                 <?php
                                                                                                               $q = $con->query("select * from Api_users order by ID desc");
                                                                                                               while($row = $q->fetch_assoc()){
                                                                                                               echo '<option value="'.$row['ID'].'">'.$row['NAME'].'</option>';
                                                                                                               }
                                                                                                               ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="input-group col-sm-6">
                                                                                                            <select id="hello-single" name="type" class="form-control stock">
                                                                                                                <option value="">---- Transaction Type ----</option>
                                                                                                                <option value="add">Add Fund</option>
                                                                                                                <option value="deduct">Deduct Fund</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                    <div class="form-group row mt-3">
                                                                                                         <div class="col-sm-6">
                                                                                                            <input type="text" class="form-control"
                                                                                                               name="amount" placeholder="Amount">
                                                                                                        </div>
                                                                                                         <div class="col-sm-6">
                                                                                                            <input type="text" class="form-control"
                                                                                                               name="remark" placeholder="Remark">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="text-center">
                                                                                                    <Button type="submit" name="api_user" class="btn btn-primary waves-effect waves-light m-r-20">SUBMIT</Button>
                                                                                                    <!--<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>-->
                                                                                                </div>
                                                                                                </form> 
                                                                                            </div>
                
                                                                                            <div class="col-lg-12 col-xl-6">
                                                                    
                                                                                            </div>
                
                                                                                        </div>
                
                                                                                    </div>
                
                                                                                </div>
                
                                                                            </div>
                
                                                                        </div>
                
                                                                    </div>

                                                                </div>
                                                            </div>

                                                    <div class="tab-pane" id="review" role="tabpanel">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Retailer</h5>
                                                                
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <form method="post">
                                                                                            <div class="form-group row mt-3">
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" name="rt_id" class="form-control stock">
                                                                                                        <option value="">---- Select Retailer ----</option>
                                                                                                         <?php
                                                                                                       $q = $con->query("select * from retailer order by ID desc");
                                                                                                       while($row = $q->fetch_assoc()){
                                                                                                       echo '<option value="'.$row['ID'].'">'.$row['FNAME'].'</option>';
                                                                                                       }
                                                                                                       ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                                         <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" name="type" class="form-control stock">
                                                                                                        <option value="">---- Transaction Type ----</option>
                                                                                                        <option value="add">Add Fund</option>
                                                                                                        <option value="deduct">Deduct Fund</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                            <div class="form-group row mt-3">
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                       name="amount" placeholder="Amount">
                                                                                                </div>
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                       name="remark" placeholder="Remark">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text-center">
                                                                                            <Button type="submit" name="retailer" class="btn btn-primary waves-effect waves-light m-r-20">SUBMIT</Button>
                                                                                        </div>
                                                                                        </form> 
                                                                                    </div>

                                                                                    <div class="col-lg-12 col-xl-6">
                                                            
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="whitelabel" role="tabpanel">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">WhiteLabel</h5>
                                                                
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <form method="post">
                                                                                            <div class="form-group row mt-3">
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" class="form-control stock">
                                                                                                        <option value="">---- Select WhiteLabel ----</option>
                                                                                                        <option value="married">In Stock</option>
                                                                                                        <option value="unmarried">Out of Stock</option>
                                                                                                        <option value="unmarried">Law Stock</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="input-group col-sm-6">
                                                                                                    <select id="hello-single" class="form-control stock">
                                                                                                        <option value="">---- Transaction Type ----</option>
                                                                                                        <option value="married">Add Fund</option>
                                                                                                        <option value="unmarried">Deduct Fund</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                            <div class="form-group row mt-3">
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                        placeholder="Amount">
                                                                                                </div>
                                                                                                 <div class="col-sm-6">
                                                                                                    <input type="text" class="form-control"
                                                                                                        placeholder="Remark">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text-center">
                                                                                            <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">SUBMIT</a>
                                                                                            <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                                                        </div>
                                                                                        </form> 
                                                                                    </div>

                                                                                    <div class="col-lg-12 col-xl-6">
                                                            
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

    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="../bower_components/ckeditor/ckeditor.js"></script>

    <script src="assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>

    <script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/pages/user-profile.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

</html>