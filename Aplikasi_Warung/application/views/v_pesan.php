<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/css/shop-homepage.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/css/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Warung Nasi Yang Dirindukan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"  href="<?php echo base_url().'index.php/beranda' ?>">Beranda</a></li>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="<?php echo base_url().'index.php/beranda/menu' ?>">Menu</a></li>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="<?php echo base_url().'index.php/beranda/about' ?>">Tentang</a></li>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="<?php echo base_url().'index.php/beranda/pesan' ?>">Kontak Kami</a></li>
            </li>
             <li class="nav-item">
              <a class="nav-link"  href="<?php echo base_url().'index.php/beranda/login' ?>">Login</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="col-xm-8">
    <div class="container">
                       <div class="panel-heading">
                        <h3 class="panel-title">Kontak Kami</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url('beranda/kirim_pesan'); ?>" method="post">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Telepon" name="telp" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="pesan" placeholder="Tulis Pesan"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Kirim" class="btn btn-primary btn-lg">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                        </form>
                </div></div>
</div>



