--
-- Table structure for table `datagis`
--

CREATE TABLE `datagis` (
  `nomor` int(5) NOT NULL auto_increment,
  `x` decimal(8,5) NOT NULL,
  `y` decimal(8,5) NOT NULL,
  `namalokasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY  (`nomor`)
);