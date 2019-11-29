<div class="my-2">
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-6 mt-5">
                <img src="images/logo.png" class="img-fluid" alt="Responsive image">
                <h1 class="mb-3">Sign Up</h1>
                <!-- form -->
                <form action="<?php echo BASE_URL . "proses_register.php"; ?>" method="POST">
                    <!-- ambil isi inputan-->
                    <?php
                    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
                    $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
                    $email = isset($_GET['email']) ? $_GET['email'] : false;
                    $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
                    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

                    if ($notif == "require") {
                        echo "<div class='alert alert-danger' role='alert'>
                            Maaf, kamu harus melengkapi form dibawah ini.
                            </div>";
                    } else if ($notif == "password") {
                        echo "<div class='alert alert-danger' role='alert'>
                        Maaf, password yang kamu masukkan tidak sama.
                        </div>";
                    } else if ($notif == "email") {
                        echo "<div class='alert alert-danger' role='alert'>
                        Maaf, email yang kamu masukkan sudah terdaftar.
                        </div>";
                    }
                    ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Telephone / Handphone</label>
                        <input type="telp" name="phone" class="form-control" placeholder="Nomor Telephone">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Re-type Password</label>
                        <input type="password" name="re_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <input type="submit" value="Register" class="btn-block mb-3 btn btn-outline-success" />
                </form>
                <!-- akhir form -->

                <p class="my-2" style="">Already have an account? <a href="<?php echo BASE_URL . "index.php?page=login"; ?>" class="text-decoration-none">Sign in here</a></p>
            </div>
        </div>
    </div>
</div>