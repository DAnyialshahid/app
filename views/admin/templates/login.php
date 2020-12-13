<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= WEB_NAME()?> - LOGIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/bootstrap.min.css')?>">

  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/font-awesome.min.css')?>">
 
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/ionicons.min.css')?>">
  
  <link rel="stylesheet" href="<?= base_url('assets/control_panel/css/AdminLTE.min.css')?>">
 

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  
  .login-page, .register-page{
	  
	  background-image:url(<?= base_url('assets/control_panel/images/background.jpg')?>);
	  background-size:cover;
	  background-repeat:no-repeat
	  
  }
  b{
	  color:white
  }
  .alert{
	  
	  border-radius:0px
  }
  
  #responseidv{
	  display:none
  }
  </style>
  
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="margin-bottom: 0px;">
   <img src="<?= base_url('assets/uploads/required/'.WEB_LOGO())?>" style="width:200px; margin-bottom:20px"/>
  </div>
  
	<div id="responseidv"></div>
 
 
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to Control your website..</p>

    <form action="<?= base_url('auth/login')?>" method="post" id="login-form">
	
		
	
	<input type="hidden" name="<?= $this->security->get_csrf_token_name()?>" id="token" value="<?= $this->security->get_csrf_hash()?>"/>

	
	
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="User name">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <a href="">Forgot Password?</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit"  class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

 

  </div>
  <!-- /.login-box-body -->
</div>


<script src="<?= base_url('assets/control_panel/js/jquery.min.js')?>"></script>

<script src="<?= base_url('assets/control_panel/js/bootstrap.min.js')?>"></script>

<script src="<?= base_url('assets/control_panel/js/auth.js"')?>"></script>

</body>
</html>
