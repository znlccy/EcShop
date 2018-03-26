<?php
namespace app\api\exception;

use Exception;
use think\exception\Handle;
use think\exception\HttpException;

/**
 * @Author: Administrator
 * @Date: 2018/3/26 10:18
 * @Version: v-1.0.0
 * @Introduce: 异常处理类
 */
class Http extends Handle {
    public function render(Exception $e)
    {
        if ($e instanceof HttpException) {
            $statusCode = $e->getStatusCode();
        }

        if (!isset($statusCode)) {
            $statusCode = 500;
        }

        $result = [
            'code' => $statusCode,
            'msg' => $e->getMessage(),
            'time' => $_SERVER['REQUEST_TIME']
        ];
        return json($result, $statusCode);
    }
}