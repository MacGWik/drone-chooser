        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Frame</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/frame/create" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Size</label>
                                    <input class="form-control" type="text" name="size" required="">
                                </div>
                            </div>
                            <div class="col-lg-4" >
                                <label class="note-label">mm (diagonally Motor-to-Motor)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input class="form-control" type="text" name="weight" required="">
                                </div>
                            </div>
                            <div class="col-lg-4" >
                                <label class="note-label">g</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Purpouse</label>
                            <select class="form-control select2" type="text" name="purpouse" required="">
                                <option value=""></option>
                                <?php foreach($datapurpouse as $key => $value){ ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
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
                                    <option value="<?= $key ?>"><?= $value ?></option>
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
                            <label>Motor Size</label>
                            <select class="form-control select2" type="text" name="motor_size_id" required="">
                                <option value=""></option>
                                <?php foreach($datamotorsize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?> Degree</option>
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
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
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
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
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
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
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