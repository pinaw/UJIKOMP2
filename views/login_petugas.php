<?php include "header.php"; ?>
<?php include "../config/auth.php"; ?>

<?php 
    @session_start();
    if (isset($_SESSION['username'])) {
        header("location: index.php");
    }

    if (isset($_POST['submit'])) {
        if (loginPetugas() > 0) {
            header("location: petugas-app/index.php");
        }else {
            "tod";
        }
    }

?>

    <div class="rgb">
        <div class="container text-white">
            <div class="row">

                <div class="col-md-5 mt-5 mx-auto">
                    <h2 class="h2">Login Page Petugas</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" required autofocus autocomplete="off" class="form-control"
                                id="username" aria-describedby="emailHelp" placeholder="Masukan username">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" required autocomplete="off" class="form-control"
                                id="password" placeholder="Masukan password">
                        </div>
                        <input type="submit" name="submit" value="Login" class="btn btn-block btn-primary">
                        <a href="../index.php" class="btn btn-block btn-danger">Kembali</a>
                    </form>
                </div>
                <!-- End Col md 5 -->

            </div>
            <!-- End Row -->
        </div>
    </div>

<?php include "footer.php"; ?>