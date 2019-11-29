<!-- query ambil data barang -->
<?php
$barang_id = $_GET['barang_id'];

$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id' AND status='on'");
$row = mysqli_fetch_assoc($query);
?>
<!-- Breadcrumbs -->
<div class="container mt-5">
    <nav>
        <ol class="breadcrumb bg-transparent pl-0">
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $row["nama_barang"] ?> </li>
        </ol>
    </nav>
</div>
<!-- akhir Breadcrumbs -->


<!-- single product -->
<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <figure class="figure">
                    <img src="<?php echo BASE_URL . "images/barang/$row[gambar]"; ?>" class="figure-img img-fluid">
                </figure>
            </div>

            <div class="col-lg-4">
                <h3><?php echo $row['nama_barang'] ?></h3>
                <p class="text-muted"><?php echo rupiah($row['harga']) ?></p>


                <div class="btn-product">
                    <a href="<?php echo BASE_URL . "tambah_keranjang.php?barang_id=$row[barang_id]" ?>" class="btn btn-warning text-white">Add to Cart</a>
                    <a href="" class="btn" style="background-color: #EAEAEF; color: #ADADAD;">Add to Wishlist</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- akhir single product -->


<!-- Product Description & Review -->
<section class="product-description p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Product Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (2)</a>
                    </li>
                </ul>
                <div class="tab-content p-3" id="myTabContent">
                    <div class="tab-pane fade show active product-review" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <p><?php echo $row['spesifikasi'] ?></p>
                    </div>
                    <div class="tab-pane fade product-review" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="row">
                            <div class="col-1 d-none d-md-block">
                                <img src="<?php echo BASE_URL . "images/review1.jpg"; ?>">
                            </div>
                            <div class="col">
                                <h5>Ryandi Purba</h5>
                                <p>Tanamanya cantik sekali dan indah</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 d-none d-md-block">
                                <img src="<?php echo BASE_URL . "images/review1.jpg"; ?>">
                            </div>
                            <div class="col">
                                <h5>Iqbal Pratama</h5>
                                <p>Tanamannya Bagus Dan Cantik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Product Description & Review -->