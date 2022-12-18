<?php
    include("dashboard/includes/config.php");
    $res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
    $row = $res->fetch_assoc();
?>    
    <header class="headerMain @@class" id="headerMain">
    <div class="headerMain__topBar">
        <div class="info">
            <a href="mailto:<?php echo $row['SEMAIL']; ?>" class="item">
                <i class="fas fa-envelope"></i>
                <span><?php echo $row['SEMAIL']; ?></span>
            </a>
            <a href="tel:<?php echo $row['SNUMBER']; ?>" class="item">
                <i class="fas fa-phone-alt"></i>
                <span><?php echo $row['SNUMBER']; ?></span>
            </a>
        </div>
        <div class="authButtons">
            <a href="login.php">Log In</a>
            
        </div>
    </div>
    
    <div class="headerMain__grid">
        <div class="headerMain__logo">
            <a href="index.php"><img src="images/<?php echo $row['LOGO2']; ?>" alt="Company Logo" style="max-height: 69px;"></a>
        </div>

        <div class="headerMain__menu">
            <div class="menuHandle"><img src="img/svg/menu.svg" width="24" alt="menu"></div>

            <nav class="navigation" id="toggleMenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="retailer.php">Retailer</a></li>
                    <li><a href="distributor.php">Distributor</a></li>
                    <li><a href="merchant.php">Merchant</a></li>
                    <li>
                        <a href="#" class="dropdown-handle">
                            <span>Api</span>
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <ul class="custom-dropdown">
                            <li><a href="mobile-recharge-api-integration.php">Mobile Recharge API</a></li>
                            <li><a href="lapu-recharge-software.php">Mobile Recharge Software</a></li>
                        </ul>
                    </li>
                    <li><a href="partner.php">Partner With Us</a></li>
                    <li><a href="about-us.php">About us</a></li>
                    <li><a href="contact-us.php">Contact us</a></li>
                    <li class="show-mobile"><a href="login.php">Log In</a></li>
                    <li class="show-mobile"><a href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>