<?php


session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");
require("../includes/function.php");

$res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
$row = $res->fetch_assoc();

$weburl = $row['WEBURL'];
$webname = $row['WEBSITENAME'];

if(isset($_POST['submitService Page'] )){
    
    $masterdistributer = $_POST['masterdistributer'];
    $distributer = $_POST['distributer'];
    $firstname = $_POST['f_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $camount = $_POST['camount'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $password = mt_rand(100000 , 900000);
    
 	$message = "Dear%20User%20%20Your%20Password%20for%20$webname%20is%20$password.%20By%20$weburl";
 	$message2 = "Dear User, Your Password for online $webname is $password. By $weburl";
 	
 	$pass_hash = md5($password);
   $query = "SELECT * FROM `distributer` WHERE `MOBILE` = '$mobile' ";
    $query2 = $con->query("SELECT * FROM `masterdistributer` WHERE `MOBILE` = '$mobile' ")->num_rows;
    $query3 = $con->query("SELECT * FROM `Service Page` WHERE `MOBILE` = '$mobile' ")->num_rows;
    $run = mysqli_query($con , $query );
    if(mysqli_num_rows($run) < 1 && $query2 != 1 && $query3 != 1) {
            if($masterdistributer == "" && $distributer==""){
                $owner = "ADMIN";
            }
            else if($masterdistributer == ""){
                $owner = "DISTRIBUTER";
            }
            else if($distributer == ""){
                $owner = "MASTERDISTRIBUTER";
            }
            $date = date("Y-m-d");
	$query2 = "INSERT INTO `Service Page`(`OWNER` , `MS_ID`,`DISTRIBUTER`, `FNAME`,  `IMAGE`, `REGDATE` ,  `MOBILE`, `EMAIL`, `SMSBAL`, `RCBAL`, `DMRBAL`, `COMM_PACK`, `CUTTOFFAMOUNT`, `STATUS`, `APIACCESS`, `ADDRESS`, `CITY`,`STATE`,  `PASSWORD`) 
        	VALUES('$owner' , '$masterdistributer' , '$distributer' , '$firstname','default.jpeg', '$date' , '$mobile' , '$email', '0', '0', '0',  '0', '10', 'Activate', '', '$address' , '$city' , '$state' , '$pass_hash') ";
             		$run_query = mysqli_query($con , $query2 );
             		
             		
            if($run_query){
   		            SendMessage($mobile,$message);
   		            SendMail($email,$message2);
                echo "<script> alert('data inserted') </script>";
            }else{
                echo "<script> alert('data not inserted') </script>";
            } 
    }else{
                echo "<script> alert('Mobile Number Already Exisit') </script>";
    }
 
}
if(isset($_GET['status'])){
    $st = $_GET['status'];
    $id = $_GET['id'];
    if($st == "Activate"){
        $status = "Deactivate";
    }else{
        $status = "Activate";
    }
    
    if($con->query("update Service Page SET STATUS='$status' where ID='$id'")){
        echo "<script> alert('User Updated') 
        location.replace('Service Page.php');
        </script>";
    }
    
}
if(isset($_GET['delete']))
  {
      $id = $_GET['id'];
       $query = "DELETE FROM `Service Page` WHERE ID = '$id'";
        $query_run = mysqli_query($con,$query);
        echo "<script> alert('Deleted')
        location.replace('Service Page.php');
        </script>
        ";
         
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
    
    <title>Service Page</title>

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
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    
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
                                            <h4>Service Page</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!"> Page Layout</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Service Page</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Service Page</h5>
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <button type="button"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Add Service
                                                </button>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                    <table id="custm-tool-ele"
                                                        class="table table-striped table-bordered nowrap">
                                                    
                                                        <thead>
                                                            <tr>
                                                                <th>S.NO</th>
                                                                <th>Image</th>
                                                                <th>Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                $res = $con->query("SELECT * FROM servicepage order by FNAME ASC");
                                if($res->num_rows > 0){
                                    while($row = $res->fetch_assoc()){
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['ID'] ?> </td>
                                                    <td> <img src="../Service Page/img/<?php echo $row['IMAGE'] ?>" width="70px"> </td>
                              
                             
                                                    <td>
                                                        <a target="_blank" href="edit-Service Page.php?id=<?php echo $row['ID'] ?>" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                        <a onclick="javascript: confirmationDelete($(this));return false;" href="Service Page.php?delete&id=<?php echo $row['ID'] ?>" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                    </td>
                
                                                </tr>
                                                <?php
                                                  }
                                                }
                                                    
                                                ?>
                                                          
                                                 </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                        
                                     
                                        <div class="md-modal md-effect-13 addcontact" id="modal-13">
                                            <form action="" method="post">
                                            <div class="md-content">
                                                <h3 class="f-26">Add Service</h3>
                                                <div>
                                                   
                                                   <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control" placeholder="Service Number" name="servicename">
                                                    </div>
                                                   
                                                    <div class="text-center">
                                                        <button type="submit" name="submitService Page" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Create</button>
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
    <script>
    // $(document).ready(function(){
        
    //     $("#Service Page_register").click(function(e){
    //         e.preventDefault();
            
    //     var name = $("#f_name").val();
    //     var email = $("email").val();
    //     var mobile = $("#mobile").val();
    //     var city = $("#city").val();
    //     var address = $("#address").val();
    //     $.ajax({
            
    //       url:"add-Service Page.php",
    //       type:'post',
    //       data:{
    //           name:name,
    //           email:email,
    //           mobile:mobile,
    //           city:city,
    //           address:address,
               
               
    //       },
    //       success:function(data,status){
    //           console.log(data);
    //       }
            
    //     })
            
    //     });
        
        
        
        
        
    // });
    
    
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