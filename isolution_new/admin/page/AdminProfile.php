<div class="right_col" role="main">
	<br />
	<div class="">
		<div class="row top_tiles">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2><b>Edit Profile</b></h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<form method="POST" id="form-profile" enctype="multipart/form-data" role="form" >
								<div class="row">
									<div class="col-md-6">
										<input type="hidden" name="Admin_Id" value="<?php echo $User_Info['Admin_Id']; ?>">
										<div class="form-group">
											<label class="control-label">
												Name <span class="symbol required"></span>
											</label>
											<input type="text" class="form-control" name="Admin_Name" value="<?php echo $User_Info['Admin_Name']; ?>">
										</div>  
										<div class="form-group">
											<label class="control-label">
												Email <span class="symbol required"></span>
											</label>
											<input type="text" class="form-control" name="Admin_EmailId" value="<?php echo $User_Info['Admin_EmailId']; ?>" readonly="">
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<label class="control-label">
													Password <span class="symbol required"></span>
												</label>
												<input type="password" class="form-control" name="Admin_Password" id="password" value="<?php echo $User_Info['Admin_Password']; ?>">
											</div>
											<div class="form-group col-md-6">
												<label class="control-label">
													Confirm Password <span class="symbol required"></span>
												</label>
												<input type="password" class="form-control" name="Admin_CPassword" value="<?php echo $User_Info['Admin_Password']; ?>" >
											</div>
										</div>
									</div>
									<div class="col-md-6">  
										<div class="form-group">
											<label>
												Profile Image 
											</label>
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail">
													<img src="<?php echo $User_Info['AdminImg']."?".strtotime(date("d-m-Y H:i:s")); ?>" alt="">
												</div>
												<div class="fileupload-preview fileupload-exists thumbnail">
												</div>
												<div class="user-edit-image-buttons">
													<span class="btn btn-info btn-file">
														<span class="fileupload-new">
															<i class="fa fa-picture"></i> Select image
														</span>
														<span class="fileupload-exists">
															<i class="fa fa-picture"></i> Change
														</span>
														<input type="file" name="userImg" value="<?php echo $User_Info['AdminImg']."?".strtotime(date("d-m-Y H:i:s"));?>">
													</span>
													<a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
														<i class="fa fa-times"></i> Remove
													</a>
												</div>
											</div>                                    
											<div class="row">
												<div class="hidden">
													<input type="hidden" name="U_Id" value="<?php echo $User['U_Id']; ?>">
												</div>
											</div>
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
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function (arg) 
  {
   $("#form-profile").validate(
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
        url: '../Serv/UpdateAdminProfile.php',
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