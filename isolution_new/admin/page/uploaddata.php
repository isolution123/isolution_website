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
								<h2><b>Upload Data</b></h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<br />
								<form id="upload-data" data-parsley-validate class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
											Select Report Type
											<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select name="Type" class="form-control">
												<option value="1">High Level Report</option>
												<option value="2">Detail Report</option>
												<option value="3">Patent Master</option>
												<option value="4">ANDA Product Applicant Name</option>
												<option value="5">Product Marketed By</option>
												<option value="6">FDA Approved Facility</option>
												<option value="7">DMF Database</option>
												
											</select>
										</div><br>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
											Select Data File
											<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="file" required="required" name="DataFile" id="DataFile" accept=".csv" /> 
										</div><br>
									</div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
										<h4> Download  Sample File</h4>
										<u>
											<a href="assets/samplefile/DetailReport.csv" download>Detail Report</a><Br/>
											<a href="assets/samplefile/HighLevelReport.csv" download>  High Level Report</a><br>
											<a href="assets/samplefile/PatentMaster.csv" download> Patent Master</a><br>
											<a href="assets/samplefile/ANDAProductApplicantName.csv" download>  ANDA Product Applicant Name</a><br>
											<a href="assets/samplefile/ProductMarketedBy.csv" download>Product Marketed BY</a><br>
											<a href="assets/samplefile/FDAApprovedFacility.csv" download> FDA Approved Facility</a><br>
											<a href="assets/samplefile/DMFDatabase.csv" download>DMF Database</a>
											</u>
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<button type="submit" class="btn btn-success">Upload Data</button>
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
	$("#upload-data").validate(
	{
		rules: 
		{
			DataFile:
			{
				required:true
			}
		},
		messages: 
		{
			DataFile:
			{
				required:"Please Upload Data File"
			}				
		},
		submitHandler : function(form) 
		{
			var data = {};
			data=new FormData(form);
			$.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});		
			$.ajax({
				url: '../Serv/ImportData.php',
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
							location.reload();
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
</script>
