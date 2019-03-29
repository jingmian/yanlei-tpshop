<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * Author: dyr
 * Date: 2016-08-23
 */

namespace Home\Model;

use Think\Model\ViewModel;

/**
 * Class UserAddressModel
 * @package Home\Model
 */
class UserMessageViewModel extends ViewModel
{
    public $viewFields = array(
        'user_message' => array('rec_id', 'user_id', 'category', 'message_id', 'status', '_type' => 'LEFT'),
        'message' => array('message', 'send_time', 'type', '_on' => 'user_message.message_id=message.message_id')
    );
}