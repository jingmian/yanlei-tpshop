<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_transport`;");
E_C("CREATE TABLE `ty_transport` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '售卖区域ID',
  `title` varchar(30) NOT NULL COMMENT '售卖区域名称',
  `send_tpl_id` mediumint(8) unsigned DEFAULT NULL COMMENT '发货地区模板ID',
  `store_id` mediumint(8) unsigned NOT NULL COMMENT '店铺ID',
  `update_time` int(10) unsigned DEFAULT '0' COMMENT '最后更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='售卖区域'");
E_D("replace into `ty_transport` values('1','夹着胡','1','1','1464260517');");

require("../../inc/footer.php");
?>