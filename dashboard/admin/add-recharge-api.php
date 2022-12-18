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
     
     $rpstatus = $_POST['rpstatus']; 
     $rptxn = $_POST['rptxn']; 
     $rpop = $_POST['rpop']; 
     $rperror = $_POST['rperror']; 

    $query = "INSERT INTO `rechargeApi`(`NAME`, `APIURL`,`BALURL`, `MBPARAMETER`, `OPRAMETER`, `AMNTPARAMETER`, `TXNIDPARAMETER`, `OPTNLPARAMETER`, `SCSRESPONSE`, `FLRRESPONSE`, `PNDRESPONDE`, `APITYPE`, `APIHITTYPE` , `STATUSRSPNS`, `STATUS`, `OPTXIDRSPNS`,`RESULT_ST_PARA`,`RESULT_TXN_PARA`,`RESULT_OP_ID_PARA`,`RESULT_ERROR_PARA`)
        	VALUES ('$apiname' , '$apiurl' ,'$balurl' , '$mobileparameter' , '$operatorparameter' , '$amountparameter' , '$txnidparameter' , '$optionalparameter' , '$successresponse' ,'$failureresponse' , '$pendingresponse' , '$selectapitype' , '$apihitype' , '$status' , 'Activate' , '$operatortxidresponse','$rpstatus','$rptxn','$rpop','$rperror') ";
        	
    $run = mysqli_query($con , $query );
   if($run){
                echo "<script> alert('data inserted') </script>";
            }else{
                echo "<script> alert('data not inserted') </script>";
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
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Recharge API Name</label>
                                                        <input type="text" class="form-control" name="apiname">
                                                        <span class="messages"></span>
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label for="">BALANCE API URL</label>
                                                        <input type="text" class="form-control" name="balurl" placeholder="http://google.com/pagename?username=xxxxx&password=xxxxx">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API URL</label>
                                                        <input type="text" class="form-control" name="apiurl" placeholder="http://google.com/pagename?username=xxxxx&password=xxxxx">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Mobile Parameter</label>
                                                        <input type="text" class="form-control" name="mobileparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Operator Parameter</label>
                                                        <input type="text" class="form-control" name="operatorparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Amount Parameter</label>
                                                        <input type="text" class="form-control" name="amountparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Txn Id Parameter</label>
                                                        <input type="text" class="form-control" name="txnidparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Optional Parameter</label>
                                                        <input type="text" class="form-control" name="optionalparameter">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Success Response</label>
                                                        <input type="text" class="form-control" name="successresponse">
                                                        <span class="messages"></span>
                                                    </div>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Failure Response</label>
                                                        <input type="text" class="form-control" name="failureresponse">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Pending Response</label>
                                                        <input type="text" class="form-control" name="pendingresponse">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API Type:</label>
                                                        <div class="input-group">
                                                            <select name="selectapitype" class="form-control">
                                                                <option value="">---- Select API Type ----</option>
                                                                <option value="JSON">JSON</option>
                                                                <option value="XML">XML</option>
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
                                                                <option value="">---- Select API Hit Type ----</option>
                                                                <option value="GET">GET</option>
                                                                <option value="POST">POST</option>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Response Status parameter</label>
                                                        <input type="text" class="form-control" name="rpstatus">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Response TXN id parameter</label>
                                                        <input type="text" class="form-control" name="rptxn">
                                                        <span class="messages"></span>
                                                    </div> 
                                                </div>

                                                <div class="form-group row">
                                                     
                                                    <div class="col-sm-4">
                                                        <label for="">Response OP Id parameter</label>
                                                        <input type="text" class="form-control" name="rpop">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Response error Parameter</label>
                                                        <input type="text" class="form-control" name="rperror">
                                                        <span class="messages"></span>
                                                    </div>
                                                      
                                                </div>
                                               
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

                                    <div class="page-body">
                                      
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Recharge API</h5>
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <a href="add-recharge-api.php"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Add Recharge API
                                                </a>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                    <table id="custm-tool-ele"
                                                        class="table table-striped table-bordered nowrap">
                                                    
                                                        <thead>
                                                            <tr>
                                                                <th>S.NO</th>
                                                                <th>API Name</th>
                                                                <th>API URL</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                $res = $con->query("SELECT * FROM rechargeApi order by ID asc");
                                                if($res->num_rows > 0){
                                                    while($row = $res->fetch_assoc()){
                                                        echo ('<tr>
                                                                    <td>'.$row['ID'].'</td>
                                                                    <td>'.$row['NAME'].'</td>
                                                                    <td>'.$row['APIURL'].'</td>
                                                                    <td>'.$row['STATUS'].'</td>
                                                                     <td>
                                                                        <a href="edit-recharge-api.php?id='.$row['ID'].'" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                        <a onclick="javascript:confirmationDelete($(this));return false;" href="recharge-api.php?delete&id='.$row['ID'].'" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                    </td>
                                
                                                                </tr>');
                                                                  }
                                                                }
                                                                    
                                                                ?>
                                                            </tbody>
                                                     </table>
                                                </div>
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