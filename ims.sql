-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2014 at 03:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE IF NOT EXISTS `adminreg` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `key2` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`a_id`, `username`, `password`, `key2`, `email`, `regdate`) VALUES
(9, 'shaktivan', '\0', 'dhruvika', 'shaktivanb@gmail.com', '2014-09-28'),
(10, 'shaktivan', 'shakti1', 'prathna', 'shaktivanb@gmail.com', '2014-09-28'),
(11, 'shaktivan', 'shaktivan', 'dhruvika', 'shaktivanb@gmail.com', '2014-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_name` varchar(20) DEFAULT NULL,
  `company_name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` bigint(12) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`d_id`, `dis_name`, `company_name`, `address`, `email`, `mobile`) VALUES
(4, 'laxmikant baraiya', 'lenevo', 'kolkata', 'solankinb@gmail.com', 9723608202),
(7, 'vivek', 'sundisk', 'surat', 'rahodvivek@gmail.com', 9824840240),
(9, 'kishan baraiya', 'easr', 'varodara', 'kishanb@gmail.com', 8905856677),
(10, 'nirmal baraiya', 'samsung', 'jamnagar', 'baraiya44@gmai.com', 9904677676),
(11, 'devang pandiya', 'lenevo', 'veraval', 'devangp@gmail.com', 9924677676),
(12, 'shaktivan', 'sony', 'diu', 'shaktivanb@gmail.com', 9898209725),
(13, 'laxmikant baraiya', 'lenevo', 'mumbai', 'solankinb@gmail.com', 9998884678),
(14, 'laxmikant baraiya', 'lenevo', 'mumbai', 'solankinb@gmail.com', 9875423654);

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE IF NOT EXISTS `distributor` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  `p_type` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `contect1` bigint(20) DEFAULT NULL,
  `contect2` bigint(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `website` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`m_id`, `c_name`, `p_type`, `address`, `contect1`, `contect2`, `email`, `website`) VALUES
(7, 'sony123', 'leptop', 'g', 9898787878, 2147483647, 'shaktivanbaraiya@yah', 'www.sony.com'),
(8, 'nokia', 'teblet', 'pune', 2147483647, 2147483647, 'rahodvivek@gmail.com', 'www.nokia.com'),
(9, 'apple', 'mobile', 'delli india', 2147483647, 2147483647, 'fofandihemat@gmail.c', 'www.apple.com'),
(10, 'sundisk', 'pendrive', 'daman india', 2147483647, 2147483647, 'palamehul@gmail.com', 'www.sundisk.com'),
(11, 'lenevo', 'leptop', 'pune', 2147483647, 2147483647, 'baraiya44@gmai.com', 'www.lenevo.com'),
(12, 'toshiba', 'leptop', 'mumbai', 2147483647, 2147483647, 'mr.akshay@gmail.com', 'www.toshiba.com'),
(15, 'hp', 'leptop', 'ahemdabad', 2147483647, 2147483647, 'solankinb@gmail.com', 'www.hp.com'),
(17, 'micromax', 'mobilef', 'veraval', 2147483647, 2147483647, 'hemant.fofandi@gmail', 'www.micromax.com'),
(25, 'lenevo', 'leptop', 'rajkot', 9723608208, 9723651478, 'dipika@gmial.com', 'www.lenevo.com'),
(28, 'dell', 'leptop', 'diu', 972360808, 985632145, 'shaktivanb@gmail.com', 'www.dell.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) DEFAULT NULL,
  `p_desc` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `manufeture` varchar(20) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `selsprice` bigint(100) DEFAULT NULL,
  `p_qty` varchar(10) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `p_name`, `p_desc`, `type`, `manufeture`, `price`, `selsprice`, `p_qty`, `p_date`, `image`) VALUES
