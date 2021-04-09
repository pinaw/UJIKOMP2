<?php include "header.php"; ?>
<?php include "../config/auth.php"; ?>

<?php 

    if (isset($_SESSION['username'])) {
        header("location: index.php");
    }

    if (isset($_POST['submit'])) {
        if (registerMasyarakat() > 0) {
            echo "<script>
                alert('Data berhasil dibuat');
                window.location.href='login_masyarakat.php';
                </script>";
        }else {
            echo "<script>
                alert('Anda berhasil logout');
                window.location.href='register_masyarakat.php';
                </script>";
        }
    }

?>

<div class="rgb">
    <div class="container text-white">
    <div class="row mt-3">
        <div class="col-md-7 mx-auto">
            <form action="" method="post">
                <h2>Register Page Masyarakat</h2>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="number" name="nik" required autofocus autocomplete="off" class="form-control"
                                id="nik" aria-describedby="emailHelp" placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" required name="nama" autocomplete="off" class="form-control" id="nama"
                                placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" required name="username" autocomplete="off" class="form-control"
                                id="username" placeholder="Masukan Username">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" autocomplete="off" class="form-control" placeholder="Masukan Password" id="">
                        </div>
                        <div class="form-group">
                            <label>Telp</label>
                            <input type="number" name="telpon" autocomplete="off" class="form-control" placeholder="Masukan Nomor Telp" id="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <p>Sudah punya akun? <a href="login_masyarakat.php">Login sekarang!!</a></p>
                </div>
                <input type="submit" value="Register" name="submit" class="btn-block btn btn-primary">
                <a href="../index.php" class="btn btn-block btn-danger">Kembali</a>
            </form>
        </div>
    </div>
    </div>
</div>
<?php include "footer.php"; ?>