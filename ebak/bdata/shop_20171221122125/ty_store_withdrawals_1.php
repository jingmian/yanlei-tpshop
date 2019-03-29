<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_withdrawals`;");
E_C("CREATE TABLE `ty_store_withdrawals` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商家提现申请表',
  `store_id` int(11) DEFAULT '0' COMMENT '商家id',
  `create_time` int(11) DEFAULT '0' COMMENT '申请日期',
  `money` decimal(10,2) DEFAULT '0.00' COMMENT '提现金额',
  `bank_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '银行名称 如支付宝 微信 中国银行 农业银行等',
  `account_bank` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '银行账号',
  `account_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '银行账户名 可以是支付宝可以其他银行',
  `remark` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '提现备注',
  `status` tinyint(1) DEFAULT '0' COMMENT '提现状态0申请中1申请成功2申请失败',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ty_store_withdrawals` values('4','2','1468837156','220.00','222222aaaaaaaaaaaaaa','3333bbbbbbbbbbb','44444444444444444','','1');");
E_D("replace into `ty_store_withdrawals` values('5','2','1468837256','800.00','3434','324','423423','2222222222222222222223333333333333333','1');");
E_D("replace into `ty_store_withdrawals` values('6','1','1477301251','100.00','支付宝','sdfsdfsdfs','sdfsdfsdfds','啊啊啊啊','1');");
E_D("replace into `ty_store_withdrawals` values('7','1','1477301307','100.00','0000','0000','0000','咀嚼测试','2');");
E_D("replace into `ty_store_withdrawals` values('8','1','1477303055','100.00','ffff','ffff','fgfff','hh','1');");
E_D("replace into `ty_store_withdrawals` values('9','1','1477303639','100.00','ededd','ddd','ddd','','0');");
E_D("replace into `ty_store_withdrawals` values('10','1','1477305012','20.00','111','111','11','','0');");
E_D("replace into `ty_store_withdrawals` values('11','1','1477306114','500.00','000','000','000','tongyi','1');");

require("../../inc/footer.php");
?>