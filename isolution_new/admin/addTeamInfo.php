	<?php 

$Customers=array();

if(isset($_GET['id']))
{
  require_once("config.php");
  $id=$_GET['id'];
  $sql="SELECT * FROM team_info WHERE id='$id'";
  $res=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($res)) 
  {
    $Customers=$row;  
  }  
}

?>
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!-- <link rel="stylesheet" href="assets/js/v2/site.css"> -->
        <link rel="stylesheet" href="assets/js/v2/richtext.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <script src="assets/js/v2/jquery.richtext.js"></script>
        
        <!--<script src="assets/ckeditor/ckeditor.js?id=1"></script>-->
        <script src="https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"></script>
        
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="row">      
      <div class="page-title">
        <div class="title_left">
          <h3>Add Team Info</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <form id="form-emp" method="POST" data-parsley-validate class="form-horizontal form-label-left"
        enctype="multipart/form-data" role="form" >
        <input type="hidden" name="id" id="id" value="<?php  if(!empty($Customers)){echo $Customers['id'];} ?>">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Team Details</h2>
                <div class="clearfix"></div>
              </div>   
              <div class="x_content">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Employee Name <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="emp_name" required="required" class="form-control" value="<?php if(!empty($Customers)){echo $Customers['emp_name'];} ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Employee Designation <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="emp_designation" required="required" class="form-control" value="<?php  if(!empty($Customers)){echo $Customers['emp_designation'];} ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="file" name="emp_img"  class="form-control">
                     <br>
                     <?php if(!empty($Customers)){ ?> 
                     <img src="<?php  if(!empty($Customers)){ echo $Customers['img_path'];} ?>" height="70px" width="70px">
                   <?php } ?>
                  </div>
                </div>
                 
              </div>
            </div>
          </div>   
       
        <div class="form-group">
          <div class="col-md-3 col-sm-2 col-xs-2">&nbsp;</div>
          <div class="col-md-4 col-sm-4 col-xs-6">
            <button type="submit" class="btn btn-success btn-block">Submit</button> 
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6">
            <a href="<?php echo getPageUrl('team_info') ?>" class="btn btn-default btn-block">Back</a>
          </div>
          
        </div>  
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  var data = {};

  $("#form-emp").validate(
  {
            // e.preventDefault();
    rules: 
    {
    },
    messages: 
    {     
    },
    submitHandler : function(form) 
    {
      var url='';
      if($("#id").val()=='')
      {
        url='Serv/AddTeamInfo.php';
           data=new FormData(form); 
      $.ajax({
        url: url,
        data: data,
        processData: false,
        contentType: false,
        type: 'POST',
        success:function(result)
        {
            toastr.success(result);
            setTimeout(function() 
            {              
              window.location="index.php?page=team_info";
            }, 3000);  
        }
      });
      }
      else
      {
       url='Serv/UpdateTeamInfo.php'; 

           var data1=new FormData(form); 
            $.ajax({
                url: url,
                data: data1,
                processData: false,
                contentType: false,
                type: 'POST',
                success:function(result)
                {                   
                    toastr.success(result);
                    // alert("Success");
                    setTimeout(function() 
                    {              
                      window.location="index.php?page=team_info";
                    }, 3000);  
                  
                }
              });
      }
      }
      });
</script>
