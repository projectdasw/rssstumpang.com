-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2025 at 02:17 AM
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
('d27725ec-27b3-4cb2-a528-8215cebc4234', '2025-08-15', '14:19:45', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d7d2d2b7-d349-4e5e-a44a-3c6deacd7f3c', '2025-08-15', '15:36:40', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d775d267-f45d-4fd0-9675-bb2d5af99a05', '2025-08-15', '15:36:45', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('f7b4aef0-b179-404e-8564-ad1c054c2cd4', '2025-08-15', '15:36:53', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('e0938080-cd0d-4e77-bd00-ef56e708bc9a', '2025-08-15', '15:39:05', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('235aa04c-3529-4c2d-8f30-181319e987fd', '2025-08-15', '15:45:02', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('f3622ee8-537e-4786-ba99-3582d3ac2d3f', '2025-08-15', '15:46:19', 'Thomas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('a459ba47-9d51-4877-9f3d-e337d8e5e6fd', '2025-08-15', '15:47:20', 'Thomas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('eb047290-64ce-478a-b895-f012c03b0771', '2025-08-15', '15:47:42', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('02b329e1-8ba4-4484-b561-b5d52a775112', '2025-08-15', '15:47:58', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('8d1f9f2a-e8ec-4f7e-8b35-e72c9b50faed', '2025-08-15', '15:51:46', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('ed06ffcf-dff6-4fbc-9515-aced56a5e549', '2025-08-15', '16:19:37', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('b7ff3ff6-2d7e-4b72-a508-5803c79fd5b7', '2025-08-15', '16:19:51', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('8d60c0f9-976f-4222-83b5-9cb7a53e5804', '2025-08-15', '16:19:56', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d2d737c5-e9f5-484a-8025-7012d10eb1ee', '2025-08-15', '16:20:22', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('443abe74-4e39-4104-9dff-46853461e699', '2025-08-15', '16:21:19', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('0d4087b6-0118-4d6c-a0d5-bf7f48c11848', '2025-08-15', '16:21:50', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6e974e21-5994-4bb2-a003-7fe3f07807b3', '2025-08-15', '16:22:04', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d9ef7cd2-5f68-4c94-91f6-b4efccf6a778', '2025-08-15', '16:22:19', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('10c8848c-ba40-4ade-b9e4-d77e4d3a5a7f', '2025-08-15', '16:23:38', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('e9f7bc3e-9d24-45e9-a838-36ba3885f9ba', '2025-08-15', '16:27:28', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6c6c4b83-d824-4b34-810d-d1a9897fb8ac', '2025-08-15', '16:29:04', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('3b539908-be96-4c9c-bde9-b2f5994e84f0', '2025-08-15', '16:29:07', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('968d9019-1ee9-402c-b28f-d202c2763016', '2025-08-15', '16:29:13', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('4ac76e6e-59ed-40b6-9b9c-b9124ec86704', '2025-08-15', '16:29:55', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('63681a61-8d77-4a99-bb4b-b0a6b2783183', '2025-08-15', '16:30:32', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('b090032f-3e45-4b59-8565-ac3e191e1840', '2025-08-15', '16:30:37', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6970dbe5-3aa3-4445-90a4-3bff6f3de46c', '2025-08-15', '16:31:09', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('1a2e4996-1443-4094-b9f1-8cff04ec342d', '2025-08-15', '16:31:25', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('5610846e-6517-4bcf-9016-88eb4b937856', '2025-08-15', '16:34:51', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('c3dc5d34-b381-48d7-81b2-2f2d7a9f9f41', '2025-08-15', '16:36:19', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('582aac03-abea-4983-a4d7-aa3d2522b25d', '2025-08-15', '16:36:29', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('0ae03fdc-a280-4914-8fc7-9841a4459a3d', '2025-08-15', '16:36:34', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('4090703d-166c-458b-b01f-01ac0ecf6b94', '2025-08-15', '16:36:39', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('81169b2b-397b-43f9-87cd-8f2e01dca718', '2025-08-15', '16:39:33', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('408226d9-c626-4704-a775-08353addbf47', '2025-08-15', '16:42:19', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('2dba1ba5-731b-4725-a86c-365d4f2a2f60', '2025-08-15', '16:47:41', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('0a3c3368-22f7-4c84-8ed6-7199fc198f30', '2025-08-15', '16:49:45', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('ec6352da-f0ca-42bc-98a8-338c7c785247', '2025-08-15', '16:49:47', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('99344977-7f38-4468-a6a5-ef0a297bc7bb', '2025-08-15', '16:50:40', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('002bee26-9ccf-4815-9bbb-97bf3a285e18', '2025-08-15', '16:57:46', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6e8e17c2-199a-4808-b317-3a4c5e829da5', '2025-08-15', '16:58:06', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('c51c15b1-8f57-44d5-ab8d-a7b5ee87dc1c', '2025-08-15', '16:58:10', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('8a7234a1-d77a-4783-81c5-76a456d5a634', '2025-08-15', '16:58:17', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('09d3bdfc-0092-4032-a7d5-dc861ab75cc6', '2025-08-15', '16:58:21', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('df41cab5-776e-4b59-be9e-c50c9de9a637', '2025-08-15', '16:58:25', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('f621f218-eb1d-4d88-a7aa-56af9d319f51', '2025-08-15', '16:58:41', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d91dfa05-8d4c-40d6-930b-da2b01c1dcdf', '2025-08-16', '11:34:09', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('bffc4c9c-c19d-4b00-a56b-b2939dd4a2e3', '2025-08-16', '11:34:13', 'Super Admin', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('97c72278-11d1-408b-b9a4-2b13c06b96f8', '2025-08-16', '11:34:17', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('5ae5036e-83b0-4fee-b339-ac6e696aa8c6', '2025-08-16', '11:34:21', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('9536a72d-f90a-4d80-8bdd-2f1bb5010502', '2025-08-16', '11:34:42', 'Dimas', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('7f8be815-752e-4110-a470-fadd155e5ab9', '2025-08-16', '11:39:14', 'Dimas', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('47755bfc-8c0c-470d-9ede-13ed01f8114e', '2025-08-16', '11:39:40', 'Akun', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('dcc0c8db-77fc-47ae-9f7c-11d612a828e9', '2025-08-16', '12:08:23', 'Akun', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('f00c8a05-d827-47d9-b490-dbd3546bf046', '2025-08-16', '12:13:54', 'Akun', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('849a1327-8f68-4569-add9-c29373ef05d8', '2025-08-16', '12:15:14', 'Akun', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6e951f0d-cde3-4fa4-a3af-f40f8cbd732c', '2025-08-16', '12:15:21', 'Dimas1', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('31cd2f24-2e9f-4fe9-b703-aefa2aec243b', '2025-08-16', '12:16:32', 'Dimas1', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('467f6f7a-b6a3-490e-81d6-60aa0c4d8473', '2025-08-16', '12:16:35', 'Akun', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('90ccfb73-3dda-4542-8988-2a8cf64366d7', '2025-08-16', '12:17:00', 'Akun', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('aadf0c58-c414-4653-9fed-a8c5ff096a68', '2025-08-16', '12:17:05', 'Dimas1', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('3a0e8e63-a853-42e3-8f1b-484c3c1808a5', '2025-08-16', '13:24:53', 'Dimas1', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('e1f1809a-436d-407b-9286-13c09aff7ade', '2025-08-16', '13:25:14', 'Dimas1', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('2102ff42-32b4-4ea4-8574-b7cca27dfeb6', '2025-08-16', '16:00:24', 'Dimas1', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('f84fb83d-6ad4-490a-916c-3ef77aca8196', '2025-08-16', '16:15:33', 'Dimas1', 'logout', 'Berhasil logout dari sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('3b4ad955-37e4-4221-b8cf-d474f4d08cca', '2025-08-16', '16:15:52', 'Dimas1', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('34e1b027-fb8e-488d-be42-8569cb1493ca', '2025-08-18', '09:57:29', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('64f363f7-82a4-4fd3-b59d-2aa43d37567f', '2025-08-18', '10:16:49', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama akun2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('bae13199-98bd-4372-9c9a-9add456a0db7', '2025-08-18', '10:17:08', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama akun2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('39fb841c-dfab-4d5c-892c-21537fcffada', '2025-08-18', '10:17:44', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama akun2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d95aefb9-4023-488a-86a3-6988b0e88a05', '2025-08-18', '10:19:03', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('22cbb003-db7c-4cf2-b52f-7997667a577a', '2025-08-18', '10:24:07', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('2e035e05-27b1-465f-957f-710d039eb413', '2025-08-18', '10:24:34', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('245b6e51-4530-4746-9c42-7bf8bbc18500', '2025-08-18', '10:25:01', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('1cbfe7e4-78c2-448b-b0cb-e53a27342a67', '2025-08-18', '10:36:17', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6bdb4a18-09f4-40bc-8294-e6e7b68580ff', '2025-08-18', '10:37:56', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('348a2278-5f7b-4f4f-963d-195010f634ad', '2025-08-18', '10:39:00', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('b88d46c5-2a35-4dc5-81da-f9b75922b2af', '2025-08-18', '12:32:34', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('da972486-2afc-4301-85e6-6830e99328e7', '2025-08-18', '12:58:17', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('5a3a0422-a68c-46ff-a6e0-36437d252f3b', '2025-08-18', '13:02:55', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('d1ea2ff4-092f-49f7-a79f-7bfff2ac7a90', '2025-08-18', '13:16:01', 'Super Admin', 'nonaktifkan data', 'Super Admin telah menonaktifkan akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('1232eee8-f2fa-4f4e-b8b5-d0c0ab2bd43b', '2025-08-18', '14:24:39', 'Super Admin', 'pemulihan akun', 'Super Admin telah memulihkan akun Akun 6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('b7e26eac-904b-4718-a46d-82d3b7aa3487', '2025-08-18', '14:34:44', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('130916d9-9971-4dd4-af42-04c849bb8d39', '2025-08-18', '14:37:35', 'Super Admin', 'pemulihan akun', 'Super Admin telah memulihkan akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('c55d1604-c118-4c1a-a2c7-0414371af5e0', '2025-08-18', '14:37:53', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('aecba72d-40f9-426d-b7e1-54eb3c930dc8', '2025-08-18', '14:38:07', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('ea8677c0-6b3c-4600-86ac-70c04ee2a2e2', '2025-08-18', '14:38:12', 'Super Admin', 'pemulihan akun', 'Super Admin telah memulihkan akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('dbac94f1-402c-43ff-9ebd-278f04fdabfb', '2025-08-18', '14:38:18', 'Super Admin', 'update data', 'Super Admin telah memperbarui data akun Akun 5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('1297c13e-d518-4106-9dc6-9e38ae8b83e0', '2025-08-18', '14:39:32', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Akun 5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('3965e67c-697d-4f65-868f-c30fc4b9dea4', '2025-08-18', '14:39:41', 'Super Admin', 'pemulihan akun', 'Super Admin telah memulihkan akun Akun 5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('5a8ab665-85b0-42fa-9f04-9c7e2a44148d', '2025-08-18', '14:39:51', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Akun 5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('44434dbd-1a67-439a-bd80-88f09ea61718', '2025-08-18', '15:46:39', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('5331f5fd-ec07-46fa-bf6e-0dd43d314629', '2025-08-18', '15:50:07', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('edcd14cb-ba2f-45f4-85f4-bde333b904c7', '2025-08-18', '15:53:10', 'Super Admin', 'hapus akun', 'Super Admin telah menghapus data akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('68f3eff5-5afd-4e8c-ae86-5d37d9ed9a03', '2025-08-18', '15:53:55', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('8197c929-72c1-44b3-905f-dbb545461ba3', '2025-08-18', '15:54:01', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('1f2ba65b-cfee-4e8b-b888-b3568e2ed5dc', '2025-08-18', '15:54:06', 'Super Admin', 'hapus akun', 'Super Admin telah menghapus data akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('141e7d48-d09c-4be6-a077-b62c3017fad0', '2025-08-18', '15:55:56', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('465bbbaf-e0fc-4837-97c7-f6d7a3098854', '2025-08-18', '15:55:59', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('8c87d355-c990-43f7-8b6b-0cbfb9b60960', '2025-08-18', '15:56:03', 'Super Admin', 'hapus akun', 'Super Admin telah menghapus data akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('5c4a5669-732a-4f2b-b1ee-f1f931193f64', '2025-08-18', '15:56:55', 'Super Admin', 'hapus akun', 'Super Admin telah menghapus data akun ', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('75a292c5-07ba-4b1a-a6c4-c6f07bbc944f', '2025-08-18', '16:00:27', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('05e66082-1178-42b4-9873-faa3570e9a60', '2025-08-18', '16:00:32', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Dimas1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('c2a8d7f0-4b76-4a91-84df-92afa34c0d91', '2025-08-18', '16:00:36', 'Super Admin', 'hapus akun', 'Super Admin telah menghapus data akun Dimas1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('3fd0a811-30ed-4e06-a0e6-4c0e766532e6', '2025-08-18', '16:01:03', 'Super Admin', 'nonaktifkan akun', 'Super Admin telah menonaktifkan akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('4ae8ebbf-7842-4315-9a76-26615579b982', '2025-08-18', '16:01:06', 'Super Admin', 'hapus akun', 'Super Admin telah menghapus data akun Akun 2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('f2b85d3f-8f4f-4681-8a93-e1cef053ce8f', '2025-08-18', '16:41:21', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('6741b6bd-cbc2-41b7-9e73-66edbe06bb67', '2025-08-18', '16:41:38', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('13c505af-5c1b-48a8-9da3-ea690c3c7bd5', '2025-08-18', '16:41:56', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('57a668a0-dec7-4487-a82a-ffa591db19f0', '2025-08-18', '16:42:28', 'Super Admin', 'tambah data', 'Super Admin telah menambahkan akun baru bernama Akun4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36'),
('4c455a1d-241c-4bd1-ae02-11ee60c62993', '2025-08-19', '09:00:56', 'Super Admin', 'login', 'Berhasil login ke sistem', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36');

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
  `last_active` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disabled_at` timestamp NULL DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  `disabled_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `last_active`, `created_at`, `updated_at`, `disabled_at`, `created_by`, `updated_by`, `disabled_by`) VALUES
('aa8b865e-79b6-11f0-9d2c-01d42745e5ae', 'Super Admin', 'superadmin', '$2y$10$U8gZp/rV/6t2NTYx3fB6hOn8k.MQtik1s34pBITMQ7e.C1fOfbTdC', 'superadmin', NULL, '2025-08-15 09:02:34', '2025-08-15 09:02:34', NULL, NULL, NULL, NULL),
('ff7f98ff-1390-4baa-b1c6-1cab613ae1de', 'Akun', 'akun', '$2y$10$Wfxf5lk4uebKLzRx1Mhh7OCk9UCZD6VoMWraZjX6xj.2Ju0j.mjaS', 'superadmin', NULL, '2025-08-16 04:37:10', '2025-08-16 04:37:10', NULL, 'dimas', NULL, NULL),
('1d26ebdf-ef13-4dd7-89e9-26e4695043dd', 'Akun3', 'akun3', '$2y$10$QT8jW4JUspWzPbyNWLc4/erEL1VcGZ9/wLJWlnUseHM1BQLnZStly', 'admin', NULL, '2025-08-18 09:41:56', '2025-08-18 09:41:56', NULL, 'superadmin', NULL, NULL),
('d2a6ca79-42ea-448e-9257-7d102743b5c6', 'Akun2', 'akun2', '$2y$10$IuNP/QuoqumlcoNV9LX/iemdv.ECa0GAQdRby9FisMb.SuImAuRli', 'admin', NULL, '2025-08-18 09:41:38', '2025-08-18 09:41:38', NULL, 'superadmin', NULL, NULL),
('adbdf02c-bd91-4536-aec5-9fa43ef0738a', 'Akun1', 'akun1', '$2y$10$BloveEulSmBqNoGxcu9IaeJ2PuYx0UODOw/PVZBSyU/ORn7wsKcHS', 'admin', NULL, '2025-08-18 09:41:21', '2025-08-18 09:41:21', NULL, 'superadmin', NULL, NULL),
('e9c57767-90d1-469e-b210-c6abb3274977', 'Akun4', 'akun4', '$2y$10$dZCOxtdh7Zu/EwnzzTIke.n8zTxUHz79yJUdr1z.G/N.28ozn0NDS', 'admin', NULL, '2025-08-18 09:42:28', '2025-08-18 09:42:28', NULL, 'superadmin', NULL, NULL);

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
