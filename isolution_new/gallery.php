
<?php 

$news=array();
$info=array();
  require_once("admin/config.php");  

  $sql="SELECT * FROM gallery_data order by gallery_order";  
  $res=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($res)) 
  {
    $info[]=$row;
  }

  $news=$info;
  
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Best Photos Collections of Function and Award & Many More| I-Solutions</title>
<meta name="author" content="">
<meta name="description" content="Here we uploaded the latest Photo of celebrations, event, functions, awards and many more by I-solutions.">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<style>
  /*----  Main Style  ----*/
  .card-container {
    display: inline;
    flex-wrap: wrap;
    justify-content: space-between;

}

.col-xs-12.col-sm-6.col-md-3.col-lg-3 {
    flex: 1;
    margin-bottom: 20px; /* Add margin between cards if desired */
}
#cards_landscape_wrap-2{
  text-align: center;
/*  background: #F7F7F7;*/
}
#cards_landscape_wrap-2 .container{
  padding-top: 80px; 
  padding-bottom: 100px;
}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box{
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
/*  inline-size: 150px;*/
/*  overflow-wrap: break-word;*/
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 25px 5px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  margin-top: 50px;
  
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  /*margin-top: 10px;
  margin-bottom: 0px;*/
  padding-bottom: 0px; 
  font-size: 14px;
/*  letter-spacing: 0.5px;*/
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6{
  margin-top: 0px;
  margin-bottom: 4px; 
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: 'Roboto Black', sans-serif;
/*  letter-spacing: 1px;*/
  color: #00acc1;
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
.p_format
{
/*  white-space: nowrap!important;*/
  word-spacing: -2px!important;
      word-wrap: break-word;
    overflow-wrap: break-word;


}
.card-flyer {
 height:285px!important;
}



 .p-format .hidden-text {
    display: none;
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
  <div class="table">
    <div class="table-cell">
      <div class="container">
        <h3>Gallery<span>.</span></h3>
      </div>
    </div>
  </div>
</header>
<section class="breadcrumb-bar">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Gallery</li>
        </ul>
      </div> 
    </div>
  </div>
</section>

<section class="gallery transition new-section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Gallery</h2>
      </div>


<!-- 
       <div id="cards_landscape_wrap-2">
  <div class="card-container">
    <div class="row">
      <?php foreach ($news as $row_data) { ?>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <a href="#">
          <div class="card-flyer">
            <div class="row">
              <div class="col-md-6">
                <div class="image-box">
                  <a href="images/gallery/2.jpeg" data-fancybox="images">
                    <img src="admin/<?php echo $row_data['gallery_img'] ?>" alt="Image">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="text-box">
                  <p class="p_format" style="text-align: center;"><?php echo $row_data['gallery_name']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
 -->
      <!-- New cards -->
           <div id="cards_landscape_wrap-2">
  <div class="card-container">
    <div class="row">
      <?php foreach ($news as $row_data) { ?>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <a href="#">
          <div class="card-flyer">
            <div class="text-box">
              <div class="image-box">
                <a href="admin/<?php echo $row_data['gallery_img'] ?>" data-fancybox="images">
                  <img src="admin/<?php echo $row_data['gallery_img'] ?>" alt="Image">
                </a>
              </div>
              <div class="text-container">
                <p class="p-format" data-full-text="<?php echo htmlspecialchars($row_data['gallery_name']); ?>">
                  <span class="half-text"><?php echo substr(htmlspecialchars_decode(strip_tags($row_data['gallery_name'])), 0, strlen($row_data['gallery_name']) / 2); ?></span>
                  <span class="hidden-text"><?php echo htmlspecialchars_decode(strip_tags($row_data['gallery_name'])); ?></span>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>



      <!-- End new card -->



         
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Deepak Parekh (Chairman HDFC Ltd.) & Mr. Suresh Badami (ED HDFC Life)</p>
            </div>
              <a href="images/gallery/2.jpeg" data-fancybox="images">
                  <img src="images/gallery/2.jpeg" alt="" class="img-responsive" />
              </a>              
          </div>     -->
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>10 Year Decade of Excellency Celebration </p>
            </div>
              <a href="images/gallery/5.jpg" data-fancybox="images">
                  <img src="images/gallery/5.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>10 Year Decade of Excellency Celebration</p>
            </div>
              <a href="images/gallery/6.jpg" data-fancybox="images">
                  <img src="images/gallery/6.jpg" alt="" class="img-responsive" />
              </a>              
          </div> -->
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Nilesh Shah (MD Kotak Mutual Fund)</p>
            </div>
              <a href="images/gallery/7.jpeg" data-fancybox="images">
                  <img src="images/gallery/7.jpeg" alt="" class="img-responsive" />
              </a>              
          </div> -->
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Deepak Parekh (Chairman HDFC Ltd.) & Suresh Badami (ED HDFC Life)</p>
            </div>
              <a href="images/gallery/v1.jpg" data-fancybox="images">
                  <img src="images/gallery/v1.jpg" alt="" class="img-responsive" />
              </a>              
          </div> -->
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Neelesh Shurana (CIO Mirae Asset Global Investments)</p>
              </div>
              <a href="images/gallery/10.jpeg" data-fancybox="images">
                  <img src="images/gallery/10.jpeg" alt="" class="img-responsive" />
              </a>              
          </div> -->
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Team at 10 Year Decade of Excellency Celebration</p>
            </div>
              <a href="images/gallery/11.jpg" data-fancybox="images">
                  <img src="images/gallery/11.jpg" alt="" class="img-responsive" />
              </a>              
          </div>           -->
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>National Rank 1 Award by Mr. Amitabh Chaudhry (MD HDFC Life)</p>
            </div>
              <a href="images/gallery/12.jpg" data-fancybox="images">
                  <img src="images/gallery/12.jpg" alt="" class="img-responsive" />
              </a>              
          </div>    -->       
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Haseeb Drabu (Former Finance Minister of Jammu and Kashmir & former Chairman of J & K Bank)</p>
            </div>
              <a href="images/gallery/13.jpg" data-fancybox="images">
                  <img src="images/gallery/13.jpg" alt="" class="img-responsive" />
              </a>             
          </div>      -->     
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>At award function of HDFC Life with Sandeep Deshmukh.</p>
            </div>
              <a href="images/gallery/14.jpg" data-fancybox="images">
                  <img src="images/gallery/14.jpg" alt="" class="img-responsive" />
              </a>              
          </div>    -->       
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>At award function of HDFC Life with Sandeep Deshmukh.</p>
            </div>
              <a href="images/gallery/15.jpg" data-fancybox="images">
                  <img src="images/gallery/15.jpg" alt="" class="img-responsive" />
              </a>              
          </div>         -->  
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Boman Irani</p>
            </div>
              <a href="images/gallery/16.jpg" data-fancybox="images">
                  <img src="images/gallery/16.jpg" alt="" class="img-responsive" />
              </a>              
          </div>     -->      
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>At panel of bidding ceremony of Royal Rajasthan Club</p>
            </div>
              <a href="images/gallery/17.jpg" data-fancybox="images">
                  <img src="images/gallery/17.jpg" alt="" class="img-responsive" />
              </a>              
          </div>     -->      
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Sharing stage with Shaina NC (Treasurer of the BJP Maharashtra)</p>
            </div>
              <a href="images/gallery/18.jpg" data-fancybox="images">
                  <img src="images/gallery/18.jpg" alt="" class="img-responsive" />
              </a>              
          </div>        -->   
       <!--    <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>At panel of bidding ceremony of Royal Rajasthan Club</p>
            </div>
              <a href="images/gallery/19.jpg" data-fancybox="images">
                  <img src="images/gallery/19.jpg" alt="" class="img-responsive" />
              </a>              
          </div>     -->      
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Nikhil Gandhi (Founder of Pipavav Defense & Chairman of SKIL Infrastructure Limited)</p>
            </div>
              <a href="images/gallery/20.jpg" data-fancybox="images">
                  <img src="images/gallery/20.jpg" alt="" class="img-responsive" />
              </a>              
          </div>   -->        
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Investors Education Program @ Raymond Ltd.</p>
            </div>
              <a href="images/gallery/21.jpg" data-fancybox="images">
                  <img src="images/gallery/21.jpg" alt="" class="img-responsive" />
              </a>              
          </div>    -->       
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Prithviraj Kothari ( Bullion King & promoter of RiddiSiddhi Bullion Ltd)</p>
            </div>
              <a href="images/gallery/22.jpg" data-fancybox="images">
                  <img src="images/gallery/22.jpg" alt="" class="img-responsive" />
              </a>              
          </div>          --> 
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Co-Branded product launch with Bombay Bullion Ltd)</p>
            </div>
              <a href="images/gallery/23.jpg" data-fancybox="images">
                  <img src="images/gallery/23.jpg" alt="" class="img-responsive" />
              </a>              
          </div>        -->    
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Co-Branded product launch with Bombay Bullion Ltd)</p>
            </div>
              <a href="images/gallery/24.jpg" data-fancybox="images">
                  <img src="images/gallery/24.jpg" alt="" class="img-responsive" />
              </a>              
          </div>     -->      
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Sharing stage with Ujjwal Nikam (Indian Special Public Prosecutor) & Rikab Mehta President Bombay Metal Exchange Ltd) </p>
            </div>
              <a href="images/gallery/25.jpg" data-fancybox="images">
                  <img src="images/gallery/25.jpg" alt="" class="img-responsive" />
              </a>
          </div>           -->
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Mohit Kamboj (Former Vice President of BJP Mumbai & National President of IBJA)</p>
            </div>
              <a href="images/gallery/26.jpg" data-fancybox="images">
                  <img src="images/gallery/26.jpg" alt="" class="img-responsive" />
              </a>
          </div>  -->
       <!--    <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Ms.Vibha Padalkar (MD & CEO HDFC Life)</p>
            </div>
              <a href="images/gallery/v12.jpeg" data-fancybox="images">
                  <img src="images/gallery/v12.jpeg" alt="" class="img-responsive" />
              </a>              
          </div> -->
          
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Tarun Chugh (MD & CEO Bajaj Allianz )</p>
            </div>
              <a href="images/gallery/v8.jpeg" data-fancybox="images">
                  <img src="images/gallery/v8.jpeg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Ashank D. Desai <br>(Founder Mastek Limited )</p>
            </div>
              <a href="images/gallery/v9.jpeg" data-fancybox="images">
                  <img src="images/gallery/v9.jpeg" alt="" class="img-responsive" />
              </a>              
          </div>     -->      
       <!--    <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Personal wishes from Mr Deepak Parekh <br> ( Chairman HDFC Ltd. )</p>
            </div>
              <a href="images/gallery/v3.jpeg" data-fancybox="images">
                  <img src="images/gallery/v3.jpeg" alt="" class="img-responsive" />
              </a>              
          </div>       -->    
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Amitabh Chaudhry ( CEO & MD of Axis Bank )</p>
            </div>
              <a href="images/gallery/v13.jpg" data-fancybox="images">
                  <img src="images/gallery/v13.jpg" alt="" class="img-responsive" />
              </a>              
          </div>     -->      
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Aditya Thackeray (President of Yuva Sena, a youth wing of Shiv Sena)</p>
            </div>
              <a href="images/gallery/v14.jpg" data-fancybox="images">
                  <img src="images/gallery/v14.jpg" alt="" class="img-responsive" />
              </a>              
          </div>   -->        
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>At Youth Club Sanchore.</p>
            </div>
              <a href="images/gallery/v15.jpg" data-fancybox="images">
                  <img src="images/gallery/v15.jpg" alt="" class="img-responsive" />
              </a>              
          </div>   -->        
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Rameez Raja (Cricketer)</p>
            </div>
              <a href="images/gallery/v16.jpg" data-fancybox="images">
                  <img src="images/gallery/v16.jpg" alt="" class="img-responsive" />
              </a>              
          </div>    -->       
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Recognized as Best Adviser by IBJA</p>
            </div>
              <a href="images/gallery/v17.jpg" data-fancybox="images">
                  <img src="images/gallery/v17.jpg" alt="" class="img-responsive" />
              </a>              
          </div> -->
     <!--      <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>3rd Asia Trusted Life Agent & Advisor Of The Year 2018</p>
            </div>
              <a href="images/gallery/v18.jpg" data-fancybox="images">
                  <img src="images/gallery/v18.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
         <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Prashant Jain’s ( CIO HDFC AMC ) Pre Election 2019 Discussion  exclusively For I Solutions Privilege Clients</p>
            </div>
              <a href="images/gallery/v19.jpeg" data-fancybox="images">
                  <img src="images/gallery/v19.jpeg" alt="" class="img-responsive" />
              </a>              
          
            </div>  -->
    <!--    <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>With K V Abdul Nazar ( CMD. Akbar Travels Online India,UK & UAE)</p>
            </div>
              <a href="images/gallery/v20.jpeg" data-fancybox="images">
                  <img src="images/gallery/v20.jpeg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
    
   <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>With Swarup Mohanty, CEO, Mirae Asset Global,</p>
            </div>
              <a href="images/gallery/mirai.jpg" data-fancybox="images">
                  <img src="images/gallery/mirai.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
         <!--  <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>With Sampath Reddy, CIO, Bajaj Allianz</p>
            </div>
              <a href="images/gallery/CIO_bajaj_allianz.jpg" data-fancybox="images">
                  <img src="images/gallery/CIO_bajaj_allianz.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Jagat Shah,Biddle Sawyer Ltd.</p>
            </div>
              <a href="images/gallery/Biddle_Sawyer_ltd.jpg" data-fancybox="images">
                  <img src="images/gallery/Biddle_Sawyer_ltd.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
       <!--    <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Mr. Lalit Chaddha (VAL Organic)</p>
            </div>
              <a href="images/gallery/lalit.jpg" data-fancybox="images">
                  <img src="images/gallery/lalit.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
         <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Journey to excellency</p>
            </div>
              <a href="images/gallery/isolutions.jpg" data-fancybox="images">
                  <img src="images/gallery/isolutions.jpg" alt="" class="img-responsive" />
              </a>              
          </div>  -->
      <!--     <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>With Sanjiv Bajaj (Chairman of Bajaj Group)</p>
            </div>
              <a href="images/gallery/With Sanjiv Bajaj Chairman of Bajaj Group.jpg?1=1" data-fancybox="images">
                  <img src="images/gallery/With Sanjiv Bajaj Chairman of Bajaj Group.jpg?1=1" alt="" class="img-responsive" />
              </a>              
          </div>  -->
           <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>With Mr. Samir Arora ( Founder Helios Capital & Ex Alliance Capital )</p>
            </div>
              <a href="images/gallery/With Mr. Samir Arora.jpg?1=2" data-fancybox="images">
                  <img src="images/gallery/With Mr. Samir Arora.jpg?1=2" alt="" class="img-responsive" />
              </a>              
          </div>  -->
        <!--   <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>With Radhika Gupta CEO Edelweiss MF</p>
            </div>
              <a href="images/gallery/With Radhika Gupta CEO Edelweiss MF.jpg?1=2" data-fancybox="images">
                  <img src="images/gallery/With Radhika Gupta CEO Edelweiss MF.jpg?1=2" alt="" class="img-responsive" />
              </a>              
          </div>  -->
          <!-- <div class='col-sm-6 col-xs-6 col-md-4 col-lg-4 portrait-crop'>
            <div class="col-md-12 col-xs-12 pc">
              <p>Samir Rachh - Fund Manager at Nippon India Mutual Fund</p>
            </div>
              <a href="images/gallery/Samir Rachh.jpeg?v=1" data-fancybox="images">
                  <img src="images/gallery/Samir Rachh.jpeg?v=1" alt="" class="img-responsive" />
              </a>              
          </div>  -->
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
<?php include 'footer.php'; ?>
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 
<script src="js/jquery.min.js"></script> 
<script type="text/javascript">
$(window).load(function() {
    $(".preloader").fadeOut("fast");
})
</script> 
<script>
  $(document).ready(function() {
    $(".p-format").hover(function() {
      if (!$(this).hasClass("hovered")) {
        $(this).addClass("hovered");
        $(this).find(".half-text").hide();
        $(this).find(".hidden-text").show();
      }
    }, function() {
      $(this).removeClass("hovered");
      $(this).find(".half-text").show();
      $(this).find(".hidden-text").hide();
    });
  });
</script>
<script type="text/javascript">
    $().fancybox({
      selector : '[data-fancybox="images"]',
      loop     : true
    });

    $('[data-fancybox="images"]').fancybox({
      protect    : true,      
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