<?php 

// IF(isset($_SESSION['admintimeout']))
// {
//   $inactive = 3000; 
//   $session_life = time() - $_SESSION['admintimeout'];
//   if($session_life > $inactive)
//   { 
//     session_destroy(); 
//     unset($_SESSION[$SessName]);
//     header("Location: index.php");   
//   }
//   $_SESSION['admintimeout']=time();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Isolutions </title>
  <!-- CSS Files -->
  <link href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="assets/plugins/jquery-confirm/dist/jquery-confirm.min.css">
  <link href="assets/css/custom.css" rel="stylesheet">
  <!-- JS Files -->
  <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/plugins/validator/dist/jquery.validate.js"></script>
  <script src="assets/plugins/toastr/toastr.js"></script>
  <script src="assets/plugins/blockui-master/jquery.blockUI.js"></script>
  <script src="assets/plugins/jquery-confirm/dist/jquery-confirm.min.js"></script>
  <?php if($page != 'login') : ?>
    <!-- CSS Files -->
    <link href="assets/plugins/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
    <!-- JS Files -->
    <script src="assets/plugins/fastclick/lib/fastclick.js"></script>
    <script src="assets/plugins/nprogress/nprogress.js"></script>
    <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="assets/js/flot/date.js"></script>
    <script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/plugins/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="assets/js/moment/moment.min.js"></script>
    <script src="assets/js/datepicker/daterangepicker.js"></script>
    <script type="text/javascript">
      function Logout() 
      {
        var data ={};
         $.ajax({
          url: 'Serv/AdminLogout.php',
          data: data,
          processData: false,
          contentType: false,
          async : true,  
          type: 'GET',
          success:function(result,status)
          {
            var success=result['success'];
            var msg=result['msg'];
            if (parseInt(success))
            {
              toastr.success(msg); 
              setTimeout(function() 
              {              
                window.location="index.php";
              },1000);     
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149997052-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149997052-1');
</script>

  <?php endif ?>
</head>
<?php if($page != 'login') : ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo getPageUrl('newslist') ?>" class="site_title">
                <i class="fa fa-paw"></i> <span>Isolutions</span>
              </a>
            </div>
            <div class="clearfix"></div>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  
                  <li>
                    <a href="<?php echo getPageUrl('newslist') ?>">
                      <i class="fa fa-user"></i> News List
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo getPageUrl('newscomment') ?>">
                      <i class="fa fa-user"></i> News Comment
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo getPageUrl('team_info') ?>">
                      <i class="fa fa-user"></i> Team Info
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo getPageUrl('gallery_info') ?>">
                      <i class="fa fa-user"></i> Gallery
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>  
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $User_Info[1]; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="javascript:Logout();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      <?php endif ?>