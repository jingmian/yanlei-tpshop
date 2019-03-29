<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_coupon`;");
E_C("CREATE TABLE `ty_coupon` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '表id',
  `name` varchar(50) NOT NULL COMMENT '优惠券名字',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '发放类型 0面额模板1 按用户发放 2 注册 3 邀请 4 线下发放',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券金额',
  `condition` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '使用条件',
  `createnum` int(11) DEFAULT '0' COMMENT '发放数量',
  `send_num` int(11) DEFAULT '0' COMMENT '已领取数量',
  `use_num` int(11) DEFAULT '0' COMMENT '已使用数量',
  `send_start_time` int(11) DEFAULT NULL COMMENT '发放开始时间',
  `send_end_time` int(11) DEFAULT NULL COMMENT '发放结束时间',
  `use_start_time` int(11) DEFAULT NULL COMMENT '使用开始时间',
  `use_end_time` int(11) DEFAULT NULL COMMENT '使用结束时间',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `store_id` int(10) DEFAULT '0' COMMENT '商家店铺ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ty_coupon` values('25','TPshop100元券','0','100.00','899.00','100','2','0','1477624431','1480216431','1477497600','1483199940','1477538092','1');");
E_D("replace into `ty_coupon` values('24','','1','10.00','20.00','0','0','0','1477550510','1480142510','1477550510','1482734510','1477464227','1');");
E_D("replace into `ty_coupon` values('23','测试优惠券','1','10.00','200.00','100','37','1','1477208182','1479972982','1477218960','1482564982','1477294635','1');");
E_D("replace into `ty_coupon` values('18','1搜豹公司赠送10元代金券','1','10.00','100.00','10000','85','2','1468944000','1534608000','1468944000','1537286400','1468936082','1');");
E_D("replace into `ty_coupon` values('17','r32423aaaaa','4','4324.00','4342343.00','21','18','0','1467820800','1470412800','1467820800','1473091200','1467798016','2');");
E_D("replace into `ty_coupon` values('19','搜豹公司线下发放券码5元','4','5.00','100.00','10','5','0','1468944000','1471536000','1468944000','1474214400','1468936787','2');");
E_D("replace into `ty_coupon` values('20','搜豹公司面额优惠券测试5元','0','5.00','100.00','10','3','0','1468944000','1471536000','1468944000','1474214400','1468937095','2');");
E_D("replace into `ty_coupon` values('21','2搜豹公司赠送10元代金券','1','10.00','100.00','10','0','0','1468944000','1471536000','1468944000','1474214400','1468936082','2');");
E_D("replace into `ty_coupon` values('22','测试代金券10元','1','10.00','1000.00','0','3','0','1472486400','1475164800','1472486400','1477756800','1472545080','3');");

require("../../inc/footer.php");
?>