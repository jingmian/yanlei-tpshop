<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_ad_position`;");
E_C("CREATE TABLE `ty_ad_position` (
  `position_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '' COMMENT '广告位置名称',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '广告位宽度',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '广告位高度',
  `position_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '广告描述',
  `position_style` text NOT NULL COMMENT '模板',
  `is_open` tinyint(1) DEFAULT '0' COMMENT '0关闭1开启',
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51318 DEFAULT CHARSET=utf8");
E_D("replace into `ty_ad_position` values('1','首页最顶部大块广告','1200','400','首页顶部的广告位刚打开时弹出来过一会自动缩回去.','','0');");
E_D("replace into `ty_ad_position` values('2','首页banner广告轮播980*400','980','400','首页banner广告轮播980*400','','0');");
E_D("replace into `ty_ad_position` values('3','首页中间1200*160广告条','1200','160','','','0');");
E_D("replace into `ty_ad_position` values('4','首页底部1200*160广告条','1200','160','首页底部的广告位','','0');");
E_D("replace into `ty_ad_position` values('5','团购页面底部广告1200*160','1200','160','团购页面底部广告1200*160','','0');");
E_D("replace into `ty_ad_position` values('6','促销商品底部广告1200*160','1200','160','团购页面底部广告1200*160','','0');");
E_D("replace into `ty_ad_position` values('7','首页公告上方广告位','270','310','首页公告上方的广告位位置','','0');");
E_D("replace into `ty_ad_position` values('8','数码产品','278','312','首页公告下方广告位','','0');");
E_D("replace into `ty_ad_position` values('10','家用电器','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('15','Index页面自动增加广告位 15 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('100','Index页面自动增加广告位 100 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('101','Index页面自动增加广告位 101 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('102','Index页面自动增加广告位 102 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('11','Channel页面自动增加广告位 11 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('81','Index页面自动增加广告位 81 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('82','Index页面自动增加广告位 82 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('83','Index页面自动增加广告位 83 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('84','Index页面自动增加广告位 84 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('85','Index页面自动增加广告位 85 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('86','Index页面自动增加广告位 86 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('87','Index页面自动增加广告位 87 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('201','Channel页面自动增加广告位 201 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('204','Channel页面自动增加广告位 204 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('203','Channel页面自动增加广告位 203 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('200','Channel页面自动增加广告位 200 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('207','Channel页面自动增加广告位 207 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('206','Channel页面自动增加广告位 206 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('216','Channel页面自动增加广告位 216 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('212','Channel页面自动增加广告位 212 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('213','Channel页面自动增加广告位 213 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('211','Channel页面自动增加广告位 211 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('209','Channel页面自动增加广告位 209 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('99','Index页面自动增加广告位 99 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('255','Index页面自动增加广告位 800 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('205','Channel页面自动增加广告位 205 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('210','Channel页面自动增加广告位 210 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('232','Channel页面自动增加广告位 232 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('227','Channel页面自动增加广告位 227 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('221','Channel页面自动增加广告位 221 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('214','Channel页面自动增加广告位 214 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('70','Index页面自动增加广告位 70 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('71','Index页面自动增加广告位 71 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('72','Index页面自动增加广告位 72 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('300','Index页面自动增加广告位 300 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('301','Index页面自动增加广告位 301 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('302','Index页面自动增加广告位 302 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('303','Index页面自动增加广告位 303 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('304','Index页面自动增加广告位 304 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('305','Index页面自动增加广告位 305 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('306','Index页面自动增加广告位 306 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('307','Index页面自动增加广告位 307 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('308','Index页面自动增加广告位 308 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('309','Index页面自动增加广告位 309 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('400','Goods页面自动增加广告位 400 ','0','0','Goods页面','','1');");
E_D("replace into `ty_ad_position` values('5011','Channel页面自动增加广告位 5011 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5012','Channel页面自动增加广告位 5012 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5013','Channel页面自动增加广告位 5013 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5014','Channel页面自动增加广告位 5014 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5015','Channel页面自动增加广告位 5015 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5111','Channel页面自动增加广告位 5111 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5114','Channel页面自动增加广告位 5114 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5113','Channel页面自动增加广告位 5113 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('50','Index页面自动增加广告位 50 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('51','Index页面自动增加广告位 51 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('52','Index页面自动增加广告位 52 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('53','Index页面自动增加广告位 53 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('54','Index页面自动增加广告位 54 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('55','Index页面自动增加广告位 55 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('56','Index页面自动增加广告位 56 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('57','Index页面自动增加广告位 57 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('58','Index页面自动增加广告位 58 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('59','Index页面自动增加广告位 59 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('60','Index页面自动增加广告位 60 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('61','Index页面自动增加广告位 61 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('5021','Channel页面自动增加广告位 5021 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5022','Channel页面自动增加广告位 5022 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5023','Channel页面自动增加广告位 5023 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5024','Channel页面自动增加广告位 5024 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5025','Channel页面自动增加广告位 5025 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5124','Channel页面自动增加广告位 5124 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5123','Channel页面自动增加广告位 5123 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5031','Channel页面自动增加广告位 5031 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5032','Channel页面自动增加广告位 5032 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5033','Channel页面自动增加广告位 5033 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5034','Channel页面自动增加广告位 5034 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5035','Channel页面自动增加广告位 5035 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5136','Channel页面自动增加广告位 5136 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('51316','Channel页面自动增加广告位 51316 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('51312','Channel页面自动增加广告位 51312 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5001','Channel页面自动增加广告位 5001 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5002','Channel页面自动增加广告位 5002 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5003','Channel页面自动增加广告位 5003 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5004','Channel页面自动增加广告位 5004 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('5005','Channel页面自动增加广告位 5005 ','0','0','Channel页面','','1');");
E_D("replace into `ty_ad_position` values('88','Index页面自动增加广告位 88 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('89','Index页面自动增加广告位 89 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('90','Index页面自动增加广告位 90 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('91','Index页面自动增加广告位 91 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('925','Index页面自动增加广告位 925 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('73','Index页面自动增加广告位 73 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('103','Index页面自动增加广告位 103 ','0','0','Index页面','','1');");
E_D("replace into `ty_ad_position` values('51317','微信小程序广告','300','200','微信小程序广告','','1');");

require("../../inc/footer.php");
?>