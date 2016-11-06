-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 04:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4lifestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_AD` int(15) NOT NULL,
  `TEN` varchar(255) NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MK` text NOT NULL,
  `SDT` int(15) NOT NULL,
  `HINH` longtext NOT NULL,
  `Khoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_AD`, `TEN`, `DIACHI`, `EMAIL`, `MK`, `SDT`, `HINH`, `Khoa`) VALUES
(1, 'Hồ Đức Hiếu', '485/52 BÌnh Hưng Hòa Q.Tân Bình TPHCM', 'hieuhdps02924@4life.com', 'c4ca4238a0b923820dcc509a6f75849b', 905994235, 'Screenshot from 2016-10-22 21-09-49.png', 1),
(2, 'Nguyen Duc Tai', 'Vinh Long', 'nguyenductai@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 113, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ID_BL` int(11) NOT NULL,
  `ID_TV` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `NoiDung` longtext NOT NULL,
  `Ngay` text NOT NULL,
  `AnHien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ID_BL`, `ID_TV`, `ID_SP`, `NoiDung`, `Ngay`, `AnHien`) VALUES
(1, 78, 130, 'san pham dep', '2016-11-04', 1),
(2, 78, 130, 'Ok good', '2016-11-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE `chitiethd` (
  `ID_CHITIETHD` int(15) NOT NULL,
  `ID_HD` int(15) NOT NULL,
  `ID_SP` int(15) NOT NULL,
  `SOLUONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietsp`
--

CREATE TABLE `chitietsp` (
  `ID_CT` int(15) NOT NULL,
  `HINHCT` longtext NOT NULL,
  `ID_SP` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietsp`
--

INSERT INTO `chitietsp` (`ID_CT`, `HINHCT`, `ID_SP`) VALUES
(276, 'thunnam1.jpg', 129),
(277, 'tna1.jpg', 129),
(278, 'tna2.jpg', 129),
(279, 'tna3.jpg', 129),
(280, 'thunnam2.jpg', 130),
(281, 'tnam1.jpg', 130),
(282, 'tnam2.jpg', 130),
(283, 'tnam3.jpg', 130),
(284, 'thunnam3.jpg', 131),
(288, 'thunnam4.jpg', 132),
(289, 'thna1.jpg', 132),
(290, 'thna2.jpg', 132),
(291, 'thna3.jpg', 132),
(292, 'thunnam5.jpg', 133),
(293, 'thnam1.jpg', 133),
(294, 'thnam3.jpg', 133),
(295, 'thnam4.jpg', 133),
(296, 'sominam1.jpg', 134),
(300, 'sominam2.jpg', 135),
(304, 'sominam3.jpg', 136),
(305, 'smi7.jpg', 136),
(306, 'smi8.jpg', 136),
(308, 'sominam4.jpg', 137),
(309, 'smi8.jpg', 137),
(310, 'sominam1.jpg', 137),
(311, 'smi6.jpg', 137),
(312, 'sominam5.jpg', 138),
(313, 'sominam3.jpg', 138),
(314, 'sominam2.jpg', 138),
(315, 'smi6.jpg', 138),
(316, 'khoac1.jpg', 139),
(317, 'khoac4.jpg', 139),
(318, 'k2.jpeg', 139),
(320, 'khoac2.jpg', 140),
(322, 'khoac6.jpg', 140),
(323, 'k5.jpg', 140),
(324, 'khoac3.jpg', 141),
(325, 'khoac2.jpg', 141),
(326, 'khoac5.jpg', 141),
(327, 'khoac1.jpg', 141),
(328, 'khoac4.jpg', 142),
(329, 'khoac6.jpg', 142),
(330, 'k5.jpg', 142),
(331, 'k2.jpeg', 142),
(332, 'khoac5.jpg', 143),
(333, 'k2.jpeg', 143),
(334, 'khoac3.jpg', 143),
(335, 'k5.jpg', 143),
(336, 'khoac6.jpg', 144),
(337, 'khoac5.jpg', 144),
(338, 'k2.jpeg', 144),
(339, 'khoac2.jpg', 144),
(340, 'shortnam1.jpg', 145),
(341, 'shortnam5.jpg', 145),
(342, 'shortnam4.jpg', 145),
(343, 'q222.jpg', 145),
(344, 'shortnam2.jpg', 146),
(345, 'q111.jpg', 146),
(346, 'q222.jpg', 146),
(347, 'q333.jpg', 146),
(348, 'q111.jpg', 147),
(349, 'q222.jpg', 147),
(350, 'q333.jpg', 147),
(351, 'q111.jpg', 147),
(352, 'shortnam4.jpg', 148),
(353, 'q333.jpg', 148),
(354, 's1.jpg', 148),
(355, 'q111.jpg', 148),
(356, 'shortnam5.jpg', 149),
(357, 'q111.jpg', 149),
(358, 'q222.jpg', 149),
(359, 'q333.jpg', 149),
(360, 'jeannam1.jpg', 150),
(361, 'qj1.jpg', 150),
(362, 'qj2.jpg', 150),
(363, 'qj3.jpg', 150),
(364, 'jeannam2.jpg', 151),
(365, 'qj5.jpg', 151),
(366, 'qj7.jpg', 151),
(367, 'qj9.jpg', 151),
(368, 'jeannam3.jpg', 152),
(369, 'qj6.jpg', 152),
(370, 'qj3.jpg', 152),
(371, 'qj8.jpg', 152),
(372, 'jeannam4.jpg', 153),
(373, 'qj9.jpg', 153),
(374, 'qj8.jpg', 153),
(375, 'qj1.jpg', 153),
(376, 'jeannam5.jpg', 154),
(377, 'qj6.jpg', 154),
(378, 'qj5.jpg', 154),
(379, 'qj4.jpg', 154),
(380, 'taynam1.jpg', 155),
(381, 's1.JPG', 155),
(382, 's2.jpg', 155),
(383, 's3.jpg', 155),
(384, 'taynam2.jpg', 156),
(385, 's1.JPG', 156),
(386, 's2.jpg', 156),
(387, 's4.jpg', 156),
(388, 'taynam3.jpg', 157),
(389, 't7.jpg', 157),
(390, 's1.JPG', 157),
(391, 's3.jpg', 157),
(392, 'taynam4.jpg', 158),
(393, 's1.JPG', 158),
(394, 's2.jpg', 158),
(395, 's4.jpg', 158),
(396, 'taynam5.jpg', 159),
(397, 's1.JPG', 159),
(398, 's1.JPG', 159),
(399, 's4.jpg', 159),
(400, 'kakinam1.jpg', 160),
(401, 'ka1.jpg', 160),
(402, 'ka2.jpg', 160),
(403, 'ka4.jpg', 160),
(404, 'kakinam2.jpg', 161),
(405, 'ks7.jpg', 161),
(406, 'ks3.jpg', 161),
(407, 'ka10.jpg', 161),
(408, 'kakinam3.jpg', 162),
(409, 'ka2.jpg', 162),
(410, 'ka6.jpg', 162),
(411, 'ka9.jpg', 162),
(412, 'kakinam4.jpg', 163),
(413, 'ks7.jpg', 163),
(414, 'ka2.jpg', 163),
(415, 'ka4.jpg', 163),
(416, 'kakinam5.jpg', 164),
(417, 'ks7.jpg', 164),
(418, 'ka2.jpg', 164),
(419, 'ka5.jpg', 164),
(420, 'dongunam1.jpg', 165),
(421, 'e5555.jpg', 165),
(422, 'e11111.jpg', 165),
(423, 'e22222.jpg', 165),
(424, 'dongunam2.jpg', 166),
(425, 'e44444.jpg', 166),
(426, 'e33333.jpg', 166),
(427, 'e11111.jpg', 166),
(428, 'dongunam3.jpg', 167),
(429, 'e5555.jpg', 167),
(430, 'e11111.jpg', 167),
(431, 'e44444.jpg', 167),
(432, 'dongunam4.jpg', 168),
(433, 'e5555.jpg', 168),
(434, 'e11111.jpg', 168),
(435, 'e22222.jpg', 168),
(436, 'dongunam5.jpg', 169),
(437, 'e5555.jpg', 169),
(438, 'e11111.jpg', 169),
(439, 'e22222.jpg', 169),
(440, 'thethaonam1.jpg', 170),
(441, 's1.jpg', 170),
(442, 's3.jpg', 170),
(443, 's1.jpg', 170),
(444, 'thethaonam2.jpg', 171),
(445, 's1.jpg', 171),
(446, 's3.jpg', 171),
(447, 't7.jpg', 171),
(448, 'thethaonam3.jpg', 172),
(449, 't5.jpg', 172),
(450, 's1.jpg', 172),
(451, 't7.jpg', 172),
(452, 'thethaonam4.jpg', 173),
(453, 's1.jpg', 173),
(454, 't5.jpg', 173),
(455, 't7.jpg', 173),
(456, 'thethaonam5.jpg', 174),
(457, 's4.jpg', 174),
(458, 's1.jpg', 174),
(459, 't5.jpg', 174),
(460, 'damnu1.jpg', 175),
(461, 'd1.jpg', 175),
(462, 'd3.jpg', 175),
(463, 'd7.jpg', 175),
(464, 'damnu2.jpg', 176),
(465, 'd3.jpg', 176),
(466, 'd2.jpg', 176),
(467, 'd6.jpg', 176),
(468, 'damnu3.jpg', 177),
(469, 'd4.jpg', 177),
(470, 'd6.jpg', 177),
(471, 'd8.jpg', 177),
(472, 'damnu4.jpg', 178),
(473, 'd6.jpg', 178),
(474, 'd1.jpg', 178),
(475, 'd4.jpg', 178),
(476, 'damnu5.jpg', 179),
(477, 'd2.jpg', 179),
(478, 'd6.jpg', 179),
(479, 'd4.jpg', 179),
(480, 'vnu1.jpg', 180),
(481, 'v1.jpg', 180),
(482, 'v2.jpg', 180),
(483, 'v3.jpg', 180),
(484, 'vnu2.jpg', 181),
(485, 'v5.jpg', 181),
(486, 'v3.jpg', 181),
(487, 'v2.jpg', 181),
(488, 'vnu3.jpg', 186),
(489, 'v2.jpg', 186),
(490, 'v5.jpg', 186),
(491, 'v7.jpg', 186),
(492, 'vnu4.jpg', 187),
(493, 'v1.jpg', 187),
(494, 'v2.jpg', 187),
(495, 'v3.jpg', 187),
(496, 'vnu5.jpg', 188),
(497, 'v2.jpg', 188),
(498, 'v5.jpg', 188),
(499, 'v7.jpg', 188),
(500, 'kh1.jpg', 189),
(501, 'k1.jpg', 189),
(502, 'k2.jpg', 189),
(503, 'k3.jpg', 189),
(504, 'kh2.jpg', 190),
(505, 'k4.jpg', 190),
(506, 'k6.jpg', 190),
(507, 'k8.jpg', 190),
(508, 'kh3.jpg', 191),
(509, 'k1.jpg', 191),
(510, 'k4.jpg', 191),
(511, 'k7.jpg', 191),
(512, 'kh4.jpg', 192),
(513, 'k3.jpg', 192),
(514, 'k2.jpg', 192),
(515, 'k6.jpg', 192),
(516, 'kh5.jpg', 193),
(517, 'k8.jpg', 193),
(518, 'k7.jpg', 193),
(519, 'k6.jpg', 193),
(520, 'smi1.jpg', 194),
(521, 'm2.jpg', 194),
(522, 's1.jpg', 194),
(523, 'm3.jpg', 194),
(524, 'smi2.jpg', 195),
(525, 'm1.jpg', 195),
(526, 'm4.jpg', 195),
(527, 'm7.jpg', 195),
(532, 'smi2.jpg', 195),
(533, 'm2.jpg', 195),
(534, 'm4.jpg', 195),
(535, 'm6.jpg', 195),
(536, 'smi3.jpg', 196),
(537, 'm2.jpg', 196),
(538, 'm5.jpg', 196),
(539, 'm7.jpg', 196),
(540, 'smi4.jpg', 197),
(541, 'm2.jpg', 197),
(542, 'm6.jpg', 197),
(543, 'm8.jpg', 197),
(544, 'smi5.jpg', 198),
(545, 'm4.jpg', 198),
(546, 'm1.jpg', 198),
(547, 'm8.jpg', 198),
(548, 'thn1.jpg', 199),
(549, 's1.jpg', 199),
(550, 't2.jpg', 199),
(551, 't1.jpg', 199),
(552, 'thn2.jpg', 200),
(553, 't3.jpg', 200),
(554, 't2.jpg', 200),
(555, 't6.jpg', 200),
(556, 'thn3.jpg', 201),
(557, 't1.jpg', 201),
(558, 's2.jpg', 201),
(559, 't6.jpg', 201),
(560, 'thn4.jpg', 202),
(561, 's3.jpg', 202),
(562, 't6.jpg', 202),
(563, 't8.jpg', 202),
(564, 'thn5.jpg', 203),
(565, 't3.jpg', 203),
(566, 't6.jpg', 203),
(567, 't8.jpg', 203),
(568, 'jn1.jpg', 204),
(569, 'j2.jpg', 204),
(570, 'j7.jpg', 204),
(571, 'j5.jpg', 204),
(572, 'jn2.jpg', 205),
(573, 't3.jpg', 205),
(574, 'j6.jpg', 205),
(575, 't4.jpg', 205),
(576, 'jn3.jpg', 206),
(577, 'j1.jpg', 206),
(578, 'j2.jpg', 206),
(579, 'j5.jpg', 206),
(580, 'jn4.jpg', 207),
(581, 'j7.jpg', 207),
(582, 't3.jpg', 207),
(583, 'j6.jpg', 207),
(584, 'jn5.jpg', 208),
(585, 'j5.jpg', 208),
(586, 'j8.jpg', 208),
(587, 't4.jpg', 208),
(588, 'sh1.jpg', 209),
(589, 's4.jpg', 209),
(590, 's2.jpg', 209),
(591, 's1.jpg', 209),
(592, 'sh2.jpg', 210),
(593, 's5.jpg', 210),
(594, 's2.jpg', 210),
(595, 's8.jpg', 210),
(596, 'sh3.jpg', 211),
(597, 's6.jpg', 211),
(598, 's8.jpg', 211),
(599, 's7.jpg', 211),
(600, 'sh4.jpg', 212),
(601, 's3.jpg', 212),
(602, 's7.jpg', 212),
(603, 's8.jpg', 212),
(604, 'sh5.jpg', 213),
(605, 's3.jpg', 213),
(606, 's4.jpg', 213),
(607, 's7.jpg', 213),
(608, 'ln1.jpg', 214),
(609, 'l1.jpg', 214),
(610, 'l2.jpg', 214),
(611, 'l3.jpg', 214),
(612, 'ln2.jpg', 215),
(613, 'l5.jpg', 215),
(614, 'l6.jpg', 215),
(615, 'l7.jpg', 215),
(616, 'ln3.jpg', 216),
(617, 'l4.jpg', 216),
(618, 'l2.jpg', 216),
(619, 'l6.jpg', 216),
(620, 'ln4.jpg', 217),
(621, 'l1.jpg', 217),
(622, 'l6.jpg', 217),
(623, 'l4.jpg', 217),
(624, 'ln5.jpg', 218),
(625, 'l4.jpg', 218),
(626, 'l1.jpg', 218),
(627, 'l6.jpg', 218),
(628, 'dn1.jpg', 219),
(629, 'a1.jpg', 219),
(630, 'a2.jpg', 219),
(631, 'n7.jpg', 219),
(632, 'dn2.jpg', 220),
(633, 'a1.jpg', 220),
(634, 'a2.jpg', 220),
(635, 'a3.jpg', 220),
(636, 'dn3.jpg', 221),
(637, 'n6.jpg', 221),
(638, 'n4.jpg', 221),
(639, 'n7.jpg', 221),
(640, 'dn4.jpg', 222),
(641, 'n4.jpg', 222),
(642, 'n7.jpg', 222),
(643, 'n8.jpg', 222),
(644, 'dn5.jpg', 223),
(645, 'a3.jpg', 223),
(646, 'n5.jpg', 223),
(647, 'n8.jpg', 223),
(648, 'thunnam3.jpg', 131),
(649, 'b3.jpg', 131),
(650, 'b2.jpg', 131),
(651, 'b1.jpg', 131),
(652, 'sominam1.jpg', 134),
(653, 'n2.jpg', 134),
(654, 'n1.jpg', 134),
(655, 'n3.jpg', 134),
(656, 'sominam2.jpg', 135),
(657, 'n1.jpg', 135),
(658, 'n2.jpg', 135),
(659, 'n3.jpg', 135);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia_sp`
--

CREATE TABLE `danhgia_sp` (
  `ID_DG` int(15) NOT NULL,
  `SO_SAO` int(15) NOT NULL,
  `ID_SP` int(15) NOT NULL,
  `ID_TV` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhgia_sp`
--

INSERT INTO `danhgia_sp` (`ID_DG`, `SO_SAO`, `ID_SP`, `ID_TV`) VALUES
(1, 4, 130, 78),
(2, 4, 129, 78);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ID_DM` int(15) NOT NULL,
  `TENDM` varchar(255) NOT NULL,
  `HINHDM` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ID_DM`, `TENDM`, `HINHDM`) VALUES
(1, 'Đồ Nữ', 'nu1.png'),
(2, 'Đồ Nam', 'nam1.png');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ID_HD` int(15) NOT NULL,
  `NGAYTAO_HD` datetime NOT NULL,
  `TONGTIEN` int(15) NOT NULL,
  `ID_TV` int(15) NOT NULL,
  `TRANGTHAI` int(15) NOT NULL,
  `ID_AD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `IDKHUYENMAI` int(15) NOT NULL,
  `TENKM` varchar(255) NOT NULL,
  `GIATRI` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`IDKHUYENMAI`, `TENKM`, `GIATRI`) VALUES
(1, '0%', 0),
(2, '5%', 5);

-- --------------------------------------------------------

--
-- Table structure for table `loai_dm`
--

CREATE TABLE `loai_dm` (
  `ID_LOAI` int(15) NOT NULL,
  `TENLOAI` varchar(255) NOT NULL,
  `HINH` longtext NOT NULL,
  `ID_DM` int(15) NOT NULL,
  `AnHien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai_dm`
--

INSERT INTO `loai_dm` (`ID_LOAI`, `TENLOAI`, `HINH`, `ID_DM`, `AnHien`) VALUES
(1, 'Áo Thun Nam', 'nam1.png', 2, 1),
(2, 'Áo Sơ Mi Nam', 'nam2.png', 2, 1),
(3, 'Áo Khoác Nam', 'nam3.png', 2, 1),
(4, 'Quần Sọt Nam', 'nam4.png', 2, 1),
(5, 'Quần Jean Nam', 'nam5.png', 2, 1),
(6, 'Quần Tây Nam', 'nam6.png', 2, 1),
(7, 'Quần Kaki Nam', 'nam7.png', 2, 1),
(8, 'Đồ Ngủ Nam', 'nam8.png', 2, 1),
(9, 'Đồ Thể Thao Nam', 'nam9.png', 2, 1),
(10, 'Đầm Nữ', 'nu1.png', 1, 1),
(11, 'Váy Nữ', 'nu2.png', 1, 1),
(12, 'Áo Khoác Nữ', 'nu3.png', 1, 1),
(13, 'Áo Sơ Mi Nữ', 'nu4.png', 1, 1),
(14, 'Áo Thun Nữ', 'nu5.png', 1, 1),
(15, 'Quần Jean Nữ', 'nu6.png', 1, 1),
(16, 'Quần Sọt Jean Nữ', 'nu7.png', 1, 1),
(17, 'Đồ Lót Nữ', 'nu8.png', 1, 1),
(18, 'Đồ Ngủ Nữ', 'nu9.png', 1, 1),
(19, 'sdsad', 'i_like_you-wallpaper-1366x768.jpg', 2, 0),
(20, 'dddddd', 'ubuntu_3-wallpaper-1366x768.jpg', 1, 0),
(21, 'Hiếu Test', 'humans_iii-wallpaper-1366x768.jpg', 1, 0),
(22, 'Nhu Cho Dien', 'Screenshot from 2016-10-22 21-10-13.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ID_SP` int(15) NOT NULL,
  `MASP` varchar(255) NOT NULL,
  `TENSP` varchar(255) NOT NULL,
  `HinhSP` longtext NOT NULL,
  `GIASP` int(15) NOT NULL,
  `IDKHUYENMAI` int(15) NOT NULL,
  `ID_LOAI` int(15) NOT NULL,
  `MOTA` longtext NOT NULL,
  `AnHien` int(11) NOT NULL,
  `NgayDang` date NOT NULL,
  `ID_AD` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ID_SP`, `MASP`, `TENSP`, `HinhSP`, `GIASP`, `IDKHUYENMAI`, `ID_LOAI`, `MOTA`, `AnHien`, `NgayDang`, `ID_AD`) VALUES
(129, 'TN1', 'Áo Thun Nam 1', 'thunnam1.jpg', 150000, 1, 1, 'Size: Free\r\nChất liệu: Thun', 1, '2016-10-30', 1),
(130, 'TN2', 'Áo Thun Nam 2', 'thunnam2.jpg', 200000, 2, 1, 'Size: Free\r\nChất liệu: Thun', 1, '2016-10-30', 1),
(131, 'TN3', 'Áo Thun Nam 3', 'thunnam3.jpg', 235000, 2, 1, 'Size: Free\r\nChất liệu: Thun', 1, '2016-10-30', 1),
(132, 'TN4', 'Áo Thun Nam 4', 'thunnam4.jpg', 275000, 2, 1, 'Size: Free\r\nChất liệu: Thun', 1, '2016-10-30', 1),
(133, 'TN5', 'Áo Thun Nam 5', 'thunnam5.jpg', 245000, 1, 1, 'Size: Free\r\nChất liệu: Thun', 1, '2016-10-30', 1),
(134, 'SM1', 'Áo Sơ Mi Nam 1', 'sominam1.jpg', 295000, 2, 2, 'Size: Free\r\nChất liệu: sơ mi', 1, '2016-10-30', 1),
(135, 'SM2', 'Áo Sơ Mi Nam 2', 'sominam2.jpg', 255000, 1, 2, 'Size: Free\r\nChất liệu: sơ mi', 1, '2016-10-30', 1),
(136, 'SM3', 'Áo Sơ Mi Nam 3', 'sominam3.jpg', 255000, 1, 2, 'Size: Free\r\nChất liệu: sơ mi', 1, '2016-10-30', 1),
(137, 'SM4', 'Áo Sơ Mi Nam 4', 'sominam4.jpg', 245000, 2, 2, 'Size: Free\r\nChất liệu: sơ mi', 1, '2016-10-30', 1),
(138, 'SM5', 'Áo Sơ Mi Nam 5', 'sominam5.jpg', 245000, 1, 2, 'Size: Free\r\nChất liệu: sơ mi', 1, '2016-10-30', 1),
(139, 'AK1', 'Áo Khoác Nam 1', 'khoac1.jpg', 275000, 1, 3, 'Size: free\r\nChất Liệu: Vải Kaki', 1, '2016-10-30', 1),
(140, 'AK2', 'Áo Khoác Nam 2', 'khoac2.jpg', 395000, 2, 3, 'Size: free\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(141, 'AK3', 'Áo Khoác Nam 3', 'khoac3.jpg', 300000, 1, 3, 'Size: free\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(142, 'AK4', 'Áo Khoác Nam 4', 'khoac4.jpg', 400000, 2, 3, 'Size: free\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(143, 'AK5', 'Áo Khoác Nam 5', 'khoac5.jpg', 240000, 1, 3, 'Size: free\r\nChất Liệu: Vải Kaki', 1, '2016-10-30', 1),
(144, 'AK6', 'Áo Khoác Nam 6', 'khoac6.jpg', 245000, 2, 3, 'Size: free\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(145, 'ShNa1', 'Quần Sọt Nam 1', 'shortnam1.jpg', 315000, 2, 4, 'Size: free\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(146, 'ShNa2', 'Quần Sọt Nam 2', 'shortnam2.jpg', 225000, 1, 4, 'Size: free\r\nChất Liệu: Vải Kaki', 1, '2016-10-30', 1),
(147, 'ShNa3', 'Quần Sọt Nam 3', 'shortnam3.jpg', 295000, 1, 4, 'Size: free\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(148, 'ShNa4', 'Quần Sọt Nam 4', 'shortnam4.jpg', 185000, 2, 4, 'Size: free\r\nChất Liệu: Vải Kaki', 1, '2016-10-30', 1),
(149, 'ShNa5', 'Quần Sọt Nam 5', 'shortnam5.jpg', 185000, 2, 4, 'Size: free\r\nChất Liệu: Vải Kaki', 1, '2016-10-30', 1),
(150, 'JNa1', 'Quần Jean Nam 1', 'jeannam1.jpg', 355000, 1, 5, 'Size: 39,40,41,42\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(151, 'JNa2', 'Quần Jean Nam 2', 'jeannam2.jpg', 295000, 1, 5, 'Size: 39,40,41,42\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(152, 'JNa3', 'Quần Jean Nam 3', 'jeannam3.jpg', 250000, 1, 5, 'Size: 39,40,41,42\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(153, 'JNa4', 'Quần Jean Nam 4', 'jeannam4.jpg', 185000, 2, 5, 'Size: 39,40,41,42\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(154, 'JNa5', 'Quần Jean Nam 5', 'jeannam5.jpg', 150000, 2, 5, 'Size: 39,40,41,42\r\nChất Liệu: Jean', 1, '2016-10-30', 1),
(155, 'qt1', 'Quần Tây Nam 1', 'taynam1.jpg', 245000, 1, 6, 'Size: 39,40,41,42\r\nChất Liệu: Vải', 1, '2016-10-30', 1),
(156, 'qt2', 'Quần Tây Nam 2', 'taynam2.jpg', 145000, 2, 6, 'Size: 39,40,41,42\nChất Liệu: Vải', 1, '2016-10-30', 1),
(157, 'qt3', 'Quần Tây Nam 3', 'taynam3.jpg', 195000, 1, 6, 'Size: 39,40,41,42\r\nChất Liệu: Vải', 1, '2016-10-30', 1),
(158, 'qt4', 'Quần Tây Nam 4', 'taynam4.jpg', 305000, 1, 6, 'Size: 39,40,41,42\r\nChất Liệu: Vải', 1, '2016-10-30', 1),
(159, 'qt5', 'Quần Tây Nam 5', 'taynam5.jpg', 365000, 1, 6, 'Size: 39,40,41,42\r\nChất Liệu: Vải', 1, '2016-10-30', 1),
(160, 'kk1', 'Quần KaKi Nam 1', 'kakinam1.jpg', 165000, 1, 7, 'Size: 39,40,41,42\r\nChất Liệu: Kaki', 1, '2016-10-30', 1),
(161, 'kk2', 'Quần KaKi Nam 2', 'kakinam2.jpg', 205000, 1, 7, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(162, 'kk3', 'Quần KaKi Nam 3', 'kakinam3.jpg', 145000, 2, 7, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(163, 'kk4', 'Quần KaKi Nam 4', 'kakinam4.jpg', 155000, 1, 7, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(164, 'kk5', 'Quần KaKi Nam 5', 'kakinam5.jpg', 145000, 2, 7, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(165, 'dn1', 'Đồ Ngủ Nam 1', 'dongunam1.jpg', 265000, 1, 8, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(166, 'dn2', 'Đồ Ngủ Nam 2', 'dongunam2.jpg', 145000, 2, 8, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(167, 'dn3', 'Đồ Ngủ Nam 3', 'dongunam3.jpg', 220000, 1, 8, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(168, 'dn4', 'Đồ Ngủ Nam 4', 'dongunam4.jpg', 235000, 1, 8, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(169, 'dn5', 'Đồ Ngủ Nam 5', 'dongunam5.jpg', 165000, 2, 8, 'Size: 39,40,41,42\r\nChất Liệu: KaKi', 1, '2016-10-30', 1),
(170, 'tt1', 'Đồ Thể Thao Nam 1', 'thethaonam1.jpg', 120000, 1, 9, 'Size: 39,40,41,42\r\nChất Liệu: thun', 1, '2016-10-30', 1),
(171, 'tt2', 'Đồ Thể Thao Nam 2', 'thethaonam2.jpg', 100000, 1, 9, 'Size: 39,40,41,42\r\nChất Liệu: Thun', 1, '2016-10-30', 1),
(172, 'tt3', 'Đồ Thể Thao Nam 3', 'thethaonam3.jpg', 85000, 2, 9, 'Size: 39,40,41,42\r\nChất Liệu: Thun', 1, '2016-10-30', 1),
(173, 'tt4', 'Đồ Thể Thao Nam 4', 'thethaonam4.jpg', 95000, 2, 9, 'Size: 39,40,41,42\r\nChất Liệu: Thun', 1, '2016-10-30', 1),
(174, 'tt5', 'Đồ Thể Thao Nam 5', 'thethaonam5.jpg', 85000, 2, 9, 'Size: 39,40,41,42\r\nChất Liệu: Thun', 1, '2016-10-30', 1),
(175, 'danu1', 'Đầm Nữ 1', 'damnu1.jpg', 255000, 1, 10, 'Size: free\r\nChất liệu: Thun cotton', 1, '2016-10-30', 1),
(176, 'danu2', 'Đầm Nữ 2', 'damnu2.jpg', 385000, 1, 10, 'Size: free\r\nChất liệu: Thun cotton', 1, '2016-10-30', 1),
(177, 'danu3', 'Đầm Nữ 3', 'damnu3.jpg', 195000, 2, 10, 'Size: free\r\nChất liệu: Thun cotton', 1, '2016-10-30', 1),
(178, 'danu4', 'Đầm Nữ 4', 'damnu4.jpg', 165000, 2, 10, 'Size: free\r\nChất liệu: Thun cotton', 1, '2016-10-30', 1),
(179, 'danu5', 'Đầm Nữ 5', 'damnu5.jpg', 215000, 1, 10, 'Size: free\r\nChất liệu: Thun cotton', 1, '2016-10-30', 1),
(180, 'vnu1', 'Váy Nữ 1', 'vnu1.jpg', 145000, 2, 11, 'chân váy jean đen. \r\nChất liệu: jean.\r\nSize đủ size.', 1, '2016-10-30', 1),
(181, 'vnu2', 'Váy Nữ 2', 'vnu2.jpg', 200000, 1, 11, 'chân váy jean đen. \r\nChất liệu: jean. \r\nSize đủ size.', 1, '2016-10-30', 1),
(186, 'vnu3', 'Váy Nữ 3', 'vnu3.jpg', 165000, 1, 11, 'chân váy jean đen. \r\nChất liệu: jean. \r\nSize đủ size.', 1, '2016-10-30', 1),
(187, 'vnu4', 'Váy Nữ 4', 'vnu4.jpg', 145000, 2, 11, 'chân váy jean đen. \r\nChất liệu: jean. \r\nSize đủ size.', 1, '2016-10-30', 1),
(188, 'vnu5', 'Váy nữ 5', 'vnu5.jpg', 145000, 2, 11, 'chân váy jean đen. \r\nChất liệu: jean. \r\nSize đủ size.', 1, '2016-10-30', 1),
(189, 'kh1', 'Áo Khoác Nữ 1', 'kh1.jpg', 180000, 2, 12, 'áo khoác nữ tím – chất liệu: vải cotton.\r\nSize: freesize', 1, '2016-10-30', 1),
(190, 'kh2', 'Áo Khoác Nữ 2', 'kh2.jpg', 225000, 1, 12, 'áo khoác nữ đỏ - chất liệu: vải cotton.\r\nSize: freesize.', 1, '2016-10-30', 1),
(191, 'kh3', 'Áo Khoác Nữ 3', 'kh3.jpg', 145000, 2, 12, 'áo khoác nữ đen – chất liệu: vải cotton. \r\nSize: freesize:', 1, '2016-10-30', 1),
(192, 'kh4', 'Áo Khoác Nữ 4', 'kh4.jpg', 265000, 2, 12, 'áo khoác jean nữ - chất liệu: Jean.\r\nSize: S M L.', 1, '2016-10-30', 1),
(193, 'kh5', 'Áo Khoác Nữ 5', 'kh5.jpg', 285000, 1, 12, 'áo khoác nữ nón trắng – chất liệu – vải cotton. \r\nSize: Freesize.', 1, '2016-10-30', 1),
(194, 'smi1', 'Áo Sơ Mi Nữ 1', 'smi1.jpg', 185000, 1, 13, 'Chất liệu: vải. màu sắc: caro.\r\nSize: free', 1, '2016-10-30', 1),
(195, 'smi2', 'Áo Sơ Mi Nữ 2', 'smi2.jpg', 225000, 1, 13, 'Chất liệu: vải. màu sắc: trắng.\r\nSize: free', 1, '2016-10-30', 1),
(196, 'smi3', 'Áo Sơ Mi Nữ 3', 'smi3.jpg', 145000, 2, 13, 'Chất liệu: vải. màu sắc: caro.\r\nSize: free', 1, '2016-10-30', 1),
(197, 'smi4', 'Áo Sơ Mi Nữ 4', 'smi4.jpg', 255000, 1, 13, 'Chất liệu: jean. màu sắc: xanh jean.\r\nSize: free', 1, '2016-10-30', 1),
(198, 'smi5', 'Áo Sơ Mi Nữ 5', 'smi5.jpg', 305000, 1, 13, 'Chất liệu: vải. màu sắc: caro.\r\nSize: free.', 1, '2016-10-30', 1),
(199, 'thn1', 'Áo Thun Nữ 1', 'thn1.jpg', 145000, 2, 14, 'chất liệu: thun cotton lạnh', 1, '2016-10-30', 1),
(200, 'thn2', 'Áo Thun Nữ 2', 'thn2.jpg', 185000, 1, 14, 'chất liệu: thun cotton lạnh', 1, '2016-10-30', 1),
(201, 'thn3', 'Áo Thun Nữ 3', 'thn3.jpg', 185000, 1, 14, 'chất liệu: thun cotton lạnh', 1, '2016-10-30', 1),
(202, 'thn4', 'Áo Thun Nữ 4', 'thn4.jpg', 105000, 1, 14, 'chất liệu: thun cotton lạnh', 1, '2016-10-30', 1),
(203, 'thn5', 'Áo Thun Nữ 5', 'thn5.jpg', 225000, 1, 14, 'chất liệu: thun cotton lạnh', 1, '2016-10-30', 1),
(204, 'jn1', 'Quần Jean Nữ 1', 'jn1.jpg', 235000, 1, 15, 'Chất liệu: jean.\r\nSize : 27 28 29 30', 1, '2016-10-30', 1),
(205, 'jn2', 'Quần Jean Nữ 2', 'jn2.jpg', 185000, 2, 15, 'Chất liệu: jean.\r\nSize : 27 28 29 30', 1, '2016-10-30', 1),
(206, 'jn3', 'Quần Jean Nữ 3', 'jn3.jpg', 265000, 1, 15, 'Chất liệu: jean.\r\nSize : 27 28 29 30', 1, '2016-10-30', 1),
(207, 'jn4', 'Quần Jean Nữ 4', 'jn4.jpg', 165000, 2, 15, 'Chất liệu: jean.\r\nSize : 27 28 29 30', 1, '2016-10-30', 1),
(208, 'jn5', 'Quần Jean Nữ 5', 'jn5.jpg', 235000, 1, 15, 'Chất liệu: jean.\r\nSize : 27 28 29 30', 1, '2016-10-30', 1),
(209, 'sh1', 'Quần Sọt Nữ 1', 'sh1.jpg', 260000, 1, 16, 'chất liệu Jean', 1, '2016-10-30', 1),
(210, 'sh2', 'Quần Sọt nữ 2', 'sh2.jpg', 245000, 1, 16, 'chất liệu Jean', 1, '2016-10-30', 1),
(211, 'sh3', 'Quần Sọt Nữ 3', 'sh3.jpg', 145000, 2, 16, 'chất liệu Jean', 1, '2016-10-30', 1),
(212, 'sh4', 'Quần Sọt Nữ 4', 'sh4.jpg', 245000, 2, 16, 'chất liệu Jean', 1, '2016-10-30', 1),
(213, 'sh5', 'Quần Sọt Nữ 5', 'sh5.jpg', 145000, 2, 16, 'chất liệu Jean', 1, '2016-10-30', 1),
(214, 'ln1', 'Đồ Lót Nữ 1', 'ln1.jpg', 230000, 1, 17, 'chất liệu ren\r\nSize: đủ size', 1, '2016-10-30', 1),
(215, 'ln2', 'Đồ Lót Nữ 2', 'ln2.jpg', 135000, 2, 17, 'chất liệu voan mềm mại, Size: đủ size', 1, '2016-10-30', 1),
(216, 'ln3', 'Đồ Lót Nữ 3', 'ln3.jpg', 135000, 2, 17, 'chất liệu Ren, Size: đủ size', 1, '2016-10-30', 1),
(217, 'ln4', 'Đồ Lót Nữ 4', 'ln4.jpg', 165000, 1, 17, 'chất liệu voan mềm mại, Size: đủ size', 1, '2016-10-30', 1),
(218, 'ln5', 'Đồ Lót Nữ 5', 'ln5.jpg', 210000, 1, 17, 'chất liệu voan mềm mại, Size: đủ size', 1, '2016-10-30', 1),
(219, 'dn1', 'Đồ Ngủ Nữ 1', 'dn1.jpg', 145000, 1, 18, 'chất liệu: vải cotton.', 1, '2016-10-30', 1),
(220, 'dn2', 'Đồ Ngủ Nữ 2', 'dn2.jpg', 145000, 2, 18, 'chất liệu: vải cotton.', 1, '2016-10-30', 1),
(221, 'dn3', 'Đồ Ngủ Nữ 3', 'dn3.jpg', 220000, 1, 18, 'chất liệu: vải cotton.', 1, '2016-10-30', 1),
(222, 'dn4', 'Đồ Ngủ Nữ 4', 'dn4.jpg', 165000, 1, 18, 'chất liệu: vải cotton.', 1, '2016-10-30', 1),
(223, 'dn5', 'Đồ Ngủ Nữ 5', 'dn5.jpg', 120000, 2, 18, 'chất liệu: vải cotton.', 1, '2016-10-30', 1),
(224, 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'ddddddddd', '', 1, 2, 10, '<p>Hiếu Mới Thêm</p>\r\n', 0, '2016-11-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `ID_TV` int(15) NOT NULL,
  `TEN` varchar(255) NOT NULL,
  `HINH` longtext NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MK` text NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `GioiTinh` int(11) NOT NULL,
  `NgayTao` date NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanh_vien`
--

INSERT INTO `thanh_vien` (`ID_TV`, `TEN`, `HINH`, `EMAIL`, `MK`, `DIACHI`, `SDT`, `GioiTinh`, `NgayTao`, `TrangThai`) VALUES
(77, 'Hồ Đức Hiếu', '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEB\nAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEB\nAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCABkAGQDASIA\nAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\nAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\nODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\np6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\nAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\nBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\nU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\nuLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDxHwl8\nXH8K+CNb8Dt8Mvhd4li1TUdd1OPxR4r8F2+oeNtGk1jwNrngeWz0bxKl9ZXMGn6Smvx+N9C0+8Wa\n003x3baL4305FuYdb09UT4m6ZH8MX+HY+DfwvOpPGYj8UW0/xgfiZsPiRNe+S8bxu3hZJDHbL4Y8\n5NCEo8ONLp3mfbpL/wAVV5pz83OPu7Tge+78+Ov4dTS5645Ixx06njnHpz+nWv63WFoKU5qDUpTh\nUm4zqRU6lP2ihKSjUSafPdxa5ZPmlV5ptzf/AGNvw54RePxOZRy7EYfG4niDLOKMRXwecZ9g1i87\nyueNlgcViaGDzTD0cRQhPHYipistrwnlmNqVFUzPBYicKFddT4y8cTeM9V1i/m8L+D/DcepavqGq\n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\nACiiigAooooAKKKKACiiigD/2Q==\n', 'hieuhdps02934@fpt.edu.vn', '380a9e7e1e616ab0d004c61ef2125612', '391a nam kì khởi nghĩa quận 3', '0905994235', 1, '0000-00-00', 1),
(78, 'Nguyen Thanh Dung', '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEB\nAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEB\nAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCABkAGQDASIA\nAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\nAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\nODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\np6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\nAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\nBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\nU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\nuLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD/AD/6\nKKKACiiigAoop6RySf6uN3/3EZvbsD/nuTzQAyip2tbpRlradR6tDKB+ZX+v4moMHp6df1/w/nzw\ncgBRRRQAUUUUAFFFFABRRRQAUUUUAe2/Av4H+Kfjj4vtvDuhRGO33q15fypILaKNSxdDIqkCQryo\nP+z1r93/AIRfsK/CT4faZayappya1qhSNro3yR3VuZAB/qw65wSG444J5yDXMf8ABPb4Vad4P+FN\nv4la1Rr3xEsN+ly6AyIrKAVR8fdOefqvOea/QugDwrxB+zd8G/ENgbCbwRoVmhj8sy2WnQRTdCN+\n8Lnd7+5565/K/wDao/YBj8I6ZqfjT4ZNJNY2aS3d7p8zNJcNGC7FYIo1IBHO0ZxgHnINfuLVDU7C\n11PTryxvIUuLe4gljkikUMjhklXBB69M/l65IB/HHNBNbTS288bRTQu0csTgh43UlWVgehBUgj1B\n5JBJir6i/a8+HVv8NfjPr+l20Zjh1GSbVETGFVbi4mICAAAKNwwPrycEn5doAKKKKACiiigAoooo\nAKKKKAP6cf2I/Flj4i+BHhSwtHjaTRNOgtLkIVLLIAuQ2CSDx06ct3BFfX9fzp/sQftQw/BrxE3h\njxRdtD4Y1edWkuHLuIpydka7ASQpYA56ADk5GW/oD8NeM/DXizS7XVdF1azu7e6jSSMx3ERfDAn5\nkDllJ44I/E5JoA6mmSMEikc9ERmPphRKTnn0X9TyepjlubeBd808USYB3SOqLjnByxAxx69MEkg8\n/Gv7UH7Vfgz4ReE9WsbLWLa58T3NrLFp1rbyCXdOVkAzJEzKnDDO4+oJyBkA/IP/AIKA+KrLxZ8e\nr25snjdbHT47CUxkECSCaVSCQSM5ByOozjkhjXw5XQeKPEV94r8Qat4g1F2e61S8nu5MsW2tNI7l\nQSTwN2P/ANQJ5+gAooooAKKKKACiiigAoor0nwB8JfHvxLvo7LwnoF7qJaRUkljiYJGpYKXLMACB\nweD1I6jkgHm4JUgqSCDkEEggjoQQcg/jn3J5r13wF8dvin8NCT4S8U3tkMghZXkuEG3ONqyylQBx\ngY/E5Nff/wAO/wDgmR4s1WC21LxV4gtrKN1RpdOeFlmUEncpbPUDHvyOcgZ+pdI/4JqfCSBIBqqz\n3LKB55Sdl3nJztweOOQMkYIGcigD8rdd/bZ/aP8AElidP1TxzJJblDHtjtIoW2cjG5H3Zx3znk8k\n5z8yavrmr69eTX2r6hdX1xM5d3uJ5ZfmJYnaHdgoyx4HrjPUn+hHUv8Agm/8AZYAunadewTYGXku\n3YZBOeM9Dge/PUYNeP8AjH/gmH4cvoJB4S1iPTJdp2tcbpQDlscE+i9vbqc5APw5or7U+Ln7Dnxb\n+GKzXNpZS+JNPg3PLeWUO1Y4l3ksRkk4C84/MkOa+NLuyurC4mtbyCS3ngdo5Y5UZGV1JBGGA7j+\nfOQcgFaiiigAooooAKKKntFD3Vujchp4FPuDKwPH0P8ALqQcgH2H+yl+yvr3x38QQX17BNa+E7Od\nHvb143WOdY5R5kEMhUqZWXop9uTya/oR+Gvwd8DfC7R7bSvDmi2cBt4o4vtf2eJbqXYCN0kqAFmP\nBbJ5IXniua/Zq8IaF4S+DngmPRLKG0XUdD07ULryo1TzbqaAGWRgo5Zt3XknJ6Hk+9UAA44H+cZ9\n/c/n1NFFFABRRRQBUvLGz1CCS1vbeK5glUpJFMgeN1O4EMrZBBzyP55zX5v/ALWP7EXhvx5o2oeK\nvAlhDpviK0iluGtbaFY4btI1dykcUS5aeR8AZznjqa/SukKggqRkHgg9xk/4n86AP46vEGgap4Y1\nnUNC1i1ltNQ06d7e4gmRo3R0Z1IKsAR90HB9T161i1+lv/BTHwfoXhf4q6Fd6PZQ2s2t6Y97qDRI\nFM9wZGBkcgZYnPU8nvyMn80qACiiigAqSKQwyxyjkxyJIAehKOWH58ev4kk1HRQB+mnhD/gpj8RP\nCHhfQvDFr4O0Se30TTbbTYZpGffJHboEV3+Y/MwUE+/c8k9F/wAPU/iZ/wBCToP/AH0//wAVX5U0\nUAfqt/w9T+Jn/Qk6D/30/wD8VR/w9T+Jn/Qk6D/30/8A8VX5U0UAfqt/w9T+Jn/Qk6D/AN9P/wDF\nUf8AD1P4mf8AQk6D/wB9P/8AFV+VNFAH6rf8PU/iZ/0JOg/99P8A/FUf8PU/iZ/0JOg/99P/APFV\n+VNFAH0f+0d+0d4g/aO8QaTr+v6TZaVNpVkbKKKyJKOhZiWbJPP3f1Hqa+cKKKACiiigAooooAKK\nKKACiiigAooooAKKKKACiiigAooooA//2Q==\n', 'dungnt@gmail.com', '1bbd886460827015e5d605ed44252251', 'abc acbbb', '0908430147', 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `ID` int(11) NOT NULL,
  `TieuDe` text NOT NULL,
  `Hinh` text NOT NULL,
  `ChiTiet` longtext NOT NULL,
  `ngay` date NOT NULL,
  `ID_AD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`ID`, `TieuDe`, `Hinh`, `ChiTiet`, `ngay`, `ID_AD`) VALUES
(18, 'DEMO', 'km1.jpg', '<p>dasdasd</p>\r\n', '2016-10-30', 1),
(19, 'DEMO1', 'km2.jpg', '<p>das</p>\r\n', '2016-10-30', 1),
(20, 'Sale cực sốc tại 4life', 'things-of-substance-01.jpg', '<div style="margin: 0px 0px 6px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(29, 33, 41); text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">SALE cực SHOCK với hàng ngàn sản phẩm đồng giá từ 49K, 99K, 149K, 199K... tại <strong>4life</strong> chỉ duy nhất trong 4 ngày kể từ ngày 20/10- đến hết ngày 23/11.</span></div>\r\n\r\n<div style="margin: 6px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(29, 33, 41); text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">BST Thu Đông 2016 của </span><strong><span style="font-family:arial,helvetica,sans-serif">4life</span></strong><span style="font-family:arial,helvetica,sans-serif; font-size:inherit"> sẽ ra mắt trong đợt ưu đãi lần này, những nhà thiết kế của hãng </span><strong><span style="color:rgb(29, 33, 41); font-family:arial,helvetica,sans-serif; font-size:16px">4life</span></strong><span style="font-family:arial,helvetica,sans-serif; font-size:inherit"> luôn bắt kịp xu hướng thời trang thế giới Với chất liệu Nhung Lụa là một trong những chất liệu mịn, mượt, xốp, có độ giữ ấm như len nhưng mềm mại và quý phái hơn nhi<span style="font-family:inherit; font-size:inherit">ều. Nhung được xem như một xu hướng thời trang mang đến cho người mặc phong cách lịch sự và tao nhã. Nhung được nhìn nhận như một xu hướng thời trang cổ điển và lãng mạn.</span></span></div>\r\n\r\n<div class="text_exposed_show" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(29, 33, 41); display: inline;">&nbsp;\r\n<div style="margin: 0px 0px 6px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">Trong BST Thu Đông lần này, </span><strong><span style="font-family:arial,helvetica,sans-serif">4life</span></strong><span style="font-family:arial,helvetica,sans-serif; font-size:inherit"> sử dụng chất liệu vải đặc biệt được các nhà thiết kê Úc sử dụng là chất liệu SilkCrepe – chất liệu tạo sự mềm mại, mặt vải hơi có độ tuyết nhẹ tạo nên sự óng ả của sản phẩm nhưng đủ mềm mại làm những chiếc đầm, chiếc áo trở lên bay bổng và chất lừ.</span></div>\r\n\r\n<div style="margin: 6px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp;</div>\r\n\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">Bên cạnh đó Things of Substance là một trong những nhãn thời trang chỉ chuyên sử dụng chất liệu tự nhiên như Linen, Lụa, Cotton Spandex, Cotton Bamboo tạo nên những sản phẩm thời trang đa dạng, trẻ trung, giúp người mặc khẳng định cái tôi cá tính, sành điệu nhưng luôn tạo cảm giác thoáng mát cho mùa hè và ấm áp cho mùa đông..Nét độc đáo tại </span><strong><span style="font-family:arial,helvetica,sans-serif">4life</span></strong><span style="font-family:arial,helvetica,sans-serif; font-size:inherit"> là kiểu dáng suông luôn che được những khuyết điểm trên cơ thể bạn và làm bạn tự tin hơn với phong cách của mình lựa chọn.&nbsp;</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">Đừng bỏ lỡ cơ hội ưu đãi hiếm có tại </span><strong><span style="font-family:arial,helvetica,sans-serif">4life</span></strong><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">.</span></div>\r\n&nbsp;\r\n\r\n<div style="margin: 6px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:inherit">Hãy đến tận hưởng những sản phẩm tuyệt với nhất tại Things of substance.</span></div>\r\n\r\n<div style="margin: 6px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-align: justify;">&nbsp;</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-6f6FwvDHwHE/WAqWF4g7xgI/AAAAAAAAb7o/HyVWcTDTbiYsepuWvV2dG8Pl_fF_zv3_QCLcB/s1600/things-of-substance-02.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-6f6FwvDHwHE/WAqWF4g7xgI/AAAAAAAAb7o/HyVWcTDTbiYsepuWvV2dG8Pl_fF_zv3_QCLcB/s640/things-of-substance-02.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-2vkfLRpsQCs/WAqWF-3d6VI/AAAAAAAAb7s/3CWnJwJBJKUrco_50RjKEN24H73q0TTsACLcB/s1600/things-of-substance-03.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-2vkfLRpsQCs/WAqWF-3d6VI/AAAAAAAAb7s/3CWnJwJBJKUrco_50RjKEN24H73q0TTsACLcB/s640/things-of-substance-03.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-SSZmnILRp2c/WAqWGRDkUOI/AAAAAAAAb7w/WLBL2HFDyjEiBjdCtKwnX4pdMa2Gbex3QCLcB/s1600/things-of-substance-04.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-SSZmnILRp2c/WAqWGRDkUOI/AAAAAAAAb7w/WLBL2HFDyjEiBjdCtKwnX4pdMa2Gbex3QCLcB/s640/things-of-substance-04.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-V4J4IotvbUE/WAqWGQDrHqI/AAAAAAAAb74/VrVDFf_xmjksME23C4Um6hqymbt_TxlEwCLcB/s1600/things-of-substance-05.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-V4J4IotvbUE/WAqWGQDrHqI/AAAAAAAAb74/VrVDFf_xmjksME23C4Um6hqymbt_TxlEwCLcB/s640/things-of-substance-05.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-_XIXppUV6Ic/WAqWGQhgyjI/AAAAAAAAb70/jAdMAx9XY74WJ5LCopvyJZ0jEyh5db0OgCLcB/s1600/things-of-substance-06.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-_XIXppUV6Ic/WAqWGQhgyjI/AAAAAAAAb70/jAdMAx9XY74WJ5LCopvyJZ0jEyh5db0OgCLcB/s640/things-of-substance-06.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-AaCOU2EErIQ/WAqWG1_KwlI/AAAAAAAAb78/dKNWioJ8TxMJkyTW2qfL0NK5k9nBwT-PwCLcB/s1600/things-of-substance-07.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-AaCOU2EErIQ/WAqWG1_KwlI/AAAAAAAAb78/dKNWioJ8TxMJkyTW2qfL0NK5k9nBwT-PwCLcB/s640/things-of-substance-07.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-ia-qpVKXU1g/WAqWHC7K4PI/AAAAAAAAb8A/ybYbeZwp7fo81yMvVj8DMr9LB-nDJk-zwCLcB/s1600/things-of-substance-08.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-ia-qpVKXU1g/WAqWHC7K4PI/AAAAAAAAb8A/ybYbeZwp7fo81yMvVj8DMr9LB-nDJk-zwCLcB/s640/things-of-substance-08.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-nvemxNZqEHU/WAqWHMOsN-I/AAAAAAAAb8E/b_a5iCY5WE0HEQCl1bpNJpaMIYGKLkmlgCLcB/s1600/things-of-substance-09.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-nvemxNZqEHU/WAqWHMOsN-I/AAAAAAAAb8E/b_a5iCY5WE0HEQCl1bpNJpaMIYGKLkmlgCLcB/s640/things-of-substance-09.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="separator" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88); clear: both;"><a href="https://lh4.ggpht.com/-9vEIRCX1ry0/WAqWHttw-wI/AAAAAAAAb8I/qZ-59dRetlsOMtPlPqF_vQ-vmm0JEsduACLcB/s1600/things-of-substance-10.jpg" style="margin: 0px 1em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; transition: all 0.25s;"><img alt="Things Of Substance" src="https://lh4.ggpht.com/-9vEIRCX1ry0/WAqWHttw-wI/AAAAAAAAb8I/qZ-59dRetlsOMtPlPqF_vQ-vmm0JEsduACLcB/s640/things-of-substance-10.jpg" style="border:0px none; font-family:inherit; font-size:inherit; font-stretch:inherit; font-style:inherit; font-variant:inherit; font-weight:inherit; height:auto; line-height:inherit; margin:0px; max-width:100%; outline:none; padding:0px; position:relative; vertical-align:baseline; width:426px" title="Things Of Substance" /></a></div>\r\n', '2016-10-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `yeu_thich`
--

CREATE TABLE `yeu_thich` (
  `ID_YT` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `ID_TV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yeu_thich`
--

INSERT INTO `yeu_thich` (`ID_YT`, `ID_SP`, `ID_TV`) VALUES
(1, 129, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_AD`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ID_BL`);

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`ID_CHITIETHD`),
  ADD KEY `ID_HD` (`ID_HD`);

--
-- Indexes for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`ID_CT`),
  ADD KEY `ID_SP` (`ID_SP`);

--
-- Indexes for table `danhgia_sp`
--
ALTER TABLE `danhgia_sp`
  ADD PRIMARY KEY (`ID_DG`),
  ADD KEY `ID_SP` (`ID_SP`),
  ADD KEY `ID_TV` (`ID_TV`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ID_DM`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ID_HD`),
  ADD KEY `ID_TV` (`ID_TV`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`IDKHUYENMAI`);

--
-- Indexes for table `loai_dm`
--
ALTER TABLE `loai_dm`
  ADD PRIMARY KEY (`ID_LOAI`),
  ADD KEY `ID_DM` (`ID_DM`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ID_SP`),
  ADD KEY `ID_LOAI` (`ID_LOAI`),
  ADD KEY `IDKHUYENMAI` (`IDKHUYENMAI`),
  ADD KEY `ID_AD` (`ID_AD`);

--
-- Indexes for table `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`ID_TV`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD PRIMARY KEY (`ID_YT`),
  ADD KEY `ID_TV` (`ID_TV`),
  ADD KEY `ID_SP` (`ID_SP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_AD` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ID_BL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chitiethd`
--
ALTER TABLE `chitiethd`
  MODIFY `ID_CHITIETHD` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `ID_CT` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=660;
--
-- AUTO_INCREMENT for table `danhgia_sp`
--
ALTER TABLE `danhgia_sp`
  MODIFY `ID_DG` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ID_DM` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ID_HD` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `IDKHUYENMAI` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loai_dm`
--
ALTER TABLE `loai_dm`
  MODIFY `ID_LOAI` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ID_SP` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
--
-- AUTO_INCREMENT for table `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `ID_TV` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `yeu_thich`
--
ALTER TABLE `yeu_thich`
  MODIFY `ID_YT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`ID_HD`) REFERENCES `hoa_don` (`ID_HD`);

--
-- Constraints for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `chitietsp_ibfk_1` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `danhgia_sp`
--
ALTER TABLE `danhgia_sp`
  ADD CONSTRAINT `danhgia_sp_ibfk_1` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`),
  ADD CONSTRAINT `danhgia_sp_ibfk_2` FOREIGN KEY (`ID_TV`) REFERENCES `thanh_vien` (`ID_TV`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ID_TV`) REFERENCES `thanh_vien` (`ID_TV`);

--
-- Constraints for table `loai_dm`
--
ALTER TABLE `loai_dm`
  ADD CONSTRAINT `loai_dm_ibfk_1` FOREIGN KEY (`ID_DM`) REFERENCES `danh_muc` (`ID_DM`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ID_LOAI`) REFERENCES `loai_dm` (`ID_LOAI`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`IDKHUYENMAI`) REFERENCES `khuyen_mai` (`IDKHUYENMAI`),
  ADD CONSTRAINT `san_pham_ibfk_3` FOREIGN KEY (`ID_AD`) REFERENCES `admin` (`ID_AD`);

--
-- Constraints for table `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD CONSTRAINT `yeu_thich_ibfk_1` FOREIGN KEY (`ID_TV`) REFERENCES `thanh_vien` (`ID_TV`),
  ADD CONSTRAINT `yeu_thich_ibfk_2` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
