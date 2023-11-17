<?php 
  $news=array();
  $info=array();
  require_once("admin/config.php");  
  $sql="select id,title,short_description,description,created_at,updated_at FROM news where status='Active' order by id desc limit 2";  
  $res=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($res)) 
  {
    $row['description']= str_replace('src=', 'src=admin', $row['description']);
    $info[]=$row;
  }
  $news=$info;
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Best Wealth Advisory Company | Wealth Advisory Services By I-Solutions</title>
<meta name="author" content="">
<meta name="description" content="I-Solutions is one of the best wealth advisory company in Mumbai. They provide the best wealth advisory services.">
<meta name="keywords" content="">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="I - Solutions - Wealth Advisory">
<meta property="og:image" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=11">
<meta property="og:site_name" content="I - Solutions">
<meta property="og:title" content="I - Solutions">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=11">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@I - Solutions">
<meta name="twitter:creator" content="@I - Solutions">
<meta name="twitter:title" content="I - Solutions">
<meta name="twitter:description" content="I - Solutions - Wealth Advisory">
<meta name="twitter:image" content="https://www.isolutionsadvisor.com/images/isol-logo.jpg?v=11">

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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
.navbar-default .navbar-nav li a 
{
    color: #000;
    font-weight: 700;
    font-size: 13px;
    opacity: 1;
}
.navbar-default .top-bar .social-text
{
    color: #000;
}
.navbar-default .top-bar .social-media li a
{
    color: #000;
}
.navbar-default .top-bar .language span
{
    color: #000;
}
.navbar-default .top-bar .language span a
{
    color: #000;
}
.navbar-default .top-bar .top-menu li a
{
    color: #000;
}
.navbar-default.fixed-active .top-bar {
    background: url(../images/colorful-bar1.jpg) top center no-repeat #fff!important;
}
.blinking {
    -webkit-animation: 1s blink ease infinite;
    -moz-animation: 1s blink ease infinite;
    -ms-animation: 1s blink ease infinite;
    -o-animation: 1s blink ease infinite;
    animation: 1s blink ease infinite;
  }

  @keyframes "blink" {

    from,
    to {
      opacity: 0;
    }

    50% {
      opacity: 1;
    }
  }

  @-moz-keyframes blink {

    from,
    to {
      opacity: 0;
    }

    50% {
      opacity: 1;
    }
  }

  @-webkit-keyframes "blink" {

    from,
    to {
      opacity: 0;
    }

    50% {
      opacity: 1;
    }
  }

  @-ms-keyframes "blink" {

    from,
    to {
      opacity: 0;
    }

    50% {
      opacity: 1;
    }
  }

  @-o-keyframes "blink" {

    from,
    to {
      opacity: 0;
    }

    50% {
      opacity: 1;
    }
  }
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149997052-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149997052-1');
</script>

</head>
<body>
<!-- <div class="preloader"> <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"> -->
  <!-- <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle> -->
  <!-- </svg> </div> -->
<!-- end preloader -->
<header class="header">
<?php include 'index-navigation.php'; ?> 
</header>
<!-- end header -->

