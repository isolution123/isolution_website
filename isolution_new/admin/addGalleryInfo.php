	<?php 

$Customers=array();

if(isset($_GET['id']))
{
  require_once("config.php");
  $id=$_GET['id'];
  $sql="SELECT * FROM gallery_data WHERE id='$id'";
  $res=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($res)) 
  {
    $Customers=$row;  
  }  
}

?>
  
        
<div class="right_col" role="main">
  <br />
  <div class="">
    <div class="row">      
      <div class="page-title">
        <div class="title_left">
          <h3>Add Gallery Info</h3>
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
                <h2>Gallery Details</h2>
                <div class="clearfix"></div>
              </div>   
              <div class="x_content">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Gallery Name <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <textarea name="gallery_name" id="gallery_name" class="form-control gallery_name content" rows="8" 
                    ></textarea>

                    <!-- <input type="text" name="gallery_name" required="required" class="form-control" value="<?php if(!empty($Customers)){echo $Customers['gallery_name'];} ?>"> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="file" name="gallery_img"  class="form-control">
                     <br>
                     <?php if(!empty($Customers)){ ?> 
                     <img src="<?php  if(!empty($Customers)){ echo $Customers['gallery_img'];} ?>" height="70px" width="70px">
                   <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Order<span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="gallery_order" required="required" class="form-control" value="<?php if(!empty($Customers)){echo $Customers['gallery_order'];} ?>">
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
            <a href="<?php echo getPageUrl('gallery_info') ?>" class="btn btn-default btn-block">Back</a>
          </div>
          
        </div>  
      </form>
    </div>
  </div>
</div>
        <link rel="stylesheet" href="assets/js/v2/richtext.min.css">
        <script src="assets/js/v2/jquery.richtext.js"></script>        
        <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

        <?php
        if (!empty($Customers)) 
        {
            $content = htmlspecialchars_decode($Customers['gallery_name']);
        } else 
        {
            $content = ''; // Set a default value if $Customers['gallery_name'] is empty
        }
        ?>


        <script type="text/javascript">
                
                $(document).ready(function() {
                  // alert("hi");
                    // Initialize CKEditor

                    CKEDITOR.replace('gallery_name',{

                      width: "1000px",
                      height: "200px"

                    }); 

                      // Set the value of CKEditor
                var editor = CKEDITOR.instances.gallery_name;


              
        editor.setData(<?php echo json_encode($content); ?>);


                });

              
                </script>

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
        url='Serv/AddGalleryInfo.php';
        data=new FormData(form); 
        var gallery_name = CKEDITOR.instances.gallery_name.getData();
        data.append("gallery_name", gallery_name);

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
              window.location="index.php?page=gallery_info";
            }, 3000);  
        }
      });
      }
      else
      {
       url='Serv/UpdateGalleryInfo.php'; 

           var data1=new FormData(form);
           var gallery_name = CKEDITOR.instances.gallery_name.getData();
           data1.append("gallery_name", gallery_name);
 
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
                      window.location="index.php?page=gallery_info";
                    }, 3000);  
                  
                }
              });
      }
      }
      });
</script>
