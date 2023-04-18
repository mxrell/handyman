<?php
   require_once ("../include/initialize.php");
   $autonum = New Autonumber();
   $res = $autonum->set_autonumber('userid');
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Handyman</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo web_root;?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo web_root;?>plugins/font-awesome/css/font-awesome.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo web_root;?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo web_root;?>plugins/iCheck/square/blue.css">

  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body" style="min-height: 400px;">
    <h1 class="login-box-msg">HANDYMAN</h1>
      <form class="form-horizontal span6" action="user/controller.php?action=add" method="POST">
                    
                         <input id="user_id" name="user_id"  type="hidden" value="<?php echo $res->AUTO; ?>">      
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="U_NAME">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                            "User Fullname" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_USERNAME">Username:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                            "Account Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_PASS">Password:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" minlength="2" value="">
                         <input class="form-control input-sm" id="U_PASS" min="3" name="U_PASS" placeholder="Account Password" type="Password" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">

                      <div class="col-md-8">
                        <input type="hidden" id="U_ROLE"name="U_ROLE" value="Administrator" >
                      </div>
                    </div>
                  </div>


            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>  
                       </div>
                    </div>
                  </div>
 
          
        </form> 

   <!--   
    body 
   <body class="main-layout">
      <div class="form-container">
         <form action="" method="post">
            <h3>register</h3>
            <form class="" action="controller.php?action=add" method="POST">
            <input id="user_id" name="user_id"  type="hidden" value="<?php echo $res->AUTO; ?>"> 
            <input type="text" for="U_NAME" required placeholder="Enter your name">
            <input type="username" for="U_USERNAME" required placeholder="Enter your Username">
            <input type="password" name="PASSWORD" required placeholder="Enter your password">
            <input type="hidden" name="U_ROLE" value="Administrator" >
            <button class="" name="save" type="submit" >Save</button>  
         </form>
      </div>
      </div>
   </body>
</html>

-->