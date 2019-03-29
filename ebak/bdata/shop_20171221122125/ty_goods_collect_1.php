<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_goods_collect`;");
E_C("CREATE TABLE `ty_goods_collect` (
  `collect_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`collect_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `goods_id` (`goods_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `ty_goods_collect` values('2','1','37','1452516238');");
E_D("replace into `ty_goods_collect` values('3','1','38','1452521157');");
E_D("replace into `ty_goods_collect` values('11','1','47','1458206276');");
E_D("replace into `ty_goods_collect` values('28','58','103','1490422311');");
E_D("replace into `ty_goods_collect` values('29','61','39','1492678753');");
E_D("replace into `ty_goods_collect` values('30','78','45','1494202531');");
E_D("replace into `ty_goods_collect` values('31','79','83','1494220263');");
E_D("replace into `ty_goods_collect` values('32','61','41','1497674124');");
E_D("replace into `ty_goods_collect` values('33','61','45','1497675437');");
E_D("replace into `ty_goods_collect` values('34','82','39','1507470225');");
E_D("replace into `ty_goods_collect` values('35','84','124','1507520491');");
E_D("replace into `ty_goods_collect` values('36','86','78','1507536332');");
E_D("replace into `ty_goods_collect` values('37','86','79','1507536401');");
E_D("replace into `ty_goods_collect` values('38','107','83','1509286571');");
E_D("replace into `ty_goods_collect` values('40','128','82','1509516968');");

require("../../inc/footer.php");
?>