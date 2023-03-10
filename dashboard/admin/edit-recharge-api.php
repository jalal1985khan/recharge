<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");
    
   if(isset($_POST['addrechargeapi']))
   {
     $apiname = $_POST['apiname'];
     $apiurl = $_POST['apiurl'];
          $balurl = $_POST['balurl'];

     $mobileparameter = $_POST['mobileparameter'];
     $operatorparameter = $_POST['operatorparameter'];
     $amountparameter = $_POST['amountparameter'];   
     $txnidparameter = $_POST['txnidparameter'];   
     $optionalparameter = $_POST['optionalparameter'];   
     $successresponse = $_POST['successresponse'];
     $failureresponse = $_POST['failureresponse'];
     $pendingresponse = $_POST['pendingresponse'];
     $selectapitype = $_POST['selectapitype'];
     $apihitype = $_POST['apihitype'];
     $status = $_POST['status'];
     $operatortxidresponse = $_POST['operatortxidresponse'];
     $id = $_POST['id'];

    $query = "UPDATE `rechargeApi` SET `NAME`='$apiname',`APIURL`='$apiurl', `BALURL`='$balurl', `MBPARAMETER`='$mobileparameter',
    `OPRAMETER`='$operatorparameter',`AMNTPARAMETER`='$amountparameter',`TXNIDPARAMETER`='$txnidparameter',`OPTNLPARAMETER`='$optionalparameter',`SCSRESPONSE`='$successresponse'
    ,`FLRRESPONSE`='$failureresponse',`PNDRESPONDE`='$pendingresponse',`APITYPE`='$selectapitype',`APIHITTYPE`='$apihitype',
    `STATUS`='$status',`OPTXIDRSPNS`='$operatortxidresponse' WHERE ID='$id'";

    $run = mysqli_query($con , $query );
   if($run){
                echo "<script> alert('Updated')
                location.replace('recharge-api.php')
                </script>";
            }else{
                echo "<script> alert('data not updated') </script>";
            } 

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Recharge API</title>

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
                                            <h4>Add Recharge API</h4>
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
                                                <li class="breadcrumb-item"><a href="#!">Recharge API</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Add Recharge API</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Recharge API</h5>
                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>
                                                <i class="icofont icofont-refresh"></i>
                                                <i class="icofont icofont-close-circled"></i>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" action="" >
                                                <?php  
                                                
                                                          $id = $_GET['id'];
                                                          
                                                          $query = "SELECT * FROM `rechargeApi` WHERE ID= '$id'";
                                                          $run = mysqli_query($con , $query);
                                                          
                                                          $row = mysqli_fetch_array($run);
                                                        //   print_r($row)
;                                                          
                                                ?>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Recharge API Name</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['NAME'] ?>" name="apiname">
                                                        <span class="messages"></span>
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label for="">API URL</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['BALURL'] ?>" name="balurl" placeholder="http://google.com/pagename?username=xxxxx&password=xxxxx">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API URL</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['APIURL'] ?>" name="apiurl" placeholder="http://google.com/pagename?username=xxxxx&password=xxxxx">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Mobile Parameter</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['MBPARAMETER'] ?>" name="mobileparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Operator Parameter</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['OPRAMETER'] ?>" name="operatorparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Amount Parameter</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['AMNTPARAMETER'] ?>" name="amountparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Txn Id Parameter</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['TXNIDPARAMETER'] ?>" name="txnidparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Optional Parameter</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['OPTNLPARAMETER'] ?>" name="optionalparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Success Response</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['SCSRESPONSE'] ?>" name="successresponse">
                                                        <span class="messages"></span>
                                                    </div>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Failure Response</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['FLRRESPONSE'] ?>" name="failureresponse">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Pending Response</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['PNDRESPONDE'] ?>" name="pendingresponse">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API Type:</label>
                                                        <div class="input-group">
                                                            <select name="selectapitype" class="form-control">
                                                                <option value="">---- Select API Type ----</option>
                                                                <option <?php echo ($row['APITYPE'] == 'string') ? "checked" : "" ?>  value="string">String</option>
                                                                <option <?php echo ($row['APITYPE'] == 'json') ? "checked" : "" ?>  value="json">JSON</option>
                                                                <option  <?php echo ($row['APITYPE'] == 'xml') ? "checked" : "" ?>  value="xml">XML</option>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">API Hit Type:</label>
                                                        <div class="input-group">
                                                            <select name="apihitype" class="form-control">
                                                                <option  value="">---- Select API Hit Type ----</option>
                                                                <option <?php echo ($row['APIHITTYPE'] == 'GET') ? "checked" : "" ?>  value="GET">GET</option>
                                                                <option <?php echo ($row['APIHITTYPE'] == 'POST') ? "checked" : "" ?>  value="POST">POST</option>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Status Response</label>
                                                        <input type="text" value="<?php echo $row['STATUS'] ?>" class="form-control" name="status">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Operator TXID Response</label>
                                                        <input type="text" value="<?php echo $row['OPTXIDRSPNS'] ?>" class="form-control" name="operatortxidresponse">
                                                        <span class="messages"></span>
                                                    </div>   
                                                </div>
                                                    <input type="hidden" value="<?php echo $row['ID'] ?>" class="form-control" name="id">
                                               
                                                <div class="form-group row text-center">
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="addrechargeapi" class="btn btn-primary m-b-0">Submit </button>
                                                        <button type="submit"
                                                            class="btn btn-primary m-b-0">Cancel
                                                        </button>
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