<!-- Breadcrumbs -->
<div class="container">
    <nav>
        <ol class="breadcrumb bg-transparent pl-0 cart-breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL . "index.php" ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart Checkout</li>
        </ol>
    </nav>
</div>

<!-- Checkout -->
<section class="checkout">
    <div class="container">
        <div class="row justify-content-between" style="margin-bottom: 100px;">


            <?php
            if ($totalBarang == 0) {
                echo "<div class='col-12  text-center '>


                <img src='images/empty.png' class='img-fluid text-center' width='50%'>
                <p Your Cart is Empty>Your Cart is Empty</p>
                <a class='btn btn-outline-success' role='button' href='" . BASE_URL . "index.php?page=main'>Shop Now</a>
            </div>";
            } else {
                $subtotal = 0;
                echo "<div class='col-lg-6'>";
                echo "<h4 class='mb-4'>Your Items</h4>";
                foreach ($keranjang as $key => $value) {
                    $barang_id = $key;

                    $nama_barang = $value["nama_barang"];
                    $quantity = $value["quantity"];
                    $gambar = $value["gambar"];
                    $harga = $value["harga"];


                    echo  "  <div class='row mb-4'>
                                    <div class='col-2'>
                                        <img src='" . BASE_URL . "images/barang/$gambar' width='60px' height='60px' />
                                    </div>
                                    <div class='col-4'>
                                        <h5 class='m-0'>$nama_barang</h5>
                                        <p class='m-0' style='color:#B7B7B7;'>" . rupiah($harga) . "</p>
                                    </div>
                                    <div class='col-4'>
                                    <input type='text' name='$barang_id' value='$quantity' class='update-quantity' />
                                    </div>
                                    <div class='col-2 text-right'>
                                    <a href='" . BASE_URL . "hapus_item.php?barang_id=$barang_id' class='btn btn-sm btn-danger'><i
                                    class='fas fa-times-circle'></i></a>
                                    </div>
                                </div>";
                }
            }

            ?>
            <!-- alamat -->

            <div class="<?php if ($totalBarang == 0) echo "d-none"; ?>">
                <h4 class="mb-3" style="margin-top: 100px;">Your Address</h4>

                <form>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Alamat lengkap">
                    </div>
                    <div class="form-group">
                        <label for="address2">Address II</label>
                        <input type="text" class="form-control" id="address2" placeholder="Alamat tambahan">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="custom-select">
                            <option selected>Select City</option>
                            <option value="1">Bandung</option>
                            <option value="2">Jakarta</option>
                            <option value="3">Surabaya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="custom-select">
                            <option selected>Select Country</option>
                            <option value="1">Indonesia</option>
                            <option value="2">Malaysia</option>
                            <option value="3">Singapore</option>
                        </select>
                    </div>
            </div>
            </form>
        </div>

        <div class="col-lg-5 <?php if ($totalBarang == 0) echo "d-none"; ?>">
            <div class="card rounded-0 checkout-detail">
                <div class="card-body">
                    <h5 class="card-title">Informasi Biaya</h5>
                    <?php
                    foreach ($keranjang as $key => $value) {
                        $barang_id = $key;

                        $nama_barang = $value["nama_barang"];
                        $quantity = $value["quantity"];
                        $gambar = $value["gambar"];
                        $harga = $value["harga"];

                        $total = $quantity * $harga;
                        $subtotal = $subtotal + $total;
                        echo "
                                    <div class='row mb-3'>
                                        <div class='col'>
                                            <h6 class='m-0'>$nama_barang</h6>
                                            <small style='color: #B7B7B7;'>$quantity Items</small>
                                        </div>
                                        <div class='col d-flex justify-content-end'>
                                            <h6 class='m-0 align-self-center text-success'>" . rupiah($total) . "</h6>
                                        </div>
                                    </div>";
                    } ?>

                    <hr>


                    <div class="row mb-3">
                        <div class="col">
                            <h6 class="m-0">Total Harga</h6>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h6 class="m-0 align-self-center text-primary"><?php echo rupiah($subtotal) ?></h6>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <button type="button" class="btn btn-block" style="background-color: #EAEAEF; color: #ADADAD;">Cancel</button>
                </div>
                <div class="col">
                    <a href="<?php echo BASE_URL . "index.php?page=data_pemesanan" ?>"><button type="button" class="btn btn-outline-success btn-block " data-toggle="modal" data-target="#checkoutModal">Checkout</button></a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- Akhir Checkout -->


<!-- Modal -->
<div class="modal fade checkout-modal-success" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="img/cart/sukses_checkout.png" class="mb-5">
                <h3>Checkout Berhasil</h3>
                <p>Anda akan mendapatkan barang anda <br> dalam beberapa hari</p>
                <button type="button" class="btn mt-3" style="background-color: #EAEAEF; color: #ADADAD;" data-dismiss="modal">Home</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(".update-quantity").on("input", function(e) {
        var barang_id = $(this).attr("name");
        var value = $(this).val();

        $.ajax({
                method: "POST",
                url: "update_keranjang.php",
                data: "barang_id=" + barang_id + "&value=" + value
            })
            .done(function(data) {
                location.reload();
            });

    });
</script>