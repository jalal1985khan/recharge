
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Page Icons -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Page Title -->
<title>PARTNER WITH US -  Hassan Travels</title>
<meta name="keywords" content="@@keywords" />
<meta name="description" content="@@description" />

<!-- Stylesheets -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="css/toastr.min.css">

</head>
<body>
    
<?php include("header.php"); ?> 


    <section class="subBanner partnerBanner">
        <div class="subBanner__content">
            <div class="title animated" data-animation="appeared showBar" data-animation-delay="100">
                <h2 class="size36 animated" data-animation="appeared fadeInUp">Partner With Us</h2>
            </div>
        </div>
        <div class="subBanner__image">
            <figure>
                <img
                    src="img/partner_banner.png" alt="graphics"
                    class="animated" data-animation="appeared show" data-animation-delay="1000"
                >
            </figure>
        </div>
    </section>

    <section class="partnerInfo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="partnerInfo__title">
                        <h2 class="heading-primary size46 animated" data-animation="appeared fadeInUp" data-animation-delay="100">Become our Authorized Partner</h2>
                        <p class="animated" data-animation="appeared fadeInUp" data-animation-delay="200"><?php echo $row['WEBSITENAME']; ?> India Limited invites individuals and business owners with an enterpreneurial spirit to be part of our growing partner network across India. Become our brand ambassadors to promote our solution in your regain earn up to one lakh rupees per month and create a positive impact on the lives of thousands of merchants</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="partnerForm">
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex partnerForm__content">
                    <p>To learn more, kindly fill in the form & our team will contact you soon.</p>
                </div>
                <div class="col-md-7 d-flex">
                    <div class="formContainer">
                        <form action="ajax.php" method="post" class="formBlock custom-form ajaxForm" id="parternForm" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="partner" />
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group field">
                                        <input type="text" class="form-control input" placeholder="Name" name="pname" id="pname">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group field">
                                        <input type="text" class="form-control input" placeholder="Business Name" name="business_name" id="business_name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group field">
                                        <input type="text" class="form-control input" placeholder="Email" name="pemail" id="pemail">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group field">
                                        <input type="text" class="form-control input" placeholder="Mobile Number" name="pmobile" id="pmobile">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group field">
                                        <input type="text" class="form-control input" placeholder="Interested In" name="interested_in" id="interested_in">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group field">
                                        <textarea class="form-control input" placeholder="Comments" rows="3" name="pmessage" id="pmessage"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                    <div class="btnBlock">
                                        <button class="btn btn-primary no-redius btn-full" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php include("footer.php"); ?> 

    
    
    <!-- Javascripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/validate.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> -->
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/app.min.js"></script>
    
</body>
</html>