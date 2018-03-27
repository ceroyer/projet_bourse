-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Mars 2018 à 14:03
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_bourse`
--

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
(1, 'AXA', 'FR0000120628', 'Paris', '21.195', '-0.53965', NULL, NULL, '1.345', '21.310', '21.195', '2018-03-26 07:46:00', 'CET', '40'),
(2, 'VALLOUREC', 'FR0000120354', 'Paris', '4.397', '-0.13627', NULL, NULL, '585.121', '4.403', '4.397', '2018-03-26 05:46:00', 'CET', '40'),
(3, 'TOTAL', 'FR0000120271', 'Paris', '46.015', '0.45847', NULL, NULL, '465.152', '46.015', '45.805', '2018-03-26 05:46:00', 'CET', '40'),
(4, 'ENGIE', 'FR0010208488', 'Paris', '13.315', '0.45266', NULL, NULL, '299.321', '13.315', '13.255', '2018-03-26 05:46:00', 'CET', '40'),
(5, 'CREDIT AGRICOLE', 'FR0000045072', 'Paris', '13.145', '-0.15192', NULL, NULL, '585.535', '13.165', '13.145', '2018-03-26 05:46:00', 'CET', '40'),
(6, 'ARCELORMITTAL SA', 'LU1598757687', 'Amsterdam', '25.450', '0.63266', NULL, NULL, '439.099', '25.450', '25.290', '2018-03-26 05:46:00', 'CET', '40'),
(7, 'ORANGE', 'FR0000133308', 'Paris', '13.555', '0.00000', NULL, NULL, '376.543', '13.555', '13.555', '2018-03-26 05:46:00', 'CET', '40'),
(8, 'NATIXIS', 'FR0000120685', 'Paris', '6.674', '0.05997', NULL, NULL, '325.708', '6.674', '6.670', '2018-03-26 05:46:00', 'CET', '40'),
(9, 'BNP PARIBAS ACT.A', 'FR0000131104', 'Paris', '59.460', '0.37137', NULL, NULL, '240.551', '59.460', '59.240', '2018-03-26 05:46:00', 'CET', '40'),
(10, 'VIVENDI', 'FR0000127771', 'Paris', '21.080', '0.14252', NULL, NULL, '112.891', '21.080', '21.050', '2018-03-26 05:46:00', 'CET', '40'),
(11, 'SOCIETE GENERALE', 'FR0000130809', 'Paris', '43.620', '0.16073', NULL, NULL, '189.366', '43.620', '43.550', '2018-03-26 05:46:00', 'CET', '40'),
(12, 'TECHNICOLOR', 'FR0010918292', 'Paris', '1.396', '-0.99291', NULL, NULL, '201.299', '1.410', '1.396', '2018-03-26 05:46:00', 'CET', '40'),
(13, 'STMICROELECTRONICS', 'NL0000226223', 'Paris', '18.800', '0.72328', NULL, NULL, '253.230', '18.800', '18.665', '2018-03-26 05:46:00', 'CET', '40'),
(14, 'CARREFOUR', 'FR0000120172', 'Paris', '16.760', '0.02984', NULL, NULL, '272.168', '16.760', '16.755', '2018-03-26 05:46:00', 'CET', '40'),
(15, 'SANOFI', 'FR0000120578', 'Paris', '64.540', '1.30278', NULL, NULL, '213.457', '64.540', '63.710', '2018-03-26 05:46:00', 'CET', '40'),
(16, 'EDF', 'FR0010242511', 'Paris', '11.450', '0.26270', NULL, NULL, '213.069', '11.450', '11.420', '2018-03-26 05:46:00', 'CET', '40'),
(17, 'AIR FRANCE -KLM', 'FR0000031122', 'Paris', '8.992', '-0.17762', NULL, NULL, '171.119', '9.008', '8.992', '2018-03-26 05:46:00', 'CET', '40'),
(18, 'PEUGEOT', 'FR0000121501', 'Paris', '18.665', '0.29554', NULL, NULL, '118.760', '18.665', '18.610', '2018-03-26 05:46:00', 'CET', '40'),
(19, 'SAINT GOBAIN', 'FR0000125007', 'Paris', '42.975', '0.59691', NULL, NULL, '125.033', '42.975', '42.720', '2018-03-26 05:46:00', 'CET', '40'),
(20, 'VEOLIA ENVIRON.', 'FR0000124141', 'Paris', '18.830', '0.13294', NULL, NULL, '89.253', '18.830', '18.805', '2018-03-26 05:46:00', 'CET', '40'),
(21, 'SOLOCAL GROUP', 'FR0012938884', 'Paris', '1.146', '-0.17422', NULL, NULL, '75.941', '1.148', '1.146', '2018-03-26 05:41:00', 'CET', '40'),
(22, 'AIRBUS', 'NL0000235190', 'Paris', '92.930', '0.01076', NULL, NULL, '193.071', '92.930', '92.920', '2018-03-26 05:46:00', 'CET', '40'),
(23, 'DANONE', 'FR0000120644', 'Paris', '64.050', '-0.17145', NULL, NULL, '63.892', '64.160', '64.050', '2018-03-26 05:46:00', 'CET', '40'),
(24, 'UBISOFT ENTERTAIN', 'FR0000054470', 'Paris', '69.000', '-2.59740', NULL, NULL, '79.993', '70.840', '69.000', '2018-03-26 05:46:00', 'CET', '40'),
(25, 'VINCI', 'FR0000125486', 'Paris', '78.960', '0.61162', NULL, NULL, '108.548', '78.960', '78.480', '2018-03-26 05:46:00', 'CET', '40'),
(26, 'SCHNEIDER ELECTRIC', 'FR0000121972', 'Paris', '69.440', '0.69606', NULL, NULL, '97.895', '69.440', '68.960', '2018-03-26 05:46:00', 'CET', '40'),
(27, 'BOLLORE', 'FR0000039299', 'Paris', '4.268', '-0.14038', NULL, NULL, '122.714', '4.274', '4.268', '2018-03-26 05:46:00', 'CET', '40'),
(28, 'SUEZ', 'FR0010613471', 'Paris', '11.300', '0.31070', NULL, NULL, '95.230', '11.300', '11.265', '2018-03-26 05:46:00', 'CET', '40'),
(29, 'ALTRAN TECHN.', 'FR0000034639', 'Paris', '11.970', '0.84246', NULL, NULL, '279.233', '11.970', '11.870', '2018-03-26 05:44:00', 'CET', '40'),
(30, 'SAFRAN', 'FR0000073272', 'Paris', '83.120', '0.19286', NULL, NULL, '40.743', '83.120', '82.960', '2018-03-26 05:46:00', 'CET', '40'),
(31, 'AIR LIQUIDE', 'FR0000120073', 'Paris', '99.840', '0.60459', NULL, NULL, '107.042', '99.840', '99.240', '2018-03-26 05:46:00', 'CET', '40'),
(32, 'VALEO', 'FR0013176526', 'Paris', '54.460', '0.25773', NULL, NULL, '54.061', '54.460', '54.320', '2018-03-26 05:46:00', 'CET', '40'),
(33, 'BUREAU VERITAS', 'FR0006174348', 'Paris', '20.710', '-0.38480', NULL, NULL, '82.552', '20.790', '20.710', '2018-03-26 05:46:00', 'CET', '40'),
(34, 'SES', 'LU0088087324', 'Paris', '12.240', '1.40845', NULL, NULL, '66.286', '12.240', '12.070', '2018-03-26 05:46:00', 'CET', '40'),
(35, 'KLEPIERRE', 'FR0000121964', 'Paris', '31.650', '-0.18921', NULL, NULL, '60.238', '31.710', '31.650', '2018-03-26 05:46:00', 'CET', '40'),
(36, 'ALSTOM', 'FR0010220475', 'Paris', '36.230', '0.94734', NULL, NULL, '55.875', '36.230', '35.890', '2018-03-26 05:43:00', 'CET', '40'),
(37, 'GROUPE EUROTUNNEL', 'FR0010533075', 'Paris', '11.490', '0.00000', NULL, NULL, '59.941', '11.490', '11.490', '2018-03-26 05:44:00', 'CET', '40'),
(38, 'TECHNIPFMC', 'GB00BDSFG982', 'Paris', '24.170', '0.16577', NULL, NULL, '65.921', '24.170', '24.130', '2018-03-26 05:46:00', 'CET', '40'),
(39, 'PUBLICIS GROUPE SA', 'FR0000130577', 'Paris', '55.640', '-0.07184', NULL, NULL, '32.309', '55.680', '55.640', '2018-03-26 05:46:00', 'CET', '40'),
(40, 'BOUYGUES', 'FR0000120503', 'Paris', '39.820', '0.15091', NULL, NULL, '23.197', '39.820', '39.760', '2018-03-26 05:46:00', 'CET', '40'),
(41, 'ACCOR', 'FR0000120404', 'Paris', '44.590', '0.20225', NULL, NULL, '25.341', '44.590', '44.500', '2018-03-26 05:46:00', 'CET', '40'),
(42, 'REXEL', 'FR0010451203', 'Paris', '13.560', '0.07380', NULL, NULL, '46.954', '13.560', '13.550', '2018-03-26 05:45:00', 'CET', '40'),
(43, 'MICHELIN', 'FR0000121261', 'Paris', '119.700', '0.50378', NULL, NULL, '41.708', '119.700', '119.100', '2018-03-26 05:46:00', 'CET', '40'),
(44, 'EDENRED', 'FR0010908533', 'Paris', '28.240', '-0.03540', NULL, NULL, '22.033', '28.250', '28.240', '2018-03-26 05:46:00', 'CET', '40'),
(45, 'LVMH', 'FR0000121014', 'Paris', '245.200', '0.94689', NULL, NULL, '53.849', '245.200', '242.900', '2018-03-26 05:46:00', 'CET', '40'),
(46, 'ESSILOR INTL.', 'FR0000121667', 'Paris', '107.700', '0.00000', NULL, NULL, '31.778', '107.700', '107.700', '2018-03-26 05:46:00', 'CET', '40'),
(47, 'RENAULT', 'FR0000131906', 'Paris', '92.810', '0.72715', NULL, NULL, '45.846', '92.810', '92.140', '2018-03-26 05:46:00', 'CET', '40'),
(48, 'CASINO GUICHARD', 'FR0000125585', 'Paris', '38.240', '0.49934', NULL, NULL, '18.281', '38.240', '38.050', '2018-03-26 05:45:00', 'CET', '40'),
(49, 'L''OREAL', 'FR0000120321', 'Paris', '176.250', '0.17050', NULL, NULL, '40.049', '176.250', '175.950', '2018-03-26 05:46:00', 'CET', '40'),
(50, 'CAPGEMINI', 'FR0000125338', 'Paris', '102.950', '-0.19389', NULL, NULL, '43.019', '103.150', '102.950', '2018-03-26 05:46:00', 'CET', '40'),
(51, 'SCOR SE', 'FR0010411983', 'Paris', '32.550', '0.27726', NULL, NULL, '46.154', '32.550', '32.460', '2018-03-26 05:45:00', 'CET', '40'),
(52, 'INGENICO GROUP', 'FR0000125346', 'Paris', '64.960', '1.08932', NULL, NULL, '16.979', '64.960', '64.260', '2018-03-26 05:46:00', 'CET', '40'),
(53, 'LAGARDERE S.C.A.', 'FR0000130213', 'Paris', '23.110', '0.52197', NULL, NULL, '22.878', '23.110', '22.990', '2018-03-26 05:44:00', 'CET', '40'),
(54, 'CNP ASSURANCES', 'FR0000120222', 'Paris', '20.360', '0.19685', NULL, NULL, '14.302', '20.360', '20.320', '2018-03-26 05:46:00', 'CET', '40'),
(55, 'EUTELSAT COMMUNIC.', 'FR0010221234', 'Paris', '16.675', '0.33093', NULL, NULL, '31.905', '16.675', '16.620', '2018-03-26 05:46:00', 'CET', '40'),
(56, 'PERNOD RICARD', 'FR0000120693', 'Paris', '132.350', '-0.74991', NULL, NULL, '46.291', '133.350', '132.350', '2018-03-26 05:46:00', 'CET', '40'),
(57, 'UNIBAIL-RODAMCO', 'FR0000124711', 'Amsterdam', '184.700', '-0.56528', NULL, NULL, '45.573', '185.750', '184.700', '2018-03-26 05:46:00', 'CET', '40'),
(58, 'LEGRAND', 'FR0010307819', 'Paris', '62.860', '0.12743', NULL, NULL, '21.634', '62.860', '62.780', '2018-03-26 05:44:00', 'CET', '40'),
(59, 'GEMALTO', 'NL0000400653', 'Amsterdam', '49.310', '-0.16198', NULL, NULL, '17.080', '49.390', '49.310', '2018-03-26 05:46:00', 'CET', '40'),
(60, 'EUROPCAR', 'FR0012789949', 'Paris', '9.425', '0.69444', NULL, NULL, '96.438', '9.425', '9.360', '2018-03-26 05:46:00', 'CET', '40'),
(61, 'EIFFAGE', 'FR0000130452', 'Paris', '92.700', '0.00000', NULL, NULL, '11.754', '92.700', '92.700', '2018-03-26 05:46:00', 'CET', '40'),
(62, 'ATOS', 'FR0000051732', 'Paris', '110.850', '0.09029', NULL, NULL, '9.777', '110.850', '110.750', '2018-03-26 05:45:00', 'CET', '40'),
(63, 'SPIE', 'FR0012757854', 'Paris', '17.580', '-0.45300', NULL, NULL, '17.680', '17.660', '17.580', '2018-03-26 05:44:00', 'CET', '40'),
(64, 'SOLVAY', 'BE0003470755', 'Brussels', '112.700', '0.31153', NULL, NULL, '8.166', '112.700', '112.350', '2018-03-26 05:45:00', 'CET', '40'),
(65, 'APERAM', 'LU0569974404', 'Amsterdam', '38.670', '0.41548', NULL, NULL, '14.921', '38.670', '38.510', '2018-03-26 05:46:00', 'CET', '40'),
(66, 'FAURECIA', 'FR0000121147', 'Paris', '64.060', '0.47051', NULL, NULL, '22.122', '64.060', '63.760', '2018-03-26 05:46:00', 'CET', '40'),
(67, 'NEXANS', 'FR0000044448', 'Paris', '43.260', '-0.50598', NULL, NULL, '13.610', '43.480', '43.260', '2018-03-26 05:46:00', 'CET', '40'),
(68, 'THALES', 'FR0000121329', 'Paris', '96.400', '0.20790', NULL, NULL, '20.591', '96.400', '96.200', '2018-03-26 05:45:00', 'CET', '40'),
(69, 'SODEXO', 'FR0000121220', 'Paris', '98.460', '0.42840', NULL, NULL, '18.914', '98.460', '98.040', '2018-03-26 05:46:00', 'CET', '40'),
(70, 'ELIS', 'FR0012435121', 'Paris', '19.940', '0.25138', NULL, NULL, '21.342', '19.940', '19.890', '2018-03-26 05:45:00', 'CET', '40'),
(71, 'LAFARGEHOLCIM LTD', 'CH0012214059', 'Paris', '44.360', '0.49841', NULL, NULL, '13.008', '44.360', '44.140', '2018-03-26 05:46:00', 'CET', '40'),
(72, 'ELIOR GROUP', 'FR0011950732', 'Paris', '16.980', '-0.11765', NULL, NULL, '5.990', '17.000', '16.980', '2018-03-26 05:43:00', 'CET', '40'),
(73, 'JC DECAUX SA.', 'FR0000077919', 'Paris', '27.840', '0.00000', NULL, NULL, '4.923', '27.840', '27.840', '2018-03-26 05:45:00', 'CET', '40'),
(74, 'ARKEMA', 'FR0010313833', 'Paris', '105.400', '0.33317', NULL, NULL, '6.520', '105.400', '105.050', '2018-03-26 05:46:00', 'CET', '40'),
(75, 'DASSAULT SYSTEMES', 'FR0000130650', 'Paris', '110.350', '0.86837', NULL, NULL, '21.037', '110.350', '109.400', '2018-03-26 05:44:00', 'CET', '40'),
(76, 'WENDEL', 'FR0000121204', 'Paris', '121.900', '-0.24550', NULL, NULL, '20.806', '122.200', '121.900', '2018-03-26 05:46:00', 'CET', '40'),
(77, 'MERCIALYS', 'FR0010241638', 'Paris', '15.460', '-0.83387', NULL, NULL, '29.261', '15.590', '15.460', '2018-03-26 05:46:00', 'CET', '40'),
(78, 'KERING', 'FR0000121485', 'Paris', '384.800', '-0.02598', NULL, NULL, '14.055', '384.900', '384.800', '2018-03-26 05:46:00', 'CET', '40'),
(79, 'PLASTIC OMNIUM', 'FR0000124570', 'Paris', '38.290', '0.20937', NULL, NULL, '9.825', '38.290', '38.210', '2018-03-26 05:46:00', 'CET', '40'),
(80, 'GENFIT', 'FR0004163111', 'Paris', '22.860', '-1.46552', NULL, NULL, '24.841', '23.200', '22.860', '2018-03-26 05:46:00', 'CET', '40'),
(81, 'TF1', 'FR0000054900', 'Paris', '10.900', '-0.54745', NULL, NULL, '9.582', '10.960', '10.900', '2018-03-26 05:44:00', 'CET', '40'),
(82, 'RUBIS', 'FR0013269123', 'Paris', '58.850', '0.17021', NULL, NULL, '8.545', '58.850', '58.750', '2018-03-26 05:46:00', 'CET', '40'),
(83, 'WORLDLINE', 'FR0011981968', 'Paris', '42.180', '-1.12518', NULL, NULL, '9.248', '42.660', '42.180', '2018-03-26 05:42:00', 'CET', '40'),
(84, 'BIC', 'FR0000120966', 'Paris', '79.000', '0.25381', NULL, NULL, '5.381', '79.000', '78.800', '2018-03-26 05:44:00', 'CET', '40'),
(85, 'BIOMERIEUX', 'FR0013280286', 'Paris', '63.800', '-0.15649', NULL, NULL, '10.218', '63.900', '63.800', '2018-03-26 05:44:00', 'CET', '40'),
(86, 'KORIAN', 'FR0010386334', 'Paris', '27.520', '0.43796', NULL, NULL, '5.555', '27.520', '27.400', '2018-03-26 05:42:00', 'CET', '40'),
(87, 'ILIAD', 'FR0004035913', 'Paris', '171.800', '0.49722', NULL, NULL, '15.997', '171.800', '170.950', '2018-03-26 05:46:00', 'CET', '40'),
(88, 'AMUNDI', 'FR0004125920', 'Paris', '63.900', '-0.62208', NULL, NULL, '6.926', '64.300', '63.900', '2018-03-26 05:46:00', 'CET', '40'),
(89, 'TELEPERFORMANCE', 'FR0000051807', 'Paris', '125.000', '-0.55688', NULL, NULL, '8.485', '125.700', '125.000', '2018-03-26 05:44:00', 'CET', '40'),
(90, 'TARKETT', 'FR0004188670', 'Paris', '28.060', '-0.42583', NULL, NULL, '3.110', '28.180', '28.060', '2018-03-26 05:41:00', 'CET', '40'),
(91, 'METROPOLE TV', 'FR0000053225', 'Paris', '20.660', '0.09690', NULL, NULL, '2.358', '20.660', '20.640', '2018-03-26 05:41:00', 'CET', '40'),
(92, 'GECINA NOM.', 'FR0010040865', 'Paris', '139.600', '-1.20311', NULL, NULL, '4.369', '141.300', '139.600', '2018-03-26 05:45:00', 'CET', '40'),
(93, 'NEOPOST', 'FR0000120560', 'Paris', '21.300', '0.28249', NULL, NULL, '7.208', '21.300', '21.240', '2018-03-26 05:44:00', 'CET', '40'),
(94, 'EURAZEO', 'FR0000121121', 'Paris', '74.300', '-0.06725', NULL, NULL, '13.671', '74.350', '74.300', '2018-03-26 05:44:00', 'CET', '40'),
(95, 'IPSEN', 'FR0010259150', 'Paris', '122.500', '0.00000', NULL, NULL, '4.168', '122.500', '122.500', '2018-03-26 05:46:00', 'CET', '40'),
(96, 'EURONEXT', 'NL0006294274', 'Paris', '58.650', '-0.17021', NULL, NULL, '3.515', '58.750', '58.650', '2018-03-26 05:43:00', 'CET', '40'),
(97, 'MAISONS DU MONDE', 'FR0013153541', 'Paris', '30.380', '-0.39344', NULL, NULL, '4.560', '30.500', '30.380', '2018-03-26 05:27:00', 'CET', '40'),
(98, 'IMERYS', 'FR0000120859', 'Paris', '79.150', '0.06321', NULL, NULL, '4.610', '79.150', '79.100', '2018-03-26 05:42:00', 'CET', '40'),
(99, 'DBV TECHNOLOGIES', 'FR0010417345', 'Paris', '36.240', '0.44346', NULL, NULL, '14.614', '36.240', '36.080', '2018-03-26 05:42:00', 'CET', '40'),
(100, 'ADP', 'FR0010340141', 'Paris', '182.400', '0.49587', NULL, NULL, '5.388', '182.400', '181.500', '2018-03-26 05:46:00', 'CET', '40'),
(101, 'ERAMET', 'FR0000131757', 'Paris', '113.400', '-0.43898', NULL, NULL, '4.818', '113.900', '113.400', '2018-03-26 05:46:00', 'CET', '40'),
(102, 'SARTORIUS STED BIO', 'FR0013154002', 'Paris', '69.700', '0.21567', NULL, NULL, '5.211', '69.700', '69.550', '2018-03-26 05:42:00', 'CET', '40'),
(103, 'SOITEC', 'FR0013227113', 'Paris', '62.300', '2.13115', NULL, NULL, '12.056', '62.300', '61.000', '2018-03-26 05:45:00', 'CET', '40'),
(104, 'FONC.DES REGIONS', 'FR0000064578', 'Paris', '88.100', '-0.56433', NULL, NULL, '3.990', '88.600', '88.100', '2018-03-26 05:44:00', 'CET', '40'),
(105, 'NEXITY', 'FR0010112524', 'Paris', '51.500', '-0.29042', NULL, NULL, '2.808', '51.650', '51.500', '2018-03-26 05:41:00', 'CET', '40'),
(106, 'HERMES INTL', 'FR0000052292', 'Paris', '466.600', '0.06434', NULL, NULL, '4.636', '466.600', '466.300', '2018-03-26 05:46:00', 'CET', '40'),
(107, 'ICADE', 'FR0000035081', 'Paris', '76.600', '-0.71290', NULL, NULL, '3.946', '77.150', '76.600', '2018-03-26 05:44:00', 'CET', '40'),
(108, 'ORPEA', 'FR0000184798', 'Paris', '99.600', '0.08039', NULL, NULL, '4.820', '99.600', '99.520', '2018-03-26 05:45:00', 'CET', '40'),
(109, 'ALD', 'FR0013258662', 'Paris', '13.210', '-0.07564', NULL, NULL, '3.004', '13.220', '13.210', '2018-03-26 05:46:00', 'CET', '40'),
(110, 'FNAC DARTY', 'FR0011476928', 'Paris', '82.700', '1.53468', NULL, NULL, '5.240', '82.700', '81.450', '2018-03-26 05:46:00', 'CET', '40'),
(111, 'REMY COINTREAU', 'FR0000130395', 'Paris', '111.800', '-0.53381', NULL, NULL, '6.426', '112.400', '111.800', '2018-03-26 05:46:00', 'CET', '40'),
(112, 'ALTEN', 'FR0000071946', 'Paris', '77.850', '-0.06418', NULL, NULL, '1.941', '77.900', '77.850', '2018-03-26 05:45:00', 'CET', '40'),
(113, 'GTT', 'FR0011726835', 'Paris', '51.400', '0.48876', NULL, NULL, '10.040', '51.400', '51.150', '2018-03-26 05:42:00', 'CET', '40'),
(114, 'IPSOS', 'FR0000073298', 'Paris', '30.500', '0.32895', NULL, NULL, '3.232', '30.500', '30.400', '2018-03-26 05:43:00', 'CET', '40'),
(115, 'S.E.B.', 'FR0000121709', 'Paris', '156.400', '-0.12771', NULL, NULL, '2.843', '156.600', '156.400', '2018-03-26 05:41:00', 'CET', '40'),
(116, 'TRIGANO', 'FR0005691656', 'Paris', '153.000', '1.32450', NULL, NULL, '2.898', '153.000', '151.000', '2018-03-26 05:46:00', 'CET', '40'),
(117, 'SOPRA STERIA GROUP', 'FR0000050809', 'Paris', '165.000', '0.12136', NULL, NULL, '2.014', '165.000', '164.800', '2018-03-26 05:46:00', 'CET', '40'),
(118, 'EUROFINS SCIENT.', 'FR0000038259', 'Paris', '459.000', '0.43764', NULL, NULL, '1.171', '459.000', '457.000', '2018-03-26 05:45:00', 'CET', '40'),
(119, 'VICAT', 'FR0000031775', 'Paris', '62.450', '-0.63644', NULL, NULL, '2.861', '62.850', '62.450', '2018-03-26 05:41:00', 'CET', '40'),
(120, 'DASSAULT AVIATION', 'FR0000121725', 'Paris', '1.545', '0.19455', NULL, NULL, '285.000', '1.545', '1.542', '2018-03-26 05:44:00', 'CET', '40');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isin_action` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_user`, `isin_action`) VALUES
(16, 3, 'LU1598757687'),
(17, 3, 'FR0000121501'),
(18, 3, 'FR0000133308');

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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `isin_action` (`isin_action`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
