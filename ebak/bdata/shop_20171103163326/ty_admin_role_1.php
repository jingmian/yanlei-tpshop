<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_admin_role`;");
E_C("CREATE TABLE `ty_admin_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `role_name` varchar(30) DEFAULT NULL COMMENT '角色名称',
  `act_list` text COMMENT '权限列表',
  `role_desc` varchar(255) DEFAULT NULL COMMENT '角色描述',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ty_admin_role` values('2','编辑','19,20,23,21,22,35,36,52,53,18,33,34,24,25,26,27,28,29,43,50,30,31,32,39,40,41,42,37,38,49,44,45,46,47,48','违法接口');");
E_D("replace into `ty_admin_role` values('1','超级管理员','all','管理全站');");
E_D("replace into `ty_admin_role` values('4','客服','','客服处理订单发货');");

require("../../inc/footer.php");
?>