/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.6.21 : Database - outbond
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`outbond` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `outbond`;

/*Table structure for table `jenis_paket` */

DROP TABLE IF EXISTS `jenis_paket`;

CREATE TABLE `jenis_paket` (
  `kd_paket` int(11) NOT NULL,
  `Id_paket` int(11) NOT NULL,
  `jenis_paket` varchar(32) NOT NULL,
  `Total_harga` int(11) NOT NULL,
  PRIMARY KEY (`kd_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_paket` */

/*Table structure for table `paket_oubond` */

DROP TABLE IF EXISTS `paket_oubond`;

CREATE TABLE `paket_oubond` (
  `Id_paket` int(5) NOT NULL AUTO_INCREMENT,
  `Kd_paket` varchar(20) NOT NULL,
  `Jenis_paket` varchar(20) NOT NULL,
  `Harga` int(10) NOT NULL,
  `Fasilitas` varchar(64) NOT NULL,
  `Kegiatan` varchar(64) NOT NULL,
  PRIMARY KEY (`Id_paket`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `paket_oubond` */

insert  into `paket_oubond`(`Id_paket`,`Kd_paket`,`Jenis_paket`,`Harga`,`Fasilitas`,`Kegiatan`) values 
(5,'PKT06','Jenis_paket',0,'gazebo, pendopo utama 2','tracking sungai dan low impact gamess');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `Id_pemesanan` int(10) NOT NULL,
  `Kode_pemesanan` varchar(11) NOT NULL,
  `Kd_paket` varchar(20) DEFAULT NULL,
  `Tgl_pemesanan` date DEFAULT NULL,
  `Jml_peserta` int(10) DEFAULT NULL,
  `Total_harga` int(11) NOT NULL,
  PRIMARY KEY (`Id_pemesanan`),
  UNIQUE KEY `Kode_pemesanan` (`Kode_pemesanan`),
  UNIQUE KEY `Kd_paket` (`Kd_paket`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`,`status`) values 
(3,'admin','admin@mail.com','admin',0),
(4,'agus','agus@mail.com','1234',1);

/*Table structure for table `wisatawan` */

DROP TABLE IF EXISTS `wisatawan`;

CREATE TABLE `wisatawan` (
  `Id_wisatawan` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Nama_instansi` varchar(100) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_telp` int(11) NOT NULL,
  PRIMARY KEY (`Id_wisatawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wisatawan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
