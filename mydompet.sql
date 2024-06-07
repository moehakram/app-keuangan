START TRANSACTION;

--
-- Database: `mydompet`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(31) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `type`) VALUES
(1, 'ATM', 'income'),
(2, 'Pemberian', 'income'),
(3, 'Piutang', 'income'),
(4, 'Laba Penjualan', 'income'),
(5, 'Pekerjaan', 'income'),
(8, 'Makan dan Minum', 'expenditure'),
(9, 'Hutang', 'expenditure'),
(10, 'Peralatan', 'expenditure'),
(11, 'Organisasi', 'expenditure'),
(12, 'Kendaraan', 'expenditure'),
(13, 'Keperluan Pribadi', 'expenditure'),
(14, 'Listrik', 'expenditure'),
(15, 'jajan', 'income');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukkan`
--

CREATE TABLE `pemasukkan` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(63) NOT NULL,
  `sumber` varchar(31) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `username` varchar(31) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `pemasukkan`
--

INSERT INTO `pemasukkan` (`id`, `tanggal`, `keterangan`, `sumber`, `jumlah`, `username`) VALUES
(32, '2022-07-01', 'Gaji Bulanan', 'ATM', '75.000.000', 'admin'),
(34, '2022-08-05', 'Desain Poster', 'ATM', '150.000', 'admin'),
(35, '2022-08-09', 'Design Website Pemerintah', 'ATM', '25.000.000', 'admin'),
(36, '2022-08-18', 'Adsense Youtube', 'Pekerjaan', '45.000.000', 'admin'),
(37, '2022-08-18', 'Pembuatan Aplikasi Mobile', 'ATM', '55.000.000', 'admin'),
(38, '2022-08-18', 'Pembuatan IoT', 'ATM', '7.500.000', 'admin'),
(39, '2022-08-30', 'Design Website Sekkolahan', 'ATM', '7.500.000', 'admin'),
(40, '2022-08-30', 'Tarik tunai', 'ATM', '25000000', 'admin'),
(41, '2022-08-01', 'Gaji Bulanan', 'Pekerjaan', '75.000.000', 'andi'),
(42, '2022-08-01', 'Pembuatan Poster Kegiatan', 'Lain - lain', '250.000', 'andi'),
(43, '2022-08-11', 'Pembuatan Video Promosi', 'Lain - lain', '2.000.000', 'andi'),
(44, '2022-08-13', 'Perancangan Sistem IoT', 'Lain - lain', '7.500.000', 'andi'),
(45, '2022-08-13', 'Installasi OS', 'Lain - lain', '500.000', 'andi'),
(46, '2022-08-16', 'Pembayaran Hutang Budi', 'Piutang', '75.000', 'andi'),
(47, '2022-08-18', 'Jual Saham Perusahaan xyz', 'Laba penjualan', '150.000.000', 'andi'),
(48, '2022-08-24', 'Pembuatan Website Pemerintah', 'ATM', '25.000.000', 'andi'),
(49, '2022-08-30', 'Pembuatan Website Perusahaan', 'ATM', '55.500.000', 'andi'),
(50, '2022-08-31', 'Pembuatan Aplikasi Pemerintaha', 'Pekerjaan', '25.000.000', 'andi'),
(51, '2022-08-31', 'Pembuatan Poster Pendidikan', 'ATM', '75.000', 'andi'),
(52, '2023-12-20', 'Tarik tunai', 'ATM', '250.000', 'admin'),
(53, '2024-01-10', 'Tarik tunai', 'ATM', '10.000', 'admin'),
(54, '2024-01-10', 'Tarik tunai', 'ATM', '10.000', 'admin'),
(55, '2024-01-10', 'asdad', 'Laba Penjualan', '23.223', 'admin'),
(56, '2024-01-10', 'ini', 'Piutang', '10.000', 'user2'),
(57, '2024-01-18', 'sad', 'Piutang', '23.232', 'user2'),
(58, '2024-02-05', '323asd', 'Pemberian', '123.213.213', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(63) NOT NULL,
  `keperluan` varchar(63) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `username` varchar(31) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal`, `keterangan`, `keperluan`, `jumlah`, `username`) VALUES
