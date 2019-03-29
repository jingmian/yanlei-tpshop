<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_spec_item`;");
E_C("CREATE TABLE `ty_spec_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '规格项id',
  `spec_id` int(11) DEFAULT NULL COMMENT '规格id',
  `item` varchar(54) DEFAULT NULL COMMENT '规格项',
  `store_id` int(11) DEFAULT '0' COMMENT '商家id',
  PRIMARY KEY (`id`),
  KEY `spec_id` (`spec_id`),
  KEY `item` (`item`),
  KEY `store_id` (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=168 DEFAULT CHARSET=utf8");
E_D("replace into `ty_spec_item` values('1','1','红色','2');");
E_D("replace into `ty_spec_item` values('18','1','蓝色','2');");
E_D("replace into `ty_spec_item` values('3','1','绿色','2');");
E_D("replace into `ty_spec_item` values('4','2','S','2');");
E_D("replace into `ty_spec_item` values('5','2','M','2');");
E_D("replace into `ty_spec_item` values('30','8','深圳','2');");
E_D("replace into `ty_spec_item` values('7','4','长袖','2');");
E_D("replace into `ty_spec_item` values('8','4','短袖','2');");
E_D("replace into `ty_spec_item` values('31','8','广州','2');");
E_D("replace into `ty_spec_item` values('29','2','L2','2');");
E_D("replace into `ty_spec_item` values('11','5','4G','2');");
E_D("replace into `ty_spec_item` values('12','5','3G','2');");
E_D("replace into `ty_spec_item` values('13','6','16G','2');");
E_D("replace into `ty_spec_item` values('14','6','8G','2');");
E_D("replace into `ty_spec_item` values('28','6','32G','2');");
E_D("replace into `ty_spec_item` values('25','3','羽绒','2');");
E_D("replace into `ty_spec_item` values('17','1','黄色','2');");
E_D("replace into `ty_spec_item` values('24','3','纯棉','2');");
E_D("replace into `ty_spec_item` values('21','7','触屏','2');");
E_D("replace into `ty_spec_item` values('23','7','文字屏','2');");
E_D("replace into `ty_spec_item` values('26','3','蝉丝','2');");
E_D("replace into `ty_spec_item` values('32','8','河南','2');");
E_D("replace into `ty_spec_item` values('36','10','移动','2');");
E_D("replace into `ty_spec_item` values('35','10','联通','2');");
E_D("replace into `ty_spec_item` values('37','10','电信','2');");
E_D("replace into `ty_spec_item` values('38','11','双核','2');");
E_D("replace into `ty_spec_item` values('39','11','4核','2');");
E_D("replace into `ty_spec_item` values('40','11','8核','2');");
E_D("replace into `ty_spec_item` values('41','12','7寸及以下','2');");
E_D("replace into `ty_spec_item` values('42','12','7.8-9寸','2');");
E_D("replace into `ty_spec_item` values('43','12','9-9.7寸','2');");
E_D("replace into `ty_spec_item` values('44','12','10.1寸','2');");
E_D("replace into `ty_spec_item` values('45','12','11.6寸及以上','2');");
E_D("replace into `ty_spec_item` values('46','12','其它','2');");
E_D("replace into `ty_spec_item` values('47','13','16G','2');");
E_D("replace into `ty_spec_item` values('48','13','32G','2');");
E_D("replace into `ty_spec_item` values('49','13','64G','2');");
E_D("replace into `ty_spec_item` values('50','13','128G','2');");
E_D("replace into `ty_spec_item` values('51','14','银白色','2');");
E_D("replace into `ty_spec_item` values('52','14','黑色','2');");
E_D("replace into `ty_spec_item` values('53','15','银色','2');");
E_D("replace into `ty_spec_item` values('54','15','黑色','2');");
E_D("replace into `ty_spec_item` values('55','16','黑色','2');");
E_D("replace into `ty_spec_item` values('56','16','白色','2');");
E_D("replace into `ty_spec_item` values('57','16','金色','2');");
E_D("replace into `ty_spec_item` values('58','17','白色','2');");
E_D("replace into `ty_spec_item` values('59','17','黑色','2');");
E_D("replace into `ty_spec_item` values('60','18','白色','2');");
E_D("replace into `ty_spec_item` values('61','18','黑色','2');");
E_D("replace into `ty_spec_item` values('62','19','30','2');");
E_D("replace into `ty_spec_item` values('63','19','32','2');");
E_D("replace into `ty_spec_item` values('64','19','40','2');");
E_D("replace into `ty_spec_item` values('65','19','42','2');");
E_D("replace into `ty_spec_item` values('66','19','50','2');");
E_D("replace into `ty_spec_item` values('67','19','55','2');");
E_D("replace into `ty_spec_item` values('68','19','58','2');");
E_D("replace into `ty_spec_item` values('69','20','20W','2');");
E_D("replace into `ty_spec_item` values('70','20','22W','2');");
E_D("replace into `ty_spec_item` values('71','20','24W','2');");
E_D("replace into `ty_spec_item` values('72','20','26W','2');");
E_D("replace into `ty_spec_item` values('73','20','28W','2');");
E_D("replace into `ty_spec_item` values('74','20','30W','2');");
E_D("replace into `ty_spec_item` values('75','20','36W','2');");
E_D("replace into `ty_spec_item` values('76','20','72W','2');");
E_D("replace into `ty_spec_item` values('77','21','S','2');");
E_D("replace into `ty_spec_item` values('78','21','M','2');");
E_D("replace into `ty_spec_item` values('79','21','L','2');");
E_D("replace into `ty_spec_item` values('80','21','XL','2');");
E_D("replace into `ty_spec_item` values('81','21','XXL','2');");
E_D("replace into `ty_spec_item` values('82','22','S','2');");
E_D("replace into `ty_spec_item` values('83','22','M','2');");
E_D("replace into `ty_spec_item` values('84','22','L','2');");
E_D("replace into `ty_spec_item` values('85','22','XL','2');");
E_D("replace into `ty_spec_item` values('86','22','XXL','2');");
E_D("replace into `ty_spec_item` values('87','23','70A','2');");
E_D("replace into `ty_spec_item` values('88','23','70B','2');");
E_D("replace into `ty_spec_item` values('89','23','70C','2');");
E_D("replace into `ty_spec_item` values('90','23','75A','2');");
E_D("replace into `ty_spec_item` values('91','23','75B','2');");
E_D("replace into `ty_spec_item` values('92','23','75C','2');");
E_D("replace into `ty_spec_item` values('93','23','80A','2');");
E_D("replace into `ty_spec_item` values('94','23','80B','2');");
E_D("replace into `ty_spec_item` values('95','23','80C','2');");
E_D("replace into `ty_spec_item` values('96','23','85A','2');");
E_D("replace into `ty_spec_item` values('97','23','85B','2');");
E_D("replace into `ty_spec_item` values('98','23','85C','2');");
E_D("replace into `ty_spec_item` values('99','16','银色','2');");
E_D("replace into `ty_spec_item` values('100','16','玫瑰金','2');");
E_D("replace into `ty_spec_item` values('101','6','64G','2');");
E_D("replace into `ty_spec_item` values('102','6','128G','2');");
E_D("replace into `ty_spec_item` values('103','24','土豪金','2');");
E_D("replace into `ty_spec_item` values('104','24','象牙白','2');");
E_D("replace into `ty_spec_item` values('105','24','宝石蓝','2');");
E_D("replace into `ty_spec_item` values('107','25','乐享4G套餐79元','2');");
E_D("replace into `ty_spec_item` values('108','25','乐享4G套餐99元','2');");
E_D("replace into `ty_spec_item` values('109','25','乐享4G套餐129元','2');");
E_D("replace into `ty_spec_item` values('111','25','乐享4G套餐199元','2');");
E_D("replace into `ty_spec_item` values('155','25','测试二下的','2');");
E_D("replace into `ty_spec_item` values('154','25','测试一下的','2');");
E_D("replace into `ty_spec_item` values('112','26','微型卡','2');");
E_D("replace into `ty_spec_item` values('113','26','普通卡','2');");
E_D("replace into `ty_spec_item` values('124','11','16核','2');");
E_D("replace into `ty_spec_item` values('147','11','2222','2');");
E_D("replace into `ty_spec_item` values('134','13','1024G','2');");
E_D("replace into `ty_spec_item` values('146','11','111','2');");
E_D("replace into `ty_spec_item` values('152','5','aaaaa','2');");
E_D("replace into `ty_spec_item` values('153','5','bbbbb','2');");
E_D("replace into `ty_spec_item` values('106','25','乐享4G套餐59元','2');");
E_D("replace into `ty_spec_item` values('110','25','乐享4G套餐169元','2');");
E_D("replace into `ty_spec_item` values('156','28','A罩','3');");
E_D("replace into `ty_spec_item` values('157','28','B罩','3');");
E_D("replace into `ty_spec_item` values('158','28','C罩','3');");
E_D("replace into `ty_spec_item` values('159','28','D罩','3');");
E_D("replace into `ty_spec_item` values('160','29','纯棉','3');");
E_D("replace into `ty_spec_item` values('161','29','丝绸','3');");
E_D("replace into `ty_spec_item` values('162','11','四核CPU2','3');");
E_D("replace into `ty_spec_item` values('163','13','16GB','3');");
E_D("replace into `ty_spec_item` values('164','16','红色','3');");
E_D("replace into `ty_spec_item` values('167','11','4he','3');");

require("../../inc/footer.php");
?>