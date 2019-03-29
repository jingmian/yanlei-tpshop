<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_seller`;");
E_C("CREATE TABLE `ty_seller` (
  `seller_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '卖家编号',
  `seller_name` varchar(50) NOT NULL COMMENT '卖家用户名',
  `user_id` int(10) unsigned NOT NULL COMMENT '用户编号',
  `group_id` int(10) unsigned NOT NULL COMMENT '卖家组编号',
  `store_id` int(10) unsigned NOT NULL COMMENT '店铺编号',
  `is_admin` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否管理员(0-不是 1-是)',
  `seller_quicklink` varchar(255) DEFAULT NULL COMMENT '卖家快捷操作',
  `last_login_time` int(11) unsigned DEFAULT NULL COMMENT '最后登录时间',
  `enabled` tinyint(1) DEFAULT '0' COMMENT '激活状态 0启用1关闭',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='卖家用户表'");
E_D("replace into `ty_seller` values('1','seller','1','1','1','1',NULL,'1502954596','0',NULL);");
E_D("replace into `ty_seller` values('2','seller2','24','2','2','1',NULL,'1478136236','0',NULL);");
E_D("replace into `ty_seller` values('3','88888888','29','0','3','1',NULL,'1494048338','0',NULL);");
E_D("replace into `ty_seller` values('4','qqq','37','0','4','1',NULL,NULL,'0',NULL);");
E_D("replace into `ty_seller` values('5','oiuytrew','40','0','5','1',NULL,'1508760105','0',NULL);");
E_D("replace into `ty_seller` values('6','wyp04','26','1','1','0',NULL,'1475113405','0',NULL);");
E_D("replace into `ty_seller` values('7','thua','17','2','2','0',NULL,'1477641247','0','1477641071');");
E_D("replace into `ty_seller` values('8','18565625933','60','0','6','1',NULL,'1509288574','0',NULL);");
E_D("replace into `ty_seller` values('9','tkadmin','63','0','7','1',NULL,'1493090418','0',NULL);");
E_D("replace into `ty_seller` values('10','yeshuai','80','0','8','1',NULL,'1496806185','0',NULL);");
E_D("replace into `ty_seller` values('11','shuai','81','0','9','1',NULL,'1497598031','0',NULL);");

require("../../inc/footer.php");
?>