<div id="carousel-example" class="carousel slide mt-6" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
    <li data-target="#carousel-example" data-slide-to="3"></li>
    <li data-target="#carousel-example" data-slide-to="4"></li>
    <li data-target="#carousel-example" data-slide-to="5"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img class="lazy" src="images/slider/dummy.jpg" data-src="images/slider/slide1.jpg"></a>
    </div>    
    <div class="item">
      <a href="#"><img class="lazy" src="images/slider/dummy.jpg" data-src="images/slider/slide2.jpg" /></a>
    </div>
    <div class="item">
      <a href="#"><img class="lazy" src="images/slider/dummy.jpg" data-src="images/slider/slide3.jpg" /></a>
    </div>
    <div class="item">
      <a href="#"><img class="lazy" src="images/slider/dummy.jpg" data-src="images/slider/slide4.jpg" /></a>
    </div>
    <div class="item">
      <a href="#"><img class="lazy" src="images/slider/dummy.jpg" data-src="images/slider/slide5.jpg" /></a>
    </div>
    <div class="item">
      <a href="#"><img class="lazy" src="images/slider/dummy.jpg" data-src="images/slider/slide6.jpg" /></a>
      <!-- <div class="carousel-caption"> -->
        <!-- <h1 class="slider-h1"></h1> -->
        <!-- <p class="slider-p">Untracked Mutual Fund Portfolios<br>Know your fund performance as layman</p> -->
      <!-- </div> -->
    </div>    
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<section class="left-side-content transition new-section-padding">

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1 class="text-center">Our Approach</h1>
          <div class="col-md-2 col-sm-3 col-xs-2">
            <h3 class="golden-clr gold-background gold-g">G</h3>
          </div>
          <div class="col-md-10  col-sm-9 col-xs-10 gold-col10">
            <p class="gold-p">Gather All Data</p>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-2">
            <h3 class="golden-clr gold-background gold-o">O</h3>
          </div>
          <div class="col-md-10 col-sm-9 col-xs-10 gold-col10">
            <p class="gold-p">Organize Total Records</p>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-2">
            <h3 class="golden-clr gold-background gold-l">L</h3>
          </div>
          <div class="col-md-10 col-sm-9 col-xs-10 gold-col10">
            <p class="gold-p">Learning You From Your Portfolio</p>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-2">
            <h3 class="golden-clr gold-background gold-d">D</h3>
          </div>
          <div class="col-md-10 col-sm-9 col-xs-10 gold-col10">
            <p class="gold-p">Demonstrate Your Past Investments & Future Scope</p>
          </div>
        </div>
      <div class="col-md-4">
        <h1 class="text-center">Why Us?</h1>
        <div class="tab-center"><img src="images/dummy-slide.jpg" data-src="images/side-image1.jpg" class="lazy" alt="Image">
          <p class="gold-p text-center why-us-btn"><a href="why-i-solutions.php" class="no-radius">Why us?</a></p> 
        </div>
      </div>
      <div class="col-md-4 text-center section-third">
        <h1 class="text-center">Popular Reports</h1>
          <a href="images/summaryreport.jpg" class="lazy" target="_blank"><h3>Summary</h3></a>
          <a href="images/ledger-report.jpg" class="lazy" target="_blank"><h3>Financial Ledger</h3></a>
          <a href="images/cashflow.png" class="lazy" target="_blank"><h3>Cash Flow</h3></a>
      </div>      
    </div>
  </div>
</section>


<section class="new-section-padding featured-solutions transition">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 text-center">
        <h1>What We Do</h1>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp col-md-offset-2">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/life-insurance.png" alt="Image"></figure>
          <h4 class="remove-line popins">Life & Health Insurance</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/mutual-funds.png" alt="Image"></figure>
          <h4 class="remove-line popins">Mutual Funds</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/fixed-deposit.png" alt="Image"></figure>
          <h4 class="remove-line popins">Fixed Deposit</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/equity.png" alt="Image"></figure>
          <h4 class="remove-line popins">Equity</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-md-offset-2 col-xs-12">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/commodity.png" alt="Image"></figure>
          <h4 class="remove-line popins">Commodity</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/real-estate.png" alt="Image"></figure>
          <h4 class="remove-line popins">Real Estate</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/pms.png" alt="Image"></figure>
          <h4 class="remove-line popins">PMS & AIF</h4>          
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 grid-margin-desktp">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon1 lazy" src="images/we-do/we-do.png" data-src="images/we-do/hni.png" alt="Image"></figure>
          <h4 class="remove-line popins">HNI Wealth Management Solutions</h4>          
        </div>
      </div>                              
      <!-- <div class="col-xs-12 text-center"> <a href="#">LOAD MORE</a> </div> -->
    </div>
  </div>
</section>

<section class="new-section-padding featured-solutions transition expertise mb-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 text-center">
        <h1>Expertise</h1>
      </div>
      <div class="col-md-2 col-sm-2 col-sm-offset-1 col-md-offset-1 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/1.png" alt="Image"></figure>
          <a href="financial-planning.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/2.png" alt="Image"></figure>
          <a href="estate-planning.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/3.png" alt="Image"></figure>
          <a href="entity-creation.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/4.png" alt="Image"></figure>
          <a href="trust-services.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/5.png" alt="Image"></figure>
          <a href="structured-product.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile col-md-offset-2 col-sm-offset-2">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/6.png" alt="Image"></figure>
          <a href="private-equity.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/7.png" alt="Image"></figure>
          <a href="document-management.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6 expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/8.png" alt="Image"></figure>
          <a href="tax-advisory.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12 mobile-center expertise-mobile">
        <div class="solution-box">
          <figure class="image"><img class="we-do-icon lazy" src="images/expertise/expertise.png" data-src="images/expertise/9.png" alt="Image"></figure>
          <a href="advisor-on-board.php" class=" expertise-a"><h6 class="remove-line popins expertise-h6">Know More <i class="fa fa-arrow-right" aria-hidden="true"></i></h6></a>          
        </div>
      </div>                                                                    
      
    </div>
  </div>
