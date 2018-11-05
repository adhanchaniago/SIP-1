<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistem Informasi Asrama</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>/assets/backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url()?>/assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>/assets/backend/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/backend/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">LOGIN SIRAMA</h2>
		        <div class="login-wrap">
                    <label style="color: blue">
                      <?php
                        $info=$this->session->flashdata('info');
                        if(!empty($info)) { echo $info;}
                      ?>
                    </label>
                    <label style="color: red">
                      <?php
                        $error=$this->session->flashdata('error');
                        if(!empty($error)) { echo $error;}
                        echo validation_errors();
                      ?>
                    </label>
		            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
                    <br>
                    <!-- <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="#myModal"> Lupa Password?</a>
                        </span>
                    </label> -->
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
		            <hr>
                    <div class="registration">
                        Tidak punya akun? <a class="" href="<?= base_url('auth/daftar')?>">DAFTAR BARU</a><br><br>
                        <a class="" href="<?= base_url()?>"><u>Kembali ke Beranda</u></a>
                    </div>
		        </div>

		      </form>	  

          <!-- <form method="post" action="<?= base_url('login/lupapassword')?>">
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Lupa Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Masukkan alamat email kamu di bawah ini untuk merubah password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" required="required">
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                            <button class="btn btn-theme" type="submit">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
          </form> -->
    	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url()?>/assets/backend/js/jquery.js"></script>
    <script src="<?= base_url()?>/assets/backend/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url()?>/assets/backend/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?= base_url()?>/assets/backend/img/login-bg.jpg", {speed: 500});
    </script>

  </body>
</html>
