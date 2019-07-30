        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Battery Size</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/batterysize/create" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Battery Size</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="name" required="">
                                        <span class="input-group-addon" id="basic-addon1">S (Battery Cell Count)</span>
                                    </div>
                                </div>
                            </div>
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