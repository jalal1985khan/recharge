<?php
    $res = $con->query("SELECT * FROM `tawkToChatId` WHERE ID = 1");
    $row2 = $res->fetch_assoc();
?> 
<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API = Tawk_API || {},
		Tawk_LoadStart = new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/<?php echo $row2['CHATID']; ?>/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
	})();
</script>
<!--End of Tawk.to Script-->

<section class="partner">
	<div class="container-fluid">
		<div class="partner__title">
			<h2 class="heading-seconary size36">Our Authorized Partner</h2>
		</div>

		<div class="partner__list" id="partnerSlider">
			<div class="item"><img src="img/partners/1.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/2.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/3.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/4.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/5.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/6.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/7.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/8.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/9.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/10.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/11.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/12.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/13.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/14.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/15.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/16.jpg" alt="partner logo"></div>
			<div class="item"><img src="img/partners/17.jpg" alt="partner logo"></div>
		</div>
	</div>
</section>


        <footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 col-lg-3">
                <div class="footer__logo">
                     <a href="index.php"><img src="images/<?php echo $row['LOGO2']; ?>" alt="Company Logo"></a>
                </div>
                <div class="footer__playstore">
                    <a href="https://play.google.com/store/apps/details?id=com.myrechargesalways" target="_blank">
                        <img src="img/google-play.png" alt="google play">
                    </a>
                </div>
                <div class="footer__playstore">
                    <a href="https://play.google.com/store/apps/details?id=com.myrechargesalways" target="_blank">
                        <img src="img/app-store-icon2.png" alt="google play">
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer__nav">
                            <h3 class="footer__nav--title">Company</h3>
                            <ul class="footer__nav--list">
                                <li><a href="services.php">Services</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="career.php">Careers</a></li>
                                <li><a href="contact-us.php">Contact us</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer__nav">
                            <!--<h3 class="footer__nav--title">BUSINESS PARTNERS</h3>-->
                            <!--<div class="nav-large">-->
                            <!--    <ul class="footer__nav--list">-->
                            <!--        <li><a href="distributor.php">Distributor</a></li>-->
                            <!--        <li><a href="retailer.php">Retailer</a></li>-->
                            <!--        <li><a href="merchant.php">Merchant</a></li>-->
                            <!--    </ul>-->
                            <!--    <ul class="footer__nav--list">-->
                            <!--        <li><a href="api.php">API</a></li>-->
                            <!--        <li><a href="partner.php">Partner with us</a></li>-->
                            <!--         <li><a href="javascript:;">Sitemap</a></li>-->
                            <!--        <li><a href="javascript:;">Plans For Agent Partner</a></li> -->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer__contactInfo">
                            <h4 class="size24 margin-bottom-10">24x7 Helpdesk</h4>
                            <p>
                                <a href="mailto:<?php echo $row['SEMAIL']; ?>"><?php echo $row['SEMAIL']; ?></a>
                                <a href="tel:<?php echo $row['SNUMBER']; ?>"><?php echo $row['SNUMBER']; ?></a>
                            </p>
                        </div>

                        <div class="footer__social">
                            <a href="<?php echo $row['FACEBOOK']; ?>" target="_blank" class="footer__social--link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo $row['TWITTER']; ?>" target="_blank" class="footer__social--link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?php echo $row['LINKEDIN']; ?>" target="_blank" class="footer__social--link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="<?php echo $row['YOUTUBE']; ?>" target="_blank" class="footer__social--link">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="login-footer">
                <div class="copyright">&copy; Copyright 2021 <?php echo $row['WEBSITENAME']; ?>.  All right Reserved.</div>
                <div class="login-footer__link">
                    <a href="privacy-policy.php" class="login-footer__link--item">Privacy Policy</a>
                    <a href="disclaimer.php" class="login-footer__link--item">Disclaimer</a>
                    <a href="refund-policy.php" class="login-footer__link--item">Refund Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer
<script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
<script language="JavaScript" type="text/javascript">
  TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_md_167x42.png", "POSDV", "none");
</script>