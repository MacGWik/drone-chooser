        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Motor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/motor/create" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Motor Size</label>
                            <select class="form-control select2" type="text" name="motor_size_id" required="">
                                <option value=""></option>
                                <?php foreach($datamotorsize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Motor KV</label>
                            <select class="form-control select2" type="text" name="motor_kv_id" required="">
                                <option value=""></option>
                                <?php foreach($datamotorkv as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?>KV</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Prop Size</label>
                            <select class="form-control select2" type="text" name="prop_size_id" required="">
                                <option value=""></option>
                                <?php foreach($datapropsize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?> Inch</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Battery Size</label>
                            <select class="form-control select2" type="text" name="battery_size_id" required="">
                                <option value=""></option>
                                <?php foreach($databatterysize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?>S</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="submit" class="btn btn-default" name="submit">Submit</button>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="row" style="margin-top:15px;">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Ampere Pulled By Motor</div>    
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-success" type="button" id="btnAdd">Add more</button>
                            </div>
                            <table class="table" id="ampere-pull-container">
                                <tr>
                                    <td style="width:613px;">
                                        <select class="form-control select2proppitch" type="text" name="prop_pitch_id[]" id="" required="">
                                            <option value=""></option>
                                            <?php foreach($dataproppitch as $key => $value){ ?>
                                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?> Degree</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control ampere" name="ampere[]" placeholder="Ampere Pulled" required="">                                            
                                            <span class="input-group-addon" id="basic-addon1">A</span>
                                        </div>
                                    </td>
                                    <td style="width:129px;">
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>

<script>
    var row = 1;
    $('#btnAdd').click(function(){
        row = row+1;
        var addRow =    '<tr id="ampere-pull-'+row+'">'+
                            '<td>'+
                                '<select class="form-control select2proppitch" type="text" name="prop_pitch_id[]" id="" required="">'+
                                    '<option value=""></option>'+
                                    '<?php foreach($dataproppitch as $key => $value){ ?>'+
                                        '<option value="<?= $value["id"] ?>"><?= $value["name"] ?> Degree</option>'+
                                    '<?php } ?>'+
                                '</select>'+
                            '</td>'+
                            '<td>'+
                                '<div class="input-group">'+
                                    '<input type="text" class="form-control ampere" name="ampere[]" placeholder="Ampere Pulled" required="">                                            '+
                                    '<span class="input-group-addon" id="basic-addon1">A</span>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<button type="button" class="btn btn-danger btnRemove" data-row="'+row+'">Remove</button>'+
                            '</td>'+
                        '</tr>';
        $('#ampere-pull-container').append(addRow);
        $('.select2proppitch').select2({
          placeholder: "Prop Pitch"
        })
    });

    $("#ampere-pull-container").on('click', '.btnRemove', function(e){
        var row = $(this).data('row');
        $.displayConfirm('Are you sure want to remove the data ?',function(){
            $('#ampere-pull-'+row).remove();
        }) 
    })
</script>