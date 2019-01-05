-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2018 pada 10.54
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpetshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Hedi Tris Mulyana', 'MrKidz', '6e77c57c321e4818c14fb5af364383d3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `NO` int(11) NOT NULL,
  `Catalog` varchar(50) NOT NULL,
  `NamaBarang` varchar(200) NOT NULL,
  `Harga` int(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`NO`, `Catalog`, `NamaBarang`, `Harga`, `Deskripsi`, `Stok`) VALUES
(1, 'Dog Food', 'BLACKWOOD ADULT DOG CHICKEN MEAL & BROWN RICE RECIPE 6.8 KG', 450000, 'Description : </br>\r\n•	Ideal for older and overweight dogs</br>\r\n•	Super-premium, all natural chicken protein</br>\r\n•	Pre- and probiotics to aid digestion</br>\r\n•	No corn, no wheat, no soy</br>\r\n•	Nutritionally complete and balanced</br></br>\r\nINGREDIENTS : </br>\r\nChicken Meal, Brown Rice, Millet, Ground Grain Sorghum, Oat Groats, Pearled Barley, Carrots, Celery, Beets, Parsley, Lettuce, Watercress, Spinach, Dried Plain Beet Pulp, Rice Bran, Natural Flavor, Chicken Fat (Preserved with Mixed Tocopherols), Brewers Dried Yeast, Egg Product, Menhaden Fish Meal, Chicken Cartilage, Calcium Carbonate, Whole Ground Flaxseed, Lecithin, Salt, Monosodium Phosphate, DL-Methionine, Menhaden Fish Oil, Potassium Chloride, L-Lysine, Ground Rosemary, Ground Thyme, Ground Cumin, Ground Yellow Mustard, Crushed Red Chili Pepper, Cranberry, Apple, Pumpkin Meal, Kelp Meal, Choline Chloride, Lactobacillus Acidophilus Fermentation Product Dehydrated, Fructooligosaccharide (FOS), Taurine, Glucosamine Hydrochloride, Yucca Schidigera Extract, Vitamin E Supplement, Ascorbic Acid, Niacin Supplement, Organic Dried Kelp, d-Calcium Pantothenate, Riboflavin Supplement, Biotin, Vitamin B12 Supplement, Thiamine Mononitrate, Vitamin A Acetate, Pyridoxine Hydrochloride, Citric Acid, Vitamin D3 Supplement, Folic Acid, Iron Sulfate, Zinc Sulfate, Zinc Proteinate, Iron Proteinate, Copper Sulfate, Zinc Oxide, Manganese Sulfate, Manganese Proteinate, Copper Proteinate, Manganous Oxide, Sodium Selenite, Calcium Iodate. </br>\r\nCALORIE CONTENT : </br>\r\n• 3335 kcal/kg </br>\r\n• 360 kcal/cup</br>\r\n• 3 kcal/g (ME – calculated) </br>\r\nGUARANTEED ANALYSIS : </br>\r\n• Crude Protein MIN 20.5%</br>\r\n• Crude Fat MAX 9.0%</br>\r\n• Crude Fat MIN 6.5% </br>\r\n• Crude Fiber MAX 4.0%</br>\r\n• Moisture MAX 10.0%</br>\r\n• Omega 6 (Linoleic Acid) MIN 1.4%</br>\r\n• *Omega 3 (Linolenic Acid) MIN 0.4% </br>\r\n• Glucosamine MIN 440 ppm </br>\r\n• *Chondroitin MIN 90 ppm </br>\r\n• *Total Micro-organisms MIN 31m CFU/lb. </br>\r\n* Not recognized as an essential nutrient by AAFCO dog food nutrient profiles. </br>\r\nNUTRITIONALLY COMPLETE & BALANCED : </br>\r\nBlackwood Lean/Senior Chicken Meal & Brown Rice Adult Dog Food is formulated to meet the nutritional levels established by the AAFCO dog food nutrient profiles for Maintenance. </br>\r\n\r\nFEEDING SUGGESTIONS : </br>\r\nThese are quantity suggestions. The actual amount you feed your pet may vary, depending greatly upon the breed, activity level, metabolism and your preferences. Standard 8 oz. measuring cup. Fresh, clean water should be available to your pet at all times. </br>\r\n', 5),
(2, 'Dog Food', 'ROYAL CANIN SMALL DOGS MINI STARTER MOTHER & BABY DOGS 2,4 KG', 260000, 'Description : </br>\r\nRoyal Canin’s Starter formulas are a unique nutritional solution that meets the needs of the mother and her puppies during the first 5 stages of life: gestation, birth, lactation, weaning and growth up to 2 months.</br>\r\n•	Nutritional support for expecting mothers and her developing puppies</br>\r\n•	Supports high energy needs of nursing mothers</br>\r\n•	Supports transition from mother''s milk to solid food</br>\r\n•	Kibble easily rehydrated for young puppies</br>\r\n•	100% Complete and Balanced Nutrition</br>\r\n•	100% Satisfaction Guaranteed</br>\r\nSMALL Starter is designed for small breed mothers from the end of gestation (3rd trimester) and during lactation and young puppies up to 2 months. </br>\r\nKibble</br>\r\nKibbles easily rehydrate to consistency that is very palatable for both the mother and her weaning puppies</br>\r\n', 6),
(3, 'Dog Food', 'ISKHAN JUNIOR 1.2 KG', 708000, 'Description : </br>\nIskhan Junior</br>\nPakan yang kaya dibuat secara khusus bukan hanya untuk pertumbuhan tulang dan otot tetapi juga untuk perlindungan yang optimal, menjadikan anjing anda sehat dan aktif serta memiliki bulu dan kulit yang berkilau</br>\n\n\nKeunggulan: </br>\n•	Dibuat dengan tidak menggunakan biji-bijian “grain” untuk mencegah timbulnya alergi. </br>\n•	Immunogglobulin Y (York) dan sayuran alami (Tumeric, Thyme dan garlic) untuk menjaga kekebalan tubuh. </br>\n•	Probiotik dan frukto oligasakarida meningkatkan aktifitas bakteri intestinal yang bermanfaat untuk kesehatan saluran pencernaan dan pencegahan terhadap timbulnya diare. </br>\n•	Mengandung DHA dan EPA yang membantu perkembangan otak dari system peredaran darah. </br>\n•	Minyak salmon dan Flaxseed menjadikan kulit anak anjing anda berkilau dan elastis. </br>\n', 4),
(4, 'Dog Food', 'PRO PAC ULTIMATES LAMB & BROWN RICE FORMULA', 240000, 'Description : </br>\r\nIni cocok untuk puppy maupun anjing dewasa, formulanya dibuat untuk semua umur. Ukuran kible kecil cocok untuk anjing kecil. </br>\r\n\r\nPro Pac Ultimates Lamb Meal and Brown Rice dibuat tanpa jagung, gandum atau kedelai sehingga menyediakan nutrisi yang terbaik untuk anjing. Sumber protein utama dari formula ini adalah dari tepung domba yang berkualitas tinggi, yang menyediakan essential amino acids untuk mempertahankan otot yang kuat dan bulu yang sehat dan mengkilat. Formula antioxidant ini diperkaya dengan Vitamin A dan Vitamin C serta sayur-sayuran dan buah-buahan yang kaya nutrisi dari apel, blueberry, wortel, bayam dan cranberry. Serat dari buah beet, blueberry dan cranberry membantu sistem pencernaan. PRO PAC Ultimates Lamb Meal and Brown Rice Formula nutrisinya seimbang dan diperkaya oleh kecukupan asam amino Omega-6 dan Omega-3 untuk mendukung kesehatan kulit dan bulu. L-Carnitine membantu membakar lemat dan mempertahankan otot yang ramping untuk mendukung anjing yang sehat dan aktif. PRO PAC Ultimates diperkaya oleh mineral-mineral yang mudah dicerna sehingga membantu sistem pencernaan, fungsi immune dan kesehatan kulit dan bulu. PRO PAC Ultimates Lamb Meal & Brown Rice Formula dijamin 100%untuk rasa dan nutrisinya. </br>\r\n\r\nINGEREDIENTS : </br>\r\nLamb Meal, Brown Rice, White Rice, Peas, Rice Bran, Whitefish Meal, Canola Oil (Preserved with Mixed Tocopherols), Dried Beet Pulp, Flaxseed, Dried Egg Product, Apples, Blueberries, Cranberries, Carrots, Spinach, Salt, Potassium Chloride, Choline Chloride, DL-Methionine, L-Lysine, Taurine, Yucca Schidgera Extract, L-Carnitine, Beta-Carotene, Vitamin A Supplement, Vitamin D3 Supplement, Vitamin E Supplement, Zinc Sulfate, L-Ascorbyl-2-Polyphosphate (Source of Vitamin C), Ferrous Sulfate, Niacin, Calcium Pantothenate, Riboflavin Supplement, Copper Sulfate, Pyridoxine Hydrochloride, Thiamine Mononitrate, Manganese Sulfate, Zinc Proteinate, Manganese Proteinate, Copper Proteinate, Calcium Iodate, Cobalt Carbonate, Folic Acid, Sodium Selenite, </br>\r\n', 8),
(5, 'Dog Food', 'DOGS FOOD TIMBERWOLF CLASSIC OCEAN BLUE 1.36 KG', 150000, 'Description : </br>\r\nTimberwolf Ocean Blue® Grain Free Formula is a unique highly useful hypo-allergenic formula for clearing up dermatologic and other conditions caused by adverse food reactions or the build-up of toxins. </br>\r\nMade in USA. </br>\r\nFollow Your Instincts – Pet Foods the Way Nature Intended</br>\r\n• Mid-range protein and fat diet with relatively high levels of exceptional low ash high protein (8%/70%)</br>\r\n• Made from White fish meal that uses the entire fish, not just left over parts from processing for human consumption like most fish meal</br>\r\n• High levels of linolenic acid, or omega 3 essential fatty acids, from the herring, salmon meal and wild salmon oil, including EPA and DHA. Herring are very nutrient rich, high in Omega-3 fatty acids EPA and DHA and an excellent source of vitamin D and zinc. Salmon meal is a highly concentrated, highly digestible protein and fat source and an excellent source of high quality protein, calcium, phosphorous and Omega 3 fatty acids, which result in healthy skin and coat and promotes the brain development of puppies. </br>\r\n• Organic Kelp plants farmed from the ocean are very high in zinc, which is very important to for good health in northern breeds</br>\r\n• Spinach a natural source of zinc, magnesium, manganese carotenoids, vitamin A, C, E, antioxidants and folic acid. Niacin a B vitamin, assists in digestive and nerve function and helps to process protein, carbohydrates, fats and promotes brain function. </br>\r\n• Higher levels of mixed tocopherols along with vitamin E are able to preserve the high levels of omega 3s. A high ratio of omega 3 to omega 6 essential fatty acids (greater than 1 to 6 omega 3 to omega 6) may lower the incidence of cancer and may even help animals with cancer live longer than they would otherwise. </br>\r\n• Formula excludes vitamin K3 (menadione sodium bisulfate) because of health risks to animals and rely instead on high levels of foods that are high in vitamin k1 such as alfalfa and kelp</br>\r\n', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guestbuyer`
--

CREATE TABLE `guestbuyer` (
  `nama_buyer` varchar(25) NOT NULL,
  `alamat_buyer` varchar(50) NOT NULL,
  `email_buer` varchar(50) NOT NULL,
  `telp_buyer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(15) NOT NULL,
  `nama_member` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` varchar(65) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nutritionaldiet`
--

CREATE TABLE `nutritionaldiet` (
  `IdDiet` int(20) NOT NULL,
  `NamaPemilik` varchar(50) NOT NULL,
  `NoHandphone` varchar(25) NOT NULL,
  `Alamat` text NOT NULL,
  `NamaHewan` varchar(50) NOT NULL,
  `Umur` varchar(20) NOT NULL,
  `CiriCiri` text NOT NULL,
  `JenisHewan` varchar(50) NOT NULL,
  `JenisDiet` varchar(20) NOT NULL,
  `TglDiet` date NOT NULL,
  `ItemDiet` text NOT NULL,
  `TotalHarga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nutritionaldiet`
--

INSERT INTO `nutritionaldiet` (`IdDiet`, `NamaPemilik`, `NoHandphone`, `Alamat`, `NamaHewan`, `Umur`, `CiriCiri`, `JenisHewan`, `JenisDiet`, `TglDiet`, `ItemDiet`, `TotalHarga`) VALUES
(1, 'jknjn', 'kjn', 'jkn', 'kjn', 'kjn', 'nkjk', 'k', '1', '2018-12-04', 'Nutritional Diet : Over Weight', 100000),
(2, 'jkkj', 'bkj', 'bkj', 'b', 'kj', 'jbkj', 'bk', '2', '2018-12-04', 'Nutritional Diet : Low Weight', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penitipan`
--

CREATE TABLE `penitipan` (
  `IdPenitipan` int(10) NOT NULL,
  `NamaPemilik` varchar(40) NOT NULL,
  `NoHandphone` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `NamaHewan` varchar(50) NOT NULL,
  `Umur` varchar(50) NOT NULL,
  `JenisHewan` varchar(50) NOT NULL,
  `CiriCiri` text NOT NULL,
  `TglMasuk` date NOT NULL,
  `TglKeluar` date NOT NULL,
  `TglCheckOut` date NOT NULL,
  `TotalHarga` double NOT NULL,
  `Denda` double NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `totalhari` int(11) NOT NULL,
  `totalharidenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penitipan`
--

INSERT INTO `penitipan` (`IdPenitipan`, `NamaPemilik`, `NoHandphone`, `Alamat`, `NamaHewan`, `Umur`, `JenisHewan`, `CiriCiri`, `TglMasuk`, `TglKeluar`, `TglCheckOut`, `TotalHarga`, `Denda`, `Status`, `totalhari`, `totalharidenda`) VALUES
(1, 'Hedi', '089626846597', 'jhgjgjh', 'Andre', '22', 'Asu', 'gfdgfdgf', '2018-11-09', '2018-11-16', '2018-11-30', 700000, 2100000, 1, 7, 14),
(2, 'nnknk', 'jnk', 'jnk', 'jn', 'kjn', 'knk', 'jn', '2018-11-28', '2018-12-03', '2018-12-04', 500000, 150000, 1, 5, 1),
(3, 'Hedi', '088888', 'Bekasi', 'Doggy', '20', 'Kucing', 'Warna Belang Hitam', '2018-12-07', '2018-12-10', '2018-12-06', 300000, 0, 1, 3, 0),
(4, 'Hedi', '088888', 'Bekasi', 'Doggy', '20', 'Kucing', 'Belang Biru', '2018-12-01', '2018-12-04', '2018-12-06', 300000, 300000, 1, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kodepesanan` varchar(50) NOT NULL,
  `kodebarang` varchar(20) NOT NULL,
  `namapembeli` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `totalharga` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(15) NOT NULL,
  `id_pelanggan` int(15) NOT NULL,
  `id_hewan` int(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `jenis_hewan` enum('Anjing','Kucing') NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `denda` varchar(10) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `jenis_makanan` enum('Basah','Kering') NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinasi`
--

CREATE TABLE `vaksinasi` (
  `IdVaksinasi` int(20) NOT NULL,
  `NamaPemilik` varchar(50) NOT NULL,
  `NoHandphone` varchar(25) NOT NULL,
  `Alamat` text NOT NULL,
  `NamaHewan` varchar(50) NOT NULL,
  `Umur` varchar(20) NOT NULL,
  `CiriCiri` text NOT NULL,
  `JenisHewan` varchar(50) NOT NULL,
  `JenisVaksinasi` varchar(20) NOT NULL,
  `TglVaksin` date NOT NULL,
  `ItemVaksin` text NOT NULL,
  `TotalHarga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vaksinasi`
--

INSERT INTO `vaksinasi` (`IdVaksinasi`, `NamaPemilik`, `NoHandphone`, `Alamat`, `NamaHewan`, `Umur`, `CiriCiri`, `JenisHewan`, `JenisVaksinasi`, `TglVaksin`, `ItemVaksin`, `TotalHarga`) VALUES
(7, 'bjhb', 'jh', 'bjh', 'bj', 'hb', 'jhb', 'jhb', '2', '2018-12-04', 'Vaksinasi Paket 2 :</br><ul><li>Parvo</li><li>Distemper</li><li>Hepatitis</li><li>Parainfluenza</li><li>Leptospira</li><li>Corona</li>  </ul>', 160000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `guestbuyer`
--
ALTER TABLE `guestbuyer`
  ADD PRIMARY KEY (`nama_buyer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `nutritionaldiet`
--
ALTER TABLE `nutritionaldiet`
  ADD PRIMARY KEY (`IdDiet`);

--
-- Indexes for table `penitipan`
--
ALTER TABLE `penitipan`
  ADD PRIMARY KEY (`IdPenitipan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kodepesanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  ADD PRIMARY KEY (`IdVaksinasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nutritionaldiet`
--
ALTER TABLE `nutritionaldiet`
  MODIFY `IdDiet` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penitipan`
--
ALTER TABLE `penitipan`
  MODIFY `IdPenitipan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  MODIFY `IdVaksinasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
