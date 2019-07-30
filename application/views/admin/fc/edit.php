        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit FC</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/fc/edit/<?= $datafc->id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?= $datafc->name ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>FC Software</label>
                            <select class="form-control select2" type="text" name="fc_software_id" required="">
                                <option value=""></option>
                                <?php foreach($datafcsoftware as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?> " <?= ($datafc->fc_software_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>ESC Software</label>
                            <select class="form-control select2" type="text" name="esc_software_id" required="">
                                <option value=""></option>
                                <?php foreach($dataescsoftware as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($datafc->esc_software_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
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
                                    <option value="<?= $value['id'] ?>" <?= ($datafc->fc_mount_option_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
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