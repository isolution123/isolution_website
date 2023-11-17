<?php 
$ch = curl_init();
$data=$_GET;
$data_string = json_encode($data);                                    
curl_setopt($ch, CURLOPT_URL,$ServUrl."listCustomer.php"); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                      
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                       
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                               
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Content-Length: '.strlen($data_string)));
$response = curl_exec($ch);
$r=(array) json_decode($response);
$Customers=(array)$r['info'];
?>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Users List</h2>
          <a href="<?php echo getPageUrl('addUsers') ?>" class="btn btn-primary pull-right">Add Customer</a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="Customer-List" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Sr. No</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Company Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
              <?php foreach ($Customers as $Customer) : $Customer=(array)$Customer; ?>
                <?php $i++; ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $Customer['CU_Fname'].' '.$Customer['CU_Mname'].' '.$Customer['CU_Lname']; ?></td>
                  <td><?php echo $Customer['CU_EmailId']; ?></td>
                  <td><?php echo $Customer['CU_Department']; ?></td>
                  <td><?php echo $Customer['CU_Designation']; ?></td>
                  <td><?php echo $Customer['Comp_Name']; ?></td>
                  <td>
                    <a href="index.php?page=editCustomer&id=<?php echo $Customer['CU_Id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="javascript:void(0)" onclick="DelCustomer('<?php echo $Customer['CU_Id']; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
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
  var table = $('#Customer-List').DataTable(
  {
    fixedHeader: true,
    bJQueryUI: true,
    "pagingType": "full_numbers", 
    "language": {
        "emptyTable":     "No Users Available"
    },
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
    responsive: true
  });

  function DelCustomer(CU_Id) 
  {
    $.confirm(
    {
      title: 'Delete Confirm!',
      content: 'Do you want to delete Company?',
      confirm: function()
      {
        var data={};
        $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
        data['CU_Id']=CU_Id;
        $.ajax({
          url: '../Serv/DelCustomer.php',
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
