<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_collect`;");
E_C("CREATE TABLE `ty_store_collect` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `store_id` int(10) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL COMMENT '收藏店铺时间',
  `store_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL COMMENT '收藏会员名称',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `ty_store_collect` values('35','1','3','1474622289','旺小姐旗舰店','测试人员');");
E_D("replace into `ty_store_collect` values('34','1','2','1474621650','TPSHP自营店','测试人员');");
E_D("replace into `ty_store_collect` values('36','1','1','1474943349','TPSHP旗舰店','测试人员');");

require("../../inc/footer.php");
?>