<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_spec`;");
E_C("CREATE TABLE `ty_spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '规格表',
  `name` varchar(55) DEFAULT NULL COMMENT '规格名称',
  `order` int(11) DEFAULT '50' COMMENT '排序',
  `search_index` tinyint(1) DEFAULT '0' COMMENT '是否需要检索',
  `cat_id1` int(11) DEFAULT '0' COMMENT '一级分类',
  `cat_id2` int(11) DEFAULT '0' COMMENT '二级分类',
  `cat_id3` int(11) DEFAULT '0' COMMENT '三级分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `ty_spec` values('1','颜色2','502','2','1','0','0');");
E_D("replace into `ty_spec` values('2','尺码','50','0','1','0','0');");
E_D("replace into `ty_spec` values('3','布料','50','0','1','0','0');");
E_D("replace into `ty_spec` values('4','袖子','50','0','1','0','0');");
E_D("replace into `ty_spec` values('5','网络','50','0','2','0','0');");
E_D("replace into `ty_spec` values('6','内存','50','0','2','0','0');");
E_D("replace into `ty_spec` values('7','屏幕','50','1','2','0','0');");
E_D("replace into `ty_spec` values('8','产地','0','0','2','0','0');");
E_D("replace into `ty_spec` values('10','卡号2','52','0','5','39','351');");
E_D("replace into `ty_spec` values('11','CPU','50','0','0','0','0');");
E_D("replace into `ty_spec` values('12','尺寸','50','0','0','0','0');");
E_D("replace into `ty_spec` values('13','内存','52','0','0','0','0');");
E_D("replace into `ty_spec` values('14','颜色','50','0','0','0','0');");
E_D("replace into `ty_spec` values('15','颜色','50','0','0','0','0');");
E_D("replace into `ty_spec` values('16','颜色','50','0','0','0','0');");
E_D("replace into `ty_spec` values('17','颜色','50','0','0','0','0');");
E_D("replace into `ty_spec` values('18','颜色','50','1','0','0','0');");
E_D("replace into `ty_spec` values('19','尺寸','50','0','0','0','0');");
E_D("replace into `ty_spec` values('20','选择瓦数','50','1','0','0','0');");
E_D("replace into `ty_spec` values('21','尺码','50','1','1','12','101');");
E_D("replace into `ty_spec` values('22','尺码','50','1','0','0','0');");
E_D("replace into `ty_spec` values('23','尺码','50','1','0','0','0');");
E_D("replace into `ty_spec` values('24','颜色','50','1','0','0','0');");
E_D("replace into `ty_spec` values('25','合约套餐','50','1','2','19','125');");
E_D("replace into `ty_spec` values('26','套餐','50','1','0','0','0');");
E_D("replace into `ty_spec` values('28','文胸尺码','50','1','5','41','400');");
E_D("replace into `ty_spec` values('29','文胸布料','50','1','5','41','400');");
E_D("replace into `ty_spec` values('32','型号','50','1','3','27','194');");
E_D("replace into `ty_spec` values('34','操作系统','50','1','1','123','0');");
E_D("replace into `ty_spec` values('35','显示器','50','1','1','12','100');");
E_D("replace into `ty_spec` values('36','UIUI','50','1','1','12','100');");

require("../../inc/footer.php");
?>