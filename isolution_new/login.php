

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer Login | I - Solutions - Wealth Advisory</title>
<meta name="author" content="">
<meta name="description" content="I - Solutions - Wealth Advisory">
<meta name="keywords" content="">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="I - Solutions - Wealth Advisory">
<meta property="og:image" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=1">
<meta property="og:site_name" content="I - Solutions">
<meta property="og:title" content="I - Solutions">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=1">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@I - Solutions">
<meta name="twitter:creator" content="@I - Solutions">
<meta name="twitter:title" content="I - Solutions">
<meta name="twitter:description" content="I - Solutions - Wealth Advisory">
<meta name="twitter:image" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=1">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link href="revolution/css/settings.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/odometer.min.css" rel="stylesheet">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
.get-quote
{
  background: none!important;
}
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149997052-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149997052-1');
</script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</head>
<body>
<div class="preloader">
  <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
  </svg>
</div>

<header class="int-header">
  <?php include 'navigation.php'; ?>
  <!-- end navbar-default -->
  <div class="table">
    <div class="table-cell">
      <div class="container">
        <h3>CUSTOMER LOGIN<span>.</span></h3>
      </div>
      <!-- end container --> 
    </div>
    <!-- end table-cell --> 
  </div>
  <!-- end table --> 
</header>
<!-- end header -->
<section class="breadcrumb-bar">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Customer Login</li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end breadcrumb-bar -->

<section class="get-quote transition">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-offset-4 col-sm-4 col-xs-12">
        <!-- <h6>INFINITE SCROLL</h6> -->
        <h2 class="text-center">Login</h2>
        <form method="post" action="https://3tense.com/client/Login_api" name="form1" target="_blank">
          <!-- <input type="text" id="name" name="name" placeholder="Your name" class="first"> -->
          <!-- <input type="text" id="email" name="email" placeholder="Your e-mail" class="second">           -->
          <input type="text" name="username" placeholder="Enter user name" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="hidden" name="url" value="http://isolutionsadvisor.com/login.php" required>
          <!-- <textarea id="msg" name="msg" placeholder="Your message"></textarea> -->
            <div class="form-check mtb-20 col-md-6">
              <input class="form-check-input" type="radio" name="collection" id="exampleRadios1" value="yes" checked>
              <label class="form-check-label" for="exampleRadios1">
                Client
              </label>
            </div>
            <div class="form-check mtb-20 col-md-6">
              <input class="form-check-input" type="radio" name="collection" id="exampleRadios2" value="no">
              <label class="form-check-label" for="exampleRadios2">
                IFA
              </label>
            </div> 
          
          <button type="submit" name="submit" class="login-btn">SUBMIT</button>
        </form>
        
          <?php 
            if($_GET['status']){
              ?>
              <div class="alert alert-danger" role="alert" style="margin-top: 1%;">
                <?php
              echo 'Invalid Credentails';
            }
          ?>            
          </div>
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>


<section class="support-bar transition">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> <a href="contact.php">GET IN TOUCH</a> <img src="images/icon-support.png" alt="Image">
        <h4>Have any question?</h4>
        <h6>We're here to help. Send us an email or call us at 022 2508 6520 </h6>
      </div>
    </div>
  </div> 
</section>

<div class="container">

    <div class="row">

        <a href="https://api.whatsapp.com/send?phone=917666900909" target="_blank" class="whatsapp">
            <img src="images/whatsapp.png" height="50px" width="50px;">
        </a>

    </div>

</div>

<?php include 'footer.php'; ?>
<!-- end footer --> 
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script type="text/javascript">
$(window).load(function() {
	$(".preloader").fadeOut("fast");
})
</script> 
<script>
jQuery(document).ready(function($) {
    var form = $('form[name="form1"]'),
        radio = $('input[name="collection"]'),
        choice = '';

    radio.change(function(e) {
        choice = this.value;
debugger;
        if (choice === 'yes') {
            form.attr('action', 'https://3tense.com/client/Login_api');
        } else {
            form.attr('action', 'https://3tense.com/broker/Login_api');
        }
    });
});
</script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jPushMenu.min.js"></script> 
<script src="js/odometer.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.fancybox.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/masonry.pkgd.min.js"></script> 
<script src="js/scripts.min.js"></script> 
</body>
</html>