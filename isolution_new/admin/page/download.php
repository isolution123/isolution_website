<div class="right_col" role="main">
	<br />
	<div class="">
		<div class="row top_tiles">  
			<div class="row top_tiles">
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">

								<h2><b>Download Data</b></h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<br />
								<form id="upload-data" data-parsley-validate class="form-horizontal form-label-left">
									<input type="hidden" id="fieldlistNoOrder" name="fieldlistNoOrder" />
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" >
											Select Report Type
											<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select name="Type" class="form-control" id="Type"  onchange="fieldchange(this);" >
												<option value="0">--Select--</option>
												<option value="1">High Level Report</option>
												<option value="2">Detail Report</option>
												<option value="3">Patent Master</option>
												<option value="4">ANDA Product Applicant Name</option>
											</select>
										</div><br>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<button type="submit" onclick="return checkvalidation()" class="btn btn-success">Download Data</button>
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
<?php 
function DeleteFile($path){
 unlink($path);
 return 1;
}
?>
<script type="text/javascript">
function checkvalidation()
{
	if($("#Type").val()=="0")
	{
		alert("Please select Type..");

		return false;
	}
	return true;
}
	$("#upload-data").validate(
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
			if($("#Type").val()==2) //Detail report
			{
				$.ajax({
					url: '../Serv/ExportDataDetailReport.php',
					data: data,
					processData: false,
					contentType: false,
					type: 'POST',
					success:function(result,status)
					{
						console.log(result);
						var success=result['success'];
						var msg=result['msg'];
						var path=result['info']['Path'];
						var location='<?php echo $SiteUrl ?>'+'/admin'+path;

						if (parseInt(success))
						{
							toastr.success(msg);
							setTimeout(function() 
							{              
								window.location=location;
							}, 3000);  
						}
						else
						{
							toastr.error(msg);	
						}
						$.unblockUI();
					},
					error:function(a,b,msg)
					{

					}
				});			
			}
			else if($("#Type").val()==1)// high level report
			{
				$.ajax({
					url: '../Serv/ExportDataHighlevelReport.php',
					data: data,
					processData: false,
					contentType: false,
					type: 'POST',
					success:function(result,status)
					{
						console.log(result);
						var success=result['success'];
						var msg=result['msg'];
						var path=result['info']['Path'];
						var location='<?php echo $SiteUrl ?>'+'/admin'+path;

						if (parseInt(success))
						{
							toastr.success(msg);
							setTimeout(function() 
							{              
								window.location=location;

							}, 3000);  
						}
						else
						{
							toastr.error(msg);	
						}
						$.unblockUI();
					},
					error:function(a,b,msg)
					{

					}
				});	
			}
			else  if($("#Type").val()==3)// Pattern master report
			{
				$.ajax({
					url: '../Serv/ExportDataPatternMaster.php',
					data: data,
					processData: false,
					contentType: false,
					type: 'POST',
					success:function(result,status)
					{
						console.log(result);
						var success=result['success'];
						var msg=result['msg'];
						var path=result['info']['Path'];
						var location='<?php echo $SiteUrl ?>'+'/admin'+path;

						if (parseInt(success))
						{
							toastr.success(msg);
							setTimeout(function() 
							{              
								window.location=location;

							}, 3000);  
						}
						else
						{
							toastr.error(msg);	
						}
						$.unblockUI();
					},
					error:function(a,b,msg)
					{

					}
				});	
			}
			else  if($("#Type").val()==4)// ANDA Product Applicant Name
			{
				$.ajax({
					url: '../Serv/ExportDataANDAProductApplicantName.php',
					data: data,
					processData: false,
					contentType: false,
					type: 'POST',
					success:function(result,status)
					{
						console.log(result);
						var success=result['success'];
						var msg=result['msg'];
						var path=result['info']['Path'];
						var location='<?php echo $SiteUrl ?>'+'/admin'+path;

						if (parseInt(success))
						{
							toastr.success(msg);
							setTimeout(function() 
							{              
								window.location=location;

							}, 3000);  
						}
						else
						{
							toastr.error(msg);	
						}
						$.unblockUI();
					},
					error:function(a,b,msg)
					{

					}
				});	
			}


			
		}
	});

	function fieldchange(input) 
	{	
		var val=input.value;
		var htmlopData="";
		if (input.value != '0')
		{ 
			if(input.value == '2')	 // Detail Report
			{
				$.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
				var data = {};
				$.ajax(
				{
					url: '../Serv/GetAllColumnList.php',
					type: "POST",
					contentType: "application/json",
					success:function(result,status)
					{
						var success=result['success'];
						var msg=result['msg'];
						if (parseInt(success))
						{
							var ColumnData =result["info"];
							var fieldArray =new Array();
							$.each(ColumnData, function( index, value ) 
							{
								fieldArray.push(value['ColumnName']);

							});
							$("#fieldlistNoOrder").val("");
							$("#fieldlistNoOrder").val(fieldArray);
						}
						else
						{
							toastr.error(msg);
						}
						$.unblockUI();
					}
				});
			}
			if(input.value == '1')	 // highlevel report
			{
				$.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
				$.ajax(
				{
					url: '../Serv/GetAllColumnListhighlevel.php',
					type: "POST",
					contentType: "application/json",
					success:function(result,status)
					{
						var success=result['success'];
						var msg=result['msg'];
						if (parseInt(success))
						{
							var ColumnData =result["info"];
							var fieldArray =new Array();

							$.each(ColumnData, function( index, value ) 
							{
								fieldArray.push(value['ColumnName']);
							});
							$("#fieldlistNoOrder").val(fieldArray);
						}
						else
						{
							toastr.error(msg);
						}
						$.unblockUI();
					}
				});
			}
			
		}
	}

</script>
