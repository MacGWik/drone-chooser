    <div id="page-wrapper" style="<?= (($this->session->userdata('name')) ? "" : "margin:0px;") ?>" >
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="page-header">Hasil Rakitan Drone <span id="build_name"><?= $build->name; ?></span></h1>
                </div>
                <!-- /.col-lg-10 col-lg-offset-1 -->
            </div>
            <!-- /.row -->

            <div class="row" id="itemContainer" style="text-align: center;">
                <div class="col-lg-10 col-lg-offset-1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Jenis Komponen</th>
                                <th style="text-align: center;">Komponen Terpilih</th>
                                <th style="text-align: center;">Alasan</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: left;">
                            <tr>
                                <td>Frame</td>
                                <td><?= $frame->name ?></td>
                                <td><?= $reason->frame ?></td>
                            </tr>
                            <tr>
                                <td>Battery Size</td>
                                <td><?= $batterysize->name ?>S</td>
                                <td><?= $batterysize->name ?>S adalah pilihan user ketika perakitan</td>
                            </tr>
                            <tr>
                                <td>Flight Controller</td>
                                <td><?= $fc->name ?></td>
                                <td><?= $reason->fc ?></td>
                            </tr>
                            <tr>
                                <td>Video Transmitter</td>
                                <td><?= $vtx->name ?></td>
                                <td><?= $reason->vtx ?></td>
                            </tr>
                            <tr>
                                <td>FPV Camera</td>
                                <td><?= $fpv_cam->name ?></td>
                                <td><?= $reason->fpv_cam ?></td>
                            </tr>
                            <tr>
                                <td>Motor</td>
                                <td><?= $motor->name ?></td>
                                <td><?= $reason->motor ?></td>
                            </tr>
                            <tr>
                                <td>Propeler</td>
                                <td><?= $prop->name ?></td>
                                <td><?= $reason->prop ?></td>
                            </tr>
                            <tr>
                                <td>ESC</td>
                                <td><?= $esc->name ?></td>
                                <td><?= $reason->esc ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
