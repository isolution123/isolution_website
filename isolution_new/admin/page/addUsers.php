<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."CompanyList.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$Companies=(array)$r['info'];
?>
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Edit Customer</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form id="editCustomer">
            <div class="row">
              <div class="col-md-6">     
                <div class="form-group">
                  <label>First Name <span class="required">*</span></label>
                  <input type="text" name="CU_Fname" class="form-control" required="true">
                </div>   
                <div class="form-group">
                  <label>Middle Name <span class="required">*</span></label>
                  <input type="text" name="CU_Mname" class="form-control" required="true">
                </div>   
                <div class="form-group">
                  <label>Last Name <span class="required">*</span></label>
                  <input type="text" name="CU_Lname" class="form-control" required="true">
                </div>   
                <div class="form-group">
                  <label>Company Name <span class="required">*</span></label>
                  <select name="CU_CompanyId" class="form-control">
                    <?php foreach ($Companies as $key): ?>
                            <option value="<?php echo $key->Comp_Id; ?>"><?php echo $key->Comp_Name; ?></option>
                    <?php  endforeach; ?>
                  </select>
                </div>   
              </div>
              <div class="col-md-6">  
                <div class="form-group">
                  <label>Email Id <span class="required">*</span></label>
                  <input type="email" name="CU_EmailId" class="form-control" required="true">
                </div>   
                <div class="form-group">
                  <label>Department <span class="required">*</span></label>
                  <input type="text" name="CU_Department"  class="form-control" required="true">
                </div>   
                <div class="form-group">
                  <label>Designation <span class="required">*</span></label>
                  <input type="text" name="CU_Designation" class="form-control" required="true">
                </div>   
              </div>
            </div>
            <div class="row">
              <div class="col-md-3"> 
                <button type="submit" class="btn btn-success btn-block">
                  Update <i class="fa fa-arrow-circle-right"></i>
                </button>
              </div>
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function (arg) 
  {
   $("#editCustomer").validate(
   {
    rules: 
    {
    },
    messages: 
    {       
    },
    submitHandler : function(form) 
    {
      var data = {};
      data=new FormData(form);
      $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});  
      $.ajax({
        url: '../Serv/AddCustomer.php',
        data: data,
        processData: false,
        contentType: false,
        type: 'POST',
        success:function(result,status)
        {
          var success=result['success'];
          var msg=result['msg'];
          var compId=result['info'];
          if (parseInt(success))
          {
            toastr.success(msg);
            setTimeout(function() 
            {              
              window.history.back();
            }, 1000);  
          }
          else
          {
            toastr.error(msg);
          }
          $.unblockUI();
        }
      });
    }
  });
 })
</script>
