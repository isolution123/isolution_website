<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetExpiredCompaniesList.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$LicenceExpired=(array)$r['info'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetUpcomingRenewalsList.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$UpcomingRenewal=(array)$r['info'];
?>
<div class="right_col" role="main">
  <br />
  <div class="x_panel">
    <div class="x_title">
      <h2>Upcoming Renewals</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="UpcomingRenewal-List" class="table table-striped table-bordered">
        <thead>
          <tr>
              <th width="5%">Sr. No</th>
            <th  width="12%">Company Name</th>
            <th  width="12%">Contact Person</th>
            <th  width="12%">Email ID</th>
            <th  width="10%">Subscription End Date</th>
            <th  width="10%">No of Users</th>
            <th  width="10%">Subscription Type</th>
            <th  width="12%">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; ?>
          <?php foreach ($UpcomingRenewal as $Renewal) : $Renewal=(array)$Renewal;$i++; ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $Renewal['Comp_Name']; ?></td>
              <td><?php echo $Renewal['Comp_ContactPerson']; ?></td>
              <td><?php echo $Renewal['Comp_EmailId']; ?></td>
              <td style="text-align:center"><span class="btn btn-round btn-info btn-xs"><?php echo $Renewal['SubEndDate']; ?></span></td>
              <td><?php echo $Renewal['Users']; ?></td>
              <td><?php echo $Renewal['SubscriptionTime']; ?></td>
              <td>
                <button class="btn btn-info btn-sm" onclick="SendRenewalsNotification(<?php echo $Renewal['Comp_Id']; ?>)">
                  <i class="fa fa-envelope"></i>
                </button>
                 <a href="index.php?page=EditCompany&compid=<?php echo $Renewal['Comp_Id']; ?>&Flag=1" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i>Renew</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="x_panel">
    <div class="x_title">
      <h2>Licence Expired</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="ExpiredComp-List" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">Sr. No</th>
            <th  width="12%">Company Name</th>
            <th  width="12%">Contact Person</th>
            <th  width="12%">Email ID</th>
            <th  width="10%">Subscription End Date</th>
            <th  width="10%">No of Users</th>
            <th  width="10%">Subscription Type</th>
            <th  width="12%">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; ?>
          <?php foreach ($LicenceExpired as $Licence) : $Licence=(array)$Licence;$i++; ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $Licence['Comp_Name']; ?></td>
              <td><?php echo $Licence['Comp_ContactPerson']; ?></td>
              <td><?php echo $Licence['Comp_EmailId']; ?></td>
              <td style="text-align:center"><span class="btn btn-round btn-warning btn-xs"><?php echo $Licence['SubEndDate']; ?></span></td>
              <td><?php echo $Licence['Users']; ?></td>
              <td><?php echo $Licence['SubscriptionTime']; ?></td>
              <td>
                <button class="btn btn-info btn-sm"  onclick="SendExpiredNotification(<?php echo $Licence['Comp_Id']; ?>)">
                  <i class="fa fa-envelope"></i>
                </button>
                  <a href="index.php?page=EditCompany&compid=<?php echo $Licence['Comp_Id']; ?>&Flag=1" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i>Renew</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  var table = $('#UpcomingRenewal-List').DataTable(
  {
    fixedHeader: true,
    bJQueryUI: true,
    "language": {
        "emptyTable":     "No Upcoming Renewals"
    },
     "sEmptyTable":"No Upcoming Renewals",
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
  });
  var table = $('#ExpiredComp-List').DataTable(
  {
    fixedHeader: true,
    bJQueryUI: true,
    "language": {
        "emptyTable":     "No Expired Licence"
    },
    "pagingType": "full_numbers",
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
  });
  function SendRenewalsNotification(Comp_Id) 
  {
    $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
    var data = new FormData();
    data.append("Comp_ID",Comp_Id);
    $.ajax({
      url: '../Serv/SendRenewalsNotification.php',
      data: data,
      processData: false,
      contentType: false,
      async : true,  
      type: 'POST',
      success:function(result,status)
      {
        var success=result['success'];
        var msg=result['msg'];
        if (parseInt(success))
        {
          toastr.success(msg);    
        }
        else
        {
          toastr.error(msg);
          alert('error');
        }
        $.unblockUI();
      }
    });
  }
  function SendExpiredNotification(Comp_Id) 
  {
    $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
    var data = new FormData();
    data.append("Comp_ID",Comp_Id);
    $.ajax({
      url: '../Serv/SendLicenceExpiredNotification.php',
      data: data,
      processData: false,
      contentType: false,
      async : true  ,
      type: 'POST',
      success:function(result,status)
      {
        var success=result['success'];
        var msg=result['msg'];
        if (parseInt(success))
        {
          toastr.success(msg);    
        }
        else
        {
          toastr.error(msg);
          alert('error');
        }
        $.unblockUI();
      }
    });
  }
</script>
