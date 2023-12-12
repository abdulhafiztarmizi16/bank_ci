-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 01:43 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `no` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jb_harga` varchar(255) NOT NULL,
  `jb_kepemilikan` varchar(255) NOT NULL,
  `jb_fungsi` varchar(255) NOT NULL,
  `jml_pendapatan` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`no`, `nama`, `jb_harga`, `jb_kepemilikan`, `jb_fungsi`, `jml_pendapatan`, `latitude`, `longitude`, `link_foto`) VALUES
(1, 'Bank BRI jl.umban sari', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '121,8 triliun IDR', '0.569016576', '101.4281108', 'https://drive.google.com/uc?export=view&id=1lSGryHErmDF4J8JuiaQOPrIkSPJZqp1V'),
(2, 'Bank BNI jl.yos sudarso', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '36,6 triliun IDR', '0.559154677', '101.4330138', 'https://drive.google.com/uc?export=view&id=1q93pMbNEcaBg8c4Yh7_QjNZaME2GfyJh'),
(3, 'Bank BSI jl.sekolah', 'Bank Syariah', 'Bank Milik Pemerintah', 'Bank Umum', ' 2,25 triliun IDR', '0.559617324', '101.4348085', 'https://drive.google.com/uc?export=view&id=1o7S5TyAPm9MaJZckXzfOVesWIdHb5HeO'),
(4, 'Bank BRI jl.sekolah', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '121,8 triliun IDR', '0.560679756', '101.4411959', 'https://drive.google.com/uc?export=view&id=16muNhU6bKWRtTPJ-549pmbtskSZ2LDlj'),
(5, 'Bank BNI jl.riau', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '36,6 triliun IDR', '0.535976495', '101.4316756', 'https://drive.google.com/uc?export=view&id=1z8nqu9Q_sNFKJmqYyLAEP0zuvj5smM8M'),
(6, 'Bank BTN jl.sekolah', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '17,14 triliun IDR', '0.560754766', '101.44235', 'https://drive.google.com/uc?export=view&id=1cJV9fOrmamuoLaY98sJkVQDnk-0brOeW'),
(7, 'Bank RIAU KEPRI jl.sekolah', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum', '2.412 triliun IDR', '0.560711853', '101.4423822', 'https://drive.google.com/uc?export=view&id=18C6BvUMxLoR1oMT75OKg8_my-qsBVY_l'),
(8, 'Bank OCBC NISP jl.riau', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', '10,14 miliar SGD', '0.535404568', '101.4310465', 'https://drive.google.com/uc?export=view&id=1Pn4JB4vL19jTVuNEj-TmEEo6CyHWb1ue'),
(9, 'Bank Sinarmas jl.riau', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', ' 1,744 triliun  IDR', '0.535738233', '101.4330615', 'https://drive.google.com/uc?export=view&id=1UyeZrvBIM_5p8FqTkberfPnBSt9JyPnh'),
(10, 'Bank OK indonesia jl.ir.h.juanda', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', '74 Miliar IDR', '-6.164779383', '106.8280098', 'https://drive.google.com/uc?export=view&id=1LZbqXM2Dat0r-XYVDYBqkLUYFR7zbjPp'),
(11, 'Bank DBS jl.ir.h.juanda', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', '14,5 miliar SGD', '-6.165155484', '106.8257741', 'https://drive.google.com/uc?export=view&id=1y0WmKplF9_PcN_1Y-rxxyyqiY_JOoLr5'),
(12, 'Bank SBI indonesia jl.pasar baru', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', ' Rs 147.843,92 crore', '-6.161127671', '106.8364972', 'https://drive.google.com/uc?export=view&id=18mD3vviJI4od0S8e_nK4y40tyZMK2aQt'),
(13, 'Bank BTPN jl.pecenongan', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', '17,14 triliun IDR', '-6.158611166', '106.8279856', 'https://drive.google.com/uc?export=view&id=1CcwyPbCo6Rg474V2RYZnpPbSSizTONht'),
(14, 'Bank indonesia jl.m.h.thamrin', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Sentral', '87 triliun IDR', '-6.17757676', '106.8209419', 'https://drive.google.com/uc?export=view&id=1LalqtLtPSXK3UEqle9skXbWARzvROaid'),
(15, 'Bank Indonesia kebon sirih', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Sentral', '87 triliun IDR', '-6.180069413', '106.8199469', 'https://drive.google.com/uc?export=view&id=1aJWSL8jtP0abXWMcl7qQHgf9CVyRnliG'),
(16, 'Bank Bangkok', 'Bank Konvensional', 'Bank Asing', 'Bank Umum', '154,3 miliar THB', '-6.182344629', '106.8231705', 'https://drive.google.com/uc?export=view&id=1D3XdmwxcJ3YNyM1u53YXCpE3Emk0gb5N'),
(17, 'Bank Capital sarinah', 'Bank Konvensional', 'Bank Swasta Milik Nasional', 'Bank Umum', ' 367 miliar IDR', '-6.184989108', '106.8232819', 'https://drive.google.com/uc?export=view&id=1IhjfkD1AhEvZACGnrahYnYFUm_wlLeFX'),
(18, 'Bank Aceh jl.setia budi', 'Bank Syariah', 'Bank Pembangunan Daerah', 'Bank Umum', ' 2.012 triliun IDR', '3.570032459', '98.63901912', 'https://drive.google.com/uc?export=view&id=1eUMgarvatvrQgxvrOO8xqdvda-14nf22'),
(19, 'Bank Mandiri jl.setia budi', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '61,25 triliun IDR', '3.587798143', '98.6419649', 'https://drive.google.com/uc?export=view&id=1s1fQJCib-R-jzbLVD_jXAex6mq55FsGt'),
(20, 'Bank Sumut jl.iskandar muda', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum', ' 19,4 miliar IDR', '3.582191145', '98.66081643', 'https://drive.google.com/uc?export=view&id=12P4-KVFSpL9HymoHNjFK3gKYGbrL4W6Z'),
(21, 'Bank Maspion jl.nibung', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum', '523,2 miliar IDR', '3.588398305', '98.66461339', 'https://drive.google.com/uc?export=view&id=14Rk3FD0SRaaN-Tn2Gu6vuXFQdYhLK9d7'),
(22, 'Bank HSBC jl.gatot', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum', '14,3 triliun IDR', '3.594212791', '98.66850785', 'https://drive.google.com/uc?export=view&id=1XqTWRebrBhyh4Wiwx-hvAoQvQAdS9DSW'),
(23, 'Bank Mandiri jl.s.parman', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '61,25 triliun IDR', '3.588779987', '98.66723582', 'https://drive.google.com/uc?export=view&id=106oXiF3gVNfQrinvTqGvgG6TGaUrFziV'),
(24, 'Bank RIAU KEPRI simpang empat', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '2.412 triliun IDR', '0.516648011', '101.4478165', 'https://drive.google.com/uc?export=view&id=1TXRHNOGrNKMRsR3eWCIfn0xTdCX5buYb'),
(25, 'Bank Indonesia jl.jend sudirman', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Sentral', '87 triliun IDR', '0.515949144', '101.4466037', 'https://drive.google.com/uc?export=view&id=1ugjI8-Y9iLw037l8ajk2kbG3Fnxn-lIT'),
(26, 'Bank Mandiri jl.tuanku tambusai', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '61,25 triliun IDR', '0.507606319', '101.4392543', 'https://drive.google.com/uc?export=view&id=1mzj5rlaRLX2yzP1ddeZ0x9-0yk6UpTO8'),
(27, 'Bank Artha jl.riau', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum', '33,47 miliar IDR', '0.535738884', '101.4252903', 'https://drive.google.com/uc?export=view&id=106oXiF3gVNfQrinvTqGvgG6TGaUrFziV'),
(28, 'Bank Riau KEPRI jl.riau', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '2.412 triliun IDR', '0.536213975', '101.4315252', 'https://drive.google.com/uc?export=view&id=1_3FnI1TV7Q_fdD5-cCZagmXa5Pc2PAaQ'),
(29, 'Bank Banten jl.T.tambusai', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '476,9 miliar IDR', '0.503799185', '101.4236526', 'https://drive.google.com/uc?export=view&id=1j51qFYJVHHu9xK3Tc3HvAs-M34x82JJo'),
(30, 'Bank BTPN jl.riau', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum ', '1,31 triliun IDR', '0.536608339', '101.4244361', 'https://drive.google.com/uc?export=view&id=1sm7H_O6sAJ6FwLoEmXZrpq_kJ4jckn_I'),
(31, 'Bank Harta Mandiri jl.ir.H.juanda', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Perkreditan Rakyat', '1,31 triliun IDR', '0.537646319', '101.4472363', 'https://drive.google.com/uc?export=view&id=1D4ZnM9N9lI6Ctydu6mToaQOW62po0n-y'),
(32, 'Bank Danamon jl.Tuanku tambusai', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum ', '14,58 triliun IDR', '0.505519494', '101.4305004', 'https://drive.google.com/uc?export=view&id=1xpu2WAPv8znaYh0J4ACD6R9FUbKCZnmq'),
(33, 'Bank BSI jl. tuanku tambusai', 'Bank Syariah', 'Bank Milik Pemerintah', 'Bank Umum ', ' 2,25 triliun IDR', '0.504065165', '101.4258664', 'https://drive.google.com/uc?export=view&id=1sJIE-Jm9ReHF2wBjUsPS7A54Lz1AQsx5'),
(34, 'Bank Mandiri jl.tuanku tambusai', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '61,25 triliun IDR', '0.502495184', '101.4210049', 'https://drive.google.com/uc?export=view&id=1w1fkkuqlnNmRQHgokpDBV96VanNOYoKR'),
(35, 'Bank CIMB Niaga jl.sudirman', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum', '25,3 triliun IDR', '0.531182278', '101.4479051', 'https://drive.google.com/uc?export=view&id=10NZTP2CdZXOlIOMVXP_FTehs1E2EDs68'),
(36, 'Bank RIAU KEPRI jl.jend. ahmad yani', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '2.412 triliun IDR', '0.525925962', '101.4423425', 'https://drive.google.com/uc?export=view&id=12plAJGetUPENRlZITk8sCWn-s0Xt6u1s'),
(37, 'Bank Bukopin jadirejo,sukajadi', 'Bank Konvensional', 'Bank Milik Campuran', 'Bank Umum ', '1,34 triliun IDR', '0.512478163', '101.4480275', 'https://drive.google.com/uc?export=view&id=18MuywI3ZZvNWWyqBnxSp172uJhxp9nCw'),
(38, 'Bank BTN jl.jend.sudirman', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '17,14 triliun IDR', '0.512728792', '101.4485504', 'https://drive.google.com/uc?export=view&id=11qSxIwCtx0-EElALuJyg_h_hJGpk4lXH'),
(39, 'Bank BTN payung sekaki', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '17,14 triliun IDR', '0.519185098', '101.4261182', 'https://drive.google.com/uc?export=view&id=1BcQMg9JFPZitxqwcdl9fa6zTb9pQdzsm'),
(40, 'Bank Jabar jl jend. sudirman', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '1.69 Triliun IDR', '-6.203827121', '106.8211314', 'https://drive.google.com/uc?export=view&id=1Oz6cZ8yNG2ejGlwVAuB5Ptfm8Eipr_cm'),
(41, 'Bank Dki wisma nugra', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '401,23 miliar IDR', '-6.208115833', '106.8214084', 'https://drive.google.com/uc?export=view&id=1bQ1pVg1NnbTdCNtIZrfoZ6g-9osSyaiv'),
(42, 'Bank Mandiri wisma indosemen', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '61,25 triliun IDR', '-6.204484455', '106.8226671', 'https://drive.google.com/uc?export=view&id=1WrIzaWbJi239IgMcW7zqLegPCE63y6Hh'),
(43, 'Bank Artha jl.suryopranoto', 'Bank Konvensional', 'Bank Swasta Nasional', 'Bank Umum ', '33,47 miliar IDR', '-6.164168731', '106.8182462', 'https://drive.google.com/uc?export=view&id=1miuHPgiTO6s65H9rLNpF-vqZvdB9VDxT'),
(44, 'Bank Nagari pagambiran', 'Bank Konvensional', 'Bank Pembangunan Daerah', 'Bank Umum ', '318 miliar IDR', '-0.978606034', '100.3949786', 'https://drive.google.com/uc?export=view&id=1iqLlNxx1763g9vMNJPkxW57kTJi7Gnoa'),
(45, 'Bank Mandiri Mitra Usaha KCP Padang Luar', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '61,25 triliun IDR', '-0.339132788', '100.3826515', 'https://drive.google.com/uc?export=view&id=1N8Mv2h0-O_DwVFiqnk0pVY7ZtFPAYuRT'),
(46, 'Bank mandiri jl ps.baru', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum ', '61,25 triliun IDR', '-0.947234165', '100.3627464', 'https://drive.google.com/uc?export=view&id=1CnMQodMfQCaN5O8EwpbtZsFJxSQArhXY'),
(47, 'Bank Indonesia jl.jend sudirman', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Sentral', '87 triliun IDR', '-0.942754209', '100.3623247', 'https://drive.google.com/uc?export=view&id=1Y9UWT2nH4L0rpwhLf69w6LJ9KdGlFjsT'),
(48, 'Bank Bukopin jl.jend.sudirman', 'Bank Konvensional', 'Bank Milik Campuran', 'Bank Umum ', '1,34 triliun IDR', '-0.946455463', '100.3630316', 'https://drive.google.com/uc?export=view&id=1vGTshElO2CMQNuSzGVpjXDDTaxHmRJSa'),
(49, 'Bank Nagari Cabang Pembantu Pasar Bawah', 'Bank Konvensional', 'Bank Milik pemerintah daerah', 'Bank Umum', '318 miliar IDR', '-0.301447864', '100.3727228', 'https://drive.google.com/uc?export=view&id=1SenuL0d9kX5b2hnoi4BnkKuxH1CqCnWQ'),
(50, 'Bank BRI padang panjang', 'Bank Konvensional', 'Bank Milik Pemerintah', 'Bank Umum', '121,8 triliun IDR', '-0.463824714', '100.3876085', 'https://drive.google.com/uc?export=view&id=1A88axvBa4rJKkX8Gb3ENqqxeTtUKTWuc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
