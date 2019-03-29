<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_cart`;");
E_C("CREATE TABLE `ty_cart` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '购物车表',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `session_id` char(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'session',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `goods_sn` varchar(60) NOT NULL DEFAULT '' COMMENT '商品货号',
  `goods_name` varchar(120) NOT NULL DEFAULT '' COMMENT '商品名称',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '市场价',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '本店价',
  `member_goods_price` decimal(10,2) DEFAULT '0.00' COMMENT '会员折扣价',
  `goods_num` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '购买数量',
  `spec_key` varchar(64) NOT NULL DEFAULT '' COMMENT '商品规格key 对应ty_spec_goods_price 表',
  `spec_key_name` varchar(64) DEFAULT '' COMMENT '商品规格组合名称',
  `bar_code` varchar(64) DEFAULT '' COMMENT '商品条码',
  `selected` tinyint(1) DEFAULT '1' COMMENT '购物车选中状态',
  `add_time` int(11) DEFAULT '0' COMMENT '加入购物车的时间',
  `prom_type` tinyint(1) DEFAULT '0' COMMENT '0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠',
  `prom_id` int(11) DEFAULT '0' COMMENT '活动id',
  `sku` varchar(128) DEFAULT '' COMMENT 'sku',
  `store_id` int(10) DEFAULT '0' COMMENT '商家店铺ID',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=utf8");
E_D("replace into `ty_cart` values('154','66','oqAn80MK6yZEmEBXb9V8AZie1hrw','45','TP0000045','华为 HUAWEI C199S 麦芒3S 电信4G智能手机FDD-LTE /TD-LTE/CDMA2000/GSM（麦芒金）','2099.00','1999.00','1999.00','1','','','','1','1493284382','0','0','','1');");
E_D("replace into `ty_cart` values('157','72','oTxQZ0QooalvTuz-NttuuWGu5X4k','46','TP0000046','【北京移动老用户专享 话费六折】荣耀畅玩5X 双卡双待 移动版 智能手机（破晓银）','1099.00','999.00','999.00','1','11_13_21','网络:4G 内存:16G 屏幕:触屏','','1','1493722490','0','0','','1');");
E_D("replace into `ty_cart` values('171','79','oTxQZ0VdhdwF3xUVQAQ-MHMzWAPY','45','TP0000045','华为 HUAWEI C199S 麦芒3S 电信4G智能手机FDD-LTE /TD-LTE/CDMA2000/GSM（麦芒金）','2099.00','1999.00','1999.00','1','','','','1','1494220123','0','0','','1');");
E_D("replace into `ty_cart` values('193','87','oyrgg0bOuSCCzNF7uKv-QvmHBIwE','82','TP0000082','舒肤佳纯白清香型沐浴露720ml','147.60','47.60','47.60','1','','','','1','1507540356','0','0','','2');");
E_D("replace into `ty_cart` values('191','85','oyrgg0V9VSsr-hvwcrru5jJ9aDxM','82','TP0000082','舒肤佳纯白清香型沐浴露720ml','147.60','47.60','47.60','1','','','','1','1507533035','0','0','','2');");
E_D("replace into `ty_cart` values('197','96','oyrgg0dkOR_G0sjd_o1nI3TaBoSw','71','TP0000071','布雷尔 床 皮床 双人床 真皮床 软床 皮艺床 1.8米婚床','1680.00','1580.00','1580.00','2','','','','1','1508759574','0','0','','2');");
E_D("replace into `ty_cart` values('201','100','oyrgg0T_FZ6Gd6hRsORzgfPtr7Tk','39','TP0000038','华为（HUAWEI） M2 10.0 平板电脑 WiFi 月光银','2388.00','2288.00','2288.00','1','','','','1','1508922338','0','0','','1');");
E_D("replace into `ty_cart` values('202','100','oyrgg0T_FZ6Gd6hRsORzgfPtr7Tk','83','TP0000083','力士精油香氛幽莲魅肤沐浴乳1000ml（新老包装随机发货）','139.90','39.90','39.90','1','','','','1','1508922362','0','0','','2');");
E_D("replace into `ty_cart` values('203','100','oyrgg0T_FZ6Gd6hRsORzgfPtr7Tk','42','TP0000042','Teclast/台电 X80 Plus WIFI 32GB Win10平板电脑双系统8英寸','599.00','169.00','169.00','1','','','','1','1508922399','0','0','','1');");
E_D("replace into `ty_cart` values('204','100','oyrgg0T_FZ6Gd6hRsORzgfPtr7Tk','51','TP0000051','华为 HUAWEI Mate 8 4GB+64GB版 全网通（香槟金）','3799.00','4000.00','4000.00','1','11_14_21','网络:4G 内存:8G 屏幕:触屏','','1','1508922435','0','0','','2');");
E_D("replace into `ty_cart` values('205','92','oyrgg0dkOC6G5xoUE_De6dj6XKfA','82','TP0000082','舒肤佳纯白清香型沐浴露720ml','147.60','47.60','47.60','1','','','','1','1509006755','0','0','','2');");
E_D("replace into `ty_cart` values('208','106','oyrgg0Q6MZIssrauVBGmbM-uD7Ms','83','TP0000083','力士精油香氛幽莲魅肤沐浴乳1000ml（新老包装随机发货）','139.90','39.90','39.90','1','','','','1','1509278667','0','0','','2');");

require("../../inc/footer.php");
?>