<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_extend`;");
E_C("CREATE TABLE `ty_store_extend` (
  `store_id` mediumint(8) unsigned NOT NULL COMMENT '店铺ID',
  `express` text COMMENT '快递公司ID的组合',
  `pricerange` text COMMENT '店铺统计设置的商品价格区间',
  `orderpricerange` text COMMENT '店铺统计设置的订单价格区间',
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ty_store_extend` values('6',NULL,NULL,NULL);");
E_D("replace into `ty_store_extend` values('7',NULL,NULL,NULL);");
E_D("replace into `ty_store_extend` values('8',NULL,NULL,NULL);");
E_D("replace into `ty_store_extend` values('9',NULL,NULL,NULL);");

require("../../inc/footer.php");
?>