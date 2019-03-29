<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_spec_goods_price`;");
E_C("CREATE TABLE `ty_spec_goods_price` (
  `goods_id` int(11) DEFAULT '0' COMMENT '商品id',
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '规格键名',
  `key_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '规格键名中文',
  `price` decimal(10,2) DEFAULT NULL COMMENT '价格',
  `store_count` int(11) unsigned DEFAULT '10' COMMENT '库存数量',
  `bar_code` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '商品条形码',
  `sku` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT 'SKU',
  `store_id` int(11) DEFAULT '0' COMMENT '店铺商家id',
  KEY `gk` (`goods_id`,`key`) USING BTREE,
  KEY `goods_id` (`goods_id`),
  KEY `store_id` (`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ty_spec_goods_price` values('5','11_14_23',NULL,'0.00','100','0','','2');");
E_D("replace into `ty_spec_goods_price` values('5','11_13_23',NULL,'0.00','100','0','','2');");
E_D("replace into `ty_spec_goods_price` values('105','11_28_100','网络:4G 内存:32G 颜色:玫瑰金','5588.00','1000','','','2');");
E_D("replace into `ty_spec_goods_price` values('5','11_14_21',NULL,'40.00','100','60','','2');");
E_D("replace into `ty_spec_goods_price` values('76','80','尺码:XL','267.00','100','765768','','2');");
E_D("replace into `ty_spec_goods_price` values('76','79','尺码:L','269.00','100','65785','','2');");
E_D("replace into `ty_spec_goods_price` values('5','12_13_21',NULL,'0.00','100','0','','2');");
E_D("replace into `ty_spec_goods_price` values('5','12_14_21',NULL,'0.00','100','0','','2');");
E_D("replace into `ty_spec_goods_price` values('5','12_13_23',NULL,'0.00','100','0','','2');");
E_D("replace into `ty_spec_goods_price` values('5','12_14_23',NULL,'0.00','100','0','','2');");
E_D("replace into `ty_spec_goods_price` values('33','11_13_23','网络:4G 内存:16G 屏幕:文字屏','300.00','100','0003','','2');");
E_D("replace into `ty_spec_goods_price` values('33','11_14_21','网络:4G 内存:8G 屏幕:触屏','200.00','100','0002','','2');");
E_D("replace into `ty_spec_goods_price` values('33','11_13_21','网络:4G 内存:16G 屏幕:触屏','100.00','100','0001','','2');");
E_D("replace into `ty_spec_goods_price` values('34','12_21_28','3G_触屏_32G','600.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('34','12_14_21','3G_8G_触屏','500.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('34','12_13_21','3G_16G_触屏','400.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('34','11_21_28','4G_触屏_32G','300.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('34','11_14_21','4G_8G_触屏','200.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('34','11_13_21','4G_16G_触屏','100.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('35','11_13_21','4G_16G_触屏','100.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('35','11_14_21','4G_8G_触屏','200.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('35','11_21_28','4G_触屏_32G','300.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('35','12_13_21','3G_16G_触屏','400.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('35','12_14_21','3G_8G_触屏','500.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('35','12_21_28','3G_触屏_32G','600.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('36','12_21_28','3G_触屏_32G','600.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('36','12_14_21','3G_8G_触屏','500.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('36','12_13_21','3G_16G_触屏','400.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('36','11_21_28','4G_触屏_32G','300.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('36','11_14_21','4G_8G_触屏','200.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('36','11_13_21','4G_16G_触屏','100.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('37','11_13_21','4G_16G_触屏','100.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('37','11_14_21','4G_8G_触屏','200.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('37','11_21_28','4G_触屏_32G','300.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('37','12_13_21','3G_16G_触屏','400.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('37','12_14_21','3G_8G_触屏','500.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('37','12_21_28','3G_触屏_32G','600.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('23','36_38','移动_双核','100.00','100','0001','','2');");
E_D("replace into `ty_spec_goods_price` values('23','35_38','联通_双核','200.00','100','0002','','2');");
E_D("replace into `ty_spec_goods_price` values('23','37_38','电信_双核','300.00','100','0003','','2');");
E_D("replace into `ty_spec_goods_price` values('23','36_39','移动_4核','400.00','100','0004','','2');");
E_D("replace into `ty_spec_goods_price` values('23','35_39','联通_4核','500.00','100','0005','','2');");
E_D("replace into `ty_spec_goods_price` values('23','37_39','电信_4核','600.00','100','0006','','2');");
E_D("replace into `ty_spec_goods_price` values('23','36_40','移动_8核','700.00','100','0007','','2');");
E_D("replace into `ty_spec_goods_price` values('23','35_40','联通_8核','800.00','100','0008','','2');");
E_D("replace into `ty_spec_goods_price` values('23','37_40','电信_8核','999.00','100','0009','','2');");
E_D("replace into `ty_spec_goods_price` values('24','36_38','移动_双核','1000.00','100','a0001','','2');");
E_D("replace into `ty_spec_goods_price` values('24','35_38','联通_双核','2000.00','100','b0002','','2');");
E_D("replace into `ty_spec_goods_price` values('24','37_38','电信_双核','3000.00','100','c0003','','2');");
E_D("replace into `ty_spec_goods_price` values('24','36_39','移动_4核','4000.00','100','d0004','','2');");
E_D("replace into `ty_spec_goods_price` values('24','35_39','联通_4核','5000.00','100','e0005','','2');");
E_D("replace into `ty_spec_goods_price` values('24','37_39','电信_4核','1000.00','100','f0006','','2');");
E_D("replace into `ty_spec_goods_price` values('24','36_40','移动_8核','2000.00','100','g0007','','2');");
E_D("replace into `ty_spec_goods_price` values('24','35_40','联通_8核','3000.00','100','h0008','','2');");
E_D("replace into `ty_spec_goods_price` values('24','37_40','电信_8核','4000.00','100','i0009','','2');");
E_D("replace into `ty_spec_goods_price` values('1','28_100','内存:32G 颜色:玫瑰金','100.00','98','0006','','2');");
E_D("replace into `ty_spec_goods_price` values('1','28_99','内存:32G 颜色:银色','200.00','100','0005','','2');");
E_D("replace into `ty_spec_goods_price` values('1','13_100','内存:16G 颜色:玫瑰金','300.00','100','0003','','2');");
E_D("replace into `ty_spec_goods_price` values('1','28_55','内存:32G 颜色:黑色','400.00','100','0004','','2');");
E_D("replace into `ty_spec_goods_price` values('33','11_14_23','网络:4G 内存:8G 屏幕:文字屏','400.00','100','0004','','2');");
E_D("replace into `ty_spec_goods_price` values('50','11_13_21_57','网络:4G 内存:16G 屏幕:触屏 颜色:金色','1179.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('49','11_13_21','网络:4G 内存:16G 屏幕:触屏','999.00','97','','','2');");
E_D("replace into `ty_spec_goods_price` values('48','11_13_21','网络:4G 内存:16G 屏幕:触屏','2099.00','99','','','2');");
E_D("replace into `ty_spec_goods_price` values('46','11_13_21','网络:4G 内存:16G 屏幕:触屏','999.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('40','42_47','尺寸:7.8-9寸 内存:16G','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('40','42_48','尺寸:7.8-9寸 内存:32G','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('40','42_49','尺寸:7.8-9寸 内存:64G','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('40','41_47','尺寸:7寸及以下 内存:16G','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('40','41_48','尺寸:7寸及以下 内存:32G','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('40','41_49','尺寸:7寸及以下 内存:64G','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('50','11_13_21_56','网络:4G 内存:16G 屏幕:触屏 颜色:白色','1189.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('50','11_13_21_55','网络:4G 内存:16G 屏幕:触屏 颜色:黑色','1169.00','91','','','2');");
E_D("replace into `ty_spec_goods_price` values('51','12_21_28','网络:3G 屏幕:触屏 内存:32G','5000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('51','12_14_21','网络:3G 内存:8G 屏幕:触屏','4000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('51','12_13_21','网络:3G 内存:16G 屏幕:触屏','3699.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('51','11_21_28','网络:4G 屏幕:触屏 内存:32G','5000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('51','11_14_21','网络:4G 内存:8G 屏幕:触屏','4000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('51','11_13_21','网络:4G 内存:16G 屏幕:触屏','3699.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('52','58','颜色:白色','328.00','99','','','2');");
E_D("replace into `ty_spec_goods_price` values('53','61','颜色:黑色','349.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('54','61','颜色:黑色','258.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('55','58','颜色:白色','349.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('56','67','尺寸:55','4399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('56','66','尺寸:50','3399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('56','65','尺寸:42','2399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('57','67','尺寸:55','3000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('57','66','尺寸:50','2799.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('57','65','尺寸:42','2000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('58','63','尺寸:32','1399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('58','66','尺寸:50','2399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('58','67','尺寸:55','3399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('59','67','尺寸:55','2799.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('59','66','尺寸:50','2499.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('60','66','尺寸:50','2599.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('60','67','尺寸:55','3000.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('61','67','尺寸:55','3599.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('62','64','尺寸:40','3699.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('62','66','尺寸:50','4699.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('62','67','尺寸:55','5699.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('63','67','尺寸:55','3699.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('64','64','尺寸:40','2098.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('159','39_48_56','CPU:4核 内存:32G 颜色:白色','1999.00','0','','232323234','2');");
E_D("replace into `ty_spec_goods_price` values('68','69','选择瓦数:20W','358.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('68','71','选择瓦数:24W','358.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('68','75','选择瓦数:36W','358.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('68','76','选择瓦数:72W','358.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('76','78','尺码:M','299.00','98','54657','','2');");
E_D("replace into `ty_spec_goods_price` values('76','77','尺码:S','289.00','97','123456','','2');");
E_D("replace into `ty_spec_goods_price` values('77','79','尺码:L','399.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('77','78','尺码:M','399.00','99','','','2');");
E_D("replace into `ty_spec_goods_price` values('77','77','尺码:S','399.00','95','','','2');");
E_D("replace into `ty_spec_goods_price` values('78','84','尺码:L','118.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('78','85','尺码:XL','118.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('156','38_44_56','CPU:双核 尺寸:10.1寸 颜色:白色','0.01','20','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','94','尺码:80B','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','93','尺码:80A','79.00','99','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','92','尺码:75C','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','91','尺码:75B','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','90','尺码:75A','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','89','尺码:70C','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','88','尺码:70B','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('80','87','尺码:70A','79.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('156','44_56_124','尺寸:10.1寸 颜色:白色 CPU:16核','1199.00','50','','','2');");
E_D("replace into `ty_spec_goods_price` values('156','40_44_56','CPU:8核 尺寸:10.1寸 颜色:白色','0.01','20','','','2');");
E_D("replace into `ty_spec_goods_price` values('86','77','尺码:S','875.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('86','78','尺码:M','875.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('86','79','尺码:L','875.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('86','80','尺码:XL','875.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('86','81','尺码:XXL','875.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('1','13_55','内存:16G 颜色:黑色','500.00','100','0001','','2');");
E_D("replace into `ty_spec_goods_price` values('1','13_99','内存:16G 颜色:银色','600.00','100','0002','','2');");
E_D("replace into `ty_spec_goods_price` values('159','39_49_57','CPU:4核 内存:64G 颜色:金色','2200.00','0','','2323232366','2');");
E_D("replace into `ty_spec_goods_price` values('159','39_49_56','CPU:4核 内存:64G 颜色:白色','2200.00','0','','232323233','2');");
E_D("replace into `ty_spec_goods_price` values('159','39_48_57','CPU:4核 内存:32G 颜色:金色','1999.00','0','','232323235','2');");
E_D("replace into `ty_spec_goods_price` values('104','57','颜色:金色','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('104','56','颜色:白色','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('104','55','颜色:黑色','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('105','11_13_100','网络:4G 内存:16G 颜色:玫瑰金','5500.00','1000','','','2');");
E_D("replace into `ty_spec_goods_price` values('105','11_57_101','网络:4G 颜色:金色 内存:64G','6000.00','1000','','','2');");
E_D("replace into `ty_spec_goods_price` values('105','11_28_57','网络:4G 内存:32G 颜色:金色','5588.00','1000','','','2');");
E_D("replace into `ty_spec_goods_price` values('105','11_13_57','网络:4G 内存:16G 颜色:金色','5500.00','1000','','','2');");
E_D("replace into `ty_spec_goods_price` values('105','11_100_101','网络:4G 颜色:玫瑰金 内存:64G','6000.00','1000','','','2');");
E_D("replace into `ty_spec_goods_price` values('115','103','颜色:土豪金','84.90','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('115','104','颜色:象牙白','84.90','99','','','2');");
E_D("replace into `ty_spec_goods_price` values('115','105','颜色:宝石蓝','84.90','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('121','104','颜色:象牙白','69.90','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('122','103','颜色:土豪金','69.90','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('134','106','合约套餐:乐享4G套餐59元','59.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('134','107','合约套餐:乐享4G套餐79元','59.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('134','108','合约套餐:乐享4G套餐99元','59.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('134','109','合约套餐:乐享4G套餐129元','59.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('134','110','合约套餐:乐享4G套餐169元','59.00','100','','','2');");
E_D("replace into `ty_spec_goods_price` values('137','106_112','合约套餐:乐享4G套餐59元 套餐:微型卡','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('137','107_112','合约套餐:乐享4G套餐79元 套餐:微型卡','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('137','106_113','合约套餐:乐享4G套餐59元 套餐:普通卡','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('137','107_113','合约套餐:乐享4G套餐79元 套餐:普通卡','0.00','0','','','2');");
E_D("replace into `ty_spec_goods_price` values('150','156_160','文胸尺码:A罩 文胸布料:纯棉','1000.00','99','','782785252','3');");
E_D("replace into `ty_spec_goods_price` values('150','157_160','文胸尺码:B罩 文胸布料:纯棉','1500.00','99','','254254252','3');");

require("../../inc/footer.php");
?>