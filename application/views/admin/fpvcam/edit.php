        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit FPV Camera</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/fpvcam/edit/<?= $datafpvcam->id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?= $datafpvcam->name ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Camera Size</label>
                            <select class="form-control select2" type="text" name="cam_size_id" required="">
                                <option value=""></option>
                                <?php foreach($datacamsize as $key => $value){ ?>
                                    <option value="<?= $value['id'] ?>" <?= ($datafpvcam->cam_size_id == $value['id'] ? 'selected' : '') ?> ><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-default" name="submit">Update</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>