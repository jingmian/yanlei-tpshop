<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_goods_class`;");
E_C("CREATE TABLE `ty_store_goods_class` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '索引ID',
  `cat_name` varchar(50) NOT NULL COMMENT '店铺商品分类名称',
  `parent_id` int(11) NOT NULL COMMENT '父级id',
  `store_id` int(11) NOT NULL DEFAULT '0' COMMENT '店铺id',
  `cat_sort` int(11) NOT NULL DEFAULT '0' COMMENT '商品分类排序',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '分类显示状态',
  `is_nav_show` tinyint(1) DEFAULT '0' COMMENT '是否显示在导航栏',
  `is_recommend` tinyint(1) DEFAULT '0' COMMENT '是否首页推荐',
  `show_num` smallint(4) DEFAULT '4' COMMENT '首页此类商品显示数量',
  PRIMARY KEY (`cat_id`),
  KEY `stc_parent_id` (`parent_id`,`cat_sort`) USING BTREE,
  KEY `store_id` (`store_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='店铺商品分类表'");
E_D("replace into `ty_store_goods_class` values('9','女士内衣','0','3','52','1','1','1','10');");
E_D("replace into `ty_store_goods_class` values('10','红色内衣','9','3','51','0','0','0','4');");
E_D("replace into `ty_store_goods_class` values('13','夹克','0','2','1','1','0','1','6');");
E_D("replace into `ty_store_goods_class` values('14','休闲裤','0','2','3','1','1','1','10');");
E_D("replace into `ty_store_goods_class` values('15','时尚花纹','13','2','0','1','0','1','4');");
E_D("replace into `ty_store_goods_class` values('16','简约纯色','13','2','0','1','1','1','4');");
E_D("replace into `ty_store_goods_class` values('17','修身直筒','14','2','3','1','1','1','4');");
E_D("replace into `ty_store_goods_class` values('18','手机数码','0','2','0','1','1','1','100');");
E_D("replace into `ty_store_goods_class` values('19','手机','18','2','0','1','1','1','80');");

require("../../inc/footer.php");
?>