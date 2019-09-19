<?php
if (isset($_POST['smp'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alm'];    
    $jkelamin = $_POST['jk'];
    $tbeli = $_POST['tp'];
    $jumlah = $_POST['jb']; 

    $judul = $_POST['jd'];
    $pengarang = $_POST['pg'];
    $kbuku = $_POST['kb'];
    $jbuku = $_POST['jb'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>

<table class="table table-responsive-width table-dark">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo"$nama" ?></td>
            <td><?php echo"$alamat" ?></td>
            <td><?php echo"$jkelamin" ?></td>
            <td><?php echo"$jumlah " ?></td>
            <td><?php echo"$tbeli" ?></td>
        </tr>
    </tbody>    
</table>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Judul</th>
            <th scope="col">Kode</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Jenis Buku</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>

    <?php for ($i=0; $i < count($judul); $i++) { ?>
        <tr>
            <td><?php echo"$judul[$i]" ?></td>
            <td><?php echo"$kbuku[$i]" ?></td>
            <td><?php echo"$pengarang[$i]" ?></td>
            <td><?php echo"$jbuku[$i]" ?></td>
            <td><?php echo"$harga[$i]" ?></td>
        </tr>
        <?php }
        $total1 = array_sum($harga);
        if ($jumlah >= 5) {
            $total= ($total1*10)/100;
        }elseif ($jumlah >= 3 ) {
            $total= ($total1*5)/100;            
        }elseif ($jumlah < 3) {
            $total=0;
        }
        $hasil = $total1-$total;
        $total1 = round($total1);
        $total = round($total);
        $hasil = round($hasil);
        ?>
    </tbody>    
</table>

<div class="">
<div class="">
<div class="">
</body>
</html>