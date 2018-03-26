<?php
/**
 * @Author: Administrator
 * @Date: 2018/3/5 16:51
 * @Version: v-1.0.0
 * @Introduce: 用户管理
 */

namespace app\api\controller;

use think\Controller;

class User extends Controller {

    /*
     * 用户注册
     */
    public function userRegister() {
        echo "User register success";
    }

    /*
     * 用户登录
     */
    public function userLogin() {
        echo "User login success";
    }

    /*
     * 用户忘记密码
     */
    public function userForgetPass() {
        echo "User forget password";
    }

}
?>