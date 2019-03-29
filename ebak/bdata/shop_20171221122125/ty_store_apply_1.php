<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_apply`;");
E_C("CREATE TABLE `ty_store_apply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '申请人会员ID',
  `contacts_name` varchar(20) DEFAULT NULL COMMENT '联系人姓名',
  `contacts_mobile` varchar(20) DEFAULT NULL COMMENT '联系人手机',
  `contacts_email` varchar(50) DEFAULT NULL COMMENT '联系人邮箱',
  `company_name` varchar(30) DEFAULT NULL COMMENT '公司名称',
  `company_type` tinyint(1) DEFAULT '1' COMMENT '公司性质',
  `company_website` varchar(50) DEFAULT NULL COMMENT '公司网址',
  `company_province` mediumint(8) DEFAULT NULL COMMENT '公司所在省份',
  `company_city` mediumint(8) DEFAULT NULL COMMENT '公司所在城市',
  `company_district` mediumint(8) DEFAULT '0' COMMENT '公司所在地区',
  `company_address` varchar(100) DEFAULT NULL COMMENT '公司详细地址',
  `company_telephone` varchar(20) DEFAULT NULL COMMENT '固定电话',
  `company_email` varchar(50) DEFAULT NULL COMMENT '电子邮箱',
  `company_fax` varchar(30) DEFAULT NULL COMMENT '传真',
  `company_zipcode` varchar(20) DEFAULT NULL COMMENT '邮政编码',
  `business_licence_number` varchar(20) DEFAULT NULL COMMENT '营业执照注册号/统一社会信用代码',
  `business_licence_cert` varchar(100) DEFAULT NULL COMMENT '营业执照电子版',
  `threeinone` tinyint(1) DEFAULT '1' COMMENT '是否为一证一码商家',
  `reg_capital` varchar(10) DEFAULT NULL COMMENT '注册资金',
  `legal_person` varchar(20) DEFAULT NULL COMMENT '法人代表',
  `legal_identity_cert` varchar(100) DEFAULT NULL COMMENT '法人身份证照片',
  `legal_identity` varchar(50) DEFAULT NULL COMMENT '法人身份证号',
  `business_date_start` varchar(20) DEFAULT NULL COMMENT '营业执照有效期',
  `business_date_end` varchar(20) DEFAULT NULL,
  `orgnization_code` varchar(20) DEFAULT NULL COMMENT '组织机构代码',
  `orgnization_cert` varchar(100) DEFAULT NULL COMMENT '组织机构代码证',
  `attached_tax_number` varchar(30) DEFAULT NULL COMMENT '纳税人识别号',
  `tax_rate` tinyint(2) DEFAULT '0' COMMENT '纳税类型税码',
  `taxpayer` tinyint(1) DEFAULT '1' COMMENT '纳税人类型',
  `taxpayer_cert` varchar(100) DEFAULT NULL COMMENT '一般纳税人资格证书',
  `business_scope` text COMMENT '营业执照经营范围',
  `store_name` varchar(30) DEFAULT NULL COMMENT '店铺名称',
  `seller_name` varchar(30) DEFAULT NULL COMMENT '卖家账号',
  `store_type` tinyint(1) DEFAULT '0' COMMENT '店铺性质',
  `stroe_address` varchar(100) DEFAULT NULL,
  `store_person_name` varchar(20) DEFAULT NULL COMMENT '店铺负责人姓名',
  `store_person_mobile` varchar(20) DEFAULT NULL COMMENT '店铺负责人手机',
  `store_person_qq` varchar(20) DEFAULT NULL COMMENT '店铺联系人QQ',
  `store_person_email` varchar(50) DEFAULT NULL COMMENT '店铺负责人邮箱',
  `store_person_cert` varchar(100) DEFAULT NULL COMMENT '店铺负责人身份证照片',
  `store_person_identity` varchar(50) DEFAULT NULL COMMENT '店铺负责人身份证号',
  `bank_account_name` varchar(50) DEFAULT NULL COMMENT '结算银行名称',
  `bank_account_number` varchar(50) DEFAULT NULL COMMENT '结算银行账号',
  `bank_branch_name` varchar(50) DEFAULT NULL COMMENT '开户银行支行名称',
  `bank_province` smallint(6) DEFAULT NULL COMMENT '开户银行支行所在地',
  `bank_city` smallint(6) DEFAULT NULL COMMENT '开户银行支行所在城市',
  `main_channel` tinyint(1) DEFAULT '0' COMMENT '近一年主营渠道',
  `sales_volume` varchar(255) DEFAULT NULL COMMENT '近一年销售额',
  `sku_num` mediumint(8) DEFAULT '1' COMMENT '可网售商品数量',
  `ec_experience` tinyint(1) DEFAULT '0' COMMENT '同类电子商务网站经验',
  `avg_price` decimal(10,2) DEFAULT '0.00' COMMENT '预计平均客单价',
  `ware_house` tinyint(1) DEFAULT '0' COMMENT '仓库情况',
  `entity_shop` tinyint(1) DEFAULT '0' COMMENT '有无实体店',
  `sc_name` varchar(50) DEFAULT NULL COMMENT '店铺分类名称',
  `sc_id` int(10) DEFAULT NULL COMMENT '店铺分类编号',
  `sc_bail` mediumint(8) DEFAULT '0' COMMENT '店铺分类保证金',
  `sg_id` tinyint(2) DEFAULT NULL COMMENT '店铺等级编号',
  `sg_name` varchar(30) DEFAULT NULL COMMENT '店铺等级名称',
  `store_class_ids` varchar(255) DEFAULT '' COMMENT '申请分类佣金信息',
  `paying_amount` decimal(10,2) DEFAULT '0.00' COMMENT '付款金额',
  `paying_amount_cert` varchar(100) DEFAULT NULL COMMENT '付款凭证',
  `apply_state` tinyint(2) DEFAULT '0' COMMENT '店铺申请状态',
  `review_msg` varchar(255) DEFAULT NULL COMMENT '管理员审核信息',
  `add_time` int(11) DEFAULT '0' COMMENT '提交申请时间',
  `apply_type` tinyint(1) DEFAULT '0' COMMENT '申请类型默认0企业1个人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ty_store_apply` values('1','1','wyp58168','13410170107','673964249@qq.com','搜豹网络测试','2','99soubao.com','1','2','3','南山区西丽镇留仙大道1001号','0755-86140485','wyp001@163.com','0755-86215365','518000','5465466','/Public/upload/store/cert/2016-07-28/5799cc4728595.jpg','1','100','吴亚朋','/Public/upload/store/cert/2016-07-28/5799cc472b534.jpg','','2016-06-01','2016-11-30','46546546','/Public/upload/store/cert/2016-07-28/5799cc472a63e.jpg','468546546','3','1','/Public/upload/store/cert/2016-07-28/5799cc4729789.jpg','发大发是的发送到法师打发的说法                        	','GOGOGOGGO','wyp001','0',NULL,'吴亚朋','13410170107','786546','wyp001@163.com','/Public/upload/store/cert/2016-07-28/5799cc472c2a5.jpg','','平安银行','21213213','西丽支行','16068','2','5','50','120','0','50.00','1','0','珠宝/首饰','1','0',NULL,NULL,'119','0.00',NULL,'1','的人格风格',NULL,'0');");
