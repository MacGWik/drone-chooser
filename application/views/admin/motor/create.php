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
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>