<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_complain_subject`;");
E_C("CREATE TABLE `ty_complain_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '投诉主题id',
  `subject_content` varchar(50) NOT NULL COMMENT '投诉主题',
  `subject_desc` varchar(100) NOT NULL COMMENT '投诉主题描述',
  `subject_state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '投诉主题状态(1-有效/2-失效)',
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='投诉主题表'");
E_D("replace into `ty_complain_subject` values('1','商家不同意退款','买家申请退款被拒绝。','2');");
E_D("replace into `ty_complain_subject` values('2','未收到货','交易成功，未收到货，钱已经付给商家，可进行维权。','1');");
E_D("replace into `ty_complain_subject` values('3','售后保障服务','交易完成后30天内，在使用商品过程中，发现商品有质量问题或无法正常使用，可进行维权。','1');");

require("../../inc/footer.php");
?>