<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/2
 * Time: 17:08
 */
namespace data\model;
use data\model\BaseModel as BaseModel;

/**
 * 地区表
 */
class AreaModel extends BaseModel {

    /**
     * 表的声明
     */
    protected $table = 'sys_area';

    /**
     * 规则
     */
    protected $rule = [
        'area_id'   =>  '',
    ];

    /**
     * 信息
     */
    protected $msg = [
        'area_id'   =>  '',
    ];
}