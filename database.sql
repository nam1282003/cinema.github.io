-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2023 lúc 03:54 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xemphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `branch`
--

CREATE TABLE `branch` (
  `br_id` int(11) NOT NULL,
  `branch_id` varchar(30) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `branch_address` varchar(300) NOT NULL,
  `branch_image` varchar(300) DEFAULT NULL,
  `no_of_halls` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `screening_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `branch`
--

INSERT INTO `branch` (`br_id`, `branch_id`, `branch_name`, `branch_address`, `branch_image`, `no_of_halls`, `hall_id`, `screening_id`) VALUES
(39, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch2.png', 5, 1, 13),
(40, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch2.png', 5, 2, NULL),
(41, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch2.png', 5, 3, NULL),
(42, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch2.png', 5, 4, NULL),
(43, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch2.png', 5, 5, NULL),
(44, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'trang 2_ thông tin khách hàng.png', 5, 32, NULL),
(45, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'trang 2_ thông tin khách hàng.png', 5, 33, NULL),
(46, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'trang 2_ thông tin khách hàng.png', 5, 34, NULL),
(47, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'trang 2_ thông tin khách hàng.png', 5, 35, NULL),
(48, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'trang 2_ thông tin khách hàng.png', 5, 36, NULL),
(49, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 37, NULL),
(50, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 38, NULL),
(51, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 39, NULL),
(52, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 40, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_poster` varchar(300) NOT NULL,
  `movie_name` varchar(300) NOT NULL,
  `movie_duration` varchar(20) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_rating` int(11) NOT NULL,
  `movie_trailer` varchar(300) NOT NULL,
  `movie_desc` varchar(3000) NOT NULL,
  `movie_case` varchar(30) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_poster`, `movie_name`, `movie_duration`, `movie_date`, `movie_rating`, `movie_trailer`, `movie_desc`, `movie_case`, `price`) VALUES
