        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <form role="form" method="post" action="<?= base_url() ?>barang/edit/<?= $dataBarang->barang_id ?>" enctype="multipart/form-data">
                <div class="row" id="itemContainer">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input class="form-control" type="text" name="nama" value="<?= $dataBarang->nama ?>">
                        </div>
                        <div class="form-group">
                            <label>Grup</label>
                            <select name="grup_id" class="form-control">
                                <option value=""  disabled>Pilih Grup</option>
                                <?php foreach($grup_option as $key => $value){ ?>                                
                                    <?php if($value['id'] == $dataBarang->grup_id){?>
                                <option value="<?= $value['id'] ?>" selected><?= $value['grup_nama'] ?></option>
                                    <?php }else{ ?>                                
                                <option value="<?= $value['id'] ?>"><?= $value['grup_nama'] ?></option>
                                    <?php } ?> 
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tipe</label>
                            <select name="tipe_id" class="form-control">
                                <option value="" disabled>Pilih Tipe</option>
                                <?php foreach($tipe_option as $key => $value){ ?>
                                    <?php if($value['id'] == $dataBarang->tipe_id){?>
                                <option value="<?= $value['id'] ?>" selected><?= $value['tipe_nama'] ?></option>
                                    <?php }else{ ?>                                
                                <option value="<?= $value['id'] ?>"><?= $value['tipe_nama'] ?></option>
                                    <?php } ?>                                
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input class="form-control" type="text" name="qty" value="<?= $dataBarang->qty ?>">
                            <input type="hidden" name="barang_id" value="<?= $dataBarang->barang_id ?>">
                        </div>
                        <div class="form-group">
                            <label>Keterangan Barang</label>
                            <textarea class="form-control" name="keterangan"> <?= $dataBarang->keterangan ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input class="form-control" type="text" name="lokasi" value="<?= $dataBarang->lokasi ?>">
                        </div>
                        <div class="form-group">
                            <label>Status Penggunaan</label>
                            <select name="status_penggunaan" class="form-control">
                                <option value="" disabled>Pilih Status Penggunaan</option>
                                <?php foreach($status_penggunaan_option as $key => $value){ ?>
                                    <?php if($key == $dataBarang->status_penggunaan){?>
                                <option value="<?= $key ?>" selected><?= $value ?></option>
                                    <?php }else{ ?>                                
                                <option value="<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label>Gambar Barang</label>
                            <input type="file" name="gambar">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-default" name="submitBarang">Submit Barang</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>