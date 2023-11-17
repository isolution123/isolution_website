<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetMaxUserNo.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$r=(array) json_decode($response);
$MaxNoUser=(array)$r['info'];
$MaxNoUser=$MaxNoUser['MAX_USER'];
$ch = curl_init();
$data=$_GET;
$data_string = json_encode($data);                                    
curl_setopt($ch, CURLOPT_URL,$ServUrl."GetCompanyInfo.php"); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                      
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                       
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                               
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Content-Length: '.strlen($data_string)));
$response = curl_exec($ch);
$r=(array) json_decode($response);
$Comp=(array)$r['info'];
?>
<div class="right_col" role="main">
	<br />
	<div class="">
		<div class="row top_tiles">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2><b>Company Details</b></h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form id="comp-Detail" data-parsley-validate class="form-horizontal form-label-left">
								<div class="form-group">
									<input type="hidden" value="<?php echo isset($_GET['Flag']) ?>" name="Flag"  id="Flag"> 
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">Company Name <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" required="required" name="Comp_Name" class="form-control col-md-7 col-xs-12" placeholder="Company Name" value="<?php echo $Comp['Comp_Name']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Company Address
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<textarea type="text" required="required" name="Comp_Address" class="form-control col-md-7 col-xs-12" rows="3" placeholder="Company Address"><?php echo $Comp['Comp_Address']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">
										Postal Code
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="number"  name="Comp_PostalCode" class="form-control col-md-7 col-xs-12" placeholder="Postal Code" value="<?php echo $Comp['Comp_PostalCode']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Company Website
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="url" name="Comp_Website" class="form-control col-md-7 col-xs-12" placeholder="Company Website" value="<?php echo $Comp['Comp_Website']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Company Email
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="Comp_EmailId" class="form-control col-md-7 col-xs-12" placeholder="Company Email" value="<?php echo $Comp['Comp_EmailId']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Submission Plan
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<select required="required" class="form-control col-md-7 col-xs-12" name="Comp_SubscriptionPlan">
											<option value="12">12 Month</option>
											<option value="24">24 Month</option>
											<option value="36">36 Month</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Start Date
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="Comp_SubStartDate" required="required" class="form-control col-md-7 col-xs-12" id="date" placeholder="MM/DD/YYYY" value="<?php echo date("m/d/Y",strtotime($Comp['Comp_SubStartDate'])); ?>">                  
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Contact Person Name
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="Comp_ContactPerson" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contact Person Name" value="<?php echo $Comp['Comp_ContactPerson']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Contact Person Phone No
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="number" name="Comp_ContactPersonMoNo" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contact Person Phone Noo" minlength="10" value="<?php echo $Comp['Comp_ContactPersonMoNo']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Contact Person Email
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="Comp_ContactPersonEmailId" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contact Person Email" value="<?php echo $Comp['Comp_ContactPersonEmailId']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" ">
										Allow No. Of user
										<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="number" required="required" name="NoofUser" class="form-control col-md-7 col-xs-12" placeholder="No of User" max="<?php echo $MaxNoUser; ?>" value="<?php echo $Comp['Comp_MaxUser']; ?>" min="1">
									</div>
								</div>
								<div class="ln_solid"></div>
								<input type="hidden" name="Comp_Id" value="<?php echo $Comp['Comp_Id']; ?>">
								<div class="form-group">
									<div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
										<button type="submit" class="btn btn-success btn-block">Update</button>
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
	$('#date').daterangepicker(
	{
		singleDatePicker: true,
		calender_style: "picker_4"
	}, 
	function(start, end, label) 
	{
		console.log(start.toISOString(), end.toISOString(), label);
	});
	$("#comp-Detail").validate(
	{
		rules: 
		{
			Comp_Name: "required",
			Comp_Address: "required",
			Comp_PCode: 
			{
				required: false,
				minlength: 6,
				number:true
			},
			Comp_CPNo: 
			{
				required: true,
				minlength: 10,
				number:true
			}
		},
		messages: 
		{
			Comp_Name: "Please enter Company Name",
			NoofUser: "Please Enter Value between 1 to <?php echo $MaxNoUser; ?>",
			Comp_Address: "Please enter Company Address",
			Comp_CPNo: 
			{
				required: "Please enter Mobile No",
				number:"Mobile No Contain Digit Only"
			}       
		},
		submitHandler : function(form) 
		{
			var data = {};
			data=new FormData(form);
			$.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
			var MaxNoUser=$("input[name='NoofUser']").val();	
			var Flag=$("input[name='Flag']").val();	
			$.ajax({
				url: '../Serv/UpdateCompanies.php',
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
						if(Flag==1)
						{

						 window.location="index.php?page=addUser&maxuser="+MaxNoUser+"&cid="+compId+"&Flag=1";
						}
						else
						{
						
							setTimeout(function() 
							{                 
								window.history.back();  
							},3000);  
						}
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
