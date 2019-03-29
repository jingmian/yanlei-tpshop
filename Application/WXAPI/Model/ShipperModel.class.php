<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * Author: 当燃      
 * Date: 2015-09-09
 */

namespace WXAPI\Model;

use Think\Model;

/**
 * Class UserModel
 * @package Admin\Model
 */
class ShipperModel extends Model//Relation
{
    protected $trueTableName = 'lp_shipper';
    protected $dbName = 'ty_logistics_platform';
}