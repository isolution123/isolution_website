<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Get in touch with  I-Solutions for Job Opportunities in the Wealth Advisory</title>
<meta name="author" content="">
<meta name="description" content="I-Solutions has a supportive team to guide you through the wealth management. Below are some of the most rewarding & well-paying jobs in wealth advisory.">
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
        <h3>Careers<span>.</span></h3>
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
          <li class="active">Careers</li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end breadcrumb-bar -->

<section class="career new-section-padding">
  <div class="container">
    <div class="row">
<!--      <div class="col-xs-12 text-center" id="career-form">
      <h2>Easy to Apply for Job Positions</h2>
     </div> -->
    <div class="col-xs-12 col-md-6"  id="career-form">
      <h2 class="text-center">Apply for Job Positions</h2>
      <form class="resume-form" method="post" action="careers_process.php" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Your name</label>
                    <input type="text" name="name" id="name">
                </div>
              <div class="form-group">
                  <label>Your e-mail</label>
                    <input type="email" class="custom-input" name="email" id="email" style="width: 300px;max-width: 100%;">
                </div>
                <div class="form-group">
                  <label>Your number</label>
                    <input type="tel" name="number" id="number" class="custom-input" style="width: 300px;height: 46px;max-width: 100%;" maxlength="10">
                </div>                
                <div class="form-group">
                  <label>Select Position</label>
                   <select class="custom-input" name="job" id="job"  style="width: 300px;max-width: 100%;background: #fff;">
                      <option value="Back office Executive">Back office Executive</option>
                      <option value="Sales Executive">Sales Executive</option>
                      <option value="Equity Research Analyst">Equity Research Analyst</option>
                      <option value="Branch Manager">Branch Manager</option>
                    </select>
                </div>
              <div class="form-group">
                  <label>Your Resume (DOCX - PDF)</label>
                    <input type="file" name="cv" id="cv" required>
                </div>
                <input type="hidden" name="subject" id="subject" value="New Job Application">
                <div class="form-group">
                  <label>Your message</label>
                    <textarea name="msg" id="msg"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" id="submit">APPLY NOW</button>
                </div>
            </form>
            <div class="success alert alert-success" role="alert" style="display: none;"></div>
    </div>
     <div class="col-xs-12 col-md-6">
      <h2 class="text-center">Current Openings</h2>
      <ul class="position-list">
            <li>
              <h4 class="career-h4">Back office Executive (Job ID : E01)</h4>
                <span class="jd" id="back-office">View Job Description</span>
                <!-- <a href="#">APPLY</a> -->
            </li>            
            <li>
              <h4 class="career-h4">Sales Executive (Job ID : S01)</h4>
                <span class="jd" id="sales">View Job Description</span>
                <!-- <a href="#">APPLY</a> -->
            </li>
            <li>
              <h4 class="career-h4">Equity Research Analyst (Job ID : R01)</h4>
                <span class="jd" id="analyst">View Job Description</span>
                <!-- <a href="#">APPLY</a> -->
            </li>
            <li>
              <h4 class="career-h4">Branch Manager (Job ID : M01)</h4>
                <span class="jd" id="bm">View Job Description</span>
                <!-- <a href="#">APPLY</a> -->
            </li>
        </ul>
     </div>
    </div>
  </div>
