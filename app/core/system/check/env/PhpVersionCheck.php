<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: chenqianhao <68527761@qq.com>
// +----------------------------------------------------------------------

namespace app\core\system\check\env;


use app\core\system\check\BaseENVCheck;

class PhpVersionCheck extends BaseENVCheck {
    public $name  = 'PHP版本';
    public $min = '5.5.9';
    public $best = '5.5.9';
    /**
     * 查询服务器php版本
     * @return string
     */
    function getCurrentValue() {
        return PHP_VERSION;
    }
    /**
     * 查询当前系统是否最优配置
     *@return int
     */
    function ComparisonConfig() {
        if($this->getCurrentValue() >= intval(str_replace('>=','',$this->best))){
            return 1;
        }else{
            return 0;
        }
    }
}
