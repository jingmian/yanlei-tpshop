<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_order_statis`;");
E_C("CREATE TABLE `ty_order_statis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` int(11) NOT NULL COMMENT '开始日期',
  `end_date` int(11) NOT NULL COMMENT '结束日期',
  `order_totals` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单金额',
  `shipping_totals` decimal(10,2) DEFAULT '0.00' COMMENT '运费',
  `return_totals` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '退单金额',
  `return_integral` int(11) DEFAULT '0' COMMENT '退还积分',
  `commis_totals` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '平台抽成',
  `give_integral` decimal(10,2) DEFAULT '0.00' COMMENT '送出积分金额',
  `result_totals` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '本期应结',
  `create_date` int(11) DEFAULT NULL COMMENT '创建记录日期',
  `store_id` int(11) DEFAULT '0' COMMENT '店铺id',
  `order_prom_amount` decimal(10,2) DEFAULT '0.00' COMMENT '优惠价',
  `coupon_price` decimal(10,2) DEFAULT '0.00' COMMENT '优惠券抵扣',
  `distribut` decimal(10,2) DEFAULT '0.00' COMMENT '分销金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COMMENT='商家订单结算表'");

require("../../inc/footer.php");
?>