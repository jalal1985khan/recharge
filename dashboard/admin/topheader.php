<?php require("../includes/config.php");?>

<style>
.v-bal{
    background-color:#1abc9c;
    font-size:10px;
    padding: .2rem .5rem !important;
    border-radius:5px;
    letter-spacing:.5px;
}
	

</style>
        
<?php
    $res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
    $row = $res->fetch_assoc();
?> 

<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a style="" href="index.php">
                             <img class="img-fluid" src="../../images/<?php echo $row['LOGO']; ?>" width="100" alt="Company Logo" /> 
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <a class="main-search morphsearch-search" href="#">

                                        <i class="ti-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                             </ul>
                             
                              <?php
                                $res = "SELECT * FROM `admin`";
                                $run = mysqli_query($con,$res);
                                $row = mysqli_fetch_array($run);
                                ?>
                             
                            <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="v-bal">
                                    SMS BAl: <?php
                                    echo $row['SMSBAL'];
                                    ?>
                                </a>
                            
                            </li>
                            <li class="header-notification">
                                <a href="#!" class="displayChatbox v-bal">
                                    RC BAl: <?php 
                                    echo $row['RCBAL'];
                                    ?>
                                </a>
                            </li>
                            <li class="header-notification">
                                <a href="#!" class="displayChatbox v-bal">
                                    DMR BAl: <?php 
                                    echo $row['DMRBAL']; 
                                    ?>
                                </a>
                            </li>
                            
                           <li class="user-profile header-notification">
                                <a href="#!">
                                    <img width="20px" height="60px" src="img/<?php echo $row['IMAGE']?>" alt="User-Profile-Image">
                                    <span><?php echo $row['NAME'];?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="setting.php">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.php">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?logout">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                                </li>
                            </ul>

                            <div id="morphsearch" class="morphsearch">
                                <form class="morphsearch-form">
                                    <input class="morphsearch-input" type="search" placeholder="Search..." />
                                    <button class="morphsearch-submit" type="submit">Search</button>
                                </form>
                                <div class="morphsearch-content">
                                    <div class="dummy-column">
                                        <h2>People</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round"
                                                src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G"
                                                alt="Sara Soueidan" />
                                            <h3>Sara Soueidan</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round"
                                                src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G"
                                                alt="Shaun Dona" />
                                            <h3>Shaun Dona</h3>
                                        </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Popular</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                            <h3>Page Preloading Effect</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                            <h3>Draggable Dual-View Slideshow</h3>
                                        </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Recent</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                            <h3>Tooltip Styles Inspiration</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                                            <h3>Notification Styles Inspiration</h3>
                                        </a>
                                    </div>
                                </div>

                                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
    <script>
        
        function confirmationDelete(anchor){
            var conf = confirm("Are You Want To Delete This?");
            if(conf){
                window.location.attr("href");
            }
        }
    </script>

            