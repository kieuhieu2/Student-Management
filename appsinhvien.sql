-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 15, 2024 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appsinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `id_lop` int(11) NOT NULL,
  `idMon` int(11) NOT NULL,
  `idGiaoVien` int(11) NOT NULL,
  `ngayBatDau` date NOT NULL,
  `ngayKetThuc` date NOT NULL,
  `xoa_lop` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id_lop`, `idMon`, `idGiaoVien`, `ngayBatDau`, `ngayKetThuc`, `xoa_lop`) VALUES
(1, 1, 2, '2024-05-16', '2024-05-24', 0),
(2, 6, 2, '2024-05-15', '2024-05-31', 0),
(3, 5, 5, '2024-05-15', '2024-05-24', 0),
(4, 3, 6, '2024-05-18', '2024-05-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lopdetail`
--

CREATE TABLE `lopdetail` (
  `id_lopdetail` int(11) NOT NULL,
  `idLop` int(11) NOT NULL,
  `idHocSinh` int(11) NOT NULL,
  `chuyenCan` float NOT NULL DEFAULT 0,
  `giuaKi` float NOT NULL DEFAULT 0,
  `cuoiKi` float NOT NULL DEFAULT 0,
  `diemTongKet` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lopdetail`
--

INSERT INTO `lopdetail` (`id_lopdetail`, `idLop`, `idHocSinh`, `chuyenCan`, `giuaKi`, `cuoiKi`, `diemTongKet`) VALUES
(1, 1, 1, 6.5, 3.5, 9, 6.85),
(2, 2, 1, 0, 0, 0, 7),
(3, 1, 4, 9, 4.5, 5, 5.65),
(4, 2, 4, 0, 0, 0, 8),
(5, 3, 4, 0, 0, 0, 0),
(6, 4, 4, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `id_mon` int(11) NOT NULL,
  `tenMon` varchar(255) NOT NULL,
  `xoa_mon` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`id_mon`, `tenMon`, `xoa_mon`) VALUES
(1, 'Toán cao cấp 1', 0),
(2, 'Toán cao cấp 2', 0),
(3, 'Anh Văn 1', 0),
(4, 'Anh Văn 2', 0),
(5, 'Anh Văn 3', 0),
(6, 'Lập trình PHP1', 0),
(7, 'Lập trình PHP2', 0),
(8, 'Lập trình PHP3', 0),
(9, 'Lập trình PHP4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nguoidung` int(11) NOT NULL,
  `tenND` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hoVT` varchar(255) NOT NULL,
  `ngaySinh` date NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `soDT` varchar(255) NOT NULL,
  `vaiTro` int(11) NOT NULL DEFAULT 1,
  `xoa_nguoidung` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id_nguoidung`, `tenND`, `matKhau`, `email`, `hoVT`, `ngaySinh`, `diaChi`, `soDT`, `vaiTro`, `xoa_nguoidung`) VALUES
(1, 'namnvd', '123', 'namnvd1@fpt.edu.vn', 'Nguyễn Vũ Đại Nam', '2002-11-10', 'Bình Thạnh', '0365245602', 1, 0),
(2, 'hieult', '123', 'hieult2@fpt.edu.vn', 'Lê Trung Hiếu', '2024-05-03', 'Tân Bình', '03666538788', 2, 0),
(3, 'thachnn', '123', 'thachnn3@fpt.edu.vn', 'Nguyễn Ngọc Thạch', '2024-05-09', 'Bình Tân', '0366538788', 3, 0),
(4, 'phuongnn', '123', 'phuongnn4@fpt.edu.vn', 'Nguyễn Ngọc Phương', '2018-05-16', 'Bình Thạnh', '0903295030', 1, 0),
(5, 'uyennp', '123', 'uyennp5@fpt.edu.vn', 'Nguyễn Phương Uyên', '2024-05-08', 'Bình Thạnh, Mỹ Phước', '0972366899', 2, 0),
(6, 'tiennv', '123', 'tiennv6@fpt.edu.vn', 'Nguyễn Vũ Tiến', '2024-05-14', 'Hải Phòng', '0365245602', 2, 0),
(8, 'thamnt', '123', 'thamnt7@fpt.edu.vn', 'Nguyễn Thị Thắm', '2024-05-01', 'Hải Phòng', '0366528788', 1, 0),
(9, 'hieuk', '123', 'hieuk@fpt.edu.vn', 'Hiếu Kiều', '2024-05-16', 'Sài gòn', '0972366899', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nameRole` varchar(255) NOT NULL,
  `xoa_role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nameRole`, `xoa_role`) VALUES
(1, 'Sinh viên', 0),
(2, 'Giáo Viên', 0),
(3, 'Admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id_lop`),
  ADD KEY `FK_idMon` (`idMon`),
  ADD KEY `FK_idGiaoVien` (`idGiaoVien`);

--
-- Indexes for table `lopdetail`
--
ALTER TABLE `lopdetail`
  ADD PRIMARY KEY (`id_lopdetail`),
  ADD KEY `FK_idLop` (`idLop`),
  ADD KEY `FK_idHocSinh` (`idHocSinh`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`id_mon`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD KEY `fk_id_vaiTro` (`vaiTro`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `id_lop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lopdetail`
--
ALTER TABLE `lopdetail`
  MODIFY `id_lopdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mon`
--
ALTER TABLE `mon`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_idGiaoVien` FOREIGN KEY (`idGiaoVien`) REFERENCES `nguoidung` (`id_nguoidung`),
  ADD CONSTRAINT `FK_idMon` FOREIGN KEY (`idMon`) REFERENCES `mon` (`id_mon`);

--
-- Constraints for table `lopdetail`
--
ALTER TABLE `lopdetail`
  ADD CONSTRAINT `FK_idHocSinh` FOREIGN KEY (`idHocSinh`) REFERENCES `nguoidung` (`id_nguoidung`),
  ADD CONSTRAINT `FK_idLop` FOREIGN KEY (`idLop`) REFERENCES `lop` (`id_lop`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `FK_vaiTro` FOREIGN KEY (`vaiTro`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
