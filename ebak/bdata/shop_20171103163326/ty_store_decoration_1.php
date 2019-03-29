<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_decoration`;");
E_C("CREATE TABLE `ty_store_decoration` (
  `decoration_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '装修编号',
  `decoration_name` varchar(50) NOT NULL COMMENT '装修名称',
  `store_id` int(10) unsigned NOT NULL COMMENT '店铺编号',
  `decoration_setting` varchar(500) DEFAULT NULL COMMENT '装修整体设置(背景、边距等)',
  `decoration_nav` varchar(5000) DEFAULT NULL COMMENT '装修导航',
  `decoration_banner` varchar(255) DEFAULT NULL COMMENT '装修头部banner',
  PRIMARY KEY (`decoration_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='店铺装修表'");
E_D("replace into `ty_store_decoration` values('1','默认装修','2','a:6:{s:16:\"background_color\";s:7:\"#44eedc\";s:16:\"background_image\";s:0:\"\";s:23:\"background_image_repeat\";s:6:\"repeat\";s:21:\"background_position_x\";s:0:\"\";s:21:\"background_position_y\";s:0:\"\";s:21:\"background_attachment\";s:0:\"\";}',NULL,'a:2:{s:7:\"display\";s:4:\"true\";s:5:\"image\";s:60:\"/Public/upload/store/decoration/2016-08-13/57aed58a2f34c.png\";}');");
E_D("replace into `ty_store_decoration` values('2','默认装修','1','a:7:{s:16:\"background_color\";s:6:\"481d53\";s:16:\"background_image\";s:0:\"\";s:20:\"background_image_url\";s:0:\"\";s:23:\"background_image_repeat\";s:6:\"repeat\";s:21:\"background_position_x\";s:0:\"\";s:21:\"background_position_y\";s:0:\"\";s:21:\"background_attachment\";s:0:\"\";}',NULL,NULL);");
E_D("replace into `ty_store_decoration` values('3','默认装修','3','a:7:{s:16:\"background_color\";s:0:\"\";s:16:\"background_image\";s:17:\"57bd724631b6f.jpg\";s:20:\"background_image_url\";s:60:\"/Public/upload/store/decoration/2016-08-24/57bd724631b6f.jpg\";s:23:\"background_image_repeat\";s:8:\"repeat-x\";s:21:\"background_position_x\";s:3:\"200\";s:21:\"background_position_y\";s:3:\"200\";s:21:\"background_attachment\";s:5:\"fixed\";}','a:2:{s:7:\"display\";s:4:\"true\";s:5:\"style\";s:478:\".ncs-nav { background-color: #F69; height: 38px; overflow: hidden; margin: 0 auto; width: 100%; }.ncs-nav ul { white-space: nowrap; display: block; width: 1199px; height: 38px; margin-left: -1px;  margin: 0 auto;overflow: hidden;}.ncs-nav li a span { font-size: 14px; font-weight: 600; line-height: 20px; text-overflow: ellipsis; white-space: nowrap; max-width:160px; color: #FFF; float: left; height: 20px; padding: 9px 15px; margin-left: 4px; overflow:hidden; cursor:pointer;}\";}','a:2:{s:7:\"display\";s:4:\"true\";s:5:\"image\";s:60:\"/Public/upload/store/decoration/2016-08-24/57bd70973681e.jpg\";}');");
E_D("replace into `ty_store_decoration` values('4','默认装修','7',NULL,NULL,NULL);");
E_D("replace into `ty_store_decoration` values('5','默认装修','6',NULL,NULL,NULL);");

require("../../inc/footer.php");
?>