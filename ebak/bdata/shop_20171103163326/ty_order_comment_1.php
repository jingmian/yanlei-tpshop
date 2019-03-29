<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_order_comment`;");
E_C("CREATE TABLE `ty_order_comment` (
  `order_commemt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单评论索引id',
  `order_id` int(11) NOT NULL COMMENT '订单id',
  `store_id` int(11) NOT NULL COMMENT '店铺id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `describe_score` decimal(2,1) NOT NULL COMMENT '描述相符分数（0~5）',
  `seller_score` decimal(2,1) NOT NULL COMMENT '卖家服务分数（0~5）',
  `logistics_score` decimal(2,1) NOT NULL COMMENT '物流服务分数（0~5）',
  `commemt_time` int(10) unsigned NOT NULL COMMENT '评分时间',
  `deleted` tinyint(1) unsigned zerofill NOT NULL COMMENT '不删除0；删除：1',
  PRIMARY KEY (`order_commemt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COMMENT='订单评分表'");
E_D("replace into `ty_order_comment` values('1','223','2','1','0.0','0.0','0.0','2016','1');");
E_D("replace into `ty_order_comment` values('2','223','2','1','5.0','5.0','5.0','0','0');");
E_D("replace into `ty_order_comment` values('3','233','2','1','0.0','0.0','0.0','2016','0');");
E_D("replace into `ty_order_comment` values('4','221','2','1','0.0','0.0','0.0','2016','1');");
E_D("replace into `ty_order_comment` values('5','221','2','1','5.0','5.0','5.0','0','0');");
E_D("replace into `ty_order_comment` values('6','171','2','1','5.0','5.0','5.0','0','0');");
E_D("replace into `ty_order_comment` values('7','185','2','1','5.0','5.0','5.0','0','0');");
E_D("replace into `ty_order_comment` values('8','175','2','1','5.0','5.0','4.0','2016','0');");
E_D("replace into `ty_order_comment` values('9','182','2','1','4.0','4.0','4.0','0','0');");
E_D("replace into `ty_order_comment` values('10','248','2','34','3.0','4.0','4.0','0','0');");
E_D("replace into `ty_order_comment` values('11','321','3','1','5.0','4.0','4.0','0','0');");
E_D("replace into `ty_order_comment` values('12','317','3','1','4.0','4.0','4.0','0','0');");
E_D("replace into `ty_order_comment` values('13','274','3','1','5.0','4.0','4.0','0','0');");
E_D("replace into `ty_order_comment` values('14','273','3','1','5.0','5.0','5.0','0','0');");
E_D("replace into `ty_order_comment` values('15','272','3','1','5.0','5.0','5.0','0','0');");
E_D("replace into `ty_order_comment` values('16','341','1','1','4.0','4.0','4.0','0','0');");

require("../../inc/footer.php");
?>