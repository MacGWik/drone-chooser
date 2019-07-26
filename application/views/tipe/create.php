        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Tipe</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>tipe/create" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>ID Tipe</label>
                            <input class="form-control" type="text" name="id" maxlength="3">
                        </div>
                        <div class="form-group">
                            <label>Nama Tipe</label>
                            <input class="form-control" type="text" name="tipe_nama">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-default" name="submitTipe">Submit Tipe</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>