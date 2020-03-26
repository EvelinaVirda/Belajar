    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit makanan</h1>
                </div>
            </div> 
 
            <?php echo form_open_multipart('admin/update_makanan');
           foreach($makanan as $k) {
           ?>
            <input type="hidden" name="id" value="<?php echo $k->id; ?>">
                     <div class="row control-group">
                            Kategori<br>
                                <select name="kategori" class="form-control">
                                <option value="<?php echo $k->kategori ;?>"><?php echo $k->kategori ;?></option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Lain">Lain</option>
                                </select>
                        </div>
                        <br>
                        <div class="row control-group">
                            Nama Makanan/Minuman<br>
                                <input type="text" value="<?php echo $k->makanan ;?>" name="makanan">
                        </div>
                        <br>
                            Harga
                        <div class="row control-group">
                                <input type="text" value="<?php echo $k->harga ;?>" name="harga">
                        </div>
                         <br>
                        
 
                    <div class="form-group">
                        <img max-height="100%" width="150px" src="<?php echo base_url().'gambar/'.$k->gambar ;?>"> <br>
                        <label>gambar</label>
                        <input class="form-control" type="file" name="gambar">
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <input class="btn" type="submit" name="submit" value="Tambah">
                    </div>
                </form>
 
        </div>
    </div>