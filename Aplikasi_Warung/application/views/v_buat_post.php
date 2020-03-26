
	<div id="background">
		<div id="page">
			
			<div id="contents">
				
		
					<div>
						<div class="body">
					 <?php echo form_open_multipart('admin/tambah_makanan'); ?>
                       
                        <div class="row control-group">
                        	Kategori<br>
                                <select name="kategori" class="form-control">
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Lain">Lain</option>
                                </select>
                        </div>
                        <br>
                        <div class="row control-group">
                        	Nama Makanan/Minuman<br>
                                <input type="text" name="makanan">
                        </div>
                        <br>
                            Harga
                        <div class="row control-group">
                                <input type="text" name="harga">
                        </div>
                         <br>
                         Gambar
                        <div class="row control-group">
                                <input type="file" name="gambar">
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" name="submit" value="SEND">
                            </div>
                        </div>
                    </form>    
						</div>
					</div>

                    
				</div>
			</div>
		</div>
		
	</div>
