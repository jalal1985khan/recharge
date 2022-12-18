<?php
session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}
include("../includes/config.php");
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $alert = $_POST['alert'];
    $status = $_POST['status'];
    
    if($con->query("INSERT INTO `news_alert`(`TYPE`, `ALERT`, `STATUS`) VALUES('$type' , '$alert' , '$status')")){
        echo "<script>alert('Added')</script>";
    }
}

  if(isset($_GET['delete']))
  {
      $id = $_GET['id'];
       $query = "DELETE FROM `news_alert` WHERE ID = '$id'";
        $query_run = mysqli_query($con,$query);
        echo "<script> alert('Deleted')
        location.replace('newsalert.php');
        </script>
        ";
         
     }

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>News Alert</title>

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
                    include "sidebarlist.php";
                   ?>
                    <!-- sidebarlist -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Alert</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!"> CRM</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">News Alert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                
                                    
                                        <div class="card">
                                            <div class="card-header">
                                                <h5> News Alert</h5>
                                                 
                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>
                                                    <i class="icofont icofont-refresh"></i>
                                                    <i class="icofont icofont-close-circled"></i>
                                                </div>
                                                <button type="button"
                                                            class="btn btn-primary mt-5 waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Add Alert
                                                </button>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                    <table id="custm-tool-ele"
                                                        class="table table-striped table-bordered nowrap">
                                                    
                                                        <thead>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>For user</th>
                                                                <th>Alert</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php
                                                          $al = $con->query("select * from news_alert");
                                                          $i =1 ;
                                                          while($row = $al->fetch_assoc()){
                                                          ?>
                                                          <tr>
                                                              
                                                                <td><?php echo $i++ ?></td>
                                                                <td><?php echo $row['TYPE'] ?></td>
                                                                <td><?php echo $row['ALERT'] ?></td>
                                                                <td><?php echo $row['STATUS'] ?></td>
                                                                    <td>
                                                                        <a target="_blank" href="edit-news_alert.php?id=<?php echo $row['ID']?>" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                        <a onclick="javascript: confirmationDelete($(this));return false;" href="newsalert.php?delete&id=<?php echo $row['ID'] ?>" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                    </td>
                                                          </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                          
                                                        </tfoot>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="md-modal md-effect-13 addcontact" id="modal-13">
                                            <div class="md-content">
                                                <form method="post">
                                                    
                                                <h3 class="f-26">Add Alert</h3>
                                                <div>
                                                    <h4>News Type</h4>
                                                    <div class="input-group">
                                                        <select id="hello-single" name="type" class="form-control">
                                                            <option value="">---- Select Type ----</option>
                                                            <option value="whiletelabel">White Label</option>
                                                            <option value="MASTERDISTRIBUTER">Master Distributer</option>
                                                            <option value="DISTRIBUTER">Distributer</option>
                                                            <option value="RETAILER">Retailer</option>
                                                            <option value="WEBSITE">Website</option>
                                                            <option value="APIUSER">API User</option>
                                                        </select>
                                                    </div>
                                                    <h4>Alert</h4>
                                                    <div class="input-group">
                                                        <input type="text" name="alert" class="form-control"
                                                            placeholder="" style="height: 60px;">
                                                    </div>
                                                    <div class="input-group justify-content-center">
                                                        <label class="radio-inline text-center">
                                                            <input type="radio" name="status" value="Activate" checked>&nbsp;&nbsp;Activate
                                                        </label>
    
                                                          <label class="radio-inline text-center">
                                                            <input type="radio" name="status" value="Deactivate">&nbsp;&nbsp;Deactivate
                                                          </label>
                                                    </div>
                                                    
                                                   <div class="text-center">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Save</button>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>

                                    </div>

                                </div>
                            </div>

                            <div id="styleSelector">
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