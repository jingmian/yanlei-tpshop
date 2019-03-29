<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_system_menu`;");
E_C("CREATE TABLE `ty_system_menu` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '权限名字',
  `group` varchar(20) DEFAULT NULL COMMENT '所属分组',
  `right` text COMMENT '权限码(控制器+动作)',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '删除状态 1删除,0正常',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `ty_system_menu` values('1','文章管理','content','ArticleController@articleList,ArticleController@article,ArticleController@aticleHandle','0');");
E_D("replace into `ty_system_menu` values('2','文章分类','content','ArticleController@categoryList,ArticleController@category,ArticleController@categoryHandle','0');");
E_D("replace into `ty_system_menu` values('3','帮助管理','content','ArticleController@help_list','0');");
E_D("replace into `ty_system_menu` values('4','公告管理','content','ArticleController@notice_list','0');");
E_D("replace into `ty_system_menu` values('5','网站设置','system','SystemController@index,SystemController@handle','0');");
E_D("replace into `ty_system_menu` values('6','权限资源','system','SystemController@right_list,SystemController@edit_right','0');");
E_D("replace into `ty_system_menu` values('7','前台导航设置','system','SystemController@navigationList,SystemController@addEditNav,SystemController@delNav','0');");
E_D("replace into `ty_system_menu` values('8','管理员管理','system','AdminController@index,AdminController@admin_info,AdminController@adminHandle','0');");
E_D("replace into `ty_system_menu` values('9','角色管理','system','AdminController@role,AdminController@role_info,AdminController@roleSave,AdminController@roleDel','0');");
E_D("replace into `ty_system_menu` values('10','供应商管理','system','AdminController@supplier,AdminController@supplier_info,AdminController@supplierHandle','0');");
E_D("replace into `ty_system_menu` values('11','会员管理','member','UserController@index,UserController@ajaxindex,UserController@detail,UserController@address,UserController@delete','0');");
E_D("replace into `ty_system_menu` values('12','会员资金','member','UserController@account_log,UserController@account_edit','0');");
E_D("replace into `ty_system_menu` values('13','编辑会员','member','UserController@ajax_distribut_tree,UserController@search_user,UserController@add_user','0');");
E_D("replace into `ty_system_menu` values('61','店铺查看','goods','StoreController@store_list,StoreController@store_info','0');");
E_D("replace into `ty_system_menu` values('14','会员等级','member','UserController@level,UserController@levelList,UserController@levelHandle','0');");
E_D("replace into `ty_system_menu` values('15','商品类型','goods','GoodsController@goodsTypeList,GoodsController@addEditGoodsType,GoodsController@delGoodsType','0');");
E_D("replace into `ty_system_menu` values('16','商品编辑','goods','GoodsController@addEditGoods,GoodsController@delGoods,GoodsController@del_goods_images','0');");
E_D("replace into `ty_system_menu` values('17','商品列表','goods','GoodsController@goodsList,GoodsController@ajaxGoodsList,GoodsController@updateField','0');");
E_D("replace into `ty_system_menu` values('18','商品规格','goods','GoodsController@ajaxGetSpecList,GoodsController@delGoodsSpec,GoodsController@addEditSpec,GoodsController@ajaxSpecList,GoodsController@specList,GoodsController@ajaxGetSpecSelect','0');");
E_D("replace into `ty_system_menu` values('19','商品分类','goods','GoodsController@categoryList,GoodsController@addEditCategory,GoodsController@delGoodsCategory','0');");
E_D("replace into `ty_system_menu` values('20','商品属性','goods','GoodsController@ajaxGetAttrList,GoodsController@goodsAttributeList,GoodsController@ajaxGoodsAttributeList,GoodsController@addEditGoodsAttribute,GoodsController@ajaxGetAttrInput','0');");
E_D("replace into `ty_system_menu` values('21','商品品牌','goods','GoodsController@brandList,GoodsController@delBrand,GoodsController@addEditBrand','0');");
E_D("replace into `ty_system_menu` values('22','广告列表','content','AdController@adList,AdController@adHandle,AdController@ad,AdController@changeAdField','0');");
E_D("replace into `ty_system_menu` values('23','广告位','content','AdController@position,AdController@positionList,AdController@positionHandle','0');");
E_D("replace into `ty_system_menu` values('24','团购管理','marketing','PromotionController@group_buy,PromotionController@group_buy_list,PromotionController@groupbuyHandle','0');");
E_D("replace into `ty_system_menu` values('25','限时抢购','marketing','PromotionController@flash_sale,PromotionController@flash_sale_info,PromotionController@flash_sale_del','0');");
E_D("replace into `ty_system_menu` values('26','促销管理','marketing','PromotionController@prom_goods_list,PromotionController@prom_goods_info,PromotionController@prom_goods_save,PromotionController@prom_goods_del,PromotionController@get_goods,PromotionController@search_goods','0');");
E_D("replace into `ty_system_menu` values('27','订单列表','order','OrderController@index,OrderController@ajaxindex,OrderController@detail','0');");
E_D("replace into `ty_system_menu` values('28','订单发货','order','OrderController@deliveryHandle,OrderController@delivery_info,OrderController@delivery_list','0');");
E_D("replace into `ty_system_menu` values('29','退换货处理','order','OrderController@return_del,OrderController@return_info,OrderController@add_return_goods,OrderController@ajax_return_list','0');");
E_D("replace into `ty_system_menu` values('30','拆分订单','order','OrderController@split_order,OrderController@search_goods','0');");
E_D("replace into `ty_system_menu` values('31','修改订单','system','OrderController@edit_order,OrderController@search_goods','0');");
E_D("replace into `ty_system_menu` values('32','添加订单','order','OrderController@add_order,OrderController@search_goods','0');");
E_D("replace into `ty_system_menu` values('33','处理订单','order','OrderController@pay_cancel,OrderController@delete_order,OrderController@order_action,OrderController@editprice,OrderController@order_log','0');");
E_D("replace into `ty_system_menu` values('34','导出订单','order','OrderController@export_order','0');");
E_D("replace into `ty_system_menu` values('35','打印订单','order','OrderController@order_print,OrderController@shipping_print','0');");
E_D("replace into `ty_system_menu` values('36','插件列表','tools','PluginController@index,PluginController@install,PluginController@setting','0');");
E_D("replace into `ty_system_menu` values('37','打印设置','tools','PluginController@shipping_list,PluginController@shipping_desc,PluginController@shipping_print,PluginController@edit_shipping_print,PluginController@shipping_list_edit,PluginController@del_area','0');");
E_D("replace into `ty_system_menu` values('38','数据备份','tools','ToolsController@index,ToolsController@backup,ToolsController@optimize,ToolsController@repair','0');");
E_D("replace into `ty_system_menu` values('39','数据还原','tools','ToolsController@restore,ToolsController@restoreData,ToolsController@restoreUpload,ToolsController@downFile,ToolsController@delSqlFiles','0');");
E_D("replace into `ty_system_menu` values('40','地区管理','tools','ToolsController@region,ToolsController@regionHandle','0');");
E_D("replace into `ty_system_menu` values('41','公众号设置','marketing','WechatController@index,WechatController@setting,WechatController@get_access_token,WechatController@select_goods','0');");
E_D("replace into `ty_system_menu` values('42','文本回复','tools','WechatController@text,WechatController@add_text,WechatController@del_text','0');");
E_D("replace into `ty_system_menu` values('43','微信菜单','tools','WechatController@menu,WechatController@del_menu,WechatController@pub_menu','0');");
E_D("replace into `ty_system_menu` values('44','图文回复','tools','WechatController@img,WechatController@add_img,WechatController@del_img,WechatController@preview','0');");
E_D("replace into `ty_system_menu` values('45','模板管理','system','TemplateController@templateList,TemplateController@changeTemplate','0');");
E_D("replace into `ty_system_menu` values('46','销售概况','count','ReportController@index,ReportController@finance,ReportController@user','0');");
E_D("replace into `ty_system_menu` values('47','销售排行','count','ReportController@saleTop,ReportController@userTop,ReportController@saleList','0');");
E_D("replace into `ty_system_menu` values('48','专题管理','content','TopicController@topic,TopicController@topicList,TopicController@topicHandle','0');");
E_D("replace into `ty_system_menu` values('49','操作日志','system','AdminController@log,OrderController@order_log','0');");
E_D("replace into `ty_system_menu` values('50','评论咨询','goods','CommentController@index,CommentController@detail,CommentController@ask_list,CommentController@ajax_ask_list,CommentController@del,CommentController@op,CommentController@consult_info,CommentController@ask_handle','0');");
E_D("replace into `ty_system_menu` values('51','优惠券','marketing','CouponController@coupon_info,CouponController@index,CouponController@make_coupon,CouponController@ajax_get_user,CouponController@send_coupon,CouponController@send_cancel,CouponController@del_coupon,CouponController@coupon_list,CouponController@coupon_list_del','0');");
E_D("replace into `ty_system_menu` values('52','友情链接','content','ArticleController@link,ArticleController@linkList,ArticleController@linkHandle','0');");
E_D("replace into `ty_system_menu` values('53','分销管理','marketing','DistributController@set,DistributController@remittance,DistributController@tree,DistributController@rebate_log,DistributController@ajax_lower,DistributController@withdrawals,DistributController@editRebate,DistributController@delWithdrawals,DistributController@editWithdrawals','0');");
E_D("replace into `ty_system_menu` values('60','自提点管理','system','PickupController@index,PickupController@ajaxPickupList,PickupController@add,PickupController@edit_address','0');");
E_D("replace into `ty_system_menu` values('62','店铺审核','system','StoreController@apply_list,StoreController@store_class_info,StoreController@apply_class_save,StoreController@apply_info,StoreController@review,StoreController@apply_del','0');");
E_D("replace into `ty_system_menu` values('63','自营店列表','system','StoreController@store_own_list','0');");
E_D("replace into `ty_system_menu` values('64','店铺分类','system','StoreController@class_info,StoreController@store_class,StoreController@class_info_save,StoreController@grade_info_save,StoreController@grade_info,StoreController@store_grade','0');");
E_D("replace into `ty_system_menu` values('65','店铺管理','system','StoreController@store_list,StoreController@store_check,StoreController@store_edit,StoreController@store_info_edit,StoreController@store_del','0');");
E_D("replace into `ty_system_menu` values('66','财务结算','count','FinanceController@store_remittance,FinanceController@remittance,FinanceController@store_withdrawals,FinanceController@delStoreWithdrawals,FinanceController@editStoreWithdrawals,FinanceController@withdrawals,FinanceController@delWithdrawals,FinanceController@editWithdrawals,FinanceController@order_statis','0');");

require("../../inc/footer.php");
?>