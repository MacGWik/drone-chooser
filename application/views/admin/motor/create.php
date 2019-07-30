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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="submit" class="btn btn-default" name="submit">Submit</button>
                            </div>
                        </div>    
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                            <h3 style="float:left;">Ampere Pulling By Motor</h3>
                            <button type="button" id="addAmperePull">Add Ampere Data</button>
                    </div>
                </div> -->
                <div class="row" style="margin-top:15px;">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="col-lg-6">
                                    Ampere Pulled By Motor    
                                </div>
                                 
                                <div class="col-lg-6" style="text-align:right;">
                                </div>
                            </div>
                            <div class="panel-body" id="ampereContainer">
                                <button class="btn btn-success btnAdd">Add more</button>
                                <div class="form-inline">
                                    <div class="form-group">
                                        
                                    </div>
                                    <div class="form-group">
                                        
                                    </div>
                                    <div class="form-group">
                                        
                                    </div>
                                </div>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        <select class="form-control select2proppitch" type="text" name="prop_pitch_id[]" id="" required="">
                                            <option value=""></option>
                                            <?php foreach($dataproppitch as $key => $value){ ?>
                                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?> Degree</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputPassword3" placeholder="Ampere Pulled">                                            
                                            <span class="input-group-addon" id="basic-addon1">A</span>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">Remove</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>