</section>

<section class="new-section-padding featured-solutions">
 
  <div class="container">
    <div class="row">
     <div class="col-md-6">
        <div class="content-image"><img src="images/about-dummy.jpg" data-src="images/about.jpg" alt="Image" 
          class="lazy"> </div>
      </div>
      <div class="col-md-4 col-md-offset-2">
        <h1>Who We Are</h1>
        <p>I-Solutions is an emerging Investment Data Management & Wealth AAdvisory company managing assets for its corporate and private clients worldwide.</p>

        <p>I-Solutions differentiation is derived from a transparent, timely & technology enabled advisory services delivered by some of the leading taleted professionals in the country. I-Solutions professionals are grouped by focus and our clients are able to deal with our professionals who speaks their language. Our internal information systems enable the delivery of informed and timely advise to clients.</p>
        <a href="about.php">LEARN MORE</a> </div>
    </div>
  </div>
</section>



<section class="new-section-padding testimonials">
  <div class="container">
    <div class="row">
     <div class="col-xs-12 text-center">
     	<h1>Testimonials from our proud clients</h1>
     </div>
      <div class="col-xs-12">
       <div class="owl-slider">
       <div>
        <div class="testimonial-box">
          <h5>Ashwin Bondal</h5>
          <small>Sulzer (Switzerland)</small>
          <p class="comment more">I have known Lokesh and Bhavin right from the time they started out on their own.I was impressed by their enterprise and capacity for hard work .This along with the fact that they had a good grasp of the money market and also a sense of commitment to their to their customer ,made me entrust them to manage my investments.Over the years they have proved that my trust was well placed and have grown and developed steadily but surely. Their approach to providing a complete solution to their customers will stand them entrust them to manage my investments.Over the years they have proved that my trust was well placed and have grown and developed steadily but surely .Their approach to providing a complete solution to their customers will stand them in good stead and I am sure that they will continue to evolve and grow in the future as they have done so far.I wish them all success in their endeavor.</p>         
        </div>
      </div>
       <div>
        <div class="testimonial-box">
          <h5>Raj Varma</h5>
          <small>Essar Group</small>
          <p class="comment more">For the last 8-9 years, I have been making all my investments in mutual funds, through I-solutions only. I have no hesitation in saying that I have always received sound advice and guidance and I am completely satisfied with the performance of my investments. The proof of this is that over the years, I have recommended I-solutions to many of my friends/contacts and all of them, without exception, are very happy.
          The personal touch that Bhavin and Lokesh provide, their attitude towards all their clients, big or small, their integrity and promptness in service with the smile are difficult to match.
          On this occasion of  I-solutions achieving, successfully the milestone of 10 years, I wish them all success and prosperity in the future.
            FOR SOLUTIONS TO YOUR INVESTMENT ISSUES, GO TO I-SOLUTIONS.</p>
        </div>
        </div>
        <div>
          <div class="testimonial-box">
          <h5>Sanghrajka's & Jessica</h5>          
          <p class="comment more">A decade ago, it was time for me to take over my dad’s long list of investments as he was retiring, came across I-solutions and was blessed to have always being guided rightly.
          With less of greed, but more to take care of clients needs and satisfaction has always been I-solutions right way of moving further at work.
          Been quite lost with quite a few records, I-solutions services have been par excellence and has been my dad’s financial support system all throughout with their right guidance.
          My best wishes and my parent’s blessings truly for Lokesh & Bhavin.
          May you always grow & grow and let your sincerity, honesty and hardwork pay off every bit.
          This year 2018, we Sanghrajka’s celebrate our 10 peaceful years with I-solutions.</p>
        </div>
        </div>        
       </div> 
       <div class="col-md-12 col-sm-6 col-xs-12 text-center">
         <a href="testimonials.php"><h4 class="custom-btn no-radius">Read All</h4></a>  
       </div>           
      </div>
    </div>
  </div>
