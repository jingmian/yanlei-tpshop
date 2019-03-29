<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store`;");
E_C("CREATE TABLE `ty_store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店铺索引id',
  `store_name` varchar(50) NOT NULL COMMENT '店铺名称',
  `grade_id` int(11) NOT NULL COMMENT '店铺等级',
  `user_id` int(11) NOT NULL COMMENT '会员id',
  `user_name` varchar(50) NOT NULL COMMENT '会员名称',
  `seller_name` varchar(50) DEFAULT NULL COMMENT '店主卖家用户名',
  `sc_id` int(11) NOT NULL COMMENT '店铺分类',
  `company_name` varchar(50) DEFAULT NULL COMMENT '店铺公司名称',
  `province_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺所在省份ID',
  `city_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺所在城市ID',
  `district` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺所在地区ID',
  `store_address` varchar(100) NOT NULL COMMENT '详细地区',
  `store_zip` varchar(10) NOT NULL COMMENT '邮政编码',
  `store_state` tinyint(1) NOT NULL DEFAULT '2' COMMENT '店铺状态，0关闭，1开启，2审核中',
  `store_close_info` varchar(255) DEFAULT NULL COMMENT '店铺关闭原因',
  `store_sort` int(11) NOT NULL DEFAULT '0' COMMENT '店铺排序',
  `store_rebate_paytime` varchar(10) NOT NULL COMMENT '店铺结算类型',
  `store_time` int(11) DEFAULT NULL COMMENT '开店时间',
  `store_end_time` int(11) DEFAULT NULL COMMENT '店铺关闭时间',
  `store_logo` varchar(255) DEFAULT NULL COMMENT '店铺logo',
  `store_banner` varchar(255) DEFAULT NULL COMMENT '店铺横幅',
  `store_avatar` varchar(150) DEFAULT NULL COMMENT '店铺头像',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT '店铺seo关键字',
  `seo_description` varchar(255) DEFAULT NULL COMMENT '店铺seo描述',
  `store_aliwangwang` varchar(64) DEFAULT NULL COMMENT '阿里旺旺',
  `store_qq` varchar(50) DEFAULT NULL COMMENT 'QQ',
  `store_phone` varchar(20) DEFAULT NULL COMMENT '商家电话',
  `store_zy` text COMMENT '主营商品',
  `store_domain` varchar(50) DEFAULT NULL COMMENT '店铺二级域名',
  `store_recommend` tinyint(1) NOT NULL DEFAULT '0' COMMENT '推荐，0为否，1为是，默认为0',
  `store_theme` varchar(50) NOT NULL DEFAULT 'default' COMMENT '店铺当前主题',
  `store_credit` int(10) NOT NULL DEFAULT '0' COMMENT '店铺信用',
  `store_desccredit` decimal(3,2) NOT NULL DEFAULT '0.00' COMMENT '描述相符度分数',
  `store_servicecredit` decimal(3,2) NOT NULL DEFAULT '0.00' COMMENT '服务态度分数',
  `store_deliverycredit` decimal(3,2) NOT NULL DEFAULT '0.00' COMMENT '发货速度分数',
  `store_collect` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '店铺收藏数量',
  `store_slide` text COMMENT '店铺幻灯片',
  `store_slide_url` text COMMENT '店铺幻灯片链接',
  `store_printdesc` varchar(500) DEFAULT NULL COMMENT '打印订单页面下方说明文字',
  `store_sales` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '店铺销量',
  `store_presales` text COMMENT '售前客服',
  `store_aftersales` text COMMENT '售后客服',
  `store_workingtime` varchar(100) DEFAULT NULL COMMENT '工作时间',
  `store_free_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '超出该金额免运费，大于0才表示该值有效',
  `store_decoration_switch` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '店铺装修开关(0-关闭 装修编号-开启)',
  `store_decoration_only` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '开启店铺装修时，仅显示店铺装修(1-是 0-否',
  `is_own_shop` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否自营店铺 1是 0否',
  `bind_all_gc` tinyint(1) DEFAULT '0' COMMENT '自营店是否绑定全部分类 0否1是',
  `qitian` tinyint(1) DEFAULT '0' COMMENT '7天退换',
  `certified` tinyint(1) DEFAULT '0' COMMENT '正品保障',
  `returned` tinyint(1) DEFAULT '0' COMMENT '退货承诺',
  `store_free_time` varchar(10) DEFAULT NULL COMMENT '商家配送时间',
  `mb_slide` text COMMENT '手机店铺 轮播图链接地址',
  `mb_slide_url` text COMMENT '手机版广告链接',
  `deliver_region` varchar(50) DEFAULT NULL COMMENT '店铺默认配送区域',
  `cod` tinyint(1) DEFAULT '0' COMMENT '货到付款',
  `two_hour` tinyint(1) DEFAULT '0' COMMENT '两小时发货',
  `ensure` tinyint(1) DEFAULT '0' COMMENT '保证服务开关',
  `deposit` decimal(10,2) DEFAULT '0.00' COMMENT '保证金额',
  `deposit_icon` tinyint(1) DEFAULT '0' COMMENT '保证金显示开关',
  `store_money` decimal(12,2) DEFAULT '0.00' COMMENT '店铺可用资金',
  `pending_money` decimal(12,2) DEFAULT '0.00' COMMENT '待结算资金',
  `deleted` tinyint(1) unsigned zerofill NOT NULL COMMENT '未删除0，已删除1',
  `goods_examine` tinyint(1) DEFAULT '0' COMMENT '店铺发布商品是否需要审核',
  PRIMARY KEY (`store_id`),
  KEY `store_name` (`store_name`) USING BTREE,
  KEY `sc_id` (`sc_id`) USING BTREE,
  KEY `store_state` (`store_state`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='店铺数据表'");
E_D("replace into `ty_store` values('1','TPSHP旗舰店','1','1','wyp001','wyp002','2',NULL,'1','2','3','上梅林中康创业园7楼735','','1',NULL,'0','1463979921','0',NULL,'/Public/upload/seller/2017/03-25/58d63b81331fe.png','/Public/upload/seller/2016/10-28/5812ac6245b68.png',NULL,'','','','1273276548','0755-86140794','',NULL,'0','style3','0','3.00','4.00','4.00','1','/Public/upload/seller/2016/10-28/5812acd61bdf9.png,/Public/upload/seller/2016/10-28/5812acda24797.png,/Public/upload/seller/2016/10-28/5812acdee9132.png,,','http://,http://,http://,http://,http://',NULL,'0',NULL,NULL,NULL,'1000.00','0','0','1','1','0','0','0',NULL,NULL,NULL,'8 131 1700|黑龙江 齐齐哈尔市 富拉尔基区','0','0','0','0.00','0','12862.32','12933.00','0','0');");
E_D("replace into `ty_store` values('2','海澜之家','1','24','','wyp001','4',NULL,'28240','28558','28581','西丽镇留仙大道1001号','','1',NULL,'0','',NULL,NULL,'/Public/upload/seller/2016/10-28/5812c2b8db09b.jpg','/Public/upload/seller/2016/10-28/5812c0fa81109.jpg',NULL,'海澜之家旗舰店','海澜之家','tb_212131','1273276548','0755-86140794','体育用品，篮球，足球，球拍，球衣',NULL,'1','style3','0','4.00','4.13','4.00','1','/Public/upload/seller/2016/10-28/5812c49152532.jpg,/Public/upload/seller/2016/10-28/5812c4a5e97dd.jpg,/Public/upload/seller/2016/10-28/5812c50650c8d.jpg,,','http://,http://,http://,http://,http://',NULL,'0','a:2:{i:1;a:3:{s:4:\"name\";s:6:\"店长\";s:4:\"type\";s:2:\"ww\";s:7:\"account\";s:6:\"525855\";}i:2;a:3:{s:4:\"name\";s:7:\"售前1\";s:4:\"type\";s:2:\"qq\";s:7:\"account\";s:9:\"584585255\";}}','a:2:{i:1;a:3:{s:4:\"name\";s:6:\"小君\";s:4:\"type\";s:2:\"qq\";s:7:\"account\";s:7:\"5485252\";}i:2;a:3:{s:4:\"name\";s:6:\"店仆\";s:4:\"type\";s:2:\"ww\";s:7:\"account\";s:7:\"2342344\";}}','工作时间: 周一到周日10:00~23:00','1000.00','0','1','0','0','0','0','0',NULL,'/Public/upload/seller/2016/10-28/5812cab4bc022.jpg,/Public/upload/seller/2016/10-28/5812cabe628b1.jpg,/Public/upload/seller/2016/10-28/5812caca46a21.jpg,,','http://,http://,http://,http://,http://',NULL,'0','0','0','0.00','0','-2762.03','22560.57','0','0');");
E_D("replace into `ty_store` values('3','旺小姐旗舰店','1','29','','88888888','2','深圳搜豹网络有限公司','1','2','30','上梅林中康创业园7楼735','','1','','0','','1469697258',NULL,'/Public/upload/seller/2016/07-28/5799d51cc525b.jpg','/Public/upload/seller/2016/07-28/5799d87518611.jpg',NULL,'开源商城','开源商城, 开源系统,开源网店',NULL,'1273276548','0755-86140485','卖女士内衣',NULL,'1','style3','0','4.80','4.40','4.40','1','/Public/upload/seller/2016/07-28/5799e033c877d.png,/Public/upload/seller/2016/07-28/5799e087b6147.png,,,','http://,http://,http://,http://,http://',NULL,'0',NULL,NULL,NULL,'0.00','3','0','0','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','8223.76','8221.07','0','0');");
E_D("replace into `ty_store` values('4','q','2','37','13202289750','qqq','1',NULL,'0','0','0','待完善','','0','发电公司的风格','0','','1473229838',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'13202289750','13202289750',NULL,NULL,'1','default','0','0.00','0.00','0.00','0',NULL,NULL,NULL,'0',NULL,NULL,NULL,'0.00','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','0.00','0.00','0','0');");
E_D("replace into `ty_store` values('5','poiuytrewq','1','40','13202289700','oiuytrew','5','poiuytrewq','0','0','0','待完善','','0','','0','','1473315172',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'13202289700','13202289700',NULL,NULL,'1','default','0','0.00','0.00','0.00','0',NULL,NULL,NULL,'0',NULL,NULL,NULL,'0.00','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','0.00','0.00','0','0');");
E_D("replace into `ty_store` values('6','我的店铺','0','60','18565625933','18565625933','0',NULL,'0','0','0','','','1',NULL,'0','','1490754307',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','default','0','0.00','0.00','0.00','0',NULL,NULL,NULL,'0',NULL,NULL,NULL,'0.00','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','0.00','0.00','0','0');");
E_D("replace into `ty_store` values('7','TK','0','63','15306428096','tkadmin','0',NULL,'0','0','0','','','1',NULL,'0','','1493090346',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','default','0','0.00','0.00','0.00','0',NULL,NULL,NULL,'0',NULL,NULL,NULL,'0.00','0','0','1','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','0.00','0.00','0','0');");
E_D("replace into `ty_store` values('8','官方自营店','0','80','yeshuai@qq.com','yeshuai','0',NULL,'0','0','0','','','1',NULL,'0','','1496803072',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','default','0','0.00','0.00','0.00','0',NULL,NULL,NULL,'0',NULL,NULL,NULL,'0.00','0','0','1','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','0.00','0.00','0','0');");
E_D("replace into `ty_store` values('9','老村长旗舰店','0','81','shuai@qq.com','shuai','0',NULL,'0','0','0','','','1',NULL,'0','','1497597980',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','default','0','0.00','0.00','0.00','0',NULL,NULL,NULL,'0',NULL,NULL,NULL,'0.00','0','0','1','0','0','0','0',NULL,NULL,NULL,NULL,'0','0','0','0.00','0','0.00','0.00','0','0');");

require("../../inc/footer.php");
?>