<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_seller_group`;");
E_C("CREATE TABLE `ty_seller_group` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '卖家组编号',
  `group_name` varchar(50) NOT NULL COMMENT '组名',
  `act_limits` text NOT NULL COMMENT '权限',
  `smt_limits` text NOT NULL COMMENT '消息权限范围',
  `store_id` int(10) unsigned NOT NULL COMMENT '店铺编号',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='卖家用户组表'");
E_D("replace into `ty_seller_group` values('1','美工','addEditGoods@Goods,import@index,goodsList?goods_state=1@Goods,goodsList?goods_state=0,2,3@Goods,specList@Goods,brandList@Goods,ask_list@Comment,return_list@Order,complain_list@Comment,index@Report,saleTop@Report,finance@Report,saleTop@Report,visit@Report','goods_storage_alarm,refund_auto_process','2');");
E_D("replace into `ty_seller_group` values('2','运维','addEditGoods@Goods,import@index,goodsList?goods_state=1@Goods,goodsList?goods_state=0,2,3@Goods,specList@Goods,brandList@Goods,flash_sale@Promotion,group_buy_list@Promotion,prom_goods_list@Promotion,prom_order_list@Promotion,index@Coupon','','2');");

require("../../inc/footer.php");
?>