        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Prop Size</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>admin/propsize/create" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Prop Size</label>
                                    <input class="form-control" type="text" name="name" required="">
                                </div>
                            </div>
                            <div class="col-lg-4" style="padding-top: 28px;">
                                <label>Inch</label>
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