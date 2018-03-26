-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 23 Mars 2018 à 21:15
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_bourse`
--
CREATE DATABASE IF NOT EXISTS `bd_bourse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_bourse`;

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `ISIN` varchar(12) NOT NULL,
  `Market` varchar(60) NOT NULL,
  `lastCourse` decimal(10,3) NOT NULL,
  `Variation` decimal(10,5) NOT NULL,
  `Opening` decimal(10,3) DEFAULT NULL,
  `Closing` decimal(10,3) DEFAULT NULL,
  `Volume` decimal(30,3) NOT NULL,
  `High` decimal(10,3) DEFAULT NULL,
  `Low` decimal(10,3) DEFAULT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Timezone` varchar(10) NOT NULL,
  `stockIndex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `actions`
--

INSERT INTO `actions` (`id`, `Name`, `ISIN`, `Market`, `lastCourse`, `Variation`, `Opening`, `Closing`, `Volume`, `High`, `Low`, `DateTime`, `Timezone`, `stockIndex`) VALUES
(1, 'AXA', 'FR0000120628', 'Paris', '21.310', '-2.22528', NULL, NULL, '12.970', '21.310', '21.310', '0000-00-00 00:00:00', 'CET', '40'),
(2, 'VALLOUREC', 'FR0000120354', 'Paris', '4.403', '-3.01762', NULL, NULL, '7.823', '4.403', '4.403', '0000-00-00 00:00:00', 'CET', '40'),
(3, 'TOTAL', 'FR0000120271', 'Paris', '45.805', '-0.97287', NULL, NULL, '7.267', '45.805', '45.805', '0000-00-00 00:00:00', 'CET', '40'),
(4, 'ENGIE', 'FR0010208488', 'Paris', '13.255', '-1.59614', NULL, NULL, '7.237', '13.255', '13.255', '0000-00-00 00:00:00', 'CET', '40'),
(5, 'CREDIT AGRICOLE', 'FR0000045072', 'Paris', '13.165', '-1.60688', NULL, NULL, '7.007', '13.165', '13.165', '0000-00-00 00:00:00', 'CET', '40'),
(6, 'ARCELORMITTAL SA', 'LU1598757687', 'Amsterdam', '25.290', '-3.38109', NULL, NULL, '6.625', '25.290', '25.290', '0000-00-00 00:00:00', 'CET', '40'),
(7, 'ORANGE', 'FR0000133308', 'Paris', '13.555', '-0.55026', NULL, NULL, '6.616', '13.555', '13.555', '0000-00-00 00:00:00', 'CET', '40'),
(8, 'NATIXIS', 'FR0000120685', 'Paris', '6.670', '-1.09727', NULL, NULL, '5.463', '6.670', '6.670', '0000-00-00 00:00:00', 'CET', '40'),
(9, 'BNP PARIBAS ACT.A', 'FR0000131104', 'Paris', '59.240', '-1.44735', NULL, NULL, '5.100', '59.240', '59.240', '0000-00-00 00:00:00', 'CET', '40'),
(10, 'VIVENDI', 'FR0000127771', 'Paris', '21.050', '-0.42573', NULL, NULL, '4.510', '21.050', '21.050', '0000-00-00 00:00:00', 'CET', '40'),
(11, 'SOCIETE GENERALE', 'FR0000130809', 'Paris', '43.550', '-1.25836', NULL, NULL, '4.317', '43.550', '43.550', '0000-00-00 00:00:00', 'CET', '40'),
(12, 'TECHNICOLOR', 'FR0010918292', 'Paris', '1.410', '0.49893', NULL, NULL, '4.289', '1.410', '1.410', '0000-00-00 00:00:00', 'CET', '40'),
(13, 'STMICROELECTRONICS', 'NL0000226223', 'Paris', '18.665', '-3.83823', NULL, NULL, '4.281', '18.665', '18.665', '0000-00-00 00:00:00', 'CET', '40'),
(14, 'CARREFOUR', 'FR0000120172', 'Paris', '16.755', '-1.09209', NULL, NULL, '3.734', '16.755', '16.755', '0000-00-00 00:00:00', 'CET', '40'),
(15, 'SANOFI', 'FR0000120578', 'Paris', '63.710', '-1.42349', NULL, NULL, '3.543', '63.710', '63.710', '0000-00-00 00:00:00', 'CET', '40'),
(16, 'EDF', 'FR0010242511', 'Paris', '11.420', '-0.34904', NULL, NULL, '3.448', '11.420', '11.420', '0000-00-00 00:00:00', 'CET', '40'),
(17, 'AIR FRANCE -KLM', 'FR0000031122', 'Paris', '9.008', '-2.74239', NULL, NULL, '3.348', '9.008', '9.008', '0000-00-00 00:00:00', 'CET', '40'),
(18, 'PEUGEOT', 'FR0000121501', 'Paris', '18.610', '-0.02686', NULL, NULL, '2.791', '18.610', '18.610', '0000-00-00 00:00:00', 'CET', '40'),
(19, 'SAINT GOBAIN', 'FR0000125007', 'Paris', '42.720', '-2.66576', NULL, NULL, '2.570', '42.720', '42.720', '0000-00-00 00:00:00', 'CET', '40'),
(20, 'VEOLIA ENVIRON.', 'FR0000124141', 'Paris', '18.805', '-0.10624', NULL, NULL, '2.410', '18.805', '18.805', '0000-00-00 00:00:00', 'CET', '40'),
(21, 'SOLOCAL GROUP', 'FR0012938884', 'Paris', '1.148', '0.26201', NULL, NULL, '2.300', '1.148', '1.148', '0000-00-00 00:00:00', 'CET', '40'),
(22, 'AIRBUS', 'NL0000235190', 'Paris', '92.920', '-1.80704', NULL, NULL, '2.232', '92.920', '92.920', '0000-00-00 00:00:00', 'CET', '40'),
(23, 'DANONE', 'FR0000120644', 'Paris', '64.160', '-1.36818', NULL, NULL, '2.174', '64.160', '64.160', '0000-00-00 00:00:00', 'CET', '40'),
(24, 'UBISOFT ENTERTAIN', 'FR0000054470', 'Paris', '70.840', '0.22637', NULL, NULL, '2.128', '70.840', '70.840', '0000-00-00 00:00:00', 'CET', '40'),
(25, 'VINCI', 'FR0000125486', 'Paris', '78.480', '-0.98410', NULL, NULL, '2.066', '78.480', '78.480', '0000-00-00 00:00:00', 'CET', '40'),
(26, 'SCHNEIDER ELECTRIC', 'FR0000121972', 'Paris', '68.960', '-1.76638', NULL, NULL, '2.002', '68.960', '68.960', '0000-00-00 00:00:00', 'CET', '40'),
(27, 'BOLLORE', 'FR0000039299', 'Paris', '4.274', '-1.79228', NULL, NULL, '1.947', '4.274', '4.274', '0000-00-00 00:00:00', 'CET', '40'),
(28, 'SUEZ', 'FR0010613471', 'Paris', '11.265', '-0.26560', NULL, NULL, '1.889', '11.265', '11.265', '0000-00-00 00:00:00', 'CET', '40'),
(29, 'ALTRAN TECHN.', 'FR0000034639', 'Paris', '11.870', '-1.62114', NULL, NULL, '1.639', '11.870', '11.870', '0000-00-00 00:00:00', 'CET', '40'),
(30, 'SAFRAN', 'FR0000073272', 'Paris', '82.960', '-2.35405', NULL, NULL, '1.592', '82.960', '82.960', '0000-00-00 00:00:00', 'CET', '40'),
(31, 'AIR LIQUIDE', 'FR0000120073', 'Paris', '99.240', '-0.38145', NULL, NULL, '1.562', '99.240', '99.240', '0000-00-00 00:00:00', 'CET', '40'),
(32, 'VALEO', 'FR0013176526', 'Paris', '54.320', '-2.40747', NULL, NULL, '1.334', '54.320', '54.320', '0000-00-00 00:00:00', 'CET', '40'),
(33, 'BUREAU VERITAS', 'FR0006174348', 'Paris', '20.790', '-3.07692', NULL, NULL, '1.243', '20.790', '20.790', '0000-00-00 00:00:00', 'CET', '40'),
(34, 'SES', 'LU0088087324', 'Paris', '12.070', '0.04144', NULL, NULL, '1.200', '12.070', '12.070', '0000-00-00 00:00:00', 'CET', '40'),
(35, 'KLEPIERRE', 'FR0000121964', 'Paris', '31.710', '-1.82663', NULL, NULL, '1.102', '31.710', '31.710', '0000-00-00 00:00:00', 'CET', '40'),
(36, 'ALSTOM', 'FR0010220475', 'Paris', '35.890', '-0.99310', NULL, NULL, '1.053', '35.890', '35.890', '0000-00-00 00:00:00', 'CET', '40'),
(37, 'GROUPE EUROTUNNEL', 'FR0010533075', 'Paris', '11.490', '-0.86281', NULL, NULL, '1.008', '11.490', '11.490', '0000-00-00 00:00:00', 'CET', '40'),
(38, 'TECHNIPFMC', 'GB00BDSFG982', 'Paris', '24.130', '0.08295', NULL, NULL, '1.001', '24.130', '24.130', '0000-00-00 00:00:00', 'CET', '40'),
(39, 'PUBLICIS GROUPE SA', 'FR0000130577', 'Paris', '55.680', '0.54171', NULL, NULL, '982.666', '55.680', '55.680', '0000-00-00 00:00:00', 'CET', '40'),
(40, 'BOUYGUES', 'FR0000120503', 'Paris', '39.760', '-0.57514', NULL, NULL, '954.036', '39.760', '39.760', '0000-00-00 00:00:00', 'CET', '40'),
(41, 'ACCOR', 'FR0000120404', 'Paris', '44.500', '-1.28660', NULL, NULL, '944.849', '44.500', '44.500', '0000-00-00 00:00:00', 'CET', '40'),
(42, 'REXEL', 'FR0010451203', 'Paris', '13.550', '-1.27505', NULL, NULL, '889.912', '13.550', '13.550', '0000-00-00 00:00:00', 'CET', '40'),
(43, 'MICHELIN', 'FR0000121261', 'Paris', '119.100', '-3.21008', NULL, NULL, '845.397', '119.100', '119.100', '0000-00-00 00:00:00', 'CET', '40'),
(44, 'EDENRED', 'FR0010908533', 'Paris', '28.250', '1.00107', NULL, NULL, '784.411', '28.250', '28.250', '0000-00-00 00:00:00', 'CET', '40'),
(45, 'LVMH', 'FR0000121014', 'Paris', '242.900', '-2.56719', NULL, NULL, '773.835', '242.900', '242.900', '0000-00-00 00:00:00', 'CET', '40'),
(46, 'ESSILOR INTL.', 'FR0000121667', 'Paris', '107.700', '-0.78305', NULL, NULL, '771.533', '107.700', '107.700', '0000-00-00 00:00:00', 'CET', '40'),
(47, 'RENAULT', 'FR0000131906', 'Paris', '92.140', '-0.58265', NULL, NULL, '713.787', '92.140', '92.140', '0000-00-00 00:00:00', 'CET', '40'),
(48, 'CASINO GUICHARD', 'FR0000125585', 'Paris', '38.050', '-1.57786', NULL, NULL, '702.121', '38.050', '38.050', '0000-00-00 00:00:00', 'CET', '40'),
(49, 'L\'OREAL', 'FR0000120321', 'Paris', '175.950', '-2.00501', NULL, NULL, '679.806', '175.950', '175.950', '0000-00-00 00:00:00', 'CET', '40'),
(50, 'CAPGEMINI', 'FR0000125338', 'Paris', '103.150', '0.19427', NULL, NULL, '621.262', '103.150', '103.150', '0000-00-00 00:00:00', 'CET', '40'),
(51, 'SCOR SE', 'FR0010411983', 'Paris', '32.460', '-0.27650', NULL, NULL, '583.545', '32.460', '32.460', '0000-00-00 00:00:00', 'CET', '40'),
(52, 'INGENICO GROUP', 'FR0000125346', 'Paris', '64.260', '0.00000', NULL, NULL, '563.868', '64.260', '64.260', '0000-00-00 00:00:00', 'CET', '40'),
(53, 'LAGARDERE S.C.A.', 'FR0000130213', 'Paris', '22.990', '0.39301', NULL, NULL, '552.067', '22.990', '22.990', '0000-00-00 00:00:00', 'CET', '40'),
(54, 'CNP ASSURANCES', 'FR0000120222', 'Paris', '20.320', '-1.45490', NULL, NULL, '539.081', '20.320', '20.320', '0000-00-00 00:00:00', 'CET', '40'),
(55, 'EUTELSAT COMMUNIC.', 'FR0010221234', 'Paris', '16.620', '-1.01251', NULL, NULL, '529.630', '16.620', '16.620', '0000-00-00 00:00:00', 'CET', '40'),
(56, 'PERNOD RICARD', 'FR0000120693', 'Paris', '133.350', '-0.18713', NULL, NULL, '516.843', '133.350', '133.350', '0000-00-00 00:00:00', 'CET', '40'),
(57, 'UNIBAIL-RODAMCO', 'FR0000124711', 'Amsterdam', '185.750', '-2.08224', NULL, NULL, '505.675', '185.750', '185.750', '0000-00-00 00:00:00', 'CET', '40'),
(58, 'LEGRAND', 'FR0010307819', 'Paris', '62.780', '-1.35135', NULL, NULL, '504.188', '62.780', '62.780', '0000-00-00 00:00:00', 'CET', '40'),
(59, 'GEMALTO', 'NL0000400653', 'Amsterdam', '49.390', '-0.42339', NULL, NULL, '499.797', '49.390', '49.390', '0000-00-00 00:00:00', 'CET', '40'),
(60, 'EUROPCAR', 'FR0012789949', 'Paris', '9.360', '0.32154', NULL, NULL, '496.745', '9.360', '9.360', '0000-00-00 00:00:00', 'CET', '40'),
(61, 'EIFFAGE', 'FR0000130452', 'Paris', '92.700', '-0.53648', NULL, NULL, '453.048', '92.700', '92.700', '0000-00-00 00:00:00', 'CET', '40'),
(62, 'ATOS', 'FR0000051732', 'Paris', '110.750', '0.49909', NULL, NULL, '448.876', '110.750', '110.750', '0000-00-00 00:00:00', 'CET', '40'),
(63, 'SPIE', 'FR0012757854', 'Paris', '17.660', '-1.28563', NULL, NULL, '424.731', '17.660', '17.660', '0000-00-00 00:00:00', 'CET', '40'),
(64, 'SOLVAY', 'BE0003470755', 'Brussels', '112.350', '-1.70604', NULL, NULL, '379.247', '112.350', '112.350', '0000-00-00 00:00:00', 'CET', '40'),
(65, 'APERAM', 'LU0569974404', 'Amsterdam', '38.510', '-1.38284', NULL, NULL, '379.199', '38.510', '38.510', '0000-00-00 00:00:00', 'CET', '40'),
(66, 'FAURECIA', 'FR0000121147', 'Paris', '63.760', '-1.99816', NULL, NULL, '378.851', '63.760', '63.760', '0000-00-00 00:00:00', 'CET', '40'),
(67, 'NEXANS', 'FR0000044448', 'Paris', '43.480', '2.78960', NULL, NULL, '368.783', '43.480', '43.480', '0000-00-00 00:00:00', 'CET', '40'),
(68, 'THALES', 'FR0000121329', 'Paris', '96.200', '-0.57875', NULL, NULL, '359.375', '96.200', '96.200', '0000-00-00 00:00:00', 'CET', '40'),
(69, 'SODEXO', 'FR0000121220', 'Paris', '98.040', '-0.96970', NULL, NULL, '357.897', '98.040', '98.040', '0000-00-00 00:00:00', 'CET', '40'),
(70, 'ELIS', 'FR0012435121', 'Paris', '19.890', '-0.94622', NULL, NULL, '357.546', '19.890', '19.890', '0000-00-00 00:00:00', 'CET', '40'),
(71, 'LAFARGEHOLCIM LTD', 'CH0012214059', 'Paris', '44.140', '-1.03139', NULL, NULL, '346.173', '44.140', '44.140', '0000-00-00 00:00:00', 'CET', '40'),
(72, 'ELIOR GROUP', 'FR0011950732', 'Paris', '17.000', '0.11779', NULL, NULL, '298.572', '17.000', '17.000', '0000-00-00 00:00:00', 'CET', '40'),
(73, 'JC DECAUX SA.', 'FR0000077919', 'Paris', '27.840', '-3.06407', NULL, NULL, '277.371', '27.840', '27.840', '0000-00-00 00:00:00', 'CET', '40'),
(74, 'ARKEMA', 'FR0010313833', 'Paris', '105.050', '-2.27907', NULL, NULL, '275.285', '105.050', '105.050', '0000-00-00 00:00:00', 'CET', '40'),
(75, 'DASSAULT SYSTEMES', 'FR0000130650', 'Paris', '109.400', '-0.77098', NULL, NULL, '255.920', '109.400', '109.400', '0000-00-00 00:00:00', 'CET', '40'),
(76, 'WENDEL', 'FR0000121204', 'Paris', '122.200', '-6.07225', NULL, NULL, '240.614', '122.200', '122.200', '0000-00-00 00:00:00', 'CET', '40'),
(77, 'MERCIALYS', 'FR0010241638', 'Paris', '15.590', '-1.94969', NULL, NULL, '236.314', '15.590', '15.590', '0000-00-00 00:00:00', 'CET', '40'),
(78, 'KERING', 'FR0000121485', 'Paris', '384.900', '-0.15564', NULL, NULL, '234.162', '384.900', '384.900', '0000-00-00 00:00:00', 'CET', '40'),
(79, 'PLASTIC OMNIUM', 'FR0000124570', 'Paris', '38.210', '-1.36810', NULL, NULL, '227.383', '38.210', '38.210', '0000-00-00 00:00:00', 'CET', '40'),
(80, 'GENFIT', 'FR0004163111', 'Paris', '23.200', '2.11268', NULL, NULL, '214.484', '23.200', '23.200', '0000-00-00 00:00:00', 'CET', '40'),
(81, 'TF1', 'FR0000054900', 'Paris', '10.960', '0.73529', NULL, NULL, '201.532', '10.960', '10.960', '0000-00-00 00:00:00', 'CET', '40'),
(82, 'RUBIS', 'FR0013269123', 'Paris', '58.750', '-1.09428', NULL, NULL, '195.407', '58.750', '58.750', '0000-00-00 00:00:00', 'CET', '40'),
(83, 'WORLDLINE', 'FR0011981968', 'Paris', '42.660', '-0.23386', NULL, NULL, '192.221', '42.660', '42.660', '0000-00-00 00:00:00', 'CET', '40'),
(84, 'BIC', 'FR0000120966', 'Paris', '78.800', '0.57435', NULL, NULL, '182.680', '78.800', '78.800', '0000-00-00 00:00:00', 'CET', '40'),
(85, 'BIOMERIEUX', 'FR0013280286', 'Paris', '63.900', '-0.62208', NULL, NULL, '157.331', '63.900', '63.900', '0000-00-00 00:00:00', 'CET', '40'),
(86, 'KORIAN', 'FR0010386334', 'Paris', '27.400', '0.43988', NULL, NULL, '153.943', '27.400', '27.400', '0000-00-00 00:00:00', 'CET', '40'),
(87, 'ILIAD', 'FR0004035913', 'Paris', '170.950', '0.00000', NULL, NULL, '149.379', '170.950', '170.950', '0000-00-00 00:00:00', 'CET', '40'),
(88, 'AMUNDI', 'FR0004125920', 'Paris', '64.300', '-0.52599', NULL, NULL, '148.492', '64.300', '64.300', '0000-00-00 00:00:00', 'CET', '40'),
(89, 'TELEPERFORMANCE', 'FR0000051807', 'Paris', '125.700', '-0.39620', NULL, NULL, '138.511', '125.700', '125.700', '0000-00-00 00:00:00', 'CET', '40'),
(90, 'TARKETT', 'FR0004188670', 'Paris', '28.180', '0.93123', NULL, NULL, '133.816', '28.180', '28.180', '0000-00-00 00:00:00', 'CET', '40'),
(91, 'METROPOLE TV', 'FR0000053225', 'Paris', '20.640', '-0.19342', NULL, NULL, '129.376', '20.640', '20.640', '0000-00-00 00:00:00', 'CET', '40'),
(92, 'GECINA NOM.', 'FR0010040865', 'Paris', '141.300', '-0.77247', NULL, NULL, '128.836', '141.300', '141.300', '0000-00-00 00:00:00', 'CET', '40'),
(93, 'NEOPOST', 'FR0000120560', 'Paris', '21.240', '-0.56180', NULL, NULL, '128.688', '21.240', '21.240', '0000-00-00 00:00:00', 'CET', '40'),
(94, 'EURAZEO', 'FR0000121121', 'Paris', '74.350', '-1.13032', NULL, NULL, '125.332', '74.350', '74.350', '0000-00-00 00:00:00', 'CET', '40'),
(95, 'IPSEN', 'FR0010259150', 'Paris', '122.500', '-0.52781', NULL, NULL, '119.886', '122.500', '122.500', '0000-00-00 00:00:00', 'CET', '40'),
(96, 'EURONEXT', 'NL0006294274', 'Paris', '58.750', '-1.91987', NULL, NULL, '115.726', '58.750', '58.750', '0000-00-00 00:00:00', 'CET', '40'),
(97, 'MAISONS DU MONDE', 'FR0013153541', 'Paris', '30.500', '1.73449', NULL, NULL, '114.994', '30.500', '30.500', '0000-00-00 00:00:00', 'CET', '40'),
(98, 'IMERYS', 'FR0000120859', 'Paris', '79.100', '0.18999', NULL, NULL, '114.891', '79.100', '79.100', '0000-00-00 00:00:00', 'CET', '40'),
(99, 'DBV TECHNOLOGIES', 'FR0010417345', 'Paris', '36.080', '-2.74933', NULL, NULL, '110.658', '36.080', '36.080', '0000-00-00 00:00:00', 'CET', '40'),
(100, 'ADP', 'FR0010340141', 'Paris', '181.500', '1.28348', NULL, NULL, '101.493', '181.500', '181.500', '0000-00-00 00:00:00', 'CET', '40'),
(101, 'ERAMET', 'FR0000131757', 'Paris', '113.900', '-3.96290', NULL, NULL, '100.572', '113.900', '113.900', '0000-00-00 00:00:00', 'CET', '40'),
(102, 'SARTORIUS STED BIO', 'FR0013154002', 'Paris', '69.550', '-2.65920', NULL, NULL, '100.295', '69.550', '69.550', '0000-00-00 00:00:00', 'CET', '40'),
(103, 'SOITEC', 'FR0013227113', 'Paris', '61.000', '-3.70955', NULL, NULL, '95.831', '61.000', '61.000', '0000-00-00 00:00:00', 'CET', '40'),
(104, 'FONC.DES REGIONS', 'FR0000064578', 'Paris', '88.600', '-0.67265', NULL, NULL, '91.888', '88.600', '88.600', '0000-00-00 00:00:00', 'CET', '40'),
(105, 'NEXITY', 'FR0010112524', 'Paris', '51.650', '-1.43130', NULL, NULL, '88.366', '51.650', '51.650', '0000-00-00 00:00:00', 'CET', '40'),
(106, 'HERMES INTL', 'FR0000052292', 'Paris', '466.300', '-0.08571', NULL, NULL, '87.129', '466.300', '466.300', '0000-00-00 00:00:00', 'CET', '40'),
(107, 'ICADE', 'FR0000035081', 'Paris', '77.150', '-1.27959', NULL, NULL, '85.506', '77.150', '77.150', '0000-00-00 00:00:00', 'CET', '40'),
(108, 'ORPEA', 'FR0000184798', 'Paris', '99.520', '-0.14048', NULL, NULL, '81.121', '99.520', '99.520', '0000-00-00 00:00:00', 'CET', '40'),
(109, 'ALD', 'FR0013258662', 'Paris', '13.220', '-1.71004', NULL, NULL, '76.808', '13.220', '13.220', '0000-00-00 00:00:00', 'CET', '40'),
(110, 'FNAC DARTY', 'FR0011476928', 'Paris', '81.450', '-3.09340', NULL, NULL, '66.174', '81.450', '81.450', '0000-00-00 00:00:00', 'CET', '40'),
(111, 'REMY COINTREAU', 'FR0000130395', 'Paris', '112.400', '-0.79435', NULL, NULL, '59.611', '112.400', '112.400', '0000-00-00 00:00:00', 'CET', '40'),
(112, 'ALTEN', 'FR0000071946', 'Paris', '77.900', '-0.06414', NULL, NULL, '53.544', '77.900', '77.900', '0000-00-00 00:00:00', 'CET', '40'),
(113, 'GTT', 'FR0011726835', 'Paris', '51.150', '-2.19885', NULL, NULL, '53.134', '51.150', '51.150', '0000-00-00 00:00:00', 'CET', '40'),
(114, 'IPSOS', 'FR0000073298', 'Paris', '30.400', '-0.45842', NULL, NULL, '49.447', '30.400', '30.400', '0000-00-00 00:00:00', 'CET', '40'),
(115, 'S.E.B.', 'FR0000121709', 'Paris', '156.600', '-0.44501', NULL, NULL, '39.168', '156.600', '156.600', '0000-00-00 00:00:00', 'CET', '40'),
(116, 'TRIGANO', 'FR0005691656', 'Paris', '151.000', '0.00000', NULL, NULL, '34.699', '151.000', '151.000', '0000-00-00 00:00:00', 'CET', '40'),
(117, 'SOPRA STERIA GROUP', 'FR0000050809', 'Paris', '164.800', '-0.24213', NULL, NULL, '33.206', '164.800', '164.800', '0000-00-00 00:00:00', 'CET', '40'),
(118, 'EUROFINS SCIENT.', 'FR0000038259', 'Paris', '457.000', '-0.78159', NULL, NULL, '28.817', '457.000', '457.000', '0000-00-00 00:00:00', 'CET', '40'),
(119, 'VICAT', 'FR0000031775', 'Paris', '62.850', '0.15936', NULL, NULL, '28.717', '62.850', '62.850', '0000-00-00 00:00:00', 'CET', '40'),
(120, 'DASSAULT AVIATION', 'FR0000121725', 'Paris', '1.542', '-1.40665', NULL, NULL, '7.198', '1.542', '1.542', '0000-00-00 00:00:00', 'CET', '40');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id_user` int(5) NOT NULL,
  `id_actions` int(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `porte_feuille`
--

CREATE TABLE `porte_feuille` (
  `id` int(11) NOT NULL,
  `id_action` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `prix_achat` decimal(15,0) NOT NULL,
  `quantité` int(5) NOT NULL,
  `prix_total` decimal(17,0) NOT NULL,
  `prix_actuel` decimal(17,0) NOT NULL,
  `gain` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`, `role`, `active`) VALUES
(3, 'siloe', 'fc5415b5d1417191658e89f4a518b202da14426f', 'rabadansiloe@gmail.com', 'admin', 0),
(4, 'maxence', '5a92bb4f40363c55bf25dbd65d3601a98335b7f3', 'maxence.garn@gmail.com', 'user', 0),
(5, 'sebastien', '7b1bf2ad279647ce77860572ab2d17807899e44b', 'sebastien.glatz@gmail.com', 'user', 0),
(6, 'julie', 'c2757c0df6b080e82ce1317149841c6befc10243', 'juliiie1108@gmail.com', 'user', 0),
(7, 'vincent', '6846105c1de1b40576f2238af8b0bd10ad4527ca', 'punkymotvgame@gmail.com', 'user', 0),
(8, 'margaux', '12e26feca31b91af92d9e1eb4bc2bb56213874b9', 'margaux.gautherin@gmail.com', 'user', 1),
(9, 'camille', 'fc01271603f25b35b3f92c61dde551259dbdc3ed', 'bleuarmy24@gmail.com', 'user', 0),
(10, 'yann', '88bb8f43f9095b2c018fca064f388c7673bdabd0', 'ydubois87@gmail.com', 'user', 0),
(11, 'david', '9e4bb55b0e1cbe606849117db1b97f179405daf3', 'Darknessy@gmail.com', 'user', 0),
(12, 'william', '3edff0367d6b01ca818cdfebd2344a38cd1f7814', 'willou9979@gmail.com', 'user', 0),
(13, 'benjamin', 'f9c3660d89418c79ee50fd2b0ab834276a78bd8e', 'benjamin.jusserand@gmail.com', 'user', 0),
(14, 'timothe', 'e44c479382acc30c17ca54c4fb14c75c66668e46', 'timothe.benoit@gmail.com', 'admin', 0),
(15, 'lucas', 'd971a772e0e26637f8be9138224cad39d0da54fd', 'lucas.patenote@gmail.com', 'user', 0),
(16, 'philippe', '34adbbc81f0a9558728a91dbe7c7f9293eb6ce7e', 'philippe.chantecaille@univ-poitiers.fr', 'user', 0),
(17, 'noemie', '54028a3d989f8133d7fbb19444a38ddab0faa2ad', 'nonopinos@gmail.com', 'user', 0),
(18, 'gaetan', '5ac2c3ca8ff6493e31010a97b9601acb6976783f', 'gaetanjuste2@gmail.com', 'user', 1),
(19, 'admin', '6747f06b4b9040196f62e833656fb147d29f7be6', '', 'admin', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_user`),
  ADD KEY `id_favoris` (`id_actions`);

--
-- Index pour la table `porte_feuille`
--
ALTER TABLE `porte_feuille`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_action` (`id_action`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `porte_feuille`
--
ALTER TABLE `porte_feuille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`id_actions`) REFERENCES `actions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `favoris_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
