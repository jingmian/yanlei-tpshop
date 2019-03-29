<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_wx_img`;");
E_C("CREATE TABLE `ty_wx_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) NOT NULL,
  `desc` text NOT NULL COMMENT '简介',
  `pic` char(255) NOT NULL COMMENT '封面图片',
  `url` char(255) NOT NULL COMMENT '图文外链地址',
  `createtime` varchar(13) NOT NULL,
  `uptatetime` varchar(13) NOT NULL,
  `token` char(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `goods_id` int(11) NOT NULL DEFAULT '0',
  `goods_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='微信图文'");
E_D("replace into `ty_wx_img` values('18','改变关键字','这里是描述秒速改变改变','/Public/upload/banner/2015/11-10/5641dff44e322.jpg','http://www.tpshop.com/index.php/Admin/Wechat/add_img/id/326/edit/1','1447159325','1447162878','vjotae1439949952','标题改变','0','');");

require("../../inc/footer.php");
?>