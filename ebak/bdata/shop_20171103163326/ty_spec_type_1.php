<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_spec_type`;");
E_C("CREATE TABLE `ty_spec_type` (
  `type_id` int(10) unsigned NOT NULL COMMENT '类型id',
  `spec_id` int(10) unsigned NOT NULL COMMENT '规格id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品类型与规格对应表'");
E_D("replace into `ty_spec_type` values('30','11');");
E_D("replace into `ty_spec_type` values('30','16');");
E_D("replace into `ty_spec_type` values('30','1');");
E_D("replace into `ty_spec_type` values('30','2');");
E_D("replace into `ty_spec_type` values('30','5');");
E_D("replace into `ty_spec_type` values('30','6');");
E_D("replace into `ty_spec_type` values('34','11');");
E_D("replace into `ty_spec_type` values('34','16');");
E_D("replace into `ty_spec_type` values('34','26');");
E_D("replace into `ty_spec_type` values('34','1');");
E_D("replace into `ty_spec_type` values('34','21');");
E_D("replace into `ty_spec_type` values('34','5');");
E_D("replace into `ty_spec_type` values('34','25');");
E_D("replace into `ty_spec_type` values('34','10');");
E_D("replace into `ty_spec_type` values('36','11');");
E_D("replace into `ty_spec_type` values('36','12');");
E_D("replace into `ty_spec_type` values('36','16');");
E_D("replace into `ty_spec_type` values('36','17');");
E_D("replace into `ty_spec_type` values('36','32');");
E_D("replace into `ty_spec_type` values('35','28');");
E_D("replace into `ty_spec_type` values('35','29');");
E_D("replace into `ty_spec_type` values('4','11');");
E_D("replace into `ty_spec_type` values('4','13');");
E_D("replace into `ty_spec_type` values('4','16');");
E_D("replace into `ty_spec_type` values('4','34');");
E_D("replace into `ty_spec_type` values('37','35');");
E_D("replace into `ty_spec_type` values('37','36');");

require("../../inc/footer.php");
?>