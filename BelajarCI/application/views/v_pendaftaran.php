<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
</head>
<body>
	 <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Karyawan Baru</h1>
                </div>
            </div>
                <?php echo form_open_multipart('karyawan/input_karyawan'); ?>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" name="nama" placeholder="Nama Karyawan...">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Username...">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="Password...">
                    </div>
 
                    <div class="form-group">
                        <label>Jenis Kelamin Karyawan</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option selected="">--Pilih Jenis Kelamin--</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alamat Karyawan</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Karyawan..."></textarea>
                    </div>
 
                    <div class="form-group">
                        <label>Foto Karyawan</label>
                        <input class="form-control" type="file" name="foto">
                    </div>
 
                    <div class="form-group">
                        <input class="btn" type="submit" name="submit" value="Tambah">
                    </div>
                </form>
 
        </div>
    </div>
</body>
</html>