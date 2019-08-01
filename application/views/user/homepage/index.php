<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Sistem Pakar Pemilihan Spesifikasi Drone</title>

     <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/datatables/media/css/jquery.dataTables.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/dist/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container-fluid">
        <div class="row" style="padding-top: 10%;">
            <div class="col-md-4 col-md-offset-4" style="text-align: center;">
                <h3>Aplikasi Sistem Pakar<br/>Pemilihan Spesifikasi Drone</h3>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row" style="padding-top: 15%;">
            <div class="col-md-2 col-md-offset-3" style="padding-top:10px;">
                <a href="<?= base_url(); ?>user/build/create" class="btn btn-primary btn-lg btn-block">Rakit Drone</a>
            </div>
            <div class="col-md-2 " style="padding-top:10px;">
                <a href="<?= base_url(); ?>user/register" class="btn btn-primary btn-lg btn-block">Daftar Akun</a>
            </div>
            <div class="col-md-2 " style="padding-top:10px;">
                <a href="<?= base_url(); ?>user/login" class="btn btn-primary btn-lg btn-block">Login Akun</a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>assets/dist/js/sb-admin-2.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/dist/js/lib.js"></script>

    <script>
        var site_url = "<?= site_url(); ?>";

        $("#btnLogin").unbind();
        $("#btnLogin").click(function(){
            var emailInput = $('#email').val();
            var passwordInput = $('#password').val();

            if(emailInput == "" || passwordInput == ""){
                $.displayError("Harap Masukkan Email dan Password Secara Benar !");
            }else{
                $.post("<?php echo site_url('admin/login/ajaxrequest'); ?>",
                { 
                    email:emailInput,
                    password:passwordInput
                },
                function(result){
                    if(result.status == 'failed')
                    {
                        $.displayError(result.message);
                    }else{                    
                        $.displayInfo(result.message,function(){
                            window.location.href = site_url+$("#redirect_to").val();
                        });                        
                    }              
                },
                "json");
            }
        })
    </script>

    <div id="errorPanel">
      <div id="errorOverlay">
        <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data Error!</span> -->
      </div>
      <div id="errorContent">
        <div class="infoError">
            <i class="glyphicon glyphicon-warning-sign"></i> <span>Data Error!</span>
          </div>
        
        <div id="errorMsg">
          <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data Error!</span> -->
        </div>

        <div class="buttonerror">
          <button id="btnOkError">OK</button>
        </div>

      </div>
    </div>

    <div id="confirmPanel">
      <div id="confirmOverlay">
      </div>
      <div id="confirmContent">
        <div class="info">
        <i class="glyphicon glyphicon-question-sign"></i> <span>Konfirmasi!</span>
        </div>

        <div id="confirmMsg">
        </div>

        <div class="buttonConfirm">
          <button id="btnYesConfirm">Yes</button>
          <button id="btnNoConfirm">No</button>
        </div>

      </div>
    </div>

    <div id="infoPanel">
      <div id="infoOverlay">
      <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data info!</span> -->
      </div>
      <div id="infoContent">
        <div class="infoinfo">
          <i class="glyphicon glyphicon-info-sign"></i> <span>Data info!</span>
        </div>

        <div id="infoMsg">
        <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data info!</span> -->
        </div>

        <div class="buttoninfo">
          <button id="btnOkInfo">OK</button>
        </div>

      </div>
    </div>
</body>

</html>
