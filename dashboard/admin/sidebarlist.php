<?php
     require("../includes/config.php");
    $res = "SELECT * FROM `admin`";
    $run = mysqli_query($con,$res);
    $row = mysqli_fetch_array($run);
 ?>
 <style>
     .pcoded-mtext{
         font-size:16px !important;
     }
     
 </style>
<nav class="pcoded-navbar" pcoded-header-position="relative">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40" src="img/<?php echo $row['IMAGE']?>" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span><?php echo $row['NAME'];?></span>
                                        <span id="more-details">Admin<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
                                            <a href="setting.php"><i class="ti-settings"></i>Settings</a>
                                            <a href="index.php?logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"
                                menu-title-theme="theme5">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="index.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.dash.analytics">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="leads.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.default">Leads</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                   </ul>
                                </li>
                                <!--<ul class="pcoded-item pcoded-left-item">-->
                                <!--    <li class=" ">-->
                                <!--        <a href="recharge.php" data-i18n="nav.sticky-notes.main">-->
                                <!--            <span class="pcoded-micon"><i class="ti-archive"></i></span>-->
                                <!--            <span class="pcoded-mtext">Recharge</span>-->
                                <!--            <span class="pcoded-mcaret"></span>-->
                                <!--        </a>-->
                                <!--    </li>-->
                                <!--</ul>-->
                                <!--<ul class="pcoded-item pcoded-left-item">-->
                                <!--    <li class=" ">-->
                                <!--        <a href="bills.php" data-i18n="nav.sticky-notes.main">-->
                                <!--            <span class="pcoded-micon"><i class="ti-archive"></i></span>-->
                                <!--            <span class="pcoded-mtext">Pay Bills</span>-->
                                <!--            <span class="pcoded-mcaret"></span>-->
                                <!--        </a>-->
                                <!--    </li>-->
                                <!--</ul>-->
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class=" ">
                                        <a href="rechargepayment.php" data-i18n="nav.sticky-notes.main">
                                            <span class="pcoded-micon"><i class="ti-archive"></i></span>
                                            <span class="pcoded-mtext">Recharge & Bill</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                              
                                <!--<li class="pcoded-hasmenu">-->
                                <!--    <a href="javascript:void(0)">-->
                                <!--        <span class="pcoded-micon"><i class="ti-layout"></i></span>-->
                                <!--        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page Layout</span>-->
                                <!--        <span class="pcoded-badge label label-danger">NEW</span>-->
                                <!--        <span class="pcoded-mcaret"></span>-->
                                <!--    </a>-->
                                <!--    <ul class="pcoded-submenu">-->
                                <!--        <li class=" ">-->
                                <!--            <a href="#" data-i18n="nav.page_layout.bottom-menu">-->
                                <!--                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                                <!--                <span class="pcoded-mtext">Home</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="#"-->
                                <!--                data-i18n="nav.page_layout.box-layout">-->
                                <!--                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                                <!--                <span class="pcoded-mtext">About</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="servicepage.php" data-i18n="nav.page_layout.rtl">-->
                                <!--                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                                <!--                <span class="pcoded-mtext">Service</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="#" data-i18n="nav.page_layout.rtl">-->
                                <!--                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                                <!--                <span class="pcoded-mtext">Contact</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                              
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">CMS Manager</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="website-setting.php" data-i18n="nav.page_layout.bottom-menu">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Web setting</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
         
                                        <li class=" ">
                                            <a href="website-color-theme.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">web color theme</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="google-analytics.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Google Analytics</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a href="advertisment-setting.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Advertisment</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="services.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Service Manager</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="operator-manager.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Operator Manager</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="switch-operator.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Switch Operator</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="backup-api.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Backup Api setting</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="amount-whise-operator.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Amount Whise API</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="api-margin-setting.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Api Margin Setting</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="recharge-api.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Recharge Api</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="api-callback-setting.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Api Callback api setting</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="recharge-r-offer.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Recharge r-offer Api</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="qr-api-gateway.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Qr Api Gateway</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="payment-gatway-setting.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Payment Gateway</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="talk-to-chat.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Tawk to Chat ID</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="sms-api.php" data-i18n="nav.page_layout.rtl">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Bulk Sms Api</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <!--<li class=" ">-->
                                        <!--    <a href="menu-rtl.php" data-i18n="nav.page_layout.rtl">-->
                                        <!--        <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                                        <!--        <span class="pcoded-mtext">Database Backup</span>-->
                                        <!--        <span class="pcoded-mcaret"></span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li class=" ">-->
                                        <!--    <a href="ready-form-contact.php" data-i18n="nav.page_layout.rtl">-->
                                        <!--        <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                                        <!--        <span class="pcoded-mtext">Website Maintenance</span>-->
                                        <!--        <span class="pcoded-mcaret"></span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                                        <span class="pcoded-mtext">User Management</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="Resellerwhite.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">White Lable</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="masterdistributer.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Master Distributer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="distributer.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Distributer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="retailer.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Retailer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="usertransfer.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">User Transfer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="alluser.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">All User</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="api_user.php" data-i18n="nav.navigate.navbar-inverse">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Api Users</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                        <span class="pcoded-micon"><i class="ti-archive"></i></span>
                                        <span class="pcoded-mtext">Wallet</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="Fund-Self.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Add RC Fund</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Fund-SelfDMR.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Add DMR Fund</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Fund-SelfSMS.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Add SMS Fund</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="admin-fund.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">RC Fund Transfer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="paymentRequest.php" data-i18n="nav.navigate.navbar-inverse">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Payment Request</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="DMR-Fund.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">DMR Fund Transfer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <!--<li class=" ">-->
                                        <!--    <a href="navbar-elements.php"-->
                                        <!--        data-i18n="nav.navigate.navbar-with-elements">-->
                                        <!--        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                        <!--        <span class="pcoded-mtext">Create Api Partner</span>-->
                                        <!--        <span class="pcoded-mcaret"></span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
                                        <span class="pcoded-mtext">CRM</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="commissionpackage.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Commission Package</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li> 
                                        <li class=" ">
                                            <a href="all_comm_rpt.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">All Commission</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="newsalert.php" data-i18n="nav.navigate.navbar-inverse">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">News Alert</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="carousel.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Slider</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="androidstore.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Androide Store</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bank-details.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Bank Details</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="aboutus.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">About Us</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tollfree.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Toll Free</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <!--<li class=" ">-->
                                        <!--    <a href="navbar-elements.php"-->
                                        <!--        data-i18n="nav.navigate.navbar-with-elements">-->
                                        <!--        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                        <!--        <span class="pcoded-mtext">Login setting</span>-->
                                        <!--        <span class="pcoded-mcaret"></span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li class=" ">-->
                                        <!--    <a href="loginhistory.php"-->
                                        <!--        data-i18n="nav.navigate.navbar-with-elements">-->
                                        <!--        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                        <!--        <span class="pcoded-mtext">Login History</span>-->
                                        <!--        <span class="pcoded-mcaret"></span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>
                                <!--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.support"-->
                                <!--menu-title-theme="theme5">Services</div>-->
                                <!--<li class="pcoded-hasmenu">-->
                                <!--    <a href="javascript:void(0)" data-i18n="nav.navigate.main">-->
                                <!--        <span class="pcoded-micon"><i class="ti-receipt"></i></span>-->
                                <!--        <span class="pcoded-mtext">Mobile & DTH</span>-->
                                <!--        <span class="pcoded-mcaret"></span>-->
                                <!--    </a>-->
                                <!--    <ul class="pcoded-submenu">-->
                                <!--        <li class=" ">-->
                                <!--            <a href="Recharge.php" data-i18n="nav.navigate.navbar">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Recharge Now</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="Recharge-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Recharge History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="Recharge-report.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Recharge Report</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <!--<li class="pcoded-hasmenu">-->
                                <!--    <a href="javascript:void(0)" data-i18n="nav.navigate.main">-->
                                <!--        <span class="pcoded-micon"><i class="ti-receipt"></i></span>-->
                                <!--        <span class="pcoded-mtext">Power Bill</span>-->
                                <!--        <span class="pcoded-mcaret"></span>-->
                                <!--    </a>-->
                                <!--    <ul class="pcoded-submenu">-->
                                <!--        <li class=" ">-->
                                <!--            <a href="power-bill-pay.php" data-i18n="nav.navigate.navbar">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">pay Now</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="power-bill-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Power Bill History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="Mypower-bill-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">My Power Bill History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <!--<li class="pcoded-hasmenu">-->
                                <!--    <a href="javascript:void(0)" data-i18n="nav.navigate.main">-->
                                <!--        <span class="pcoded-micon"><i class="ti-receipt"></i></span>-->
                                <!--        <span class="pcoded-mtext">Money Transfer</span>-->
                                <!--        <span class="pcoded-mcaret"></span>-->
                                <!--    </a>-->
                                <!--    <ul class="pcoded-submenu">-->
                                <!--        <li class=" ">-->
                                <!--            <a href="Recharge-report.php" data-i18n="nav.navigate.navbar">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">DMT</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="money-transfer-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Transfer History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <!--<li class="pcoded-hasmenu">-->
                                <!--    <a href="javascript:void(0)" data-i18n="nav.navigate.main">-->
                                <!--        <span class="pcoded-micon"><i class="ti-receipt"></i></span>-->
                                <!--        <span class="pcoded-mtext">PostPaid Bill</span>-->
                                <!--        <span class="pcoded-mcaret"></span>-->
                                <!--    </a>-->
                                <!--    <ul class="pcoded-submenu">-->
                                <!--        <li class=" ">-->
                                <!--            <a href="postpaid-quick-pay.php" data-i18n="nav.navigate.navbar">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Quick pay</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="postpaid-recharge-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Recharge History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="Mypostpaid-bill-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">My Recharge History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <!--<li class="pcoded-hasmenu">-->
                                <!--    <a href="javascript:void(0)" data-i18n="nav.navigate.main">-->
                                <!--        <span class="pcoded-micon"><i class="ti-receipt"></i></span>-->
                                <!--        <span class="pcoded-mtext">Land Line Bill Payment</span>-->
                                <!--        <span class="pcoded-mcaret"></span>-->
                                <!--    </a>-->
                                <!--    <ul class="pcoded-submenu">-->
                                <!--        <li class=" ">-->
                                <!--            <a href="landline-bill-pay.php" data-i18n="nav.navigate.navbar">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Pay Now</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li class=" ">-->
                                <!--            <a href="landline-history.php"-->
                                <!--                data-i18n="nav.navigate.navbar-with-elements">-->
                                <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                                <!--                <span class="pcoded-mtext">Payment History</span>-->
                                <!--                <span class="pcoded-mcaret"></span>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support"
                                menu-title-theme="theme5">All Reports</div>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                        <span class="pcoded-mtext">Reports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                         <li class=" ">
                                            <a href="website-contact.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Website Contact</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li> 
                                        <li class=" ">
                                            <a href="Recharge-report.php" data-i18n="nav.navigate.navbar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Recharge Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Allrecharge-report.php" data-i18n="nav.navigate.navbar-inverse">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">All Recharge Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="pendingrecharge-rpt.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Pending Recharge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="transaction-rpt.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Transaction Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="op_whise_report.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Opetrator whise Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="recharge_earning.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Recharge Earning Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="fund-transfer-rpt.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Fund Transfer Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="live-recharge.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Live Recharge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="apihitslog.php"
                                                data-i18n="nav.navigate.navbar-with-elements">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">All Api hit's log</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                             </ul>

                            <!-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.pages"-->
                            <!-- menu-title-theme="theme5">E-Commerce Shopping</div>-->
                            <!--<ul class="pcoded-item pcoded-left-item">-->
                            <!-- <li class="pcoded-hasmenu ">-->
                            <!--     <a href="javascript:void(0)" data-i18n="nav.authentication.main">-->
                            <!--         <span class="pcoded-micon"><i class="ti-id-badge"></i></span>-->
                            <!--         <span class="pcoded-mtext">Order Management</span>-->
                            <!--         <span class="pcoded-mcaret"></span>-->
                            <!--     </a>-->
                            <!--     <ul class="pcoded-submenu">-->
                            <!--         <li class="">-->
                            <!--             <a href="auth-normal-sign-in.html" target="_blank"-->
                            <!--                 data-i18n="nav.authentication.login-bg-image">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Today's Order</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--         <li class="">-->
                            <!--             <a href="auth-sign-in-social.html" target="_blank"-->
                            <!--                 data-i18n="nav.authentication.login-soc-icon">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Pending Order</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--         <li class="">-->
                            <!--             <a href="auth-sign-in-social-header-footer.html" target="_blank"-->
                            <!--                 data-i18n="nav.authentication.login-soc-h-f">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Delivered</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--     </ul>-->
                            <!-- </li>-->
                             <!--<li class="pcoded-hasmenu ">-->
                             <!--    <a href="javascript:void(0)" data-i18n="nav.user-profile.main">-->
                             <!--        <span class="pcoded-micon"><i class="ti-user"></i></span>-->
                             <!--        <span class="pcoded-mtext">User Management</span>-->
                             <!--        <span class="pcoded-mcaret"></span>-->
                             <!--    </a>-->
                             <!--    <ul class="pcoded-submenu">-->
                             <!--        <li class="">-->
                             <!--            <a href="timeline.html" data-i18n="nav.user-profile.timeline">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">Timeline</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--        <li class="">-->
                             <!--            <a href="timeline-social.html" data-i18n="nav.user-profile.timeline-social">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">Timeline Social</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--        <li class="">-->
                             <!--            <a href="user-profile.html" data-i18n="nav.user-profile.user-profile">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">User Profile</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--        <li class="">-->
                             <!--            <a href="user-card.html" data-i18n="nav.user-profile.user-card">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">User Card</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--    </ul>-->
                             <!--</li>-->
                             
                            <!-- <li class="pcoded-hasmenu ">-->
                            <!--     <a href="javascript:void(0)" data-i18n="nav.e-commerce.main">-->
                            <!--         <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>-->
                            <!--         <span class="pcoded-mtext">Product Management</span>-->
                            <!--         <span class="pcoded-mcaret"></span>-->
                            <!--     </a>-->
                            <!--     <ul class="pcoded-submenu">-->
                            <!--         <li class="">-->
                            <!--             <a href="product-category.php" data-i18n="nav.e-commerce.product">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Category</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--         <li class="">-->
                            <!--             <a href="product-subcategory.php" data-i18n="nav.e-commerce.product">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Subcategory</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--         <li class="">-->
                            <!--             <a href="addproduct.php" data-i18n="nav.e-commerce.product">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Add Product</span>-->
                            <!--                 <span class="pcoded-badge label label-danger">NEW</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--         <li class="">-->
                            <!--             <a href="product-list.php" data-i18n="nav.e-commerce.product-list">-->
                            <!--                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                 <span class="pcoded-mtext">Product List</span>-->
                            <!--                 <span class="pcoded-mcaret"></span>-->
                            <!--             </a>-->
                            <!--         </li>-->
                            <!--       </ul>-->
                            <!--</li>-->
                             <!--<li class="pcoded-hasmenu ">-->
                             <!--    <a href="javascript:void(0)" data-i18n="nav.email.main">-->
                             <!--        <span class="pcoded-micon"><i class="ti-email"></i></span>-->
                             <!--        <span class="pcoded-mtext">E-Email</span>-->
                             <!--        <span class="pcoded-mcaret"></span>-->
                             <!--    </a>-->
                             <!--    <ul class="pcoded-submenu">-->
                             <!--        <li class="">-->
                             <!--            <a href="email-compose.html" data-i18n="nav.email.compose-mail">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">Compose Email</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--        <li class="">-->
                             <!--            <a href="email-inbox.html" data-i18n="nav.email.inbox">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">Inbox</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--        <li class="">-->
                             <!--            <a href="email-read.html" data-i18n="nav.email.read-read-mail">-->
                             <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                <span class="pcoded-mtext">Read Mail</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--        </li>-->
                             <!--        <li class="pcoded-hasmenu ">-->
                             <!--            <a href="javascript:void(0)" data-i18n="nav.email.email-template.main">-->
                             <!--                <span class="pcoded-micon"><i class="ti-email"></i></span>-->
                             <!--                <span class="pcoded-mtext">Email Template</span>-->
                             <!--                <span class="pcoded-mcaret"></span>-->
                             <!--            </a>-->
                             <!--            <ul class="pcoded-submenu">-->
                             <!--                <li class="">-->
                             <!--                    <a href="email-templates/email-welcome.html"-->
                             <!--                        data-i18n="nav.email.email-template.welcome-email">-->
                             <!--                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                        <span class="pcoded-mtext">Welcome Email</span>-->
                             <!--                        <span class="pcoded-mcaret"></span>-->
                             <!--                    </a>-->
                             <!--                </li>-->
                             <!--                <li class="">-->
                             <!--                    <a href="email-templates/email-password.html"-->
                             <!--                        data-i18n="nav.email.email-template.reset-password">-->
                             <!--                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                        <span class="pcoded-mtext">Reset Password</span>-->
                             <!--                        <span class="pcoded-mcaret"></span>-->
                             <!--                    </a>-->
                             <!--                </li>-->
                             <!--                <li class="">-->
                             <!--                    <a href="email-templates/email-newsletter.html"-->
                             <!--                        data-i18n="nav.email.email-template.newsletter-email">-->
                             <!--                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                        <span class="pcoded-mtext">Newsletter Email</span>-->
                             <!--                        <span class="pcoded-mcaret"></span>-->
                             <!--                    </a>-->
                             <!--                </li>-->
                             <!--                <li class="">-->
                             <!--                    <a href="email-templates/email-launch.html"-->
                             <!--                        data-i18n="nav.email.email-template.app-launch">-->
                             <!--                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                        <span class="pcoded-mtext">App Launch</span>-->
                             <!--                        <span class="pcoded-mcaret"></span>-->
                             <!--                    </a>-->
                             <!--                </li>-->
                             <!--                <li class="">-->
                             <!--                    <a href="email-templates/email-activation.html"-->
                             <!--                        data-i18n="nav.email.email-template.activation-code">-->
                             <!--                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                             <!--                        <span class="pcoded-mtext">Activation Code</span>-->
                             <!--                        <span class="pcoded-mcaret"></span>-->
                             <!--                    </a>-->
                             <!--                </li>-->
                             <!--            </ul>-->
                             <!--        </li>-->
                             <!--    </ul>-->
                             <!--</li>-->
                            </ul> 
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support"
                                menu-title-theme="theme5">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="complaintregister.php" data-i18n="nav.documentation.main">
                                        <span class="pcoded-micon"><i class="ti-file"></i></span>
                                        <span class="pcoded-mtext">Complain Register</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="ticket.php"
                                        data-i18n="nav.submit-issue.main">
                                        <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                        <span class="pcoded-mtext">Ticket</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                <li class="">
                                    <a href="index.php?rech_delete"
                                        data-i18n="nav.submit-issue.main">
                                        <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                        <span class="pcoded-mtext">Recharge Delete</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
								 <li class="">
                                    <a href="index.php?comm_delete"
                                        data-i18n="nav.submit-issue.main">
                                        <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                        <span class="pcoded-mtext">Comm_rpt Delete</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
								 <li class="">
                                    <a href="index.php?Api_delete"
                                        data-i18n="nav.submit-issue.main">
                                        <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                        <span class="pcoded-mtext">Api Hits Delete</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                            <!-- <li class="pcoded-hasmenu ">-->
                            <!--    <a href="javascript:void(0)" data-i18n="nav.maintenance.main">-->
                            <!--        <span class="pcoded-micon"><i class="ti-settings"></i></span>-->
                            <!--        <span class="pcoded-mtext">Maintenance</span>-->
                            <!--        <span class="pcoded-mcaret"></span>-->
                            <!--    </a>-->
                            <!--    <ul class="pcoded-submenu">-->
                            <!--        <li class="">-->
                            <!--            <a href="error.html" data-i18n="nav.maintenance.error">-->
                            <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                <span class="pcoded-mtext">Error</span>-->
                            <!--                <span class="pcoded-mcaret"></span>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--        <li class="">-->
                            <!--            <a href="comming-soon.html" data-i18n="nav.maintenance.comming-soon">-->
                            <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                <span class="pcoded-mtext">Comming Soon</span>-->
                            <!--                <span class="pcoded-mcaret"></span>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--        <li class="">-->
                            <!--            <a href="offline-ui.html" data-i18n="nav.maintenance.offline-ui">-->
                            <!--                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
                            <!--                <span class="pcoded-mtext">Offline UI</span>-->
                            <!--                <span class="pcoded-mcaret"></span>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                            </ul>
                            <!--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.support"-->
                            <!--    menu-title-theme="theme5">Others</div>-->
                            <!--<ul class="pcoded-item pcoded-left-item">-->
                            <!--    <li class=" ">-->
                            <!--        <a href="sticky.php" data-i18n="nav.sticky-notes.main">-->
                            <!--            <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>-->
                            <!--            <span class="pcoded-mtext">Sticky Notes</span>-->
                            <!--            <span class="pcoded-badge label label-danger">HOT</span>-->
                            <!--            <span class="pcoded-mcaret"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                    </nav>