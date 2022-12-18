
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
<title>SERVICES -  Recharges365</title>
<meta name="keywords" content="@@keywords" />
<meta name="description" content="@@description" />

<!-- Stylesheets -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
<link rel="stylesheet" href="css/style.min.css">

</head>
<body>
    
     <?php include("header.php"); ?>

    <section class="subBanner">
        <div class="subBanner__content">
            <div class="title animated" data-animation="appeared showBar" data-animation-delay="200">
                <h2 class="size36 animated" data-animation="appeared fadeInUp">Services</h2>
            </div>
        </div>

        <div class="subBanner__image">
            <figure>
                <img
                    src="img/services_banner.png" alt="graphics"
                    class="animated" data-animation="appeared show" data-animation-delay="1000"
                >
            </figure>
        </div>
    </section>

    <section class="services">
        <div class="container servicesBlock">
            <div class="servicesBlock__title">
                <h2 class="size36">Services We Offer</h2>
            </div>
            <div class="row">
                <?php
                    $res = $con->query("SELECT * FROM servicepage order by ASC");
                    if($res->num_rows > 0){
                        while($row = $res->fetch_assoc()){
                            ?>
                <div class="col-sm-6 col-md-4">
                    <div class="services__card animated" data-toggle="modal" data-target="#services_recharge" data-animation="appeared fadeInUp" data-animation-delay="100">
                        <figure class="services__image">
                            <img src="img/<?php echo $row['IMAGE'] ?>" alt="">
                        </figure>
                        <h3 class="services__title"><?php echo $row['NAME'] ?></h3>
                    </div>
                </div>
                <?php
                  }
                }
                    
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="services__card animated" data-toggle="modal" data-target="#services_moneytransfer" data-animation="appeared fadeInUp" data-animation-delay="100">
                        <figure class="services__image">
                            <img src="img/money-transfer.png" alt="">
                        </figure>
                        <h3 class="services__title">Money Transfer</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services__card animated" data-toggle="modal" data-target="#services_aeps" data-animation="appeared fadeInUp" data-animation-delay="100">
                        <figure class="services__image">
                            <img src="img/aeps.png" alt="">
                        </figure>
                        <h3 class="services__title">AEPS</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services__card animated" data-toggle="modal" data-target="#services_bbps" data-animation="appeared fadeInUp" data-animation-delay="100">
                        <figure class="services__image">
                            <img src="img/bbps.png" alt="">
                        </figure>
                        <h3 class="services__title">BBPS</h3>
                    </div>
                </div>
                 <div class="col-sm-6 col-md-4">
                    <figure class="services__image">
                        <img class="animated" data-animation="appeared fadeInUp" data-animation-delay="100" src="img/aadhaar.png" alt="">
                    </figure>
                    <h3 class="services__title">Aadhaar Banking</h3>
                </div> 
                
                <div class="col-sm-6 col-md-4">
                    <div class="services__card animated" data-toggle="modal" data-target="#services_travelbooking" data-animation="appeared fadeInUp" data-animation-delay="100">
                        <figure class="services__image">
                            <img src="img/travel.png" alt="">
                        </figure>
                        <h3 class="services__title">Travel Booking (Contact With HASSSN TRAVELS)</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <?php include("footer.php"); ?>


    <!-- modal services recharge -->
<div class="modal fade" id="services_recharge" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close custom-close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body modal-body-large">
				<h4 class="size24">Get An Affordable Mobile Recharge Services</h4>
				
				<p>In recent years, telecommunication has developed at a quick pace. Smartphones have added to the most extreme right now. With the alternative of prepaid membership, the use of phones in India has crossed all desires. As a Best ​Online Mobile Recharge Service provider, we can guarantee you the procedure of online mobile recharge is basic and made sure about as the recharge is done via a secured gateway.</p>

				<p>This online mobile recharge can be modified to suit your requirements. Do you need an individual bundle only for talk time? What about utilizing simple messages or internet usage? Do you make a lot of international? Do you make a lot of global calls? Get appropriate online recharge ideas for smartphones, by taking our service you will get the best ideas according to your needs.</p>

				<p>We provide 24x7 assistance with all the major facilities and the offers you are looking for. Mobiles being an essential piece of our life, should be beaten up with the cash to utilize the intriguing highlights gave by the cell administration administrators. To profit from these various administrations, you can get in touch with us.</p>
			</div>
		</div>
	</div>
</div>
<!-- end services recharge -->

<!-- modal services moneytranfer -->
<div class="modal fade" id="services_moneytransfer" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close custom-close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body modal-body-large">
				<h4 class="size24">Domestic Money Transfer is Now Much More Convenient And Reliable.</h4>
				
				<p>
					Bringing in an online cash move is presently made simple, particularly with the different choices
					that are accessible. Nonetheless, so as to guarantee that your assets stay safe, we as a Best
					domestic money transfer Service provider guarantee and keep up your security while
					making your payment move in a secure way. The present-day cash handover services have
					changed the customary strategies for the handover of cash. Today, things have speeded up to
					an exceptionally enormous degree. The present-day online transfer has made things faster and
					simpler. You can send and receive funds online then you can trust our service, having into
					this over the years we provide users to take benefits from our services and can transfer funds in
					a secure manner.
				</p>

				<p>
					With the vast number of methods involved in the online transfer mode, one method you can take
					is an online money transfer from the debit card​ when you choose an option from our portal
					you will be asked certain details that need to be filled to proceed your payment, after doing so
					you will be directed to do the confirmation and your payment is done in a secured manner. It is
					conceivable to send and get cash through an immediate bank transfer​ inside a couple of
					moments, anyplace around the world. It is an imaging technique for settlement, which
					empowers the client to send cash quickly.
				</p>

				<p>
					Like that of money transfer services business, it helps people to make their hassle-free
					booking into a simple form Online money transfers offer comfort since they interface individuals
					whose land areas would have in any case made it inconceivable for them to trade cash. It is a
					procedure that likewise offers time comfort because that relying upon the stage you select for
					the exchange, you can have the cash with you in almost no time.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end services moneytranfer -->

