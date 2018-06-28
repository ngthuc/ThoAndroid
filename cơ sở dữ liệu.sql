-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2018 lúc 02:13 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlyc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `details`
--

CREATE TABLE `details` (
  `RQ_ID` int(11) NOT NULL,
  `PP_ID` int(11) NOT NULL,
  `DT_VALUE` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `details`
--

INSERT INTO `details` (`RQ_ID`, `PP_ID`, `DT_VALUE`) VALUES
(1530071196, 8, 'fadf'),
(1530071196, 9, 'asdfasd'),
(1530071196, 10, 'fasdfasd'),
(1530071196, 11, 'fasdfasdf'),
(1530071762, 8, 'fasdfasdfasd'),
(1530071762, 9, 'fasdfasd'),
(1530071762, 10, 'fasdfasdf'),
(1530071762, 11, 'sdfasdfasdf'),
(1530071800, 8, 'adfasdfasdf1341234123'),
(1530071800, 9, '412341234'),
(1530071800, 10, '1234123413412'),
(1530071800, 11, '1234'),
(1530175628, 8, '1'),
(1530175628, 9, '1'),
(1530175628, 10, '1'),
(1530175628, 11, '1'),
(1530176109, 1, '1'),
(1530176109, 2, '1'),
(1530176109, 3, '1'),
(1530176109, 4, '1'),
(1530176109, 5, '1'),
(1530176109, 6, '1'),
(1530176109, 7, '1'),
(1530176109, 37, '1'),
(1530176146, 1, '1'),
(1530176146, 2, '1'),
(1530176146, 3, '1'),
(1530176146, 4, '1'),
(1530176146, 5, '1'),
(1530176146, 6, '1'),
(1530176146, 7, '1'),
(1530176146, 37, '1'),
(1530176168, 1, 'a'),
(1530176168, 2, 'aa'),
(1530176168, 3, 'a'),
(1530176168, 4, 'a'),
(1530176168, 5, 'asda'),
(1530176168, 6, 'a'),
(1530176168, 7, 'asda'),
(1530176168, 37, 'a'),
(1530176296, 8, 'r'),
(1530176296, 9, 'r'),
(1530176296, 10, 'r'),
(1530176296, 11, 'r');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `properties`
--

CREATE TABLE `properties` (
  `PP_ID` int(11) NOT NULL,
  `RT_ID` int(11) NOT NULL,
  `PP_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PP_MEASURE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `properties`
--

INSERT INTO `properties` (`PP_ID`, `RT_ID`, `PP_NAME`, `PP_MEASURE`) VALUES
(1, 1, 'Mã số cán bộ', NULL),
(2, 1, 'Họ và Tên:', NULL),
(3, 1, 'số điện thoại', '333'),
(4, 1, 'Email', NULL),
(5, 1, 'Giới Tính', NULL),
(6, 1, 'NGày sinh', NULL),
(7, 1, 'Địa chỉ', NULL),
(8, 2, 'Nơi xảy ra sự cố', NULL),
(9, 2, 'Lỗi', NULL),
(10, 2, 'Tầng', NULL),
(11, 2, 'Số lượng', 'Cái'),
(12, 3, 'Mã học phần', NULL),
(13, 3, 'Tên học phần', NULL),
(14, 3, 'Học kỳ', NULL),
(15, 3, 'Năm Học', NULL),
(16, 3, 'Lý do', NULL),
(17, 4, 'Ngày dự kiến', NULL),
(18, 4, 'Thời gian băt đầu', NULL),
(19, 4, 'Thời gian kết thúc', NULL),
(20, 4, 'Số lượng khách mời', 'Người'),
(21, 4, 'Tên cuộc họp', NULL),
(22, 4, 'Các yêu cầu khác', NULL),
(23, 5, 'Mã môn học', NULL),
(24, 5, 'Tên môn học', NULL),
(25, 5, 'Học Kỳ', NULL),
(26, 5, 'Năm học', NULL),
(27, 5, 'Lý do', NULL),
(28, 6, 'Mã số cán bộ/ MSSV', NULL),
(29, 6, 'Họ Và Tên', NULL),
(30, 6, 'Địa chỉ email (Trường Cấp)', NULL),
(31, 6, 'Số điện thoại ', NULL),
(32, 6, 'Số tiền đã được vay', 'Đồng'),
(33, 7, 'Mã số cán bộ/MSSV', NULL),
(34, 7, 'Họ Và tên', NULL),
(35, 7, 'Chứng chỉ ngoại ngữ', NULL),
(36, 7, 'điểm tích lũy', NULL),
(37, 1, 'dfsdf', 'sdfsdfs');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requirement`
--

CREATE TABLE `requirement` (
  `RQ_ID` int(11) NOT NULL,
  `RT_ID` int(11) NOT NULL,
  `US_ID` int(11) NOT NULL,
  `US_SERVANT` int(11) DEFAULT NULL,
  `RQ_TITTLE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ST_ID` int(11) NOT NULL,
  `RQ_NOTE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RQ_REPLY` text COLLATE utf8_unicode_ci,
  `RQ_DATECREATE` date DEFAULT NULL,
  `RQ_DATEUPDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `requirement`
--

INSERT INTO `requirement` (`RQ_ID`, `RT_ID`, `US_ID`, `US_SERVANT`, `RQ_TITTLE`, `ST_ID`, `RQ_NOTE`, `RQ_REPLY`, `RQ_DATECREATE`, `RQ_DATEUPDATE`) VALUES
(16401, 1, 4, 7, 'làm mới tài khoản', 3, 'đã giải quyết xong', NULL, '2018-06-21', '2018-06-21'),
(1530071196, 2, 2, 2, 'dfasd', 2, 'fasdf', 'fasdfasdfadsfasdf', '2018-06-21', '2018-06-21'),
(1530071762, 2, 2, 2, 'dfasd', 1, 'fasdfasdf', NULL, '2018-06-27', '2018-06-27'),
(1530071800, 2, 2, 2, 'dfasdfasdfasdfasdfasf', 1, 'asdfasdfasfasdfasdfasdf', NULL, '2018-06-27', '2018-06-27'),
(1530175628, 2, 2, 2, '1', 1, '1', NULL, '2018-06-28', '2018-06-28'),
(1530176109, 1, 2, 2, '1', 1, NULL, NULL, '2018-06-28', '2018-06-28'),
(1530176146, 1, 2, 2, '1', 1, NULL, NULL, '2018-06-28', '2018-06-28'),
(1530176168, 1, 2, 2, '1', 1, '1', NULL, '2018-06-28', '2018-06-28'),
(1530176296, 2, 2, 2, '1', 1, '1', NULL, '2018-06-28', '2018-06-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requirement_type`
--

CREATE TABLE `requirement_type` (
  `RT_ID` int(11) NOT NULL,
  `RT_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RT_DESCRIPTION` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `requirement_type`
--

INSERT INTO `requirement_type` (`RT_ID`, `RT_NAME`, `RT_DESCRIPTION`) VALUES
(1, 'Mở tài khoản mới', NULL),
(2, 'Sửa chữa máy tính', NULL),
(3, 'Mở đăng ký thêm học phần', NULL),
(4, 'Tổ chức cuộc họp', NULL),
(5, 'Xin điểm miễn', NULL),
(6, 'Đăng ký Vay vốn', NULL),
(7, 'Đăng ký đi du học\r\n', NULL),
(8, 'A', 'V');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `RO_ID` int(11) NOT NULL,
  `RO_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RO_DESCRIPTION` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`RO_ID`, `RO_NAME`, `RO_DESCRIPTION`) VALUES
(1, 'Super User', 'Người quản trị tối cao'),
(2, 'Servant', 'Người giải quyết yêu cầu'),
(3, 'Client', 'Người dùng khách gửi yêu cầu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `ST_ID` int(11) NOT NULL,
  `ST_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`ST_ID`, `ST_NAME`) VALUES
(1, 'Đang chờ'),
(2, 'Đang giải quyết'),
(3, 'Đã giải quyết'),
(4, 'Từ chối');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `units`
--

CREATE TABLE `units` (
  `UN_ID` int(11) NOT NULL,
  `UN_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UN_DESCRIPTION` text COLLATE utf8_unicode_ci,
  `UN_DATECREATE` date DEFAULT NULL,
  `UN_DATEUPDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `units`
--

INSERT INTO `units` (`UN_ID`, `UN_NAME`, `UN_DESCRIPTION`, `UN_DATECREATE`, `UN_DATEUPDATE`) VALUES
(1, 'Phòng IT - TTHL Đại Học Cần Thơ', 'Giải quyết thắc mắc về phần mềm', '2018-05-22', '2018-05-22'),
(2, 'Phòng Đào Tạo\r\n', 'Quản lý chất lượng đào tạo, giải đáp các thắc mắc về vấn đề học vụ', '2018-05-11', '2018-05-11'),
(3, 'Phòng Công Tác Sinh Viên', 'Nắm bắt tình hình chính trị tư tưởn', '2018-05-12', '2018-05-12'),
(4, 'Sinh viên', 'Đi học', '2018-05-19', '2018-05-19'),
(1528860569, 'Phòng ban test', 'Phòng ban test', NULL, NULL),
(1528971814, 'iiiiiiiiii', 'iiiiiiii', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `unit_requirementtype`
--

CREATE TABLE `unit_requirementtype` (
  `UN_ID` int(11) NOT NULL,
  `RT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `unit_requirementtype`
--

INSERT INTO `unit_requirementtype` (`UN_ID`, `RT_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 7),
(2, 1),
(2, 3),
(2, 5),
(3, 1),
(3, 6),
(3, 7),
(4, 1),
(1528860569, 2),
(1528971814, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UN_ID` int(11) NOT NULL,
  `RO_ID` int(11) NOT NULL,
  `UC_FULLNAME` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UC_PHONE` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UC_EMAIL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `US_GENDER` varchar(3) CHARACTER SET utf8 NOT NULL,
  `US_BIRTHDAY` date NOT NULL,
  `US_ADDRESS` text COLLATE utf8_unicode_ci,
  `UC_DATECREATE` date DEFAULT NULL,
  `UC_DATEUPDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `remember_token`, `UN_ID`, `RO_ID`, `UC_FULLNAME`, `UC_PHONE`, `UC_EMAIL`, `US_GENDER`, `US_BIRTHDAY`, `US_ADDRESS`, `UC_DATECREATE`, `UC_DATEUPDATE`) VALUES
(1, 'B1411326', '$2y$10$vTvHTcN1135YSbtvNVw4I.Rq8mdqJrLtx7GK0MAuNNflawOJNElIm', 'fHFxOk4z92lXNx4KM5MaRo7vZQRFNJmiOD1U54Y7ipdMCrBbt5DiGKNl03ro', 1, 1, 'Nguyễn Hoàng Huy', '0939387671', 'huyb1411326@gmail.com', 'Nam', '1996-08-04', '53/16 trần phú, phường cái khế, quận ninh kiều, tpct', '2018-05-22', '2018-05-31'),
(2, 'vana', '$2y$10$eE.KzHwig1pWGIlzrJV/8u4qZWmT8v2MHZTqPojQqmXfGOuae7oVW', '7dApaDYyvN4Qml67sCML7Wrq39HOuFzZpxyiQXFtUJYLIB6Vk0q4fc8SHfHW', 1, 1, 'Huỳnh Hoàng Thơ', '0985244444', 'thob1400729@gmail.com', 'Nam', '1996-05-19', 'Mang thít vĩnh long', '2018-05-22', '2018-05-31'),
(3, 'B1400869', '$2y$10$eE.KzHwig1pWGIlzrJV/8u4qZWmT8v2MHZTqPojQqmXfGOuae7oVW', 'LpwiYAAT7334CmEx7LedHktvfc4rspwS9Fi9QjccKfr8aENrhF0tziSWzZY5', 1, 1, 'Trần Văn Cường', '0983194444', 'cuongb1400869@gmail.com', 'Nam', '1996-06-19', 'Vũng liêm, vĩnh long', '2018-05-06', '2018-05-25'),
(4, 'an1234', '$2y$10$eE.KzHwig1pWGIlzrJV/8u4qZWmT8v2MHZTqPojQqmXfGOuae7oVW', 'qTRDtFA9DLClv0CEqJdGAkEG62L21GDZkJfQzNMmCUTb1vHCHL5nOmzlgcaI', 1, 3, 'Phạm gia an', '0975160000', 'annguyen@gmail.com', 'Nam', '1990-08-04', 'cái bè, tiền giang', '2018-05-14', '2018-06-21'),
(5, 'nam1234', '$2y$10$pBOnJ0WaVstp1Z82YYhjKuACxclfXL2UTdE0VQdLKaChp3n5HiGVS', 'HR7PDeLPAtbnT1Abb0nFsWJa5vjBWNylE9fGVrzwwL9hC2kHwe6GRAfoEiCQ', 1, 2, 'Trần Trọng Nam', '0988261333', 'trongnam@gmail.com', 'Nữ', '1992-01-01', 'mỏ cày bắc, bến tre', '2018-05-11', '2018-06-21'),
(6, 'ngoc1234', '$2y$10$bAmmt11aisN89bL/i8uVc.FwcvCPcl59EvP7cMBkV7HwG91YAGxbi', 'HR7PDeLPAtbnT1Abb0nFsWJa5vjBWNylE9fGVrzwwL9hC2kHwe6GRAfoEiCQ', 1, 1, 'Liêu Bích Ngọc', '0984511888', 'bichngoc@gmail.com', 'Nữ', '1993-07-03', 'Ô môn, cần thơ', '2018-05-02', '2018-05-31'),
(7, 'khiem1234', '$2y$10$4neLPlwrvhCiUGhCgh.nVuszOq.q42gmqvkC6Mft/hP3Yd0.S0EM6', '0wcOHYCBLIwFWNGS9sXPyxrv0ac3AJ7ncKLmh9xLC2Q9qDRxhCtx0r6LkxdU', 1, 1, 'Tạ Văn Khiêm', '0977864864', 'vankhiem@gmail.com', 'Nữ', '1994-01-01', 'bình thủy, cần thơ', '2018-05-04', '2018-05-31'),
(8, 'vanb', '$2y$10$A8toBVnKAwbhkj1UWiWz0OkFgOSz9UqwyqzJ9kN8XNFf/odRoO/l.', 'Z7UaAQVUgfGkW5Q7MyBuokM33ieO0FCLG2kni1SH1C0XqKOqyMXQqxlIBM8V', 1, 2, 'Dương Văn Lăng', '0936420439', 'langb1400700@gmail.com', 'Nam', '2018-05-23', 'Cần Thơ', '2018-05-31', '2018-06-04'),
(9, 'vanc', '$2y$10$3KWWV.cs54GwW95cT8YL4eSBeC/uoUgk49lsP.c5yzLkcJdn3ja12', 'l4WgVUyvqQPDtZSQ3InYesFjzY3W8teB1KAkYOtD2vMROAusSC8cSTTfYNzZ', 1, 3, 'Trần Văn Cường', '0936452499', 'nguyendailoi@gmail.com', 'Nam', '2018-05-16', 'Cần Thơ', '2018-05-31', '2018-06-04'),
(10, 'nvantai', '$2y$10$zI5dRz46XcDOhs9PxE0zzu4KsEjJZ2z.MRA3nXHsbNh6xr5rRBKtm', 'MAcyKG6eaQUxydjk2Npt3fSDiW8pzhOhgVnc9SQdbguFrWn1bMy1rBwDQbJY', 2, 1, 'Nguyễn Văn Tài', '093655555', 'tai@gmail.com', 'Nam', '2018-05-10', 'can', '2018-05-31', '2018-05-31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`RQ_ID`,`PP_ID`),
  ADD KEY `FK_CO_4` (`PP_ID`);

--
-- Chỉ mục cho bảng `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PP_ID`),
  ADD KEY `FK_THUOC_2` (`RT_ID`);

--
-- Chỉ mục cho bảng `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`RQ_ID`),
  ADD KEY `FK_THUOC_1` (`RT_ID`),
  ADD KEY `FK_XULY` (`US_ID`),
  ADD KEY `requirement_ibfk_1` (`US_SERVANT`),
  ADD KEY `FK_THUOC_6` (`ST_ID`);

--
-- Chỉ mục cho bảng `requirement_type`
--
ALTER TABLE `requirement_type`
  ADD PRIMARY KEY (`RT_ID`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RO_ID`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Chỉ mục cho bảng `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`UN_ID`);

--
-- Chỉ mục cho bảng `unit_requirementtype`
--
ALTER TABLE `unit_requirementtype`
  ADD PRIMARY KEY (`UN_ID`,`RT_ID`),
  ADD KEY `FK_CO_2` (`RT_ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_THUOC_3` (`UN_ID`),
  ADD KEY `FK_THUOC_4` (`RO_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `properties`
--
ALTER TABLE `properties`
  MODIFY `PP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `requirement`
--
ALTER TABLE `requirement`
  MODIFY `RQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1530176297;

--
-- AUTO_INCREMENT cho bảng `requirement_type`
--
ALTER TABLE `requirement_type`
  MODIFY `RT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `RO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `ST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `units`
--
ALTER TABLE `units`
  MODIFY `UN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1528971815;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `FK_CO_3` FOREIGN KEY (`RQ_ID`) REFERENCES `requirement` (`RQ_ID`),
  ADD CONSTRAINT `FK_CO_4` FOREIGN KEY (`PP_ID`) REFERENCES `properties` (`PP_ID`);

--
-- Các ràng buộc cho bảng `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `FK_THUOC_2` FOREIGN KEY (`RT_ID`) REFERENCES `requirement_type` (`RT_ID`);

--
-- Các ràng buộc cho bảng `requirement`
--
ALTER TABLE `requirement`
  ADD CONSTRAINT `FK_THUOC_1` FOREIGN KEY (`RT_ID`) REFERENCES `requirement_type` (`RT_ID`),
  ADD CONSTRAINT `FK_THUOC_6` FOREIGN KEY (`ST_ID`) REFERENCES `status` (`ST_ID`),
  ADD CONSTRAINT `FK_XULY` FOREIGN KEY (`US_ID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `requirement_ibfk_1` FOREIGN KEY (`US_SERVANT`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `unit_requirementtype`
--
ALTER TABLE `unit_requirementtype`
  ADD CONSTRAINT `FK_CO_2` FOREIGN KEY (`RT_ID`) REFERENCES `requirement_type` (`RT_ID`),
  ADD CONSTRAINT `FK_DUOC_QUYEN_SUA` FOREIGN KEY (`UN_ID`) REFERENCES `units` (`UN_ID`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_THUOC_3` FOREIGN KEY (`UN_ID`) REFERENCES `units` (`UN_ID`),
  ADD CONSTRAINT `FK_THUOC_4` FOREIGN KEY (`RO_ID`) REFERENCES `role` (`RO_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
