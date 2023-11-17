
<?php 

$news=array();
$info=array();
  require_once("admin/config.php");  

  $sql="SELECT * FROM team_info order by id desc";  
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
<title>Our Team | Wealth Investments Management - I Solutions</title>
<meta name="author" content="">
<meta name="description" content="Our team help in wealth Investments personalized, flexible, solution-based investment management and financial planning to our clients.">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    .vertical {
            border-left: 1px solid #D3D3D3;
            height: 300px;
            position:absolute;
            left: 50%;
        }
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

/*new css*/
.team_area{background:#fbfafa;}
.team_title {
    color: #000;
  margin-bottom: 60px;
  text-align: center;
  text-transform: capitalize;
  font-weight: 600;
}
.our-team {}
@media only screen and (max-width:768px) { 
.our-team {margin-bottom:30px}
}
.single-team{margin-bottom:33px;}
.single-team img {
  margin-bottom:15px;
  width: 120px;
  border-radius: 50%;
  height: 120px;
  border: 10px solid rgba(255,255,255,0.1);
}
.single-team h3 {
  margin-bottom:0px;
  font-size:18px;
  font-weight: 600;
}
.single-team p{margin-bottom:0px;}

.our-team .social {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: center;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.our-team .social li{
display: inline-block;
}
.our-team .social li a {
  display: block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  font-size: 15px;
  color: #fff;
  position: relative;
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
  border-radius: 30px;
  margin: 3px;
}
.our-team:hover .social li:nth-child(1) a{
    -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
}
.our-team:hover .social li:nth-child(2) a{
    -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s
}
.our-team:hover .social li:nth-child(3) a{
    -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
}
.our-team:hover .social li:nth-child(4) a{
    -webkit-transition-delay: 0s;
            transition-delay: 0s;
}
.our-team .social li a:hover{
    -webkit-transition-delay: 0s;
            transition-delay: 0s;
}

.facebook{background: #1C58A1;}
.facebook:hover{background: #fff;color:#1C58A1!important;}
.twitter{background: #0CBCE3;}
.twitter:hover{background: #fff;color:#0CBCE3!important;}
.google{background: #F04537;}
.google:hover{background: #fff;color:#F04537!important;}

/*START BOARD DIRECTOR*/
.bod_area {
  padding-bottom: 80px;
  background:#fbfafa;
}
.our-bod {}
@media only screen and (max-width:768px) { 
.our-bod {margin-bottom:30px}
}
.single-bod{margin-bottom:10px;}
.single-bod img {
  margin-bottom:60px;
  margin-bottom:60px;
  width: 500px;
  border-radius: 50%;
  height: 200px;
  border: 10px solid rgba(255,255,255,0.1);
}
.single-bod h3 {
  margin-bottom:0px;
  font-size:18px;
  font-weight: 600;
}
.single-bod p{margin-bottom:0px;}

.our-bod .social {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: center;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.our-bod .social li{
display: inline-block;
}
.our-bod .social li a {
  display: block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  font-size: 15px;
  color: #fff;
  position: relative;
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
  border-radius: 30px;
  margin: 3px;
}
.our-bod:hover .social li:nth-child(1) a{
    -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
}
.our-bod:hover .social li:nth-child(2) a{
    -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s
}
.our-bod:hover .social li:nth-child(3) a{
    -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
}
.our-bod:hover .social li:nth-child(4) a{
    -webkit-transition-delay: 0s;
            transition-delay: 0s;
}
.our-bod .social li a:hover{
    -webkit-transition-delay: 0s;
            transition-delay: 0s;
}
.title_spectial {
    text-align: center;
    font-weight: 600;
    position: relative;
    margin-bottom: 60px;
    text-transform: uppercase;
    font-size: 24px;
}
.bod_area {
    padding-bottom: 80px;
}

.section-padding {
    padding: 80px 0;
    padding-top: 0px;
}
/*end*/
.border-5, .border-w-5 {
    border-width: 5px !important;
}
.border-white {
    border: 1px solid transparent;
    border-color: #fff !important;
}
hr.hr-primary {
    border-top-color: #CC164D!important;
}
em {
    font-style: italic;
}
.font-weight-normal {
    font-weight: 400 !important;
}
.ptag {
  transform: perspective(750px) translate3d(0px, 0px, -250px) rotateX(27deg)
    scale(0.9, 0.9);
  border-radius: 20px;
/*  border: 5px solid #00A8C3!important;*/
/*  box-shadow: 0 30px 40px -20px rgba(0, 0, 0, 0.2);*/
  transition: 0.4s ease-in-out transform;
  transform: translate3d(0px, 0px, -250px);
  }
.second-row-margin {
      
        padding-left:20px;
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
        <h3>Team<span>.</span></h3>
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
          <li class="active">Team</li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end breadcrumb-bar -->
<!-- <section class="career new-section-padding text-center">
  <div class="container">
    <div class="row">
        <h2>Team</h2>
        <div class="col-md-12">
          <img src="images/team.jpg" class="img-responsive">
        </div>
    </div>
</div>
</section> -->

<div class="container py-7">
  <br><br><br><br>
  <div class="mb-5">
    <br><br>
    <div class="col-md-6 text-md-right" >
      <center><img height="300px" width="300px" src="images/gallery/bhavin_sheth.jpg" alt="Personal Trainer 4" class="ptag img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle" ></center>
      <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold" style="margin-left: 180px;">
       <b> Bhavin Sheth </b>
      </h3>
       <h4 class="my-0 font-weight-normal">
        <em style="margin-left: 180px;">Partner</em>
      </h4>
      <br>
      <p style="margin-left: 100px;font-size: 14px;">I-Solutions is sculpture from team of young first generation entrepreneur's hard work.</p>
    </div>
           <div class = "vertical"></div>

     <div class="col-md-6 text-md-right">
      <center><img height="300px" width="300px" src="images/gallery/lokesh_shah.jpg" alt="Personal Trainer 4" class="ptag img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle"></center>
            <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold" style="margin-left: 180px;">
        <b> Lokesh Shah </b>
      </h3>
      <h4 class="my-0 font-weight-normal">
        <em style="margin-left: 180px;">Partner</em>
      </h4>
      <br>
      <p style="margin-left: 100px;font-size: 14px;">I-Solutions is sculpture from team of young first generation entrepreneur's hard work.</p>
    </div>
  </div>
</div>

<img height="5px" width="100%" src="images/colorful-bar.jpg">

<!-- team new section -->
<!-- <section id="bod" class="bod_area">
<div class="container" >
<br><br><br>               
  <h2 class="title_spectial">Board of directors</h2>
  <div class="row text-center">
    <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;" >
           <div class="card-flyer">
      <div class="our-bod">
        <div class="single-bod">
         <div class="col-md-4 mb-2">
          <img src="images/gallery/bhavin_sheth.jpg" class="w-100" alt="">
          </div>
          <div class="col-md-8">
          <h1 style="text-align: justify;">Bhavin Sheth</h1>
          <h3 style="text-align: justify;">Managing Director</h3><br>
          <p style="font-size:16px; text-align: justify;
          text-justify: inter-word;">
          I-Solutions is an emerging Investment Data Management & Wealth Advisory company managing assets for its corporate and private clients worldwide.
        </p>
      </div>
    </div>  
    </div>
    </div>
  </div>

     <div class = "vertical"></div>

    <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">
     <div class="card-flyer ">
      <div class="our-bod">
        <div class="single-bod">
         <div class="col-md-8">
          <h1 style="text-align: justify;">Lokesh Shah</h1>
          <h3 style="text-align: justify;">Managing Director</h3><br>
          <p style="font-size:16px; text-align: justify;
          text-justify: inter-word;">
          I-Solutions is an emerging Investment Data Management & Wealth Advisory company managing assets for its corporate and private clients worldwide.
        </p>
        </div>
        <div class="col-md-4 ">
          <img src="images/gallery/lokesh_shah.jpg" class="img-fluid" alt="">
        </div>
        </div>  
   
      </div>
    </div>
    </div> 
   
  </div>     

</div>
  <img height="5px" width="2000px" src="images/colorful-bar.jpg">

</section> -->
<<section id="team" class="team_area section-padding">
    <div class="container">
        <h2 class="title_spectial">Meet the Creative Team</h2>
        <div class="row text-center">
            <?php $count = 0; ?>
            <?php foreach ($news as $row_data) { ?>
                <div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp <?php echo ($count >= 6) ? 'second-row-margin' : ''; ?>"
                     data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="admin/<?php echo $row_data['img_path'] ?>" alt="Image">
                            <h3><?php echo $row_data['emp_name'] ?></h3>
                             <h3><?php echo $row_data['emp_designation'] ?></h3>
                            <!-- Add additional member information if needed -->
                        </div>
                    </div>
                </div>
                <?php $count++; ?>
            <?php } ?>
        </div>
    </div>
</section>


<!-- end new section -->

<section class="fun-facts" id="counter">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="feature-box"> <i class="flaticon-014-smartphone-3" aria-hidden="true"></i>
        <h4 class="feature-title">Happy Clients</h4>
        <span class="odometer" id="1">0000</span><span class="symbol">%</span> </div>
      <!-- end feature-box --> 
    </div>
    <!-- end col-4 -->
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="feature-box"> <i class="flaticon-015-smartphone-2" aria-hidden="true"></i>
        <h4 class="feature-title">Group Companies</h4>
        <span class="odometer" id="2">0000</span><span class="symbol">K</span> </div>
      <!-- end feature-box --> 
    </div>
    <!-- end col-4 -->
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="feature-box"> <i class="flaticon-016-smartphone-1" aria-hidden="true"></i>
        <h4 class="feature-title">SIMPLE INTERFACE</h4>
        <span class="odometer" id="3">0000</span><span class="symbol">+</span> </div>
      <!-- end feature-box --> 
    </div>
    <!-- end col-4 -->
  </div>
  <!-- end row --> 
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