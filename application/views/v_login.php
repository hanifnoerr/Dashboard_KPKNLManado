<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ya karena malas bikin login page, mohon maaf kalo tidak berkenan bisa menegur langsung ke kantor nanti saya ganti">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/masuk/sso_djkn_icon.png');?>">

    <title>SSO KPKNL Manado</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/masuk/bootstrap3.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/masuk/jquery.js'); ?>"></script>
    
        
    <style>
      body {
          position: relative;
          padding-top: 60px;
          background-color: #fff;
          background-image: url(<?php echo base_url('assets/masuk/bg.png');?>);
          background-repeat: repeat-x;
          background-position: 0 40px;
      } 
    </style>
    
  </head>

  <body>
    
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" href="#"><img style="margin-top:-15px; margin-bottom:-10px;" src="<?php echo base_url('assets/masuk/logo_sso_baru.png');?>"/></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sign in / Daftar&nbsp; <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-lock"></span>&nbsp; Gak bisa dong</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-check"></span>&nbsp; Bukan SSO yang sebenarnya ini</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>    
    <!-- Style khusus halaman ini -->
    <link href="<?php echo base_url('assets/masuk/uye.css'); ?>" rel="stylesheet">
    <style>
    	@media (max-width: 768px) { .sso-lock { width: 60px; } }
    </style>

    <div class="container">
		<form  method="post" action="<?php echo site_url('login/masuk'); ?>" accept-charset="utf-8" class="form-signin">  
          	<center>
    		  <img class="sso-lock" src="<?php echo base_url('assets/masuk/sso_lock_logo_05.png');?>"/>
              <h3 class="form-signin-heading" style="color:#ACADAD;"> Sign in</h3>
            </center><br>
                      
                <div class="alert alert-success text-center">
                  <em>Sign in</em> via SSO <b>KPKNL Manado</b> untuk mengakses ini<br><em></em>
                </div>
            
			<input type="text" name="username" class="form-control" placeholder="Username (NIP)">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <p><a href="#" id="example" data-placement="below" class="text-danger" >&nbsp;Lupa Password? <b>Tanya ke Seksi Lelang</b></a></p>
            <input name="Sign In" class="btn btn-lg btn-danger btn-block" type="submit" value="Login"/>

			
                        
          </form>        	  <br><hr><center><a href="https://letsencrypt.org" target="_blank"><img src="https://letsencrypt.org/images/letsencrypt-logo-horizontal.svg" alt="SSL Certificate" style="border: 0px;" width="150"></a></center>
    </div> <!-- /container -->
    <script src="<?php echo base_url('assets/masuk/bootsrap3.js'); ?>"></script>
      
  </body>
</html>