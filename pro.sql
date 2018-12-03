-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 12:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `id` int(255) NOT NULL,
  `no_request` varchar(255) NOT NULL,
  `no_po` varchar(255) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id`, `no_request`, `no_po`, `nama_proyek`, `quantity`, `unit`, `description`, `vendor`, `pic`, `tanggal_request`, `user`) VALUES
(1, '', '4564651', 'nama proyek', '2', 'pcs', 'des proyek a', 'asda', 'arjuna', '24/04/2018', 'admin tester');

-- --------------------------------------------------------

--
-- Table structure for table `po_cancel`
--

CREATE TABLE `po_cancel` (
  `id` int(255) NOT NULL,
  `no_request` varchar(255) NOT NULL,
  `no_po` varchar(255) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po_pending`
--

CREATE TABLE `po_pending` (
  `id` int(255) NOT NULL,
  `no_request` int(255) NOT NULL,
  `no_po` varchar(255) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_pending`
--

INSERT INTO `po_pending` (`id`, `no_request`, `no_po`, `nama_proyek`, `description`, `quantity`, `unit`, `vendor`, `pic`, `status`, `tanggal_request`, `user`) VALUES
(1, 16188, '38', 'TAMAN ANGGREK', 'Lampu Obstraction Philips XGP 500 (1XLED/RD 100-240V)', 1, 'pcs', 'SUMBER CAHAYA BARU', 'arjuna', 'pending', '02/05/2018', 'pisca'),
(2, 419, '44', 'Sequis', 'Hanging Clamp 2', 100, 'pcs', 'Gemilang Matari', 'ade', 'pending', '02/05/2018', 'pisca'),
(3, 1385, '53', 'Distric 8', 'Tikar', 10, 'pcs', 'TOKO 12', 'ade', 'pending', '02/05/2018', 'pisca'),
(4, 1390, '59', 'Distric 8', 'Spoon Packing Tape L25mm T3mm', 50, 'pcs', 'USAHA MANDIRI', 'ade', 'pending', '02/05/2018', 'pisca'),
(5, 1387, '56', 'Distric 8', 'FLEXIBLE TERPAL COKLAT', 50, 'pcs', 'GANDI KARYA TENDA', 'ade', 'pending', '02/05/2018', 'pisca');

-- --------------------------------------------------------

--
-- Table structure for table `po_process`
--

CREATE TABLE `po_process` (
  `id` int(255) NOT NULL,
  `no_request` varchar(255) NOT NULL,
  `no_po` varchar(255) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_process`
--

INSERT INTO `po_process` (`id`, `no_request`, `no_po`, `nama_proyek`, `description`, `quantity`, `unit`, `vendor`, `pic`, `status`, `tanggal_request`, `user`) VALUES
(1, '', '4564651', 'nama proyek', 'des proyek a', '2', 'pcs', 'asda', 'arjuna', 'delivered', '24/04/2018', 'admin tester');

-- --------------------------------------------------------

--
-- Table structure for table `po_request`
--

CREATE TABLE `po_request` (
  `id` int(255) NOT NULL,
  `no_request` varchar(255) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_request`
--

INSERT INTO `po_request` (`id`, `no_request`, `nama_proyek`, `quantity`, `unit`, `description`, `pic`, `tanggal_request`, `user`) VALUES
(1, '466/VERDE 2/IJSM/4/2018', 'VERDE 2', '75', 'pcs', 'BOX APAR 3KG', 'yanti', '28/04/2018', 'pisca'),
(2, '466/VERDE 2/IJSM/4/2018', 'VERDE 2', '75', 'pcs', 'BOX APAR 3 KG', 'yanti', '28/04/2018', 'pisca'),
(10, '456456', 'nama proyek', '99', 'unit', 'des proyek a', 'arjuna', '30/04/2018', 'admin super duper'),
(11, '456456', 'nama proyek', '88', 'unit', 'des proyek a', 'arjuna', '30/04/2018', 'eko hery setiawan'),
(12, '278', 'IJSM', '8', 'pcs', 'Isi Reffil (Oxsigen 4,Nitrogen 3,Acityline 1)', 'ade', '02/05/2018', 'Ade'),
(13, '01', 'IJSM', '62', 'pcs', 'Sendal jepit 6,Kertas A4 5,Helmet MSA Putih 30,Helmet MSA Biru 20,Peluit & Tali 1', 'ade', '02/05/2018', 'Ade'),
(14, '029', 'TK Serenity Taman Palem', '7', 'unit', 'Pintu PVC Bukaan Kiri 3,Pintu PVC Bukaan Kanan 4', 'ade', '02/05/2018', 'Ade'),
(15, '031', 'TK Serenity Taman Palem', '8', 'pcs', 'Keramik Dinding Type KIA Clifton Brown ', 'ade', '02/05/2018', 'Ade'),
(16, '030', 'TK Serenity Taman Palem', '12', 'unit', 'Pintu Type Uno Door 12', 'ade', '02/05/2018', 'Ade'),
(17, '238', 'Pantai Indah Kapuk', '1', 'unit', 'Outdoor 2PK', 'ade', '02/05/2018', 'Ade'),
(18, '096', 'IJSM', '201', 'pcs', 'Kawat Nyamuk 1,Batako 200', 'ade', '02/05/2018', 'Ade'),
(19, '166', 'Danau Biru Alam Sutera', '10', 'pcs', 'Isolasi Nitto', 'ade', '02/05/2018', 'Ade'),
(20, '202', 'Verde II', '1300', 'pcs', 'Dynaset 2000,Longdrat m6x1 1000,Paku rivet 5000,Paku Roffing uk 7mm 5000', 'ade', '02/05/2018', 'Ade'),
(21, '1392', 'Distric 8', '28', 'pcs', 'MTBB 6mm 10pcs,MTBS 6mm 10pcs,MTBS 8mm 5pcs,MTBS 12mm 3pcs', 'ade', '02/05/2018', 'Ade'),
(24, '474', 'Verde II', '12100', 'pcs', 'Dynabolt M10x60 10000,Dynaset M10 2000,Kaca Las Putih 50,Kawat Ayam 50', 'ade', '02/05/2018', 'Ade'),
(25, '16193', 'Taman Anggrek', '25', 'pcs', 'paku 5cm 5kg,Cable Ties 300 2opack', 'ade', '02/05/2018', 'Ade'),
(26, '1387', 'Distric 8', '190', 'pcs', 'Behel 12mm 50btg,Behel 10mm 50btg,Siku 50 30btg,Unp 50 30btg,Flexible coklat 50mtr', 'ade', '02/05/2018', 'Ade'),
(27, '476', 'Verde II', '50', 'btg', 'UNP 100', 'ade', '02/05/2018', 'Ade'),
(28, '293', 'Pantai Indah Kapuk', '8075', 'pcs', 'Styrofoam 20lbr,MTBS 10mm 5pcs,Siku 40 50btg,Longdrat M10 1000btg,Dynabolt M10x48 1000btg,Mur M10 4000Btg,Ring plat M10 2000Btg', 'ade', '02/05/2018', 'Ade');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `ids` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `online` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ids`, `kelas`, `username`, `password`, `nama`, `online`, `image`) VALUES
(1, '180321', 'admin', 'admin', '2742a284f3a438ae0a790125d9cfe892', 'admin tester', 0, '403012iam.jpg'),
(3, '240418', 'admin', 'superduper', '5136850b6c8f3ebc66122188347efda0', 'admin super duper', 0, '68pic.jpg'),
(4, '240418', 'superadmin', 'wsherys', 'e0d06d824da72e1f3393cf9566fe853a', 'eko hery setiawan', 0, '28pic2.jpg'),
(9, '', 'superadmin', 'pisca', '0ce45107d3415fb6ccb490ecafb13379', 'pisca', 0, ''),
(10, '', 'admin', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'Ade', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_cancel`
--
ALTER TABLE `po_cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_pending`
--
ALTER TABLE `po_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_process`
--
ALTER TABLE `po_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_request`
--
ALTER TABLE `po_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `po_cancel`
--
ALTER TABLE `po_cancel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `po_pending`
--
ALTER TABLE `po_pending`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `po_process`
--
ALTER TABLE `po_process`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `po_request`
--
ALTER TABLE `po_request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
