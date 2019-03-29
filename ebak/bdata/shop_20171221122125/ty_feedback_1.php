<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_feedback`;");
E_C("CREATE TABLE `ty_feedback` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '默认自增ID',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '回复留言ID',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `msg_title` varchar(200) NOT NULL DEFAULT '' COMMENT '留言标题',
  `msg_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '留言类型',
  `msg_status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '处理状态',
  `msg_content` text NOT NULL COMMENT '留言内容',
  `msg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '留言时间',
  `message_img` varchar(255) NOT NULL DEFAULT '0',
  `order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `msg_area` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ty_feedback` values('1','0','26','wyp001@126.com','的会计师法合','2','0','是发达的说法飞','1463119951','0','0','0');");
E_D("replace into `ty_feedback` values('2','0','26','wyp001@126.com','测试留言','0','0','是的发送到','1463122261','0','0','0');");
E_D("replace into `ty_feedback` values('3','0','26','wyp001@126.com','个电饭锅','0','0','的规范的法国队','1463122524','0','0','0');");
E_D("replace into `ty_feedback` values('4','0','26','wyp001@126.com','的腹股沟','0','0','个电饭锅','1463122575','0','0','0');");
E_D("replace into `ty_feedback` values('5','0','26','wyp001@126.com','的风格大方','0','0','的风格','1463122657','0','0','0');");
E_D("replace into `ty_feedback` values('6','0','26','wyp001@126.com','2323','0','0','是打发','1463122703','0','0','0');");
E_D("replace into `ty_feedback` values('7','0','26','wyp001@126.com','福德宫','0','0','的风格的双方各','1463122835','0','0','0');");
E_D("replace into `ty_feedback` values('8','0','26','wyp001@126.com','是打发','0','0','的说法','1463122943','0','0','0');");
E_D("replace into `ty_feedback` values('9','0','26','wyp001@126.com','是打发','0','0','的说法','1463123000','0','0','0');");

require("../../inc/footer.php");
?>