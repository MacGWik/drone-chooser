    <div id="page-wrapper" style="<?= (($this->session->userdata('name')) ? "" : "margin:0px;") ?>" >
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="page-header">
                        Hasil Rakitan Drone 
                        <span id="build_name"><?= $build->name; ?></span>
                        
                        <?php if(is_null($build->user_owner_id) && $this->session->userdata('class') == "user"){ ?>
                        <button type="button" class="btn btn-default" id="btnOwnership">Take Ownership of the Build</button>
                        <?php } ?>

                        <span style="font-size: 20px;display: none;" id="btnEditing">
                            <i class="fa fa-times fa-fw" id="btnCancelName"></i>
                            <i class="fa fa-check fa-fw" id="btnSaveName"></i>
                        </span>
                        <span style="font-size: 20px;">
                            <i class="fa fa-pencil fa-fw" id="btnEditName" style="display: none;"></i>
                        </span> 

                        <input type="hidden" id="id_build" value="<?= $build->id ?>">
                    </h1>
                </div>
                <!-- /.col-lg-10 col-lg-offset-1 -->
            </div>
            <!-- /.row -->

            <div class="row" id="itemContainer" style="text-align: center;">
                <div class="col-lg-10 col-lg-offset-1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;width: 10%;">Jenis Komponen</th>
                                <th style="text-align: center;width: 15%;">Komponen Terpilih</th>
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
    function editing(){
        $('#build_name').attr('contentEditable',true);
        $('#build_name').focus();
        $('#btnEditing').show();
        $('#btnEditName').hide();
    }

    function reset_button(){
        $('#build_name').attr('contentEditable',false);
        $('#btnEditing').hide();
        $('#btnEditName').show();
    }

    function hideTakeOwnership(){
        $('#btnOwnership').hide();
    }

    function cancel(){
        var build_id = $('#id_build').val();
        
        $.post("<?php echo site_url('user/build/ajaxrequestView'); ?>",
        { 
            process:"getBuildName",
            id:build_id
        },
        function(result){
            if(result.status == 'success')
            {
                $('#build_name').html(result.build_name);
                reset_button();
            }
            else
            {
                $.displayError('Error Happened !');
            }                 
        },
        "json");
    }

    function save(){
        var build_id = $('#id_build').val();
        var build_name = $('#build_name').text();

        if(build_name == "")
        {
            $.displayError('Nama Rakitan Tidak Boleh Kosong !', function(){
                cancel();
            });
        }
        else
        {
            $.post("<?php echo site_url('user/build/ajaxrequestView'); ?>",
            { 
                process:"setBuildName",
                id:build_id,
                name:build_name
            },
            function(result){
                if(result.status == 'success')
                {
                    reset_button();
                }
                else
                {
                    $.displayError('Error Happened !');
                }                 
            },
            "json");
        }
    }

    function takeOwnership() {
        var build_id = $('#id_build').val();

        $.post("<?php echo site_url('user/build/ajaxrequestView'); ?>",
        { 
            process:"takeOwnership",
            id:build_id
        },
        function(result){
            if(result.status == 'success')
            {
                hideTakeOwnership();
                reset_button();
            }
            else
            {
                $.displayError('Error Happened !');
            }                 
        },
        "json");
    }

    $(document).ready(function(){
        <?php if($this->session->userdata('id') == $build->user_owner_id && $this->session->userdata('class') == "user"){ ?>
            reset_button();
        <?php } ?>
        $('#build_name').click(function(event){
            editing();
        });

        $('#btnEditName').click(function(event) {
            editing();
        });

        $('#btnCancelName').click(function(event) {
            cancel();
        });

        $('#btnSaveName').click(function(event) {
            save();
        });

        $('#btnOwnership').click(function(event) {
            $.displayConfirm("Apakah Kamu Yakin ingin Mengambil Alih Kepemilikan Rakitan Ini ?",function(){
                takeOwnership();
            })
        });
      })
    </script>