<!-- modal services aeps -->
<div class="modal fade" id="services_aeps" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close custom-close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body modal-body-large">
				<h4 class="size24">AEPS: Simple &amp; Secure Aadhar Enabled Payment Method.</h4>
				
				<p>
					Aadhar enabled the payment system is abbreviated as AEPS. It is a new form of payment
					method where a bank customer by making use of his aadhar card to utilize banking activities. A
					bank customer who has aadhar card-linked bank account can manage all basic digital banking
					transactions such as domestic money remittances, cash withdrawal, and balance inquiry.
				</p>

				<p>
					The conception of the AEPS service has been approved by the RBI (Reserve Bank of India).
					This service has been launched under NPCI (National Payment Corporation of India).
				</p>

				<p>
					You can financially grow your business by making use of the Best AEPS Service Provider
					Company. Weare the most dependable AEPS service provider that facilitates its customers in
					running their business effectively.
				</p>

				<p>
					The retailers can easily set up their AEPS business with us to earn the highest commission. We
					have engaged a highly skilled and experienced professional team that has developed an
					advanced and the Best AEPS Portal. Our secure AEPS portal includes unique options and
					services. You will be able to toutilize all the latest services with our AEPS portal to receive the best commission.
				</p>

				<p>
					The customers and retailers do not need to stand in long queues at banks and search for ATMs.
					We offer all basic AEPS services where the customers can do banking transactions at our
					partnered retail stores.
				</p>

				<p>
					This is done through their fingerprint authentication and aadhar number. The process of Retail
					money transfer has been made easier for our customers to transfer money instantly to any
					bank account.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end services aeps -->

<!-- modal services BBPS -->
<div class="modal fade" id="services_bbps" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close custom-close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body modal-body-large">
				<p>
					Struggling to pay your bills online? If yes, then we bring you the best-in-class services of Bharat Bill Payment System. With this service from webspidy, our customers will be able to pay all their bills including electricity, gas, etc on the single window itself.
				</p>

				<p>
					If you had been facing problems in making your bill payment online, then this will not be the
					case anymore as it can be said that the webspidy’s service of BBPS (Bharat Bill Payment System) is
					one of the most user-friendly and easiest portals to pay the bill. The best part about this billing
					system is that it allows all the bank non-bank and online payment available on a single
					platform.
				</p>

				<h5 class="margin-bottom-5">Functions of Bharat Bill Payment Service-</h5>
				<ul class="bulletList">
					<li>Helps in setting business standards</li>
					<li>Allows proper marketing and brand positioning</li>
					<li>Best and end-to-end complaint management system</li>
					<li>Provides the best dispute management system</li>
					<li>Fraud Risk and MIS management</li>
					<li>Settlement for all the transactions</li>
					<li>The payment platform is completely secured</li>
				</ul>
				<h5 class="margin-bottom-5">Functions of BBPS explained in detail-</h5>
				<ul class="bulletList">
					<li>All the OFF-US transaction settlement and clearing activities will be taken care of by the BBPS.</li>
					<li>It allows people to make all the payments on a single platform under a single brand image.</li>
				</ul>
				<p>
					If you are looking for a platform at which you can pay all the bills then start using BBPS (Bharat
					Bill Payment System) service of webspidy for best and secured user experience. Get in touch with
					our experts today to know more.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end services BBPS -->

<!-- modal services BBPS -->
<div class="modal fade" id="services_travelbooking" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close custom-close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body modal-body-large">
				<h4 class="size24">Make Your Online Travel Booking Easy</h4>
				<p>
					The Internet has made the flight booking faster and simpler. There are various favorable
					circumstances to utilizing on the web flight booking services. Utilizing the online services, you
					can without much of a stretch get the best arrangements with modest flight tickets.
				</p>

				<p>
					By taking the assistance of an online travel booking Service provider you can profit from a
					great deal of numerous focal points. With regards to booking tickets on the web, you can do it
					from anyplace and whenever.
				</p>

				<p>
					The online clients can book their tickets from the solaces of their home or even office utilizing
					their PC or versatile in no time. Therefore, web-based booking techniques offer extraordinary
					comfort for web clients without the obstacles of long queues and extra commission charges.
				</p>

				<h5 class="margin-bottom-5">We are one of the leading b2b travel booking portals that provide customers with all benefits-</h5>
				<ul class="bulletList">
					<li>Hotel and Flight booking</li>
					<li>Real-time online booking and availability:</li>
					<li>Automated booking confirmation</li>
					<li>Proper management system</li>
					<li>Multiple languages and currency support</li>
					<li>Control access to agents by different levels</li>
					<li>24/7 support system</li>
				</ul>

				<p>
					We are one fully online booking portal with all the benefits so that you do not have to visit
					anywhere and make your booking in minutes.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end services BBPS -->

    
    
    <!-- Javascripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/validate.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> -->
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/app.min.js"></script>
    
</body>
</html>