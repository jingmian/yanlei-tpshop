<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_prom_order`;");
E_C("CREATE TABLE `ty_prom_order` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL COMMENT '活动名称',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT '活动类型',
  `money` float(10,2) DEFAULT '0.00' COMMENT '最小金额',
  `expression` varchar(100) DEFAULT NULL COMMENT '优惠体现',
  `description` text COMMENT '活动描述',
  `start_time` int(11) DEFAULT NULL COMMENT '活动开始时间',
  `end_time` int(11) DEFAULT NULL COMMENT '活动结束时间',
  `status` tinyint(1) DEFAULT '1' COMMENT '1正常，0管理员关闭',
  `group` varchar(255) DEFAULT NULL COMMENT '适用范围',
  `store_id` int(11) DEFAULT '0' COMMENT '商家店铺id',
  `orderby` int(10) DEFAULT '0' COMMENT '排序',
  `recommend` tinyint(4) DEFAULT '0' COMMENT '是否推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ty_prom_order` values('1','300张10元代金券等你来拿','3','300.00','11','&lt;p&gt;发的所发生的&lt;/p&gt;','1463587200','1477843200','1','1,5','0','0','1');");
E_D("replace into `ty_prom_order` values('2','测试活动','0','500.00','90','&lt;p&gt;打发斯蒂芬的说法阿道夫&lt;/p&gt;','1463673600','1464624000','1','1,2','0','0','0');");
E_D("replace into `ty_prom_order` values('3','满100立减30','1','100.00','30','&lt;p&gt;2121322132132121dasdasddasdsdsas&lt;br/&gt;&lt;/p&gt;','1467734400','1472918400','1',NULL,'1','0','0');");
E_D("replace into `ty_prom_order` values('4','搜豹店铺购买满100 优惠40元','1','100.00','40','&lt;p&gt;搜豹店铺购买满100 优惠40元&lt;/p&gt;','1468857600','1474041600','1',NULL,'2','0','0');");
E_D("replace into `ty_prom_order` values('5','全场满1000立减40','1','1000.00','40','&lt;p&gt;全场满1000立减40全场满1000立减40全场满1000立减40全场满1000立减40&lt;br/&gt;&lt;/p&gt;','1472486400','1477670400','1',NULL,'3','0','0');");
E_D("replace into `ty_prom_order` values('6','换季清仓大处理','3','500.00','25','&lt;p&gt;换季清仓大处理&lt;br/&gt;&lt;/p&gt;','1477497600','1477843200','1','1,2','1','0','0');");

require("../../inc/footer.php");
?>