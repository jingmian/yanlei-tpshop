<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_message`;");
E_C("CREATE TABLE `ty_message` (
  `message_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '消息ID',
  `admin_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id',
  `message` text CHARACTER SET utf8 NOT NULL COMMENT '站内信内容',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '个体消息：0，全体消息：1',
  `category` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '系统消息：0，活动消息：1',
  `send_time` int(10) unsigned NOT NULL COMMENT '发送时间',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT");
E_D("replace into `ty_message` values('1','1','测试个体消息','1','0','2016');");
E_D("replace into `ty_message` values('2','1','测试个人消息99','0','0','2016');");
E_D("replace into `ty_message` values('3','1','测试全体消息99','1','0','2016');");
E_D("replace into `ty_message` values('4','1','正式测试全部会员消息','1','0','2016');");
E_D("replace into `ty_message` values('5','1','测试个体会员消息','0','0','2016');");
E_D("replace into `ty_message` values('6','1','测试33333','1','0','2016');");
E_D("replace into `ty_message` values('7','1','测试个体','0','0','2016');");
E_D("replace into `ty_message` values('8','1','测试个体33333','0','0','2016');");

require("../../inc/footer.php");
?>