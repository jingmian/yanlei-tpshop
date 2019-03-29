<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_goods_type`;");
E_C("CREATE TABLE `ty_goods_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id自增',
  `name` varchar(60) NOT NULL DEFAULT '' COMMENT '类型名称',
  `cat_id1` smallint(5) DEFAULT '0' COMMENT '一级分类id',
  `cat_id2` smallint(5) DEFAULT '0' COMMENT '二级分类id',
  `cat_id3` smallint(5) DEFAULT '0' COMMENT '三级分类id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `ty_goods_type` values('33','运营商','4','31','228');");
E_D("replace into `ty_goods_type` values('32','相机','2','0','0');");
E_D("replace into `ty_goods_type` values('4','手机','1','123','0');");
E_D("replace into `ty_goods_type` values('31','电池、电源、充电器','0','0','0');");
E_D("replace into `ty_goods_type` values('8','化妆品','0','0','0');");
E_D("replace into `ty_goods_type` values('9','精品手机','0','0','0');");
E_D("replace into `ty_goods_type` values('30','洗衣机','3','25','162');");
E_D("replace into `ty_goods_type` values('29','冰箱','0','0','0');");
E_D("replace into `ty_goods_type` values('16','路由器','0','0','0');");
E_D("replace into `ty_goods_type` values('15','平板电脑','0','0','0');");
E_D("replace into `ty_goods_type` values('13','衣服','0','0','0');");
E_D("replace into `ty_goods_type` values('17','网络盒子','0','0','0');");
E_D("replace into `ty_goods_type` values('18','电视','0','0','0');");
E_D("replace into `ty_goods_type` values('19','家纺','0','0','0');");
E_D("replace into `ty_goods_type` values('20','吸顶灯','0','0','0');");
E_D("replace into `ty_goods_type` values('21','床','0','0','0');");
E_D("replace into `ty_goods_type` values('22','雨伞','0','0','0');");
E_D("replace into `ty_goods_type` values('23','餐具','0','0','0');");
E_D("replace into `ty_goods_type` values('24','毛呢大衣','0','0','0');");
E_D("replace into `ty_goods_type` values('25','针织衫','0','0','0');");
E_D("replace into `ty_goods_type` values('26','文胸','0','0','0');");
E_D("replace into `ty_goods_type` values('27','香水','0','0','0');");
E_D("replace into `ty_goods_type` values('28','珠宝','0','0','0');");
E_D("replace into `ty_goods_type` values('34','测试类型','1','12','100');");
E_D("replace into `ty_goods_type` values('35','胸罩','5','41','384');");
E_D("replace into `ty_goods_type` values('36','笔记本类型','3','27','194');");
E_D("replace into `ty_goods_type` values('37','与语言','1','12','100');");

require("../../inc/footer.php");
?>