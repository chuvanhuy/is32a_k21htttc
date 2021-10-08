-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 05:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k22htttc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id_nguoi_dung` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id_nguoi_dung`, `ten_nguoi_dung`, `email`, `dien_thoai`, `mat_khau`, `ghi_chu`) VALUES
(1, 'Chu Văn Huy', 'chuvanhuy@gmail.com', '0904396383', '123456', 'Chẳng bao giờ có cái gọi là ‘Thời điểm thích hợp’ đâu'),
(2, 'Phạm Mai Anh', 'anhpm@bav.edu.vn', '0989555666', '555666', 'Trải nghiệm cận kề cái chết đôi lúc giúp một người nhìn nhận rõ hơn'),
(3, 'Nguyễn Hoàng Quân', 'quannh@bav.edu.vn', '0985666999', '666999', 'Đừng bao giờ sợ thất bại, bạn chỉ cần đúng có một lần trong đời thôi'),
(4, 'Phan Anh Tú', 'tupa@bav.edu.vn', '0987777888', '777888', 'Đằng nào bạn cũng phải nghĩ, vậy sao không nghĩ lớn luôn?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL,
  `tieu_de` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_lan_doc` int(11) NOT NULL DEFAULT '0',
  `ngay_dang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ghi_chu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`, `so_lan_doc`, `ngay_dang`, `ghi_chu`) VALUES
(6, 'CÃ´ng an Äá»“ng Nai dáº«n Ä‘oÃ n 14.000 ngÆ°á»i vá» quÃª', '<p>Sau nhiá»u ng&agrave;y Ä‘Äƒng k&yacute; á»Ÿ UBND phÆ°á»ng, hÆ¡n 14.000 ngÆ°á»i d&acirc;n xa xá»© Ä‘Æ°á»£c táº¡o Ä‘iá»u kiá»‡n cháº¡y xe vá» qu&ecirc; dÆ°á»›i sá»± dáº«n Ä‘o&agrave;n cá»§a CSGT Äá»“ng Nai.</p>', '<p class=\"Normal\">Ng&agrave;y 5/10, táº¡i s&acirc;n váº­n Ä‘á»™ng tá»‰nh á»Ÿ TP Bi&ecirc;n Ho&agrave;, UBND Äá»“ng Nai tá»• chá»©c Ä‘Æ°a ngÆ°á»i d&acirc;n sá»‘ng á»Ÿ Ä‘á»‹a b&agrave;n c&oacute; nhu cáº§u vá» qu&ecirc; táº¡i miá»n Trung, T&acirc;y Nguy&ecirc;n v&agrave; T&acirc;y Nam Bá»™. Trong danh s&aacute;ch Ä‘Äƒng k&yacute; vá» Ä‘á»£t n&agrave;y, nhiá»u nháº¥t l&agrave; ngÆ°á»i d&acirc;n miá»n T&acirc;y v&agrave; T&acirc;y Nguy&ecirc;n. Táº¥t cáº£ ngÆ°á»i vá» trÆ°á»›c Ä‘&oacute; pháº£i c&oacute; káº¿t quáº£ x&eacute;t nghiá»‡m &acirc;m t&iacute;nh.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\" style=\"padding-bottom: 67.049808429119%; position: relative;\"><picture> <source data-srcset=\"https://i1-vnexpress.vnecdn.net/2021/10/05/DSC02228-JPG-9749-1633420193.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=hljKwNXtHSUlgpQ78jQdpA 1x, https://i1-vnexpress.vnecdn.net/2021/10/05/DSC02228-JPG-9749-1633420193.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=GgxerV6BcuS9q_vRlgyGrw 1.5x, https://i1-vnexpress.vnecdn.net/2021/10/05/DSC02228-JPG-9749-1633420193.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=4CD0hxYTVprOToiM6KM4hA 2x\" /> <img class=\"lazy lazied\" style=\"position: absolute; width: 100%; left: 0;\" src=\"https://i1-vnexpress.vnecdn.net/2021/10/05/DSC02228-JPG-9749-1633420193.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=hljKwNXtHSUlgpQ78jQdpA\" alt=\"Äo&agrave;n xe Ä‘Æ°a 7.000 ngÆ°á»i d&acirc;n T&acirc;y Nguy&ecirc;n vá» qu&ecirc; Ä‘i qua Ä‘Æ°á»ng Nguyá»…n &Aacute;i Quá»‘c, chiá»u 5/10. áº¢nh: PhÆ°á»›c Tuáº¥n\" data-src=\"https://i1-vnexpress.vnecdn.net/2021/10/05/DSC02228-JPG-9749-1633420193.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=hljKwNXtHSUlgpQ78jQdpA\" data-ll-status=\"loaded\" /> </picture></div>\r\n<figcaption>\r\n<p class=\"Image\">Äo&agrave;n xe Ä‘Æ°a 7.000 ngÆ°á»i d&acirc;n T&acirc;y Nguy&ecirc;n vá» qu&ecirc; Ä‘i qua Ä‘Æ°á»ng Nguyá»…n &Aacute;i Quá»‘c, chiá»u 5/10. áº¢nh: <em>PhÆ°á»›c Tuáº¥n</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">NgÆ°á»i d&acirc;n Ä‘Æ°á»£c chia l&agrave;m bá»‘n Ä‘o&agrave;n: L&acirc;m Äá»“ng, miá»n Trung (B&igrave;nh Thuáº­n trá»Ÿ ra Nghá»‡ An), T&acirc;y Nam Bá»™ v&agrave; T&acirc;y Nguy&ecirc;n (B&igrave;nh PhÆ°á»›c, ÄÄƒk N&ocirc;ng, ÄÄƒk LÄƒk, Gia Lai, Kom Tum). C&ocirc;ng an tá»‰nh cá»­ chiáº¿n sÄ© cháº¡y xe Ä‘áº·c chá»§ng dáº«n Ä‘o&agrave;n, Ä‘i c&ugrave;ng c&oacute; nh&acirc;n vi&ecirc;n y táº¿ v&agrave; háº­u cáº§n. Äo&agrave;n ngÆ°á»i Ä‘Æ°á»£c dáº«n tá»›i Ä‘á»‹a pháº­n gi&aacute;p Äá»“ng Nai, sau Ä‘&oacute; tá»«ng Ä‘á»‹a phÆ°Æ¡ng cá»­ lá»±c lÆ°á»£ng tiáº¿p nháº­n, Ä‘Æ°a vá» tá»›i qu&ecirc;.</p>\r\n<p class=\"Normal\">Nhiá»u ngÆ°á»i Ä‘&atilde; tráº£ ph&ograve;ng trá» n&ecirc;n ngo&agrave;i chuáº©n bá»‹ thá»©c Äƒn, nÆ°á»›c uá»‘ng c&ograve;n chá»Ÿ Ä‘á»“ Ä‘áº¡c, tÆ° trang c&aacute; nh&acirc;n. Má»™t sá»‘ ngÆ°á»i nghe th&ocirc;ng tin nh&acirc;n vi&ecirc;n c&aacute;c c&acirc;y xÄƒng ngáº¡i tiáº¿p x&uacute;c ngÆ°á»i vá» tá»« v&ugrave;ng dá»‹ch n&ecirc;n Ä‘á»• xÄƒng trong b&igrave;nh nÆ°á»›c suá»‘i mang theo. TrÆ°á»›c khi c&aacute;c Ä‘o&agrave;n xuáº¥t ph&aacute;t, Ä‘áº¡i diá»‡n C&ocirc;ng an tá»‰nh ch&uacute;c má»i ngÆ°á»i l&ecirc;n Ä‘Æ°á»ng b&igrave;nh an, mong há» sá»›m trá»Ÿ láº¡i Äá»“ng Nai l&agrave;m viá»‡c.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\" style=\"padding-bottom: 65.237651444548%; position: relative;\"><picture> <source data-srcset=\"https://i1-vnexpress.vnecdn.net/2021/10/05/ve-que-mien-trung-2-9858-1633415030.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=PPsmZwy79yhs_sa3-TQx4w 1x, https://i1-vnexpress.vnecdn.net/2021/10/05/ve-que-mien-trung-2-9858-1633415030.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Dhw7pJwG1bRmzZaGNF9zHQ 1.5x, https://i1-vnexpress.vnecdn.net/2021/10/05/ve-que-mien-trung-2-9858-1633415030.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=bOnYVn7vpTakcK8ap4zyQg 2x\" /> <img class=\"lazy lazied\" style=\"position: absolute; width: 100%; left: 0;\" src=\"https://i1-vnexpress.vnecdn.net/2021/10/05/ve-que-mien-trung-2-9858-1633415030.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=PPsmZwy79yhs_sa3-TQx4w\" alt=\"Ná»¯ CSGT Äá»“ng Nai há»— trá»£ nÆ°á»›c v&agrave; thá»©c Äƒn nháº¹ cho ngÆ°á»i d&acirc;n trÆ°á»›c khi xuáº¥t ph&aacute;t vá» qu&ecirc;. áº¢nh: PhÆ°á»›c Tuáº¥n\" data-src=\"https://i1-vnexpress.vnecdn.net/2021/10/05/ve-que-mien-trung-2-9858-1633415030.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=PPsmZwy79yhs_sa3-TQx4w\" data-ll-status=\"loaded\" /> </picture></div>\r\n<figcaption>\r\n<p class=\"Image\">CSGT Äá»“ng Nai ph&aacute;t nÆ°á»›c v&agrave; thá»©c Äƒn nháº¹ cho ngÆ°á»i d&acirc;n trÆ°á»›c khi xuáº¥t ph&aacute;t. áº¢nh: <em>PhÆ°á»›c Tuáº¥n</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Chá»§ tá»‹ch UBND Äá»“ng Nai Cao Tiáº¿n DÅ©ng cho biáº¿t tá»‰nh c&oacute; chá»§ trÆ°Æ¡ng Ä‘áº©y máº¡nh váº¥n Ä‘á» an sinh x&atilde; há»™i Ä‘á»ƒ váº­n Ä‘á»™ng c&ocirc;ng nh&acirc;n á»Ÿ láº¡i c&ugrave;ng tham gia phá»¥c há»“i sáº£n xuáº¥t. Vá»›i nhá»¯ng ngÆ°á»i quyáº¿t t&acirc;m vá» qu&ecirc;, Ä‘á»‹a phÆ°Æ¡ng táº¡o Ä‘iá»u kiá»‡n, káº¿t ná»‘i c&aacute;c tá»‰nh Ä‘á»ƒ tá»• chá»©c Ä‘Æ°a ngÆ°á»i d&acirc;n trá»Ÿ vá» an to&agrave;n, Ä‘áº£m báº£o quy Ä‘á»‹nh ph&ograve;ng dá»‹ch..</p>\r\n<p class=\"Normal\">Tá»« Ä‘áº§u th&aacute;ng 10 Ä‘áº¿n nay, Æ°á»›c t&iacute;nh c&oacute; khoáº£ng <a href=\"https://vnexpress.net/dong-nai-to-chuc-dan-hon-3-000-nguoi-ve-que-4366179.html\" rel=\"dofollow\">30.000 ngÆ°á»i d&acirc;n</a> Äá»“ng Nai Ä‘i xe m&aacute;y vá» qu&ecirc;, chá»§ yáº¿u l&agrave; c&ocirc;ng nh&acirc;n á»Ÿ trá» táº¡i c&aacute;c trung t&acirc;m c&ocirc;ng nghiá»‡p lá»›n nhÆ° Bi&ecirc;n H&ograve;a, NhÆ¡n Tráº¡ch, Tráº£ng Bom...</p>\r\n<p class=\"Normal\">Äá»“ng Nai hiá»‡n c&oacute; 31 khu c&ocirc;ng nghiá»‡p v&agrave; h&agrave;ng chá»¥c cá»¥m c&ocirc;ng nghiá»‡p, thu h&uacute;t khoáº£ng 1,2 triá»‡u ngÆ°á»i lao Ä‘á»™ng, trong Ä‘&oacute; khoáº£ng 70% l&agrave; ngÆ°á»i tá»« c&aacute;c tá»‰nh, th&agrave;nh kh&aacute;c Ä‘áº¿n l&agrave;m viá»‡c, á»Ÿ nh&agrave; trá».</p>', NULL, 0, '2021-10-05 08:09:45', NULL),
(7, 'ThÃ­ Ä‘iá»ƒm má»Ÿ Ä‘Æ°á»ng bay ná»™i Ä‘á»‹a tá»« 10/10', '<p>Ch&iacute;nh phá»§ Ä‘á»“ng &yacute; th&iacute; Ä‘iá»ƒm má»Ÿ láº¡i má»™t sá»‘ Ä‘Æ°á»ng bay ná»™i Ä‘á»‹a trong 10 ng&agrave;y, tá»« 10/10, sau Ä‘&oacute; sáº½ tá»•ng káº¿t r&uacute;t kinh nghiá»‡m, Ä‘iá»u chá»‰nh ph&ugrave; há»£p vá»›i thá»±c tiá»…n.</p>', '<p class=\"Normal\">Chiá»u 8/10, Ph&oacute; Thá»§ tÆ°á»›ng L&ecirc; VÄƒn Th&agrave;nh chá»§ tr&igrave; cuá»™c há»p trá»±c tuyáº¿n to&agrave;n quá»‘c vá» viá»‡c triá»ƒn khai phá»¥c há»“i c&aacute;c chuyáº¿n bay thÆ°Æ¡ng máº¡i váº­n chuyá»ƒn h&agrave;nh kh&aacute;ch ná»™i Ä‘á»‹a trong nÆ°á»›c.</p>\r\n<p class=\"Normal\">Thá»© trÆ°á»Ÿng Bá»™ GTVT L&ecirc; Anh Tuáº¥n tr&igrave;nh b&agrave;y dá»± tháº£o káº¿ hoáº¡ch khai th&aacute;c c&aacute;c chuyáº¿n bay th&iacute; Ä‘iá»ƒm tá»« ng&agrave;y 10/10 Ä‘áº¿n háº¿t 20/10 vá»›i 23 chuyáº¿n khá»© há»“i má»—i ng&agrave;y (46 chuyáº¿n má»—i ng&agrave;y). Bao gá»“m 10 chuyáº¿n khá»© há»“i tá»« TPHCM Ä‘i c&aacute;c Ä‘á»‹a phÆ°Æ¡ng, 6 chuyáº¿n khá»© há»“i tá»« H&agrave; Ná»™i, 4 chuyáº¿n khá»© há»“i tá»« Ä&agrave; Náºµng v&agrave; 3 chuyáº¿n khá»© há»“i tá»« Thanh H&oacute;a.</p>\r\n<p class=\"Normal\">H&agrave;nh kh&aacute;ch pháº£i ti&ecirc;m Ä‘á»§ liá»u vaccine (tháº» xanh tr&ecirc;n sá»• Sá»©c khoáº» Ä‘iá»‡n tá»­/PC-Covid hoáº·c giáº¥y chá»©ng nháº­n ti&ecirc;m Ä‘á»§ liá»u vaccine cá»§a cÆ¡ quan c&oacute; tháº©m quyá»n cáº¥p, liá»u cuá»‘i c&ugrave;ng Ä‘&atilde; Ä‘Æ°á»£c ti&ecirc;m &iacute;t nháº¥t 14 ng&agrave;y) hoáº·c F0 khá»i bá»‡nh trong v&ograve;ng 6 th&aacute;ng t&iacute;nh Ä‘áº¿n thá»i Ä‘iá»ƒm vá» Ä‘á»‹a phÆ°Æ¡ng (c&oacute; giáº¥y ra viá»‡n/giáº¥y x&aacute;c nháº­n khá»i bá»‡nh Covid-19); Ä‘á»“ng thá»i, c&oacute; káº¿t quáº£ x&eacute;t nghiá»‡m PCR hoáº·c x&eacute;t nghiá»‡m nhanh kh&aacute;ng nguy&ecirc;n &acirc;m t&iacute;nh trong v&ograve;ng 72 giá» trÆ°á»›c khi l&ecirc;n m&aacute;y bay...</p>\r\n<p class=\"Normal\">Trong qu&aacute; tr&igrave;nh di chuyá»ƒn tá»« cáº£ng h&agrave;ng kh&ocirc;ng vá» nÆ¡i cÆ° tr&uacute;, lÆ°u tr&uacute;, h&agrave;nh kh&aacute;ch lu&ocirc;n thá»±c hiá»‡n 5K, sá»­ dá»¥ng á»©ng dá»¥ng, háº¡n cháº¿ dá»«ng v&agrave; kh&ocirc;ng tiáº¿p x&uacute;c nÆ¡i Ä‘&ocirc;ng ngÆ°á»i; chá»§ Ä‘á»™ng th&ocirc;ng b&aacute;o vá»›i ch&iacute;nh quyá»n Ä‘á»‹a phÆ°Æ¡ng nÆ¡i cÆ° tr&uacute;, lÆ°u tr&uacute;. Tá»± theo d&otilde;i sá»©c khá»e táº¡i nÆ¡i cÆ° tr&uacute;, lÆ°u tr&uacute; &iacute;t nháº¥t 7 ng&agrave;y (theo quy Ä‘á»‹nh cá»¥ thá»ƒ cá»§a tá»«ng Ä‘á»‹a phÆ°Æ¡ng).</p>\r\n<p class=\"Normal\">Äá»‹a phÆ°Æ¡ng x&eacute;t nghiá»‡m v&agrave;o ng&agrave;y thá»© hai ká»ƒ tá»« khi kh&aacute;ch vá» nÆ¡i cÆ° tr&uacute;, lÆ°u tr&uacute; Ä‘á»‘i vá»›i h&agrave;nh kh&aacute;ch vá» tá»« v&ugrave;ng dá»‹ch.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\" style=\"padding-bottom: 66.539923954373%; position: relative;\"><picture> <source data-srcset=\"https://i1-vnexpress.vnecdn.net/2021/10/08/NQH-3586-jpeg-3778-1633696879.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ciuCSrEEO3t6xm7pVEhuwA 1x, https://i1-vnexpress.vnecdn.net/2021/10/08/NQH-3586-jpeg-3778-1633696879.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=k4Pzo-lBYunM1ESXVnSZog 1.5x, https://i1-vnexpress.vnecdn.net/2021/10/08/NQH-3586-jpeg-3778-1633696879.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=cIM81n5SMBwvk2txCMnePg 2x\" /> <img class=\"lazy lazied\" style=\"position: absolute; width: 100%; left: 0;\" src=\"https://i1-vnexpress.vnecdn.net/2021/10/08/NQH-3586-jpeg-3778-1633696879.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ciuCSrEEO3t6xm7pVEhuwA\" alt=\"Ph&oacute; thá»§ tÆ°á»›ng L&ecirc; VÄƒn Th&agrave;nh. áº¢nh: VGP\" data-src=\"https://i1-vnexpress.vnecdn.net/2021/10/08/NQH-3586-jpeg-3778-1633696879.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ciuCSrEEO3t6xm7pVEhuwA\" data-ll-status=\"loaded\" /> </picture></div>\r\n<figcaption>\r\n<p class=\"Image\">Ph&oacute; thá»§ tÆ°á»›ng L&ecirc; VÄƒn Th&agrave;nh. áº¢nh: <em>VGP</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">G&oacute;p &yacute; vá» dá»± tháº£o tr&ecirc;n, Ä‘a sá»‘ &yacute; kiáº¿n c&aacute;c Ä‘á»‹a phÆ°Æ¡ng nháº¥t tr&iacute;, Ä‘á»“ng thá»i kiáº¿n nghá»‹ má»™t sá»‘ ná»™i dung nhÆ° bá»• sung th&ecirc;m chuyáº¿n bay, má»Ÿ th&ecirc;m Ä‘Æ°á»ng bay, thá»i gian th&iacute; Ä‘iá»ƒm, váº¥n Ä‘á» c&aacute;ch ly...</p>\r\n<p class=\"Normal\">L&atilde;nh Ä‘áº¡o UBND TP H&agrave; Ná»™i Ä‘á» nghá»‹ cho ph&eacute;p th&agrave;nh phá»‘ c&aacute;ch ly 7 ng&agrave;y Ä‘á»‘i vá»›i h&agrave;nh kh&aacute;ch táº¡i khu c&aacute;ch ly cá»§a th&agrave;nh phá»‘, hoáº·c táº¡i c&aacute;c kh&aacute;ch sáº¡n do th&agrave;nh phá»‘ chá»‰ Ä‘á»‹nh. H&agrave; Ná»™i sáº½ th&ocirc;ng b&aacute;o cá»¥ thá»ƒ c&aacute;c kh&aacute;ch sáº¡n Ä‘Æ°á»£c Ä‘&oacute;n ngÆ°á»i c&aacute;ch ly.</p>\r\n<p class=\"Normal\">Äáº¡i diá»‡n tá»‰nh Ki&ecirc;n Giang b&agrave;y tá» mong muá»‘n bá»• sung tá»‰nh tham gia v&agrave;o káº¿ hoáº¡ch tá»• chá»©c Ä‘Æ°á»ng bay th&iacute; Ä‘iá»ƒm vá»›i c&aacute;c chuyáº¿n bay tá»« TP HCM Ä‘áº¿n Ph&uacute; Quá»‘c, TP HCM - Ráº¡ch Gi&aacute;, H&agrave; Ná»™i - Ph&uacute; Quá»‘c, H&agrave; Ná»™i - Ráº¡ch Gi&aacute;. Tá»‰nh Ä‘ang l&ecirc;n káº¿ hoáº¡ch th&iacute; Ä‘iá»ƒm Ä‘&oacute;n kh&aacute;ch du lá»‹ch Ä‘áº¿n Ph&uacute; Quá»‘c n&ecirc;n viá»‡c má»Ÿ Ä‘Æ°á»ng bay c&oacute; &yacute; nghÄ©a quan trá»ng. C&ugrave;ng quan Ä‘iá»ƒm, Ä‘áº¡i diá»‡n tá»‰nh Gia Lai cÅ©ng Ä‘Äƒng k&yacute; c&oacute; má»™t chuyáº¿n khá»© há»“i má»—i ng&agrave;y H&agrave; Ná»™i - Pleiku.</p>\r\n<p class=\"Normal\">Äáº¡i diá»‡n UBND tá»‰nh Thanh H&oacute;a n&ecirc;u thá»±c táº¿ b&agrave; con Ä‘i tá»« ph&iacute;a Nam vá» Thanh H&oacute;a báº±ng Ä‘Æ°á»ng bá»™ ráº¥t lá»›n v&agrave; Ä‘&atilde; c&oacute; ph&aacute;t sinh ca l&acirc;y nhiá»…m. Tá»‰nh cÅ©ng Ä‘ang t&iacute;nh phÆ°Æ¡ng &aacute;n Ä‘&oacute;n ngÆ°á»i d&acirc;n vá» qu&ecirc; báº±ng cáº£ Ä‘Æ°á»ng sáº¯t. Theo dá»± tháº£o th&igrave; Thanh H&oacute;a c&oacute; 4 Ä‘Æ°á»ng bay vá»›i táº§n suáº¥t má»™t chuyáº¿n má»—i ng&agrave;y, tuy nhi&ecirc;n tá»‰nh Ä‘á» xuáº¥t chá»‰ bay tuyáº¿n Thanh H&oacute;a - TP HCM vá»›i táº§n suáº¥t 2 chuyáº¿n má»—i tuáº§n.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\" style=\"padding-bottom: 62.5%; position: relative;\"><picture> <source data-srcset=\"https://i1-vnexpress.vnecdn.net/2021/10/08/may-bay-3-2478-1633510555-9151-1633695260.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7qXoAN6w8WnhthpME5fmsg 1x, https://i1-vnexpress.vnecdn.net/2021/10/08/may-bay-3-2478-1633510555-9151-1633695260.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=PxDfWklo5hfp5dvdcXPHUw 1.5x, https://i1-vnexpress.vnecdn.net/2021/10/08/may-bay-3-2478-1633510555-9151-1633695260.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=-1bBPcJPcBW4alAT0J5UfA 2x\" /> <img class=\"lazy lazied\" style=\"position: absolute; width: 100%; left: 0;\" src=\"https://i1-vnexpress.vnecdn.net/2021/10/08/may-bay-3-2478-1633510555-9151-1633695260.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7qXoAN6w8WnhthpME5fmsg\" alt=\"M&aacute;y bay Ä‘á»— h&agrave;ng loáº¡t táº¡i s&acirc;n bay Ná»™i B&agrave;i. áº¢nh: Ngá»c Th&agrave;nh\" data-src=\"https://i1-vnexpress.vnecdn.net/2021/10/08/may-bay-3-2478-1633510555-9151-1633695260.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7qXoAN6w8WnhthpME5fmsg\" data-ll-status=\"loaded\" /> </picture></div>\r\n<figcaption>\r\n<p class=\"Image\">M&aacute;y bay Ä‘á»— h&agrave;ng loáº¡t táº¡i s&acirc;n bay Ná»™i B&agrave;i. áº¢nh: <em>Ngá»c Th&agrave;nh</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Cá»¥c trÆ°á»Ÿng H&agrave;ng kh&ocirc;ng Äinh Viá»‡t Tháº¯ng n&oacute;i Bá»™ Giao th&ocirc;ng Váº­n táº£i sáº½ phá»‘i há»£p cháº·t cháº½ vá»›i ch&iacute;nh quyá»n Ä‘á»‹a phÆ°Æ¡ng Ä‘á»ƒ trao Ä‘á»•i th&ocirc;ng tin ká»‹p thá»i vá» danh s&aacute;ch, c&aacute;c th&ocirc;ng sá»‘ li&ecirc;n quan Ä‘áº¿n h&agrave;nh kh&aacute;ch nhÆ°: T&ecirc;n tuá»•i, sá»‘ Ä‘iá»‡n thoáº¡i, nÆ¡i Ä‘i, nÆ¡i Ä‘áº¿n v&agrave; Ä‘á»‹a chá»‰ nÆ¡i cÆ° tr&uacute;...</p>\r\n<p class=\"Normal\">Thá»© trÆ°á»Ÿng Y táº¿ Äá»— Xu&acirc;n Tuy&ecirc;n cho ráº±ng, trong thá»i gian th&iacute; Ä‘iá»ƒm, táº§n suáº¥t tr&ecirc;n má»—i chuyáº¿n bay kh&ocirc;ng qu&aacute; 50%, sau Ä‘&oacute; má»›i n&acirc;ng dáº§n l&ecirc;n. Vá» viá»‡c h&agrave;nh kh&aacute;ch tá»« nÆ¡i lÆ°u tr&uacute; Ä‘i qua m&ocirc;t sá»‘ Ä‘á»‹a phÆ°Æ¡ng Ä‘á»ƒ Ä‘áº¿n s&acirc;n bay v&agrave; ngÆ°á»£c láº¡i sáº½ Ä‘i nhÆ° tháº¿ n&agrave;o, &ocirc;ng Tuy&ecirc;n cho ráº±ng, c&aacute;c Ä‘á»‹a phÆ°Æ¡ng n&ecirc;n táº¡o Ä‘iá»u kiá»‡n bá»Ÿi Ä‘á»ƒ l&ecirc;n m&aacute;y bay, h&agrave;nh kh&aacute;ch Ä‘&atilde; pháº£i ti&ecirc;m Ä‘á»§ liá»u vaccine, x&eacute;t nghiá»‡m &acirc;m t&iacute;nh trong 72 tiáº¿ng, \"chá»© qua má»—i Ä‘á»‹a phÆ°Æ¡ng láº¡i gáº·p má»™t tráº¡m kiá»ƒm so&aacute;t th&igrave; ráº¥t kh&oacute; khÄƒn\".</p>\r\n<p class=\"Normal\">Káº¿t luáº­n cuá»™c há»p, Ph&oacute; Thá»§ tÆ°á»›ng L&ecirc; VÄƒn Th&agrave;nh n&ecirc;u r&otilde;, \"viá»‡c kh&ocirc;i phá»¥c c&aacute;c chuyáº¿n bay ráº¥t l&agrave; cáº§n thiáº¿t trong t&igrave;nh h&igrave;nh hiá»‡n nay\". Tuy nhi&ecirc;n, qu&aacute; tr&igrave;nh triá»ƒn khai pháº£i báº£o Ä‘áº£m tháº­n trá»ng, tiáº¿n h&agrave;nh tá»«ng bÆ°á»›c v&agrave; má»Ÿ rá»™ng dáº§n, trÆ°á»›c háº¿t l&agrave; tá»• chá»©c th&iacute; Ä‘iá»ƒm tá»« ng&agrave;y 10 Ä‘áº¿n 20/10.</p>\r\n<p class=\"Normal\">Ph&oacute; thá»§ tÆ°á»›ng giao Bá»™ Giao th&ocirc;ng Váº­n táº£i kháº©n trÆ°Æ¡ng ho&agrave;n thiá»‡n Ä‘á» &aacute;n, sá»›m ban h&agrave;nh Ä‘á»ƒ l&agrave;m cÆ¡ sá»Ÿ thá»±c hiá»‡n th&iacute; Ä‘iá»ƒm, sau Ä‘&oacute; sáº½ tá»•ng káº¿t r&uacute;t kinh nghiá»‡m, Ä‘iá»u chá»‰nh ká»‹p thá»i cho ph&ugrave; há»£p vá»›i t&igrave;nh t&igrave;nh thá»±c tiá»…n.</p>\r\n<p class=\"Normal\">Tuáº§n trÆ°á»›c, Cá»¥c H&agrave;ng kh&ocirc;ng Viá»‡t Nam Ä‘&atilde; gá»­i vÄƒn báº£n láº¥y &yacute; kiáº¿n c&aacute;c Ä‘á»‹a phÆ°Æ¡ng Ä‘á»ƒ thá»‘ng nháº¥t trÆ°á»›c khi má»Ÿ láº¡i Ä‘Æ°á»ng bay ná»™i Ä‘á»‹a, gá»“m: H&agrave; Ná»™i, TP. HCM, Ä&agrave; Náºµng, Háº£i Ph&ograve;ng, Cáº§n ThÆ¡, Quáº£ng Ninh, Nghá»‡ An, Äiá»‡n Bi&ecirc;n, Thá»«a Thi&ecirc;n Huáº¿, Quáº£ng B&igrave;nh, Quáº£ng Nam, ÄÄƒk LÄƒk, Gia Lai, L&acirc;m Äá»“ng, Ph&uacute; Y&ecirc;n, B&igrave;nh Äá»‹nh, B&agrave; Rá»‹a - VÅ©ng T&agrave;u, Kh&aacute;nh H&ograve;a, Ki&ecirc;n Giang, C&agrave; Mau.</p>\r\n<p class=\"Normal\">Vá»›i dá»± tháº£o káº¿ hoáº¡ch n&ecirc;u tr&ecirc;n, trong giai Ä‘oáº¡n 10 ng&agrave;y th&iacute; Ä‘iá»ƒm, dá»± kiáº¿n sáº½ chá»‰ c&oacute; c&aacute;c chuyáº¿n khá»© há»“i tá»« TPHCM Ä‘i c&aacute;c Ä‘á»‹a phÆ°Æ¡ng; khá»© há»“i tá»« H&agrave; Ná»™i; khá»© há»“i tá»« Ä&agrave; Náºµng v&agrave; khá»© há»“i tá»« Thanh H&oacute;a. Sá»‘ chuyáº¿n bay v&agrave; Ä‘á»‹a phÆ°Æ¡ng tham gia ch&iacute;nh thá»©c v&agrave;o giai Ä‘oáº¡n th&iacute; Ä‘iá»ƒm sáº½ Ä‘Æ°á»£c Bá»™ Giao th&ocirc;ng Váº­n táº£i v&agrave; c&aacute;c tá»‰nh, th&agrave;nh th&ocirc;ng b&aacute;o sau.</p>', 'may-bay-3-2478-1633510555-9151-1633695260.jpg', 0, '2021-10-08 13:37:33', NULL),
(8, 'MÆ°a lá»›n, lÅ© miá»n Trung lÃªn cao', '<p>LÆ°á»£ng mÆ°a trong 12 tiáº¿ng l&ecirc;n tá»›i 300 mm khiáº¿n lÅ© má»™t sá»‘ s&ocirc;ng á»Ÿ Quáº£ng Trá»‹, Thá»«a Thi&ecirc;n Huáº¿, Quáº£ng Nam l&ecirc;n cao, g&acirc;y ngáº­p nhiá»u tuyáº¿n Ä‘Æ°á»ng.</p>', '<p class=\"Normal\">Dáº£i há»™i tá»¥ nhiá»‡t Ä‘á»›i Ä‘ang g&acirc;y mÆ°a to cho c&aacute;c tá»‰nh tá»« Quáº£ng Trá»‹ Ä‘áº¿n Quáº£ng Ng&atilde;i v&agrave; báº¯c T&acirc;y Nguy&ecirc;n. CÆ¡ quan kh&iacute; tÆ°á»£ng ghi nháº­n lÆ°á»£ng mÆ°a tá»« 19h ng&agrave;y 7/10 Ä‘áº¿n 7h ng&agrave;y 8/10 á»Ÿ PhÆ°á»›c NÄƒng (Quáº£ng Nam), Phá»• H&ograve;a (Quáº£ng Ng&atilde;i) 300 mm, Báº¡ch M&atilde; (Thá»«a Thi&ecirc;n Huáº¿) 290 mm, H&ograve;a Ninh (Ä&agrave; Náºµng) 130 mm, ÄÄƒk Choong (Kon Tum) 105 mm, ÄÄƒk Lay (Kon Tum) 80 mm.</p>\r\n<p class=\"Normal\">MÆ°a lá»›n khiáº¿n lÅ© tr&ecirc;n s&ocirc;ng Tháº¡ch H&atilde;n (Quáº£ng Trá»‹), Vu Gia, Thu Bá»“n (Quáº£ng Nam) Ä‘&atilde; Ä‘áº¡t Ä‘á»‰nh á»Ÿ má»©c b&aacute;o Ä‘á»™ng hai v&agrave; Ä‘ang xuá»‘ng.</p>\r\n<p class=\"Normal\">Náº±m ven s&ocirc;ng Ho&agrave;i, má»™t nh&aacute;nh cá»§a s&ocirc;ng Thu Bá»“n, trÆ°a nay nhiá»u tuyáº¿n phá»‘ Báº¡ch Äáº±ng, Nguyá»…n Ph&uacute;c Chu, Ho&agrave;ng VÄƒn Thá»¥ á»Ÿ TP Há»™i An (<strong>Quáº£ng Nam</strong>) bá»‹ ngáº­p 0,2-0,5 m. Nhiá»u nh&agrave; d&acirc;n, cá»­a h&agrave;ng bu&ocirc;n b&aacute;n dá»c c&aacute;c tuyáº¿n phá»‘ nÆ°á»›c máº¥p m&eacute; báº­c thá»m. B&agrave; con chÆ°a di dá»i t&agrave;i sáº£n do Ä‘&aacute;nh gi&aacute; lÅ© nhá», thÆ°á»£ng nguá»“n s&ocirc;ng Thu Bá»“n mÆ°a giáº£m, c&aacute;c thá»§y Ä‘iá»‡n kh&ocirc;ng xáº£ nÆ°á»›c.</p>\r\n<p class=\"Normal\">MÆ°a lÅ© khiáº¿n tuyáº¿n Ä‘Æ°á»ng ÄT606 tá»« trung t&acirc;m huyá»‡n T&acirc;y Giang (Quáº£ng Nam) Ä‘áº¿n bá»‘n x&atilde; v&ugrave;ng cao bi&ecirc;n giá»›i vá»›i hÆ¡n 6.000 ngÆ°á»i d&acirc;n nhiá»u Ä‘oáº¡n ngáº­p gáº§n má»™t m&eacute;t, sáº¡t lá»Ÿ Ä‘áº¥t g&acirc;y chia cáº¯t. Lá»±c lÆ°á»£ng chá»©c nÄƒng Ä‘&atilde; dá»±ng r&agrave;o cháº¯n, cáº¥m ngÆ°á»i v&agrave; phÆ°Æ¡ng tiá»‡n qua láº¡i. Huyá»‡n T&acirc;y Giang dá»± trá»¯ hÆ¡n 8 táº¥n gáº¡o v&agrave; thá»±c pháº©m Ä‘á»ƒ cung cáº¥p cho ngÆ°á»i d&acirc;n trong trÆ°á»ng há»£p bá»‹ chia cáº¯t nhiá»u ng&agrave;y.</p>\r\n<p class=\"Normal\">Táº¡i <strong>Thá»«a Thi&ecirc;n Huáº¿</strong>, 24 giá» qua Ä‘á»‹a b&agrave;n xáº£y ra mÆ°a lá»›n, má»™t sá»‘ Ä‘oáº¡n Ä‘Æ°á»ng tr&aacute;nh TP Huáº¿ bá»‹ ngáº­p. Má»±c nÆ°á»›c c&aacute;c s&ocirc;ng Ä‘ang l&ecirc;n song nh&agrave; d&acirc;n chÆ°a bá»‹ ngáº­p. MÆ°a v&agrave; triá»u cÆ°á»ng khiáº¿n bá» biá»ƒn th&ocirc;n Th&aacute;i DÆ°Æ¡ng Háº¡ Báº¯c, x&atilde; Háº£i DÆ°Æ¡ng, TP Huáº¿, bá»‹ sáº¡t lá»Ÿ khoáº£ng 250 m, Äƒn s&acirc;u v&agrave;o Ä‘áº¥t liá»n 5 m.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\" style=\"padding-bottom: 66.666666666667%; position: relative;\"><picture> <source data-srcset=\"https://i1-vnexpress.vnecdn.net/2021/10/08/2-JPG-8245-1633684363.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ZGtu7PtIxnh1WLuClpVwaQ 1x, https://i1-vnexpress.vnecdn.net/2021/10/08/2-JPG-8245-1633684363.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=zn48D03L-LvdGxRya9m6uA 1.5x, https://i1-vnexpress.vnecdn.net/2021/10/08/2-JPG-8245-1633684363.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=b0EMZPxEArll647bp5cDwg 2x\" /> <img class=\"lazy lazied\" style=\"position: absolute; width: 100%; left: 0;\" src=\"https://i1-vnexpress.vnecdn.net/2021/10/08/2-JPG-8245-1633684363.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ZGtu7PtIxnh1WLuClpVwaQ\" alt=\"MÆ°a lá»›n khiáº¿n Ä‘Æ°á»ng tr&aacute;nh TP Huáº¿ c&oacute; nhiá»u Ä‘oáº¡n bá»‹ ngáº­p &uacute;ng. áº¢nh: V&otilde; Tháº¡nh\" data-src=\"https://i1-vnexpress.vnecdn.net/2021/10/08/2-JPG-8245-1633684363.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ZGtu7PtIxnh1WLuClpVwaQ\" data-ll-status=\"loaded\" /> </picture></div>\r\n<figcaption>\r\n<p class=\"Image\">MÆ°a lá»›n khiáº¿n Ä‘Æ°á»ng tr&aacute;nh TP Huáº¿ c&oacute; nhiá»u Ä‘oáº¡n bá»‹ ngáº­p &uacute;ng. áº¢nh:<em> V&otilde; Tháº¡nh</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">NÆ°á»›c Ä‘á»• vá» há»“ Táº£ Tráº¡ch, há»“ thá»§y lá»£i lá»›n nháº¥t Thá»«a Thi&ecirc;n Huáº¿, vá»›i lÆ°u lÆ°á»£ng 704 m3/s, l&agrave;m má»±c nÆ°á»›c d&acirc;ng l&ecirc;n 29,34 m. &Ocirc;ng Phan Thanh H&ugrave;ng, Ch&aacute;nh vÄƒn ph&ograve;ng Ban chá»‰ huy Ph&ograve;ng chá»‘ng thi&ecirc;n tai v&agrave; T&igrave;m kiáº¿m cá»©u náº¡n tá»‰nh Thá»«a Thi&ecirc;n Huáº¿, cho biáº¿t Ä‘Æ¡n vá»‹ váº­n h&agrave;nh sáº½ Ä‘iá»u tiáº¿t nÆ°á»›c vá» háº¡ du vá»›i lÆ°u lÆ°á»£ng dÆ°á»›i 1.000 m3/s nháº±m Ä‘Æ°a há»“ vá» má»±c nÆ°á»›c Ä‘&oacute;n lÅ© 25 m.</p>\r\n<p class=\"Normal\">Trung t&acirc;m Dá»± b&aacute;o Kh&iacute; tÆ°á»£ng Thá»§y vÄƒn quá»‘c gia cho biáº¿t, do áº£nh hÆ°á»Ÿng cá»§a dáº£i há»™i tá»¥ nhiá»‡t Ä‘á»›i c&oacute; trá»¥c qua Trung Bá»™ ná»‘i vá»›i<a href=\"https://vnexpress.net/ap-thap-nhiet-doi-manh-len-thanh-bao-4368783.html\" rel=\"dofollow\"> b&atilde;o Lionrock</a>, h&ocirc;m nay c&aacute;c tá»‰nh tá»« Quáº£ng B&igrave;nh Ä‘áº¿n Quáº£ng Ng&atilde;i v&agrave; Kon Tum tiáº¿p tá»¥c mÆ°a 50-80 mm, c&oacute; nÆ¡i tr&ecirc;n 100 mm; tá»« Ä‘&ecirc;m nay mÆ°a giáº£m nhanh.</p>\r\n<p class=\"Normal\">Ri&ecirc;ng Báº¯c Bá»™ v&agrave; Báº¯c Trung Bá»™ trong ng&agrave;y 9-12/10 mÆ°a to do áº£nh hÆ°á»Ÿng cá»§a b&atilde;o. Cá»¥ thá»ƒ tá»« chiá»u 9/10 Ä‘áº¿n ng&agrave;y 11/10, Ä&ocirc;ng Báº¯c Bá»™ mÆ°a 150-250 mm, c&oacute; nÆ¡i tr&ecirc;n 300 mm. Ng&agrave;y 10-11/10, T&acirc;y Báº¯c Bá»™ mÆ°a 50-100 mm, c&oacute; nÆ¡i tr&ecirc;n 150 mm. Ng&agrave;y 10-12/10, á»Ÿ c&aacute;c tá»‰nh Thanh H&oacute;a, Nghá»‡ An, H&agrave; TÄ©nh, Quáº£ng B&igrave;nh mÆ°a ráº¥t to, tá»•ng lÆ°á»£ng phá»• biáº¿n 150-350 mm, c&oacute; nÆ¡i tr&ecirc;n 350 mm.</p>', 'a1-5720-1633673990.jpg', 0, '2021-10-08 14:07:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;