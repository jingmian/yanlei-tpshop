<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_user_level`;");
E_C("CREATE TABLE `ty_user_level` (
  `level_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(30) DEFAULT NULL COMMENT '头衔名称',
  `amount` decimal(10,2) DEFAULT NULL COMMENT '等级必要金额',
  `discount` smallint(4) DEFAULT NULL COMMENT '折扣',
  `describe` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ty_user_level` values('1','注册会员','0.00','100','注册会员');");
E_D("replace into `ty_user_level` values('2','铜牌会员','10000.00','98','铜牌会员');");
E_D("replace into `ty_user_level` values('3','白银会员','30000.00','95','白银会员');");
E_D("replace into `ty_user_level` values('4','黄金会员','50000.00','92','黄金会员');");
E_D("replace into `ty_user_level` values('5','钻石会员','100000.00','90','钻石会员');");
E_D("replace into `ty_user_level` values('6','超级VIP','200000.00','88','超级VIP');");

require("../../inc/footer.php");
?>