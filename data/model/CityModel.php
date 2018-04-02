<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/2
 * Time: 17:09
 */

namespace data\model;

use think\Model;
use data\model\BaseModel as BaseModel;

class CityModel extends BaseModel {

    /**
     * 表的声明
     */
    protected $table = 'sys_city';

    /**
     * 生成规则
     */
    protected $rule = [
        'city_id'   =>  '',
    ];

    /**
     * 声明信息
     */
    protected $msg = [
        'city_id'   =>  '',
    ];

}