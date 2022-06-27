-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2022 at 12:26 PM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_zoho_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(255) NOT NULL,
  `reg_no` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `sur_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `postcode` varchar(11) COLLATE utf8_unicode_520_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `email_address` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `loan_amount` double(10,2) NOT NULL,
  `repay` double(10,2) NOT NULL,
  `remarks` varchar(500) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `bank` varchar(300) COLLATE utf8_unicode_520_ci NOT NULL,
  `account_no` varchar(300) COLLATE utf8_unicode_520_ci NOT NULL,
  `bank_short_code` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `created_by` int(255) NOT NULL,
  `created_dt` datetime NOT NULL,
  `created_ip` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `updated_by` int(255) DEFAULT NULL,
  `updated_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_ip` varchar(20) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `reg_no`, `ref`, `first_name`, `sur_name`, `address1`, `address2`, `city`, `postcode`, `country`, `telephone`, `mobile`, `email_address`, `loan_amount`, `repay`, `remarks`, `account_name`, `bank`, `account_no`, `bank_short_code`, `created_by`, `created_dt`, `created_ip`, `updated_by`, `updated_dt`, `updated_ip`, `is_active`) VALUES
(2, 'B/08/21/1', 'Market Place', 'Bill', 'Samson', 'House # ABC, Road # 200', 'Free Street Avenue', 'Dhaka', '1234', 'UK', NULL, '123456', 'bill@borrowers.com', 0.00, 0.00, 'Positive', '', '', '', '', 3, '2021-08-16 16:34:13', '::1', NULL, '2021-08-16 16:52:53', NULL, 'yes'),
(3, 'B/10/21/3', 'LD001', 'Amin', 'A KHan', '27', NULL, 'Dhaka', '1217', 'Bangladesh', NULL, '01855519488', 'amin@bluepisolutions.com', 0.00, 0.00, NULL, '', '', '', '', 3, '2021-10-21 07:04:26', '172.70.142.32', NULL, '2021-10-21 07:04:26', NULL, 'yes'),
(4, 'B/12/21/4', '555446668', 'Jihad', 'IBN Emdad', 'test', NULL, 'Yorkshire', '556655', 'England', NULL, '+11255444555', 'test@tester.com', 10000.00, 2000.00, NULL, '', '', '', '', 3, '2021-12-15 05:55:31', '172.68.231.134', NULL, '2021-12-15 13:46:25', NULL, 'yes'),
(5, 'B/12/21/590', '232231', 'Jihad', 'Bluepi', 'test', NULL, 'Dhaka', '1236', 'Bangladesh', '01911957015', '01911957015', 'jihad@bluepisolutions.com', 10000.00, 0.00, NULL, '', '', '', '', 3, '2021-12-15 05:58:05', '172.68.231.132', NULL, '2021-12-15 13:34:21', NULL, 'yes'),
(6, 'B/12/21/6', '554455448', 'AB', 'CD', 'London', NULL, 'London', '55445', 'UK', '+445511225544', '+445511225544', 'abcd@email.com', 100000.00, 60000.00, 'Testing Remarks', '', '', '', '', 3, '2021-12-15 06:27:06', '172.68.231.134', NULL, '2021-12-15 16:39:29', NULL, 'yes'),
(10, 'B/12/21/10', 'INT5001', 'MN', 'OP', 'House # 43', 'Manchester l', 'Manchester City', 'LQ123', '', '+445511225544', '+11255444555', 'mnop@tester.com', 100000.00, 20000.00, '', 'MNOP', 'ABC', '122554455', 'ssmb', 3, '2021-12-21 05:14:23', '162.158.207.134', 3, '2021-12-21 05:32:02', '162.158.207.154', 'yes'),
(11, 'B/02/22/11', 'EC1001', 'Mohammad', 'Uddin', '342 HIGH STREET', 'Ponders End', 'Enfield', 'EN3 4DE', '', NULL, '07985278332', 'mmu8786@yahoo.co.uk', 10000.00, 2000.00, '', 'M M Uddin', 'Barclays', '10011001', '205706', 3, '2022-02-27 07:10:18', '141.101.99.241', NULL, '2022-02-27 07:10:18', NULL, 'yes'),
(12, 'B/02/22/12', 'ada', 'fvvsd', 'sdvs', 'sd3f2f2', 'afaf af', 'af af', 'asfa', '', '141', '1231231', 'mail@mail.com', 10000.00, 1000.00, '', 'A', '33fad', '1223123', '12414123', 3, '2022-02-27 07:11:19', '172.70.188.210', NULL, '2022-02-27 07:11:19', NULL, 'yes'),
(13, 'B/02/22/13', '2222', 'a2341', '1412', '233', '12312', '123123', '1231', '', NULL, '34123', 'g@email.com', 10000.00, 1000.00, '', '34214', '145', '5345', '34534', 3, '2022-02-27 07:12:56', '172.70.142.92', NULL, '2022-02-27 07:12:56', NULL, 'yes'),
(14, 'B/02/22/14', 'EC1002', 'Mujakkir', 'Ahmed', '54 Hughes Mansions', 'Vallance Road', 'LONDON', 'E1 5BJ', '', NULL, '07554 618018', 'muj@tameergroup.co.uk', 1000.00, 5000.00, '', '0', '0', '0', '0', 3, '2022-02-27 07:15:08', '141.101.99.23', NULL, '2022-02-27 07:15:08', NULL, 'yes'),
(15, 'B/03/22/15', '190092022', 'Atiqe', 'Chowdhury', 'Manchester', NULL, 'Manchester City', 'LQ123', '', NULL, '+11255444555', 'atiqe@email.com', 50000.00, 1000.00, '', 'MNOP', 'ABC', '122554455', 'ssmb', 3, '2022-03-19 07:20:26', '162.158.207.150', NULL, '2022-03-19 07:20:26', NULL, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers_communication`
--