(25, 'Inspiron 15 3542', 'screen Size : 15.6 Inches\r\nMemory (Ram) : 4 GB\r\nHa', 'leptop', 'sony123', 20000, 21000, '15', '2014-09-26', 'img/ims (4).jpg'),
(26, ' 17R 5737', 'RAM: 8GB DDR3\r\nProcessor Name: 1.86 GHz 4th Genera', 'leptop', 'sony123', 25000, 26000, '23', '2014-09-26', 'img/toshiba-satellite-notebook-125x125-imadu6twx5ewfhku.jpeg'),
(27, 'Vostro 3446', 'Processor Name : Core i3\r\nHard Disk Capacity : 500', 'leptop', 'sony123', 35000, 45870, '5', '2014-09-26', 'img/apple-macbook-air-notebook-125x125-imadwdzswggdyva6.jpeg'),
(28, 'Inspiron 15 3541', 'Processor : AMD APU E1\r\nHard Disk Capacity : 500 G', 'leptop', 'sony123', 50000, 70000, '6', '2014-09-26', 'img/Apple-MD761HN-B-MacBook-Air-SDL924131495-1-d66b1.jpg'),
(29, 'Inspiron 15 3542', ' Hard Disk Capacity : 1 TB\r\nMemory (Ram) : 4 GB\r\nO', 'leptop', 'sony123', 50000, 60000, '8', '2014-09-26', 'img/apple-macbook-air-notebook-125x125-imadwdzswggdyva6.jpeg'),
(30, '5S ', ' 3G\r\nDual LED\r\n16 GB Memory\r\nSUPC: SDL218153659 ', 'leptop', 'sony123', 50000, 70000, '5', '2014-09-26', 'img/Apple-iPhone-5S-16-GB-SDL218153659-1-d5617.jpg'),
(32, 'Cherry Blossom Pink ', 'jelly bean', 'leptop', 'sony123', 15000, 21000, '4', '2014-09-26', 'img/Callmate-360-Degree-Rotating-Case-SDL300394544-1-f3e44.jpg'),
(33, 'aio F15413 ', 'RAM: 2 GB DDR3\r\nHard Disk Capacity: 500 GB\r\nColo', 'leptop', 'sony123', 50000, 60000, '6', '2014-09-26', 'img/hp-notebook-15-r022tx-125x125-imadxsz9fgkskzma.jpeg'),
(34, 'Vaio F14212', ' Hard Disk Capacity: 500GB\r\nWeight: 2.2Kg\r\nScreen ', 'leptop', 'sony123', 70000, 75000, '4', '2014-09-26', 'img/FineArts-3-in-1-Laptop-SDL299657483-1-faa7e.jpg'),
(35, ' E14 Series', ' Hard Disk Capacity : 500 GB\r\nColour : Black\r\nMemo', 'leptop', 'sony123', 70000, 750000, '3', '2014-09-26', 'img/Apple-MGX72HN-A-MacBook-Pro-SDL528296958-1-96fdf.jpg'),
(36, ' F14216 ', ' Speakers: Big Box Speakers\r\nHard Disk Capacity: 5', 'leptop', 'sony123', 25000, 30000, '20', '2014-09-26', 'img/toshiba-satellite-notebook-125x125-imadu6twx5ewfhku.jpeg'),
(37, ' Vaio F14A15SN/B', 'Processor Name: Intel Core i5 3337U\r\nKeyboard: Bac', 'leptop', 'sony123', 70000, 85000, '9', '2014-09-26', 'img/sony-vaio-fit-15e-notebook-125x125-imadu5ugawm8uqfj.jpeg'),
(38, 'E14 Series', ' Colour: Black\r\nOperating System: Windows 8 Profes', 'leptop', 'sony123', 50000, 65000, '6', '2014-09-26', 'img/Apple-MGX72HN-A-MacBook-Pro-SDL528296958-1-96fdf.jpg'),
(39, '17R 5737', ' Processor Name: Intel Core i5 4200U\r\nHard Disk: 1', 'leptop', 'sony123', 25000, 30000, '7', '2014-09-26', 'img/Apple-MacBook-Pro-15-inch-1263380-1-9e428.jpg'),
(40, ' Z Series', 'Intel HD Graphics 4000\r\n8GB DDR3 SDRAM ', 'leptop', 'sony123', 25000, 30000, '6', '2014-09-26', 'img/Sony-VAIO-Fit-15E-Laptop-SDL434464791-1-38697.jpg'),
(41, ' P11252', ' Processor Name: Intel Core i5 4200U\r\nHard Disk: 1', 'leptop', 'sony123', 75555, 90000, '2', '2014-09-26', 'img/Sony-Vaio-F15213-3rd-Gen-SDL794022822-1-8140b.jpg'),
(42, '15E Laptop', ' Screen Size : 15.5 inches\r\nMemory (Ram) : 2 GB\r\nH', 'leptop', 'sony123', 70000, 75500, '1', '2014-09-26', 'img/asus-notebook-125x125-imadrhe4b6dd6va3.jpeg'),
(43, 'F14278', ' Speakers: Big Box Speakers\r\nHard Disk Capacity: 5', 'leptop', 'sony123', 70000, 78974, '2', '2014-09-26', 'img/dell-inspiron-notebook-125x125-imadhz455huhguxg.jpeg'),
(44, 'q1123', ' Screen Size: 14 Inch\r\nRAM: 2GB DDR3 SDRAM\r\nProces', 'leptop', 'sony123', 50000, 71000, '10', '2014-09-26', 'img/apple-macbook-air-notebook-125x125-imadwdzswggdyva6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(5) DEFAULT NULL,
  `c_id` int(5) DEFAULT NULL,
  `p_name` varchar(20) DEFAULT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `s_price` int(5) DEFAULT NULL,
  `s_qty` varchar(10) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`s_id`, `p_id`, `c_id`, `p_name`, `c_name`, `s_price`, `s_qty`, `s_date`) VALUES
(1, NULL, 10, 'Inspiron', 'laxmikant', 0, '1', '2014-10-01'),
(2, NULL, 10, 'Inspiron', 'nirmal', 25000, '1', '2014-10-01'),
(3, NULL, 10, 'Z', 'shaktivan', 25000, '1', '2014-10-01'),
(4, NULL, 10, 'Inspiron', 'laxmikant', 25000, '6', '2014-10-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
