<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="container">
            <div class="carousel-item active">

                <div class="row pt-5 justify-content-center">
                    <div class="col-9 col-sm-4 col-md-6 col-lg-5">
                        <h1 class="mb-4">Spesial Tahun Baru</h1>
                        <p class="mb-4">Jadikan Rumah mu lebih indah dengan Tanaman Hias ini.</p>
                        <a href="" class="btn btn-warning text-white">Get It Now</a>
                    </div>
                    <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
                        <img src="images/banner/slide1.jpg" class="img-fluid">
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="row pt-5 justify-content-center">
                    <div class="col-9 col-sm-4 col-md-6 col-lg-5">
                        <h1 class="mb-4">Spesial Tahun Baru</h1>
                        <p class="mb-4">Jadikan Rumah mu lebih indah dengan Tanaman Hias ini.</p>
                        <a href="" class="btn btn-warning text-white">Get It Now</a>
                    </div>
                    <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
                        <img src="images/banner/slide2.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row pt-5 justify-content-center">
                    <div class="col-9 col-sm-4 col-md-6 col-lg-5">
                        <h1 class="mb-4">Spesial Tahun Baru</h1>
                        <p class="mb-4">Jadikan Rumah mu lebih indah dengan Tanaman Hias ini.</p>
                        <a href="" class="btn btn-warning text-white">Get It Now</a>
                    </div>
                    <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
                        <img src="images/banner/slide1.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Akhir Carousel -->


<!-- Best Product -->
<section class="features bg-light p-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3>Best Product</h3>
                <p>Tanaman yang paling laku bulan ini</p>
            </div>
        </div>

        <div class="row">
            <?php

            if ($kategori_id) {
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' AND kategori_id='$kategori_id' ORDER BY rand() DESC LIMIT 6");
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' ORDER BY rand() DESC LIMIT 6");
            }

            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) {

                echo "<div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                <figure class='figure'>
                    <div class='figure-img'>
                        <img src='" . BASE_URL . "images/barang/$row[gambar]' ' class='figure-img img-fluid' >
                        <a href='" . BASE_URL . "index.php?page=detail&barang_id=$row[barang_id]'' class='d-flex justify-content-center'>
                            <img src='" . BASE_URL . "images/detail.png' ' class='align-self-center'>
                        </a>
                    </div>
                    <figcaption class='figure-caption text-center'>
                        <h5>$row[nama_barang]</h5>
                        <p class='price'>" . rupiah($row['harga']) . "</p>
                    </figcaption>
                </figure>
            </div>";

                $no++;
            }

            ?>


        </div>
    </div>
</section>
<!-- Akhir Best Produck -->


<section class="features bg-light p-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3>Just For You</h3>
            </div>
        </div>

        <div class="row">
            <?php

            if ($kategori_id) {
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' AND kategori_id='$kategori_id' ORDER BY rand() DESC LIMIT 6");
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' ORDER BY rand() DESC LIMIT 18");
            }

            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) {

                echo "<div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                <figure class='figure'>
                    <div class='figure-img barang-img'>
                        <img src='" . BASE_URL . "images/barang/$row[gambar]' ' class='figure-img img-fluid' width='150px' height='100px' >
                        <a href='" . BASE_URL . "index.php?page=detail&barang_id=$row[barang_id]'' class='d-flex justify-content-center'>
                            <img src='" . BASE_URL . "images/detail.png' ' class='align-self-center'>
                        </a>
                    </div>
                    <figcaption class='figure-caption text-center'>
                        <h5>$row[nama_barang]</h5>
                        <p class='price'>" . rupiah($row['harga']) . "</p>
                    </figcaption>
                </figure>
            </div>";

                $no++;
            }

            ?>


        </div>
    </div>
</section>
<!-- Akhir Best Produck -->