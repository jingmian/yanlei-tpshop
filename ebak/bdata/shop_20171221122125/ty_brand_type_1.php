<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_brand_type`;");
E_C("CREATE TABLE `ty_brand_type` (
  `type_id` int(10) unsigned NOT NULL COMMENT '类型id',
  `brand_id` int(10) unsigned NOT NULL COMMENT '品牌id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品类型与品牌对应表'");
E_D("replace into `ty_brand_type` values('33','20');");
E_D("replace into `ty_brand_type` values('33','30');");
E_D("replace into `ty_brand_type` values('33','31');");
E_D("replace into `ty_brand_type` values('33','32');");
E_D("replace into `ty_brand_type` values('33','40');");
E_D("replace into `ty_brand_type` values('33','44');");
E_D("replace into `ty_brand_type` values('33','45');");
E_D("replace into `ty_brand_type` values('33','49');");
E_D("replace into `ty_brand_type` values('33','50');");
E_D("replace into `ty_brand_type` values('33','51');");
E_D("replace into `ty_brand_type` values('30','20');");
E_D("replace into `ty_brand_type` values('30','34');");
E_D("replace into `ty_brand_type` values('30','39');");
E_D("replace into `ty_brand_type` values('30','44');");
E_D("replace into `ty_brand_type` values('30','49');");
E_D("replace into `ty_brand_type` values('30','54');");
E_D("replace into `ty_brand_type` values('30','59');");
E_D("replace into `ty_brand_type` values('30','64');");
E_D("replace into `ty_brand_type` values('30','69');");
E_D("replace into `ty_brand_type` values('30','1');");
E_D("replace into `ty_brand_type` values('30','2');");
E_D("replace into `ty_brand_type` values('30','6');");
E_D("replace into `ty_brand_type` values('30','7');");
E_D("replace into `ty_brand_type` values('30','349');");
E_D("replace into `ty_brand_type` values('30','350');");
E_D("replace into `ty_brand_type` values('34','20');");
E_D("replace into `ty_brand_type` values('34','34');");
E_D("replace into `ty_brand_type` values('34','39');");
E_D("replace into `ty_brand_type` values('34','44');");
E_D("replace into `ty_brand_type` values('34','317');");
E_D("replace into `ty_brand_type` values('34','322');");
E_D("replace into `ty_brand_type` values('34','327');");
E_D("replace into `ty_brand_type` values('34','332');");
E_D("replace into `ty_brand_type` values('34','337');");
E_D("replace into `ty_brand_type` values('34','342');");
E_D("replace into `ty_brand_type` values('34','1');");
E_D("replace into `ty_brand_type` values('34','6');");
E_D("replace into `ty_brand_type` values('36','355');");
E_D("replace into `ty_brand_type` values('35','354');");
E_D("replace into `ty_brand_type` values('4','2');");
E_D("replace into `ty_brand_type` values('4','9');");
E_D("replace into `ty_brand_type` values('4','10');");
E_D("replace into `ty_brand_type` values('4','349');");
E_D("replace into `ty_brand_type` values('4','1');");

require("../../inc/footer.php");
?>