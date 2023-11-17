<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetUserLog.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$Logs=(array)$r['info'];
?>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Audit Trails</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="Notification-List" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Sr. No</th>
                <th>Company Name</th>
                <th>Username</th>
                <th>Starting Datetime</th>
                <th>Ending Datetime</th>
                <th>Total Access Time</th>
                <th>IP Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody><?php $i=0; ?>
              <?php foreach ($Logs as $Log) : $i++;$Log=(array)$Log; ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $Log['LogCompname']; ?></td>
                  <td><?php echo $Log['LogUsername']; ?></td>

                  <td>
                    <span class="label label-success"><?php echo $Log['LoginDate']; ?></span>
                    <span class="label label-info"><?php echo $Log['LoginTime']; ?></span>
                  </td>
                  <td>
                    <span class="label label-success"><?php echo $Log['LogoutDate']; ?></span>
                    <span class="label label-info"><?php echo $Log['LogoutTime']; ?></span>
                  </td>
                  <td><span class="label label-success"><?php 
				  if($Log['LoginDateTime']!="" && $Log['LogoutDateTime']!="")
				  {
				   $start_date = new DateTime($Log['LoginDateTime']);
					$end_date = new DateTime($Log['LogoutDateTime']);
					$interval = $start_date->diff($end_date);
					echo $interval->h.":".$interval->i.":".$interval->s;
				  }
				   ?></span></td>
                  <td><?php echo $Log['IP_Address']; ?></td>
                  <td><button class="btn btn-danger btn-sm" onclick="DeleteLog('<?php echo $Log['LogId']; ?>')">Delete</button></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var table = $('#Notification-List').DataTable(
  {
    fixedHeader: true,
    bJQueryUI: true,
    "pagingType": "full_numbers",
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
  });
  function DeleteLog(LogId) 
  {
    $.confirm(
    {
      title: 'Delete Confirm!',
      content: 'Do you want to delete Log -'+LogId+'?',
      confirm: function()
      {
        var data={};
        $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
        data['LogId']=LogId;
        $.ajax({
          url: '../Serv/DeleteLog.php',
          data: data,
          type: 'POST',
          success:function(result,status)
          {
            var success=result['success'];
            var msg=result['msg'];
            if (parseInt(success))
            {
              toastr.success(msg);
              setTimeout(function() 
              {              
                location.reload();
              }, 3000);  
            }
            else
            {
              toastr.error(msg);
            }
            $.unblockUI();
          }
        });
      },
      cancel: function()
      {
        toastr.info("Delete Canceled");
      }
    });
  }
</script>
