<?php 

$Customers=array();
$info=array();
  require_once("config.php");  
  // $con = mysql_connect("103.21.58.5:3306", "isolutions", "isolutionsadvisor@123");
  // mysql_select_db("isoluiz1_isolutionsadvisor", $con);

  $sql="SELECT * FROM team_info";  
  $res=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($res)) 
  {
    $info[]=$row;
  }

  $Customers=$info;
  
?>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Team Info List</h2>
          <a href="<?php echo getPageUrl('addTeamInfo') ?>" class="btn btn-primary pull-right">Add Team Info</a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="Customer-List" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Sr. No</th>
                <th>Employee Name</th>
                <th>Employee Designation</th>
                <th>Employee Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
              <?php foreach ($Customers as $Customer) : $Customer=(array)$Customer; ?>
                <?php $i++; ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $Customer['emp_name']; ?></td>
                  <td><?php echo $Customer['emp_designation']; ?></td>
                  <td><img src="<?php  echo $Customer['img_path'] ?>" alt="Image" height="70px" width="70px"></td>
                  <td>
                    <a href="index.php?page=addTeamInfo&id=<?php echo $Customer['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="javascript:void(0)" onclick="DelCustomer('<?php echo $Customer['id']; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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

  function DelCustomer(id) 
  {
    $.confirm(
    {
      title: 'Delete Confirm!',
      content: 'Do you want to delete News?',
      confirm: function()
      {
        var data={};
        $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
        data['id']=id;
        $.ajax({
          url: 'Serv/DeleteTeamInfo.php',
          data: data,
          type: 'POST',
          success:function(result,status)
          {
            var success=result['success'];
            var msg=result['msg'];
            if (parseInt(success))
            {
              alert(msg);
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
