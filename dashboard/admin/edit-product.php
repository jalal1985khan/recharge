
<?php 

    require("../includes/config.php");
    
   if(isset($_POST['addproduct']))
   {
     $snumber = $_POST['supportnumber'];
     $semail = $_POST['supportemail'];
     $weburl = $_POST['websiteurl'];
     $titleseo = $_POST['websiteseo'];
     $webdescription = $_POST['websitedescription'];
     $webkeyword = $_POST['websitekeyword'];
     $address = $_POST['address'];
     $registration = $_POST['registration'];
     $facebook = $_POST['fb'];
     $twitter = $_POST['twitter'];
     $youtube = $_POST['youtube'];
     $linkedin = $_POST['linkedin'];
     
    $logo = $_FILES['image'];
    
    print_r($logo);
    
    $name = $_FILES['image']['name'];
    
    if(!empty($_FILES['image'])){
    
                  $q = "SELECT * FROM `websetting` WHERE ID = 1";
                $r = mysqli_query($con , $q);
                $ar = mysqli_fetch_array($r);
                $img = $ar['LOGO'];
                // echo $img;
                   $dest2 = "../../images/$img";
                //   echo $dest2;
                   
                    if(unlink($dest2)){
                        $tmp_name = $_FILES['image']['tmp_name'];
                        $dest = "../../images/";
                        $target = $dest.basename($_FILES['image']['name']);
                         $query22 = "UPDATE `websetting` SET `LOGO`= '$name' WHERE `ID` = 1";
                         $query_run = mysqli_query($con,$query22);
                      move_uploaded_file($_FILES['image']['tmp_name'] , $target);
                    
                    }else{
                        echo "not unlink";
                    }
    
    }
  
    
    
     $query = "UPDATE `websetting` SET `SNUMBER`='$snumber',`SEMAIL`='$semail',`WEBURL`='$weburl', `WEBTITLESEO`='$titleseo',`WEBDESCRIPTION`='$webdescription',`WEBKEYWORDS`='$webkeyword',`ADDRESS`='$address',`REGISTRATION`='$registration',`FACEBOOK`='$facebook',`TWITTER`='$twitter',`YOUTUBE`='$youtube',`LINKEDIN`='$linkedin' WHERE `ID` = 1";
 
   
    
 $query_run = mysqli_query($con,$query);

     if($query_run)
     {
       echo '<script>alert("Data Updated")</script>';
     }
     else
     {
       echo '<script>alert("Data Not Updated")</script>';
     }
    //  if(move_uploaded_file($_FILES['p_image']['tmp_name'],$image_path)){
    //   echo '<script>alert("image save")</script>';
    
    // }else{
    //   echo '<script>alert("image not save")</script>';
    
    // }

  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add product</title>

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
                        include "sidebarlist.php"
                    ?>
                    <!-- sidebarlist -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Add Product</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">CRM Management</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Add Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add Product</h5>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="card-block">
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <?php
                                                                    $res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
                                                                    $row = $res->fetch_assoc();
                                                               ?>
                                                               
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <label for="">Support Number</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['SNUMBER']; ?>" name="supportnumber" placeholder="Support Number">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="">Support Email</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['SEMAIL']; ?>" name="supportemail" placeholder="Support Email">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <label for="">Website URL</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['WEBURL']; ?>" name="websiteurl" placeholder="website URL">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <label for="">Logo</label>
                                                                    <input type="file" class="form-control" name="image" placeholder="">
                                                                        <!-- <img src="" alt=""> -->
                                                                    <span class="messages"></span>
                                                                </div>
                                                                 <div class="col-sm-8">
                                                                    <label class="">Website Title For SEO</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['WEBTITLESEO']; ?>" name="websiteseo" placeholder="" >
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="">Website Description</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['WEBDESCRIPTION']; ?>" name="websitedescription" placeholder="webspidy is a young, enthusiastic web development company offering end-to-end services including web design and content development, digital marketing, SEO and Ecommerce. Our company has a handpicked team of young talents who shows creative results." >
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="">Website keywords</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['WEBKEYWORDS']; ?>" name=websitekeyword placeholder="" >
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="">Website Address for contact page</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['ADDRESS']; ?>" name="address" placeholder="">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                        <label for="">Home Page Registration</label>
                                                                        <select name="registration" class="form-control">
                                                                            <option ><?php echo $row['REGISTRATION']; ?></option>
                                                                            <option value="ON">ON</option>
                                                                            <option value="OF">OF</option>
                                                                        </select>
                                                                        <span class="messages"></span>
                                                                    </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <label class="">Facebook</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['FACEBOOK']; ?>" name="fb" placeholder="Facebook URL">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label class="">Twitter</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['TWITTER']; ?>" name="twitter" placeholder="Twitter URL">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="">Youtube</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['YOUTUBE']; ?>" name="youtube" placeholder="Youtube URL">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row justify-content-center">
                                                                <div class="col-sm-4">
                                                                    <label class="">Linkedin</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['LINKEDIN']; ?>" name="linkedin" placeholder="Linkedin URL">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            
                                                          
                                                            <div class="form-group row text-center">
                                                                <div class="col-sm-10">
                                                                    <button type="submit" name="websetting" class="btn btn-primary m-b-0">Submit
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