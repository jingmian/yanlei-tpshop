<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * Author: IT宇宙人
 * Date: 2015-09-09
 */

namespace Seller\Model;
use Think\Model;
class ShippingAreaModel extends Model {

    /**
     * 获取店铺的配送区域
     * @param $store_id
     * @return mixed
     */
    public function getShippingArea($store_id)
    {
        $shipping_areas = M('shipping_area')->where(array('store_id'=>$store_id))->select();
        foreach($shipping_areas as $key => $val){
            $shipping_areas[$key]['config'] = unserialize($shipping_areas[$key]['config']);
        }
        return $shipping_areas;
    }

}
