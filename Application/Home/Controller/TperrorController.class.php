<?php
/**
 * tpshop
 * ============================================================================
 * * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * $Author: IT宇宙人 2015-08-10 $
 */ 
namespace Home\Controller;
use Think\Controller;
class TperrorController extends Controller {

	public function tp404($msg='',$url=''){
		$msg = empty($msg) ? '您可能输入了错误的网址，或者该页面已经不存在了哦。' : $msg;
		$this->assign('error',$msg);		
		$tpshop_config = array();
		$tp_config = M('config')->cache(true,TPSHOP_CACHE_TIME)->select();
		foreach($tp_config as $k => $v)
		{
			if($v['name'] == 'hot_keywords'){
				$tpshop_config['hot_keywords'] = explode('|', $v['value']);
			}
			$tpshop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
		}
		$this->assign('goods_category_tree', get_goods_category_tree());
		$brand_list = M('brand')->cache(true,TPSHOP_CACHE_TIME)->field('id,cat_id1,logo,is_hot')->where("cat_id1>0")->select();
		$this->assign('brand_list', $brand_list);
		$this->assign('tpshop_config', $tpshop_config);
		$this->display('Public/tp404');
	}
	
}