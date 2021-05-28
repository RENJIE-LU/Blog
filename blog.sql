
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog`;



DROP TABLE IF EXISTS `blog`;

CREATE TABLE `table` (
  `id` int(11) NOT NULL,
  `hits` int(15) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `date` date DEFAULT NULL
  `constants` text DEFAULT NULL
  PRIMARY KEY (`Id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

insert  into `table`(`id`,`hits`,`title`,`date`,`constatns`) values 

(1,'RENJIE-lu','Self-learning','2021-05-26','This is my first constants of my first learing proposal')