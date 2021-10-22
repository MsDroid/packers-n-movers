-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 10:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybertisemedia_movers_&_packers`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`) VALUES
(1, 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `oaddress` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `consign_no` varchar(100) NOT NULL,
  `fromadd` varchar(100) NOT NULL,
  `toadd` varchar(100) NOT NULL,
  `inspt` varchar(50) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `oaddress`, `name`, `consign_no`, `fromadd`, `toadd`, `inspt`, `data`) VALUES
(12, 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA', 'Admin', 'SNF-1634799357', 'Alwar', 'Nashik', 'owner', '{\"consignor\":{\"cadd1\":\"Gayatri colony\",\"cadd2\":\"sddsf\",\"cadd3\":\"sdffffffsdf\",\"cadd4\":\"uouui\",\"cp0\":\"7\",\"cp1\":\"6\",\"cp2\":\"7\",\"cp3\":\"6\",\"cp4\":\"7\",\"cp5\":\"6\",\"cemail\":\"manoranjansngh77@gmail.com\",\"consignorNo\":\"777978\"},\"consignee\":{\"cneadd1\":\"Gayatri colony\",\"cneadd2\":\"hgjhgu\",\"cneadd3\":\"jgjg\",\"cneadd4\":\"jghjg\",\"cnep0\":\"8\",\"cnep1\":\"8\",\"cnep2\":\"7\",\"cnep3\":\"8\",\"cnep4\":\"7\",\"cnep5\":\"8\",\"cneemail\":\"admin@gmail.co\",\"consigneeNo\":\"68686876\"},\"insured\":{\"pkg\":\"787\",\"particular\":\"979797\",\"floor\":\"2nd floor\",\"policyno\":\"87sdf7d\",\"invoice\":\"6006863101634799357\",\"date\":\"2021-10-23\",\"permitno\":\"JHKHI6867\",\"lorryno\":\"jdfljdlfdjlkfj\",\"driverno\":\"53454545\",\"ownerno\":\"345345435\",\"pc\":\"79797\",\"dp\":\"23434\",\"unpacking\":\"Yes\"},\"chargetbl\":{\"created_date\":\"2021-10-23\",\"dktCharge\":\"1000\",\"lorryCharge\":\"7987\",\"packingCharge\":\"9878\",\"unloadingCharge\":\"87\",\"loadingCharge\":\"878\",\"unpackingCharge\":\"8787\",\"freightCharge\":\"8\",\"escortingCharge\":\"87\",\"insCharge\":\"50\",\"otherCharge\":\"76766\",\"subTotal\":\"105528\",\"cgst\":\"2.50\",\"cgstvalue\":\"2110.56\",\"sgst\":\"18.50\",\"sgstvalue\":\"18.50\",\"entrytax\":\"2380\",\"grandtotal\":\"110036\",\"insp\":\"2.50\",\"insv\":\"2000\",\"amtinword\":\"sdfjlsdfjldsl\"},\"sign\":{\"csign\":\"10222021072526_thumbnail.png\",\"cnesign\":\"10222021072530_thumbnail.png\",\"snfsign\":\"10222021072534_thumbnail.png\"}}'),
(13, 'Select Address', 'sldfjoe', 'SNF-1634879686', 'Ajmer', 'Hyderabad', 'owner', '{\"consignor\":{\"cadd1\":\"Gayatri colony\",\"cadd2\":\"manoranja\",\"cadd3\":\"jhih\",\"cadd4\":\"hjhkhkh\",\"cp0\":\"7\",\"cp1\":\"8\",\"cp2\":\"9\",\"cp3\":\"8\",\"cp4\":\"7\",\"cp5\":\"8\",\"cemail\":\"manoranjansngh77@gmail.com\",\"consignorNo\":\"34535345\"},\"consignee\":{\"cneadd1\":\"Gayatri colony\",\"cneadd2\":\"\",\"cneadd3\":\"ljlj\",\"cneadd4\":\"ljljljlj\",\"cnep0\":\"7\",\"cnep1\":\"7\",\"cnep2\":\"8\",\"cnep3\":\"7\",\"cnep4\":\"8\",\"cnep5\":\"7\",\"cneemail\":\"admin@gmail.com\",\"consigneeNo\":\"8876786678\"},\"insured\":{\"pkg\":\"876\",\"particular\":\"jhjhi\",\"floor\":\"2nd floor\",\"policyno\":\"jhi\",\"invoice\":\"7500303661634879686\",\"date\":\"2021-10-21\",\"permitno\":\"JHKHI6867\",\"lorryno\":\"JKJH55656\",\"driverno\":\"42424242\",\"ownerno\":\"234234324\",\"pc\":\"79797\",\"dp\":\"23434\",\"unloading\":\"Yes\",\"unpacking\":\"No\",\"adjusting\":\"Yes\"},\"chargetbl\":{\"created_date\":\"2021-10-23\",\"dktCharge\":\"200\",\"lorryCharge\":\"876\",\"packingCharge\":\"76\",\"unloadingCharge\":\"0\",\"loadingCharge\":\"0\",\"unpackingCharge\":\"0\",\"freightCharge\":\"0\",\"escortingCharge\":\"0\",\"insCharge\":\"19.2\",\"otherCharge\":\"876\",\"subTotal\":\"2047.20\",\"cgst\":\"2.5\",\"cgstvalue\":\"51.18\",\"sgst\":\"18.50\",\"sgstvalue\":\"18.50\",\"entrytax\":\"8769\",\"grandtotal\":\"11246.11\",\"insp\":\"2.5\",\"insv\":\"768\",\"amtinword\":\"jiedsfefsdf\"},\"sign\":{\"csign\":\"10222021071601_thumbnail.png\",\"cnesign\":\"10222021071607_thumbnail.png\",\"snfsign\":\"10222021071716_thumbnail.png\"}}'),
(14, 'Select Address', 'Manoranjan Singh', 'SNF-1634880947', 'Aligarh', 'Aligarh', 'owner', '{\"consignor\":{\"cadd1\":\"Gayatri colony\",\"cadd2\":\"manoranjansngh77@gmail.com\",\"cadd3\":\"manoranjansngh77@gmail.com\",\"cadd4\":\"manoranjansngh77@gmail.com\",\"cp0\":\"1\",\"cp1\":\"4\",\"cp2\":\"5\",\"cp3\":\"6\",\"cp4\":\"7\",\"cp5\":\"6\",\"cemail\":\"manoranjansngh77@gmail.com\",\"consignorNo\":\"7979879\"},\"consignee\":{\"cneadd1\":\"Gayatri colony\",\"cneadd2\":\"manoranjansngh77@gmail.com\",\"cneadd3\":\"manoranjansngh77@gmail.com\",\"cneadd4\":\"manoranjansngh77@gmail.com\",\"cnep0\":\"5\",\"cnep1\":\"6\",\"cnep2\":\"7\",\"cnep3\":\"8\",\"cnep4\":\"6\",\"cnep5\":\"7\",\"cneemail\":\"manoranjansngh77@gmail.com\",\"consigneeNo\":\"34535345\"},\"insured\":{\"pkg\":\"3434\",\"particular\":\"Manorasdfsdf\",\"floor\":\"2nd floor\",\"policyno\":\"dfdsf\",\"invoice\":\"2335805201634880947\",\"unloading\":\"Yes\",\"unpacking\":\"No\",\"adjusting\":\"Yes\",\"date\":\"2021-10-21\",\"permitno\":\"JHKHI6867\",\"lorryno\":\"jdfljdlfdjlkfj\",\"driverno\":\"2344234\",\"ownerno\":\"2334324\",\"pc\":\"79797\",\"dp\":\"23434\"},\"chargetbl\":{\"created_date\":\"2021-10-20\",\"dktCharge\":\"2000\",\"lorryCharge\":\"0\",\"packingCharge\":\"9\",\"unloadingCharge\":\"7\",\"loadingCharge\":\"8\",\"unpackingCharge\":\"6\",\"freightCharge\":\"7\",\"escortingCharge\":\"67\",\"insCharge\":\"220.53\",\"otherCharge\":\"7676\",\"subTotal\":\"10000.53\",\"cgst\":\"2.8\",\"cgstvalue\":\"280.01\",\"sgst\":\"18.50\",\"sgstvalue\":\"18.50\",\"entrytax\":\"8776\",\"grandtotal\":\"20906.64\",\"insp\":\"2.8\",\"insv\":\"7876\",\"amtinword\":\"Nsjdbsjbejsn\"},\"sign\":{\"csign\":\"10222021073823_thumbnail.png\",\"cnesign\":\"10222021073828_thumbnail.png\",\"snfsign\":\"10222021073833_thumbnail.png\"}}');

-- --------------------------------------------------------

--
-- Table structure for table `carconditions`
--

CREATE TABLE `carconditions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fromadd` varchar(100) NOT NULL,
  `toadd` varchar(100) NOT NULL,
  `mob` int(20) NOT NULL,
  `ccrrjson` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ccrrjson`)),
  `ccrradios_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ccrradios_json`)),
  `ccrremarkjson` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ccrremarkjson`)),
  `m_no` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`m_no`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carconditions`
--

INSERT INTO `carconditions` (`id`, `name`, `fromadd`, `toadd`, `mob`, `ccrrjson`, `ccrradios_json`, `ccrremarkjson`, `m_no`) VALUES
(2, '', '', '', 0, '{\"name\":\"Manoranjan Singh\",\"add\":\"Gayatri colony\",\"add1\":\"\",\"mob\":\"08178001430\",\"fromadd\":\"Arrah\",\"toadd\":\"Arrah\",\"date\":\"2021-10-21\",\"crn\":\"\",\"mkn\":\"\",\"col\":\"\",\"ipno\":\"\",\"cn\":\"msdroid\",\"btno\":\"\",\"chnm\":\"\",\"eng_no\":\"\",\"fuel\":\"\",\"fl_t_no\":\"\",\"fr_t_no\":\"\",\"rl_t_no\":\"\",\"rr_t_no\":\"\"}', '{}', '{\"scr\":\"\",\"scr1\":\"asdsdsadasd\",\"dent\":\"\",\"dent1\":\"\",\"other\":\"\",\"other1\":\"\",\"clo_km\":\"\",\"clo_kmw\":\"\"}', '7800043571633329025'),
(3, 'Manoranjan Singh', 'Amritsar', 'Aurangabad', 2147483647, '{\"add\":\"Gayatri colony\",\"add1\":\"\",\"date\":\"2021-10-23\",\"crn\":\"\",\"mkn\":\"\",\"col\":\"\",\"ipno\":\"\",\"cn\":\"msdroid\",\"btno\":\"\",\"chnm\":\"\",\"eng_no\":\"\",\"fuel\":\"\",\"fl_t_no\":\"\",\"fr_t_no\":\"\",\"rl_t_no\":\"\",\"rr_t_no\":\"\"}', '{}', '{\"scr\":\"\",\"scr1\":\"\",\"dent\":\"\",\"dent1\":\"\",\"other\":\"\",\"other1\":\"\",\"clo_km\":\"\",\"clo_kmw\":\"\"}', '10435074041633331028');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state`) VALUES
(0, 'Ramgarh', '0'),
(1, 'Ranchi', '0'),
(2, 'Jamshedpur', '0'),
(3, 'Dhanbad', '0'),
(4, 'Bokaro', '0'),
(5, 'Hazaribagh', '0'),
(6, 'Patna', '0'),
(7, 'Gaya', '0'),
(8, 'Bhagalpur', '0'),
(9, 'Muzaffarpur', '0'),
(10, 'Darbhanga', '0'),
(11, 'Purnia', '0'),
(12, 'Kolkata', '0'),
(13, 'Howrah', '0'),
(14, 'Kharagpur', '0'),
(15, 'Durgapur', '0'),
(16, 'Asansol', '0'),
(17, 'Siliguri', '0'),
(18, 'Lucknow', '0'),
(19, 'Kanpur', '0'),
(20, 'Varanasi', '0'),
(21, 'Prayagraj (Allahabad)', '0'),
(22, 'Noida', '0'),
(23, 'Ghaziabad', '0'),
(24, 'Mumbai', '0'),
(25, 'Thane', '0'),
(26, 'Navi Mumbai', '0'),
(27, 'Pune', '0'),
(28, 'Nagpur', '0'),
(29, 'Delhi - All', '0'),
(30, 'Bhubaneswar', '0'),
(31, 'Cuttack', '0'),
(32, 'Sambalpur', '0'),
(33, 'Rourkela', '0'),
(34, 'Bhopal', '0'),
(35, 'Indore', '0'),
(36, 'Gwalior', '0'),
(37, 'Raipur', '0'),
(38, 'Ambikapur', '0'),
(39, 'Ahmedabad', '0'),
(40, 'Surat', '0'),
(41, 'Vadodara', '0'),
(42, 'Gurugram', '0'),
(43, 'Hyderabad', '0'),
(44, 'Vishakhapatnam', '0'),
(45, 'Vijayawada', '0'),
(46, 'Ludhiana', '0'),
(47, 'Amritsar', '0'),
(48, 'Chandigarh', '0'),
(49, 'Bengaluru', '0'),
(50, 'Mysuru', '0'),
(51, 'Chennai', '0'),
(52, 'Madurai', '0'),
(53, 'Thiruvananthapuram', '0'),
(54, 'Jammu', '0'),
(55, 'Srinagar', '0'),
(56, 'Leh', '0'),
(57, 'Guwahati', '0'),
(58, 'Jaipur', '0'),
(59, 'Jaisalmer', '0'),
(60, 'Kota', '0'),
(61, 'Dehradun', '0'),
(62, 'Haridwar', '0'),
(63, 'Shimla', '0'),
(86, 'Panaji (Goa)', '0'),
(87, 'Puducherry', '0'),
(88, 'Gangtok (Sikkim)', '0'),
(90, 'Giridih', '0'),
(91, 'Saharanpur', '0'),
(92, 'Meerut', '0'),
(93, 'Mathura', '0'),
(94, 'Greater Noida', '0'),
(95, 'Moradabad', '0'),
(96, 'Bareilly', '0'),
(97, 'Aligarh', '0'),
(98, 'Agra', '0'),
(99, 'Jhansi', '0'),
(100, 'Ayodhya', '0'),
(101, 'Gorakhpur', '0'),
(102, 'Bardhaman', '0'),
(103, 'Malda', '0'),
(104, 'Haldia', '0'),
(105, 'Baharampur', '0'),
(106, 'Krishnanagar', '0'),
(107, 'Purulia', '0'),
(108, 'Nashik', '0'),
(109, 'Aurangabad', '0'),
(110, 'Solapur', '0'),
(111, 'Kolhapur', '0'),
(112, 'Pimpri-Chinchwad', '0'),
(113, 'Panvel', '0'),
(114, 'Jalgaon', '0'),
(115, 'Nanded', '0'),
(116, 'Amravati', '0'),
(117, 'Akola', '0'),
(118, 'Chandrapur', '0'),
(119, 'Satara', '0'),
(120, 'Sangli', '0'),
(121, 'Palghar', '0'),
(122, 'Jodhpur', '0'),
(123, 'Bhiwadi', '0'),
(124, 'Bikaner', '0'),
(125, 'Udaipur', '0'),
(126, 'Ajmer', '0'),
(127, 'Alwar', '0'),
(128, 'Bhilwara', '0'),
(129, 'Sikar', '0'),
(130, 'Bharatpur', '0'),
(131, 'Chittorgarh', '0'),
(132, 'Sawai Madhopur', '0'),
(133, 'Jabalpur', '0'),
(134, 'Ujjain', '0'),
(135, 'Sagar', '0'),
(136, 'Dewas', '0'),
(137, 'Satna', '0'),
(138, 'Ratlam', '0'),
(139, 'Rewa', '0'),
(140, 'Katni', '0'),
(141, 'Singrauli', '0'),
(142, 'Burhanpur', '0'),
(143, 'Atal Nagar', '0'),
(144, 'Bhilai-Durg', '0'),
(145, 'Korba', '0'),
(146, 'Bilaspur', '0'),
(147, 'Raigarh', '0'),
(148, 'Jagdalpur', '0'),
(149, 'Rajnandgaon', '0'),
(150, 'Puri', '0'),
(151, 'Brahmapur', '0'),
(152, 'Baripada', '0'),
(153, 'Balasore', '0'),
(154, 'Bhadrak', '0'),
(155, 'Jharsuguda', '0'),
(156, 'Gandhinagar', '0'),
(157, 'Rajkot', '0'),
(158, 'Bhavnagar', '0'),
(159, 'Jamnagar', '0'),
(160, 'Gandhidham', '0'),
(161, 'Junagadh', '0'),
(162, 'Anand', '0'),
(163, 'Bhuj', '0'),
(164, 'Porbandar', '0'),
(165, 'Valsad', '0'),
(166, 'Deoghar', '0'),
(167, 'Dumka', '0'),
(168, 'Chaibasa', '0'),
(169, 'Chakradharpur', '0'),
(170, 'Palamu', '0'),
(171, 'Jhumri Tilaiya (Koderma)', '0'),
(172, 'Arrah', '0'),
(173, 'Sasaram', '0'),
(174, 'Munger', '0'),
(175, 'Begusarai', '0'),
(176, 'Saran', '0'),
(177, 'Madhubani', '0'),
(178, 'Saharsa', '0'),
(179, 'Aurangabad', '0'),
(180, 'Faridabad', '0'),
(181, 'Rohtak', '0'),
(182, 'Sonipat', '0'),
(183, 'Panipat', '0'),
(184, 'Hisar', '0'),
(185, 'Karnal', '0'),
(186, 'Yamunanagar', '0'),
(187, 'Ambala', '0'),
(188, 'Panchkula', '0'),
(189, 'Warangal', '0'),
(190, 'Nizamabad', '0'),
(191, 'Khammam', '0'),
(192, 'Karimnagar', '0'),
(193, 'Ramagundam', '0'),
(194, 'Mahbubnagar', '0'),
(195, 'Adilabad', '0'),
(196, 'Nalgonda', '0'),
(197, 'Nalanda (Bihar Sharif)', '0'),
(198, 'Guntur', '0'),
(199, 'Nellore', '0'),
(200, 'Kurnool', '0'),
(201, 'Kakinada', '0'),
(202, 'Tirupati', '0'),
(203, 'Rajamahendravaram', '0'),
(204, 'Kadapa', '0'),
(205, 'Jalandhar', '0'),
(206, 'Patiala', '0'),
(207, 'Bathinda', '0'),
(208, 'Hoshiarpur', '0'),
(209, 'Mohali', '0'),
(210, 'Batala', '0'),
(211, 'Pathankot', '0'),
(212, 'Hubli-Dharwad', '0'),
(213, 'Gulbarga', '0'),
(214, 'Mangalore', '0'),
(215, 'Belgaum', '0'),
(216, 'Davangere', '0'),
(217, 'Bellary', '0'),
(218, 'Bijapur', '0'),
(219, 'Shimoga', '0'),
(220, 'Tumkur', '0'),
(221, 'Coimbatore', '0'),
(222, 'Tiruchirapalli', '0'),
(223, 'Tiruppur', '0'),
(224, 'Salem', '0'),
(225, 'Erode', '0'),
(226, 'Tirunelveli', '0'),
(227, 'Vellore', '0'),
(228, 'Thanjavur', '0'),
(229, 'Thoothukkudi', '0'),
(230, 'Dindigul', '0'),
(231, 'Udhagamandalam', '0'),
(232, 'Hosur', '0'),
(233, 'Kozhikode', '0'),
(234, 'Kochi', '0'),
(235, 'Kollam', '0'),
(236, 'Thrissur', '0'),
(237, 'Kannur', '0'),
(238, 'Silchar', '0'),
(239, 'Dibrugarh', '0'),
(240, 'Tezpur', '0'),
(241, 'Roorkee', '0'),
(242, 'Haldwani (Kathgodam)', '0'),
(243, 'Rudrapur', '0'),
(244, 'Kashipur', '0'),
(245, 'Rishikesh', '0'),
(246, 'Panaji', '0'),
(248, 'Gangtok', '0'),
(250, 'Puducherry-all', '0'),
(251, 'Shillong', '0'),
(253, 'Agartala', '0'),
(255, 'Itanagar', '0'),
(259, 'Kohima', '0'),
(261, 'Imphal', '0'),
(263, 'Aizawl', '0'),
(0, 'ranchi (1)', 'jharkhand');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `slno` varchar(20) NOT NULL,
  `cdate` date NOT NULL,
  `messrs` varchar(50) NOT NULL,
  `messrs1` varchar(50) DEFAULT NULL,
  `myjsondata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`myjsondata`)),
  `mjson` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mjson`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `slno`, `cdate`, `messrs`, `messrs1`, `myjsondata`, `mjson`) VALUES
