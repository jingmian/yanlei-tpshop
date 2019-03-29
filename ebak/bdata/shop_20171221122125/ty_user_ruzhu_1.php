<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_user_ruzhu`;");
E_C("CREATE TABLE `ty_user_ruzhu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_time` int(11) NOT NULL DEFAULT '0' COMMENT '申请时间',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) NOT NULL DEFAULT '0',
  `mobile` varchar(50) NOT NULL DEFAULT '0',
  `lbtype` varchar(50) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ty_user_ruzhu` values('10','1501679486','83','13413011133','13413011133','水鬼','众联科技');");
E_D("replace into `ty_user_ruzhu` values('11','1509515853','128','1','18051296447','1','1');");

require("../../inc/footer.php");
?>