<?php include "header.php"; ?>
<?php include "../config/auth.php"; ?>

<?php 

    if (isset($_SESSION['username'])) {
        header("location: index.php");
    }

    if (isset($_POST['submit'])) {
        if (loginMasyarakat() > 0) {
            header("location: masyarakat-app/index.php");
        }
    }

?>

<div class="rgb">
    <div class="container text-white">
    <div class="row mt-5">
        <div class="col-md-5 mx-auto">
            <form action="" method="post">
                <h2>Login Page Masyarakat</h2>
                <div class="form-group">
                    <label for="nik">Nik</label>
                    <input type="number" name="nik" required autofocus autocomplete="off" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="Masukan Nik">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required autocomplete="off" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required name="password" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <p>Tidak punya akun? <a href="register_masyarakat.php">Register sekarang!!</a></p>
                </div>
                <input type="submit" value="Login" name="submit" class="btn-block btn btn-primary">
                <a href="../index.php" class="btn btn-block btn-danger">Kembali</a>
            </form>
        </div>
    </div>
    </div>
</div>

<?php include "footer.php"; ?>