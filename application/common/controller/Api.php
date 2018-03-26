<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/18
 * Time: 13:46
 */

namespace app\common\controller;

use app\common\library\Auth;

use think\exception\HttpResponseException;
use think\exception\ValidateException;
use think\Lang;
use think\Loader;
use think\Request;
use think\Response;

class Api {

    /**
     * @val Request Request 实例
     */
    protected $request;
    
    /**
     * @val bool 验证失败是否抛出异常
     */
    protected $failException = false;

    /**
     * @val bool 是否批量验证
     */
    protected $batchValidate = false;

    /**
     * @val array 前置操作方法列表
     */
    protected $beforeActionList = [];

    /**
     * @val array 无需登录的方法，同时也就不需要鉴权了
     */
    protected $noNeedLogin = [];

    /**
     * @val array 无需鉴权的方法，但需要登录
     */
    protected $noNeedRight = [];

    /**
     * @val Auth auth 权限
     */
    protected $auth = null;

    /**
     * @val 默认响应输出类型，支持json/xml
     */
    protected $responseType = 'json';

    /**
     * Api constructor.
     * @param $request
     */
    public function __construct(Request $request = null)
    {
        $this->request = is_null($request) ? Request::instance(): $request;

        /*控制器初始化*/
        $this->_initialize();

        /*前置操作方法*/
        if ($this->beforeActionList) {
            foreach ($this->beforeActionList as $method => $options) {
                is_numeric($method) ? $this->beforeActionList($options) : $this->beforeActionList($method, $options);
            }
        }
    }

    /**
     * @val 初始化操作
     */
    protected function initialize() {
        $this->auth = Auth::instance();
    }

}

?>