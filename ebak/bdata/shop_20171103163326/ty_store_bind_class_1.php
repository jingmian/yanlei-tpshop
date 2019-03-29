<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_bind_class`;");
E_C("CREATE TABLE `ty_store_bind_class` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) unsigned DEFAULT '0' COMMENT '店铺ID',
  `commis_rate` tinyint(4) unsigned DEFAULT '0' COMMENT '佣金比例',
  `class_1` mediumint(9) unsigned DEFAULT '0' COMMENT '一级分类',
  `class_2` mediumint(9) unsigned DEFAULT '0' COMMENT '二级分类',
  `class_3` mediumint(9) unsigned DEFAULT '0' COMMENT '三级分类',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态0审核中1审核通过 2审核失败',
  PRIMARY KEY (`bid`),
  KEY `store_id` (`store_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='店铺可发布商品类目表'");
E_D("replace into `ty_store_bind_class` values('2','3','0','1','12','100','1');");
E_D("replace into `ty_store_bind_class` values('3','3','0','1','12','101','1');");
E_D("replace into `ty_store_bind_class` values('4','3','0','1','12','102','1');");
E_D("replace into `ty_store_bind_class` values('5','3','0','5','41','400','1');");
E_D("replace into `ty_store_bind_class` values('6','3','0','5','41','401','1');");
E_D("replace into `ty_store_bind_class` values('7','3','0','5','41','384','1');");
E_D("replace into `ty_store_bind_class` values('8','3','0','5','41','390','1');");
E_D("replace into `ty_store_bind_class` values('9','3','0','5','41','389','1');");
E_D("replace into `ty_store_bind_class` values('10','2','0','1','12','100','1');");
E_D("replace into `ty_store_bind_class` values('11','2','0','3','27','194','1');");
E_D("replace into `ty_store_bind_class` values('12','4','13','2','20','133','1');");
E_D("replace into `ty_store_bind_class` values('13','5','0','7','53','482','1');");
E_D("replace into `ty_store_bind_class` values('14','2','0','3','25','162','1');");
E_D("replace into `ty_store_bind_class` values('15','3','13','2','19','126','1');");
E_D("replace into `ty_store_bind_class` values('16','1','0','1','12','101','0');");
E_D("replace into `ty_store_bind_class` values('17','2','0','9','67','632','1');");
E_D("replace into `ty_store_bind_class` values('18','1','10','1','12','100','0');");

require("../../inc/footer.php");
?>