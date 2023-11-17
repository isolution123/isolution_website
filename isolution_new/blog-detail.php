<?php 

    $news=array();
    $newscomment=array();
    require_once("admin/config.php");  
    $id=$_GET['id'];
    if (is_numeric($id)) {
    $sql="SELECT * FROM news where  id='".$id."'";  
    $res=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($res)) 
    {
        $row['description']= str_replace('src="uploads', 'src="admin/uploads', $row['description']);
        $news=$row;
    }
  
    $sql="SELECT * FROM news_comment where  news_id='".$id."' order by created_at desc";  
    $res=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($res)) 
    {
        $newscomment[]=$row;
    }
    $iserror=0;
}
else
{
    $iserror=1;
    
}
    
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Keep Updated & Our Wealth Management Blogs</title>
<meta name="author" content="">
<meta name="description" content="Finding well researched Wealth advisory information & article is a bit tough. Here at I-solution's blog section, We are sharing invest is planning, financial advisory tips and trick. Keep Reading!">
<meta name="keywords" content="">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="<?php echo  $news['short_description'] ?>">
<meta property="og:image" content="https://isolutionsadvisor.com/images/company_logo1.png">
<meta property="og:site_name" content="<?php echo  $news['title'] ?>">
<meta property="og:title" content="<?php echo  $news['title'] ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@I - Solutions">
<meta name="twitter:creator" content="@I - Solutions">
<meta name="twitter:title" content="I - Solutions">
<meta name="twitter:description" content="description">
<meta name="twitter:image" content="https://isolutionsadvisor.com/images/company_logo1.png">

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

