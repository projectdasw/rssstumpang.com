-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2025 at 12:12 AM
-- Server version: 10.11.13-MariaDB-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_akun`
--

CREATE TABLE `aktivitas_akun` (
  `id_aktivitas` uuid NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_akun` text NOT NULL,
  `aktivitas` text NOT NULL,
  `keterangan` text NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `user_agent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktivitas_akun`
--

INSERT INTO `aktivitas_akun` (`id_aktivitas`, `tanggal`, `waktu`, `nama_akun`, `aktivitas`, `keterangan`, `ip_address`, `user_agent`) VALUES
('bd280a43-3d5b-4ac4-934d-42eed751254b', '2025-07-15', '07:27:44', 'Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('d83c7d01-73a1-4cd0-b59b-15c05b84c2bd', '2025-07-15', '07:29:26', 'Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('7f946416-f6ad-440f-b75b-9a7973ff9f83', '2025-07-15', '07:29:33', 'Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('532201a7-91bc-47dc-a0e5-30a7c73f237f', '2025-07-15', '07:30:12', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('d0222da1-0c4a-4904-a66b-004729f510ee', '2025-07-15', '07:30:20', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('4e44c08e-a3fa-4cb2-85b8-85de6e7909d2', '2025-07-16', '02:57:22', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('1c370da3-9297-429e-a5f1-457275fd2254', '2025-07-16', '03:13:21', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('23a1166e-6005-4391-89bd-1f4c9ae22270', '2025-07-16', '03:13:34', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('dcf9bc93-8577-4946-8d98-dc2af24b7266', '2025-07-16', '03:13:38', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('96da3913-4634-46aa-acf2-b337249bdb83', '2025-07-16', '03:13:58', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('f994b943-57ad-4cb0-a262-e7b5af3f99e2', '2025-07-16', '03:14:14', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('2641564b-d65a-4a9d-9cfe-dd48978e1c4e', '2025-07-16', '03:15:02', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('c74d52a8-082c-4dfa-93a8-bb3a8ec1cc56', '2025-07-16', '03:15:11', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('c1f7b326-1c0f-41b0-ba75-9af806b0c69b', '2025-07-16', '03:26:20', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('62df8871-505f-425d-b90e-7c75c2c098d9', '2025-07-16', '03:30:37', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('bfffa9e8-245e-4bf8-8f11-70ea87a7a836', '2025-07-16', '10:37:16', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('b08d32bc-375e-4a9d-9359-4f8d94014cc5', '2025-07-16', '10:37:29', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('6d183bd1-faef-4184-bfdd-e4754f968701', '2025-07-16', '10:38:14', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('03cbcc3c-9334-49be-bcf4-420c7321ae20', '2025-07-16', '12:59:47', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('7c023efc-4336-4e66-9f23-cff11bb9d3e7', '2025-07-16', '14:52:32', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('301fe340-0b2f-42aa-a9b8-0b072cb354c4', '2025-07-16', '15:58:16', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('9c3869e7-6b2d-4f3c-880c-475da1dd4549', '2025-07-16', '15:58:29', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('477f59f1-f73b-4772-85a5-74fc351505ca', '2025-07-16', '16:38:30', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('860f3468-3980-4ab6-b9c0-25b75c450786', '2025-07-16', '16:38:40', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('37691012-32ee-43d4-b8a1-6d5ad7754da6', '2025-07-16', '16:39:12', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('a28f11b7-1a07-48b5-8f3c-975d80a3d9d9', '2025-07-21', '14:17:47', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('1c18568e-98e9-4b23-bddc-7a3bb9ae9cff', '2025-07-21', '19:04:18', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('ddd74155-28fe-4e3d-a382-a1dfb997373f', '2025-08-04', '09:59:05', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('1aa884f0-3f13-4582-a513-f8ef453b2920', '2025-08-04', '11:25:40', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('f99b8794-c877-40a6-9c4a-280eb4aae027', '2025-08-04', '11:25:57', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('7af85ad4-f75a-4aa0-9f55-62547be5ff32', '2025-08-04', '11:26:27', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('0b28d7cf-49c4-42b9-9b6f-41d182eb19d9', '2025-08-04', '11:28:41', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('8ed255b9-3d27-4d6e-9538-09c38fec2b14', '2025-08-06', '10:15:59', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('53b5b3f6-9f44-4eed-99d1-12008dc0c411', '2025-08-06', '12:59:18', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('a5106a29-883a-4316-9ab5-20bd9c5b9af8', '2025-08-06', '12:59:28', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36'),
('08deb929-8ef9-4b30-9f6e-589597376163', '2025-08-07', '08:57:01', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id_user` uuid NOT NULL,
  `nama_lengkap` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL,
  `last_active` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `last_active`) VALUES
('32f12c46-0703-44b0-9969-1d2f59868afe', 'Editor', 'editor', '$2y$10$uhkw1KRG5XBH.ghlKC2n7.fpfI3sgnWBs4Z3DExytGlBJXbMo3Wr6', 'editor', '2025-07-10 18:24:32'),
('8f271d96-0bd1-45df-9428-40068e2b4a41', 'Admin', 'admin', '$2y$10$TsjXwrO/04/l/zy6raPVwOw8zT5FbhKswdkv0/bAmYDqs5BrfDak2', 'admin', '2025-07-10 18:25:06'),
('993a12d2-d7a9-4a00-8daf-6af57dff2bd1', 'Super Admin', 'superadmin', '$2y$10$/IzjyP1gv5wAbDcF6IeexOXimDuRBI/8j3Um63pvU0Kwf9P./y.4e', 'superadmin', '2025-07-12 11:59:28'),
('0ab65ca9-e917-40fb-884d-fa52f4f0b166', 'Contributor', 'contributor', '$2y$10$.nrndpjh22l3rgoOx5nVTuYuMhuc34pxRyCfrNdkDDprCcPxe0Ur6', 'contributor', '2025-07-10 18:15:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
