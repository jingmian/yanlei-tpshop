<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_distribut`;");
E_C("CREATE TABLE `ty_store_distribut` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '表id自增',
  `switch` tinyint(1) DEFAULT '0' COMMENT '分销开关',
  `condition` tinyint(1) DEFAULT '0' COMMENT '成为分销商条件 0 直接成为分销商,1成功购买商品后成为分销商',
  `distribut_pattern` tinyint(1) DEFAULT '0' COMMENT '分销模式 0 按商品设置的分成金额 1 按订单设置的分成比例',
  `first_rate` tinyint(1) DEFAULT '0' COMMENT '一级分销商比例',
  `second_rate` tinyint(1) DEFAULT '0' COMMENT '二级分销商名称',
  `third_rate` tinyint(1) DEFAULT '0' COMMENT '三级分销商名称',
  `date` tinyint(1) DEFAULT '15' COMMENT '订单收货确认后多少天可以分成',
  `store_id` int(11) DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1");
E_D("replace into `ty_store_distribut` values('1','1','0','0','50','30','20','4','3');");
E_D("replace into `ty_store_distribut` values('2','1','0','0','50','30','20','15','2');");

require("../../inc/footer.php");
?>