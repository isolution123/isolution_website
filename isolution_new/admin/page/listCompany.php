<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."listCompany.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$Companies=(array)$r['info'];
?>
<style type="text/css">
  table
  {
    max-width: 100vh;
  }
</style>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Company List</h2>
          <a href="<?php echo getPageUrl('addCustomer') ?>" class="btn btn-primary pull-right">Add Company</a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!-- <div class=""> -->
            <table id="Companies-List" class="table table-striped table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Company Name</th>
                  <th>First Date of Registration</th>
                  <th>No of Users</th>
                  <th>Subscription Type</th>
                  <th>Subscription Start-Date</th>
                  <th>Subscription End-Date</th>
                  <th>Contact Person Name</th>
                  <th>Contact Person Phone No</th> 
                  <th>Contact Person Email Address</th> 
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>              
              <tbody>
                <?php $i=0; ?>
                <?php foreach ($Companies as $Company) : $Company=(array)$Company;  $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $Company['Comp_Name']?></td>
                    <td><?php echo $Company['FirstRegDate']; ?></td>
                    <td><?php echo $Company['TOT']; ?></td>
                    <td><?php echo $Company['Comp_SubscriptionPlan'].' Months'; ?></td>
                    <td><?php echo $Company['Comp_SubStartDate']; ?></td>
                    <td><?php echo $Company['Comp_SubEndDate']; ?></td>
                    <td><?php echo $Company['Comp_ContactPerson']; ?></td>
                    <td><?php echo $Company['Comp_ContactPersonMoNo']; ?></td>
                    <td><?php echo $Company['Comp_ContactPersonEmailId']; ?></td>
                    <td>
                      <?php if ($Company['Comp_Status']==1): ?>
                        <span class="label label-success">Registered</span>
                      <?php elseif($Company['Comp_Status']==2) : ?>
                        <span class="label label-warning">Renwal Due</span>
                      <?php else : ?>
                        <span class="label label-danger">Expired</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="index.php?page=EditCompany&compid=<?php echo $Company['Comp_Id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                      <a href="javascript:void(0)" onclick="DelCompany('<?php echo $Company['Comp_Id']; ?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"> Delete</i></a>
                        <a href="index.php?page=listCustomer&compid=<?php echo $Company['Comp_Id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-external-link"> Users</i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#Companies-List').DataTable( 
  { 
    fixedHeader: true,
    bJQueryUI: true,
    "pagingType": "full_numbers",
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
    responsive:
    {
      details:true
    }
  } );
   function DelCompany(Comp_Id) 
  {
    $.confirm(
    {
      title: 'Delete Confirm!',
      content: 'Do you want to delete Company?',
      confirm: function()
      {
        var data={};
        $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
        data['Comp_Id']=Comp_Id;
        $.ajax({
          url: '../Serv/DelCompany.php',
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
