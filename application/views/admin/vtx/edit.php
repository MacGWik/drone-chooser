        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit VTX</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/vtx/edit/<?= $datavtx->id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?= $datavtx->name ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Power Output</label>
                                    <div class="input-group"> 
                                        <input class="form-control" type="text" name="power_output" value="<?= $datavtx->power_output ?>" required="">
                                        <span class="input-group-addon" id="basic-addon1">mW</span>
                                    </div>
                                </div>
                            </div>
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