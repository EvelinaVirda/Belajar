
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
<br>
          <div class="row">
            <?php 
                $no = 1;
                foreach($makanan as $u){
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img width="100%" src='<?=base_url()?>gambar/<?=$u->gambar;?>'></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $no++; ?></a>
                  </h4>
                  <h5><?php echo $u->makanan ?> </h5>
                  <p class="card-text"><?php echo "Rp. ".$u->harga ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
                <?php } ?>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>


            

	