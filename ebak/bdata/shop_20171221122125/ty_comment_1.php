<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_comment`;");
E_C("CREATE TABLE `ty_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id自增',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `order_id` mediumint(8) NOT NULL COMMENT '订单id',
  `store_id` int(10) NOT NULL DEFAULT '0' COMMENT '店铺id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `content` text NOT NULL COMMENT '评论内容',
  `add_time` int(10) unsigned NOT NULL COMMENT '评论时间',
  `ip_address` varchar(15) NOT NULL DEFAULT '' COMMENT '评论ip地址',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示;0:不显示；1:显示',
  `img` text COMMENT '晒单图片',
  `spec_key_name` varchar(255) NOT NULL DEFAULT '',
  `goods_rank` decimal(2,1) NOT NULL DEFAULT '0.0' COMMENT '商品评价等级，好 中 差',
  `zan_num` int(10) NOT NULL,
  `zan_userid` varchar(255) NOT NULL DEFAULT '',
  `reply_num` int(10) NOT NULL COMMENT '评论回复数',
  `is_anonymous` tinyint(1) DEFAULT '0' COMMENT '是否匿名评价0:是；1不是',
  `impression` varchar(50) DEFAULT NULL COMMENT '印象标签',
  `deleted` tinyint(1) unsigned zerofill NOT NULL,
  `parent_id` int(11) unsigned zerofill NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `id_value` (`goods_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=366 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>