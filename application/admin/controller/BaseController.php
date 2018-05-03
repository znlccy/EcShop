<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/26
 * Time: 17:20
 * Comment: 基础控制器
 */
namespace app\admin\controller;

use think\Controller;

class BaseController extends Controller {

    /**
     * 声明用户
     */
    protected $user = null;

    /**
     * 声明网站
     */
    protected $website = null;

    /**
     * 声明用户主键
     */
    protected $uid;

    /**
     * 声明实例主键
     */
    protected $instance_id;

    /**
     * 声明实例名称
     */
    protected $instance_name;

    /**
     * 声明用户名
     */
    protected $user_name;

    /**
     * 声明用户头像
     */
    protected $user_headimg;

    /**
     * 声明模型
     */
    protected $module = null;

    /**
     * 声明控制器
     */
    protected $controller = null;

    /**
     * 声明操作方法
     */
    protected $action = null;

    /**
     * 声明模型信息
     */
    protected $module_info = null;

    /**
     * 声明root主键
     */
    protected $rootid = null;

    /**
     * 声明模型主键
     */
    protected $moduleid = null;

    /**
     * 声明第二个菜单主键 二级菜单module_id 手机自定义模板临时添加，用来查询三级菜单
     */
    protected $second_menu_id = null;


}