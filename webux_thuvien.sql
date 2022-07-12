-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 20, 2022 lúc 10:49 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webux_thuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `so_tai_khoan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngan_hang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chi_nhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `user_id`, `so_tai_khoan`, `main`, `ten_tai_khoan`, `ngan_hang`, `chi_nhanh`, `ghi_chu`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '0491000026886', 'on', 'Pham Hoang thi', 'Vietcombank', 'Thăng Long', NULL, 'on', '2021-11-29 21:39:05', '2021-11-29 21:39:05'),
(5, 2, '21321', NULL, '321', '321', '321', '213', 'on', '2021-11-30 12:13:50', '2021-11-30 12:13:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_pages` double DEFAULT NULL,
  `dientich` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(50) DEFAULT NULL,
  `so_luong_waiting` int(11) NOT NULL DEFAULT 0,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_rent` int(11) DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `CII` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `huyen_id` int(11) DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id`, `code`, `name`, `author`, `company_id`, `price`, `num_pages`, `dientich`, `soluong`, `so_luong_waiting`, `type`, `status`, `count_rent`, `img`, `url`, `store_id`, `content`, `des`, `release`, `created_at`, `updated_at`, `CII`, `seo_title`, `seo_des`, `key_seo`, `index_meta`, `canon`, `tinh_id`, `huyen_id`, `truong_id`) VALUES
