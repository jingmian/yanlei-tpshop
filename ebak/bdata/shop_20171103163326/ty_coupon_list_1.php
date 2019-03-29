<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_coupon_list`;");
E_C("CREATE TABLE `ty_coupon_list` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cid` int(8) NOT NULL DEFAULT '0' COMMENT '优惠券 对应coupon表id',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '发放类型 1 按订单发放 2 注册 3 邀请 4 按用户发放',
  `uid` int(8) NOT NULL DEFAULT '0' COMMENT '用户id',
  `order_id` int(8) NOT NULL DEFAULT '0' COMMENT '订单id',
  `use_time` int(11) NOT NULL DEFAULT '0' COMMENT '使用时间',
  `code` varchar(10) DEFAULT '' COMMENT '优惠券兑换码',
  `send_time` int(11) NOT NULL DEFAULT '0' COMMENT '发放时间',
  `store_id` int(10) DEFAULT '0' COMMENT '商家店铺ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8");
E_D("replace into `ty_coupon_list` values('6','19','4','0','0','0','3lejBTmC','1468936840','2');");
E_D("replace into `ty_coupon_list` values('2','18','1','1','232','1470308699','','1468936438','1');");
E_D("replace into `ty_coupon_list` values('3','18','1','1','268','1471428895','','1468936438','1');");
E_D("replace into `ty_coupon_list` values('4','21','1','1','297','1472460888','','1468936652','2');");
E_D("replace into `ty_coupon_list` values('5','21','1','1','233','1470308699','','1468936652','2');");
E_D("replace into `ty_coupon_list` values('7','19','4','0','0','0','u58CEMhi','1468936840','1');");
E_D("replace into `ty_coupon_list` values('8','19','4','0','0','0','K5d3EQGK','1468936840','1');");
E_D("replace into `ty_coupon_list` values('9','19','4','0','0','0','z8g83PxE','1468936840','2');");
E_D("replace into `ty_coupon_list` values('10','19','4','0','0','0','ET4DHvso','1468936840','2');");
E_D("replace into `ty_coupon_list` values('11','11','0','1','0','0','','1469263583','0');");
E_D("replace into `ty_coupon_list` values('12','11','0','1','0','0','','1469273826','0');");
E_D("replace into `ty_coupon_list` values('13','11','0','1','0','0','','1469277325','0');");
E_D("replace into `ty_coupon_list` values('14','11','0','1','0','0','','1470551411','0');");
E_D("replace into `ty_coupon_list` values('15','20','0','1','0','0','','1471527280','0');");
E_D("replace into `ty_coupon_list` values('16','20','0','1','0','0','','1471528401','0');");
E_D("replace into `ty_coupon_list` values('17','20','0','1','0','0','','1471529130','0');");
E_D("replace into `ty_coupon_list` values('18','11','0','1','0','0','','1472284815','0');");
E_D("replace into `ty_coupon_list` values('19','11','0','1','0','0','','1472288657','0');");
E_D("replace into `ty_coupon_list` values('20','11','0','1','0','0','','1472543071','0');");
E_D("replace into `ty_coupon_list` values('21','22','1','1','318','1472545711','','1472545093','3');");
E_D("replace into `ty_coupon_list` values('22','22','1','1','320','1472546470','','1472546427','3');");
E_D("replace into `ty_coupon_list` values('23','22','1','1','321','1475232400','','1475232362','3');");
E_D("replace into `ty_coupon_list` values('24','23','1','24','0','0','','1477294754','1');");
E_D("replace into `ty_coupon_list` values('25','23','1','1','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('26','23','1','2','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('27','23','1','5','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('28','23','1','17','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('29','23','1','14','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('30','23','1','13','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('31','23','1','18','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('32','23','1','19','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('33','23','1','20','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('34','23','1','21','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('35','23','1','22','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('36','23','1','23','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('37','23','1','24','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('38','23','1','25','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('39','23','1','26','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('40','23','1','27','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('41','23','1','28','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('42','23','1','29','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('43','23','1','30','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('44','23','1','31','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('45','23','1','32','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('46','23','1','33','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('47','23','1','34','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('48','23','1','35','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('49','23','1','36','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('50','23','1','37','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('51','23','1','38','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('52','23','1','39','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('53','23','1','40','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('54','23','1','41','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('55','23','1','42','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('56','23','1','43','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('57','23','1','44','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('58','23','1','45','0','0','','1477465550','1');");
E_D("replace into `ty_coupon_list` values('59','23','1','45','0','0','','1477465640','1');");
E_D("replace into `ty_coupon_list` values('60','23','1','1','342','1477538597','','1477465869','1');");
E_D("replace into `ty_coupon_list` values('63','25','0','1','0','0','','1477566074','1');");
E_D("replace into `ty_coupon_list` values('64','18','1','55','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('65','18','1','2','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('66','18','1','5','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('67','18','1','17','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('68','18','1','14','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('69','18','1','13','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('70','18','1','18','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('71','18','1','19','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('72','18','1','20','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('73','18','1','21','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('74','18','1','22','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('75','18','1','23','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('76','18','1','24','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('77','18','1','25','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('78','18','1','26','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('79','18','1','27','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('80','18','1','28','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('81','18','1','29','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('82','18','1','30','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('83','18','1','31','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('84','18','1','32','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('85','18','1','33','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('86','18','1','34','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('87','18','1','35','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('88','18','1','36','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('89','18','1','37','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('90','18','1','38','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('91','18','1','39','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('92','18','1','40','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('93','18','1','41','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('94','18','1','42','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('95','18','1','43','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('96','18','1','44','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('97','18','1','45','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('98','18','1','46','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('99','18','1','47','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('100','18','1','48','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('101','18','1','1','361','1490515746','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('102','18','1','56','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('103','18','1','59','0','0','','1490513613','1');");
E_D("replace into `ty_coupon_list` values('104','18','1','55','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('105','18','1','2','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('106','18','1','5','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('107','18','1','17','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('108','18','1','14','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('109','18','1','13','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('110','18','1','18','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('111','18','1','19','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('112','18','1','20','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('113','18','1','21','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('114','18','1','22','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('115','18','1','23','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('116','18','1','24','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('117','18','1','25','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('118','18','1','26','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('119','18','1','27','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('120','18','1','28','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('121','18','1','29','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('122','18','1','30','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('123','18','1','31','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('124','18','1','32','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('125','18','1','33','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('126','18','1','34','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('127','18','1','35','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('128','18','1','36','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('129','18','1','37','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('130','18','1','38','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('131','18','1','39','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('132','18','1','40','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('133','18','1','41','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('134','18','1','42','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('135','18','1','43','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('136','18','1','44','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('137','18','1','45','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('138','18','1','46','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('139','18','1','47','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('140','18','1','48','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('141','18','1','1','372','1493095570','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('142','18','1','56','0','0','','1490514625','1');");
E_D("replace into `ty_coupon_list` values('143','18','1','59','0','0','','1490514625','1');");

require("../../inc/footer.php");
?>