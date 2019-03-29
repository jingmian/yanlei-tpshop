<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_store_msg`;");
E_C("CREATE TABLE `ty_store_msg` (
  `sm_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '店铺消息id',
  `store_id` int(10) unsigned NOT NULL COMMENT '店铺id',
  `content` varchar(512) NOT NULL DEFAULT '' COMMENT '消息内容',
  `addtime` int(10) unsigned NOT NULL COMMENT '发送时间',
  `open` tinyint(1) NOT NULL DEFAULT '0' COMMENT '消息是否已被查看',
  PRIMARY KEY (`sm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='店铺消息表'");
E_D("replace into `ty_store_msg` values('1','2','您的商品\"1111111\"被违规下架,原因:靠你妹','1467634651','0');");
E_D("replace into `ty_store_msg` values('2','2','您的商品\"三星 Galaxy A9高配版 (A9100) 精灵黑 全网通4G手机 双卡双待\"被违规下架,原因:违规下架掉','1467635549','0');");
E_D("replace into `ty_store_msg` values('3','2','您的商品\"Apple iPhone 6s 16GB 玫瑰金色 移动联通电信4G手机\"被违规下架,原因:违规下架掉','1467635549','0');");
E_D("replace into `ty_store_msg` values('4','3','您的商品\"美少女的胸罩\"被违规下架,原因:测试一下违规下架','1470208855','0');");
E_D("replace into `ty_store_msg` values('5','2','您的商品\"惠普笔记本\"被违规下架,原因:填写违规理由','1473838786','0');");
E_D("replace into `ty_store_msg` values('6','1','您的商品\"恒源祥秋冬新款男士纯色全羊毛衫 中年圆领长袖毛衣 加厚针织衫潮08W18096\"被违规下架,原因:填写操作备注,可不填','1477534915','0');");

require("../../inc/footer.php");
?>