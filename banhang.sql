/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : banhang

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-11-04 21:28:05
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `chitiethoadon`
-- ----------------------------
DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE `chitiethoadon` (
  `MaCTDH` int(11) NOT NULL AUTO_INCREMENT,
  `MaSP` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `ChietKhau` int(3) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `MaDonHang` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaCTDH`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chitiethoadon
-- ----------------------------
INSERT INTO chitiethoadon VALUES ('13', '2', '1', '5', '11000000', '10');
INSERT INTO chitiethoadon VALUES ('17', '1', '1', '10', '11000000', '13');
INSERT INTO chitiethoadon VALUES ('18', '1', '1', '10', '11000000', '14');
INSERT INTO chitiethoadon VALUES ('19', '2', '1', '5', '11000000', '15');
INSERT INTO chitiethoadon VALUES ('20', '1', '1', '10', '11000000', '16');
INSERT INTO chitiethoadon VALUES ('25', '2', '1', '5', '11000000', '20');

-- ----------------------------
-- Table structure for `dangnhap`
-- ----------------------------
DROP TABLE IF EXISTS `dangnhap`;
CREATE TABLE `dangnhap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `NgayTaoTK` datetime NOT NULL,
  `LanTruyCapCuoi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of dangnhap
-- ----------------------------
INSERT INTO dangnhap VALUES ('33', '12345678', '1', '2016-08-26 00:00:00', '0000-00-00 00:00:00');
INSERT INTO dangnhap VALUES ('34', '1234567', '3', '2016-10-19 00:00:00', '0000-00-00 00:00:00');
INSERT INTO dangnhap VALUES ('35', '08041995', '4', '2016-10-30 00:00:00', '0000-00-00 00:00:00');
INSERT INTO dangnhap VALUES ('36', '08041995', '5', '2016-10-30 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `diachigiaohang`
-- ----------------------------
DROP TABLE IF EXISTS `diachigiaohang`;
CREATE TABLE `diachigiaohang` (
  `MaDiaChi` int(11) NOT NULL AUTO_INCREMENT,
  `MaKhachHang` int(11) NOT NULL,
  `NguoiNhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaDiaChi`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of diachigiaohang
-- ----------------------------
INSERT INTO diachigiaohang VALUES ('69', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('70', '2', 'Trần chung kiên', 'Hà Nội', '0964963029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('71', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('72', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('73', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('74', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('75', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('76', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('77', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('78', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('79', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('80', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('81', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('82', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('83', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('84', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('85', '3', 'Nguyễn hũy vọng', 'Nam đinh', '11234567899', 'vongdai@gmail.com');
INSERT INTO diachigiaohang VALUES ('86', '3', 'Nguyễn hũy vọng', 'Nam đinh', '11234567899', 'vongdai@gmail.com');
INSERT INTO diachigiaohang VALUES ('87', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('88', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('89', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('90', '1', 'Trần chung kiên', 'Hà Nội', '0964953029', 'kienkienutc95@gmail.com');
INSERT INTO diachigiaohang VALUES ('91', '3', 'Nguyễn hũy vọng', 'Nam đinh', '11234567899', 'vongdai@gmail.com');
INSERT INTO diachigiaohang VALUES ('92', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('93', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('94', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('95', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('96', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('97', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('98', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('99', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');
INSERT INTO diachigiaohang VALUES ('100', '3', 'Nguyễn hữu vọng', 'Nam đinh', '11234567899', 'huuvong@gmail.com');

-- ----------------------------
-- Table structure for `hoadon`
-- ----------------------------
DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
  `MaDonHang` int(11) NOT NULL AUTO_INCREMENT,
  `MaKhachHang` int(11) DEFAULT NULL,
  `MaDiaChi` int(11) DEFAULT NULL,
  `NgayDatHang` date DEFAULT NULL,
  `MaVC` int(11) DEFAULT NULL,
  `MaTT` int(11) DEFAULT NULL,
  `TrangThai` int(1) DEFAULT NULL,
  `TongTien` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaDonHang`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hoadon
-- ----------------------------
INSERT INTO hoadon VALUES ('10', '2', '70', '2016-08-26', '1', '1', '0', '22000000');
INSERT INTO hoadon VALUES ('13', '1', '73', '2016-08-26', '1', '1', '1', '11000000');
INSERT INTO hoadon VALUES ('14', '1', '74', '2016-08-27', '2', '1', '1', '11000000');
INSERT INTO hoadon VALUES ('15', '1', '75', '2016-08-27', '2', '1', '1', '11000000');
INSERT INTO hoadon VALUES ('16', '1', '76', '2016-08-27', '2', '2', '1', '22000000');
INSERT INTO hoadon VALUES ('20', '1', '80', '2016-08-30', '2', '1', '1', '36500000');

-- ----------------------------
-- Table structure for `khachhang`
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT,
  `TenKhachHang` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(255) DEFAULT NULL,
  `GioiTinh` int(1) DEFAULT NULL,
  `NgaySinh` datetime DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `captcha` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`MaKhachHang`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO khachhang VALUES ('1', 'Trần chung kiên', 'kienkienutc95@gmail.com', '0964953029', '1', '1995-04-08 00:00:00', 'Hà Nội', 'watammt');
INSERT INTO khachhang VALUES ('2', 'Trần chung kiên', 'admin@gmail.com', '0964963029', null, null, 'Hà Nội', null);
INSERT INTO khachhang VALUES ('3', 'Nguyễn hữu vọng', 'huuvong@gmail.com', '11234567899', '1', '1995-10-03 00:00:00', 'Nam đinh', 'kawaaek');
INSERT INTO khachhang VALUES ('4', 'Vũ Minh Phúc', 'vuminhphuc93@gmail.com', '12432535465', '1', '1993-04-06 00:00:00', 'Nam đinh', 'meyizi');
INSERT INTO khachhang VALUES ('5', 'Nguyễn Hữu Vọng', 'huyvong95utc@gmail.com', '0169696966', '0', '1995-03-01 00:00:00', 'Nam đinh', 'yaplfak');

-- ----------------------------
-- Table structure for `khoanggia`
-- ----------------------------
DROP TABLE IF EXISTS `khoanggia`;
CREATE TABLE `khoanggia` (
  `MaKG` int(11) NOT NULL AUTO_INCREMENT,
  `KGDau` int(11) DEFAULT NULL,
  `KGCuoi` int(11) DEFAULT NULL,
  `Trangthai` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaKG`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of khoanggia
-- ----------------------------
INSERT INTO khoanggia VALUES ('1', '5', '10', '1');
INSERT INTO khoanggia VALUES ('2', '10', '15', '1');
INSERT INTO khoanggia VALUES ('3', '15', '20', '1');

-- ----------------------------
-- Table structure for `lienhe`
-- ----------------------------
DROP TABLE IF EXISTS `lienhe`;
CREATE TABLE `lienhe` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lienhe
-- ----------------------------
INSERT INTO lienhe VALUES ('1', 'Nguyễn Hữu Vọng', '#', '0969696969', '#', '#');
INSERT INTO lienhe VALUES ('2', 'Vũ Minh Phúc', '#', '01234567891', '#', '#');

-- ----------------------------
-- Table structure for `loaisanpham`
-- ----------------------------
DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL AUTO_INCREMENT,
  `Tenloaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Trangthai` int(11) NOT NULL DEFAULT '1',
  `Mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaLSP`),
  UNIQUE KEY `Tenloaisp` (`Tenloaisp`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of loaisanpham
-- ----------------------------
INSERT INTO loaisanpham VALUES ('1', 'Dell', '1', '#', 'frontend/web/uploads/dell.png');
INSERT INTO loaisanpham VALUES ('2', 'Asus', '1', '#', 'frontend/web/uploads/hp.png');
INSERT INTO loaisanpham VALUES ('4', 'Sam sung', '1', '#', 'uploads/samsung.png');
INSERT INTO loaisanpham VALUES ('5', 'Sony', '1', '#', 'uploads/sony.jpg');
INSERT INTO loaisanpham VALUES ('6', 'Toshiba', '1', '#', 'uploads/toshiba.png');
INSERT INTO loaisanpham VALUES ('7', 'HP', '1', '#', 'uploads/hp.png');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `Menu_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Menu_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO menu VALUES ('1', 'Sản phẩm', '/san-pham', 'uploads/Penguins.jpg', '1');
INSERT INTO menu VALUES ('2', 'Tin Tức', '/tin-tuc', 'uploads/Lighthouse.jpg', '1');
INSERT INTO menu VALUES ('3', 'Bảo Hành', '/bao-hanh', 'uploads/Lighthouse.jpg', '1');
INSERT INTO menu VALUES ('4', 'Giới Thiệu', '/gioi-thieu', 'uploads/Penguins.jpg', '1');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO migration VALUES ('m000000_000000_base', '1469086967');
INSERT INTO migration VALUES ('m130524_201442_init', '1469086971');
INSERT INTO migration VALUES ('m160807_162531_create_tbl_loaisanpham', '1470621617');
INSERT INTO migration VALUES ('m160807_163558_create_sanpham', '1470621618');
INSERT INTO migration VALUES ('m160807_164510_create_chitietsanpham', '1470621619');
INSERT INTO migration VALUES ('m160807_164821_create_lienhe', '1470621619');
INSERT INTO migration VALUES ('m160807_165238_create_menu', '1470621620');
INSERT INTO migration VALUES ('m160807_165618_create_khachhang', '1470621620');
INSERT INTO migration VALUES ('m160807_170303_create_dangnhap', '1470621621');
INSERT INTO migration VALUES ('m160807_171212_create_diachigiaohang', '1470621621');
INSERT INTO migration VALUES ('m160807_171517_create_donhang', '1470621622');
INSERT INTO migration VALUES ('m160807_172012_create_thanhtoan', '1470621623');
INSERT INTO migration VALUES ('m160807_172248_create_chitietdonhang', '1470621623');
INSERT INTO migration VALUES ('m160819_092124_create_tintuc', '1471600712');

-- ----------------------------
-- Table structure for `sanpham`
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL AUTO_INCREMENT,
  `MaLSP` int(11) NOT NULL,
  `Tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci,
  `Thongsokythuat` text COLLATE utf8_unicode_ci,
  `Trangthai` int(11) NOT NULL DEFAULT '1',
  `Image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smallImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mediumImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `largeImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gianhap` decimal(19,0) DEFAULT NULL,
  `giaban` decimal(19,0) DEFAULT NULL,
  `chietkhau` int(5) DEFAULT NULL,
  `Muanhieu` int(1) DEFAULT NULL,
  `Baohanh` int(3) DEFAULT NULL,
  `dacdiem` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MaSP`),
  UNIQUE KEY `Tensanpham` (`Tensanpham`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sanpham
-- ----------------------------
INSERT INTO sanpham VALUES ('1', '1', 'Dell vostrol 691', '<p>* M&aacute;y nhập Mỹ &amp; Ch&acirc;u &Acirc;u, nguy&ecirc;n bản 100%&nbsp;<br /> * Laptop88 kh&ocirc;ng cộng th&ecirc;m tiền webcam v&agrave; FingperPrint v&agrave;o gi&aacute; b&aacute;n thực tế như nhiều nơi kh&aacute;c.&nbsp;<br /> * Bảo h&agrave;nh 12 th&aacute;ng 1 đổi 1 (Ri&ecirc;ng pin v&agrave; webcam bảo h&agrave;nh 1 th&aacute;ng), bảo h&agrave;nh ổ cứng cả trường hợp bad v&agrave; chết cơ, bảo h&agrave;nh m&agrave;n h&igrave;nh cả trong trường hợp bị kẻ vạch.&nbsp;<br /> Khuyến mại: Cặp + Chuột kh&ocirc;ng d&acirc;y + C&aacute;p DisplayPort to HDMI + Bộ dụng cụ vệ sinh laptop Hoặc: Balo chống sốc cao cấp + Chuột kh&ocirc;ng d&acirc;y + Bộ dụng cụ vệ sinh laptop</p>', '<p>#</p>', '1', 'frontend/web/uploads/Acer%20Aspire%20E5-573G-52K4%20NX.MW4SV.001%20Black%20White.jpg', 'frontend/web/uploads/Acer%20Aspire%20Z1402-34VY%20NX.G80SV.005%20%20Charcoal%20Black2.jpg', 'frontend/web/uploads/Dell%20Inspiron%2014%203452A%20P60G002-TC32500W10B%20-Black3.jpg', 'frontend/web/uploads/Dell%20Inspiron%2014%203442%20062GW2-Black%201.jpg', '10000000', '11000000', '10', '1', '1', '<p><img src=\"http://localhost:8282/banlaptop/frontend/web/uploads/Acer%20Aspire%20Z1402-34VY%20NX.G80SV.005%20%20Charcoal%20Black2.jpg?1478249805206\" alt=\"\" width=\"600\" height=\"473\" /></p>');
INSERT INTO sanpham VALUES ('2', '1', 'Dell inspinron5320', '<p>#</p>', '<p>#</p>', '1', 'frontend/web/uploads/Dell Inspiron 14 3458 TXTGH41-BLACK 1.jpg', 'frontend/web/uploads/Acer Aspire E5-473-38P5 NX.MXRSV.006 Black White1.jpg', 'frontend/web/uploads/Acer Aspire Z1402-34VY NX.G80SV.005  Charcoal Black.jpg', 'frontend/web/uploads/Acer Aspire E5-473-50S7 NX.MXQSV.003 Black Iron.png', '10000000', '11000000', '0', '1', '0', '');
INSERT INTO sanpham VALUES ('3', '2', 'Asus sonicmaster', '<p>#</p>', '<p>#</p>', '1', 'frontend/web/uploads/Acer Aspire E5-473-38P5 NX.MXRSV.006 Black White.jpg', 'frontend/web/uploads/Acer Aspire E5-473-50S7 NX.MXQSV.003 Black Iron.png', 'frontend/web/uploads/Acer Aspire E5-573G-52K4 NX.MW4SV.001 Black White.jpg', 'frontend/web/uploads/Acer Aspire Z1402-34VY NX.G80SV.005  Charcoal Black.jpg', '14000000', '14500000', '15', '0', '0', '<p>#</p>');
INSERT INTO sanpham VALUES ('4', '1', 'Dell inspinron5323', '<p>#</p>', '<p>#</p>', '1', 'frontend/web/uploads/Dell Inspiron 7359 C3I5019W-Silver.jpg', 'frontend/web/uploads/Dell Inspiron 14 3442 062GW2-Black 3.jpg', 'frontend/web/uploads/Acer Aspire E5-473-50S7 NX.MXQSV.003 Black Iron.png', 'frontend/web/uploads/Acer Aspire Z1402-34VY NX.G80SV.005  Charcoal Black.jpg', '14000000', '16000000', '20', '1', '0', '<p>#</p>');
INSERT INTO sanpham VALUES ('5', '2', 'Asus 2730', '<p>#</p>', '<p>#</p>', '1', 'frontend/web/uploads/Acer Aspire E5-573G-52K4 NX.MW4SV.001 Black White.jpg', 'frontend/web/uploads/Acer Aspire E5-473-38P5 NX.MXRSV.006 Black White1.jpg', 'frontend/web/uploads/Acer Aspire E5-473-50S7 NX.MXQSV.003 Black Iron.png', 'frontend/web/uploads/Acer Aspire E5-573G-52K4 NX.MW4SV.001 Black White1.jpg', '12000000', '12500000', '0', '0', '1', '<p>#</p>');
INSERT INTO sanpham VALUES ('6', '4', 'Sam sung s5', '<p>#</p>', '<p>#</p>', '1', 'frontend/web/uploads/Acer Aspire E5-473-38P5 NX.MXRSV.006 Black White2.jpg', 'frontend/web/uploads/Acer Aspire E5-573G-52K4 NX.MW4SV.001 Black White1.jpg', 'frontend/web/uploads/Acer Aspire E5-573G-52K4 NX.MW4SV.001 Black White.jpg', 'frontend/web/uploads/Acer Aspire E5-573G-52K4 NX.MW4SV.001 Black White1.jpg', '12000000', '13000000', '10', '0', '1', '<p>#</p>');
INSERT INTO sanpham VALUES ('7', '7', 'HP elitebook', '<p>#</p>', '<p>#</p>', '1', 'frontend/web/uploads/Dell%20Inspiron%2014%203458%20TXTGH41-BLACK%202.jpg', 'frontend/web/uploads/Dell%20Inspiron%2014%20N5458A%20P64G001-TI54100%20Black%20%201.jpg', 'frontend/web/uploads/Dell%20Inspiron%2014%203459%20C3I51105-BLACK%20%205.jpg', 'frontend/web/uploads/Lenovo%20IdeaPad%20100-14IBY%2080MH0002VN%20BLACK.jpg', '13500000', '15000000', '5', '0', '0', '<p>#</p>');

-- ----------------------------
-- Table structure for `sanpham_thuoctinh`
-- ----------------------------
DROP TABLE IF EXISTS `sanpham_thuoctinh`;
CREATE TABLE `sanpham_thuoctinh` (
  `MaSP` int(11) NOT NULL,
  `MaLTT` int(11) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `Tengoi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MaSP`,`MaLTT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sanpham_thuoctinh
-- ----------------------------
INSERT INTO sanpham_thuoctinh VALUES ('1', '1', '8', '8(gb)');
INSERT INTO sanpham_thuoctinh VALUES ('1', '2', '7', 'Core i7');
INSERT INTO sanpham_thuoctinh VALUES ('1', '3', '4', '4(giờ)');
INSERT INTO sanpham_thuoctinh VALUES ('1', '4', '14', '14 inch');
INSERT INTO sanpham_thuoctinh VALUES ('2', '1', '5', '5(gb)');
INSERT INTO sanpham_thuoctinh VALUES ('2', '2', '5', 'Core i5');
INSERT INTO sanpham_thuoctinh VALUES ('2', '3', '6', '6(giờ)');
INSERT INTO sanpham_thuoctinh VALUES ('2', '4', '13', '13 inch');
INSERT INTO sanpham_thuoctinh VALUES ('3', '1', '8', '8(gb)');
INSERT INTO sanpham_thuoctinh VALUES ('3', '2', '5', 'Core i5');
INSERT INTO sanpham_thuoctinh VALUES ('3', '3', '4', '4(giờ)');
INSERT INTO sanpham_thuoctinh VALUES ('3', '4', '15', '15 inch');
INSERT INTO sanpham_thuoctinh VALUES ('4', '1', '6', '6(gb)');
INSERT INTO sanpham_thuoctinh VALUES ('4', '2', '5', 'Core i5');
INSERT INTO sanpham_thuoctinh VALUES ('4', '3', '4', '4(giờ)');
INSERT INTO sanpham_thuoctinh VALUES ('4', '4', '12', '12 inch');
INSERT INTO sanpham_thuoctinh VALUES ('5', '1', '6', '6(gb)');
INSERT INTO sanpham_thuoctinh VALUES ('5', '2', '5', 'Core i5');
INSERT INTO sanpham_thuoctinh VALUES ('5', '3', '6', '6(giờ)');
INSERT INTO sanpham_thuoctinh VALUES ('5', '4', '15', '15 inch');
INSERT INTO sanpham_thuoctinh VALUES ('6', '1', '5', '5(gb)');
INSERT INTO sanpham_thuoctinh VALUES ('6', '2', '5', 'Core i5');
INSERT INTO sanpham_thuoctinh VALUES ('6', '3', '6', '6(giờ)');
INSERT INTO sanpham_thuoctinh VALUES ('6', '4', '15', '15 inch');

-- ----------------------------
-- Table structure for `thanhtoan`
-- ----------------------------
DROP TABLE IF EXISTS `thanhtoan`;
CREATE TABLE `thanhtoan` (
  `MaTT` int(11) NOT NULL AUTO_INCREMENT,
  `TenTT` varchar(255) NOT NULL,
  `Mota` varchar(255) NOT NULL,
  `Trangthai` int(1) NOT NULL,
  PRIMARY KEY (`MaTT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of thanhtoan
-- ----------------------------
INSERT INTO thanhtoan VALUES ('1', 'Thanh toán trực tiếp.', '#', '1');
INSERT INTO thanhtoan VALUES ('2', 'Chuyển Khoản ngân hàng', '#', '1');

-- ----------------------------
-- Table structure for `thuoctinh`
-- ----------------------------
DROP TABLE IF EXISTS `thuoctinh`;
CREATE TABLE `thuoctinh` (
  `MaLTT` int(11) NOT NULL AUTO_INCREMENT,
  `TenLTT` varchar(255) DEFAULT NULL,
  `Trangthai` int(1) DEFAULT NULL,
  PRIMARY KEY (`MaLTT`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of thuoctinh
-- ----------------------------
INSERT INTO thuoctinh VALUES ('1', 'RAM', '1');
INSERT INTO thuoctinh VALUES ('2', 'CPU', '1');
INSERT INTO thuoctinh VALUES ('3', 'PIN', '1');
INSERT INTO thuoctinh VALUES ('4', 'DISPLAY', '1');

-- ----------------------------
-- Table structure for `tintuc`
-- ----------------------------
DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE `tintuc` (
  `Mabt` int(11) NOT NULL AUTO_INCREMENT,
  `Tenbt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tomtat` text COLLATE utf8_unicode_ci,
  `Noidung` text COLLATE utf8_unicode_ci,
  `Ngaycn` datetime DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Luotxem` int(11) DEFAULT NULL,
  `Trangthai` int(1) NOT NULL,
  PRIMARY KEY (`Mabt`),
  UNIQUE KEY `Tenbt` (`Tenbt`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tintuc
-- ----------------------------
INSERT INTO tintuc VALUES ('4', 'Ultrabook cấu hình tốt, thiết kế đẹp, giá rẻ hơn cả Notebook Air trình làng', '<div>Thị trường laptop si&ecirc;u mỏng đặt nền m&oacute;ng đầu ti&ecirc;n tr&ecirc;n thị &nbsp;trường laptop hiện nay.</div>', '<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Thị trường laptop si&ecirc;u mỏng nhẹ hay ultrabook gi&aacute; rẻ đang bắt đầu n&oacute;ng l&ecirc;n từng ng&agrave;y, mới đ&acirc;y, một thương hiệu t&ecirc;n l&agrave; Livefan đ&atilde; chuẩn bị ra mắt một laptop như vậy. Thậm ch&iacute; laptop n&agrave;y c&ograve;n muốn cạnh tranh với cả Xiaomi Notebook Air.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Xem th&ecirc;m:&nbsp;<a title=\"Mở hộp Mi Notebook Air: Đẹp như MacBook Air nhưng gi&aacute; hấp dẫn hơn nhiều\" href=\"https://www.thegioididong.com/tin-tuc/mo-hop-mi-notebook-air-dep-nhu-macbook--864300\" target=\"_blank\">Mở hộp Mi Notebook Air: Đẹp như MacBook Air nhưng gi&aacute; hấp dẫn hơn nhiều</a></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Thiết bị mới n&agrave;y mang t&ecirc;n Livefan S1 v&agrave; n&oacute; chiếc Ultrabook đầu ti&ecirc;n của thương hiệu Livefan. B&ecirc;n trong S1 c&oacute; chip Intel Core 5Y10C-M, bộ nhớ RAM 8 GB v&agrave; dung lượng lưu trữ 256 GB th&ocirc;ng qua ổ rắn SSD. Chiếc ultrabook n&agrave;y cũng c&oacute; một webcam 1.3 MP để chat video th&ocirc;ng qua WiFi v&agrave; c&oacute; kết nối Bluetooth.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Ultrabook Livefan S1 cũng c&oacute; m&agrave;n h&igrave;nh 13.3 inch 2K v&agrave; 2 cổng USB 3.0, một trong số đ&oacute; l&agrave; cổng USB Type-C. Pin của m&aacute;y được cho l&agrave; sẽ k&eacute;o d&agrave;i trong 5-6 giờ sử dụng b&igrave;nh thường v&agrave; m&aacute;y cũng c&agrave;i sẵn&nbsp;<a title=\"Hệ điều h&agrave;nh Windows 10\" href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-cac-he-dieu-hanh-tren-laptop-599737#windows10\" target=\"_blank\">Windows 10</a>&nbsp;OS.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><img title=\"Livefan\" src=\"https://cdn2.tgdd.vn/Files/2016/08/07/871194/livefan-s1-f.jpg\" alt=\"Livefan\" /></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Chiếc ultrabook n&agrave;y cũng đi k&egrave;m với một cổng mini-HDMI, vỏ l&agrave;m bằng nh&ocirc;m v&agrave; c&oacute; 2 phi&ecirc;n bản m&agrave;u l&agrave; bạc v&agrave; v&agrave;ng.&nbsp;Gi&aacute; của ultrabook Livefan S1 v&agrave;o khoảng 670 USD (khoảng 15 triệu đồng). Mức gi&aacute; n&agrave;y c&oacute; phần rẻ hơn phi&ecirc;n bản&nbsp;<a title=\"Xiaomi Notebook Air\" href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=notebook+air\" target=\"_blank\">Xiaomi Notebook Air</a>&nbsp;m&agrave;n h&igrave;nh 13.3 inch nhưng c&oacute; vẻ như x&eacute;t về độ nổi tiếng th&igrave; kh&oacute; m&agrave; bằng.</span></span></div>', '2016-08-20 16:16:24', 'frontend/web/uploads/tintuc/minote.jpg', '10', '1');
INSERT INTO tintuc VALUES ('5', 'Cận cảnh Mi Notebook Air, đẹp thật chứ không đùa đâu!', '<div><br />\r\nH&ocirc;m qua, mẫu laptop &ldquo;y chang&rdquo; MacBook Air của Xiaomi ch&iacute;nh thức ra mắt, n&oacute; c&oacute; thiết kế chắc chắn với khung vỏ bằng...</div>\r\n', '<h2>H&ocirc;m qua, mẫu&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" title=\"laptop\">laptop</a>&nbsp;&ldquo;y chang&rdquo;&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=MacBook+Air\" target=\"_blank\" title=\" MacBook Air\">MacBook Air</a>&nbsp;của Xiaomi ch&iacute;nh thức ra mắt, n&oacute; c&oacute; thiết kế chắc chắn với khung vỏ bằng kim loại bắt mắt, ấn tượng. H&ocirc;m nay ch&uacute;ng ta sẽ cận cảnh mẫu laptop n&agrave;y nh&eacute;.</h2>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=Mi+Notebook\" target=\"_blank\" title=\"Mi Notebook Air\">Mi Notebook Air</a>&nbsp;c&oacute; 2 phi&ecirc;n bản gồm 13.3 inch v&agrave; 12.5 inch, cả 2 đều sở hữu khung vỏ bằng kim loại nguy&ecirc;n khối cao cấp, thoạt nh&igrave;n chắc chắn ai cũng nghĩ tới đấy l&agrave; MacBook Air đến từ nh&agrave; T&aacute;o, nhưng kh&ocirc;ng, đ&acirc;y l&agrave; chiếc laptop đầu tay của Xiaomi.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Mi Notebook Air\" src=\"https://cdn1.tgdd.vn/Files/2016/07/28/864577/xiaomi-notebook-real-images-10.jpg\" title=\"Mi Notebook Air\" /></p>\r\n\r\n<p>Đ&aacute;ng ngạc nhi&ecirc;n hơn nữa l&agrave; mặt sau kh&ocirc;ng được gắn logo Mi như c&aacute;c sản phẩm thường thấy của Xiaomi, điều n&agrave;y sẽ khiến nhiều người c&agrave;ng &ldquo;lầm tưởng&rdquo; hơn. Tuy nhi&ecirc;n n&oacute; c&oacute; một logo Mi ở mặt trước, ngay ph&iacute;a dưới m&agrave;n h&igrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Mi Notebook Air\" src=\"https://cdn3.tgdd.vn/Files/2016/07/28/864577/xiaomi-notebook-real-images-3.jpg\" title=\"Mi Notebook Air\" /></p>\r\n\r\n<p>Mi Notebook Air c&oacute; 1 cổng HDMI, 1 cổng USB 3.0 v&agrave; một jack cắm tai nghe 3.5 mm ở ph&iacute;a cạnh tr&aacute;i trong khi cạnh phải c&oacute; th&ecirc;m một cổng USB 3.0,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760\" target=\"_blank\" title=\"USB Type-C \">USB Type-C</a>&nbsp;c&ugrave;ng đ&egrave;n LED th&ocirc;ng b&aacute;o.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Mi Notebook Air\" src=\"https://cdn.tgdd.vn/Files/2016/07/28/864577/xiaomi-notebook-real-images-0.jpg\" title=\"Mi Notebook Air\" /></p>\r\n\r\n<p>Nếu bạn để &yacute;, n&uacute;t nguồn của m&aacute;y được thiết kế như một n&uacute;t tr&ecirc;n b&agrave;n ph&iacute;m, n&oacute; nằm ở g&oacute;c tr&ecirc;n b&ecirc;n phải. Những ai l&agrave; chủ sở hữu MacBook sẽ nhận ra ngay điều n&agrave;y.</p>\r\n\r\n<p>Ngo&agrave;i ra, Mi Notebook Air c&ograve;n c&oacute; th&ecirc;m phi&ecirc;n bản với mặt sau được d&aacute;n bằng một tấm h&igrave;nh độc đ&aacute;o, nổi bật giữa đ&aacute;m đ&ocirc;ng nhưng kh&ocirc;ng r&otilde; đ&oacute; sẽ l&agrave; một phi&ecirc;n bản thương mại hay chỉ l&agrave; mẫu trưng b&agrave;y của Xiaomi.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Mi Notebook Air\" src=\"https://cdn3.tgdd.vn/Files/2016/07/28/864577/xiaomi-notebook-real-images-9.jpg\" title=\"Mi Notebook Air\" /></p>\r\n\r\n<p>Tổng thể của m&aacute;y cho cảm gi&aacute;c sang trọng, lịch l&atilde;m v&agrave; cao cấp, cả 2 cũng đều rất nhẹ, chỉ nặng hơn 1 Kg gi&uacute;p dễ d&agrave;ng di chuyển hơn cho người d&ugrave;ng. Nếu bạn thắc mắc về gi&aacute; b&aacute;n, cấu h&igrave;nh th&igrave; c&oacute; thể xem trong b&agrave;i viết dưới đ&acirc;y nh&eacute;.</p>\r\n', '2016-08-20 16:37:35', 'frontend/web/uploads/tintucximao.jpg', '8', '1');
INSERT INTO tintuc VALUES ('6', 'Mi Notebook Air chính thức trình làng, đẹp như MacBook Air nhưng giá rẻ', '<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Sau nhiều h&igrave;nh ảnh, th&ocirc;ng tin ra mắt th&igrave; đ&uacute;ng như dự đo&aacute;n trước đ&oacute;, h&ocirc;m nay (27/7) mẫu laptop cực đẹp Mi Notebook...</span></span></div>\r\n', '<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Mi Notebook Air chính thức trình làng, đẹp như MacBook Air nhưng giá rẻ\" src=\"https://cdn.tgdd.vn/Files/2016/07/27/863962/mi-notebook-air-1.jpg\" title=\"Mi Notebook Air chính thức trình làng, đẹp như MacBook Air nhưng giá rẻ\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Sau nhiều h&igrave;nh ảnh, th&ocirc;ng tin ra mắt th&igrave; đ&uacute;ng như dự đo&aacute;n trước đ&oacute;, h&ocirc;m nay (27/7) mẫu&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" title=\"laptop \">laptop</a>&nbsp;cực đẹp&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=Mi+Notebook\" target=\"_blank\" title=\"Mi Notebook\">Mi Notebook</a>&nbsp;Air đ&atilde; ch&iacute;nh thức tr&igrave;nh l&agrave;ng. Đặc biệt, n&oacute; c&ograve;n mỏng v&agrave; gọn g&agrave;ng hơn cả&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=MacBook+Air\" target=\"_blank\" title=\"MacBook Air\">MacBook Air</a>.</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/laptop-vo-nhom-dau-tay-cua-xiaomi-lo-anh-thuc-te-862749\" target=\"_blank\" title=\" Laptop vỏ nhôm đầu tay của Xiaomi lộ ảnh thực tế\">Laptop vỏ nh&ocirc;m đầu tay của Xiaomi lộ ảnh thực tế</a></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Đ&uacute;ng như t&ecirc;n gọi của n&oacute;, Mi Notebook Air sở hữu bộ khung vỏ bằng kim loại sang chảnh v&agrave; đặc biệt l&agrave; n&oacute; c&ograve;n mỏng hơn 13%, gọn nhỏ hơn 11% so với MacBook Air. Vậy b&ecirc;n trong m&aacute;y c&oacute; g&igrave;?</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Mi Notebook Air 12 c&oacute; 2 k&iacute;ch thước m&agrave;n h&igrave;nh gồm 12.5 inch v&agrave; 13.3 inch, cả 2 đều c&oacute; độ ph&acirc;n giải&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/chuan-quay-phim-tren-dien-thoai-596472#fullhd\" target=\"_blank\" title=\"FullHD\">FullHD</a>. B&ecirc;n trong m&aacute;y l&agrave; vi xử l&yacute; Intel Core i5-6200U, card đồ họa NVIDIA GeForce 940MX (bản 13.3 inch), RAM 8 GB c&ugrave;ng ổ SSD 256 GB. Sản phẩm n&agrave;y c&oacute; gi&aacute; 750 USD (khoảng 16.7 triệu đồng).</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Phi&ecirc;n bản m&agrave;n h&igrave;nh 12.5 inch sở hữu chip Intel Core M3, RAM 4 GB, ổ SSD 128 GB v&agrave; kh&ocirc;ng c&oacute; card m&agrave;n h&igrave;nh rời, nhờ vậy m&agrave; gi&aacute; b&aacute;n của m&aacute;y chỉ l&agrave; 520 USD (khoảng 11.5 triệu đồng).</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Mi Notebook Air chính thức trình làng, đẹp như MacBook Air nhưng giá rẻ\" src=\"https://cdn.tgdd.vn/Files/2016/07/27/863962/mi-notebook-air-2.jpg\" title=\"Mi Notebook Air chính thức trình làng, đẹp như MacBook Air nhưng giá rẻ\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Xiaomi khẳng định rằng thỏi pin 40Wh của m&aacute;y c&oacute; thể sử dụng li&ecirc;n tục 9.5 giờ trong khi bộ sạc ch&acirc;n USB Type-C c&oacute; thể sạc đầy 50% trong 30 ph&uacute;t. Phi&ecirc;n bản 13.3 inch chỉ nặng 1.28 Kg trong khi bản 12.5 inch nặng 1.07 Kg.</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Mặc d&ugrave; được sản xuất bởi Xiaomi nhưng rất bất ngờ l&agrave; n&oacute; kh&ocirc;ng c&oacute; logo Mi ở tr&ecirc;n mặt lưng. Xiaomi sẽ bắt đầu cho l&ecirc;n kệ 2 model laptop đầu tay của m&igrave;nh tại Trung Quốc v&agrave;o ng&agrave;y 2/8 tới đ&acirc;y, tr&ugrave;ng ng&agrave;y g&igrave; bạn biết kh&ocirc;ng? Đ&oacute; l&agrave; ng&agrave;y ra mắt Note 7 đấy.</span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n', '2016-08-20 16:42:15', 'frontend/web/uploads/minote.jpg', '3', '1');
INSERT INTO tintuc VALUES ('7', 'Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng', '<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Acer mới đ&acirc;y đ&atilde; ra mắt thị trường 2 chiếc laptop gi&aacute; rẻ Switch 2 trong 1 với gi&aacute; khởi điểm chỉ hơn 5 triệu đồng....</span></span></div>\r\n', '<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng\" src=\"https://cdn.tgdd.vn/Files/2016/05/29/834735/fa.jpg\" title=\"Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\"><a href=\"https://www.thegioididong.com/laptop-acer\" target=\"_blank\" title=\"Acer\">Acer</a>&nbsp;mới đ&acirc;y đ&atilde; ra mắt thị trường 2 chiếc&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" title=\" laptop\">laptop</a>&nbsp;gi&aacute; rẻ Switch 2 trong 1 với gi&aacute; khởi điểm chỉ hơn 5 triệu đồng. Đặc biệt, n&oacute; c&oacute; m&agrave;n h&igrave;nh cảm ứng với khả năng biến th&agrave;nh&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang\" target=\"_top\" title=\"máy tính bảng\">m&aacute;y t&iacute;nh bảng</a>&nbsp;khi cần thiết.</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/dat-hang-laptop-bien-hinh-man-hinh-cam-ung-lenovo-834172\" target=\"_blank\" title=\"Đặt hàng laptop biến hình, màn hình cảm ứng Lenovo nhận nhiều quà tặng hấp dẫn\">Đặt h&agrave;ng laptop biến h&igrave;nh, m&agrave;n h&igrave;nh cảm ứng Lenovo nhận nhiều qu&agrave; tặng hấp dẫn</a></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Với t&ecirc;n gọi Switch V 10 v&agrave; Switch One 10, cả 2 đều chạy tr&ecirc;n hệ điều h&agrave;nh<a href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=windows+10\" target=\"_blank\" title=\"Windows 10\">Windows 10</a>, c&oacute; m&agrave;n h&igrave;nh cảm ứng 10 inch với mặt k&iacute;nh bảo vệ Gorilla Glass. B&ecirc;n trong 2 laptop n&agrave;y l&agrave; vi xử l&yacute; l&otilde;i tứ Intel Atom v&agrave; c&oacute; cả đầu đọc dấu v&acirc;n tay c&ugrave;ng cỏng USB Tpe-C.</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng\" src=\"https://cdn2.tgdd.vn/Files/2016/05/29/834735/switch-one-10_sw1-1.jpg\" title=\"Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/asus-zenbook-flip-ux560-xuat-hien-truoc-ngay-ra-mat-834150\" target=\"_blank\" title=\"Asus Zenbook Flip UX560 xuất hiện trước ngày ra mắt\">Asus Zenbook Flip UX560 xuất hiện trước ng&agrave;y ra mắt</a></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Laptop c&oacute; ổ cứng 500 GB v&agrave; c&oacute; thể đi k&egrave;m th&ecirc;m ổ trạng th&aacute;i rắn SSD 32/64 GB để gi&uacute;p hệ điều h&agrave;nh trở n&ecirc;n mượt m&agrave; hơn.</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Cũng giống như những d&ograve;ng laptop 2 trong 1 kh&aacute;c, Switch V 10 v&agrave; Switch One 10 c&oacute; thể bẻ m&agrave;n h&igrave;nh ra sau hoặc thậm ch&iacute; l&agrave; th&aacute;o rời m&agrave;n h&igrave;nh với b&agrave;n ph&iacute;m để trở th&agrave;nh một m&aacute;y t&iacute;nh bảng thực thụ.</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img alt=\"Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng\" src=\"https://cdn1.tgdd.vn/Files/2016/05/29/834735/switch-one-10_sw1-2.jpg\" title=\"Acer tung bộ đôi laptop 2 trong 1 giá rẻ, màn hình cảm ứng\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:times new roman,times,serif\">Được biết, gi&aacute; khởi điểm của laptop l&agrave; 249 USD (khoảng 5.5 triệu đồng) tuy nhi&ecirc;n vẫn chưa r&otilde; 2 sản phẩm n&agrave;y c&oacute; về Việt Nam hay kh&ocirc;ng.</span></span></div>\r\n', '2016-08-20 16:50:25', 'frontend/web/uploads/acernews.jpg', '10', '1');
INSERT INTO tintuc VALUES ('8', 'Là sinh viên, mình nên chọn laptop như thế nào cho phù hợp?', '<p><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Thời sinh vi&ecirc;n, ngo&agrave;i b&egrave; bạn, kiến thức c&ugrave;ng một mảnh t&igrave;nh vắt vai th&igrave; c&oacute; lẽ</span></span></p>', '<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img title=\"Laptop cho sinh vi&ecirc;n\" src=\"https://cdn.tgdd.vn/Files/2016/03/22/806155/latptop-student-1.jpg\" alt=\"Laptop cho sinh vi&ecirc;n\" /></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Thời sinh vi&ecirc;n, ngo&agrave;i b&egrave; bạn, kiến thức c&ugrave;ng một mảnh t&igrave;nh vắt vai th&igrave; c&oacute; lẽ&nbsp;<a title=\"V&agrave;o trang h&agrave;ng laptop\" href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" type=\"V&agrave;o trang h&agrave;ng laptop\">laptop</a>&nbsp;l&agrave; thứ ch&uacute;ng ta n&ecirc;n c&oacute;. Bởi v&igrave; n&oacute; sẽ gi&uacute;p &iacute;ch kh&aacute; nhiều cho qu&aacute; tr&igrave;nh học hay c&ocirc;ng việc part-time của bạn.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">V&igrave; đối tượng ch&iacute;nh của b&agrave;i n&agrave;y l&agrave; sinh vi&ecirc;n, n&ecirc;n m&igrave;nh xin giới hạn lại ph&acirc;n kh&uacute;c đề cập từ b&igrave;nh d&acirc;n đến tầm trung (dưới 15 triệu đồng) v&agrave; kh&ocirc;ng mang v&agrave;o yếu tố thương hiệu. Tất nhi&ecirc;n, nếu bạn c&oacute; điều kiện th&igrave; c&oacute; thể chọn mua một c&aacute;ch thoải m&aacute;i theo &yacute; th&iacute;ch!</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">C&aacute;c mục dưới đ&acirc;y sẽ l&agrave; gợi &yacute; được ph&acirc;n v&ugrave;ng tuỳ theo nhu cầu của bạn.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><strong>1. Laptop nhỏ gọn giống tablet</strong></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">D&ugrave; c&oacute; t&iacute;nh di động cao, hiệu năng ng&agrave;y một được n&acirc;ng cấp c&ugrave;ng việc được nhiều người y&ecirc;u th&iacute;ch, chọn mua nhưng cho đến nay,&nbsp;<a title=\"V&agrave;o trang h&agrave;ng tablet\" href=\"https://www.thegioididong.com/may-tinh-bang\" target=\"_blank\" type=\"V&agrave;o trang h&agrave;ng tablet\">tablet</a>&nbsp;vẫn chưa thể thay thế được laptop. Đặc biệt l&agrave; ở kh&acirc;u ho&agrave;n th&agrave;nh c&aacute;c c&ocirc;ng việc m&agrave; sinh vi&ecirc;n đ&atilde;, đang v&agrave; cần l&agrave;m trong ngần ấy năm học đại học.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Nắm bắt được sự bất cập đ&oacute;, n&ecirc;n ng&agrave;y nay nhiều nh&agrave; sản xuất đ&atilde; bắt đầu cho ra đời những chiếc laptop nhỏ gọn, sở hữu cấu h&igrave;nh cũng như gi&aacute; b&aacute;n kh&ocirc;ng kh&aacute;c g&igrave; mấy so với tablet.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img title=\"sony-vaio-p nhỏ gọn cho sinh vi&ecirc;n\" src=\"https://cdn3.tgdd.vn/Files/2016/03/22/806155/student-sony-vaio-p.jpg\" alt=\"sony-vaio-p nhỏ gọn cho sinh vi&ecirc;n\" /></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Với gi&aacute; khởi điểm chỉ ~5 triệu đồng, bạn sẽ c&oacute; ngay một chiếc laptop với cấu h&igrave;nh r&uacute;t gọn. N&oacute; c&oacute; thể chạy nổi&nbsp;<a title=\"Tin mới nhất về Windows 10\" href=\"https://www.thegioididong.com/tin-tuc/tim-kiem?key=Windows+10\" target=\"_blank\" type=\"Tin mới nhất về Windows 10\">Windows 10</a>&nbsp;mới cũng như l&agrave; c&aacute;c phần mềm văn ph&ograve;ng, tr&igrave;nh duyệt, sửa ảnh,... th&ocirc;ng dụng. Điểm trừ duy nhất c&oacute; lẽ l&agrave; bộ nhớ v&agrave; RAM hơi &iacute;t, tuy nhi&ecirc;n ở gi&aacute; n&agrave;y ch&uacute;ng ta kh&ocirc;ng thể đ&ograve;i hỏi nhiều hơn v&agrave; khi đem so với c&aacute;c tablet c&oacute; c&ugrave;ng mức gi&aacute; th&igrave; cấu h&igrave;nh của những chiếc laptop như&nbsp;<a title=\"Laptop Lenovo Ideapad 100s\" href=\"https://www.thegioididong.com/laptop/lenovo-ideapad-100s\" target=\"_blank\" type=\"Laptop Lenovo Ideapad 100s\">Lenovo Ideapad 100s</a>&nbsp;(mới ra mắt) hay&nbsp;<a title=\"Laptop HP Stream 13 \" href=\"https://www.thegioididong.com/laptop/hp-stream-13\" target=\"_blank\" type=\"Laptop HP Stream 13 \">HP Stream 13</a>&nbsp;kh&ocirc;ng hề thua k&eacute;m x&iacute;u n&agrave;o.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><strong>2. Khoẻ dần đều &amp; c&oacute; thể chơi game</strong></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Bước v&agrave;o tầm gi&aacute; từ 5.5 triệu đồng trở đi, ch&uacute;ng ta sẽ c&oacute; rất nhiều sự lựa chọn. V&agrave; dĩ nhi&ecirc;n khi đ&atilde; quyết định mua một thiết bị ở tầm tiền n&agrave;y, th&igrave; bạn h&atilde;y cố gắng t&igrave;m một chiếc laptop tốt nhất c&oacute; thể trong khả năng.</span></span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Theo quan s&aacute;t của m&igrave;nh th&igrave;:</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">+ Từ 5.5 &gt; dưới 6.5 triệu đồng: Th&ocirc;ng thường l&agrave; chip&nbsp;<a title=\"Intel Celeron?\" href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-vi-xu-ly-may-tinh-cpu-intel-596066#intelceleron\" target=\"_blank\" type=\"Intel Celeron?\">Intel Celeron</a>, RAM 2 GB, HDD 500 GB n&ecirc;n ph&ugrave; hợp với c&aacute;c bạn muốn chơi một số game nhẹ b&ecirc;n cạnh c&ocirc;ng việc soạn thảo &amp; c&oacute; nhu cầu lưu trữ tương đối cao.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">+ Tầm 6.5 &gt; dưới 7.5 triệu: Chip&nbsp;<a title=\"Intel Pentium?\" href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-vi-xu-ly-may-tinh-cpu-intel-596066#intelpentinum\" target=\"_blank\" type=\"Intel Pentium?\">Intel Pentium</a>&nbsp;chiếm đa số, RAM 2/4 GB tuỳ h&atilde;ng, HDD 500 GB d&agrave;nh cho c&aacute;c bạn đ&ograve;i hỏi hiệu năng nhanh hơn một x&iacute;u v&agrave; cũng cần nhiều kh&ocirc;ng gian lưu trữ dữ liệu tr&ecirc;n m&aacute;y.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">+ Khoảng 8 &gt; 11.5 triệu: Được trang bị chip&nbsp;<a title=\"Core i?\" href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-vi-xu-ly-may-tinh-cpu-intel-596066#corei\" target=\"_blank\" type=\"Core i?\">Intel Core i3</a>&nbsp;(chiếm đa số - đời, số hiệu kh&aacute;c nhau tuỳ h&atilde;ng), RAM hầu như 4 GB, HDD vẫn l&agrave; 500 GB th&iacute;ch hợp cho c&aacute;c bạn thường mang m&aacute;y đến trường nhờ chip tiết kiệm điện v&agrave; hiệu năng chạy t&aacute;c vụ cũng được cải thiện đ&aacute;ng kể.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><strong>3. Cấu h&igrave;nh khoẻ hoặc thời trang</strong></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Tất nhi&ecirc;n \"tiền n&agrave;o th&igrave; của ấy\", khi gi&aacute; trị của một chiếc laptop được t&iacute;nh bằng tiền chục triệu th&igrave; n&oacute; sẽ kh&aacute;c đi rất nhiều. Điểm dễ thấy đầu ti&ecirc;n ch&iacute;nh l&agrave; thiết kế tổng thể sẽ chỉn chu, trau chuốt v&agrave; kh&ocirc;ng c&ograve;n qu&aacute; th&ocirc;, d&agrave;y nữa. Thứ tiếp theo ch&iacute;nh l&agrave; cấu h&igrave;nh, d&ugrave; phần nhiều vẫn l&agrave; chip Intel Core i3 nhưng ch&uacute;ng lu&ocirc;n l&agrave; thế hệ mới, số hiệu c&oacute; tốc độ xử l&yacute; cao (c&oacute; m&aacute;y l&ecirc;n tận 2.2 GHz) đi c&ugrave;ng card đồ hoạ rời.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img title=\"Cấu h&igrave;nh khoẻ hoặc thời trang\" src=\"https://cdn4.tgdd.vn/Files/2016/03/22/806155/tvlaptop5.jpg\" alt=\"Cấu h&igrave;nh khoẻ hoặc thời trang\" /></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">V&agrave; ở gi&aacute; tiền n&agrave;y, bạn sẽ c&oacute; hai lựa chọn:</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">+ Th&iacute;ch c&aacute;i đẹp v&agrave; sự \"nhiệm m&agrave;u\": Chọn laptop xoay 360 độ như&nbsp;<a title=\"Laptop Lenovo Yoga 500 14IBD i3 5020U/4GB/500GB/Touch/Win10\" href=\"https://www.thegioididong.com/laptop/lenovo-yoga-500-14ibd-i3-5020u-4gb-500gb-touch-win\" target=\"_blank\" type=\"Laptop Lenovo Yoga 500 14IBD i3 5020U/4GB/500GB/Touch/Win10\">Lenovo Yoga 500</a>,&nbsp;<a title=\"Laptop Dell Inspiron 3148 i3 4030U/4GB/500GB/Win8.1\" href=\"https://www.thegioididong.com/laptop/dell-inspiron-3148\" target=\"_blank\" type=\"Laptop Dell Inspiron 3148 i3 4030U/4GB/500GB/Win8.1\">Dell Inspiron 3148</a>,... để sở hữu&nbsp;một thiết bị sang trọng, c&oacute; nhiều c&ocirc;ng dụng lạ v&agrave; hay&nbsp;tuy nhi&ecirc;n bạn phải đ&aacute;nh đổi cấu h&igrave;nh (ch&uacute;ng thường chỉ bằng laptop trong khoảng 8 &gt; 11.5 triệu đồng).</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">+ Cấu h&igrave;nh \"mu&ocirc;n năm\": H&atilde;y xem qua&nbsp;<a title=\"Laptop Acer E5 573G i5 5200U/4GB/500GB/VGA2GB/Win10\" href=\"https://www.thegioididong.com/laptop/acer-e5-573g-i5-5200u-4gb-500gb-vga2gb-win10\" target=\"_blank\" type=\"Laptop Acer E5 573G i5 5200U/4GB/500GB/VGA2GB/Win10\">Acer E5 573G</a>,&nbsp;<a title=\"Laptop Asus E402SA N3050/2GB/500GB/Win10\" href=\"https://www.thegioididong.com/laptop/asus-e402sa-n3050-2gb-500gb-win10\" target=\"_blank\" type=\"Laptop Asus E402SA N3050/2GB/500GB/Win10\">Asus A556UF</a>,... hai mẫu n&agrave;y đ&atilde; được trang bị chip Core i5 mới v&agrave; card đồ hoạ rời, th&iacute;ch hợp cho c&aacute;c bạn học chuy&ecirc;n ngh&agrave;nh thiết kế, x&acirc;y dựng,... với nhiệm vụ ho&agrave;n th&agrave;nh c&aacute;c bản vẽ kỹ thuật số.</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><strong>KẾT</strong></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Tựu chung, khi chọn mua laptop, bạn n&ecirc;n x&aacute;c định rằng bản th&acirc;n c&oacute; đang cần gấp ngay kh&ocirc;ng hay c&oacute; thể chờ đợi? Bởi v&igrave; đ&ocirc;i khi chỉ cần ch&ecirc;nh nhau gi&aacute; b&aacute;n từ 500k đến 1 triệu đồng th&igrave; cấu h&igrave;nh đ&atilde; c&oacute; nhiều thay đổi. Vậy n&ecirc;n, nếu c&oacute; thể bạn n&ecirc;n để d&agrave;nh th&ecirc;m một khoản để mua mẫu tốt hơn!</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Ngo&agrave;i ra, khi đ&atilde; b&agrave;n xong chuyện kinh tế th&igrave; bạn cũng n&ecirc;n c&acirc;n nhấc xem m&igrave;nh th&iacute;ch v&agrave; hay d&ugrave;ng thứ g&igrave; nhất. Chẳng hạn như chỉ cần một chiếc laptop để g&otilde; văn bản, lướt web,... (nh&agrave; c&oacute; m&aacute;y b&agrave;n để chiến game) th&igrave; tại sao phải đi mua m&aacute;y đắt gi&aacute; l&agrave;m g&igrave; phải kh&ocirc;ng n&agrave;o?</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img title=\"Mua mẫu tốt nhất trong khả năng\" src=\"https://cdn1.tgdd.vn/Files/2016/03/22/806155/tvlaptop4.jpg\" alt=\"Mua mẫu tốt nhất trong khả năng\" /></span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">B&ecirc;n tr&ecirc;n l&agrave; t&iacute; x&iacute;u hiểu biết của m&igrave;nh trong việc chọn mua laptop. Kh&ocirc;ng biết, bạn c&ograve;n đề xuất - gợi &yacute; n&agrave;o kh&aacute;c? Đừng ngại comment chia sẻ để b&agrave;i viết được ho&agrave;n thiện hơn nh&eacute;!</span></span></div>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Xem th&ecirc;m:</span></span></div>\r\n<ul>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><a title=\"C&aacute;ch chọn mua laptop ph&ugrave; hợp với nhu cầu sử dụng v&agrave; t&uacute;i tiền\" href=\"https://www.thegioididong.com/tin-tuc/cach-chon-mua-laptop-phu-hop-voi-nhu-cau-su-dung-va-tui-tien-803854\" target=\"_blank\" type=\"C&aacute;ch chọn mua laptop ph&ugrave; hợp với nhu cầu sử dụng v&agrave; t&uacute;i tiền\">C&aacute;ch chọn mua laptop ph&ugrave; hợp với nhu cầu sử dụng v&agrave; t&uacute;i tiền</a></span></span></div>\r\n</li>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><a title=\"3 laptop chạy Windows 10 độc quyền gi&aacute; tốt tại Thế giới di động\" href=\"https://www.thegioididong.com/tin-tuc/3-laptop-chay-windows-10-doc-quyen-gia-tot-tai-thegioididong-799805\" target=\"_blank\" type=\"3 laptop chạy Windows 10 độc quyền gi&aacute; tốt tại Thế giới di động\">3 laptop chạy Windows 10 độc quyền gi&aacute; tốt tại Thế giới di động</a></span></span></div>\r\n</li>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\"><a title=\"Nhanh tay sắm laptop đang c&oacute; ưu đ&atilde;i hấp dẫn tại Thế giới di động\" href=\"https://www.thegioididong.com/tin-tuc/nhung-laptop-dang-co-uu-dai-hap-dan-tai-thegioididong-com-803433\" target=\"_blank\" type=\"Nhanh tay sắm laptop đang c&oacute; ưu đ&atilde;i hấp dẫn tại Thế giới di động\">Nhanh tay sắm laptop đang c&oacute; ưu đ&atilde;i hấp dẫn tại Thế giới di động</a></span></span></div>\r\n</li>\r\n</ul>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Khi chọn mua laptop tại Thế giới di động trong th&aacute;ng 3/2016, bạn sẽ nhận được th&ecirc;m 4 ưu đ&atilde;i hấp dẫn, gồm:</span></span></div>\r\n<ul>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">T&iacute;ch hợp Windows 8.</span></span></div>\r\n</li>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Miễn ph&iacute; l&ecirc;n Windows 10.</span></span></div>\r\n</li>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">1 đổi 1 trong v&ograve;ng 01 th&aacute;ng (với m&aacute;y lỗi).</span></span></div>\r\n</li>\r\n<li>\r\n<div><span style=\"font-size: 16px;\"><span style=\"font-family: times new roman,times,serif;\">Office bản quyền chỉ 600.000 đồng (gi&aacute; b&aacute;n thường 1.300.000 đồng).</span></span></div>\r\n</li>\r\n</ul>', '2016-08-20 16:59:50', 'frontend/web/uploads/tintuc/latptop-student.jpg', '95', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('1', 'admin', '3M_a6-7Jt_MxV6MsVA2cOn_K_MB8PL6e', '$2y$13$dnvznedlo7hC2i7o/HNIzunfcNN4KkwfZqwUCDpT5tZwsKoeR1CqC', null, 'kienkienutc95@gmail.com', '10', '1469087753', '1469087753');

-- ----------------------------
-- Table structure for `vanchuyen`
-- ----------------------------
DROP TABLE IF EXISTS `vanchuyen`;
CREATE TABLE `vanchuyen` (
  `MaVC` int(11) NOT NULL AUTO_INCREMENT,
  `TenVC` varchar(255) NOT NULL,
  `Mota` varchar(255) NOT NULL,
  `Trangthai` int(1) NOT NULL,
  PRIMARY KEY (`MaVC`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vanchuyen
-- ----------------------------
INSERT INTO vanchuyen VALUES ('1', 'Giao tận nhà.', '#', '1');
INSERT INTO vanchuyen VALUES ('2', 'Chuyển phát nhanh', '#', '1');
