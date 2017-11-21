# Host: localhost  (Version 5.5.5-10.1.13-MariaDB)
# Date: 2016-08-29 15:34:50
# Generator: MySQL-Front 5.3  (Build 6.26)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(100) DEFAULT NULL,
  `sifre` varchar(100) DEFAULT NULL,
  `yetki` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefon` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'rkarali','123',1,NULL,NULL);

#
# Structure for table "ayarlar"
#

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `hakkimizda` text,
  `iletisim` text,
  `email` varchar(255) DEFAULT NULL,
  `kisahakkimiz` varchar(150) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "ayarlar"
#

INSERT INTO `ayarlar` VALUES (1,'aaa','klkh',NULL,'<p><strong>Neden biz? Akseli emlak olarak uzman ve profesyonel kadromuzla &uuml;lkemizde emlak yatırımı alanında g&uuml;venilir ve lider bir emlak kuruluşuyuz.</strong></p>\r\n\r\n<p>biz ilk&ouml;nce insan diyor , yeni yaşamlar alıyor yeni ufuklar a&ccedil;ıyoruz.<br />\r\n*kaliteli ve d&uuml;zeyli emlak&ccedil;ılıkla beraber m&uuml;şteri memnuniyetini esas almak işimizdir<br />\r\n*emlak sekt&ouml;r&uuml;nde doğru ve d&uuml;r&uuml;st projelerin yanındayız<br />\r\n*m&uuml;şterilerimizin ne zaman ve nasıl doğru yatırım yapacakları konusunda bilgilendiriyoruz<br />\r\n*biz sekt&ouml;r&uuml;m&uuml;zdeki t&uuml;m gayrimenkul şirketlerini benimsiyoruz ve onlarla beraber &ccedil;alışıyoruz<br />\r\n*satış sunum gibi konularda en uygun &ccedil;&ouml;z&uuml;mlerin yanında alternatif &ccedil;&ouml;z&uuml;mlerde sunuyoruz<br />\r\n*teknolojik gelişmelere a&ccedil;ığız ve kullanıyoruz<br />\r\n*arz ve talebe y&ouml;nelik en doğru &ccedil;&ouml;z&uuml;mleri &uuml;retiyoruz<br />\r\n*yasalar ve y&ouml;netmeliklere uygun hizmet veriyoruz</p>\r\n','Mobile : 0 (507) 284 76 93 ',NULL,'Neden biz? Akseli emlak olarak uzman ve profesyonel kadromuzla ülkemizde emlak yatırımı alanında güven verir','FATİH MAH. YUNUS EMRE CAD.MENEKŞE SOK.NO:26/B PURSAKLAR /ANKARA');

#
# Structure for table "konutlar"
#

DROP TABLE IF EXISTS `konutlar`;
CREATE TABLE `konutlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) DEFAULT NULL,
  `turu` varchar(255) DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `miktar` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  `kisaaciklama` text,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "konutlar"
#

INSERT INTO `konutlar` VALUES (4,'Vali Konakları','1+1','45000','5','<p>xcvxcvasdas</p>\r\n','alacan mı?','12.jpg'),(7,'Paşa Konağı','Villa','36000','1','<p><strong><em>o bi&ccedil;im</em></strong></p>\r\n','alacan mı?','22.jpg'),(8,'Maraba Evi','Villa','50000','1','<p><strong><em>mal sağlam baba</em></strong></p>\r\n','alacan mı?','32.jpg'),(9,'Dadaş Malikanesi','Villa','26000','1','','alacan mı?','43.jpg');

#
# Structure for table "mesajlar"
#

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mesaj` varchar(255) DEFAULT NULL,
  `durum` varchar(10) DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "mesajlar"
#

INSERT INTO `mesajlar` VALUES (1,'ramazan karalı','rkarali@gmail.com','selam babo','Yeni','2016-08-19 02:05:51'),(4,'sülo','sulo@gmail.com',' nabarsın ula davar?','Yeni','2016-08-22 14:20:53'),(5,'emin','emin@gmail.com',' dmknflgnsdlfkng','Yeni','2016-08-22 15:27:12'),(6,'hodja','asd123@gmail.com',' haho baboli','Yeni','2016-08-23 03:55:49');