</section>

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
          <a href="blog-detail.php?id=<?php echo $new['id']; ?>" class="blog-read">Read More...</a>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
         <a href="blog-details.php"class="custom-btn no-radius">Read All</a>  
      </div> 
    </div>
  </div>
</section>


<!-- end work-us -->
<section class="get-quote transition">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <h1>Get Some Information</h1>
        <form method="post" action="" id="index-form">
          <input type="text" placeholder="Name" id="name" name="name" class="first">
          <input type="text" placeholder="Email" id="email" name="email" class="second">
          <input type="tel" class="custom-input" name="number" id="number" placeholder="Phone Number">
          <textarea id="msg" placeholder="Your message"></textarea><br>
          <button type="submit" name="msg" style="margin-top:10px" id="submit">SEND NOW</button>
        </form>
        <div class="success alert alert-success" role="alert" style="display: none;margin-top: 1%;"></div>
      </div> 
      <div class="col-md-6 col-sm-8 col-xs-12">
        <h2>Locate Us</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.6601952255014!2d72.90802281490122!3d19.078672187086397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x788d71519d1f08c5!2sI-Solutions!5e0!3m2!1sen!2sin!4v1549961859265" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>       
     <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <h2>Nifty Chart</h2>
        <iframe src="https://www.indianotes.com/en/widgets/sensex-nifty-charts/index.php/?type=charts&w=260&h=300" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>-->       
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
<!-- end support-bar -->

<?php include 'footer.php'; ?>
<!-- end footer --> 
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 


<div class="modal fade" id="adModel" role="dialog">
    <div class="modal-dialog" style="position: revert;height: 86%;">
   
      <!-- Modal content-->
      <div class="modal-content" style="background: url(../images/akshay-tritya-banner.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 67vh;
    margin: 3px auto 0;
    position: relative;" >
            <button type="button" class="close" data-dismiss="modal" style="     border: unset;
    color: white;
    opacity: 1;
    font-size: 30px;
    position: fixed;
    right: 20px;">&times;</button>
        
         <a href="https://isolutions.augmont.com/buy"  class="blinking" target="_blank" style="bottom: 22%;
    color: yellow;
    position: fixed;font-size:17px;
    right: 7%;"> Click Here To Buy </a>
       
      
      </div>
      </div>
      
    </div>
  </div>
<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@10.19.0/dist/lazyload.min.js" ></script>
    <script>
      var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
    });
  </script>
<script type="text/javascript">
$(window).load(function() {
	$(".preloader").fadeOut("fast");
	
})
</script> 
<script type="text/javascript">
  $(document).ready(function() {
  var showChar = 200;
  var ellipsestext = "...";
  var moretext = "Read More";
  var lesstext = "Read Less";
  $('.more').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {

      var c = content.substr(0, showChar);
      var h = content.substr(showChar-1, content.length - showChar);

      var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

      $(this).html(html);
    }

  });

  $(".morelink").click(function(){
    if($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
      $(this).addClass("less");
      $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
  });
  
  //$('#adModel').modal('show');
});
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
<script type="text/javascript">
    $(function(){
        $("#submit").click(function(){
            // $("#submit").html('submitting ...');
            $("#submit").prop('disabled', true);
            var name = $("#name").val();
            var email = $("#email").val();
            var number = $("#number").val();
            var msg = $("#msg").val();
            if (name=='' || email=='' || number=='')
            {
                $("#submit").prop('disabled', false);
                $('.success').show();
                $('.success').text("Please fill all the fields");
            }
            else
            {
                $.ajax({
                    type:"post",
                    url:"submit_contact.php",
                    data:{name:name,email:email,number:number,msg:msg},
                    success:function(data){
                        $('.success').show();
                        $('.success').text(data);
                        // $("#submit").html('submit');   
                        $("#submit").prop('disabled', false);                
                        $("#name").val('');
                        $("#email").val('');
                        $("#number").val('');
                        $("#msg").val('');                             
                    }                             

                });                            
            }
            return false;
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

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script type='text/javascript' src='revolution/js/revolution.addon.slicey.min.js?ver=1.0.0'></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> 

</body>
</html>