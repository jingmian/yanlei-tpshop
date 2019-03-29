<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_navigation`;");
E_C("CREATE TABLE `ty_store_navigation` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航ID',
  `sn_title` varchar(50) NOT NULL COMMENT '导航名称',
  `sn_store_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '卖家店铺ID',
  `sn_content` text COMMENT '导航内容',
  `sn_sort` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '导航排序',
  `sn_is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '导航是否显示',
  `sn_add_time` int(11) NOT NULL COMMENT '添加时间',
  `sn_url` varchar(255) DEFAULT NULL COMMENT '店铺导航的外链URL',
  `sn_new_open` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '店铺导航外链是否在新窗口打开：0不开新窗口1开新窗口，默认是0',
  PRIMARY KEY (`sn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='卖家店铺导航信息表'");
E_D("replace into `ty_store_navigation` values('1','连衣裙','1','&lt;p&gt;松岛枫空间阿萨德后方可阿萨德合肥的说法fdgdg							 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;','255','0','1466217424','http://99soubao.com','1');");
E_D("replace into `ty_store_navigation` values('2','所有商品','1','&lt;p&gt;个的分公司的风格是打发&lt;/p&gt;','11','1','0','','1');");
E_D("replace into `ty_store_navigation` values('3','时尚内衣','3','&lt;p&gt;专卖时尚内衣&lt;br/&gt;&lt;/p&gt;','50','1','0','http://www.tp-shop.cn','0');");
E_D("replace into `ty_store_navigation` values('4','外套/西装','1','&lt;p&gt;阿斯顿发斯蒂芬&lt;br/&gt;&lt;/p&gt;','0','1','0','','0');");
E_D("replace into `ty_store_navigation` values('5','秋季热卖','2','&lt;p&gt;秋季热卖&lt;/p&gt;','1','1','0','','1');");
E_D("replace into `ty_store_navigation` values('6','卫衣','2','&lt;p&gt;卫衣&lt;/p&gt;','0','0','0','','1');");
E_D("replace into `ty_store_navigation` values('7','夹克','2','&lt;p&gt;夹克&lt;/p&gt;','0','1','0','','1');");
E_D("replace into `ty_store_navigation` values('8','针织衫/毛衫','2','&lt;p&gt;针织衫/毛衫&lt;/p&gt;','0','1','0','','1');");

require("../../inc/footer.php");
?>