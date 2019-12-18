-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2019 at 04:00 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_group`
--

DROP TABLE IF EXISTS `access_group`;
CREATE TABLE IF NOT EXISTS `access_group` (
  `access_group_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`access_group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_group`
--

INSERT INTO `access_group` (`access_group_id`, `name`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Pharmacist'),
(4, 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `access_rights`
--

DROP TABLE IF EXISTS `access_rights`;
CREATE TABLE IF NOT EXISTS `access_rights` (
  `access_right_id` int(10) NOT NULL AUTO_INCREMENT,
  `screen_id` int(10) NOT NULL,
  `access_group_id` int(10) NOT NULL,
  PRIMARY KEY (`access_right_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_rights`
--

INSERT INTO `access_rights` (`access_right_id`, `screen_id`, `access_group_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 2, 2),
(6, 2, 1),
(7, 3, 1),
(8, 4, 1),
(9, 5, 1),
(10, 6, 1),
(11, 7, 1),
(12, 8, 1),
(13, 9, 1),
(14, 10, 1),
(15, 11, 1),
(16, 12, 1),
(17, 13, 1),
(18, 14, 1),
(19, 15, 1),
(20, 16, 1),
(21, 17, 1),
(22, 18, 1),
(23, 19, 1),
(24, 20, 1),
(25, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `compony`
--

DROP TABLE IF EXISTS `compony`;
CREATE TABLE IF NOT EXISTS `compony` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com-code` varchar(10) NOT NULL,
  `com_name` varchar(250) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compony`
--

INSERT INTO `compony` (`com_id`, `com-code`, `com_name`) VALUES
(1, 'C1', 'Walter'),
(2, 'C2', 'Jenites');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_code` varchar(10) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_code`, `first_name`, `Last_name`, `gender`, `dob`, `nic`, `address`, `contact_no`, `email`) VALUES
(1, 'Cu 1', 'Bruce', 'Wayne', 1, '2019-10-01', '1234567895', 'adadasd444', '1112223333', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grn`
--

DROP TABLE IF EXISTS `grn`;
CREATE TABLE IF NOT EXISTS `grn` (
  `grn_no` int(11) NOT NULL AUTO_INCREMENT,
  `grn_tot` double(10,2) NOT NULL,
  `grn_dnt` datetime NOT NULL,
  PRIMARY KEY (`grn_no`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grn`
--

INSERT INTO `grn` (`grn_no`, `grn_tot`, `grn_dnt`) VALUES
(1, 500.00, '2019-10-19 00:00:00'),
(2, 1000.00, '2019-10-16 00:00:00'),
(3, 7500.00, '2019-05-06 00:00:00'),
(4, 5456.00, '2019-10-16 00:00:00'),
(5, 565.00, '2019-10-04 00:00:00'),
(6, 4564.00, '2019-10-25 00:00:00'),
(7, 444554.00, '2019-07-09 00:00:00'),
(8, 44445.00, '2019-10-11 00:00:00'),
(9, 55656.00, '2019-10-25 00:00:00'),
(10, 454.00, '2019-10-03 00:00:00'),
(11, 966.00, '2019-10-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_no` int(11) NOT NULL AUTO_INCREMENT,
  `total` varchar(255) NOT NULL,
  `dnt` datetime NOT NULL,
  PRIMARY KEY (`invoice_no`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `total`, `dnt`) VALUES
(1, '250', '2019-11-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `pre_no` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(255) NOT NULL,
  `DnT` datetime NOT NULL,
  PRIMARY KEY (`pre_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pre_no`, `customer`, `DnT`) VALUES
(1, 'John', '2019-11-07 00:00:00'),
(2, 'Mary', '2019-11-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
CREATE TABLE IF NOT EXISTS `privileges` (
  `screen_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `sequence` int(11) NOT NULL,
  PRIMARY KEY (`screen_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`screen_id`, `name`, `url`, `parent_id`, `sequence`) VALUES
(2, 'Staff', '', 0, 1),
(6, 'Supplier', '', 0, 2),
(3, 'View Members', 'staff.php', 2, 12),
(4, 'Add Member', 'add_member.php', 2, 13),
(10, 'Customer', '', 0, 3),
(1, 'Dashboard', 'dashboard.php', 0, 0),
(5, 'Manage Member', 'manage_staff.php', 2, 14),
(7, 'View Suppliers', 'supplier.php', 6, 15),
(8, 'Add Supplier', 'add_supplier.php', 6, 16),
(9, 'Manage Supplier', 'manage_supplier.php', 6, 17),
(12, 'Add Customer', 'add_customer.php', 10, 19),
(13, 'Manage Customer', 'manage_customer.php', 10, 20),
(11, 'View Customers', 'customer.php', 10, 18),
(14, 'Company', '', 0, 4),
(15, 'Product', '', 0, 5),
(16, 'Stock', '', 0, 6),
(17, 'Purchase', '', 0, 7),
(18, 'Sales', '', 0, 8),
(19, 'Prescription', '', 0, 9),
(20, 'Expense', '', 0, 10),
(21, 'Reports', '', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_invoice`
--

DROP TABLE IF EXISTS `purchase_invoice`;
CREATE TABLE IF NOT EXISTS `purchase_invoice` (
  `p_invoice_no` int(11) NOT NULL AUTO_INCREMENT,
  `p_invoice_tot` double(10,2) NOT NULL,
  `p_invoice_dnt` datetime NOT NULL,
  PRIMARY KEY (`p_invoice_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_invoice`
--

INSERT INTO `purchase_invoice` (`p_invoice_no`, `p_invoice_tot`, `p_invoice_dnt`) VALUES
(1, 2500.00, '2019-06-05 00:00:00'),
(2, 5000.00, '2019-10-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_code` varchar(10) NOT NULL DEFAULT 'Mem_',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `role` varchar(25) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `emergency_no` varchar(10) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `qualifications` text NOT NULL,
  `joined_date` date NOT NULL,
  `basic_salary` double(10,2) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `user_lock` tinyint(1) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_code`, `first_name`, `last_name`, `role`, `gender`, `dob`, `nic_no`, `address`, `contact_no`, `emergency_no`, `email`, `qualifications`, `joined_date`, `basic_salary`, `user_name`, `password`, `Image`, `user_lock`) VALUES
(1, 'Mem_1', 'Peter', 'Pan', 'Admin', 1, '2000-08-08', '123456789V', '20/5, Weliwita, Kaduwela.', '0712569698', '0712365589', NULL, 'Succefully qulified.', '2019-04-08', 20000.00, 'abc', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '../resources/assets/ProfilePics/User/1.jpg', 0),
(2, 'Mem_2', 'Mathew', 'Fox', 'Manager', 1, '2019-09-12', '225468752145', '2A, Ramahera Road,', '125498752', '1225445665', 'jghjjh@yahoo.com', 'gdgdgdg ghjghgjh fggggggggggg jgjjhghhhhhhhh', '2019-09-02', 150000.00, 'xyz', '456789', '../resources/assets/ProfilePics/User', 0),
(10, 'Mem_', 'Ruvinda', 'Ranasinghe', 'Admin', 1, '1994-11-03', '943083606V', '54', '0756501626', 'sdsd', 'ad@123.com', 'dasdasd', '2018-01-20', 50000.00, 'SYSTEM', '09c78756f66334dcc2be3dddbd3125d80d16fd20aa14eaee5922d910eedc0d8d', NULL, 0),
(9, 'Mem_', 'estt', 'tess', 'Pharmacist', 1, '2000-08-08', '', 'add', '0', '0', '', '', '2000-08-08', 0.00, '', '', NULL, 0),
(8, 'Mem_', 'Michael', 'Scofield', 'Manager', 1, '2019-09-04', '123456789V', 'bnnnnnnnnnnnn', '1231231231', '1231231231', 'bmmmmmmmmm', 'mnbnbmkhkhkjh', '2019-09-04', 25000.00, 'def', '000000', NULL, 0),
(6, 'Mem_', 'John', 'Lock', 'Cashier', 1, '1999-09-12', '2222255456V', 'sggsgsgsg', '1254632541', '1254632222', 'adafsdfsdfsd', 'dsfdsfsf dgsg', '2019-09-01', 20000.00, 'qwerty', '11111', NULL, 0),
(7, 'Mem_', 'Sara ', 'O\'brian', 'Cashier', 0, '1982-09-11', '125555555V', 'kjljlkj', '1111111111', '1111111111', 'xvxvcvzc', '', '2019-09-02', 10000.00, 'stu', '99999', NULL, 0),
(11, 'Mem_', 'Scott', 'McColl', 'Cashier', 1, '1985-09-02', '1', '1', '2', '5', '5', '5', '2019-09-02', 21000.00, 'mmmmmmmm', 'bmhghjgj', NULL, 0),
(3, 'Mem_', 'Alison', 'Argent', 'Pharmacist', 0, '1985-10-08', '123456789V', 'wqwqweeeeee', '1231231231', '0712365589', 'eweqrrrrrrrrr', 'wqrwrer', '2019-10-09', 54654654.00, 'hkh', 'jjhjh', NULL, 0),
(12, 'Mem_10', 'Adele', 'Watson', 'Manger,Pharmacist', 0, '2000-08-08', '122541252V', '11/25, Horana.', '0112548652', '1255698563', 'adele@gmail.com', 'Success', '2019-10-14', 35000.00, 'Adele123', '!1Aaa', NULL, 0),
(13, 'Mem_20', 'Jerrard', 'Max', 'Manager', 1, '2019-09-04', '123456789V', '2B, Kegalla.', '', '1524569555', NULL, 'mn,mn,n,z ,znc,zmnc,', '2019-09-04', 25000.00, 'silver', '120c96de6d336b2a7931922b335045b5155c2e970a19851abfb56c2bb4481d44', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_code` varchar(5) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `Last_name` varchar(70) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(75) NOT NULL,
  `product` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_code`, `first_name`, `Last_name`, `contact_no`, `address`, `email`, `company`, `product`) VALUES
(1, 'S1', 'Orlando', 'Bloom', '1255698562', 'fhgfhfh', 'weqeqwwwe', 'weqew', ''),
(2, 'S2', 'Jason ', 'Maron', '1524569555', 'dddd', 'd', 'd', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

DROP TABLE IF EXISTS `user_access`;
CREATE TABLE IF NOT EXISTS `user_access` (
  `user_access_id` int(10) NOT NULL AUTO_INCREMENT,
  `staff_id` int(10) NOT NULL,
  `access_group_id` int(10) NOT NULL,
  PRIMARY KEY (`user_access_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`user_access_id`, `staff_id`, `access_group_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `login_string` varchar(18) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
