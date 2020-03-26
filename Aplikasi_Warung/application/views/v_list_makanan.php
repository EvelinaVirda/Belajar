
	<div id="background">
		<div id="page">
			
			<div id="contents">
				
		
					<div>
						<div class="body">
                            <table border="1">
                            <tr>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>Makanan</th>
                                <th>Harga</th>
                                <th>gambar</th>
                                <th>Aksi</th>
                            </tr>

                            <?php 
                                $no = $this->uri->segment('3') + 1;
                                foreach($makanan as $u){
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>

                                    <td><?php echo $u->kategori ?> </td>
                                
                                    <td><?php echo $u->makanan ?> </td>
                                
                                    <td><?php echo $u->harga ?> </td>

                                    <td><img width="50px" height="50px" src='<?=base_url()?>gambar/<?=$u->gambar;?>'></td>
                                
                                    <td><?php echo anchor('admin/edit_makanan/'.$u->id,'edit'); ?>
                                        <?php echo anchor('admin/hapus_makanan/'.$u->id,'hapus'); ?>
                                    </td>
                                </tr>
                                
                            <?php } ?>
                            </table>
                            <?php
            echo $this->pagination->create_links();
            ?>
						</div>
					</div>

                    
				</div>
			</div>
		</div>
		
	</div>
