<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="countainer">
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Jenis Buku</b></div>
                    <div class="card-body" >
                <form action="jumlahb.php" method="POST">
                    <?php
                    if (isset($_POST['prs'])) {
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alm'];    
                    $jkelamin = $_POST['jk'];
                    $tbeli = $_POST['tp'];
                    $jumlah = $_POST['jb'];    
                    for ($i=1; $i <= $jumlah ; $i++) { 
                    ?>
                    <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="jd[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Kode Buku</label>
                    <input name="kb[]" class="form-control" rows="5" required>
                    <div class="form-group">
                    <label for"">Pengarang</label><br>
                    <input type="text" name="pg[]" class="form-control" >    
                    </div>
                    <div class="form-group">
                    <label for="">Jenis Buku</label>
                    <select class="form-control" name="jenis[]">
                    <option>Novel</option>
                    <option>Fiksi</option>
                    <option>Horror</option>
                    <option>Cerpen</option>
                    <option>Komik</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="">Harga Buku</label>
                    <input type="number" name="harga[]" class="form-control" required>
                    </div>
                    <hr>
                    <?php } ?>
                    <input type="hidden" name="nama" value="<?php echo"$nama"?>">
                    <input type="hidden" name="alamat" value="<?php echo"$alamat"?>">
                    <input type="hidden" name="jkelamin" value="<?php echo"$jkelamin"?>">
                    <input type="hidden" name="jumlah" value="<?php echo"$jumlah"?>">
                    <input type="hidden" name="tbeli" value="<?php echo"$tbeli"?>">
                    <button type="submit" name="smp" class="btn btn-outline-primary">Simpan</button>
                    <input type="reset" value="Reset "class="btn btn-outline-warning">
                </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootsrtap.bundle.js"></script>
    <script src="/assets/js/bootsrtap.bundle.min.js"></script>
</body>
</html>