(15, '2022-08-06', 'Pembayaran uang kuliah', 'Lain - lain', '7.500.000', 'admin'),
(16, '2022-08-09', 'Pembayarn Kos', 'Keperluan pribadi', '1.500.000', 'admin'),
(17, '2022-08-19', 'Peralatan mandi', 'Peralatan', '45.000', 'admin'),
(18, '2022-08-30', 'Beli Pertamax', 'Kendaraan', '150.000', 'admin'),
(19, '2022-08-02', 'Belanja Kebutuhan Makan 1 bulan', 'Makan dan Minum', '750.000', 'andi'),
(20, '2022-08-05', 'Pembayaran Uang Kuliah', 'Lain - lain', '7.500.000', 'andi'),
(21, '2022-08-08', 'Pembelian Meja Komputer', 'Peralatan', '2.500.000', 'andi'),
(22, '2022-08-15', 'Pembayaran Uang Kas KSPM', 'Organisasi', '15.000', 'andi'),
(23, '2022-08-25', 'Beli Peralatan Mandi', 'Keperluan pribadi', '55.000', 'andi'),
(25, '2022-08-26', 'Pertamax', 'Lain - lain', '350.000', 'andi'),
(26, '2022-08-30', 'Pembelian Montor ZX-25r', 'Kendaraan', '113.000.000', 'andi'),
(27, '2022-08-31', 'Perpanjang layanan hosting', 'Lain - lain', '5.475.000', 'andi'),
(28, '2022-08-31', 'Pembayaran Uang Kas ', 'Organisasi', '15.000', 'andi'),
(30, '2024-01-10', 'sadasd', 'Kendaraan', '12.221', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rekening_keluar`
--

CREATE TABLE `rekening_keluar` (
  `id` int NOT NULL,
  `kode` varchar(15) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `aksi` varchar(15) NOT NULL DEFAULT 'keluar',
  `tanggal` date NOT NULL,
  `username` varchar(31) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `rekening_keluar`
--

INSERT INTO `rekening_keluar` (`id`, `kode`, `jumlah`, `aksi`, `tanggal`, `username`) VALUES
(16, 'TRF0001', '7.850.000', 'keluar', '2022-08-30', 'andi'),
(17, 'TRF0002', '250.000', 'keluar', '2023-12-20', 'admin'),
(18, 'TRF0003', '10.000', 'keluar', '2024-01-10', 'admin'),
(19, 'TRF0004', '10.000', 'keluar', '2024-01-10', 'admin');

--
-- Triggers `rekening_keluar`
--
DELIMITER $$
CREATE TRIGGER `tg_kodekeluar` BEFORE INSERT ON `rekening_keluar` FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(kode,4,4) AS Nomer
FROM rekening_keluar ORDER BY Nomer DESC LIMIT 1);
 
SET s = (SELECT kode_automatis2(i));
 
IF(NEW.kode IS NULL OR NEW.kode = '')
 THEN SET NEW.kode =s;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rekening_masuk`
--

CREATE TABLE `rekening_masuk` (
  `id` int NOT NULL,
  `kode` varchar(15) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `aksi` varchar(15) NOT NULL DEFAULT 'masuk',
  `tanggal` date NOT NULL,
  `username` varchar(31) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `rekening_masuk`
--

INSERT INTO `rekening_masuk` (`id`, `kode`, `jumlah`, `aksi`, `tanggal`, `username`) VALUES
(17, 'TRX0001', '15.000.000', 'masuk', '2022-08-30', 'andi'),
(18, 'TRX0002', '50.000.000', 'masuk', '2022-08-30', 'andi'),
(19, 'TRX0003', '7.850.000', 'masuk', '2022-08-30', 'admin'),
(20, 'TRX0004', '12313', 'masuk', '2023-12-06', 'admin'),
(21, 'TRX0005', '10.000', 'masuk', '2023-12-20', 'admin'),
(22, 'TRX0006', '250.000', 'masuk', '2023-12-20', 'admin'),
(23, 'TRX0007', '12.888', 'masuk', '2023-12-20', 'admin'),
(24, 'TRX0008', '12.222', 'masuk', '2024-01-10', 'admin'),
(25, 'TRX0009', '10.000', 'masuk', '2024-01-17', 'admin'),
(26, 'TRX0010', '100.000', 'masuk', '2024-01-18', 'user2'),
(27, 'TRX0011', '120.000', 'masuk', '2024-03-05', 'admin');

--
-- Triggers `rekening_masuk`
--
DELIMITER $$
CREATE TRIGGER `tg_kodemasuk` BEFORE INSERT ON `rekening_masuk` FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(kode,4,4) AS Nomer
FROM rekening_masuk ORDER BY Nomer DESC LIMIT 1);
 
SET s = (SELECT kode_automatis(i));
 
IF(NEW.kode IS NULL OR NEW.kode = '')
 THEN SET NEW.kode =s;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(31) NOT NULL,
  `email` varchar(63) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'aktif',
  `level` varchar(7) NOT NULL DEFAULT 'user',
  `no_rek` char(15) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`, `status`, `level`, `no_rek`) VALUES
('admin@gmail.com', 'admin', '$2y$10$P4k6qW8ppAqWfectI0tT/OOirNUFiHDA2j7.miX5Hv6XQ34/0AlK.', 'aktif', 'admin', '000123456789'),
('andifirmansyah@gmail.com', 'andi', '$2y$10$mSLQZVX.jbEhVWZ3/ZSMsuLwm4yYBKP7w1SX5zWzr1v1/wM3T1VFq', 'aktif', 'user', '012345678900'),
('letspremi478@gmail.com', 'user2', '$2y$10$N3eau0t3tIt7hCVGVsz/e.70/5keuSWiT4yxQYv6M8D/3lwYfeExK', 'aktif', 'user', 'o0jnIHSKZu');

--
-- Indexes for dumped tables
--
--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `pemasukkan`

ALTER TABLE `pemasukkan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_masuk` (`username`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_keluar` (`username`);

--
-- Indexes for table `rekening_keluar`
--
ALTER TABLE `rekening_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_rekening_keluar` (`username`);

--
-- Indexes for table `rekening_masuk`
--
ALTER TABLE `rekening_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_rekening_masuk` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemasukkan`
--
ALTER TABLE `pemasukkan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening_keluar`
--
ALTER TABLE `rekening_keluar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening_masuk`
--
ALTER TABLE `rekening_masuk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemasukkan`
--
ALTER TABLE `pemasukkan`
  ADD CONSTRAINT `fk_username_masuk` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `fk_username_keluar` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekening_keluar`
--
ALTER TABLE `rekening_keluar`
  ADD CONSTRAINT `fk_username_rekening_keluar` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekening_masuk`
--
ALTER TABLE `rekening_masuk`
  ADD CONSTRAINT `fk_username_rekening_masuk` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;