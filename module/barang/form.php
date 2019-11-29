<?php

$barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

$nama_barang = "";
$kategori_id = "";
$spesifikasi = "";
$gambar = "";
$stok = "";
$harga = "";
$status = "";
$keterangan_gambar = "";
$button = "Add";

if ($barang_id) {
	$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id'");
	$row = mysqli_fetch_assoc($query);

	$nama_barang = $row['nama_barang'];
	$kategori_id = $row['kategori_id'];
	$spesifikasi = $row['spesifikasi'];
	$gambar = $row['gambar'];
	$harga = $row['harga'];
	$stok = $row['stok'];
	$status = $row['status'];
	$button = "Update";

	$keterangan_gambar = "(Klik pilih gambar jika ingin mengganti gambar disamping)";
	$gambar = "<img src='" . BASE_URL . "images/barang/$gambar' style='width: 200px;vertical-align: middle;' />";
}

?>

<script src="<?php echo BASE_URL . "js/ckeditor/ckeditor.js"; ?>"></script>

<form class="" action="<?php echo BASE_URL . "module/barang/action.php?barang_id=$barang_id"; ?>" method="POST" enctype="multipart/form-data">

	<div class="form-group w-50">
		<label for="kategori">Kategori</label>
		<select name="kategori_id" class="form-control" id="kategori">
			<?php
			$query = mysqli_query($koneksi, "SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
			while ($row = mysqli_fetch_assoc($query)) {
				if ($kategori_id == $row['kategori_id']) {
					echo "<option value='$row[kategori_id]' selected='true'>$row[kategori]</option>";
				} else {
					echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
				}
			}
			?>
		</select>
	</div>

	<div class=" form-group w-50 ">
		<label for="nama_barang">Nama Barang</label>
		<input type="text" name="nama_barang" id="nama_barang" class=" form-control " value="<?php echo $nama_barang; ?>" />
	</div>
	<div style="margin-bottom:10px" class=" form-group ">
		<label style="font-weight:bold" for="editor">Spesifikasi</label>
		<textarea name="spesifikasi" class="form-control" id="editor"><?php echo $spesifikasi; ?></textarea>
	</div>

	<div class="form-group w-50">
		<label for="stok">Stok</label>
		<input type="text" id="stok" class="form-control" name="stok" value="<?php echo $stok; ?>" />
	</div>

	<div class="form-group w-50">
		<label for="harga">Harga</label>
		<input type="text" name="harga" id="harga" class=" form-control" value="<?php echo $harga; ?>" />
	</div>

	<div class="form-group">
		<label for="gambar">Gambar Produk <?php echo $keterangan_gambar; ?></label><br>
		<input type="file" id="gambar" name="file" /> <?php echo $gambar; ?>

	</div>

	<div class="form-group">
		<label>Status</label>
		<input type="radio" name="status" value="on" <?php if ($status == "on") {
															echo "checked='true'";
														} ?> /> On
		<input type="radio" name="status" value="off" <?php if ($status == "off") {
															echo "checked='true'";
														} ?> /> Off

	</div>

	<div class="form-group ">
		<input type="submit" class="btn btn-outline-success" name="button" value="<?php echo $button; ?>" />
	</div>

</form>

<script>
	CKEDITOR.replace("editor");
</script>