<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_reply`;");
E_C("CREATE TABLE `ty_reply` (
  `reply_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '回复id',
  `comment_id` int(10) NOT NULL COMMENT '评论id：关联评论表',
  `parent_id` int(10) NOT NULL DEFAULT '0' COMMENT '父类id，0为最顶级',
  `content` text NOT NULL COMMENT '回复内容',
  `user_name` varchar(255) NOT NULL COMMENT '回复人的昵称',
  `to_name` varchar(255) NOT NULL DEFAULT '' COMMENT '被回复人的昵称',
  `deleted` tinyint(1) unsigned zerofill NOT NULL COMMENT '未删除0；删除：1',
  `reply_time` int(10) unsigned NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `ty_reply` values('1','1','0','one','a','','0','2016');");
E_D("replace into `ty_reply` values('2','1','1','two','b','a','0','2016');");
E_D("replace into `ty_reply` values('3','1','2','three','a','b','0','2016');");
E_D("replace into `ty_reply` values('4','1','0','好','','','0','2016');");
E_D("replace into `ty_reply` values('5','1','0','不错','','','0','2016');");
E_D("replace into `ty_reply` values('6','188','0','测试','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('7','188','0','测试','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('8','188','0','测试','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('9','188','8','测试2','测试人员','测试人员','0','2016');");
E_D("replace into `ty_reply` values('10','188','8','测试三','测试人员','测试人员                                                                                        ','0','2016');");
E_D("replace into `ty_reply` values('11','0','0','adasd','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('12','0','8','asdasdad','13202289755','测试人员','0','2016');");
E_D("replace into `ty_reply` values('13','0','8','asda','13202289755','测试人员','0','2016');");
E_D("replace into `ty_reply` values('14','0','8','asdasdasdasd','13202289755','测试人员','0','2016');");
E_D("replace into `ty_reply` values('15','0','0','asdasdas','13202289755','中国管理','0','2016');");
E_D("replace into `ty_reply` values('16','0','10','asdasd','13202289755','测试人员','0','2016');");
E_D("replace into `ty_reply` values('17','0','6','asdasd','13202289755','测试人员','0','2016');");
E_D("replace into `ty_reply` values('18','0','0','sdfsdf','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('19','0','0','asdasda','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('20','0','0','asdasd','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('21','0','0','gg','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('22','0','0','asdasd','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('23','344','0','测试99','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('24','0','0','adasd','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('25','0','0','asdas','13202289755','','0','2016');");
E_D("replace into `ty_reply` values('26','188','8','撒大声道','测试人员','测试人员                                        ','0','2016');");
E_D("replace into `ty_reply` values('27','188','0','哈哈哈','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('28','188','0','嘎嘎嘎嘎嘎','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('29','188','0','嘎嘎嘎嘎嘎嘎嘎','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('30','188','0','古古怪怪','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('31','188','0','大事发生大幅','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('32','56','0','测试22','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('33','188','0','test','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('34','188','0','测试','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('35','56','0','测试44','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('36','122','0','gagag','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('37','39','0','sdsf','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('38','39','0','fghgh','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('39','39','0','hjkhjkhjkh','测试人员','','0','2016');");
E_D("replace into `ty_reply` values('40','105','0','hjkhjkh','测试人员','','0','2016');");

require("../../inc/footer.php");
?>