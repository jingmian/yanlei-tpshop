<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_sms_log`;");
E_C("CREATE TABLE `ty_sms_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '表id',
  `mobile` varchar(11) DEFAULT '' COMMENT '手机号',
  `session_id` varchar(128) DEFAULT '' COMMENT 'session_id',
  `add_time` int(11) DEFAULT '0' COMMENT '发送时间',
  `code` varchar(10) DEFAULT '' COMMENT '验证码',
  `seller_id` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1");
E_D("replace into `ty_sms_log` values('24','15889560679','9732B70D-CFE7-456C-985C-030D193F','1456966580','3369','0');");
E_D("replace into `ty_sms_log` values('25','13202289753','2img1rvnn6812brdl1ausb7ut1','1469697225','2342','0');");
E_D("replace into `ty_sms_log` values('26','13554754711','7eofajcmj704qhkpvijqnbjgj2','1471852308','5313','0');");
E_D("replace into `ty_sms_log` values('27','13554754711','7eofajcmj704qhkpvijqnbjgj2','1471853607','8398','0');");
E_D("replace into `ty_sms_log` values('28','13118914190','jqq66fpljirth19ri79dnn3bp4','1474360638','1868','0');");
E_D("replace into `ty_sms_log` values('29','15862654699','868715027473929','1477022558','4116','0');");

require("../../inc/footer.php");
?>