<?php

if ($user_id) {
    header("location: " . BASE_URL);
}

?>

<div class="my-2">
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-6 mt-5">
                <img src="images/logo.png" class="img-fluid " alt="Responsive image">
                <h1 class="mb-3">Login</h1>
                <form class="" action="<?php echo BASE_URL . "proses_login.php"; ?>" method="POST">
                    <!-- cek password -->
                    <?php

                    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                    if ($notif == true) {
                        echo "<div class='alert alert-danger' role='alert'>
                        Maaf, email atau password yang kamu masukan tidak cocok
                        </div>";
                    }

                    ?>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn-block mb-3 btn btn-outline-success" />
                </form>

                <span>Don't have an account? <a href="<?php echo BASE_URL . "index.php?page=register"; ?>" class="text-decoration-none">Create your
                        account</a></span>
            </div>
        </div>
    </div>
</div>