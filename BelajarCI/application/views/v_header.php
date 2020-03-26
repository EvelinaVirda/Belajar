<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MalasNgoding | Membuat Template sederhana codeigniter</title>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/css/style.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>MalasNgoding.com</h1>
				<h3>Membuat template sederhana codeigniter</h3>
			</hgroup>
			<nav>
				<ul>
					<li><?php echo anchor('web','home') ?></li>
					<li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
					<li><?php echo anchor('web/v_login','Login')?></li>
					<li><?php echo anchor('karyawan/','Daftar')?></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>