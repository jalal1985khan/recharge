
<?php


require("../includes/config.php");
require("../includes/function.php");

session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

if(isset($_POST['submit'] )){
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $password = mt_rand(100000 , 900000);
 	$message = "Dear%20User%20Your%20Password%20is%20$password%20from%20www.recharges365.com";
 	$pass_hash = md5($password);
    $query = "SELECT * FROM `Api_users` WHERE `MOBILE` = '$mobile' ";
    $run = mysqli_query($con , $query );
    if(mysqli_num_rows($run) < 1){
        $admin_id = $_SESSION["status"];
        $api_key = str_shuffle("oiuy3rgefubdchnjYGTFRDESWASZEDXC2134567809876VBJN");
                $date = date("Y-m-d");
                
         	$query2 = "INSERT INTO `Api_users`(`NAME`, `MOBILE`, `EMAIL`, `PASSWORD`, `RCBAL`, `DMRBAL`, `SMSBAL`, `API_KEY`, `OWNER`, `IMAGE`, `DATE`) VALUES('$name' , '$mobile',
         	'$email','$pass_hash', '0','0','0','$api_key','ADMIN','default.jpeg','$date')";
             		
            if(mysqli_query($con , $query2)){
                echo "<script> alert('data inserted') </script>";
   		            SendMessage($mobile,$message);
            }else{
                echo "<script> alert('data not inserted') </script>";
            } 
    }else{
            echo "<script> alert('Mobile Number Already Exisit') </script>";
    }
 
}


if(isset($_GET['delete']))
  {
      $id = $_GET['id'];
       $query = "DELETE FROM `Api_users` WHERE ID = '$id'";
        $query_run = mysqli_query($con,$query);
        echo "<script> alert('Deleted')
        location.replace('api_user.php');
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
    
    <title>Api User</title>

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

           <?php
                include "livechat.php";
            ?>

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
                                            <h4>Api Users</h4>
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
                                                <li class="breadcrumb-item"><a href="#!">Api User</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                     <div class="card">
                                            <div class="card-header">
                                                <h5>Master Distributer</h5>
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <button type="button"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Add Person
                                                </button>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                    <table id="custm-tool-ele"
                                                        class="table table-striped table-bordered nowrap">
                                                    
                                                        <thead>
                                                            <tr>
                                                                <th>S.NO</th>
                                                                <th>User Name</th>
                                                                <th>Image</th>
                                                                <th>Mobile Number</th>
                                                                <th>RC BAL</th>
                                                                <th>DMR BAL</th>
                                                                <th>SMS BAL</th>
                                                                <th>Reg. Date</th>
																 <th>Login</th>
																 <th>Api Access</th>
                                                                <th>Comm</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                $res = $con->query("SELECT * FROM Api_users order by ID asc");
                                                if($res->num_rows > 0){
                                                    while($row = $res->fetch_assoc()){
                                                        ?>
                                                                <tr>
                                                                    <td> <?php echo $row['ID'] ?></td>
                                                                    <td> <?php echo $row['NAME'] ?></td>
                                                                    <td> <img src="../masterdistributer/img/<?php echo $row['IMAGE'] ?>" width="70px"> </td>
                                                                    <td> <?php echo $row['MOBILE'] ?></td>
                                                                    <td> <?php echo $row['RCBAL'] ?></td>
                                                                    <td> <?php echo $row['DMRBAL'] ?></td>
                                                                    <td> <?php echo $row['SMSBAL'] ?></td>
                                                                    <td> <?php echo $row['DATE'] ?></td>
																	<td><a  href="../apiuser/index.php?login_ap&id=<?php echo $row['ID']?>" target="_blank">Login</a></td>
																	<td><a href="user_api.php?user_type=API_USER&user_id=<?php echo $row['ID']?> ">Edit Api</a></td>
                                                                    <td><a href="set-ap-package.php?user_id=<?php echo $row['ID']?>" class="text-center text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a></td>
                                                                     <td>
                                                                        <a href="edit-api_user.php?id=<?php echo $row['ID'] ?>" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                        <a onclick="javascript: confirmationDelete($(this));return false;" href="api_user.php?delete&id=<?php echo $row['ID']?>" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
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
                                                <h3 class="f-26">Add Api User</h3>
                                                <div>
                                                   <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Name" name="name">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="number" class="form-control"
                                                            placeholder="Mobile Number" name="mobile">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="email" class="form-control "
                                                            placeholder="Email ID" name="email">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address" name="address">
                                                    </div>
                                                    <div class="input-group">
                                                        <select name="state"class="form-control">
                                                            <option value="">---- Select State ----</option>
                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                <option value="Assam">Assam</option>
                                                                <option value="Bihar">Bihar</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                <option value="Daman and Diu">Daman and Diu</option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                <option value="Puducherry">Puducherry</option>
                                                                <option value="Goa">Goa</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Haryana">Haryana</option>
                                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                <option value="Jharkhand">Jharkhand</option>
                                                                <option value="Karnataka">Karnataka</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                <option value="Maharashtra">Maharashtra</option>
                                                                <option value="Manipur">Manipur</option>
                                                                <option value="Meghalaya">Meghalaya</option>
                                                                <option value="Mizoram">Mizoram</option>
                                                                <option value="Nagaland">Nagaland</option>
                                                                <option value="Odisha">Odisha</option>
                                                                <option value="Punjab">Punjab</option>
                                                                <option value="Rajasthan">Rajasthan</option>
                                                                <option value="Sikkim">Sikkim</option>
                                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                                <option value="Telangana">Telangana</option>
                                                                <option value="Tripura">Tripura</option>
                                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                <option value="West Bengal">West Bengal</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="City" name="city">
                                                    </div>
                                                    <!--<div class="input-group">-->
                                                    <!--    <span class="input-group-addon"><i-->
                                                    <!--            class="icofont icofont-user"></i></span>-->
                                                    <!--    <input type="text" class="form-control"-->
                                                    <!--        placeholder="Cutoff Amount" name="camount">-->
                                                    <!--</div>-->
                                                   
                                                   <div class="text-center">
                                                        <button type="submit" name="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Add</button>
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