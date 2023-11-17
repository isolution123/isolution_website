<?php 

$news=array();
$info=array();
  require_once("admin/config.php");  

  $sql="SELECT * FROM news  order by id desc";  
  $res=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($res)) 
  {
    $info[]=$row;
  }

  $news=$info;
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog Details | Financial Advisory At I-solutions | I - Solutions - Wealth Advisory</title>
<meta name="author" content="">
<meta name="description" content="I - Solutions - Wealth Advisory">
<meta name="keywords" content="">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="description">
<meta property="og:image" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=1">
<meta property="og:site_name" content="I - Solutions">
<meta property="og:title" content="I - Solutions">
<meta property="og:type" content="website">
<meta property="og:url" content="http://isolutionsadvisor.com/blog-detail.php/">




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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.services h4:after
{
  left: 0;
}
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
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
        <h3>Blog<span>.</span></h3>
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
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="our-expertise.php">Milestones</a></li> -->
          <li class="active">All Blogs</li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end breadcrumb-bar -->

<section class="featured-solutions new-section-padding transition">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>From The Directors Desk!</h2>
      </div>
      <?php $i=0; ?>
      <?php foreach ($news as $new) : $new=(array)$new;  $i++; ?>
      
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="solution-box blog-section">
          <!-- <figure class="image"><img src="images/hero1.jpg" alt="Image"></figure> -->
          <h4><?php echo $new['title']; ?></h4>
          <p>
             <?php echo $new['short_description']; ?> 
          </p>
          <p style="color: #c5c5c5">
             Post Added On:<?php echo date_format(date_create($new['created_at']),"d-m-Y"); ?> 
          </p>
          <a href="blog-detail.php?id=<?php echo $new['id'];?>" class="blog-read">Read More...</a>
        </div>
      </div>
      <?php endforeach; ?>
      
    </div>
  </div>
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
            <img src="images/whatsapp.png" height="50px" width="50px">
        </a>

    </div>

</div>
<!-- end support-bar -->
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