<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_friend_link`;");
E_C("CREATE TABLE `ty_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_logo` varchar(255) NOT NULL DEFAULT '',
  `orderby` tinyint(3) unsigned NOT NULL DEFAULT '50' COMMENT '排序',
  `is_show` tinyint(1) DEFAULT '1' COMMENT '是否显示',
  `target` tinyint(1) DEFAULT '1' COMMENT '是否新窗口打开',
  PRIMARY KEY (`link_id`),
  KEY `show_order` (`orderby`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ty_friend_link` values('6','谷歌中国','http://www.google.com.hk','','50','1','1');");
E_D("replace into `ty_friend_link` values('5','百度搜索','http://www.baidu.com','','50','1','1');");
E_D("replace into `ty_friend_link` values('7','测试链接','http://help.ecshop.com/index.php?doc-view-23.htm','/Public/upload/article/2016/02-19/56c6d2b03171a.png','20','1','1');");

require("../../inc/footer.php");
?>