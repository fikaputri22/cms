-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2024 at 12:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_fika`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id_caraousel`, `judul`, `foto`) VALUES
(14, 'k', '202412084707.jpg'),
(16, 'kml', '202412084833.jpg'),
(17, 'lo', '202412085034.jpg'),
(18, 'ok', '202412085042.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(12, 'Cinta'),
(13, 'Komedi'),
(14, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_wa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Fika nur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem dolores laudantium quia, qui similique', 'fegrw', 'esfsefe', 'aefafea', 'Maguan, Tasik Madu, Karanganyar', '6285800643035');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(51, 'Azzamine', '', '202412081904.jpg', 'Azzamine', '12', '2024-12-16', 'admin'),
(52, 'Dua Garis Biru', 'Bima dan Dara merupakan pasangan remaja yang dihadapkan pada kehidupan penuh rintangan saat kehamilan tak direncanakan mengubah hidup mereka.  Sutradara:  Gina S. Noer Pemain:  Adhisty Zara, Angga Yunanda, Cut Mini Theo, Arswendy Bening Swara', '202412082224.jpg', 'Dua-Garis-Biru', '12', '2024-12-16', 'admin'),
(53, 'Ada Apa Dengan Cinta', 'Cinta adalah seorang gadis populer di sebuah SMA. Kedekatannya dengan Rangga, membuat ia mulai menjauh dari teman-temannya. Hubungan Cinta dengan Rangga semakin sulit ketika teman-teman Cinta memintanya untuk memilih mereka atau Rangga.\r\n\r\nSutradara: \r\nRudi Soedjarwo\r\nPemain: \r\nDian Sastrowardoyo, Nicholas Saputra, Titi Kamal, Ladya Cheryl', '202412082503.jpg', 'Ada-Apa-Dengan-Cinta', '12', '2024-12-16', 'admin'),
(54, 'Makmum', 'Nurul adalah mahasiswa yang rajin dan religius. Suatu malam, dia bangun jam 2 pagi dan berdoa seperti biasa. Dia merasa ada seseorang di belakangnya dan meniru gerakannya selama berdoa. Dia berpikir bahwa seseorang di belakangnya adalah salah satu temannya. Akhirnya, dia menyadari bahwa dia satu-satunya yang tinggal di asrama, karena semua temannya telah kembali ke kampung halaman mereka. Jadi, siapa di belakangnya?\r\n\r\nSutradara: \r\nRiza Pahlevi', '202412082701.jpg', 'Makmum', '14', '2024-12-16', 'admin'),
(55, 'Satu Hari Nanti', 'Sepasang kekasih yang kian gamang ketika tiba-tiba hadir pasangan lain yang membuat kesetiaan mereka teruji.\r\n\r\nPemeran\r\nAdinia Wirasti, Ringgo Agus Rahman, Deva Mahenra, Ayushita\r\nRilis\r\n2017\r\nPenulis\r\nSalman Aristo\r\nSutradara\r\nSalman Aristo\r\nPerusahaan Produksi\r\nEvergreen Pictures', '202412082824.jpg', 'Satu-Hari-Nanti', '12', '2024-12-16', 'admin'),
(56, 'Suryati Pembantu Berdarah', 'Suryati mulai bekerja di rumah baru untuk seorang mantan dokter bedah sebagai pembantu, namun Suryati seperti mendapat penglihatan di dalam rumah itu dan mempertanyakan apakah dia telah membuat pilihan yang tepat.\r\n\r\nPemeran\r\nRoswita Widya Ambarini, Nabiila Karunia\r\nRilis\r\n2023\r\nPenulis\r\nCosmas Damiano\r\nSutradara\r\nCosmas Damiano\r\nPerusahaan Produksi\r\nTuwaga Visual', '202412083316.jpg', 'Suryati-Pembantu-Berdarah', '14', '2024-12-16', 'admin'),
(57, 'Roro Ajo', 'Ajo sampai saat ini masih merasa kehilangan dan trauma pasca ayahnya hilang di lautan. Hal itu membuatnya selalu marah ketika mendengar mitos jika memakai baju Hijau di pantai, ia bisa hilang. Ia meyakini ayah nya hilang karena badai, sedangkan orang orang di sekitanya meyakini ayahnya ditelan lautan oleh sosok Nyiroro Kidul\r\n\r\nPemeran\r\nDede Malik\r\nRilis\r\n2023\r\nPenulis\r\nJihan Fathyanisa, Yopi Muhammad Dzikri\r\nSutradara\r\nYopi Muhammad Dzikri\r\nPerusahaan Produksi\r\nVulpecula Pictures', '202412083407.jpg', 'Roro-Ajo', '13', '2024-12-16', 'admin'),
(58, 'Tepatilah Janji', 'Film Tepatilah Janji berkisah tentang Bu Pertiwi (Cut Mini) dan keluarganya yang terseret dalam konflik politik ketika Adam (Bima Zeno), putra tertuanya, menjadi lurah. Pilkada penuh intrik ini memperumit kehidupan keluarga, termasuk kisah cinta Bu Pertiwi dengan Pak Janji (Ibnu Jamil) yang diwarnai gosip desa dan isu dinasti.\r\n\r\nPemeran\r\nCut Mini, Ibnu Jamil, Bima Zeno, Shenina Cinnamon, Faradina Mufti, Kevin Abani, Givina, Siti Fauziah\r\nRilis\r\n2024\r\nPenulis\r\nAlim Sudio\r\nSutradara\r\nGarin Nugroho\r\nPerusahaan Produksi\r\nPT. Asta Jaya Centra Cinema, Garin Workshop, Padi Padi Creative', '202412083442.jpg', 'Tepatilah-Janji', '13', '2024-12-16', 'admin'),
(59, 'Basri dan Salma', 'Film Tepatilah Janji berkisah tentang Bu Pertiwi (Cut Mini) dan keluarganya yang terseret dalam konflik politik ketika Adam (Bima Zeno), putra tertuanya, menjadi lurah. Pilkada penuh intrik ini memperumit kehidupan keluarga, termasuk kisah cinta Bu Pertiwi dengan Pak Janji (Ibnu Jamil) yang diwarnai gosip desa dan isu dinasti.\r\n\r\nPemeran\r\nCut Mini, Ibnu Jamil, Bima Zeno, Shenina Cinnamon, Faradina Mufti, Kevin Abani, Givina, Siti Fauziah\r\nRilis\r\n2024\r\nPenulis\r\nAlim Sudio\r\nSutradara\r\nGarin Nugroho\r\nPerusahaan Produksi\r\nPT. Asta Jaya Centra Cinema, Garin Workshop, Padi Padi Creative', '202412083512.jpg', 'Basri-dan-Salma', '13', '2024-12-16', 'admin'),
(60, 'Yowis Ben', '', '202412083558.jpg', 'Yowis-Ben', '13', '2024-12-16', 'admin'),
(61, 'Seamin Tak Seiman', 'Seamin Tak Seiman bercerita tentang kisah sepasang kekasih, Nuel (Petrus Mahendra) dan Danisa (Dinda Kirana), yang berbeda agama dan mencoba memperjuangkan hubungan mereka. Namun, setelah dijalani hubungan tersebut malah menyakiti perasaan masing-masing karena tak ada yang mengalah untuk pindah agama. Hingga akhirnya, keduanya memutuskan untuk berpisah dengan baik-baik.\r\nSutradara:\r\nLuthfi Aulia Chandra\r\nPemain:\r\nDinda Kirana, \r\nPetrus Mahendra', '202412083917.jpg', 'Seamin-Tak-Seiman', '12', '2024-12-16', 'admin'),
(62, 'Nyewu', 'Seamin Tak Seiman bercerita tentang kisah sepasang kekasih, Nuel (Petrus Mahendra) dan Danisa (Dinda Kirana), yang berbeda agama dan mencoba memperjuangkan hubungan mereka. Namun, setelah dijalani hubungan tersebut malah menyakiti perasaan masing-masing karena tak ada yang mengalah untuk pindah agama. Hingga akhirnya, keduanya memutuskan untuk berpisah dengan baik-baik.\r\nSutradara:\r\nLuthfi Aulia Chandra\r\nPemain:\r\nDinda Kirana, \r\nPetrus Mahendra', '202412084025.jpg', 'Nyewu', '14', '2024-12-16', 'admin'),
(63, 'Sleep With Me', 'Seamin Tak Seiman bercerita tentang kisah sepasang kekasih, Nuel (Petrus Mahendra) dan Danisa (Dinda Kirana), yang berbeda agama dan mencoba memperjuangkan hubungan mereka. Namun, setelah dijalani hubungan tersebut malah menyakiti perasaan masing-masing karena tak ada yang mengalah untuk pindah agama. Hingga akhirnya, keduanya memutuskan untuk berpisah dengan baik-baik.\r\nSutradara:\r\nLuthfi Aulia Chandra\r\nPemain:\r\nDinda Kirana, \r\nPetrus Mahendra', '202412084049.jpg', 'Sleep-With-Me', '14', '2024-12-16', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(3, 'udin', 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'Kontributor'),
(4, 'wawan', 'wawan', '0a000f688d85de79e3761dec6816b2a5', 'Kontributor'),
(5, 'miyarso', 'miyarso', 'c0b4018e28261aca35b6c3fb9f9adad1', 'Kontributor'),
(6, 'sad', 'dasd', '7815696ecbf1c96e6894b779456d330e', 'Kontributor'),
(7, 'asdsad', 'dsadsad', '4473e588b35568687564de38ed134d0b', 'Kontributor'),
(8, 'sadadda', 'dasd', '49299ca918b02a430d8e677cbaea192d', 'Admin'),
(9, 'asdasd', 'sadsasda', 'a8f5f167f44f4964e6c998dee827110c', 'Kontributor'),
(10, 'adassdasa', 'sads', '49498103643743b50eeaf93f6fdb03ac', 'Admin'),
(11, 'asdasd', 'asdasd', 'adbf5a778175ee757c34d0eba4e932bc', 'Admin'),
(12, 'sad', 'asdsadasdas', 'bff149a0b87f5b0e00d9dd364e9ddaa0', 'Kontributor'),
(13, 'asdas', 'sdasd', '49f0bad299687c62334182178bfd75d8', 'Kontributor'),
(14, 'sadasdsad', 'asdasd', '095d13968599f30781fb3e6f9aae055e', 'Admin'),
(15, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
