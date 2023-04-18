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
      <form action="user/controller.php?action=add" method="POST">            
          <input id="user_id" name="user_id"  type="hidden" value="<?php echo $res->AUTO; ?>">
          <div class="form-group has-feedback">
            <input name="deptid" type="hidden" value="">
            <input type="text" class="form-control" placeholder="Fullname" name="U_NAME" for="U_NAME" id="U_NAME" value="" required>         
          </div>
          <div class="form-group has-feedback">
            <input name="deptid" type="hidden" value="">
            <input type="text" class="form-control" placeholder="Contact no." name="U_CONTACTNO" for="U_CONTACTNO" id="U_CONTACTNO" value="" required>         
          </div>
          <div class="form-group has-feedback">
            <input name="deptid" type="hidden" value="">
            <input type="text" class="form-control" placeholder="Email" name="U_EMAIL" for="U_EMAIL" id="U_EMAIL" value="" required>         
          </div>
          <div class="form-group has-feedback">
            <input name="deptid" type="hidden" value="">
            <input type="text" class="form-control" placeholder="Username" name="U_USERNAME" for="U_USERNAME" id="U_USERNAME" value="" required>         
          </div>
          <div class="form-group has-feedback">
            <input name="deptid" type="hidden" minlength="2" value="">
            <input type="password" class="form-control" min="3" placeholder="Password" name="U_PASS" for="U_PASS" id="U_PASS" value="" required>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="idno"></label>
            </div>
          </div>
          <div class="row">       
            <div class="col-xs-4">
              <button class="btn btn-primary btn-block btn-flat" name="save" type="submit" >Sign Up</button> 
            </div>
          <br><br><br>
          <a href="index.php">&nbsp&nbsp&nbsp&nbsp&nbspAlready have an account?</a><br>
          <a href="../index.php">&nbsp&nbsp&nbsp&nbsp&nbspLogin as Freelancer</a>
        </div>  
      </form>       
  </div>    
</div>
</body>
</html>

