	<?php 

$Customers=array();

if(isset($_GET['id']))
{
  require_once("config.php");
  $id=$_GET['id'];
  $sql="SELECT * FROM news WHERE id='$id'";
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
          <h3>Add News</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <form id="form-emp" method="POST" data-parsley-validate class="form-horizontal form-label-left"
        enctype="multipart/form-data" role="form"       >
        <input type="hidden" name="id" id="id" value="<?php echo $Customers['id']; ?>">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>News Details</h2>
                <div class="clearfix"></div>
              </div>   
              <div class="x_content">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" value="<?php echo $Customers['title'] ?>" name="title" required="required" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Description <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <textarea name="short_description" class="form-control" rows="5" 
                    ><?php echo $Customers['short_description'] ;?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <textarea name="description" id="description" class="form-control content" rows="8" 
                    ></textarea>
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
            <a href="<?php echo getPageUrl('newslist') ?>" class="btn btn-default btn-block">Back</a>
          </div>
          
        </div>  
      </form>
    </div>
  </div>
</div>

 <script>
        $(document).ready(function() {
            //$('.content').richText();
            
            
         CKEDITOR.replace('description', {
                filebrowserUploadUrl: 'ck_upload.php',
                filebrowserUploadMethod: 'form',
                  
      extraPlugins: 'colorbutton,colordialog,tableresize,justify'
                
            });
            debugger;

            CKEDITOR.instances.description.setData('<?php echo $Customers['description'] ?>');
        });
        
        </script>
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
      var url='';
      if($("#id").val()=='')
      {
        url='Serv/AddNews.php';
      }
      else
      {
       url='Serv/UpdateNews.php'; 
      }
      var data = {};
     
      data=new FormData(form); 
      $.ajax({
        url: url,
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
              window.location="index.php?page=newslist";
            }, 3000);  
            $.unblockUI();
          }
          else
          {
           var data1=new FormData(form); 
            $.ajax({
                url: url,
                data: data1,
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
                      window.location="index.php?page=newslist";
                    }, 3000);  
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
      });
       return false;
    }
  });
</script>
