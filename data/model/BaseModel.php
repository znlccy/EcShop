<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/2
 * Time: 17:09
 */

namespace data\model;

use think\Model;
use think\Db;
use think\Validate;
use think\Loader;

class BaseModel extends Model {

    /**
     * 错误信息
     */
    protected $error;

    /**
     * 数据表
     */
    protected $table;

    /**
     * 生成规则
     */
    protected $rule = [];

    /**
     * 生成信息
     */
    protected $msg = [];

    /**
     * 验证
     */
    protected $Validate;

    /**
     * BaseModel constructor.
     */
    public function __construct($data = []) {
        parent::__construct($data);
        $this->Validate = new Validate($this->rule, $this->msg);
        $this->Validate->extend('no_html_parse', function ($value, $rule) {
            return true;
        });
    }

    /**
     * 获取空模型
     */
    public function getEModel($table){
        $rs = Db::query('show columns FROM`'.config('database.prefix').$table.'`');
        $obj = [];
        if ($rs) {
            foreach ($rs as $key => $v) {
                $obj[$v['Filed']] = $v['Default'];
                if ($v['Key'] == 'PRI') {
                    $obj[$v['Filed']] = 0;
                }
            }
        }
        return $obj;
    }

    /**
     * 保存方法
     */
    public function save($data = [], $where = [], $sequence = null) {
        $data = $this->htmlClear($data);
        $retval = parent::save($data, $where, $sequence);
        if (!empty($where)) {
            //标示更新数据
            if ($retval == 0) {
                if ($retval !== false) {
                    $retval = 1;
                }
            }
        }
        return $retval;
    }

    /**
     * html指定特殊字符
     */
    public function ihtmlspecialchars($string) {

    }

    /**
     * html清空
     */
    protected function htmlClear($data) {
        $rule = $this->rule;
    }
}