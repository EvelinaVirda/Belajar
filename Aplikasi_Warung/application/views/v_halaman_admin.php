
	<div id="background">
		<div id="page">
			
			<div id="contents">
				
		
					<div>
						<div class="body">
							<h1>Pesan</h1>
                            <table border="1">
                            <tr>
                                <th>Nama</th>
                                <th>Teleponr</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>

                            <?php 
                                foreach($pesans as $u){
                            ?>
                                <tr>
                                    <td><?php echo $u->nama ?></td>

                                    <td><?php echo $u->no_telp ?> </td>
                                
                                    <td><?php echo $u->pesan ?> </td>
                                
                                   <td>
                                        <?php echo anchor('admin/hapus_pesan/'.$u->id,'hapus'); ?>
                                    </td>
                                </tr>
                                
                            <?php } ?>
                            </table>
                            
						</div>
					</div>

                    
				</div>
			</div>
		</div>
		
	</div>
