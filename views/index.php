<?php include "header.php"; ?>
<?php @session_start(); ?>

<div class="rgb">
    <div class="jumbotron ilang text-white">
        <div class="container">
            <h1 class="display-4">Selamat datang</h1>
            <p class="lead">Ini adalah tampilan utama dari website aplikasi pengaduan masyarakat.</p>
            <hr class="my-4 bg-light">
            <p>Baru pertama kali disini dan tidak punya akun? Yuk klik tombol di bawah ini untuk membuat akun mu.</p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="register_masyarakat.php" role="button">Daftar Akun</a>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>