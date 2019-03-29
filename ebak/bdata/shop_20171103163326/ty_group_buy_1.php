<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_group_buy`;");
E_C("CREATE TABLE `ty_group_buy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '团购ID',
  `title` varchar(255) NOT NULL COMMENT '活动名称',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
  `price` decimal(10,2) NOT NULL COMMENT '团购价格',
  `goods_num` int(10) DEFAULT '0' COMMENT '商品参团数',
  `buy_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品已购买数',
  `order_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '已下单人数',
  `virtual_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '虚拟购买数',
  `rebate` decimal(10,1) NOT NULL COMMENT '折扣',
  `intro` text COMMENT '本团介绍',
  `goods_price` decimal(10,2) NOT NULL COMMENT '商品原价',
  `goods_name` varchar(200) NOT NULL COMMENT '商品名称',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐 0.未推荐 1.已推荐',
  `views` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '查看次数',
  `store_id` int(10) DEFAULT '0' COMMENT '商家店铺ID',
  `status` tinyint(1) DEFAULT '0' COMMENT '团购状态，0待审核，1正常2拒绝3关闭',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='团购商品表'");
E_D("replace into `ty_group_buy` values('2','布雷尔 床 皮床 双人床 真皮床 软床 皮艺床 1.8米婚床','1388937600','1773158400','71','228.00','50','0','0','21','2.5','布雷尔 床 皮床 双人床 真皮床 软床 皮艺床 1.8米婚床','1580.00','布雷尔 床 皮床 双人床 真皮床 软床 皮艺床 1.8米婚床','1','23','0','0');");
E_D("replace into `ty_group_buy` values('3','珂兰钻石 18K金90分效果群镶钻石戒指 倾城 需定制','1457625600','1836748800','103','95.00','50','0','0','30','6.3','货真价实珠宝活动便宜卖珂兰钻石 18K金90分效果群镶钻石戒指 倾城 需定制的可以联系店主','1999.00','珂兰钻石 18K金90分效果群镶钻石戒指 倾城 需定制','1','10','0','0');");
E_D("replace into `ty_group_buy` values('4','荣耀畅玩5X 双卡双待 移动版 智能手机（破晓银）','1457625600','1805644800','49','100.00','50','0','0','12','8.4','荣耀畅玩5X 双卡双待 移动版 智能手机（破晓银）','999.00','荣耀畅玩5X 双卡双待 移动版 智能手机（破晓银）','0','0','0','2');");
E_D("replace into `ty_group_buy` values('5','海力（Horion）55A1华数TV版55英寸 4K轻薄智能网络平板液晶电视','1457625600','1837872000','63','7991.00','20','0','0','21','8.7','海力（Horion）55A1华数TV版55英寸 4K轻薄智能网络平板液晶电视','3699.00','海力（Horion）55A1华数TV版55英寸 4K轻薄智能网络平板液晶电视','0','0','0','1');");
E_D("replace into `ty_group_buy` values('6','纤慕文胸 女无钢圈聚拢一片式无痕拉丝美背内衣','1457712000','1520784000','81','61.00','100','0','0','34','5.9','纤慕文胸 女无钢圈聚拢一片式无痕拉丝美背内衣','108.00','纤慕文胸 女无钢圈聚拢一片式无痕拉丝美背内衣','1','0','0','3');");
E_D("replace into `ty_group_buy` values('7',' 金地珠宝足金花之恋金花3D硬金吊坠优雅大方时尚百搭唯美花朵黄金吊坠项坠','1457712000','1551715200','100','1300.00','50','0','0','21','9.6',' 金地珠宝足金花之恋金花3D硬金吊坠优雅大方时尚百搭唯美花朵黄金吊坠项坠','1405.00','金地珠宝足金花之恋金花3D硬金吊坠优雅大方时尚百搭唯美花朵黄金吊坠项坠','1','0','0','1');");
E_D("replace into `ty_group_buy` values('8','sadasdasaaaa','1467734400','1469030400','141','213.00','213','0','0','21','0.0','3213212aaaaaa','0.00','三星 Galaxy A9高配版 (A9100) 精灵黑 全网通4G手机 双卡双待','1','0','2','1');");
E_D("replace into `ty_group_buy` values('9','平板电脑 399 抢购了','1474387200','1474387200','42','399.00','10','0','0','10','0.0','平板电脑 399 抢购了 抢完为止','0.00','Teclast/台电 X80 Plus WIFI 32GB Win10平板电脑双系统8英寸','0','0','1','0');");

require("../../inc/footer.php");
?>