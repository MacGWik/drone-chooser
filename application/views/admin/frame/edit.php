                <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Frame</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/frame/edit/<?= $dataframe->id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" required="" value="<?= $dataframe->name ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Size</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="size" required="" value="<?= $dataframe->size ?>">
                                        <span class="input-group-addon" id="basic-addon1">mm (diagonally Motor-to-Motor)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Weight</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="weight" required="" value="<?= $dataframe->weight ?>">
                                        <span class="input-group-addon" id="basic-addon1">g</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Purpouse</label>
                            <select class="form-control select2" type="text" name="purpouse" required="">
                                <option value=""></option>
                                <?php foreach($datapurpouse as $key => $value){ ?>
                                    <option value="<?= $key ?>" <?= ($dataframe->purpouse == $key ? 'selected' : '') ?> ><?= $value ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Battery Mount</label>
                            <select class="form-control select2" type="text" name="battery_mount" required="">
                                <option value=""></option>
                                <?php foreach($databatterymount as $key => $value){ ?>
                                    <option value="<?= $key ?>" <?= ($dataframe->battery_mount == $key ? 'selected' : '') ?> ><?= $value ?></option>
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
                                    <option value="<?= $value['id'] ?>" <?= ($dataframe->prop_size_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?> Inch</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Motor Size</label>
                            <select class="form-control select2" type="text" name="motor_size_id" required="">
                                <option value=""></option>
                                <?php foreach($datamotorsize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataframe->motor_size_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>FC Mount Option</label>
                            <select class="form-control select2" type="text" name="fc_mount_option_id" required="">
                                <option value=""></option>
                                <?php foreach($datafcmountoption as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataframe->fc_mount_option_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>FPV Camera Size</label>
                            <select class="form-control select2" type="text" name="cam_size_id" required="">
                                <option value=""></option>
                                <?php foreach($datacamsize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataframe->cam_size_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Frame Type</label>
                            <select class="form-control select2" type="text" name="frame_type_id" required="">
                                <option value=""></option>
                                <?php foreach($dataframetype as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataframe->frame_type_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>