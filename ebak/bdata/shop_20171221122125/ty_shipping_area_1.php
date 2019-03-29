<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_shipping_area`;");
E_C("CREATE TABLE `ty_shipping_area` (
  `shipping_area_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id自增',
  `shipping_area_name` varchar(150) NOT NULL DEFAULT '' COMMENT '配送模板名称',
  `shipping_code` varchar(50) NOT NULL DEFAULT '0' COMMENT '物流公司',
  `config` text NOT NULL COMMENT '物流配置',
  `update_time` int(11) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT '0' COMMENT '是否默认',
  `is_close` tinyint(1) DEFAULT '1' COMMENT '是否关闭：1开启，0关闭',
  `store_id` int(11) DEFAULT '0' COMMENT '商家id',
  PRIMARY KEY (`shipping_area_id`),
  KEY `shipping_id` (`shipping_code`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `ty_shipping_area` values('43','全国其他地区','shunfeng','a:4:{s:12:\"first_weight\";s:4:\"1000\";s:13:\"second_weight\";s:4:\"2000\";s:5:\"money\";s:2:\"12\";s:9:\"add_money\";s:1:\"2\";}',NULL,'1','1','1');");
E_D("replace into `ty_shipping_area` values('44','全国其他地区','shentong','a:4:{s:12:\"first_weight\";s:4:\"1000\";s:13:\"second_weight\";s:4:\"2000\";s:5:\"money\";s:2:\"12\";s:9:\"add_money\";s:1:\"2\";}',NULL,'1','1','1');");
E_D("replace into `ty_shipping_area` values('45','全国其他地区','shentong','a:4:{s:12:\"first_weight\";s:4:\"1000\";s:13:\"second_weight\";s:4:\"2000\";s:5:\"money\";s:2:\"12\";s:9:\"add_money\";s:1:\"2\";}',NULL,'1','1','2');");
E_D("replace into `ty_shipping_area` values('46','全国其他地区','shunfeng','a:4:{s:12:\"first_weight\";s:4:\"1000\";s:13:\"second_weight\";s:4:\"2000\";s:5:\"money\";s:2:\"12\";s:9:\"add_money\";s:1:\"2\";}',NULL,'1','1','3');");
E_D("replace into `ty_shipping_area` values('47','全国其他地区','shentong','a:4:{s:12:\"first_weight\";s:4:\"1000\";s:13:\"second_weight\";s:4:\"2000\";s:5:\"money\";s:2:\"12\";s:9:\"add_money\";s:1:\"2\";}',NULL,'1','1','3');");
E_D("replace into `ty_shipping_area` values('48','全国其他地区','shunfeng','a:4:{s:12:\"first_weight\";s:4:\"1000\";s:13:\"second_weight\";s:4:\"2000\";s:5:\"money\";s:2:\"12\";s:9:\"add_money\";s:1:\"2\";}',NULL,'1','0','2');");
E_D("replace into `ty_shipping_area` values('49','','shentong','a:4:{s:12:\"first_weight\";s:3:\"500\";s:5:\"money\";s:0:\"\";s:13:\"second_weight\";s:3:\"500\";s:9:\"add_money\";s:0:\"\";}',NULL,'0','1','1');");
E_D("replace into `ty_shipping_area` values('50','','shentong','a:4:{s:12:\"first_weight\";s:3:\"500\";s:5:\"money\";s:0:\"\";s:13:\"second_weight\";s:3:\"500\";s:9:\"add_money\";s:0:\"\";}',NULL,'0','1','1');");

require("../../inc/footer.php");
?>