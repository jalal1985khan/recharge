
<?php 
    
    session_start();
    if(!isset($_SESSION["status"]) || $_SESSION["status"]==="0"){
    header("location:login.php");
    }

    require("../includes/config.php");
    
   if(isset($_POST['addproduct']))
   {
     $category = $_POST['category'];
     $subcategory = $_POST['subcategory'];
     $stockavailable = $_POST['stock-available'];
     $brandname = $_POST['brandname'];
     $productname = $_POST['productname'];   
     $paymentoption = $_POST['paymentoption'];   
     $price = $_POST['price'];   
     $pricebeforediscount = $_POST['price-before-discount'];
     $shippingcharge = $_POST['shippingcharge'];
     $colorselect = $_POST['colorselect'];
     $sizeselect = $_POST['sizeselect'];
     $description = $_POST['description'];
     $image1 = $_FILES['image1'];
     $image2 = $_FILES['image2'];
     $image3 = $_FILES['image3'];
     
     $img1_name = $image1['name'];
     $img2_name = $image2['name'];
     $img3_name = $image3['name'];
     
     $img1_tmp = $image1['tmp_name'];
     $img2_tmp = $image2['tmp_name'];
     $img3_tmp = $image3['tmp_name'];
     
     $img1_dest = "../../images/products/$img1_name";
      $img2_dest = "../../images/products/$img2_name";
     $img3_dest = "../../images/products/$img3_name";
     

    $query = "INSERT INTO `product`( `CATEGORY`, `SUBCATEGORY`, `BRAND`, `NAME`, `PRICE`, `PRICEBEFOREDISCOUNT`, `SHIPPINGPRICE`, `DESCRIPTION`, `SIZE`, `COLOR`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `AVAILABLITY`, `PAYMENTOP`)
        	VALUES ('$category' , '$subcategory' , '$brandname' , '$productname' , ' $price' , '$pricebeforediscount' , '$shippingcharge' , '$description' ,' $sizeselect' , '$colorselect' , '$img1_name' , '$img2_name' , '$img3_name' , '$stockavailable' , '$paymentoption') ";
        	
    $run = mysqli_query($con , $query );
   if($run){
                move_uploaded_file($img1_tmp , $img1_dest);
                move_uploaded_file($img2_tmp , $img2_dest);
                move_uploaded_file($img3_tmp , $img3_dest);
                echo "<script> alert('data inserted') </script>";
            }else{
                echo "<script> alert('data not inserted') </script>";
            } 
    
     
     
     
    //  if(move_uploaded_file($_FILES['p_image']['tmp_name'],$image_path)){
    //   echo '<script>alert("image save")</script>';
    
    // }else{
    //   echo '<script>alert("image not save")</script>';
    
    // }

  }

?>

<?php
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM subcategory WHERE categoryid=$id");
?>
<option value="">Select Subcategory</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
  <?php
 }
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
        
                                                            <div class="form-group row">
                                                          
                                                                 <div class="col-sm-4">
                                                                     <label class="">Select Category</label>
                                                                    <div class="input-group">
                                                                    <select name="category" onChange="getSubcat(this.value);"  required class="form-control">
                                                                        <option selected disabled value="">---- Select category ----</option>
                                                                        <?php
                                                                            $query = "SELECT * FROM category order by ID asc";
                                                                            $run = mysqli_query($con , $query);
                                                                            while($row = mysqli_fetch_array($run)){
                                                                            echo "<option value=".$row['ID'].">".$row['CNAME']."</option>>";
                                                                             }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                 <div class="col-sm-4">
                                                                     <label class="">Select Subcategory</label>
                                                                    <div class="input-group">
                                                                    <select name="subcategory" id="subcategory"  class="form-control">
                                                                       
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                     <label class="">Stock Availablity</label>
                                                                    <div class="input-group">
                                                                    <select name="stock-available" class="form-control">
                                                                        <option value="">---- Stock Availablity ----</option>
                                                                        <option value="stock">Stock</option>
                                                                        <option value="low-of-stock">Low Stock</option>
                                                                        <option value="out-of-stock">Out Of Stock</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                 <div class="col-sm-4">
                                                                    <label class="">Brand Name</label>
                                                                    <input type="text" class="form-control" name="brandname">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                 <div class="col-sm-4">
                                                                    <label class="">Product Name</label>
                                                                    <input type="text" class="form-control" name="productname">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                
                                                                <div class="col-sm-4">
                                                                     <label class="">Payment Option Available</label>
                                                                    <div class="input-group">
                                                                    <select name="paymentoption" class="form-control">
                                                                        <option value="">---- Payment Option Available ----</option>
                                                                        <option value="cod-available">COD Available</option>
                                                                        <option value="cod-not-available">COD Not Available</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                  <div class="col-sm-4">
                                                                    <label class="">Price </label>
                                                                    <input type="number" class="form-control" name="price">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                 <div class="col-sm-4">
                                                                    <label class="">Price Before Discount</label>
                                                                    <input type="number" class="form-control" name="price-before-discount">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                 <div class="col-sm-4">
                                                                    <label class="">Shipping Charge</label>
                                                                    <input type="number" class="form-control" name="shippingcharge">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row justify-content-center">
                                                                <!-- <div class="col-sm-4">-->
                                                                <!--    <label class="">Color</label>-->
                                                                <!--    <input type="text" class="form-control" name="websiteseo">-->
                                                                <!--    <span class="messages"></span>-->
                                                                <!--</div>-->
                                                                 <div class="col-sm-4">
                                                                     <lable>Select Color</lable>
                                                                    <select name="colorselect" class="form-control">
                                                                        <option value="">---- Select Color ----</option>
                                                                        <option value="red">Red</option>
                                                                        <option value="blue">blue</option>
                                                                    </select>
                                                                </div>
                                                                 <div class="col-sm-4">
                                                                     <lable>Select Size</lable>
                                                                    <select name="sizeselect" class="form-control">
                                                                        <option value="">---- Select Size ----</option>
                                                                        <option value="s">S</option>
                                                                        <option value="m">M</option>
                                                                        <option value="lg">LG</option>
                                                                        <option value="xl">XL</option>
                                                                        <option value="xxl">XXL</option>
                                                                    </select>
                                                                </div>
                                                                <!--<div class="col-sm-4">-->
                                                                <!--    <label class="">Size</label>-->
                                                                <!--    <input type="text" class="form-control" name="websiteseo">-->
                                                                <!--    <span class="messages"></span>-->
                                                                <!--</div>-->
                                                            </div>
                                                            <div class="form-group row justify-content-center">
                                                                <div class="col-sm-8">
                                                                    <label class="">Description</label>
                                                                    <textarea style="height: 100px !important" name="description" class="form-control"></textarea>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <label class="">Image 1</label>
                                                                    <input type="file" class="form-control" name="image1">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label class="">Image 2</label>
                                                                    <input type="file" class="form-control" name="image2">
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="">Image 3</label>
                                                                    <input type="file" class="form-control" name="image3"> 
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            
                                                          
                                                            <div class="form-group row text-center">
                                                                <div class="col-sm-10">
                                                                    <button type="submit" name="addproduct" class="btn btn-primary m-b-0">Submit</button>
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

<script>
    
    function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data , status){
		$("#subcategory").html(data);
		
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