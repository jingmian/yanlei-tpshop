<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_flash_sale`;");
E_C("CREATE TABLE `ty_flash_sale` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL COMMENT '活动标题',
  `goods_id` int(10) NOT NULL COMMENT '参团商品ID',
  `price` float(10,2) NOT NULL COMMENT '活动价格',
  `goods_num` int(10) DEFAULT '1' COMMENT '商品参加活动数',
  `buy_limit` int(11) NOT NULL DEFAULT '1' COMMENT '每人限购数',
  `buy_num` int(11) NOT NULL DEFAULT '0' COMMENT '已购买人数',
  `order_num` int(10) DEFAULT '0' COMMENT '已下单数',
  `description` text COMMENT '活动描述',
  `start_time` int(11) NOT NULL COMMENT '开始时间',
  `end_time` int(11) NOT NULL COMMENT '结束时间',
  `is_end` tinyint(1) DEFAULT '0' COMMENT '是否已结束',
  `goods_name` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `store_id` int(10) DEFAULT '0',
  `recommend` tinyint(1) DEFAULT '0' COMMENT '是否推荐',
  `status` tinyint(1) DEFAULT '0' COMMENT '抢购状态：1正常，0待审核，2审核拒绝，3关闭活动',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ty_flash_sale` values('1','520闪购','119','59.00','50','1','0','0','电视广告的风格','1463587200','1464624000','0','小米旗舰店正品手机平板通用迷你充电宝 移动电源10000毫安大容量','0','0','0');");
E_D("replace into `ty_flash_sale` values('2','4545bbbbbbbbb','1','423.00','32','43','0','0','342343432aaaaaaaaaaaa','1467734400','1472918400','0','Apple iPhone 6s Plus 16G 玫瑰金 移动联通电信4G手机','2','0','3');");
E_D("replace into `ty_flash_sale` values('3','55t65aaaaaa','141','465.00','65','67654','0','0','7654aaaa','1467734400','1472918400','0','三星 Galaxy A9高配版 (A9100) 精灵黑 全网通4G手机 双卡双待','2','1','3');");
E_D("replace into `ty_flash_sale` values('4','荣耀7 双卡双待双通 抢购价1999','48','1999.00','10','10','1','1','荣耀7 双卡双待双通 抢购价1999 抢完为止','1474426085','1569794940','0','荣耀7 双卡双待双通 移动4G版 16GB存储（冰河银）豪华套装一','1','1','3');");

require("../../inc/footer.php");
?>