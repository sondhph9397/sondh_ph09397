<?php
// bắt đầu sử dụng session
// session_start();
// require_once '../../config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
//lấy dữ liệu bảng web_settings
$getWebsettingQuery=" select * from web_setting where id = 2";
$websetting = queryExecute($getWebsettingQuery, false);
?>
<header>
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Navbar Toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="<?= BASE_URL  ?>"><img class="logo"
                        src="<?= BASE_URL . $websetting['logo'] ?>" alt="GLIMPSE"></a>
            </div>
            <!-- Navbar Toggle End -->

            <!-- navbar-collapse start-->
            <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
                <ul class="nav navbar-nav rq-menus">
                    <li class="active">
                        <a href="<?= BASE_URL ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL . 'select-room-grid.php'?>">Room</a>
                        <ul class="rq-sub-menu">
                            <li>
                                <a href="<?= BASE_URL . 'cart.php'?>">Booking Cart</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= BASE_URL . 'about-us.php'?>">About</a>
                    </li>
                    <li>
                        <a href="<?=BASE_URL . 'blog.php'?>">Blog</a>
                        <ul class="rq-sub-menu">
                            <li>
                                <a href="<?= BASE_URL . 'blog.php'?>">Blog</a>
                            </li>
                            <li>
                                <a href="<?= BASE_URL . 'blog-details.php'?>">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=BASE_URL . 'contact.php'?>">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse end-->

            <div class="rq-extra-btns-wrapper">
                <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
            </div>

        </div>
    </nav>
    <!-- Navigation Menu end-->
</header> <!-- / rq-header-section end here-->