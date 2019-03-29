<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_decoration_block`;");
E_C("CREATE TABLE `ty_store_decoration_block` (
  `block_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '装修块编号',
  `decoration_id` int(10) unsigned NOT NULL COMMENT '装修编号',
  `store_id` int(10) unsigned NOT NULL COMMENT '店铺编号',
  `block_layout` varchar(50) NOT NULL COMMENT '块布局',
  `block_content` text COMMENT '块内容',
  `block_module_type` varchar(50) DEFAULT NULL COMMENT '装修块模块类型',
  `block_full_width` tinyint(3) unsigned DEFAULT NULL COMMENT '是否100%宽度(0-否 1-是)',
  `block_sort` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '块排序',
  PRIMARY KEY (`block_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='店铺装修块表'");
E_D("replace into `ty_store_decoration_block` values('1','1','2','block_1',NULL,NULL,NULL,'1');");
E_D("replace into `ty_store_decoration_block` values('2','1','2','block_1','a:8:{i:0;a:3:{s:8:\"goods_id\";s:3:\"133\";s:10:\"goods_name\";s:84:\"电信手机卡 电信4G流量卡全国通用手机号码卡选号电话卡上网卡\";s:10:\"shop_price\";s:6:\"100.00\";}i:1;a:3:{s:8:\"goods_id\";s:3:\"132\";s:10:\"goods_name\";s:85:\"中国电信4G号卡手机卡电话卡上网卡177号段套餐可选 预存1200全返\";s:10:\"shop_price\";s:7:\"1200.00\";}i:2;a:3:{s:8:\"goods_id\";s:3:\"136\";s:10:\"goods_name\";s:84:\"靓号0元送广东联通4G/3G手机卡上网卡大流量套餐全国无漫游选号\";s:10:\"shop_price\";s:6:\"120.00\";}i:3;a:3:{s:8:\"goods_id\";s:3:\"137\";s:10:\"goods_name\";s:84:\"中麦通信4G联通网络手机靓号 170手机卡电话卡靓号卡可选号包邮\";s:10:\"shop_price\";s:6:\"500.00\";}i:4;a:3:{s:8:\"goods_id\";s:3:\"138\";s:10:\"goods_name\";s:83:\"广州电信卡|4G定制卡|含50话费|手机卡号码卡|上网卡流量卡靓号\";s:10:\"shop_price\";s:5:\"79.00\";}i:5;a:3:{s:8:\"goods_id\";s:3:\"124\";s:10:\"goods_name\";s:77:\"Nikon/尼康D3300入门单反相机 升级版AF-P 18-55镜头套机 分期购\";s:10:\"shop_price\";s:6:\"100.00\";}i:6;a:3:{s:8:\"goods_id\";s:3:\"123\";s:10:\"goods_name\";s:76:\"Canon/佳能 EOS 750D单反套机（18-55mm）高清数码相机苏宁易购\";s:10:\"shop_price\";s:7:\"3997.00\";}i:7;a:3:{s:8:\"goods_id\";s:3:\"122\";s:10:\"goods_name\";s:84:\"黛尔尼曼20000M蘋果6s手机通用超薄移动电源冲充电宝MIUI便携毫安\";s:10:\"shop_price\";s:5:\"69.90\";}}','goods','0','1');");
E_D("replace into `ty_store_decoration_block` values('4','3','3','block_1','a:2:{s:6:\"height\";s:3:\"140\";s:6:\"images\";a:1:{i:0;a:3:{s:9:\"image_url\";s:60:\"/Public/upload/store/decoration/2016-08-24/57bd7347c6d1a.jpg\";s:10:\"image_name\";s:17:\"57bd7347c6d1a.jpg\";s:10:\"image_link\";s:20:\"http://www.baidu.com\";}}}','slide','0','1');");
E_D("replace into `ty_store_decoration_block` values('6','3','3','block_1',NULL,NULL,NULL,'2');");
E_D("replace into `ty_store_decoration_block` values('7','3','3','block_1',NULL,NULL,NULL,'4');");
E_D("replace into `ty_store_decoration_block` values('8','2','1','block_1','a:2:{s:6:\"height\";s:2:\"22\";s:6:\"images\";a:1:{i:0;a:3:{s:9:\"image_url\";s:60:\"/Public/upload/store/decoration/2016-10-27/5811a3fb7e622.jpg\";s:10:\"image_name\";s:17:\"5811a3fb7e622.jpg\";s:10:\"image_link\";s:0:\"\";}}}','slide','1','2');");
E_D("replace into `ty_store_decoration_block` values('9','2','1','block_1','a:3:{s:5:\"image\";s:17:\"5811a95c5f237.jpg\";s:9:\"image_url\";s:60:\"/Public/upload/store/decoration/2016-10-27/5811a95c5f237.jpg\";s:5:\"areas\";a:1:{i:0;a:5:{s:2:\"x1\";s:3:\"117\";s:2:\"y1\";s:2:\"75\";s:2:\"x2\";s:3:\"176\";s:2:\"y2\";s:3:\"129\";s:4:\"link\";s:14:\"http://bar.com\";}}}','hot_area','0','1');");
E_D("replace into `ty_store_decoration_block` values('10','2','1','block_1','&lt;p&gt;是打发士大夫&lt;/p&gt;','html','0','3');");

require("../../inc/footer.php");
?>