<?php

session_start();
if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
header("location:login.php");
}

require("../includes/config.php");

if(isset($_GET['delete'])){
    $id = $_GET['id'];
    if($con->query("DELETE FROM `category` where ID='$id'")){
            echo "<script> alert('OOPS..! Category Deleted') 
            location.replace('product-category.php');
            </script>";
    }
}
if(isset($_POST['createcategory'] )){
    
    $image = $_FILES['image'];
    $cname = $_POST['cname'];
    $description = $_POST['description'];
 $img_name = $image['name'];
$img_tmp = $image['tmp_name'];
// print_r($image);

$dest = "../../images/products/CAT/$img_name";
// echo $dest;
    
    $query = "INSERT INTO `category`(`IMAGE`, `CNAME`, `CDESCRIPTION`)
        	VALUES ('$img_name', '$cname', '$description')";
        	
    $run = mysqli_query($con , $query );
   if($run){
                move_uploaded_file($img_tmp , $dest);
                echo "<script> alert('Category Added..!') </script>";
            }else{
                echo "<script> alert('data not inserted') </script>";
            } 
    }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Category</title>


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
                                            <h4>Product Category</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">E-Commerce</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Product Category</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Category</h5>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                                                            data-modal="modal-13"> <i
                                                                class="icofont icofont-plus m-r-5"></i> Create Category
                                                        </button>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <div class="table-content">
                                                                <div class="project-table">
                                                                    <table id="simpletable"
                                                                                        class="table  table-striped table-bordered nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Sl No.</th>
                                                                                <th>Image</th>
                                                                                <th>Name</th>
                                                                                <th>Description</th>
                                                                                <th>Date</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $res = $con->query("SELECT * FROM category order by ID DESC");
                                                                            if($res->num_rows > 0){
                                                                                $i =1 ;
                                                                                while($row = $res->fetch_assoc()){
                                                                                    echo ('<tr>
                                                                                                <td>'.$i++.'</td>
                                                                                                <td><img src="../../images/products/CAT/'.$row['IMAGE'].'" width="70px" class="img-fluid" alt="tbl"></td>
                                                                                                <td>'.$row['CNAME'].'</td>
                                                                                                <td>'.$row['CDESCRIPTION'].'</td>
                                                                                                <td>'.$row['DATE'].'</td>
                                                                                                <td class="action-icon">
                                                                                    <a href="edit-addproduct.php?id='.$row['ID'].'"
                                                                                        class="m-r-15 text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Edit"><i
                                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                                    <a onclick="javascript:confirmationDelete($(this));return false;" href="product-category.php?delete&id='.$row['ID'].'" class="text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Delete"><i
                                                                                            class="icofont icofont-delete-alt"></i>
                                                                                    </a>
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
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        
                                        
                                        <div class="md-modal md-effect-13 addcontact" id="modal-13">
                                            <form action="" enctype="multipart/form-data" method="post">
                                            <div class="md-content">
                                                <h3 class="f-26">Create Category</h3>
                                                    <div>
                                                    <div class="md-group-add-on">
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control" name="cname" placeholder="Category Name">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input type="text" class="form-control" name="description" placeholder="Short Description">
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" name="createcategory" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Create</button>
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
        
        function confirmationDelete(anchor)
        {
           var conf = confirm('Are you sure want to delete this Category?');
           if(conf)
              window.location=anchor.attr("href");
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

<!-- Mirrored from flatable.phoenixcoded.net/default/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:19:36 GMT -->

</html>