<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_ad`;");
E_C("CREATE TABLE `ty_ad` (
  `ad_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '广告位置ID',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '广告类型',
  `ad_name` varchar(60) NOT NULL DEFAULT '' COMMENT '广告名称',
  `ad_link` varchar(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `ad_code` text NOT NULL COMMENT '图片地址',
  `start_time` int(11) NOT NULL DEFAULT '0' COMMENT '投放时间',
  `end_time` int(11) NOT NULL DEFAULT '0' COMMENT '结束时间',
  `link_man` varchar(60) NOT NULL DEFAULT '' COMMENT '添加人',
  `link_email` varchar(60) NOT NULL DEFAULT '' COMMENT '添加人邮箱',
  `link_phone` varchar(60) NOT NULL DEFAULT '' COMMENT '添加人联系电话',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '点击量',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `orderby` smallint(6) DEFAULT '50' COMMENT '排序',
  `target` tinyint(1) DEFAULT '0' COMMENT '是否开启浏览器新窗口',
  `bgcolor` varchar(20) DEFAULT NULL COMMENT '背景颜色',
  PRIMARY KEY (`ad_id`),
  KEY `enabled` (`enabled`) USING BTREE,
  KEY `position_id` (`pid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `ty_ad` values('1','1','0','首页顶部广告栏','javascript:void(0);','/Public/upload/ad/2016/10-26/581047d8d6875.png','1451577600','1767715200','','','','0','1','50','0','#ffffff');");
E_D("replace into `ty_ad` values('28','5012','0','精品套装','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb9f245ca8.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('4','2','0','首页banner轮播2','1','/Public/upload/ad/2016/07-25/5795ab303cb65.jpg','1443542400','1601481600','','','','0','1','50','0','#000000');");
E_D("replace into `ty_ad` values('5','3','0','客户下单赢4999元红包','http://www.dscxy.com','/Public/upload/banner/2015/11-05/563b3e5d8568d.jpg','1451577600','1832515200','','','','0','1','50','0',NULL);");
E_D("replace into `ty_ad` values('6','4','0','TPshop视频教程','javascript:void(0);','/Public/upload/ad/2016/03-11/56e29344381c4.jpg','1452614400','1864137600','','','','0','1','50','0',NULL);");
E_D("replace into `ty_ad` values('7','5','0','荣耀畅玩5X优惠购买','javascript:void(0);','/Public/upload/ad/2016/03-11/56e29344381c4.jpg','1451577600','1863878400','','','','0','1','50','0',NULL);");
E_D("replace into `ty_ad` values('8','6','0','荣耀畅玩5X优惠购买','javascript:void(0);','/Public/upload/ad/2016/03-11/56e29344381c4.jpg','1451577600','1768147200','','','','0','1','50','0',NULL);");
E_D("replace into `ty_ad` values('9','7','0','荣耀4C增强版8GB变16GB','javascript:void(0);','/Public/upload/ad/2016/03-01/56d539e55544a.jpg','1451577600','1547049600','','','','0','1','50','0',NULL);");
E_D("replace into `ty_ad` values('10','8','0','数码产品','javascript:void(0);','/Public/upload/ad/2016/03-01/56d5391451968.jpg','1451577600','1546531200','','','','0','1','50','0','');");
E_D("replace into `ty_ad` values('11','10','0','自定义广告名称','http://dev.tpshop.cn/index.php/Home/Topic/detail/topic_id/1','/Public/upload/ad/2016/09-19/57dfb0fbf3660.jpg','1451577600','1546272000','','','','0','1','0','0','#ff88c4');");
E_D("replace into `ty_ad` values('12','10','0','自定义广告名称','javascript:void();','/Public/upload/ad/2016/09-19/57dfb118f00cd.jpg','1451577600','1546272000','','','','0','1','0','0','#defdb5');");
E_D("replace into `ty_ad` values('13','10','0','自定义广告名称','javascript:void();','/Public/upload/ad/2016/09-19/57dfb1767a5bb.jpg','1451577600','1546272000','','','','0','1','0','0','#ffbfdf');");
E_D("replace into `ty_ad` values('14','15','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb1db1cd32.png','1451577600','1546272000','','','','0','1','0','0','#ffffff');");
E_D("replace into `ty_ad` values('15','15','0','自定义广告名称','javascript:void();','/Public/upload/ad/2016/09-19/57dfb1cb12d06.png','1451577600','1546272000','','','','0','1','0','0','#ffffff');");
E_D("replace into `ty_ad` values('16','11','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/04-25/571d89bd99535.jpg','1451577600','1546272000','','','','0','1','0','0','#fa2c60');");
E_D("replace into `ty_ad` values('17','11','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/04-25/571d8aab4c95c.jpg','1451577600','1546272000','','','','0','1','50','0','#34b304');");
E_D("replace into `ty_ad` values('18','11','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/04-25/571d8b39793fb.jpg','1451577600','1546272000','','','','0','1','0','0','#9507b8');");
E_D("replace into `ty_ad` values('19','204','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/04-25/571d8d5860c91.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('20','204','0','自定义广告名称','','/Public/upload/ad/2016/04-25/571d8d956510b.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('21','201','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/04-25/571d93e4679da.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('22','203','0','自定义广告名称','','/Public/upload/ad/2016/04-25/571d940194117.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('23','100','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb6a9a822f.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('24','101','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb7139a127.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('25','102','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb7613f49b.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('26','99','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb67fe8125.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('29','5011','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb8e934170.jpg','1451577600','1546272000','','','','0','1','0','0','#ffffff');");
E_D("replace into `ty_ad` values('30','50','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb3549027a.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('31','51','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb3f0ef797.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('32','56','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb5b847f32.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('33','57','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb5fbaebee.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('34','58','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb5016a235.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('35','59','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb58972a3d.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('36','60','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb6294245b.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('37','61','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb63954712.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('38','52','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb40d51ddd.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('39','53','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb4484b15a.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('40','54','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb46fdcb7a.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('41','55','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb488bd9fc.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('42','5011','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfb8b56ae3d.jpg','1451577600','1546272000','','','','0','1','0','0','#09ae29');");
E_D("replace into `ty_ad` values('43','5013','0',' 面膜','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfba2283cd4.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('44','5014','0','打造完美男人','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfbab02256f.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('45','5015','0','定型造型','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfbadc1b10d.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('46','5111','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfbb70282a8.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('47','5114','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfbb859e2d7.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('48','5113','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-19/57dfbb9a8ae3d.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('49','400','0','自定义广告名称','javascript:void(0);','/Public/upload/ad/2016/09-20/57e0fb0e02e78.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('50','2','0','自定义广告名称','39','/Public/upload/ad/2016/07-25/5795abec126c4.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('52','51317','0','自定义广告名称','1','/Public/upload/ad/2017/06-26/5950d619b6453.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('53','51317','0','自定义广告名称','','/Public/upload/ad/2017/06-26/5950d6329ff85.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('54','51317','0','自定义广告名称','','/Public/upload/ad/2017/06-26/5950d63e4dace.jpg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('55','51317','0','自定义广告名称','','/Public/upload/ad/2017/03-24/58d5322c2c1e5.jpeg','1451577600','1546272000','','','','0','1','0','0','#000000');");
E_D("replace into `ty_ad` values('56','51317','0','自定义广告名称','','/Public/upload/ad/2017/03-24/58d5325ab49b2.jpeg','1451577600','1546272000','','','','0','1','0','0','#000000');");

require("../../inc/footer.php");
?>