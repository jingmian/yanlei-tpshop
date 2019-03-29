<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_article_cat`;");
E_C("CREATE TABLE `ty_article_cat` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) DEFAULT NULL COMMENT '类别名称',
  `cat_type` smallint(6) DEFAULT '0' COMMENT '默认分组',
  `parent_id` smallint(6) DEFAULT NULL COMMENT '夫级ID',
  `show_in_nav` tinyint(1) DEFAULT '0' COMMENT '是否导航显示',
  `sort_order` smallint(6) DEFAULT '50' COMMENT '排序',
  `cat_desc` varchar(255) DEFAULT NULL COMMENT '分类描述',
  `keywords` varchar(30) DEFAULT NULL COMMENT '搜索关键词',
  `cat_alias` varchar(20) DEFAULT NULL COMMENT '别名',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `ty_article_cat` values('1','系统分类','1','0','1','0','','','system');");
E_D("replace into `ty_article_cat` values('2','网站帮助分类','0','1','0','0','','','help');");
E_D("replace into `ty_article_cat` values('3','网站新闻','1','1','1','0','','','help');");
E_D("replace into `ty_article_cat` values('4','网站公告','1','1','1','0','','','help');");
E_D("replace into `ty_article_cat` values('5','网站底部文章',NULL,'1','0','2','','','help');");
E_D("replace into `ty_article_cat` values('6','售后服务',NULL,'2','0','0','','','help');");
E_D("replace into `ty_article_cat` values('7','常见问题',NULL,'2','0','2','','','help');");
E_D("replace into `ty_article_cat` values('8','入驻流程',NULL,'2','0','0','','','help');");
E_D("replace into `ty_article_cat` values('9','规则体系','0','14','0','0','','','help');");
E_D("replace into `ty_article_cat` values('10','联系方式',NULL,'2','0','0','','','help');");
E_D("replace into `ty_article_cat` values('11','购物指南','1','0','1','0','','','help');");
E_D("replace into `ty_article_cat` values('12','退款/售后','1','6','0','0','','','help');");
E_D("replace into `ty_article_cat` values('14','招商标准',NULL,'2','0','0','','','');");
E_D("replace into `ty_article_cat` values('15','帮助中心',NULL,'0','0','0','','','');");
E_D("replace into `ty_article_cat` values('16','资费标准',NULL,'2','0','0','','','help');");
E_D("replace into `ty_article_cat` values('17','B2B api接口文档',NULL,'0','0','0','','','');");
E_D("replace into `ty_article_cat` values('18','入住资质','0','14','1','0','','',NULL);");
E_D("replace into `ty_article_cat` values('19','进驻详情','0','18','1','0','','',NULL);");
E_D("replace into `ty_article_cat` values('20','促销活动','1','0','1','0','','',NULL);");

require("../../inc/footer.php");
?>