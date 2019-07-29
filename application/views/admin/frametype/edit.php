        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Frame Type</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/frametype/edit/<?= $dataframetype->id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Frame Type</label>
                            <input class="form-control" type="text" name="name" value="<?= $dataframetype->name ?>" required="">
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