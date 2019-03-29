<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_account_log_store`;");
E_C("CREATE TABLE `ty_account_log_store` (
  `log_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(8) unsigned NOT NULL,
  `store_money` decimal(10,2) NOT NULL COMMENT '店铺金额',
  `pending_money` decimal(10,2) NOT NULL COMMENT '店铺未结算金额',
  `change_time` int(10) unsigned NOT NULL COMMENT '变动时间',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `order_sn` varchar(50) DEFAULT NULL COMMENT '订单编号',
  `order_id` int(10) DEFAULT NULL COMMENT '订单id',
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8");
E_D("replace into `ty_account_log_store` values('1','2','3126.31','-3126.31','1468591458','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('2','2','1000.00','1000.00','1468850787','平台提现',NULL,'0');");
E_D("replace into `ty_account_log_store` values('3','2','800.00','-800.00','1468850976','平台提现',NULL,'0');");
E_D("replace into `ty_account_log_store` values('4','2','0.00','-295.38','1469262780','退货退款到余额',NULL,'219');");
E_D("replace into `ty_account_log_store` values('5','2','0.00','-195.92','1469263538','退货退款到余额',NULL,'219');");
E_D("replace into `ty_account_log_store` values('6','2','-9545.52','9545.52','1469275457','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('7','2','-9545.52','9545.52','1469275739','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('8','2','453.48','-453.48','1469275834','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('9','2','388.25','-388.25','1469277921','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('10','2','0.00','-84.90','1471010807','退货退款到余额1111',NULL,'262');");
E_D("replace into `ty_account_log_store` values('11','2','290.66','-290.66','1471514588','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('12','3','176.00','-176.00','1471527702','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('13','3','216.00','-216.00','1471528465','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('14','3','132.65','-132.65','1471529233','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('15','3','132.50','-132.50','1471529787','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('16','3','132.50','-132.50','1471530065','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('17','2','69.90','-69.90','1472030274','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('18','3','791.90','-791.90','1474963572','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('19','3','1191.90','-1191.90','1474967139','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('20','2','4326.70','-4326.70','1472539326','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('21','3','492.26','-492.26','1472540321','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('22','3','0.00','-782.04','1472541737','退货退款到余额21223232',NULL,'317');");
E_D("replace into `ty_account_log_store` values('23','3','2260.90','-2260.90','1475222019','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('24','3','0.00','-3973.36','1472552000','退货退款到余额 测试退款',NULL,'320');");
E_D("replace into `ty_account_log_store` values('25','3','4683.34','-4683.34','1475230764','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('26','3','4683.36','-4683.36','1475232262','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('27','3','8223.76','-8223.76','1477825002','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('28','2','0.02','-0.02','1473390627','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('29','1','100.00','-100.00','1477301281','平台提现',NULL,'0');");
E_D("replace into `ty_account_log_store` values('30','1','-100.00','0.00','1477303879','平台提现',NULL,'0');");
E_D("replace into `ty_account_log_store` values('31','1','3362.32','-3362.32','1478228313','平台订单结算',NULL,'0');");
E_D("replace into `ty_account_log_store` values('32','1','-500.00','0.00','1493088525','平台提现',NULL,'0');");

require("../../inc/footer.php");
?>