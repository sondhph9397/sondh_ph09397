<?php 
session_start();
require_once "./config/utils.php";

$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | Checkout</title>
  <?php require_once "./public/_share/style.php"; ?>
</head>
<body class="rq-about-us-template">
<div id="rq-circle-loader-wrapper">
  <div id="rq-circle-loader-center">
    <div class="rq-circle-load">
      <img src="<?= ADMIN_ASSET_URL ?>img/oval.svg" alt="Page Loader">
    </div>
  </div>
</div>
  <div id="main-wrapper">
   <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="rq-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <?php include_once './public/_share/sidebar.php' ?>
    <!-- SIDE MENU END -->


    <?php require_once "./public/_share/header.php"; ?>

    <div class="rq-checkout-banner">
      <div class="rq-checkout-banner-mask">
        <div class="container">
          <div class="rq-checkout-banner-text">
            <div class="rq-checkout-banner-text-middle">
              <h1>booking</h1>
            </div>
          </div>
       </div>
      </div>
    </div><!-- / rq-banner-area-->
    <div class="rq-checkout-form">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="rq-categories">
               <div class="rq-check-in-out-wrapper">
                    <div class="rq-check-in-out">
                        <h1>CHECK IN</h1>
                        <div class="rq-check-in-out-display" id="rq-check-in">
                            <input type="text" id="rq-checkin-date" hidden>
                            <div class="rq-dmy-wrapper">
                                <p class="rq-single-date"></p>
                                <p class="rq-month-year">
                                    <span class="rq-single-month"></span>
                                    <span class="rq-single-year"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rq-check-in-out">
                        <h1>CHECK OUT</h1>
                        <div class="rq-check-in-out-display" id="rq-check-out">
                            <input type="text" id="rq-checkout-date" hidden>
                           <div class="rq-dmy-wrapper">
                                <p class="rq-single-date"></p>
                                <p class="rq-month-year">
                                    <span class="rq-single-month"></span>
                                    <span class="rq-single-year"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--  / date & time picker -->
              <h4>total Room<span class="label label-default pull-right">3</span></h4>
              <h4>adult <span class="label label-default pull-right">2</span></h4>
              <h4>children <span class="label label-default pull-right">2</span></h4>
              <h2>TOTAL <span class="label label-default pull-right">$250</span></h2>
            </div>
          </div><!-- / col-md-4-->
          <div class="col-md-8 col-sm-6">
            <form action="#">
               <h1 class="rq-checkout-form-title">billing details</h1>
              <div class="row">
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">FIRST NAME <span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" >
                    </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                      <label for="exampleInputEmail2">LAST NAME <span>*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail2">
                    </div>
                 </div>
               </div><!------/row-------->
               <div class="form-group">
                <label for="exampleInputEmail3">COMPANY NAME</label>
                <input type="text" class="form-control" id="exampleInputEmail3" >
              </div>
               <div class="row">
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail4">EMAIL<span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail4" >
                    </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                      <label for="exampleInputEmail5">PHONE </label>
                      <input type="email" class="form-control" id="exampleInputEmail5">
                    </div>
                 </div>
               </div><!------/row-------->
               <div class="form-group">
                <label>COUNTRY</label>
                 <div class="rq-checkout-form1 rq-checkout-country">
                  <select class="js-example-placeholder-single form-control rq-checkout-form-select" >
                    <option>&nbsp;</option>
                    <option value="0">Bangladesh</option>
                    <option value="1">Amirica</option>
                    <option value="2">Germany</option>
                    <option value="3">India</option>
                    <option value="4">Rassuia</option>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label for="exampleInputEmail7">ADDRESS</label>
                <input type="text" class="form-control" id="exampleInputEmail7" placeholder="Street address" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail8" placeholder="Apartment, suite" >
              </div>
              <div class="row">
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>DISTRICT<span>*</span></label>
                       <div class="rq-checkout-form1 rq-checkout-district">
                        <select class="js-example-placeholder-single form-control" >
                          <option>&nbsp;</option>
                          <option value="BD">Bangladesh</option>
                          <option value="USA">Amirica</option>
                          <option value="GER">Germany</option>
                          <option value="IND">India</option>
                          <option value="RUS">Rassuia</option>
                        </select>
                      </div>
                    </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                      <label for="exampleInputEmail10">postcode<span>*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail10">
                    </div>
                 </div>
               </div><!------/row-------->
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Create an account
                  </label>
                </div>
            </div>
            <h1 class="rq-checkout-form-title">additional info</h1>
            <div class="form-group">
              <label for="exampleInputEmail11">order notes</label>
              <textarea class="form-control" rows="5" id="exampleInputEmail11"></textarea>
            </div>
            <!-- <a class="rq-btn-primary" href="#" role="button"></a> -->
            <button class="btn rq-btn-primary" type="submit">book now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- / rq-checkout-form-->
    
    <?php require_once "./public/_share/footer.php"; ?>
  </div><!-- main-wrapper -->
  <?php require_once "./public/_share/script.php"; ?>

</body>

<!-- Mirrored from redqteam.com/sites/houston/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->
</html>
