<section>
<h1><?php echo $judul ?></h1>
	<form action="<?php echo base_url('kalkulator/hitung'); ?>" method="post">
		<input type="number" name="angka1" placeholder="angka 1">
		<input type="radio" name="operator" value="+">+
		<input type="radio" name="operator" value="/">/
		<input type="radio" name="operator" value="*">*
		<input type="radio" name="operator" value="/">/
		<input type="number" name="angka2" placeholder="angka 2">
		<input type="submit" value="hitung">
	</form>
</section>