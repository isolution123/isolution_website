<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetConfiguration.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$Configs=(array)$r['info'];
?>
<div class="right_col" role="main">
	<br />
	<div class="">
		<div class="row top_tiles">
			<div class="">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Configuration </h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<form id="form-config" method="POST" data-parsley-validate class="form-horizontal form-label-left">
									<?php foreach ($Configs as $Config ) : $Config=(array)$Config; ?>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
												<?php echo $Config['Config_DisplayName']; ?>
											</label>
											<div class="col-md-5 col-sm-5 col-sm-6 col-xs-12">
												<input type="number" name="<?php echo $Config['Config_Id']; ?>" required="required" class="form-control" value="<?php echo $Config['Config_Value']; ?>" />
												<?php echo $Config['Config_Units']; ?>
											</div>
										</div> 
									<?php endforeach ; ?>
									<div class="form-group">
										<div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
											<button type="submit" class="btn btn-success btn-block">Submit</button>
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
</div>

<script type="text/javascript">
  $("#form-config").validate(
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
        url: '../Serv/SetConfiguration.php',
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
              window.location="index.php?page=configData";
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