(20, '2', 'Bé Tập Kể Chuyện - Chuột Nhắt Lười Học', 'Nhiều Tác Giả', '4', '85000', 3123, '12x12', 10, 7, NULL, 'on', 4, 'image_83816.jpg', 'be-tap-ke-chuyen-chuot-nhat-luoi-hoc', 15, '<p><span>B&eacute; Tập Kể Chuyện - Chuột Nhắt Lười Học Dựa tr&ecirc;n bộ s&aacute;ch B&eacute; tập kể chuyện đ&atilde; xuất bản, bộ s&aacute;ch B&eacute; tập kể chuyện - Mỗi tuần một c&acirc;u chuyện được ra đời. Với n&eacute;t vẽ tươi mới, hồn nhi&ecirc;n, 52 tập, tương ứng với 52 tuần trong một năm, gi&uacute;p b&eacute; mỗi tuần đều c&oacute; một c&acirc;u chuyện hấp dẫn để tập kể, qua đ&oacute; học được một b&agrave;i học hay.</span></p>', NULL, '2022-05-08 17:00:00', '2022-05-09 10:34:19', '2022-06-12 09:41:10', 'X#', NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 27, 221, NULL),
(27, 'HNOOO1', 'Hài Hước Một Chút Thế Giới Sẽ Khác Đi (Tái Bản 2021)', 'Lưu Chấn Hồng', '4', '500000', NULL, NULL, 100, 0, NULL, 'on', 1, 'image_244718_1_2850.jpg', 'hai-huoc-mot-chut-the-gioi-se-khac-di-tai-ban-2021', 13, '<p><strong>H&agrave;i Hước Một Ch&uacute;t Thế Giới Sẽ Kh&aacute;c Đi</strong></p>\r\n<p><em><strong>Trong x&atilde; hội hiện đại, giao tiếp l&agrave; ch&igrave;a kh&oacute;a giải quyết mọi vấn đề. Vậy l&agrave;m thế n&agrave;o để giao tiếp hiệu quả? Đ&oacute; l&agrave; biết vận dụng một c&aacute;ch tinh tế sự h&agrave;i hước v&agrave;o lời n&oacute;i v&agrave; tư duy, h&agrave;i hước c&oacute; thể gi&uacute;p gi&uacute;p ch&uacute;ng ta thiết lập được mạng lưới quan hệ rộng r&atilde;i. Tuy nhi&ecirc;n, h&agrave;i hước kh&ocirc;ng phải l&agrave; một năng lực bẩm sinh, muốn c&oacute; được &ldquo;nghệ thuật gi&uacute;p bạn th&agrave;nh c&ocirc;ng&rdquo; n&agrave;y, bạn phải trải qua qu&aacute; t&igrave;nh bồi dưỡng v&agrave; r&egrave;n luyện bản th&acirc;n.</strong></em></p>\r\n<p><strong><em>H&agrave;i hước một ch&uacute;t, thế giới sẽ kh&aacute;c đi</em></strong><span>&nbsp;</span>- cuốn s&aacute;ch với nội dung phong ph&uacute; m&agrave; s&acirc;u sắc n&agrave;y sẽ gi&uacute;p c&aacute;c bạn c&oacute; được c&aacute;i nh&igrave;n r&otilde; n&eacute;t hơn về t&iacute;nh h&agrave;i hước dưới c&aacute;c g&oacute;c độ, phương diện đ&aacute;nh gi&aacute; kh&aacute;c nhau, cũng như c&oacute; th&ecirc;m kĩ năng vận dụng sự h&agrave;i hước v&agrave;o cuộc sống h&agrave;ng ng&agrave;y.</p>\r\n<p><strong>L&agrave;m thế n&agrave;o để trở th&agrave;nh người t&agrave;i giỏi h&agrave;i hước?</strong></p>', NULL, '2022-11-01 17:00:00', '2022-05-14 08:40:06', '2022-06-10 07:11:05', NULL, NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 27, 169, NULL),
(26, '3', 'I Will Be Better - Những Câu Chuyện Truyền Cảm Hứng: Con Sẽ Tự Giác', 'Yunan', '4', '47500', NULL, NULL, NULL, 0, NULL, 'on', NULL, 'image_195509_1_7128-2.jpg', 'i-will-be-better-nhung-cau-chuyen-truyen-cam-hung-con-se-tu-giac', 18, NULL, NULL, '2022-09-05 17:00:00', '2022-05-14 08:38:35', '2022-06-09 04:39:31', NULL, NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 41, 368, NULL),
(21, '1', 'Hoàng Tử Bé (Tái Bản 2020)', 'Saint Exupery', NULL, '36800', 111, '12x12', 30, 0, NULL, 'on', NULL, 'image_200754-7.jpg', 'hoang-tu-be-tai-ban-2020', 20, '<p><span>C&acirc;u chuyện về một phi c&ocirc;ng phải hạ c&aacute;nh khẩn cấp trong sa mạc. Anh gặp một cậu b&eacute;, người h&oacute;a ra l&agrave; một ho&agrave;ng tử từ h&agrave;nh tinh kh&aacute;c đến. Ho&agrave;ng tử kể về những cuộc phi&ecirc;u lưu của em tr&ecirc;n Tr&aacute;i Đất v&agrave; về b&ocirc;ng hồng qu&iacute; gi&aacute; tr&ecirc;n h&agrave;nh tinh của em. Em thất vọng khi ph&aacute;t hiện ra hoa hồng l&agrave; lo&agrave;i b&igrave;nh thường như bao lo&agrave;i kh&aacute;c tr&ecirc;n Tr&aacute;i Đất. Một con c&aacute;o sa mạc khuy&ecirc;n em n&ecirc;n y&ecirc;u thương ch&iacute;nh b&ocirc;ng hồng của em v&agrave; h&atilde;y t&igrave;m kiếm trong đ&oacute; &yacute; nghĩa của cuộc đời m&igrave;nh. Nhận ra điều ấy, ho&agrave;ng tử quay trở về h&agrave;nh tinh của em.</span></p>', NULL, '2022-07-04 17:00:00', '2022-05-09 17:03:16', '2022-06-10 06:57:39', 'cii2', NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 27, 14, NULL),
(28, NULL, 'Tuyển Tập Truyện Hay Dành Cho Thiếu Nhi 2 (Tái Bản 2020)', 'William J Bennett', '6', '38400', NULL, NULL, NULL, 0, NULL, 'on', NULL, 'tuyentaptruyenthieunhi2_48k-01_bia-1.jpg', 'tuyen-tap-truyen-hay-danh-cho-thieu-nhi-2-tai-ban-2020', 18, '<p>Ng&agrave;y nay, mối quan t&acirc;m h&agrave;ng đầu của c&aacute;c bậc phụ huynh l&agrave; l&agrave;m thế n&agrave;o để gi&uacute;p con trẻ ph&aacute;t triển to&agrave;n diện, cả về thể chất, tinh thần v&agrave; tr&iacute; tuệ. B&ecirc;n cạnh sự tr&ocirc;ng đợi v&agrave;o gi&aacute;o dục trong nh&agrave; trường, c&aacute;c bậc phụ huynh c&oacute; thể gi&uacute;p con m&igrave;nh đạt được mục ti&ecirc;u n&agrave;y bằng c&aacute;ch dẫn dắt c&aacute;c em đến với thế giới của những c&acirc;u chuyện c&oacute; khả năng khơi gợi t&igrave;nh y&ecirc;u thương, l&ograve;ng tốt v&agrave; tinh thần cao thượng. Đ&oacute; ch&iacute;nh l&agrave; l&yacute; do khiến ch&uacute;ng t&ocirc;i thực hiện v&agrave; giới thiệu bộ s&aacute;ch &ldquo;<strong>Tuyển tập truyện hay d&agrave;nh cho thiếu nhi</strong>&rdquo; n&agrave;y.</p>\r\n<p>Bộ s&aacute;ch gồm 4 tập n&agrave;y bao gồm những c&acirc;u chuyện cổ t&iacute;ch từ khắp nơi tr&ecirc;n thế giới.; những chuyện kể trong kinh s&aacute;ch hay trong c&aacute;c sử thi nổi tiếng; chuyện kể về c&aacute;c danh nh&acirc;n hay một số t&aacute;c phẩm của c&aacute;c nh&agrave; văn t&ecirc;n tuổi. Đặc điểm chung của những c&acirc;u chuyện n&agrave;y l&agrave; ca ngợi t&igrave;nh y&ecirc;u thương; t&igrave;nh bạn, t&igrave;nh th&acirc;n cao đẹp c&ugrave;ng những con người sẵn s&agrave;ng hy sinh cho nhau. Qua những c&acirc;u chuyện hấp dẫn v&agrave; l&yacute; th&uacute;, trẻ sẽ được khơi gợi những đức t&iacute;nh tốt đẹp như l&ograve;ng dũng cảm, sự trung thực, ch&acirc;n th&agrave;nh&hellip;</p>', NULL, '2022-05-04 17:00:00', '2022-05-14 08:41:46', '2022-06-14 08:26:21', NULL, NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 41, 368, NULL),
(29, NULL, 'Charlotte Và Wilbur (Tái Bản 2018)', 'E.B.White', NULL, '850000', NULL, NULL, 10, 0, NULL, 'on', NULL, 'image_169918.jpg', 'charlotte-va-wilbur-tai-ban-2018', NULL, '<p>Charlotte V&agrave; Wilbur (T&aacute;i Bản 2018)</p>\r\n<p>\"Một cuốn s&aacute;ch xuất ch&uacute;ng d&agrave;nh cho thiếu nhi.\" (The Times Literary Supplement)</p>\r\n<p>Wilbur, ch&uacute; lợn xu&acirc;n cứ đinh ninh m&igrave;nh sẽ vui hưởng th&aacute;i b&igrave;nh m&atilde;i trong trang trại nh&agrave; Zuckerman, thế n&ecirc;n, ch&uacute; tưởng như ph&aacute;t cuồng l&ecirc;n được khi biết rằng người ta sẽ giết thịt ch&uacute; khi m&ugrave;a đ&ocirc;ng tới... Mọi hy vọng của ch&uacute;, giờ đ&acirc;y, chỉ c&ograve;n biết đổ dồn lại v&agrave;o Charlotte, chị nhện x&aacute;m vẫn tĩnh tại giăng mắc ở tr&ecirc;n chuồng lợn...</p>\r\n<p>Charlotte v&agrave; Wilbur, c&acirc;u chuyện kể về việc một con nhện đ&atilde; cứu sống con lợn bạn m&igrave;nh như thế n&agrave;o, l&agrave; t&aacute;c phẩm kinh điển của văn học thiếu nhi Mỹ; v&agrave; t&igrave;nh bạn của ch&uacute;ng đ&atilde; được h&agrave;ng triệu độc giả tr&ecirc;n thế giới c&ugrave;ng chia sẻ.</p>', NULL, '2022-05-09 17:00:00', '2022-05-14 08:42:31', '2022-06-09 04:51:07', NULL, NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 41, 117, NULL),
(30, '7', 'Bách Khoa Thư Trẻ Em - Cuốn Sách Lí Giải Vạn Vật', 'DK', '4', '850000', NULL, NULL, 30, 0, NULL, 'on', NULL, 'bach-khoa-thu-tia-1.jpg', 'bach-khoa-thu-tre-em-cuon-sach-li-giai-van-vat', 16, '<p><span>Lu&ocirc;n nằm trong top s&aacute;ch b&aacute;n chạy v&agrave; được cập nhật kiến thức mới nhất,&nbsp;</span><em>B&aacute;ch khoa thư trẻ em &ndash; Cuốn s&aacute;ch l&iacute; giải vạn vật</em><span>&nbsp;c&oacute; lối tr&igrave;nh b&agrave;y mạch lạc, khoa học, l&agrave; cuốn s&aacute;ch thiết yếu cho mọi tủ s&aacute;ch thiếu nhi. Mở đầu, phần &ldquo;Hướng dẫn sử dụng&rdquo; sẽ kh&aacute;i qu&aacute;t cuốn s&aacute;ch cũng như gi&uacute;p c&aacute;c bạn đọc nhỏ tuổi thuận tiện trong việc đọc v&agrave; tra cứu. Tiếp đ&oacute;, nội dung được chia th&agrave;nh ch&iacute;n lĩnh vực gồm nhiều chủ đề, mỗi chủ đề g&oacute;i gọn trong một trang đơn. Chẳng hạn, lĩnh vực C&ocirc;ng nghệ n&oacute;i về c&aacute;ch hoạt động của m&aacute;y bay, robot...; lĩnh vực Vũ trụ giải th&iacute;ch hố đen l&agrave; g&igrave;, ng&ocirc;i sao h&igrave;nh th&agrave;nh v&agrave; chết đi ra sao&hellip; Xen kẽ l&agrave; c&aacute;c trang đ&ocirc;i diễn giải một chủ đề theo tư duy li&ecirc;n kết giữa c&aacute;c lĩnh vực, như &ldquo;C&acirc;u chuyện về mật m&atilde;&rdquo; thuật lại lịch sử của mật m&atilde; (ra đời, ph&aacute;t triển&hellip;) v&agrave; c&aacute;ch sử dụng mật m&atilde;...&nbsp;</span></p>', NULL, '2022-05-08 17:00:00', '2022-05-14 13:59:53', '2022-06-08 15:23:37', NULL, NULL, NULL, NULL, 'INDEX, FOLLOW', 'off', 27, 96, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_cat`
--

DROP TABLE IF EXISTS `book_cat`;
CREATE TABLE IF NOT EXISTS `book_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book_cat`
--

INSERT INTO `book_cat` (`id`, `book_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(87, 31, 31, '2022-05-25 09:50:52', '2022-05-25 09:50:52'),
(155, 30, 11, '2022-06-08 15:23:37', '2022-06-08 15:23:37'),
(156, 30, 19, '2022-06-08 15:23:37', '2022-06-08 15:23:37'),
(157, 30, 17, '2022-06-08 15:23:37', '2022-06-08 15:23:37'),
(158, 30, 10, '2022-06-08 15:23:37', '2022-06-08 15:23:37'),
(159, 69, 11, '2022-06-09 04:37:15', '2022-06-09 04:37:15'),
(160, 70, 11, '2022-06-09 04:37:16', '2022-06-09 04:37:16'),
(161, 71, 11, '2022-06-09 04:37:16', '2022-06-09 04:37:16'),
(162, 72, 11, '2022-06-09 04:37:16', '2022-06-09 04:37:16'),
(163, 73, 11, '2022-06-09 04:37:16', '2022-06-09 04:37:16'),
(164, 74, 11, '2022-06-09 04:37:16', '2022-06-09 04:37:16'),
(165, 75, 11, '2022-06-09 04:37:16', '2022-06-09 04:37:16'),
(166, 27, 11, '2022-06-09 04:38:10', '2022-06-09 04:38:10'),
(167, 27, 10, '2022-06-09 04:38:10', '2022-06-09 04:38:10'),
(168, 21, 10, '2022-06-09 04:39:02', '2022-06-09 04:39:02'),
(169, 26, 14, '2022-06-09 04:39:31', '2022-06-09 04:39:31'),
(170, 26, 10, '2022-06-09 04:39:31', '2022-06-09 04:39:31'),
(171, 26, 13, '2022-06-09 04:39:31', '2022-06-09 04:39:31'),
(175, 20, 14, '2022-06-09 04:42:05', '2022-06-09 04:42:05'),
(176, 20, 10, '2022-06-09 04:42:05', '2022-06-09 04:42:05'),
(177, 20, 13, '2022-06-09 04:42:05', '2022-06-09 04:42:05'),
(178, 76, 11, '2022-06-09 04:42:31', '2022-06-09 04:42:31'),
(179, 77, 14, '2022-06-09 04:42:31', '2022-06-09 04:42:31'),
(180, 78, 14, '2022-06-09 04:42:31', '2022-06-09 04:42:31'),
(181, 79, 11, '2022-06-09 04:42:32', '2022-06-09 04:42:32'),
(182, 80, 14, '2022-06-09 04:42:32', '2022-06-09 04:42:32'),
(183, 81, 10, '2022-06-09 04:42:32', '2022-06-09 04:42:32'),
(184, 82, 14, '2022-06-09 04:42:32', '2022-06-09 04:42:32'),
(194, 29, 14, '2022-06-09 04:51:07', '2022-06-09 04:51:07'),
(195, 29, 10, '2022-06-09 04:51:07', '2022-06-09 04:51:07'),
(196, 29, 13, '2022-06-09 04:51:07', '2022-06-09 04:51:07'),
(203, 28, 14, '2022-06-14 08:26:21', '2022-06-14 08:26:21'),
(204, 28, 10, '2022-06-14 08:26:21', '2022-06-14 08:26:21'),
(205, 28, 13, '2022-06-14 08:26:21', '2022-06-14 08:26:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat`
--

DROP TABLE IF EXISTS `cat`;
CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title_seo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cat`
--

INSERT INTO `cat` (`id`, `name`, `img`, `url`, `des`, `parent_id`, `title_seo`, `des_seo`, `key_seo`, `status`, `canon`, `type`, `orderby`, `index_meta`, `created_at`, `updated_at`, `icon`) VALUES
(14, 'Truyện tranh', '', 'truyen-tranh', NULL, 31, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-14 08:24:05', '2022-05-16 15:05:14', NULL),
(15, 'Học tập', '', 'hoc-tap', NULL, 0, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-14 10:12:17', '2022-05-14 10:12:17', NULL),
(16, 'Ngoại ngữ', '', 'ngoai-ngu', NULL, 0, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-14 10:12:24', '2022-05-14 10:12:24', NULL),
(10, 'Sách thiếu nhi', '', 'sach-thieu-nhi', NULL, 0, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-14 08:23:09', '2022-05-14 08:23:09', NULL),
(11, 'Sách khoa học', '', 'sach-khoa-hoc', NULL, 31, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-14 08:23:20', '2022-05-16 15:05:01', NULL),
(12, 'Sách Văn học', '', 'sach-van-hoc', NULL, 31, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-14 08:23:37', '2022-05-16 15:04:40', NULL),
(13, 'Sách giáo khoa', '', 'sach-giao-khoa', NULL, 10, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-14 08:23:47', '2022-05-14 08:23:47', NULL),
(17, 'Kỹ Năng', '', 'ky-nang', NULL, 0, NULL, NULL, NULL, 'on', 'off', 'product', NULL, 'INDEX, FOLLOW', '2022-05-14 10:12:30', '2022-05-16 11:09:53', NULL),
(18, 'Sách toán', '', 'sach-toan', NULL, 0, NULL, NULL, NULL, 'on', 'off', 'product', NULL, 'INDEX, FOLLOW', '2022-05-14 10:48:00', '2022-05-16 11:09:49', NULL),
(19, 'Sách địa lý', '', 'sach-dia-ly', NULL, 0, NULL, NULL, NULL, 'on', 'off', 'product', NULL, 'INDEX, FOLLOW', '2022-05-14 10:48:06', '2022-05-16 11:09:23', NULL),
(20, 'Bài viết', '', 'bai-viet', NULL, 0, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 11:09:10', '2022-05-16 11:17:23', NULL),
(21, 'Tin tức & sự kiện', '', 'tin-tuc', NULL, 0, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 11:17:15', '2022-05-16 11:34:48', NULL),
(22, 'Audio book', '', 'audio-book', NULL, 0, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 13:52:18', '2022-05-16 13:52:18', NULL),
(23, 'Chương trình đào tạo', '', 'chuong-trinh-dao-tao', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:52:20', '2022-05-16 15:01:43', NULL),
(24, 'chính sách - hướng dẫn mở thẻ', '', 'chinh-sach-huong-dan-mo-the', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'service', NULL, 'INDEX, FOLLOW', '2022-05-16 14:53:58', '2022-05-16 15:00:18', NULL),
(25, 'kế hoạch hoạt động', '', 'ke-hoach-hoat-dong', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:54:57', '2022-05-16 15:00:46', NULL),
(26, 'đăng kí dự thi', '', 'dang-ki-du-thi', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:56:56', '2022-05-16 15:01:55', NULL),
(27, 'danh sách trường', '', 'danh-sach-truong', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:57:13', '2022-05-16 15:02:12', NULL),
(28, 'tin tức sự kiện', '', 'tin-tuc-su-kien', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:57:22', '2022-05-16 15:00:05', NULL),
(29, 'Trường học', '', 'truong-hoc', NULL, 0, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 14:57:54', '2022-05-16 14:57:54', NULL),
(30, 'TV Mầm Non', '', 'tv-mam-non', NULL, 29, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 14:58:26', '2022-05-16 14:58:26', NULL),
(31, 'TV Tiểu Học', '', 'tv-tieu-hoc', NULL, 29, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 14:58:46', '2022-05-16 14:58:46', NULL),
(32, 'TV THCS', '', 'tv-thcs', NULL, 29, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 14:59:12', '2022-05-16 14:59:12', NULL),
(33, 'TV giáo viên', '', 'tv-giao-vien', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:59:23', '2022-05-16 14:59:48', NULL),
(34, 'Nội Quy TV', '', 'noi-quy-tv', NULL, 29, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 14:59:59', '2022-05-16 15:02:45', NULL),
(35, 'Sách học tập', '', 'sach-hoc-tap', NULL, 31, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 15:03:11', '2022-05-16 15:03:11', NULL),
(36, 'sách kĩ năng', '', 'sach-ki-nang', NULL, 31, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 15:03:30', '2022-05-16 15:03:30', NULL),
(37, 'sách ngoại ngữ', '', 'sach-ngoai-ngu', NULL, 31, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-16 15:03:44', '2022-05-16 15:03:44', NULL),
(40, 'Thông báo', '', 'thong-bao', NULL, 0, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-16 15:52:55', '2022-05-16 15:52:58', NULL),
(41, 'Đối tác', '', 'doi-tac', NULL, 0, NULL, NULL, NULL, 'off', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-05-31 04:42:01', '2022-06-11 22:24:20', NULL),
(42, 'Phòng giáo dục Hà Nội', '', 'phong-giao-duc-ha-noi', NULL, 42, NULL, NULL, NULL, 'on', 'off', 'news', NULL, 'INDEX, FOLLOW', '2022-05-31 04:47:58', '2022-06-01 02:23:46', NULL),
(46, 'PGD Quận Ba Đình', '', 'pgd-quan-ba-dinh', NULL, 42, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-06-01 02:19:47', '2022-06-01 02:19:47', NULL),
(47, 'PGD Huyện Ba Vì', '', 'pgd-huyen-ba-vi', NULL, 42, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-06-01 02:20:38', '2022-06-01 02:20:38', NULL),
(48, 'PGD Quận Cầu Giấy', '', 'pgd-quan-cau-giay', NULL, 42, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-06-01 02:22:53', '2022-06-01 02:22:53', NULL),
(49, 'PGD Huyện Chương Mỹ', '', 'pgd-huyen-chuong-my', NULL, 42, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-06-01 02:23:14', '2022-06-01 02:23:14', NULL),
(50, 'PGD Huyện Đan Phượng', '', 'pgd-huyen-dan-phuong', NULL, 42, NULL, NULL, NULL, 'on', 'off', NULL, NULL, 'INDEX, FOLLOW', '2022-06-01 02:23:38', '2022-06-01 02:23:38', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`id`, `name`, `status`, `type`, `updated_at`, `created_at`) VALUES
(1, 'Lớp 2a1', 'on', NULL, NULL, NULL),
(2, 'Lớp 2a2', 'on', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `img`, `name`, `tel`, `email`, `user_id`, `book_id`, `review`, `status`, `updated_at`, `created_at`) VALUES
(6, 'ávadsv', NULL, 'Admin', '0966130168', NULL, NULL, 20, '2', 'on', '2022-05-18 08:57:57', '2022-05-18 08:57:57'),
(7, 'váv', '', 'Admin', '0966130168', NULL, NULL, 20, '1', 'on', '2022-05-18 09:10:25', '2022-05-18 09:10:25'),
(8, 'vávas', 'image 3-2.png', 'Admin', '0966130168', NULL, NULL, 27, '5', 'on', '2022-05-18 09:19:02', '2022-05-18 09:15:11'),
(9, 'vávasdbf', NULL, NULL, NULL, NULL, NULL, 20, '2', 'on', '2022-05-18 09:44:51', '2022-05-18 09:44:51'),
(10, 'vávasv', NULL, NULL, NULL, NULL, NULL, 20, '4', 'on', '2022-05-18 09:45:35', '2022-05-18 09:45:35'),
(11, 'vasa', NULL, 'Admin', '0966130168', NULL, NULL, 26, '4', 'on', '2022-05-18 09:55:20', '2022-05-18 09:55:20'),
(12, 'vávabf', NULL, 'Admin', '0966130168', NULL, NULL, 27, '2', 'on', '2022-05-18 09:56:10', '2022-05-18 09:56:10'),
(13, NULL, NULL, 'Admin', '0966130168', NULL, NULL, 27, '3', 'on', '2022-05-18 10:09:57', '2022-05-18 10:09:57'),
(14, 'fsdfds', NULL, 'Admin', '0966130168', NULL, NULL, 27, '3', 'off', '2022-05-18 10:12:38', '2022-05-18 10:12:38'),
(15, 'sách quá hay', NULL, 'Admin', '0966130168', NULL, 1, 29, '4', 'on', '2022-05-21 10:25:27', '2022-05-21 01:54:36'),
(17, 'test', NULL, 'Admin', '0966130168', NULL, 1, 20, '0', 'off', '2022-05-31 05:11:48', '2022-05-31 05:11:48'),
(18, '1', NULL, 'Admin', '0966130168', NULL, 1, 20, '0', 'off', '2022-05-31 09:31:58', '2022-05-31 09:31:58'),
(19, '2', NULL, 'Admin', '0966130168', NULL, 1, 20, '5', 'on', '2022-05-31 09:32:47', '2022-05-31 09:32:47'),
(20, NULL, NULL, 'Admin', '0966130168', NULL, 1, 20, '5', 'on', '2022-05-31 09:34:30', '2022-05-31 09:34:30'),
(21, 'Sách hay cho bé', NULL, 'Admin', '0966130168', NULL, 1, 20, '0', 'on', '2022-05-31 09:34:47', '2022-05-31 09:34:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `code`, `name`, `des`, `status`, `address`, `created_at`, `updated_at`) VALUES
(3, 'KĐ', 'Kim đồng', 'Báo kim đồng', 'on', 'Hà nội', '2022-05-05 02:41:50', '2022-05-16 15:16:48'),
(4, 'TT', 'Thanh niên', 'Báo thanh niên', 'on', 'Đà nẵng', '2022-05-05 02:48:28', '2022-05-16 15:16:40'),
(6, 'TP', 'Tiền Phong', NULL, 'on', 'Hà Nội', '2022-05-16 15:47:16', '2022-05-16 15:47:16'),
(7, 'LĐ', 'NXB Lao Động', NULL, 'on', 'Hà Nội', '2022-05-16 15:47:47', '2022-05-16 15:47:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_sp` int(11) DEFAULT NULL,
  `to_sp` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id`, `value`, `title`, `name`, `from_sp`, `to_sp`, `type`, `updated_at`, `created_at`) VALUES
(1, '40', 'Hoa hồng đại lý', 'percen_coupon', NULL, NULL, 'coupon', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(2, '20', 'Số lượng/tháng', 'percen_discount_1', 1, 40, 'discount', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(3, '23', 'Số lượng/tháng', 'percen_discount_2', 41, 70, 'discount', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(4, '26', 'Số lượng/tháng', 'percen_discount_3', 71, 200, 'discount', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(5, '30', 'Số lượng/tháng', 'percen_discount_4', 201, 0, 'discount', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(6, 'Hoa hồng đại lý được tính căn cứ vào số lượng đơn hàng bạn bán được thành công theo tháng. Cụ thể như sau:', 'Ghi chú hoa hồng đại lý', 'noti_coupon', NULL, NULL, 'coupon', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(7, '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/2Wj1R5-RSK0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p><strong><em><u>V&iacute; dụ:</u></em></strong></p>\r\n<p>1.Th&aacute;ng 11/2017 bạn được ghi nhận 71 đơn h&agrave;ng th&agrave;nh c&ocirc;ng với doanh thu l&agrave; 42,600,000 VND. Tiền hoa hồng của bạn l&agrave;:</p>\r\n<p>26% * 42,600,000 = 11,076,000 VND</p>\r\n<p>2.Th&aacute;ng 11/2017 bạn được ghi nhận 202 đơn h&agrave;ng th&agrave;nh c&ocirc;ng với doanh thu l&agrave; 121,200,000 VND. Tiền hoa hồng của bạn l&agrave;:</p>\r\n<p>30%* 121,200,000 = 36,360,000 VND</p>', 'Video hướng dẫn hoa hồng', 'content_coupon', NULL, NULL, 'coupon', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(8, '1000000', 'Hạn mức thanh toán', 'pay_limit', NULL, NULL, 'coupon', '2021-12-01 03:04:51', '0000-00-00 00:00:00'),
(9, '8', 'Chọn bài viết câu hỏi thường gặp', 'post_faq', NULL, NULL, 'setting_post', '2021-12-01 03:04:57', '0000-00-00 00:00:00'),
(10, '9', 'Chọn bài viết Video hướng dẫn', 'post_tut_video', NULL, NULL, 'setting_post', '2021-12-01 03:04:57', '0000-00-00 00:00:00'),
(11, '10', 'Bài viết hướng dẫn cách bán hàng', 'post_tut_slase', NULL, NULL, 'setting_post', '2021-12-01 03:04:57', '0000-00-00 00:00:00'),
(12, '11', 'Bài viết tài liệu hướng dẫn', 'post_tut_file', NULL, NULL, 'setting_post', '2021-12-01 03:04:57', '0000-00-00 00:00:00'),
(13, '12', 'Bài viết điều khoản', 'post_policy', NULL, NULL, 'setting_post', '2021-12-01 03:04:57', '0000-00-00 00:00:00'),
(14, '7', 'Danh mục hướng dẫn', 'cat_tut', NULL, NULL, 'setting_cat', '2021-12-01 03:04:57', '0000-00-00 00:00:00'),
(15, '8', 'Danh mục thông báo', 'cat_noti', NULL, NULL, 'setting_cat', '2021-12-01 03:04:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content_comment`
--

DROP TABLE IF EXISTS `content_comment`;
CREATE TABLE IF NOT EXISTS `content_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `content_comment`
--

INSERT INTO `content_comment` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sách hay cho bé', 'on', '2022-05-31 09:16:08', '2022-05-31 09:16:08'),
(2, 'Sách hay cho bé lớp 1', 'on', '2022-05-31 09:20:15', '2022-05-31 09:20:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deposit`
--

DROP TABLE IF EXISTS `deposit`;
CREATE TABLE IF NOT EXISTS `deposit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ngay_nop` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custome_email` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_send_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_receive_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `care` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_hong`
--

DROP TABLE IF EXISTS `hoa_hong`;
CREATE TABLE IF NOT EXISTS `hoa_hong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `han_muc_min` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `han_muc_max` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_hong`
--

INSERT INTO `hoa_hong` (`id`, `user_id`, `han_muc_min`, `han_muc_max`, `commission`, `created_at`, `updated_at`) VALUES
(6, 1, '0', '8000000', 2, '2022-05-28 06:17:40', '2022-05-28 06:17:40'),
(7, 1, '8000001', '2000000', 3, '2022-05-28 06:17:49', '2022-05-28 06:17:49'),
(8, 1, '20000001', '0', 5, '2022-05-28 06:13:28', '2022-05-28 06:13:28'),
(10, 4, '0', '100000', 10, '2022-05-28 08:03:04', '2022-05-28 08:03:04'),
(11, 4, '100001', '1000000', 15, '2022-05-28 08:03:17', '2022-05-28 08:03:17'),
(12, 4, '1000001', '0', 20, '2022-05-28 08:03:35', '2022-05-28 08:03:35'),
(13, 105, '0', '2000000', 5, '2022-06-02 15:32:25', '2022-06-02 15:32:25'),
(14, 105, '2000001', '10000000', 6, '2022-06-02 15:32:58', '2022-06-02 15:32:58'),
(15, 105, '10000001', '50000000', 7, '2022-06-02 15:33:24', '2022-06-02 15:33:24'),
(16, 167, '1000', '10000', 1, '2022-06-12 08:52:18', '2022-06-12 08:52:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huyen`
--

DROP TABLE IF EXISTS `huyen`;
CREATE TABLE IF NOT EXISTS `huyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinh_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=679 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huyen`
--

INSERT INTO `huyen` (`id`, `name`, `url`, `tinh_id`, `code`, `status`, `type`, `address`, `tel`, `tel_2`, `website`, `email`, `note`, `orderby`, `updated_at`, `created_at`) VALUES
(1, 'A Lưới', 'a-luoi', 57, 'AL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(2, 'An Biên', 'an-bien', 33, 'AB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(3, 'An Dương', 'an-duong', 26, 'AD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(4, 'An Khê', 'an-khe', 21, 'AK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(5, 'An Lão', 'an-lao', 8, 'AL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(6, 'An Minh', 'an-minh', 33, 'AM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(7, 'An Nhơn', 'an-nhon', 8, 'AN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(8, 'An Phú', NULL, 1, 'AP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:39:05', '2020-07-31 12:01:41'),
(9, 'Anh Sơn', 'anh-son', 41, 'AS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(10, 'Ayun Pa', 'ayun-pa', 21, 'AP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(11, 'Ân Thi', 'an-thi', 31, 'ÂT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(12, 'Ba Bể', 'ba-be', 3, 'BB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(13, 'Ba Chẽ', 'ba-che', 49, 'BC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(14, 'Ba Đình', NULL, 27, 'BD', 'on', NULL, 'ew', 'ew', 'ewr', 'ưer', 'we@fsdf.sdf', NULL, 1, '2022-02-22 03:58:51', '2020-07-31 12:01:41'),
(15, 'Ba Đồn', NULL, 46, 'BD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:14:40', '2020-07-31 12:01:41'),
(16, 'Ba Tơ', 'ba-to', 48, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(17, 'Ba Tri', 'ba-tri', 7, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(18, 'Ba Vì', 'ba-vi', 27, 'BV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-02-22 03:58:51', '2020-07-31 12:01:41'),
(19, 'Bà Rịa', 'ba-ria', 6, 'BR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(20, 'Bá Thước', 'ba-thuoc', 56, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(21, 'Bác Ái', 'bac-ai', 43, 'BÁ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(22, 'TP Bạc Liêu', 'tp-bac-lieu', 4, 'TBL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(23, 'Bạch Long Vĩ', 'bach-long-vi', 26, 'BLV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(24, 'Bạch Thông', 'bach-thong', 3, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(25, 'Bảo Lạc', 'bao-lac', 14, 'BL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(26, 'Bảo Lâm', 'bao-lam', 36, 'BL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(27, 'Bảo Lộc', 'bao-loc', 36, 'BLO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(28, 'Bảo Thắng', 'bao-thang', 38, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(29, 'Bảo Yên', 'bao-yen', 38, 'BY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(30, 'Bát Xát', 'bat-xat', 38, 'BX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(31, 'Bàu Bàng', 'bau-bang', 9, 'BB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(32, 'Bắc Bình', 'bac-binh', 11, 'BB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(33, 'TP Bắc Giang', 'tp-bac-giang', 2, 'TBG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(34, 'Bắc Hà', 'bac-ha', 38, 'BH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(35, 'TP Bắc Kạn', 'tp-bac-kan', 3, 'TBK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(36, 'Bắc Mê', 'bac-me', 22, 'BM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(37, 'TP Bắc Ninh', 'tp-bac-ninh', 5, 'TBN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(38, 'Bắc Quang', 'bac-quang', 22, 'BQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(39, 'Bắc Sơn', 'bac-son', 37, 'BS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(40, 'Bắc Tân Uyên', 'bac-tan-uyen', 9, 'BTU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(41, 'Bắc Trà My', 'bac-tra-my', 47, 'BTM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(42, 'Bắc Từ Liêm', 'bac-tu-liem', 27, 'BTL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2022-02-22 03:58:51', '2020-07-31 12:01:41'),
(43, 'Bắc Yên', 'bac-yen', 52, 'BY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(44, 'Bến Cát', 'ben-cat', 9, 'BC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(45, 'Bến Cầu', 'ben-cau', 53, 'BC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(46, 'Bến Lức', 'ben-luc', 39, 'BL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(47, 'TP Bến Tre', 'tp-ben-tre', 7, 'TBT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(48, 'Biên Hòa', 'bien-hoa', 19, 'BH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(49, 'Bỉm Sơn', 'bim-son', 56, 'BS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(50, 'Bình Chánh', 'binh-chanh', 30, 'BC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(51, 'Bình Đại', NULL, 7, 'BD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:03:53', '2020-07-31 12:01:41'),
(52, 'Bình Gia', 'binh-gia', 37, 'BG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(53, 'Bình Giang', 'binh-giang', 25, 'BG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(54, 'Bình Liêu', 'binh-lieu', 49, 'BL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(55, 'Bình Long', 'binh-long', 10, 'BL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(56, 'Bình Lục', 'binh-luc', 23, 'BL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(57, 'Bình Minh', 'binh-minh', 61, 'BM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(58, 'Bình Sơn', 'binh-son', 48, 'BS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(59, 'Bình Tân', 'binh-tan', 61, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(60, 'Bình Thạnh', 'binh-thanh', 30, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(61, 'Bình Thủy', 'binh-thuy', 13, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(62, 'Bình Xuyên', 'binh-xuyen', 62, 'BX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:41'),
(63, 'Bố Trạch', 'bo-trach', 46, 'BT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(64, 'Bù Đăng', 'bu-dang', 10, 'BD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(65, 'Bù Đốp', 'bu-dop', 10, 'BDO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(66, 'Bù Gia Mập', 'bu-gia-map', 10, 'BGM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(67, 'Buôn Đôn', 'buon-don', 16, 'BD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(68, 'Buôn Hồ', 'buon-ho', 16, 'BH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(69, 'Buôn Ma Thuột', 'buon-ma-thuot', 16, 'BMT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(70, 'TP Cà Mau', 'tp-ca-mau', 12, 'TCM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(71, 'Cai Lậy', 'cai-lay', 58, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(72, 'Cái Bè', 'cai-be', 58, 'CB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(73, 'Cái Nước', 'cai-nuoc', 12, 'CN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(74, 'Cái Răng', 'cai-rang', 13, 'CR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(75, 'Cam Lâm', 'cam-lam', 32, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(76, 'Cam Lộ', 'cam-lo', 50, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(77, 'Cam Ranh', 'cam-ranh', 32, 'CR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(78, 'Can Lộc', 'can-loc', 24, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(79, 'Càng Long', 'cang-long', 59, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(80, 'TP Cao Bằng', 'tp-cao-bang', 14, 'TCB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(81, 'Cao Lãnh', 'cao-lanh', 20, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(82, 'Cao Lộc', 'cao-loc', 37, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(83, 'Cao Phong', 'cao-phong', 29, 'CP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(84, 'Cát Hải', 'cat-hai', 26, 'CH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(85, 'Cát Tiên', 'cat-tien', 36, 'CT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(86, 'Cẩm Giàng', 'cam-giang', 25, 'CG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(87, 'Cẩm Khê', 'cam-khe', 44, 'CK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(88, 'Cẩm Lệ', 'cam-le', 15, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:41'),
(89, 'Cẩm Mỹ', 'cam-my', 19, 'CM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(90, 'Cẩm Phả', 'cam-pha', 49, 'CP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(91, 'Cẩm Thủy', 'cam-thuy', 56, 'CT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(92, 'Cẩm Xuyên', 'cam-xuyen', 24, 'CX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(93, 'Cần Đước', NULL, 39, 'CD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:12:37', '2020-07-31 12:01:41'),
(94, 'Cần Giờ', 'can-gio', 30, 'CG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:41'),
(95, 'Cần Giuộc', 'can-giuoc', 39, 'CG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:41'),
(96, 'Cầu Giấy', 'cau-giay', 27, 'CG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, '2022-02-22 03:58:51', '2020-07-31 12:01:41'),
(97, 'Cầu Kè', 'cau-ke', 59, 'CK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(98, 'Cầu Ngang', 'cau-ngang', 59, 'CN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:41'),
(99, 'Châu Đốc', NULL, 1, 'CD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:02:47', '2020-07-31 12:01:41'),
(100, 'Châu Đức', NULL, 6, 'CD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:46:45', '2020-07-31 12:01:42'),
(101, 'Châu Phú', 'chau-phu', 1, 'CP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(102, 'Châu Thành', 'chau-thanh', 59, 'CT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(103, 'Châu Thành A', 'chau-thanh-a', 28, 'CTA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(104, 'Chi Lăng', 'chi-lang', 37, 'CLA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(105, 'Chí Linh', 'chi-linh', 25, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(106, 'Chiêm Hóa', 'chiem-hoa', 60, 'CH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(107, 'Chợ Đồn', 'cho-don', 3, 'CD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(108, 'Chợ Gạo', 'cho-gao', 58, 'CG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(109, 'Chợ Lách', 'cho-lach', 7, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(110, 'Chợ Mới', 'cho-moi', 1, 'CM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(111, 'Chơn Thành', 'chon-thanh', 10, 'CT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(112, 'Chư Păh', 'chu-pah', 21, 'CP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(113, 'Chư Prông', 'chu-prong', 21, 'CPR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(114, 'Chư Pưh', 'chu-puh', 21, 'CPU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(115, 'Chư Sê', 'chu-se', 21, 'CS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(116, 'Chương Mỹ', 'chuong-my', 27, 'CM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(117, 'Con Cuông', 'con-cuong', 41, 'CC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(118, 'Cô Tô', 'co-to', 49, 'CT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(119, 'Côn Đảo', 'con-dao', 6, 'CDA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(120, 'Cồn Cỏ', 'con-co', 50, 'CC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(121, 'Cờ Đỏ', NULL, 13, 'CD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:04:52', '2020-07-31 12:01:42'),
(122, 'Cù Lao Dung', 'cu-lao-dung', 51, 'CLD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(123, 'Củ Chi', 'cu-chi', 30, 'CC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(124, 'Cư Kuin', 'cu-kuin', 16, 'CK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(125, 'Cư Jút', 'cu-jut', 17, 'CJ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(126, 'Cư M\'gar', 'cu-mgar', 16, 'CM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(127, 'Cửa Lò', 'cua-lo', 41, 'CL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(128, 'Dầu Tiếng', 'dau-tieng', 9, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(129, 'Di Linh', 'di-linh', 36, 'DL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(130, 'Dĩ An', 'di-an', 9, 'DA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(131, 'Diên Khánh', 'dien-khanh', 32, 'DK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(132, 'Diễn Châu', 'dien-chau', 41, 'DC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(133, 'Duy Tiên', 'duy-tien', 23, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(134, 'Duy Xuyên', 'duy-xuyen', 47, 'DX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(135, 'Duyên Hải', 'duyen-hai', 59, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(136, 'Dương Kinh', 'duong-kinh', 26, 'DK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(137, 'Dương Minh Châu', 'duong-minh-chau', 53, 'DMC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(138, 'Đa Krông', NULL, 50, 'DK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:16:29', '2020-07-31 12:01:42'),
(139, 'Đà Bắc', NULL, 29, 'DB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:54:02', '2020-07-31 12:01:42'),
(140, 'Đà Lạt', NULL, 36, 'DLA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:11:20', '2020-07-31 12:01:42'),
(141, 'Đạ Huoai', NULL, 36, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:10:55', '2020-07-31 12:01:42'),
(142, 'Đạ Tẻh', NULL, 36, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:11:04', '2020-07-31 12:01:42'),
(143, 'Đại Lộc', NULL, 47, 'DL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:15:04', '2020-07-31 12:01:42'),
(144, 'Đại Từ', NULL, 55, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:17:47', '2020-07-31 12:01:42'),
(145, 'Đắk Đoa', NULL, 21, 'DD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:07:08', '2020-07-31 12:01:42'),
(146, 'Đak Pơ', NULL, 21, 'DP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:07:15', '2020-07-31 12:01:42'),
(147, 'Đan Phượng', NULL, 27, 'DP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(148, 'Đắk Glei', NULL, 34, 'DG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:10:06', '2020-07-31 12:01:42'),
(149, 'Đắk Glong', NULL, 17, 'DG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:05:48', '2020-07-31 12:01:42'),
(150, 'Đắk Hà', NULL, 34, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:10:13', '2020-07-31 12:01:42'),
(151, 'Đắk Mil', NULL, 17, 'DM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:05:53', '2020-07-31 12:01:42'),
(152, 'Đắk R\'lấp', NULL, 17, 'DR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:06:00', '2020-07-31 12:01:42'),
(153, 'Đắk Song', NULL, 17, 'DS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:06:05', '2020-07-31 12:01:42'),
(154, 'Đắk Tô', NULL, 34, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:10:23', '2020-07-31 12:01:42'),
(155, 'Đầm Dơi', NULL, 12, 'DD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:04:43', '2020-07-31 12:01:42'),
(156, 'Đầm Hà', NULL, 49, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:16:07', '2020-07-31 12:01:42'),
(157, 'Đam Rông', NULL, 36, 'DR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:11:31', '2020-07-31 12:01:42'),
(158, 'Đất Đỏ', NULL, 6, 'DD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:46:52', '2020-07-31 12:01:42'),
(159, 'Điện Bàn', NULL, 47, 'DB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:15:14', '2020-07-31 12:01:42'),
(160, 'TP Điện Biên', NULL, 18, 'TDB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:06:23', '2020-07-31 12:01:42'),
(161, 'Điện Biên Đông', NULL, 18, 'DBD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:06:30', '2020-07-31 12:01:42'),
(162, 'Điện Biên Phủ', NULL, 18, 'DBP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:06:36', '2020-07-31 12:01:42'),
(163, 'Đình Lập', NULL, 37, 'DL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:12:04', '2020-07-31 12:01:42'),
(164, 'Định Hóa', NULL, 55, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:47:43', '2020-07-31 12:01:42'),
(165, 'Định Quán', NULL, 19, 'DQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:06:49', '2020-07-31 12:01:42'),
(166, 'Đoan Hùng', NULL, 44, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:14:03', '2020-07-31 12:01:42'),
(167, 'Đô Lương', NULL, 41, 'DL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:13:27', '2020-07-31 12:01:42'),
(168, 'Đồ Sơn', NULL, 26, 'DS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:08:26', '2020-07-31 12:01:42'),
(169, 'Đông Anh', NULL, 27, 'DA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(170, 'Đông Giang', NULL, 47, 'DG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:15:21', '2020-07-31 12:01:42'),
(171, 'Đông Hà', NULL, 50, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:16:38', '2020-07-31 12:01:42'),
(172, 'Đông Hải', NULL, 4, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:03:22', '2020-07-31 12:01:42'),
(173, 'Đông Hòa', NULL, 45, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:14:19', '2020-07-31 12:01:42'),
(174, 'Đông Hưng', NULL, 54, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:17:33', '2020-07-31 12:01:42'),
(175, 'Đông Sơn', NULL, 56, 'DS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:55:17', '2020-07-31 12:01:42'),
(176, 'Đông Triều', NULL, 49, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:16:15', '2020-07-31 12:01:42'),
(177, 'Đồng Hới', NULL, 46, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:14:48', '2020-07-31 12:01:42'),
(178, 'Đồng Hỷ', NULL, 55, 'DHY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:47:36', '2020-07-31 12:01:42'),
(179, 'Đồng Phú', NULL, 10, 'DP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:04:18', '2020-07-31 12:01:42'),
(180, 'Đồng Văn', NULL, 22, 'DV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:07:49', '2020-07-31 12:01:42'),
(181, 'Đồng Xoài', NULL, 10, 'DX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:04:25', '2020-07-31 12:01:42'),
(182, 'Đồng Xuân', NULL, 45, 'DX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:14:26', '2020-07-31 12:01:42'),
(183, 'Đống Đa', NULL, 27, 'DD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(184, 'Đơn Dương', NULL, 36, 'DD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:48:28', '2020-07-31 12:01:42'),
(185, 'Đức Cơ', NULL, 21, 'DC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:07:21', '2020-07-31 12:01:42'),
(186, 'Đức Hòa', NULL, 39, 'DH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:59:43', '2020-07-31 12:01:42'),
(187, 'Đức Huệ', NULL, 39, 'DHU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:59:38', '2020-07-31 12:01:42'),
(188, 'Đức Linh', NULL, 11, 'DL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:04:34', '2020-07-31 12:01:42'),
(189, 'Đức Phổ', NULL, 48, 'DP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:58:32', '2020-07-31 12:01:42'),
(190, 'Đức Thọ', NULL, 24, 'DT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:08:08', '2020-07-31 12:01:42'),
(191, 'Đức Trọng', NULL, 36, 'DTR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:48:13', '2020-07-31 12:01:42'),
(192, 'Ea H\'leo', 'ea-hleo', 16, 'EH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(193, 'Ea Kar', 'ea-kar', 16, 'EK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(194, 'Ea Súp', 'ea-sup', 16, 'ES', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(195, 'Gia Bình', 'gia-binh', 5, 'GB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(196, 'Gia Lâm', 'gia-lam', 27, 'GL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(197, 'Gia Lộc', 'gia-loc', 25, 'GL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(198, 'Gia Nghĩa', 'gia-nghia', 17, 'GN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(199, 'Gia Viễn', 'gia-vien', 42, 'GV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(200, 'Giá Rai', 'gia-rai', 4, 'GR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(201, 'Giang Thành', 'giang-thanh', 33, 'GT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(202, 'Giao Thủy', 'giao-thuy', 40, 'GT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(203, 'Gio Linh', 'gio-linh', 50, 'GL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(204, 'Giồng Riềng', 'giong-rieng', 33, 'GR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(205, 'Giồng Trôm', 'giong-trom', 7, 'GT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(206, 'Gò Công', 'go-cong', 58, 'GC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(207, 'Gò Công Đông', NULL, 58, 'GCD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:18:47', '2020-07-31 12:01:42'),
(208, 'Gò Công Tây', 'go-cong-tay', 58, 'GCT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(209, 'Gò Dầu', 'go-dau', 53, 'GD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(210, 'Gò Quao', 'go-quao', 33, 'GQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(211, 'Gò Vấp', 'go-vap', 30, 'GV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(212, 'Hà Đông', NULL, 27, 'HD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(213, 'TP Hà Giang', 'tp-ha-giang', 22, 'THG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(214, 'Hà Quảng', 'ha-quang', 14, 'HQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(215, 'Hà Tiên', 'ha-tien', 33, 'HT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(216, 'TP Hà Tĩnh', 'tp-ha-tinh', 24, 'THT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(217, 'Hà Trung', 'ha-trung', 56, 'HT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(218, 'Hạ Hòa', 'ha-hoa', 44, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(219, 'Hạ Lang', 'ha-lang', 14, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(220, 'Hạ Long', 'ha-long', 49, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(221, 'Hai Bà Trưng', 'hai-ba-trung', 27, 'HBT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(222, 'Hải An', 'hai-an', 26, 'HA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(223, 'Hải Châu', 'hai-chau', 15, 'HC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(224, 'TP Hải Dương', 'tp-hai-duong', 25, 'THD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(225, 'Hải Hà', 'hai-ha', 49, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(226, 'Hải Hậu', 'hai-hau', 40, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(227, 'Hải Lăng', 'hai-lang', 50, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(228, 'Hàm Tân', 'ham-tan', 11, 'HT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(229, 'Hàm Thuận Bắc', 'ham-thuan-bac', 11, 'HTB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(230, 'Hàm Thuận Nam', 'ham-thuan-nam', 11, 'HTN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(231, 'Hàm Yên', 'ham-yen', 60, 'HY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(232, 'Hậu Lộc', 'hau-loc', 56, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(233, 'Hiệp Đức', NULL, 47, 'HD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:15:31', '2020-07-31 12:01:42'),
(234, 'Hiệp Hòa', 'hiep-hoa', 2, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(235, 'Hoa Lư', 'hoa-lu', 42, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(236, 'Hòa An', 'hoa-an', 14, 'HA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(237, 'TP Hoà Bình', 'tp-hoa-binh', 29, 'THB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(238, 'Hòa Thành', 'hoa-thanh', 53, 'HT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(239, 'Hòa Vang', 'hoa-vang', 15, 'HV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(240, 'Hoài Ân', 'hoai-an', 8, 'HÂ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(241, 'Hoài Đức', NULL, 27, 'HDU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(242, 'Hoài Nhơn', 'hoai-nhon', 8, 'HN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(243, 'Hoàn Kiếm', 'hoan-kiem', 27, 'HK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, '2022-02-22 03:58:51', '2020-07-31 12:01:42'),
(244, 'Hoàng Mai', 'hoang-mai', 41, 'HM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(245, 'Hoàng Sa', 'hoang-sa', 15, 'HS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(246, 'Hoàng Su Phì', 'hoang-su-phi', 22, 'HSP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(247, 'Hoằng Hóa', 'hoang-hoa', 56, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(248, 'Hóc Môn', 'hoc-mon', 30, 'HM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(249, 'Hòn Đất', NULL, 33, 'HD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:09:52', '2020-07-31 12:01:42'),
(250, 'Hớn Quản', 'hon-quan', 10, 'HQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(251, 'Hội An', 'hoi-an', 47, 'HA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(252, 'Hồng Bàng', 'hong-bang', 26, 'HB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(253, 'Hồng Dân', 'hong-dan', 4, 'HD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(254, 'Hồng Lĩnh', 'hong-linh', 24, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(255, 'Hồng Ngự', 'hong-ngu', 20, 'HN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(256, 'Huế', 'hue', 57, 'H', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(257, 'Hưng Hà', 'hung-ha', 54, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(258, 'Hưng Nguyên', 'hung-nguyen', 41, 'HN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(259, 'TP Hưng Yên', 'tp-hung-yen', 31, 'THY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(260, 'Hương Khê', 'huong-khe', 24, 'HK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(261, 'Hương Sơn', 'huong-son', 24, 'HS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(262, 'Hương Thủy', 'huong-thuy', 57, 'HT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(263, 'Hương Trà', 'huong-tra', 57, 'HT1', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(264, 'Hướng Hóa', 'huong-hoa', 50, 'HH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(265, 'Hữu Lũng', 'huu-lung', 37, 'HL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(266, 'Ia Grai', 'ia-grai', 21, 'IG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(267, 'Ia H\'Drai', 'ia-hdrai', 34, 'IH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(268, 'Ia Pa', 'ia-pa', 21, 'IP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(269, 'K\'Bang', 'kbang', 21, 'K', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(270, 'Kế Sách', 'ke-sach', 51, 'KS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(271, 'Khánh Sơn', 'khanh-son', 32, 'KS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(272, 'Khánh Vĩnh', 'khanh-vinh', 32, 'KV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(273, 'Khoái Châu', 'khoai-chau', 31, 'KC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(274, 'Kiên Hải', 'kien-hai', 33, 'KH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(275, 'Kiên Lương', 'kien-luong', 33, 'KL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(276, 'Kiến An', 'kien-an', 26, 'KA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(277, 'Kiến Thụy', 'kien-thuy', 26, 'KT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(278, 'Kiến Xương', 'kien-xuong', 54, 'KX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(279, 'Kiến Tường', 'kien-tuong', 39, 'KT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(280, 'Kim Bảng', 'kim-bang', 23, 'KB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(281, 'Kim Bôi', 'kim-boi', 29, 'KB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(282, 'Kim Động', NULL, 31, 'KD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:09:16', '2020-07-31 12:01:42'),
(283, 'Kim Sơn', 'kim-son', 42, 'KS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(284, 'Kim Thành', 'kim-thanh', 25, 'KT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(285, 'Kinh Môn', 'kinh-mon', 25, 'KM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(286, 'Kon Plông', 'kon-plong', 34, 'KP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(287, 'Kon Rẫy', 'kon-ray', 34, 'KR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(288, 'TP Kon Tum', 'tp-kon-tum', 34, 'TKT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(289, 'Kông Chro', 'kong-chro', 21, 'KC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(290, 'Krông Ana', 'krong-ana', 16, 'KA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(291, 'Krông Bông', 'krong-bong', 16, 'KB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(292, 'Krông Búk', 'krong-buk', 16, 'KB1', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(293, 'Krông Năng', 'krong-nang', 16, 'KN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(294, 'Krông Nô', 'krong-no', 17, 'KN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(295, 'Krông Pa', 'krong-pa', 21, 'KP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(296, 'Krông Pắk', 'krong-pak', 16, 'KP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(297, 'Kỳ Anh', 'ky-anh', 24, 'KA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(298, 'Kỳ Sơn', 'ky-son', 41, 'KS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(299, 'La Gi', 'la-gi', 11, 'LG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(300, 'Lạc Dương', 'lac-duong', 36, 'LD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(301, 'Lạc Sơn', 'lac-son', 29, 'LS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(302, 'Lạc Thủy', 'lac-thuy', 29, 'LT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(303, 'TP Lai Châu', 'tp-lai-chau', 35, 'TLC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(304, 'Lai Vung', 'lai-vung', 20, 'LV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(305, 'Lang Chánh', 'lang-chanh', 56, 'LC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:42'),
(306, 'Lạng Giang', 'lang-giang', 2, 'LG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:42'),
(307, 'TP Lạng Sơn', 'tp-lang-son', 37, 'TLS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(308, 'TP Lào Cai', 'tp-lao-cai', 38, 'TLC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:42'),
(309, 'Lắk', 'lak', 16, 'L', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:42'),
(310, 'Lâm Bình', 'lam-binh', 60, 'LB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(311, 'Lâm Hà', 'lam-ha', 36, 'LH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(312, 'Lâm Thao', 'lam-thao', 44, 'LT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(313, 'Lấp Vò', NULL, 20, 'LVO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:52:11', '2020-07-31 12:01:43'),
(314, 'Lập Thạch', 'lap-thach', 62, 'LT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(315, 'Lê Chân', 'le-chan', 26, 'LC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(316, 'Lệ Thủy', 'le-thuy', 46, 'LT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(317, 'Liên Chiểu', 'lien-chieu', 15, 'LC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(318, 'Long Biên', 'long-bien', 27, 'LB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(319, 'Long Điền', NULL, 6, 'LD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:46:37', '2020-07-31 12:01:43'),
(320, 'Long Hồ', 'long-ho', 61, 'LH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(321, 'Long Khánh', 'long-khanh', 19, 'LK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(322, 'Long Mỹ', 'long-my', 28, 'LM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(323, 'Long Phú', 'long-phu', 51, 'LP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(324, 'Long Thành', 'long-thanh', 19, 'LT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(325, 'Long Xuyên', 'long-xuyen', 1, 'LX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(326, 'Lộc Bình', 'loc-binh', 37, 'LB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(327, 'Lộc Hà', 'loc-ha', 24, 'LH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(328, 'Lộc Ninh', 'loc-ninh', 10, 'LN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(329, 'Lục Nam', 'luc-nam', 2, 'LN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(330, 'Lục Ngạn', NULL, 2, 'LNG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:52:43', '2020-07-31 12:01:43'),
(331, 'Lục Yên', 'luc-yen', 63, 'LY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(332, 'Lương Sơn', NULL, 29, 'LSO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:53:53', '2020-07-31 12:01:43'),
(333, 'Lương Tài', 'luong-tai', 5, 'LT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(334, 'Lý Nhân', 'ly-nhan', 23, 'LN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(335, 'Lý Sơn', 'ly-son', 48, 'LS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(336, 'Mai Châu', 'mai-chau', 29, 'MC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(337, 'Mai Sơn', 'mai-son', 52, 'MS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(338, 'Mang Thít', 'mang-thit', 61, 'MT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(339, 'Mang Yang', 'mang-yang', 21, 'MY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(340, 'M\'Đrăk', NULL, 16, 'MD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:05:24', '2020-07-31 12:01:43'),
(341, 'Mèo Vạc', 'meo-vac', 22, 'MV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(342, 'Mê Linh', 'me-linh', 27, 'ML', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(343, 'Minh Hóa', 'minh-hoa', 46, 'MH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(344, 'Minh Long', 'minh-long', 48, 'ML', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(345, 'Mỏ Cày Bắc', 'mo-cay-bac', 7, 'MCB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(346, 'Mỏ Cày Nam', 'mo-cay-nam', 7, 'MCN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(347, 'Móng Cái', 'mong-cai', 49, 'MC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(348, 'Mộ Đức', NULL, 48, 'MD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:15:46', '2020-07-31 12:01:43'),
(349, 'Mộc Châu', 'moc-chau', 52, 'MC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(350, 'Mộc Hóa', 'moc-hoa', 39, 'MH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(351, 'Mù Cang Chải', 'mu-cang-chai', 63, 'MCC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(352, 'Mường Ảng', 'muong-ang', 18, 'MẢ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(353, 'Mường Chà', 'muong-cha', 18, 'MC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(354, 'Mường Khương', 'muong-khuong', 38, 'MK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(355, 'Mường La', 'muong-la', 52, 'ML', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(356, 'Mường Lát', 'muong-lat', 56, 'ML', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(357, 'Mường Lay', 'muong-lay', 18, 'ML', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(358, 'Mường Nhé', 'muong-nhe', 18, 'MN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(359, 'Mường Tè', 'muong-te', 35, 'MT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(360, 'Mỹ Đức', NULL, 27, 'MD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(361, 'Mỹ Hào', 'my-hao', 31, 'MH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(362, 'Mỹ Lộc', 'my-loc', 40, 'ML', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43');
INSERT INTO `huyen` (`id`, `name`, `url`, `tinh_id`, `code`, `status`, `type`, `address`, `tel`, `tel_2`, `website`, `email`, `note`, `orderby`, `updated_at`, `created_at`) VALUES
(363, 'Mỹ Tho', 'my-tho', 58, 'MT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(364, 'Mỹ Tú', 'my-tu', 51, 'MT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(365, 'Mỹ Xuyên', 'my-xuyen', 51, 'MX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(366, 'Na Hang', 'na-hang', 60, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(367, 'Na Rì', 'na-ri', 3, 'NR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(368, 'Nam Đàn', NULL, 41, 'ND', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:56:01', '2020-07-31 12:01:43'),
(369, 'TP Nam Định', NULL, 40, 'TND', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:13:03', '2020-07-31 12:01:43'),
(370, 'Nam Đông', NULL, 57, 'ND', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:18:18', '2020-07-31 12:01:43'),
(371, 'Nam Giang', 'nam-giang', 47, 'NG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(372, 'Nam Sách', 'nam-sach', 25, 'NS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(373, 'Nam Trà My', 'nam-tra-my', 47, 'NTM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(374, 'Nam Trực', 'nam-truc', 40, 'NT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(375, 'Nam Từ Liêm', 'nam-tu-liem', 27, 'NTL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(376, 'Năm Căn', 'nam-can', 12, 'NC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(377, 'Nậm Pồ', 'nam-po', 18, 'NP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(378, 'Nậm Nhùn', 'nam-nhun', 35, 'NN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(379, 'Nga Sơn', 'nga-son', 56, 'NS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(380, 'Ngã Bảy', 'nga-bay', 28, 'NB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(381, 'Ngã Năm', 'nga-nam', 51, 'NN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(382, 'Ngân Sơn', 'ngan-son', 3, 'NS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(383, 'Nghi Lộc', 'nghi-loc', 41, 'NL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(384, 'Nghi Sơn', NULL, 56, 'NSO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:55:04', '2020-07-31 12:01:43'),
(385, 'Nghi Xuân', 'nghi-xuan', 24, 'NX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(386, 'Nghĩa Đàn', NULL, 41, 'NDA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:55:51', '2020-07-31 12:01:43'),
(387, 'Nghĩa Hành', 'nghia-hanh', 48, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(388, 'Nghĩa Hưng', 'nghia-hung', 40, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(389, 'Nghĩa Lộ', 'nghia-lo', 63, 'NL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(390, 'Ngọc Hiển', 'ngoc-hien', 12, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(391, 'Ngọc Hồi', 'ngoc-hoi', 34, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(392, 'Ngọc Lặc', 'ngoc-lac', 56, 'NL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(393, 'Ngô Quyền', 'ngo-quyen', 26, 'NQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(394, 'Ngũ Hành Sơn', 'ngu-hanh-son', 15, 'NHS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(395, 'Nguyên Bình', 'nguyen-binh', 14, 'NB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(396, 'Nha Trang', 'nha-trang', 32, 'NT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(397, 'Nhà Bè', 'nha-be', 30, 'NB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(398, 'Nho Quan', 'nho-quan', 42, 'NQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(399, 'Nhơn Trạch', 'nhon-trach', 19, 'NT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(400, 'Như Thanh', 'nhu-thanh', 56, 'NT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(401, 'Như Xuân', 'nhu-xuan', 56, 'NX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(402, 'TP Ninh Bình', 'tp-ninh-binh', 42, 'TNB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(403, 'Ninh Giang', 'ninh-giang', 25, 'NG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(404, 'Ninh Hải', 'ninh-hai', 43, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(405, 'Ninh Hòa', 'ninh-hoa', 32, 'NH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(406, 'Ninh Kiều', 'ninh-kieu', 13, 'NK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(407, 'Ninh Phước', 'ninh-phuoc', 43, 'NP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(408, 'Ninh Sơn', 'ninh-son', 43, 'NS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(409, 'Nông Cống', 'nong-cong', 56, 'NC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(410, 'Nông Sơn', 'nong-son', 47, 'NS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(411, 'Núi Thành', 'nui-thanh', 47, 'NT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(412, 'Ô Môn', 'o-mon', 13, 'ÔM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(413, 'Pác Nặm', 'pac-nam', 3, 'PN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(414, 'Phan Rang-Tháp Chàm', 'phan-rang-thap-cham', 43, 'PRC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(415, 'Phan Thiết', 'phan-thiet', 11, 'PT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(416, 'Phong Điền', NULL, 13, 'PD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:04:57', '2020-07-31 12:01:43'),
(417, 'Phong Thổ', 'phong-tho', 35, 'PT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(418, 'Phổ Yên', 'pho-yen', 55, 'PY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(419, 'Phú Bình', 'phu-binh', 55, 'PB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(420, 'Phú Giáo', 'phu-giao', 9, 'PG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(421, 'Phú Hòa', 'phu-hoa', 45, 'PH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(422, 'Phú Lộc', 'phu-loc', 57, 'PL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(423, 'Phú Lương', 'phu-luong', 55, 'PL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(424, 'Phú Mỹ', 'phu-my', 6, 'PM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(425, 'Phú Nhuận', 'phu-nhuan', 30, 'PN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(426, 'Phú Ninh', 'phu-ninh', 47, 'PN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(427, 'Phú Quý', 'phu-quy', 11, 'PQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(428, 'Phú Quốc', 'phu-quoc', 33, 'PQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(429, 'Phú Riềng', 'phu-rieng', 10, 'PR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(430, 'Phú Tân', 'phu-tan', 12, 'PT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(431, 'Phú Thiện', 'phu-thien', 21, 'PT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(432, 'TP Phú Thọ', 'tp-phu-tho', 44, 'TPT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(433, 'Phú Vang', 'phu-vang', 57, 'PV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(434, 'Phú Xuyên', 'phu-xuyen', 27, 'PX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(435, 'Phù Cát', 'phu-cat', 8, 'PC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(436, 'Phù Cừ', 'phu-cu', 31, 'PC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(437, 'Phù Mỹ', 'phu-my', 8, 'PM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(438, 'Phù Ninh', 'phu-ninh', 44, 'PN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(439, 'Phù Yên', 'phu-yen', 52, 'PY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(440, 'Phủ Lý', 'phu-ly', 23, 'PL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(441, 'Phúc Thọ', 'phuc-tho', 27, 'PT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(442, 'Phúc Yên', 'phuc-yen', 62, 'PY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(443, 'Phụng Hiệp', 'phung-hiep', 28, 'PH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(444, 'Phước Long', 'phuoc-long', 4, 'PL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(445, 'Phước Sơn', 'phuoc-son', 47, 'PS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(446, 'Pleiku', 'pleiku', 21, 'P', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(447, 'Quan Hóa', 'quan-hoa', 56, 'QH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(448, 'Quan Sơn', 'quan-son', 56, 'QS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(449, 'Quản Bạ', 'quan-ba', 22, 'QB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(450, 'Quang Bình', NULL, 22, 'QBI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:56:46', '2020-07-31 12:01:43'),
(451, 'Quảng Điền', NULL, 57, 'QD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:18:25', '2020-07-31 12:01:43'),
(452, 'Quảng Hòa', 'quang-hoa', 14, 'QH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(453, 'TP Quảng Ngãi', 'tp-quang-ngai', 48, 'TQN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(454, 'Quảng Ninh', 'quang-ninh', 46, 'QN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(455, 'Quảng Trạch', 'quang-trach', 46, 'QT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(456, 'TP Quảng Trị', 'tp-quang-tri', 50, 'TQT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(457, 'Quảng Yên', 'quang-yen', 49, 'QY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(458, 'Quảng Xương', 'quang-xuong', 56, 'QX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(459, 'Quận 1', 'quan-1', 30, 'Q1', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(460, 'Quận 2', 'quan-2', 30, 'Q2', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(461, 'Quận 3', 'quan-3', 30, 'Q3', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(462, 'Quận 4', 'quan-4', 30, 'Q4', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(463, 'Quận 5', 'quan-5', 30, 'Q5', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(464, 'Quận 6', 'quan-6', 30, 'Q6', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(465, 'Quận 7', 'quan-7', 30, 'Q7', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(466, 'Quận 8', 'quan-8', 30, 'Q8', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(467, 'Quận 9', 'quan-9', 30, 'Q9', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:43'),
(468, 'Quận 10', 'quan-10', 30, 'Q11', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(469, 'Quận 11', 'quan-11', 30, 'Q11', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(470, 'Quận 12', 'quan-12', 30, 'Q11', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(471, 'Quế Phong', 'que-phong', 41, 'QP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(472, 'Quế Sơn', 'que-son', 47, 'QS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(473, 'Quế Võ', 'que-vo', 5, 'QV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(474, 'Quy Nhơn', 'quy-nhon', 8, 'QN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(475, 'Quốc Oai', 'quoc-oai', 27, 'QO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(476, 'Quỳ Châu', 'quy-chau', 41, 'QC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(477, 'Quỳ Hợp', 'quy-hop', 41, 'QH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(478, 'Quỳnh Lưu', 'quynh-luu', 41, 'QL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(479, 'Quỳnh Nhai', 'quynh-nhai', 52, 'QN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(480, 'Quỳnh Phụ', 'quynh-phu', 54, 'QP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(481, 'Rạch Giá', 'rach-gia', 33, 'RG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(482, 'Sa Đéc', NULL, 20, 'SD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:52:19', '2020-07-31 12:01:43'),
(483, 'Sa Pa', 'sa-pa', 38, 'SP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(484, 'Sa Thầy', 'sa-thay', 34, 'ST', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(485, 'Sầm Sơn', 'sam-son', 56, 'SS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(486, 'Si Ma Cai', 'si-ma-cai', 38, 'SMC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(487, 'Sìn Hồ', 'sin-ho', 35, 'SH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(488, 'Sóc Sơn', 'soc-son', 27, 'SS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-02-22 03:58:51', '2020-07-31 12:01:43'),
(489, 'TP Sóc Trăng', 'tp-soc-trang', 51, 'TST', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(490, 'Sông Cầu', 'song-cau', 45, 'SC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(491, 'Sông Công', 'song-cong', 55, 'SC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(492, 'Sông Hinh', 'song-hinh', 45, 'SH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(493, 'Sông Lô', 'song-lo', 62, 'SL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(494, 'Sông Mã', 'song-ma', 52, 'SM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(495, 'Sốp Cộp', 'sop-cop', 52, 'SC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(496, 'Sơn Động', NULL, 2, 'SD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:52:51', '2020-07-31 12:01:43'),
(497, 'Sơn Dương', 'son-duong', 60, 'SD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(498, 'Sơn Hà', 'son-ha', 48, 'SH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(499, 'Sơn Hòa', NULL, 45, 'SHO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:57:37', '2020-07-31 12:01:43'),
(500, 'TP Sơn La', 'tp-son-la', 52, 'TSL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(501, 'Sơn Tây', 'son-tay', 48, 'ST', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(502, 'Sơn Tịnh', NULL, 48, 'STI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:58:26', '2020-07-31 12:01:43'),
(503, 'Sơn Trà', 'son-tra', 15, 'ST', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(504, 'Tam Bình', 'tam-binh', 61, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(505, 'Tam Dương', 'tam-duong', 62, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:43'),
(506, 'Tam Đảo', NULL, 62, 'TDA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:19:37', '2020-07-31 12:01:43'),
(507, 'Tam Điệp', NULL, 42, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:13:43', '2020-07-31 12:01:43'),
(508, 'Tam Đường', NULL, 35, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:00:12', '2020-07-31 12:01:43'),
(509, 'Tam Kỳ', 'tam-ky', 47, 'TK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(510, 'Tam Nông', 'tam-nong', 44, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(511, 'Tánh Linh', 'tanh-linh', 11, 'TL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:43'),
(512, 'Tân An', 'tan-an', 39, 'TA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(513, 'Tân Biên', 'tan-bien', 53, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(514, 'Tân Bình', 'tan-binh', 30, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(515, 'Tân Châu', 'tan-chau', 53, 'TC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:43'),
(516, 'Tân Hiệp', 'tan-hiep', 33, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:43'),
(517, 'Tân Hồng', 'tan-hong', 20, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(518, 'Tân Hưng', 'tan-hung', 39, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(519, 'Tân Kỳ', 'tan-ky', 41, 'TK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(520, 'Tân Lạc', 'tan-lac', 29, 'TL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(521, 'Tân Phú', 'tan-phu', 30, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(522, 'Tân Phú Đông', NULL, 58, 'TPD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:18:39', '2020-07-31 12:01:44'),
(523, 'Tân Phước', 'tan-phuoc', 58, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(524, 'Tân Sơn', 'tan-son', 44, 'TS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(525, 'Tân Thạnh', 'tan-thanh', 39, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(526, 'Tân Trụ', NULL, 39, 'TTR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:59:21', '2020-07-31 12:01:44'),
(527, 'Tân Uyên', 'tan-uyen', 35, 'TU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(528, 'Tân Yên', 'tan-yen', 2, 'TY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(529, 'Tây Giang', 'tay-giang', 47, 'TG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(530, 'Tây Hòa', 'tay-hoa', 45, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(531, 'Tây Hồ', 'tay-ho', 27, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(532, 'TP Tây Ninh', 'tp-tay-ninh', 53, 'TTN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(533, 'Tây Sơn', 'tay-son', 8, 'TS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(534, 'Thạch An', 'thach-an', 14, 'TA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(535, 'Thạch Hà', 'thach-ha', 24, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(536, 'Thạch Thành', 'thach-thanh', 56, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(537, 'Thạch Thất', 'thach-that', 27, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(538, 'TP Thái Bình', 'tp-thai-binh', 54, 'TTB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(539, 'Thái Hòa', 'thai-hoa', 41, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(540, 'TP Thái Nguyên', 'tp-thai-nguyen', 55, 'TTN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(541, 'Thái Thụy', 'thai-thuy', 54, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(542, 'Than Uyên', NULL, 35, 'TUY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:00:02', '2020-07-31 12:01:44'),
(543, 'Thanh Ba', 'thanh-ba', 44, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(544, 'Thanh Bình', 'thanh-binh', 20, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(545, 'Thanh Chương', 'thanh-chuong', 41, 'TC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(546, 'Thanh Hà', 'thanh-ha', 25, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(547, 'TP Thanh Hóa', 'tp-thanh-hoa', 56, 'TTH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(548, 'Thanh Khê', 'thanh-khe', 15, 'TK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(549, 'Thanh Liêm', 'thanh-liem', 23, 'TL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(550, 'Thanh Miện', 'thanh-mien', 25, 'TM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(551, 'Thanh Oai', 'thanh-oai', 27, 'TO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(552, 'Thanh Sơn', NULL, 44, 'TSO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:00:33', '2020-07-31 12:01:44'),
(553, 'Thanh Thủy', 'thanh-thuy', 44, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(554, 'Thanh Trì', NULL, 27, 'TTR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(555, 'Thanh Xuân', 'thanh-xuan', 27, 'TX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(556, 'Thạnh Hóa', NULL, 39, 'THO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:59:01', '2020-07-31 12:01:44'),
(557, 'Thạnh Phú', 'thanh-phu', 7, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(558, 'Thạnh Trị', 'thanh-tri', 51, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(559, 'Tháp Mười', 'thap-muoi', 20, 'TM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(560, 'Thăng Bình', 'thang-binh', 47, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(561, 'Thiệu Hóa', 'thieu-hoa', 56, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(562, 'Thọ Xuân', 'tho-xuan', 56, 'TX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(563, 'Thoại Sơn', 'thoai-son', 1, 'TS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(564, 'Thống Nhất', 'thong-nhat', 19, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(565, 'Thốt Nốt', 'thot-not', 13, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(566, 'Thới Bình', 'thoi-binh', 12, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(567, 'Thới Lai', 'thoi-lai', 13, 'TL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(568, 'Thủ Dầu Một', 'thu-dau-mot', 9, 'TDM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(569, 'Thủ Đức', NULL, 30, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:09:06', '2020-07-31 12:01:44'),
(570, 'Thủ Thừa', NULL, 39, 'TTH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:59:08', '2020-07-31 12:01:44'),
(571, 'Thuận An', 'thuan-an', 9, 'TA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(572, 'Thuận Bắc', 'thuan-bac', 43, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(573, 'Thuận Châu', 'thuan-chau', 52, 'TC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(574, 'Thuận Nam', 'thuan-nam', 43, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(575, 'Thuận Thành', 'thuan-thanh', 5, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(576, 'Thủy Nguyên', 'thuy-nguyen', 26, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(577, 'Thường Tín', NULL, 27, 'TTI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(578, 'Thường Xuân', NULL, 56, 'TXU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:54:56', '2020-07-31 12:01:44'),
(579, 'Tiên Du', 'tien-du', 5, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(580, 'Tiền Hải', 'tien-hai', 54, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(581, 'Tiên Lãng', 'tien-lang', 26, 'TL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(582, 'Tiên Lữ', 'tien-lu', 31, 'TL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(583, 'Tiên Phước', 'tien-phuoc', 47, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(584, 'Tiên Yên', 'tien-yen', 49, 'TY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(585, 'Tiểu Cần', 'tieu-can', 59, 'TC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(586, 'Tịnh Biên', 'tinh-bien', 1, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(587, 'Trà Bồng', 'tra-bong', 48, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(588, 'Trà Cú', NULL, 59, 'TCU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:01:14', '2020-07-31 12:01:44'),
(589, 'Trà Ôn', 'tra-on', 61, 'TÔ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(590, 'TP Trà Vinh', 'tp-tra-vinh', 59, 'TTV', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(591, 'Trạm Tấu', 'tram-tau', 63, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(592, 'Tràng Định', NULL, 37, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:11:57', '2020-07-31 12:01:44'),
(593, 'Trảng Bàng', NULL, 53, 'TBA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:01:30', '2020-07-31 12:01:44'),
(594, 'Trảng Bom', 'trang-bom', 19, 'TB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(595, 'Trấn Yên', 'tran-yen', 63, 'TY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(596, 'Trần Đề', NULL, 51, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:17:04', '2020-07-31 12:01:44'),
(597, 'Trần Văn Thời', 'tran-van-thoi', 12, 'TVT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(598, 'Tri Tôn', 'tri-ton', 1, 'TT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(599, 'Triệu Phong', 'trieu-phong', 50, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(600, 'Triệu Sơn', 'trieu-son', 56, 'TS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(601, 'Trùng Khánh', 'trung-khanh', 14, 'TK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(602, 'Trực Ninh', 'truc-ninh', 40, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(603, 'Trường Sa', 'truong-sa', 32, 'TS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(604, 'Tủa Chùa', 'tua-chua', 18, 'TC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(605, 'Tuần Giáo', 'tuan-giao', 18, 'TG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(606, 'Tu Mơ Rông', 'tu-mo-rong', 34, 'TMR', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(607, 'Tuy An', 'tuy-an', 45, 'TA', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(608, 'Tuy Đức', NULL, 17, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:05:40', '2020-07-31 12:01:44'),
(609, 'Tuy Hòa', NULL, 45, 'THO', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:57:44', '2020-07-31 12:01:44'),
(610, 'Tuy Phong', 'tuy-phong', 11, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(611, 'Tuy Phước', 'tuy-phuoc', 8, 'TP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(612, 'Tuyên Hóa', 'tuyen-hoa', 46, 'TH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(613, 'TP Tuyên Quang', 'tp-tuyen-quang', 60, 'TTQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(614, 'Tư Nghĩa', 'tu-nghia', 48, 'TN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(615, 'Tứ Kỳ', 'tu-ky', 25, 'TK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(616, 'Từ Sơn', 'tu-son', 5, 'TS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(617, 'Tương Dương', 'tuong-duong', 41, 'TD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(618, 'U Minh', 'u-minh', 12, 'UM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(619, 'U Minh Thượng', 'u-minh-thuong', 33, 'UMT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(620, 'Uông Bí', 'uong-bi', 49, 'UB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(621, 'Ứng Hòa', NULL, 27, 'UH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, '2022-02-22 03:58:51', '2020-07-31 12:01:44'),
(622, 'Vạn Ninh', 'van-ninh', 32, 'VN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(623, 'Văn Bàn', 'van-ban', 38, 'VB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(624, 'Văn Chấn', 'van-chan', 63, 'VC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(625, 'Văn Giang', 'van-giang', 31, 'VG', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(626, 'Văn Lãng', 'van-lang', 37, 'VL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(627, 'Văn Lâm', 'van-lam', 31, 'VL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(628, 'Văn Quan', 'van-quan', 37, 'VQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(629, 'Văn Yên', 'van-yen', 63, 'VY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(630, 'Vân Canh', 'van-canh', 8, 'VC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(631, 'Vân Đồn', NULL, 49, 'VD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:15:59', '2020-07-31 12:01:44'),
(632, 'Vân Hồ', 'van-ho', 52, 'VH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(633, 'Vị Thanh', 'vi-thanh', 28, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(634, 'Vị Thủy', NULL, 28, 'VTH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:02:16', '2020-07-31 12:01:44'),
(635, 'Vị Xuyên', 'vi-xuyen', 22, 'VX', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(636, 'Việt Trì', 'viet-tri', 44, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(637, 'Việt Yên', 'viet-yen', 2, 'VY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(638, 'Vinh', 'vinh', 41, 'V', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(639, 'Vĩnh Bảo', 'vinh-bao', 26, 'VB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(640, 'Vĩnh Châu', 'vinh-chau', 51, 'VC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(641, 'Vĩnh Cửu', 'vinh-cuu', 19, 'VC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(642, 'Vĩnh Hưng', 'vinh-hung', 39, 'VH', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(643, 'Vĩnh Linh', 'vinh-linh', 50, 'VL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(644, 'TP Vĩnh Long', 'tp-vinh-long', 61, 'TVL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(645, 'Vĩnh Lộc', 'vinh-loc', 56, 'VL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(646, 'Vĩnh Lợi', 'vinh-loi', 4, 'VL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(647, 'Vĩnh Thạnh', 'vinh-thanh', 13, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(648, 'Vĩnh Thuận', 'vinh-thuan', 33, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(649, 'Vĩnh Tường', 'vinh-tuong', 62, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(650, 'Vĩnh Yên', 'vinh-yen', 62, 'VY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(651, 'Võ Nhai', 'vo-nhai', 55, 'VN', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(652, 'Vũ Quang', 'vu-quang', 24, 'VQ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(653, 'Vũ Thư', 'vu-thu', 54, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(654, 'Vụ Bản', 'vu-ban', 40, 'VB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(655, 'Vũng Liêm', 'vung-liem', 61, 'VL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(656, 'Vũng Tàu', 'vung-tau', 6, 'VT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(657, 'Xín Mần', 'xin-man', 22, 'XM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(658, 'Xuân Lộc', 'xuan-loc', 19, 'XL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(659, 'Xuân Trường', 'xuan-truong', 40, 'XT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(660, 'Xuyên Mộc', 'xuyen-moc', 6, 'XM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(661, 'Ý Yên', 'y-yen', 40, 'ÝY', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(662, 'TP Yên Bái', 'tp-yen-bai', 63, 'TYB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(663, 'Yên Bình', 'yen-binh', 63, 'YB', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(664, 'Yên Châu', 'yen-chau', 52, 'YC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(665, 'Yên Dũng', 'yen-dung', 2, 'YD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(666, 'Yên Định', NULL, 56, 'YD', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 08:18:02', '2020-07-31 12:01:44'),
(667, 'Yên Khánh', 'yen-khanh', 42, 'YK', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(668, 'Yên Lạc', 'yen-lac', 62, 'YL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:23', '2020-07-31 12:01:44'),
(669, 'Yên Lập', 'yen-lap', 44, 'YL', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(670, 'Yên Minh', 'yen-minh', 22, 'YM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44'),
(671, 'Yên Mô', 'yen-mo', 42, 'YM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(672, 'Yên Mỹ', 'yen-my', 31, 'YM', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(673, 'Yên Phong', 'yen-phong', 5, 'YP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(674, 'Yên Sơn', 'yen-son', 60, 'YS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:22', '2020-07-31 12:01:44'),
(675, 'Yên Thành', 'yen-thanh', 41, 'YT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:21', '2020-07-31 12:01:44'),
(676, 'Yên Thế', 'yen-the', 2, 'YT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:19', '2020-07-31 12:01:44'),
(677, 'Yên Thủy', 'yen-thuy', 29, 'YT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 07:33:20', '2020-07-31 12:01:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ke_toan`
--

DROP TABLE IF EXISTS `ke_toan`;
CREATE TABLE IF NOT EXISTS `ke_toan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `huyen_id` int(11) DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `startTime` timestamp NULL DEFAULT NULL,
  `endTime` timestamp NULL DEFAULT NULL,
  `buyTime` timestamp NULL DEFAULT NULL,
  `money` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ke_toan`
--

INSERT INTO `ke_toan` (`id`, `user_id`, `tinh_id`, `huyen_id`, `truong_id`, `order_id`, `startTime`, `endTime`, `buyTime`, `money`, `status`, `type`, `created_at`, `updated_at`) VALUES
(32, 112, 41, 117, NULL, NULL, NULL, '2022-07-07 17:00:00', NULL, '150000', 'on', 'service', '2022-06-12 09:34:43', '2022-06-12 09:34:43'),
(31, 112, 41, 117, NULL, NULL, '2022-06-12 09:21:59', '2022-06-12 09:21:59', NULL, '300000', 'on', 'deposits', '2022-06-12 09:21:59', '2022-06-12 09:21:59'),
(30, 166, 27, 14, 1, NULL, '2022-06-10 08:12:27', '2022-06-10 08:12:27', NULL, '200000', 'on', 'deposits', '2022-06-10 08:12:27', '2022-06-10 08:12:27'),
(29, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '85000', 'on', 'buy', '2022-06-10 07:32:26', '2022-06-10 07:32:26'),
(28, 102, 27, 14, 1, NULL, NULL, '2022-06-29 17:00:00', NULL, '50000', 'on', 'service', '2022-06-10 04:47:16', '2022-06-10 04:47:16'),
(26, 102, 27, 14, 1, NULL, '2022-06-10 04:35:05', '2022-06-10 04:35:05', NULL, '50000', 'on', 'deposits', '2022-06-10 04:35:05', '2022-06-10 04:35:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `percen_coupon` int(11) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`id`, `name`, `orderby`, `percen_coupon`, `status`, `type`, `parent_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Bộ giáo dục', 1, 0, 'on', 'edu', 0, NULL, '2021-12-14 05:52:29', '2021-12-14 05:52:29'),
(2, 'Sở giáo dục', 2, 1, 'on', 'edu', 1, NULL, '2021-12-14 05:52:52', '2021-12-14 08:55:53'),
(3, 'Phòng giáo dục', 3, 2, 'on', 'edu', 2, NULL, '2021-12-14 05:53:12', '2021-12-14 08:57:03'),
(4, 'Trường học', 4, 3, 'on', 'edu', 3, NULL, '2021-12-14 05:53:22', '2021-12-14 08:57:07'),
(8, 'Giám đốc kinh doanh', NULL, 1, 'on', 'sale', 0, NULL, '2021-12-17 20:18:20', '2021-12-17 20:19:02'),
(9, 'Phó giám đốc kinh doanh', NULL, 2, 'on', 'sale', 8, NULL, '2021-12-17 20:19:17', '2021-12-17 20:19:17'),
(10, 'Trưởng phòng kinh doanh', NULL, 3, 'on', 'sale', 9, NULL, '2021-12-17 20:19:33', '2021-12-17 20:19:33'),
(11, 'Nhân viên kinh doanh', NULL, 4, 'on', 'sale', 10, NULL, '2021-12-17 20:20:00', '2021-12-17 20:20:00'),
(12, 'Cộng tác viên', NULL, 10, 'on', 'sale', 11, NULL, '2021-12-17 20:20:29', '2021-12-17 20:20:37'),
(13, 'Đại lý', NULL, 30, 'on', 'agency', 0, NULL, '2021-12-19 10:20:46', '2021-12-19 15:26:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huyen_id` int(11) DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id`, `name`, `status`, `type`, `url`, `code`, `note`, `huyen_id`, `tinh_id`, `email`, `tel`, `tel_2`, `address`, `website`, `orderby`, `truong_id`, `created_at`, `updated_at`) VALUES
(1, '1a', 'on', NULL, '1a', NULL, NULL, 14, 27, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-12-15 20:24:26', '2021-12-15 20:24:26'),
(2, '1b', 'on', NULL, '1b', NULL, NULL, 14, 27, NULL, NULL, NULL, NULL, NULL, 2, 1, '2021-12-15 20:24:26', '2021-12-15 20:24:26'),
(9, '1c', 'on', NULL, NULL, '', NULL, 14, 27, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-12-17 19:32:52', '2021-12-17 19:32:52'),
(10, '2a', 'on', NULL, NULL, NULL, NULL, 96, 27, NULL, NULL, NULL, NULL, NULL, NULL, 267, '2022-01-03 10:20:43', '2022-01-03 10:20:43'),
(11, '2a', 'on', NULL, '2a', '2', NULL, 14, 27, NULL, NULL, NULL, NULL, NULL, 4, 1, '2022-01-14 08:12:02', '2022-01-14 08:12:02'),
(12, '2b', 'on', NULL, '2b', '212', NULL, 14, 27, NULL, NULL, NULL, NULL, NULL, 5, 1, '2022-01-14 08:12:02', '2022-01-14 08:12:02'),
(15, '2a2', 'on', NULL, NULL, NULL, NULL, 241, 27, NULL, NULL, NULL, NULL, NULL, NULL, 674, '2022-03-03 07:21:22', '2022-03-03 07:21:22'),
(16, '1a', 'on', NULL, NULL, NULL, NULL, 241, 27, NULL, NULL, NULL, NULL, NULL, NULL, 715, '2022-03-11 08:59:58', '2022-03-11 08:59:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_li` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_li` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `img`, `url`, `menu_type_id`, `cat_id`, `menu_type`, `parent_id`, `icon`, `class_li`, `id_li`, `class_a`, `id_a`, `attri`, `status`, `orderby`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', '', NULL, 1, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 1, '2021-11-23 15:48:28', '2022-05-14 07:17:50'),
(2, 'Giới thiệu', '', '/bai-viet/gioi-thieu.html', 1, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 2, '2021-11-24 08:28:50', '2022-05-16 11:11:46'),
(18, 'Ngoại ngữ', '', 'ngoai-ngu', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-violet', NULL, NULL, 'on', 3, '2022-05-14 10:12:45', '2022-05-14 10:25:32'),
(19, 'Kỹ Năng', '', 'ky-nang', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-blue', NULL, NULL, 'on', 2, '2022-05-14 10:12:51', '2022-05-14 10:23:39'),
(7, 'Đăng ký đại lý', '', NULL, 2, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 1, '2021-11-24 13:03:01', '2021-11-24 13:03:01'),
(8, 'Tuyển dụng', '', NULL, 2, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 2, '2021-11-24 13:03:13', '2021-11-24 13:03:13'),
(9, 'Tải App', '', NULL, 2, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 3, '2021-11-24 13:03:19', '2021-11-24 13:03:19'),
(10, 'Chính sách bảo mật', '', NULL, 2, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 4, '2021-11-24 13:03:25', '2021-11-24 13:03:25'),
(11, 'Điều khoản sử dụng', '', NULL, 2, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 5, '2021-11-24 13:03:32', '2021-11-24 13:03:32'),
(12, 'Audio book', '', '/bai-viet/sach-nghe.html', 1, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 4, '2021-11-26 16:20:06', '2022-05-31 04:39:52'),
(20, 'Học tập', '', 'hoc-tap', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-organ', NULL, NULL, 'on', 1, '2022-05-14 10:12:58', '2022-05-14 10:22:44'),
(17, 'TV trường học ebook', '', '/bai-viet/thu-vien-truong-hoc-ebook.html', 1, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 3, '2022-05-14 07:14:37', '2022-05-31 04:37:58'),
(21, 'Truyện tranh', '', 'truyen-tranh', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-organ2', NULL, NULL, 'on', 4, '2022-05-14 10:13:11', '2022-05-14 10:25:50'),
(27, 'Sách Văn học', '', 'sach-van-hoc', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-organ2', NULL, NULL, 'on', 7, '2022-05-14 10:18:51', '2022-05-14 10:25:55'),
(26, 'Sách khoa học', '', 'sach-khoa-hoc', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-blue', NULL, NULL, 'on', 6, '2022-05-14 10:18:47', '2022-05-14 10:26:11'),
(28, 'Sách toán', '', 'sach-toan', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-violet', NULL, NULL, 'on', 7, '2022-05-14 10:48:17', '2022-05-14 10:49:00'),
(29, 'Sách địa lý', '', 'sach-dia-ly', 3, NULL, 'custome', 0, NULL, NULL, NULL, 'btn-organ', NULL, NULL, 'on', 8, '2022-05-14 10:48:20', '2022-05-14 10:49:11'),
(30, 'Dich vụ hợp tác', '', '/bai-viet/dich-vu-hop-tac.html', 1, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 5, '2022-05-16 13:53:42', '2022-05-31 04:40:58'),
(31, 'Liên hệ', '', '/bai-viet/lien-he.html', 1, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 6, '2022-05-16 13:54:00', '2022-05-31 04:43:04'),
(32, 'Thư viện mầm non', '', '#', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 1, '2022-05-16 16:52:32', '2022-05-16 16:52:32'),
(33, 'Thư viện Tiểu học', '', '#', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 2, '2022-05-16 16:52:39', '2022-05-16 16:52:39'),
(34, 'Thư viện THCS', '', '#', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 3, '2022-05-16 16:52:46', '2022-05-16 16:52:46'),
(35, 'Thư viện Giáo viên', '', '#', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 4, '2022-05-16 16:52:53', '2022-05-16 16:52:53'),
(36, 'Nội quy thư viện', '', '/bai-viet/quy-dinh.html', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 5, '2022-05-16 16:53:01', '2022-05-31 04:11:01'),
(37, 'Hướng dẫn mở thẻ', '', '/bai-viet/huong-dan-mo-the.html', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 6, '2022-05-16 16:53:09', '2022-05-31 04:32:46'),
(38, 'Kế hoạt động', '', '/bai-viet/ke-hoach-hoat-dong.html', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 7, '2022-05-16 16:53:17', '2022-05-31 04:35:38'),
(39, 'Chương trình đào tạo', '', '/bai-viet/chuong-trinh-dao-tao.html', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 8, '2022-05-16 16:53:26', '2022-05-31 04:35:32'),
(40, 'Đăng ký dự thi', '', '#', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 9, '2022-05-16 16:53:33', '2022-05-16 16:53:33'),
(41, 'Tin tức & sự kiện', '', '#', 4, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 10, '2022-05-16 16:56:35', '2022-05-16 16:56:35'),
(42, 'Phòng giáo dục Hà Nội', '', 'phong-giao-duc-ha-noi', 5, NULL, 'custome', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 1, '2022-05-31 04:44:31', '2022-06-01 02:26:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_type`
--

DROP TABLE IF EXISTS `menu_type`;
CREATE TABLE IF NOT EXISTS `menu_type` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_theme_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_theme_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_ul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_li` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_li` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_nav` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `def` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_nav` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_type`
--

INSERT INTO `menu_type` (`id`, `name`, `url`, `class_theme_menu`, `id_theme_menu`, `class_ul`, `id_ul`, `class_li`, `id_li`, `class_a`, `id_a`, `attri`, `status`, `class_nav`, `def`, `des`, `type`, `id_nav`, `orderby`, `created_at`, `updated_at`) VALUES
(1, 'Menu chính', 'Menu_mac_dinh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-11-24 08:30:46'),
(2, 'Footer', 'menu_2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 2, '2021-11-24 13:02:50', '2021-11-24 13:02:50'),
(3, 'Danh mục sách', 'menu_3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 3, '2022-05-05 10:44:46', '2022-05-05 10:44:46'),
(4, 'Hệ thống thư viện', 'menu_4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 4, '2022-05-16 16:52:04', '2022-05-31 04:10:51'),
(5, 'Danh sách PGD', 'menu_5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 5, '2022-05-31 04:07:12', '2022-05-31 04:07:12'),
(6, 'Danh sách trường', 'menu_6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 6, '2022-05-31 04:07:21', '2022-05-31 04:07:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price_total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `huyen_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_date` timestamp NULL DEFAULT NULL,
  `time_rent` timestamp NULL DEFAULT NULL,
  `rent_date` timestamp NULL DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `type`, `user_id`, `price_total`, `status`, `coupon`, `book_id`, `created_at`, `updated_at`, `name`, `tel`, `email`, `tinh_id`, `huyen_id`, `truong_id`, `store_id`, `address`, `pay_date`, `time_rent`, `rent_date`, `note`, `parent_id`) VALUES
(113, 'mua', 166, '85000', 'done', NULL, 20, '2022-06-20 09:28:54', '2022-06-11 22:29:28', 'Đỗ thị Trang', NULL, 'trang@gmail.com', 27, '14', 1, 12, NULL, NULL, NULL, '2022-06-11 22:29:28', NULL, 171),
(114, 'mua', 166, '85000', 'buy-waiting', NULL, 20, '2022-06-20 09:28:58', '2022-06-11 22:26:24', 'Đỗ thị Trang', NULL, 'trang@gmail.com', 27, '14', 1, 12, NULL, NULL, NULL, NULL, NULL, 171),
(116, 'mua', 166, '85000', 'done', NULL, 20, '2022-06-20 09:29:03', '2022-06-10 08:08:09', 'Đỗ thị Trang', NULL, 'trang@gmail.com', 27, '14', 1, 12, NULL, NULL, NULL, NULL, NULL, 171),
(117, 'thue', 166, '85000', 'received', NULL, 20, '2022-06-20 09:29:09', '2022-06-12 09:04:41', 'Đỗ thị Trang', NULL, 'trang@gmail.com', 27, '14', 1, 12, NULL, NULL, '2022-06-19 09:04:41', '2022-06-12 09:04:41', NULL, 171),
(118, 'mua', 102, '85000', 'done', NULL, 20, '2022-06-14 03:54:09', '2022-06-14 03:54:09', 'trần thái an', '0987654333', 'Tranthaian@gmail.com', 27, '14', 1, 12, NULL, NULL, NULL, '2022-06-14 03:54:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `org`
--

DROP TABLE IF EXISTS `org`;
CREATE TABLE IF NOT EXISTS `org` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `org`
--

INSERT INTO `org` (`id`, `name`, `note`, `status`, `parent_id`, `type`, `updated_at`, `created_at`) VALUES
(1, 'Bộ giáo dục', 'sdfds', 'on', 0, 'Bộ', '2021-12-11 07:52:57', '2021-12-11 07:49:18'),
(3, 'Sở giáo dục Hà Nội', NULL, 'on', 1, 'Sở', '2021-12-11 07:59:21', '2021-12-11 07:59:21'),
(4, 'Sở giáo dục Hồ Chí Minh', NULL, 'on', 1, 'Sở', '2021-12-11 07:59:36', '2021-12-11 07:59:36'),
(5, 'Phòng giáo dục Hoàn Kiếm', NULL, 'on', 3, 'Phòng', '2021-12-11 08:00:49', '2021-12-11 08:00:49'),
(6, 'Phòng giáo dục Đống Đa', NULL, 'on', 3, 'Phòng', '2021-12-11 08:00:58', '2021-12-11 08:00:58'),
(7, 'Trường tiểu học Phương Liên', NULL, 'on', 6, 'Trường', '2021-12-11 08:01:16', '2021-12-11 08:01:16'),
(8, 'Trường tiểu học Quang Trung', NULL, 'on', 6, 'Trường', '2021-12-11 08:01:23', '2021-12-11 08:01:23'),
(9, 'Lớp 1a', NULL, 'on', 7, 'Giáo dục', '2021-12-14 05:16:33', '2021-12-14 05:16:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pay_history`
--

DROP TABLE IF EXISTS `pay_history`;
CREATE TABLE IF NOT EXISTS `pay_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_order` int(11) DEFAULT NULL,
  `percen` int(11) DEFAULT NULL,
  `price_sales` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `user_pay` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pay_history`
--

INSERT INTO `pay_history` (`id`, `user_id`, `price`, `count_order`, `percen`, `price_sales`, `status`, `note`, `bank_id`, `user_pay`, `created_at`, `updated_at`) VALUES
(1, 2, '599600', 2, 20, '2998000', 'payed', 'fsdf', 1, 1, '2021-11-30 12:41:05', '2021-11-30 07:55:26'),
(2, 2, '599600', 2, 20, '2998000', 'payed', 'dsf', 1, 1, '2021-11-30 12:41:03', '2021-11-30 07:56:17'),
(4, 2, '739400', 3, 20, '3697000', 'payed', 'ret', 1, 1, '2021-11-30 12:32:48', '2021-11-30 12:32:48'),
(5, 2, '679200', 4, 20, '3396000', 'payed', 'sd', 1, 1, '2021-12-01 09:07:50', '2021-12-01 09:07:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`id`, `name`, `title`, `type`, `created_at`, `updated_at`) VALUES
(2, 'cat_view', 'Xem danh mục', 'webadmin', NULL, '2020-07-13 16:46:39'),
(3, 'cat_edit', 'Sửa danh mục', 'admin', NULL, NULL),
(4, 'post_view', 'Xem bài viết', 'admin', NULL, NULL),
(5, 'post_edit', 'Sửa bài viết', 'admin', NULL, NULL),
(6, 'menu_view', 'Xem menu', 'admin', NULL, NULL),
(7, 'menu_edit', 'Sửa menu', 'admin', NULL, NULL),
(65, 'agency_percen_view', 'Hoa hồng', 'agency', '2021-11-28 18:39:04', '2021-11-28 18:39:04'),
(10, 'slide_view', 'Xem slide', 'admin', NULL, NULL),
(11, 'slide_edit', 'Sửa slide', 'admin', NULL, NULL),
(12, 'theme_view', 'Xem giao diện', 'admin', NULL, NULL),
(13, 'theme_edit', 'Sửa giao diện', 'admin', NULL, NULL),
(66, 'agency_faq_view', 'Hỏi đáp', 'agency', '2021-11-28 18:45:10', '2021-11-28 18:45:10'),
(60, 'agency_view', 'Đại lý', 'agency', '2021-11-28 17:59:35', '2021-11-28 17:59:35'),
(16, 'config_view', 'Xem cấu hình', 'admin', NULL, NULL),
(17, 'config_edit', 'Sửa cấu hình', 'admin', NULL, NULL),
(64, 'agency_course_view', 'Khóa học', 'agency', '2021-11-28 18:37:40', '2021-11-28 18:37:40'),
(61, 'dashboard_view', 'Trang chủ admin', 'admin', '2021-11-28 18:18:35', '2021-11-28 18:18:35'),
(63, 'agency_order_view', 'Đơn hàng đại lý', 'agency', '2021-11-28 18:31:33', '2021-11-28 18:31:33'),
(62, 'agency_dashboard_view', 'Trang chủ đại lý', 'agency', '2021-11-28 18:23:48', '2021-11-28 18:23:48'),
(32, 'admin_user_view', 'Xem thành viên', 'admin', NULL, '2021-12-01 19:35:45'),
(33, 'admin_user_edit', 'Sửa thành viên', 'admin', NULL, '2021-12-01 19:35:39'),
(34, 'admin_permission_view', 'Xem phân quyền thành viên', 'admin', NULL, '2021-12-01 19:35:34'),
(35, 'admin_permission_edit', 'Sửa phân quyền thành viên', 'admin', NULL, '2021-12-01 19:35:28'),
(68, 'coupon_view', 'Xem hoa hồng', 'admin', '2021-11-29 17:10:03', '2021-11-29 17:19:11'),
(67, 'agency_tut_view', 'Hướng dẫn', 'agency', '2021-11-28 18:46:17', '2021-11-28 18:46:17'),
(50, 'post_type_view', 'Xem loại bài viết', 'admin', '2020-07-28 11:42:04', '2020-07-28 11:42:04'),
(51, 'post_type_edit', 'Sửa loại bài viết', 'admin', '2020-07-28 11:42:15', '2020-07-28 11:42:15'),
(52, 'order_view', 'Xem order', 'admin', '2020-07-30 03:42:59', '2021-11-28 15:37:47'),
(70, 'coupon_edit', 'Sửa hoa hồng', 'admin', '2021-11-29 17:19:29', '2021-11-29 17:19:29'),
(71, 'pay_view', 'Sửa thanh toán', 'admin', '2021-11-29 21:08:27', '2021-11-29 21:09:03'),
(72, 'pay_edit', 'Sửa thanh toán', 'admin', '2021-11-29 21:08:42', '2021-11-29 21:08:42'),
(73, 'setting_view', 'Xem cài đặt', 'admin', '2021-11-30 13:06:30', '2021-11-30 13:06:30'),
(69, 'agency_coupon_view', 'Hoa hồng', 'agency', '2021-11-29 17:10:19', '2021-11-29 17:10:19'),
(59, 'order_edit', 'Sửa đơn hàng', 'web', '2020-08-05 12:43:49', '2020-08-05 12:43:49'),
(74, 'setting_edit', 'Sửa cài đặt', 'admin', '2021-11-30 13:07:00', '2021-11-30 13:07:00'),
(75, 'store_view', 'xem kho', 'admin', '2022-05-03 09:08:20', '2022-05-03 09:08:20'),
(76, 'store_edit', 'Sửa kho', 'admin', '2022-05-03 09:08:37', '2022-05-03 09:08:37'),
(77, 'category_view', 'Xem danh mục sách', 'admin', '2022-05-04 07:48:28', '2022-05-04 07:48:51'),
(78, 'category_edit', 'Sửa danh mục sách', 'admin', '2022-05-04 07:49:20', '2022-05-04 07:49:20'),
(79, 'company_view', 'Xem danh mục NSX', 'admin', '2022-05-05 02:14:54', '2022-05-05 02:14:54'),
(80, 'company_edit', 'Sửa danh mục NSX', 'admin', '2022-05-05 02:15:21', '2022-05-05 02:15:21'),
(81, 'book_view', 'Xem sách', 'admin', '2022-05-05 03:43:30', '2022-05-21 08:50:20'),
(82, 'book_edit', 'Sửa sách', 'admin', '2022-05-05 03:43:52', '2022-05-21 08:50:12'),
(83, 'admin_tinh_view', 'Xem tỉnh', 'admin', '2022-05-16 08:07:01', '2022-05-16 08:07:01'),
(84, 'admin_tinh_edit', 'Sửa tỉnh', 'admin', '2022-05-16 08:07:16', '2022-05-16 08:07:16'),
(85, 'comment_edit', 'sửa bình luận', 'admin', '2022-05-18 07:36:13', '2022-05-18 07:36:13'),
(86, 'comment_view', 'Xem bình luận', 'web', '2022-05-18 07:39:20', '2022-05-18 07:39:20'),
(88, 'order_edit', 'sửa order', 'admin', '2022-05-22 15:54:21', '2022-05-22 15:54:21'),
(89, 'account_view', 'xem tài khoản', 'admin', '2022-05-22 15:57:55', '2022-05-22 15:57:55'),
(90, 'account_edit', 'sửa tài khoản', 'admin', '2022-05-22 15:58:21', '2022-05-22 15:58:21'),
(91, 'report_view', 'Báo Cáo', 'admin', '2022-05-24 06:08:04', '2022-05-24 06:08:04'),
(92, 'accountant_view', 'xem kế toán', 'admin', '2022-05-25 04:23:58', '2022-05-25 17:22:39'),
(93, 'accountant_edit', 'Sửa kế toán', 'admin', '2022-05-25 04:24:17', '2022-05-25 17:22:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `popup`
--

DROP TABLE IF EXISTS `popup`;
CREATE TABLE IF NOT EXISTS `popup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_cookie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_deylay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `popup_regis`
--

DROP TABLE IF EXISTS `popup_regis`;
CREATE TABLE IF NOT EXISTS `popup_regis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `position`
--

INSERT INTO `position` (`id`, `name`, `orderby`, `status`, `type`, `level_id`, `note`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Bộ trưởng', 1, 'on', 'Giáo dục', 1, NULL, 0, '2021-12-17 16:25:05', '2021-12-11 09:43:09'),
(2, 'Thứ trưởng', 2, 'on', 'Giáo dục', 1, NULL, 1, '2021-12-17 16:25:07', '2021-12-11 09:16:30'),
(3, 'Giám đốc sở', 3, 'on', 'Giáo dục', 3, NULL, 0, '2021-12-17 16:25:09', '2021-12-11 09:24:35'),
(4, 'Phó giám đốc sở', 4, 'on', 'Giáo dục', 3, NULL, 3, '2021-12-17 16:25:11', '2021-12-11 09:25:40'),
(6, 'Trưởng phòng giáo dục', 5, 'on', 'Giáo dục', 5, NULL, 0, '2021-12-17 16:25:12', '2021-12-11 09:26:52'),
(7, 'Phó phòng giáo dục', 6, 'on', 'Giáo dục', 5, NULL, 6, '2021-12-17 16:25:14', '2021-12-11 09:27:02'),
(8, 'Hiệu Trưởng', 7, 'on', 'Giáo dục', NULL, NULL, 0, '2021-12-17 16:25:17', '2021-12-11 09:42:05'),
(9, 'Giáo viên', 8, 'on', 'Giáo dục', NULL, NULL, 8, '2021-12-17 16:25:19', '2021-12-11 09:42:19'),
(10, 'Học sinh', 9, 'on', 'Giáo dục', NULL, NULL, 8, '2021-12-17 17:30:31', '2021-12-11 09:42:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `crawl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_km` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_post_id` int(11) DEFAULT NULL,
  `code_km` int(11) DEFAULT NULL,
  `code_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `product_relate_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type_id` int(11) NOT NULL,
  `index_product` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift_code_id` int(11) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_relate` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `des`, `video`, `theme_id`, `crawl`, `img`, `url`, `content`, `user_id`, `index_meta`, `title_seo`, `des_seo`, `key_seo`, `canon`, `status`, `pin`, `view`, `created_at`, `updated_at`, `price_km`, `price`, `slide_post_id`, `code_km`, `code_product`, `file_id`, `product_relate_id`, `comment`, `review`, `post_type_id`, `index_product`, `gift_code_id`, `color`, `product_relate`, `video_2`, `orderby`, `icon`) VALUES
(1, 'Giới thiệu', NULL, NULL, NULL, NULL, '6e97d42cd61a17444e0b.jpg', 'gioi-thieu', '<p>Giới thiệu</p>', NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2021-11-23 15:30:41', '2022-05-31 10:02:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(16, 'Dịch vụ hợp tác', NULL, NULL, NULL, NULL, '', 'dich-vu-hop-tac', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 13, '2022-05-16 13:53:14', '2022-05-31 04:43:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Tăng chiết khấu thêm 1%  hoa hồng cho các đại lý trực thuộc', NULL, NULL, NULL, NULL, '', 'tang-chiet-khau-them-1-hoa-hong-cho-cac-dai-ly-truc-thuoc', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 1, '2022-05-16 15:54:52', '2022-05-16 16:02:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Tập truyện mới Conan sắp ra mắt tập 76', NULL, NULL, NULL, NULL, '', 'tap-truyen-moi-conan-sap-ra-mat-tap-76', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 0, '2022-05-16 15:55:18', '2022-05-16 15:55:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Ra mắt phần 2 bộ truyện doraemon', NULL, NULL, NULL, NULL, '', 'ra-mat-phan-2-bo-truyen-doraemon', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 0, '2022-05-16 15:56:05', '2022-05-16 15:56:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Tăng chiết khấu 1% hoa hồng cho các đại lý thư viện CAFE', NULL, NULL, NULL, NULL, '', 'tang-chiet-khau-1-hoa-hong-cho-cac-dai-ly-thu-vien-cafe', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 0, '2022-05-16 15:57:36', '2022-05-16 15:57:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Lượng khách đến thư viện Ngọc Ánh tăng chóng mặt so với tháng trước', NULL, NULL, NULL, NULL, '', 'luong-khach-den-thu-vien-ngoc-anh-tang-chong-mat-so-voi-thang-truoc', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 0, '2022-05-16 15:59:32', '2022-05-31 04:25:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Nhà Xuất Bản A cho ra mắt bộ sách \' Cách làm bạn hiệu quả với con \' được mọi người chờ đợi', NULL, NULL, NULL, NULL, '', 'nha-xuat-ban-a-cho-ra-mat-bo-sach-cach-lam-ban-hieu-qua-voi-con-duoc-moi-nguoi-cho-doi', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 1, '2022-05-16 16:00:53', '2022-05-31 04:25:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(2, 'Con Sáng Tạo', NULL, NULL, 6, NULL, '', 'con-sang-tao', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'off', 'off', NULL, '2021-11-23 18:58:38', '2022-05-09 07:09:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(3, 'Bé Diễm Kiều', 'Mình luôn lo lắng nuôi con không đủ tốt, để con phải khiếm khuyết, thiệt thòi vì..', 'https://www.youtube.com/watch?v=TQFvVxcfu6A', NULL, NULL, 'mj-3-kieu-diem.png', 'be-diem-kieu', '<div class=\"mb-3\">\r\n<p><em>\"B&eacute; ph&aacute;t &acirc;m tốt, biết nhận dạng mặt chữ, thuộc nhiều từ vựng, v&iacute; dụ b&eacute; đ&atilde; c&oacute; thể tự mi&ecirc;u tả được c&aacute;c bộ phận tr&ecirc;n cơ thể m&igrave;nh bằng tiếng Anh\"</em></p>\r\n</div>\r\n<div class=\"new-image mb-4 text-center background-style\"><img src=\"https://www.monkeyjunior.vn/image/original//blog/blog/2020/10/09/044326277/images/mj-3-kieu-diem.png\" /></div>\r\n<p>B&eacute; Diễm Kiều&nbsp;l&agrave; học vi&ecirc;n của Con S&aacute;ng Tạo. Với Diễm Kiều&nbsp;v&agrave; ba mẹ, học tiếng Anh h&agrave;ng ng&agrave;y l&agrave; một niềm vui v&agrave; th&oacute;i quen kh&ocirc;ng thể bỏ.</p>\r\n<p>Từ một em b&eacute; chưa biết n&oacute;i, ngại ng&ugrave;ng trong giao tiếp, Diễm Kiều ng&agrave;y c&agrave;ng&nbsp;th&iacute;ch th&uacute; v&agrave; tiến bộ r&otilde; rệt.&nbsp;B&eacute; ph&aacute;t &acirc;m tốt, biết nhận dạng mặt chữ, thuộc nhiều từ vựng, v&iacute; dụ b&eacute; đ&atilde; c&oacute; thể tự mi&ecirc;u tả được c&aacute;c bộ phận tr&ecirc;n cơ thể m&igrave;nh bằng tiếng Anh, biết đọc theo trọn c&acirc;u v&agrave; hiểu được nghĩa của c&acirc;u đ&oacute;,...</p>\r\n<p>Chưa hết, kh&ocirc;ng những th&iacute;ch th&uacute; với nội dung b&agrave;i học, b&eacute; c&ograve;n rất rất th&iacute;ch th&uacute; với game stickers n&ocirc;ng trại vui nhộn, sau mỗi b&agrave;i học b&eacute; sẽ t&iacute;ch lũy th&ecirc;m được một sticker v&agrave; b&eacute; được tự do s&aacute;ng tạo với những stickers m&agrave; b&eacute; &ldquo;thu hoạch&rdquo; được. Điều đ&oacute; khiến cho b&eacute; c&oacute; cảm gi&aacute;c b&eacute; được thưởng sau mỗi b&agrave;i học.<br />Mẹ b&eacute; Diễm chia sẻ: \"Tất cả thật tuyệt vời đ&uacute;ng kh&ocirc;ng ạ! T&ocirc;i cảm thấy như thế!&nbsp;Nh&igrave;n thấy được sự tiến bộ của con mỗi ng&agrave;y, người l&agrave;m mẹ như t&ocirc;i cảm thấy vui mừng kh&ocirc;n tả. N&oacute;i về sự nhận x&eacute;t, đ&aacute;nh gi&aacute; của bản th&acirc;n t&ocirc;i đối với chương tr&igrave;nh Con S&aacute;ng Tạo, t&ocirc;i cho rằng đ&acirc;y l&agrave; một chương tr&igrave;nh mang t&iacute;nh gi&aacute;o dục tốt v&igrave; chương tr&igrave;nh được thiết kế một c&aacute;ch khoa học, được chia th&agrave;nh ba cấp độ Dễ - Trung b&igrave;nh &ndash; Kh&oacute;, với nhiều chủ đề gần gũi trong đời sống h&agrave;ng ng&agrave;y, gi&uacute;p b&eacute; dễ d&agrave;ng tiếp thu một c&aacute;ch tự nhi&ecirc;n.\"</p>', NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2021-11-24 10:20:05', '2022-05-03 08:04:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(4, 'Bé Minh Thư', 'Bé phát âm tốt, biết nhận dạng mặt chữ, thuộc nhiều từ vựng, ví dụ bé đã', 'https://www.youtube.com/watch?v=mXZ5QdTxEhQ', NULL, NULL, '09-01-2021_11_04_14_HVTB_minhthu.png', 'be-minh-thu', '<div class=\"mb-3\">\r\n<p><strong>&ldquo;Mẹ bảo con l&agrave; cố gắng học tiếng Anh để lớn l&ecirc;n c&oacute; tương lai tốt. Mơ ước của con l&agrave; trở th&agrave;nh một c&ocirc; gi&aacute;o tiếng Anh.&rdquo;</strong></p>\r\n</div>\r\n<div class=\"new-image mb-4 text-center background-style\"><img src=\"https://media.monkeyuni.com/upload/web/storage_web/09-01-2021_11:04:14_HVTB_minhthu.png\" /></div>\r\n<p><em><strong>B&eacute; Minh Thư - học sinh lớp 3B, trường tiểu học Sơn H&agrave;, tỉnh Ninh B&igrave;nh</strong></em>&nbsp;kh&ocirc;ng c&oacute; được m&ocirc;i trường học tập v&agrave; ph&aacute;t triển đ&aacute;ng mơ ước như c&aacute;c bạn nhỏ ở tr&ecirc;n th&agrave;nh phố lớn, việc tiếp cận với tiếng Anh c&oacute; phần bị hạn chế nhưng b&eacute; lại c&oacute; khả năng ghi nhớ ng&ocirc;n ngữ v&agrave; n&oacute;i chuyện bằng tiếng Anh rất th&agrave;nh thạo. Vậy b&iacute; quyết học tiếng Anh của b&eacute; Thư l&agrave; g&igrave;?</p>', NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2021-11-24 10:21:57', '2021-11-24 18:53:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(5, 'Bé Đức Toàn', 'Đến khi con học Monkey Junior thì con đã thật sự yêu tiếng Anh hơn hẳn', 'https://www.youtube.com/watch?v=L_6c5lwsut0', NULL, NULL, 'mj-duc-toan.png', 'be-duc-toan', '<div class=\"mb-3\">\r\n<p><strong>H&agrave;nh tr&igrave;nh từ một cậu b&eacute; chậm n&oacute;i đến giao tiếp th&agrave;nh thạo cả tiếng Anh lẫn tiếng Việt khi mới 4 tuổi.</strong></p>\r\n</div>\r\n<div class=\"new-image mb-4 text-center background-style\"><img src=\"https://www.monkeyjunior.vn/image/original//blog/blog/2020/10/09/114325163/images/mj-duc-toan.png\" /></div>\r\n<p>Từ một cậu b&eacute;&nbsp;chậm n&oacute;i, Đức To&agrave;n&nbsp;đ&atilde; c&oacute; cả một h&agrave;nh tr&igrave;nh để gặt được những tr&aacute;i ngọt&nbsp;- giao tiếp th&agrave;nh thạo cả tiếng Anh lẫn tiếng Việt khi mới 4 tuổi.</p>', NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2021-11-24 10:22:46', '2021-11-24 18:49:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(6, 'Bé Xuxu', 'Cô bé 10 tuổi tại Nghệ An mỗi tuần vượt 25 km đường đèo để làm phiên...', 'https://www.youtube.com/watch?v=TQFvVxcfu6A', NULL, NULL, 'mj-2xu-xu.png', 'be-xuxu', '<div class=\"mb-3\">\r\n<p><strong>\"Đến khi con học Con S&aacute;ng Tạo th&igrave; con đ&atilde; thật sự y&ecirc;u tiếng Anh hơn hẳn\"</strong></p>\r\n</div>\r\n<div class=\"new-image mb-4 text-center background-style\"><img src=\"https://www.monkeyjunior.vn/image/original//blog/blog/2020/10/09/042447283/images/mj-2xu-xu.png\" /></div>\r\n<p>Xuxu bắt đầu học tiếng Anh từ 3 tuổi, khi bắt đầu đi học mẫu gi&aacute;o ở trường. Chị Ngọc Mai - mẹ b&eacute; Xuxu - nhận thấy việc học n&agrave;y l&agrave; chưa đủ, n&ecirc;n đ&atilde; t&igrave;m hiểu về những h&igrave;nh thức học tiếng Anh ngay tại nh&agrave; cho b&eacute;. V&agrave; chị đ&atilde; t&igrave;m ra Con S&aacute;ng Tạo.</p>\r\n<p>Chị Mai chia sẻ: \"Con Xuxu năm nay gần 5 tuổi rồi. Mẹ đ&atilde; cho con l&agrave;m quen với tiếng anh từ năm 3 tuổi v&agrave; đ&atilde; được học ở lớp nữa, nhưng đến khi con học tiếng Anh c&ugrave;ng Con S&aacute;ng Tạo&nbsp;gần 1 năm nay th&igrave; con đ&atilde; thật sự y&ecirc;u th&iacute;ch tiếng Anh hơn hẳn. Con vừa được học, được chơi bằng tiếng Anh n&ecirc;n rất h&agrave;o hứng. B&acirc;y giờ con c&ograve;n dạy tiếng Anh cho cả &ocirc;ng b&agrave;, ba mẹ v&agrave; cả em trai nữa. Cảm ơn Con S&aacute;ng Tạo Junio v&igrave; đ&atilde; tạo ra 1 phương ph&aacute;p học tiếng Anh thật tuyệt như vậy\"</p>\r\n<p>Thật tuyệt vời phải kh&ocirc;ng n&agrave;o? C&ugrave;ng xem lại khoảnh khắc dự thi cuộc thi \"B&eacute; học c&ugrave;ng Con S&aacute;ng Tạo\" của b&eacute; Xuxu nh&eacute;!</p>', NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2021-11-24 10:23:50', '2022-05-03 08:09:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(24, 'Quy định', NULL, NULL, NULL, NULL, '', 'quy-dinh', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 10, '2022-05-31 04:09:47', '2022-06-02 15:08:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(25, 'Hướng dẫn mở thẻ', NULL, NULL, NULL, NULL, '', 'huong-dan-mo-the', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 3, '2022-05-31 04:32:04', '2022-05-31 04:34:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'kế hoạch hoạt động', NULL, NULL, NULL, NULL, '', 'ke-hoach-hoat-dong', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 0, '2022-05-31 04:34:29', '2022-05-31 04:34:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Chương trình đào tạo', NULL, NULL, NULL, NULL, '', 'chuong-trinh-dao-tao', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 3, '2022-05-31 04:34:44', '2022-05-31 04:49:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Thư viện trường học EBOOK', NULL, NULL, NULL, NULL, '', 'thu-vien-truong-hoc-ebook', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 1, '2022-05-31 04:37:37', '2022-05-31 10:02:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Sách nghe', '<iframe width=\"900\" height=\"506\" src=\"https://www.youtube.com/embed/EYrm2sv6PuI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL, NULL, '', 'sach-nghe', '<p>&lt;iframe width=\"900\" height=\"506\" src=\"https://www.youtube.com/embed/EYrm2sv6PuI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen&gt;&lt;/iframe&gt;</p>', NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 2, '2022-05-31 04:39:13', '2022-06-13 19:16:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Dịch vụ hợp tác', NULL, NULL, NULL, NULL, '', 'dich-vu-hop-tac-30', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 0, '2022-05-31 04:40:40', '2022-05-31 04:40:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Liên hệ', NULL, NULL, NULL, NULL, '', 'lien-he', NULL, NULL, 'INDEX, FOLLOW', NULL, NULL, NULL, 'off', 'on', 'off', 3, '2022-05-31 04:42:14', '2022-06-09 08:44:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_cat`
--

DROP TABLE IF EXISTS `post_cat`;
CREATE TABLE IF NOT EXISTS `post_cat` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_cat`
--

INSERT INTO `post_cat` (`id`, `post_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(57, 1, 20, NULL, NULL),
(54, 2, 2, NULL, NULL),
(46, 3, 3, NULL, NULL),
(20, 4, 3, NULL, NULL),
(18, 5, 3, NULL, NULL),
(45, 6, 3, NULL, NULL),
(23, 7, 3, NULL, NULL),
(29, 8, 7, NULL, NULL),
(35, 9, 7, NULL, NULL),
(32, 10, 7, NULL, NULL),
(33, 11, 7, NULL, NULL),
(34, 12, 7, NULL, NULL),
(36, 13, 8, NULL, NULL),
(41, 14, 4, NULL, NULL),
(50, 15, 7, NULL, NULL),
(51, 15, 6, NULL, NULL),
(58, 16, 20, NULL, NULL),
(59, 17, 40, NULL, NULL),
(60, 18, 40, NULL, NULL),
(61, 19, 40, NULL, NULL),
(62, 19, 31, NULL, NULL),
(63, 19, 10, NULL, NULL),
(64, 20, 40, NULL, NULL),
(65, 20, 28, NULL, NULL),
(66, 20, 22, NULL, NULL),
(67, 20, 21, NULL, NULL),
(68, 21, 40, NULL, NULL),
(69, 21, 22, NULL, NULL),
(70, 21, 21, NULL, NULL),
(71, 21, 20, NULL, NULL),
(83, 22, 21, NULL, NULL),
(82, 22, 22, NULL, NULL),
(81, 22, 28, NULL, NULL),
(80, 22, 40, NULL, NULL),
(77, 23, 33, NULL, NULL),
(79, 24, 34, NULL, NULL),
(84, 25, 24, NULL, NULL),
(85, 26, 25, NULL, NULL),
(86, 27, 23, NULL, NULL),
(87, 28, 29, NULL, NULL),
(88, 28, 22, NULL, NULL),
(89, 29, 22, NULL, NULL),
(90, 30, 25, NULL, NULL),
(91, 31, 41, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_type`
--

DROP TABLE IF EXISTS `post_type`;
CREATE TABLE IF NOT EXISTS `post_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feild` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_type`
--

INSERT INTO `post_type` (`id`, `name`, `url`, `feild`, `icon`, `updated_at`, `created_at`) VALUES
(1, 'Bài viết', 'bai-viet', '[\"content\",\"des\"]', '<i class=\"fa fa-pen-square\"></i>', '2020-07-28 22:41:23', '2020-07-28 22:18:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `status` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` int(11) DEFAULT 1,
  `price_old` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `price`
--

INSERT INTO `price` (`id`, `post_id`, `status`, `month`, `price_old`, `price`, `type`, `created_at`, `updated_at`) VALUES
(8, 7, 'on', NULL, NULL, NULL, '5', '2021-11-24 21:58:26', '2021-11-24 21:58:26'),
(39, 2, 'on', 24, '832000', '499000', '5', '2022-05-09 07:09:07', '2022-05-09 07:09:07'),
(40, 2, 'on', 12, '1165000', '699000', '5', '2022-05-09 07:09:07', '2022-05-09 07:09:07'),
(41, 2, 'on', 0, '2499000', '1499000', '5', '2022-05-09 07:09:07', '2022-05-09 07:09:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `book_id` int(50) DEFAULT NULL,
  `rating` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id`, `book_id`, `rating`) VALUES
(1, 20, 3),
(2, 20, 4),
(3, 20, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `school`
--

INSERT INTO `school` (`id`, `name`, `status`, `type`, `updated_at`, `created_at`) VALUES
(1, 'Trường TH Dịch Vọng', 'on', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sidebar`
--

DROP TABLE IF EXISTS `sidebar`;
CREATE TABLE IF NOT EXISTS `sidebar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_jp` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_vi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_jp` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_youtube` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `css_id` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`name`, `css_id`, `css_class`, `status`, `type`, `des`, `updated_at`, `created_at`, `id`) VALUES
('Top', NULL, NULL, 'on', 'top', NULL, '2022-05-05 10:04:08', '2021-11-24 09:53:10', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_img`
--

DROP TABLE IF EXISTS `slide_img`;
CREATE TABLE IF NOT EXISTS `slide_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_id` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_button` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_img`
--

INSERT INTO `slide_img` (`id`, `img`, `img_2`, `video`, `css_id`, `css_class`, `title`, `icon`, `des`, `button`, `link`, `status`, `link_button`, `slide_id`, `post_id`, `orderby`, `updated_at`, `created_at`) VALUES
(40, 'bg-qltv.jpg', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, 'on', NULL, 8, NULL, 1, '2022-05-16 08:52:23', '2022-05-06 02:07:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `huyen_id` int(11) DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `manage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `store`
--

INSERT INTO `store` (`id`, `name`, `tinh_id`, `huyen_id`, `status`, `type`, `address`, `truong_id`, `parent_id`, `manage`, `phone`, `des`, `created_at`, `updated_at`) VALUES
(12, 'Mầm non Long Biên', 27, 318, 'on', 'mam-non', NULL, NULL, NULL, 'Nguyễn Phong Vũ', NULL, NULL, '2022-05-16 15:07:57', '2022-05-16 15:07:57'),
(13, 'Mầm non Đông Anh', 27, 169, 'on', 'mam-non', NULL, NULL, NULL, 'Nguyễn Thị Quỳnh', NULL, NULL, '2022-05-16 15:08:47', '2022-05-16 15:08:47'),
(14, 'Tiểu Học Đống Đa', 27, 183, 'on', 'tieu-hoc', NULL, NULL, NULL, 'Nguyễn Phong Vũ', NULL, NULL, '2022-05-16 15:09:22', '2022-05-16 15:09:22'),
(11, 'Mầm non Hà Đông', 27, 212, 'on', 'mam-non', NULL, NULL, NULL, 'Nguyễn Văn Hà', '0825555555', NULL, '2022-05-16 14:24:55', '2022-05-16 15:06:38'),
(15, 'Tiểu Học Hai Bà Trưng', 27, 221, 'on', NULL, NULL, NULL, NULL, 'Nguyễn Văn Cường', NULL, NULL, '2022-05-16 15:10:11', '2022-05-21 09:33:33'),
(16, 'Tiểu Học Cầu Giấy', 27, 96, 'on', NULL, NULL, NULL, NULL, 'Nguyễn Ngọc Vũ', NULL, NULL, '2022-05-16 15:10:54', '2022-05-16 15:10:54'),
(17, 'Kho Nguyễn Huệ', 1, 8, 'on', 'cafe', NULL, NULL, NULL, 'Trần ngọc đức', NULL, NULL, '2022-05-16 15:11:59', '2022-05-16 15:11:59'),
(18, 'Kho Ngọc Ánh', 41, 368, 'on', 'cafe', NULL, NULL, NULL, 'Bùi Đức Anh', NULL, NULL, '2022-05-16 15:12:39', '2022-05-16 15:12:39'),
(19, 'Kho Trường THCS Hưng thái nghĩa', 41, 368, 'on', 'cafe', NULL, NULL, NULL, 'Đậu Thị Hà', NULL, NULL, '2022-05-16 15:13:14', '2022-06-14 08:29:00'),
(20, 'Kho Trường TH Ba Đình', 27, 14, 'on', 'thcs', NULL, 1, NULL, 'Cao Bá Ngọc', NULL, NULL, '2022-05-16 15:14:13', '2022-05-22 08:25:56'),
(21, 'Kho Vân Đồn', 15, 88, 'on', 'thcs', NULL, NULL, NULL, 'Nguyễn Hưu An', NULL, NULL, '2022-05-16 15:14:42', '2022-05-21 09:51:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relate_post` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `popup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popup_regis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_ring` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theme`
--

INSERT INTO `theme` (`id`, `title`, `index_meta`, `folder`, `file_name`, `title_seo`, `des_seo`, `key_seo`, `canon`, `type`, `style`, `status`, `favicon`, `head`, `width`, `count_post`, `order_post`, `relate_post`, `created_at`, `updated_at`, `popup`, `popup_regis`, `button_ring`, `cat_img`, `post_img`, `og_image`) VALUES
(1, 'Trang chủ', 'INDEX, FOLLOW', NULL, NULL, 'Thư viện sách', NULL, NULL, NULL, 'home', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2022-05-14 11:50:00', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Landing Page', NULL, 'default', 'default', NULL, NULL, NULL, NULL, 'theme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 21:29:19', '2021-11-24 21:29:19', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Menu', NULL, 'he_thong_thu_vien', 'he_thong_thu_vien', NULL, NULL, NULL, NULL, 'theme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-31 03:46:35', '2022-05-31 03:46:35', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theme_row`
--

DROP TABLE IF EXISTS `theme_row`;
CREATE TABLE IF NOT EXISTS `theme_row` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'container',
  `positon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_id` int(11) DEFAULT 1,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_img_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_2_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_2_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_id` int(11) DEFAULT NULL,
  `slide_id_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `form_id_2` int(11) DEFAULT NULL,
  `tab_id` int(11) DEFAULT NULL,
  `tab_id_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `menu_id_2` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `cat_id_2` int(11) DEFAULT NULL,
  `cat_id_3` int(11) DEFAULT NULL,
  `cat_id_4` int(11) DEFAULT NULL,
  `video_youtube` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col_1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col_3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col_4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effect_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effect_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `img_bg` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_code_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feild` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_fanpage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_product_id` int(11) DEFAULT NULL,
  `cat_product_id_2` int(11) DEFAULT NULL,
  `cat_list_id` int(11) DEFAULT NULL,
  `cat_list_id_2` int(11) DEFAULT NULL,
  `cat_post_id` int(11) DEFAULT NULL,
  `cat_post_id_2` int(11) DEFAULT NULL,
  `cat_post_sub_id` int(11) DEFAULT NULL,
  `cat_post_sub_id_2` int(11) DEFAULT NULL,
  `icon_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_text_social` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theme_row`
--

INSERT INTO `theme_row` (`id`, `name`, `type`, `width`, `positon`, `theme_id`, `img`, `link_img`, `style`, `img_2`, `link_img_2`, `css`, `updated_at`, `created_at`, `title`, `title_2`, `des`, `des_2`, `link`, `orderby`, `status`, `effect`, `height`, `content`, `content_2`, `title_en`, `title_2_en`, `content_en`, `content_2_en`, `des_en`, `des_2_en`, `slide_id`, `slide_id_2`, `form_id`, `form_id_2`, `tab_id`, `tab_id_2`, `menu_id`, `menu_id_2`, `cat_id`, `cat_id_2`, `cat_id_3`, `cat_id_4`, `video_youtube`, `col_1`, `col_2`, `col_3`, `col_4`, `posion`, `bg`, `display`, `effect_2`, `effect_3`, `post_id`, `img_bg`, `title_color`, `map_code`, `map_code_2`, `feild`, `facebook_fanpage`, `cat_product_id`, `cat_product_id_2`, `cat_list_id`, `cat_list_id_2`, `cat_post_id`, `cat_post_id_2`, `cat_post_sub_id`, `cat_post_sub_id_2`, `icon_text`, `icon_text_social`) VALUES
(1, 'Header', 'custome', NULL, NULL, 1, 'logo.png', NULL, 'head', NULL, NULL, NULL, '2022-06-11 11:10:52', '2021-11-23 15:42:12', NULL, NULL, NULL, NULL, NULL, 1, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'head', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"img\",\"menu_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL),
(25, 'Chân trang', 'custome', NULL, NULL, 6, NULL, NULL, 'footer', NULL, NULL, NULL, '2021-11-24 22:48:33', '2021-11-24 22:48:33', NULL, NULL, NULL, NULL, NULL, 21, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'body', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Slide', 'custome', NULL, NULL, 1, NULL, NULL, 'slide', NULL, NULL, NULL, '2022-05-16 11:13:12', '2022-05-05 10:03:26', NULL, NULL, NULL, NULL, NULL, 2, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'head', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"slide_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL),
(29, 'Footer', 'custome', NULL, NULL, 1, NULL, NULL, 'footer', NULL, NULL, NULL, '2022-05-16 09:57:26', '2022-05-05 10:23:14', 'Bản quyền thuộc về Talent Library', NULL, NULL, NULL, NULL, 5, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'footer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"des\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL),
(34, 'Danh sách sách', 'custome', NULL, NULL, 1, NULL, NULL, 'main', NULL, NULL, NULL, '2022-05-31 03:48:29', '2022-05-15 09:43:46', NULL, NULL, NULL, NULL, NULL, 4, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'body', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL),
(35, 'Tìm kiếm', 'custome', 'container', NULL, 1, NULL, NULL, 'search', NULL, NULL, NULL, '2022-05-15 09:49:07', '2022-05-15 09:48:44', 'Tìm kiếm', NULL, NULL, NULL, NULL, 3, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'body', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

DROP TABLE IF EXISTS `tinh`;
CREATE TABLE IF NOT EXISTS `tinh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderby` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`id`, `orderby`, `name`, `code`, `status`, `url`, `type`, `address`, `tel`, `tel_2`, `website`, `email`, `note`, `updated_at`, `created_at`) VALUES
(1, 4, 'An Giang', 'AG', 'on', 'an-giang1', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(2, 5, 'Bắc Giang', 'BG', 'on', 'bac-giang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(3, 6, 'Bắc Kạn', 'BK', 'on', 'bac-kan', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(4, 7, 'Bạc Liêu', 'BL', 'on', 'bac-lieu', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(5, 8, 'Bắc Ninh', 'BN', 'on', 'bac-ninh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(6, 9, 'Bà Rịa-Vũng Tàu', 'BRT', 'on', 'ba-ria-vung-tau', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(7, 10, 'Bến Tre', 'BT', 'on', 'ben-tre', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(8, 11, 'Bình Định', 'BD', 'on', 'binh-dinh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(9, 12, 'Bình Dương', 'BDU', 'on', 'binh-duong', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(10, 13, 'Bình Phước', 'BP', 'on', 'binh-phuoc', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(11, 14, 'Bình Thuận', 'BTH', 'on', 'binh-thuan', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(12, 15, 'Cà Mau', 'CM', 'on', 'ca-mau', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(13, 16, 'Cần Thơ', 'CT', 'on', 'can-tho', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(14, 17, 'Cao Bằng', 'CB', 'on', 'cao-bang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(15, 18, 'Đà Nẵng', 'DN', 'on', 'da-nang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(16, 19, 'Đắk Lắk', 'ĐL', 'on', 'dak-lak', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(17, 20, 'Đắk Nông', 'DNO', 'on', 'dak-nong', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(18, 21, 'Điện Biên', 'ĐB', 'on', 'dien-bien', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(19, 22, 'Đồng Nai', 'DNA', 'on', 'dong-nai', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(20, 23, 'Đồng Tháp', 'ĐT', 'on', 'dong-thap', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(21, 24, 'Gia Lai', 'GL', 'on', 'gia-lai', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(22, 25, 'Hà Giang', 'HG', 'on', 'ha-giang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(23, 26, 'Hà Nam', 'HNA', 'on', 'ha-nam', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(24, 27, 'Hà Tĩnh', 'HT', 'on', 'ha-tinh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(25, 28, 'Hải Dương', 'HD', 'on', 'hai-duong', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(26, 29, 'Hải Phòng', 'HP', 'on', 'hai-phong', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(27, 1, 'Hà Nội', 'HN', 'off', 'ha-noi', '', '', '', NULL, '', '', '', '2022-02-22 03:33:34', '2020-07-31 11:09:53'),
(28, 31, 'Hậu Giang', 'HGI', 'on', 'hau-giang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(29, 32, 'Hòa Bình', 'HB', 'on', 'hoa-binh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(30, 2, 'TP. Hồ Chí Minh', 'THCM', 'on', 'tp-ho-chi-minh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(31, 34, 'Hưng Yên', 'HY', 'on', 'hung-yen', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(32, 35, 'Khánh Hòa', 'KH', 'on', 'khanh-hoa', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(33, 36, 'Kiên Giang', 'KG', 'on', 'kien-giang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(34, 37, 'Kon Tum', 'KT', 'on', 'kon-tum', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(35, 38, 'Lai Châu', 'LC', 'on', 'lai-chau', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(36, 39, 'Lâm Đồng', 'LĐ', 'on', 'lam-dong', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(37, 40, 'Lạng Sơn', 'LS', 'on', 'lang-son', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(38, 41, 'Lào Cai', 'LCA', 'on', 'lao-cai', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(39, 42, 'Long An', 'LA', 'on', 'long-an', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(40, 43, 'Nam Định', 'NĐ', 'on', 'nam-dinh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(41, 44, 'Nghệ An', 'NA', 'on', 'nghe-an', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(42, 45, 'Ninh Bình', 'NB', 'on', 'ninh-binh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(43, 46, 'Ninh Thuận', 'NT', 'on', 'ninh-thuan', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(44, 47, 'Phú Thọ', 'PT', 'on', 'phu-tho', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(45, 48, 'Phú Yên', 'PY', 'on', 'phu-yen', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(46, 49, 'Quảng Bình', 'QB', 'on', 'quang-binh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(47, 50, 'Quảng Nam', 'QN', 'on', 'quang-nam', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(48, 51, 'Quảng Ngãi', 'QNG', 'on', 'quang-ngai', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(49, 52, 'Quảng Ninh', 'QNI', 'on', 'quang-ninh', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(50, 53, 'Quảng Trị', 'QT', 'on', 'quang-tri', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(51, 54, 'Sóc Trăng', 'ST', 'on', 'soc-trang', '', '', '', NULL, '', '', '', '2021-12-17 14:39:59', '2020-07-31 11:09:53'),
(52, 55, 'Sơn La', 'SL', 'on', 'son-la', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(53, 56, 'Tây Ninh', 'TN', 'on', 'tay-ninh', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(54, 57, 'Thái Bình', 'TB', 'on', 'thai-binh', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(55, 58, 'Thái Nguyên', 'TN1', 'on', 'thai-nguyen', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(56, 59, 'Thanh Hóa', 'TH', 'on', 'thanh-hoa', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(57, 60, 'Thừa Thiên Huế', 'TTH', 'on', 'thua-thien-hue', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(58, 61, 'Tiền Giang', 'TG', 'on', 'tien-giang', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(59, 62, 'Trà Vinh', 'TV', 'on', 'tra-vinh', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(60, 63, 'Tuyên Quang', 'TQ', 'on', 'tuyen-quang', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(61, 64, 'Vĩnh Long', 'VL', 'on', 'vinh-long', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(62, 65, 'Vĩnh Phúc', 'VP', 'on', 'vinh-phuc', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53'),
(63, 66, 'Yên Bái', 'YB', 'on', 'yen-bai63', '', '', '', NULL, '', '', '', '2021-12-17 14:40:00', '2020-07-31 11:09:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truong`
--

DROP TABLE IF EXISTS `truong`;
CREATE TABLE IF NOT EXISTS `truong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huyen_id` int(11) DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=716 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truong`
--

INSERT INTO `truong` (`id`, `name`, `status`, `type`, `tel`, `email`, `website`, `address`, `tel_2`, `note`, `code`, `url`, `huyen_id`, `tinh_id`, `orderby`, `created_at`, `updated_at`) VALUES
(1, 'Tiểu học Ba Đình', 'on', 'cong_lap', NULL, NULL, NULL, NULL, NULL, NULL, 'THBD', NULL, 14, 27, 1, '2021-12-17 15:51:03', '2021-12-17 15:51:03'),
(2, 'Tiểu học Nguyễn Trung Trực', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tieu-hoc-nguyen-trung-truc', 14, 27, 2, '2021-12-15 20:15:01', '2021-12-15 20:15:01'),
(3, 'Tiểu học Phan Chu Trinh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tieu-hoc-phan-chu-trinh', 14, 27, 3, '2021-12-15 20:15:01', '2021-12-15 20:15:01'),
(8, 'Tiểu học Thành Công A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTCA', 'tieu-hoc-thanh-cong-a', 14, 27, 4, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(9, 'Tiểu học Thành Công B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTCB', 'tieu-hoc-thanh-cong-b', 14, 27, 5, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(10, 'Tiểu học Thủ Lệ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTL', 'tieu-hoc-thu-le', 14, 27, 6, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(11, 'Tiểu học Vạn Phúc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVP', 'tieu-hoc-van-phuc', 14, 27, 7, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(12, 'Tiểu học Đại Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐY', 'tieu-hoc-dai-yen', 14, 27, 8, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(13, 'Tiểu Học Việt Nam – CuBa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVN–C', 'tieu-hoc-viet-nam-cuba', 14, 27, 9, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(14, 'Trường Tiểu Học Hoàng Diệu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHHD', 'truong-tieu-hoc-hoang-dieu', 14, 27, 10, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(15, 'Trường Tiểu Học Hoàng Hoa Thám', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHHHT', 'truong-tieu-hoc-hoang-hoa-tham', 14, 27, 11, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(16, 'Tiểu Học Kim Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKĐ', 'tieu-hoc-kim-dong', 14, 27, 12, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(17, 'Tiểu Học Nghĩa Dũng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THND', 'tieu-hoc-nghia-dung', 14, 27, 13, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(18, 'Trường Tiểu Học Ngọc Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHNH', 'truong-tieu-hoc-ngoc-ha', 14, 27, 14, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(19, 'Trường Tiểu Học Ngọc Khánh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHNK', 'truong-tieu-hoc-ngoc-khanh', 14, 27, 15, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(20, 'Tiểu Học Nguyễn Bá Ngọc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNBN', 'tieu-hoc-nguyen-ba-ngoc', 14, 27, 16, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(21, 'Tiểu Học Nguyễn Tri Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNTP', 'tieu-hoc-nguyen-tri-phuong', 14, 27, 17, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(22, 'Tiểu Học Hà Nội', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHN', 'tieu-hoc-ha-noi', 14, 27, 18, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(23, 'Tiểu Học Việt Nam Singapore', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVNS', 'tieu-hoc-viet-nam-singapore', 14, 27, 19, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(24, 'Trường Tiểu Học Thực Nghiệm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHTN', 'truong-tieu-hoc-thuc-nghiem', 14, 27, 20, '2021-12-17 06:11:41', '2021-12-17 06:11:41'),
(25, 'Tiểu học Yên Bài B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYBB', 'tieu-hoc-yen-bai-b', 18, 27, 1, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(26, 'Tiểu học Yên Bài A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYBA', 'tieu-hoc-yen-bai-a', 18, 27, 2, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(27, 'Tiểu học Vật LạI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVL', 'tieu-hoc-vat-lai', 18, 27, 3, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(28, 'Tiểu học Vạn Thắng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVT', 'tieu-hoc-van-thang', 18, 27, 4, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(29, 'Tiểu học Vân Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVH', 'tieu-hoc-van-hoa', 18, 27, 5, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(30, 'Tiểu học TTNC Bò & Đồng Cỏ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTB&ĐC', 'tieu-hoc-ttnc-bo-dong-co', 18, 27, 6, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(31, 'Tiểu học Tòng BạT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTB', 'tieu-hoc-tong-bat', 18, 27, 7, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(32, 'Tiểu học Tiên Phong', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTP', 'tieu-hoc-tien-phong', 18, 27, 8, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(33, 'Tiểu học Thuỵ An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTA', 'tieu-hoc-thuy-an', 18, 27, 9, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(34, 'Tiểu học Thuần Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTM', 'tieu-hoc-thuan-my', 18, 27, 10, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(35, 'Tiểu học Thái Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTH', 'tieu-hoc-thai-hoa', 18, 27, 11, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(36, 'Tiểu học Tây Đằng B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTĐB', 'tieu-hoc-tay-dang-b', 18, 27, 12, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(37, 'Tiểu học Tây Đằng A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTĐA', 'tieu-hoc-tay-dang-a', 18, 27, 13, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(38, 'Tiểu học Tản Lĩnh – Ba Vì', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTL–BV', 'tieu-hoc-tan-linh-ba-vi', 18, 27, 14, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(39, 'Tiểu học Tản Hồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTH39', 'tieu-hoc-tan-hong', 18, 27, 15, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(40, 'Tiểu học Sơn Đà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThSĐ', 'tieu-hoc-son-da', 18, 27, 16, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(41, 'Tiểu học Phú Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPS', 'tieu-hoc-phu-son', 18, 27, 17, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(42, 'Tiểu học Phú Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPP', 'tieu-hoc-phu-phuong', 18, 27, 18, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(43, 'Tiểu học Phú Đông', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPĐ', 'tieu-hoc-phu-dong', 18, 27, 19, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(44, 'Tiểu học Phú Cường – Ba Vì', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPC–BV', 'tieu-hoc-phu-cuong-ba-vi', 18, 27, 20, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(45, 'Tiểu học Phú Châu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPC', 'tieu-hoc-phu-chau', 18, 27, 21, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(46, 'Tiểu học Phong Vân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPV', 'tieu-hoc-phong-van', 18, 27, 22, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(47, 'Tiểu học Minh Quang B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMQB', 'tieu-hoc-minh-quang-b', 18, 27, 23, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(48, 'Tiểu học Minh Quang A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMQA', 'tieu-hoc-minh-quang-a', 18, 27, 24, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(49, 'Tiểu học Minh Châu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMC', 'tieu-hoc-minh-chau', 18, 27, 25, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(50, 'Tiểu học Khánh Thượng B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKTB', 'tieu-hoc-khanh-thuong-b', 18, 27, 26, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(51, 'Tiểu học Khánh Thượng A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKTA', 'tieu-hoc-khanh-thuong-a', 18, 27, 27, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(52, 'Tiểu học Đồng Thái', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐT', 'tieu-hoc-dong-thai', 18, 27, 28, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(53, 'Tiểu học Đông Quang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐQ', 'tieu-hoc-dong-quang', 18, 27, 29, '2021-12-17 06:34:28', '2021-12-17 06:34:28'),
(54, 'Tiểu học Cổ Đô', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCĐ', 'tieu-hoc-co-do', 18, 27, 30, '2021-12-17 06:34:29', '2021-12-17 06:34:29'),
(55, 'Tiểu học Chu Minh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCM', 'tieu-hoc-chu-minh', 18, 27, 31, '2021-12-17 06:34:29', '2021-12-17 06:34:29'),
(56, 'Tiểu học Châu Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCS', 'tieu-hoc-chau-son', 18, 27, 32, '2021-12-17 06:34:29', '2021-12-17 06:34:29'),
(57, 'Tiểu học Cam Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCT', 'tieu-hoc-cam-thuong', 18, 27, 33, '2021-12-17 06:34:29', '2021-12-17 06:34:29'),
(58, 'Tiểu học CẩM Lĩnh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCL', 'tieu-hoc-cam-linh', 18, 27, 34, '2021-12-17 06:34:29', '2021-12-17 06:34:29'),
(59, 'Tiểu học Ba TrạI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThBT', 'tieu-hoc-ba-trai', 18, 27, 35, '2021-12-17 06:34:29', '2021-12-17 06:34:29'),
(60, 'Tiểu học An Dương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThAD', 'tieu-hoc-an-duong', 531, 27, 1, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(61, 'Tiểu học Chu Văn An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCVA', 'tieu-hoc-chu-van-an', 531, 27, 2, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(62, 'Tiểu học Đông Thái', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐT', 'tieu-hoc-dong-thai', 531, 27, 3, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(63, 'Tiểu học Nhật Tân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNT', 'tieu-hoc-nhat-tan', 531, 27, 4, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(64, 'Tiểu học Phú Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPT', 'tieu-hoc-phu-thuong', 531, 27, 5, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(65, 'Tiểu học Quảng An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThQA', 'tieu-hoc-quang-an', 531, 27, 6, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(66, 'Tiểu học Tứ Liên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTL', 'tieu-hoc-tu-lien', 531, 27, 7, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(67, 'Tiểu học Xuân La', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThXL', 'tieu-hoc-xuan-la', 531, 27, 8, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(68, 'Tiểu Học Sao Mai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSM', 'tieu-hoc-sao-mai', 531, 27, 9, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(69, 'Trường Tiểu Học Song Ngữ Horizon', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHSNH', 'truong-tieu-hoc-song-ngu-horizon', 531, 27, 10, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(70, 'Trường Tiểu Học Genesis', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHG', 'truong-tieu-hoc-genesis', 531, 27, 11, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(71, 'Tiểu Học Dân Lập Hà Nội Academy', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDLHNA', 'tieu-hoc-dan-lap-ha-noi-academy', 531, 27, 12, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(72, 'Tiểu Học Sunshine Maple Bear', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSMB', 'tieu-hoc-sunshine-maple-bear', 531, 27, 13, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(73, 'Trường Quốc Tế Liên Hợp Quốc Hà Nội UNIS', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TQTLHQHNU', 'truong-quoc-te-lien-hop-quoc-ha-noi-unis', 531, 27, 14, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(74, 'Trường Tiểu Học Quốc Tế Singapore', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHQTS', 'truong-tieu-hoc-quoc-te-singapore', 531, 27, 15, '2021-12-17 06:35:09', '2021-12-17 06:35:09'),
(75, 'Tiểu Học Bình Phú A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBPA', 'tieu-hoc-binh-phu-a', 537, 27, 1, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(76, 'Tiểu Học Bình Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBY', 'tieu-hoc-binh-yen', 537, 27, 2, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(77, 'Tiểu Học Cần Kiệm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCK', 'tieu-hoc-can-kiem', 537, 27, 3, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(78, 'Tiểu Học Minh Hà B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMHB', 'tieu-hoc-minh-ha-b', 537, 27, 4, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(79, 'Tiểu Học Đại Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐĐ', 'tieu-hoc-dai-dong', 537, 27, 5, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(80, 'Tiểu Học Đồng Trúc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-dong-truc', 537, 27, 6, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(81, 'Tiểu Học Hương Ngải', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHN', 'tieu-hoc-huong-ngai', 537, 27, 7, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(82, 'Tiểu Học Kim Quan', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKQ', 'tieu-hoc-kim-quan', 537, 27, 8, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(83, 'Tiểu Học Liên Quan', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLQ', 'tieu-hoc-lien-quan', 537, 27, 9, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(84, 'Tiểu Học Phùng Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPX', 'tieu-hoc-phung-xa', 537, 27, 10, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(85, 'Tiểu Học Thạch Hòa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-thach-hoa', 537, 27, 11, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(86, 'Tiểu Học Tiến Xuân B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTXB', 'tieu-hoc-tien-xuan-b', 537, 27, 12, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(87, 'Tiểu Học Yên Bình B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THYBB', 'tieu-hoc-yen-binh-b', 537, 27, 13, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(88, 'Tiểu Học Thạch Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTX', 'tieu-hoc-thach-xa', 537, 27, 14, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(89, 'Tiểu Học Bình Phú B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBPB', 'tieu-hoc-binh-phu-b', 537, 27, 15, '2021-12-17 06:37:00', '2021-12-17 06:37:00'),
(90, 'Tiểu Học Cẩm Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCY', 'tieu-hoc-cam-yen', 537, 27, 16, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(91, 'Tiểu Học Minh Hà A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMHA', 'tieu-hoc-minh-ha-a', 537, 27, 17, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(92, 'Tiểu Học Chàng Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCS', 'tieu-hoc-chang-son', 537, 27, 18, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(93, 'Tiểu Học Dị Nậu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDN', 'tieu-hoc-di-nau', 537, 27, 19, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(94, 'Tiểu Học Hạ Bằng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHB', 'tieu-hoc-ha-bang', 537, 27, 20, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(95, 'Tiểu Học Hữu Bằng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHB95', 'tieu-hoc-huu-bang', 537, 27, 21, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(96, 'Tiểu Học Lại Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLT', 'tieu-hoc-lai-thuong', 537, 27, 22, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(97, 'Tiểu Học Phú Kim', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPK', 'tieu-hoc-phu-kim', 537, 27, 23, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(98, 'Tiểu Học Tân Xã', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTX98', 'tieu-hoc-tan-xa', 537, 27, 24, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(99, 'Tiểu Học Tiến Xuân A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTXA', 'tieu-hoc-tien-xuan-a', 537, 27, 25, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(100, 'Tiểu Học Yên Bình A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THYBA', 'tieu-hoc-yen-binh-a', 537, 27, 26, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(101, 'Tiểu Học Yên Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THYT', 'tieu-hoc-yen-trung', 537, 27, 27, '2021-12-17 06:37:01', '2021-12-17 06:37:01'),
(102, 'Tiểu Học Bích Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBH', 'tieu-hoc-bich-hoa', 551, 27, 1, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(103, 'Tiểu Học Bình Minh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBMA', 'tieu-hoc-binh-minh-a', 551, 27, 2, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(104, 'Tiểu Học Bình Minh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBMB', 'tieu-hoc-binh-minh-b', 551, 27, 3, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(105, 'Tiểu Học Cao Dương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCD', 'tieu-hoc-cao-duong', 551, 27, 4, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(106, 'Tiểu Học Cao Viên I', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCVI', 'tieu-hoc-cao-vien-i', 551, 27, 5, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(107, 'Tiểu Học Cao Viên Ii', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCVI107', 'tieu-hoc-cao-vien-ii', 551, 27, 6, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(108, 'Tiểu Học Cự Khê', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCK', 'tieu-hoc-cu-khe', 551, 27, 7, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(109, 'Tiểu Học Dân Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDH', 'tieu-hoc-dan-hoa', 551, 27, 8, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(110, 'Tiểu Học Đỗ ĐộNg', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐĐ', 'tieu-hoc-do-dong', 551, 27, 9, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(111, 'Tiểu Học HồNg Dương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHD', 'tieu-hoc-hong-duong', 551, 27, 10, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(112, 'Tiểu Học Kim Thư', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKT', 'tieu-hoc-kim-thu', 551, 27, 11, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(113, 'Tiểu Học Liên Châu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLC', 'tieu-hoc-lien-chau', 551, 27, 12, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(114, 'Tiểu Học Phương Trung I', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPTI', 'tieu-hoc-phuong-trung-i', 551, 27, 13, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(115, 'Tiểu Học Phương Trung Ii', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPTI115', 'tieu-hoc-phuong-trung-ii', 551, 27, 14, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(116, 'Tiểu Học Tam Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-tam-hung', 551, 27, 15, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(117, 'Tiểu Học Tân Ước', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTU', 'tieu-hoc-tan-uoc', 551, 27, 16, '2021-12-17 07:34:42', '2021-12-17 06:41:44'),
(118, 'Tiểu Học Thanh Cao', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTC', 'tieu-hoc-thanh-cao', 551, 27, 17, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(119, 'Tiểu Học Thanh Văn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTV', 'tieu-hoc-thanh-van', 551, 27, 18, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(120, 'Tiểu Học Thị TrấN Kim Bài', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTKB', 'tieu-hoc-thi-tran-kim-bai', 551, 27, 19, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(121, 'Tiểu Học Xuân Dương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXD', 'tieu-hoc-xuan-duong', 551, 27, 20, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(122, 'Tiểu Học Kim An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKA', 'tieu-hoc-kim-an', 551, 27, 21, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(123, 'Tiểu Học Mỹ Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMH', 'tieu-hoc-my-hung', 551, 27, 22, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(124, 'Tiểu Học Thanh Mai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTM', 'tieu-hoc-thanh-mai', 551, 27, 23, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(125, 'Tiểu Học Thanh Thuỳ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-thanh-thuy', 551, 27, 24, '2021-12-17 06:41:44', '2021-12-17 06:41:44'),
(126, 'Tiểu học Cổ Nhuế 2A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCN2', 'tieu-hoc-co-nhue-2a', 42, 27, 1, '2021-12-17 06:42:19', '2021-12-17 06:42:19'),
(127, 'Tiểu học Cổ Nhuế 2B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCN2127', 'tieu-hoc-co-nhue-2b', 42, 27, 2, '2021-12-17 06:42:19', '2021-12-17 06:42:19'),
(128, 'Tiểu học Minh Khai A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMKA', 'tieu-hoc-minh-khai-a', 42, 27, 3, '2021-12-17 06:42:19', '2021-12-17 06:42:19'),
(129, 'Tiểu học Minh Khai B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMKB', 'tieu-hoc-minh-khai-b', 42, 27, 4, '2021-12-17 06:42:19', '2021-12-17 06:42:19'),
(130, 'Tiểu học Đông Ngạc A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐNA', 'tieu-hoc-dong-ngac-a', 42, 27, 5, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(131, 'Tiểu học Đông Ngạc B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐNB', 'tieu-hoc-dong-ngac-b', 42, 27, 6, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(132, 'Tiểu học Tây Tựu A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTA', 'tieu-hoc-tay-tuu-a', 42, 27, 7, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(133, 'Tiểu học Tây Tựu B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTB', 'tieu-hoc-tay-tuu-b', 42, 27, 8, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(134, 'Tiểu học Xuân Đỉnh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThXĐ', 'tieu-hoc-xuan-dinh', 42, 27, 9, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(135, 'Tiểu học Liên Mạc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLM', 'tieu-hoc-lien-mac', 42, 27, 10, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(136, 'Tiểu học Hồ Tùng Mậu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThHTM', 'tieu-hoc-ho-tung-mau', 42, 27, 11, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(137, 'Tiểu học Đức Thắng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐT', 'tieu-hoc-duc-thang', 42, 27, 12, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(138, 'Tiểu học Thụy Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTP', 'tieu-hoc-thuy-phuong', 42, 27, 13, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(139, 'Tiểu học Thượng Cát', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTC', 'tieu-hoc-thuong-cat', 42, 27, 14, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(140, 'Tiểu học Phúc Diễn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPD', 'tieu-hoc-phuc-dien', 42, 27, 15, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(141, 'Tiểu học Phú Diễn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPD141', 'tieu-hoc-phu-dien', 42, 27, 16, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(142, 'Tiểu học I-Sắc Niu-Tơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThIN', 'tieu-hoc-i-sac-niu-ton', 42, 27, 17, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(143, 'Tiểu học Đoàn Thị Điểm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐTĐ', 'tieu-hoc-doan-thi-diem', 42, 27, 18, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(144, 'Tiểu học Pascal', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThP', 'tieu-hoc-pascal', 42, 27, 19, '2021-12-17 06:42:20', '2021-12-17 06:42:20'),
(145, 'Tiểu học A Thị Trấn Văn Điển', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThATTVĐ', 'tieu-hoc-a-thi-tran-van-dien', 554, 27, 1, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(146, 'Tiểu học B Thị trấn Văn Điển', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThBTtVĐ', 'tieu-hoc-b-thi-tran-van-dien', 554, 27, 2, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(147, 'Tiểu học Đại Áng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐÁ', 'tieu-hoc-dai-ang', 554, 27, 3, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(148, 'Tiểu học Đông Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐM', 'tieu-hoc-dong-my', 554, 27, 4, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(149, 'Tiểu học Duyên Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDH', 'tieu-hoc-duyen-ha', 554, 27, 5, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(150, 'Tiểu học Hữu Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThHH', 'tieu-hoc-huu-hoa', 554, 27, 6, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(151, 'Tiểu học Khuyết Tật', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKT', 'tieu-hoc-khuyet-tat', 554, 27, 7, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(152, 'Tiểu học Liên Ninh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLN', 'tieu-hoc-lien-ninh', 554, 27, 8, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(153, 'Tiểu học Ngọc Hồi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNH', 'tieu-hoc-ngoc-hoi', 554, 27, 9, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(154, 'Tiểu học Ngũ Hiệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNH154', 'tieu-hoc-ngu-hiep', 554, 27, 10, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(155, 'Tiểu học Tam Hiệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTH', 'tieu-hoc-tam-hiep', 554, 27, 11, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(156, 'Tiểu học Tân Triều', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTT', 'tieu-hoc-tan-trieu', 554, 27, 12, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(157, 'Tiểu học Tả Thanh Oai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTO', 'tieu-hoc-ta-thanh-oai', 554, 27, 13, '2021-12-17 06:43:32', '2021-12-17 06:43:32'),
(158, 'Tiểu học Thanh Liệt', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTL', 'tieu-hoc-thanh-liet', 554, 27, 14, '2021-12-17 06:43:33', '2021-12-17 06:43:33'),
(159, 'Tiểu học Tứ Hiệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTH159', 'tieu-hoc-tu-hiep', 554, 27, 15, '2021-12-17 06:43:33', '2021-12-17 06:43:33'),
(160, 'Tiểu học Vạn Phúc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVP', 'tieu-hoc-van-phuc', 554, 27, 16, '2021-12-17 06:43:33', '2021-12-17 06:43:33'),
(161, 'Tiểu học Vĩnh Quỳnh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVQ', 'tieu-hoc-vinh-quynh', 554, 27, 17, '2021-12-17 06:43:33', '2021-12-17 06:43:33'),
(162, 'Tiểu học Yên Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYM', 'tieu-hoc-yen-my', 554, 27, 18, '2021-12-17 06:43:33', '2021-12-17 06:43:33'),
(163, 'Tiểu học Yên Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYX', 'tieu-hoc-yen-xa', 554, 27, 19, '2021-12-17 06:43:33', '2021-12-17 06:43:33'),
(164, 'Tiểu học Phan Đình Giót', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPĐG', 'tieu-hoc-phan-dinh-giot', 555, 27, 1, '2021-12-17 06:44:11', '2021-12-17 06:44:11'),
(165, 'Tiểu học Khương Mai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKM', 'tieu-hoc-khuong-mai', 555, 27, 2, '2021-12-17 06:44:11', '2021-12-17 06:44:11'),
(166, 'Tiểu học Kim Giang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKG', 'tieu-hoc-kim-giang', 555, 27, 3, '2021-12-17 06:44:11', '2021-12-17 06:44:11'),
(167, 'Tiểu học Đặng Trần Côn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐTC', 'tieu-hoc-dang-tran-con', 555, 27, 4, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(168, 'Tiểu học Nguyễn Trãi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNT', 'tieu-hoc-nguyen-trai', 555, 27, 5, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(169, 'Tiểu học Nguyễn Tuân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNT169', 'tieu-hoc-nguyen-tuan', 555, 27, 6, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(170, 'Tiểu học Nhân Chính', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNC', 'tieu-hoc-nhan-chinh', 555, 27, 7, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(171, 'Tiểu học Thanh Xuân Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTXT', 'tieu-hoc-thanh-xuan-trung', 555, 27, 8, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(172, 'Tiểu học Khương Đình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKĐ', 'tieu-hoc-khuong-dinh', 555, 27, 9, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(173, 'Tiểu học Thanh Xuân Nam', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTXN', 'tieu-hoc-thanh-xuan-nam', 555, 27, 10, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(174, 'Tiểu học Phương Liệt', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPL', 'tieu-hoc-phuong-liet', 555, 27, 11, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(175, 'Tiểu học Hạ Đình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThHĐ', 'tieu-hoc-ha-dinh', 555, 27, 12, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(176, 'Tiểu học Thanh Xuân Bắc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTXB', 'tieu-hoc-thanh-xuan-bac', 555, 27, 13, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(177, 'Tiểu học Ngôi Sao Hà Nội', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNSHN', 'tieu-hoc-ngoi-sao-ha-noi', 555, 27, 14, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(178, 'Tiểu học Vietschool Pandora', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVP', 'tieu-hoc-vietschool-pandora', 555, 27, 15, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(179, 'Tiểu học Song ngữ Brendon', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThSnB', 'tieu-hoc-song-ngu-brendon', 555, 27, 16, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(180, 'Trường Quốc Tế Đa Cấp Anh Việt Hoàng Gia (BVIS)', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TQTĐCAVHG(', 'truong-quoc-te-da-cap-anh-viet-hoang-gia-bvis-', 555, 27, 17, '2021-12-17 06:44:12', '2021-12-17 06:44:12'),
(181, 'Tiểu Học Ái Mộ A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THÁMA', 'tieu-hoc-ai-mo-a', 318, 27, 1, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(182, 'Tiểu Học Đô Thị Sài Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐTSĐ', 'tieu-hoc-do-thi-sai-dong', 318, 27, 2, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(183, 'Tiểu Học Thạch Bàn B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTBB', 'tieu-hoc-thach-ban-b', 318, 27, 3, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(184, 'Tiểu Học Ái Mộ B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THÁMB', 'tieu-hoc-ai-mo-b', 318, 27, 4, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(185, 'Tiểu Học Bồ Đề', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBĐ', 'tieu-hoc-bo-de', 318, 27, 5, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(186, 'Tiểu Học Cự Khối', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCK', 'tieu-hoc-cu-khoi', 318, 27, 6, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(187, 'Tiểu Học Đức Giang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐG', 'tieu-hoc-duc-giang', 318, 27, 7, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(188, 'Tiểu Học Đô thị Việt Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐtVH', 'tieu-hoc-do-thi-viet-hung', 318, 27, 8, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(189, 'Tiểu Học Giang Biên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THGB', 'tieu-hoc-giang-bien', 318, 27, 9, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(190, 'Tiểu Học Gia Thụy', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THGT', 'tieu-hoc-gia-thuy', 318, 27, 10, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(191, 'Tiểu Học Hy Vọng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHV', 'tieu-hoc-hy-vong', 318, 27, 11, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(192, 'Tiểu Học Long Biên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLB', 'tieu-hoc-long-bien', 318, 27, 12, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(193, 'Tiểu Học Lý Thường Kiệt', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLTK', 'tieu-hoc-ly-thuong-kiet', 318, 27, 13, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(194, 'Tiểu Học Ngọc Lâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNL', 'tieu-hoc-ngoc-lam', 318, 27, 14, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(195, 'Tiểu Học Ngọc Thụy', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNT', 'tieu-hoc-ngoc-thuy', 318, 27, 15, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(196, 'Tiểu Học Ngô Gia Tự', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNGT', 'tieu-hoc-ngo-gia-tu', 318, 27, 16, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(197, 'Tiểu Học Phúc Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPĐ', 'tieu-hoc-phuc-dong', 318, 27, 17, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(198, 'Tiểu Học Phúc Lợi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPL', 'tieu-hoc-phuc-loi', 318, 27, 18, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(199, 'Tiểu Học Sài Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSĐ', 'tieu-hoc-sai-dong', 318, 27, 19, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(200, 'Tiểu Học Thanh Am', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTA', 'tieu-hoc-thanh-am', 318, 27, 20, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(201, 'Tiểu Học Thạch Bàn A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTBA', 'tieu-hoc-thach-ban-a', 318, 27, 21, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(202, 'Tiểu Học Thượng Thanh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-thuong-thanh', 318, 27, 22, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(203, 'Tiểu Học Việt Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVH', 'tieu-hoc-viet-hung', 318, 27, 23, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(204, 'Tiểu Học Vũ Xuân Thiều', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVXT', 'tieu-hoc-vu-xuan-thieu', 318, 27, 24, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(205, 'Tiểu học Gia Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThGT205', 'tieu-hoc-gia-thuong', 318, 27, 25, '2021-12-17 06:44:50', '2021-12-17 06:44:50'),
(206, 'Tiểu Học Chương Dương – Thường Tín', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCD–TT', 'tieu-hoc-chuong-duong-thuong-tin', 577, 27, 1, '2021-12-17 07:32:39', '2021-12-17 06:47:41'),
(207, 'Tiểu Học Dũng Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDT', 'tieu-hoc-dung-tien', 577, 27, 2, '2021-12-17 07:32:36', '2021-12-17 06:47:41'),
(208, 'Tiểu Học Duyên Thái', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDT208', 'tieu-hoc-duyen-thai', 577, 27, 3, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(209, 'Tiểu Học Hà HồI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHH', 'tieu-hoc-ha-hoi', 577, 27, 4, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(210, 'Tiểu Học Hiền Giang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHG', 'tieu-hoc-hien-giang', 577, 27, 5, '2021-12-17 07:32:42', '2021-12-17 06:47:41'),
(211, 'Tiểu Học Hoà Bình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHB', 'tieu-hoc-hoa-binh', 577, 27, 6, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(212, 'Tiểu Học HồNg Vân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHV', 'tieu-hoc-hong-van', 577, 27, 7, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(213, 'Tiểu Học Khánh Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKH', 'tieu-hoc-khanh-ha', 577, 27, 8, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(214, 'Tiểu Học Lê LợI – Thường Tín', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLL–TT', 'tieu-hoc-le-loi-thuong-tin', 577, 27, 9, '2021-12-17 07:32:49', '2021-12-17 06:47:41'),
(215, 'Tiểu Học Liên Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLP', 'tieu-hoc-lien-phuong', 577, 27, 10, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(216, 'Tiểu Học Minh CườNg', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMC', 'tieu-hoc-minh-cuong', 577, 27, 11, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(217, 'Tiểu Học Nghiêm Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNX', 'tieu-hoc-nghiem-xuyen', 577, 27, 12, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(218, 'Tiểu Học Nguyễn Trãi – Thường Tín', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNT–TT', 'tieu-hoc-nguyen-trai-thuong-tin', 577, 27, 13, '2021-12-17 07:33:02', '2021-12-17 06:47:41'),
(219, 'Tiểu Học Nhị Khê', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNK', 'tieu-hoc-nhi-khe', 577, 27, 14, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(220, 'Tiểu Học Ninh Sở', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNS', 'tieu-hoc-ninh-so', 577, 27, 15, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(221, 'Tiểu Học QuấT Động', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQĐ', 'tieu-hoc-quat-dong', 577, 27, 16, '2021-12-17 07:33:07', '2021-12-17 06:47:41'),
(222, 'Tiểu Học Tân Minh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTM', 'tieu-hoc-tan-minh', 577, 27, 17, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(223, 'Tiểu Học Thắng LợI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-thang-loi', 577, 27, 18, '2021-12-17 07:33:10', '2021-12-17 06:47:41'),
(224, 'Tiểu Học Thị Trấn – Thường Tín', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT–TT', 'tieu-hoc-thi-tran-thuong-tin', 577, 27, 19, '2021-12-17 07:33:17', '2021-12-17 06:47:41'),
(225, 'Tiểu Học Thống Nhất', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTN', 'tieu-hoc-thong-nhat', 577, 27, 20, '2021-12-17 07:33:30', '2021-12-17 06:47:41'),
(226, 'Tiểu Học Thư Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP', 'tieu-hoc-thu-phu', 577, 27, 21, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(227, 'Tiểu Học Tiền Phong – Thường Tín', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP–TT', 'tieu-hoc-tien-phong-thuong-tin', 577, 27, 22, '2021-12-17 07:33:40', '2021-12-17 06:47:41'),
(228, 'Tiểu Học Tô HiệU', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-to-hieu', 577, 27, 23, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(229, 'Tiểu Học Tự Nhiên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTN229', 'tieu-hoc-tu-nhien', 577, 27, 24, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(230, 'Tiểu Học Văn Bình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVB', 'tieu-hoc-van-binh', 577, 27, 25, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(231, 'Tiểu Học Vạn Điểm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVĐ', 'tieu-hoc-van-diem', 577, 27, 26, '2021-12-17 07:33:48', '2021-12-17 06:47:41'),
(232, 'Tiểu Học Văn Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVP', 'tieu-hoc-van-phu', 577, 27, 27, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(233, 'Tiểu Học Vân Tảo', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVT', 'tieu-hoc-van-tao', 577, 27, 28, '2021-12-17 07:33:55', '2021-12-17 06:47:41'),
(234, 'Tiểu Học Văn Tự', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVT234', 'tieu-hoc-van-tu', 577, 27, 29, '2021-12-17 06:47:41', '2021-12-17 06:47:41'),
(235, 'Tiểu Học Văn Khê C', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVKC', 'tieu-hoc-van-khe-c', 342, 27, 1, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(236, 'Tiểu Học ĐạI Thịnh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐTB', 'tieu-hoc-dai-thinh-b', 342, 27, 2, '2021-12-17 07:33:59', '2021-12-17 06:49:56'),
(237, 'Tiểu Học Chi Đông', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCĐ', 'tieu-hoc-chi-dong', 342, 27, 3, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(238, 'Tiểu Học Chu Phan A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCPA', 'tieu-hoc-chu-phan-a', 342, 27, 4, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(239, 'Tiểu Học Chu Phan B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCPB', 'tieu-hoc-chu-phan-b', 342, 27, 5, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(240, 'Tiểu Học ĐạI Thịnh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐTA', 'tieu-hoc-dai-thinh-a', 342, 27, 6, '2021-12-17 07:34:05', '2021-12-17 06:49:56'),
(241, 'Tiểu Học Hoàng Kim', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHK', 'tieu-hoc-hoang-kim', 342, 27, 7, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(242, 'Tiểu Học Kim Hoa A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKHA', 'tieu-hoc-kim-hoa-a', 342, 27, 8, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(243, 'Tiểu Học Kim Hoa B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKHB', 'tieu-hoc-kim-hoa-b', 342, 27, 9, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(244, 'Tiểu Học Liên Mạc A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLMA', 'tieu-hoc-lien-mac-a', 342, 27, 10, '2021-12-17 07:31:40', '2021-12-17 06:49:56'),
(245, 'Tiểu Học Liên Mạc B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLMB', 'tieu-hoc-lien-mac-b', 342, 27, 11, '2021-12-17 07:31:43', '2021-12-17 06:49:56'),
(246, 'Tiểu Học Mê Linh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THML', 'tieu-hoc-me-linh', 342, 27, 12, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(247, 'Tiểu Học Quang Minh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQMA', 'tieu-hoc-quang-minh-a', 342, 27, 13, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(248, 'Tiểu Học Quang Minh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQMB', 'tieu-hoc-quang-minh-b', 342, 27, 14, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(249, 'Tiểu Học Tam Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTĐ', 'tieu-hoc-tam-dong', 342, 27, 15, '2021-12-17 07:31:55', '2021-12-17 06:49:56'),
(250, 'Tiểu Học Thạch Đà A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTĐA', 'tieu-hoc-thach-da-a', 342, 27, 16, '2021-12-17 07:31:47', '2021-12-17 06:49:56'),
(251, 'Tiểu Học Thạch Đà B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTĐB', 'tieu-hoc-thach-da-b', 342, 27, 17, '2021-12-17 07:31:51', '2021-12-17 06:49:56'),
(252, 'Tiểu Học Thanh Lâm A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTLA', 'tieu-hoc-thanh-lam-a', 342, 27, 18, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(253, 'Tiểu Học Thanh Lâmb', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-thanh-lamb', 342, 27, 19, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(254, 'Tiểu Học TiềN Phong A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTPA', 'tieu-hoc-tien-phong-a', 342, 27, 20, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(255, 'Tiểu Học TiềN Phong B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTPB', 'tieu-hoc-tien-phong-b', 342, 27, 21, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(256, 'Tiểu Học TiếN Thắng A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTA', 'tieu-hoc-tien-thang-a', 342, 27, 22, '2021-12-17 07:32:01', '2021-12-17 06:49:56'),
(257, 'Tiểu Học TiếN Thắng B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTB', 'tieu-hoc-tien-thang-b', 342, 27, 23, '2021-12-17 07:32:04', '2021-12-17 06:49:56'),
(258, 'Tiểu Học TiếN Thịnh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTA258', 'tieu-hoc-tien-thinh-a', 342, 27, 24, '2021-12-17 07:32:07', '2021-12-17 06:49:56'),
(259, 'Tiểu Học TiếN Thịnh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTB259', 'tieu-hoc-tien-thinh-b', 342, 27, 25, '2021-12-17 07:32:11', '2021-12-17 06:49:56'),
(260, 'Tiểu Học Tráng ViệT A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTVA', 'tieu-hoc-trang-viet-a', 342, 27, 26, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(261, 'Tiểu Học Tráng ViệT B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTVB', 'tieu-hoc-trang-viet-b', 342, 27, 27, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(262, 'Tiểu Học Tự LậP A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTLA262', 'tieu-hoc-tu-lap-a', 342, 27, 28, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(263, 'Tiểu Học Tự LậP B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTLB', 'tieu-hoc-tu-lap-b', 342, 27, 29, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(264, 'Tiểu Học Văn Khê A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVKA', 'tieu-hoc-van-khe-a', 342, 27, 30, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(265, 'Tiểu Học Văn Khê B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVKB', 'tieu-hoc-van-khe-b', 342, 27, 31, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(266, 'Tiểu Học VạN Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVY', 'tieu-hoc-van-yen', 342, 27, 32, '2021-12-17 06:49:56', '2021-12-17 06:49:56'),
(267, 'Tiểu học Nam Trung Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNTY', 'tieu-hoc-nam-trung-yen', 96, 27, 1, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(268, 'Tiểu học Nguyễn Khả Trạc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNKT', 'tieu-hoc-nguyen-kha-trac', 96, 27, 2, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(269, 'Tiểu học Nghĩa Đô', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNĐ', 'tieu-hoc-nghia-do', 96, 27, 3, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(270, 'Tiểu học Nghĩa Tân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNT', 'tieu-hoc-nghia-tan', 96, 27, 4, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(271, 'Tiểu học Mai Dịch', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMD', 'tieu-hoc-mai-dich', 96, 27, 5, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(272, 'Tiểu học Dịch Vọng B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDVB', 'tieu-hoc-dich-vong-b', 96, 27, 6, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(273, 'Tiểu học Dịch Vọng A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDVA', 'tieu-hoc-dich-vong-a', 96, 27, 7, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(274, 'Tiểu học Quan Hoa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThQH', 'tieu-hoc-quan-hoa', 96, 27, 8, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(275, 'Tiểu học Yên Hòa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYH', 'tieu-hoc-yen-hoa', 96, 27, 9, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(276, 'Tiểu học Trung Hòa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTH', 'tieu-hoc-trung-hoa', 96, 27, 10, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(277, 'Tiểu học Trung Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTY', 'tieu-hoc-trung-yen', 96, 27, 11, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(278, 'Tiểu học An Hòa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThAH', 'tieu-hoc-an-hoa', 96, 27, 12, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(279, 'Trường Hermann Gmeiner', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THG', 'truong-hermann-gmeiner', 96, 27, 13, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(280, 'Tiểu học Thăng Long Kidsmart', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTLK', 'tieu-hoc-thang-long-kidsmart', 96, 27, 14, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(281, 'Tiểu học Quốc Tế Wateway', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThQTW', 'tieu-hoc-quoc-te-wateway', 96, 27, 15, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(282, 'Tiểu học Nguyễn Siêu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNS', 'tieu-hoc-nguyen-sieu', 96, 27, 16, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(283, 'Trường Tiểu Học Nguyễn Bỉnh Khiêm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHNBK', 'truong-tieu-hoc-nguyen-binh-khiem', 96, 27, 17, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(284, 'Tiểu Học Lý Thái Tổ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLTT', 'tieu-hoc-ly-thai-to', 96, 27, 18, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(285, 'Tiểu Học Jean Piaget', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THJP', 'tieu-hoc-jean-piaget', 96, 27, 19, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(286, 'Tiểu Học Quốc Tế Global', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQTG', 'tieu-hoc-quoc-te-global', 96, 27, 20, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(287, 'Tiểu Học Alaska', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THA', 'tieu-hoc-alaska', 96, 27, 21, '2021-12-17 06:51:07', '2021-12-17 06:51:07'),
(288, 'Tiểu Học Archimedes', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THA288', 'tieu-hoc-archimedes', 96, 27, 22, '2021-12-17 06:51:08', '2021-12-17 06:51:08'),
(289, 'Trường Tiểu Học Đa Trí Tuệ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHĐTT', 'truong-tieu-hoc-da-tri-tue', 96, 27, 23, '2021-12-17 06:51:08', '2021-12-17 06:51:08'),
(290, 'Tiểu Học FPT', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THF', 'tieu-hoc-fpt', 96, 27, 24, '2021-12-17 06:51:08', '2021-12-17 06:51:08'),
(291, 'Tiểu Học Thực Hành Nguyễn Tất Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTHNTT', 'tieu-hoc-thuc-hanh-nguyen-tat-thanh', 96, 27, 25, '2021-12-17 06:51:08', '2021-12-17 06:51:08'),
(292, 'Tiểu Học An Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THAM', 'tieu-hoc-an-my', 360, 27, 1, '2021-12-17 07:14:53', '2021-12-17 07:14:53'),
(293, 'Tiểu Học ĐạI Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐH', 'tieu-hoc-dai-hung', 360, 27, 2, '2021-12-17 07:14:53', '2021-12-17 07:14:53'),
(294, 'Tiểu Học Đốc Tín', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-doc-tin', 360, 27, 3, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(295, 'Tiểu Học Đồng Tâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT295', 'tieu-hoc-dong-tam', 360, 27, 4, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(296, 'Tiểu Học HợP Thanh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHTA', 'tieu-hoc-hop-thanh-a', 360, 27, 5, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(297, 'Tiểu Học Hùng Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHT', 'tieu-hoc-hung-tien', 360, 27, 6, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(298, 'Tiểu Học Hương Sơn C', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHSC', 'tieu-hoc-huong-son-c', 360, 27, 7, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(299, 'Tiểu Học Phù Lưu Tế', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPLT', 'tieu-hoc-phu-luu-te', 360, 27, 8, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(300, 'Tiểu Học Phùng Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPX', 'tieu-hoc-phung-xa', 360, 27, 9, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(301, 'Tiểu Học Tế Tiêu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-te-tieu', 360, 27, 10, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(302, 'Tiểu Học Tuy Lai A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTLA', 'tieu-hoc-tuy-lai-a', 360, 27, 11, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(303, 'Tiểu Học Tuy LạI B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTLB', 'tieu-hoc-tuy-lai-b', 360, 27, 12, '2021-12-17 07:14:54', '2021-12-17 07:14:54');
INSERT INTO `truong` (`id`, `name`, `status`, `type`, `tel`, `email`, `website`, `address`, `tel_2`, `note`, `code`, `url`, `huyen_id`, `tinh_id`, `orderby`, `created_at`, `updated_at`) VALUES
(304, 'Tiểu Học An Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THAP', 'tieu-hoc-an-phu', 360, 27, 13, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(305, 'Tiểu Học An Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THAT', 'tieu-hoc-an-tien', 360, 27, 14, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(306, 'Tiểu Học BộT Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBX', 'tieu-hoc-bot-xuyen', 360, 27, 15, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(307, 'Tiểu Học ĐạI Nghĩa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐN', 'tieu-hoc-dai-nghia', 360, 27, 16, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(308, 'Tiểu Học Hồng Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHS', 'tieu-hoc-hong-son', 360, 27, 17, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(309, 'Tiểu Học HợP Thanh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHTB', 'tieu-hoc-hop-thanh-b', 360, 27, 18, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(310, 'Tiểu Học HợP Tiến A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHTA310', 'tieu-hoc-hop-tien-a', 360, 27, 19, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(311, 'Tiểu Học HợP Tiến B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHTB311', 'tieu-hoc-hop-tien-b', 360, 27, 20, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(312, 'Tiểu Học Hương Sơn A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHSA', 'tieu-hoc-huong-son-a', 360, 27, 21, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(313, 'Tiểu Học Hương Sơn B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHSB', 'tieu-hoc-huong-son-b', 360, 27, 22, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(314, 'Tiểu Học Lê Thanh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLTA', 'tieu-hoc-le-thanh-a', 360, 27, 23, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(315, 'Tiểu Học Lê Thanh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLTB', 'tieu-hoc-le-thanh-b', 360, 27, 24, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(316, 'Tiểu Học Mỹ Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMT', 'tieu-hoc-my-thanh', 360, 27, 25, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(317, 'Tiểu Học Phúc Lâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPL', 'tieu-hoc-phuc-lam', 360, 27, 26, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(318, 'Tiểu Học Thượng Lâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-thuong-lam', 360, 27, 27, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(319, 'Tiểu Học Vạn Kim', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVK', 'tieu-hoc-van-kim', 360, 27, 28, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(320, 'Tiểu Học Xuy Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXX', 'tieu-hoc-xuy-xa', 360, 27, 29, '2021-12-17 07:14:54', '2021-12-17 07:14:54'),
(321, 'Tiểu Học Cao Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCT', 'tieu-hoc-cao-thanh', 621, 27, 1, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(322, 'Tiểu Học Đại Hùng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐH', 'tieu-hoc-dai-hung', 621, 27, 2, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(323, 'Tiểu Học Hòa Lâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHL', 'tieu-hoc-hoa-lam', 621, 27, 3, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(324, 'Tiểu Học Hòa Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHP', 'tieu-hoc-hoa-phu', 621, 27, 4, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(325, 'Tiểu Học Hòa Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHX', 'tieu-hoc-hoa-xa', 621, 27, 5, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(326, 'Tiểu Học Kim Đường', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKĐ', 'tieu-hoc-kim-duong', 621, 27, 6, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(327, 'Tiểu Học Lưu Hoàng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLH', 'tieu-hoc-luu-hoang', 621, 27, 7, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(328, 'Tiểu Học Phương Tú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPT', 'tieu-hoc-phuong-tu', 621, 27, 8, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(329, 'Tiểu Học Sơn Công', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSC', 'tieu-hoc-son-cong', 621, 27, 9, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(330, 'Tiểu Học Tân Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP', 'tieu-hoc-tan-phuong', 621, 27, 10, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(331, 'Tiểu Học Trung Tú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-trung-tu', 621, 27, 11, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(332, 'Tiểu Học Vạn Thái', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVT', 'tieu-hoc-van-thai', 621, 27, 12, '2021-12-17 07:16:42', '2021-12-17 07:16:42'),
(333, 'Tiểu Học Viên Nội', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVN', 'tieu-hoc-vien-noi', 621, 27, 13, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(334, 'Tiểu Học Đông Lỗ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐL', 'tieu-hoc-dong-lo', 621, 27, 14, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(335, 'Tiểu Học Phù Lưu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPL', 'tieu-hoc-phu-luu', 621, 27, 15, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(336, 'Tiểu Học Đại Cường', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐC', 'tieu-hoc-dai-cuong', 621, 27, 16, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(337, 'Tiểu Học Đồng Tân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-dong-tan', 621, 27, 17, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(338, 'Tiểu Học Hòa Nam', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHN', 'tieu-hoc-hoa-nam', 621, 27, 18, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(339, 'Tiểu Học Hoa Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHS', 'tieu-hoc-hoa-son', 621, 27, 19, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(340, 'Tiểu Học Hồng Quang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHQ', 'tieu-hoc-hong-quang', 621, 27, 20, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(341, 'Tiểu Học Liên Bạt', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLB', 'tieu-hoc-lien-bat', 621, 27, 21, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(342, 'Tiểu Học Minh Đức', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMĐ', 'tieu-hoc-minh-duc', 621, 27, 22, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(343, 'Tiểu Học Quảng Phú Cầu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQPC', 'tieu-hoc-quang-phu-cau', 621, 27, 23, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(344, 'Tiểu Học Thị Trấn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT344', 'tieu-hoc-thi-tran', 621, 27, 24, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(345, 'Tiểu Học Trầm Lộng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-tram-long', 621, 27, 25, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(346, 'Tiểu Học Trường Thịnh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT346', 'tieu-hoc-truong-thinh', 621, 27, 26, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(347, 'Tiểu Học Viên An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVA', 'tieu-hoc-vien-an', 621, 27, 27, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(348, 'Tiểu Học Đội Bình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐB', 'tieu-hoc-doi-binh', 621, 27, 28, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(349, 'Tiểu Học Đồng Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT349', 'tieu-hoc-dong-tien', 621, 27, 29, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(350, 'Tiểu Học Tảo Dương Văn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTDV', 'tieu-hoc-tao-duong-van', 621, 27, 30, '2021-12-17 07:16:43', '2021-12-17 07:16:43'),
(351, 'Tiểu Học Xuân Mai B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXMB', 'tieu-hoc-xuan-mai-b', 116, 27, 1, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(352, 'Tiểu Học Xuân Mai A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXMA', 'tieu-hoc-xuan-mai-a', 116, 27, 2, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(353, 'Tiểu Học Văn Võ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVV', 'tieu-hoc-van-vo', 116, 27, 3, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(354, 'Tiểu Học Trường Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTY', 'tieu-hoc-truong-yen', 116, 27, 4, '2021-12-17 07:30:42', '2021-12-17 07:19:37'),
(355, 'Tiểu Học Trung Hoà – Chương Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH–CM', 'tieu-hoc-trung-hoa-chuong-my', 116, 27, 5, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(356, 'Tiểu Học Trần Phú B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTPB', 'tieu-hoc-tran-phu-b', 116, 27, 6, '2021-12-17 07:30:37', '2021-12-17 07:19:37'),
(357, 'Tiểu Học Trần Phú A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTPA', 'tieu-hoc-tran-phu-a', 116, 27, 7, '2021-12-17 07:30:16', '2021-12-17 07:19:37'),
(358, 'Tiểu Học TốT Động', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTĐ', 'tieu-hoc-tot-dong', 116, 27, 8, '2021-12-17 07:30:13', '2021-12-17 07:19:37'),
(359, 'Tiểu Học Tiên Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP', 'tieu-hoc-tien-phuong', 116, 27, 9, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(360, 'Tiểu Học Thuỷ Xuân Tiên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTXT', 'tieu-hoc-thuy-xuan-tien', 116, 27, 10, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(361, 'Tiểu Học Thuỵ Hương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-thuy-huong', 116, 27, 11, '2021-12-17 07:19:37', '2021-12-17 07:19:37'),
(362, 'Tiểu Học Thượng Vực', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTV', 'tieu-hoc-thuong-vuc', 116, 27, 12, '2021-12-17 07:31:16', '2021-12-17 07:19:37'),
(363, 'Tiểu Học Thanh Bình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTB', 'tieu-hoc-thanh-binh', 116, 27, 13, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(364, 'Tiểu Học Tân Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-tan-tien', 116, 27, 14, '2021-12-17 07:30:04', '2021-12-17 07:19:38'),
(365, 'Tiểu Học Quảng Bị', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQB', 'tieu-hoc-quang-bi', 116, 27, 15, '2021-12-17 07:30:02', '2021-12-17 07:19:38'),
(366, 'Tiểu Học Phụng Châu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPC', 'tieu-hoc-phung-chau', 116, 27, 16, '2021-12-17 07:29:59', '2021-12-17 07:19:38'),
(367, 'Tiểu Học Phú Nghĩa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPN', 'tieu-hoc-phu-nghia', 116, 27, 17, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(368, 'Tiểu Học Phú Nam An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPNA', 'tieu-hoc-phu-nam-an', 116, 27, 18, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(369, 'Tiểu Học Ngọc Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNH', 'tieu-hoc-ngoc-hoa', 116, 27, 19, '2021-12-17 07:29:53', '2021-12-17 07:19:38'),
(370, 'Tiểu Học Nam Phương Tiến B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNPTB', 'tieu-hoc-nam-phuong-tien-b', 116, 27, 20, '2021-12-17 07:29:47', '2021-12-17 07:19:38'),
(371, 'Tiểu Học Nam Phương Tiến A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNPTA', 'tieu-hoc-nam-phuong-tien-a', 116, 27, 21, '2021-12-17 07:29:43', '2021-12-17 07:19:38'),
(372, 'Tiểu Học Mỹ Lương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THML', 'tieu-hoc-my-luong', 116, 27, 22, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(373, 'Tiểu Học Lương Mỹ A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLMA', 'tieu-hoc-luong-my-a', 116, 27, 23, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(374, 'Tiểu Học Lam Điền', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLĐ', 'tieu-hoc-lam-dien', 116, 27, 24, '2021-12-17 07:29:36', '2021-12-17 07:19:38'),
(375, 'Tiểu Học HữU Văn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHV', 'tieu-hoc-huu-van', 116, 27, 25, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(376, 'Tiểu Học HợP Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHĐ', 'tieu-hoc-hop-dong', 116, 27, 26, '2021-12-17 07:29:33', '2021-12-17 07:19:38'),
(377, 'Tiểu Học Hồng Phong', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHP', 'tieu-hoc-hong-phong', 116, 27, 27, '2021-12-17 07:29:30', '2021-12-17 07:19:38'),
(378, 'Tiểu Học Hoàng Văn Thụ – Chương Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHVT–CM', 'tieu-hoc-hoang-van-thu-chuong-my', 116, 27, 28, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(379, 'Tiểu Học Hoàng DiệU – Chương Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHD–CM', 'tieu-hoc-hoang-dieu-chuong-my', 116, 27, 29, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(380, 'Tiểu Học Hoà Chính', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHC', 'tieu-hoc-hoa-chinh', 116, 27, 30, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(381, 'Tiểu Học Đông Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐS', 'tieu-hoc-dong-son', 116, 27, 31, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(382, 'Tiểu Học Đông Phương Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐPY', 'tieu-hoc-dong-phuong-yen', 116, 27, 32, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(383, 'Tiểu Học Đồng Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐP', 'tieu-hoc-dong-phu', 116, 27, 33, '2021-12-17 07:29:24', '2021-12-17 07:19:38'),
(384, 'Tiểu Học Đồng Lạc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐL', 'tieu-hoc-dong-lac', 116, 27, 34, '2021-12-17 07:31:04', '2021-12-17 07:19:38'),
(385, 'Tiểu Học ĐạI Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐY', 'tieu-hoc-dai-yen', 116, 27, 35, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(386, 'Tiểu Học Chúc Sơn B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCSB', 'tieu-hoc-chuc-son-b', 116, 27, 36, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(387, 'Tiểu Học Chúc Sơn A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCSA', 'tieu-hoc-chuc-son-a', 116, 27, 37, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(388, 'Tiểu Học Bê Tông', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBT', 'tieu-hoc-be-tong', 116, 27, 38, '2021-12-17 07:19:38', '2021-12-17 07:19:38'),
(389, 'Tiểu học Nam Từ Liêm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNTL', 'tieu-hoc-nam-tu-liem', 375, 27, 1, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(390, 'Tiểu học Nguyễn Du', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThND', 'tieu-hoc-nguyen-du', 375, 27, 2, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(391, 'Tiểu học Xuân Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThXP', 'tieu-hoc-xuan-phuong', 375, 27, 3, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(392, 'Tiểu học Cầu Diễn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCD', 'tieu-hoc-cau-dien', 375, 27, 4, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(393, 'Tiểu học Đại Mỗ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐM', 'tieu-hoc-dai-mo', 375, 27, 5, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(394, 'Tiểu học Phú Đô', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPĐ', 'tieu-hoc-phu-do', 375, 27, 6, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(395, 'Tiểu học Mễ Trì', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMT', 'tieu-hoc-me-tri', 375, 27, 7, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(396, 'Tiểu học Mỹ Đình 2', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMĐ2', 'tieu-hoc-my-dinh-2', 375, 27, 8, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(397, 'Tiểu học Tây Mỗ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTM', 'tieu-hoc-tay-mo', 375, 27, 9, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(398, 'Tiểu học Nguyễn Quý Đức', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNQĐ', 'tieu-hoc-nguyen-quy-duc', 375, 27, 10, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(399, 'Tiểu học Mỹ Đình 1', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMĐ1', 'tieu-hoc-my-dinh-1', 375, 27, 11, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(400, 'Tiểu học Lý Nam Đế', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLNĐ', 'tieu-hoc-ly-nam-de', 375, 27, 12, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(401, 'Tiểu học Trung Văn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTV', 'tieu-hoc-trung-van', 375, 27, 13, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(402, 'Tiểu học Phương Canh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPC', 'tieu-hoc-phuong-canh', 375, 27, 14, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(403, 'Tiểu học Đoàn Thị Điểm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐTĐ', 'tieu-hoc-doan-thi-diem', 375, 27, 15, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(404, 'Tiểu học Lômôlôxốp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThL', 'tieu-hoc-lomoloxop', 375, 27, 16, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(405, 'Tiểu học Marie Curie', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThMC', 'tieu-hoc-marie-curie', 375, 27, 17, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(406, 'Tiểu học Vinschool Gardenia', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVG', 'tieu-hoc-vinschool-gardenia', 375, 27, 18, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(407, 'Tiểu học Lê Quý Đôn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLQĐ', 'tieu-hoc-le-quy-don', 375, 27, 19, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(408, 'Tiểu học Olympia', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThO', 'tieu-hoc-olympia', 375, 27, 20, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(409, 'Tiểu học Quốc Việt Úc Hà Nội', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThQVUHN', NULL, 375, 27, 21, '2021-12-17 07:23:17', '2021-12-17 07:23:17'),
(410, 'Tiểu Học Mặt Trời Mới', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMTM', 'tieu-hoc-mat-troi-moi', 375, 27, 22, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(411, 'Tiểu Học Sentia', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THS', 'tieu-hoc-sentia', 375, 27, 23, '2021-12-17 07:20:14', '2021-12-17 07:20:14'),
(412, 'Tiểu Học Xã Đan Phượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXĐP', 'tieu-hoc-xa-dan-phuong', 147, 27, 1, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(413, 'Tiểu Học Xuân Nộn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXN', NULL, 147, 27, 2, '2021-12-17 07:26:03', '2021-12-17 07:26:03'),
(414, 'Tiểu Học Trung Châu B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTCB', 'tieu-hoc-trung-chau-b', 147, 27, 3, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(415, 'Tiểu Học Trung Châu A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTCA', 'tieu-hoc-trung-chau-a', 147, 27, 4, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(416, 'Tiểu Học Tô Hiến Thành – Đan Phượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTHT–DP', NULL, 147, 27, 5, '2021-12-17 07:26:19', '2021-12-17 07:26:19'),
(417, 'Tiểu Học Thượng Mỗ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTM', NULL, 147, 27, 6, '2021-12-17 07:26:27', '2021-12-17 07:26:27'),
(418, 'Tiểu Học Thọ Xuân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTX', 'tieu-hoc-tho-xuan', 147, 27, 7, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(419, 'Tiểu Học Thọ An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTA', 'tieu-hoc-tho-an', 147, 27, 8, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(420, 'Tiểu Học Thị TrấN Phùng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTP', 'tieu-hoc-thi-tran-phung', 147, 27, 9, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(421, 'Tiểu Học Tân LậP', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-tan-lap', 147, 27, 10, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(422, 'Tiểu Học Tân HộI B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTHB', 'tieu-hoc-tan-hoi-b', 147, 27, 11, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(423, 'Tiểu Học Tân HộI A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTHA', 'tieu-hoc-tan-hoi-a', 147, 27, 12, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(424, 'Tiểu Học Song PhượNg', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSP', 'tieu-hoc-song-phuong', 147, 27, 13, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(425, 'Tiểu Học Phương Đình B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPĐB', 'tieu-hoc-phuong-dinh-b', 147, 27, 14, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(426, 'Tiểu Học Phương Đình A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPĐA', 'tieu-hoc-phuong-dinh-a', 147, 27, 15, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(427, 'Tiểu Học Liên Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLT', 'tieu-hoc-lien-trung', 147, 27, 16, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(428, 'Tiểu Học Liên HồNg', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLH', 'tieu-hoc-lien-hong', 147, 27, 17, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(429, 'Tiểu Học Liên Hà – Đan PhượNg', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLH–ĐP', 'tieu-hoc-lien-ha-dan-phuong', 147, 27, 18, '2021-12-17 07:25:39', '2021-12-17 07:25:39'),
(430, 'Tiểu Học Hồng Hà – Đan Phượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHH–ĐP', 'tieu-hoc-hong-ha-dan-phuong', 147, 27, 19, '2021-12-17 07:28:45', '2021-12-17 07:25:39'),
(431, 'Tiểu Học Đồng Tháp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-dong-thap', 147, 27, 20, '2021-12-17 07:28:49', '2021-12-17 07:25:39'),
(432, 'Tiểu học Thị Trấn Đông Anh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTĐA', 'tieu-hoc-thi-tran-dong-anh', 169, 27, 1, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(433, 'Tiểu học Thị Trấn A Đông Anh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTAĐA', 'tieu-hoc-thi-tran-a-dong-anh', 169, 27, 2, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(434, 'Tiểu học Uy Nỗ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThUN', 'tieu-hoc-uy-no', 169, 27, 3, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(435, 'Tiểu học Bắc Hồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThBH', 'tieu-hoc-bac-hong', 169, 27, 4, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(436, 'Tiểu học Kim Chung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKC', 'tieu-hoc-kim-chung', 169, 27, 5, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(437, 'Tiểu học Liên Hà A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLHA', 'tieu-hoc-lien-ha-a', 169, 27, 6, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(438, 'Tiểu học Võng La', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVL', 'tieu-hoc-vong-la', 169, 27, 7, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(439, 'Tiểu học Nam Hồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNH', 'tieu-hoc-nam-hong', 169, 27, 8, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(440, 'Tiểu học Liên Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLH', 'tieu-hoc-lien-ha', 169, 27, 9, '2021-12-17 07:35:50', '2021-12-17 07:35:50'),
(441, 'Tiểu học Tô Thị Hiển', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTH', 'tieu-hoc-to-thi-hien', 169, 27, 10, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(442, 'Tiểu học Hải Bối', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThHB', 'tieu-hoc-hai-boi', 169, 27, 11, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(443, 'Tiểu học Tàm Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTX', 'tieu-hoc-tam-xa', 169, 27, 12, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(444, 'Tiểu học Vân Nội', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVN', 'tieu-hoc-van-noi', 169, 27, 13, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(445, 'Tiểu học Xuân Canh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThXC', 'tieu-hoc-xuan-canh', 169, 27, 14, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(446, 'Tiểu học Đông Hội', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐH', 'tieu-hoc-dong-hoi', 169, 27, 15, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(447, 'Tiểu học Tiên Dương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTD', 'tieu-hoc-tien-duong', 169, 27, 16, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(448, 'Tiểu học Dục Tú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDT', 'tieu-hoc-duc-tu', 169, 27, 17, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(449, 'Tiểu học Xuân Nộn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThXN', 'tieu-hoc-xuan-non', 169, 27, 18, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(450, 'Tiểu học Việt Hùng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVH', 'tieu-hoc-viet-hung', 169, 27, 19, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(451, 'Tiểu Học Kim Nỗ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKN', 'tieu-hoc-kim-no', 169, 27, 20, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(452, 'Tiểu học Lê Hữu Tựu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLHT', 'tieu-hoc-le-huu-tuu', 169, 27, 21, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(453, 'Tiểu học Cổ Loa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCL', 'tieu-hoc-co-loa', 169, 27, 22, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(454, 'Tiểu học Đại Mạch', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐM', 'tieu-hoc-dai-mach', 169, 27, 23, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(455, 'Tiểu học Ngô Tất Tố', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNTT', 'tieu-hoc-ngo-tat-to', 169, 27, 24, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(456, 'Tiểu học Vĩnh Ngọc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVN456', 'tieu-hoc-vinh-ngoc', 169, 27, 25, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(457, 'Tiểu học Vân Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVH457', 'tieu-hoc-van-ha', 169, 27, 26, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(458, 'Tiểu học Archimedes', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThA', 'tieu-hoc-archimedes', 169, 27, 27, '2021-12-17 07:35:51', '2021-12-17 07:35:51'),
(459, 'Tiểu Học Châu Can', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCC', 'tieu-hoc-chau-can', 434, 27, 1, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(460, 'Tiểu Học Đại Thắng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-dai-thang', 434, 27, 2, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(461, 'Tiểu Học Hồng Minh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHM', 'tieu-hoc-hong-minh', 434, 27, 3, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(462, 'Tiểu Học Nam Phong', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNP', 'tieu-hoc-nam-phong', 434, 27, 4, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(463, 'Tiểu Học Nam Triều', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNT', 'tieu-hoc-nam-trieu', 434, 27, 5, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(464, 'Tiểu Học Tt Phú Minh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTPM', 'tieu-hoc-tt-phu-minh', 434, 27, 6, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(465, 'Tiểu Học Văn Nhân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVN', 'tieu-hoc-van-nhan', 434, 27, 7, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(466, 'Tiểu Học Bạch Hạ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBH', 'tieu-hoc-bach-ha', 434, 27, 8, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(467, 'Tiểu Học Chuyên Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCM', 'tieu-hoc-chuyen-my', 434, 27, 9, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(468, 'Tiểu Học Đại Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐX', 'tieu-hoc-dai-xuyen', 434, 27, 10, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(469, 'Tiểu Học Hoàng Long', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHL', 'tieu-hoc-hoang-long', 434, 27, 11, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(470, 'Tiểu Học Hồng Thái', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHT', 'tieu-hoc-hong-thai', 434, 27, 12, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(471, 'Tiểu Học Khai Thái', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKT', 'tieu-hoc-khai-thai', 434, 27, 13, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(472, 'Tiểu Học Minh Tân A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMTA', 'tieu-hoc-minh-tan-a', 434, 27, 14, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(473, 'Tiểu Học Minh Tân B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMTB', 'tieu-hoc-minh-tan-b', 434, 27, 15, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(474, 'Tiểu Học Phú Túc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPT', 'tieu-hoc-phu-tuc', 434, 27, 16, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(475, 'Tiểu Học Phú Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPY', 'tieu-hoc-phu-yen', 434, 27, 17, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(476, 'Tiểu Học Phúc Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPT476', 'tieu-hoc-phuc-tien', 434, 27, 18, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(477, 'Tiểu Học Phượng Dực', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPD', 'tieu-hoc-phuong-duc', 434, 27, 19, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(478, 'Tiểu Học Quang Lãng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQL', 'tieu-hoc-quang-lang', 434, 27, 20, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(479, 'Tiểu Học Quang Trung – Phú Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQT–PX', 'tieu-hoc-quang-trung-phu-xuyen', 434, 27, 21, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(480, 'Tiểu Học Sơn Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSH', 'tieu-hoc-son-ha', 434, 27, 22, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(481, 'Tiểu Học Tân Dân – Phú Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTD–PX', 'tieu-hoc-tan-dan-phu-xuyen', 434, 27, 23, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(482, 'Tiểu Học Thuỵ Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP', 'tieu-hoc-thuy-phu', 434, 27, 24, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(483, 'Tiểu Học Tri Thuỷ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-tri-thuy', 434, 27, 25, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(484, 'Tiểu Học Tri Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT484', 'tieu-hoc-tri-trung', 434, 27, 26, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(485, 'Tiểu Học Tt Phú Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTPX', 'tieu-hoc-tt-phu-xuyen', 434, 27, 27, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(486, 'Tiểu Học Văn Hoàng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVH', 'tieu-hoc-van-hoang', 434, 27, 28, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(487, 'Tiểu Học Vân Từ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVT', 'tieu-hoc-van-tu', 434, 27, 29, '2021-12-17 07:39:19', '2021-12-17 07:39:19'),
(488, 'Tiểu Học Bế Văn Đàn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBVĐ', 'tieu-hoc-be-van-dan', 183, 27, 1, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(489, 'Tiểu Học Cát Linh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCL', 'tieu-hoc-cat-linh', 183, 27, 2, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(490, 'Tiểu Học Thịnh Hào', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-thinh-hao', 183, 27, 3, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(491, 'Tiểu Học Văn Chương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVC', 'tieu-hoc-van-chuong', 183, 27, 4, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(492, 'Tiểu Học Khương Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKT', 'tieu-hoc-khuong-thuong', 183, 27, 5, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(493, 'Tiểu Học Kim Liên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKL', 'tieu-hoc-kim-lien', 183, 27, 6, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(494, 'Tiểu Học La Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLT', 'tieu-hoc-la-thanh', 183, 27, 7, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(495, 'Tiểu Học Láng Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLT495', 'tieu-hoc-lang-thuong', 183, 27, 8, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(496, 'Tiểu Học Lý Thường Kiệt', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLTK', 'tieu-hoc-ly-thuong-kiet', 183, 27, 9, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(497, 'Tiểu Học Nam Thành Công', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNTC', 'tieu-hoc-nam-thanh-cong', 183, 27, 10, '2021-12-17 07:39:53', '2021-12-17 07:39:53'),
(498, 'Tiểu Học Phương Liên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPL', 'tieu-hoc-phuong-lien', 183, 27, 11, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(499, 'Tiểu Học Phương Mai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPM', 'tieu-hoc-phuong-mai', 183, 27, 12, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(500, 'Tiểu Học Quang Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQT', 'tieu-hoc-quang-trung', 183, 27, 13, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(501, 'Tiểu Học Thái Thịnh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-thai-thinh', 183, 27, 14, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(502, 'Tiểu Học Thịnh Quang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTQ', 'tieu-hoc-thinh-quang', 183, 27, 15, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(503, 'Tiểu Học Tô Vĩnh Diện', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTVD', 'tieu-hoc-to-vinh-dien', 183, 27, 16, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(504, 'Tiểu Học Trung Phụng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP', 'tieu-hoc-trung-phung', 183, 27, 17, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(505, 'Tiểu Học Trung Tự', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT505', 'tieu-hoc-trung-tu', 183, 27, 18, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(506, 'Tiểu Học Hanoi Adelaide School', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHAS', 'tieu-hoc-hanoi-adelaide-school', 183, 27, 19, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(507, 'Tiểu Học Tam Khương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTK', 'tieu-hoc-tam-khuong', 183, 27, 20, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(508, 'Trường Phổ Thông Liên Cấp Alfred Nobel', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TPTLCAN', 'truong-pho-thong-lien-cap-alfred-nobel', 183, 27, 21, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(509, 'Tiểu Học VietKids', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THV', 'tieu-hoc-vietkids', 183, 27, 22, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(510, 'Tiểu Học Tư Thục Nguyễn Văn Huyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTNVH', 'tieu-hoc-tu-thuc-nguyen-van-huyen', 183, 27, 23, '2021-12-17 07:39:54', '2021-12-17 07:39:54'),
(511, 'Tiểu Học Cẩm Đình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCĐ', 'tieu-hoc-cam-dinh', 441, 27, 1, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(512, 'Tiểu Học Hát Môn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHM', 'tieu-hoc-hat-mon', 441, 27, 2, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(513, 'Tiểu Học Hiệp Thuận', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHT', 'tieu-hoc-hiep-thuan', 441, 27, 3, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(514, 'Tiểu Học Liên Hiệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLH', 'tieu-hoc-lien-hiep', 441, 27, 4, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(515, 'Tiểu Học Long Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLX', 'tieu-hoc-long-xuyen', 441, 27, 5, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(516, 'Tiểu Học Long Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLX516', 'tieu-hoc-long-xuyen', 441, 27, 6, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(517, 'Tiểu Học Ngọc Tảo', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNT', 'tieu-hoc-ngoc-tao', 441, 27, 7, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(518, 'Tiểu Học Phúc Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPH', 'tieu-hoc-phuc-hoa', 441, 27, 8, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(519, 'Tiểu Học Phụng Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPT', 'tieu-hoc-phung-thuong', 441, 27, 9, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(520, 'Tiểu Học Phương Độ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPĐ', 'tieu-hoc-phuong-do', 441, 27, 10, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(521, 'Tiểu Học Sen Chiểu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSC', 'tieu-hoc-sen-chieu', 441, 27, 11, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(522, 'Tiểu Học Tam Hiệp – Phúc Thọ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH–PT', 'tieu-hoc-tam-hiep-phuc-tho', 441, 27, 12, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(523, 'Tiểu Học Tam Thuấn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-tam-thuan', 441, 27, 13, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(524, 'Tiểu Học Võng Xuyên A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVXA', 'tieu-hoc-vong-xuyen-a', 441, 27, 14, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(525, 'Tiểu Học Thanh Đa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTĐ', 'tieu-hoc-thanh-da', 441, 27, 15, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(526, 'Tiểu Học Thị Trấn Phúc Thọ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTPT', 'tieu-hoc-thi-tran-phuc-tho', 441, 27, 16, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(527, 'Tiểu Học Thọ Lộc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-tho-loc', 441, 27, 17, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(528, 'Tiểu Học Tích Giang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTG', 'tieu-hoc-tich-giang', 441, 27, 18, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(529, 'Tiểu Học Trạch Mỹ Lộc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTML', 'tieu-hoc-trach-my-loc', 441, 27, 19, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(530, 'Tiểu Học Vân Hà – Phúc Thọ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVH–PT', 'tieu-hoc-van-ha-phuc-tho', 441, 27, 20, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(531, 'Tiểu Học Vân Nam', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVN', 'tieu-hoc-van-nam', 441, 27, 21, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(532, 'Tiểu Học Vân Phúc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVP', 'tieu-hoc-van-phuc', 441, 27, 22, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(533, 'Tiểu Học Võng Xuyên B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVXB', 'tieu-hoc-vong-xuyen-b', 441, 27, 23, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(534, 'Tiểu Học Xuân Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXP', 'tieu-hoc-xuan-phu', 441, 27, 24, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(535, 'Tiểu Học Thượng Cốc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTC', 'tieu-hoc-thuong-coc', 441, 27, 25, '2021-12-17 07:44:08', '2021-12-17 07:44:08'),
(536, 'Tiểu học Cao Bá Quát', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCBQ', 'tieu-hoc-cao-ba-quat', 196, 27, 1, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(537, 'Tiểu học Kiêu Kỵ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKK', 'tieu-hoc-kieu-ky', 196, 27, 2, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(538, 'Tiểu học Đa Tốn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐT', 'tieu-hoc-da-ton', 196, 27, 3, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(539, 'Tiểu học Kim Lan', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKL', 'tieu-hoc-kim-lan', 196, 27, 4, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(540, 'Tiểu học Thị Trấn Yên Viên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTTYV', 'tieu-hoc-thi-tran-yen-vien', 196, 27, 5, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(541, 'Tiểu học Cổ Bi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThCB', 'tieu-hoc-co-bi', 196, 27, 6, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(542, 'Tiểu học Nông Nghiệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNN', 'tieu-hoc-nong-nghiep', 196, 27, 7, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(543, 'Tiểu học Phù Đổng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPĐ', 'tieu-hoc-phu-dong', 196, 27, 8, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(544, 'Tiểu học Lê Ngọc Hân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLNH', 'tieu-hoc-le-ngoc-han', 196, 27, 9, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(545, 'Tiểu học Tiền Phong, Gia Lâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTPGL', 'tieu-hoc-tien-phong-gia-lam', 196, 27, 10, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(546, 'Tiểu học Kim Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKS', 'tieu-hoc-kim-son', 196, 27, 11, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(547, 'Tiểu học Đình Xuyên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐX', 'tieu-hoc-dinh-xuyen', 196, 27, 12, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(548, 'Tiểu học Trung Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTT', 'tieu-hoc-trung-thanh', 196, 27, 13, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(549, 'Tiểu học Trâu Quỳ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTQ', 'tieu-hoc-trau-quy', 196, 27, 14, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(550, 'Tiểu học Trung Mầu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTM', 'tieu-hoc-trung-mau', 196, 27, 15, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(551, 'Tiểu học Văn Đức', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVĐ', 'tieu-hoc-van-duc', 196, 27, 16, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(552, 'Tiểu học Đặng Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐX552', 'tieu-hoc-dang-xa', 196, 27, 17, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(553, 'Tiểu học Dương Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDH', 'tieu-hoc-duong-ha', 196, 27, 18, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(554, 'Tiểu học Yên Viên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYV', 'tieu-hoc-yen-vien', 196, 27, 19, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(555, 'Tiểu học Đông Dư', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐD', 'tieu-hoc-dong-du', 196, 27, 20, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(556, 'Tiểu học Yên Thường', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYT', 'tieu-hoc-yen-thuong', 196, 27, 21, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(557, 'Tiểu học Bát Tràng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThBT', 'tieu-hoc-bat-trang', 196, 27, 22, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(558, 'Tiểu học Ninh Hiệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNH', 'tieu-hoc-ninh-hiep', 196, 27, 23, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(559, 'Tiểu học Phú Thị', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPT', 'tieu-hoc-phu-thi', 196, 27, 24, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(560, 'Tiểu học Lệ Chi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLC', 'tieu-hoc-le-chi', 196, 27, 25, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(561, 'Tiểu học Dương Quang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDQ', 'tieu-hoc-duong-quang', 196, 27, 26, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(562, 'Tiểu học Dương Xá', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDX', 'tieu-hoc-duong-xa', 196, 27, 27, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(563, 'Tiểu học Quang Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThQT', 'tieu-hoc-quang-trung', 196, 27, 28, '2021-12-17 07:44:56', '2021-12-17 07:44:56'),
(564, 'Tiểu học An Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThAH', 'tieu-hoc-an-hung', 212, 27, 1, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(565, 'Tiểu học Biên Giang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThBG', 'tieu-hoc-bien-giang', 212, 27, 2, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(566, 'Tiểu học Đoàn Kết', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐK', 'tieu-hoc-doan-ket', 212, 27, 3, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(567, 'Tiểu học Đồng Mai I', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐMI', 'tieu-hoc-dong-mai-i', 212, 27, 4, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(568, 'Tiểu học Đồng Mai II', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThĐMI568', 'tieu-hoc-dong-mai-ii', 212, 27, 5, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(569, 'Tiểu học Dương Nội A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDNA', 'tieu-hoc-duong-noi-a', 212, 27, 6, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(570, 'Tiểu học Dương Nội B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThDNB', 'tieu-hoc-duong-noi-b', 212, 27, 7, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(571, 'Tiểu học Kiến Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKH', 'tieu-hoc-kien-hung', 212, 27, 8, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(572, 'Tiểu học Kim Đồng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThKĐ', 'tieu-hoc-kim-dong', 212, 27, 9, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(573, 'Tiểu học Lê Hồng Phong', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLHP', 'tieu-hoc-le-hong-phong', 212, 27, 10, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(574, 'Tiểu học Lê Quý Đôn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLQĐ', 'tieu-hoc-le-quy-don', 212, 27, 11, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(575, 'Tiểu học Lê Lợi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLL', 'tieu-hoc-le-loi', 212, 27, 12, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(576, 'Tiểu học Lê Trọng Tấn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThLTT', 'tieu-hoc-le-trong-tan', 212, 27, 13, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(577, 'Tiểu học Mậu Lương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThML', 'tieu-hoc-mau-luong', 212, 27, 14, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(578, 'Tiểu học Trần Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTP', 'tieu-hoc-tran-phu', 212, 27, 15, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(579, 'Tiểu học Trần Quốc Toản', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThTQT', 'tieu-hoc-tran-quoc-toan', 212, 27, 16, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(580, 'Tiểu học Phú La', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPL', 'tieu-hoc-phu-la', 212, 27, 17, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(581, 'Tiểu học Phú Lãm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPL581', 'tieu-hoc-phu-lam', 212, 27, 18, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(582, 'Tiểu học Phú Lương I', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPLI', 'tieu-hoc-phu-luong-i', 212, 27, 19, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(583, 'Tiểu học Phú Lương II', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThPLI583', 'tieu-hoc-phu-luong-ii', 212, 27, 20, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(584, 'Tiểu học Vạn Phúc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVP', 'tieu-hoc-van-phuc', 212, 27, 21, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(585, 'Tiểu học Văn Khê', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVK', 'tieu-hoc-van-khe', 212, 27, 22, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(586, 'Tiểu học Văn Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThVY', 'tieu-hoc-van-yen', 212, 27, 23, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(587, 'Tiểu học Yết Kiêu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYK', 'tieu-hoc-yet-kieu', 212, 27, 24, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(588, 'Tiểu học Yên Nghĩa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThYN', 'tieu-hoc-yen-nghia', 212, 27, 25, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(589, 'Tiểu học Nguyễn Du', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThND', 'tieu-hoc-nguyen-du', 212, 27, 26, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(590, 'Tiểu học Nguyễn Trãi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ThNT', 'tieu-hoc-nguyen-trai', 212, 27, 27, '2021-12-17 07:45:25', '2021-12-17 07:45:25'),
(591, 'Tiểu Học Phượng Cách', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPC', 'tieu-hoc-phuong-cach', 475, 27, 1, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(592, 'Tiểu Học Phú Cát', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPC592', 'tieu-hoc-phu-cat', 475, 27, 2, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(593, 'Tiểu Học Liệp Tuyết', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLT', 'tieu-hoc-liep-tuyet', 475, 27, 3, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(594, 'Tiểu Học Cấn Hữu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCH', 'tieu-hoc-can-huu', 475, 27, 4, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(595, 'Tiểu Học Thị Trấn Quốc Oai A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTQOA', 'tieu-hoc-thi-tran-quoc-oai-a', 475, 27, 5, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(596, 'Tiểu Học Tân Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTP', 'tieu-hoc-tan-phu', 475, 27, 6, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(597, 'Tiểu Học Hoà Thạch A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHTA', 'tieu-hoc-hoa-thach-a', 475, 27, 7, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(598, 'Tiểu Học Tuyết Nghĩa', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTN', 'tieu-hoc-tuyet-nghia', 475, 27, 8, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(599, 'Tiểu Học Hoà Thạch B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHTB', 'tieu-hoc-hoa-thach-b', 475, 27, 9, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(600, 'Tiểu Học Ngọc Liệp', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNL', 'tieu-hoc-ngoc-liep', 475, 27, 10, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(601, 'Tiểu Học Thị Trấn Quốc Oai B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTQOB', 'tieu-hoc-thi-tran-quoc-oai-b', 475, 27, 11, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(602, 'Tiểu Học Ngọc Mỹ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNM', 'tieu-hoc-ngoc-my', 475, 27, 12, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(603, 'Tiểu Học Yên Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THYS', 'tieu-hoc-yen-son', 475, 27, 13, '2021-12-17 07:49:17', '2021-12-17 07:49:17');
INSERT INTO `truong` (`id`, `name`, `status`, `type`, `tel`, `email`, `website`, `address`, `tel_2`, `note`, `code`, `url`, `huyen_id`, `tinh_id`, `orderby`, `created_at`, `updated_at`) VALUES
(604, 'Tiểu Học Sài Sơn B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSSB', 'tieu-hoc-sai-son-b', 475, 27, 14, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(605, 'Tiểu Học Sài Sơn A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSSA', 'tieu-hoc-sai-son-a', 475, 27, 15, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(606, 'Tiểu Học Nghĩa Hương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNH', 'tieu-hoc-nghia-huong', 475, 27, 16, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(607, 'Tiểu Học Tân Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-tan-hoa', 475, 27, 17, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(608, 'Tiểu Học Đại Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-dai-thanh', 475, 27, 18, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(609, 'Tiểu Học Đồng Quang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐQ', 'tieu-hoc-dong-quang', 475, 27, 19, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(610, 'Tiểu Học Đông Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐY', 'tieu-hoc-dong-yen', 475, 27, 20, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(611, 'Tiểu Học Đông Xuân – Quốc Oai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐX–QO', 'tieu-hoc-dong-xuan-quoc-oai', 475, 27, 21, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(612, 'Tiểu Học Thạch Thán', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-thach-than', 475, 27, 22, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(613, 'Tiểu Học Phú Mãn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPM', 'tieu-hoc-phu-man', 475, 27, 23, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(614, 'Tiểu Học Cộng Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCH614', 'tieu-hoc-cong-hoa', 475, 27, 24, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(615, 'Tiểu Học Thượng Cốc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTC', 'tieu-hoc-thuong-coc', 475, 27, 25, '2021-12-17 07:49:17', '2021-12-17 07:49:17'),
(616, 'Tiểu Học Tây Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTS', 'tieu-hoc-tay-son', 221, 27, 1, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(617, 'Tiểu Học Thanh Lương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-thanh-luong', 221, 27, 2, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(618, 'Tiểu Học Trưng Trắc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT', 'tieu-hoc-trung-trac', 221, 27, 3, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(619, 'Tiểu Học Trung Hiền', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-trung-hien', 221, 27, 4, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(620, 'Tiểu Học Tô Hoàng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH620', 'tieu-hoc-to-hoang', 221, 27, 5, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(621, 'Tiểu Học Nguyễn Đình Chiểu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNĐC', 'tieu-hoc-nguyen-dinh-chieu', 221, 27, 6, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(622, 'Tiểu Học Tô Hiến Thành', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTHT', 'tieu-hoc-to-hien-thanh', 221, 27, 7, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(623, 'Tiểu Học Vĩnh Tuy', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVT', 'tieu-hoc-vinh-tuy', 221, 27, 8, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(624, 'Tiểu Học Đồng Nhân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐN', 'tieu-hoc-dong-nhan', 221, 27, 9, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(625, 'Tiểu Học Đồng Tâm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-dong-tam', 221, 27, 10, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(626, 'Tiểu Học Bà Triệu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBT', 'tieu-hoc-ba-trieu', 221, 27, 11, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(627, 'Tiểu Học Lê Ngọc Hân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLNH', 'tieu-hoc-le-ngoc-han', 221, 27, 12, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(628, 'Tiểu Học Minh Khai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMK', 'tieu-hoc-minh-khai', 221, 27, 13, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(629, 'Tiểu Học Ngô Quyền', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNQ', 'tieu-hoc-ngo-quyen', 221, 27, 14, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(630, 'Tiểu Học Ngô Thì Nhậm', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNTN', 'tieu-hoc-ngo-thi-nham', 221, 27, 15, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(631, 'Tiểu Học Bạch Mai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBM', 'tieu-hoc-bach-mai', 221, 27, 16, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(632, 'Tiểu Học Đoàn Kết', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐK', 'tieu-hoc-doan-ket', 221, 27, 17, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(633, 'Tiểu Học Lê Văn Tám', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLVT', 'tieu-hoc-le-van-tam', 221, 27, 18, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(634, 'Tiểu Học Lương Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLY', 'tieu-hoc-luong-yen', 221, 27, 19, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(635, 'Tiểu Học Quỳnh Lôi', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQL', 'tieu-hoc-quynh-loi', 221, 27, 20, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(636, 'Tiểu Học Quỳnh Mai', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQM', 'tieu-hoc-quynh-mai', 221, 27, 21, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(637, 'Tiểu Học Vinschool', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THV', 'tieu-hoc-vinschool', 221, 27, 22, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(638, 'Tiểu Học Nguyễn Khuyến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNK', 'tieu-hoc-nguyen-khuyen', 221, 27, 23, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(639, 'Tiểu Học Công Nghệ Giáo Dục', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCNGD', 'tieu-hoc-cong-nghe-giao-duc', 221, 27, 24, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(640, 'Tiểu Học Hòa Bình – La Trobe', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHB–LT', 'tieu-hoc-hoa-binh-la-trobe', 221, 27, 25, '2021-12-17 07:49:58', '2021-12-17 07:49:58'),
(641, 'Tiểu Học Trung Giã', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTG', 'tieu-hoc-trung-gia', 488, 27, 1, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(642, 'Tiểu Học Bắc Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBP', 'tieu-hoc-bac-phu', 488, 27, 2, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(643, 'Tiểu Học Bắc Sơn A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBSA', 'tieu-hoc-bac-son-a', 488, 27, 3, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(644, 'Tiểu Học Bắc Sơn B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THBSB', 'tieu-hoc-bac-son-b', 488, 27, 4, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(645, 'Tiểu Học Đông Xuân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐX', 'tieu-hoc-dong-xuan', 488, 27, 5, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(646, 'Tiểu Học Đức Hoà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐH', 'tieu-hoc-duc-hoa', 488, 27, 6, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(647, 'Tiểu Học Hiền Ninh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHN', 'tieu-hoc-hien-ninh', 488, 27, 7, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(648, 'Tiểu Học Hồng Kỳ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHK', 'tieu-hoc-hong-ky', 488, 27, 8, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(649, 'Tiểu Học Hương Đình', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHĐ', 'tieu-hoc-huong-dinh', 488, 27, 9, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(650, 'Tiểu Học Kim Lũ', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKL', 'tieu-hoc-kim-lu', 488, 27, 10, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(651, 'Tiểu Học Mai Đình A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMĐA', 'tieu-hoc-mai-dinh-a', 488, 27, 11, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(652, 'Tiểu Học Mai Đình B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMĐB', 'tieu-hoc-mai-dinh-b', 488, 27, 12, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(653, 'Tiểu Học Minh Phú', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMP', 'tieu-hoc-minh-phu', 488, 27, 13, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(654, 'Tiểu Học Minh Trí', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMT', 'tieu-hoc-minh-tri', 488, 27, 14, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(655, 'Tiểu Học Nam Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNS', 'tieu-hoc-nam-son', 488, 27, 15, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(656, 'Tiểu Học Phú Cường', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPC', 'tieu-hoc-phu-cuong', 488, 27, 16, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(657, 'Tiểu Học Phù Linh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPL', 'tieu-hoc-phu-linh', 488, 27, 17, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(658, 'Tiểu Học Phù Lỗ A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPLA', 'tieu-hoc-phu-lo-a', 488, 27, 18, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(659, 'Tiểu Học Phù Lỗ B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPLB', 'tieu-hoc-phu-lo-b', 488, 27, 19, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(660, 'Tiểu Học Phú Minh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPM', 'tieu-hoc-phu-minh', 488, 27, 20, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(661, 'Tiểu Học Quang Tiến', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQT', 'tieu-hoc-quang-tien', 488, 27, 21, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(662, 'Tiểu Học Tân Dân A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTDA', 'tieu-hoc-tan-dan-a', 488, 27, 22, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(663, 'Tiểu Học Tân Dân B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTDB', 'tieu-hoc-tan-dan-b', 488, 27, 23, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(664, 'Tiểu Học Tân Hưng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTH', 'tieu-hoc-tan-hung', 488, 27, 24, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(665, 'Tiểu Học Tân Minh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTMA', 'tieu-hoc-tan-minh-a', 488, 27, 25, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(666, 'Tiểu Học Tân Minh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTMB', 'tieu-hoc-tan-minh-b', 488, 27, 26, '2021-12-17 07:53:26', '2021-12-17 07:53:26'),
(667, 'Tiểu Học Thanh Xuân A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTXA', 'tieu-hoc-thanh-xuan-a', 488, 27, 27, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(668, 'Tiểu Học Thanh Xuân B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTXB', 'tieu-hoc-thanh-xuan-b', 488, 27, 28, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(669, 'Tiểu Học Thị Trấn Sóc Sơn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTTSS', 'tieu-hoc-thi-tran-soc-son', 488, 27, 29, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(670, 'Tiểu Học Tiên Dược', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTD', 'tieu-hoc-tien-duoc', 488, 27, 30, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(671, 'Tiểu Học Việt Long', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVL', 'tieu-hoc-viet-long', 488, 27, 31, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(672, 'Tiểu Học Xuân Giang', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXG', 'tieu-hoc-xuan-giang', 488, 27, 32, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(673, 'Tiểu Học Xuân Thu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THXT', 'tieu-hoc-xuan-thu', 488, 27, 33, '2021-12-17 07:53:27', '2021-12-17 07:53:27'),
(674, 'Tiểu Học Di Trạch', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDT', 'tieu-hoc-di-trach', 241, 27, 1, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(675, 'Tiểu Học Kim Chung B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKCB', 'tieu-hoc-kim-chung-b', 241, 27, 2, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(676, 'Tiểu Học An Khánh A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THAKA', 'tieu-hoc-an-khanh-a', 241, 27, 3, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(677, 'Tiểu Học An Khánh B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THAKB', 'tieu-hoc-an-khanh-b', 241, 27, 4, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(678, 'Tiểu Học An Thượng A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THATA', 'tieu-hoc-an-thuong-a', 241, 27, 5, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(679, 'Tiểu Học An Thượng B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THATB', 'tieu-hoc-an-thuong-b', 241, 27, 6, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(680, 'Tiểu Học Cát Quế A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCQA', 'tieu-hoc-cat-que-a', 241, 27, 7, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(681, 'Tiểu Học Cát Quế B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCQB', 'tieu-hoc-cat-que-b', 241, 27, 8, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(682, 'Tiểu Học Đắc Sở', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐS', 'tieu-hoc-dac-so', 241, 27, 9, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(683, 'Tiểu Học Đông La', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐL', 'tieu-hoc-dong-la', 241, 27, 10, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(684, 'Tiểu Học Đức Giang – Hoài ĐứC', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐG–HĐ', 'tieu-hoc-duc-giang-hoai-duc', 241, 27, 11, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(685, 'Tiểu Học Đức Thượng', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐT', 'tieu-hoc-duc-thuong', 241, 27, 12, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(686, 'Tiểu Học Dương Liễu A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDLA', 'tieu-hoc-duong-lieu-a', 241, 27, 13, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(687, 'Tiểu Học Dương Liễu B', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THDLB', 'tieu-hoc-duong-lieu-b', 241, 27, 14, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(688, 'Tiểu Học Kim Chung A', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THKCA', 'tieu-hoc-kim-chung-a', 241, 27, 15, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(689, 'Tiểu Học La Phù', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLP', 'tieu-hoc-la-phu', 241, 27, 16, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(690, 'Tiểu Học LạI Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THLY', 'tieu-hoc-lai-yen', 241, 27, 17, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(691, 'Tiểu Học Minh Khai – Hoài Đức', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THMK–HĐ', 'tieu-hoc-minh-khai-hoai-duc', 241, 27, 18, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(692, 'Tiểu Học Sơn Đồng – Hoài Đức – Hà NộI', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSĐ–HĐ–HN', 'tieu-hoc-son-dong-hoai-duc-ha-noi', 241, 27, 19, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(693, 'Tiểu Học Song Phương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THSP', 'tieu-hoc-song-phuong', 241, 27, 20, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(694, 'Tiểu Học Thị Trấn – Hoài Đức', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTT–HĐ', 'tieu-hoc-thi-tran-hoai-duc', 241, 27, 21, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(695, 'Tiểu Học Tiền Yên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTY', 'tieu-hoc-tien-yen', 241, 27, 22, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(696, 'Tiểu Học Vân Canh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVC', 'tieu-hoc-van-canh', 241, 27, 23, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(697, 'Tiểu Học Vân Côn', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVC697', 'tieu-hoc-van-con', 241, 27, 24, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(698, 'Tiểu Học Yên Sở – Hoài Đức', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THYS–HĐ', 'tieu-hoc-yen-so-hoai-duc', 241, 27, 25, '2021-12-17 07:56:59', '2021-12-17 07:56:59'),
(699, 'Tiểu Học Võ Thị Sáu', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THVTS', 'tieu-hoc-vo-thi-sau', 243, 27, 1, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(700, 'Tiểu Học Nguyễn Du', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THND', 'tieu-hoc-nguyen-du', 243, 27, 2, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(701, 'Tiểu Học Hồng Hà', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THHH', 'tieu-hoc-hong-ha', 243, 27, 3, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(702, 'Tiểu Học Nguyễn Bá Ngọc', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THNBN', 'tieu-hoc-nguyen-ba-ngoc', 243, 27, 4, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(703, 'Tiểu Học Điện Biên', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THĐB', 'tieu-hoc-dien-bien', 243, 27, 5, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(704, 'Tiểu Học Thăng Long', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTL', 'tieu-hoc-thang-long', 243, 27, 6, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(705, 'Tiểu Học Phúc Tân', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THPT', 'tieu-hoc-phuc-tan', 243, 27, 7, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(706, 'Tiểu Học Trần Quốc Toản', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTQT', 'tieu-hoc-tran-quoc-toan', 243, 27, 8, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(707, 'Tiểu Học Trưng Vương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTV', 'tieu-hoc-trung-vuong', 243, 27, 9, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(708, 'Tiểu Học Quang Trung', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THQT', 'tieu-hoc-quang-trung', 243, 27, 10, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(709, 'Tiểu Học Trần Nhật Duật', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTND', 'tieu-hoc-tran-nhat-duat', 243, 27, 11, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(710, 'Tiểu Học Tràng An', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THTA', 'tieu-hoc-trang-an', 243, 27, 12, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(711, 'Tiểu Học Chương Dương', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THCD', 'tieu-hoc-chuong-duong', 243, 27, 13, '2021-12-17 07:57:33', '2021-12-17 07:57:33'),
(715, NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 241, 27, NULL, '2022-03-11 08:59:58', '2022-03-11 08:59:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_permission`
--

DROP TABLE IF EXISTS `type_permission`;
CREATE TABLE IF NOT EXISTS `type_permission` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=474 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_permission`
--

INSERT INTO `type_permission` (`id`, `type_id`, `permission_id`, `type`, `updated_at`, `created_at`) VALUES
(234, 1, 61, 'undefined', '2021-11-28 18:24:37', '2021-11-28 18:24:37'),
(2, 1, 2, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(3, 1, 3, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(4, 1, 4, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(5, 1, 5, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(6, 1, 6, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(7, 1, 7, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(8, 1, 8, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(9, 1, 9, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(10, 1, 10, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(11, 1, 11, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(12, 1, 12, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(13, 1, 13, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(14, 1, 14, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(15, 1, 15, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(16, 1, 16, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(17, 1, 17, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(18, 1, 18, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(19, 1, 19, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(20, 1, 20, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(21, 1, 21, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(22, 1, 22, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(23, 1, 23, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(24, 1, 24, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(25, 1, 25, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(26, 1, 26, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(27, 1, 27, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(28, 1, 28, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(29, 1, 29, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(30, 1, 30, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(31, 1, 31, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(103, 1, 32, NULL, '2020-07-13 18:55:06', '2020-07-13 18:55:06'),
(33, 1, 33, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(34, 1, 34, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(35, 1, 35, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(185, 1, 44, 'admin', '2020-07-25 01:18:13', '2020-07-25 01:18:13'),
(105, 1, 43, NULL, '2020-07-13 19:08:31', '2020-07-13 19:08:31'),
(104, 1, 42, NULL, '2020-07-13 19:08:30', '2020-07-13 19:08:30'),
(102, 1, 40, NULL, '2020-07-13 17:29:23', '2020-07-13 17:29:23'),
(101, 1, 37, NULL, '2020-07-13 17:29:23', '2020-07-13 17:29:23'),
(116, 1, 1, 'domain', '2020-07-16 16:19:44', '2020-07-16 16:19:44'),
(117, 1, 36, 'domain', '2020-07-16 16:19:46', '2020-07-16 16:19:46'),
(119, 1, 47, 'undefined', '2020-07-17 14:58:34', '2020-07-17 14:58:34'),
(184, 1, 48, 'domain', '2020-07-20 10:00:51', '2020-07-20 10:00:51'),
(186, 1, 45, 'admin', '2020-07-25 01:18:14', '2020-07-25 01:18:14'),
(219, 1, 49, 'domain', '2020-07-27 06:15:01', '2020-07-27 06:15:01'),
(220, 1, 50, 'undefined', '2020-07-28 11:42:27', '2020-07-28 11:42:27'),
(221, 1, 51, 'undefined', '2020-07-28 11:42:28', '2020-07-28 11:42:28'),
(222, 1, 52, 'undefined', '2020-07-30 03:43:20', '2020-07-30 03:43:20'),
(223, 1, 53, 'undefined', '2020-07-30 03:43:20', '2020-07-30 03:43:20'),
(224, 1, 55, 'undefined', '2020-07-31 22:24:40', '2020-07-31 22:24:40'),
(225, 1, 54, 'undefined', '2020-07-31 22:24:40', '2020-07-31 22:24:40'),
(226, 1, 56, 'undefined', '2020-08-03 07:15:57', '2020-08-03 07:15:57'),
(227, 1, 57, 'undefined', '2020-08-03 07:15:58', '2020-08-03 07:15:58'),
(228, 1, 58, 'undefined', '2020-08-05 12:43:56', '2020-08-05 12:43:56'),
(229, 1, 59, 'undefined', '2020-08-05 12:43:57', '2020-08-05 12:43:57'),
(431, 2, 81, 'undefined', '2022-05-22 06:43:36', '2022-05-22 06:43:36'),
(428, 5, 61, 'undefined', '2022-05-21 09:39:06', '2022-05-21 09:39:06'),
(427, 4, 81, 'undefined', '2022-05-21 08:50:33', '2022-05-21 08:50:33'),
(425, 4, 61, 'web', '2022-05-21 08:49:24', '2022-05-21 08:49:24'),
(426, 4, 75, 'web', '2022-05-21 08:49:34', '2022-05-21 08:49:34'),
(241, 1, 70, 'undefined', '2021-11-29 17:21:39', '2021-11-29 17:21:39'),
(242, 1, 68, 'undefined', '2021-11-29 17:21:41', '2021-11-29 17:21:41'),
(430, 5, 81, 'undefined', '2022-05-21 09:39:10', '2022-05-21 09:39:10'),
(244, 1, 71, 'undefined', '2021-11-29 21:09:33', '2021-11-29 21:09:33'),
(245, 1, 72, 'undefined', '2021-11-29 21:09:33', '2021-11-29 21:09:33'),
(246, 1, 74, 'undefined', '2021-11-30 13:08:20', '2021-11-30 13:08:20'),
(247, 1, 73, 'undefined', '2021-11-30 13:08:21', '2021-11-30 13:08:21'),
(449, 1, 92, 'undefined', '2022-05-25 04:24:23', '2022-05-25 04:24:23'),
(424, 2, 61, 'web', '2022-05-21 08:37:10', '2022-05-21 08:37:10'),
(450, 1, 93, 'undefined', '2022-05-25 04:24:24', '2022-05-25 04:24:24'),
(374, 1, 87, 'undefined', '2022-05-21 07:31:21', '2022-05-21 07:31:21'),
(422, 2, 75, 'web', '2022-05-21 08:35:31', '2022-05-21 08:35:31'),
(270, 18, 3, 'undefined', '2022-05-03 08:20:29', '2022-05-03 08:20:29'),
(271, 18, 4, 'undefined', '2022-05-03 08:20:30', '2022-05-03 08:20:30'),
(272, 18, 5, 'undefined', '2022-05-03 08:20:31', '2022-05-03 08:20:31'),
(273, 18, 6, 'undefined', '2022-05-03 08:20:33', '2022-05-03 08:20:33'),
(274, 18, 7, 'undefined', '2022-05-03 08:20:33', '2022-05-03 08:20:33'),
(275, 18, 10, 'undefined', '2022-05-03 08:20:34', '2022-05-03 08:20:34'),
(281, 18, 11, 'undefined', '2022-05-03 08:20:51', '2022-05-03 08:20:51'),
(277, 18, 12, 'undefined', '2022-05-03 08:20:36', '2022-05-03 08:20:36'),
(282, 18, 13, 'undefined', '2022-05-03 08:20:51', '2022-05-03 08:20:51'),
(279, 18, 16, 'undefined', '2022-05-03 08:20:40', '2022-05-03 08:20:40'),
(280, 18, 52, 'undefined', '2022-05-03 08:20:43', '2022-05-03 08:20:43'),
(283, 18, 73, 'undefined', '2022-05-03 08:21:01', '2022-05-03 08:21:01'),
(284, 18, 32, 'undefined', '2022-05-03 08:21:05', '2022-05-03 08:21:05'),
(286, 18, 68, 'undefined', '2022-05-03 08:21:09', '2022-05-03 08:21:09'),
(287, 18, 50, 'undefined', '2022-05-03 08:21:10', '2022-05-03 08:21:10'),
(288, 1, 75, 'undefined', '2022-05-03 09:08:43', '2022-05-03 09:08:43'),
(289, 1, 76, 'undefined', '2022-05-03 09:08:44', '2022-05-03 09:08:44'),
(290, 1, 77, 'undefined', '2022-05-04 07:49:45', '2022-05-04 07:49:45'),
(291, 1, 78, 'undefined', '2022-05-04 07:49:45', '2022-05-04 07:49:45'),
(292, 1, 79, 'undefined', '2022-05-05 02:15:39', '2022-05-05 02:15:39'),
(293, 1, 80, 'undefined', '2022-05-05 02:15:45', '2022-05-05 02:15:45'),
(456, 1, 81, 'web', '2022-05-25 08:38:57', '2022-05-25 08:38:57'),
(458, 1, 82, 'web', '2022-05-25 08:39:01', '2022-05-25 08:39:01'),
(332, 1, 83, 'undefined', '2022-05-16 08:07:21', '2022-05-16 08:07:21'),
(333, 1, 84, 'undefined', '2022-05-16 08:07:22', '2022-05-16 08:07:22'),
(334, 1, 69, 'undefined', '2022-05-16 16:42:17', '2022-05-16 16:42:17'),
(335, 1, 85, 'undefined', '2022-05-18 07:36:31', '2022-05-18 07:36:31'),
(432, 5, 52, 'undefined', '2022-05-22 08:45:25', '2022-05-22 08:45:25'),
(433, 2, 52, 'undefined', '2022-05-22 14:26:25', '2022-05-22 14:26:25'),
(434, 4, 52, 'undefined', '2022-05-22 15:44:29', '2022-05-22 15:44:29'),
(435, 1, 88, 'undefined', '2022-05-22 15:54:29', '2022-05-22 15:54:29'),
(436, 5, 88, 'undefined', '2022-05-22 15:54:46', '2022-05-22 15:54:46'),
(448, 5, 91, 'undefined', '2022-05-24 07:58:34', '2022-05-24 07:58:34'),
(440, 1, 89, 'undefined', '2022-05-22 16:23:26', '2022-05-22 16:23:26'),
(441, 1, 90, 'undefined', '2022-05-22 16:23:27', '2022-05-22 16:23:27'),
(442, 5, 89, 'undefined', '2022-05-22 16:23:58', '2022-05-22 16:23:58'),
(443, 5, 90, 'undefined', '2022-05-22 16:23:59', '2022-05-22 16:23:59'),
(444, 4, 89, 'undefined', '2022-05-22 16:24:05', '2022-05-22 16:24:05'),
(446, 2, 89, 'undefined', '2022-05-22 16:24:12', '2022-05-22 16:24:12'),
(447, 1, 91, 'undefined', '2022-05-24 06:08:29', '2022-05-24 06:08:29'),
(393, 39, 10, 'undefined', '2022-05-21 07:58:22', '2022-05-21 07:58:22'),
(392, 39, 11, 'undefined', '2022-05-21 07:58:21', '2022-05-21 07:58:21'),
(391, 39, 17, 'undefined', '2022-05-21 07:58:20', '2022-05-21 07:58:20'),
(390, 39, 61, 'undefined', '2022-05-21 07:58:20', '2022-05-21 07:58:20'),
(389, 39, 32, 'undefined', '2022-05-21 07:58:19', '2022-05-21 07:58:19'),
(388, 39, 33, 'undefined', '2022-05-21 07:58:19', '2022-05-21 07:58:19'),
(387, 39, 34, 'undefined', '2022-05-21 07:58:19', '2022-05-21 07:58:19'),
(386, 39, 68, 'undefined', '2022-05-21 07:58:18', '2022-05-21 07:58:18'),
(385, 39, 35, 'undefined', '2022-05-21 07:58:17', '2022-05-21 07:58:17'),
(384, 39, 50, 'undefined', '2022-05-21 07:58:16', '2022-05-21 07:58:16'),
(383, 39, 51, 'undefined', '2022-05-21 07:58:15', '2022-05-21 07:58:15'),
(382, 39, 52, 'undefined', '2022-05-21 07:58:15', '2022-05-21 07:58:15'),
(381, 39, 7, 'undefined', '2022-05-21 07:58:12', '2022-05-21 07:58:12'),
(380, 39, 16, 'undefined', '2022-05-21 07:58:07', '2022-05-21 07:58:07'),
(379, 39, 13, 'undefined', '2022-05-21 07:58:06', '2022-05-21 07:58:06'),
(378, 39, 12, 'undefined', '2022-05-21 07:58:05', '2022-05-21 07:58:05'),
(377, 39, 4, 'undefined', '2022-05-21 07:58:03', '2022-05-21 07:58:03'),
(376, 39, 3, 'undefined', '2022-05-21 07:58:02', '2022-05-21 07:58:02'),
(459, 2, 92, 'undefined', '2022-05-27 03:42:34', '2022-05-27 03:42:34'),
(460, 2, 91, 'undefined', '2022-05-27 03:42:36', '2022-05-27 03:42:36'),
(461, 4, 92, 'undefined', '2022-05-27 03:42:40', '2022-05-27 03:42:40'),
(462, 4, 91, 'undefined', '2022-05-27 03:42:41', '2022-05-27 03:42:41'),
(463, 5, 92, 'undefined', '2022-05-27 03:42:46', '2022-05-27 03:42:46'),
(464, 6, 92, 'undefined', '2022-05-27 04:05:52', '2022-05-27 04:05:52'),
(465, 6, 91, 'undefined', '2022-05-27 04:05:56', '2022-05-27 04:05:56'),
(466, 1, 65, 'undefined', '2022-05-27 04:46:21', '2022-05-27 04:46:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_agency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `org_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` timestamp NULL DEFAULT NULL,
  `html` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'person',
  `money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `service_money` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `org_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `huyen_id` int(11) DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  `name_mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endTime` timestamp NULL DEFAULT NULL,
  `startTime` timestamp NULL DEFAULT NULL,
  `tel_mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lop_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `money_waiting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `couponParent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_id` int(11) DEFAULT NULL,
  `phong_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `mode_agency`, `org_name`, `api_token`, `birthday`, `html`, `account_type`, `money`, `service_money`, `note`, `tinh_id`, `level_id`, `org_id`, `position_id`, `huyen_id`, `truong_id`, `name_mother`, `endTime`, `startTime`, `tel_mother`, `tel_parent`, `name_parent`, `lop_id`, `parent_id`, `money_waiting`, `email`, `address`, `coupon`, `couponParent`, `password`, `user_type_id`, `so_id`, `phong_id`, `status`, `tel`, `img`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'on', NULL, '$2y$10$3iwH0yvY4vueEbF0p7SRXOd8bC4CpTV1BOcucEKCghilF1orXFLfC', '2022-05-15 17:00:00', NULL, NULL, '3300891', NULL, NULL, 27, NULL, NULL, NULL, 183, NULL, NULL, '2022-07-26 17:00:00', '2022-05-18 17:00:00', NULL, NULL, NULL, NULL, 0, '2451800', 'admin@webux.vn', NULL, 'admin', NULL, '$2y$10$3iwH0yvY4vueEbF0p7SRXOd8bC4CpTV1BOcucEKCghilF1orXFLfC', '1', NULL, NULL, 'on', '0966130168', '', 'THltqEracIwyTtDsQYiSox20MQvzlkczlDnwHtVFjzPBfIyGKUfuRkKXboYe', '2022-06-07 03:28:56', '2021-11-23 11:38:14'),
(4, 'Sở giáo dục', 'on', NULL, NULL, '2022-05-20 17:00:00', NULL, 'person', '', NULL, NULL, 27, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'so@webux.vn', NULL, NULL, NULL, '$2y$10$yGhYsG.fbULhkIdZ0ntsKeTUA0MhePbYVSoWRh0YTZD4jE8ghr3ES', '2', NULL, NULL, 'on', '0987654322', '', 'MESALQ8slbua4NvnYqD53HujrJxqZu75Gv9s4FajFv8UQF7uAhJAf9qGjgUz', '2022-06-15 08:05:40', '2021-12-01 19:13:58'),
(107, 'khach vip', 'on', NULL, NULL, '2022-05-23 17:00:00', NULL, 'person', '320000', NULL, NULL, 27, NULL, NULL, NULL, 14, 1, NULL, '2022-05-30 17:00:00', '2022-05-25 17:00:00', NULL, NULL, NULL, NULL, 0, '0', 'khach@webux.vn', NULL, 'khach', NULL, '$2y$10$woPTYFUn6/gkCQEmxw5JC.3n7zTy3PXNO4nTXu0Flm0ogmcLIEDWK', '35', NULL, NULL, 'on', '0123987677', '', 'lLUgWcIiXESeumnzbdBCnyayAPrs1aG8LPXuZtZRYy17R3lYrHpkJlBX8Jh7', '2022-05-28 07:04:07', '2022-05-22 15:49:52'),
(105, 'Phòng giáo dục', 'on', NULL, '$2y$10$oJgzP.eTtTCzFVfUyHQRyewN1FG7Hr3s2KtfRa257ashinN9R2ovu', '2000-08-01 17:00:00', NULL, 'person', '', NULL, NULL, 27, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 171, '0', 'phong@webux.vn', NULL, NULL, NULL, '$2y$10$yGhYsG.fbULhkIdZ0ntsKeTUA0MhePbYVSoWRh0YTZD4jE8ghr3ES', '4', 4, NULL, 'on', '0987654321', '', 'Sh0xaBxYJlNH0Zq6EhWmhmuW3WEAU7gGiBhHi1vWKBgbE1p2zDuoUPfXEr1L', '2022-06-15 08:22:42', '2022-05-21 08:17:25'),
(106, 'Trường học', 'on', NULL, '$2y$10$VY7loA6craskNABxZSiy7upM4ItI2GDanOs1zuhGIsT7Icu1XKeYq', '2022-05-21 17:00:00', NULL, 'org', '', NULL, NULL, 27, NULL, NULL, NULL, 14, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '0', 'truong@webux.vn', NULL, NULL, NULL, '$2y$10$hrMRoeyceJJlfoc9bdIPIOD7c71CBJnCG213sDPLfV2X/QGZeMloS', '5', NULL, NULL, 'on', '098765678', '', 'eRkaGwFvZZ12s4bKdu11700FtTPXmZvtH2CZlyB1lHnAeJiGRPG0ZvDGpuCY', '2022-05-22 08:41:03', '2022-05-21 09:41:43'),
(102, 'trần thái an', 'on', NULL, NULL, '2022-05-21 17:00:00', NULL, NULL, '70000', '50000', NULL, 27, NULL, NULL, NULL, 14, 1, NULL, '2022-06-25 17:00:00', '2022-05-25 17:00:00', NULL, NULL, NULL, 1, 171, '0', 'Tranthaian@gmail.com', NULL, NULL, NULL, '$2y$10$SKcWMIe0NHUWFoNMHOk6pO1hQLHdpwc3s2Oedj4tDKxWtPgW7jjWq', '35', NULL, NULL, 'on', '0987654333', '', 'So8Q0fYl1fOgOY5HeKqYYA9g3iDqXXKA0UK7nODD5C2ewDwXOwgD5YDqyVmh', '2022-06-10 04:47:16', '2022-05-21 03:48:19'),
(110, 'Giáo viên', 'on', NULL, '$2y$10$rwFne8rkFF9O2hGORVSV4ew3I7ExNgP9zWJ3SFSg9iyxSpXnj1NaW', NULL, NULL, '', '0', NULL, NULL, 27, NULL, NULL, NULL, 14, 1, NULL, NULL, NULL, NULL, NULL, NULL, 11, 0, '0', 'giaovien@webux.vn', NULL, NULL, NULL, '$2y$10$7fEn0LGBwHS6U5dlpYj1/uCQbc9SwozUzSIx0nEUJDAjszdh7DPMO', '6', NULL, NULL, 'on', '0987224321', '', 'f77USUACh73mCtJwc3tBWp4Xwtg6WAlV4rEK9AdHCkS7LgXY9XvpC2CIEJ60', '2022-05-27 04:10:12', '2022-05-27 04:10:12'),
(111, 'le minh chuong', 'on', NULL, NULL, NULL, NULL, 'person', '0', NULL, NULL, 27, NULL, NULL, NULL, 18, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'leminhchuong@gmail.com', NULL, NULL, NULL, '$2y$10$eDvOCKA5Osab5lQikKqWLedN12vzz4PNAnV3z///TY8adq4BZWIiy', '35', NULL, NULL, 'on', NULL, NULL, 'Q7j9zl6Ah52PXKV50YIiPNfV0Dbe5iMwQfhofBckXR9wUbHfoZssNvlaYVK9', '2022-05-27 07:33:36', '2022-05-27 07:33:36'),
(112, 'nguyễn văn hiếu', 'on', NULL, NULL, NULL, NULL, NULL, '475000', '150000', NULL, 41, NULL, NULL, NULL, 117, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'nguyenvanhieu@gmail.com', NULL, NULL, NULL, '$2y$10$IcFKMWcXH7Y77ttzrtfPSOQ0v/hQS32e9SMwuhYJq0PdI.xpCsPtK', '35', NULL, NULL, 'on', '0825532611', NULL, 'z3neOnjaQ7YWCtPpTbArf0uoxHfOxWedTwRnqpU8', '2022-06-12 09:34:43', '2022-06-02 15:09:50'),
(166, 'Đỗ thị Trang', 'on', NULL, NULL, NULL, NULL, 'person', '200000', NULL, NULL, 27, NULL, NULL, NULL, 14, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 171, '85000', 'trang@gmail.com', NULL, NULL, NULL, '$2y$10$Ye9yOcq1FOINPZ4VOfpmWezf4naUPUuCJsraM42rbjHomv/kwPmtW', '35', NULL, NULL, 'on', NULL, NULL, '8ZOxefWB8RzsyQLZaymuFXAmvbMQhyB321u6ivvF59nsRoVYG1taOw639aKM', '2022-06-12 09:04:41', '2022-06-10 07:04:31'),
(167, 'Nguyễn quang linh', 'on', NULL, NULL, NULL, NULL, 'person', '0', NULL, NULL, 27, NULL, NULL, NULL, 14, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 171, '0', 'linh@gmail.com', NULL, NULL, NULL, '$2y$10$Tv33fsjLkpYThXmmL7CVCuEH4Zwj3kiA6OygeI6be.MhRS.Rzb5pm', '35', NULL, NULL, 'on', NULL, NULL, 'NIQpB9x54eFGwWRNHAXWvQSYu4QmH1WHFBlOVLey', '2022-06-11 18:31:23', '2022-06-11 18:31:23'),
(168, 'âcsv', 'on', NULL, NULL, NULL, NULL, 'person', '0', NULL, NULL, 14, NULL, NULL, NULL, 534, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'admc@webux.vn', NULL, NULL, NULL, '$2y$10$oaHCqeRLTj0bZIz/.ya6DOmtbPWAw0WLkPL0.Es0CTz2MNz3G0lNO', '35', NULL, NULL, 'on', NULL, NULL, 'NIQpB9x54eFGwWRNHAXWvQSYu4QmH1WHFBlOVLey', '2022-06-11 18:38:43', '2022-06-11 18:38:43'),
(169, 'ávsd', 'on', NULL, NULL, NULL, NULL, 'person', '0', NULL, NULL, 13, NULL, NULL, NULL, 565, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'ấcvadv@webux.vn', NULL, NULL, NULL, '$2y$10$diw69I9KRfoFivrMUn96POX15xcPWDRFSN0aAf3KIGNhTfc0Y2PP6', '35', NULL, NULL, 'on', NULL, NULL, 'NIQpB9x54eFGwWRNHAXWvQSYu4QmH1WHFBlOVLey', '2022-06-11 18:40:01', '2022-06-11 18:40:01'),
(170, 'sở nghệ an', 'on', 'sở nghệ an', '$2y$10$vw5ghcM3HPiaIPyjLXB9d.zFAU0M17bS6z.GuJ7UlLQbZAH.sknYm', '2022-06-14 17:00:00', NULL, 'person', '0', NULL, NULL, 41, NULL, NULL, NULL, 368, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'songhean@webux.vn', NULL, NULL, NULL, '$2y$10$6Z0i.nOk4TIUmUd/6Ww8u.5lCqVW4uf7NJiNPeLJyaiqZ7msLatcq', '2', NULL, NULL, 'on', '0983214321', '', '4UVzzzj5andG8aBm0L44mbrK5mZExUTgmwDept0l', '2022-06-15 08:03:11', '2022-06-13 18:56:43'),
(172, 'Phòng giáo dục nam đàn', 'on', 'Phòng giáo dục nam đàn', '$2y$10$styx5uIdl5piQcDLb8iOd.mvnpD08r1K9wrctKhNNLuaYDYZ3wz.W', NULL, NULL, 'sale', '0', NULL, NULL, 41, NULL, NULL, NULL, 117, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 170, '0', 'phongnamdan@gmail.com', NULL, 'KHACH@webux.vn', NULL, '$2y$10$fPK32MvXSW.P0fp2TfkFG.mXLdjw8LKuVsFuIh22WxgCBMVzvJ5P6', '4', NULL, NULL, 'on', '09876114321', '', 'uhQ5iceJk0pQ9wpdOpCf3NOTTm7Vr9Xm6ya5j1XYnPFQ6xuHkG7CggAtp9c9', '2022-06-15 10:34:16', '2022-06-15 10:34:16'),
(171, 'sở giáo dục hà nội 2', 'on', 'sở giáo dục hà nội 2', '$2y$10$KbndVXLajPoVh/LzNW2s5O6Mbs6WNmZUvr2mpcZ8iEGfLnbqJXFtK', '2022-06-14 17:00:00', NULL, 'person', '0', NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 'sohanoi2@webux.vn', NULL, NULL, NULL, '$2y$10$UQ5aGCTWlehj6PLXc2jfWeljd6joDCSrG077LKn77ivs0gx6q/Sie', '2', NULL, NULL, 'on', '0987651111', '', '4UVzzzj5andG8aBm0L44mbrK5mZExUTgmwDept0l', '2022-06-15 08:04:18', '2022-06-14 10:11:47'),
(176, 'sách GK', 'on', 'Phòng giáo dục nam đàn123', '$2y$10$l6fKOI8fpIrJtQ26uZ83m.G1iGa3R16zE0tgFWWvnRpnBkIAXcUJS', NULL, NULL, 'sale', '0', NULL, NULL, 27, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, '0', 'admin123@webux.vn', NULL, NULL, NULL, '$2y$10$kMLwTO5pt2qyI7PS09QTietphJa.KJyzPsKvXIvaRqJhgjpaHs2X2', '4', NULL, NULL, 'on', '096613223', '', '8MDi2ZjoUNB5N6RO8jG0tOctljXUAjn7JTJKAcWr', '2022-06-20 10:29:59', '2022-06-20 10:29:59'),
(177, 'sách GK', 'on', 'sở nghệ an 12', '$2y$10$nXPJnq2Uh1OszRWrg2fdoecrVUXVSflYdf3crVXcJvAp480tAlQB2', NULL, NULL, 'sale', '0', NULL, NULL, 27, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '0', 'admin111@webux.vn', NULL, NULL, NULL, '$2y$10$UBN3qK5eH2EvCmpJ794dDubG5XIotyx6jvcqh6iW.DlBCv5FF/KF2', '4', NULL, NULL, 'on', '0825532312', '', '8MDi2ZjoUNB5N6RO8jG0tOctljXUAjn7JTJKAcWr', '2022-06-20 10:46:43', '2022-06-20 10:46:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_tinh`
--

DROP TABLE IF EXISTS `user_tinh`;
CREATE TABLE IF NOT EXISTS `user_tinh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `huyen_id` int(11) DEFAULT NULL,
  `truong_id` int(11) DEFAULT NULL,
  `lop_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_tinh`
--

INSERT INTO `user_tinh` (`id`, `user_id`, `tinh_id`, `status`, `huyen_id`, `truong_id`, `lop_id`, `type`, `note`, `created_at`, `updated_at`) VALUES
(25, 13, 1, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:03', '2021-12-16 15:28:03'),
(26, 13, 2, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:14', '2021-12-16 15:28:14'),
(27, 13, 3, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:14', '2021-12-16 15:28:14'),
(28, 13, 4, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:14', '2021-12-16 15:28:14'),
(29, 13, 5, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:15', '2021-12-16 15:28:15'),
(30, 13, 6, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:15', '2021-12-16 15:28:15'),
(31, 13, 7, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:16', '2021-12-16 15:28:16'),
(32, 13, 8, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:16', '2021-12-16 15:28:16'),
(33, 13, 9, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:17', '2021-12-16 15:28:17'),
(34, 13, 10, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:18', '2021-12-16 15:28:18'),
(35, 13, 20, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:19', '2021-12-16 15:28:19'),
(36, 13, 19, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:19', '2021-12-16 15:28:19'),
(37, 13, 18, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:20', '2021-12-16 15:28:20'),
(38, 13, 17, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:20', '2021-12-16 15:28:20'),
(39, 13, 16, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:21', '2021-12-16 15:28:21'),
(40, 13, 15, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:21', '2021-12-16 15:28:21'),
(41, 13, 13, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:22', '2021-12-16 15:28:22'),
(42, 13, 14, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:23', '2021-12-16 15:28:23'),
(43, 13, 12, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:24', '2021-12-16 15:28:24'),
(44, 13, 11, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:26', '2021-12-16 15:28:26'),
(45, 13, 21, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:27', '2021-12-16 15:28:27'),
(46, 13, 22, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:27', '2021-12-16 15:28:27'),
(47, 13, 23, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:28', '2021-12-16 15:28:28'),
(48, 13, 24, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:28', '2021-12-16 15:28:28'),
(49, 13, 25, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:29', '2021-12-16 15:28:29'),
(50, 13, 26, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:29', '2021-12-16 15:28:29'),
(51, 13, 27, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:30', '2021-12-16 15:28:30'),
(52, 13, 29, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:31', '2021-12-16 15:28:31'),
(53, 13, 28, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:31', '2021-12-16 15:28:31'),
(54, 13, 30, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:32', '2021-12-16 15:28:32'),
(55, 13, 40, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:33', '2021-12-16 15:28:33'),
(56, 13, 39, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:33', '2021-12-16 15:28:33'),
(57, 13, 38, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:34', '2021-12-16 15:28:34'),
(58, 13, 37, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:34', '2021-12-16 15:28:34'),
(59, 13, 36, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:35', '2021-12-16 15:28:35'),
(60, 13, 35, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:35', '2021-12-16 15:28:35'),
(61, 13, 34, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:36', '2021-12-16 15:28:36'),
(62, 13, 33, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:36', '2021-12-16 15:28:36'),
(63, 13, 32, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:37', '2021-12-16 15:28:37'),
(64, 13, 31, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:37', '2021-12-16 15:28:37'),
(65, 13, 41, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:38', '2021-12-16 15:28:38'),
(66, 13, 42, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:38', '2021-12-16 15:28:38'),
(67, 13, 43, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:39', '2021-12-16 15:28:39'),
(68, 13, 44, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:39', '2021-12-16 15:28:39'),
(69, 13, 45, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:40', '2021-12-16 15:28:40'),
(70, 13, 46, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:40', '2021-12-16 15:28:40'),
(71, 13, 47, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:40', '2021-12-16 15:28:40'),
(72, 13, 48, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:41', '2021-12-16 15:28:41'),
(73, 13, 49, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:41', '2021-12-16 15:28:41'),
(74, 13, 50, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:42', '2021-12-16 15:28:42'),
(75, 13, 60, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:42', '2021-12-16 15:28:42'),
(76, 13, 59, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:43', '2021-12-16 15:28:43'),
(77, 13, 58, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:43', '2021-12-16 15:28:43'),
(78, 13, 57, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:44', '2021-12-16 15:28:44'),
(79, 13, 56, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:45', '2021-12-16 15:28:45'),
(80, 13, 55, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:45', '2021-12-16 15:28:45'),
(81, 13, 53, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:46', '2021-12-16 15:28:46'),
(82, 13, 54, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:46', '2021-12-16 15:28:46'),
(83, 13, 52, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:47', '2021-12-16 15:28:47'),
(84, 13, 51, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:48', '2021-12-16 15:28:48'),
(85, 13, 61, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:48', '2021-12-16 15:28:48'),
(86, 13, 62, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:49', '2021-12-16 15:28:49'),
(87, 13, 63, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 15:28:49', '2021-12-16 15:28:49'),
(89, 15, 15, 'on', NULL, NULL, NULL, 'sale', NULL, '2021-12-16 20:07:29', '2021-12-16 20:07:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=400 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `url`, `status`, `commission`, `type`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'root', 'on', NULL, 'admin', 0, NULL, NULL),
(2, 'Sở giáo dục', 'so-giao-duc', 'on', '2', 'admin', 0, '2022-05-21 07:06:24', '2022-05-27 06:49:24'),
(4, 'Phòng giáo dục', 'phong-giao-duc', 'on', '2', 'admin', 0, '2022-05-21 07:06:14', '2022-05-27 06:54:17'),
(35, 'Khách hàng', 'khach-hang', 'on', '3', 'admin', 0, '2021-12-15 16:03:27', '2022-05-27 06:54:23'),
(5, 'Trường học', 'truong-hoc', 'on', NULL, 'admin', 0, '2022-05-21 09:22:32', '2022-05-21 09:22:32'),
(6, 'Giáo Viên', 'giao-vien', 'on', NULL, 'admin', 0, '2022-05-27 03:43:27', '2022-05-27 04:46:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
