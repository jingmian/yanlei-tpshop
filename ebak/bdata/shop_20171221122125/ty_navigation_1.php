<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_navigation`;");
E_C("CREATE TABLE `ty_navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '前台导航表',
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '导航名称',
  `is_show` tinyint(1) DEFAULT '1' COMMENT '是否显示',
  `is_new` tinyint(1) DEFAULT '1' COMMENT '是否新窗口',
  `sort` smallint(6) DEFAULT '50' COMMENT '排序',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1");
E_D("replace into `ty_navigation` values('1','手机城','1','0','99','/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=123');");
E_D("replace into `ty_navigation` values('2','家电城','1','0','97','/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=20');");
E_D("replace into `ty_navigation` values('3','珠宝','1','0','98','/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=51');");
E_D("replace into `ty_navigation` values('4','促销商品','1','0','96','/index.php?m=Home&amp;c=Index&amp;a=promoteList');");
E_D("replace into `ty_navigation` values('6','化妆品','1','0','95','/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=45');");
E_D("replace into `ty_navigation` values('8','数码城','1','0','94','/index.php?m=Home&amp;c=Channel&amp;a=index&amp;id=1');");
E_D("replace into `ty_navigation` values('11','店铺街','1','0','0','/index.php?m=Home&amp;c=Index&amp;a=street');");
E_D("replace into `ty_navigation` values('12','积分商城','1','1','0','/index.php?m=Home&amp;c=Goods&amp;a=integralMall');");
E_D("replace into `ty_navigation` values('13','团购','1','1','0','/index.php?m=Home&amp;c=Activity&amp;a=group_list');");

require("../../inc/footer.php");
?>