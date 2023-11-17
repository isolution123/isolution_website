<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetDashboard.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$data=(array)$r['info'];
$Registered_User=$data['Registered_User'];
$Registered_Companies=$data['Registered_Companies'];
$ExpiredLicence=$data['ExpiredLicence'];
$UpcomintRenewal=$data['UpcomintRenewal'];
?>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-caret-square-o-right"></i>
          </div>
          <div class="count"><?php echo $Registered_User; ?></div>
          <h3>Registered Users</h3>
          <p><a href="<?php echo getPageUrl('listCustomer') ?>">Read More</a></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-comments-o"></i>
          </div>
          <div class="count"><?php echo $Registered_Companies; ?></div>
          <h3>Registered Companies</h3>
          <p><a href="<?php echo getPageUrl('listCompany') ?>">Read More</a></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-check-square-o"></i>
          </div>
          <div class="count"><?php echo $UpcomintRenewal; ?></div>
          <h3>Renewals Due</h3>
          <p><a href="<?php echo getPageUrl('Renewals') ?>">Read More</a></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-sort-amount-desc"></i>
          </div>
          <div class="count"><?php echo $ExpiredLicence; ?></div>
          <h3>License Expired</h3>
          <p><a href="<?php echo getPageUrl('LicenceExpired') ?>">Read More</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
