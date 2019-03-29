<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_wx_keyword`;");
E_C("CREATE TABLE `ty_wx_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) NOT NULL,
  `pid` int(11) NOT NULL COMMENT '对应表ID',
  `token` varchar(60) NOT NULL,
  `type` varchar(30) DEFAULT 'TEXT' COMMENT '关键词操作类型',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`) USING BTREE,
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=325 DEFAULT CHARSET=utf8");
E_D("replace into `ty_wx_keyword` values('280','孤鸿寡鹄','5','vjotae1439949952','TEXT');");
E_D("replace into `ty_wx_keyword` values('281','包包','6','vjotae1439949952','TEXT');");
E_D("replace into `ty_wx_keyword` values('324','车型的谁','9','vjotae1439949952','TEXT');");

require("../../inc/footer.php");
?>