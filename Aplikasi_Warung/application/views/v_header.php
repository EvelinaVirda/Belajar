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
    <div class="container">

      <div class="row">
 
        <div class="col-lg-3">

          <h3 class="my-4">Kategori</h3>
          <div class="list-group">
            <a href="<?php echo base_url().'index.php/kategori/makanan' ?>" class="list-group-item">Makanan</a>
            <a href="<?php echo base_url().'index.php/kategori/minuman' ?>" class="list-group-item">Minuman</a>
            <a href="<?php echo base_url().'index.php/kategori/lainnya' ?>" class="list-group-item">Lainnya</a>
          </div>

        </div>



