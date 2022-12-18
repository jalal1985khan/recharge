
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
<title>FAQ - Recharges365</title>
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
            <div class="title animated" data-animation="appeared showBar" data-animation-delay="100">
                <h2 class="size36 animated" data-animation="appeared fadeInUp">Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="subBanner__image">
            <figure>
                <img
                    src="img/faq-banner.png" alt="graphics"
                    class="animated" data-animation="appeared show" data-animation-delay="1000" 
                >
            </figure>
        </div>
    </section>

    <section class="faqContent section">
        <div class="container">
            <h3 class="faqContent__mainTitle ">Most common questions</h3>
            <div class="faqBlock">
                <h3 class="faqContent__accorTitle ">What is <?php echo $row['WEBSITENAME']; ?> India Limited?</h3>
                <p class="faqContent__paragraph "><?php echo $row['WEBSITENAME']; ?> India Limited is a simple, easy to use mobile SMS or smart phone application that lets you connect with your money at the push of a button! Using the innovative m-Wallet from <?php echo $row['WEBSITENAME']; ?> India Limited , you can recharge your mobile; pay utility bills; top-up your DTH account; shop for any goods or services; buy travel related services such as - rail / air / bus / movie tickets. and even handle banking transactions… all from the comfort of your mobile phone.</p>

                <h3 class="faqContent__accorTitle">What is the price and how do I become a <?php echo $row['WEBSITENAME']; ?> India Limited retailer or Distributor?</h3>
                <p class="faqContent__paragraph">We have various plans to become a Retailer or Distributor. Please <a href="contact-us.html">click here</a> to enquire now.</p>

                <h3 class="faqContent__accorTitle">What are the benefits of <?php echo $row['WEBSITENAME']; ?> India Limited wallet?</h3>
                <p class="faqContent__paragraph">
                    Anyone can become a Recharges365 Retailer by providing a Proof of Identity (POI) and Proof of address (POA). <br><br>
                    Retailer can transfer money to any bank account in India and credit will be received in the bank account instantly through IMPS. Retailer can also use NEFT to transfer funds <br><br>
                    Its convenient. Retailer can transfer upto Rs.50,000/- per sender per month to any bank account across India.
                </p>

                <h3 class="faqContent__accorTitle">What do I get on becoming an authorized <?php echo $row['WEBSITENAME']; ?> India Limited Retailer?</h3>
                <p class="faqContent__paragraph">
                    On becoming an authorized <?php echo $row['WEBSITENAME']; ?> India Limited Retailer, you will receive the following benefits. <br><br>
                    You will receive a downloadable link of <?php echo $row['WEBSITENAME']; ?> India Limited App. <br><br>
                    Based on the amount of your business volume, you will also receive exclusive <?php echo $row['WEBSITENAME']; ?> India Limited marketing material including authorized Retailer certificate, posters, banners, booklets, glow sign boards etc.<br><br>
                    You will earn commission on every transaction.
                </p>
                
                <h3 class="faqContent__accorTitle">What if my transaction done through <?php echo $row['WEBSITENAME']; ?> India Limited wallet is not successful, is my money refunded?</h3>
                <p class="faqContent__paragraph">
                    Yes, your money will be instantly refunded back to your <?php echo $row['WEBSITENAME']; ?> India Limited wallet for any transactions that fail. <br><br>
                    Since we use IMPS service to transfer money to banks in India, Success and failures are instant, hence your money is transferred in real time and is refunded instantly upon failure.
                </p>
                
                <h3 class="faqContent__accorTitle">Why should I open a <?php echo $row['WEBSITENAME']; ?> India Limited wallet when I can use my debit card or credit card?</h3>
                <p class="faqContent__paragraph">Your credit cards and debit cards are prone to risks and exposure in this case is of the full balance outstanding in your bank account. This risk is minimised by first loading money into your <?php echo $row['WEBSITENAME']; ?> India Limited wallet and then using it to transact.</p>
            </div>

            <h3 class="faqContent__mainTitle ">Recharge & Bill Pay</h3>
            <div class="faqBlock">
                <h3 class="faqContent__accorTitle">I am unable to recharge ! Failing repeatedly</h3>
                <p class="faqContent__paragraph">Recharge failure could be due to an issue at Operator's end. We request you to retry after some time. If your number is ported, then select the correct operator and circle manually.</p>

                <h3 class="faqContent__accorTitle">Recharge made to wrong number / account</h3>
                <p class="faqContent__paragraph">We are sorry to hear this but the recharge request has been successfully processed by the Operator and we do not have any control once the request is processed. We request you to contact the Operator for the same. To avoid these instances we request you to cross check the details before completing any transaction.</p>

                <h3 class="faqContent__accorTitle">Why I am unable to pay the Bill?</h3>
                <p class="faqContent__paragraph">
                    a) Please check, if you have entered the details correctly. <br><br>
                    b) Payment failure could be due to an issue at operator's end. We suggest you to retry after some time.
                </p>
            </div>
            
            
            <h3 class="faqContent__mainTitle ">Banking</h3>
            <div class="faqBlock">
                <h3 class="faqContent__accorTitle">How Can I Add Money to Wallet?</h3>
                <p class="faqContent__paragraph">
                    1) Click on 'Add Money' and enter the amount that you wish to add. <br><br>
                    2) Select the payment option (Debit card/Credit card/ Net banking/UPI) through which you want to transfer money to your <?php echo $row['WEBSITENAME']; ?> India Limited wallet. <br><br>
                    3) Enter your bank or card details such as Card number, expiry date and CVV to proceed with the transaction.<br><br>
                    4) Tap on the ‘Pay Nowʼ button to complete the transaction. Once your transaction is successful, you will receive an order summary with a notification stating that the desired amount has been added to your <?php echo $row['WEBSITENAME']; ?> India Limited wallet account.
                </p>

                <h3 class="faqContent__accorTitle">Unable to Add Money</h3>
                <p class="faqContent__paragraph">
                    <em>This could happen due to many reasons as listed below:</em> <br>
                    - Your add money limit has been reached. <br><br>
                    - Connectivity issue with your Internet service provider.<br><br>
                    - Delay in receiving authorization from the Issuing Bank.<br><br>
                    - Insufficient funds in your bank/card account or has not been activated for online payments.<br><br>
                    - Connectivity issue between Bank and the Payment Gateway.
                </p>

                <h3 class="faqContent__accorTitle">How to transfer money from the wallet to a bank account?</h3>
                <p class="faqContent__paragraph">
                    Wallet to bank transfer services are available for KYC verified Users only. Log in to your <?php echo $row['WEBSITENAME']; ?> India Limited wallet account and follow the steps mentioned here: <br>
                    1 Tap on the "Transfer Money" option on the Homescreen and then click on "Wallet to Bank" option<br><br>
                    2 Enter the bank account details or choose from the list of previously used bank accounts.<br><br>
                    3 Verify the details and enter the amount that you would like to transfer and tap on "Continue".<br><br>
                    4 On successful verification of the OTP for the said transaction you will receive an order summary with a notification stating that the desired amount has been transferred from your <?php echo $row['WEBSITENAME']; ?> India Limited Account.
                </p>
                <h3 class="faqContent__accorTitle">I am unable to send money to bank?</h3>
                <p class="faqContent__paragraph">
                    Wallet to Bank transfer services are available only for KYC verifed Users. If you are already a KYC verifed User and are unable to use the wallet to bank transfer services, please share the details of the error and we shall get this checked for you.
                </p>
                <!-- <h3 class="faqContent__accorTitle">Any charges for wallet to bank transfer?</h3>
                <p class="faqContent__paragraph">
                    There is a processing fee of 3.18% + GST for Users opting for IMPS service. The Processing Fee is calculated and are visible once you enter the amount you wish to transfer.
                </p> -->
                <h3 class="faqContent__accorTitle">How to transfer money to another <?php echo $row['WEBSITENAME']; ?> India Limited wallet?</h3>
                <p class="faqContent__paragraph">
                    <em>Refer the below mentioned steps to transfer:</em> <br>
                    - Please Tap on the “Transfer Money” option on the Homescreen and select the “Wallet to Wallet” option to proceed <br><br>
                    - Enter the mobile number to which you want to transfer the money from your wallet or alternatively select the number from your Contact List. <br><br>
                    - Enter the amount from the balance available in your <?php echo $row['WEBSITENAME']; ?> India Limited Wallet Account that you would like to and click the "Transfer Now" button to complete the transfer.
                </p>
                <h3 class="faqContent__accorTitle">I am unable to send money to wallet?</h3>
                <p class="faqContent__paragraph">
                    Wallet to Wallet transfer services are available only for KYC verifed Users. If you are already a KYC verifed User and are unable to use the wallet to wallet transfer services, please share the details of the error and we shall get this checked for you.
                </p>
                <h3 class="faqContent__accorTitle">Any charges for wallet to wallet transfer?</h3>
                <p class="faqContent__paragraph">
                    There are NO charges levied on Wallet to Wallet transfer service.
                </p>
                <h3 class="faqContent__accorTitle">What is a virtual card?</h3>
                <p class="faqContent__paragraph">
                    <?php echo $row['WEBSITENAME']; ?> India Limited Virtual Card is a digital card loaded with your Wallet balance that can be used to pay online across all merchants accepting Visa/Master Card.
                </p>
            </div>

            <h3 class="faqContent__mainTitle ">Travel</h3>
            <div class="faqBlock">
                <h3 class="faqContent__accorTitle">How to book Bus ticket ?</h3>
                <p class="faqContent__paragraph">
                    a. Click on the "Bus" icon on the Homescreen. <br><br>
                    b. Enter the travel details and click on 'Search Buses'. <br><br>
                    c. Select the seats after choosing the Bus operator and click on 'Enter Passenger details' to proceed.<br><br>
                    d. Fill up the traveller's information and click on 'Review and Pay'.<br><br>
                    e. Click on 'Pay' to confirm your booking.
                </p>
                
                <h3 class="faqContent__accorTitle">How to cancel the Bus ticket?</h3>
                <p class="faqContent__paragraph">
                    <em>Using App:</em><br>
                    A. Select the 'Bus' option available on the Homescreen and click on "Bookings" available on the top right corner of the screen. <br><br>
                    B. Choose the transaction you wish to cancel from the "Manage Tickets" Section.<br><br>
                    C. Tap on "Cancel" to confirm this action.<br><br>
                    D. Here, you can either cancel the booking or choose to opt for partial cancellation.<br><br>
                    <em>Using Web:</em> <br>
                    A .Select the 'Bus Tickets' option available on the Homepage and click on "Manage all your Bookings".<br><br>
                    B. Choose the transaction you wish to cancel to confirm this action.<br><br>
                    C. Here, you can either cancel the booking or choose to opt for partial cancellation<br><br>
                    Please Note: Refund(s)/Cancellation policy (if any) are subject to Terms and Conditions.
                </p>
                
                <h3 class="faqContent__accorTitle">How to pay via <?php echo $row['WEBSITENAME']; ?> India Limited at IRCTC?</h3>
                <p class="faqContent__paragraph">
                    Please select <?php echo $row['WEBSITENAME']; ?> India Limited as a payment option under the Wallet category on the payment page while booking on the IRCTC APP/WEB platform.
                </p>
                
                <h3 class="faqContent__accorTitle">Any charges for booking with IRCTC ?</h3>
                <p class="faqContent__paragraph">1.8% + applicable taxes per transaction is charged (payment gateway charges) on IRCTC Bookings.</p>
            </div>
            
            <h3 class="faqContent__mainTitle ">UPI</h3>
            <div class="faqBlock m0">
                <h3 class="faqContent__accorTitle">What is UPI?</h3>
                <p class="faqContent__paragraph">Unified Payments Interface (UPI) is an instant payment system developed by NPCI, an RBI regulated entity which allows you to instantly transfer money between any two parties bank accounts.</p>
                
                <h3 class="faqContent__accorTitle">What is UPI PIN?</h3>
                <p class="faqContent__paragraph">MPIN or UPI PIN is 4 digits or 6 digits pin which is required every time you make payment with UPI. MPIN will be unique to your bank account, if already set for any particular bank account, you can use your old MPIN.</p>
                
                <h3 class="faqContent__accorTitle">What is VPA or UPI ID?</h3>
                <p class="faqContent__paragraph">VPA (Virtual payment address) is unique identity by using which you will be allowed to make transactions directly from your bank account or receive money in your bank accounts.</p>
                
                <h3 class="faqContent__accorTitle">Unable to get bank account details</h3>
                <p class="faqContent__paragraph">
                    A. Make sure selected phone number is linked with your bank account. <br><br>
                    B. Make sure you have balance in phone as SMS will be sent for verification.
                </p>
                
                <h3 class="faqContent__accorTitle">Unable to check bank balance</h3>
                <p class="faqContent__paragraph">After creating VPA, go to my wallet-> tap on bank account-> tap on “Check account balance”. Enter your UPI PIN to get your bank balance.</p>
                
                <h3 class="faqContent__accorTitle">What if I Forget MPIN?</h3>
                <p class="faqContent__paragraph">If you forget MPIN, you can always reset pin. Resetting of PIN can be done by entering last 6 digits of your debit card followed by entering OTP.</p>
                
                <h3 class="faqContent__accorTitle">How can I change MPIN?</h3>
                <p class="faqContent__paragraph">You can change the PIN by entering old PIN followed by new pin you want to set up</p>
                
                <h3 class="faqContent__accorTitle">Issue with Phone Number verification</h3>
                <p class="faqContent__paragraph">
                    A. Please check if you have balance available in your SIM for SMS to be sent to link bank account. <br><br>
                    B. Please ensure if your phone number is linked with selected bank during setup process.
                </p>
                
                <h3 class="faqContent__accorTitle">What if I lose my phone?</h3>
                <p class="faqContent__paragraph">UPI-PIN is required to authorize all transactions which will not be known to any third person and hence they will not be able to use the UPI app. In addition, please contact our customer support to block your account.</p>
                
                <h3 class="faqContent__accorTitle">Amount deducted but transaction not successful</h3>
                <p class="faqContent__paragraph">Sometimes it takes 2 business days from the date of payment to complete the transaction. If after 2 business days you do not get service for payment, please contact out customer service and raise dispute.</p>
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
    <script src="js/functions.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> -->
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/app.min.js"></script>
    
</body>
</html>