-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2022 at 07:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS crm;
CREATE DATABASE crm;
USE crm;
-- --------------------------------------------------------

--
-- Table structure for table `canhan`
--

CREATE TABLE `canhan` (
  `MaCaNhan` int(12) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `MaLoaiGiayToTuyThan` int(2) DEFAULT NULL,
  `NgayCap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NoiCap` varchar(255) DEFAULT NULL,
  `LienKetAnhGiayTo` varchar(255) DEFAULT NULL,
  `MaNguoiDung` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaNguoiDung` int(12) NOT NULL,
  `MaSanPham` int(12) NOT NULL,
  `DiemDanhGia` decimal(5,5) DEFAULT NULL,
  `NoiDungDanhGia` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diachi`
--

CREATE TABLE `diachi` (
  `MaDiaChi` int(4) NOT NULL,
  `MaQuocGia` int(4) DEFAULT NULL,
  `MaBang-Tinh` int(6) DEFAULT NULL,
  `MaThanhPho` int(6) DEFAULT NULL,
  `MaQuan` int(6) DEFAULT NULL,
  `MaPhuong` int(6) DEFAULT NULL,
  `DiaChi` varchar(156) DEFAULT NULL,
  `DiaChiMacDinh` varchar(156) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diachicanhan`
--

CREATE TABLE `diachicanhan` (
  `MaDiaChi` int(4) NOT NULL,
  `MaCaNhan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diembanhang`
--

CREATE TABLE `diembanhang` (
  `MaDiemBanHang` int(10) NOT NULL,
  `TenDiemBanHang` int(10) DEFAULT NULL,
  `MaDiaChi` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donggoi`
--

CREATE TABLE `donggoi` (
  `MaVanDon` int(12) NOT NULL,
  `KhoiLuong` smallint(6) DEFAULT NULL,
  `TheTich` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donggoi-donhang`
--

CREATE TABLE `donggoi-donhang` (
  `MaVanDon` int(12) NOT NULL,
  `MaDonHang` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(12) NOT NULL,
  `MaSanPham` int(12) NOT NULL,
  `MaThuocTinh` int(10) NOT NULL,
  `ThoiGianMua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `MaDiaChi` int(4) DEFAULT NULL,
  `SoLuong` int(4) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `ChiecKhau` int(25) DEFAULT NULL,
  `MaNguoiDung` int(25) DEFAULT NULL,
  `MaNhanVien` int(12) DEFAULT NULL,
  `MaPhuongThuc` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giaohang`
--

CREATE TABLE `giaohang` (
  `MaVanDon` int(12) NOT NULL,
  `MaDiaChi` int(4) DEFAULT NULL,
  `MaDonViVanChuyen` int(12) DEFAULT NULL,
  `MaCuocVanChuyen` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanhsanpham`
--

CREATE TABLE `hinhanhsanpham` (
  `MaHinhAnh` int(5) NOT NULL,
  `MaSanPham` int(12) NOT NULL,
  `LienKetLuuTru` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(12) NOT NULL,
  `TenDangNhap` varchar(250) DEFAULT NULL,
  `MatKhau` varchar(250) DEFAULT NULL,
  `MaPhanVai` int(2) DEFAULT NULL,
  `SoDienThoai` int(11) DEFAULT NULL,
  `ThuDienTu` varchar(250) DEFAULT NULL,
  `DiemTichLuy` int(10) DEFAULT NULL,
  `LienKetAnhDaiDien` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `TenDangNhap`, `MatKhau`, `MaPhanVai`, `SoDienThoai`, `ThuDienTu`, `DiemTichLuy`, `LienKetAnhDaiDien`) VALUES
(1, 'user1', '123', 1, 1235689, 'thu dien tu', 0, 'duong dan den anh dai dien'),
(2, 'user2', '123', 1, 562137, 'thu dien tu', 0, 'duong dan den anh dai dien'),
(3, 'admin1', '123', 2, 12345, 'thu dien tu', 0, 'duong dan den anh dai dien'),
(4, 'leoahihi', 'aaaaAaaa@a1', 1, 123451, 'leo@gamil.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(12) NOT NULL,
  `MaCaNhan` int(12) DEFAULT NULL,
  `MaDiemBanHang` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhaphang`
--

CREATE TABLE `nhaphang` (
  `manhaphang` int(12) NOT NULL,
  `masanpham` int(12) DEFAULT NULL,
  `giamua` int(25) DEFAULT NULL,
  `machinhanh` int(3) DEFAULT NULL,
  `thoigianmua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nhacungcap` varchar(100) DEFAULT NULL,
  `trangthaidonhang` varchar(50) DEFAULT NULL,
  `phuongthucthanhtoan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhatkytonkho`
--

CREATE TABLE `nhatkytonkho` (
  `MaChungTuNhapXuat` int(12) NOT NULL,
  `MaSanPham` int(12) DEFAULT NULL,
  `MaThuocTinh` int(10) DEFAULT NULL,
  `SoLuong` int(12) DEFAULT NULL,
  `GiaBan` int(12) DEFAULT NULL,
  `ThoiGianGiaoDich` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `MaDiemBanHang` int(3) DEFAULT NULL,
  `MaDonHang` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhomsanpham`
--

CREATE TABLE `nhomsanpham` (
  `MaNhomSanPham` int(3) NOT NULL,
  `TenNhomSanPham` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phanvai`
--

CREATE TABLE `phanvai` (
  `MaPhanVai` int(2) NOT NULL,
  `MoTaPhanVai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phanvai`
--

INSERT INTO `phanvai` (`MaPhanVai`, `MoTaPhanVai`) VALUES
(1, 'nguoi dung'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `MaPhuongThuc` int(12) NOT NULL,
  `SoTaiKhoan-SoThe` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(12) NOT NULL,
  `TenSanPham` varchar(250) DEFAULT NULL,
  `MoTaNgan` varchar(500) DEFAULT NULL,
  `MoTaDai` varchar(5000) DEFAULT NULL,
  `MaNhomSanPham` int(3) DEFAULT NULL,
  `TuKhoa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoannganhang`
--

CREATE TABLE `taikhoannganhang` (
  `SoTaiKhoan` int(20) NOT NULL,
  `MaNguoiDung` int(12) NOT NULL,
  `MaNganHang` int(4) NOT NULL,
  `MaChiNhanh` int(4) DEFAULT NULL,
  `TenTaiKhoan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thetindung`
--

CREATE TABLE `thetindung` (
  `MaThe` int(16) NOT NULL,
  `TenNhaPhatHanh` varchar(250) DEFAULT NULL,
  `HanThe` varchar(10) DEFAULT NULL,
  `MaCVV` int(3) DEFAULT NULL,
  `MaNganHang` int(4) DEFAULT NULL,
  `MaNguoiDung` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thuoctinhsanpham`
--

CREATE TABLE `thuoctinhsanpham` (
  `MaThuocTinh` int(10) NOT NULL,
  `TenThuocTinh` varchar(50) DEFAULT NULL,
  `GiaTriThuocTinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tochuc`
--

CREATE TABLE `tochuc` (
  `MaToChuc` int(13) NOT NULL,
  `TenToChuc` varchar(250) DEFAULT NULL,
  `MaDiaChi` int(10) DEFAULT NULL,
  `LienKetAnhGiayTo` varchar(250) DEFAULT NULL,
  `MaNguoiDung` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tochuc-canhan`
--

CREATE TABLE `tochuc-canhan` (
  `MaCaNhan` int(12) NOT NULL,
  `MaToChuc` int(13) NOT NULL,
  `MaNguoiDungToChuc` int(13) NOT NULL,
  `MaNguoiDungCaNhan` int(13) NOT NULL,
  `VaiTro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `MaVoucher` int(5) NOT NULL,
  `TenVoucher` varchar(100) DEFAULT NULL,
  `GiaTriVoucher` int(10) DEFAULT NULL,
  `ThoiGianBatDau` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ThoiGianKetThuc` timestamp NULL DEFAULT NULL,
  `DieuKienApDung` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voucher-donhang`
--

CREATE TABLE `voucher-donhang` (
  `MaVoucher` int(5) NOT NULL,
  `MaDonHang` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canhan`
--
ALTER TABLE `canhan`
  ADD PRIMARY KEY (`MaCaNhan`),
  ADD KEY `FK_canhan2nguoidung` (`MaNguoiDung`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaNguoiDung`,`MaSanPham`),
  ADD KEY `FK_danhgia2sanpham` (`MaSanPham`);

--
-- Indexes for table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`MaDiaChi`);

--
-- Indexes for table `diachicanhan`
--
ALTER TABLE `diachicanhan`
  ADD PRIMARY KEY (`MaDiaChi`,`MaCaNhan`),
  ADD KEY `FK_diachicanhan2canhan` (`MaCaNhan`);

--
-- Indexes for table `diembanhang`
--
ALTER TABLE `diembanhang`
  ADD PRIMARY KEY (`MaDiemBanHang`),
  ADD KEY `FK_diembanhang2diachi` (`MaDiaChi`);

--
-- Indexes for table `donggoi`
--
ALTER TABLE `donggoi`
  ADD PRIMARY KEY (`MaVanDon`);

--
-- Indexes for table `donggoi-donhang`
--
ALTER TABLE `donggoi-donhang`
  ADD PRIMARY KEY (`MaVanDon`,`MaDonHang`),
  ADD KEY `FK_donggoidonhang2donhang` (`MaDonHang`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`,`MaSanPham`,`MaThuocTinh`),
  ADD KEY `FK_donhang2thuoctinhsanpham` (`MaThuocTinh`),
  ADD KEY `FK_donhang2diachi` (`MaDiaChi`),
  ADD KEY `FK_donhang2nhanvien` (`MaNhanVien`),
  ADD KEY `FK_donhang2nguoidung` (`MaNguoiDung`),
  ADD KEY `FK_donhang2phuongthucthanhtoan` (`MaPhuongThuc`);

--
-- Indexes for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`MaVanDon`),
  ADD KEY `FK_giaohang2diachi` (`MaDiaChi`);

--
-- Indexes for table `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  ADD PRIMARY KEY (`MaHinhAnh`,`MaSanPham`),
  ADD KEY `FK_hinhanhsanpham2sanpham` (`MaSanPham`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`),
  ADD KEY `FK_nguoidung2phanvai` (`MaPhanVai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `FK_nhanvien2canhan` (`MaCaNhan`),
  ADD KEY `FK_nhanvien2diembanhang` (`MaDiemBanHang`);

--
-- Indexes for table `nhaphang`
--
ALTER TABLE `nhaphang`
  ADD PRIMARY KEY (`manhaphang`);

--
-- Indexes for table `nhatkytonkho`
--
ALTER TABLE `nhatkytonkho`
  ADD PRIMARY KEY (`MaChungTuNhapXuat`),
  ADD KEY `FK_nhatkytonkho2sanpham` (`MaSanPham`),
  ADD KEY `FK_nhatkytonkho2thuoctinhsanpham` (`MaThuocTinh`),
  ADD KEY `FK_nhatkytonkho2diembanhang` (`MaDiemBanHang`),
  ADD KEY `FK_nhatkytonkho2donhang` (`MaDonHang`);

--
-- Indexes for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  ADD PRIMARY KEY (`MaNhomSanPham`);

--
-- Indexes for table `phanvai`
--
ALTER TABLE `phanvai`
  ADD PRIMARY KEY (`MaPhanVai`);

--
-- Indexes for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`MaPhuongThuc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `FK_sanpham2nhomsanpham` (`MaNhomSanPham`);

--
-- Indexes for table `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  ADD PRIMARY KEY (`SoTaiKhoan`,`MaNguoiDung`,`MaNganHang`),
  ADD KEY `FK_taikhoannganhang2nguoidung` (`MaNguoiDung`);

--
-- Indexes for table `thetindung`
--
ALTER TABLE `thetindung`
  ADD PRIMARY KEY (`MaThe`),
  ADD KEY `FK_thetindung2nguoidung` (`MaNguoiDung`);

--
-- Indexes for table `thuoctinhsanpham`
--
ALTER TABLE `thuoctinhsanpham`
  ADD PRIMARY KEY (`MaThuocTinh`);

--
-- Indexes for table `tochuc`
--
ALTER TABLE `tochuc`
  ADD PRIMARY KEY (`MaToChuc`),
  ADD KEY `FK_tochuc2diachi` (`MaDiaChi`),
  ADD KEY `FK_tochuc2nguoidung` (`MaNguoiDung`);

--
-- Indexes for table `tochuc-canhan`
--
ALTER TABLE `tochuc-canhan`
  ADD PRIMARY KEY (`MaCaNhan`,`MaToChuc`,`MaNguoiDungToChuc`,`MaNguoiDungCaNhan`),
  ADD KEY `FK_tochuccanhan2tochuc` (`MaToChuc`),
  ADD KEY `FK_tochuccanhan2nguoidung1` (`MaNguoiDungToChuc`),
  ADD KEY `FK_tochuccanhan2nguoidung2` (`MaNguoiDungCaNhan`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`MaVoucher`);

--
-- Indexes for table `voucher-donhang`
--
ALTER TABLE `voucher-donhang`
  ADD PRIMARY KEY (`MaVoucher`,`MaDonHang`),
  ADD KEY `FK_voucherdonhang2donhang` (`MaDonHang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canhan`
--
ALTER TABLE `canhan`
  MODIFY `MaCaNhan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diachi`
--
ALTER TABLE `diachi`
  MODIFY `MaDiaChi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diembanhang`
--
ALTER TABLE `diembanhang`
  MODIFY `MaDiemBanHang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donggoi`
--
ALTER TABLE `donggoi`
  MODIFY `MaVanDon` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `giaohang`
--
ALTER TABLE `giaohang`
  MODIFY `MaVanDon` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhaphang`
--
ALTER TABLE `nhaphang`
  MODIFY `manhaphang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhatkytonkho`
--
ALTER TABLE `nhatkytonkho`
  MODIFY `MaChungTuNhapXuat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  MODIFY `MaNhomSanPham` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phanvai`
--
ALTER TABLE `phanvai`
  MODIFY `MaPhanVai` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `MaPhuongThuc` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thuoctinhsanpham`
--
ALTER TABLE `thuoctinhsanpham`
  MODIFY `MaThuocTinh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tochuc`
--
ALTER TABLE `tochuc`
  MODIFY `MaToChuc` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `MaVoucher` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canhan`
--
ALTER TABLE `canhan`
  ADD CONSTRAINT `FK_canhan2nguoidung` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `FK_danhgia2nguoidung` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `FK_danhgia2sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `diachicanhan`
--
ALTER TABLE `diachicanhan`
  ADD CONSTRAINT `FK_diachicanhan2canhan` FOREIGN KEY (`MaCaNhan`) REFERENCES `canhan` (`MaCaNhan`),
  ADD CONSTRAINT `FK_diachicanhan2diachi` FOREIGN KEY (`MaDiaChi`) REFERENCES `diachi` (`MaDiaChi`);

--
-- Constraints for table `diembanhang`
--
ALTER TABLE `diembanhang`
  ADD CONSTRAINT `FK_diembanhang2diachi` FOREIGN KEY (`MaDiaChi`) REFERENCES `diachi` (`MaDiaChi`);

--
-- Constraints for table `donggoi`
--
ALTER TABLE `donggoi`
  ADD CONSTRAINT `FK_donggoi2giaohang` FOREIGN KEY (`MaVanDon`) REFERENCES `giaohang` (`MaVanDon`);

--
-- Constraints for table `donggoi-donhang`
--
ALTER TABLE `donggoi-donhang`
  ADD CONSTRAINT `FK_donggoidonhang2donggoi` FOREIGN KEY (`MaVanDon`) REFERENCES `donggoi` (`MaVanDon`),
  ADD CONSTRAINT `FK_donggoidonhang2donhang` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_donhang2diachi` FOREIGN KEY (`MaDiaChi`) REFERENCES `diachi` (`MaDiaChi`),
  ADD CONSTRAINT `FK_donhang2nguoidung` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `FK_donhang2nhanvien` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`),
  ADD CONSTRAINT `FK_donhang2phuongthucthanhtoan` FOREIGN KEY (`MaPhuongThuc`) REFERENCES `phuongthucthanhtoan` (`MaPhuongThuc`),
  ADD CONSTRAINT `FK_donhang2thuoctinhsanpham` FOREIGN KEY (`MaThuocTinh`) REFERENCES `thuoctinhsanpham` (`MaThuocTinh`);

--
-- Constraints for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `FK_giaohang2diachi` FOREIGN KEY (`MaDiaChi`) REFERENCES `diachi` (`MaDiaChi`);

--
-- Constraints for table `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  ADD CONSTRAINT `FK_hinhanhsanpham2sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `FK_nguoidung2phanvai` FOREIGN KEY (`MaPhanVai`) REFERENCES `phanvai` (`MaPhanVai`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_nhanvien2canhan` FOREIGN KEY (`MaCaNhan`) REFERENCES `canhan` (`MaCaNhan`),
  ADD CONSTRAINT `FK_nhanvien2diembanhang` FOREIGN KEY (`MaDiemBanHang`) REFERENCES `diembanhang` (`MaDiemBanHang`);

--
-- Constraints for table `nhatkytonkho`
--
ALTER TABLE `nhatkytonkho`
  ADD CONSTRAINT `FK_nhatkytonkho2diembanhang` FOREIGN KEY (`MaDiemBanHang`) REFERENCES `diembanhang` (`MaDiemBanHang`),
  ADD CONSTRAINT `FK_nhatkytonkho2donhang` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `FK_nhatkytonkho2sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `FK_nhatkytonkho2thuoctinhsanpham` FOREIGN KEY (`MaThuocTinh`) REFERENCES `thuoctinhsanpham` (`MaThuocTinh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_sanpham2nhomsanpham` FOREIGN KEY (`MaNhomSanPham`) REFERENCES `nhomsanpham` (`MaNhomSanPham`);

--
-- Constraints for table `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  ADD CONSTRAINT `FK_taikhoannganhang2nguoidung` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`);

--
-- Constraints for table `thetindung`
--
ALTER TABLE `thetindung`
  ADD CONSTRAINT `FK_thetindung2nguoidung` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`);

--
-- Constraints for table `tochuc`
--
ALTER TABLE `tochuc`
  ADD CONSTRAINT `FK_tochuc2diachi` FOREIGN KEY (`MaDiaChi`) REFERENCES `diachi` (`MaDiaChi`),
  ADD CONSTRAINT `FK_tochuc2nguoidung` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`);

--
-- Constraints for table `tochuc-canhan`
--
ALTER TABLE `tochuc-canhan`
  ADD CONSTRAINT `FK_tochuccanhan2canhan1` FOREIGN KEY (`MaCaNhan`) REFERENCES `canhan` (`MaCaNhan`),
  ADD CONSTRAINT `FK_tochuccanhan2nguoidung1` FOREIGN KEY (`MaNguoiDungToChuc`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `FK_tochuccanhan2nguoidung2` FOREIGN KEY (`MaNguoiDungCaNhan`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `FK_tochuccanhan2tochuc` FOREIGN KEY (`MaToChuc`) REFERENCES `tochuc` (`MaToChuc`);

--
-- Constraints for table `voucher-donhang`
--
ALTER TABLE `voucher-donhang`
  ADD CONSTRAINT `FK_voucherdonhang2donhang` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `FK_voucherdonhang2voucher` FOREIGN KEY (`MaVoucher`) REFERENCES `voucher` (`MaVoucher`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;