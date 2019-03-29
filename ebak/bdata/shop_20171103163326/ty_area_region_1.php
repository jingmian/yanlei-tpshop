<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_area_region`;");
E_C("CREATE TABLE `ty_area_region` (
  `shipping_area_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '物流配置id',
  `region_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '地区id对应region表id',
  `store_id` int(11) DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ty_area_region` values('15','2','1');");
E_D("replace into `ty_area_region` values('15','3','1');");
E_D("replace into `ty_area_region` values('15','5','1');");
E_D("replace into `ty_area_region` values('15','6','1');");
E_D("replace into `ty_area_region` values('15','9','1');");
E_D("replace into `ty_area_region` values('16','1','1');");
E_D("replace into `ty_area_region` values('16','2','1');");
E_D("replace into `ty_area_region` values('16','3','1');");
E_D("replace into `ty_area_region` values('16','5','1');");
E_D("replace into `ty_area_region` values('16','6','1');");
E_D("replace into `ty_area_region` values('16','9','1');");
E_D("replace into `ty_area_region` values('16','456','1');");
E_D("replace into `ty_area_region` values('23','1','1');");
E_D("replace into `ty_area_region` values('19','3102','1');");
E_D("replace into `ty_area_region` values('19','338','1');");
E_D("replace into `ty_area_region` values('19','3103','1');");
E_D("replace into `ty_area_region` values('20','675','1');");
E_D("replace into `ty_area_region` values('20','691','1');");
E_D("replace into `ty_area_region` values('20','662','1');");
E_D("replace into `ty_area_region` values('20','651','1');");
E_D("replace into `ty_area_region` values('27','937','1');");
E_D("replace into `ty_area_region` values('27','938','1');");
E_D("replace into `ty_area_region` values('32','28558','2');");
E_D("replace into `ty_area_region` values('33','28241','2');");
E_D("replace into `ty_area_region` values('36','28241','3');");
E_D("replace into `ty_area_region` values('36','28558','3');");
E_D("replace into `ty_area_region` values('36','29855','3');");
E_D("replace into `ty_area_region` values('36','28626','3');");
E_D("replace into `ty_area_region` values('49','16358','1');");
E_D("replace into `ty_area_region` values('49','16372','1');");
E_D("replace into `ty_area_region` values('49','16412','1');");
E_D("replace into `ty_area_region` values('49','16754','1');");

require("../../inc/footer.php");
?>