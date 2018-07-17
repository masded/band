<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Simo-ka | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

    <body class="login-page">
        <div class="login-box">
            
            <div class="login-box-body">
                <p class="login-box-msg"><img src="<?php echo base_url(); ?>assets/dist/img/logo simoka.png"></p>
                <form action="<?php echo site_url('login/proses'); ?>" method="post">
                    <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>    
                    <?php } ?>
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            
                                                    
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>                
                <div class="social-auth-links text-center">
                  <p>- Supported by -</p>
                </div><!-- /.social-auth-links -->
                <img src="<?php echo base_url(); ?>assets/dist/img/logo unisnu.png">
                  <hr>
                  <img src="<?php echo base_url(); ?>assets/dist/img/logo bem.png">

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

       <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>