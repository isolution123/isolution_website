 <body style="background:#F7F7F7;">
  <div class="">
    <div id="wrapper">
      <div id="login" class=" form">
        <section class="login_content">
          <form id="form-login">
            <h1>Login</h1>
            <div>
              <input type="text" class="form-control" name="Username" placeholder="Username" required="required" />
            </div>
            <div>
              <input type="password" class="form-control" name="Password" placeholder="Password" required="required" />
            </div>
            <div>
              <input type="submit" name="submit" value="Login" class="btn btn-default">
            </div>
            <div class="clearfix"></div>
          </form>
        </section>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $("#form-login").validate(
    {
      rules: 
      {
        Username:
        {
          required:true
      
        },
        Password:
        {
          required:true
          
        }
      },
      messages: 
      {
        Username:
        {
          required:"Please Enter username",
        },
        Password:
        {
          required:"Please Enter Password",
        }
      },
      submitHandler : function(form) 
      {
        var data = {};
        data=new FormData(form); 
        $.blockUI({ message: '<img width="50px" src="ajax-loader1.gif" />',css: { background:'transparent',border:'none' }});
        $.ajax({
          url: 'Serv/AdminLogin.php',
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
              },3000);  
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
</body>