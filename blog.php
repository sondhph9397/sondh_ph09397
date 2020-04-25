<?php 
session_start();
require_once "./config/utils.php";

$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from redqteam.com/sites/houston/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Houston | Blog</title>
  <?php require_once './public/_share/style.php'; ?>
  </head>
  <body>

  <div id="rq-circle-loader-wrapper">
  <div id="rq-circle-loader-center">
    <div class="rq-circle-load">
      <img src="<?= ADMIN_ASSET_URL ?>img/oval.svg" alt="Page Loader">
    </div>
  </div>
</div>
    <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="rq-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <?php include_once './public/_share/sidebar.php' ?>
    <!-- SIDE MENU END -->
    <?php include_once './public/_share/header.php'; ?>

    <section class="rq-page-background rq-blog-page-bg">
      <div class="banner_shadow">
        <h1>BLOG</h1>
      </div>
    </section>

    <section class="rq-blog-post-section" id="blog-post">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-7 rq-blog-post-wrapper">
            <!-- BLOG ITEMS -->
            <div class="rq-blog-items rq-image-post">
              <div class="rq-blog-img-wrapper">
                <img src="<?= ADMIN_ASSET_URL ?>img/blog_drink_coffee.jpg" alt="Blog Image">
                <div class="rq-blog-cat-icon">
                  <i class="ion-ios-camera-outline"></i>
                </div>
              </div>

              <div class="rq-blog-item-details">
                <h3>
                  <a href="blog-details.html">lets drink cofee</a>
                </h3>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream</p>
                <span class="rq-blog-post-date">March 20, 2016</span>
              </div>
            </div>
            <!-- BLOG ITEMS END -->

            <!-- BLOG ITEMS -->
            <div class="rq-blog-items rq-image-post">
              <div class="rq-blog-img-wrapper">
                <img src="<?= ADMIN_ASSET_URL ?>img/blog_buy_get_one.jpg" alt="Blog Image">
                <div class="rq-blog-cat-icon">
                  <i class="ion-ios-musical-notes"></i>
                </div>
              </div>

              <div class="rq-blog-item-details">
                <h3>
                  <a href="blog-details.html">lets drink cofee</a>
                </h3>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream</p>
                <span class="rq-blog-post-date">March 20, 2016</span>
              </div>
            </div>
            <!-- BLOG ITEMS END -->

            <!-- BLOG ITEMS -->
            <div class="rq-blog-items rq-image-post">
              <div class="rq-blog-img-wrapper">
                <img src="<?= ADMIN_ASSET_URL ?>img/blog_valentine_discu.jpg" alt="Blog Image">
                <div class="rq-blog-cat-icon">
                  <i class="ion-ios-musical-notes"></i>
                </div>
              </div>

              <div class="rq-blog-item-details">
                <h3>
                  <a href="blog-details.html">lets drink cofee</a>
                </h3>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream</p>
                <span class="rq-blog-post-date">March 20, 2016</span>
              </div>
            </div>
            <!-- BLOG ITEMS END -->

            <!-- BLOG ITEMS -->
            <div class="rq-blog-items rq-image-post">
              <div class="rq-blog-img-wrapper">
                <img src="<?= ADMIN_ASSET_URL ?>img/single-room-pic1-big.jpg" alt="Blog Image">
                <div class="rq-blog-cat-icon">
                  <i class="ion-ios-camera-outline"></i>
                </div>
              </div>

              <div class="rq-blog-item-details">
                <h3>
                  <a href="blog-details.html">lets drink cofee</a>
                </h3>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream</p>
                <span class="rq-blog-post-date">March 20, 2016</span>
              </div>
            </div>
            <!-- BLOG ITEMS END -->

            <!-- BLOG ITEMS -->
            <div class="rq-blog-items rq-image-post">
              <div class="rq-blog-img-wrapper">
                <img src="<?= ADMIN_ASSET_URL ?>img/single-room-pic5-big.jpg" alt="Blog Image">
                <div class="rq-blog-cat-icon">
                  <i class="ion-ios-musical-notes"></i>
                </div>
              </div>

              <div class="rq-blog-item-details">
                <h3>
                  <a href="blog-details.html">lets drink cofee</a>
                </h3>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream</p>
                <span class="rq-blog-post-date">March 20, 2016</span>
              </div>
            </div>
            <!-- BLOG ITEMS END -->
          </div>

          <div class="col-md-4 col-sm-5 rq-sidebar">
            <div class="rq-sidebar-wrapper">
              <!-- SIDEBAR WIDGET -->
              <div class="rq-sidebar-widget rq-recent-post-widget">
                <h3 class="rq-sidebar-title">Recent Posts</h3>

                <div class="rq-recent-post-wrapper">
                  <!-- POST ITEM -->
                  <div class="rq-recent-post-item">
                    <div class="rq-recent-post-img-wrapper">
                      <img src="<?= ADMIN_ASSET_URL ?>img/blog_recent_post.jpg" alt="Recent Post">
                    </div>

                    <div class="rq-recent-post-details">
                      <h3><a href="#">Food is poetry </a></h3>
                      <span class="rq-post-date">March 20, 2016</span>
                    </div>
                  </div>
                  <!-- END -->

                  <!-- POST ITEM -->
                  <div class="rq-recent-post-item">
                    <div class="rq-recent-post-img-wrapper">
                      <img src="<?= ADMIN_ASSET_URL ?>img/blog-detail-post-2.png" alt="Recent Post">
                    </div>

                    <div class="rq-recent-post-details">
                      <h3><a href="#">Nobody can't defeat me !</a></h3>
                      <span class="rq-post-date">March 20, 2016</span>
                    </div>
                  </div>
                  <!-- END -->

                  <!-- POST ITEM -->
                  <div class="rq-recent-post-item">
                    <div class="rq-recent-post-img-wrapper">
                      <img src="<?= ADMIN_ASSET_URL ?>img/blog-detail-post-3.png" alt="Recent Post">
                    </div>

                    <div class="rq-recent-post-details">
                      <h3><a href="#">Food is poetry </a></h3>
                      <span class="rq-post-date">March 20, 2016</span>
                    </div>
                  </div>
                  <!-- END -->

                  <!-- POST ITEM -->
                  <div class="rq-recent-post-item">
                    <div class="rq-recent-post-img-wrapper">
                      <img src="<?= ADMIN_ASSET_URL ?>img/blog-detail-post-4.png" alt="Recent Post">
                    </div>

                    <div class="rq-recent-post-details">
                      <h3><a href="#">Nobody can't defeat me !</a></h3>
                      <span class="rq-post-date">March 20, 2016</span>
                    </div>
                  </div>
                  <!-- END -->
                </div>
              </div>
              <!-- END -->

              <!-- SIDEBAR WIDGET -->
              <!-- END -->
            </div>
          </div>
        </div>
      </div>
    </section>
     
  <?php require_once "./public/_share/footer.php"; ?>

  <?php require_once "./public/_share/script.php"; ?>
  </body>

<!-- Mirrored from redqteam.com/sites/houston/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:39 GMT -->
</html>
