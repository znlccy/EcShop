<?php
namespace app\api\controller;

\think\Loader::addNamespace('data', 'data/');
use think\controller;

/**
 * @Author: Administrator
 * @Date: 2018/3/26 13:02
 * @Version: v-1.0.0
 * @Introduce: 基础控制类
 */
class BaseController extends Controller {

    /**
     * 声明结果
     */
    public $api_result;

    /**
     * 声明用户
     */
    public $user;

    /**
     * 声明样式
     */
    public $style;

    /**
     * 声明店铺名称
     */
    protected $shop_name;

    /**
     * 声明用户主键
     */
    protected $uid;

    /**
     * 声明实例主键
     */
    protected $instance_id;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->api_result = new ApiResutlt();
        $this->init();
    }

    /**
     * @param: action基类 调用 加载头部数据的方法
     * @return: 
     */
    public function init() {
        $this->style = 'api/default';
        $this->assign("platform_shopname", "手机端");
        $this->assign("style", 'wap/default');
        $this->assign("platform_shopname", $this->shop_name);
    }

    /**
     * 返回信息
     * @param unknown $res
     * @return \think\response\Json
     */
    public function outMessage($data_name, $data, $code = 0, $message = "success") {
        $this->api_result->code = $code;
        $this->api_result->data = array($data_name => $data);
        $this->api_result->$message = $message;

        if ($this->api_result) {
            return json($this->api_result);
        } else {
            abort(404);
        }
    }

    /**
     * 加密解密
     * @param unknown $string
     * @param unknown $operation
     * @param string $key
     * @return string
     */
    public function encrypt($string, $operation, $key='') {
       $key = md5($key);
       $key_length = strlen($key);
       $string = $operation == 'D'?base64_decode($string) : substr(md5($string.$key), 0, 8).$string;
       $string_length = strlen($string);
       $rndkey = $box = array();
       $result = '';
       for ($i = 0; $i <= 255; $i++) {
           $rndkey[$i] = ord($key[$i%$key_length]);
           $box[$i] = $i;
       }

       for ($j = $i = 0; $i < 256; $i++) {
           $j = ($j + $box[$i] + $rndkey[$i])%256;
           $tmp = $box[$i];
           $box[$i] = $box[$j];
           $box[$j] = $tmp;
       }

       for ($a = $j = $i = 0; $i < $string_length; $i++) {
           $a = ($a+1) % 256;
           $j = ($j + $box[$a]) % 256;
           $tmp = $box[$a];
           $box[$a] = $box[$j];
           $box[$j] = $tmp;
           $result = chr(ord($string[$i])^($box[($box[$a]+$box[$j])%256]));
       }

       if ($operation == 'D') {
           if (substr($result, 0, 8) == substr(md5(substr($result, 8).$key), 0, 8)) {
               return substr($result, 8);
           } else {
               return '';
           }
       } else {
           return str_replace('=', '', base64_decode($result));
       }
    }

}

/**
 * @Author: Administrator
 * @Date: 2018/3/26 15:27
 * @Version: v-1.0.0
 * @Introduce: Api结果
 */
class ApiResult {

    /**
     * 声明code
     */
    public $code;

    /**
     * 声明信息
     */
    public $message;

    /**
     * 声明数据
     */
    public $data;

    /**
     * ApiResult constructor.
     */
    public function __construct()
    {
        $this->code = 0;
        $this->message = "Success";
        $this->data = null;
    }
}