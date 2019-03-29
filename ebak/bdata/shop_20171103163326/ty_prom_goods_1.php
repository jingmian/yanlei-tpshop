<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_prom_goods`;");
E_C("CREATE TABLE `ty_prom_goods` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '活动ID',
  `name` varchar(60) NOT NULL COMMENT '促销活动名称',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT '促销类型',
  `expression` varchar(100) NOT NULL COMMENT '优惠体现',
  `description` text COMMENT '活动描述',
  `start_time` int(11) NOT NULL COMMENT '活动开始时间',
  `end_time` int(11) NOT NULL COMMENT '活动结束时间',
  `status` tinyint(1) DEFAULT '1' COMMENT '1正常，0管理员关闭',
  `group` varchar(255) DEFAULT NULL COMMENT '适用范围',
  `store_id` int(10) DEFAULT '0' COMMENT '商家店铺id',
  `orderby` int(10) DEFAULT '0' COMMENT '排序',
  `prom_img` varchar(150) DEFAULT NULL COMMENT '活动宣传图片',
  `recommend` tinyint(1) DEFAULT '0' COMMENT '是否推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ty_prom_goods` values('1','开业庆典','0','90','&lt;p&gt;发的告诉对方过放电&lt;/p&gt;','1463673600','1475164800','1','1,2','0','0',NULL,'0');");
E_D("replace into `ty_prom_goods` values('3','34232aaaa','0','50','&lt;p&gt;423423423aaaa&lt;br/&gt;&lt;/p&gt;','1467734400','1472918400','1','3,4','2','0',NULL,'0');");
E_D("replace into `ty_prom_goods` values('6','店铺五周年庆优惠大酬宾活动','0','68','&lt;p&gt;店铺武周年庆优惠大酬宾活动商品促销活动&lt;/p&gt;','1477497600','1477843200','1','1','1','0',NULL,'0');");

require("../../inc/footer.php");
?>