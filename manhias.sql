-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Nov 2019 pada 05.36
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manhias`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(10) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`banner_id`, `banner`, `gambar`, `link`, `status`) VALUES
(1, 'slider1', 'slide1.jpg', '', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `spesifikasi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` tinyint(1) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `spesifikasi`, `gambar`, `harga`, `stok`, `status`) VALUES
(1, 7, 'Teratai', '<p>Tanaman yang identik dengan agama Buddha ini sangat populer. Bunganya yang berwarna merah muda atau putih memang sangat menyegarkan mata. Daun &ndash; daunnya yang tipis dan lebar juga memberikan keunikan tersendiri.</p>', 'lotus.png', 45000, 10, 'on'),
(2, 7, 'Selada Air', '<p>Tidak seperti teratai yang akarnya di dalam air, akar selada air mengapung. Semua bagian tanaman ini berada di atas permukaan air.</p>', 'selada air.jpg', 30000, 10, 'on'),
(3, 2, 'Buah Jeruk Nagami', '<p>Bentuk buahnya seperti jeruk mandarin kecil namun lebih lonjong. Sepanjang tahun tanaman ini bisa berbuah sehingga tanaman hias Anda akan terus cantik dan segar dengan warna oranye jeruk ini.</p>', 'Buah-Jeruk-Nagami.jpeg', 95000, 10, 'on'),
(4, 2, 'Buah Naga Mini', '<p>Secara fisik, bentuknya sama seperti pohon&nbsp;<a href=\"https://jagad.id/manfaat-buah-naga-merah-ungu-untuk-masker-kecantikan-dan-diet-serta-efek-samping/\">b</a>uah naga&nbsp;biasa, tetapi bentuknya lebih mini dan bisa masuk dalam pot ukuran sedang. Buahnya juga bisa dikonsumsi, kandungan vitaminnya pun sama besarnya dengan buah naga besar.</p>', 'Buah_Naga_Mini.jpg', 45000, 10, 'on'),
(5, 4, 'Palem Bambu', '<p>Keluarga tanaman palem ini cocok menjadi penghias ruangan dalam dan cukup ditanam di dalam pot. Adanya pohon palem bambu di dalam rumah bisa membersihkan udara kotor dan bagus untuk paru-paru.</p>', 'jual-palem-bambu.jpg', 85000, 10, 'on'),
(6, 5, 'Begonia', '<p>Begonia adalah genus dari tanaman berbunga abadi dalam keluarga Begoniaceae. Tanaman hias gantung Begonia terkenal karena bentuknya yang padat serta bentuk dari bunga hingga daunnya terlihat indah.</p>', 'begonia.jpg', 30000, 10, 'on'),
(7, 5, 'Dischidia Geri', '<p>Dischidia Geri atau terkenal dengan nama&nbsp;<em>apple leaf&nbsp;</em>ini memang warna keseluruhannya hijau dan dedaunan. Supaya tanaman gantung Dischidia Geri awet, hindari menggantungnya di depan jendela dan dekat pintu ya, posisikan ia jauh dari paparan sinar matahari secara langsung.&nbsp;</p>', 'Dischidia Geri.jpg', 45000, 10, 'on'),
(8, 5, 'Sedum Morganianum', '<p>Sedum Morganianum atau kaktus anggur ini memang sangat unik dan terlihat cantik karena bentuknya yang menjuntai. Di Indonesia, tanaman gantung ini dikenal dengan nama ekor keledai.</p>', 'Sedum Morganianum.jpg', 30000, 10, 'on'),
(9, 5, ' Million Hearts', '<p>Tanaman gantung Million Hearts ini masih sejenis dengan Dischidia Geri. Bedanya, tanaman million hearts ini berbentuk hati. Pula tak bisa terkena cahaya terlalu panas, ia akan tetap cantik jika terpapar cahaya yang hangat saja, alias medium<em>&nbsp;light.</em></p>', 'Million Hearts.jpg', 95000, 10, 'on'),
(10, 5, 'Jenggot Putih', '<p>Tanaman gantung jenggot putih atau Spanish Moss adalah tanaman yang biasa tumbuh di pepohonan. Bentuknya seperti rumput atau tali kusut yang menjuntai ke bawah, biasanya kalau di alam liar, burung menggunakannya untuk membuat sangkar, tapi laba-laba juga suka nih jadi penghuni tanaman jenggot putih.</p>', 'Jenggot Putih.jpg', 30000, 10, 'on'),
(11, 5, 'Sirih Blaster Heart', '<p>Seperti namanya, tanaman gantung Sirih Blaster Heart ini memang masih &lsquo;keluarga&rsquo; daun sirih. Daunnya yang berbentuk hati ini punya tekstur yang lebih licin dibanding daun sirih yang biasa kita temui ditanam di halaman luar rumah.</p>', 'Sirih Blaster Heart.jpeg', 55000, 10, 'on'),
(12, 7, 'Peperomia Hope', '<p>Tumbuhan Peperomia Hope termasuk dalam jenis tanaman sukulen. Bentuknya yang pipih, bulat dan kelopaknya yang berbentuk daun ini perawatannya cukup mudah. Jika warna daunnya berwarna hijau gelap, berarti ia memberimu tanda ia sudah cukup terpapar sinar matahari, posisikan ia di tempat yang hangat.&nbsp;</p>', 'Peperomia Hope.jpg', 55000, 10, 'on'),
(13, 15, 'Anggrek', '<p>Bunga Anggrek&nbsp;<em>nggak</em>&nbsp;hanya mempercantik ruangan bagian dalam rumah, tetapi bunga jenis Orchidaceae ini juga jadi penghias di taman rumah. Warnanya yang cantik dan bentuknya yang unik memang jadi daya tarik bagi pencinta anggrek.</p>', 'Anggrek.jpg', 85000, 10, 'on'),
(14, 15, 'Melati', '<p>Bunga Melati memang dinobatkan sebagai simbol nasional dengan sebutan &ldquo;Puspa Bangsa&rdquo; walaupun asal usul bunga melati sebetulnya dari India. Selain bermakna suci, bunga melati punya bau yang sangat harum, bahkan kalau di Indonesia tanaman ini dikonotasikan dengan hal mistis. Padahal bunga melati sama sekali nggak seram, justru punya manfaat banyak buat kesehatan lho. Sebab bunga melati fungsinya nggak hanya sebagai penghias, tapi juga mengatasi jerawat.</p>', 'Melati.jpg', 65000, 10, 'on'),
(15, 15, 'Mawar', '<p>Mawar adalah suatu jenis tanaman semak yang punya duri di tangkainya. Biasanya bunga mawar paling sering menjadi bunga potong untuk dijadikan bouquet bunga sebagai hadiah untuk mengungkapkan kasih sayang. Selain itu, bunga mawar juga jadi tanaman hias favorit yang ditanam di lapangan rumah.&nbsp;</p>', 'mawar.jpg', 65000, 10, 'on'),
(16, 1, 'Lidah Mertua', '<p>Jenis tanaman hias daun yang paling mudah perawatannya ialah lidah mertua. Coraknya yang unik dan bentuknya yang tegak berdiri ini cocok untuk menjadi penghias di meja voyer atau meja kerjamu. Plusnya, tanaman hias daun lidah mertua ini punya manfaat untuk mentralisir polusi lho! Tapi kamu masih punya banyak pilihan kok kalau mau memilih lidah mertua sebagai hiasan di rumah.&nbsp;</p>', 'Lidah Mertua.jpg', 95000, 10, 'on'),
(17, 1, 'Sirih Gading', '<p>Tanaman hias daun sirih gading adalah tumbuhan merambat yang biasa ditanam sebagai penghias pekarangan atau ruangan. Corak guratan kuning dan masuk dalam tumbuhan merambat&nbsp; semi-epifit (menumpang dengan tumbuhan yang lain) ini membuat tanaman ini terlihat sangat unik. Tapi karena sirih daging bisa menyerap racun, tanaman hias daun ini cukup berbahaya bagi kamu yang punya hewan peliharaan. Jika kucing atau anjingmu memakan daun sirih gading, risikonya mulut hewan peliharaanmu bisa iritasi, bahkan bisa muntah dan sulit menelan makanan. Jadi taruhlah sirih gading di tempat tak terjangkau jika kamu memajangnya di dalam rumah.</p>', 'Sirih Gading.jpg', 95000, 10, 'on'),
(18, 2, 'Cabe Pelangi', '<p>Buat penggemar makanan pedas, kamu bisa kok memanam cabe di rumah. Jika kamu keberatan menanam cabe rawit biasa, tanam saja cabe pelangi yang masuk dalam jenis tanaman hias buah. Selain warnanya cantik, kamu bisa petik mereka untuk dijadikan sebagai penyedap rasa.</p>', 'Cabe Pelangi.jpeg', 20000, 10, 'on'),
(19, 3, 'bonsai', '<p>Tanaman beringin merupakan jenis tanaman pohon yang biasanya sering kita temui di pinggir jalan berukuran besar. Tapi ia juga sering tumbuhan di pekarangan dan menjadi tumbuhan hias pot dan sering dikreasikan menjadi tanaman hias bonsai.</p>', 'bonsai.jpg', 95000, 10, 'on'),
(20, 6, 'Cemara Perak', '<p>Daun pada tumbuhan ini apabila terkena cahaya matahari akan memantul dan berwarna keperakan. Keistimewaannya terlihat juga dari ketinggian maksimal tanaman ini, maksimal hanya 1 meter saja.</p>', 'Cemara Perak.jpeg', 95000, 10, 'on'),
(21, 7, 'Cemara Inoki', '<p>Daun cemara jenis ini mirip jenis cemara kipas. Dalam penataan taman, tumbuhan ini sering kali dipakai sebagai border tanaman. Jika anda memiliki keahlian dalam merawat tanaman dan membuat menjadi bonsai maka nilai jualnya akan jauh lebih tinggi.</p>', 'Cemara-Inoki.jpeg', 85000, 10, 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`, `status`) VALUES
(1, 'Tanaman Hias Daun', 'on'),
(2, 'Tanaman Hias Buah', 'on'),
(3, 'Tanaman Hias Akar', 'on'),
(4, 'Tanaman Hias Batang', 'on'),
(5, 'Tanaman Hias Gantung', 'on'),
(6, 'Tanaman Hias Cemara', 'on'),
(7, 'Tanaman Hias Air', 'on'),
(15, 'Tanaman Hias Bunga', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `konfirmasi_id` int(10) NOT NULL,
  `pesanan_id` int(10) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_account` varchar(150) NOT NULL,
  `total_pembayaran` int(10) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(10) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `tarif` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(10) NOT NULL,
  `kota_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `pesanan_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `quantity` tinyint(2) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `level`, `nama`, `email`, `alamat`, `phone`, `password`, `status`) VALUES
(1, 'customer', 'Ryandi Pratama Purba', 'fairyn123@hotmail.com', 'jl.medan', '082267080394', '87eb1147877512e9cc75c12e07f532a7', 'on'),
(7, 'superadmin', 'yoshiolo', 'admin123@gmail.com', 'jl.medan', '082267080392', '21232f297a57a5a743894a0e4a801fc3', 'on');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `kota_id` (`kota_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `konfirmasi_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`pesanan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD CONSTRAINT `pesanan_detail_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`pesanan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
