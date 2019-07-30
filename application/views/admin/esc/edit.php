        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit ESC</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/esc/edit/<?= $dataesc->id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?= $dataesc->name ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Ampere Rating</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="ampere_rating" value="<?= $dataesc->name ?>" required="">
                                        <span class="input-group-addon" id="basic-addon1">A</span>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>ESC Software</label>
                            <select class="form-control select2" type="text" name="esc_software_id" required="">
                                <option value=""></option>
                                <?php foreach($dataescsoftware as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataesc->esc_software_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Lowest Battery Rating</label>
                            <select class="form-control select2" type="text" name="start_battery_size_id" required="">
                                <option value=""></option>
                                <?php foreach($databatterysize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataesc->start_battery_size_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?>S</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Highest Battery Rating</label>
                            <select class="form-control select2" type="text" name="end_battery_size_id" required="">
                                <option value=""></option>
                                <?php foreach($databatterysize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($dataesc->end_battery_size_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?>S</option>
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