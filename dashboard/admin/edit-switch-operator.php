<?php


session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");

   if(isset($_POST['submitswitchoperator']))
   {
     $productname = $_POST['productname'];
     $longcode = $_POST['longcode'];
     $servicetype = $_POST['servicetype'];
     $minrc = $_POST['minrc'];
     $maxrc = $_POST['maxrc'];
     $apiservice = $_POST['apiservice'];
     $apiproduct = $_POST['apiproduct'];
     $roffer = $_POST['roffer'];
     
     $ap_code = $_POST['ap_code'];
     
     $p = $con->query("select * from operatorManager where SERVICEAPI='$apiservice' and PRODUCTCODE='$apiproduct'")->fetch_assoc();
     $p_name = $p['PRODUCTNAME'];
     
     $operatorlogo = $_FILES['operatorlogo'];
     $status = $_POST['status'];
     $img_name = $operatorlogo['name'];
     $id = $_POST['id'];
     if(!empty($img_name)){
         $con->query("update `switchOperator` SET `LOGO`='$img_name' WHERE ID='$id'" );
         move_uploaded_file($operatorlogo['tmp_name'] , "../../images/$img_name");
     }
     
     
     $query = "UPDATE `switchOperator` SET `PRODUCTNAME`='$p_name',roffer='$roffer', API_USER_CODE='$ap_code' , MINRCAMOUNT='$minrc', MAXRCAMOUNT='$maxrc', `LONGCODE`='$apiproduct',`SERVICETYPE`='$servicetype',
     `APICOMPANY`='$apiservice', `STATUS`='$status' WHERE ID='$id'";
     		
    $query_run = mysqli_query($con,$query);
    
     if($query_run)
     {
       echo '<script>alert("Switch Operator is Update")
       location.replace("switch-operator.php");
       </script>';
     }
 
     else
     {
       echo '<script>alert("Failed To Add Switch Operator")</script>';
     }

  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Operator</title>

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
                                            <h4>Switch Operator</h4>
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
                                                <li class="breadcrumb-item"><a href="#!">Switch Operator</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Operator</h5>
                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>
                                                <i class="icofont icofont-refresh"></i>
                                                <i class="icofont icofont-close-circled"></i>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <form  method="post" enctype="multipart/form-data" action="" >
                                                <?php
                                                
                                                          $id = $_GET['id'];
                                                          $query = "SELECT * FROM `switchOperator` WHERE ID= '$id'";
                                                          $run = mysqli_query($con , $query);
                                                          $operator = mysqli_fetch_array($run);

                                                ?>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Product Name</label>
                                                        <input type="text" class="form-control"  value="<?php echo $operator['PRODUCTNAME']?>" name="productname">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="">Long Code</label>
                                                        <input type="text" class="form-control" readonly value="<?php echo $operator['LONGCODE']?>" name="longcode" >
                                                        <span class="messages"></span>
                                                    </div> 
                                                    <div class="col-sm-2">
                                                        <label for="">R-offer Code</label>
                                                        <input type="text" class="form-control" value="<?php echo $operator['roffer']?>" name="roffer" >
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Service Type</label>
                                                        <div class="input-group">
                                                            <input type='hidden' value="<?php echo $operator['SERVICETYPE']?>" id="service_type">
                                                            <select name="servicetype" onChange="gettype(this.value);" class="form-control">
                                                                <option value="<?php echo $operator['SERVICETYPE']?>"><?php echo $operator['SERVICETYPE']?></option>
                                                                 <?php
                                                                $query = "SELECT * FROM serviceManager where SERVICENAME<>'".$operator['SERVICETYPE']."'order by ID asc";
                                                                $run = mysqli_query($con , $query);
                                              
                                                                while($row = mysqli_fetch_array($run)){
                                                        
                                                                echo "<option value='".$row['SERVICENAME']."'>".$row['SERVICENAME']."</option>>";
                                                                 }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">Api User Code</label>
                                                        <input type="text" class="form-control"  value="<?php echo $operator['API_USER_CODE']?>" name="ap_code">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="">Min. Amount</label>
                                                        <input type="number" class="form-control"  value="<?php echo $operator['MINRCAMOUNT']?>" name="minrc">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="">Max. Amount</label>
                                                        <input type="number" class="form-control"  value="<?php echo $operator['MAXRCAMOUNT']?>" name="maxrc">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API Company</label>
                                                        <div class="input-group">
                                                            <select name="apiservice"  onChange="getSubcat(this.value);" class="form-control">
                                                                <option selected value="<?php echo $operator['APICOMPANY']?>"><?php echo $operator['APICOMPANY']?></option>
                                                                <?php
                                                                $query = "SELECT * FROM rechargeApi where NAME<>'".$operator['APICOMPANY']."'order by ID asc";
                                                                $run = mysqli_query($con , $query);
                                              
                                                                while($row = mysqli_fetch_array($run)){
                                                        
                                                                echo "<option value='".$row['NAME']."'>".$row['NAME']."</option>>";
                                                                 }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">API Product Name</label>
                                                        <div class="input-group">
                                                            <select name="apiproduct" id="product" class="form-control">
                                                                <option selected value="<?php echo $operator['LONGCODE']?>"><?php echo $operator['PRODUCTNAME']?></option>

                                                            </select>
                                                        </div>
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Logo</label>
                                                        <input type="file" class="form-control" name="operatorlogo" placeholder="Service Name">
                                                        <span class="messages"></span>
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        <label for="">Select Status</label>
                                                        <div class="input-group">
                                                            <select name="status" class="form-control">
                                                                <option value="">---- Select Status ----</option>
                                                               <option <?php echo ($operator['STATUS'] == "Activate") ? "selected" : "" ?> value="Activate">Activate</option>
                                                                <option <?php echo ($operator['STATUS'] == "Deactivate") ? "selected" : "" ?> value="Deactivate">Deactivate</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <span class="messages"></span>
                                                    </div>
                                                    <input type="hidden" name="id"  value="<?php echo $operator['ID']?>">
                                                </div>
                                                <div class="form-group row text-center">
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="submitswitchoperator" class="btn btn-primary m-b-0">Submit
                                                        </button>
                                                        <button type="submit"
                                                            class="btn btn-primary m-b-0">Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
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

<script>
    function gettype(val){
        $("#service_type").val(val)
        console.log($("#service_type").val())
    }
    function getSubcat(val) {
    var type = $("#service_type").val();
    var op_id = val;
    console.log(type)
    console.log(op_id)
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:{op_id:op_id, type:type,},
	success: function(data , status){
		$("#product").html(data);
		
	}
	});
}
</script>
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