E_D("replace into `ty_store_apply` values('2','28','as','13202286852','13202286852@qq.com','asdasd','1','www.asda.cn','1','2','0','dasdasd','0755-86160485','86160485@qq.com','0755-86160485','438408','12345678910121212121',NULL,'1','10','asdad',NULL,NULL,NULL,NULL,'x12121',NULL,'x12121','3','1',NULL,'asdda大多','阿达','2132232','2',NULL,'565564654','13526689563','240659','240659@qq.com',NULL,NULL,'1212121212121212','1212121212121212','1212121212121212','12596','13280','4','100','1','0','300.00','0','0','3C数码','3','0',NULL,NULL,NULL,'0.00',NULL,'0',NULL,'1468983882','0');");
E_D("replace into `ty_store_apply` values('3','29','张谷泉','13554754711','123456@qq.com','深圳搜豹网络有限公司','2','www.tp-shop.cn','28240','28558','28571','上梅林中康创业园7楼735','0755-86140485','132545@sdsd.com','0755-89456879','578987','123456789','/Public/upload/store/cert/2016-07-28/5799c07bf1a7e.jpg','1','5000','吴老板','/Public/upload/store/cert/2016-07-28/5799c07c0117c.png','441489566898755625','2016-07-28','2016-09-29','','/Public/upload/store/cert/2016-07-28/5799c07c003ce.jpg','','3','1','/Public/upload/store/cert/2016-07-28/5799c07bf3127.jpg','计算机软件','旺小姐旗舰店','88888888','1',NULL,'旺小妹','13554754895','123456789','123456@qq.com','/Public/upload/store/cert/2016-07-28/5799c07c01904.png','441489566898753122','吴老板','43454352343242142142','平安银行','28240','28558','1','100','1','0','10.00','1','1','服装鞋包','2','0',NULL,NULL,'a:3:{i:0;s:8:\"1,12,100\";i:1;s:8:\"1,12,101\";i:2;s:8:\"1,12,102\";}','0.00',NULL,'1','平台申请通过,','1469690999','0');");
E_D("replace into `ty_store_apply` values('4','24','吴亚朋','13410170107','wyp001@163.com',NULL,'1',NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'1','0','0.00','0','0',NULL,NULL,'0',NULL,NULL,'','0.00',NULL,'0',NULL,'1469691517','0');");
E_D("replace into `ty_store_apply` values('5','31','李','13202289753','240874144@qq.com','asda','2','','1','2','14','asd','12345678','12345678@qq.com','12345678','123456','123456789456123456','/Public/upload/store/cert/2016-09-07/57cfb1513311e.jpeg','1','100','12','/Public/upload/store/cert/2016-09-07/57cfb15135105.jpeg','421122499632568955',NULL,NULL,'','/Public/upload/store/cert/2016-09-07/57cfb15134925.jpeg','','3','2','/Public/upload/store/cert/2016-09-07/57cfb1513421c.jpeg','asd','123456','123456','1',NULL,'123456','13256966685','123456','123456@qq.com','/Public/upload/store/cert/2016-09-07/57cfb15135887.jpeg','421122499632568955','123456','123456','123456','14234','14887','2','100','1','0','11000.00','2','1','服装鞋包','2','0',NULL,NULL,'a:1:{i:0;s:8:\"5,41,382\";}','0.00',NULL,'0',NULL,'1469697312','0');");
E_D("replace into `ty_store_apply` values('6','32','苏女士','13554754711','123456@qq.com',NULL,'1',NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'1','0','0.00','0','0',NULL,NULL,'0',NULL,NULL,'','0.00',NULL,'0',NULL,'1470053788','0');");
E_D("replace into `ty_store_apply` values('7','37','q','13202289750','123@qq.com','','1','','0','0','0','','','','','','','','1','','','/Public/upload/store/cert/2016-09-07/57cfb3d0bb112.jpeg',NULL,NULL,'=&gt;=&gt;=&gt;','','','','0','1','','','q','qqq','2',NULL,'qqq','13202289750','13202289750','123@qq.com','/Public/upload/store/cert/2016-09-07/57cfb3d0bb8a0.jpeg','421122669963215566','23232323','qq','qwq','636','936','0',NULL,'1','0','0.00','0','0','珠宝/首饰','1','0',NULL,NULL,'a:1:{i:0;s:8:\"2,20,133\";}','0.00',NULL,'1','','1473229715','1');");
E_D("replace into `ty_store_apply` values('8','39','M','13202289750','13202289759@qq.com','asd','1','','338','339','340','asda','5516226','13202289759@qq.com','5516226','123456','12232323','/Public/upload/store/cert/2016-09-07/57cfbb26afb3f.jpeg','1','100','qwdd','/Public/upload/store/cert/2016-09-07/57cfbb26b1068.jpeg','421122499632568955',NULL,NULL,'','/Public/upload/store/cert/2016-09-07/57cfbb26b0a01.jpeg','','3','1','/Public/upload/store/cert/2016-09-07/57cfbb26b0334.jpeg','asda','affdf','afafa','3',NULL,'asfa','13202289750','5516226','5516226@qq.com','/Public/upload/store/cert/2016-09-07/57cfbb26b1969.jpeg','421122499632568955','sad','2666','dqwdas','7531','7986','5','3000','10000','0','1000.00','1','1','珠宝/首饰','1','0',NULL,NULL,'a:1:{i:0;s:8:\"2,21,137\";}','0.00',NULL,'2','','1473231454','0');");
E_D("replace into `ty_store_apply` values('9','40','poiuytrewq','13202289700','13202289700@qq.com','poiuytrewq','2','','3102','0','0','poiuytrewq','5516998','13202289700@qq.com','5516998','123456','sadadsa','/Public/upload/store/cert/2016-09-08/57d1012f4827f.jpeg','1','100000','asdas','/Public/upload/store/cert/2016-09-08/57d1012f4a040.jpeg','459988666458956466',NULL,'=&gt;','','/Public/upload/store/cert/2016-09-08/57d1012f496fd.jpeg','','6','2','/Public/upload/store/cert/2016-09-08/57d1012f48e8e.jpeg','asdasd','poiuytrewq','oiuytrew','2',NULL,'fds','13202289700','13202289700','13202289700@qq.com','/Public/upload/store/cert/2016-09-08/57d1012f4a879.jpeg','459988666458956466','9855554545454545','uytrd','4545454545454','17359','17651','3','2222222','100000','0','10000.00','2','1','家居用品','5','0',NULL,NULL,'a:1:{i:0;s:8:\"7,53,482\";}','0.00',NULL,'1','','1473314941','0');");
E_D("replace into `ty_store_apply` values('10','63',NULL,NULL,NULL,NULL,'1',NULL,'0',NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,'TK','tkadmin','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'1','0','0.00','0','0',NULL,NULL,'0',NULL,NULL,'','0.00',NULL,'1',NULL,'0','0');");
E_D("replace into `ty_store_apply` values('11','80',NULL,NULL,NULL,NULL,'1',NULL,'0',NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,'官方自营店','yeshuai','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'1','0','0.00','0','0',NULL,NULL,'0',NULL,NULL,'','0.00',NULL,'1',NULL,'0','0');");
E_D("replace into `ty_store_apply` values('12','81',NULL,NULL,NULL,NULL,'1',NULL,'0',NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,'老村长旗舰店','shuai','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'1','0','0.00','0','0',NULL,NULL,'0',NULL,NULL,'','0.00',NULL,'1',NULL,'0','0');");

require("../../inc/footer.php");
?>