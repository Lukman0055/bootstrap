
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>ASSALAAM BOOK STORE</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<h2><center>Assalaam Book Store</center></h2>
<div class="countainer">
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Pembelian Buku</b></div>
                    <div class="card-body" >
                <form action="buku2.php" method="POST">
                    <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alm" class="form-control" rows="5" required></textarea>
                    <div class="form-group">
                    <label for"">Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="Laki-laki" >Laki-laki<br>
                    <input type="radio" name="jk" value="Perempaun" >Perempaun<br>    
                    </div>
                    <div class="form-group">
                    <label for="">Tanggal Pembelian</label>
                    <input type="date" name="tp" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Jumlah Buku</label>
                    <input type="number" name="jb" class="form-control" required>
                    </div>
                    <button type="submit" name="prs" class="btn btn-outline-primary">Proses</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                </form>
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