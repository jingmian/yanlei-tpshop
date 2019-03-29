<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_rebate_log`;");
E_C("CREATE TABLE `ty_rebate_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分成记录表',
  `user_id` int(11) DEFAULT '0' COMMENT '获佣用户',
  `buy_user_id` int(11) DEFAULT '0' COMMENT '购买人id',
  `nickname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '购买人名称',
  `order_sn` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '订单编号',
  `order_id` int(11) DEFAULT '0' COMMENT '订单id',
  `goods_price` decimal(10,2) DEFAULT '0.00' COMMENT '订单商品总额',
  `money` decimal(10,2) DEFAULT '0.00' COMMENT '获佣金额',
  `level` tinyint(1) DEFAULT '1' COMMENT '获佣用户级别',
  `create_time` int(11) DEFAULT '0' COMMENT '分成记录生成时间',
  `confirm` int(11) DEFAULT '0' COMMENT '确定收货时间',
  `status` tinyint(1) DEFAULT '0' COMMENT '0未付款,1已付款, 2等待分成(已收货) 3已分成, 4已取消',
  `confirm_time` int(11) DEFAULT '0' COMMENT '确定分成或者取消时间',
  `remark` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '如果是取消, 有取消备注',
  `store_id` int(11) DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8");
E_D("replace into `ty_rebate_log` values('10','2','1','测试人员','201608182124075842','272','216.00','16.00','1','1469980800','0','3','1471527308','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('11','5','1','测试人员','201608182124075842','272','216.00','12.00','2','1469980800','0','3','1471527308','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('12','13','1','测试人员','201608182124075842','272','216.00','8.00','3','1469980800','0','3','1471527308','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('13','2','1','测试人员','201608182152335533','273','216.00','16.00','1','1471528353','0','3','1471528465','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('14','5','1','测试人员','201608182152335533','273','216.00','12.00','2','1471528353','0','3','1471528465','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('15','13','1','测试人员','201608182152335533','273','216.00','8.00','3','1471528353','0','3','1471528465','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('16','2','1','测试人员','201608182204418029','274','216.00','16.00','1','1471529081','0','3','1471529233','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('17','5','1','测试人员','201608182204418029','274','216.00','12.00','2','1471529081','0','3','1471529233','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('18','13','1','测试人员','201608182204418029','274','216.00','8.00','3','1471529081','0','3','1471529233','满天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('19','2','1','测试人员','201608271533013426','285','1000.00','10.00','1','1472283181','1472284815','3','1474963572','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('20','5','1','测试人员','201608271533013426','285','1000.00','6.00','2','1472283181','1472284815','3','1474963572','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('21','13','1','测试人员','201608271533013426','285','1000.00','4.00','3','1472283181','1472284815','3','0','提前卖家设置分成','3');");
E_D("replace into `ty_rebate_log` values('22','2','1','测试人员','201608271702135728','291','1500.00','10.00','1','1472288533','1472288657','3','1474967139','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('23','5','1','测试人员','201608271702135728','291','1500.00','6.00','2','1472288533','1472288657','3','1474967139','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('24','13','1','测试人员','201608271702135728','291','1500.00','4.00','3','1472288533','1472288657','3','0','dsadsd','3');");
E_D("replace into `ty_rebate_log` values('25','2','1','测试人员','201608291551548582','293','980.00','10.00','1','1472457114','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('26','5','1','测试人员','201608291551548582','293','980.00','6.00','2','1472457114','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('27','13','1','测试人员','201608291551548582','293','980.00','4.00','3','1472457114','0','3','1472473161','sadasdsdsadasds满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('28','2','1','测试人员','201608301628312389','318','7000.00','35.00','1','1472545711','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('29','5','1','测试人员','201608301628312389','318','7000.00','21.00','2','1472545711','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('30','13','1','测试人员','201608301628312389','318','7000.00','14.00','3','1472545711','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('31','2','1','测试人员','201608301638278105','319','9000.00','45.00','1','1472546307','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('32','5','1','测试人员','201608301638278105','319','9000.00','27.00','2','1472546307','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('33','13','1','测试人员','201608301638278105','319','9000.00','18.00','3','1472546307','0','0','0','','3');");
E_D("replace into `ty_rebate_log` values('34','2','1','测试人员','201608301641103956','320','9000.00','45.00','1','1472546470','1472552208','4','0','','3');");
E_D("replace into `ty_rebate_log` values('35','5','1','测试人员','201608301641103956','320','9000.00','27.00','2','1472546470','1472552208','4','0','','3');");
E_D("replace into `ty_rebate_log` values('36','13','1','测试人员','201608301641103956','320','9000.00','18.00','3','1472546470','1472552208','4','0','','3');");
E_D("replace into `ty_rebate_log` values('37','2','1','测试人员','201609301846393143','321','9000.00','45.00','1','1475232400','1475232962','3','1477825002','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('38','5','1','测试人员','201609301846393143','321','9000.00','27.00','2','1475232400','1475232962','3','1477825002','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('39','13','1','测试人员','201609301846393143','321','9000.00','18.00','3','1475232400','1475232962','3','1477825002','满7天,程序自动分成.','3');");
E_D("replace into `ty_rebate_log` values('40','2','1','测试人员','201608311438593861','322','8920.00','45.00','1','1472625539','0','1','0','','3');");
E_D("replace into `ty_rebate_log` values('41','5','1','测试人员','201608311438593861','322','8920.00','27.00','2','1472625539','0','1','0','','3');");
E_D("replace into `ty_rebate_log` values('42','13','1','测试人员','201608311438593861','322','8920.00','18.00','3','1472625539','0','1','0','','3');");

require("../../inc/footer.php");
?>