/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 10.1.21-MariaDB : Database - bjgl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bjgl` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `bjgl`;

/*Table structure for table `addnews` */

DROP TABLE IF EXISTS `addnews`;

CREATE TABLE `addnews` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `content` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `addnews` */

insert  into `addnews`(`id`,`time`,`content`) values (1,'2017-05-18 17:28:32','111111111111111111111111111111111111111111111111111'),(2,'2017-05-18 17:30:05','2222222222222222222222222'),(3,'2017-05-18 17:31:20','333333333333333333333333333333333333333333'),(4,'2017-05-18 17:32:14','444444444444444444444444444444'),(5,'2017-05-18 17:33:05','555555555555555555555555555'),(18,'2017-05-19 09:36:00','小伙伴，约吗'),(17,'2017-05-19 09:35:03','今天放假了......');

/*Table structure for table `gerexinxi` */

DROP TABLE IF EXISTS `gerexinxi`;

CREATE TABLE `gerexinxi` (
  `id` int(200) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qq` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weixin` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gongsi` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zuoyouming` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `gerexinxi` */

insert  into `gerexinxi`(`id`,`username`,`sex`,`telephone`,`qq`,`weixin`,`gongsi`,`zuoyouming`,`address`,`email`) values (4,'李鹏','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(3,'张丙辛','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(2,'曹义超','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(5,'蒋西媛','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(6,'禹丹丹','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(7,'邬翠翠','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(8,'豆影影','','','','','','','',''),(9,'马超杰','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(10,'常玉瑶','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(11,'杨睿','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(12,'韩黎明','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(13,'候立源','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(14,'刘诗琦','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(15,'陈红炎','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(16,'朱晓玲','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(17,'樊晓东','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(18,'孙玉杰','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(19,'李少展','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写'),(20,'刘飞','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写');

/*Table structure for table `liaotianshi` */

DROP TABLE IF EXISTS `liaotianshi`;

CREATE TABLE `liaotianshi` (
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `liaotianshi` */

insert  into `liaotianshi`(`username`,`content`,`id`) values ('刘飞','呵呵呵呵呵呵呵',26),('曹义超','钱是王八蛋',25),('啦啦','12356685899',24),('123','啦啦啦啦啦啦啦啦',23),('123','呵呵呵呵呵呵呵',22);

/*Table structure for table `liuyanbiao` */

DROP TABLE IF EXISTS `liuyanbiao`;

CREATE TABLE `liuyanbiao` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `content` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `liuyanbiao` */

insert  into `liuyanbiao`(`index`,`time`,`content`) values (1,'2017-05-15 15:31:46','加油！！！！'),(2,'2017-05-16 09:18:17','奔跑吧！我的丙辛'),(3,'2017-05-16 15:18:54','杨睿我们的颜值担当\n'),(4,'2017-05-16 15:19:19','寇老师是个好“人”'),(5,'2017-05-16 15:33:18','阿丙，丙夫人呢？\n'),(6,'2017-05-16 16:30:58','奔跑吧 学霸'),(7,'2017-05-19 09:38:29','阿丹，我喜欢你');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`type`) values (3,'张丙辛','111','普通用户'),(2,'曹义超','111','普通用户'),(1,'123','123','管理员'),(4,'李鹏','111','普通用户'),(5,'蒋西媛','111','普通用户'),(6,'禹丹丹','111','普通用户'),(7,'邬翠翠','111','普通用户'),(8,'豆影影','111','普通用户'),(9,'马超杰','111','普通用户'),(10,'常玉瑶','111','普通用户'),(11,'杨睿','111','普通用户'),(12,'韩黎明','111','普通用户'),(13,'候立源','111','普通用户'),(14,'刘诗琦','111','普通用户'),(15,'陈红炎','111','普通用户'),(16,'朱晓玲','111','普通用户'),(17,'樊晓东','111','普通用户'),(18,'孙玉杰','111','普通用户'),(19,'李少展','111','普通用户'),(20,'刘飞','111','普通用户'),(0,NULL,NULL,NULL);

/*Table structure for table `wenjianshangchuang` */

DROP TABLE IF EXISTS `wenjianshangchuang`;

CREATE TABLE `wenjianshangchuang` (
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pingjia` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `wenjianshangchuang` */

insert  into `wenjianshangchuang`(`name`,`type`,`pingjia`,`username`) values ('数据库.png','image/png','hello','豆影影'),('QQScLauncher.exe','application/x-msdownload','哈哈哈哈哈哈','邬翠翠'),('QQMusic.exe','application/x-msdownload','333333','曹义超'),('chrome.exe','application/x-msdownload','1111111','曹义超'),('chrome.exe','application/x-msdownload','2222222','曹义超');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
