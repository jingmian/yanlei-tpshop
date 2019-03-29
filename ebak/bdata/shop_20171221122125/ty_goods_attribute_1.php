<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_goods_attribute`;");
E_C("CREATE TABLE `ty_goods_attribute` (
  `attr_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性id',
  `attr_name` varchar(60) NOT NULL DEFAULT '' COMMENT '属性名称',
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '属性分类id',
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0不需要检索 1关键字检索',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '下拉框展示给商家选择',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '2' COMMENT '2多行文本框,平台属性录入方式',
  `attr_values` text NOT NULL COMMENT '可选值列表',
  `order` tinyint(3) unsigned NOT NULL DEFAULT '50' COMMENT '属性排序',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`type_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=341 DEFAULT CHARSET=utf8");
E_D("replace into `ty_goods_attribute` values('339','内存容量','36','1','0','1','4GB','50');");
E_D("replace into `ty_goods_attribute` values('340','内存类型','36','1','0','1','DDR4 2133','50');");
E_D("replace into `ty_goods_attribute` values('336','33333333333','34','1','0','1','eeeeeeeeee,fffffffffff','50');");
E_D("replace into `ty_goods_attribute` values('337','产地','35','1','0','1','中国,美国,德国','50');");
E_D("replace into `ty_goods_attribute` values('338','适用人群','35','1','0','1','少女,少男,妇女','50');");
E_D("replace into `ty_goods_attribute` values('68','内存容量','4','1','0','1','8G,16G,32G,64G','0');");
E_D("replace into `ty_goods_attribute` values('69','操作系统','4','1','0','1','android4.0,android5.0,android6.0','0');");
E_D("replace into `ty_goods_attribute` values('75','天线位置','4','0','0','1','内置,外置','0');");
E_D("replace into `ty_goods_attribute` values('80','红外/蓝牙','4','0','0','1','蓝牙2.0,蓝牙3.0,蓝牙4.0','0');");
E_D("replace into `ty_goods_attribute` values('81','价格等级','4','0','0','1','高价机,中价机,低价机','0');");
E_D("replace into `ty_goods_attribute` values('165','产地','8','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('166','产品规格/容量','8','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('167','主要原料','8','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('168','所属类别','8','0','0','1','彩妆\r\n化妆工具\r\n护肤品\r\n香水','0');");
E_D("replace into `ty_goods_attribute` values('169','使用部位','8','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('170','适合肤质','8','0','0','1','油性\r\n中性\r\n干性','0');");
E_D("replace into `ty_goods_attribute` values('171','适用人群','8','0','0','1','女性\r\n男性','0');");
E_D("replace into `ty_goods_attribute` values('172','上市日期','9','1','0','1','2008年01月\r\n2008年02月\r\n2008年03月\r\n2008年04月\r\n2008年05月\r\n2008年06月','0');");
E_D("replace into `ty_goods_attribute` values('223','操作系统','15','0','0','1','Android \r\nIOS\r\nWindows','50');");
E_D("replace into `ty_goods_attribute` values('224','CPU核数','15','0','0','1','双核\r\n四核\r\n八核','50');");
E_D("replace into `ty_goods_attribute` values('225','品牌','16','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('226','型号','16','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('173','手机制式','9','1','0','1','GSM,850,900,1800,1900\r\nGSM,900,1800,1900,2100\r\nCDMA\r\n双模（GSM,900,1800,CDMA 1X）\r\n3G(GSM,900,1800,1900,TD-SCDMA )','1');");
E_D("replace into `ty_goods_attribute` values('174','理论通话时间','9','0','0','0','','2');");
E_D("replace into `ty_goods_attribute` values('175','理论待机时间','9','0','0','0','','3');");
E_D("replace into `ty_goods_attribute` values('176','铃声','9','0','0','0','','4');");
E_D("replace into `ty_goods_attribute` values('177','铃声格式','9','0','0','0','','5');");
E_D("replace into `ty_goods_attribute` values('178','外观样式','9','1','0','1','翻盖\r\n滑盖\r\n直板\r\n折叠','6');");
E_D("replace into `ty_goods_attribute` values('179','中文短消息','9','0','0','0','','7');");
E_D("replace into `ty_goods_attribute` values('180','存储卡格式','9','0','1','2','','0');");
E_D("replace into `ty_goods_attribute` values('181','内存容量','9','2','1','0','','0');");
E_D("replace into `ty_goods_attribute` values('182','操作系统','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('183','K-JAVA','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('184','尺寸体积','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('185','颜色','9','1','1','1','黑色\r\n白色\r\n蓝色\r\n金色\r\n粉色\r\n银色\r\n灰色\r\n深李色\r\n黑红色\r\n黑蓝色\r\n白紫色','0');");
E_D("replace into `ty_goods_attribute` values('186','屏幕颜色','9','1','0','1','1600万\r\n262144万','0');");
E_D("replace into `ty_goods_attribute` values('187','屏幕材质','9','0','0','1','TFT','0');");
E_D("replace into `ty_goods_attribute` values('188','屏幕分辨率','9','1','0','1','320×240 像素\r\n240×400 像素\r\n240×320 像素\r\n176x220 像素','0');");
E_D("replace into `ty_goods_attribute` values('189','屏幕大小','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('190','中文输入法','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('191','情景模式','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('192','网络链接','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('193','蓝牙接口','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('194','数据线接口','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('195','电子邮件','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('196','闹钟','9','0','0','0','','35');");
E_D("replace into `ty_goods_attribute` values('197','办公功能','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('198','数码相机','9','1','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('199','像素','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('200','传感器','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('201','变焦模式','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('202','视频拍摄','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('203','MP3播放器','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('204','视频播放','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('205','CPU频率','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('206','收音机','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('207','耳机接口','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('208','闪光灯','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('209','浏览器','9','0','0','0','','0');");
E_D("replace into `ty_goods_attribute` values('210','配件','9','0','2','1','线控耳机\r\n蓝牙耳机\r\n数据线','0');");
E_D("replace into `ty_goods_attribute` values('227','CPU','16','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('228','RAM','16','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('222','木瓜成分','8','0','0','1','天然木瓜\r\n种植木瓜','50');");
E_D("replace into `ty_goods_attribute` values('229','天线','16','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('230','WPS功能','16','1','0','1','支持\r\n不支持','50');");
E_D("replace into `ty_goods_attribute` values('231','无线速率','16','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('232','传输标准','16','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('233','无线频段','16','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('234','品牌','17','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('235','型号','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('236','处理器','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('237','内存','17','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('238','闪存','17','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('239','蓝牙','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('240','扩展存储介质','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('241','操作系统','17','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('242','视频播放','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('243','无线功能','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('244','网络接口','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('245','MicroSD卡槽','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('246','USB接口','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('247','遥控器','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('248','产品尺寸','17','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('249','品牌','18','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('250','型号','18','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('251','分辨率','18','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('252','屏幕尺寸','18','1','0','1','30\r\n32\r\n40\r\n42\r\n50\r\n55\r\n58','50');");
E_D("replace into `ty_goods_attribute` values('253','屏幕比例','18','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('254','电视3D功能','18','1','0','1','支持\r\n不支持','50');");
E_D("replace into `ty_goods_attribute` values('255','保修政策 ','18','0','0','1','一年\r\n两年\r\n三年\r\n四年\r\n五年','50');");
E_D("replace into `ty_goods_attribute` values('256','品牌','19','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('257','床品套件类别','19','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('258','尺寸','19','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('259','适用床尺寸','19','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('260','面料','19','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('261','包裹清单','19','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('262','品牌','20','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('263','型号','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('264','家装风格','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('265','灯具材质','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('266','光源类型','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('267','适用空间','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('268','功率','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('269','光源个数','20','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('270','品牌','21','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('271','家具材质','21','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('272','是否带软靠','21','0','0','1','是\r\n否','50');");
E_D("replace into `ty_goods_attribute` values('273','是否带储物空间','21','0','0','1','是\r\n否','50');");
E_D("replace into `ty_goods_attribute` values('274','型号','21','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('275','最大承重量','21','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('276','重量','21','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('277','体积','21','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('278','床尺寸','21','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('279','品牌','22','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('280','打开方式','22','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('281','面料','22','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('282','伞骨材质','22','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('283','功能','22','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('284','品牌','23','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('285','厨具材质','23','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('286','型号','23','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('287','产地','23','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('288','毛重','23','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('289','面料主材质','24','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('290','版型','24','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('291','适用人群','24','1','0','1','女士\r\n男士','50');");
E_D("replace into `ty_goods_attribute` values('292','品牌','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('293','型号','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('294','模杯厚度','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('295','侧翼面料','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('296','插片','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('297','搭扣排数','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('298','肩带样式','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('299','罩杯面料','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('300','文胸款式','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('301','罩杯款式','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('302','钢圈','26','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('303','品牌','27','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('304','类别','27','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('305','保质期','27','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('306','产地','27','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('307','香调','27','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('308','适用人群','27','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('309','适用场所','27','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('310','规格','27','0','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('311','包装尺寸','29','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('312','毛重','29','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('313','品牌','29','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('314','制冷方式','29','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('315','能效等级','29','1','0','1','一级\r\n二级\r\n三级\r\n四级\r\n五级','50');");
E_D("replace into `ty_goods_attribute` values('316','包装尺寸','30','1','0','0','aaa','50');");
E_D("replace into `ty_goods_attribute` values('317','毛重','30','1','0','0','bbbb','50');");
E_D("replace into `ty_goods_attribute` values('318','品牌','30','1','0','0','cccccc','50');");
E_D("replace into `ty_goods_attribute` values('319','型号','30','1','0','0','4444,555,666','50');");
E_D("replace into `ty_goods_attribute` values('320','能效等级','30','0','0','1','111,2222,3333','50');");
E_D("replace into `ty_goods_attribute` values('321','产品名称','31','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('322','品牌','31','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('323','电池容量','31','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('324','品牌','32','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('325','单反级别','32','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('326','屏幕尺寸','32','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('327','储存介质','32','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('328','像素','32','1','0','0','','50');");
E_D("replace into `ty_goods_attribute` values('332','嘻嘻哈哈嘻嘻哈哈','30','0','0','2','嘿嘿嘿,呵呵呵','51');");
E_D("replace into `ty_goods_attribute` values('333','','30','0','0','2','','50');");
E_D("replace into `ty_goods_attribute` values('334','111111111','34','1','0','1','aaaa,bbbbb','50');");
E_D("replace into `ty_goods_attribute` values('335','2222222','34','0','0','1','cccccc,ddddddd','50');");

require("../../inc/footer.php");
?>