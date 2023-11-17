<?php 

 $Customers=array();
$info=array();
  require_once("config.php");  
  // $con = mysql_connect("103.21.58.5:3306", "isolutions", "isolutionsadvisor@123");
  // mysql_select_db("isoluiz1_isolutionsadvisor", $con);

  $sql="SELECT * FROM news";  
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
          <h2>News List</h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
              <label for="sel1">Select news:</label>
              <select class="form-control" id="news">
                <option value="0">--Select--</option>
                            <?php foreach ($Customers as $Customer) : $Customer=(array)$Customer; ?>
                            
                                <option value="<?php echo $Customer['id']; ?>"><?php echo $Customer['title']; ?></option>
                          <?php endforeach; ?>
              </select>
            </div>
            
          <table id="Customer-List" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Rating</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    var table='';
  /*var table = $('#Customer-List').DataTable(
  {
    fixedHeader: true,
    bJQueryUI: true,
    "pagingType": "full_numbers", 
    "language": {
        "emptyTable":     "No Users Available"
    },
    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
    responsive: true
  });*/
    $(document).ready(function(){
        $("#news").change(function(){
            var data={};
            $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
            data['id']=$("#news").val();
            $.ajax({
                url: 'Serv/getNewsById.php',
                data: data,
                type: 'POST',
                success:function(result,status)
              {
                var success=result['success'];
             
                if (parseInt(success))
                {
                    
                table=   $('#Customer-List').dataTable( {
                        data : result['data'],
                        //data : response,
                         "bDestroy": true,
                        columns: [
                                  {"data" : "name"},
                                  {"data" : "email"},
                                  {"data" : "comment"},
                                  {"data" : "rating"},
                                  {
                                    "data": "id",
                                    "render": function (data, type, row) {
                                        return "<a class='btn btn-success' style='margin-right: 5px;'  onclick='DeleteComment(" + data + ")' >delete</a>";
                                    },
                                    "name": "Action"
                                }
                                  ],
                        searching : false
                    }); 
                }
                else
                {
                  toastr.error(msg);
                }
                $.unblockUI();
              }
            });    
        });
    });

  function DeleteComment(id) 
  {
    $.confirm(
    {
      title: 'Delete Confirm!',
      content: 'Do you want to delete News Comment?',
      confirm: function()
      {
        var data={};
        $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
        data['id']=id;
        $.ajax({
          url: 'Serv/DeleteNewsComment.php',
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
              }, 100);  
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