(9, 'box1.jpg', '65 - Trận chiến thời tiền sử', '93', '2022-03-04', 8, 'https://www.youtube.com/embed/RVsGFHpNB8E', 'Sau cú va chạm thảm khốc, tàu vũ trụ của Mills (Adam Driver) bay thẳng đến một hành tinh không xác định. Với kiến thức nhạy bén của mình, Mills nhanh chóng nhận ra hành tinh không xác định này chính là Trái Đất của 65 triệu năm trước. Liệu với những công nghệ tương lai đang có, Mills có thể sống sót trước những loài khủng long và sinh vật tiền sử đáng sợ? 65 - Trận Chiến Thời Tiền Sử đến từ bộ đôi biên kịch từng tạo nên “A Quiet Place” và được nhào nặn bởi chính NSX nổi tiếng Sam Raimi. Và, với vai chính được thủ vai bởi diễn viên từng đoạt giải Oscar - Adam Driver.												', 'now showing', '200000'),
(14, 'box2.jpg', 'Shazam! Cơn thịnh nộ của các vị thần', '130', '2023-03-17', 7, 'https://www.youtube.com/embed/lPmzBaNJUzI', '																Phần tiếp nối của Shazam! 2019.																		', 'now showing', '200000'),
(15, 'box3.jpg', 'Thanh gươm thiệt quỷ', '110', '2023-03-22', 9, 'https://www.youtube.com/embed/d2lYcxPUQQk', '																																Professor Thanh Gươm Diệt Quỷ: Đường Đến Làng Rèn Gươm sẽ tái hiện trận chiến khốc liệt nhất tại Phố Đèn Đỏ trong tập 10 và 11 giữa Tanjiro, Sound Hashira, Tengen Uzui với anh em Thượng Huyền Lục – Daki và Gyutaro lần đầu tiên trên màn ảnh rộng. Bên cạnh đó, phim sẽ công chiếu tập 1 của Làng Rèn Gươm: Sau trận chiến khốc liệt với anh em quỷ Thượng Huyền Lục Gyuutarou và Daki tại Phố Đèn Đỏ, Tanjiro và các kiếm sĩ diệt quỷ đều bị thương nặng và được đưa trở về trụ sở của Đội Diệt Quỷ để dưỡng thương và phục hồi																											', 'now showing', '200000'),
(17, 'box4.jpg', 'Siêu lầy gặp siêu lừa', '112', '2023-03-03', 8, 'https://www.youtube.com/embed/ecNMIlP7wIs', '				Thuộc phong cách hành động – hài hước với các “cú lừa” thông minh và lầy lội đến từ bộ đôi Tú (Anh Tú) và Khoa (Mạc Văn Khoa), Siêu Lừa Gặp Siêu Lầy của đạo diễn Võ Thanh Hòa theo chân của Khoa – tên lừa đảo tầm cỡ “quốc nội” đến đảo ngọc Phú Quốc với mong muốn đổi đời. Tại đây, Khoa gặp Tú – tay lừa đảo “hàng real” và cùng Tú thực hiện các phi vụ từ nhỏ đến lớn. Cứ ngỡ sự ranh mãnh của Tú và sự may mắn trời cho của Khoa sẽ giúp họ trở thành bộ đôi bất khả chiến bại, nào ngờ lại đối mặt với nhiều tình huống dở khóc – dở cười. Nhất là khi băng nhóm của bộ đôi nhanh chóng mở rộng vì sự góp mặt của ông Năm (Nhất Trung) và bé Mã Lai (Ngọc Phước) Xem thêm tại: https://www.galaxycine.vn/phim/sieu-lua-gap-sieu-lay\r\n\r\nXem thêm tại: https://www.galaxycine.vn/phim/sieu-lua-gap-sieu-lay				12							', 'now showing', ''),
(18, 'box5.jpg', 'Cuộc chiến đa vũ trụ', '139', '2022-06-24', 8, 'https://www.youtube.com/embed/4y5JUTzFlVs', '					Một phụ nữ trung niên nhập cư người Trung Quốc bị cuốn vào một cuộc phiêu lưu điên cuồng, nơi cô ấy một mình giải cứu thế giới bằng cách khám phá các vũ trụ khác và các bản thể khác của chính cô.			12							', 'now showing', ''),
(20, 'box6.jpg', 'Vong hồn rước lễ', '99', '2023-03-17', 8, 'https://www.youtube.com/embed/V5tNUk2Zi8Q', '							Dựa trên truyền thuyết đô thị kinh dị bậc nhất Tây Ban Nha, Vong Hồn Rước Lễ kể về hồn ma ác nghiệt trú ngụ trong thân xác của một con búp bê. Bối cảnh phim diễn ra ở Tây Ban Nha vào cuối thập niên 1980. Sara (Carla Campra) vừa chuyển nhà tới một thị trấn nhỏ khép kín ở tỉnh Tarrgona và đang tìm cách hoà nhập với bạn bè cùng lứa tại đây. Tuy nhiên, chỉ có cô nàng hướng ngoại Rebe (Aina Quiñones) là người sẵn lòng kết giao với Sara. Một hôm, cả hai rủ nhau đi chơi ở một câu lạc bộ đêm và về nhà rất muộn. Trên đường về, họ đụng phải một cô gái nhỏ mặc váy trắng, tay cầm theo con búp bê. Từ thời khắc đó, cơn ác mộng mới thực sự bắt đầu.	12							', 'now showing', ''),
(21, 'box7.jpg', 'Tìm nhà cho boss', '112', '2023-03-17', 8, 'https://www.youtube.com/embed/EfTlK6b97ik', 'Chuyến hành trình đi tìm chủ mới cho chú chó Runie cùng những tình huống \"dở khóc dở cười\" của hai anh em Jin Guk và Min Su.						', 'now showing', ''),
(23, 'box8.jpg', 'Mất tích', '111', '2023-02-24', 8, 'https://www.youtube.com/embed/zl7LlstHTio', 'Những người từng tạo ra SEARCHING đã trở lại với MISSING ! “Missing” bắt đầu khi Grace (Nia Long) cùng bạn trai Kevin Lin (Ken Leung) đi du lịch Colombia. Sau vài ngày không liên lạc, cô con gái Ali (Storm Reid) bàng hoàng nhận ra mẹ mình đã mất tích một cách bí ẩn. Hết cách, Ali đành phải cố đăng nhập vào các tài khoản liên lạc hay mạng xã hội của mẹ để tìm manh mối. Cô dần khám phá ra những bí mật đen tối mà Grace che giấu suốt bấy lấu. Hàng loạt câu hỏi ập xuống đầu cô gái trẻ. Những mối quan hệ xã hội của Grace là ai? Thân phận thật sự của Kevin là gì? Liệu gã có phải tội phạm và lên kế hoạch bắt cóc Grace?', 'now showing', ''),
(24, 'box9.jpg', 'Quậy tung Newyork', '101', '2023-03-10', 8, 'https://www.youtube.com/embed/WqzXujadi3w', 'Sau nhiều năm chành chọe, nay cặp kỳ phùng địch thủ nổi tiếng nhất thế giới Tom và Jerry đã làm hòa, khăn gói rời khỏi mái nhà chung, và bắt đầu hành trình của riêng mình. Chuột Jerry nay trú ngụ tại một khách sạn sang trọng, nơi chuẩn bị tổ chức một đám cưới Thế kỷ. Cô nhân viên mới Kayla được giao cho nhiệm vụ đuổi Jerry đi nên mang về một chàng mèo “mình đầy kinh nghiệm” đối phó với chuột, không ai khác chính là Tom. Và thế là cuộc chiến mèo - chuột lại nổ ra, kéo theo loạt rắc rối cho khách sạn, và biết bao tình huống dở khóc dở cười.', 'now showing', ''),
(25, 'box10.jpg', 'Người kiến và chiến binh ong: Thế giới lượng tử', '124', '2023-02-17', 8, 'https://www.youtube.com/embed/s3UD3qvJdao', 'Scott Lang và Hope Van Dyne trở lại tiếp tục cuộc phiêu lưu của họ với vai trò Người Kiến và Chiến binh Ong. Cùng với cha mẹ của Hope, họ sẽ có chuyến khám phá Lượng Tử Giới, gặp gỡ những sinh vật mới lạ và bắt đầu cuộc hành trình vào thế giới lượng tử.', 'now showing', ''),
(26, 'coming1.jpg', 'Creed 3', '117', '2023-03-24', 8, 'https://www.youtube.com/embed/2iPOTWpmg2I', 'Sau khi thống trị thế giới quyền anh, Adonis Creed đã phát triển mạnh mẽ trong cả sự nghiệp và cuộc sống gia đình. Khi một người bạn thời thơ ấu và cựu thần đồng quyền anh, Damian (Jonathan Majors), tái xuất sau khi thụ án tù dài hạn, anh ta háo hức chứng minh rằng mình xứng đáng được trở lại võ đài. Cuộc chạm trán giữa những người bạn cũ không chỉ là một cuộc chiến trên võ đài thông thường. Để có thể chiến thắng, Adonis phải đặt tương lai của mình lên trên hết để chiến đấu với Damian — một võ sĩ không còn gì để mất.						', 'coming soon', ''),
(27, 'coming2.jpg', 'Tri Kỷ', '124', '2023-03-24', 8, 'https://www.youtube.com/embed/K46K_1yTwUg', 'Soulmate (tựa Việt: Tri Kỷ) là câu chuyện về Mi So (Kim Da Mi thủ vai) và Ha Eun (Jeon So Nee thủ vai) trong một mối quan hệ chồng chéo chất chứa những hạnh phúc, nỗi buồn, rung động và cả biệt ly. Từ giây phút đầu tiên gặp nhau dưới mái trường tiểu học, giữa hai cô gái đã hình thành một sợi dây liên kết đặc biệt. Và khi Ham Jin Woo (Byun Woo Seok thủ vai) bước vào giữa cả hai, đó cũng là lúc những vết nứt trong mối quan hệ của Mi So và Ha Eun xuất hiện.', 'coming soon', ''),
(28, 'coming3.jpg', 'Cuộc chiến bất tử', '76', '2023-03-24', 8, 'https://www.youtube.com/embed/AiLNf3lMHn4', 'How To Save The Immortal là bộ phim về nhân vật phản diện nổi tiếng nhất trong truyện cổ tích Nga. Bộ phim được đạo diện bởi Roman Artemiev và sự tham gia sản xuất của Vadim Sotskov, Sergei Selyanov, and Sergei Zernov. Xoay quanh cuộc đời của nhân vật Drybone sở hữu sức mạnh bất tử, dù luôn trẻ trung và bảnh bao nhưng vẫn không thể tìm được cô dâu cho mình trong suốt 300 năm. Mặc cho anh ta đe dọa, bắt cóc hay thậm chí biến nhiều công chúa thành ếch thì kế hoạch tán tỉnh của Hoàng Tử Bóng Đêm cùng không thuộn buồm xuôi gió hơn. Trong khi đó thì tất cả những gì mà nữ chiến binh xinh đẹp và dũng cảm Barbara làm là chống lại những kẻ sắp theo đuổi cô trên đấu trường hay những kẻ cầu hôn chỉ vì thèm muốn của hồi môn của Barbara. Sự đối lập này vô tình đưa Drybone và Barbara vào cuộc gặp gỡ định mệnh và cùng chiến đấu với phe phản diện mới là Vua Lentil – kẻ nắm giữ cây kim có thể tước đoạt mạng sống của Hoàng Tử Bóng Đêm Drybone. Dù vậy, hắn không thể ngờ vẫn còn điều kỳ diệu ẩn chứa bên trong trái tim của Drybone giúp anh ấy sống sót...', 'coming soon', ''),
(29, 'coming4.jpg', 'Biệt đội bất ổn', '104', '2023-03-31', 8, 'https://www.youtube.com/embed/XHvNz4g88pE', 'BIỆT ĐỘI RẤT ỔN xoay quanh bộ đôi Quyên (Hoàng Oanh) và Phong (Hứa Vĩ Văn). Sau lần chạm trán tình cờ, bộ đôi lôi kéo Bảy Cục (Võ Tấn Phát), Bảy Súc (Nguyên Thảo), Quạu (Ngọc Phước), Quọ (Ngọc Hoa) tham gia vào phi vụ đặc biệt: Đánh tráo chiếc vòng đính hôn bằng kim cương quý giá và lật tẩy bộ mặt thật của Tuấn - chồng cũ của Quyên trong đám cưới giữa hắn và Tư Xoàn - nữ đại gia miền Tây sở hữu khối tài sản triệu đô. Màn kết hợp bất đắc dĩ của Biệt Đội Rất Ổn - Phong, Quyên và Gia Đình Cục Súc nhằm qua mắt “cô dâu, chú rể” tại khu resort sang chảnh hứa hẹn cực kỳ gay cấn, hồi hộp nhưng không kém phần hài hước, xúc động.', 'coming soon', ''),
(30, 'coming5.jpg', 'PHIM ANH EM SUPER MARIO', '93', '2023-04-07', 7, 'https://www.youtube.com/embed/TWtOlVddekY', 'Câu chuyện về cuộc phiêu lưu của anh em Super Mario đến vương quốc Nấm.						', 'coming soon', ''),
(35, 'Coming6.jpg', 'RENFIELD TAY SAI CỦA QUỶ', '91', '2023-04-14', 6, 'https://www.youtube.com/embed/vXkN2H3Ijyw', 'Trong câu chuyện quái vật hiện đại về người hầu trung thành của Dracula, Renfield (do Nicholas Hoult thủ vai), kẻ bề tôi đáng thương của ông chủ tự ái nhất lịch sử, Dracula (do Nicolas Cage thủ vai). Renfield bị buộc phải bắt con mồi về cho chủ nhân và thực hiện mọi mệnh lệnh, kể cả việc đó nhục nhã như thế nào. Nhưng giờ đây, sau nhiều thế kỷ làm nô lệ, Renfield đã sẵn sàng để khám phá cuộc sống bên ngoài cái bóng của Hoàng Tử Bóng Đêm. Liệu anh ấy có thể tìm được cách để thoát khỏi mỗi quan hệ độc hại này?', 'Coming soon', ''),
(37, 'Coming7.jpg', 'LẬT MẶT 6: TẤM VÉ ĐỊNH MỆNH', '123', '2023-04-28', 9, 'https://www.youtube.com/embed/ns9f92mR6bM', 'Lật mặt 6 sẽ thuộc thể loại giật gân, tâm lý pha hành động, hài hước.', 'Coming soon', ''),
(38, 'Coming8.jpg', 'Chuyện xóm tui', '112', '2023-04-28', 7, 'https://www.youtube.com/embed/e7KHOQ-alqY', 'Lấy cảm hứng từ web drama Chuyện Xóm Tui, phiên bản điện ảnh sẽ mang một màu sắc hoàn toàn khác: hài hước hơn, gần gũi và nhiều cảm xúc hơn Bộ phim là câu chuyện của Nhót - người phụ nữ “chưa kịp già” đã sắp bị mãn kinh, vội vàng đi tìm chồng. Nhưng sâu thẳm trong cô, là khao khát muốn có một đứa con và luôn muốn hàn gắn với người cha suốt ngày say xỉn của mình.', 'Coming soon', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(35) NOT NULL,
  `birthday` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `movie_name` varchar(200) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `transactionDateTime` date NOT NULL,
  `total_price` varchar(35) NOT NULL,
  `payment_type` varchar(35) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Successful',
  `points_earned` int(11) NOT NULL,
  `ghe` int(11) NOT NULL,
  `diadiem` text NOT NULL,
  `rap` text NOT NULL,
  `loaive` varchar(100) NOT NULL,
  `khachhang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `movie_name`, `member_id`, `transactionDateTime`, `total_price`, `payment_type`, `status`, `points_earned`, `ghe`, `diadiem`, `rap`, `loaive`, `khachhang`) VALUES
(79, 'Morbius', 30, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 1, 'TP. HCM', 'CFTv Kuching', '3D', ''),
(80, 'Morbius', 30, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 1, 'TP. HCM', 'CFTv Kuching', '3D', ''),
(81, 'DU HÀNH THỜI GIAN', 30, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 5, 'TP. HCM', 'CFTv KLCC', '3D', ''),
(82, 'Fantastic Beasts: The Secrets of Dumbledore', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 3, 'TP. HCM', 'CFTv KLCC', '3D', ''),
(83, 'Fantastic Beasts: The Secrets of Dumbledore', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 3, 'TP. HCM', 'CFTv KLCC', '3D', ''),
(84, 'Fantastic Beasts: The Secrets of Dumbledore', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 3, 'TP. HCM', 'CFTv KLCC', '3D', ''),
(85, 'Fantastic Beasts: The Secrets of Dumbledore', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 3, 'TP. HCM', 'CFTv KLCC', '3D', ''),
(86, 'Fantastic Beasts: The Secrets of Dumbledore', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 3, 'TP. HCM', 'CFTv KLCC', '3D', ''),
(87, 'The Batman', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 4, 'TP. HCM', 'CFTv KLCC', '2D', ''),
(88, 'The Batman', 2, '0000-00-00', '200000', 'Online', 'Thành công', 200000, 4, 'TP. HCM', 'CFTv KLCC', '2D', 'nguoidung'),
(89, 'The Batman', 1, '2023-04-28', '200000', 'Online', 'Thành công', 200000, 55, 'TP. HCM', 'CFTv KLCC', '2D', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `role` int(11) NOT NULL,
  `locked` int(10) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `gender`, `dob`, `role`, `locked`, `timestamp`) VALUES
(1, 'Assignment', 'Nguyen Van B', 'admin', 'test@test.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1997-05-06', 1, 0, '2023-04-20 20:20:56'),
(2, 'claire', 'Nguyen Van A', 'nguoidung', 'clair@gmail.com', '123456', 'female', '2000-03-11', 0, 0, '2023-04-20 20:20:56'),
(5, '', '', 'adsa', 'nsha@gmail.com', '123456', 'female', '2023-04-14', 0, 0, '2023-04-20 20:20:56'),
(6, '', '', 'NguyenThiKimTien', 'kimtien@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female', '2003-05-19', 0, 0, '2023-04-20 20:20:56'),
(7, '', '', 'KimTien', 'kimtien@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female', '2003-05-19', 0, 0, '2023-04-20 20:20:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`br_id`),
  ADD KEY `Hall Foreign Key` (`hall_id`),
  ADD KEY `Screening Foreign Key` (`screening_id`);

--
-- Chỉ mục cho bảng `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `branch`
--
ALTER TABLE `branch`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
