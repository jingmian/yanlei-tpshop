<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_user_address`;");
E_C("CREATE TABLE `ty_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '' COMMENT '收货人',
  `email` varchar(60) NOT NULL DEFAULT '' COMMENT '邮箱地址',
  `country` int(11) NOT NULL DEFAULT '0' COMMENT '国家',
  `province` int(11) NOT NULL DEFAULT '0' COMMENT '省份',
  `city` int(11) NOT NULL DEFAULT '0' COMMENT '城市',
  `district` int(11) NOT NULL DEFAULT '0' COMMENT '地区',
  `twon` int(11) DEFAULT '0' COMMENT '乡镇',
  `address` varchar(250) NOT NULL DEFAULT '' COMMENT '地址',
  `zipcode` varchar(60) NOT NULL DEFAULT '' COMMENT '邮政编码',
  `mobile` varchar(60) NOT NULL DEFAULT '' COMMENT '手机',
  `is_default` tinyint(1) DEFAULT '0' COMMENT '默认收货地址',
  `is_pickup` int(11) DEFAULT '0',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8");
E_D("replace into `ty_user_address` values('35','1','张谷泉','','0','5827','6088','6099','6104','南山区西丽镇留仙大道1001号','518000','15872123653','1','0');");
E_D("replace into `ty_user_address` values('22','35','张谷泉','','0','5827','6384','6386','6390','南山区西丽镇留仙大道1001号','518000','15872123653','1','0');");
E_D("replace into `ty_user_address` values('8','20','某大街某号 2','','0','19','241','2370','0',' 某街道办 .','','13554754891','0','0');");
E_D("replace into `ty_user_address` values('9','20','某大街某号 2','','0','1','36','397','0',' ujiuo;iiergf','','13554745866','0','0');");
E_D("replace into `ty_user_address` values('10','21','哈哈','','0','2','37','401','0','记录贴','518116','13800138000','0','0');");
E_D("replace into `ty_user_address` values('11','23',' 测试','','0','1','2','3','0','测试','','13012345678','0','0');");
E_D("replace into `ty_user_address` values('12','24','吴亚朋','','0','28240','28558','28571','28574','南山区西丽镇留仙大道1001号','518000','13410170107','0','0');");
E_D("replace into `ty_user_address` values('13','24','吴亚朋','wyp001@163.com','0','28240','28558','28581','0','南山区西丽镇留仙大道1001号','','13410170107','1','0');");
E_D("replace into `ty_user_address` values('14','25','吴亚朋','','1','28240','28558','28581','28584','南山区西丽镇留仙大道1001号','518000','13410170107','0','0');");
E_D("replace into `ty_user_address` values('15','25','吴亚朋','','1','28240','28558','28560','28564','南山区西丽镇留仙大道1001号','518000','13410170107','0','0');");
E_D("replace into `ty_user_address` values('16','26','吴亚朋','','1','28240','28558','28581','28582','南山区西丽镇留仙大道1001号','518000','13410170107','1','0');");
E_D("replace into `ty_user_address` values('17','26','吴亚朋','','1','28240','28241','28266','28272','南山区西丽镇留仙大道1001号','518055','13410170107','0','0');");
E_D("replace into `ty_user_address` values('18','26','吴亚朋','','1','28240','28241','28266','28272','南山区西丽镇留仙大道1001号','518055','13410170107','0','0');");
E_D("replace into `ty_user_address` values('20','34','靠你妹','','1','636','936','937','0','北京朝阳区来广营','334345','13800138068','1','0');");
E_D("replace into `ty_user_address` values('36','58','吕束俊','','1','636','1188','1208','0','吕束俊','224312','18251122249','1','0');");
E_D("replace into `ty_user_address` values('38','61','test','','1','1','2','3','0','test','520000','18776885525','1','0');");
E_D("replace into `ty_user_address` values('39','72','史强','','1','45753','45754','45813','0','果园路','','15209583253','1','0');");
E_D("replace into `ty_user_address` values('40','69','11','','1','636','1188','1208','0','ll','222','18251122249','1','0');");
E_D("replace into `ty_user_address` values('41','78','呵呵','','1','41877','41878','41880','0','妮子洗衣','','18993254658','1','0');");
E_D("replace into `ty_user_address` values('42','82','shuai','','1','338','569','586','0','123','1323','18813339988','1','0');");
E_D("replace into `ty_user_address` values('43','83','vccv','','1','1','300','301','0','gchj','','13212345678','1','0');");
E_D("replace into `ty_user_address` values('44','55','222','','0','1','300','301','302','222','2','13342343432','1','0');");
E_D("replace into `ty_user_address` values('45','105','王宁','','1','21387','21388','0','0','二七区豫港大厦','450000','13783413565','1','0');");
E_D("replace into `ty_user_address` values('46','107','哈哈哈','','1','3102','3431','3454','0','哈哈哈','655677','13458886667','0','0');");
E_D("replace into `ty_user_address` values('47','107','哈哈哈','','1','3102','3431','3454','0','哈哈哈','655677','13458886667','1','0');");
E_D("replace into `ty_user_address` values('48','98','这么','','1','1','2','3','0','这么大','','15876764567','1','0');");
E_D("replace into `ty_user_address` values('49','88','gfghh','','1','338','569','586','0','gfgg','123456','13212345678','1','0');");
E_D("replace into `ty_user_address` values('50','123','gdgh','','1','1','2','14','15','gdgg','123556','13212345678','1','0');");
E_D("replace into `ty_user_address` values('51','125','123','','0','1','2','3','4','123','','15517556749','1','0');");
E_D("replace into `ty_user_address` values('52','126','123','','1','1','2','3','0','123','','15517556749','1','0');");
E_D("replace into `ty_user_address` values('53','128','1','','1','1','2','3','0','1','','18051294666','1','0');");

require("../../inc/footer.php");
?>