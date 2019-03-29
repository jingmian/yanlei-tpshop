<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_class`;");
E_C("CREATE TABLE `ty_store_class` (
  `sc_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '索引ID',
  `sc_name` varchar(50) NOT NULL COMMENT '分类名称',
  `sc_bail` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '保证金数额',
  `sc_sort` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`sc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='店铺分类表'");
E_D("replace into `ty_store_class` values('1','珠宝/首饰','0','8');");
E_D("replace into `ty_store_class` values('2','服装鞋包','0','1');");
E_D("replace into `ty_store_class` values('3','3C数码','0','2');");
E_D("replace into `ty_store_class` values('4','美容护理','0','3');");
E_D("replace into `ty_store_class` values('5','家居用品','0','4');");
E_D("replace into `ty_store_class` values('6','食品/保健','0','5');");
E_D("replace into `ty_store_class` values('7','母婴用品','0','6');");
E_D("replace into `ty_store_class` values('8','文体/汽车','0','7');");
E_D("replace into `ty_store_class` values('9','收藏/爱好','0','9');");
E_D("replace into `ty_store_class` values('10','生活/服务','0','10');");

require("../../inc/footer.php");
?>