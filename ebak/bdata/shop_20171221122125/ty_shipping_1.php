<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_shipping`;");
E_C("CREATE TABLE `ty_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_code` varchar(20) NOT NULL DEFAULT '' COMMENT '快递代号',
  `shipping_name` varchar(120) NOT NULL DEFAULT '' COMMENT '快递名称',
  `shipping_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `insure` varchar(10) NOT NULL DEFAULT '0' COMMENT '保险',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启',
  PRIMARY KEY (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ty_shipping` values('1','post_express','邮政快递包裹','邮政快递包裹的描述内容。','1%','1');");
E_D("replace into `ty_shipping` values('2','yto','圆通速递','上海圆通物流（速递）有限公司经过多年的网络快速发展，在中国速递行业中一直处于领先地位。为了能更好的发展国际快件市场，加快与国际市场的接轨，强化圆通的整体实力，圆通已在东南亚、欧美、中东、北美洲、非洲等许多城市运作国际快件业务','0','1');");
E_D("replace into `ty_shipping` values('3','city_express','城际快递','配送的运费是固定的','0','1');");
E_D("replace into `ty_shipping` values('4','flat','市内快递','固定运费的配送方式内容','0','1');");
E_D("replace into `ty_shipping` values('5','sto_express','申通快递','江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元','0','1');");
E_D("replace into `ty_shipping` values('6','post_mail','邮局平邮','邮局平邮的描述内容。','0','1');");
E_D("replace into `ty_shipping` values('7','fpd','运费到付','所购商品到达即付运费','0','1');");

require("../../inc/footer.php");
?>