<link href="css/rating.css" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" href="admin/assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="admin/assets/plugins/jquery-confirm/dist/jquery-confirm.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style type="text/css"> 

    .overall-rating{font-size: 14px;margin-top: 5px;color: #8e8d8d;} 

</style>
<style>
.w-48 {
    width: 48px !important;
    height: 48px !important
}

.avatar {
    position: relative;
    line-height: 1;
    border-radius: 500px;
    white-space: nowrap;
    font-weight: 700;
    border-radius: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 500px;
    box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
}

.avatar img {
    border-radius: inherit;
    width: 100%
}


.gd-primary {
    color: #fff;
    border: none;
    background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
}

.gd-success {
    color: #fff;
    border: none;
    background: #31c971 linear-gradient(45deg, #31c971, #3dc931)
}

.gd-info {
    color: #fff;
    border: none;
    background: #14bae4 linear-gradient(45deg, #14bae4, #14e4a6)
}

.gd-warning {
    color: #fff;
    border: none;
    background: #f4c414 linear-gradient(45deg, #f4c414, #f45414)
}
.fa {
  font-size: 15px;
}

.checked {
  color: orange;
}
input[type="text"]
{
    height:34px;
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
.whatsappicon {
  display:none;
}

@media only screen and (max-width: 600px) {
  .whatsappicon {
     display: inline;
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
          <li><a href="blog-details.php">All Blogs</a></li>
          <!-- <li><a href="our-expertise.php">Milestones</a></li> -->
          <li class="active">Blog Detail</li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end breadcrumb-bar -->

<section class="blog new-section-padding">
  <div class="container">
      <?php if ($iserror==0) { ?>
    <div class="row">
      <div class="col-xs-12 text-center">
      <h2><?php echo  $news['title'] ?></h2>
      </div>
       
      
     </div>
     <!-- end col-12 -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="post">
          <!-- <figure class="post-image"> <img src="images/hero1.jpg" alt="Image"> </figure> -->
          <!-- end post-image -->
          <div class="post-content">
            <div class="post-metas">
            </div>
            <div >
              <?php echo $news['description']; ?>
            </div>
          </div>
          <!-- end post-content --> 
        </div>
      </div>
      <!-- end col-8 -->
      
      <div class="col-md-12 col-sm-12 col-xs-12" >
            <div class="col-md-6" style="padding:13px">
                <br/ >
                <span style="float: left;padding: 3px;font-weight: 600;font-size: 20p;"> User Rating:</span>
                <input name="rating" value="0" id="rating_star" type="hidden" postID="<?php echo $news['id']; ?>" />

            </div>
            <div class="col-md-6" >
                <br/ >
                Share With : 
                <a class="whatsappicon" href="whatsapp://send?text=https://www.isolutionsadvisor.com/blog-detail.php?id=<?php echo $id;?>" data-action="share/whatsapp/share" data-toggle="tooltip" title="Share To Whatsapp"><img src="images/whatsapp.png" width="35px"/></a></a>
                
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.isolutionsadvisor.com/blog-detail.php?id=<?php echo $id;?>" target="_blank" data-toggle="tooltip" title="Share To Facebook"><img src="images/f3.jpg" width="39px" /></a></li>
                <a href="https://twitter.com/intent/tweet?url=https://www.isolutionsadvisor.com/blog-detail.php?id=<?php echo $id;?>" target="_blank" data-toggle="tooltip" title="Share To Twitter"><img src="images/t1.png" width="40px"/></a></li>
      
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.isolutionsadvisor.com/blog-detail.php?id=<?php echo $id;?>" target="_blank" data-toggle="tooltip" title="Share To LinkedIn"><img src="images/l4.png" width="39px"/></a></li>
      
                
      
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <br/><hr/>
            </div>
        <div class="col-md-12 col-sm-12 col-xs-12" id ="comments">
            
          </div>
          <?php } else
          { ?>
              <div class="row">
      <div class="col-xs-12 text-center">
      <h2>Invalid request!</h2>
      </div>
       
      
     </div>
           
          <?php } ?>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="float: left;
    font-size: 18px;
    font-weight: bolder;">Give Review:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" id="txtFullName">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email Address:</label>
            <input type="text" class="form-control" id="txtEmailAddress">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Comment:</label>
            <textarea class="form-control" id="txtComment"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="SubmitComment()" class="btn btn-primary">Submit</button>
      </div>
    </div>
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
<script src="admin/assets/plugins/toastr/toastr.js"></script>
<script src="admin/assets/plugins/blockui-master/jquery.blockUI.js"></script>
<script type="text/javascript" src="js/rating.js"></script> 

<script language="javascript" type="text/javascript"> 

$(function() { 
    var js_array =<?php echo json_encode($newscomment); ?>;
    BindComment(js_array);
    $("#rating_star").spaceo_rating_widget({ 

        starLength: '5', 

        initialValue: '', 

        callbackFunctionName: 'processRating', 

        imageDirectory: 'img/', 

        inputAttr: 'post_id' 

    }); 

}); 
function BindComment(arr)
{
    var strhtml='';
    for(var i=0;i<arr.length;i++)
    {
        
         var d = new Date(arr[i].created_at);
  var month = d.getMonth()+1;
  var day = d.getDate();

  var output = (day<10 ? '0' : '') + day + "-" 
              + (month<10 ? '0' : '') + month + '-'
              + d.getFullYear();
        strhtml+='<div class="col-md-6 col-sm-6 col-xs-12">'+
          '<span class="w-48 avatar gd-warning" style="float:left;margin-top: 8px;">'+arr[i].name.substring(0,1)+'</span>'+
        '<div class="solution-box blog-section" style="float:left;padding: 0px 0px 0px 15px;    width: 78%;">'+
        '<h4>'+ arr[i].name+'</h4>';
        
        for(var  j=0;j<arr[i].rating;j++)
        {
        strhtml+='<span class="fa fa-star checked"></span>';
        }
        for(var  j=arr[i].rating;j<5;j++)
        {
        strhtml+='<span class="fa fa-star "></span>';
        }
          strhtml+='<p>'+arr[i].comment+'</p>'+
          '<p style="color: #c5c5c5;font-size:10px">'+
            'Comment Added On: '+ output+'</p>'+
        '</div>'+
      '</div>';
    }
    $('#comments').html(strhtml);
}
function processRating(val, attrVal){
    var post_id=$('#rating_star').attr('postID');
    $('#myModal').modal('show');
    
    


} 
function SubmitComment()
{
     $.blockUI({ message: '<img width="50px" src="admin/ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
    var post_id=$('#rating_star').attr('postID');
    var rate=$('#rating_star').val();
    var name=$('#txtFullName').val();
    var email=$('#txtEmailAddress').val();
    var comment=$('#txtComment').val();
    $.ajax({ 

        type: 'POST', 

        url: 'rating.php', 

        data: 'post_id='+post_id+'&rate='+rate+'&name='+name+'&email='+email+'&comment='+comment, 

        dataType: 'json', 

        success:function(result,status){
         var success=result['success'];
          var msg=result['msg'];
          if (parseInt(success))
          {
            toastr.success(msg);
            BindComment(JSON.parse(result['data']));
            $('#txtFullName').val('');
            $('#txtEmailAddress').val('');
            $('#txtComment').val('');
            $('#myModal').modal('hide');
            
            $.unblockUI();
          }
          else
          {
              toastr.error(msg);
            } 
        $.unblockUI();     
        }
    });     
}

</script> 
</body>
</html>