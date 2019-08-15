    <div id="page-wrapper" style="<?= (($this->session->userdata('name')) ? "" : "margin:0px;") ?>" >
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
   

    <script>
      $(document).ready(function(){
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
                    if(result.status == 'failed')
                    {
                        $.displayError(result.message,function(){
                            $.displayConfirm("Apakah anda tetap ingin melihat rakitan nya ?", function(){
                                window.location.href = site_url+"user/build/view/"+result.build_id;
                            })
                        });
                    }else{                    
                        $.displayInfo(result.message,function(){
                            window.location.href = site_url+"user/build/view/"+result.build_id;
                        });                        
                    }              
                },
                "json");
            }
        })
      })
    </script>
