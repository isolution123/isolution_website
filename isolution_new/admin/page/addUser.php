	<?php 
$MaxUser=$_GET['maxuser'];
$Flag=isset($_GET['Flag']);
$Customers=array();
$noofrow=0;
if($Flag)
{
  require_once("../config.php");
    $Comp_Id=$_GET['cid'];
  $sql="SELECT * FROM tbl_companyuser WHERE CU_CompanyId='$Comp_Id'";
  $res=mysqli_query($con,$sql);
  $noofrow=mysqli_num_rows($res);
while ($row=mysqli_fetch_assoc($res)) 
  {
  $Customers[]=$row;  
  }
}
?>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="row">      
      <div class="page-title">
        <div class="title_left">
          <h3>Customers List</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <form id="form-emp" method="POST" data-parsley-validate class="form-horizontal form-label-left">
        <input type="hidden" name="Comp_Id" value="<?php echo $_GET['cid']; ?>">
        
        <input type="hidden" name="Flag" value="<?php echo  isset($_GET['Flag']); ?>">
        <?php 
        if(isset($_GET['Flag']))
        {
         
          $i=1;
          foreach ($Customers as $Customer) : $Customer=(array)$Customer; 
         ?>
          <input type="hidden" name="MaxUser" value="<?php echo $noofrow; ?>">
         <input type="hidden" name="Flag" value="<?php echo  isset($_GET['Flag']); ?>">
         <input type="hidden" name="CU_Id<?php echo $i; ?>" value="<?php echo $Customer['CU_Id'] ?>">
          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Employee Details - <?php echo $i; ?></h2>
                  <div class="clearfix"></div>
                </div>   
                <div class="x_content">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $Customer['CU_Fname'] ?>" name="firstname<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Middle Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $Customer['CU_Mname'] ?>" name="middlename<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Last Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $Customer['CU_Lname'] ?>" name="lastname<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email Id<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="email" value="<?php echo $Customer['CU_EmailId'] ?>" name="email<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $Customer['CU_Department'] ?>" name="dept<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Designation<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $Customer['CU_Designation'] ?>" name="design<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>   
         <?php 
         $i=$i+1;
          endforeach; 
        }
        else
        {
          for ($i=1; $i <= $MaxUser; $i++) : 
            ?>
          <input type="hidden" name="MaxUser" value="<?php echo $_GET['maxuser']; ?>">
          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Employee Details - <?php echo $i; ?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="firstname<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Middle Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="middlename<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Last Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="lastname<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email Id<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="email" name="email<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="dept<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Designation<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" name="design<?php echo $i; ?>" required="required" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>   
          <?php
          endfor; 
        }?> 


        <div class="form-group">
          <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
          </div>
        </div>  
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#form-emp").validate(
  {
    rules: 
    {
    },
    messages: 
    {     
    },
    submitHandler : function(form) 
    {
      $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
      var data = {};
      data=new FormData(form); 
      $.ajax({
        url: '../Serv/AddCompUser.php',
        data: data,
        processData: false,
        contentType: false,
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
              window.location="index.php?page=listCustomer";
            }, 3000);  
          }
          else
          {
            toastr.error(msg);
          }
          $.unblockUI();
        }
      });
      return false;
    }
  });
</script>
