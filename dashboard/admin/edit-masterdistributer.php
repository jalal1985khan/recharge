<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");
    
   if(isset($_POST['submit']))
   {
       $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $rc = $_POST['rcbal'];
    $dmr = $_POST['dmrbal'];
    $sms = $_POST['smsbal'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $camount = $_POST['camount'];
    $id = $_POST['id'];
    $query = "UPDATE `masterdistributer` SET `NAME`='$name',`MOBILE`='$mobile',`EMAIL`='$email',`SMSBAL`='$sms',`DMRBAL`='$dmr',
    `RCBAL`='$rc',`ADDRESS`='$address',`STATE`='$state',`CITY`='$city',`CUTTOFFAMOUNT`='$camount'  WHERE ID = '$id'";
    $run = mysqli_query($con , $query );
   if($run){
                echo "<script> alert('Updated')
                </script>";
            }else{
                echo "<script> alert('data not updated') </script>";
            } 

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>

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
                                            <h4>Edit Masterdistributer</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">User Managment</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Masterdistributer</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Edit Masterdistributer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Edit Masterdistributer</h5>
                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>
                                                <i class="icofont icofont-refresh"></i>
                                                <i class="icofont icofont-close-circled"></i>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                          <form action="" method="post">
                                              <?php
                                              $id = $_GET['id'];
                                              $row = $con->query("select * from masterdistributer where ID='$id'")->fetch_assoc();
                                              
                                              ?>
                                            <div class="md-content">
                                                <div>
                                                   <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Name" value="<?php echo $row['NAME']  ?>" name="name">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="number" class="form-control"
                                                            placeholder="Mobile Number"  value="<?php echo $row['MOBILE']  ?>"  name="mobile">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="email" class="form-control "
                                                            placeholder="Email ID"  value="<?php echo $row['EMAIL']  ?>"  name="email">
                                                    </div>
                                                       <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="">SMS BALANCE</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['SMSBAL'] ?>" readonly name="smsbal">
                                                        <span class="messages"></span>
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label for="">RC BALANCE</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['RCBAL'] ?>" readonly name="rcbal" placeholder="http://google.com/pagename?username=xxxxx&password=xxxxx">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">DMR BALANCE</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['DMRBAL'] ?>" readonly name="dmrbal" placeholder="http://google.com/pagename?username=xxxxx&password=xxxxx">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address"  value="<?php echo $row['ADDRESS']  ?>"  name="address">
                                                    </div>
                                                    <div class="input-group">
                                                        <select name="state" class="form-control">
                                                            <option value="">---- Select State ----</option>
                                                                <option  <?php echo ($row['STATE'] == 'Andhra Pradesh') ? "selected" : "" ?>   value="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option <?php echo ($row['STATE'] == 'Andaman and Nicobar Islands') ? "selected" : "" ?> value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                <option <?php echo ($row['STATE'] == 'Arunachal Pradesh') ? "selected" : "" ?> value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                <option <?php echo ($row['STATE'] == 'Assam') ? "selected" : "" ?> value="Assam">Assam</option>
                                                                <option <?php echo ($row['STATE'] == 'Bihar') ? "selected" : "" ?> value="Bihar">Bihar</option>
                                                                <option <?php echo ($row['STATE'] == 'Chandigarh') ? "selected" : "" ?> value="Chandigarh">Chandigarh</option>
                                                                <option <?php echo ($row['STATE'] == 'Chhattisgarh') ? "selected" : "" ?> value="Chhattisgarh">Chhattisgarh</option>
                                                                <option <?php echo ($row['STATE'] == 'Dadar and Nagar Haveli') ? "selected" : "" ?> value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                <option <?php echo ($row['STATE'] == 'Daman and Diu') ? "selected" : "" ?> value="Daman and Diu">Daman and Diu</option>
                                                                <option <?php echo ($row['STATE'] == 'Delhi') ? "selected" : "" ?> value="Delhi">Delhi</option>
                                                                <option <?php echo ($row['STATE'] == 'Lakshadweep') ? "selected" : "" ?> value="Lakshadweep">Lakshadweep</option>
                                                                <option <?php echo ($row['STATE'] == 'Puducherry') ? "selected" : "" ?> value="Puducherry">Puducherry</option>
                                                                <option <?php echo ($row['STATE'] == 'Goa') ? "selected" : "" ?> value="Goa">Goa</option>
                                                                <option <?php echo ($row['STATE'] == 'Gujarat') ? "selected" : "" ?> value="Gujarat">Gujarat</option>
                                                                <option <?php echo ($row['STATE'] == 'Haryana') ? "selected" : "" ?> value="Haryana">Haryana</option>
                                                                <option <?php echo ($row['STATE'] == 'Himachal Pradesh') ? "selected" : "" ?> value="Himachal Pradesh">Himachal Pradesh</option>
                                                                <option <?php echo ($row['STATE'] == 'Jammu and Kashmir') ? "selected" : "" ?> value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                <option <?php echo ($row['STATE'] == 'Jharkhand') ? "selected" : "" ?> value="Jharkhand">Jharkhand</option>
                                                                <option <?php echo ($row['STATE'] == 'Karnataka') ? "selected" : "" ?> value="Karnataka">Karnataka</option>
                                                                <option <?php echo ($row['STATE'] == 'Kerala') ? "selected" : "" ?> value="Kerala">Kerala</option>
                                                                <option <?php echo ($row['STATE'] == 'Madhya Pradesh') ? "selected" : "" ?> value="Madhya Pradesh">Madhya Pradesh</option>
                                                                <option <?php echo ($row['STATE'] == 'Maharashtra') ? "selected" : "" ?> value="Maharashtra">Maharashtra</option>
                                                                <option <?php echo ($row['STATE'] == 'Manipur') ? "selected" : "" ?> value="Manipur">Manipur</option>
                                                                <option <?php echo ($row['STATE'] == 'Meghalaya') ? "selected" : "" ?> value="Meghalaya">Meghalaya</option>
                                                                <option <?php echo ($row['STATE'] == 'Mizoram') ? "selected" : "" ?> value="Mizoram">Mizoram</option>
                                                                <option <?php echo ($row['STATE'] == 'Nagaland') ? "selected" : "" ?> value="Nagaland">Nagaland</option>
                                                                <option <?php echo ($row['STATE'] == 'Odisha') ? "selected" : "" ?> value="Odisha">Odisha</option>
                                                                <option <?php echo ($row['STATE'] == 'Punjab') ? "selected" : "" ?> value="Punjab">Punjab</option>
                                                                <option <?php echo ($row['STATE'] == 'Rajasthan') ? "selected" : "" ?> value="Rajasthan">Rajasthan</option>
                                                                <option <?php echo ($row['STATE'] == 'Sikkim') ? "selected" : "" ?> value="Sikkim">Sikkim</option>
                                                                <option <?php echo ($row['STATE'] == 'Tamil Nadu') ? "selected" : "" ?> value="Tamil Nadu">Tamil Nadu</option>
                                                                <option <?php echo ($row['STATE'] == 'Telangana') ? "selected" : "" ?> value="Telangana">Telangana</option>
                                                                <option <?php echo ($row['STATE'] == 'Tripura') ? "selected" : "" ?> value="Tripura">Tripura</option>
                                                                <option <?php echo ($row['STATE'] == 'Uttar Pradesh') ? "selected" : "" ?> value="Uttar Pradesh">Uttar Pradesh</option>
                                                                <option <?php echo ($row['STATE'] == 'Uttarakhand') ? "selected" : "" ?> value="Uttarakhand">Uttarakhand</option>
                                                                <option <?php echo ($row['STATE'] == 'West Bengal') ? "selected" : "" ?> value="West Bengal">West Bengal</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="City"  value="<?php echo $row['CITY']  ?>"  name="city">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Cutoff Amount"  value="<?php echo $row['CUTTOFFAMOUNT']  ?>"  name="camount">
                                                    </div>
                                                   
                                                   <div class="text-center">
                                                        <button type="submit" name="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Update</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                                                    </div>
                                                    <input type="hidden" value="<?php echo $row['ID'] ?>" class="form-control" name="id">
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