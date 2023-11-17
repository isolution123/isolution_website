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
          <h2>Customer List</h2>
          <a href="<?php echo getPageUrl('addCustomer') ?>" class="btn btn-primary pull-right">Add Customer</a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="Customer-List" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
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
                    <a href="page=editCustomer&id=<?php echo $Customer['CU_Id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
     responsive: true
  });
</script>
