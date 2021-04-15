
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pameran Virtual | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/AdminLTE.min.css">
  <link rel="icon" href="<?=base_url('assets/images/bee.png')?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="">Pameran<b>Virtual</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="register-box-body">
            <p class="login-box-msg">Form Pendaftaran</p>
          
            <form class="form-horizontal" enctype="multipart/form-data" method="POST">
              <div class="form-group <?=form_error('Username') ? 'has-error' : null?>">
                <label class="control-label col-sm-3" for="Username">Username:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Username" name="Username" value="<?=set_value('Username')?>">
                  <?=form_error('Username')?>
                </div>
              </div>
              <div class="form-group <?=form_error('Password') ? 'has-error' : null?>">
                <label class="control-label col-sm-3" for="Password">Password:</label>
                <div class="col-sm-9">          
                  <input type="password" class="form-control" id="Password" name="Password" value="<?=set_value('Password')?>">
                  <?=form_error('Password')?>
                </div>
              </div>
              <div class="form-group <?=form_error('Passconf') ? 'has-error' : null?>">
                <label class="control-label col-sm-3" for="Passconf">Konfirmasi Password:</label>
                <div class="col-sm-9">          
                  <input type="password" class="form-control" id="Passconf" name="Passconf" value="<?=set_value('Passconf')?>">
                  <?=form_error('Passconf')?>
                </div>
              </div>
              <div class="form-group <?=form_error('Nama') ? 'has-error' : null?>">
                <label class="control-label col-sm-3" for="Nama">Nama:</label>
                <div class="col-sm-9">          
                  <input type="text" class="form-control" id="Nama" name="Nama" value="<?=set_value('Nama')?>">
                  <?=form_error('Nama')?>
                </div>
              </div>
              <div class="form-group <?=form_error('Email') ? 'has-error' : null?>">
                <label class="control-label col-sm-3" for="Email">Email:</label>
                <div class="col-sm-9">          
                  <input type="text" class="form-control" id="Email" name="Email" value="<?=set_value('Email')?>">
                  <?=form_error('Email')?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="Telepon">Telepon:</label>
                <div class="col-sm-9">          
                  <input type="text" class="form-control" id="Telepon" name="Telepon">
                </div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" name="daftar" class="btn btn-primary btn-block">Daftar</button>
                </div>
              </div>
            </form>
            Sudah punya akun? Silahkan <a href="<?=site_url('auth')?>">Login</a>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

</body>
</html>