</section>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">  
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Back office Executive (No.of position-2)</h4>
        </div>
        <div class="modal-body">
          <h3>Job Description</h3>
          <ul>
            <li>Resolving Customers queries, requests and complains received through various mediums, viz.,tele-calls, e-mails, enquiries.</li>
            <li>Co-ordination with other department to resolve queries</li>
            <li>Maintaining the necessary TAT and Quality Standards while resolving query></li>
          </ul>
          <h3>Preferred Skills</h3>
          <ul>
           <li>Interpersonal Skills</li>
           <li>Energetic and initiative taking attitude.</li>
           <li>Customer oriented</li>
           <li>Detail conscious</li>
           <li>Resilient and stress tolerant</li>
           <li>Integrity </li>
           <li>Good Negotiation Skills</li>
           <li>Presentable with good listening, oral and written communication skills</li>
          </ul>
          <p><b>Education:</b> Any Graduate</p>
          <p><b>Experience Required:</b> Minimum 1 Years relevant experience.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">  
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Sales Executive (No.of position-5)</h4>
        </div>
        <div class="modal-body">
          <h3>Job Description</h3>
          <ul>
           <li>Acquiring New Clients for Sales of Financial Products.</li>
           <li>Generating revenue through Sales of distribution products such as Mutual Funds, FD, and Insurance.</li>
           <li>Carrying out Personal Lead generation and prospecting activities.</li>
           <li>Building Strong referral base from existing customers.</li>
           <li>Exploring New Areas and ways to achieve productivity.</li>
          </ul>

          <h3>Preferred Skills</h3>
          <ul>
           <li>Must have a flair for Sales.</li>
           <li>Energetic and initiative taking attitude.</li>
           <li>Customer oriented</li>
           <li>Market Awareness.</li>
           <li>Resilient and stress tolerant</li>
           <li>Adaptable to Change</li>
           <li>Good Negotiation Skills</li>
           <li>Presentable and good communication skills.</li>

          </ul>
          <p><b>Education:</b> Any Graduate</p>
          <p><b>Experience Required:</b> Minimum 1 Years relevant experience.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 

   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">  
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Equity Research Analyst (No.of position-2)</h4>
        </div>
        <div class="modal-body">
          <h3>Job Description</h3>
          <ul>
            <li> Analysts will be expected to prepare and deliver industry and sector research in their areas of specializations. </li>
            <li>Primary and secondary analysis of the industry and companies</li>
            <li>Financial statement analysis for companies </li>
            <li>Writing reports on allotted companies</li>
            <li>Financial forecasting and modelling of company financials balance sheets</li>
            <li>Participate in analyst meets organized by companies</li>

          </ul>

          <h3>Preferred Skills</h3>
          <ul>
            <li>Good analytical ability to take calculated risks and decisions</li>
            <li>Energetic and initiative taking attitude.</li>
            <li>Customer oriented</li>
            <li>Detail conscious</li>
            <li>Resilient and stress tolerant</li>
            <li>Integrity </li>
            <li>Good Negotiation Skills</li>
            <li>Presentable with good listening, oral and written communication skills</li>


          </ul>
          <p><b>Education:</b> CA/MBA from Tier- I College/CFA</p>
          <p><b>Experience Required:</b> Minimum 1 Years relevant experience.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
   </div> 

   <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">  
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Branch Manager (No.of position-1)</h4>
        </div>
        <div class="modal-body">
          <h3>Job Description</h3>
          <ul>
            <li>Direct all operational aspects including distribution operations, human resources and sales</li>
            <li>Locate areas of improvement and propose corrective actions that meet challenges and leverage growth opportunities</li>
            <li>Adhere to high ethical standards, and comply with all regulations/applicable laws</li>
            <li>Develop forecasts, financial objectives and business plans</li>
            <li>Network to improve the presence and reputation of the company</li>


          </ul>

          <h3>Preferred Skills</h3>
          <ul>
            <li>Excellent Organizational Skills</li>
            <li>Energetic and initiative taking attitude.</li>
            <li>Results Driven and Customer Focused</li>
            <li>Leadership and Human Resources Management Skills</li>
            <li>Resilient and stress tolerant</li>
            <li>Integrity </li>
            <li>Good Negotiation Skills</li>
            <li>Presentable with good listening, oral and written communication skills</li>



          </ul>
          <p><b>Education:</b> Any Graduate</p>
          <p><b>Experience Required:</b> Minimum 1 Years relevant experience.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
   </div>     



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
<script type="text/javascript">

       function mylinkfunction(e) {

       window.location.href="#career-form";

       /* need to stop the form sending of the form

        UPDATE as comment: This may not be exactly correct syntax 
        for stopping a form , look up preventing form submission */

       // e.preventDefault();
       // e.stopPropagation(); 

       }

     </script>
     <script type="text/javascript">
       $(document).ready(function()
       {
          $("#back-office").click(function()
          {
            $('#myModal').modal('show');
          });

          $("#sales").click(function()
          {
            $('#myModal1').modal('show');
          });

          $("#analyst").click(function()
          {
            $('#myModal2').modal('show');
          }); 

          $("#bm").click(function()
          {
            $('#myModal3').modal('show');
          });                              
       });
     </script>
<script type="text/javascript">
    $(function(){
        
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