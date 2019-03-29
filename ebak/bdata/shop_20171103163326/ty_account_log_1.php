<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_account_log`;");
E_C("CREATE TABLE `ty_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL COMMENT '用户金额',
  `frozen_money` decimal(10,2) NOT NULL COMMENT '冻结金额',
  `pay_points` mediumint(9) NOT NULL COMMENT '支付积分',
  `change_time` int(10) unsigned NOT NULL COMMENT '变动时间',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `order_sn` varchar(50) DEFAULT NULL COMMENT '订单编号',
  `order_id` int(10) DEFAULT NULL COMMENT '订单id',
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=287 DEFAULT CHARSET=utf8");
E_D("replace into `ty_account_log` values('195','24','0.00','0.00','59','1462246092','下单赠送积分',NULL,NULL);");
E_D("replace into `ty_account_log` values('196','1','0.01','0.00','0','1467689805','退款到用户余额',NULL,NULL);");
E_D("replace into `ty_account_log` values('197','1','0.01','0.00','0','1467689840','退款到用户余额',NULL,NULL);");
E_D("replace into `ty_account_log` values('198','1','0.01','0.00','0','1467690045','退款到用户余额',NULL,NULL);");
E_D("replace into `ty_account_log` values('199','1','0.01','0.00','0','1467690352','退款到用户余额',NULL,NULL);");
E_D("replace into `ty_account_log` values('200','1','0.01','0.00','0','1467698294','退款到用户余额',NULL,NULL);");
E_D("replace into `ty_account_log` values('201','1','123.00','0.00','0','1467973957','订单退货',NULL,NULL);");
E_D("replace into `ty_account_log` values('202','1','100.00','0.00','0','1467974712','订单退货',NULL,NULL);");
E_D("replace into `ty_account_log` values('203','1','200.00','0.00','0','1467974891','订单退货',NULL,'0');");
E_D("replace into `ty_account_log` values('204','1','100.00','0.00','0','1467975026','订单退货',NULL,'125');");
E_D("replace into `ty_account_log` values('205','27','0.00','0.00','20','1468136655','会员注册赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('206','1','900.00','0.00','0','1468413722','订单退货',NULL,'80');");
E_D("replace into `ty_account_log` values('207','1','900.00','0.00','0','1468414081','订单退货',NULL,'80');");
E_D("replace into `ty_account_log` values('208','1','900.00','0.00','0','1468414954','订单退货',NULL,'80');");
E_D("replace into `ty_account_log` values('209','1','-33.00','0.00','0','1468848100','平台提现',NULL,'0');");
E_D("replace into `ty_account_log` values('210','28','0.00','0.00','20','1468980598','会员注册赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('211','1','-7.09','0.00','-70','1469111266','下单消费','201607212227468204','204');");
E_D("replace into `ty_account_log` values('212','1','-2.91','0.00','-30','1469111266','下单消费','201607212227466464','205');");
E_D("replace into `ty_account_log` values('213','1','-6.00','0.00','-600','1469155927','下单消费','201607221052078297','206');");
E_D("replace into `ty_account_log` values('214','1','-4.00','0.00','-400','1469155927','下单消费','201607221052072260','207');");
E_D("replace into `ty_account_log` values('215','1','-399.15','0.00','0','1469195017','下单消费','201607222143374740','213');");
E_D("replace into `ty_account_log` values('216','1','-69.85','0.00','-1','1469195017','下单消费','201607222143379718','214');");
E_D("replace into `ty_account_log` values('217','1','-399.15','0.00','0','1469195166','下单消费','201607222146069987','215');");
E_D("replace into `ty_account_log` values('218','1','-69.85','0.00','-1','1469195166','下单消费','201607222146061875','216');");
E_D("replace into `ty_account_log` values('219','1','-8.55','0.00','-170','1469257900','下单消费','201607231511402346','219');");
E_D("replace into `ty_account_log` values('220','1','-1.45','0.00','-30','1469257900','下单消费','201607231511408276','220');");
E_D("replace into `ty_account_log` values('221','1','295.38','0.00','102','1469262780','订单退货',NULL,'219');");
E_D("replace into `ty_account_log` values('222','1','195.92','0.00','68','1469263538','订单退货',NULL,'219');");
E_D("replace into `ty_account_log` values('223','1','0.00','0.00','200','1469263583','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('224','1','-8.55','0.00','-85','1469272616','下单消费','201607231916567201','221');");
E_D("replace into `ty_account_log` values('225','1','-1.45','0.00','-15','1469272616','下单消费','201607231916567117','222');");
E_D("replace into `ty_account_log` values('226','1','0.00','0.00','200','1469273826','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('227','1','-10.00','0.00','-100','1469276857','下单消费','201607232027374468','223');");
E_D("replace into `ty_account_log` values('228','1','0.00','0.00','200','1469277325','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('229','1','-1.00','0.00','-100','1469608020','下单消费','201607271627002314','226');");
E_D("replace into `ty_account_log` values('230','1','-1.00','0.00','-100','1469608080','下单消费','201607271628004874','227');");
E_D("replace into `ty_account_log` values('231','1','-1.00','0.00','-100','1469608133','下单消费','201607271628535154','228');");
E_D("replace into `ty_account_log` values('232','1','-10.00','0.00','-100','1469612054','下单消费','201607271734141259','229');");
E_D("replace into `ty_account_log` values('233','1','-7.39','0.00','-73','1470308699','下单消费','201608041904593740','232');");
E_D("replace into `ty_account_log` values('234','1','-2.61','0.00','-27','1470308699','下单消费','201608041904597512','233');");
E_D("replace into `ty_account_log` values('235','34','-69.90','0.00','0','1470922459','下单消费','201608112134197026','248');");
E_D("replace into `ty_account_log` values('236','1','84.90','0.00','0','1471010807','订单退货',NULL,'262');");
E_D("replace into `ty_account_log` values('237','13','8.00','0.00','0','1471436433','订单:201608171829436724分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('238','2','16.00','0.00','0','1471441203','订单:201608171829436724分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('239','5','12.00','0.00','0','1471441203','订单:201608171829436724分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('240','1','-30.00','0.00','-10','1471525625','下单消费','201608182107056656','270');");
E_D("replace into `ty_account_log` values('241','1','-30.00','0.00','-10','1471526647','下单消费','201608182124075842','272');");
E_D("replace into `ty_account_log` values('242','2','16.00','0.00','0','1471527308','订单:201608182124075842分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('243','5','12.00','0.00','0','1471527308','订单:201608182124075842分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('244','13','8.00','0.00','0','1471527308','订单:201608182124075842分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('245','1','0.00','0.00','30','1471528401','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('246','2','16.00','0.00','0','1471528465','订单:201608182152335533分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('247','5','12.00','0.00','0','1471528465','订单:201608182152335533分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('248','13','8.00','0.00','0','1471528465','订单:201608182152335533分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('249','1','0.00','0.00','30','1471529130','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('250','2','16.00','0.00','0','1471529233','订单:201608182204418029分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('251','5','12.00','0.00','0','1471529233','订单:201608182204418029分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('252','13','8.00','0.00','0','1471529233','订单:201608182204418029分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('253','1','0.00','0.00','10','1472284815','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('254','13','4.00','0.00','0','1472284958','订单:201608271533013426分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('255','2','10.00','0.00','0','1474963572','订单:201608271533013426分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('256','5','6.00','0.00','0','1474963572','订单:201608271533013426分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('257','1','0.00','0.00','10','1472288657','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('258','13','4.00','0.00','0','1472288681','订单:201608271702135728分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('259','2','10.00','0.00','0','1474967139','订单:201608271702135728分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('260','5','6.00','0.00','0','1474967139','订单:201608271702135728分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('261','1','-7.75','0.00','-77','1472460888','下单消费','201608291654481811','296');");
E_D("replace into `ty_account_log` values('262','1','-2.25','0.00','-23','1472460888','下单消费','201608291654481767','297');");
E_D("replace into `ty_account_log` values('263','13','4.00','0.00','0','1472463604','订单:201608291551548582分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('264','13','4.00','0.00','0','1472473161','订单:201608291551548582分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('265','1','782.04','0.00','0','1472541737','订单退货',NULL,'317');");
E_D("replace into `ty_account_log` values('266','1','-10.00','0.00','-100','1472545711','下单消费','201608301628312389','318');");
E_D("replace into `ty_account_log` values('267','1','-10.00','0.00','-1000','1472546470','下单消费','201608301641103956','320');");
E_D("replace into `ty_account_log` values('268','1','3973.36','0.00','44','1472552000','订单退货',NULL,'320');");
E_D("replace into `ty_account_log` values('269','1','-10.00','0.00','-1000','1475232400','下单消费','201609301846393143','321');");
E_D("replace into `ty_account_log` values('270','1','0.00','0.00','900','1475232496','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('271','2','45.00','0.00','0','1477825002','订单:201609301846393143分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('272','5','27.00','0.00','0','1477825002','订单:201609301846393143分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('273','13','18.00','0.00','0','1477825002','订单:201609301846393143分佣',NULL,'0');");
E_D("replace into `ty_account_log` values('274','1','0.00','0.00','900','1472626115','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('275','1','-59.00','0.00','0','1472698340','下单消费','201609011052203557','325');");
E_D("replace into `ty_account_log` values('276','1','0.00','0.00','100','1472710518','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('277','1','-100.00','0.00','0','1472711349','下单消费','201609011429092622','326');");
E_D("replace into `ty_account_log` values('278','1','0.00','0.00','100','1472712335','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('279','1','-56.05','0.00','0','1472712335','下单消费','201609011445355457','329');");
E_D("replace into `ty_account_log` values('280','1','0.00','0.00','100','1472712376','下单赠送积分',NULL,'0');");
E_D("replace into `ty_account_log` values('281','1','-59.00','0.00','0','1472712376','下单消费','201609011446162435','330');");
E_D("replace into `ty_account_log` values('282','1','-100.00','0.00','0','1477105752','下单消费','201610221109129960','335');");
E_D("replace into `ty_account_log` values('283','1','-312.00','0.00','0','1477116966','下单消费','201610221416063530','337');");
E_D("replace into `ty_account_log` values('284','1','-75.05','0.00','0','1477120668','下单消费','201610221517483646','339');");
E_D("replace into `ty_account_log` values('285','1','-1.00','0.00','-100','1490512829','下单消费','201703261520295106','356');");
E_D("replace into `ty_account_log` values('286','1','-1.00','0.00','-100','1490630013','下单消费','201703272353332356','365');");

require("../../inc/footer.php");
?>