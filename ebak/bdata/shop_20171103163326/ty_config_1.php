<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_config`;");
E_C("CREATE TABLE `ty_config` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `value` varchar(512) DEFAULT NULL,
  `inc_type` varchar(20) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `ty_config` values('1','site_url','http://www.tp-shop.cn','shop_info',NULL);");
E_D("replace into `ty_config` values('2','record_no','','shop_info',NULL);");
E_D("replace into `ty_config` values('3','store_name','海思堡购物网','shop_info',NULL);");
E_D("replace into `ty_config` values('4','store_logo','/Public/images/newLogo.png','shop_info',NULL);");
E_D("replace into `ty_config` values('5','store_title','全国连锁店','shop_info',NULL);");
E_D("replace into `ty_config` values('6','store_desc','海思堡购物网','shop_info',NULL);");
E_D("replace into `ty_config` values('7','store_keyword','海思堡购物网','shop_info',NULL);");
E_D("replace into `ty_config` values('8','contact','','shop_info',NULL);");
E_D("replace into `ty_config` values('9','phone','13730717060','shop_info',NULL);");
E_D("replace into `ty_config` values('10','address','四川省绵阳江油市','shop_info',NULL);");
E_D("replace into `ty_config` values('11','qq','540616918','shop_info',NULL);");
E_D("replace into `ty_config` values('12','qq2','540616918','shop_info',NULL);");
E_D("replace into `ty_config` values('13','qq3','540616918','shop_info',NULL);");
E_D("replace into `ty_config` values('14','freight_free','1000','shopping',NULL);");
E_D("replace into `ty_config` values('15','point_rate','100','shopping',NULL);");
E_D("replace into `ty_config` values('16','is_mark','1','water',NULL);");
E_D("replace into `ty_config` values('17','mark_txt','wxshop','water',NULL);");
E_D("replace into `ty_config` values('18','mark_img','/Public/upload/Public/2016/11-02/58194cf71e821.png','water',NULL);");
E_D("replace into `ty_config` values('19','mark_width','200','water',NULL);");
E_D("replace into `ty_config` values('20','mark_height','100','water',NULL);");
E_D("replace into `ty_config` values('21','mark_degree','55','water',NULL);");
E_D("replace into `ty_config` values('22','mark_quality','55','water',NULL);");
E_D("replace into `ty_config` values('23','sel','5','water',NULL);");
E_D("replace into `ty_config` values('24','smty_server','smtp.qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('25','smty_port','465','',NULL);");
E_D("replace into `ty_config` values('26','smty_user','511482696@qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('27','smty_pwd','liqozupnlkihbjjh','smtp',NULL);");
E_D("replace into `ty_config` values('28','reg_integral','0','basic',NULL);");
E_D("replace into `ty_config` values('29','file_size','1','basic',NULL);");
E_D("replace into `ty_config` values('30','default_storage','','basic',NULL);");
E_D("replace into `ty_config` values('31','warning_storage','','basic',NULL);");
E_D("replace into `ty_config` values('32','tax','','basic',NULL);");
E_D("replace into `ty_config` values('33','is_remind','0','basic',NULL);");
E_D("replace into `ty_config` values('34','order_finish_time','','basic',NULL);");
E_D("replace into `ty_config` values('35','order_cancel_time','','basic',NULL);");
E_D("replace into `ty_config` values('36','hot_keywords','衣|手机|内衣','basic',NULL);");
E_D("replace into `ty_config` values('37','auto_confirm_date','1','shopping',NULL);");
E_D("replace into `ty_config` values('38','auto_transfer_date','7','shopping',NULL);");
E_D("replace into `ty_config` values('39','app_test','1','basic',NULL);");
E_D("replace into `ty_config` values('40','sms_appkey','233','sms',NULL);");
E_D("replace into `ty_config` values('41','sms_secretKey','5eb81e5cd','sms',NULL);");
E_D("replace into `ty_config` values('42','sms_product','搜豹','sms',NULL);");
E_D("replace into `ty_config` values('43','sms_templateCode','SM','sms',NULL);");
E_D("replace into `ty_config` values('44','regis_sms_enable','0','sms',NULL);");
E_D("replace into `ty_config` values('45','sms_time_out','60','sms',NULL);");
E_D("replace into `ty_config` values('46','test_eamil','wangqh01292@163.com','',NULL);");
E_D("replace into `ty_config` values('47','smty_server','smtp.qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('48','smty_port','465','',NULL);");
E_D("replace into `ty_config` values('49','smty_user','511482696@qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('50','smty_pwd','liqozupnlkihbjjh','smtp',NULL);");
E_D("replace into `ty_config` values('51','test_eamil','wangqh01292@163.com','',NULL);");
E_D("replace into `ty_config` values('56','smty_server','smtp.qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('52','smty_server','smtp.qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('53','smty_user','511482696@qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('54','smty_pwd','liqozupnlkihbjjh','smtp',NULL);");
E_D("replace into `ty_config` values('55','test_eamil','wangqh01292@163.com','',NULL);");
E_D("replace into `ty_config` values('57','smty_user','511482696@qq.com','smtp',NULL);");
E_D("replace into `ty_config` values('58','smty_pwd','liqozupnlkihbjjh','smtp',NULL);");
E_D("replace into `ty_config` values('59','min','100','basic',NULL);");
E_D("replace into `ty_config` values('60','smty_server','smtp.qq.com','',NULL);");
E_D("replace into `ty_config` values('61','smty_user','703522188@qq.com','',NULL);");
E_D("replace into `ty_config` values('62','smty_pwd','liqozupnlkihbjjh','',NULL);");
E_D("replace into `ty_config` values('63','smty_port','25','smtp',NULL);");
E_D("replace into `ty_config` values('64','regis_smty_enable','0','smtp',NULL);");
E_D("replace into `ty_config` values('65','test_eamil','','smtp',NULL);");
E_D("replace into `ty_config` values('66','mark_type','text','water',NULL);");

require("../../inc/footer.php");
?>