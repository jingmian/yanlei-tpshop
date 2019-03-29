<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_user_message`;");
E_C("CREATE TABLE `ty_user_message` (
  `rec_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `message_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '消息id',
  `category` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '系统消息0，活动消息',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '查看状态：0未查看，1已查看',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `message_id` (`message_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ty_user_message` values('1','1','1','0','1');");
E_D("replace into `ty_user_message` values('2','1','2','0','1');");
E_D("replace into `ty_user_message` values('3','1','3','0','1');");
E_D("replace into `ty_user_message` values('4','1','4','0','1');");
E_D("replace into `ty_user_message` values('5','1','5','0','1');");
E_D("replace into `ty_user_message` values('6','1','6','0','0');");
E_D("replace into `ty_user_message` values('7','40','7','0','0');");
E_D("replace into `ty_user_message` values('8','1','8','0','0');");

require("../../inc/footer.php");
?>