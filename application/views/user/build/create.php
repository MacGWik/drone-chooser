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
    <link href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/datatables/media/css/jquery.dataTables.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?= base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css">

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

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <script>
        var site_url = "<?= site_url(); ?>";
        var class_user = "<?= $this->session->userdata('class') ?>";
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?><?= $this->session->userdata('class') ?>/dashboard">Aplikasi Sistem Pakar Pemilihan Spesifikasi Drone</a>
            </div>
            <!-- /.navbar-header -->

            <?php if($this->session->userdata('name')){ ?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('name'); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a id="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <?php } ?>
        </nav>
    </div>
    <div id="page-wrapper" style="margin:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rakit Drone</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>tipe/create" enctype="multipart/form-data">
                <div class="row" id="itemContainer" style="text-align: center;">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="form-group">
                            <label>Apa tujuan Anda merakit drone ?</label><br/>
                            <?php foreach($purpouse as $key => $value){ ?>
                                <input type="radio" value="<?= $key ?>" name="purpouse"> <?= $value ?>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Dimana Baterai Anda ingin anda letakan ?</label><br/>
                            <?php foreach($batterymount as $key => $value){ ?>
                                <input type="radio" value="<?= $key ?>" name="batterymount"> <?= $value ?>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Tipe Frame Apa yang anda Sukai ?</label><br/>
                            <?php foreach($frametype as $key => $value){ ?>
                                <input type="radio" value="<?= $value['id'] ?>" name="frame_type_id"> <?= $value['name'] ?>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Apa Ukuran Baterai yang akan anda gunakan (dalam hitungan jumlah sel) ?</label><br/>
                            <?php foreach($batterysize as $key => $value){ ?>
                                <input type="radio" value="<?= $value['id'] ?>" name="battery_size_id"> <?= $value['name'] ?>S
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Jenis Motor apa yang anda sukai ?</label><br/>
                            <?php foreach($motorkv as $key => $value){ ?>
                                <input type="radio" value="<?= $key ?>" name="motor_kv_variant"> <?= $value ?>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Berapa pitch prop yang anda ingin gunakan ?</label><br/>
                            <?php foreach($proppitch as $key => $value){ ?>
                                <input type="radio" value="<?= $value['id'] ?>" name="prop_pitch_id"> <?= $value['name'] ?> 
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Software Flight Controller (FC) apa yang anda ingin gunakan ?</label><br/>
                            <?php foreach($fcsoftware as $key => $value){ ?>
                                <input type="radio" value="<?= $value['id'] ?>" name="fc_software_id"> <?= $value['name'] ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-default btn-block" id="btnBuild">Mari Buat Rancangan !</button>
                    </div>    
                </div>
            </form>
        </div>
    </div>
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

    <!-- Select2 JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

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

    <script>
      $(document).ready(function(){
        $('.select2').select2({
          placeholder: "Select a Data"
        });

        $('.select2proppitch').select2({
          placeholder: "Prop Pitch"
        })

        $('#btnBuild').click(function(){
            var purpouseInput = $("input[name='purpouse']:checked").val();
            var batterymountInput = $("input[name='batterymount']:checked").val();
            var frame_type_idInput = $("input[name='frame_type_id']:checked").val();
            var battery_size_idInput = $("input[name='battery_size_id']:checked").val();
            var motor_kv_variantInput = $("input[name='motor_kv_variant']:checked").val();
            var prop_pitch_idInput = $("input[name='prop_pitch_id']:checked").val();
            var fc_software_idInput = $("input[name='fc_software_id']:checked").val();

            if(purpouseInput == undefined || batterymountInput == undefined || frame_type_idInput == undefined || battery_size_idInput == undefined || motor_kv_variantInput == undefined || prop_pitch_idInput == undefined || fc_software_idInput == undefined){
                $.displayError("Harap Masukkan Semua Data Terlebih Dahulu !");
            }else{
                $.post("<?php echo site_url('user/build/ajaxrequest'); ?>",
                { 
                    purpouse:purpouseInput,
                    batterymount:batterymountInput,
                    frame_type_id:frame_type_idInput,
                    battery_size_id:battery_size_idInput,
                    motor_kv_variant:motor_kv_variantInput,
                    prop_pitch_id:prop_pitch_idInput,
                    fc_software_id:fc_software_idInput
                },
                function(result){
                    // if(result.status == 'failed')
                    // {
                    //     $.displayError(result.message);
                    // }else{                    
                    //     $.displayInfo(result.message,function(){
                    //         window.location.href = site_url+$("#redirect_to").val();
                    //     });                        
                    // }              
                },
                "json");
            }
        })
      })
    </script>
</body>

</html>