<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_remittance`;");
E_C("CREATE TABLE `ty_store_remittance` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商家转账记录表',
  `store_id` int(11) DEFAULT '0' COMMENT '汇款的商家id',
  `bank_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '收款银行名称',
  `account_bank` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '银行账号',
  `account_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '开户人名称',
  `money` decimal(10,2) DEFAULT '0.00' COMMENT '汇款金额',
  `status` tinyint(1) DEFAULT '0' COMMENT '0汇款失败 1汇款成功',
  `create_time` int(11) DEFAULT '0' COMMENT '汇款时间',
  `remark` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '汇款备注',
  `admin_id` int(11) DEFAULT '0' COMMENT '管理员id',
  `withdrawals_id` int(11) DEFAULT '0' COMMENT '提现申请表id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ty_store_remittance` values('1','2','222','333','444','555.00','0','1468837156','34','43','5344');");
E_D("replace into `ty_store_remittance` values('2','2','4543','435','4354','534.00','34','1468837156','435','43','344');");
E_D("replace into `ty_store_remittance` values('3','2','3434','324','423423','800.00','1','1468850976','222222222222222222222','1','5');");
E_D("replace into `ty_store_remittance` values('4','1','支付宝','sdfsdfsdfs','sdfsdfsdfds','100.00','1','1477301281','啊啊啊啊','1','6');");
E_D("replace into `ty_store_remittance` values('5','1','ffff','ffff','fgfff','100.00','1','1477303879','hh','1','8');");
E_D("replace into `ty_store_remittance` values('6','1','000','000','000','500.00','1','1493088525','tongyi','1','11');");

require("../../inc/footer.php");
?>