(1, 'SN-1633934583', '2021-10-15', 'sdfsdfsdfdf', '', '[{\"d\":\"2021-10-30\",\"c\":\"dfsfdsfsd\",\"p\":\"jljsdflj\",\"w\":\"ljsdfoejl\",\"a\":\"ljsdfodjf\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"2021-10-29\",\"c\":\"dlfjoejdlfj\",\"p\":\"jdsofjelj\",\"w\":\"jdfjoej\",\"a\":\"sdjfdofjodif\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"\"}]', '{\"rc\":\"34344\",\"riw\":\"2342344\",\"riw1\":\"\",\"total\":\"0\",\"cgstp\":\"20\",\"cgstv\":\"20\",\"sgstp\":\"20\",\"sgstv\":\"20\",\"igstp\":\"2\",\"igstv\":\"20\",\"state\":\"23qweq\",\"stateCode\":\"weqwewqe\",\"grandTotal\":\"dfdsf\"}'),
(2, 'SN-1633939614', '2021-10-06', 'dfdfdsff', '', '[{\"d\":\"2021-10-15\",\"c\":\"sdfsdf\",\"p\":\"jljsdflj\",\"w\":\"ljsdfoejl\",\"a\":\"30000\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"2021-10-21\",\"c\":\"fsdfdfs\",\"p\":\"sdfsdfdsf\",\"w\":\"dfdsfdf\",\"a\":\"430\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"2021-10-09\",\"c\":\"sdfdsfdsf\",\"p\":\"sfsdfsdf\",\"w\":\"sdfsf\",\"a\":\"2340\"}]', '{\"rc\":\"240\",\"riw\":\"sdfdsfsdf\",\"riw1\":\"\",\"total\":\"33010\",\"cgstp\":\"2.50\",\"cgstv\":\"825.25\",\"sgstp\":\"2.90\",\"sgstv\":\"957.29\",\"igstp\":\"18.50\",\"igstv\":\"6106.85\",\"state\":\"Ranchi-1\",\"stateCode\":\"weqwewqe\",\"grandTotal\":\"40899\"}'),
(3, 'SN-1634041835', '2021-10-14', 'sdfsdfsdfdf', '', '[{\"d\":\"2021-10-16\",\"c\":\"dfgfg\",\"p\":\"jljsdflj\",\"w\":\"sdfsfsf\",\"a\":\"324320\"},{\"d\":\"2021-10-09\",\"c\":\"dffsdf\",\"p\":\"fsdfs\",\"w\":\"sfsdfsf\",\"a\":\"340\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"2021-10-02\",\"c\":\"sdfsdff\",\"p\":\"sdfdf\",\"w\":\"sdfsdf\",\"a\":\"5460\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"},{\"d\":\"\",\"c\":\"\",\"p\":\"\",\"w\":\"\",\"a\":\"0\"}]', '{\"rc\":\"2450\",\"riw\":\"sdfdsffdfdsdff\",\"riw1\":\"sdfsdffsd\",\"total\":\"332570\",\"cgstp\":\"2.50\",\"cgstv\":\"8314.25\",\"sgstp\":\"3.70\",\"sgstv\":\"12305.09\",\"igstp\":\"4.9\",\"igstv\":\"16295.930000000002\",\"state\":\"Jharkhand\",\"stateCode\":\"weqwewqe\",\"grandTotal\":\"369485.27\"}');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL,
  `oaddress` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `fromadd` varchar(100) NOT NULL,
  `toadd` varchar(100) NOT NULL,
  `no` varchar(50) NOT NULL,
  `cdate` date NOT NULL,
  `tbldata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tbldata`)),
  `qjson` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`qjson`)),
  `qcjson` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`qcjson`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `oaddress`, `email`, `contact`, `name`, `add1`, `add2`, `fromadd`, `toadd`, `no`, `cdate`, `tbldata`, `qjson`, `qcjson`) VALUES