CREATE TABLE `borrowers_communication` (
  `id` int(255) NOT NULL,
  `borrowers_id` int(255) NOT NULL,
  `cdate` date DEFAULT NULL,
  `staff` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `method` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `attachement` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `created_by` int(255) NOT NULL,
  `created_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `borrowers_communication`
--

INSERT INTO `borrowers_communication` (`id`, `borrowers_id`, `cdate`, `staff`, `method`, `details`, `attachement`, `created_by`, `created_dt`) VALUES
(1, 2, '2021-08-15', 'S # 100', 'Call', 'NA', 'b_1629131654.jpg', 3, '2021-08-16 16:34:14'),
(2, 2, '2021-08-14', 'SS # 1001', 'Email', 'via Personal EMAIL', NULL, 3, '2021-08-16 16:34:14'),
(3, 4, '2021-12-13', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 05:55:31'),
(4, 6, '2021-12-13', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 06:27:06'),
(5, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:32:24'),
(6, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:32:47'),
(7, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:32:47'),
(8, 4, '1970-01-01', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 13:34:54'),
(9, 4, '1970-01-01', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 13:36:36'),
(10, 4, '1970-01-01', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 13:36:36'),
(11, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:41:41'),
(12, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:41:41'),
(13, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:41:41'),
(14, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 13:41:41'),
(15, 4, '1970-01-01', 'ABCDef', 'Call', 'Lorep ipsumeee', NULL, 3, '2021-12-15 13:46:25'),
(16, 4, '1970-01-01', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 13:46:25'),
(17, 4, '1970-01-01', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 13:46:25'),
(18, 4, '1970-01-01', 'ABCD', 'Call', 'Lorep ipsum', NULL, 3, '2021-12-15 13:46:25'),
(19, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(20, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(21, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(22, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(23, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(24, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(25, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(26, 6, '1970-01-01', 'XYZ', 'Call', 'Testing', NULL, 3, '2021-12-15 16:39:29'),
(27, 10, '2021-12-20', 'ABCD', 'Email', '', NULL, 3, '2021-12-21 05:14:23'),
(28, 10, '1970-01-01', 'ABCD', 'Email', '', NULL, 3, '2021-12-21 05:32:02'),
(29, 15, '2022-03-21', 'ABCD', 'Call', '', 'b_1647674426.jpg', 3, '2022-03-19 07:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers_invoice`
--

CREATE TABLE `borrowers_invoice` (
  `id` int(255) NOT NULL,
  `borrower_id` int(255) NOT NULL,
  `invoice_no` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `payment_dt` date NOT NULL,
  `payment_mode` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_520_ci,
  `attachment` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `is_receive` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `is_draft` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `is_mail` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'yes',
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `borrower__` longtext COLLATE utf8_unicode_520_ci NOT NULL,
  `created_dt` datetime NOT NULL,
  `created_by` int(255) NOT NULL,
  `updated_dt` datetime DEFAULT NULL,
  `updated_by` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `borrowers_invoice`
--

INSERT INTO `borrowers_invoice` (`id`, `borrower_id`, `invoice_no`, `amount`, `payment_dt`, `payment_mode`, `subject`, `note`, `attachment`, `is_receive`, `is_draft`, `is_mail`, `is_active`, `borrower__`, `created_dt`, `created_by`, `updated_dt`, `updated_by`) VALUES
(4, 2, 'LI/240821/1', 100.50, '2021-08-25', 'Cash', 'Test !!!', 'Test !!!', 'bi_1629829257.jpg', 'yes', 'no', 'yes', 'yes', '{\"id\":2,\"reg_no\":\"B\\/08\\/21\\/1\",\"ref\":\"Market Place\",\"first_name\":\"Bill\",\"sur_name\":\"Samson\",\"address1\":\"House # ABC, Road # 200\",\"address2\":\"Free Street Avenue\",\"city\":\"Dhaka\",\"postcode\":\"1234\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"123456\",\"email_address\":\"bill@borrowers.com\",\"remarks\":\"Positive\",\"created_by\":3,\"created_dt\":\"2021-08-16 16:34:13\",\"created_ip\":\"::1\",\"updated_by\":null,\"updated_dt\":\"2021-08-16 22:52:53\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-08-24 18:20:57', 3, NULL, NULL),
(5, 2, 'LI/240821/5', 1000.00, '2021-08-24', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":2,\"reg_no\":\"B\\/08\\/21\\/1\",\"ref\":\"Market Place\",\"first_name\":\"Bill\",\"sur_name\":\"Samson\",\"address1\":\"House # ABC, Road # 200\",\"address2\":\"Free Street Avenue\",\"city\":\"Dhaka\",\"postcode\":\"1234\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"123456\",\"email_address\":\"bill@borrowers.com\",\"remarks\":\"Positive\",\"created_by\":3,\"created_dt\":\"2021-08-16 16:34:13\",\"created_ip\":\"::1\",\"updated_by\":null,\"updated_dt\":\"2021-08-16 22:52:53\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-08-24 18:31:19', 3, NULL, NULL),
(6, 2, 'LI/240821/6', 570.00, '2021-08-26', 'Credit Card', NULL, NULL, NULL, 'no', 'no', 'yes', 'yes', '{\"id\":2,\"reg_no\":\"B\\/08\\/21\\/1\",\"ref\":\"Market Place\",\"first_name\":\"Bill\",\"sur_name\":\"Samson\",\"address1\":\"House # ABC, Road # 200\",\"address2\":\"Free Street Avenue\",\"city\":\"Dhaka\",\"postcode\":\"1234\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"123456\",\"email_address\":\"bill@borrowers.com\",\"remarks\":\"Positive\",\"created_by\":3,\"created_dt\":\"2021-08-16 16:34:13\",\"created_ip\":\"::1\",\"updated_by\":null,\"updated_dt\":\"2021-08-16 22:52:53\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-08-24 18:31:50', 3, NULL, NULL),
(7, 2, 'LI/240821/7', 3500.00, '2021-08-25', 'Credit Card', 'Test !!', NULL, 'bi_1629833370.PNG', 'yes', 'no', 'no', 'yes', '{\"id\":2,\"reg_no\":\"B\\/08\\/21\\/1\",\"ref\":\"Market Place\",\"first_name\":\"Bill\",\"sur_name\":\"Samson\",\"address1\":\"House # ABC, Road # 200\",\"address2\":\"Free Street Avenue\",\"city\":\"Dhaka\",\"postcode\":\"1234\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"123456\",\"email_address\":\"bill@borrowers.com\",\"remarks\":\"Positive\",\"created_by\":3,\"created_dt\":\"2021-08-16 16:34:13\",\"created_ip\":\"::1\",\"updated_by\":null,\"updated_dt\":\"2021-08-16 16:52:53\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-08-24 19:29:30', 3, NULL, NULL),
(8, 3, 'LI/211021/8', 2000.00, '2021-10-20', 'Cash', 'Cash Deposit', NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":3,\"reg_no\":\"B\\/10\\/21\\/3\",\"ref\":\"LD001\",\"first_name\":\"Amin\",\"sur_name\":\"A KHan\",\"address1\":\"27\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1217\",\"country\":\"Bangladesh\",\"telephone\":null,\"mobile\":\"01855519488\",\"email_address\":\"amin@bluepisolutions.com\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-10-21 07:04:26\",\"created_ip\":\"172.70.142.32\",\"updated_by\":null,\"updated_dt\":\"2021-10-21 07:04:26\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-10-21 07:07:28', 3, NULL, NULL),
(9, 3, 'LI/211021/9', 1000.00, '2021-10-21', 'Bank Transfer', 'Payment 1', NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":3,\"reg_no\":\"B\\/10\\/21\\/3\",\"ref\":\"LD001\",\"first_name\":\"Amin\",\"sur_name\":\"A KHan\",\"address1\":\"27\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1217\",\"country\":\"Bangladesh\",\"telephone\":null,\"mobile\":\"01855519488\",\"email_address\":\"amin@bluepisolutions.com\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-10-21 07:04:26\",\"created_ip\":\"172.70.142.32\",\"updated_by\":null,\"updated_dt\":\"2021-10-21 07:04:26\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-10-21 07:14:37', 3, NULL, NULL),
(10, 4, 'LI/151221/10', 1000.00, '2021-12-14', 'Cash', '1st Installment', NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":4,\"reg_no\":\"B\\/12\\/21\\/4\",\"ref\":\"555446668\",\"first_name\":\"Jihad\",\"sur_name\":\"IBN Emdad\",\"address1\":\"London\",\"address2\":null,\"city\":\"Yorkshire\",\"postcode\":\"556655\",\"country\":\"England\",\"telephone\":null,\"mobile\":\"+11255444555\",\"email_address\":\"test@tester.com\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:55:31\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 05:55:31\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 06:06:37', 3, NULL, NULL),
(11, 4, 'LI/151221/11', 5000.00, '2021-12-20', 'Bank Remittance', 'test', NULL, 'bi_1639576099.jpg', 'yes', 'no', 'no', 'yes', '{\"id\":4,\"reg_no\":\"B\\/12\\/21\\/4\",\"ref\":\"555446668\",\"first_name\":\"Jihad\",\"sur_name\":\"IBN Emdad\",\"address1\":\"test\",\"address2\":null,\"city\":\"Yorkshire\",\"postcode\":\"556655\",\"country\":\"England\",\"telephone\":null,\"mobile\":\"+11255444555\",\"email_address\":\"test@tester.com\",\"loan_amount\":10000,\"repay\":2000,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:55:31\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:46:25\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 13:48:19', 3, NULL, NULL),
(12, 6, 'LI/151221/12', 100.00, '2021-12-15', 'Bank Transfer', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":6,\"reg_no\":\"B\\/12\\/21\\/6\",\"ref\":\"554455448\",\"first_name\":\"AB\",\"sur_name\":\"CD\",\"address1\":\"London\",\"address2\":null,\"city\":\"London\",\"postcode\":\"55445\",\"country\":\"UK\",\"telephone\":\"+445511225544\",\"mobile\":\"+445511225544\",\"email_address\":\"abcd@email.com\",\"loan_amount\":100000,\"repay\":50000,\"remarks\":\"Testing Remarks\",\"created_by\":3,\"created_dt\":\"2021-12-15 06:27:06\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:41:41\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 16:38:51', 3, NULL, NULL),
(13, 4, 'LI/151221/13', 100.00, '2021-12-16', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":4,\"reg_no\":\"B\\/12\\/21\\/4\",\"ref\":\"555446668\",\"first_name\":\"Jihad\",\"sur_name\":\"IBN Emdad\",\"address1\":\"test\",\"address2\":null,\"city\":\"Yorkshire\",\"postcode\":\"556655\",\"country\":\"England\",\"telephone\":null,\"mobile\":\"+11255444555\",\"email_address\":\"test@tester.com\",\"loan_amount\":10000,\"repay\":2000,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:55:31\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:46:25\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 16:52:59', 3, NULL, NULL),
(14, 5, 'LI/151221/14', 100.00, '2021-12-14', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 16:59:17', 3, NULL, NULL),
(15, 6, 'LI/151221/15', 100.00, '2021-12-16', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":6,\"reg_no\":\"B\\/12\\/21\\/6\",\"ref\":\"554455448\",\"first_name\":\"AB\",\"sur_name\":\"CD\",\"address1\":\"London\",\"address2\":null,\"city\":\"London\",\"postcode\":\"55445\",\"country\":\"UK\",\"telephone\":\"+445511225544\",\"mobile\":\"+445511225544\",\"email_address\":\"abcd@email.com\",\"loan_amount\":100000,\"repay\":60000,\"remarks\":\"Testing Remarks\",\"created_by\":3,\"created_dt\":\"2021-12-15 06:27:06\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 16:39:29\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 17:03:57', 3, NULL, NULL),
(16, 6, 'LI/151221/16', 100.00, '2021-12-16', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":6,\"reg_no\":\"B\\/12\\/21\\/6\",\"ref\":\"554455448\",\"first_name\":\"AB\",\"sur_name\":\"CD\",\"address1\":\"London\",\"address2\":null,\"city\":\"London\",\"postcode\":\"55445\",\"country\":\"UK\",\"telephone\":\"+445511225544\",\"mobile\":\"+445511225544\",\"email_address\":\"abcd@email.com\",\"loan_amount\":100000,\"repay\":60000,\"remarks\":\"Testing Remarks\",\"created_by\":3,\"created_dt\":\"2021-12-15 06:27:06\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 16:39:29\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 17:08:54', 3, NULL, NULL),
(17, 5, 'LI/151221/17', 100.00, '2021-12-16', 'Bank Remittance', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 17:10:23', 3, NULL, NULL),
(18, 4, 'LI/151221/18', 100.00, '2021-12-14', 'Cash', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":4,\"reg_no\":\"B\\/12\\/21\\/4\",\"ref\":\"555446668\",\"first_name\":\"Jihad\",\"sur_name\":\"IBN Emdad\",\"address1\":\"test\",\"address2\":null,\"city\":\"Yorkshire\",\"postcode\":\"556655\",\"country\":\"England\",\"telephone\":null,\"mobile\":\"+11255444555\",\"email_address\":\"test@tester.com\",\"loan_amount\":10000,\"repay\":2000,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:55:31\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:46:25\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 17:11:18', 3, NULL, NULL),
(19, 5, 'LI/151221/19', 100.00, '2021-12-15', 'Bank Remittance', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 17:47:39', 3, NULL, NULL),
(20, 5, 'LI/151221/20', 100.00, '2021-12-15', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 18:03:30', 3, NULL, NULL),
(21, 5, 'LI/151221/21', 100.00, '2021-12-13', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 18:03:50', 3, NULL, NULL),
(22, 4, 'LI/151221/22', 100.00, '2021-12-15', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":4,\"reg_no\":\"B\\/12\\/21\\/4\",\"ref\":\"555446668\",\"first_name\":\"Jihad\",\"sur_name\":\"IBN Emdad\",\"address1\":\"test\",\"address2\":null,\"city\":\"Yorkshire\",\"postcode\":\"556655\",\"country\":\"England\",\"telephone\":null,\"mobile\":\"+11255444555\",\"email_address\":\"test@tester.com\",\"loan_amount\":10000,\"repay\":2000,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:55:31\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:46:25\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-15 20:21:19', 3, NULL, NULL),
(23, 5, 'LI/161221/23', 100.00, '2021-12-14', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-16 06:28:10', 3, NULL, NULL),
(24, 5, 'LI/161221/24', 100.00, '2021-12-14', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-16 06:28:25', 3, NULL, NULL),
(25, 5, 'LI/161221/25', 1000.00, '2021-12-09', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-16 08:09:15', 3, NULL, NULL),
(26, 10, 'LI/211221/26', 1000.00, '2021-12-21', 'Bank Transfer', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":10,\"reg_no\":\"B\\/12\\/21\\/10\",\"ref\":\"INT5001\",\"first_name\":\"MN\",\"sur_name\":\"OP\",\"address1\":\"House # 43\",\"address2\":\"Manchester l\",\"city\":\"Manchester City\",\"postcode\":\"LQ123\",\"country\":\"\",\"telephone\":\"+445511225544\",\"mobile\":\"+11255444555\",\"email_address\":\"mnop@tester.com\",\"loan_amount\":100000,\"repay\":20000,\"remarks\":\"\",\"account_name\":\"MNOP\",\"bank\":\"ABC\",\"account_no\":\"122554455\",\"bank_short_code\":\"ssmb\",\"created_by\":3,\"created_dt\":\"2021-12-21 05:14:23\",\"created_ip\":\"162.158.207.134\",\"updated_by\":3,\"updated_dt\":\"2021-12-21 05:32:02\",\"updated_ip\":\"162.158.207.154\",\"is_active\":\"yes\"}', '2021-12-21 05:43:16', 3, NULL, NULL),
(27, 10, 'LI/231221/27', 1000.00, '2021-12-23', 'Cash', NULL, NULL, NULL, 'yes', 'no', 'yes', 'yes', '{\"id\":10,\"reg_no\":\"B\\/12\\/21\\/10\",\"ref\":\"INT5001\",\"first_name\":\"MN\",\"sur_name\":\"OP\",\"address1\":\"House # 43\",\"address2\":\"Manchester l\",\"city\":\"Manchester City\",\"postcode\":\"LQ123\",\"country\":\"\",\"telephone\":\"+445511225544\",\"mobile\":\"+11255444555\",\"email_address\":\"mnop@tester.com\",\"loan_amount\":100000,\"repay\":20000,\"remarks\":\"\",\"account_name\":\"MNOP\",\"bank\":\"ABC\",\"account_no\":\"122554455\",\"bank_short_code\":\"ssmb\",\"created_by\":3,\"created_dt\":\"2021-12-21 05:14:23\",\"created_ip\":\"162.158.207.134\",\"updated_by\":3,\"updated_dt\":\"2021-12-21 05:32:02\",\"updated_ip\":\"162.158.207.154\",\"is_active\":\"yes\"}', '2021-12-23 12:29:30', 3, NULL, NULL),
(28, 5, 'LI/241221/28', 10.00, '2021-12-23', 'Bank Remittance', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":5,\"reg_no\":\"B\\/12\\/21\\/590\",\"ref\":\"232231\",\"first_name\":\"Jihad\",\"sur_name\":\"Bluepi\",\"address1\":\"test\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1236\",\"country\":\"Bangladesh\",\"telephone\":\"01911957015\",\"mobile\":\"01911957015\",\"email_address\":\"jihad@bluepisolutions.com\",\"loan_amount\":10000,\"repay\":0,\"remarks\":null,\"account_name\":\"\",\"bank\":\"\",\"account_no\":\"\",\"bank_short_code\":\"\",\"created_by\":3,\"created_dt\":\"2021-12-15 05:58:05\",\"created_ip\":\"172.68.231.132\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:34:21\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-12-24 04:22:06', 3, NULL, NULL),
(29, 4, 'LI/270222/29', 100.00, '2022-02-27', 'Bank Remittance', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":4,\"reg_no\":\"B\\/12\\/21\\/4\",\"ref\":\"555446668\",\"first_name\":\"Jihad\",\"sur_name\":\"IBN Emdad\",\"address1\":\"test\",\"address2\":null,\"city\":\"Yorkshire\",\"postcode\":\"556655\",\"country\":\"England\",\"telephone\":null,\"mobile\":\"+11255444555\",\"email_address\":\"test@tester.com\",\"loan_amount\":10000,\"repay\":2000,\"remarks\":null,\"account_name\":\"\",\"bank\":\"\",\"account_no\":\"\",\"bank_short_code\":\"\",\"created_by\":3,\"created_dt\":\"2021-12-15 05:55:31\",\"created_ip\":\"172.68.231.134\",\"updated_by\":null,\"updated_dt\":\"2021-12-15 13:46:25\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-02-27 07:25:45', 3, NULL, NULL),
(30, 14, 'LI/270222/30', 100.00, '2022-02-26', 'Bank Remittance', NULL, NULL, NULL, 'yes', 'no', 'no', 'yes', '{\"id\":14,\"reg_no\":\"B\\/02\\/22\\/14\",\"ref\":\"EC1002\",\"first_name\":\"Mujakkir\",\"sur_name\":\"Ahmed\",\"address1\":\"54 Hughes Mansions\",\"address2\":\"Vallance Road\",\"city\":\"LONDON\",\"postcode\":\"E1 5BJ\",\"country\":\"\",\"telephone\":null,\"mobile\":\"07554 618018\",\"email_address\":\"muj@tameergroup.co.uk\",\"loan_amount\":1000,\"repay\":5000,\"remarks\":\"\",\"account_name\":\"0\",\"bank\":\"0\",\"account_no\":\"0\",\"bank_short_code\":\"0\",\"created_by\":3,\"created_dt\":\"2022-02-27 07:15:08\",\"created_ip\":\"141.101.99.23\",\"updated_by\":null,\"updated_dt\":\"2022-02-27 07:15:08\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-02-27 07:41:00', 3, NULL, NULL),
(31, 2, 'LI/200622/31', 500.00, '2022-06-21', 'Bank Remittance', 'sdfsf', NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":2,\"reg_no\":\"B\\/08\\/21\\/1\",\"ref\":\"Market Place\",\"first_name\":\"Bill\",\"sur_name\":\"Samson\",\"address1\":\"House # ABC, Road # 200\",\"address2\":\"Free Street Avenue\",\"city\":\"Dhaka\",\"postcode\":\"1234\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"123456\",\"email_address\":\"bill@borrowers.com\",\"loan_amount\":0,\"repay\":0,\"remarks\":\"Positive\",\"account_name\":\"\",\"bank\":\"\",\"account_no\":\"\",\"bank_short_code\":\"\",\"created_by\":3,\"created_dt\":\"2021-08-16 16:34:13\",\"created_ip\":\"::1\",\"updated_by\":null,\"updated_dt\":\"2021-08-16 16:52:53\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-06-20 10:43:52', 3, NULL, NULL),
(32, 2, 'LI/200622/32', 30.00, '2022-06-20', 'Cash', 'asdf', NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":2,\"reg_no\":\"B\\/08\\/21\\/1\",\"ref\":\"Market Place\",\"first_name\":\"Bill\",\"sur_name\":\"Samson\",\"address1\":\"House # ABC, Road # 200\",\"address2\":\"Free Street Avenue\",\"city\":\"Dhaka\",\"postcode\":\"1234\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"123456\",\"email_address\":\"bill@borrowers.com\",\"loan_amount\":0,\"repay\":0,\"remarks\":\"Positive\",\"account_name\":\"\",\"bank\":\"\",\"account_no\":\"\",\"bank_short_code\":\"\",\"created_by\":3,\"created_dt\":\"2021-08-16 16:34:13\",\"created_ip\":\"::1\",\"updated_by\":null,\"updated_dt\":\"2021-08-16 16:52:53\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-06-20 10:44:17', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrowers_new_loan`
--

CREATE TABLE `borrowers_new_loan` (
  `id` int(255) NOT NULL,
  `borrower_id` int(255) NOT NULL,
  `loan_no` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `loan_dt` date NOT NULL,
  `receivedby` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `receipt` varchar(300) COLLATE utf8_unicode_520_ci NOT NULL,
  `witness_name` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `method_of_payment` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `repayment_date` date NOT NULL,
  `comments` longtext COLLATE utf8_unicode_520_ci,
  `is_mail` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL,
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL,
  `created_dt` datetime NOT NULL,
  `created_by` int(255) NOT NULL,
  `updated_dt` datetime DEFAULT NULL,
  `updated_by` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `borrowers_new_loan`
--

INSERT INTO `borrowers_new_loan` (`id`, `borrower_id`, `loan_no`, `amount`, `loan_dt`, `receivedby`, `receipt`, `witness_name`, `method_of_payment`, `repayment_date`, `comments`, `is_mail`, `is_active`, `created_dt`, `created_by`, `updated_dt`, `updated_by`) VALUES
(1, 5, 'LI/211221/1', 1000.00, '2021-12-21', 'Jihad', 'ab', 'ABCD', 'Cash', '2021-12-30', 'Testing', 'no', 'yes', '2021-12-21 18:30:03', 3, NULL, NULL),
(2, 10, 'LI/221221/2', 100.00, '2021-12-22', 'test', 'test1', 'test2', 'Bank', '2021-12-25', NULL, 'no', 'yes', '2021-12-22 05:02:58', 3, NULL, NULL),
(3, 10, 'LI/221221/3', 5.00, '2021-12-22', 'test', 'test1', 'test2', 'Bank', '2021-12-23', NULL, 'no', 'yes', '2021-12-22 05:03:35', 3, NULL, NULL),
(4, 10, 'LI/221221/4', 1001.00, '2021-12-23', 'test', 'test1', 'test2', 'Bank', '2021-12-23', NULL, 'no', 'yes', '2021-12-22 05:12:26', 3, NULL, NULL),
(5, 10, 'LI/231221/5', 1500.00, '2021-12-23', 'Jihad', 'ab', 'ABCD', 'Cash', '2021-12-31', NULL, 'no', 'yes', '2021-12-23 12:28:36', 3, NULL, NULL),
(6, 10, 'LI/231221/6', 4.00, '2021-12-23', 'Jihad', 'ab', 'ABCD', 'Cash', '2021-12-31', NULL, 'no', 'yes', '2021-12-23 12:29:05', 3, NULL, NULL),
(7, 5, 'LI/241221/7', 55.00, '2021-12-23', 'test', 'test1', 'test2', 'Bank', '2021-12-30', NULL, 'no', 'yes', '2021-12-24 04:21:23', 3, NULL, NULL),
(8, 2, 'LI/270222/8', 60000.00, '2022-02-22', 'AA', 'on', 'AA', 'as', '2022-02-22', NULL, 'no', 'yes', '2022-02-27 06:51:19', 3, NULL, NULL),
(9, 14, 'LI/270222/9', 6000.00, '2022-02-27', 'MMU', 'on', 'Akhtar Uzzaman', 'Monthly Standing order', '2023-02-28', NULL, 'yes', 'yes', '2022-02-27 07:17:29', 3, NULL, NULL),
(10, 4, 'LI/270222/10', 100.00, '2022-02-28', 'test', 'on', 'test2', 'Bank', '2022-02-23', NULL, 'no', 'yes', '2022-02-27 07:26:21', 3, NULL, NULL),
(11, 13, 'LI/270222/11', 100.00, '2022-02-21', 'test', 'on', 'test2', 'Bank', '2022-02-24', NULL, 'no', 'yes', '2022-02-27 07:27:00', 3, NULL, NULL),
(12, 5, 'LI/270222/12', 10.00, '2022-02-28', 'test', 'on', 'test2', 'Bank', '2022-02-28', NULL, 'no', 'yes', '2022-02-27 07:36:00', 3, NULL, NULL),
(13, 14, 'LI/270222/13', 1000.00, '2022-02-27', 'test', 'on', 'test2', 'Bank', '2022-03-30', NULL, 'no', 'yes', '2022-02-27 07:40:12', 3, NULL, NULL),
(14, 13, 'LI/280222/14', 200.00, '2022-02-27', 'John Doe', 'on', 'John Doe 2', 'Bank', '2022-02-27', NULL, 'no', 'yes', '2022-02-28 05:27:42', 3, NULL, NULL),
(15, 15, 'LI/190322/15', 500.00, '2022-03-22', 'Jihad', 'on', 'ABCD', 'Bank Transfer', '2022-03-31', NULL, 'no', 'yes', '2022-03-19 07:57:18', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landers`
--

CREATE TABLE `landers` (
  `id` int(255) NOT NULL,
  `reg_no` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `gift_ads` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `first_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `sur_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `postcode` varchar(5) COLLATE utf8_unicode_520_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `email_address` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `remarks` varchar(500) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `bank_short_code` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `created_by` int(255) NOT NULL,
  `created_dt` datetime NOT NULL,
  `created_ip` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `updated_by` int(255) DEFAULT NULL,
  `updated_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_ip` varchar(20) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `landers`
--

INSERT INTO `landers` (`id`, `reg_no`, `ref`, `gift_ads`, `first_name`, `sur_name`, `address1`, `address2`, `city`, `postcode`, `country`, `telephone`, `mobile`, `email_address`, `remarks`, `account_name`, `bank`, `account_no`, `bank_short_code`, `created_by`, `created_dt`, `created_ip`, `updated_by`, `updated_dt`, `updated_ip`, `is_active`) VALUES
(10, 'L/07/21/4', 'R001', 'yes', 'Lander', 'One', 'Sample Address', 'Sample Street Name', 'Austin, Texas', '56004', 'United States', '880000', '123456', 'lander@one.com', 'First Remarks', '', '', '', '', 3, '2021-07-02 20:05:16', '127.0.0.1', NULL, '2021-07-17 17:43:40', NULL, 'yes'),
(11, 'L/07/21/11', 'Sample Contact', 'no', 'Zylker', 'Sample Client', 'My First Address', NULL, 'Banani, Dhaka', '50001', 'Bangladesh', NULL, '0000000000', 'terrence@example.com', 'NA', '', '', '', '', 3, '2021-07-17 17:27:01', '127.0.0.1', NULL, '2021-07-17 17:43:42', NULL, 'yes'),
(12, 'L/12/21/12', '232231', 'no', 'test', 'test', 'test', NULL, 'Florida', '1236', 'Bangladesh', NULL, '232231', 'test@mail.com', NULL, '', '', '', '', 3, '2021-12-15 18:16:04', '172.70.147.88', NULL, '2021-12-15 18:16:04', NULL, 'yes'),
(13, 'L/02/22/13', 'asd', 'yes', 'sadasdas', 'asdasd', 'sdsd', 'asdasd', 'adasda', '23123', 'asdasdasd', '41231231', '42344', 'da@gmail.com', NULL, '', '', '', '', 3, '2022-02-27 06:47:14', '172.70.93.16', NULL, '2022-02-27 06:47:14', NULL, 'yes'),
(14, 'L/02/22/14', '232231', 'no', 'Ernest L. Thomas', 'Thomas', '70 Academy Street\r\nBELTON\r\nLE15 2WG', '70 Academy Street\r\nBELTON\r\nLE15 2WG', 'London', '2WG', 'UK', NULL, '077 7842 9621', 'ErnestLThomas@teleworm.us', NULL, '', '', '', '', 3, '2022-02-27 07:30:34', '172.70.142.154', NULL, '2022-02-27 07:30:34', NULL, 'yes'),
(15, 'L/06/22/15', '50', 'yes', 'asdfasf', 'asdfa', 'asdfasf', NULL, 'Dhaka', '1212', 'Bangladesh', NULL, '21546566565', 'itsumrat@gmail.com', NULL, '', '', '', '', 3, '2022-06-25 10:45:00', '172.70.188.144', NULL, '2022-06-27 06:04:10', NULL, 'yes'),
(20, 'L/06/22/16', '1111', 'yes', 'Md. Perves', 'Hossen', '126, Muradpur madrasa road, kadamtali, Dhaka-1204.', '365, Khondoker road, Shampur, Dhaka-1204.', 'Dhaka', '1204', 'Bangladesh', NULL, '01997015981', 'shikderm211@gmail.com', NULL, 'perves', 'dania', '1111', '1111', 3, '2022-06-27 11:48:53', '162.158.207.134', NULL, '2022-06-27 11:48:53', NULL, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `landers_communication`
--

CREATE TABLE `landers_communication` (
  `id` int(255) NOT NULL,
  `landers_id` int(255) NOT NULL,
  `cdate` date DEFAULT NULL,
  `staff` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `method` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `attachement` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `created_by` int(255) NOT NULL,
  `created_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `landers_communication`
--

INSERT INTO `landers_communication` (`id`, `landers_id`, `cdate`, `staff`, `method`, `details`, `attachement`, `created_by`, `created_dt`) VALUES
(2, 10, '2021-07-14', 'S 1', 'Call', 'Call Des', 'l_1626465916.png', 3, '2021-07-16 20:05:16'),
(3, 10, '2021-07-17', 'S 2', 'Text', 'Test Des', NULL, 3, '2021-07-16 20:05:16'),
(5, 20, '2022-06-22', 'sf', 'Email', NULL, 'l_1656330533.sql', 3, '2022-06-27 11:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `landers_invoice`
--

CREATE TABLE `landers_invoice` (
  `id` int(255) NOT NULL,
  `lander_id` int(255) NOT NULL,
  `invoice_no` varchar(25) COLLATE utf8_unicode_520_ci NOT NULL,
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `gift_ads_tax` float NOT NULL DEFAULT '0',
  `payment_dt` date NOT NULL,
  `payment_mode` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_520_ci,
  `attachment` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `is_receive` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `is_draft` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `is_mail` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'yes',
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no',
  `lander__` longtext COLLATE utf8_unicode_520_ci NOT NULL,
  `created_dt` datetime NOT NULL,
  `created_by` int(255) NOT NULL,
  `updated_dt` datetime DEFAULT NULL,
  `updated_by` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `landers_invoice`
--

INSERT INTO `landers_invoice` (`id`, `lander_id`, `invoice_no`, `amount`, `gift_ads_tax`, `payment_dt`, `payment_mode`, `subject`, `note`, `attachment`, `is_receive`, `is_draft`, `is_mail`, `is_active`, `lander__`, `created_dt`, `created_by`, `updated_dt`, `updated_by`) VALUES
(1, 11, 'DI/240821/1', 3500.00, 0, '2021-08-25', 'Bank Transfer', 'Test !!', 'TEst !!', 'bi_1629831747.PNG', 'no', 'no', 'yes', 'yes', '{\"id\":11,\"reg_no\":\"L\\/07\\/21\\/11\",\"ref\":\"Sample Contact\",\"gift_ads\":\"no\",\"first_name\":\"Zylker\",\"sur_name\":\"Sample Client\",\"address1\":\"My First Address\",\"address2\":null,\"city\":\"Banani, Dhaka\",\"postcode\":\"50001\",\"country\":\"Bangladesh\",\"telephone\":null,\"mobile\":\"0000000000\",\"email_address\":\"terrence@example.com\",\"remarks\":\"NA\",\"created_by\":3,\"created_dt\":\"2021-07-17 17:27:01\",\"created_ip\":\"127.0.0.1\",\"updated_by\":null,\"updated_dt\":\"2021-07-17 23:43:42\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-08-24 19:02:27', 3, NULL, NULL),
(2, 10, 'DI/240821/2', 77500.00, 0, '2021-08-25', 'Bank Transfer', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":10,\"reg_no\":\"L\\/07\\/21\\/4\",\"ref\":\"R001\",\"gift_ads\":\"yes\",\"first_name\":\"Lander\",\"sur_name\":\"One\",\"address1\":\"Sample Address\",\"address2\":\"Sample Street Name\",\"city\":\"Austin, Texas\",\"postcode\":\"56004\",\"country\":\"United States\",\"telephone\":\"880000\",\"mobile\":\"123456\",\"email_address\":\"lander@one.com\",\"remarks\":\"First Remarks\",\"created_by\":3,\"created_dt\":\"2021-07-02 20:05:16\",\"created_ip\":\"127.0.0.1\",\"updated_by\":null,\"updated_dt\":\"2021-07-17 23:43:40\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-08-24 19:16:55', 3, NULL, NULL),
(3, 11, 'DI/211021/3', 222.00, 0, '2021-10-20', 'Cash', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":11,\"reg_no\":\"L\\/07\\/21\\/11\",\"ref\":\"Sample Contact\",\"gift_ads\":\"no\",\"first_name\":\"Zylker\",\"sur_name\":\"Sample Client\",\"address1\":\"My First Address\",\"address2\":null,\"city\":\"Banani, Dhaka\",\"postcode\":\"50001\",\"country\":\"Bangladesh\",\"telephone\":null,\"mobile\":\"0000000000\",\"email_address\":\"terrence@example.com\",\"remarks\":\"NA\",\"created_by\":3,\"created_dt\":\"2021-07-17 17:27:01\",\"created_ip\":\"127.0.0.1\",\"updated_by\":null,\"updated_dt\":\"2021-07-17 17:43:42\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2021-10-21 06:34:46', 6, NULL, NULL),
(4, 10, 'DI/210122/4', 100.00, 0, '2022-01-18', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":10,\"reg_no\":\"L\\/07\\/21\\/4\",\"ref\":\"R001\",\"gift_ads\":\"yes\",\"first_name\":\"Lander\",\"sur_name\":\"One\",\"address1\":\"Sample Address\",\"address2\":\"Sample Street Name\",\"city\":\"Austin, Texas\",\"postcode\":\"56004\",\"country\":\"United States\",\"telephone\":\"880000\",\"mobile\":\"123456\",\"email_address\":\"lander@one.com\",\"remarks\":\"First Remarks\",\"created_by\":3,\"created_dt\":\"2021-07-02 20:05:16\",\"created_ip\":\"127.0.0.1\",\"updated_by\":null,\"updated_dt\":\"2021-07-17 17:43:40\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-01-21 15:32:05', 3, NULL, NULL),
(5, 13, 'DI/270222/5', 1222.00, 0, '2022-02-23', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":13,\"reg_no\":\"L\\/02\\/22\\/13\",\"ref\":\"asd\",\"gift_ads\":\"yes\",\"first_name\":\"sadasdas\",\"sur_name\":\"asdasd\",\"address1\":\"sdsd\",\"address2\":\"asdasd\",\"city\":\"adasda\",\"postcode\":\"23123\",\"country\":\"asdasdasd\",\"telephone\":\"41231231\",\"mobile\":\"42344\",\"email_address\":\"da@gmail.com\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2022-02-27 06:47:14\",\"created_ip\":\"172.70.93.16\",\"updated_by\":null,\"updated_dt\":\"2022-02-27 06:47:14\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-02-27 06:47:40', 3, NULL, NULL),
(6, 14, 'DI/270222/6', 100.00, 0, '2022-02-28', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":14,\"reg_no\":\"L\\/02\\/22\\/14\",\"ref\":\"232231\",\"gift_ads\":\"no\",\"first_name\":\"Ernest L. Thomas\",\"sur_name\":\"Thomas\",\"address1\":\"70 Academy Street\\r\\nBELTON\\r\\nLE15 2WG\",\"address2\":\"70 Academy Street\\r\\nBELTON\\r\\nLE15 2WG\",\"city\":\"London\",\"postcode\":\"2WG\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"077 7842 9621\",\"email_address\":\"ErnestLThomas@teleworm.us\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2022-02-27 07:30:34\",\"created_ip\":\"172.70.142.154\",\"updated_by\":null,\"updated_dt\":\"2022-02-27 07:30:34\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-02-27 07:31:20', 3, NULL, NULL),
(7, 14, 'DI/270222/7', 5000.00, 0, '2022-02-06', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":14,\"reg_no\":\"L\\/02\\/22\\/14\",\"ref\":\"232231\",\"gift_ads\":\"no\",\"first_name\":\"Ernest L. Thomas\",\"sur_name\":\"Thomas\",\"address1\":\"70 Academy Street\\r\\nBELTON\\r\\nLE15 2WG\",\"address2\":\"70 Academy Street\\r\\nBELTON\\r\\nLE15 2WG\",\"city\":\"London\",\"postcode\":\"2WG\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"077 7842 9621\",\"email_address\":\"ErnestLThomas@teleworm.us\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2022-02-27 07:30:34\",\"created_ip\":\"172.70.142.154\",\"updated_by\":null,\"updated_dt\":\"2022-02-27 07:30:34\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-02-27 07:32:15', 3, NULL, NULL),
(8, 14, 'DI/280222/8', 10.00, 0, '2022-02-27', 'Bank Remittance', NULL, NULL, NULL, 'no', 'no', 'no', 'yes', '{\"id\":14,\"reg_no\":\"L\\/02\\/22\\/14\",\"ref\":\"232231\",\"gift_ads\":\"no\",\"first_name\":\"Ernest L. Thomas\",\"sur_name\":\"Thomas\",\"address1\":\"70 Academy Street\\r\\nBELTON\\r\\nLE15 2WG\",\"address2\":\"70 Academy Street\\r\\nBELTON\\r\\nLE15 2WG\",\"city\":\"London\",\"postcode\":\"2WG\",\"country\":\"UK\",\"telephone\":null,\"mobile\":\"077 7842 9621\",\"email_address\":\"ErnestLThomas@teleworm.us\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2022-02-27 07:30:34\",\"created_ip\":\"172.70.142.154\",\"updated_by\":null,\"updated_dt\":\"2022-02-27 07:30:34\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-02-28 05:42:00', 3, NULL, NULL),
(10, 15, 'DI/270622/9', 100.00, 25, '2022-06-30', 'Cash', 'test', 'test', NULL, 'no', 'no', 'no', 'yes', '{\"id\":15,\"reg_no\":\"L\\/06\\/22\\/15\",\"ref\":\"50\",\"gift_ads\":\"yes\",\"first_name\":\"asdfasf\",\"sur_name\":\"asdfa\",\"address1\":\"asdfasf\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1212\",\"country\":\"Bangladesh\",\"telephone\":null,\"mobile\":\"21546566565\",\"email_address\":\"itsumrat@gmail.com\",\"remarks\":null,\"created_by\":3,\"created_dt\":\"2022-06-25 10:45:00\",\"created_ip\":\"172.70.188.144\",\"updated_by\":null,\"updated_dt\":\"2022-06-27 06:04:10\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-06-27 06:04:27', 3, NULL, NULL),
(11, 15, 'DI/270622/11', 150.00, 37.5, '2022-06-27', 'Bank Transfer', 'sdfsdf', 'asdfadfs', 'bi_1656331012.pdf', 'no', 'no', 'no', 'yes', '{\"id\":15,\"reg_no\":\"L\\/06\\/22\\/15\",\"ref\":\"50\",\"gift_ads\":\"yes\",\"first_name\":\"asdfasf\",\"sur_name\":\"asdfa\",\"address1\":\"asdfasf\",\"address2\":null,\"city\":\"Dhaka\",\"postcode\":\"1212\",\"country\":\"Bangladesh\",\"telephone\":null,\"mobile\":\"21546566565\",\"email_address\":\"itsumrat@gmail.com\",\"remarks\":null,\"account_name\":\"\",\"bank\":\"\",\"account_no\":\"\",\"bank_short_code\":\"\",\"created_by\":3,\"created_dt\":\"2022-06-25 10:45:00\",\"created_ip\":\"172.70.188.144\",\"updated_by\":null,\"updated_dt\":\"2022-06-27 06:04:10\",\"updated_ip\":null,\"is_active\":\"yes\"}', '2022-06-27 11:56:52', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE `payment_mode` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `payment_mode`
--

INSERT INTO `payment_mode` (`id`, `name`, `is_active`) VALUES
(1, 'Bank Remittance', 'yes'),
(2, 'Bank Transfer', 'yes'),
(3, 'Cash', 'yes'),
(4, 'Check', 'yes'),
(5, 'Credit Card', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` enum('1') COLLATE utf8_unicode_520_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `gift_ads_amount` double DEFAULT '0',
  `gift_ads_type` enum('flat','percentage') COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `currency_symbol` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL DEFAULT '$'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `logo`, `favicon`, `gift_ads_amount`, `gift_ads_type`, `currency_symbol`) VALUES
('1', 'Lender App', 'l_1656331298.png', 'f_1626461649.jpg', 25, 'percentage', '$');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `role` enum('admin','manager') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'manager',
  `password` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `is_active` enum('yes','no') COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'yes',
  `remember_token` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email_address`, `phone`, `designation`, `role`, `password`, `is_active`, `remember_token`) VALUES
(3, 'Onjon Hossain', 'onjon_sh@yahoo.com', '12345', 'Test Designation', 'admin', '$2y$10$gnLrda/ngqg89/4bMNu6FuzvzbWA3se9VPWiF9Md15MkJUpYHZ0Qa', 'yes', NULL),
(4, 'Test Manager', 'test@zoho.com', '123', 'Test Company', 'manager', '$2y$10$5VUp4Xz5BsDSBAIUWk2ERum/l5cjwBsGQvjB.SVq6vLJJiLjRrUYe', 'no', NULL),
(5, 'BluePi', 'amin@bluepisolutions.com', NULL, NULL, 'manager', '$2y$10$cZCq.tt5VntxVmFk2/T5E.fHPN4VKitZqgk5se74gwmdXtH9ee/86', 'yes', NULL),
(6, 'BluePi1', 'nozetaone@gmail.com', '123', NULL, 'admin', '$2y$10$LtTg4ZylSvWlfCwIem6LMekhWKQBrTlHnXUEEO7Ul3rzTFxStwBrO', 'yes', NULL),
(7, 'H M Samrat', 'itsumrat@gmail.com', '01943869105', 'Founder', 'manager', '$2y$10$ZsBraEOnhu8JDoqoUJbGmuSK1Y4o7H7sKrpvqtcIuQd8bnOB8VUmC', 'yes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD UNIQUE KEY `email` (`email_address`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `borrowers_communication`
--
ALTER TABLE `borrowers_communication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowers_id` (`borrowers_id`);

--
-- Indexes for table `borrowers_invoice`
--
ALTER TABLE `borrowers_invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice_no` (`invoice_no`),
  ADD KEY `borrower_id` (`borrower_id`),
  ADD KEY `payment_mode` (`payment_mode`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `borrowers_new_loan`
--
ALTER TABLE `borrowers_new_loan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice_no` (`loan_no`),
  ADD KEY `borrower_id` (`borrower_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `landers`
--
ALTER TABLE `landers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD UNIQUE KEY `email` (`email_address`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `landers_communication`
--
ALTER TABLE `landers_communication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `landers_id` (`landers_id`);

--
-- Indexes for table `landers_invoice`
--
ALTER TABLE `landers_invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lander_id` (`lander_id`),
  ADD KEY `payment_mode` (`payment_mode`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `borrowers_communication`
--
ALTER TABLE `borrowers_communication`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `borrowers_invoice`
--
ALTER TABLE `borrowers_invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `borrowers_new_loan`
--
ALTER TABLE `borrowers_new_loan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `landers`
--
ALTER TABLE `landers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `landers_communication`
--
ALTER TABLE `landers_communication`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `landers_invoice`
--
ALTER TABLE `landers_invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_mode`
--
ALTER TABLE `payment_mode`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD CONSTRAINT `borrowers_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowers_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrowers_communication`
--
ALTER TABLE `borrowers_communication`
  ADD CONSTRAINT `borrowers_communication_ibfk_1` FOREIGN KEY (`borrowers_id`) REFERENCES `borrowers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrowers_invoice`
--
ALTER TABLE `borrowers_invoice`
  ADD CONSTRAINT `borrowers_invoice_ibfk_1` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowers_invoice_ibfk_2` FOREIGN KEY (`payment_mode`) REFERENCES `payment_mode` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowers_invoice_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowers_invoice_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `landers`
--
ALTER TABLE `landers`
  ADD CONSTRAINT `landers_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `landers_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `landers_communication`
--
ALTER TABLE `landers_communication`
  ADD CONSTRAINT `landers_communication_ibfk_1` FOREIGN KEY (`landers_id`) REFERENCES `landers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `landers_invoice`
--
ALTER TABLE `landers_invoice`
  ADD CONSTRAINT `landers_invoice_ibfk_1` FOREIGN KEY (`lander_id`) REFERENCES `landers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `landers_invoice_ibfk_2` FOREIGN KEY (`payment_mode`) REFERENCES `payment_mode` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `landers_invoice_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `landers_invoice_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
