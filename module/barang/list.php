<div id="frame-tambah">
	<a href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=form"; ?>" class="btn btn-outline-success mb-3">+ Tambah Barang</a>
</div>




<?php

$query = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id");

if (mysqli_num_rows($query) == 0) {
	echo "<h3>Saat ini belum ada barang di dalam table barang</h3>";
} else {

	echo "<div class='table-responsive'>
			<table class='table'>";

	echo " <thead class='thead-dark'>
				<tr class='baris-title'>
					<th scope='col'>No</th>
					<th scope='col'>Barang</th>
					<th scope='col'>Kategori</th>
					<th scope='col'>Harga</th>
					<th scope='col'>Status</th>
					<th scope='col'>Action</th>
				</tr>
			</thead>";

	$no = 1;
	while ($row = mysqli_fetch_assoc($query)) {

		echo "<tbody>
				<tr>
				<td class='kolom-nomor'>$no</td>
					<td class='kiri'>$row[nama_barang]</td>
					<td class='kiri'>$row[kategori]</td>
					<td>" . rupiah($row['harga']) . "</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
						<a class='tombol-action text-decoration-none text-danger' href='" . BASE_URL . "index.php?page=my_profile&module=barang&	action=form&barang_id=$row[barang_id]'><i class='far fa-edit'></i>Edit</a>
					</td>	
				</tr>
			</tbody>";

		$no++;
	}

	echo "</table></div>";
}

?>