(1, '', '', 0, 'Ankur kumar', 'Dellhi', 'Old delhi', 'Greater', 'Khammam', '24242', '2021-10-13', '[{\"name\":\"Dfjdsfoe\",\"quantity\":\"7\"},{\"name\":\"fjldfjldjf\",\"quantity\":\"7\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"tuytgdjfhjsdhj\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"hjhjhjhj\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"jhjhjhhh\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"}]', '{\"ff\":\"2nd\",\"tf\":\"4th\",\"pkno\":\"6\",\"pkdt\":\"2021-10-23\",\"ldt\":\"2021-10-31\",\"lt\":\"Van\",\"neck\":\"Yes\",\"ld\":\"86767\",\"ud\":\"7676\",\"pr\":\"45\",\"lr\":\"5\",\"at\":\"45353\",\"ad\":\"3455\",\"psign\":\"10202021070448_thumbnail.png\",\"osign\":\"10202021070621_thumbnail.png\",\"pm\":\"\"}', '{\"cpn\":\"10000\",\"ct\":\"0\",\"cl\":\"0\",\"cupl\":\"788\",\"cupk\":\"876\",\"ce\":\"766\",\"cs\":\"7\",\"cst\":\"12437\",\"cgstp\":\"2.5\",\"cgst\":\"310.93\",\"sgst\":\"2300.84\",\"sgstp\":\"18.50\",\"ins\":\"200\",\"gt\":\"15248.77\",\"rs\":\"Tenddfjoed djfoefj dfjeosh\"}'),
(2, '', '', 0, 'Manoranjan Singh', 'Gayatri colony', 'chota muri', 'Ambikapur', 'Delhi', '535333', '2021-10-23', '[{\"name\":\"Fan \",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"sdfdfdsf\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"sdfdf\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"}]', '{\"ff\":\"sdf\",\"tf\":\"hhjhjhjhj\",\"pkno\":\"sdfdsfsf\",\"pkdt\":\"2021-10-29\",\"ldt\":\"2021-10-22\",\"lt\":\"sdfdsf\",\"neck\":\"Yes\",\"ld\":\"34\",\"ud\":\"32422\",\"pr\":\"jhjhjhj\",\"lr\":\"jhhhj\",\"at\":\"hjhhhh\",\"ad\":\"hjjj\",\"psign\":\"10202021070810_thumbnail.png\",\"osign\":\"10202021070819_thumbnail.png\",\"pm\":\"\"}', '{\"cpn\":\"343240\",\"ct\":\"0\",\"cl\":\"0\",\"cupl\":\"0\",\"cupk\":\"0\",\"ce\":\"0\",\"cs\":\"0\",\"cst\":\"343240\",\"cgstp\":\"\",\"cgst\":\"68648.00\",\"sgst\":\"13729.60\",\"sgstp\":\"\",\"ins\":\"342\",\"gt\":\"425959.60\",\"rs\":\"jsdjldjfl\"}'),
(3, '', '', 0, 'Manoranjan Singh', 'Gayatri colony', 'chota muri', 'Agra', 'Aizawl', 'SNF-1633777088', '2021-10-30', '[{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"sdfsf\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"sdfdfdsfdf\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"sdffdfsfsd\",\"quantity\":\"24\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"}]', '{\"ff\":\"2nd\",\"tf\":\"4th\",\"pkno\":\"6\",\"pkdt\":\"2021-10-17\",\"ldt\":\"2021-10-22\",\"lt\":\"Van\",\"neck\":\"No\",\"ld\":\"23\",\"ud\":\"21\",\"pr\":\"45\",\"lr\":\"5\",\"at\":\"45353\",\"ad\":\"3455\",\"psign\":\"\",\"osign\":\"\",\"pm\":\"\"}', '{\"cpn\":\"1000\",\"ct\":\"987\",\"cl\":\"76876\",\"cupl\":\"8767\",\"cupk\":\"87\",\"ce\":\"877\",\"cs\":\"867\",\"cst\":\"89461\",\"cgstp\":\"2.5\",\"cgst\":\"2236.53\",\"sgst\":\"16550.28\",\"sgstp\":\"18.50\",\"ins\":\"2000\",\"gt\":\"110247.81\",\"rs\":\"jldfjldjfldjfoiejfdf\"}'),
(4, '', '', 0, 'Manoranjan Singh', 'Gayatri colony', 'chota muri', 'Rourkela', 'Ajmer', 'SNF-1634639993', '2021-10-23', '[{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"}]', '{\"ff\":\"\",\"tf\":\"\",\"pkno\":\"\",\"pkdt\":\"\",\"ldt\":\"\",\"lt\":\"\",\"ld\":\"\",\"ud\":\"\",\"pr\":\"\",\"lr\":\"\",\"at\":\"\",\"ad\":\"\",\"psign\":\"10202021071345_thumbnail.png\",\"osign\":\"10202021071354_thumbnail.png\",\"pm\":\"Cash on Delivery\"}', '{\"cpn\":\"0\",\"ct\":\"0\",\"cl\":\"0\",\"cupl\":\"0\",\"cupk\":\"0\",\"ce\":\"0\",\"cs\":\"0\",\"cst\":\"0\",\"cgstp\":\"0\",\"cgst\":\"0\",\"sgst\":\"0\",\"sgstp\":\"0\",\"ins\":\"0\",\"gt\":\"0\",\"rs\":\"\"}'),
(5, 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA', 'manoranjansngh77@gmail.com', 2147483647, 'Manoranjan Singh', 'Gayatri colony', 'chota muri', 'Alwar', 'Alwar', 'SNF-1634640275', '2021-10-15', '[{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"},{\"name\":\"\",\"quantity\":\"\"}]', '{\"ff\":\"\",\"tf\":\"\",\"pkno\":\"\",\"pkdt\":\"2021-10-05\",\"ldt\":\"2021-10-13\",\"lt\":\"\",\"ld\":\"\",\"ud\":\"\",\"pr\":\"\",\"lr\":\"\",\"at\":\"\",\"ad\":\"\",\"psign\":\"10192021141352_thumbnail.png\",\"osign\":\"10192021141400_thumbnail.png\",\"pm\":\"Cash on Delivery\"}', '{\"cpn\":\"0\",\"ct\":\"0\",\"cl\":\"0\",\"cupl\":\"0\",\"cupk\":\"0\",\"ce\":\"0\",\"cs\":\"0\",\"cst\":\"0\",\"cgstp\":\"0\",\"cgst\":\"0\",\"sgst\":\"0\",\"sgstp\":\"0\",\"ins\":\"0\",\"gt\":\"0\",\"rs\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `slno` varchar(50) NOT NULL,
  `mrdate` date NOT NULL,
  `rf` varchar(30) NOT NULL,
  `sor` varchar(30) NOT NULL,
  `bc` varchar(30) NOT NULL,
  `rdate` date NOT NULL,
  `ob` varchar(30) NOT NULL,
  `ao` varchar(30) NOT NULL,
  `amt` int(20) NOT NULL,
  `mobile no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `slno`, `mrdate`, `rf`, `sor`, `bc`, `rdate`, `ob`, `ao`, `amt`, `mobile no`) VALUES
(1, 'SN-1633870223', '2021-10-23', 'dfdlfj', 'dfdlfjo', '3', '2021-10-28', 'Bank of India', '9798798798798', 7, 0),
(2, 'SN-1633870223', '2021-10-23', 'dfdlfj', 'dfdlfjo', '3', '2021-10-28', 'SBI', '9473974938', 7, 0),
(3, 'SN-1633870307', '2021-10-13', 'Amol', '6000', 'jslfjlsdjf', '2021-10-23', 'Axis Bank', '987979878342', 344543534, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE `signature` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signature`
--

INSERT INTO `signature` (`id`, `invoice_no`, `file_name`) VALUES
(4, '14845551781633599246', '615ec0b9a4501.png'),
(5, '18492920961633601860', '615ec9a58321d.png'),
(6, '349888831633603851', '615ed1e7866c8.png'),
(7, '3322397571633680154', '615ffbae3579c.png'),
(8, '18606838431633681154', '615fffb81590b.png'),
(9, '17917800101633698660', '61604475d530c.png'),
(10, 'SNF-1633777088', '616175e1824af.png');

-- --------------------------------------------------------

--
-- Table structure for table `towhom`
--

CREATE TABLE `towhom` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fromaddress` varchar(255) NOT NULL,
  `toaddress` varchar(255) NOT NULL,
  `cnoteno` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `email` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `oaddress` varchar(255) NOT NULL,
  `faddress` varchar(255) NOT NULL,
  `psign` varchar(100) NOT NULL,
  `osign` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `towhom`
--

INSERT INTO `towhom` (`id`, `name`, `fromaddress`, `toaddress`, `cnoteno`, `date`, `data`, `email`, `contact`, `oaddress`, `faddress`, `psign`, `osign`) VALUES
(10, 'Manoranjan Singh', 'Amravati', 'Alwar', 'SNF-1634885572', '2021-10-16', '[{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"}]', 'manoranjansngh77@gma', 2147483647, 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA', 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA', '10222021085308_thumbnail.png', '10222021085314_thumbnail.png'),
(11, 'Manoranjan Singh', 'Akola', 'Dumka', 'SNF-1634887517', '2021-10-30', '[{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"TV\",\"quantity\":\"234\",\"value\":\"78\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"erwerwe\",\"quantity\":\"23424\",\"value\":\"2332\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"},{\"name\":\"\",\"quantity\":\"\",\"value\":\"\"}]', 'manoranjansngh77@gmail.com', 2147483647, 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA', 'SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA', '10222021103700_thumbnail.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'Manoranjan Singh', 'manoranjansngh77@gmail.com', '96e79218965eb72c92a549dd5a330112'),
(7, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carconditions`
--
ALTER TABLE `carconditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signature`
--
ALTER TABLE `signature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `towhom`
--
ALTER TABLE `towhom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `carconditions`
--
ALTER TABLE `carconditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signature`
--
ALTER TABLE `signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `towhom`
--
ALTER TABLE `towhom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
