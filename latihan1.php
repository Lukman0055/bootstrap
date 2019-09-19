<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">LUKMAN </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">LATIHAN1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">LATIHAN2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KELAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">XI RPL 1</a>
          <a class="dropdown-item" href="#">XI RPL 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">XI RPL 3</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ASSALAAM</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="countainer">
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" align="center"><h2><b>Formulir PPDB SMK ASSALAAM BANDUNG</b></h2></div>
                <div class="card-body" >
                <form action="" method="POST">
                    <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alm" class="form-control" rows="5" required></textarea>
                    <div class="form-group">
                    <label for"">Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="Laki-laki" checked>Laki-laki
                    <input type="radio" name="jk" value="Perempaun" >Perempaun<br>    
                    </div>
                    <div class="form-group">
                    <label for="">Asal Sekolah</label>
                    <input type="text" name="as" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Nilai Bahasa Indonesia</label>
                    <input type="number" name="bi" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Nilai Matematika</label>
                    <input type="number" name="nm" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Nilai Ipa</label>
                    <input type="number" name="ip" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Nilai Bahasa Inggris</label>
                    <input type="number" name="nb" class="form-control" required>
                    </div>
                    <button type="submit" name="spm"class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
                    <?php
                        if (isset($_POST['spm'])) {
                            $nama= $_POST['nama'];
                            $alm= $_POST['alm'];
                            $jenisk= $_POST['jk'];
                            $asals= $_POST['as'];
                            $nbi= $_POST['bi'];
                            $nnm= $_POST['nm'];
                            $nip= $_POST['ip'];
                            $nnb= $_POST['nb'];
                            $rt= ($nbi+$nnm+$nip+$nnb)/4;
                            if ($rt > 65) {
                                $ket="Diterima";
                            }elseif ($rt < 65) {
                                $ket="Tidak Diterima";
                            }
                        }
                    ?>
                    </div>               
                </div>
            </div>
        </div>

        <div class="col-md-12" style="background:none">
        <center>
        <h3><b>HASIL</b></h3>
        </center>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>J.kelamin</th>
                        <th>A.Sekolah</th>
                        <th>B.indo</th>
                        <th>MTK</th>
                        <th>IPA</th>
                        <th>B.Ingg</th>
                        <th>rata</th>
                        <th>KET</>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $alm; ?></td>
                        <td><?php echo $jenisk; ?></td>
                        <td><?php echo $asals; ?></td>
                        <td><?php echo $nbi; ?></td>
                        <td><?php echo $nnm; ?></td>
                        <td><?php echo $nip; ?></td>
                        <td><?php echo $nnb; ?></td>
                        <td><?php echo $rt; ?></td>
                        <td><?php echo $ket; ?></td>
                    </tr>
                </table>     
            </div>            
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootsrtap.bundle.js"></script>
    <script src="/assets/js/bootsrtap.bundle.min.js"></script>
    
</body>
</html>
