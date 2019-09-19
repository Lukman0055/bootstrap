<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "lukman" && $pass = "123") {
        $_SESSION['Login'] = $user;
        echo "Silahkan masuk<br>";
        echo "<a href='latihan1.php'>Daftar PPBD SMK ASSALAAM BANDUNG</a><br>";

    }else {
        die ("Anda belum login! Anda tidak berhak masuk ke halaman
    ini.Silahkan login <a href='log1.php'>di sini</a>");
    }
} else {
    ?>
    <html>
        <head>
        <title>Login here...</title>
        </head>
        <body>
            <form action="" method="post">
                <h2>Login here...</h2>
                username : <input type="text" name="user"><br>
                password : <input type="password" name="pass"><br>
                <button type="submit" name="spm"class="btn btn-primary">Simpan</button>
            </form>
        </body>
    </html>
<?php } ?>