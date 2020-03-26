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
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<h1>About</h1>
							<h2>We Have Free Templates for Everyone</h2>
							<p>
								Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What's more, they're absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="http://www.freewebsitetemplates.com/about/terms/">Terms of Use</a>. You can even remove all our links if you want to.
							</p>
							<p>
								We Have More Templates for You. Looking for more templates? Just browse through all our <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> and find what you're looking for. But if you don't find any website template you can use, you can try our <a href="http://www.freewebsitetemplates.com/freewebdesign/">Free Web Design</a> service and tell us all about it. Maybe you're looking for something different, something special. And we love the challenge of doing something different and something special.
							</p>
							<hr>
							<div class="ads">
								<h2>Our Crews</h2>
											<?php foreach($user as $u){ ?>
												<p>
												<?php echo $u->nama ?> &#45;
												<?php echo $u->alamat ?> &#45;
												<?php echo $u->pekerjaan ?>
												</p>
											<?php } ?>
							</div>
							<h2>Be Part of Our Community</h2>
							<p>
								If you're experiencing issues and concerns about this website template, join the discussion <a href="http://www.freewebsitetemplates.com/forums/">on our forum</a> and meet other people in the community who share the same interests with you.
							</p>
							<h2>Template details</h2>
							<p>
								https://startbootstrap.com/template-overviews/shop-homepage/
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		