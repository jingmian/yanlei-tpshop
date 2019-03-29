<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_wx_text`;");
E_C("CREATE TABLE `ty_wx_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `keyword` char(255) NOT NULL,
  `precisions` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `updatetime` varchar(13) NOT NULL,
  `click` int(11) NOT NULL,
  `token` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='文本回复表'");
E_D("replace into `ty_wx_text` values('5','27','','孤鸿寡鹄','0','啊飒飒','1439958307','1439958307','0','vjotae1439949952');");
E_D("replace into `ty_wx_text` values('6','13','','sas','0','sasqa','1447072140','1447072140','0','tiyykb1446817155');");
E_D("replace into `ty_wx_text` values('9','0','','车型的谁','0','好久好久双方都发生sfdgdfd','1447078190','','0','vjotae1439949952');");

require("../../inc/footer.php");
?>